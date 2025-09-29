@extends('admin.suppliers.supplier.layout.principal')
@section('title', 'Duralux || Fornecedores')
@section('content-supplier')

<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Fornecedores</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Fornecedores</li>
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
                    <a href="{{ route('suppliers.create') }}" class="btn btn-primary">
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
                                                    <input type="checkbox" class="custom-control-input" id="checkAllSuppliers">
                                                    <label class="custom-control-label" for="checkAllSuppliers"></label>
                                                </div>
                                            </div>
                                        </th>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Telefone</th>
                                        <th>NIF</th>
                                        <th>Carros Associados</th>
                                        <th>Data de Cadastro</th>
                                        <th class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($suppliers as $supplier)
                                        <tr class="single-item">
                                            <td>
                                                <div class="item-checkbox ms-1">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input checkbox" id="checkBox_{{ $supplier->id }}">
                                                        <label class="custom-control-label" for="checkBox_{{ $supplier->id }}"></label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><a href="{{ route('suppliers.show', $supplier) }}" class="fw-bold">{{ $supplier->id }}</a></td>
                                            <td>
                                               <a href="javascript:void(0)" class="hstack gap-3">
                                                       <div class="avatar-image avatar-md">

                                                            <img src="{{ asset('uploads/supplier/supplier_photo/' . $supplier->photo) }}" 
                                                                class="img-fluid" 
                                                                alt="Fornecedor" 
                                                                style="width:80px; height:80px; object-fit:cover;"
                                                            >
                                                        </div>

                                                        <div>
                                                            <span class="text-truncate-1-line">{{ $supplier->name }}</span>
                                                            
                                                        </div>
                                                     </a>
                                            </td>

                                            <td>{{ $supplier->email }}</td>
                                            <td>{{ $supplier->phone ?? '-' }}</td>
                                            <td>{{ $supplier->nif ?? '-' }}</td>
                                            <td>
                                                <span class="badge bg-primary">{{ $supplier->cars_count }}</span>
                                            </td>
                                            <td class="fw-bold text-dark">
                                                {{ $supplier->registration_date ? \Carbon\Carbon::parse($supplier->registration_date)->format('d/m/Y') : 'N/A' }}
                                            </td>
                                            <td>
                                                <div class="hstack gap-2 justify-content-end">
                                                    <a href="{{ route('suppliers.show', $supplier) }}" class="avatar-text avatar-md">
                                                        <i class="feather feather-eye"></i>
                                                    </a>

                                                    <div class="dropdown">
                                                        <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                            <i class="feather feather-more-horizontal"></i>
                                                        </a>

                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item" href="{{ route('suppliers.edit', $supplier) }}">
                                                                    <i class="feather feather-edit-3 me-3"></i>
                                                                    <span>Editar</span>
                                                                </a>
                                                            </li>
                                                
                                                            <li class="dropdown-divider"></li>
                                                            <li>
                                                                <form action="{{ route('suppliers.destroy', $supplier) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este fornecedor?');">
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
                                    @empty
                                        <tr>
                                            <td colspan="9" class="text-center">Nenhum fornecedor encontrado.</td>
                                        </tr>
                                    @endforelse
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
