@extends('layout._site.main')
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
                                        <div class="view-all d-flex align-items-center gap-3">
                                            <a href="{{ route('site.car-list') }}"
                                                class="btn btn-primary d-inline-flex align-items-center">Alugue um Carro<i
                                                    class="bx bx-right-arrow-alt ms-1"></i></a>
                                        </div>
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
                                    <input type="text" class="form-control" name="pickup_location"
                                        placeholder="Digite o local de retirada" value="">
                                    <span class="input-icon"></span>
                                </div>
                            </div>
                        </div>
                        <div class="search-input">
                            <div class="input-block">
                                <label>Local de Devolução</label>
                                <div class="input-wrap">
                                    <input type="text" class="form-control" name="return_location"
                                        placeholder="Digite o local de devolução" value="">
                                    <span class="input-icon"></span>
                                </div>
                            </div>
                        </div>
                        <div class="search-input">
                            <div class="input-block">
                                <label>Data e Hora de Retirada</label>
                                <div class="input-wrap">
                                    <input type="text" class="form-control flatpickr-datetime" name="pickup_datetime"
                                        value="2025-03-14 12:00">
                                    <span class="input-icon"></span>
                                </div>
                            </div>
                        </div>
                        <div class="search-input input-end">
                            <div class="input-block">
                                <label>Data e Hora de Devolução</label>
                                <div class="input-wrap">
                                    <input type="text" class="form-control flatpickr-datetime" name="dropoff_datetime"
                                        value="2025-03-15 12:00">
                                    <span class="input-icon"></span>
                                </div>
                            </div>
                        </div>
                        <div class="customer-info">
                            <button class="btn btn-primary" type="submit">
                                <div>PESQUIZA O SEU CARRO</div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="banner-bgs">
                <img src="{{ url('assets/user/img/bg/banner-bg-01.png') }}" class="bg-01 img-fluid" alt="img">
            </div>
        </section>
        <!-- /Banner -->

        <!-- Category Section -->
        <section class="category-section-four">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading heading-four" data-aos="fade-down">
                            <h2>Categorias em Destaque</h2>
                            <p>Sabe o que está procurando? Navegue pela nossa ampla seleção de carros</p>
                        </div>
                        <div class="row row-gap-4">
                            <div class="col-xl-2 col-md-4 col-sm-6 d-flex">
                                <div class="category-item flex-fill">
                                    <div class="category-info d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="title"><a
                                                    href="{{ route('site.car-list', ['type_car' => 'suv']) }}">Aventura</a>
                                            </h6>
                                            <p>{{ $suvCount }}</p>
                                        </div>
                                        <a href="{{ route('site.car-list', ['type_car' => 'suv']) }}" class="link-icon"><i
                                                class="bx bx-right-arrow-alt"></i></a>
                                    </div>
                                    <div class="category-img">
                                        <img src="{{ url('assets/user/img/category/category-01.png') }}" alt="img"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-4 col-sm-6 d-flex">
                                <div class="category-item flex-fill">
                                    <div class="category-info d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="title"><a
                                                    href="{{ route('site.car-list', ['type_car' => 'sedan']) }}">Executivo</a>
                                            </h6>
                                            <p>{{ $sedanCount }}</p>
                                        </div>
                                        <a href="{{ route('site.car-list', ['type_car' => 'sedan']) }}"
                                            class="link-icon"><i class="bx bx-right-arrow-alt"></i></a>
                                    </div>
                                    <div class="category-img">
                                        <img src="{{ url('assets/user/img/category/category-02.png') }}" alt="img"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-4 col-sm-6 d-flex">
                                <div class="category-item flex-fill">
                                    <div class="category-info d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="title"><a
                                                    href="{{ route('site.car-list', ['type_car' => 'sports_car']) }}">Esportivos</a>
                                            </h6>
                                            <p>{{ $sports_carCount }}</p>
                                        </div>
                                        <a href="{{ route('site.car-list', ['type_car' => 'sports_car']) }}"
                                            class="link-icon"><i class="bx bx-right-arrow-alt"></i></a>
                                    </div>
                                    <div class="category-img">
                                        <img src="{{ url('assets/user/img/category/category-03.png') }}" alt="img"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-4 col-sm-6 d-flex">
                                <div class="category-item flex-fill">
                                    <div class="category-info d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="title"><a
                                                    href="{{ route('site.car-list', ['type_car' => 'minivan']) }}">Viagem</a>
                                            </h6>
                                            <p>{{ $minivanCount }}</p>
                                        </div>
                                        <a href="{{ route('site.car-list', ['type_car' => 'minivan']) }}"
                                            class="link-icon"><i class="bx bx-right-arrow-alt"></i></a>
                                    </div>
                                    <div class="category-img">
                                        <img src="{{ url('assets/user/img/category/category-04.png') }}" alt="img"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-4 col-sm-6 d-flex">
                                <div class="category-item flex-fill">
                                    <div class="category-info d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="title"><a
                                                    href="{{ route('site.car-list', ['type_car' => 'compact_suv']) }}">Familia</a>
                                            </h6>
                                            <p>{{ $compact_suvCount }}</p>
                                        </div>
                                        <a href="{{ route('site.car-list', ['type_car' => 'compact_suv']) }}"
                                            class="link-icon"><i class="bx bx-right-arrow-alt"></i></a>
                                    </div>
                                    <div class="category-img">
                                        <img src="{{ url('assets/user/img/category/category-05.png') }}" alt="img"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-4 col-sm-6 d-flex">
                                <div class="category-item flex-fill">
                                    <div class="category-info d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="title"><a
                                                    href="{{ route('site.car-list', ['type_car' => 'compact']) }}">Urbano</a>
                                            </h6>
                                            <p>{{ $compactCount }}</p>
                                        </div>
                                        <a href="{{ route('site.car-list', ['type_car' => 'compact']) }}"
                                            class="link-icon"><i class="bx bx-right-arrow-alt"></i></a>
                                    </div>
                                    <div class="category-img">
                                        <img src="{{ url('assets/user/img/category/category-06.png') }}" alt="img"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="view-all-btn text-center aos" data-aos="fade-down">
                            <a href="{{ route('site.car-list') }}" class="btn btn-secondary">Ver Todos<i
                                    class="bx bx-right-arrow-alt ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Category Section -->

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
                    <p>Aqui temos uma lista de alguns dos carros mais populares em Angola</p>
                </div>
                <div class="row">
                    @foreach ($cars as $car)
                        <div class="col-lg-4 col-md-6">
                            <div class="listing-item listing-item-two">
                                <div class="listing-img">
                                    @if ($car->status == 'available')
                                        <a href="{{ route('car.details', $car->id) }}">
                                            <img src="{{ url('Uploads/car/car_images/' . $car->image) }}"
                                                class="img-fluid" alt="{{ $car->brand->name ?? 'Carro' }}">
                                        </a>
                                    @else
                                        <a href="javascript:void(0);" class="reserved-car"
                                            data-car-id="{{ $car->id }}"
                                            data-reservation-dates="{{ $car->reserves && $car->reserves->where('status', 'in_progress')->isNotEmpty() ? \Carbon\Carbon::parse($car->reserves->where('status', 'in_progress')->first()->start_date)->format('d/m/Y') . ' - ' . \Carbon\Carbon::parse($car->reserves->where('status', 'in_progress')->first()->end_date)->format('d/m/Y') : 'N/A' }}">
                                            <img src="{{ url('Uploads/car/car_images/' . $car->image) }}"
                                                class="img-fluid" alt="{{ $car->brand->name ?? 'Carro' }}">
                                        </a>
                                    @endif
                                    <div class="fav-item">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="featured-text">{{ $car->brand->name ?? '' }}</span>
                                            <span
                                                class="availability {{ $car->status == 'available' ? 'bg-success text-white' : 'bg-danger text-white' }} p-2.5 rounded">{{ $car->status == 'available' ? 'Disponível' : 'Reservado' }}</span>
                                        </div>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <!-- <span class="location"><i
                                                            class="bx bx-map me-1"></i>{{ $car->location ?? 'Localização' }}</span> -->
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-center justify-content-between">
                                        <div class="list-rating">
                                            <h3 class="listing-title">
                                                @if ($car->status == 'available')
                                                    <a href="{{ route('car.details', $car->id) }}">{{ $car->brand->name }}
                                                        {{ $car->models->name }}</a>
                                                @else
                                                    <a href="javascript:void(0);" class="reserved-car"
                                                        data-car-id="{{ $car->id }}"
                                                        data-reservation-dates="{{ $car->reserves && $car->reserves->where('status', 'in_progress')->isNotEmpty() ? \Carbon\Carbon::parse($car->reserves->where('status', 'in_progress')->first()->start_date)->format('d/m/Y') . ' - ' . \Carbon\Carbon::parse($car->reserves->where('status', 'in_progress')->first()->end_date)->format('d/m/Y') : 'N/A' }}">{{ $car->brand->name }}
                                                        {{ $car->models->name }}</a>
                                                @endif
                                            </h3>
                                            <div class="list-rating">
                                                @for ($i = 0; $i < 5; $i++)
                                                    <i
                                                        class="fas fa-star {{ $i < ($car->rating ?? 0) ? 'filled' : '' }}"></i>
                                                @endfor
                                                <span>({{ $car->rating ?? 0 }}) {{ $car->reviews_count ?? 0 }}
                                                    Reviews</span>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="price">{{ formatKz($car->price) }} <span>/ Dia</span></h4>
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
                    <a href="{{ route('site.car-list') }}" class="btn btn-secondary d-inline-flex align-items-center">Ver
                        Mais
                        Carros<i class="bx bx-right-arrow-alt ms-1"></i></a>
                </div>
            </div>
        </section>
        <!-- /Car Section -->

        <!-- Popular Section -->
        <section class="popular-section-four">
            <div class="container">
                <div class="section-heading heading-four" data-aos="fade-down">
                    <h2>Carros Populares Recomendados</h2>
                    <p>Aqui estão algumas opções versáteis que atendem a diferentes necessidades</p>
                </div>
                <div class="car-slider owl-carousel" style="height:80vh">
                    @foreach ($cars as $car)
                        <div class="car-item">
                            <h6>{{ strtoupper($car->brand->name ?? 'Marca') }}</h6>
                            <h2 class="display-1">{{ strtoupper($car->models->name ?? 'Modelo') }}</h2>
                            <div class="car-img img-car-m">
                                <img src="{{ url('Uploads/car/car_images/' . $car->image) }}" alt="img"
                                    class="img-fluid">
                                <div class="amount-icon">
                                    <span class="day-amt">
                                        <p>Apartir de</p>
                                        <h6>{{ formatKz($car->price) }} <span>/dia</span></h6>
                                    </span>
                                </div>
                            </div>
                            <div class="spec-list">
                                <span><img src="{{ url('assets/user/img/icons/spec-01.svg') }}"
                                        alt="img">{{ $car->transmission }}</span>
                                <span><img src="{{ url('assets/user/img/icons/spec-02.svg') }}"
                                        alt="img">{{ $car->manufacture_date }}</span>
                                <span><img src="{{ url('assets/user/img/icons/spec-03.svg') }}"
                                        alt="img">{{ $car->mileage }}</span>
                                <span><img src="{{ url('assets/user/img/icons/spec-05.svg') }}"
                                        alt="img">{{ $car->fuel->name ?? 'Combustível' }}</span>
                            </div>
                            @if ($car->status == 'available')
                                <a href="{{ route('car.details', $car->id) }}" class="btn btn-primary">Alugue Agora</a>
                            @else
                                <a href="javascript:void(0);" class="btn btn-primary reserved-car"
                                    data-car-id="{{ $car->id }}"
                                    data-reservation-dates="{{ $car->reserves && $car->reserves->where('status', 'in_progress')->isNotEmpty() ? \Carbon\Carbon::parse($car->reserves->where('status', 'in_progress')->first()->start_date)->format('d/m/Y') . ' - ' . \Carbon\Carbon::parse($car->reserves->where('status', 'in_progress')->first()->end_date)->format('d/m/Y') : 'N/A' }}">Alugue
                                    Agora</a>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- /Popular Section -->

        <!-- Brand Section -->
        <section class="brand-section" >
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
                                            ajuda na escolha do veículo ideal para você.</p>
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
                                        <p>Normalmente entregamos o carro com o tanque cheio e pedimos que seja devolvido
                                            da mesma forma. Consulte os detalhes específicos ao finalizar a reserva.</p>
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
                                            apresentar carteira de motorista válida e podem estar sujeitos a taxas
                                            extras.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /FAQ Section -->

        <!-- Categories Section -->
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
                                            <li><a href="{{ route('site.car-list', ['type_car' => 'coupe']) }}">Coupé</a>
                                            </li>
                                            <li><a
                                                    href="{{ route('site.car-list', ['type_car' => 'convertible']) }}">Conversível</a>
                                            </li>
                                            <li><a
                                                    href="{{ route('site.car-list', ['type_car' => 'hatchback']) }}">Hatchback</a>
                                            </li>
                                            <li><a href="{{ route('site.car-list', ['type_car' => 'suv']) }}">SUV
                                                    (Utilitário Esportivo)</a></li>
                                            <li><a
                                                    href="{{ route('site.car-list', ['type_car' => 'minivan']) }}">Minivan</a>
                                            </li>
                                            <li><a href="{{ route('site.car-list', ['type_car' => 'truck']) }}">Camião</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                        <ul class="category-list">
                                            <li><a href="{{ route('site.car-list', ['type_car' => 'sports_car']) }}">Carro
                                                    Esportivo</a></li>
                                            <li><a href="{{ route('site.car-list', ['type_car' => 'suv']) }}">SUV</a></li>
                                            <li><a href="{{ route('site.car-list', ['type_car' => 'station_wagon']) }}">Wagon
                                                    (Perua)</a></li>
                                            <li><a
                                                    href="{{ route('site.car-list', ['type_car' => 'crossover']) }}">Crossover</a>
                                            </li>
                                            <li><a href="{{ route('site.car-list', ['type_car' => 'electric']) }}">Veículo
                                                    Elétrico</a></li>
                                            <li><a href="{{ route('site.car-list', ['type_car' => 'jeep']) }}">Jeep</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                        <ul class="category-list">
                                            <li><a href="{{ route('site.car-list', ['type_car' => 'c1_segment']) }}">Carros
                                                    Segmento C1</a></li>
                                            <li><a
                                                    href="{{ route('site.car-list', ['type_car' => 'compact']) }}">Compacto</a>
                                            </li>
                                            <li><a
                                                    href="{{ route('site.car-list', ['type_car' => 'hatchback']) }}">Hatchback</a>
                                            </li>
                                            <li><a href="{{ route('site.car-list', ['type_car' => 'luxury']) }}">Carro de
                                                    Luxo</a></li>
                                            <li><a href="{{ route('site.car-list', ['type_car' => 'mpv']) }}">MPV
                                                    (Monovolume)</a></li>
                                            <li><a href="{{ route('site.car-list', ['type_car' => 'van']) }}">Van</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                        <ul class="category-list">
                                            <li><a href="{{ route('site.car-list', ['brands' => ['Maruti Suzuki']]) }}">Maruti
                                                    Suzuki</a></li>
                                            <li><a
                                                    href="{{ route('site.car-list', ['brands' => ['Hyundai']]) }}">Hyundai</a>
                                            </li>
                                            <li><a href="{{ route('site.car-list', ['brands' => ['Tata Motors']]) }}">Tata
                                                    Motors</a></li>
                                            <li><a href="{{ route('site.car-list', ['brands' => ['Skoda']]) }}">Skoda</a>
                                            </li>
                                            <li><a
                                                    href="{{ route('site.car-list', ['brands' => ['Volkswagen']]) }}">Volkswagen</a>
                                            </li>
                                            <li><a
                                                    href="{{ route('site.car-list', ['brands' => ['Renault']]) }}">Renault</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                        <ul class="category-list">
                                            <li><a
                                                    href="{{ route('site.car-list', ['brands' => ['Toyota']]) }}">Toyota</a>
                                            </li>
                                            <li><a
                                                    href="{{ route('site.car-list', ['brands' => ['Nissan']]) }}">Nissan</a>
                                            </li>
                                            <li><a href="{{ route('site.car-list', ['brands' => ['MG Motor']]) }}">MG
                                                    Motor</a></li>
                                            <li><a href="{{ route('site.car-list', ['brands' => ['Kia']]) }}">Kia</a>
                                            </li>
                                            <li><a href="{{ route('site.car-list', ['brands' => ['Ford']]) }}">Ford</a>
                                            </li>
                                            <li><a href="{{ route('site.car-list', ['brands' => ['Jeep']]) }}">Jeep</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                        <ul class="category-list">
                                            <li><a href="{{ route('site.car-list', ['type_car' => 'coupe']) }}">Coupé</a>
                                            </li>
                                            <li><a
                                                    href="{{ route('site.car-list', ['type_car' => 'convertible']) }}">Conversível</a>
                                            </li>
                                            <li><a
                                                    href="{{ route('site.car-list', ['type_car' => 'hatchback']) }}">Hatchback</a>
                                            </li>
                                            <li><a href="{{ route('site.car-list', ['type_car' => 'suv']) }}">SUV
                                                    (Utilitário Esportivo)</a></li>
                                            <li><a
                                                    href="{{ route('site.car-list', ['type_car' => 'minivan']) }}">Minivan</a>
                                            </li>
                                            <li><a
                                                    href="{{ route('site.car-list', ['type_car' => 'truck']) }}">Camião</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Categories Section -->

        <!-- Modal for Reserved Car -->
        <div class="modal fade" id="reservedCarModal" tabindex="-1" aria-labelledby="reservedCarModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="reservedCarModalLabel">Carro Reservado</h5>
                    </div>
                    <div class="modal-body">
                        <p>Este carro está reservado e não está disponível no momento. Por favor, escolha outro veículo.</p>
                        <p><strong>Período de Reserva:</strong> <span id="reservationDates"></span></p>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('site.car-list') }}" class="btn btn-primary"
                            style="background-color: #FF8603; color:black;padding: 5px;">Ver Outros Carros</a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                            style="background-color: #d61818ff;">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- JavaScript for Modal -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const reservedCars = document.querySelectorAll('.reserved-car');
                const modalElement = document.getElementById('reservedCarModal');
                const reservationDatesElement = document.getElementById('reservationDates');

                // Instanciar o modal apenas uma vez
                const modal = new bootstrap.Modal(modalElement, {
                    backdrop: true,
                    keyboard: true
                });

                reservedCars.forEach(car => {
                    car.addEventListener('click', function(e) {
                        e.preventDefault(); // Evita comportamento padrão do link
                        const reservationDates = this.getAttribute('data-reservation-dates');
                        reservationDatesElement.textContent = reservationDates;
                        modal.show(); // Exibe o modal
                    });
                });

                // Limpar o conteúdo do modal ao fechar
                modalElement.addEventListener('hidden.bs.modal', function() {
                    reservationDatesElement.textContent = ''; // Limpa as datas
                    document.body.classList.remove('modal-open'); // Remove classe que bloqueia interação
                    const backdrop = document.querySelector('.modal-backdrop');
                    if (backdrop) {
                        backdrop.remove(); // Remove manualmente o backdrop, se presente
                    }
                });
            });
        </script>

        <!-- scrollToTop start -->
        <div class="progress-wrap active-progress">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                    style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;">
                </path>
            </svg>
        </div>
        <!-- scrollToTop end -->

        <style>
            .input-wrap ::placeholder {
                color: #ffffff;
                font-size: 14px;
            }
        </style>
    </div>
@endsection
