@extends('site.reservation.layouts.main')
@section('title', 'AngoCars Serviços Extras')
@section('content')

    <div class="main-wrapper">

        <!-- Seção de Navegação -->
        <div class="breadcrumb-bar">
            <div class="container">
                <div class="row align-items-center text-center">
                    <div class="col-md-12 col-12">
                        <h2 class="breadcrumb-title">Checkout</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Seção de Navegação -->

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
                                    <li class="active">
                                        <span><img src="{{ url('assets/user/img/icons/booking-head-icon-02.svg') }}"
                                                alt="Ícone de Reserva"></span>
                                        <h6>Serviços Extras</h6>
                                    </li>
                                    <li>
                                        <span><img src="{{ url('assets/user/img/icons/booking-head-icon-03.svg') }}"
                                                alt="Ícone de Reserva"></span>
                                        <h6>Detalhes</h6>
                                    </li>
                                    <li>
                                        <span><img src="{{ url('assets/user/img/icons/booking-head-icon-04.svg') }}"
                                                alt="Ícone de Reserva"></span>
                                        <h6>Checkout</h6>
                                    </li>
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

                <div class="booking-detail-info">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="booking-information-main">
                                <form action="{{ route('site.reservation.step2', ['car_id' => $car->id]) }}" method="POST">
                                    @csrf

                                    <!-- Serviços Extras -->
                                    <div class="booking-information-card">
                                        <div class="booking-info-head justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <span><i class="bx bx-add-to-queue"></i></span>
                                                <h5>Serviços Extras</h5>
                                            </div>
                                            <h6>Total: {{ count(config('resources.extras')) }} Serviços Extras</h6>
                                        </div>
                                        <div class="booking-info-body">
                                            <ul class="adons-lists">
                                                @foreach (config('resources.extras') as $key => $extra)
                                                    <li>
                                                        <div class="adons-types">
                                                            <div class="d-flex align-items-center adon-name-info">
                                                                <span class="adon-icon"><i
                                                                        class="{{ $extra['icon'] }}"></i></span>
                                                                <div class="adon-name">
                                                                    <h6 data-extra-id="{{ $key }}"
                                                                        data-price="{{ $extra['price'] }}">
                                                                        {{ $extra['label'] }}</h6>
                                                                    <a href="javascript:void(0);"
                                                                        class="d-inline-flex align-items-center adon-info-btn">
                                                                        <i class="bx bx-info-circle me-2"></i>
                                                                        Mais informações
                                                                        <i class="bx bx-chevron-down ms-2 arrow-icon"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <span
                                                                class="adon-price">{{ number_format($extra['price'], 2, ',', '.') }}Kz</span>
                                                            <a href="#" class="btn add-addon-btn"><i
                                                                    class="bx bx-plus-circle me-2"></i>Adicionar</a>
                                                        </div>
                                                        <div class="more-adon-info">
                                                            <p>Descrição ou detalhes do serviço {{ $extra['label'] }}.</p>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Motorista -->
                                    <div class="booking-information-card">
                                        <div class="booking-info-head">
                                            <span><i class="bx bx-user-pin"></i></span>
                                            <h5>Detalhes do Motorista</h5>
                                        </div>
                                        <div class="booking-info-body">
                                            <ul class="booking-radio-btns">
                                                <li>
                                                    <label class="booking_custom_check">
                                                        <input type="radio" name="driver_type" id="acting_driver">
                                                        <span class="booking_checkmark">
                                                            <span class="checked-title">Motorista Contratado</span>
                                                        </span>
                                                    </label>
                                                </li>
                                            </ul>

                                            <!-- Hidden input para extras selecionados -->
                                            <input type="hidden" name="extras" id="selected_extras" value="">

                                            <div class="booking-timings acting-driver-info">
                                                <div class="form-title-head">
                                                    <h5>Motorista</h5>
                                                </div>
                                                <ul class="acting-driver-list">
                                                    <li>
                                                        <div class="driver-profile-info">
                                                            <span class="driver-profile"><img
                                                                    src="{{ url('assets/user/img/drivers/driver-02.jpg') }}"
                                                                    alt="Imagem"></span>
                                                            <div class="driver-name" id="driverSelect">
                                                                <label for="driver_id">Escolha o motorista:</label>
                                                                <select name="driver_id" id="driver_id" class="form-select">
                                                                    @foreach ($drivers as $driver)
                                                                        <option value="{{ $driver->id }}"
                                                                            data-price="{{ $driver->daily_price }}">
                                                                            {{ $driver->full_name }}
                                                                            ({{ formatKz($driver->daily_price) }} Kz / dia)
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Seguro -->
                                    {{-- <div class="booking-information-card pb-1">
                                        <div class="booking-info-head">
                                            <span><i class="bx bx-file-blank"></i></span>
                                            <h5>Seguro</h5>
                                        </div>
                                        <div class="booking-info-body">
                                            <div class="insurance-select custom-checkbox active">
                                                <div>
                                                    <p class="fs-14 d-inline-flex align-items-center mb-1">Seguro Premium
                                                        Completo</p>
                                                    <div>
                                                        <a href="#">+4 Benefícios<i
                                                                class="bx bxs-info-circle text-gray-5 ms-1"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-original-title="Sem custos adicionais para serviços de assistência na estrada em emergências"></i></a>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="d-block mb-1">Viagem Única</span>
                                                    <h6 class="fw-normal">100.000,00 Kz</h6>
                                                </div>
                                            </div>
                                            <div class="insurance-select custom-checkbox">
                                                <div>
                                                    <p class="fs-14 d-inline-flex align-items-center mb-1">Assistência na
                                                        Estrada</p>
                                                    <div>
                                                        <a href="#">+3 Benefícios<i
                                                                class="bx bxs-info-circle text-gray-5 ms-1"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-original-title="Sem custos adicionais para serviços de assistência na estrada em emergências"></i></a>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="d-block mb-1">Viagem Única</span>
                                                    <h6 class="fw-normal">40.000,00 Kz</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="booking-info-btns d-flex justify-content-end">
                                        <a href="#" class="btn btn-secondary">Voltar para Localização
                                            e Horário</a>
                                        <button class="btn btn-primary continue-book-btn" type="submit">Continuar a
                                            Reserva</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Sidebar -->
                        <div class="col-lg-4 theiaStickySidebar">
                            <div class="booking-sidebar">
                                @php
                                    $imagePath = !empty($car->images)
                                        ? trim($car->images)
                                        : $car->image ?? 'default.jpg';
                                @endphp
                                <!-- Resumo do Carro -->
                                <div class="vehicle-card">
                                    <span class="badge bg-primary">{{ formatKz($car->price) }}
                                        Kz/dia</span>
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

                                <!-- Total Estimado -->
                                <div class="total-rate-card">
                                    <div class="vehicle-total-price d-flex justify-content-between align-items-center">
                                        <h5>Total Estimado</h5>
                                        <span id="total_price">{{ number_format($car->price, 2, ',', '.') }} Kz</span>
                                    </div>
                                </div>

                                <!-- Botão Continuar -->
                                <!-- <div class="mt-3">
                                    <button type="submit" form="extras-form" class="btn btn-primary w-100">
                                        Continuar a Reserva
                                    </button>
                                </div> -->

                            </div>
                        </div>
                        <!-- FIM Sidebar -->

                    </div>
                </div>
            </div>
        </div>

        <!-- ScrollToTop -->
        <div class="progress-wrap active-progress">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                    style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;">
                </path>
            </svg>
        </div>

    </div>

    <!-- JS para extras + motorista + total -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectedExtras = new Set();
            const totalPriceEl = document.getElementById('total_price');
            const carBasePrice = parseFloat({{ $car->price }});

            function updateTotal() {
                let total = carBasePrice;

                // ➕ Soma extras
                selectedExtras.forEach(extraId => {
                    const el = document.querySelector(`h6[data-extra-id='${extraId}']`);
                    if (el) total += parseFloat(el.dataset.price);
                });

                // ➕ Soma motorista SOMENTE se opção contratada estiver marcada
                const driverTypeChecked = document.getElementById('acting_driver')?.checked;
                const driverSelect = document.getElementById('driver_id');
                if (driverTypeChecked && driverSelect && driverSelect.value) {
                    const selectedOption = driverSelect.options[driverSelect.selectedIndex];
                    total += parseFloat(selectedOption.dataset.price);
                }

                totalPriceEl.innerText = total.toLocaleString('pt-PT') + ' Kz';
            }

            // Extras
            document.querySelectorAll('.add-addon-btn').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const li = btn.closest('li');
                    const h6 = li.querySelector('h6');
                    const extraId = h6.dataset.extraId;

                    if (selectedExtras.has(extraId)) {
                        selectedExtras.delete(extraId);
                        btn.innerHTML = '<i class="bx bx-plus-circle me-2"></i>Adicionar';
                        li.classList.remove('addon-selected');
                    } else {
                        selectedExtras.add(extraId);
                        btn.innerHTML = '<i class="bx bx-minus-circle me-2"></i>Remover';
                        li.classList.add('addon-selected');
                    }

                    document.getElementById('selected_extras').value = Array.from(selectedExtras)
                        .join(',');
                    updateTotal();
                });
            });

            // Motorista (quando muda o select ou marca o radio)
            const driverSelect = document.getElementById('driver_id');
            if (driverSelect) driverSelect.addEventListener('change', updateTotal);
            const driverTypeRadio = document.getElementById('acting_driver');
            if (driverTypeRadio) driverTypeRadio.addEventListener('change', updateTotal);

            updateTotal();
        });
    </script>

    <style>
        .addon-selected .add-addon-btn {
            background-color: #2a2c2e;
            border-left: 4px solid #ffffff;
            color: #ffffff;
            padding-left: 10px;
        }
    </style>

@endsection
