@extends('site.reservation.layouts.main')
@section('title', 'AngoCar Listagem de Carros')
@section('content')

    <!-- Breadscrumb Section -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">Listagem de Carros</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">Listagem de Carros</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div> <br>
    <!-- /Breadscrumb Section -->

    <!-- Search -->
   <!--  <div class="section-search page-search">
        <div class="container">
            <div class="search-box-banner">
                <form action="https://dreamsrent.dreamstechnologies.com/html/template/listing-grid.html">
                    <ul class="align-items-center">
                        <li class="column-group-main">
                            <div class="input-block">
                                <label>Local de Retirada</label>
                                <div class="group-img">
                                    <input type="text" class="form-control"
                                        placeholder="Digite a cidade, Aeroporto, ou Endereço">
                                    <span><i class="feather-map-pin"></i></span>
                                </div>
                            </div>
                        </li>
                        <li class="column-group-main">
                            <div class="input-block">
                                <label>Data de Retirada</label>
                            </div>
                            <div class="input-block-wrapp">
                                <div class="input-block date-widget">
                                    <div class="group-img">
                                        <input type="text" class="form-control datetimepicker" placeholder="04/11/2023">
                                        <span><i class="feather-calendar"></i></span>
                                    </div>
                                </div>
                                <div class="input-block time-widge">
                                    <div class="group-img">
                                        <input type="text" class="form-control timepicker" placeholder="11:00 AM">
                                        <span><i class="feather-clock"></i></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="column-group-main">
                            <div class="input-block">
                                <label>Data de Devolução</label>
                            </div>
                            <div class="input-block-wrapp">
                                <div class="input-block date-widge">
                                    <div class="group-img">
                                        <input type="text" class="form-control datetimepicker" placeholder="04/11/2023">
                                        <span><i class="feather-calendar"></i></span>
                                    </div>
                                </div>
                                <div class="input-block time-widge">
                                    <div class="group-img">
                                        <input type="text" class="form-control timepicker" placeholder="11:00 AM">
                                        <span><i class="feather-clock"></i></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="column-group-last">
                            <div class="input-block">
                                <div class="search-btn">
                                    <button class="btn search-button" type="submit"> <i class="fa fa-search"
                                            aria-hidden="true"></i>Pesquisar</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div> -->
    <!-- /Search -->

    <!-- Sort By -->
    <div class="sort-section">
        <div class="container">
            <div class="sortby-sec">
                <div class="sorting-div">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-4 col-lg-3 col-sm-12 col-12">
                           <!--  <div class="count-search">
                                <p>Mostrando 1-9 de 154 Carros</p>
                            </div> -->
                        </div>
                        <div class="col-xl-8 col-lg-9 col-sm-12 col-12">
                            <div class="product-filter-group">
                                <div class="sortbyset">
                                    <ul>
                                        <li>
                                            <span class="sortbytitle">Ver : </span>
                                            <div class="sorting-select select-one">
                                                <select class="form-control select">
                                                    <option>5</option>
                                                    <option>10</option>
                                                    <option>15</option>
                                                    <option>20</option>
                                                    <option>30</option>
                                                </select>
                                            </div>
                                        </li>
                                      <!--   <li>
                                            <span class="sortbytitle">Ordenar Por </span>
                                            <div class="sorting-select select-two">
                                                <select class="form-control select">
                                                    <option>Recente</option>
                                                    <option>Relevância</option>
                                                    <option>Menor ao Maior</option>
                                                    <option>Maior ao Menor</option>
                                                    <option>Mais Avaliado</option>
                                                    <option>Distância</option>
                                                    <option>Popularidade</option>
                                                </select>
                                            </div>
                                        </li> -->
                                    </ul>
                                </div>
                                <!-- <div class="grid-listview">
                                    <ul>
                                        <li>
                                            <a href="listing-grid.html">
                                                <i class="feather-grid"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="listing-list.html" class="active">
                                                <i class="feather-list"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="listing-map.html">
                                                <i class="feather-map-pin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Sort By -->

    <!-- Car Grid View -->
    <section class="section car-listing pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-sm-12 col-12 theiaStickySidebar">
                    <!-- Sidebar Form -->
