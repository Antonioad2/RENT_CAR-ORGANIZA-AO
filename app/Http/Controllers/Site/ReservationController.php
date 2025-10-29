<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Car;
use App\Model\Client;
use App\Model\Driver;
use App\Model\Reserve;
use App\Mail\ConfirmacaoReservaMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Model\Card;
use App\Model\CompanyAccount;
use Barryvdh\DomPDF\Facade\Pdf;

class ReservationController extends Controller
{
    // ----------------- Etapa 1 -----------------
    public function step1(Request $request, $car_id)
    {
        $car = Car::findOrFail($car_id);

        Log::info('Valores recebidos no step1', $request->only([
            'start_date',
            'end_date',
            'delivery_time',
            'return_time'
        ]));


        // Converter datas para formato MySQL
        $startDate = \Carbon\Carbon::createFromFormat('d-m-Y', $request->input('start_date'))->format('Y-m-d');
        $endDate   = \Carbon\Carbon::createFromFormat('d-m-Y', $request->input('end_date'))->format('Y-m-d');

        $delivery_time = \Carbon\Carbon::createFromFormat('H:i:s', $request->input('delivery_time'))->format('H:i:s');
        $return_time   = \Carbon\Carbon::createFromFormat('H:i:s', $request->input('return_time'))->format('H:i:s');


        $data = [
            'car_id'          => $car->id,
            'pickup_location' => $request->input('pickup_location'),
            'return_location' => $request->input('return_location'),
            'start_date'      => $startDate,
            'end_date'        => $endDate,
            'delivery_time'   => $delivery_time,
            'return_time'   => $return_time,

        ];

        // 🔹 Salvar na sessão
        session([
            'reservation_data' => $data,
            'car_id'           => $car->id,      // <── Importante
        ]);

        return redirect()->route('site.reservation.checkout')
            ->with('reservation_stage', 1);
    }

    // ----------------- Etapa 2 -----------------
    public function step2(Request $request, $car_id)
    {
        $data = session('reservation_data');
        $car = Car::findOrFail($car_id);

        $start = new \Carbon\Carbon($data['start_date']);
        $end   = new \Carbon\Carbon($data['end_date']);
        $delivery = new \Carbon\Carbon($data['delivery_time']);
        $return = new \Carbon\Carbon($data['return_time']);
        $days  = $end->diffInDays($start) ?: 1;

        $resources    = $request->resources ?? [];
        $resourcesTotal = collect($resources)->sum(
            fn($r) => config("resources.extras.{$r}.price", 0)
        );

        $driverTotal = 0;
        if ($request->driver_id) {
            $driver = Driver::findOrFail($request->driver_id);
            $driverTotal = $driver->daily_price * $days;
        }

        $extrasInput = $request->input('extras', '');
        $extrasArray = $extrasInput !== '' ? explode(',', $extrasInput) : [];

        session([
            'reservation_services' => [
                'extras'    => $extrasArray,
                'driver_id' => $request->input('driver_id'),
            ]
        ]);

        return redirect()->route('site.reservation.checkout')
            ->with('reservation_stage', 2);
    }

    // ----------------- Etapa 3 -----------------
    public function step3(Request $request, $car_id)
{
    $client = Client::firstOrCreate(
        ['email' => $request->email],
        [
            'name'       => $request->name,
            'birth_date' => $request->birth_date,
            'phone'      => $request->phone,
            'address'    => $request->address,
        ]
    );

    session(['reservation_client' => $client]);

    // Chama diretamente o método confirm, passando os dados necessários
    return $this->confirm($request);
    Log::info('Formulário recebido em confirm', $request->all());
}

