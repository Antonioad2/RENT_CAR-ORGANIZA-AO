@extends('admin.drivers.driver.layout.principal')
@section('title', 'Duralux || Novo Motorista')
@section('content-driver')

<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Novo Motorista</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('drivers.index') }}">Motoristas</a></li>
                <li class="breadcrumb-item">Novo</li>
            </ul>
        </div>
        <div class="page-header-right ms-auto">
            <div class="page-header-right-items">
                 {{--<div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                    <a href="{{ route('drivers.index') }}" class="btn btn-light">
                        <i class="feather-arrow-left me-2"></i>
                        <span>Voltar</span>
                    </a>
                </div>--}} 
            </div>
        </div>
    </div>
    <!-- [ page-header ] end -->

    <!-- [ Main Content ] start -->
    <div class="main-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card stretch stretch-full">
                    <div class="card-body">
                        <form action="{{ route('drivers.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <!-- Nome Completo -->
                                <div class="col-md-6 mb-3">
                                    <label for="full_name" class="form-label">Nome Completo <span class="text-danger">*</span></label>
                                    <input type="text" name="full_name" placeholder="António Adão" id="full_name" class="form-control @error('full_name') is-invalid @enderror" value="{{ old('full_name') }}" required>
                                    @error('full_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" name="email" id="email" placeholder="antonioadao@gmail.com" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Telefone -->
                                <div class="col-md-6 mb-3">
                                    <label for="phone_number" class="form-label">Telefone <span class="text-danger">*</span></label>
                                    <input type="text" name="phone_number" placeholder="922 000 000" id="phone_number" class="form-control @error('phone_number') is-invalid @enderror" value="{{ old('phone_number') }}" required>
                                    @error('phone_number')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Gênero -->
                                <div class="col-md-6 mb-3">
                                    <label for="gender" class="form-label">Gênero</label>
                                    <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror">
                                        <option value="">Selecione</option>
                                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Masculino</option>
                                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Feminino</option>
                                    </select>
                                    @error('gender')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Anos de Experiência -->
                                <div class="col-md-6 mb-3">
                                    <label for="experience_years" class="form-label">Anos de Experiência <span class="text-danger">*</span></label>
                                    <input type="number" name="experience_years" id="experience_years" class="form-control @error('experience_years') is-invalid @enderror" value="{{ old('experience_years', 0) }}" min="0" required>
                                    @error('experience_years')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Endereço -->
                                <div class="col-md-6 mb-9">
                                    <label for="address" class="form-label">Endereço <span class="text-danger">*</span></label>
                                    <textarea name="address" id="address" placeholder="Rangel, bairro CTT" class="form-control @error('address') is-invalid @enderror" rows="1" required>{{ old('address') }}</textarea>
                                    @error('address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Documento de Identificação -->
                                <div class="col-md-6 mb-3">
                                    <label for="id_image" class="form-label">Imagem de BI/PASSPORTE<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" name="document_identification" id="document_identification" placeholder="008244555LA030" class="form-control @error('document_identification') is-invalid @enderror" value="{{ old('document_identification') }}" required>
                                        @error('document_identification')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    
                                        <input type="file" name="id_image" id="id_image" class="form-control @error('id_image') is-invalid @enderror"  required>
                                        @error('id_image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Imagem da Licença -->
                                <div class="col-md-6 mb-3">
                                    <label for="license_image" class="form-label">Imagem da Carta de Condução<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <select name="license_type" id="license_type" class="form-select" style="font-size: 14px" required>
                                            <option value="">Ligeiro Profissional</option>
                                            <option value="">Pesado Profissional</option>
                                        </select>
                                        <input type="file" name="license_image" id="license_image" class="form-control @error('license_image') is-invalid @enderror"  required>
                                        @error('license_image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Data de Expiração da Licença -->
                                <div class="col-md-6 mb-3">
                                    <label for="license_expiry_date" class="form-label">Tipo de Motorista & Expiração da Carta de Condução<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <select name="driver_type" class="form-select" style="font-size: 14px" id="driver_type">
                                            <option value="">Motorista Local</option>
                                            <option value="">Motorista Interprovincial</option>
                                        </select>
                                        <input type="date" name="license_expiry_date" id="license_expiry_date" class="form-control @error('license_expiry_date') is-invalid @enderror" value="{{ old('license_expiry_date') }}" required>
                                        @error('license_expiry_date')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Preço Diário -->
                                <div class="col-md-6 mb-3">
                                    <label for="daily_price" class="form-label">Preço Diário (Kz) <span class="text-danger">*</span></label>
                                    <input type="number" name="daily_price" id="daily_price" class="form-control @error('daily_price') is-invalid @enderror" value="{{ old('daily_price', 0) }}" min="0" step="0.01" required>
                                    @error('daily_price')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>

                            <!-- Botões -->
                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('drivers.index') }}" class="btn btn-light">Cancelar</a>
                                <button type="submit" class="btn btn-primary">Salvar Motorista</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>
@endsection