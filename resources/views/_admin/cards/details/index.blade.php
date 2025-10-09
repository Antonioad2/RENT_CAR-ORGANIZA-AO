@extends('layout._admin.main')
@section('title', 'Duralux || Cards View')
@section('content-admin')

<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Cartões</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('cards.index') }}">Home</a></li>
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
                    <a href="{{ route('cards.create') }}" class="btn btn-primary">
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

                <div class="card card-body general-info">
                    <div class="mb-4 d-flex align-items-center justify-content-between">
                        <h5 class="fw-bold mb-0">
                            <span class="d-block mb-2">Informações Gerais:</span>
                            <span class="fs-12 fw-normal text-muted d-block">Informações Gerais sobre este Cartão</span>
                        </h5>
                        <a href="{{ route('cards.edit', $card) }}" class="btn btn-sm btn-light-brand">Editar Cartão</a>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Banco</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-credit-card"></i>
                                </div>
                                <span>{{ $card->bank }}</span>
                            </a>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Número do Cartão</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-hash"></i>
                                </div>
                                <span>{{ $card->card_number }}</span>
                            </a>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Titular</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-user"></i>
                                </div>
                                <span>{{ $card->card_name }}</span>
                            </a>
                        </div>
                    </div>

                    {{-- <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Cliente</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-users"></i>
                                </div>
                                <span>{{ $card->client->name ?? 'Cliente não encontrado' }}</span>
                            </a>
                        </div>
                    </div> --}}

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Saldo</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm bg-soft-success text-success">
                                    <i class="feather-dollar-sign"></i>
                                </div>
                                <span>{{ number_format($card->balance, 2, ',', '.') }} Kz</span>
                            </a>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Data de Criação</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-clock"></i>
                                </div>
                                <span>{{ $card->created_at ? $card->created_at->format('d/m/Y H:i') : 'N/A' }}</span>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>
@endsection
