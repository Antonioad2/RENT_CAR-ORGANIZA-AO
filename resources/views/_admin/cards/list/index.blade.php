@extends('layout._admin.main')
@section('title', 'Duralux || Cartões')
@section('content-admin')

    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Cartões</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Cartões</li>
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
                        <a href="{{ route('cards.create') }}" class="btn btn-primary">
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
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="checkAllPayment">
                                                        <label class="custom-control-label" for="checkAllPayment"></label>
                                                    </div>
                                                </div>
                                            </th>
                                            <th>ID</th>
                                            <th>Banco</th>
                                            <th>Nº Cartão</th>
                                            <th>Titular do Cartão</th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cards as $card)
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox"
                                                                id="checkBox_{{ $card->id }}">
                                                            <label class="custom-control-label"
                                                                for="checkBox_{{ $card->id }}"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><a href="{{ route('cards.show', $card) }}"
                                                        class="fw-bold">{{ $card->id }}</a></td>
                                                <td>
                                                    @if ($card->bank == 'BAI')
                                                        <span class="badge bg-primary">BAI</span>
                                                    @elseif($card->bank == 'Atlântico')
                                                        <span class="badge bg-info">Atlântico</span>
                                                    @elseif($card->bank == 'BFA')
                                                        <span class="badge bg-warning"
                                                            style="background: #ffa633 !important">BFA</span>
                                                    @elseif($card->bank == 'BIC')
                                                        <span class="badge bg-danger"">BIC</span>
                                                    @elseif($card->bank == 'Banco Sol')
                                                        <span class="badge bg-warning"">Banco Sol</span>
                                                    @elseif($card->bank == 'Standard Bank')
                                                        <span class="badge bg-primary"">Standard Bank</span>
                                                    @endif
                                                </td>
                                                <td>{{ $card->card_number }}</td>
                                                <td>{{ $card->card_name }}</td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="{{ route('cards.show', $card) }}"
                                                            class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>

                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md"
                                                                data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('cards.edit', $card) }}">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Editar</span>
                                                                    </a>
                                                                </li>

                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <form action="{{ route('cards.destroy', $card) }}"
                                                                        method="POST"
                                                                        onsubmit="return confirm('Tem certeza que deseja apagar este cartão?')">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="dropdown-item text-danger">
                                                                            <i class="feather feather-trash-2 me-3"></i>
                                                                            <span>Apagar</span>
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
        <!-- [ Main Content ] end -->
    </div>
@endsection
