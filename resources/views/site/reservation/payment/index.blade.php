@extends('site.reservation.layouts.main')
@section('title', 'AngoCar - Pagamento')
@section('content')

    <!-- Breadscrumb Section -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">
                        <font dir="auto" style="vertical-align: inherit;">
                            <font dir="auto" style="vertical-align: inherit;">Confira</font>
                        </font>
                    </h2>
                    <nav aria-label="migalhas de pão" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <!-- <li class="breadcrumb-item"><a>
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">Lar</font>
                                        </font>
                                    </a></li> -->
                            <li class="breadcrumb-item active" aria-current="page">
                                <font dir="auto" style="vertical-align: inherit;">
                                    <font dir="auto" style="vertical-align: inherit;">Confira</font>
                                </font>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadscrumb Section -->

    <div class="booking-new-module">
        <div class="container">
            <div class="booking-wizard-head">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-3">
                        <div class="booking-head-title">
                            <h4>
                                <font dir="auto" style="vertical-align: inherit;">
                                    <font dir="auto" style="vertical-align: inherit;">Reserve seu carro</font>
                                </font>
                            </h4>
                            <p>
                                <font dir="auto" style="vertical-align: inherit;">
                                    <font dir="auto" style="vertical-align: inherit;">Conclua as seguintes etapas
                                    </font>
                                </font>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9">
                        <div class="booking-wizard-lists">
                            <ul>
                                <li class="active activated">
                                    <span><img src="{{ url('assets/user/img/icons/booking-head-icon-01.svg') }}"
                                            alt="Ícone de reserva"></span>
                                    <h6>
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">Localização e hora
                                            </font>
                                        </font>
                                    </h6>
                                </li>
                                <li class="active activated">
                                    <span><img src="{{ url('assets/user/img/icons/booking-head-icon-02.svg') }}"
                                            alt="Ícone de reserva"></span>
                                    <h6>
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">Serviços extras</font>
                                        </font>
                                    </h6>
                                </li>
                                <li class="active activated">
                                    <span><img src="{{ url('assets/user/img/icons/booking-head-icon-03.svg') }}"
                                            alt="Ícone de reserva"></span>
                                    <h6>
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">Detalhe</font>
                                        </font>
                                    </h6>
                                </li>
                               {{--  <li class="active">
                                    <span><img src="{{ url('assets/user/img/icons/booking-head-icon-04.svg') }}"
                                            alt="Ícone de reserva"></span>
                                    <h6>
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">Confira</font>
                                        </font>
                                    </h6>
                                </li> --}}
                                <li>
                                    <span><img src="{{ url('assets/user/img/icons/booking-head-icon-05.svg') }}"
                                            alt="Ícone de reserva"></span>
                                    <h6>
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">Reserva confirmada
                                            </font>
                                        </font>
                                    </h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="booking-detail-info">

                @if (session('debug'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        {{ session('debug') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Erros encontrados:</strong>
                        <ul>
                            @foreach ($errors->all() as $erro)
                                <li>{{ $erro }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
                    </div>
                @endif

                <div class="row">

                    <div class="col-lg-12">
                        <div class="booking-information-main">
                            <form action="{{ route('site.reservation.confirm', ['car_id' => $car->id]) }}" method="POST">
                                @csrf
                                <div class="booking-information-card payment-info-card">
                                    <div class="booking-info-head">
                                        <div class="d-flex align-items-center">
                                            <span><i class="bx bx-money"></i></span>
                                            <h5>
                                                <font dir="auto" style="vertical-align: inherit;">
                                                    <font dir="auto" style="vertical-align: inherit;">Pagamento
                                                    </font>
                                                </font>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="booking-info-body">
                                        <div class="payment-method-types">
                                            <h5>
                                                <font dir="auto" style="vertical-align: inherit;">
                                                    <font dir="auto" style="vertical-align: inherit;">Escolha seu
                                                        método de pagamento</font>
                                                </font>
                                            </h5>
                                        </div>
                                        <div class="payment-method-types payments-cards-types">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <ul>
                                                        <li>
                                                            <label class="payment_custom_check">
                                                                <input type="radio" name="payment_card" id="debit_card"
                                                                    checked="">
                                                                <span class="payment_checkmark">
                                                                    <span class="checked-title"><img
                                                                            src="{{ url('assets/user/img/visa.svg') }}"
                                                                            alt="Imagem"></span>
                                                                    <small>
                                                                        <font dir="auto"
                                                                            style="vertical-align: inherit;">
                                                                            <font dir="auto"
                                                                                style="vertical-align: inherit;">
                                                                                Cartão de débito</font>
                                                                        </font><span>
                                                                            <font dir="auto"
                                                                                style="vertical-align: inherit;">
                                                                                <font dir="auto"
                                                                                    style="vertical-align: inherit;">
                                                                                    523************14</font>
                                                                            </font>
                                                                        </span>
                                                                    </small>
                                                                </span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="payment_custom_check">
                                                                <input type="radio" name="payment_card"
                                                                    id="add_new_card">
                                                                <span class="payment_checkmark">
                                                                    <span class="checked-title">
                                                                        <font dir="auto"
                                                                            style="vertical-align: inherit;">
                                                                            <font dir="auto"
                                                                                style="vertical-align: inherit;">
                                                                                Adicionar novo cartão</font>
                                                                        </font>
                                                                    </span>
                                                                </span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="add-new-cards" id="card-hide">
                                                <h5 class="title-head">
                                                    <font dir="auto" style="vertical-align: inherit;">
                                                        <font dir="auto" style="vertical-align: inherit;">Adicionar
                                                            novo cartão</font>
                                                    </font>
                                                </h5>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="input-block">
                                                            <label class="form-label">
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        Banco
                                                                        Emissor </font>
                                                                </font><span class="text-danger">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        <font dir="auto"
                                                                            style="vertical-align: inherit;">*
                                                                        </font>
                                                                    </font>
                                                                </span>
                                                            </label>
                                                            <select name="bank" class="form-control" required>
                                                                <option value="">Selecione o Banco</option>
                                                                <option value="BAI">BAI</option>
                                                                <option value="BFA">BFA</option>
                                                                <option value="BCI">BCI</option>
                                                                <option value="Standard">Standard Bank</option>
                                                                <option value="Atlântico">Banco Atlântico</option>
                                                                <option value="Outro">Outro</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-block">
                                                            <label class="form-label">
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        Número do
                                                                        cartão </font>
                                                                </font><span class="text-danger">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        <font dir="auto"
                                                                            style="vertical-align: inherit;">*
                                                                        </font>
                                                                    </font>
                                                                </span>
                                                            </label>
                                                            <input type="text" name="card_number" class="form-control"
                                                                placeholder="Digite o número do cartão">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-block">
                                                            <label class="form-label">
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        Nome no
                                                                        cartão </font>
                                                                </font><span class="text-danger">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        <font dir="auto"
                                                                            style="vertical-align: inherit;">*
                                                                        </font>
                                                                    </font>
                                                                </span>
                                                            </label>
                                                            <input type="text" name="card_name" class="form-control"
                                                                placeholder="Digite o nome no cartão">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-block">
                                                            <label class="form-label">
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        CVV </font>
                                                                </font><span class="text-danger">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        <font dir="auto"
                                                                            style="vertical-align: inherit;">*
                                                                        </font>
                                                                    </font>
                                                                </span>
                                                            </label>
                                                            <div class="group-img">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Digite o número CVV">
                                                                <span class="input-cal-icon"><i
                                                                        class="bx bx-lock"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-block date-widget">
                                                            <label class="form-label">
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        Data de
                                                                        validade </font>
                                                                </font><span class="text-danger">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        <font dir="auto"
                                                                            style="vertical-align: inherit;">*
                                                                        </font>
                                                                    </font>
                                                                </span>
                                                            </label>
                                                            <div class="group-img">
                                                                <input type="text" name="expiry_date"
                                                                    class="form-control datetimepicker"
                                                                    placeholder="Escolha a data">
                                                                <span class="input-cal-icon"><i
                                                                        class="bx bx-calendar"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="input-block m-0">
                                                            <label
                                                                class="custom_check d-inline-flex location-check m-0"><span>
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        <font dir="auto"
                                                                            style="vertical-align: inherit;">Salve
                                                                            esta conta para transações futuras
                                                                        </font>
                                                                    </font>
                                                                </span>
                                                                <input type="checkbox" name="remeber">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="booking-info-btns d-flex justify-content-end">
                                    <a href="#" class="btn btn-secondary">
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">Voltar para
                                                informações de cobrança</font>
                                        </font>
                                    </a>
                                    <button class="btn btn-primary continue-book-btn" type="submit">
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">Pague
                                                {{ formatKz($totalEstimate ?? $car->price) }} e faça
                                                sua reserva</font>
                                        </font>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- scrollToTop start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <!-- scrollToTop end -->

    @if (session('debug'))
        <script>
            // Exibe alerta pop-up com a mensagem do servidor
            alert("{{ session('debug') }}");
            console.log("DEBUG:", "{{ session('debug') }}");
        </script>
    @endif

    <script>
        // Log de eventos importantes no front
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Página de pagamento carregada.');

            // Quando o botão de submit for clicado
            const form = document.querySelector('form');
            form.addEventListener('submit', () => {
                console.log('Formulário enviado para processamento do pagamento.');
                alert('Enviando pagamento... Aguarde.');
            });

            // Quando selecionar um método de pagamento
            document.querySelectorAll('input[name="payment_card"]').forEach(input => {
                input.addEventListener('change', () => {
                    console.log('Método de pagamento selecionado:', input.id);
                    alert('Método selecionado: ' + input.id);
                });
            });
        });
    </script>

@endsection
