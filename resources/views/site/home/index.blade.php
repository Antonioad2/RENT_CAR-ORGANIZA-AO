@extends('site.layouts.main')
@section('title', 'AngoCar')
@section('content')
    <div class="main-wrapper home-three">

        <!-- Banner -->
        <section class="banner-section-four">
            <div class="container">
                <div class="home-banner">
                    <div class="row align-items-center">
                        <div class="col-lg-5" data-aos="fade-down">
                            <div class="banner-content">
                                <h1>Veja nossos <span>Verificados e Diversos</span> Carros</h1>
                                <p>Design esportivo moderno para quem busca aventura e grandeza
                                    — carros para relaxar com quem você ama.
                                </p>
                                <div class="customer-list">
                                    <div class="users-wrap">
                                        <ul class="users-list">
                                            <li>
                                                <img src="{{ url('assets/user/img/profiles/avatar-11.jpg') }}"
                                                    class="img-fluid aos" alt="bannerimage">
                                            </li>
                                            <li>
                                                <img src="{{ url('assets/user/img/profiles/avatar-15.jpg') }}"
                                                    class="img-fluid aos" alt="bannerimage">
                                            </li>
                                            <li>
                                                <img src="{{ url('assets/user/img/profiles/avatar-03.jpg') }}"
                                                    class="img-fluid aos" alt="bannerimage">
                                            </li>
                                        </ul>
                                        <div class="customer-info">
                                            <h4>6 mil + clientes</h4>
                                            <p>utilizaram nossos serviços de aluguel </p>
                                        </div>
                                    </div>
                                    <div class="view-all d-flex align-items-center gap-3">
                                        <a href="{{route('site.car-list')}}"
                                            class="btn btn-primary d-inline-flex align-items-center">Alugue um Carro<i
                                                class="bx bx-right-arrow-alt ms-1"></i></a>
                                        <a href="add-listing.html"
                                            class="btn btn-secondary d-inline-flex align-items-center"><i
                                                class="bx bxs-plus-circle me-1"></i>Adicione seu Carro</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-image">
                                <div class="banner-img" data-aos="fade-down">
                                    <div class="amount-icon">
                                        <span class="day-amt">
                                            <p>Apartir de</p>
                                            <h6 class="text-center">60.000 Kz<span> /dia</span></h6>
                                        </span>
                                    </div>
                                    <span class="rent-tag"><i class="bx bxs-circle"></i> Disponível para Aluguel</span>
                                    <img src="{{ url('assets/user/img/banner/banner.png') }}" class="img-fluid"
                                        alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-search">
    <form action="{{ route('site.car-list') }}" class="form-block d-flex align-items-center" method="GET">
        @csrf
        <div class="search-input">
            <div class="input-block">
                <label>Local de Retirada</label>
                <div class="input-wrap">
                    <input type="text" class="form-control" name="pickup_location" placeholder="Digite o local de retirada (ex: Belas, Cacuaco ou outro)" value="">
                    <span class="input-icon"></span>
                </div>
            </div>
        </div>
        <div class="search-input">
            <div class="input-block">
                <label>Local de Devolução</label>
                <div class="input-wrap">
                    <input type="text" class="form-control" name="return_location" placeholder="Digite o local de devolução (ex: Viana, Talatona ou outro)" value="">
                    <span class="input-icon"></span>
                </div>
            </div>
        </div>
        <div class="search-input">
            <div class="input-block">
                <label>Data e Hora de Retirada</label>
                <div class="input-wrap">
                    <input type="text" class="form-control flatpickr-datetime" name="pickup_datetime" value="2025-03-14 12:00">
                    <span class="input-icon"></span>
                </div>
            </div>
        </div>
        <div class="search-input input-end">
            <div class="input-block">
                <label>Data e Hora de Devolução</label>
                <div class="input-wrap">
                    <input type="text" class="form-control flatpickr-datetime" name="dropoff_datetime" value="2025-03-15 12:00">
                    <span class="input-icon"></span>
                </div>
            </div>
        </div>
        <div class="customer-info">
            <button class="btn btn-primary" type="submit"><div style="color:black" >PESQUIZA O SEU CARRO</div></button>
        </div>
    </form>
