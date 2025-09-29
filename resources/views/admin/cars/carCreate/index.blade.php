@extends('admin.cars.carCreate.layout.principal')

@section('title', 'Duralux || Carro create')
@section('content-carCreate')
<div class="nxl-content">
    <div class="page-header">
        <div class="page-header-title">
            <h5 class="m-b-10">Cadastro de Carro</h5>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Carro</li>
            <li class="breadcrumb-item active">Novo</li>
        </ul>
    </div>

    <div class="main-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Marca</label>
                                    <select name="brand_id" class="form-control">
                                        <option value="">Selecione a Marca</option>
                                        @foreach($brands as $brand)
                                            <option value="{{ $brand->id }}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Modelo</label>
                                    <select name="models_id" class="form-control">
                                        <option value="">Selecione o Modelo</option>
                                        @foreach($models as $model)
                                            <option value="{{ $model->id }}" {{ old('models_id') == $model->id ? 'selected' : '' }}>{{ $model->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Cor</label>
                                    <select name="color_id" class="form-control">
                                        <option value="">Selecione a Cor</option>
                                        @foreach($colors as $color)
                                            <option value="{{ $color->id }}" {{ old('color_id') == $color->id ? 'selected' : '' }}>{{ $color->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Combustível</label>
                                    <select name="fuel_id" class="form-control">
                                        <option value="">Selecione o Tipo</option>
                                        @foreach($fuels as $fuel)
                                            <option value="{{ $fuel->id }}" {{ old('fuel_id') == $fuel->id ? 'selected' : '' }}>{{ $fuel->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Fornecedor</label>
                                    <select name="supplier_id" class="form-control">
                                        <option value="">Selecione o Fornecedor</option>
                                        @foreach($suppliers as $supplier)
                                            <option value="{{ $supplier->id }}" {{ old('supplier_id') == $supplier->id ? 'selected' : '' }}>{{ $supplier->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Categoria</label>
                                    <select name="category" class="form-control">
                                        <option value="Luxury" {{ old('category') == 'Luxury' ? 'selected' : '' }}>Luxo</option>
                                        <option value="Standard" {{ old('category') == 'Standard' ? 'selected' : '' }}>Padrão / Intermediário</option>
                                        <option value="Economy" {{ old('category') == 'Economy' ? 'selected' : '' }}>Econômico</option>
                                    </select>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Número de Chassi</label>
                                    <input type="text" name="chassi" class="form-control" value="{{ old('chassi') }}">
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Placa ou Matrícula</label>
                                    <input type="text" name="license_plate" class="form-control" value="{{ old('license_plate') }}">
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Quilometragem</label>
                                    <input type="number" name="mileage" class="form-control" value="{{ old('mileage') }}" placeholder="Quilometragem em km">
                                </div>

                                <div class="col-lg-4 mb-3">
                                        <label class="form-label">Número de Portas</label>
                                        <input type="number" name="number_of_doors" class="form-control" value="{{ old('number_of_doors') }}" min="1" max="10" placeholder="Número de Portas">
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Número de Assentos</label>
                                    <input type="number" name="number_of_seats" class="form-control" value="{{ old('number_of_seats') }}" min="1" max="56" placeholder="Número de Assentos">
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Motor</label>
                                    <input type="text" name="engine" class="form-control" value="{{ old('engine') }}" placeholder="Detalhes do Motor">
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Transmissão</label>
                                    <select name="transmission" class="form-control">
                                        <option value="Manual" {{ old('transmission') == 'Manual' ? 'selected' : '' }}>Manual</option>
                                        <option value="Automático" {{ old('transmission') == 'Automático' ? 'selected' : '' }}>Automático</option>
                                    </select>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Ano de Fabricação</label>
                                    <select name="manufacture_date" class="form-control">
                                        <option value="">Selecione o ano</option>
                                        @for ($year = now()->year; $year >= 2010; $year--)
                                            <option value="{{ $year }}" {{ old('manufacture_date') == $year ? 'selected' : '' }}>
                                                {{ $year }}
                                            </option>
                                        @endfor
                                    </select>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Data de Registro</label>
                                    <input
                                        type="date"
                                        name="registration_date"
                                        class="form-control"
                                        value="{{ old('registration_date', $car->registration_date ?? now()->format('Y-m-d')) }}"
                                        min="{{ now()->format('Y-m-d') }}"
                                    >
                                </div>

                                <!-- Novo campo para Status -->
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Estado</label>
                                    <select name="status" class="form-control">
                                        <option value="available" {{ old('status') == 'available' ? 'selected' : '' }}>Disponível</option>
                                        <option value="reserved" {{ old('status') == 'reserved' ? 'selected' : '' }}>Reservado</option>
                                        <option value="rented" {{ old('status') == 'rented' ? 'selected' : '' }}>Alugado</option>
                                        <option value="maintenance" {{ old('status') == 'maintenance' ? 'selected' : '' }}>Em Manutenção</option>
                                        <option value="unavailabe" {{ old('status') == 'unavailabe' ? 'selected' : '' }}>Inativo</option>
                                    </select>
                                </div>

                                <!-- Campo combinado para Seguro -->
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Seguro</label>
                                    <div class="input-group">
                                        <input type="text" name="car_insurance" class="form-control" value="{{ old('car_insurance') }}" placeholder="Número do Seguro">
                                        <input type="file" name="car_insurance_upload" class="form-control" accept="application/pdf" style="border-left: 1px solid #ced4da;">
                                    </div>
                                </div>

                                <!-- Campo combinado para Documento do Carro -->
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Documento do Carro</label>
                                    <div class="input-group">
                                        <input type="text" name="car_document" class="form-control" value="{{ old('car_document') }}" placeholder="Número do Documento">
                                        <input type="file" name="car_document_upload" class="form-control" accept="application/pdf" style="border-left: 1px solid #ced4da;">
                                    </div>
                                </div>

                                <!-- Campo de Foto mantido separado -->
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Foto do Carro</label>
                                    <input type="file" name="image" class="form-control" accept="image/*">
                                </div>
                                  
                                        <!-- Campos de Fotos Adicionais -->
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Foto do Interior</label>
                                    <input type="file" name="interior_image" class="form-control" accept="image/jpeg,image/png,image/jpg">
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Foto Lateral</label>
                                    <input type="file" name="lateral_image" class="form-control" accept="image/jpeg,image/png,image/jpg">
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Foto do Exterior</label>
                                    <input type="file" name="exterior_image" class="form-control" accept="image/jpeg,image/png,image/jpg">
                                </div>        


                                <!-- Campo combinado para Inspeção -->
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Inspeção</label>
                                    <div class="input-group">
                                        <input type="date" name="inspection_date" class="form-control" value="{{ old('inspection_date', $car->inspection_date ?? now()->format('Y-m-d')) }}" placeholder="Data da Inspeção">
                                        <input type="file" name="inspection_document_upload" class="form-control" accept="application/pdf" style="border-left: 1px solid #ced4da;">
                                    </div>
                                </div>

                                <!-- Campo de Preço -->
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Preço</label>
                                    <input type="number" name="price" class="form-control" value="{{ old('price') }}" step="0.01" min="0" placeholder="Preço do Carro">
                                </div>

                                <!-- tipo de carro-->
                                            <div class="col-lg-12 mb-3">
                                                <label class="form-label">Tipo de Carro</label>
                                                <select name="type_car" id="type_car" class="form-control" required>
                                                    <option value="sedan" {{ old('type_car') == 'sedan' ? 'selected' : '' }}>Executivo</option>
                                                    <option value="suv"{{ old('type_car') == 'suv' ? 'selected' : '' }}>Aventura</option>
                                                    <option value="compact"{{ old('type_car') == 'compact' ? 'selected' : '' }}>Urbano</option>
                                                    <option value="station_wagon"{{ old('type_car') == 'station_wagon' ? 'selected' : '' }}>Turismo</option>
                                                    <option value="sports_car"{{ old('type_car') == 'sports_car' ? 'selected' : '' }}>Esportivo</option>
                                                    <option value="minivan"{{ old('type_car') == 'minivan' ? 'selected' : '' }}>Viagem</option>
                                                    <option value="compact_suv"{{ old('type_car') == 'compact_suv' ? 'selected' : '' }}>Familia</option>
                                                    <option value="coupe"{{ old('type_car') == 'coupe' ? 'selected' : '' }}>Gala</option>
                                                    <option value="sports_coupe"{{ old('type_car') == 'sports_coupe' ? 'selected' : '' }}>Gala Esportivo</option>
                                                </select>
                                            </div>

                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">Observações</label>
                                    <textarea name="observations" class="form-control" rows="3">{{ old('observations') }}</textarea>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function() {
        $('select[name="brand_id"]').on('change', function() {
            var brandId = $(this).val();
            var modelSelect = $('select[name="models_id"]');

            modelSelect.html('<option value="">Carregando...</option>');

            if (brandId) {
                $.ajax({
                    url: '/get-models-by-brand/' + brandId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        modelSelect.empty();
                        modelSelect.append('<option value="">Selecione o Modelo</option>');
                        $.each(data, function(key, value) {
                            modelSelect.append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    },
                    error: function() {
                        modelSelect.html('<option value="">Erro ao carregar modelos</option>');
                    }
                });
            } else {
                modelSelect.html('<option value="">Selecione a Marca primeiro</option>');
            }
        });
    });
</script>
@endpush