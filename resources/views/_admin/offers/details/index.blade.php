@extends('layout._admin.main')
@section('title', 'Duralux || Detalhes da Oferta')
@section('content-admin')

<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Detalhes da Oferta</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('offers.index') }}">Ofertas</a></li>
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
                    <a href="{{ route('offers.edit', $offer->id) }}" class="btn btn-primary">
                        <i class="feather-edit-3 me-2"></i>
                        <span>Editar Oferta</span>
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
    <div id="collapseOne" class="accordion-collapse collapse page-header-collapse">
        <div class="accordion-body pb-2">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card stretch stretch-full">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="javascript:void(0);" class="fw-bold d-block">
                                    <span class="d-block">Ofertas Ativas</span>
                                    <span class="fs-20 fw-bold d-block">10/20</span>
                                </a>
                                <div class="badge bg-soft-success text-success">
                                    <i class="feather-arrow-up fs-10 me-1"></i>
                                    <span>15.25%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card stretch stretch-full">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="javascript:void(0);" class="fw-bold d-block">
                                    <span class="d-block">Ofertas Expiradas</span>
                                    <span class="fs-20 fw-bold d-block">5/15</span>
                                </a>
                                <div class="badge bg-soft-danger text-danger">
                                    <i class="feather-arrow-down fs-10 me-1"></i>
                                    <span>10.50%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card stretch stretch-full">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="javascript:void(0);" class="fw-bold d-block">
                                    <span class="d-block">Ofertas Pendentes</span>
                                    <span class="fs-20 fw-bold d-block">3/10</span>
                                </a>
                                <div class="badge bg-soft-success text-success">
                                    <i class="feather-arrow-up fs-10 me-1"></i>
                                    <span>8.75%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card stretch stretch-full">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="javascript:void(0);" class="fw-bold d-block">
                                    <span class="d-block">Rascunhos</span>
                                    <span class="fs-20 fw-bold d-block">2/5</span>
                                </a>
                                <div class="badge bg-soft-danger text-danger">
                                    <i class="feather-arrow-down fs-10 me-1"></i>
                                    <span>5.30%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <span class="fs-12 fw-normal text-muted d-block">Informações Gerais sobre esta Oferta</span>
                        </h5>
                        <a href="{{ route('offers.edit', $offer->id) }}" class="btn btn-sm btn-light-brand">Editar Oferta</a>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Título da Oferta</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-git-commit"></i>
                                </div>
                                <span>{{ $offer->title }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Subtítulo</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-file-text"></i>
                                </div>
                                <span>{{ $offer->subtitle }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Data da Oferta</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-clock"></i>
                                </div>
                                <span>{{ \Carbon\Carbon::parse($offer->offer_date)->format('d/m/Y') }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Imagem da Oferta</div>
                        <div class="col-lg-10 hstack gap-1">
                             @if ($offer->image)
                    <div class="mt-3">
                       
                        <div class="mt-2">
                            <img src="{{ asset('uploads/offers/' . $offer->image) }}" alt="Imagem da oferta" class="img-thumbnail" style="max-width: 400px;">
                        </div>
                    </div>
                @endif
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Descrição</div>
                        <div class="col-lg-10 hstack gap-1">
                            <div class="border rounded p-3">
                                {!! nl2br(e($offer->description)) !!}
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