</div>
            </div>
            <div class="banner-bgs">
                <img src="{{ url('assets/user/img/bg/banner-bg-01.png') }}" class="bg-01 img-fluid" alt="img">
            </div>
        </section>
        <!-- /Banner -->

        <!-- Category  Section -->
        <section class="category-section-four">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Heading title-->
                        <div class="section-heading heading-four" data-aos="fade-down">
                            <h2>Categorias em Destaque</h2>
                            <p>Sabe o que está procurando? Navegue pela nossa ampla seleção de carros</p>
                        </div>
                        <!-- /Heading title -->

                        <div class="row row-gap-4">

                            <!-- Category Item -->
                            <div class="col-xl-2 col-md-4 col-sm-6 d-flex">
                                <div class="category-item flex-fill">
                                    <div class="category-info d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="title"><a href="{{route('site.car-list', ['type_car' => 'suv'])}}">Aventura</a></h6>
                                            <p>{{$suvCount}}</p>
                                        </div>
                                        <a href="{{route('site.car-list', ['type_car' => 'suv'])}}" class="link-icon"><i
                                                class="bx bx-right-arrow-alt"></i></a>
                                    </div>
                                    <div class="category-img">
                                        <img src="{{ url('assets/user/img/category/category-01.png') }}" alt="img"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- /Category Item -->

                            <!-- Category Item -->
                            <div class="col-xl-2 col-md-4 col-sm-6 d-flex">
                                <div class="category-item flex-fill">
                                    <div class="category-info d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="title"><a href="{{route('site.car-list', ['type_car' => 'sedan'])}}">Executivo</a></h6>
                                            <p>{{$sedanCount}}</p>
                                        </div>
                                        <a href="{{route('site.car-list', ['type_car' => 'sedan'])}}" class="link-icon"><i
                                                class="bx bx-right-arrow-alt"></i></a>
                                    </div>
                                    <div class="category-img">
                                        <img src="{{ url('assets/user/img/category/category-02.png') }}" alt="img"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- /Category Item -->

                            <!-- Category Item -->
                            <div class="col-xl-2 col-md-4 col-sm-6 d-flex">
                                <div class="category-item flex-fill">
                                    <div class="category-info d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="title"><a href="{{route('site.car-list', ['type_car' => 'sports_car'])}}">Esportivos</a></h6>
                                            <p>{{$sports_carCount}}</p>
                                        </div>
                                        <a href="{{route('site.car-list', ['type_car' => 'sports_car'])}}" class="link-icon"><i
                                                class="bx bx-right-arrow-alt"></i></a>
                                    </div>
                                    <div class="category-img">
                                        <img src="{{ url('assets/user/img/category/category-03.png') }}" alt="img"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- /Category Item -->

                            <!-- Category Item -->
                            <div class="col-xl-2 col-md-4 col-sm-6 d-flex">
                                <div class="category-item flex-fill">
                                    <div class="category-info d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="title"><a href="{{route('site.car-list', ['type_car' => 'minivan'])}}">Viagem</a></h6>
                                            <p>{{$minivanCount}}</p>
                                        </div>
                                        <a href="{{route('site.car-list', ['type_car' => 'minivan'])}}" class="link-icon"><i
                                                class="bx bx-right-arrow-alt"></i></a>
                                    </div>
                                    <div class="category-img">
                                        <img src="{{ url('assets/user/img/category/category-04.png') }}" alt="img"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- /Category Item -->

                            <!-- Category Item -->
                            <div class="col-xl-2 col-md-4 col-sm-6 d-flex">
                                <div class="category-item flex-fill">
                                    <div class="category-info d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="title"><a href="{{route('site.car-list',['type_car' => 'compact_suv'])}}">Familia</a></h6>
                                            <p>{{$compact_suvCount}}</p>
                                        </div>
                                        <a href="{{route('site.car-list',['type_car' => 'compact_suv'])}}" class="link-icon"><i
                                                class="bx bx-right-arrow-alt"></i></a>
                                    </div>
                                    <div class="category-img">
                                        <img src="{{ url('assets/user/img/category/category-05.png') }}" alt="img"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- /Category Item -->

                            <!-- Category Item -->
                            <div class="col-xl-2 col-md-4 col-sm-6 d-flex">
                                <div class="category-item flex-fill">
                                    <div class="category-info d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="title"><a href="{{route('site.car-list',['type_car' => 'compact_suv'])}}">Urbano</a></h6>
                                            <p>{{$compactCount}}</p>
                                        </div>
                                        <a href="{{route('site.car-list',['type_car' => 'compact_suv'])}}" class="link-icon"><i
                                                class="bx bx-right-arrow-alt"></i></a>
                                    </div>
                                    <div class="category-img">
                                        <img src="{{ url('assets/user/img/category/category-06.png') }}" alt="img"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- /Category Item -->

                        </div>

                        <div class="view-all-btn text-center aos" data-aos="fade-down">
                            <a href="{{ route('site.car-list') }}" class="btn btn-secondary">Ver Todos<i
                                    class="bx bx-right-arrow-alt ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Category  Section -->

        <!-- Feature Section -->
        <section class="feature-section pt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">

                        <div class="feature-img">
                            <div class="section-heading heading-four text-start" data-aos="fade-down">
                                <h2>Melhor do Aluguel de Carros</h2>
                                <p>Quando viajamos para uma cidade desconhecida,
                                    alugar um carro confiável faz com que nos sintamos
                                    à vontade, como se estivéssemos em casa.</p>
                            </div>
                            <img src="{{ url('assets/user/img/cars/car.png') }}" alt="img" class="img-fluid">
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <div class="row row-gap-4">

                            <!-- Feature Item -->
                            <div class="col-md-6 d-flex">
                                <div class="feature-item flex-fill">
                                    <span class="feature-icon">
                                        <i class="bx bxs-info-circle"></i>
                                    </span>
                                    <div>
                                        <h6 class="mb-1">Melhor Negócio</h6>
                                        <p>Oferecemos preços competitivos e promoções exclusivas para garantir o melhor
                                            custo-benefício.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /Feature Item -->

                            <!-- Feature Item -->
                            <div class="col-md-6 d-flex">
                                <div class="feature-item flex-fill">
                                    <span class="feature-icon">
                                        <i class="bx bx-exclude"></i>
                                    </span>
                                    <div>
                                        <h6 class="mb-1">Entrega em Domicílio</h6>
                                        <p>Receba o seu carro onde estiver, com serviço de entrega rápido e conveniente.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /Feature Item -->

                            <!-- Feature Item -->
                            <div class="col-md-6 d-flex">
                                <div class="feature-item flex-fill">
                                    <span class="feature-icon">
                                        <i class="bx bx-money"></i>
                                    </span>
                                    <div>
                                        <h6 class="mb-1">Baixo Depósito de Segurança</h6>
                                        <p>Facilitamos o aluguel com depósitos reduzidos, sem comprometer a sua
                                            tranquilidade.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /Feature Item -->

                            <!-- Feature Item -->
                            <div class="col-md-6 d-flex">
                                <div class="feature-item flex-fill">
                                    <span class="feature-icon">
                                        <i class="bx bxs-car-mechanic"></i>
                                    </span>
                                    <div>
                                        <h6 class="mb-1">Carros Modernos</h6>
                                        <p>Uma frota atualizada e bem cuidada para oferecer conforto e segurança em cada
                                            viagem.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /Feature Item -->

                            <!-- Feature Item -->
                            <div class="col-md-6 d-flex">
                                <div class="feature-item flex-fill">
                                    <span class="feature-icon">
                                        <i class="bx bx-support"></i>
                                    </span>
                                    <div>
                                        <h6 class="mb-1">Suporte ao Cliente</h6>
                                        <p>Atendimento dedicado e disponível para ajudar em todas as etapas do seu aluguel.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /Feature Item -->

                            <!-- Feature Item -->
                            <div class="col-md-6 d-flex">
                                <div class="feature-item flex-fill">
                                    <span class="feature-icon">
                                        <i class="bx bxs-coin"></i>
                                    </span>
                                    <div>
                                        <h6 class="mb-1">Sem Taxas Ocultas</h6>
                                        <p>Transparência total: o preço combinado é o que você paga, sem surpresas.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /Feature Item -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Feature Section -->

        <!-- Car Section -->
        <section class="car-section">
            <div class="container">

                <div class="section-heading heading-four" data-aos="fade-down">
                    <h2>Explore os Carros Mais Populares</h2>
                    <p>Aqui temos um lista de alguns dos Carros mais populares em Angola</p>
                </div>

                <div class="row">
                    @foreach ($cars as $car)
                        <div class="col-lg-4 col-md-6">
                            <div class="listing-item listing-item-two">
                                <div class="listing-img">
                                    <a href="{{ route('car.details', $car->id) }}">
                                        <img src="{{ url('uploads/car/car_images/' . $car->image) }}" class="img-fluid"
                                            alt="{{ $car->brand->name ?? 'Carro' }}">
                                    </a>
                                    <div class="fav-item">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="featured-text">{{ $car->brand->name ?? '' }}</span>
                                            <span
                                                class="availability">{{ $car->status == 'available' ? 'Disponível' : 'Indisponível' }}</span>
                                        </div>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="location"><i
                                            class="bx bx-map me-1"></i>{{ $car->location ?? 'Localização' }}</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-center justify-content-between">
                                        <div class="list-rating">
                                            <h3 class="listing-title">
                                                <a href="{{ route('car.details', $car->id) }}">{{ $car->brand->name }} {{$car->models->name}}</a>
                                            </h3>
                                            <div class="list-rating">
                                                @for ($i = 0; $i < 5; $i++)
                                                    <i class="fas fa-star {{ $i < $car->rating ? 'filled' : '' }}"></i>
                                                @endfor
                                                <span>({{ $car->rating }}) {{ $car->reviews_count ?? 0 }} Reviews</span>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="price">{{formatKz($car->price)}}  <span>/ Dia</span></h4>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <img src="{{ url('assets/user/img/icons/car-parts-01.svg') }}"
                                                    alt="Transmissão">
                                                <p>{{ $car->transmission }}</p>
                                            </li>
                                            <li>
                                                <img src="{{ url('assets/user/img/icons/car-parts-02.svg') }}"
                                                    alt="Quilometragem">
                                                <p>{{ $car->mileage }} KM</p>
                                            </li>
                                            <li>
                                                <img src="{{ url('assets/user/img/icons/car-parts-03.svg') }}"
                                                    alt="Combustível">
                                                <p>{{ $car->fuel->name ?? 'Desconhecido' }}</p>
                                            </li>
                                            <li>
                                                <img src="{{ url('assets/user/img/icons/car-parts-05.svg') }}"
                                                    alt="Ano">
                                                <p>{{ $car->manufacture_date ?? 'N/A' }}</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


                <div class="view-all-btn text-center aos" data-aos="fade-down">
                    <a href="{{ route('site.car-list')}}" class="btn btn-secondary d-inline-flex align-items-center">Ver Mais
                        Carros<i class="bx bx-right-arrow-alt ms-1"></i></a>
                </div>

            </div>
        </section>
        <!-- /Car Section -->

        <!-- Brand Section -->
        <section class="brand-section">
            <div class="container">
                <div class="section-heading heading-four" data-aos="fade-down">
                    <h2 class="text-white">Alugue Por Marcas</h2>
                    <p>Aqui temos uma lista de algumas Marcas mais usadas em Angola</p>
                </div>
                <div class="brands-slider owl-carousel">
                    <div class="brand-wrap">
                        <img src="{{ url('assets/user/img/brand/brand-09.svg') }}" alt="img">
                        <p>Chevrolet</p>
                    </div>
                    <div class="brand-wrap">
                        <img src="{{ url('assets/user/img/brand/brand-10.svg') }}" alt="img">
                        <p>BMW</p>
                    </div>
                    <div class="brand-wrap">
                        <img src="{{ url('assets/user/img/brand/brand-11.svg') }}" alt="img">
                        <p>Mercedes Benz</p>
                    </div>
                    <div class="brand-wrap">
                        <img src="{{ url('assets/user/img/brand/brand-12.svg') }}" alt="img">
                        <p>Hyundai</p>
                    </div>
                    <div class="brand-wrap">
                        <img src="{{ url('assets/user/img/brand/brand-13.svg') }}" alt="img">
                        <p>Audi</p>
                    </div>
                    <div class="brand-wrap">
                        <img src="{{ url('assets/user/img/brand/brand-14.svg') }}" alt="img">
                        <p>Kia</p>
                    </div>
                </div>
                <div class="brand-img text-center">
                    <img src="{{ url('assets/user/img/bg/brand.png') }}" alt="img" class="img-fluid">
                </div>
            </div>
        </section>
        <!-- /Brand Section -->

        <!-- Rental Section -->
        <section class="rental-section-four">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="rental-img">
                            <img src="{{ url('assets/user/img/about/rent-car.png') }}" alt="img" class="img-fluid">
                            <div class="grid-img">
                                <img src="{{ url('assets/user/img/about/car-grid.png') }}" alt="img"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="rental-content">
                            <div class="section-heading heading-four text-start" data-aos="fade-down">
                                <h2>Alugue Carros em 3 Passos</h2>
                                <p>Veja como Alugar um Carro na DreamsRent</p>
                            </div>
                            <div class="step-item d-flex align-items-center">
                                <span class="step-icon bg-primary me-3">
                                    <i class="bx bx-calendar-heart"></i>
                                </span>
                                <div>
                                    <h5>Escolha a Data e os Locais</h5>
                                    <p>Defina a data e o local para o seu aluguel de carro. Considere fatores como o seu
                                        itinerário de viagem e os pontos de retirada e devolução.</p>
                                </div>
                            </div>
                            <div class="step-item d-flex align-items-center">
                                <span class="step-icon bg-secondary-100 me-3">
                                    <i class="bx bxs-edit-location"></i>
                                </span>
                                <div>
                                    <h5>Selecione os Locais de Retirada e Devolução</h5>
                                    <p>Verifique a disponibilidade do tipo de veículo desejado para as datas e locais
                                        escolhidos. Certifique-se das tarifas de aluguel, impostos, taxas e de quaisquer
                                        cobranças adicionais.</p>
                                </div>
                            </div>
                            <div class="step-item d-flex align-items-center">
                                <span class="step-icon bg-dark me-3">
                                    <i class="bx bx-coffee-togo"></i>
                                </span>
                                <div>
                                    <h5>Reserve o Seu Carro</h5>
                                    <p>Defina a data e o local para o seu aluguel de carro. Considere fatores como o seu
                                        itinerário de viagem e os pontos de retirada e devolução.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="count-sec">
                    <div class="row row-gap-4">
                        <div class="col-lg-3 col-md-6 d-flex">
                            <div class="count-item flex-fill">
                                <h3><span class="counterUp">16</span>K+</h3>
                                <p>Clientes Satisfeitos</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex">
                            <div class="count-item flex-fill">
                                <h3><span class="counterUp">2547</span>K+</h3>
                                <p>Carros Disponíveis</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex">
                            <div class="count-item flex-fill">
                                <h3><span class="counterUp">625</span>K+</h3>
                                <p>Locais de Retirada</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex">
                            <div class="count-item flex-fill">
                                <h3><span class="counterUp">15000</span>K+</h3>
                                <p>Total de Quilômetros</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Rental Section -->

        <!-- Popular Section -->
        <section class="popular-section-four">
            <div class="container">
                <!-- Section Header -->
                <div class="section-heading heading-four" data-aos="fade-down">
                    <h2>Carros Populares Recomendados</h2>
                    <p>Aqui estão algumas opções versáteis que atendem a diferentes necessidades</p>
                </div>
                <!-- /Section Header -->
                <div class="car-slider owl-carousel">
                    @foreach ($cars as $car)
                        <div class="car-item">
                            <h6>{{ strtoupper($car->brand->name ?? 'Marca') }}</h6>
                            <h2 class="display-1">{{ strtoupper($car->models->name ?? 'Modelo') }}</h2>
                            <div class="car-img">
                                <img src="{{ url('uploads/car/car_images/' . $car->image) }}" alt="img"
                                    class="img-fluid">
                                <div class="amount-icon">
                                    <span class="day-amt">
                                        <p>Apartir de</p>
                                        <h6>{{formatKz($car->price)}}  <span> /dia</span></h6>
                                    </span>
                                </div>
                            </div>
                            <div class="spec-list">
                                <span><img src="{{ url('assets/user/img/icons/spec-01.svg') }}"
                                        alt="img">{{ $car->transmission }}</span>
                                <span><img src="{{ url('assets/user/img/icons/spec-02.svg') }}"
                                        alt="img">{{ $car->manufacture_date}} </span>
                                <span><img src="{{ url('assets/user/img/icons/spec-03.svg') }}"
                                        alt="img">{{ $car->mileage}} </span>
                                <!--<span><img src="{{ url('assets/user/img/icons/spec-04.svg') }}" alt="img">AC</span>-->
                                <span><img src="{{ url('assets/user/img/icons/spec-05.svg') }}"
                                        alt="img">{{ $car->fuel->name ?? 'Combustível' }}</span>
                                <!-- <span><img src="{{ url('assets/user/img/icons/car-parts-06.svg') }}"
                                        alt="img">{{ $car->number_of_seats }} Pessoas</span> -->
                            </div>
                            <a href="{{ route('car.details', $car->id) }}" class="btn btn-primary">Alugue Agora</a>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- /Popular Section -->


        <!-- Testimonial Section -->
        {{-- <section class="testimonial-section">
            <div class="container">
                <div class="section-heading heading-four" data-aos="fade-down">
                    <h2>Feedback dos Nossos Clientes</h2>
                    <p>Fornecido pelos clientes sobre a experiência deles com um produto ou serviço.</p>
                </div>

                <div class="row row-gap-4 justify-content-center">

                    <!-- Testimonial Item -->
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="testimonial-item testimonial-item-two flex-fill">
                            <div class="user-img">
                                <img src="{{ url('assets/user/img/profiles/avatar-02.jpg') }}" class="img-fluid"
                                    alt="img">
                            </div>
                            <p>Alugar um carro na Dreams Rent tornou minhas férias muito mais tranquilas! O processo foi
                                rápido.</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                            </div>
                            <div class="user-info">
                                <h6>Kyle Roberts DVM</h6>
                                <p>Newyork, USA</p>
                            </div>
                        </div>
                    </div>
                    <!-- /Testimonial Item -->

                    <!-- Testimonial Item -->
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="testimonial-item testimonial-item-two flex-fill">
                            <div class="user-img">
                                <img src="{{ url('assets/user/img/profiles/avatar-18.jpg') }}" class="img-fluid"
                                    alt="img">
                            </div>
                            <p>A ampla seleção de veículos deles, as localizações convenientes e os preços competitivos.</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                            </div>
                            <div class="user-info">
                                <h6>Hardley Vanessa</h6>
                                <p>Newyork, USA</p>
                            </div>
                        </div>
                    </div>
                    <!-- /Testimonial Item -->

                    <!-- Testimonial Item -->
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="testimonial-item testimonial-item-two flex-fill">
                            <div class="user-img">
                                <img src="{{ url('assets/user/img/profiles/avatar-15.jpg') }}" class="img-fluid"
                                    alt="img">
                            </div>
                            <p>O SUV espaçoso que alugamos acomodou confortavelmente nossa família e toda a nossa bagagem.
                            </p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                            </div>
                            <div class="user-info">
                                <h6>Wilson</h6>
                                <p>Nevada, USA</p>
                            </div>
                        </div>
                    </div>
                    <!-- /Testimonial Item -->

                </div>

                <div class="view-all-btn text-center aos" data-aos="fade-down">
                    <a href="{{route('site.car-list')}}" class="btn btn-secondary">Ver Todos<i
                            class="bx bx-right-arrow-alt ms-1"></i></a>
                </div>

                <div class="client-slider owl-carousel">
                    <div>
                        <img src="{{ url('assets/user/img/clients/client-01.svg') }}" alt="img">
                    </div>
                    <div>
                        <img src="{{ url('assets/user/img/clients/client-02.svg') }}" alt="img">
                    </div>
                    <div>
                        <img src="{{ url('assets/user/img/clients/client-03.svg') }}" alt="img">
                    </div>
                    <div>
                        <img src="{{ url('assets/user/img/clients/client-04.svg') }}" alt="img">
                    </div>
                    <div>
                        <img src="{{ url('assets/user/img/clients/client-05.svg') }}" alt="img">
                    </div>
                    <div>
                        <img src="{{ url('assets/user/img/clients/client-06.svg') }}" alt="img">
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- /Testimonial Section -->

        <!-- Price Section -->
        <section class="pricing-section-four">
            <div class="container">
                <div class="section-heading heading-four" data-aos="fade-down">
                    <h2>Melhores Preços em Aluguel</h2>
                    <p>Escolha o plano certo para o seu negócio</p>
                </div>

                <div class="row">

                    <!-- Price Item -->
                    <div class="col-lg-3 col-md-6 d-flex">
                        <div class="price-item price-item-two flex-fill">
                            <div class="price-head">
                                <h6>Inicial</h6>
                                <div class="price-level">
                                    <div>
                                        <h3>299 $</h3>
                                        <p>Por mês</p>
                                    </div>
                                    <span class="offer-tag bg-danger">Oferta de 30%</span>
                                </div>
                            </div>
                            <div class="price-details">
                                <ul>
                                    <li>Entrada de 50%</li>
                                    <li>Seguro não incluído</li>
                                    <li>Entrega em domicílio não incluída</li>
                                    <li>Assistência na estrada</li>
                                    <li>Cobertura de seguro mínima</li>
                                    <li>Benefícios adicionais - GPS</li>
                                    <li>Sem horário flexível e sem extensão</li>
                                </ul>
                                <a href="login.html" class="btn btn-secondary w-100">
                                    Escolher Plano<i class="bx bx-right-arrow-alt ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /Price Item -->

                    <!-- Price Item -->
                    <div class="col-lg-3 col-md-6 d-flex">
                        <div class="price-item price-item-two flex-fill">
                            <div class="price-head">
                                <h6>Premium</h6>
                                <div class="price-level">
                                    <div>
                                        <h3>1299 $</h3>
                                        <p>Por mês</p>
                                    </div>
                                    <span class="offer-tag bg-pink">Oferta de 100%</span>
                                </div>
                            </div>
                            <div class="price-details">
                                <ul>
                                    <li>Entrada de 25%</li>
                                    <li>Seguro incluído</li>
                                    <li>Entrega em domicílio disponível</li>
                                    <li>Assistência na estrada</li>
                                    <li>Proteção contra lesões pessoais</li>
                                    <li>Benefícios adicionais: GPS, cadeirinha de bebê</li>
                                    <li>Horários flexíveis e possibilidade de extensão</li>
                                </ul>
                                <a href="login.html" class="btn btn-secondary w-100">
                                    Escolher Plano<i class="bx bx-right-arrow-alt ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /Price Item -->

                    <!-- Price Item -->
                    <div class="col-lg-3 col-md-6 d-flex">
                        <div class="price-item price-item-two recommend flex-fill">
                            <span class="recommend-tag">
                                <i class="bx bxs-star me-1"></i>Recomendado
                            </span>
                            <div class="price-head">
                                <h6>Enterprise</h6>
                                <div class="price-level">
                                    <div>
                                        <h3>1599 $</h3>
                                        <p>Por mês</p>
                                    </div>
                                </div>
                            </div>
                            <div class="price-details">
                                <ul>
                                    <li>0% de entrada</li>
                                    <li>Seguro incluído</li>
                                    <li>Entrega em domicílio disponível</li>
                                    <li>Assistência na estrada</li>
                                    <li>Proteção contra lesões pessoais</li>
                                    <li>Benefícios adicionais: GPS, cadeirinha de bebê</li>
                                    <li>Horários flexíveis e possibilidade de extensão</li>
                                </ul>
                                <a href="login.html" class="btn btn-secondary w-100">
                                    Escolher Plano<i class="bx bx-right-arrow-alt ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /Price Item -->

                    <!-- Price Item -->
                    <div class="col-lg-3 col-md-6 d-flex">
                        <div class="price-item price-item-two active flex-fill">
                            <div class="price-head">
                                <h6>Personalizado</h6>
                                <div class="price-level">
                                    <div>
                                        <h3>Entre em Contato</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="price-details">
                                <ul>
                                    <li>Ofertas de fim de semana/semanal</li>
                                    <li>Descontos para membros</li>
                                    <li>Upgrades de seguro</li>
                                    <li>Seguro contra acidentes pessoais</li>
                                    <li>Cobertura de seguro mínima</li>
                                    <li>Sem compromisso de longo prazo</li>
                                    <li>Depósito reembolsável</li>
                                    <li>Atendimento prioritário</li>
                                </ul>
                                <a href="login.html" class="btn btn-secondary w-100">
                                    Escolher Plano<i class="bx bx-right-arrow-alt ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /Price Item -->

                </div>
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="view-all-btn text-center aos" data-aos="fade-down">
                            <p>Seja você uma pequena startup ou uma grande empresa, o nosso objetivo é oferecer o máximo
                                valor e ajudá-lo a aproveitar todo o potencial da análise de IA.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Price Section -->

        <!-- Support Section -->
        {{-- <section class="support-section">
            <div class="horizontal-slide d-flex" data-direction="left" data-speed="slow">
                <div class="slide-list d-flex">
                    <div class="support-item">
                        <h2>Melhor Preço Garantido</h2>
                    </div>
                    <div class="support-item">
                        <h2>Cancelamento Gratuito</h2>
                    </div>
                    <div class="support-item">
                        <h2>Segurança de Primeira</h2>
                    </div>
                    <div class="support-item">
                        <h2>Frota de Carros Atualizada</h2>
                    </div>
                    <div class="support-item">
                        <h2>Confiança Comprovada</h2>
                    </div>

                </div>
            </div>
        </section> --}}
        <!-- /Support Section -->

        <!-- Blog Section -->
        {{-- <section class="blog-section-four">
            <div class="container">
                <div class="section-heading heading-four" data-aos="fade-down">
                    <h2>Percepções e Inovações</h2>
                    <p>Mergulhe em nossos artigos para se manter à frente no mundo acelerado da tecnologia.</p>
                </div>

                <div class="row row-gap-3 justify-content-center">

                    <!-- Blog Item -->
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="blog-item flex-fill">
                            <div class="blog-img">
                                <img src="{{ url('assets/user/img/blog/blog-11.jpg') }}" class="img-fluid"
                                    alt="img">
                            </div>
                            <div class="blog-content">
                                <div class="d-flex align-center justify-content-between blog-category">
                                    <a href="javascript:void(0);" class="category">Viagem</a>
                                    <p class="date d-inline-flex align-center">
                                        <i class="bx bx-calendar me-1"></i>6 de outubro de 2022
                                    </p>
                                </div>
                                <h5 class="title">
                                    <a href="blog-details.html">A Ford F-150 Raptor 2025 – Uma primeira olhada que você
                                        precisa conhecer</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <!-- /Blog Item -->

                    <!-- Blog Item -->
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="blog-item flex-fill">
                            <div class="blog-img">
                                <img src="{{ url('assets/user/img/blog/blog-12.jpg') }}" class="img-fluid"
                                    alt="img">
                            </div>
                            <div class="blog-content">
                                <div class="d-flex align-center justify-content-between blog-category">
                                    <a href="javascript:void(0);" class="category">Viagem</a>
                                    <p class="date d-inline-flex align-center">
                                        <i class="bx bx-calendar me-1"></i>7 de outubro de 2022
                                    </p>
                                </div>
                                <h5 class="title">
                                    <a href="blog-details.html">A Ford F-150 Raptor 2025 – Uma primeira olhada que você
                                        precisa conhecer</a>
                                </h5>

                            </div>
                        </div>
                    </div>
                    <!-- /Blog Item -->

                    <!-- Blog Item -->
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="blog-item flex-fill">
                            <div class="blog-img">
                                <img src="{{ url('assets/user/img/blog/blog-13.jpg') }}" class="img-fluid"
                                    alt="img">
                            </div>
                            <div class="blog-content">
                                <div class="d-flex align-center justify-content-between blog-category">
                                    <a href="javascript:void(0);" class="category">Viagem</a>
                                    <p class="date d-inline-flex align-center">
                                        <i class="bx bx-calendar me-1"></i>8 de outubro de 2022
                                    </p>
                                </div>
                                <h5 class="title">
                                    <a href="blog-details.html">A Ford F-150 Raptor 2025 – Uma primeira olhada que você
                                        precisa conhecer</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <!-- /Blog Item -->

                </div>

                <div class="view-all-btn text-center aos" data-aos="fade-down">
                    <a href="blog-grid.html" class="btn btn-secondary d-inline-flex align-center">Ver Mais<i
                            class="bx bx-right-arrow-alt ms-1"></i></a>
                </div>

                <div class="subscribe-sec">
                    <div class="row align-items-end">
                        <div class="col-md-6">
                            <div class="subscribe-content">
                                <h2>Inscreva-se para Obter um <span>App Móvel e Web</span> Fácil de Usar</h2>
                                <p>Monetize de forma adequada interfaces diretas em vez de soluções ultrapassadas. Gerencie
                                    com eficiência e sem intermediários processos antiquados.</p>
                                <div class="subscribe-form">
                                    <form action="#">
                                        <span><i class="bx bx-mail-send"></i></span>
                                        <input type="email" class="form-control" placeholder="Enter You Email Here">
                                        <button type="submit" class="btn btn-subscribe"><i
                                                class="bx bx-send"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="subscribe-img">
                                <img src="{{ url('assets/user/img/about/web-app.png') }}" alt="img"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <img src="{{ url('assets/user/img/bg/app-bg.svg') }}" alt="icon" class="app-bg-01">
                </div>

            </div>
        </section> --}}
        <!-- /Blog Section -->

        <!-- FAQ Section -->
        <section class="faq-section-four pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="section-heading heading-four" data-aos="fade-down">
                            <h2>Perguntas Frequentes</h2>
                            <p>Explore para saber mais sobre como podemos fortalecer o seu negócio</p>
                        </div>
                        <div class="accordion faq-accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faqOne" aria-expanded="true" aria-controls="faqOne">
                                        Quantos anos eu preciso ter para alugar um carro?
                                    </button>
                                </h2>
                                <div id="faqOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>Você pode navegar pela nossa seleção online ou entrar em contato conosco para
                                            obter ajuda na escolha do veículo certo para você.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faqTwo" aria-expanded="true" aria-controls="faqTwo">
                                        Quais documentos eu preciso para alugar um carro?
                                    </button>
                                </h2>
                                <div id="faqTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>Você pode navegar pela nossa seleção online ou entrar em contato conosco para
                                            obter ajuda na escolha do veículo certo para você.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faqThree" aria-expanded="true" aria-controls="faqThree">
                                        Que tipos de veículos estão disponíveis para alugar?
                                    </button>
                                </h2>
                                <div id="faqThree" class="accordion-collapse collapse show"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>Você pode explorar nossa seleção online ou entrar em contato conosco para obter
                                            ajuda na escolha do veículo ideal para você.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faqFour" aria-expanded="true" aria-controls="faqFour">
                                        Posso alugar um carro com um cartão de débito?
                                    </button>
                                </h2>
                                <div id="faqFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>Você pode explorar nossa seleção online ou entrar em contato conosco para obter
                                            ajuda na escolha do
                                            veículo ideal para você.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faqFive" aria-expanded="true" aria-controls="faqFive">
                                        Qual é a sua política de combustível?
                                    </button>
                                </h2>
                                <div id="faqFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>Normalmente entregamos o carro com o tanque cheio e pedimos que seja devolvido da
                                            mesma forma.
                                            Consulte os detalhes específicos ao finalizar a reserva.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faqSix" aria-expanded="true" aria-controls="faqSix">
                                        Posso adicionar motoristas adicionais ao meu contrato de aluguel?
                                    </button>
                                </h2>
                                <div id="faqSix" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>Sim, é possível adicionar motoristas adicionais ao contrato. Eles também precisam
                                            apresentar
                                            carteira de motorista válida e podem estar sujeitos a taxas extras.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </section>
    <!-- /FAQ Section -->


    <section class="categories-section">
        <div class="container">
            <div class="accordion custom-accordion" id="faqAcordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqOne" aria-expanded="true" aria-controls="faqOne">
                            Ver Todos os Carros e Categorias
                        </button>
                    </h2>
                    <div id="faqOne" class="accordion-collapse collapse show" data-bs-parent="#faqAcordion">
                        <div class="accordion-body">
                            <div class="row row-gap-3">
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <ul class="category-list">
                                        <li><a href="javascript:void(0);">Coupé</a></li>
                                        <li><a href="javascript:void(0);">Conversível</a></li>
                                        <li><a href="javascript:void(0);">Hatchback</a></li>
                                        <li><a href="javascript:void(0);">SUV (Utilitário Esportivo)</a></li>
                                        <li><a href="javascript:void(0);">Minivan</a></li>
                                        <li><a href="javascript:void(0);">Camião</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <ul class="category-list">
                                        <li><a href="javascript:void(0);">Carro Esportivo</a></li>
                                        <li><a href="javascript:void(0);">SUV</a></li>
                                        <li><a href="javascript:void(0);">Wagon (Perua)</a></li>
                                        <li><a href="javascript:void(0);">Crossover</a></li>
                                        <li><a href="javascript:void(0);">Veículo Elétrico</a></li>
                                        <li><a href="javascript:void(0);">Jeep</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <ul class="category-list">
                                        <li><a href="javascript:void(0);">Carros Segmento C1</a></li>
                                        <li><a href="javascript:void(0);">Compacto</a></li>
                                        <li><a href="javascript:void(0);">Hatchback</a></li>
                                        <li><a href="javascript:void(0);">Carro de Luxo</a></li>
                                        <li><a href="javascript:void(0);">MPV (Monovolume)</a></li>
                                        <li><a href="javascript:void(0);">Van</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <ul class="category-list">
                                        <li><a href="javascript:void(0);">Maruti Suzuki</a></li>
                                        <li><a href="javascript:void(0);">Hyundai</a></li>
                                        <li><a href="javascript:void(0);">Tata Motors</a></li>
                                        <li><a href="javascript:void(0);">Skoda</a></li>
                                        <li><a href="javascript:void(0);">Volkswagen</a></li>
                                        <li><a href="javascript:void(0);">Renault</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <ul class="category-list">
                                        <li><a href="javascript:void(0);">Toyota</a></li>
                                        <li><a href="javascript:void(0);">Nissan</a></li>
                                        <li><a href="javascript:void(0);">MG Motor</a></li>
                                        <li><a href="javascript:void(0);">Kia</a></li>
                                        <li><a href="javascript:void(0);">Ford</a></li>
                                        <li><a href="javascript:void(0);">Jeep</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <ul class="category-list">
                                        <li><a href="javascript:void(0);">Coupé</a></li>
                                        <li><a href="javascript:void(0);">Conversível</a></li>
                                        <li><a href="javascript:void(0);">Hatchback</a></li>
                                        <li><a href="javascript:void(0);">SUV (Utilitário Esportivo)</a></li>
                                        <li><a href="javascript:void(0);">Minivan</a></li>
                                        <li><a href="javascript:void(0);">Camião</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    </div>

    <!-- scrollToTop start -->
    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;">
            </path>
        </svg>
    </div>
    <!-- scrollToTop end -->
@endsection
