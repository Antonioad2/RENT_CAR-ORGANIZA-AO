@extends('site.reservation.layouts.main')
@section('title', 'AngoCars Detalhes Checkout')
@section('content')

    <div class="main-wrapper" data-select2-id="12" style="transform: none;">

        <!-- Cabeçalho -->

        <!-- /Cabeçalho -->

        <!-- Seção de Navegação -->
        <div class="breadcrumb-bar">
            <div class="container">
                <div class="row align-items-center text-center">
                    <div class="col-md-12 col-12">
                        <h2 class="breadcrumb-title">Detalhes</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Detalhes</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Seção de Navegação -->

        <div class="booking-new-module" data-select2-id="11" style="transform: none;">
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
                                    <li>
                                        <span><img src="{{ url('assets/user/img/icons/booking-head-icon-03.svg') }}"
                                                alt="Ícone de Reserva"></span>
                                        <h6>Detalhes</h6>
                                    </li>
                                    {{-- <li>
                                        <span><img src="{{ url('assets/user/img/icons/booking-head-icon-04.svg') }}"
                                                alt="Ícone de Reserva"></span>
                                        <h6>Checkout</h6>
                                    </li> --}}
                                    <li>
                                        <span><img src="{{ url('assets/user/img/icons/booking-head-icon-05.svg') }}"
                                                alt="Ícone de Reserva"></span>
                                        <h6>Reserva Confirmada</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="booking-detail-info" data-select2-id="9" style="transform: none;">
                    <div class="row" style="transform: none;">
                        <div class="col-lg-8">
                            <div class="booking-information-main">
                                <form action="{{ route('site.reservation.confirm') }}" method="POST">
                                    @csrf
                                    <div class="booking-information-card">
                                        <div class="booking-info-head justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <span><i class="bx bx-add-to-queue"></i></span>
                                                <h5>Informações de Cobrança</h5>
                                            </div>
                                            <!-- <div class="d-flex align-items-center">
                                                <h6>Cliente recorrente?</h6>
                                                <a href="javascript:void(0);" class="btn btn-secondary ms-3"
                                                    data-bs-toggle="modal" data-bs-target="#sign_in_modal"><i
                                                        class="bx bx-user me-2"></i>Entrar</a>
                                            </div> -->
                                        </div>
                                        <div class="booking-info-body" data-select2-id="8">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-block">
                                                        <label class="form-label">Nome Completo <span class="text-danger">
                                                                *</span></label>
                                                        <input type="text" name="name" class="form-control"
                                                            placeholder="Digite o Nome" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-block">
                                                        <label class="form-label">Bilhete de Identidade <span
                                                                class="text-danger"> *</span></label>
                                                        <input type="text" name="bi" class="form-control"
                                                            placeholder="Digite o Número do seu BI" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-block">
                                                        <label class="form-label">Endereço de E-mail <span
                                                                class="text-danger"> *</span></label>
                                                        <input type="text" name="email" class="form-control"
                                                            placeholder="Digite o E-mail" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-block">
                                                        <label class="form-label">Número de Telefone <span
                                                                class="text-danger"> *</span></label>
                                                        <input type="text" name="phone" class="form-control"
                                                            placeholder="Digite o Número de Telefone" required>
                                                    </div>
                                                </div>
                                                {{-- <div class="col-md-6">
                                                <div class="input-block">
                                                    <label class="form-label">Sobrenome <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" placeholder="Digite o Sobrenome">
                                                </div>
                                            </div> --}}
                                                {{-- <div class="col-md-6">
                                                <div class="input-block">
                                                    <label class="form-label">Número de Pessoas <span class="text-danger"> *</span></label>
                                                    <select class="form-control select select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                        <option data-select2-id="3">2 Adultos, 1 Criança</option>
                                                        <option>5 Adultos, 2 Crianças</option>
                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-3mfn-container"><span class="select2-selection__rendered" id="select2-3mfn-container" role="textbox" aria-readonly="true" title="2 Adultos, 1 Criança">2 Adultos, 1 Criança</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block">
                                                    <label class="form-label">Empresa</label>
                                                    <input type="text" class="form-control" placeholder="Digite o Nome da Empresa">
                                                </div>
                                            </div> --}}
                                                <div class="col-md-12">
                                                    <div class="input-block">
                                                        <label class="form-label">Endereço <span class="text-danger">
                                                                *</span></label>
                                                        <input type="text" name="address" class="form-control"
                                                            placeholder="Digite o Endereço" required>
                                                    </div>
                                                </div>
                                                {{-- <div class="col-md-4">
                                                <div class="input-block">
                                                    <label class="form-label">País <span class="text-danger"> *</span></label>
                                                    <select class="form-control select select2-hidden-accessible" data-select2-id="4" tabindex="-1" aria-hidden="true">
                                                        <option data-select2-id="6">País</option>
                                                        <option data-select2-id="15">EUA</option>
                                                        <option data-select2-id="16">Reino Unido</option>
                                                    </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-lkzx-container"><span class="select2-selection__rendered" id="select2-lkzx-container" role="textbox" aria-readonly="true" title="EUA">EUA</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-block">
                                                    <label class="form-label">Cidade <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" placeholder="Cidade">
                                                </div>
                                            </div> --}}
                                                {{-- <div class="col-md-4">
                                                <div class="input-block">
                                                    <label class="form-label">CEP <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" placeholder="Digite o CEP">
                                                </div>
                                            </div> --}}
                                                <div class="col-md-12">
                                                    <div class="input-block">
                                                        <label class="form-label">Informações Adicionais</label>
                                                        <textarea class="form-control" placeholder="Digite Informações Adicionais" rows="5" style="height: 134px;"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="input-block m-0">
                                                        <label class="custom_check d-inline-flex location-check m-0"><span>Li
                                                                e Aceito os Termos e Condições</span> <span
                                                                class="text-danger"> *</span>
                                                            <input type="checkbox" name="remeber">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-warning mt-4">
    <h5 class="text-center">
        💰 O pagamento deverá ser feito  no momento da entrega do veículo.
    </h5>
