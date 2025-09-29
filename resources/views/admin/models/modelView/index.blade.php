@extends('admin.models.modelView.layout.principal')
@section('title', 'Duralux || Model View')
@section('content-modelView')

<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Modelo</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('models.index') }}">Modelos</a></li>
                <li class="breadcrumb-item">Visualizar</li>
            </ul>
        </div>
        <div class="page-header-right ms-auto">
            <div class="page-header-right-items">
                <div class="d-flex d-md-none">
                    <a href="javascript:void(0)" class="page-header-right-close-toggle">
                        <i class="feather-arrow-left me-2"></i>
                        <span>Back</span>
                    </a>
                </div>
                <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                    <a href="{{ route('models.create') }}" class="btn btn-primary">
                        <i class="feather-plus me-2"></i>
                        <span>Novo Cadastro</span>
                    </a>
                </div>
            </div>
            <div class="d-md-none d-flex align-items-center">
                <a href="javascript:void(0)" class="page-header-right-open-toggle">
                    <i class="feather-align-right fs-20"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- [ page-header ] end -->

    <!-- [ Main Content ] start -->
    <div class="main-content container-lg">
        <div class="row">
            <div class="col-lg-12">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <div class="card card-body general-info">
                    <div class="mb-4 d-flex align-items-center justify-content-between">
                        <h5 class="fw-bold mb-0">
                            <span class="d-block mb-2">Informações Gerais:</span>
                            <span class="fs-12 fw-normal text-muted d-block">Informações sobre o Modelo</span>
                        </h5>
                        <div class="hstack gap-2">
                            <a href="{{ route('models.edit', $model) }}" class="btn btn-sm btn-light-brand">Editar Modelo</a>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Imagem</div>
                        <div class="col-lg-10 hstack gap-1">
                            <div class="avatar-image avatar-lg">
                                <img src="{{ $model->image ? asset('storage/' . $model->image) : url('assets/images/logo-abbr.png') }}" alt="{{ $model->name }}" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Nome do Modelo</div>
                        <div class="col-lg-10 hstack gap-1">
                            <div class="avatar-text avatar-sm">
                                <i class="feather-git-commit"></i>
                            </div>
                            <span>{{ $model->name }}</span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Marca</div>
                        <div class="col-lg-10 hstack gap-1">
                            <div class="avatar-text avatar-sm">
                                <i class="feather-tag"></i>
                            </div>
                            <span>{{ $model->brand ? $model->brand->name : 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Data de Criação</div>
                        <div class="col-lg-10 hstack gap-1">
                            <div class="avatar-text avatar-sm">
                                <i class="feather-clock"></i>
                            </div>
                            <span>{{ $model->date ? \Carbon\Carbon::parse($model->date)->format('d/m/Y') : 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Descrição</div>
                        <div class="col-lg-10 hstack gap-1">
                            <div class="avatar-text avatar-sm">
                                <i class="feather-file-text"></i>
                            </div>
                            <span>{{ $model->description ?? 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>
@endsection