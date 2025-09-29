@extends('admin.drivers.driver.layout.principal')
@section('title', 'Duralux || Editar Motorista')
@section('content-driver')

    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Editar Motorista</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('drivers.index') }}">Motoristas</a></li>
                    <li class="breadcrumb-item">Editar</li>
                </ul>
            </div>
        </div>
        <!-- [ page-header ] end -->

        <!-- [ Main Content ] start -->
        <div class="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card stretch stretch-full">
                        <div class="card-body">
                            <form action="{{ route('drivers.update', $driver) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <!-- Nome Completo -->
                                    <div class="col-md-6 mb-3">
                                        <label for="full_name" class="form-label">Nome Completo <span class="text-danger">*</span></label>
                                        <input type="text" name="full_name" id="full_name" class="form-control @error('full_name') is-invalid @enderror"
                                            value="{{ old('full_name', $driver->full_name) }}" required>
                                        @error('full_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <!-- Email -->
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email', $driver->email) }}" required>
                                        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <!-- Telefone -->
                                    <div class="col-md-6 mb-3">
                                        <label for="phone_number" class="form-label">Telefone <span class="text-danger">*</span></label>
                                        <input type="text" name="phone_number" id="phone_number" class="form-control @error('phone_number') is-invalid @enderror"
                                            value="{{ old('phone_number', $driver->phone_number) }}" required>
                                        @error('phone_number') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <!-- Gênero -->
                                    <div class="col-md-6 mb-3">
                                        <label for="gender" class="form-label">Gênero</label>
                                        <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror">
                                            <option value="">Selecione</option>
                                            <option value="male" {{ old('gender', $driver->gender) == 'male' ? 'selected' : '' }}>Masculino</option>
                                            <option value="female" {{ old('gender', $driver->gender) == 'female' ? 'selected' : '' }}>Feminino</option>
                                        </select>
                                        @error('gender') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <!-- Anos de Experiência -->
                                    <div class="col-md-6 mb-3">
                                        <label for="experience_years" class="form-label">Anos de Experiência <span class="text-danger">*</span></label>
                                        <input type="number" name="experience_years" id="experience_years" class="form-control @error('experience_years') is-invalid @enderror"
                                            value="{{ old('experience_years', $driver->experience_years) }}" min="0" required>
                                        @error('experience_years') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <!-- Endereço -->
                                    <div class="col-md-6 mb-3">
                                        <label for="address" class="form-label">Endereço <span class="text-danger">*</span></label>
                                        <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror" rows="1" required>{{ old('address', $driver->address) }}</textarea>
                                        @error('address') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <!-- Documento de Identificação -->
                                    <div class="col-md-6 mb-3">
                                        <label for="id_image" class="form-label">Imagem de BI/PASSPORTE<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" name="document_identification" id="document_identification"
                                                class="form-control @error('document_identification') is-invalid @enderror"
                                                value="{{ old('document_identification', $driver->document_identification) }}" required>
                                            <input type="file" name="id_image" id="id_image"
                                                class="form-control @error('id_image') is-invalid @enderror" accept="image/*,application/pdf">
                                        </div>
                                        @if($driver->id_image)
                                            <div class="mt-2">
                                                <strong>Imagem Atual:</strong><br>
                                                @if(Str::endsWith($driver->id_image, '.pdf'))
                                                    <a href="{{ asset('storage/'.$driver->id_image) }}" target="_blank">📄 Ver Documento</a>
                                                @else
                                                    <img src="{{ asset('storage/'.$driver->id_image) }}" alt="Imagem de Identificação" class="img-fluid" style="width:100px; height:100px; object-fit:cover;">
                                                @endif
                                            </div>
                                        @endif
                                        @error('id_image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <!-- Imagem da Licença -->
                                    <div class="col-md-6 mb-3">
                                        <label for="license_image" class="form-label">Imagem da Carta de Condução<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <select name="license_type" id="license_type" class="form-select" style="font-size: 14px" required>
                                                <option value="Ligeiro Profissional" {{ old('license_type', $driver->license_type) == 'Ligeiro Profissional' ? 'selected' : '' }}>Ligeiro Profissional</option>
                                                <option value="Pesado Profissional" {{ old('license_type', $driver->license_type) == 'Pesado Profissional' ? 'selected' : '' }}>Pesado Profissional</option>
                                            </select>
                                            <input type="file" name="license_image" id="license_image"
                                                class="form-control @error('license_image') is-invalid @enderror" accept="image/*,application/pdf">
                                        </div>
                                        @if($driver->license_image)
                                            <div class="mt-2">
                                                <strong>Imagem Atual:</strong><br>
                                                @if(Str::endsWith($driver->license_image, '.pdf'))
                                                    <a href="{{ asset('storage/'.$driver->license_image) }}" target="_blank">📄 Ver Licença</a>
                                                @else
                                                    <img src="{{ asset('storage/'.$driver->license_image) }}" alt="Imagem da Licença" class="img-fluid" style="width:100px; height:100px; object-fit:cover;">
                                                @endif
                                            </div>
                                        @endif
                                        @error('license_image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <!-- Tipo de Motorista & Data de Expiração -->
                                    <div class="col-md-6 mb-3">
                                        <label for="license_expiry_date" class="form-label">Tipo de Motorista & Expiração da Carta<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <select name="driver_type" id="driver_type" class="form-select" style="font-size: 14px" required>
                                                <option value="Motorista Local" {{ old('driver_type', $driver->driver_type) == 'Motorista Local' ? 'selected' : '' }}>Motorista Local</option>
                                                <option value="Motorista Interprovincial" {{ old('driver_type', $driver->driver_type) == 'Motorista Interprovincial' ? 'selected' : '' }}>Motorista Interprovincial</option>
                                            </select>
                                            <input type="date" name="license_expiry_date" id="license_expiry_date"
                                                class="form-control @error('license_expiry_date') is-invalid @enderror"
                                                value="{{ old('license_expiry_date', $driver->license_expiry_date) }}" required>
                                        </div>
                                        @error('license_expiry_date') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <!-- Preço Diário -->
                                    <div class="col-md-6 mb-3">
                                        <label for="daily_price" class="form-label">Preço Diário (Kz) <span class="text-danger">*</span></label>
                                        <input type="number" name="daily_price" id="daily_price" class="form-control @error('daily_price') is-invalid @enderror"
                                            value="{{ old('daily_price', $driver->daily_price) }}" min="0" step="0.01" required>
                                        @error('daily_price') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                </div>

                                <!-- Botões -->
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{ route('drivers.index') }}" class="btn btn-light">Cancelar</a>
                                    <button type="submit" class="btn btn-primary">Atualizar Motorista</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