<form action="{{ route('site.car-list') }}" autocomplete="off" class="sidebar-form" method="GET">
    <div class="sidebar-heading">
        <h3>O Que Você Está Procurando?</h3>
    </div>
    <div class="product-search">
        <div class="form-custom">
            <input type="text" class="form-control" name="pickup_location" value="{{ $pickup_location ?? '' }}" placeholder="Pesquisar por localização">
            <span><img src="assets/user/img/icons/search.svg" alt="img"></span>
        </div>
    </div>
    <div class="product-availability">
        <h6>Disponibilidade</h6>
        <div class="status-toggle">
            <input id="mobile_notifications" class="check" type="checkbox" name="status" value="available" checked>
            <label for="mobile_notifications" class="checktoggle">checkbox</label>
        </div>
    </div>
    <div class="accord-list">
        <!-- Brand Filter -->
        <div class="accordion" id="accordionMain1">
            <div class="card-header-new" id="headingOne">
                <h6 class="filter-title">
                    <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Marca de Carro
                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                </h6>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
                <div class="card-body-chat">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="checkBoxes1">
                                <div class="selectBox-cont">
                                    @foreach (['Renault', 'Nissan', 'Mercedes Benz', 'Suzuki', 'Kia', 'Chevrolet', 'Toyota', 'BMW', 'Mitsubishi', 'Porsche', 'Land Rover'] as $brand)
                                        <label class="custom_check w-100">
                                            <input type="checkbox" name="brands[]" value="{{ $brand }}" {{ in_array($brand, $brands ?? []) ? 'checked' : '' }}>
                                            <span class="checkmark"></span> {{ $brand }}
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category Filter -->
        <div class="accordion" id="accordionMain2">
            <div class="card-header-new" id="headingTwo">
                <h6 class="filter-title">
                    <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        Categoria de Carro
                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                </h6>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                <div class="card-body-chat">
                    <div id="checkBoxes2">
                        <div class="selectBox-cont">
                            @foreach (['Economy', 'Standard', 'Luxury'] as $category)
                                <label class="custom_check w-100">
                                    <input type="checkbox" name="categories[]" value="{{ $category }}" {{ in_array($category, $categories ?? []) ? 'checked' : '' }}>
                                    <span class="checkmark"></span> {{ $category == 'Economy' ? 'Económico' : ($category == 'Standard' ? 'Intermédio' : 'Luxuoso') }}
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Year Filter -->
        <div class="accordion" id="accordionMain3">
            <div class="card-header-new" id="headingYear">
                <h6 class="filter-title">
                    <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseYear" aria-expanded="true" aria-controls="collapseYear">
                        Ano
                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                </h6>
            </div>
            <div id="collapseYear" class="collapse" aria-labelledby="headingYear" data-bs-parent="#accordionExample2">
                <div class="card-body-chat">
                    <div id="checkBoxes3">
                        <div class="selectBox-cont">
                            @foreach ([2024, 2023, 2022, 2021, 2020, 2019, 2018] as $year)
                                <label class="custom_check w-100">
                                    <input type="checkbox" name="years[]" value="{{ $year }}" {{ in_array($year, $years ?? []) ? 'checked' : '' }}>
                                    <span class="checkmark"></span> {{ $year }}
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Color Filter -->
        <div class="accordion" id="accordionMain7">
            <div class="card-header-new" id="headingColor">
                <h6 class="filter-title">
                    <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseColor" aria-expanded="true" aria-controls="collapseColor">
                        Cores
                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                </h6>
            </div>
            <div id="collapseColor" class="collapse" aria-labelledby="headingColor" data-bs-parent="#accordionExample2">
                <div class="card-body-chat">
                    <div class="theme-colorsset">
                        <ul>
                            @foreach (['green', 'yellow', 'brown', 'black', 'red', 'white', 'blue'] as $color)
                                <li>
                                    <div class="input-themeselects">
                                        <input type="radio" class="color-filter" name="colors[]" id="{{ $color }}Color" value="{{ $color }}" {{ in_array($color, $colors ?? []) ? 'checked' : '' }}>
                                        <label for="{{ $color }}Color" class="{{ strtolower($color) }}-clr"></label>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Seats Filter -->
        <div class="accordion" id="accordionMain8">
            <div class="card-header-new" id="headingThree">
                <h6 class="filter-title">
                    <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        Capacidade
                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                </h6>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample3">
                <div class="card-body-chat">
                    <div id="checkBoxes6">
                        <div class="selectBox-cont">
                            @foreach ([2, 4, 5, 7] as $seat)
                                <label class="custom_check w-100">
                                    <input type="checkbox" name="seats[]" value="{{ $seat }}" {{ in_array($seat, $seats ?? []) ? 'checked' : '' }}>
                                    <span class="checkmark"></span> {{ $seat }} Assentos
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Transmission Filter -->
        <div class="accordion" id="accordionMain04">
            <div class="card-header-new" id="headingtransmiss">
                <h6 class="filter-title">
                    <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapsetransmission" aria-expanded="true" aria-controls="collapsetransmission">
                        Transmissão
                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                </h6>
            </div>
            <div id="collapsetransmission" class="collapse" aria-labelledby="headingtransmiss" data-bs-parent="#accordionExample2">
                <div class="card-body-chat">
                    <div class="fuel-list">
                        <ul>
                            @foreach (['Manual', 'Automático'] as $transmission)
                                <li>
                                    <div class="input-selection">
                                        <input type="radio" class="transmission-filter" name="transmissions[]" id="{{ $transmission }}" value="{{ $transmission }}" {{ in_array($transmission, $transmissions ?? []) ? 'checked' : '' }}>
                                        <label for="{{ $transmission }}">{{ $transmission }}</label>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Price Range Filter -->
        <div class="accordion" id="accordionMain9">
            <div class="card-header-new" id="headingFour">
                <h6 class="filter-title">
                    <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                        Preço
                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                </h6>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample4">
                <div class="card-body-chat">
                    <div class="filter-range">
                        <input type="text" class="input-range" name="price_range" value="{{ ($min_price ?? '') . '-' . ($max_price ?? '') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="d-inline-flex align-items-center justify-content-center btn w-100 btn-primary filter-btn">
        <span><i class="feather-filter me-2"></i></span>Filtrar Resultados
    </button>
    <a href="{{ route('site.car-list') }}" class="reset-filter">Redefinir Filtro</a>
