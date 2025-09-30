
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
                                    <!-- Client -->
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Cliente <span class="text-danger">*</span></label>
                                        <select name="client_id" class="form-control @error('client_id') is-invalid @enderror" required>
                                            <option value="" disabled selected>Selecione um cliente</option>
                                            @foreach ($clients as $client)
                                                <option value="{{ $client->id }}" {{ old('client_id') == $client->id ? 'selected' : '' }}>{{ $client->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('client_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- CARRO (com data-price) -->
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Carro <span class="text-danger">*</span></label>
                                        <select name="car_id" id="carSelect" class="form-control @error('car_id') is-invalid @enderror" required>
                                            <option value="" disabled {{ old('car_id') ? '' : 'selected' }}>Selecione um carro</option>
                                            @foreach ($cars->where('status', 'available') as $car)
                                                <option value="{{ $car->id }}"
                                                        data-price="{{ $car->price }}"
                                                        {{ old('car_id') == $car->id ? 'selected' : '' }}>
                                                    {{ $car->brand->name }} {{ $car->models->name }} ({{ number_format($car->price, 2, ',', '.') }} Kz/dia)
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('car_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <!-- Local para Entrega do Carro -->
                                    <div class="col-lg-4 mb-4">
                                        <label  class="form-label">Local de Entrega <span class="text-danger">*</span></label>
                                        <input  type="text" name="pickup_location" 
                                                class="form-control @error('pickup_location') is-invalid @enderror"
                                                value="{{ old('pickup_location') }}" placeholder="Digite um local seguro para si" required>
                                        @error('pickup_location') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <!-- Local para Retorno do Carro -->
                                    <div class="col-lg-4 mb-4">
                                        <label  class="form-label">Local de Retorno <span class="text-danger">*</span></label>
                                        <input  type="text" name="return_location" 
                                                class="form-control @error('return_location') is-invalid @enderror"
                                                value="{{ old('return_location') }}" placeholder="Digite um local seguro para si" required>
                                        @error('return_location') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <!-- DATAS (mantém como tens) -->
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Data de Início <span class="text-danger">*</span></label>
                                        <input type="date" name="start_date" class="form-control @error('start_date') is-invalid @enderror"
                                            value="{{ old('start_date', now()->format('Y-m-d')) }}" min="{{ now()->format('Y-m-d') }}" required>
                                        @error('start_date') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <!-- horas (mantém como tens) -->
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Hora de Entrega</label>
                                        <input type="time" name="delivery_time" class="form-control @error('delivery_time') is-invalid @enderror"
                                               value="{{ old('delivery_time') }}">
                                        @error('delivery_time') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                    
                                    <!-- DATAS (mantém como tens) -->
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Data de Término <span class="text-danger">*</span></label>
                                        <input type="date" name="end_date" class="form-control @error('end_date') is-invalid @enderror"
                                            value="{{ old('end_date') }}" min="{{ now()->format('Y-m-d') }}" required>
                                        @error('end_date') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <!-- horas (mantém como tens) -->
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Hora de Retorno</label>
                                        <input type="time" name="return_time" class="form-control @error('return_time') is-invalid @enderror"
                                               value="{{ old('return_time') }}">
                                        @error('return_time') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <!-- Status -->
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Status <span class="text-danger">*</span></label>
                                        <select name="status" class="form-control @error('status') is-invalid @enderror" required>
                                            <option value="in_progress" {{ old('status', 'in_progress') == 'in_progress' ? 'selected' : '' }}>Em Progresso</option>
                                            <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Concluído</option>
                                            <option value="cancelled" {{ old('status') == 'cancelled' ? 'selected' : '' }}>Cancelado</option>
                                        </select>
                                        @error('status') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <!-- TOTAL: hidden (para envio) + display -->
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Valor Total</label>
                                        <input type="hidden" id="totalAmount" name="total_amount" value="{{ old('total_amount', 0) }}">
                                        <input type="text" id="totalAmountDisplay" class="form-control" value="{{ old('total_amount') ? number_format(old('total_amount'), 2, ',', '.') . ' Kz' : '' }}" readonly>
                                    </div>

                                    <!-- RECURSOS -->
                                    @php
                                        $extras = config('resources.extras', []);
                                    @endphp

                                    @if(!empty($extras))
                                        @foreach($extras as $key => $data)
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input"
                                                    name="resources[]" value="{{ $key }}" id="{{ $key }}"
                                                    {{ (is_array(old('resources')) && in_array($key, old('resources'))) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="{{ $key }}">
                                                    {{ $data['label'] }} (+ {{ number_format($data['price'], 2, ',', '.') }} Kz)
                                                </label>
                                            </div>
                                        @endforeach
                                    @else
                                        <p class="text-muted">Nenhum recurso adicional disponível.</p>
                                    @endif

                                    <!-- FIM RECURSOS -->

                                    <!-- MOTORISTA (checkbox + select) -->
                                    <div class="form-check mb-2">
                                        <input type="checkbox" id="withDriver" class="form-check-input" {{ old('driver_id') ? 'checked' : '' }}>
                                        <label for="withDriver">Incluir Motorista</label>
                                    </div>

                                    <div id="driverSelect" style="{{ old('driver_id') ? 'display:block;' : 'display:none;' }}">
                                        <label class="form-label">Motorista</label>
                                        <select name="driver_id" id="driverSelectInput" class="form-control">
                                            <option value="">Selecione um motorista</option>
                                            @foreach($drivers as $driver)
                                                <option value="{{ $driver->id }}" data-price="{{ $driver->daily_price ?? 0 }}"
                                                    {{ old('driver_id') == $driver->id ? 'selected' : '' }}>
                                                    {{ $driver->full_name }} ({{ number_format($driver->daily_price ?? 0, 2, ',', '.') }} Kz/dia)
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <script>
                                        document.getElementById('withDriver').addEventListener('change', function() {
                                            document.getElementById('driverSelect').style.display = this.checked ? 'block' : 'none';
                                        });
                                    </script>


                                    <!-- Submit Button -->
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Salvar Reserva</button>
                                    </div>
                                </div>

                                <!-- Script para o calculo automático para o preço -->
                                
                                <script>
                                    // injeta config do backend no frontend (garante fonte única de verdade)
                                    window.resourcePrices = @json(config('resources.extras'));
                                    // driver prices por id (pega do select via data-price, mas deixo isto como fallback)
                                    window.driverPrices = @json($drivers->pluck('daily_price', 'id'));

                                    document.addEventListener('DOMContentLoaded', function () {
                                        const carSelect   = document.getElementById("carSelect");
                                        const startDate   = document.querySelector("input[name='start_date']");
                                        const endDate     = document.querySelector("input[name='end_date']");
                                        const resources   = document.querySelectorAll("input[name='resources[]']");
                                        const withDriver  = document.getElementById("withDriver");
                                        const driverDiv   = document.getElementById("driverSelect");
                                        const driverInput = document.getElementById("driverSelectInput");
                                        const totalAmount = document.getElementById("totalAmount");           // hidden (envio)
                                        const totalDisplay= document.getElementById("totalAmountDisplay");    // visível

                                        function daysBetween(startStr, endStr) {
                                            const [y1,m1,d1] = startStr.split('-').map(Number);
                                            const [y2,m2,d2] = endStr.split('-').map(Number);
                                            const start = Date.UTC(y1, m1 - 1, d1);
                                            const end   = Date.UTC(y2, m2 - 1, d2);
                                            const diff  = (end - start) / (1000 * 60 * 60 * 24);
                                            return diff > 0 ? diff : 1;
                                        }

                                        function formatKz(n) {
                                            return new Intl.NumberFormat('pt-PT', { minimumFractionDigits: 2, maximumFractionDigits: 2 }).format(n) + ' Kz';
                                        }

                                        function getDriverDailyPrice() {
                                            if (!driverInput) return 0;
                                            const opt = driverInput.options[driverInput.selectedIndex];
                                            if (opt && opt.dataset.price) return parseFloat(opt.dataset.price) || 0;
                                            return window.driverPrices && window.driverPrices[driverInput.value] ? parseFloat(window.driverPrices[driverInput.value]) : 0;
                                        }

                                        function calculateTotal() {
                                            let total = 0;
                                            let days = 1;
                                            if (startDate.value && endDate.value) {
                                                days = daysBetween(startDate.value, endDate.value);
                                            }

                                            // preço do carro (data-price)
                                            const selectedCar = carSelect.options[carSelect.selectedIndex];
                                            if (selectedCar && selectedCar.dataset.price) {
                                                total += (parseFloat(selectedCar.dataset.price) || 0) * days;
                                            }

                                            // recursos (pegar só o price do objeto)
                                            resources.forEach(r => {
                                                if (r.checked) {
                                                    const resource = window.resourcePrices ? window.resourcePrices[r.value] : null;
                                                    const price = resource && resource.price ? parseFloat(resource.price) : 0;
                                                    total += price;
                                                }
                                            });

                                            // motorista (por dia)
                                            if (withDriver.checked) {
                                                total += getDriverDailyPrice() * days;
                                            }

                                            totalAmount.value = total.toFixed(2);
                                            totalDisplay.value = formatKz(total);
                                        }

                                        withDriver.addEventListener('change', function () {
                                            driverDiv.style.display = this.checked ? 'block' : 'none';
                                            if (!this.checked && driverInput) driverInput.value = '';
                                            calculateTotal();
                                        });

                                        [carSelect, startDate, endDate, driverInput].forEach(el => {
                                            if (!el) return;
                                            el.addEventListener('change', calculateTotal);
                                        });
                                        resources.forEach(r => r.addEventListener('change', calculateTotal));

                                        calculateTotal();
                                    });
                                </script>

                                <!-- FIM do Script para o calculo automático para o preço -->
