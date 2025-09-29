@extends('admin.reserves.reserveView.layout.principal')
@section('title', 'Duralux || Ver Reserva')
@section('content-reserveView')

<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Reserva</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('reserves.index') }}">Reservas</a></li>
                <li class="breadcrumb-item">Visualizar</li>
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
                    <a href="{{ route('reserves.create') }}" class="btn btn-primary">
                        <i class="feather-plus me-2"></i>
                        <span>Nova Reserva</span>
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
                            <span class="fs-12 fw-normal text-muted d-block">Informações sobre esta reserva</span>
                        </h5>
                        <a href="{{ route('reserves.edit', $reserve->id) }}" class="btn btn-sm btn-light-brand">Editar Reserva</a>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Cliente</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-user"></i>
                                </div>
                                <span>{{ $reserve->client->name }}</span>
                            </a>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Carro</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-truck"></i>
                                </div>
                                <span>{{ $reserve->car->brand->name }} {{ $reserve->car->models->name }}</span>
                            </a>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Motorista</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-user-check"></i>
                                </div>
                                <span>
                                    {{ $reserve->driver ? $reserve->driver->full_name : 'Sem motorista' }}
                                </span>
                            </a>
                        </div>
                    </div>

                    <!-- Local de Entrega -->
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Local de Entrega</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-map-pin"></i>
                                </div>
                                <span>{{ $reserve->pickup_location }}</span>
                            </a>
                        </div>
                    </div>

                    <!-- Local de Devoluçao -->
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Local de Retorno</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-map-pin"></i>
                                </div>
                                <span>{{ $reserve->return_location }}</span>
                            </a>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Valor Total</div>
                        <div class="col-lg-10 hstack gap-1">
                            <div class="avatar-text avatar-sm">
                                <i class="feather-dollar-sign"></i>
                            </div>
                            <span>{{ number_format($reserve->total_amount, 2, ',', '.') }} Kz</span>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Data e hora de Início</div>
                        <div class="col-lg-10 hstack gap-1">
                            <div class="avatar-text avatar-sm">
                                <i class="feather-calendar"></i>
                            </div>
                            <span>{{ \Carbon\Carbon::parse($reserve->start_date)->format('d/m/Y') }} ||</span>
                            <span>{{ \Carbon\Carbon::parse($reserve->delivery_time)->format('h:m') }}</span>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Data e hora de Término</div>
                        <div class="col-lg-10 hstack gap-1">
                            <div class="avatar-text avatar-sm">
                                <i class="feather-calendar"></i>
                            </div>
                            <span>{{ \Carbon\Carbon::parse($reserve->end_date)->format('d/m/Y') }} ||</span>
                            <span>{{ \Carbon\Carbon::parse($reserve->return_time)->format('h:m') }}</span>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Recursos</div>
                        <div class="col-lg-10 hstack gap-2 flex-wrap">
                            <div class="avatar-text avatar-sm">
                                <i class="feather-package"></i>
                            </div>
                            @php
                                // Verifica se já é um array, caso contrário tenta decodificar
                                $resources = is_array($reserve->resources) 
                                    ? $reserve->resources 
                                    : (json_decode($reserve->resources, true) ?? []);
                            @endphp
                            @if (count($resources) > 0)
                                @foreach ($resources as $res)
                                    <span class="badge bg-primary">
                                        {{ config("resources.extras.$res.label") }}
                                    </span>
                                @endforeach
                            @else
                                <span>Nenhum</span>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Status</div>
                        <div class="col-lg-10 hstack gap-1">
                            <div class="avatar-text avatar-sm">
                                <i class="feather-info"></i>
                            </div>
                             <span class="badge bg-warning">{{ ucfirst(str_replace('_', ' ', $reserve->status)) }}</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>
@endsection