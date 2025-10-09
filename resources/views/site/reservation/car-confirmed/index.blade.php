@extends('site.reservation.layouts.main')
@section('title', 'AngoCar - Reserva Concluída')
@section('content')

    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">Confira</h2>
                    <nav aria-label="migalhas de pão" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">Confira</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="booking-new-module">
        <div class="container">
            <div class="booking-wizard-head">
                <!-- Steps -->
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-3">
                        <div class="booking-head-title">
                            <h4>Reserve Seu Carro</h4>
                            <p>Complete as seguintes etapas</p>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9">
                        <div class="booking-wizard-lists">
                            <ul>
                                <li class="active activated"><span><img
                                            src="{{ url('assets/user/img/icons/booking-head-icon-01.svg') }}"></span>
                                    <h6>Localização e Horário</h6>
                                </li>
                                <li class="active activated"><span><img
                                            src="{{ url('assets/user/img/icons/booking-head-icon-02.svg') }}"></span>
                                    <h6>Serviços Extras</h6>
                                </li>
                                <li class="active activated"><span><img
                                            src="{{ url('assets/user/img/icons/booking-head-icon-03.svg') }}"></span>
                                    <h6>Detalhes</h6>
                                </li>
                                <li class="active activated"><span><img
                                            src="{{ url('assets/user/img/icons/booking-head-icon-04.svg') }}"></span>
                                    <h6>Checkout</h6>
                                </li>
                                <li class="active"><span><img
                                            src="{{ url('assets/user/img/icons/booking-head-icon-05.svg') }}"></span>
                                    <h6>Reserva Confirmada</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="booking-card">
                <div class="success-book">
                    <span class="success-icon"><i class="fa-solid fa-check-double"></i></span>
                    <h5>Obrigado! Seu pedido foi recebido</h5>
                    <h5 class="order-no">Número do pedido: <span>#{{ $reservation->id }}</span></h5>
                </div>

                <div class="booking-header">
                    <div class="booking-img-wrap">
                        <div class="book-img">
                            @php
                                $imagePath = !empty($car->images) ? trim($car->images) : $car->image ?? 'default.jpg';
                                $selectedExtras = session('selected_extras', []); // vindo da sessão ou request
                                $selectedDriver = session('selected_driver'); // vindo da sessão ou request
                            @endphp

                            <img src="{{ url('uploads/car/car_images/' . $imagePath) }}" alt="imagem">
                        </div>
                        <div class="book-info">
                            <h6>{{ $reservation->car->name }}</h6>
                            <p><i class="feather-map-pin"></i> Localização de Entrega: {{ $reservation->pickup_location }}
                            </p>
                            <p><i class="feather-map-pin"></i> Localização de Retorno: {{ $reservation->return_location }}
                            </p>
                        </div>
                    </div>
                    <div class="book-amount">
                        <p>Montante total</p>
                        <h6>{{ number_format($reservation->total_amount, 2) }} Kz</h6>
                    </div>
                </div>

                <div class="row">
                    <!-- Car Pricing -->
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="book-card flex-fill">
                            <div class="book-head">
                                <h6>Preços de carros</h6>
                            </div>
                            <div class="book-body">
                                <ul class="pricing-lists">
                                    <li>
                                        <p>Taxa de aluguel
                                            <span>({{ \Carbon\Carbon::parse($reservation->end_date)->diffInDays($reservation->start_date) ?: 1 }}
                                                dias)</span>
                                        </p>
                                        <span>+ {{ number_format($reservation->car->price) }} /dia</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Location & Time -->
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="book-card flex-fill">
                            <div class="book-head">
                                <h6>Localização e Data</h6>
                            </div>
                            <div class="book-body">
                                <ul class="location-lists">
                                    <li>
                                        <h6>Retirada</h6>
                                        <p>{{ $reservation->pickup_location }}</p>
                                        <p>{{ \Carbon\Carbon::parse($reservation->start_date)->format('d/m/Y') }}</p>
                                    </li>
                                    <li>
                                        <h6>Devolução</h6>
                                        <p>{{ $reservation->return_location }}</p>
                                        <p>{{ \Carbon\Carbon::parse($reservation->end_date)->format('d/m/Y') }}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Add-ons Pricing -->
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="book-card flex-fill">
                            <div class="book-head">
                                <h6>Preços de serviços extras</h6>
                            </div>
                            <div class="book-body">
                                <ul class="pricing-lists">
                                    @forelse($extrasData as $extra)
                                        <li>
                                            <p>{{ $extra['name'] }}</p>
                                            <span>+ {{ number_format($extra['price'], 2, ',', '.') }} Kz</span>
                                        </li>
                                    @empty
                                        <li>
                                            <p>Nenhum serviço extra adicionado</p>
                                        </li>
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>


                    <!-- Driver Details -->
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="book-card flex-fill">
                            <div class="book-head">
                                <h6>Detalhes do motorista</h6>
                            </div>
                            <div class="book-body">
                                @if ($reservation->driver)
                                    <div class="driver-info">
                                        <span style="font-size: 40px; color: #132538ff; padding-right: 10px;">
                                            <i class="fa-solid fa-user-tie fa-2x"></i>
                                        </span>

                                        <div class="driver-name">
                                            <h6>{{ $reservation->driver->full_name }}</h6>
                                            <ul>

                                                <li>Preço: {{ formatKz($reservation->driver->daily_price) }}/dia
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @else
                                    <p>Nenhum motorista selecionado</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Billing Information -->
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="book-card flex-fill">
                            <div class="book-head">
                                <h6>Informações de pagamento</h6>
                            </div>
                            <div class="book-body">
                                <ul class="billing-lists">
                                    <li>{{ $reservation->client->name }}</li>
                                    <li>{{ $reservation->client->address }}</li>
                                    <li>{{ $reservation->client->phone }}</li>
                                    <li>{{ $reservation->client->email }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Details -->
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="book-card flex-fill">
                            <div class="book-head">
                                <h6>Detalhes do pagamento</h6>
                            </div>
                            <div class="book-body">
                                <ul class="location-lists">
                                    <li>
                                        <h6>Modo de pagamento</h6>
                                        <p>Cartão de Débito</p>
                                    </li>
                                    <li>
                                        <h6>ID da transação</h6>
                                        <p>#{{ $reservation->id }}{{ time() }}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Information -->
                    {{-- <div class="col-lg-12">
                        <div class="book-card mb-0">
                            <div class="book-head">
                                <h6>Informações adicionais</h6>
                            </div>
                            <div class="book-body">
                                <ul class="location-lists">
                                    <li>
                                        <p>As locadoras exigem que o veículo seja devolvido com o tanque cheio. Caso
                                            contrário, poderá ser cobrada uma taxa de reabastecimento.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>

            <div class="print-btn text-center">
                <a href="{{ route('reservation.pdf', ['id' => $reservation->id]) }}" class="btn btn-secondary">Imprimir
                    Reserva</a>


                <a href="{{ route('home') }}" class="btn btn-secondary" style="background-color: #ffa633 !important; border:1px solid #ffa633">
                    Voltar para a Página Inicial
                </a>
            </div>
        </div>
    </div>
    </div>
@endsection
