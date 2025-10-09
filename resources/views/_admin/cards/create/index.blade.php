@extends('layout._admin.main')
@section('title', 'Duralux || Brand Create')
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
                <li class="breadcrumb-item">Criar</li>
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
                <!--<a href="javascript:void(0);" class="btn btn-light-brand successAlertMessage">
                        <i class="feather-layers me-2"></i>
                        <span>Save as Draft</span>
                    </a>  -->
                    <a href="javascript:void(0);" class="btn btn-primary successAlertMessage">
                        <i class="feather-save me-2"></i>
                        <span>Salvar Cartão</span>
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
            <div class="col-xl-16">
                <div class="card invoice-container">
                    <div class="card-header">
                        <h5>Cadastro de Cartão</h5>
                     <!--<div class="dropdown">
                            <a href="javascript:void(0)" class="btn btn-light-brand dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,25">Invoice Templates</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item active">Default</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item">Simple</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item">Classic</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item">Modern</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item">Untimate</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item">Essential</a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item">Create Template</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item">Delete Template</a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                    <div class="card-body p-0">
                        <div class="px-4 pt-4">
                            <div class="d-md-flex align-items-center justify-content-between">
                               <!--  <div class="mb-4 mb-md-0 your-brand">
                                    <div class="wd-100 ht-100 position-relative overflow-hidden border border-gray-2 rounded">
                                        <img src="{{ url('assets/images/logo-abbr.png')}}" class="upload-pic img-fluid rounded h-100 w-100" alt="">
                                        <div class="position-absolute start-50 top-50 end-0 bottom-0 translate-middle h-100 w-100 hstack align-items-center justify-content-center c-pointer upload-button">
                                            <i class="feather feather-camera" aria-hidden="true"></i>
                                        </div>
                                        <input class="file-upload" type="file" accept="image/*">
                                    </div>
                                    <div class="fs-12 text-muted mt-2">* Upload your brand</div>
                                </div> -->
                                <!--<div class="d-md-flex align-items-center justify-content-end gap-4">
                                    <div class="form-group mb-3 mb-md-0">
                                        <label class="form-label">Issue Date:</label>
                                        <input id="issueDate" class="form-control" placeholder="Issue date...">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Due Date:</label>
                                        <input id="dueDate" class="form-control" placeholder="Due date...">
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <!--<hr class="border-dashed">
                        <div class="px-4 row justify-content-between">
                            <div class="col-xl-3">
                                <div class="form-group mb-3">
                                    <label for="InvoiceLabel" class="form-label">Invoice Label</label>
                                    <input type="text" class="form-control" id="InvoiceLabel" placeholder="Duralux Invoice">
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="form-group mb-3">
                                    <label for="InvoiceNumber" class="form-label">Invoice Number</label>
                                    <input type="text" class="form-control" id="InvoiceNumber" placeholder="#NXL2023">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group mb-3">
                                    <label for="InvoiceProduct" class="form-label">Invoice Product</label>
                                    <input type="text" class="form-control" id="InvoiceProduct" placeholder="Product Name">
                                </div>
                            </div>
                        </div>
                        <hr class="border-dashed">
                        <div class="row px-4 justify-content-between">
                            <div class="col-xl-5 mb-4 mb-sm-0">
                                 <div class="mb-4">
                                   <h6 class="fw-bold">Invoice From:</h6> 
                                    <span class="fs-12 text-muted">Send an invoice and get paid</span>
                                </div>-->

                                <!-- <div class="form-group row mb-3">
                                    <label for="InvoiceEmail" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="InvoiceEmail" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="InvoicePhone" class="col-sm-3 col-form-label">Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="InvoicePhone" placeholder="Enter Phone">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="InvoiceAddress" class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <textarea rows="5" class="form-control" id="InvoiceAddress" placeholder="Enter Address"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="mb-4">
                                    <h6 class="fw-bold">Invoice To:</h6>
                                    <span class="fs-12 text-muted">Send an invoice and get paid</span>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="ClientName" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="ClientName" placeholder="Business Name">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="ClientEmail" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="ClientEmail" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="ClientPhone" class="col-sm-3 col-form-label">Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="ClientPhone" placeholder="Enter Phone">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ClientAddress" class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <textarea rows="5" class="form-control" id="ClientAddress" placeholder="Enter Address"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="border-dashed"> 
                       <div class="px-4 clearfix">
                            <div class="mb-4 d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="fw-bold">Add Items:</h6>
                                    <span class="fs-12 text-muted">Add items to invoice</span>
                                </div>
                                <div class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Informations">
                                    <i class="feather feather-info"></i>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered overflow-hidden" id="tab_logic">
                                    <thead>
                                        <tr class="single-item">
                                            <th class="text-center">#</th>
                                            <th class="text-center wd-450">Product</th>
                                            <th class="text-center wd-150">Qty</th>
                                            <th class="text-center wd-150">Price</th>
                                            <th class="text-center wd-150">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr id="addr0">
                                            <td>1</td>
                                            <td><input type="text" name="product[]" placeholder="Enter Product Name" class="form-control"></td>
                                            <td><input type="number" name="qty[]" placeholder="Enter Qty" class="form-control qty" step="1" min="1"></td>
                                            <td><input type="number" name="price[]" placeholder="Enter Unit Price" class="form-control price" step="1.00" min="1"></td>
                                            <td><input type="number" name="total[]" placeholder="0.00" class="form-control total" readonly=""></td>
                                        </tr>
                                        <tr id="addr1">
                                            <td>2</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-end gap-2 mt-3">
                                <button id="delete_row" class="btn btn-sm bg-soft-danger text-danger">Delete</button>
                                <button id="add_row" class="btn btn-sm btn-primary">Add Items</button>
                            </div>
                        </div>
                        <hr class="border-dashed"> -->
                        
                                <form action="{{ route('cards.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                @include('forms._formCards.index')
                            </form>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>
@endsection