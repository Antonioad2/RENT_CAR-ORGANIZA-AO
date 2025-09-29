@extends('admin.cars.car.layout.principal')
@section('title', 'Duralux || Carros')
@section('content-car')

<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Carros</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Carros</li>
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
                    <a href="{{ route('cars.create') }}" class="btn btn-primary">
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

    <div class="main-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card stretch stretch-full">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover" id="paymentList">
                                <thead>
                                    <tr>
                                        <th class="wd-30">
                                            <div class="btn-group mb-1">
                                                <div class="custom-control custom-checkbox ms-1">
                                                    <input type="checkbox" class="custom-control-input" id="checkAllPayment">
                                                    <label class="custom-control-label" for="checkAllPayment"></label>
                                                </div>
                                            </div>
                                        </th>
                                        <th>ID</th>
                                        <th>Marca</th>
                                        <th>Modelo</th>
                                        <th>Fornecedor</th>
                                        <th>Estado</th>
                                        <th>Data de Cadastro</th>
                                        <th class="text-end">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cars as $car)
                                        <tr class="single-item">
                                            <td>
                                                <div class="item-checkbox ms-1">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input checkbox" id="checkBox_{{ $car->id }}">
                                                        <label class="custom-control-label" for="checkBox_{{ $car->id }}"></label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><a href="{{ route('cars.show', $car) }}" class="fw-bold">{{ $car->id }}</a></td>
                                            <td>
                                                <a href="javascript:void(0)" class="hstack gap-3">
                                                        @if($car->brand->image)
                                                            <a href="{{ asset('uploads/brand/brand_logo/' . $car->brand->image) }}">
                                                                <img src="{{ asset('uploads/brand/brand_logo/' . $car->brand->image) }}" alt="Brand Logo" width="50" height="50" class="img-fluid">
                                                            </a>                                                                                                                  
                                                            @else
                                                                <span>Sem imagem do carro</span>
                                                        @endif
                                                </a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)" class="hstack gap-3">                                                    
                                                    <div>
                                                        <span class="text-truncate-1-line">{{ $car->models->name }}</span>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>{{ $car->supplier->name ?? 'N/A' }}</td>
                                            <td class="fw-bold text-dark">
                                                @if($car->status == 'available')
                                                    <span class="badge bg-success">Disponível</span>
                                                @elseif($car->status == 'reserved')
                                                    <span class="badge bg-info">Reservado</span>
                                                @elseif($car->status == 'rented')
                                                    <span class="badge bg-primary">Alugado</span>
                                                @elseif($car->status == 'maintenance')
                                                    <span class="badge bg-warning text-dark">Em Manutenção</span>
                                                @else
                                                    <span class="badge bg-danger">Indisponível</span>
                                                @endif
                                            </td>
                                            <td class="fw-bold text-dark">{{ $car->registration_date ? \Carbon\Carbon::parse($car->registration_date)->format('d/m/Y') : 'N/A' }}</td>
                                            
                                            <!-- Ações -->
                                            <td>
                                                <div class="hstack gap-2 justify-content-end">
                                                    <a href="{{ route('cars.show', $car) }}" class="avatar-text avatar-md">
                                                        <i class="feather feather-eye"></i>
                                                    </a>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                            <i class="feather feather-more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item" href="{{ route('cars.edit', $car) }}">
                                                                    <i class="feather feather-edit-3 me-3"></i>
                                                                    <span>Editar</span>
                                                                </a>
                                                            </li>
                                                            <li class="dropdown-divider"></li>
                                                            <li>
                                                                <form action="{{ route('cars.destroy', $car) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este carro?');">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="dropdown-item">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Excluir</span>
                                                                    </button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection