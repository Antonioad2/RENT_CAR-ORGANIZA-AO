@extends('site.reservation.layouts.main')
@section('title', 'AngoCars Reserva Concluída')
@section('content')

    <body data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">

        <div class="main-wrapper">

            <!-- Seção de Navegação -->
            <div class="breadcrumb-bar">
                <div class="container">
                    <div class="row align-items-center text-center">
                        <div class="col-md-12 col-12">
                            <h2 class="breadcrumb-title">Termino</h2>
                            <nav aria-label="breadcrumb" class="page-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">Termino</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Seção de Navegação -->

            <!-- Sucesso na Reserva -->
            <div class="booking-new-module">
                <div class="container">
                    <div class="booking-wizard-head">
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
                                        <li class="active activated">
                                            <span><img src="{{ url('assets/user/img/icons/booking-head-icon-01.svg') }}"
                                                    alt="Ícone de Reserva"></span>
                                            <h6>Localização e Horário</h6>
                                        </li>
                                        <li class="active activated">
                                            <span><img src="{{ url('assets/user/img/icons/booking-head-icon-02.svg') }}"
                                                    alt="Ícone de Reserva"></span>
                                            <h6>Serviços Extras</h6>
                                        </li>
                                        <li class="active activated">
                                            <span><img src="{{ url('assets/user/img/icons/booking-head-icon-03.svg') }}"
                                                    alt="Ícone de Reserva"></span>
                                            <h6>Detalhes</h6>
                                        </li>
                                        <li class="active activated">
                                            <span><img src="{{ url('assets/user/img/icons/booking-head-icon-04.svg') }}"
                                                    alt="Ícone de Reserva"></span>
                                            <h6>Checkout</h6>
                                        </li>
                                        <li class="active">
                                            <span><img src="{{ url('assets/user/img/icons/booking-head-icon-05.svg') }}"
                                                    alt="Ícone de Reserva"></span>
                                            <h6>Reserva Confirmada</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="booking-card">
                        <div class="success-book">
                            <span class="success-icon">
                                <i class="fa-solid fa-check-double"></i>
                            </span>
                            <h5>Obrigado! Seu pedido foi recebido</h5>
                            <h5 class="order-no">Número do Pedido: <span>#123456</span></h5>
                        </div>
                        <div class="booking-header">
                            <div class="booking-img-wrap">
                                <div class="book-img">
                                    <img src="./Dreams Rent _ Template_files/car-05.jpg" alt="Imagem">
                                </div>
                                <div class="book-info">
                                    <h6>Chevrolet Camaro</h6>
                                    <p><i class="feather-map-pin"></i> Localização: Miami St, Destin, FL 32550, EUA</p>
                                </div>
                            </div>
                            <div class="book-amount">
                                <p>Valor Total</p>
                                <h6>$4700</h6>
                            </div>
                        </div>
                        <div class="row">

                            <!-- Preço do Carro -->
                            <div class="col-lg-6 col-md-6 d-flex">
                                <div class="book-card flex-fill">
                                    <div class="book-head">
                                        <h6>Preço do Carro</h6>
                                    </div>
                                    <div class="book-body">
                                        <ul class="pricing-lists">
                                            <li>
                                                <div>
                                                    <p>Taxa de Aluguel <span>(1 dia)</span></p>
                                                    <p class="text-danger">(Não inclui combustível)</p>
                                                </div>
                                                <span> + $60</span>
                                            </li>
                                            <li>
                                                <p>Entrega na Porta</p>
                                                <span> + $60</span>
                                            </li>
                                            <li>
                                                <p>Taxas de Proteção de Viagem</p>
                                                <span> + $25</span>
                                            </li>
                                            <li>
                                                <p>Taxas de Conveniência</p>
                                                <span> + $2</span>
                                            </li>
                                            <li>
                                                <p>Imposto</p>
                                                <span> + $2</span>
                                            </li>
                                            <li>
                                                <p>Depósito Reembolsável</p>
                                                <span> +$1200</span>
                                            </li>
                                            <li>
                                                <p>Seguro Premium Completo</p>
                                                <span>+$200</span>
                                            </li>
                                            <li class="total">
                                                <p>Subtotal</p>
                                                <span>+$1604</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /Preço do Carro -->

                            <!-- Localização e Horário -->
                            <div class="col-lg-6 col-md-6 d-flex">
                                <div class="book-card flex-fill">
                                    <div class="book-head">
                                        <h6>Localização e Horário</h6>
                                    </div>
                                    <div class="book-body">
                                        <ul class="location-lists">
                                            <li>
                                                <h6>Tipo de Reserva</h6>
                                                <p>Entrega</p>
                                            </li>
                                            <li>
                                                <h6>Tipo de Aluguel</h6>
                                                <p>Diário</p>
                                            </li>
                                            <li>
                                                <h6>Retirada</h6>
                                                <p>1230 E Springs Rd, Los Angeles, CA, EUA</p>
                                                <p>18/04/2024 - 14:00</p>
                                            </li>
                                            <li>
                                                <h6>Devolução</h6>
                                                <p>1230 E Springs Rd, Los Angeles, CA, EUA</p>
                                                <p>18/04/2024 - 14:00</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /Localização e Horário -->

                            <!-- Preço de Serviços Extras -->
                            <div class="col-lg-6 col-md-6 d-flex">
                                <div class="book-card flex-fill">
                                    <div class="book-head">
                                        <h6>Preço de Serviços Extras</h6>
                                    </div>
                                    <div class="book-body">
                                        <ul class="pricing-lists">
                                            <li>
                                                <p>Sistemas de Navegação GPS</p>
                                                <span> $25</span>
                                            </li>
                                            <li>
                                                <p>Hotspot Wi-Fi</p>
                                                <span> $25</span>
                                            </li>
                                            <li>
                                                <p>Cadeiras de Segurança Infantil</p>
                                                <span>$50</span>
                                            </li>
                                            <li class="total">
                                                <p>Taxa de Serviços Extras</p>
                                                <span>$100</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /Preço de Serviços Extras -->

                            <!-- Detalhes do Motorista -->
                            <div class="col-lg-6 col-md-6 d-flex">
                                <div class="book-card flex-fill">
                                    <div class="book-head">
                                        <h6>Detalhes do Motorista</h6>
                                    </div>
                                    <div class="book-body">
                                        <ul class="location-lists">
                                            <li>
                                                <h6>Tipo de Motorista</h6>
                                                <p>Motorista Ativo</p>
                                            </li>
                                        </ul>
                                        <div class="driver-info">
                                            <span>
                                                <img src="./Dreams Rent _ Template_files/user.jpg" alt="Imagem">
                                            </span>
                                            <div class="driver-name">
                                                <h6>Ruban</h6>
                                                <ul>
                                                    <li>Número de Viagens Concluídas: 32</li>
                                                    <li>Preço: $100</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Detalhes do Motorista -->

                            <!-- Informações de Cobrança -->
                            <div class="col-lg-6 col-md-6 d-flex">
                                <div class="book-card flex-fill">
                                    <div class="book-head">
                                        <h6>Informações de Cobrança</h6>
                                    </div>
                                    <div class="book-body">
                                        <ul class="billing-lists">
                                            <li>Darren Jurel</li>
                                            <li>Mak Infotech</li>
                                            <li>1230 E Springs Rd, Los Angeles, CA, EUA</li>
                                            <li>+1 124554 45445</li>
                                            <li>dj@example.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /Informações de Cobrança -->

                            <!-- Detalhes de Pagamento -->
                            <div class="col-lg-6 col-md-6 d-flex">
                                <div class="book-card flex-fill">
                                    <div class="book-head">
                                        <h6>Detalhes de Pagamento</h6>
                                    </div>
                                    <div class="book-body">
                                        <ul class="location-lists">
                                            <li>
                                                <h6>Modo de Pagamento</h6>
                                                <p>Cartão de Débito</p>
                                            </li>
                                            <li>
                                                <h6>ID da Transação</h6>
                                                <p><span>#13245454455454</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /Detalhes de Pagamento -->

                            <!-- Informações Adicionais -->
                            <div class="col-lg-12">
                                <div class="book-card mb-0">
                                    <div class="book-head">
                                        <h6>Informações Adicionais</h6>
                                    </div>
                                    <div class="book-body">
                                        <ul class="location-lists">
                                            <li>
                                                <p>As empresas de aluguel geralmente exigem que os clientes devolvam o
                                                    veículo com o tanque cheio. Se o veículo for devolvido com menos de um
                                                    tanque cheio, os clientes podem ser cobrados pelo reabastecimento do
                                                    veículo a uma tarifa premium, geralmente mais alta que os preços locais
                                                    de combustível.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /Informações Adicionais -->

                        </div>
                    </div>
                    <div class="print-btn text-center">
                        <a href="{{ route('reservation.pdf', ['id' => $reservation->id]) }}" class="btn btn-secondary">
                            Imprimir Reserva
                        </a>
                    </div>

                </div>
            </div>
            <!-- /Sucesso na Reserva -->

        </div>

        <!-- Início do ScrollToTop -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                    style="transition: stroke-dashoffset 10ms linear; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
                </path>
            </svg>
        </div>
        <!-- Fim do ScrollToTop -->

    @endsection
