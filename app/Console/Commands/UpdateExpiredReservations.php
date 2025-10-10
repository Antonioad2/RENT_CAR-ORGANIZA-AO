<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Model\Reserve;
use App\Model\Car;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class UpdateExpiredReservations extends Command
{
    protected $signature = 'reservations:update-expired';
    protected $description = 'Atualiza reservas expiradas para concluídas e libera os carros associados';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Obter a data e hora atuais
        $now = Carbon::now();

        // Buscar reservas em progresso cuja data e hora de término já passaram
        $expiredReservations = Reserve::where('status', 'in_progress')
            ->whereRaw("CONCAT(end_date, ' ', return_time) <= ?", [$now->toDateTimeString()])
            ->get();

        foreach ($expiredReservations as $reservation) {
            // Iniciar uma transação para garantir consistência
            \DB::beginTransaction();
            try {
                // Atualizar o status da reserva para "completed"
                $reservation->update(['status' => 'completed']);

                // Atualizar o status do carro para "available"
                $car = Car::find($reservation->car_id);
                if ($car) {
                    $car->update(['status' => 'available']);
                }

                \DB::commit();
                Log::info("Reserva #{$reservation->id} marcada como concluída e carro #{$reservation->car_id} liberado.");
            } catch (\Exception $e) {
                \DB::rollBack();
                Log::error("Erro ao atualizar reserva #{$reservation->id}: {$e->getMessage()}");
            }
        }

        $this->info('Reservas expiradas foram atualizadas com sucesso!');
    }
}