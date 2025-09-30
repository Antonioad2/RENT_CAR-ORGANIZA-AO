@extends('layout._admin.main')
@section('title', 'Duralux || Editar Motorista')
@section('content-admin')

    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Editar Motorista</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('drivers.index') }}">Motoristas</a></li>
                    <li class="breadcrumb-item">Editar</li>
                </ul>
            </div>
        </div>
        <!-- [ page-header ] end -->

        <!-- [ Main Content ] start -->
        <div class="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card stretch stretch-full">
                        <div class="card-body">
                            <form action="{{ route('drivers.update', $driver) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                @include('forms._formDrivers.index')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
