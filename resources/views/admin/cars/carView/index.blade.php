@extends('admin.cars.carView.layout.principal')
@section('title', 'Duralux || Car View')
@section('content-carView')

<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Carro</h5>
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
                    <a href="{{ route('cars.create', $car)}}" class="btn btn-primary">
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
                            <span class="fs-12 fw-normal text-muted d-block">Informações Gerais sobre este Carro</span>
                        </h5>
                        <a href="{{ route('cars.edit', $car)}}" class="btn btn-sm btn-light-brand">Editar Carro</a>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Marca do Carro</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-git-commit"></i>
                                </div>
                                <span>{{$car->brand->name}}</span>
                            </a>
                        </div>
                    </div>

                     <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Modelo do Carro</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-git-commit"></i>
                                </div>
                                <span>{{$car->models->name}}</span>
                            </a>
                        </div>
                    </div>

                     <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Tipo de Combustível do Carro</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-git-commit"></i>
                                </div>
                                <span>{{$car->fuel->name}}</span>
                            </a>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Cor do Carro</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-git-commit"></i>
                                </div>
                                <span>{{$car->color->name}}</span>
                            </a>
                        </div>
                    </div>

                    <!--Valor do Carro-->
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Preço diário do Carro</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-dollar-sign"></i>
                                </div>
                                <span>{{ number_format($car->price, 2) }}Kz</span>
                            </a>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Data de criação</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-clock"></i>
                                </div>
                                <span>{{$car->registration_date}}</span>
                            </a>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Descrição</div>
                        <div class="col-lg-8 hstack gap-1">{{$car->observations}}</div>
                    </div>

                        <!-- tipo de carro-->
                       <div class="row mb-4">
                        <div class="col-lg-2 fw-medium"><table>Tipo de Carro</table></div>
                        <div class="col-lg-8 hstack gap-1">{{$car->type_car}}</div>
                    </div>                    


                    <!--Status do Carro-->
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Status do Carro</div>
                        <div class="col-lg-10 hstack gap-1">
                            @if($car->status == 'available')
                                <span class="badge bg-success">Disponível</span>
                            @elseif($car->status == 'reserved')
                                <span class="badge bg-info">Reservado</span>
                            @elseif($car->status == 'rented')
                                <span class="badge bg-primary">Alugado</span>
                            @elseif($car->status == 'maintenance')
                                <span class="badge bg-warning">Em Manutenção</span>
                            @else
                                <span class="badge bg-danger">Indisponível</span>
                            @endif
                        </div>
                    </div>
                    
                    <!-- Seção para Documentos -->
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Documentos</div>
                        <div class="col-lg-10 hstack gap-3">
                            @if($car->car_insurance_upload)
                                <div class="hstack gap-2">
                                    <div class="avatar-text avatar-sm">
                                        <i class="feather-file-text"></i>
                                    </div>
                                    <a href="{{ asset('uploads/car/insurance_documents/' . $car->car_insurance_upload) }}" target="_blank">Seguro ({{ $car->car_insurance }})</a>
                                </div>
                            @else
                                <span>Sem documento de seguro</span>
                            @endif
                        </div>
                    </div>
                    

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium"></div>
                        <div class="col-lg-10 hstack gap-3">
                            @if($car->car_document_upload)
                                <div class="hstack gap-2">
                                    <div class="avatar-text avatar-sm">
                                        <i class="feather-file-text"></i>
                                    </div>
                                    <a href="{{ asset('uploads/car/car_documents/' . $car->car_document_upload) }}" target="_blank">Documento do Carro ({{ $car->car_document }})</a>
                                </div>
                            @else
                                <span>Sem documento do carro</span>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium"></div>
                        <div class="col-lg-10 hstack gap-3">
                            @if($car->inspection_document_upload)
                                <div class="hstack gap-2">
                                    <div class="avatar-text avatar-sm">
                                        <i class="feather-file-text"></i>
                                    </div>
                                    <a href="{{ asset('uploads/car/inspection_documents/' . $car->inspection_document_upload) }}" target="_blank">Documento de Inspeção ({{ $car->inspection_date }})</a>
                                </div>
                            @else
                                <span>Sem documento de inspeção</span>
                            @endif
                        </div>
                    </div>

                    <!-- Seção para Imagens do carro -->

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Imagens do Carro</div>
                        <div class="col-lg-10 hstack gap-3">
                            @if($car->image)
                                <div class="hstack gap-2">
                                    <div class="avatar-image">
                                        <a href="{{ asset('uploads/car/car_images/' . $car->image) }}">
                                            <img src="{{ asset('uploads/car/car_images/' . $car->image) }}" alt="Car Image" width="50" height="50" class="img-fluid">
                                        </a>
                                    </div>
                                    <span>Imagem do Carro</span>
                                </div>
                                @else
                                <span>Sem imagem do carro</span>
                            @endif
                        </div>
                    </div>
                    <!-- Seção para Imagens adicionais do carro -->
                    
                     <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Imagem Exterior</div>
                        <div class="col-lg-10 hstack gap-3">
                            @if ($car->exterior_image)
                                <div class="hstack gap-2">
                                    <div class="avatar-image">
                                        <a href="{{ asset($car->exterior_image) }}" target="_blank">
                                            <img src="{{ asset($car->exterior_image) }}" alt="Imagem do Exterior" width="50" height="50" class="img-fluid">
                                        </a>
                                    </div>
                                    <span>Imagem do Exterior</span>
                                </div>
                            @else
                                <span>Sem Imagem do Exterior</span>
                            @endif
                        </div>
                    </div>

                     <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Imagem do Interior</div>
                        <div class="col-lg-10 hstack gap-3">
                            @if ($car->interior_image)
                                <div class="hstack gap-2">
                                    <div class="avatar-image">
                                        <a href="{{ asset($car->interior_image) }}" target="_blank">
                                            <img src="{{ asset($car->interior_image) }}" alt="Imagem do Interior" width="50" height="50" class="img-fluid">
                                        </a>
                                    </div>
                                    <span>Imagem do Interior</span>
                                </div>
                            @else
                                <span>Sem Imagem do Interior</span>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Imagem Lateral</div>
                        <div class="col-lg-10 hstack gap-3">
                            @if ($car->lateral_image)
                                <div class="hstack gap-2">
                                    <div class="avatar-image">
                                        <a href="{{ asset($car->lateral_image) }}" target="_blank">
                                            <img src="{{ asset($car->lateral_image) }}" alt="Imagem Lateral" width="50" height="50" class="img-fluid">
                                        </a>
                                    </div>
                                    <span>Imagem Lateral</span>
                                </div>
                            @else
                                <span>Sem Imagem Lateral</span>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>
@endsection