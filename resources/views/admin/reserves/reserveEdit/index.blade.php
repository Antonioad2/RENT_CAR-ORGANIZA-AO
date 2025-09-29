@extends('admin.reserves.reserveEdit.layout.principal')
@section('title', 'Duralux || Editar Reserva')
@section('content-reserveEdit')

<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Editar Reserva</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('reserves.index') }}">Reservas</a></li>
                <li class="breadcrumb-item">Editar</li>
            </ul>
        </div>
        <div class="page-header-right ms-auto">
            <div class="page-header-right-items">
                <button type="submit" form="reserveForm" class="btn btn-primary">
                    <i class="feather-save me-2"></i> Atualizar Reserva
                </button>
            </div>
        </div>
    </div>
    <!-- [ page-header ] end -->

    <!-- [ Main Content ] start -->
    <div class="main-content">
        <div class="row">
            <div class="col-xl-16">
                <div class="card invoice-container">
                    <div class="card-header">
                        <h5>Dados da Reserva</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="px-4 pt-4">
                            <form id="reserveForm" action="{{ route('reserves.update', $reserve->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="row">

                                    <!-- CLIENTE -->
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Cliente</label>
                                        <input type="text" class="form-control" 
                                            value="{{ $reserve->client->name ?? '' }}" readonly>
                                        <input type="hidden" name="client_id" value="{{ $reserve->client_id }}">
                                    </div>

                                    <!-- CARRO -->
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Carro</label>
                                        <input type="text" class="form-control" 
                                            value="{{ $reserve->car->brand->name ?? '' }} {{ $reserve->car->models->name ?? '' }}" readonly>
                                        <input type="hidden" name="car_id" value="{{ $reserve->car_id }}">
                                    </div>

                                    <!-- LOCAL DE ENTREGA -->
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Local de Entrega</label>
                                        <input type="text" class="form-control" 
                                            value="{{ $reserve->pickup_location }}" readonly>
                                        <input type="hidden" name="pickup_location" value="{{ $reserve->pickup_location }}">
                                    </div>

                                    <!-- Local para Retorno do Carro -->
                                    <div class="col-lg-4 mb-4">
                                        <label  class="form-label">Local de Retorno</label>
                                        <input type="text" class="form-control" value="{{$reserve->return_location}}"  readonly>
                                        <input type="hidden" name="return_location" value="{{( $reserve->return_location)}}">
                                    </div>

                                    <!-- DATAS -->
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Data de Início</label>
                                        <input type="date" name="start_date" class="form-control" 
                                            value="{{ $reserve->start_date }}" readonly>
                                    </div>
                                    <!-- horas (mantém como tens) -->
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Hora de Entrega</label>
                                        <input type="time" name="delivery_time" class="form-control"  value="{{ $reserve->delivery_time }}">
                                    </div>

                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Data de Término</label>
                                        <input type="date" name="end_date" class="form-control" 
                                            value="{{ $reserve->end_date }}" readonly>
                                    </div>
                                    <!-- horas (mantém como tens) -->
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Hora de Retorno</label>
                                        <input type="time" name="return_time" class="form-control"  value="{{ $reserve->return_time }}">
                                    </div>

                                    <!-- STATUS -->
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Status</label>
                                        <select name="status" class="form-control">
                                            <option value="in_progress" {{ $reserve->status == 'in_progress' ? 'selected' : '' }}>Pendente</option>
                                            <option value="completed" {{ $reserve->status == 'completed' ? 'selected' : '' }}>Concluída</option>
                                            <option value="cancelled" {{ $reserve->status == 'cancelled' ? 'selected' : '' }}>Cancelada</option>
                                        </select>
                                    </div>
                                    
                                    <!-- TOTAL -->
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Valor Total</label>
                                        <input type="hidden" id="totalAmount" name="total_amount" value="{{ $reserve->total_amount }}">
                                        <input type="text" id="totalAmountDisplay" class="form-control" 
                                            value="{{ number_format($reserve->total_amount, 2, ',', '.') }} Kz" readonly>
                                    </div>

                                    <!-- RECURSOS -->
                                    @php
                                        $extras = config('resources.extras', []);
                                        $selectedResources = is_array($reserve->resources) ? $reserve->resources : (json_decode($reserve->resources, true) ?? []);
                                    @endphp

                                    <div class="col-12 mb-3">
                                    @foreach($extras as $key => $data)
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input resources-checkbox"
                                                name="resources[]" value="{{ $key }}" id="{{ $key }}"
                                                {{ in_array($key, $selectedResources) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="{{ $key }}">
                                                {{ $data['label'] }} (+ {{ number_format($data['price'], 2, ',', '.') }} Kz)
                                            </label>
                                        </div>
                                    @endforeach
                                    </div>

                                    <!-- MOTORISTA (checkbox + select) -->
                                    <div class="col-12 mb-3">
                                        <div class="form-check mb-2">
                                            <input type="checkbox" id="withDriver" class="form-check-input" {{ $reserve->driver_id ? 'checked' : '' }}>
                                            <label for="withDriver">Incluir Motorista</label>
                                        </div>

                                        <div id="driverSelect" style="{{ $reserve->driver_id ? 'display:block;' : 'display:none;' }}">
                                            <label class="form-label">Motorista</label>
                                            <select name="driver_id" id="driverSelectInput" class="form-control">
                                                <option value="">Selecione um motorista</option>
                                                @foreach($drivers as $driver)
                                                    <option value="{{ $driver->id }}" data-price="{{ $driver->daily_price ?? 0 }}"
                                                        {{ $reserve->driver_id == $driver->id ? 'selected' : '' }}>
                                                        {{ $driver->full_name }} ({{ number_format($driver->daily_price ?? 0, 2, ',', '.') }} Kz/dia)
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!-- BOTÕES -->
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Atualizar Reserva</button>
                                    </div>
                                </div>

                                <!-- GUARDO O PREÇO DO CARRO NUM CAMPO HIDDEN (fallback caso o campo do modelo mude de nome) -->
                                <input type="hidden" id="carPrice" value="{{ $reserve->car->price ?? $reserve->car->daily_price ?? 0 }}">

                                <!-- JavaScript para cálculo dinâmico do total -->
                                <script>
                                    document.addEventListener('DOMContentLoaded', function () {
                                        // elementos
                                        const carPriceEl = document.getElementById('carPrice');
                                        const carPrice = parseFloat(carPriceEl?.value ?? 0) || 0;

                                        const startDate = document.querySelector("input[name='start_date']");
                                        const endDate = document.querySelector("input[name='end_date']");
                                        const resources = Array.from(document.querySelectorAll(".resources-checkbox"));
                                        const withDriver = document.getElementById("withDriver");
                                        const driverDiv = document.getElementById("driverSelect");
                                        const driverInput = document.getElementById("driverSelectInput");
                                        const totalAmount = document.getElementById("totalAmount");
                                        const totalDisplay = document.getElementById("totalAmountDisplay");

                                        const resourcePrices = @json($extras);

                                        function daysBetween(startStr, endStr) {
                                            if (!startStr || !endStr) return 1;
                                            const [y1,m1,d1] = startStr.split('-').map(Number);
                                            const [y2,m2,d2] = endStr.split('-').map(Number);
                                            const start = Date.UTC(y1, m1 - 1, d1);
                                            const end   = Date.UTC(y2, m2 - 1, d2);
                                            const diff  = (end - start) / (1000 * 60 * 60 * 24);
                                            return diff > 0 ? diff : 1;
                                        }

                                        function getDriverDailyPrice() {
                                            if (!driverInput) return 0;
                                            const opt = driverInput.options[driverInput.selectedIndex];
                                            return opt && opt.dataset.price ? parseFloat(opt.dataset.price) : 0;
                                        }

                                        function formatKz(n) {
                                            return new Intl.NumberFormat('pt-PT', { minimumFractionDigits: 2, maximumFractionDigits: 2 }).format(n) + ' Kz';
                                        }

                                        function calculateTotal() {
                                            try {
                                                const sVal = startDate ? startDate.value : null;
                                                const eVal = endDate ? endDate.value : null;
                                                const days = daysBetween(sVal, eVal);

                                                let total = (carPrice || 0) * days;

                                                resources.forEach(r => {
                                                    if (r.checked) {
                                                        const price = resourcePrices[r.value]?.price ?? 0;
                                                        total += parseFloat(price) || 0;
                                                    }
                                                });

                                                if (withDriver && withDriver.checked) {
                                                    total += (getDriverDailyPrice() || 0) * days;
                                                }

                                                // atualiza campos
                                                if (totalAmount) totalAmount.value = total.toFixed(2);
                                                if (totalDisplay) totalDisplay.value = formatKz(total);
                                            } catch (err) {
                                                // se houver erro não travamos a página; loga no console para debug
                                                console.error('Erro no cálculo do total:', err);
                                            }
                                        }

                                        // toggles motorista
                                        if (withDriver) {
                                            withDriver.addEventListener('change', function() {
                                                driverDiv.style.display = this.checked ? 'block' : 'none';
                                                if (!this.checked && driverInput) driverInput.value = '';
                                                calculateTotal();
                                            });
                                        }

                                        // listeners
                                        if (startDate) startDate.addEventListener('change', calculateTotal);
                                        if (endDate) endDate.addEventListener('change', calculateTotal);
                                        if (driverInput) driverInput.addEventListener('change', calculateTotal);
                                        resources.forEach(r => r.addEventListener('change', calculateTotal));

                                        // calcula inicialmente
                                        calculateTotal();
                                    });
                                </script>
                                <!-- Fim do JavaScript -->

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>
@endsection
