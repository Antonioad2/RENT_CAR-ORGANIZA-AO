@extends('admin.users.userView.layout.main')  
@section('title', 'Duralux || Detalhes do Usuário')
@section('content-userView')  

<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Detalhes do Usuário</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Usuários</a></li>
                <li class="breadcrumb-item">Detalhes</li>
            </ul>
        </div>
        <div class="page-header-right ms-auto">
            <div class="page-header-right-items">
                <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                    <a href="{{ route('users.edit', $user) }}" class="btn btn-primary">
                        <span>Editar Usuário</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- [ page-header ] end -->

    <!-- [ Main Content ] start -->
    <div class="main-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card stretch stretch-full">
                    <div class="card-body">
                        <div class="row">
                            <!-- Informações do Usuário -->
                            <div class="col-md-6">
                                <h6 class="mb-3">Informações Pessoais</h6>
                                <div class="mb-3">
                                    <strong>Nome:</strong> {{ $user->name }}
                                </div>
                                <div class="mb-3">
                                    <strong>Email:</strong> {{ $user->email }}
                                </div>
                                <div class="mb-3">
                                    <strong>Role:</strong> 
                                    {{ $user->role === 'admin' ? 'Admin' : 'Usuário' }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h6 class="mb-3">Informações do Sistema</h6>
                                <div class="mb-3">
                                    <strong>Data de Cadastro:</strong> 
                                    {{ $user->created_at ? $user->created_at->format('d/m/Y H:i') : 'N/A' }}
                                </div>
                                <div class="mb-3">
                                    <strong>Última Atualização:</strong> 
                                    {{ $user->updated_at ? $user->updated_at->format('d/m/Y H:i') : 'N/A' }}
                                </div>
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