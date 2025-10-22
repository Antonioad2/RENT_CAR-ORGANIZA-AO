<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="/admin" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <div style="display: flex; justify-content: center; align-items: center;">
                     <img src="{{ url('assets/user/img/ango-cars.png') }}" alt="" style="width: 7.5rem; height: 3.5rem; margin-top: -1px;">
                </div>
            </a>
        </div>
        <div class="navbar-content">
            <ul class="nxl-navbar">
                <li class="nxl-item nxl-caption">
                    <label>Navigation</label>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-airplay"></i></span>
                        <span class="nxl-mtext">Dashboards</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="/admin">CRM</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/admin/analytics">Analytics</a></li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-cast"></i></span>
                        <span class="nxl-mtext">Relatório</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="/admin/reports/reportsSales">Reservas</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/admin/reports/reportsLeads">Carros</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/admin/reports/reportsProject">Motorista</a></li>
                    </ul>
                </li>

                {{--Lista de Marcas--}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-tag"></i></span>
                        <span class="nxl-mtext">Marcas</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('brands.index')}}"><i class="feather-eye"></i>Ver Mais</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('brands.create')}}"><i class="feather-plus"></i>Adicionar Outro</a></li>
                    </ul>
                </li>

                {{--Lista de Modelo--}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-box"></i></span>
                        <span class="nxl-mtext">Modelos</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('models.index')}}"><i class="feather-eye"></i>Ver Mais</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('models.create')}}"><i class="feather-plus"></i>Adicionar Outro</a></li>
                    </ul>
                </li>

                {{--Lista de Combustíveis--}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-droplet"></i></span>
                        <span class="nxl-mtext">Combustíveis</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('fuels.index')}}"><i class="feather-eye"></i>Ver Mais</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('fuels.create')}}"><i class="feather-plus"></i>Adicionar Outro</a></li>
                    </ul>
                </li>

                            {{--Lista de Cores--}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-square"></i></span>
                        <span class="nxl-mtext">Cores</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('colors.index')}}"><i class="feather-eye"></i>Ver Mais</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('colors.create')}}"><i class="feather-plus"></i>Adicionar Outro</a></li>
                    </ul>
                </li>

                {{--Lista de Fornecedores--}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-users"></i></span>
                        <span class="nxl-mtext">Fornecedores</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('suppliers.index')}}"><i class="feather-eye"></i>Ver Mais</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('suppliers.create')}}"><i class="feather-plus"></i>Adicionar Outro</a></li>
                    </ul>
                </li>

                {{--Lista de Carros--}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-truck"></i></span>
                        <span class="nxl-mtext">Carros</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('cars.index')}}"><i class="feather-eye"></i>Ver Mais</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('cars.create')}}"><i class="feather-plus"></i>Adicionar Outro</a></li>
                    </ul>
                </li>

                {{--Lista de Motoristas--}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="fas fa-user-tie"></i></span>
                        <span class="nxl-mtext">Motoristas</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('drivers.index')}}"><i class="feather-eye"></i>Ver Mais</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('drivers.create')}}"><i class="feather-plus"></i>Adicionar Outro</a></li>
                    </ul>

                {{--Lista de Clientes--}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-user"></i></span>
                        <span class="nxl-mtext">Clientes</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('clients.index')}}"><i class="feather-eye"></i>Ver Mais</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('clients.create')}}"><i class="feather-plus"></i>Adicionar Outro</a></li>
                    </ul>
                </li>
                
                {{--Lista de Cartões--}}
               {{--  <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="fa-regular fa-credit-card"></i></span>
                        <span class="nxl-mtext">Cartões</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('cards.index')}}"><i class="feather-eye"></i>Ver Mais</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('cards.create')}}"><i class="feather-plus"></i>Adicionar Outro</a></li>
                    </ul>
                </li> --}}

                {{--Lista de Usuários--}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-users"></i></span>
                        <span class="nxl-mtext">Usuários</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('users.index')}}"><i class="feather-eye"></i>Ver Mais</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('users.create')}}"><i class="feather-plus"></i>Adicionar Outro</a></li>
                    </ul>
                </li>

                {{--Lista de Reservas--}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-calendar"></i></span>
                        <span class="nxl-mtext">Reservas</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('reserves.index')}}"><i class="feather-eye"></i>Ver Mais</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('reserves.create')}}"><i class="feather-plus"></i>Adicionar Outro</a></li>
                    </ul>
                </li>

                {{-- Lista de Ofertas --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-tag"></i></span>
                        <span class="nxl-mtext">Ofertas</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('offers.index')}}"><i class="feather-eye"></i>Ver Mais</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('offers.create')}}"><i class="feather-plus"></i>Adicionar Outro</a></li>
                    </ul>
            </ul>

            {{--<div class="card text-center">
                <div class="card-body">
                    <i class="feather-sunrise fs-4 text-dark"></i>
                    <h6 class="mt-4 text-dark fw-bolder">Downloading Center</h6>
                    <p class="fs-11 my-3 text-dark">Duralux is a production ready CRM to get started up and running easily.</p>
                    <a href="javascript:void(0);" class="btn btn-primary text-dark w-100">Download Now</a>
                </div>
            </div>--}}
            
        </div>
    </div>
</nav>