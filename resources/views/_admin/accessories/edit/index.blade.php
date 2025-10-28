@extends('layout._admin.main')
@section('title', 'Duralux || Editar Acessório')
@section('content-admin')

<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Editar Acessório</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('accessories.index') }}">Acessórios</a></li>
                <li class="breadcrumb-item">Editar</li>
            </ul>
        </div>
    </div>
    <!-- [ page-header ] end -->

    <!-- [ main-content ] start -->
    <div class="main-content">
        <div class="card invoice-container">
            <div class="card-header">
                <h5>Atualizar Acessório</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('accessories.update', $accessory->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row g-3">

                        <div class="col-lg-6">
                            <label for="name" class="form-label">Nome do Acessório</label>
                            <input type="text" name="name" id="name" class="form-control" 
                                   value="{{ old('name', $accessory->name) }}" required>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        

                        <div class="col-lg-6">
                            <label for="price" class="form-label">Preço (Kz)</label>
                            <input type="number" step="0.01" name="price" id="price" class="form-control" 
                                   value="{{ old('price', $accessory->price) }}" required>
                            @error('price')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-lg-6">
                            <label for="number" class="form-label">Número de Telefone</label>
                            <input type="text" name="number" id="number" class="form-control" 
                                   value="{{ old('number', $accessory->number) }}">
                            @error('number')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-lg-6">
                            <label for="whatsapp" class="form-label">Número do WhatsApp</label>
                            <input type="text" name="whatsapp" id="whatsapp" class="form-control" 
                                   value="{{ old('whatsapp', $accessory->whatsapp) }}">
                            @error('whatsapp')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-lg-6">
                            <label for="image" class="form-label">Imagem do Acessório</label>
                            <input type="file" name="image" id="image" class="form-control">
                            @error('image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror

                            @if ($accessory->image)
                                <div class="mt-2">
                                    <img src="{{ asset('uploads/accessories/' . $accessory->image) }}" 
                                         alt="Imagem do Acessório" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                        </div>

                        <div class="col-lg-12">
                            <label for="description" class="form-label">Descrição</label>
                            <textarea name="description" id="description" class="form-control" rows="4">{{ old('description', $accessory->description) }}</textarea>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                    </div>

                    <div class="mt-4 d-flex justify-content-end">
                        <a href="{{ route('accessories.index') }}" class="btn btn-secondary me-2">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- [ main-content ] end -->
</div>

@endsection
