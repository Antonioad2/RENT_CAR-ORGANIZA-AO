@extends('admin.clients.clientView.layout.principal')
@section('title', 'Duralux || Client View')
@section('content-clientView')

<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Clientes</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                    <a href="{{ route('clients.create')}}" class="btn btn-primary">
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
    <div id="collapseOne" class="accordion-collapse collapse page-header-collapse">
        <div class="accordion-body pb-2">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card stretch stretch-full">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="javascript:void(0);" class="fw-bold d-block">
                                    <span class="d-block">Paid</span>
                                    <span class="fs-20 fw-bold d-block">78/100</span>
                                </a>
                                <div class="badge bg-soft-success text-success">
                                    <i class="feather-arrow-up fs-10 me-1"></i>
                                    <span>36.85%</span>
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
                                    <span class="d-block">Unpaid</span>
                                    <span class="fs-20 fw-bold d-block">38/50</span>
                                </a>
                                <div class="badge bg-soft-danger text-danger">
                                    <i class="feather-arrow-down fs-10 me-1"></i>
                                    <span>23.45%</span>
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
                                    <span class="d-block">Overdue</span>
                                    <span class="fs-20 fw-bold d-block">15/30</span>
                                </a>
                                <div class="badge bg-soft-success text-success">
                                    <i class="feather-arrow-up fs-10 me-1"></i>
                                    <span>25.44%</span>
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
                                    <span class="d-block">Draft</span>
                                    <span class="fs-20 fw-bold d-block">3/10</span>
                                </a>
                                <div class="badge bg-soft-danger text-danger">
                                    <i class="feather-arrow-down fs-10 me-1"></i>
                                    <span>12.68%</span>
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
                            <span class="fs-12 fw-normal text-muted d-block">Informações Gerais sobre este Cliente</span>
                        </h5>
                        <a href="{{ route('clients.edit', $client)}}" class="btn btn-sm btn-light-brand">Editar Cliente</a>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Nome</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-user"></i>
                                </div>
                                <span>{{$client->name}}</span>
                            </a>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Email</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-mail"></i>
                                </div>
                                <span>{{$client->email}}</span>
                            </a>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Contacto</div>
                        <div class="col-lg-10 hstack gap-1">{{$client->phone}}</div>
                    </div>
                    
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Endereço</div>
                        <div class="col-lg-10 hstack gap-1">{{$client->address}}</div>  
                    </div> 
                                        
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Número BI</div>
                        <div class="col-lg-10 hstack gap-1">{{$client->bi}}</div>
                    </div>

                     <div class="row mb-4">

                        @if($client->bi_upload)
                            <div class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-file-text"></i>
                                </div>
                                <a href="{{ asset('uploads/client/client_bi_upload/' . $client->bi_upload) }}" target="_blank">BI do Cliente ({{ $client->bi_upload }})</a>
                            </div>
                        @else
                            <span>Sem BI do Cliente</span>
                        @endif

                     </div>

                     <div class="row mb-4">

                         @if($client->driver_license_upload)
                            <div class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-file-text"></i>
                                </div>
                                <a href="{{ asset('uploads/client/driver_license_upload/' . $client->driver_license_upload) }}" target="_blank">Carta de Condução ({{ $client->driver_license_upload }})</a>
                            </div>
                        @else
                            <span>Sem Carta de Condução</span>
                        @endif
                     </div>
                     

                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>
@endsection