</div>



                                    <div class="booking-info-btns d-flex justify-content-end">
                                        <a href="{{ route('site.reservation.checkout')}}"
                                            class="btn btn-secondary">Voltar para Serviços Extras</a>
                                        <button class="btn btn-primary continue-book-btn" type="submit">Confirmar Reserva</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Sidebar Adaptado -->
                        <div class="col-lg-4 theiaStickySidebar">
                            <div class="booking-sidebar">
                                @php
                                    $imagePath = !empty($car->images)
                                        ? trim($car->images)
                                        : $car->image ?? 'default.jpg';
                                    $selectedExtras = session('selected_extras', []); // vindo da sessão ou request
                                    $selectedDriver = session('selected_driver'); // vindo da sessão ou request
                                @endphp

                                <!-- Resumo do Carro -->
                                <div class="vehicle-card">
                                    <span class="badge bg-primary">{{ formatKz($car->price) }} Kz/dia</span>
                                    <div class="vehicle-card-img">
                                        <img src="{{ url('uploads/car/car_images/' . $imagePath) }}" class="img-fluid"
                                            alt="{{ $car->brand->name ?? 'Carro' }}">
                                    </div>
                                    <div class="vehicle-card-body" style="padding: 1rem">
                                        <h5 style="margin-bottom: 7px">{{ $car->brand->name }} {{ $car->models->name }}</h5>
                                        <ul class="list-unstyled mb-2">
                                            <li><i class="bx bx-group me-1"></i> {{ $car->number_of_seats }} Lugares</li>
                                            <li><i class="bx bx-gas-pump me-1"></i> {{ ucfirst($car->fuel->name) }}</li>
                                            <li><i class="bx bx-cog me-1"></i> {{ ucfirst($car->engine) }}</li>
                                        </ul>
                                    </div>
                                </div>

                                <div style="border: 1px solid #FFA633"></div>

                                <!-- Detalhes da Reserva -->
                                @php
                                    $data = session('reservation_data', []);
                                @endphp

                                <div class="booking-summary" style="padding: 1rem">
                                    <h5 style="margin-bottom: 7px">Detalhes da Reserva</h5>
                                    <p><strong>Local:</strong> {{ $pickup_location }}</p>
                                    <p><strong>Início:</strong> {{ \Carbon\Carbon::parse($start_date)->format('d/m/Y') }}</p>
                                    <p><strong>Fim:</strong> {{ \Carbon\Carbon::parse($end_date)->format('d/m/Y') }}</p>
                                </div>


                                <div style="border: 1px solid #FFA633"></div>

                                <!-- Extras Selecionados -->
                                @php
                                    $services = session('reservation_services');
                                    $extras = $services['extras'] ?? [];
                                @endphp

                                @if (!empty($extras))
                                    <div class="booking-summary mt-3" style="padding: 1rem">
                                        <h5 style="margin-bottom: 7px">Serviços Extras Selecionados</h5>
                                        <ul>
                                            @foreach ($extras as $extraKey)
                                                @php
                                                    $extra = config("resources.extras.$extraKey");
                                                @endphp
                                                @if ($extra)
                                                    <li>
                                                        <i class="{{ $extra['icon'] }}"></i>
                                                        {{ $extra['label'] }} —
                                                        {{ number_format($extra['price'], 2, ',', '.') }} Kz
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div style="border: 1px solid #FFA633"></div>

                                <!-- Motorista Selecionado -->
                                @php
                                    $services = session('reservation_services');
                                    $driverId = $services['driver_id'] ?? null;
                                    $driver = $driverId ? \App\Model\Driver::find($driverId) : null;
                                @endphp

                                @if ($driver)
                                    <div class="booking-summary mt-3" style="padding: 1rem">
                                        <h5 style="margin-bottom: 7px">Motorista Selecionado</h5>
                                        <ul>
                                            <li>
                                                {{-- <img src="{{ url('uploads/drivers/' . $driver->photo) }}"
                                                    alt="{{ $driver->full_name }}" width="40" class="me-2"> --}}
                                                {{ $driver->full_name }} — {{ formatKz($driver->daily_price) }} Kz/dia
                                            </li>
                                        </ul>
                                    </div>
                                @endif


                                <!-- Total Estimado -->
                                <div class="total-rate-card mt-3">
                                    <div class="vehicle-total-price d-flex justify-content-between align-items-center">
                                        <h5>Total Estimado</h5>
                                        <span id="total_price">
                                            {{ formatKz($totalEstimate ?? $car->price) }}
                                        </span>
                                    </div>
                                </div>

                                <!-- Botão Confirmar -->
                               <!--  <div class="mt-3">
                                    <button type="submit" form="reservation-form" class="btn btn-primary w-100">
                                        Confirmar & Pagar
                                    </button>
                                </div> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="modal new-modal multi-step fade" id="sign_in_modal" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="login-wrapper">
                            <div class="loginbox">
                                <div class="login-auth">
                                    <div class="login-auth-wrap">
                                        <h1>Entrar</h1>
                                        <p class="account-subtitle">Enviaremos um código de confirmação para o seu e-mail.
                                        </p>
                                        <form action="#">
                                            <div class="input-block">
                                                <label class="form-label">E-mail <span
                                                        class="text-danger">*</span></label>
                                                <input type="email" class="form-control" placeholder="Digite o e-mail">
                                            </div>
                                            <div class="input-block">
                                                <label class="form-label">Senha <span class="text-danger">*</span></label>
                                                <div class="pass-group">
                                                    <input type="password" class="form-control pass-input"
                                                        placeholder=".............">
                                                    <span class="fas fa-eye-slash toggle-password"></span>
                                                </div>
                                            </div>
                                            <div class="input-block text-end">
                                                <a class="forgot-link" href="#">Esqueceu a Senha?</a>
                                            </div>
                                            <div class="input-block m-0">
                                                <label class="custom_check d-inline-flex"><span>Lembrar-me</span>
                                                    <input type="checkbox" name="remeber">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <a href="#" class="btn btn-outline-light w-100 btn-size mt-1">Entrar</a>
                                            <div class="login-or">
                                                <span class="or-line"></span>
                                                <span class="span-or-log">Ou, faça login com seu e-mail</span>
                                            </div>
                                            <!-- Login Social -->
                                            <div class="social-login">
                                                <a href="#"
                                                    class="d-flex align-items-center justify-content-center input-block btn google-login w-100"><span><img
                                                            src="./Dreams Rent _ Template_files/google.svg"
                                                            class="img-fluid" alt="Google"></span>Fazer Login com
                                                    Google</a>
                                            </div>
                                            <div class="social-login">
                                                <a href="#"
                                                    class="d-flex align-items-center justify-content-center input-block btn google-login w-100"><span><img
                                                            src="./Dreams Rent _ Template_files/facebook.svg"
                                                            class="img-fluid" alt="Facebook"></span>Fazer Login com
                                                    Facebook</a>
                                            </div>
                                            <!-- /Login Social -->
                                            <div class="text-center dont-have">Não tem uma conta? <a
                                                    href="#">Cadastrar-se</a></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Início do scrollToTop -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                    style="transition: stroke-dashoffset 10ms linear; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
                </path>
            </svg>
        </div>
        <!-- Fim do scrollToTop -->

    @endsection
