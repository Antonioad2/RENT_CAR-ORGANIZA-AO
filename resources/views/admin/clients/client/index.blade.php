@extends('admin.clients.client.layout.principal')
@section('title', 'Duralux || Clientes')
@section('content-client')

<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Clientes</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Clientes</li>
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
                    <a href="{{ route('clients.create') }}" class="btn btn-primary">
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
                                                    <input type="checkbox" class="custom-control-input" id="checkAllClients">
                                                    <label class="custom-control-label" for="checkAllClients"></label>
                                                </div>
                                            </div>
                                        </th>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Telefone</th>
                                        <th>BI</th>
                                        <th>Carta de condução</th>
                                        <th>Data de Cadastro</th>
                                        <th class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($clients as $client)
                                        <tr class="single-item">
                                            <td>
                                                <div class="item-checkbox ms-1">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input checkbox" id="checkBox_{{ $client->id }}">
                                                        <label class="custom-control-label" for="checkBox_{{ $client->id }}"></label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><a href="{{ route('clients.show', $client) }}" class="fw-bold">{{ $client->id }}</a></td>
                                            <td>
                                               <a href="javascript:void(0)" class="hstack gap-3">
                                                        <div>
                                                            <span class="text-truncate-1-line">{{ $client->name }}</span>
                                                            
                                                        </div>
                                                     </a>
                                            </td>

                                            <td>{{ $client->email }}</td>
                                            <td>{{ $client->phone ?? '-' }}</td>
                                            <td>{{ $client->bi ?? '-' }}</td>
                                            <td>{{ $client->driver_license ?? '-' }}</td>
                                            <td class="fw-bold text-dark">
                                                {{ $client->created_at ? \Carbon\Carbon::parse($client->created_at)->format('d/m/Y') : 'N/A' }}
                                            </td>
                                            <td>
                                                <div class="hstack gap-2 justify-content-end">
                                                    <a href="{{ route('clients.show', $client) }}" class="avatar-text avatar-md">
                                                        <i class="feather feather-eye"></i>
                                                    </a>

                                                    <div class="dropdown">
                                                        <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                            <i class="feather feather-more-horizontal"></i>
                                                        </a>

                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item" href="{{ route('clients.edit', $client) }}">
                                                                    <i class="feather feather-edit-3 me-3"></i>
                                                                    <span>Editar</span>
                                                                </a>
                                                            </li>
                                                
                                                            <li class="dropdown-divider"></li>
                                                            <li>
                                                                <form action="{{ route('clients.destroy', $client) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este fornecedor?');">
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
                                            <td colspan="9" class="text-center">Nenhum cliente encontrado.</td>
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
