<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <style>
        @page {
            margin: 40px 30px;
        }

        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 13px;
            color: #333;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        header img {
            height: 50px;
        }

        h2 {
            color: #007bff;
            margin-bottom: 5px;
        }

        h4 {
            color: #555;
            margin-top: 5px;
        }

        .section {
            margin-bottom: 20px;
        }

        .success {
            background-color: #e6f7e6;
            border: 1px solid #b3e6b3;
            padding: 10px;
            border-radius: 6px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        td,
        th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background: #f5f5f5;
        }

        .total {
            font-weight: bold;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            color: #777;
            margin-top: 30px;
        }
    </style>
</head>

<body>

    <!-- Cabeçalho com Logo e Título -->
    <header>
        <div>
            <img src="{{ url('assets/user/img/logo.png') }}" alt="Logo AngoCars">
        </div>
        <div>
            <h2>Reserva Confirmada</h2>
            <h4>#{{ $reservation->id }}</h4>
        </div>
    </header>

    <!-- Mensagem de Sucesso -->
    <div class="success">
        Obrigado! Seu pedido foi recebido.
    </div>

    <!-- Dados do Cliente -->
    <div class="section">
        <strong>Cliente:</strong> {{ $reservation->client->name }} <br>
        <strong>Email:</strong> {{ $reservation->client->email }} <br>
        <strong>Telefone:</strong> {{ $reservation->client->phone }}
    </div>

    <!-- Informações do Carro -->
    <div class="section">
        <strong>Carro Reservado:</strong>{{ $reservation->car->brand->name }} {{ $reservation->car->models->name }} <br>
        <strong>Localização:</strong> {{ $reservation->pickup_location }} <br>
        <strong>Valor Total:</strong> ${{ $reservation->total }}
    </div>

    <!-- Detalhes de Datas -->
    <div class="section">
        <table>
            <thead>
                <tr>
                    <th>Retirada</th>
                    <th>Devolução</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ \Carbon\Carbon::parse($reservation->pickup_date)->format('d/m/Y H:i') }}</td>
                    <td>{{ \Carbon\Carbon::parse($reservation->return_date)->format('d/m/Y H:i') }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Serviços Extras -->
    @php
        $extras = $reservation->decoded_resources ?? [];
    @endphp

    @if (!empty($extras))
        <div class="section">
            <strong>Serviços Extras:</strong>
            <table>
                <thead>
                    <tr>
                        <th>Serviço</th>
                        <th>Preço</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($extras as $extraKey)
                        @php
                            $config = config("resources.extras.$extraKey");
                        @endphp
                        <tr>
                            <td>{{ $config['label'] ?? $extraKey }}</td>
                            <td>${{ $config['price'] ?? 0 }}</td>
                        </tr>
                    @endforeach
                    <tr class="total">
                        <td>Total Extras</td>
                        <td>
                            ${{ collect($extras)->sum(fn($e) => config("resources.extras.$e.price", 0)) }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endif


    <!-- Motorista -->
    <div class="section">
        <strong>Motorista:</strong> {{ optional($reservation->driver)->name ?? 'N/A' }}
    </div>

    <!-- Rodapé -->
    <div class="footer">
        © {{ date('Y') }} AngoCars - Obrigado por escolher nossos serviços!
    </div>
</body>

</html>
