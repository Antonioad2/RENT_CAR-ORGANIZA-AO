@extends('admin.brands.brand.layout.principal')
@section('title', 'Duralux || Marcas')
@section('content-brands')

<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Marcas</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Marcas</li>
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
                  
                    <a href="{{ route('brands.create') }}" class="btn btn-primary">
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
                                        <th>Logo</th>
                                        <th>Nome</th>
                                        <th>Descrição</th>
                                        <th>Data de Cadastro</th>
                                        <th class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($brands as $brand)
                                        <tr class="single-item">
                                            <td>
                                                <div class="item-checkbox ms-1">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input checkbox" id="checkBox_1">
                                                        <label class="custom-control-label" for="checkBox_1"></label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><a href="{{ route('brands.create') }}" class="fw-bold">{{$brand->id}}</a></td>

                                            <td>
                                                 @if($brand->image)
                                                    <a href="{{ asset('uploads/brand/brand_logo/' . $brand->image) }}">
                                                        <img src="{{ asset('uploads/brand/brand_logo/' . $brand->image) }}" alt="Brand Logo" width="50" height="50" class="img-fluid">
                                                    </a>                                                                                                                  
                                                    @else
                                                        <span>Sem imagem do carro</span>
                                                 @endif
                                            </td>

                                            <td>
                                                    <div>
                                                        <span class="text-truncate-1-line">{{$brand->name}}</span>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="fw-bold text-dark">{{ $brand->short_description = \Str::limit($brand->description, 40)}}</td>
                                            <td class="fw-bold text-dark">{{ $brand->date ? \Carbon\Carbon::parse($brand->date)->format('d/m/Y') : 'N/A' }}</td>
                                            <td>
                                                <div class="hstack gap-2 justify-content-end">
                                                    <a href="{{ route('brands.show', $brand) }}" class="avatar-text avatar-md">
                                                        <i class="feather feather-eye"></i>
                                                    </a>
                                                    
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                            <i class="feather feather-more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item" href="{{ route('brands.edit', $brand) }}">
                                                                    <i class="feather feather-edit-3 me-3"></i>
                                                                    <span>Edit</span>
                                                                </a>
                                                            </li>
                                                            
                                                            <li class="dropdown-divider"></li>
                                                            <li>
                                                                <a class="dropdown-item" href="{{ route('brands.destroy', $brand) }}">
                                                                    <i class="feather feather-trash-2 me-3"></i>
                                                                    <span>Delete</span>
                                                                </a>
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
    <!-- [ Main Content ] end -->
</div>
@endsection