</form>
                </div>

                {{-- === LISTA DE CARROS === --}}
                <div class="col-xl-9 col-lg-8 col-sm-12 col-12">
                    <div class="row" id="car-list">
                        @foreach ($cars as $car)
                            @php
                                $imagePath = !empty($car->images) ? trim($car->images) : $car->image ?? 'default.jpg';
                            @endphp
                            <div class="listview-car car-card" data-brand="{{ $car->brand->name ?? '' }}"
                                data-category="{{ $car->category ?? '' }}" data-year="{{ $car->manufacture_date ?? '' }}"
                                data-color="{{ $car->color ?? '' }}" data-seat="{{ $car->number_of_seats ?? '' }}"
                                data-transmission="{{ $car->transmission ?? '' }}">
                                <div class="card">
                                    <div class="blog-widget d-flex">
                                        <!-- Imagem única do carro -->
                                        <div class="blog-img">
                                            <a href="{{ route('car.details', $car->id) }}">
                                                <img src="{{ url('uploads/car/car_images/' . $imagePath) }}"
                                                    class="img-fluid" alt="{{ $car->brand->name ?? 'Carro' }}">
                                            </a>
                                            <div class="fav-item justify-content-end">
                                                <span class="img-count">
                                                    <i class="feather-image"></i>01
                                                </span>
                                                <a href="javascript:void(0)" class="fav-icon">
                                                    <i class="feather-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Conteúdo de detalhes -->
                                        <div class="bloglist-content w-100">
                                            <div class="card-body">
                                                <div class="blog-list-head d-flex">
                                                    <div class="blog-list-title">
                                                        <h3>
                                                            <a href="{{ route('car.details', $car->id) }}">
                                                                {{ $car->brand->name ?? '' }}
                                                                {{ $car->models->name ?? $car->name }}
                                                            </a>
                                                        </h3>
                                                        <h6>Categoria : <span>{{ $car->category ?? 'N/D' }}</span></h6>
                                                    </div>
                                                    <div class="blog-list-rate">
                                                        <div class="list-rating">
                                                            @for ($i = 0; $i < 5; $i++)
                                                                <i
                                                                    class="fas fa-star {{ $i < ($car->rating ?? 0) ? 'filled' : '' }}"></i>
                                                            @endfor
                                                            <span>({{ $car->reviews_count ?? 0 }} Avaliações)</span>
                                                        </div>
                                                        <h6> {{formatKz($car->price)}} <span>/ Dia</span>
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="listing-details-group">
                                                    <ul>
                                                        <li>
                                                            <span><img src="assets/user/img/icons/car-parts-01.svg"
                                                                    alt="Transmissão"></span>
                                                            <p>{{ $car->transmission ?? 'N/A' }}</p>
                                                        </li>
                                                        <li>
                                                            <span><img src="assets/user/img/icons/car-parts-02.svg"
                                                                    alt="Quilometragem"></span>
                                                            <p>{{ $car->mileage ?? 'N/A' }} (Km)</p>
                                                        </li>
                                                        <li>
                                                            <span><img src="assets/user/img/icons/car-parts-03.svg"
                                                                    alt="Combustível"></span>
                                                            <p>{{ $car->fuel->name ?? 'N/A' }}</p>
                                                        </li>
                                                        <li>
                                                            <span><img src="assets/user/img/icons/car-parts-04.svg"
                                                                    alt="Potência"></span>
                                                            <p>{{ $car->engine ?? 'N/A' }} (KVA)</p>
                                                        </li>
                                                        <li>
                                                            <span><img src="assets/user/img/icons/car-parts-06.svg"
                                                                    alt="Pessoas"></span>
                                                            <p>{{ $car->number_of_seats ?? 'N/A' }} Pessoas</p>
                                                        </li>
                                                        <li>
                                                            <span><img src="assets/user/img/icons/car-parts-05.svg"
                                                                    alt="Ano"></span>
                                                            <p>{{ $car->manufacture_date ?? 'N/A' }}</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="blog-list-head list-head-bottom d-flex">
                                                    <div class="blog-list-title">
                                                        <div class="title-bottom">
                                                            <div class="car-list-icon">
                                                                <img src="{{ asset('assets/user/img/profiles/avatar-14.jpg') }}"
                                                                    alt="user">
                                                            </div>
                                                            <div class="address-info">
                                                                <h6>
                                                                    <i class="feather-map-pin"></i>
                                                                    {{  $car->supplier->address  ?? 'Luanda, Angola' }}
                                                                </h6>
                                                            </div>
                                                            <div class="list-km">
                                                                <span class="km-count">
                                                                    <img src="assets/user/img/icons/map-pin.svg"
                                                                        alt="distância">3.2m
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-button">
                                                        <a href="{{ route('car.details', ['car_id' => $car->id]) }}"
                                                            class="btn btn-order">
                                                            <span><i class="feather-calendar me-2"></i></span>Alugar Agora
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @if ($car->featured)
                                            <div class="feature-text">
                                                <span class="bg-danger">Destaque</span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>         
            </div>
        </div>
    </section>
@endsection
