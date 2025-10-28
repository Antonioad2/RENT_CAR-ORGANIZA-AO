@extends('layout._admin.main')
@section('title', 'Duralux || Detalhes do Acessório')
@section('content-admin')

<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Detalhes do Acessório</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('accessories.index') }}">Acessórios</a></li>
                <li class="breadcrumb-item">Detalhes</li>
            </ul>
        </div>

        <div class="page-header-right ms-auto">
            <div class="page-header-right-items">
                <div class="d-flex d-md-none">
                    <a href="javascript:void(0)" class="page-header-right-close-toggle">
                        <i class="feather-arrow-left me-2"></i>
                        <span>Voltar</span>
                    </a>
                </div>
                <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                    <a href="{{ route('accessories.edit', $accessory->id) }}" class="btn btn-primary">
                        <i class="feather-edit-3 me-2"></i>
                        <span>Editar Acessório</span>
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
                <div class="card card-body general-info">
                    <div class="mb-4 d-flex align-items-center justify-content-between">
                        <h5 class="fw-bold mb-0">
                            <span class="d-block mb-2">Informações Gerais:</span>
                            <span class="fs-12 fw-normal text-muted d-block">Informações gerais sobre este acessório</span>
                        </h5>
                        <a href="{{ route('accessories.edit', $accessory->id) }}" class="btn btn-sm btn-light-brand">Editar</a>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Nome</div>
                        <div class="col-lg-10 hstack gap-2">
                            <div class="avatar-text avatar-sm">
                                <i class="feather-tag"></i>
                            </div>
                            <span>{{ $accessory->name }}</span>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Preço</div>
                        <div class="col-lg-10 hstack gap-2">
                            <div class="avatar-text avatar-sm">
                                <i class="feather-dollar-sign"></i>
                            </div>
                            <span>{{ number_format($accessory->price, 2, ',', '.') }} Kz</span>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Número de Contato</div>
                        <div class="col-lg-10 hstack gap-2">
                            <div class="avatar-text avatar-sm">
                                <i class="feather-phone"></i>
                            </div>
                            <span>{{ $accessory->number ?? 'N/A' }}</span>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">WhatsApp</div>
                        <div class="col-lg-10 hstack gap-2">
                            <div class="avatar-text avatar-sm">
                                <i class="feather-message-circle"></i>
                            </div>
                            <span>{{ $accessory->whatsapp ?? 'N/A' }}</span>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Imagem</div>
                        <div class="col-lg-10">
                            @if ($accessory->image)
                                <div class="mt-2">
                                    <img src="{{ asset('uploads/accessories/' . $accessory->image) }}" 
                                         alt="Imagem do acessório" 
                                         class="img-thumbnail" 
                                         style="max-width: 400px;">
                                </div>
                            @else
                                <span class="text-muted">Sem imagem disponível</span>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Descrição</div>
                        <div class="col-lg-10">
                            <div class="border rounded p-3 bg-light">
                                {!! nl2br(e($accessory->description ?? 'Sem descrição')) !!}
                            </div>
                        </div>
                    </div>

                   {{--  <div class="text-end">
                        <a href="{{ route('accessories.index') }}" class="btn btn-secondary">
                            <i class="feather-arrow-left me-1"></i> Voltar à lista
                        </a>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>

@endsection