    // ----------------- Confirmação -----------------
    /* public function confirm(Request $request)
    {
        $data         = session('reservation_data');
        $dataServices = session('reservation_services');

        Log::info('Confirm(): dados sessão', [
            'data' => $data,
            'dataServices' => $dataServices,
            'request' => $request->all(),
        ]);

        if (!$data || !$dataServices) {
            return redirect()->route('site.home')
                ->with('error', 'Sessão expirada, faça a reserva novamente.');
        }

        $client = session('reservation_client');
        $car    = Car::findOrFail($data['car_id']);

        $start = new \Carbon\Carbon($data['start_date']);
        $end   = new \Carbon\Carbon($data['end_date']);
        $days  = $end->diffInDays($start) ?: 1;
        $price = $days * $car->price;

        // 🔹 Motorista
        $driver = null;
        if (!empty($dataServices['driver_id'])) {
            $driver = Driver::find($dataServices['driver_id']);
            $price += $driver ? $days * $driver->daily_price : 0;
        }

        // 🔹 Extras
        if (!empty($dataServices['extras'])) {
            foreach ($dataServices['extras'] as $extra) {
                $config = config("resources.extras.$extra");
                $price += $config['price'] ?? 0;
            }
        }

        DB::beginTransaction();
        try {
            // 🔹 Verifica se já existe um cartão com esse número e cliente
            $card = Card::where('client_id', $client->id)
                ->where('card_number', $request->card_number)
                ->lockForUpdate()
                ->first();

            // 🔹 Se não existir, cria automaticamente com dados do cliente e do request
            if (!$card) {
                Log::info('Nenhum cartão encontrado, criando novo cartão para o cliente', [
                    'client_id' => $client->id,
                    'card_number' => $request->card_number,
                    'bank' => $request->bank,
                ]);

                $card = Card::create([
                    'client_id'  => $client->id,
                    'card_number' => $request->card_number,
                    'card_name'   => $client->name,
                    'bank'        => $request->bank ?? 'BAI', // banco informado ou padrão
                    'balance'     => 200000, // saldo inicial
                ]);
            }

            // 🔹 Verifica saldo suficiente
            if ($card->balance < $price) {
                Log::warning('Falha no pagamento: ', [
                    'motivo' => 'Saldo Insuficiente',
                    'saldo'  => $card->balance,
                    'necessário' => $price
                ]);
                return back()
                    ->withInput()
                    ->with('error', 'Saldo insuficiente. Carregue a sua conta.');
            }

            // 🔹 Atualiza saldos
            $card->balance -= $price;
            $card->save();

            $company = CompanyAccount::first();
            $company->balance += $price;
            $company->save();

            // 🔹 Cria reserva
            $reserva = Reserve::create([
                'car_id'          => $car->id,
                'client_id'       => $client->id,
                'driver_id'       => $driver ? $driver->id : null,
                'pickup_location' => $data['pickup_location'],
                'return_location' => $data['return_location'],
                'start_date'      => $data['start_date'],
                'end_date'        => $data['end_date'],
                'delivery_time'   => $data['delivery_time'],
                'return_time'     => $data['return_time'],
                'resources'       => !empty($dataServices['extras']) ? json_encode($dataServices['extras']) : null,
                'total_amount'    => $price,
                'status'          => 'in_progress',
            ]);

            session(['last_reservation_id' => $reserva->id]);

            DB::commit();

            Log::info('Reserva criada com sucesso', ['reserva_id' => $reserva->id]);

            session(['reservation_stage' => 4]);

            try {
                Mail::to($reserva->client->email)->send(new ConfirmacaoReservaMail($reserva));
            } catch (\Exception $e) {
                Log::error('Erro ao enviar email: ' . $e->getMessage());
            }

            // 🔹 Limpa sessão (mantendo o stage e car_id)
            session()->forget(['reservation_data', 'reservation_services', 'reservation_client']);

            return redirect()->route('car.confirmed', ['id' => $reserva->id])
                ->with('success', 'Reserva confirmada!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Erro no pagamento: ' . $e->getMessage()]);
        }
    } */
public function confirm(Request $request)
{
    $data = session('reservation_data');
    $dataServices = session('reservation_services');

    Log::info('Confirm(): dados sessão', [
        'data' => $data,
        'dataServices' => $dataServices,
        'request' => $request->all(),
    ]);

    // Validar os dados do formulário
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'address' => 'required|string|max:255',
        'bi' => 'required|string|max:50',
        'remeber' => 'required', // Para o checkbox de termos
    ]);

    if (!$data || !$dataServices) {
        Log::warning('Sessão incompleta ou expirada', [
            'data' => $data,
            'dataServices' => $dataServices,
        ]);
        return redirect()->route('site.reservation.checkout')
            ->with('error', 'Sessão expirada, faça a reserva novamente.')
            ->with('reservation_stage', 1);
    }

    $car = Car::findOrFail($data['car_id']);

    $start = new \Carbon\Carbon($data['start_date']);
    $end = new \Carbon\Carbon($data['end_date']);
    $days = $end->diffInDays($start) ?: 1;
    $price = $days * $car->price;

    // 🔹 Motorista
    $driver = null;
    if (!empty($dataServices['driver_id'])) {
        $driver = Driver::find($dataServices['driver_id']);
        $price += $driver ? $days * $driver->daily_price : 0;
    }

    // 🔹 Extras
    if (!empty($dataServices['extras']) && is_array($dataServices['extras'])) {
        foreach ($dataServices['extras'] as $extra) {
            if (!empty($extra)) { // Ignorar extras vazios
                $config = config("resources.extras.$extra");
                $price += $config['price'] ?? 0;
            }
        }
    }

    DB::beginTransaction();
    try {
        // 🔹 Criar ou atualizar cliente
        $client = Client::updateOrCreate(
            ['email' => $validated['email']],
            [
                'name' => $validated['name'],
                'phone' => $validated['phone'],
                'address' => $validated['address'],
                'birth_date' => $request->birth_date, // Opcional
            ]
        );

        // 🔹 Cria reserva
        $reserva = Reserve::create([
            'car_id' => $car->id,
            'client_id' => $client->id,
            'driver_id' => $driver ? $driver->id : null,
            'pickup_location' => $data['pickup_location'],
            'return_location' => $data['return_location'],
            'start_date' => $data['start_date'],
            'end_date' => $data['end_date'],
            'delivery_time' => $data['delivery_time'],
            'return_time' => $data['return_time'],
            'resources' => !empty($dataServices['extras']) && is_array($dataServices['extras']) ? json_encode(array_filter($dataServices['extras'])) : null,
            'total_amount' => $price,
            'status' => 'in_progress',
        ]);

        session(['last_reservation_id' => $reserva->id]);
        session(['reservation_stage' => 4]);

        DB::commit();

        Log::info('Reserva criada com sucesso', ['reserva_id' => $reserva->id]);

        // Enviar email de confirmação
        try {
            Mail::to($client->email)->send(new ConfirmacaoReservaMail($reserva));
        } catch (\Exception $e) {
            Log::error('Erro ao enviar email: ' . $e->getMessage());
        }

        // Limpar sessão
        session()->forget(['reservation_data', 'reservation_services', 'reservation_client']);

        return redirect()->route('car.confirmed', ['id' => $reserva->id])
            ->with('success', 'Reserva confirmada!');
    } catch (\Exception $e) {
        DB::rollBack();
        Log::error('Erro ao criar reserva: ' . $e->getMessage());
        return redirect()->route('site.reservation.checkout')
            ->with('error', 'Erro ao criar reserva: ' . $e->getMessage())
            ->with('reservation_stage', 2);
    }
}

    // ----------------- NOVO: Checkout -----------------
    /* public function checkout()
    {
        $stage = session('reservation_stage', 1);
        $carId = session('car_id');
        $car   = $carId ? Car::find($carId) : null;

        if (!$car) {
            return redirect()->route('home')
                ->with('error', 'Carro não encontrado ou sessão expirada.');
        }

        // 🟢 Lê dados guardados nos passos anteriores
        $data        = session('reservation_data', []);
        $services    = session('reservation_services', []);
        $extrasKeys  = $services['extras'] ?? [];
        $driverId    = $services['driver_id'] ?? null;

        // ➕ Adiciona estas linhas:
        $pickup_location = $data['pickup_location'] ?? '';
        $return_location = $data['return_location'] ?? '';
        $start_date     = $data['start_date'] ?? '';
        $end_date       = $data['end_date'] ?? '';
        $delivery_time  = $data['delivery_time'] ?? '';
        $return_time    = $data['return_time'] ?? '';


        // 🟢 Calcula dias e preço base
        $days  = 1;
        $price = $car->price;
        if (!empty($data['start_date']) && !empty($data['end_date'])) {
            $start = new \Carbon\Carbon($data['start_date']);
            $end   = new \Carbon\Carbon($data['end_date']);
            $delivery   = new \Carbon\Carbon($data['delivery_time']);
            $return   = new \Carbon\Carbon($data['return_time']);
            $days  = $end->diffInDays($start) ?: 1;
            $price = $days * $car->price;
        }

        // 🟢 Monta extras selecionados
        $selectedExtras = [];
        $extrasTotal    = 0;
        foreach ((array)$extrasKeys as $key) {
            $extra = config("resources.extras.$key");
            if ($extra) {
                $selectedExtras[] = $extra;
                $extrasTotal += $extra['price'];
            }
        }

        // 🟢 Monta motorista
        $selectedDriver = null;
        $driverTotal    = 0;
        if ($driverId) {
            $selectedDriver = Driver::find($driverId);
            if ($selectedDriver) {
                $driverTotal = $selectedDriver->daily_price * $days;
            }
        }

        // 🟢 Calcula total
        $totalEstimate = $price + $extrasTotal + $driverTotal;

        switch ($stage) {
            case 1:
                $drivers = Driver::all();
                return view('site.reservation.book-checkout.index', compact(
                    'car',
                    'pickup_location',
                    'return_location',
                    'start_date',
                    'end_date',
                    'delivery_time',
                    'return_time',
                    'drivers',
                    'selectedExtras',
                    'selectedDriver',
                    'totalEstimate'
                ));
            case 2:
                return view('site.reservation.details-checkout.index', compact(
                    'car',
                    'pickup_location',
                    'return_location',
                    'start_date',
                    'end_date',
                    'delivery_time',
                    'return_time',
                    'selectedExtras',
                    'selectedDriver',
                    'totalEstimate'
                ));
            case 3:
                return view('site.reservation.payment.index', compact(
                    'car',
                    'pickup_location',
                    'return_location',
                    'start_date',
                    'end_date',
                    'delivery_time',
                    'return_time',
                    'selectedExtras',
                    'selectedDriver',
                    'totalEstimate'
                ));
            case 4:
                return redirect()->route('site.car-confirmed', compact(
                    'car',
                    'pickup_location',
                    'return_location',
                    'start_date',
                    'end_date',
                    'delivery_time',
                    'return_time',
                    'selectedExtras',
                    'selectedDriver',
                    'totalEstimate'
                ));
            default:
                return redirect()->route('home')
                    ->with('error', 'Sessão inválida ou finalizada.');
        }
    } */
   public function checkout()
{
    $stage = session('reservation_stage', 1);
    $carId = session('car_id');
    $car = $carId ? Car::find($carId) : null;

    if (!$car) {
        return redirect()->route('home')
            ->with('error', 'Carro não encontrado ou sessão expirada.');
    }

    // 🟢 Lê dados guardados nos passos anteriores
    $data = session('reservation_data', []);
    $services = session('reservation_services', []);
    $extrasKeys = $services['extras'] ?? [];
    $driverId = $services['driver_id'] ?? null;

    $pickup_location = $data['pickup_location'] ?? '';
    $return_location = $data['return_location'] ?? '';
    $start_date = $data['start_date'] ?? '';
    $end_date = $data['end_date'] ?? '';
    $delivery_time = $data['delivery_time'] ?? '';
    $return_time = $data['return_time'] ?? '';

    // 🟢 Calcula dias e preço base
    $days = 1;
    $price = $car->price;
    if (!empty($data['start_date']) && !empty($data['end_date'])) {
        $start = new \Carbon\Carbon($data['start_date']);
        $end = new \Carbon\Carbon($data['end_date']);
        $days = $end->diffInDays($start) ?: 1;
        $price = $days * $car->price;
    }

    // 🟢 Monta extras selecionados
    $selectedExtras = [];
    $extrasTotal = 0;
    foreach ((array)$extrasKeys as $key) {
        $extra = config("resources.extras.$key");
        if ($extra) {
            $selectedExtras[] = $extra;
            $extrasTotal += $extra['price'];
        }
    }

    // 🟢 Monta motorista
    $selectedDriver = null;
    $driverTotal = 0;
    if ($driverId) {
        $selectedDriver = Driver::find($driverId);
        if ($selectedDriver) {
            $driverTotal = $selectedDriver->daily_price * $days;
        }
    }

    // 🟢 Calcula total
    $totalEstimate = $price + $extrasTotal + $driverTotal;

    switch ($stage) {
        case 1:
            $drivers = Driver::all();
            return view('site.reservation.book-checkout.index', compact(
                'car',
                'pickup_location',
                'return_location',
                'start_date',
                'end_date',
                'delivery_time',
                'return_time',
                'drivers',
                'selectedExtras',
                'selectedDriver',
                'totalEstimate'
            ));
        case 2:
            return view('site.reservation.details-checkout.index', compact(
                'car',
                'pickup_location',
                'return_location',
                'start_date',
                'end_date',
                'delivery_time',
                'return_time',
                'selectedExtras',
                'selectedDriver',
                'totalEstimate'
            ));
        case 3:
        case 4:
            return redirect()->route('car.confirmed', ['id' => session('last_reservation_id')]);
        default:
            return redirect()->route('home')
                ->with('error', 'Sessão inválida ou finalizada.');
    }
}


    public function generatePdf($id)
    {
        Log::info('Max execution time: ' . ini_get('max_execution_time')); // Log do valor atual
        ini_set('max_execution_time', 300); // Forçar 300 segundos temporariamente
        ini_set('memory_limit', '512M'); // Aumentar memória

        $reservation = Reserve::with(['car', 'client', 'driver'])->findOrFail($id);
        $reservation->decoded_resources = $reservation->resources
            ? json_decode($reservation->resources, true)
            : [];

        $pdf = Pdf::loadView('site.reservation.pdf.index', compact('reservation'))
            ->setPaper('a4', 'portrait');

        return $pdf->download("reserva_{$reservation->id}.pdf");
    }
}
