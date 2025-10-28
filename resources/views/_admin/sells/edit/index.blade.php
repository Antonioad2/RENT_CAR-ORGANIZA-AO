@extends('layout._admin.main')
@section('title', 'Duralux || Editar Venda')
@section('content-admin')

<div class="nxl-content">
    <!-- [ Cabeçalho da Página ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Editar Venda</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('sells.index') }}">Vendas</a></li>
                <li class="breadcrumb-item">Editar</li>
            </ul>
        </div>
        <div class="page-header-right ms-auto">
            <div class="page-header-right-items d-flex align-items-center gap-2">
                <a href="javascript:void(0);" class="btn btn-primary" onclick="document.getElementById('sellForm').submit();">
                    <i class="feather-save me-2"></i>
                    <span>Salvar Alterações</span>
                </a>
            </div>
        </div>
    </div>
    <!-- [ Cabeçalho da Página ] end -->

    <!-- [ Conteúdo Principal ] start -->
    <div class="main-content">
        <div class="card invoice-container">
            <div class="card-header">
                <h5>Atualizar Dados da Venda</h5>
            </div>
            <div class="card-body">
                <form id="sellForm" action="{{ route('sells.update', $sell->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('forms._formSells.index', ['sell' => $sell])
                </form>
            </div>
        </div>
    </div>
    <!-- [ Conteúdo Principal ] end -->
</div>

@endsection
