@extends('admin.suppliers.supplierView.layout.principal')
@section('title', 'Duralux || Supplier View')
@section('content-supplierView')

<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Fornecedores</h5>
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
                    <a href="{{ route('suppliers.create')}}" class="btn btn-primary">
                        <i class="feather-plus me-2"></i>
                        <span>Novo Casdastro</span>
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
                            <span class="fs-12 fw-normal text-muted d-block">Informações Gerais sobre este Fornecedor</span>
                        </h5>
                        <a href="{{ route('suppliers.edit', $supplier)}}" class="btn btn-sm btn-light-brand">Editar Fornecedor</a>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Nome</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-git-commit"></i>
                                </div>
                                <span>{{$supplier->name}}</span>
                            </a>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Email</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-clock"></i>
                                </div>
                                <span>{{$supplier->email}}</span>
                            </a>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Contacto</div>
                        <div class="col-lg-10 hstack gap-1">{{$supplier->phone}}</div>
                    </div>
                    
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Endereço</div>
                        <div class="col-lg-10 hstack gap-1">{{$supplier->address}}</div>  
                    </div> 
                                        
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Número BI</div>
                        <div class="col-lg-10 hstack gap-1">{{$supplier->bi}}</div>
                    </div>

                     <div class="row mb-4">

                        @if($supplier->bi_upload)
                            <div class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-file-text"></i>
                                </div>
                                <a href="{{ asset('uploads/supplier/supplier_bi_upload/' . $supplier->bi_upload) }}" target="_blank">BI do Funcionário ({{ $supplier->bi_upload }})</a>
                            </div>
                        @else
                            <span>Sem BI do Funcionário</span>
                        @endif

                     </div>

                    <div class="row mb-4">

                         @if($supplier->vehicle_logbook_upload)
                            <div class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-file-text"></i>
                                </div>
                                <a href="{{ asset('uploads/supplier/vehicle_logbook_upload/' . $supplier->vehicle_logbook_upload) }}" target="_blank">Documento do Carro ({{ $supplier->vehicle_logbook_upload }})</a>
                            </div>
                        @else
                            <span>Sem BI do Funcionário</span>
                        @endif
                     </div>
                     

                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>
@endsection