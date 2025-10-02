@extends('site.reservation.layouts.main')
@section('title', 'AngoCar - Serviços Extras')
@section('content')

    <!-- Breadscrumb Section -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">Confira</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Início</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Confira</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadscrumb Section -->

    <div class="booking-new-module">
        <div class="container">
            <div class="booking-wizard-head">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-3">
                        <div class="booking-head-title">
                            <h4>Reserve seu Carro</h4>
                            <p>Conclua as etapas seguintes</p>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9">
                        <div class="booking-wizard-lists">
                            <ul>
                                <li class="active">
                                    <span><img src="assets/user/img/icons/booking-head-icon-01.svg"
                                            alt="Booking Icon"></span>
                                    <h6>Localização e Hora</h6>
                                </li>
                                <li>
                                    <span><img src="assets/user/img/icons/booking-head-icon-02.svg"
                                            alt="Booking Icon"></span>
                                    <h6>Serviços Extras</h6>
                                </li>
                                <li>
                                    <span><img src="assets/user/img/icons/booking-head-icon-03.svg"
                                            alt="Booking Icon"></span>
                                    <h6>Detalhes</h6>
                                </li>
                                <li>
                                    <span><img src="assets/user/img/icons/booking-head-icon-04.svg"
                                            alt="Booking Icon"></span>
                                    <h6>Confira</h6>
                                </li>
                                <li>
                                    <span><img src="assets/user/img/icons/booking-head-icon-05.svg"
                                            alt="Booking Icon"></span>
                                    <h6>Reserva Confirmada</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="booking-detail-info">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="booking-information-main">
                            <form action="https://dreamsrent.dreamstechnologies.com/html/template/booking-detail.html">
                                <div class="booking-information-card">
                                    <div class="booking-info-head justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <span><i class="bx bx-add-to-queue"></i></span>
                                            <h5>Serviços Extras</h5>
                                        </div>
                                        <h6>Total : 15 Serviços Extras</h6>
                                    </div>
                                    <div class="booking-info-body">
                                        <ul class="adons-lists">
                                            <li>
                                                <div class="adons-types">
                                                    <div class="d-flex align-items-center adon-name-info">
                                                        <span class="adon-icon"><i class="bx bx-map-pin"></i></span>
                                                        <div class="adon-name">
                                                            <h6>Sistemas de Navegação GPS</h6>
                                                            <a href="javascript:void(0);"
                                                                class="d-inline-flex align-items-center adon-info-btn">
                                                                <i class="bx bx-info-circle me-2"></i>Mais Informações
                                                                <i class="bx bx-chevron-down ms-2 arrow-icon"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <span class="adon-price">$25</span>
                                                    <a href="#" class="btn btn-secondary remove-adon-btn"><i
                                                            class="bx bx-minus-circle me-2"></i>Remover</a>
                                                </div>
                                                <div class="more-adon-info">
                                                    <p>Forneça dispositivos de navegação GPS como complementos para clientes
                                                        que precisam de assistência com direções e navegação durante o
                                                        período de aluguel.
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="adons-types">
                                                    <div class="d-flex align-items-center adon-name-info">
                                                        <span class="adon-icon"><i class="bx bx-wifi"></i></span>
                                                        <div class="adon-name">
                                                            <h6>Ponto de Acesso Wi-Fi</h6>
                                                            <a href="javascript:void(0);"
                                                                class="d-inline-flex align-items-center adon-info-btn">
                                                                <i class="bx bx-info-circle me-2"></i>
                                                                Mais Informações <i
                                                                    class="bx bx-chevron-down ms-2 arrow-icon"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <span class="adon-price">$25</span>
                                                    <a href="#" class="btn btn-secondary remove-adon-btn"><i
                                                            class="bx bx-minus-circle me-2"></i>Remover</a>
                                                </div>
                                                <div class="more-adon-info">
                                                    <p>Forneça dispositivos de navegação GPS como complementos para clientes
                                                        que precisam de assistência com direções e navegação durante o
                                                        período de aluguel.
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="adons-types">
                                                    <div class="d-flex align-items-center adon-name-info">
                                                        <span class="adon-icon"><i class="bx bx-wifi"></i></span>
                                                        <div class="adon-name">
                                                            <h6>
                                                                Assentos de Segurança Para Crianças</h6>
                                                            <a href="javascript:void(0);"
                                                                class="d-inline-flex align-items-center adon-info-btn">
                                                                <i class="bx bx-info-circle me-2"></i>
                                                                Mais Informações <i
                                                                    class="bx bx-chevron-down ms-2 arrow-icon"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <span class="adon-price">$50</span>
                                                    <a href="#" class="btn btn-secondary remove-adon-btn"><i
                                                            class="bx bx-minus-circle me-2"></i>Remover</a>
                                                </div>
                                                <div class="more-adon-info">
                                                    <p>Forneça dispositivos de navegação GPS como complementos para clientes
                                                        que precisam de assistência com direções e navegação durante o
                                                        período de aluguel.
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="adons-types">
                                                    <div class="d-flex align-items-center adon-name-info">
                                                        <span class="adon-icon"><i class="bx bxs-droplet"></i></span>
                                                        <div class="adon-name">
                                                            <h6>Opções de Combustível</h6>
                                                            <a href="javascript:void(0);"
                                                                class="d-inline-flex align-items-center adon-info-btn">
                                                                <i class="bx bx-info-circle me-2"></i>
                                                                Mais Informações <i
                                                                    class="bx bx-chevron-down ms-2 arrow-icon"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <span class="adon-price">$75</span>
                                                    <a href="#" class="btn add-addon-btn"><i
                                                            class="bx bx-plus-circle me-2"></i>Adicionar</a>
                                                </div>
                                                <div class="more-adon-info">
                                                    <p>Forneça dispositivos de navegação GPS como complementos para clientes
                                                        que precisam de assistência com direções e navegação durante o
                                                        período de aluguel.
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="view-more-adons">
                                                <div class="more-adons">
                                                    <ul>
                                                        <li>
                                                            <div class="adons-types">
                                                                <div class="d-flex align-items-center adon-name-info">
                                                                    <span class="adon-icon"><i
                                                                            class="bx bx-collection"></i></span>
                                                                    <div class="adon-name">
                                                                        <h6>Passes de Pedágio</h6>
                                                                        <a href="javascript:void(0);"
                                                                            class="d-inline-flex align-items-center adon-info-btn">
                                                                            <i class="bx bx-info-circle me-2"></i>
                                                                            Mais Informações <i
                                                                                class="bx bx-chevron-down ms-2 arrow-icon"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <span class="adon-price">$125</span>
                                                                <a href="#" class="btn add-addon-btn"><i
                                                                        class="bx bx-plus-circle me-2"></i>Adicionar</a>
                                                            </div>
                                                            <div class="more-adon-info">
                                                                <p>Forneça dispositivos de navegação GPS como complementos
                                                                    para clientes que precisam de assistência com direções e
                                                                    navegação durante o período de aluguel.
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="adons-types">
                                                                <div class="d-flex align-items-center adon-name-info">
                                                                    <span class="adon-icon"><i
                                                                            class="bx bx-broadcast"></i></span>
                                                                    <div class="adon-name">
                                                                        <h6>Assistência na Estrada</h6>
                                                                        <a href="javascript:void(0);"
                                                                            class="d-inline-flex align-items-center adon-info-btn">
                                                                            <i class="bx bx-info-circle me-2"></i>
                                                                            Mais Informações <i
                                                                                class="bx bx-chevron-down ms-2 arrow-icon"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <span class="adon-price">$60</span>
                                                                <a href="#" class="btn add-addon-btn"><i
                                                                        class="bx bx-plus-circle me-2"></i>Adicionar</a>
                                                            </div>
                                                            <div class="more-adon-info">
                                                                <p>Forneça dispositivos de navegação GPS como complementos
                                                                    para clientes que precisam de assistência com direções e
                                                                    navegação durante o período de aluguel.
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="adons-types">
                                                                <div class="d-flex align-items-center adon-name-info">
                                                                    <span class="adon-icon"><i
                                                                            class="bx bx-radio"></i></span>
                                                                    <div class="adon-name">
                                                                        <h6>Rádio Via Satélite</h6>
                                                                        <a href="javascript:void(0);"
                                                                            class="d-inline-flex align-items-center adon-info-btn">
                                                                            <i class="bx bx-info-circle me-2"></i>
                                                                            Mais Informações <i
                                                                                class="bx bx-chevron-down ms-2 arrow-icon"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <span class="adon-price">$42</span>
                                                                <a href="#" class="btn add-addon-btn"><i
                                                                        class="bx bx-plus-circle me-2"></i>Adicionar</a>
                                                            </div>
                                                            <div class="more-adon-info">
                                                                <p>Forneça dispositivos de navegação GPS como complementos
                                                                    para clientes que precisam de assistência com direções e
                                                                    navegação durante o período de aluguel.
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="adons-types">
                                                                <div class="d-flex align-items-center adon-name-info">
                                                                    <span class="adon-icon"><i
                                                                            class="bx bx-radar"></i></span>
                                                                    <div class="adon-name">
                                                                        <h6>Acessórios Adicionais</h6>
                                                                        <a href="javascript:void(0);"
                                                                            class="d-inline-flex align-items-center adon-info-btn">
                                                                            <i class="bx bx-info-circle me-2"></i>
                                                                            Mais Informações <i
                                                                                class="bx bx-chevron-down ms-2 arrow-icon"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <span class="adon-price">$30</span>
                                                                <a href="#" class="btn add-addon-btn"><i
                                                                        class="bx bx-plus-circle me-2"></i>Adicionar</a>
                                                            </div>
                                                            <div class="more-adon-info">
                                                                <p>Forneça dispositivos de navegação GPS como complementos
                                                                    para clientes que precisam de assistência com direções e
                                                                    navegação durante o período de aluguel.
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="adons-types">
                                                                <div class="d-flex align-items-center adon-name-info">
                                                                    <span class="adon-icon"><i
                                                                            class="bx bx-rename"></i></span>
                                                                    <div class="adon-name">
                                                                        <h6>Check-in/Check-out Expresso</h6>
                                                                        <a href="javascript:void(0);"
                                                                            class="d-inline-flex align-items-center adon-info-btn">
                                                                            <i class="bx bx-info-circle me-2"></i>
                                                                            Mais Informações <i
                                                                                class="bx bx-chevron-down ms-2 arrow-icon"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <span class="adon-price">$54</span>
                                                                <a href="#" class="btn add-addon-btn"><i
                                                                        class="bx bx-plus-circle me-2"></i>Adicionar</a>
                                                            </div>
                                                            <div class="more-adon-info">
                                                                <p>Forneça dispositivos de navegação GPS como complementos
                                                                    para clientes que precisam de assistência com direções e
                                                                    navegação durante o período de aluguel.
                                                                </p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a href="javascript:void(0);" class="view-adon-btn"><i
                                                        class="bx bx-plus-circle me-2"></i>Ver Mais Complementos</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="booking-information-card">
                                    <div class="booking-info-head">
                                        <span><i class="bx bx-user-pin"></i></span>
                                        <h5>Detalhes do Motorista</h5>
                                    </div>
                                    <div class="booking-info-body">
                                        <ul class="booking-radio-btns">
                                            <li>
                                                <label class="booking_custom_check">
                                                    <input type="radio" name="driver_type" id="self_driver" checked>
                                                    <span class="booking_checkmark">
                                                        <span class="checked-title">Motorista Autônomo</span>
                                                    </span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="booking_custom_check">
                                                    <input type="radio" name="driver_type" id="acting_driver">
                                                    <span class="booking_checkmark">
                                                        <span class="checked-title">Motorista Interino</span>
                                                    </span>
                                                </label>
                                            </li>
                                        </ul>
                                        <div class="booking-timings self-driver-info">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-title-head">
                                                        <h5>Detalhes do Motorista</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-block date-widget">
                                                        <label class="form-label">Primeiro Nome <span class="text-danger">
                                                                *</span></label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Digite o primeiro nome">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-block date-widget">
                                                        <label class="form-label">Sobrenome <span class="text-danger">
                                                                *</span></label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Digite o sobrenome">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-block date-widget">
                                                        <label class="form-label">Idade do Motorista <span
                                                                class="text-danger">
                                                                *</span></label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Digite a idade do motorista">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-block date-widget">
                                                        <label class="form-label">Número de Telemóvel <span
                                                                class="text-danger">
                                                                *</span></label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Digite o número de telefone">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="input-block date-widget">
                                                        <label class="form-label">Número da Carteira de Habilitação <span
                                                                class="text-danger"> *</span></label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Digite o número da carteira de habilitação">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="input-block date-widget">
                                                        <label class="form-label">Carregar Documento <span
                                                                class="text-danger"> *</span></label>
                                                        <div class="upload-div">
                                                            <input type="file">
                                                            <div class="upload-photo-drag">
                                                                <span><i class="fa fa-upload me-2"></i> Carregar Doc</span>
                                                                <h6>ou Arraste Doc</h6>
                                                            </div>
                                                        </div>
                                                        <div class="upload-list">
                                                            <ul>
                                                                <li>O tamanho máximo do pdf é 8 MB. Formatos: pdf, jpeg, jpg,
                                                                    png. Coloque a imagem ou documento principal primeiro.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="input-block m-0">
                                                        <label class="custom_check d-inline-flex location-check m-0"><span>I
                                                                Confirmo que a idade do motorista é superior a 20 anos</span>
                                                            <input type="checkbox" name="remeber">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="booking-timings acting-driver-info">
                                            <div class="form-title-head">
                                                <h5>Motorista</h5>
                                            </div>
                                            <ul class="acting-driver-list">
                                                <li>
                                                    <div class="driver-profile-info">
                                                        <span class="driver-profile"><img
                                                                src="assets/img/drivers/driver-02.jpg"
                                                                alt="Img"></span>
                                                        <div class="driver-name">
                                                            <h5>José Dias</h5>
                                                            <ul>
                                                                <li>Número de passeios concluídos : 32</li>
                                                                <li>Preço : $100</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-information-card pb-1">
                                    <div class="booking-info-head">
                                        <span><i class="bx bx-file-blank"></i></span>
                                        <h5>Seguro</h5>
                                    </div>
                                    <div class="booking-info-body">
                                        <div class="insurance-select custom-checkbox active">
                                            <div>
                                                <p class="fs-14 d-inline-flex align-items-center mb-1">Seguro Premium Completo</p>
                                                <div>
                                                    <a href="#">+4 Benefícios<i
                                                            class="bx bxs-info-circle text-gray-5 ms-1"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-original-title="No additional charges for emergency roadside services"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block mb-1">Passeio Único</span>
                                                <h6 class="fw-normal">$200</h6>
                                            </div>
                                        </div>
                                        <div class="insurance-select custom-checkbox">
                                            <div>
                                                <p class="fs-14 d-inline-flex align-items-center mb-1">Assistência na Estrada
                                                </p>
                                                <div>
                                                    <a href="#">+3 Seguro Premium Completo<i
                                                            class="bx bxs-info-circle text-gray-5 ms-1"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-original-title="No additional charges for emergency roadside services"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block mb-1">Passeio Único</span>
                                                <h6 class="fw-normal">$200</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-info-btns d-flex justify-content-end">
                                    <a href="" class="btn btn-secondary">Voltar para Localização e Hora</a>
                                    <button class="btn btn-primary continue-book-btn" type="submit">Continue
                                        Reservando</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 theiaStickySidebar">
                        <div class="booking-sidebar">
                            <div class="booking-sidebar-card">
                                <div class="accordion-item border-0 mb-4">
                                    <div class="accordion-header">
                                        <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-target="#accordion_collapse_one" aria-expanded="true">
                                            <div class="booking-sidebar-head">
                                                <h5>Detalhes da Reserva<i class="fas fa-chevron-down"></i></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="accordion_collapse_one" class="accordion-collapse collapse">
                                        <div class="booking-sidebar-body">
                                            <div class="booking-car-detail">
                                                <span class="car-img">
                                                    <img src="assets/user/img/car-list-4.jpg" class="img-fluid"
                                                        alt="Car">
                                                </span>
                                                <div class="care-more-info">
                                                    <h5>Chevrolet Camaro</h5>
                                                    <p>Miami St, Destin, FL 32550, USA</p>
                                                    {{-- <a href="listing-details.html">View Car Details</a> --}}
                                                </div>
                                            </div>
                                            <div class="booking-vehicle-rates">
                                                <ul>
                                                    <li>
                                                        <div class="rental-charge">
                                                            <h6>Taxa de Aluguel <span> (1 day )</span></h6>
                                                            <span class="text-danger">(This does not include fuel)</span>
                                                        </div>
                                                        <h5>+ $300</h5>
                                                    </li>
                                                    <li>
                                                        <h6>Entrega em Domicílio</h6>
                                                        <h5>+ $60</h5>
                                                    </li>
                                                    <li>
                                                        <h6>Taxas de proteção de viagem</h6>
                                                        <h5>+ $25</h5>
                                                    </li>
                                                    <li>
                                                        <h6>Taxas de conveniência</h6>
                                                        <h5>+ $2</h5>
                                                    </li>
                                                    <li>
                                                        <h6>Imposto</h6>
                                                        <h5>+ $2</h5>
                                                    </li>
                                                    <li>
                                                        <h6>Depósito Reembolsável</h6>
                                                        <h5>+$1200</h5>
                                                    </li>
                                                    <li>
                                                        <h6>Seguro Premium Completo <i
                                                                class="bx bxs-x-circle text-danger"></i></h6>
                                                        <h5>+$200</h5>
                                                    </li>
                                                    <li class="total-rate">
                                                        <h6>Subtotal</h6>
                                                        <h5>+$1604</h5>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-sidebar-card">
                                <div class="accordion-item border-0 mb-4">
                                    <div class="accordion-header p-3 d-flex align-center justify-content-between">
                                        <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-target="#accordion_collapse_three" aria-expanded="true">
                                            <div
                                                class="booking-sidebar-head p-0 d-flex justify-content-between align-items-center">
                                                <h5>Localização e Hora<i class="fas fa-chevron-down"></i></h5>
                                            </div>
                                        </div>
                                        <a href="booking-checkout.html" class="d-flex align-items-center sidebar-edit"><i
                                                class="bx bx-edit-alt me-2"></i>Editar</a>
                                    </div>
                                    <div id="accordion_collapse_three" class="accordion-collapse collapse">
                                        <div class="booking-sidebar-body">
                                            <ul class="location-address-info">
                                                <li>
                                                    <h6>Tipo de Aluguel</h6>
                                                    <p>Entrega</p>
                                                </li>
                                                <li>
                                                    <h6>Tipo de Reserva</h6>
                                                    <p>Days</p>
                                                </li>
                                                <li>
                                                    <h6>Local e Horário de Entrega</h6>
                                                    <p>1230 E Springs Rd, Los Angeles, CA, USA</p>
                                                    <p>04/18/2024 - 14:00</p>
                                                </li>
                                                <li>
                                                    <h6>Local e Horário de Retorno</h6>
                                                    <p>Norwegian Caribbean Cruise Los Angeles, CA 90025</p>
                                                    <p>04/27/2024 - 03:00</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-sidebar-card">
                                <div class="accordion-item border-0 mb-4">
                                    <div class="accordion-header">
                                        <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-target="#accordion_collapse_two" aria-expanded="true">
                                            <div
                                                class="booking-sidebar-head d-flex justify-content-between align-items-center">
                                                <h5>Cupom<i class="fas fa-chevron-down"></i></h5>
                                                <a href="#" class="coupon-view">Ver Cupons</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="accordion_collapse_two" class="accordion-collapse collapse">
                                        <div class="booking-sidebar-body">
                                            <form
                                                action="https://dreamsrent.dreamstechnologies.com/html/template/booking-checkout.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="form-custom flex-fill">
                                                        <input type="text" class="form-control mb-0"
                                                            placeholder="Código do Cupom">
                                                    </div>
                                                    <button type="submit"
                                                        class="btn btn-secondary apply-coupon-btn d-flex align-items-center ms-2">Aplicar<i
                                                            class="feather-arrow-right ms-2"></i></button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="total-rate-card">
                                <div class="vehicle-total-price">
                                    <h5>Total Estimado</h5>
                                    <span>$3541</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
