@extends('layout._admin.main')
@section('title', 'Duralux || Editar Oferta')
@section('content-admin')

<div class="nxl-content">
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Editar Oferta</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('offers.index') }}">Ofertas</a></li>
                <li class="breadcrumb-item">Editar</li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <div class="card invoice-container">
            <div class="card-header">
                <h5>Atualizar Oferta</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('offers.update', $offer->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('forms._formOffers.index', ['offer' => $offer])
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
