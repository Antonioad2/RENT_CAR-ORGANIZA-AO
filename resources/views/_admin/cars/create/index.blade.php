@extends('layout._admin.main')
@section('title', 'Duralux || Carro create')
@section('content-admin')
<div class="nxl-content">
    <div class="page-header">
        <div class="page-header-title">
            <h5 class="m-b-10">Cadastro de Carro</h5>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Carro</li>
            <li class="breadcrumb-item active">Novo</li>
        </ul>
    </div>

    <div class="main-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            @include('forms._formCars.index')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function() {
        $('select[name="brand_id"]').on('change', function() {
            var brandId = $(this).val();
            var modelSelect = $('select[name="models_id"]');

            modelSelect.html('<option value="">Carregando...</option>');

            if (brandId) {
                $.ajax({
                    url: '/get-models-by-brand/' + brandId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        modelSelect.empty();
                        modelSelect.append('<option value="">Selecione o Modelo</option>');
                        $.each(data, function(key, value) {
                            modelSelect.append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    },
                    error: function() {
                        modelSelect.html('<option value="">Erro ao carregar modelos</option>');
                    }
                });
            } else {
                modelSelect.html('<option value="">Selecione a Marca primeiro</option>');
            }
        });
    });
</script>
@endpush