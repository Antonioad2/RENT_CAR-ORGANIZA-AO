<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <style>
        @page {
            margin: 50px 35px;
        }

        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 13px;
            color: #111; /* Preto mais forte */
            line-height: 1.5;
            background-image: url('{{ public_path("assets/user/img/ango-cars-2.png") }}');
            background-size: 50%; /* Reduced background image size */
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-color: rgba(255, 255, 255, 0.9); /* White overlay for readability */
            position: relative;
        }

        /* Ensure content is readable over the background */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.7); /* Semi-transparent white layer */
            z-index: -1;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 3px solid #f7c600; /* Amarelo forte */
            padding-bottom: 10px;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        header img {
            height: 60px;
        }

        h2 {
            color: #000; /* Preto */
            margin: 0;
            font-size: 22px;
        }

        h4 {
            color: #444;
            margin: 5px 0 10px 0;
        }

        .section {
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        /* Mensagem de sucesso */
        .success {
            background-color: #fff8d6; /* Amarelo claro */
            border: 1px solid #f7c600;
            color: #111;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 20px;
            font-weight: bold;
            position: relative;
            z-index: 1;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 8px;
            font-size: 13px;
            position: relative;
            z-index: 1;
        }

        td, th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background: #f7c600; /* Cabeçalho amarelo */
            color: #000;         /* Texto preto */
            text-align: left;
        }

        tr:nth-child(even) {
            background: #fdfdfd;
        }

        .total {
            font-weight: bold;
            background: #000; /* Amarelo */
            color: #000;
        }

        .footer {
            text-align: center;
            font-size: 11px;
            color: #555;
            margin-top: 30px;
            border-top: 1px solid #f7c600;
            padding-top: 10px;
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body>

    <!-- Cabeçalho -->
    <header>
        <div>
            <img src="{{ public_path('assets/user/img/ango-cars-2.png') }}" >
        </div>
        <div>
            <h2>Reserva Confirmada Nº {{ $reservation->id }}</h2>
            <h4>Data: {{ \Carbon\Carbon::now()->format('d/m/Y H:i') }}</h4>
        </div>
    </header>

    <!-- Mensagem -->
    <div class="success">
        ✅ Obrigado, {{ $reservation->client->name }}! Sua reserva foi confirmada.
    </div>

    <!-- Dados do Cliente -->
    <div class="section">
        <h4>Dados do Cliente</h4>
        <strong>Nome:</strong> {{ $reservation->client->name }} <br>
        <strong>Email:</strong> {{ $reservation->client->email }} <br>
        <strong>Telefone:</strong> {{ $reservation->client->phone }}
    </div>
        
    <!-- Informações da Reserva -->
    <div class="section">
        <h4>Detalhes da Reserva</h4>
        <strong>Veículo:</strong> {{ $reservation->car->brand->name }} {{ $reservation->car->models->name }} <br>
        <strong>Local de Retirada:</strong> {{ $reservation->pickup_location }} <br>
        <strong>Local de Devolução:</strong> {{ $reservation->return_location }} <br>
        <strong>Valor Total:</strong> <span style="color:#000; font-weight:bold;">
            KZ {{ number_format($reservation->total_amount, 2, ',', '.') }}
        </span>
    </div>

    <!-- Datas -->
    <div class="section">
        <h4>Período</h4>
        <table>
            <thead>
                <tr>
                    <th>Data de Retirada</th>
                    <th>Data de Devolução</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ \Carbon\Carbon::parse($reservation->start_date)->format('d/m/Y ') }}</td>
                    <td>{{ \Carbon\Carbon::parse($reservation->end_date)->format('d/m/Y ') }} </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Serviços Extras -->
    @if (!empty($reservation->decoded_resources))
        <div class="section">
            <h4>Serviços Extras</h4>
            <table>
                <thead>
                    <tr>
                        <th>Serviço</th>
                        <th>Preço (KZ)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservation->decoded_resources as $extraKey)
                        @php $config = config("resources.extras.$extraKey"); @endphp
                        <tr>
                            <td>{{ $config['label'] ?? $extraKey }}</td>
                            <td>{{ number_format($config['price'] ?? 0, 2, ',', '.') }}</td>
                        </tr>
                    @endforeach
                    <tr class="total">
                        <td>Total Extras</td>
                        <td>
                            {{ number_format(collect($reservation->decoded_resources)->sum(fn($e) => config("resources.extras.$e.price", 0)), 2, ',', '.') }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endif

    <!-- Motorista -->
    <div class="section">
        <h4>Motorista</h4>
        <strong>{{ optional($reservation->driver)->full_name ?? 'Não incluído' }}</strong>
    </div>

    <!-- Rodapé -->
    <div class="footer">
        © {{ date('Y') }} AngoCars - Obrigado por escolher nossos serviços! <br>
        📞 +244 930 000 000 | ✉️ suporte@angocars.com
    </div>

</body>
</html>