@extends('layout._admin.main')
@section('title', 'Duralux || Detalhes da Venda')
@section('content-admin')

<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Detalhes da Venda</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('sells.index') }}">Vendas</a></li>
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
                    <a href="{{ route('sells.edit', $sell->id) }}" class="btn btn-primary">
                        <i class="feather-edit-3 me-2"></i>
                        <span>Editar Venda</span>
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
                            <span class="fs-12 fw-normal text-muted d-block">Detalhes sobre esta venda</span>
                        </h5>
                        <a href="{{ route('sells.edit', $sell->id) }}" class="btn btn-sm btn-light-brand">Editar Venda</a>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Nome da Viatura</div>
                        <div class="col-lg-10 hstack gap-1">
                            <div class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-car"></i>
                                </div>
                                <span>{{ $sell->name }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Preço</div>
                        <div class="col-lg-10 hstack gap-1">
                            <div class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-tag"></i>
                                </div>
                                <span>{{ number_format($sell->price, 2, ',', '.') }} Kz</span>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Número de Contato</div>
                        <div class="col-lg-10 hstack gap-1">
                            <div class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-phone"></i>
                                </div>
                                <span>{{ $sell->number }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">WhatsApp</div>
                        <div class="col-lg-10 hstack gap-1">
                            <div class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-message-circle"></i>
                                </div>
                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $sell->whatsapp) }}" target="_blank">
                                    {{ $sell->whatsapp }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Imagem da Viatura</div>
                        <div class="col-lg-10">
                            @if ($sell->image)
                                <img src="{{ asset('uploads/sells/' . $sell->image) }}" alt="Imagem da viatura"
                                     class="img-thumbnail mt-2" style="max-width: 400px;">
                            @else
                                <span class="text-muted">Nenhuma imagem disponível.</span>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Descrição</div>
                        <div class="col-lg-10">
                            <div class="border rounded p-3">
                                {!! nl2br(e($sell->description)) !!}
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>

@endsection
