@extends('layout._admin.main')
@section('title', 'Duralux || Editar Reserva')
@section('content-admin')

<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Editar Reserva</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('reserves.index') }}">Reservas</a></li>
                <li class="breadcrumb-item">Editar</li>
            </ul>
        </div>
        <div class="page-header-right ms-auto">
            <div class="page-header-right-items">
                <button type="submit" form="reserveForm" class="btn btn-primary">
                    <i class="feather-save me-2"></i> Atualizar Reserva
                </button>
            </div>
        </div>
    </div>
    <!-- [ page-header ] end -->

    <!-- [ Main Content ] start -->
    <div class="main-content">
        <div class="row">
            <div class="col-xl-16">
                <div class="card invoice-container">
                    <div class="card-header">
                        <h5>Dados da Reserva</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="px-4 pt-4">
                            <form id="reserveForm" action="{{ route('reserves.update', $reserve->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                @include('forms._formReserves.index')

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>
@endsection
