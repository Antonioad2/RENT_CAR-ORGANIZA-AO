<!-- Header -->
<header class="header">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
               <!--  <a href="{{ route('home') }}" class="navbar-brand logo">
                    <img src="{{ url('assets/user/img/logo.svg')}}" class="img-fluid" alt="Logo">
                </a>
                <a href="{{ route('home') }}" class="navbar-brand logo-small">
                    <img src="{{ url('assets/user/img/logo-small.png')}}" class="img-fluid" alt="Logo">
                </a> -->
                <a href="{{ route('home') }}" class="navbar-brand logo">
                <img src="{{ url('assets/user/img/ango-cars-2.png') }}" alt="" style="width: 150px; height: 70px; margin-top: -20px;">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="{{ route('home') }}" class="menu-logo">
                        <img src="{{ url('assets/user/img/ango-cars-2.png')}}" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
                </div>
                <ul class="main-nav">
                    <li class="has-submenu megamenu active">
                        <a href="{{ route('home') }}">Início {{-- <i class="fas fa-chevron-down"></i> --}}</a>
                        {{-- <ul class="submenu mega-submenu">
                            <li>
                                <div class="megamenu-wrapper">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="single-demo active">
                                                <div class="demo-img">
                                                    <a href="index.html">
                                                        <img src="{{ url('assets/user/img/menu/home-01.svg') }}"
                                                            class="img-fluid " alt="img">
                                                    </a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="index.html">Car Rental<span class="new">New</span> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="single-demo">
                                                <div class="demo-img">
                                                    <a href="index-2.html">
                                                        <img src="{{ url('assets/user/img/menu/home-02.svg') }}"
                                                            class="img-fluid " alt="img">
                                                    </a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="index-2.html">Car Rental 1<span class="hot">Hot</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="single-demo">
                                                <div class="demo-img">
                                                    <a href="index-3.html">
                                                        <img src="{{ url('assets/user/img/menu/home-03.svg') }}"
                                                            class="img-fluid " alt="img">
                                                    </a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="index-3.html">Bike Rental<span class="new">New</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="single-demo">
                                                <div class="demo-img">
                                                    <a href="index-4.html">
                                                        <img src="{{ url('assets/user/img/menu/home-04.svg') }}"
                                                            class="img-fluid " alt="img">
                                                    </a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="index-4.html">Yacht Rental<span class="new">New</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul> --}}
                    </li>
                    <li class="has-submenu">
                        <a href="{{ route('site.car-list') }}">Carros<!--  <i class="fas fa-chevron-down"></i> --></a>
                        <!-- <ul class="submenu">
                            {{-- <li><a href="listing-grid.html">Listing Grid</a></li> --}}
                            <li><a href="{{ route('site.car-list') }}">Listagem de Carro</a></li>
                            {{-- <li><a href="listing-map.html">Listing With Map</a></li>
                            <li><a href="listing-details.html">Detalhes do Carro</a></li> --}}
                        </ul> -->
                    </li>
                    {{-- <li class="has-submenu">
                        <a href="#">Serviços <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="contact-us.html">Contact</a></li>
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Authentication</a>
                                <ul class="submenu">
                                    <li><a href="{{route('site.client-create')}}">Cadastra-se</a></li>
                                    <li><a href="{{route('site.client-login')}}">Conecte-se</a></li>
                                    <li><a href="forgot-password.html">Forgot Password</a></li>
                                    <li><a href="reset-password.html">Reset Password</a></li>
                                </ul>
                            </li>
                            
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Booking</a>
                                <ul class="submenu">
                                    <li><a href="booking-checkout.html">Booking Checkout</a></li>
                                    <li><a href="booking.html">Booking</a></li>
                                    <li><a href="invoice-details.html">Invoice Details</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Error Page</a>
                                <ul class="submenu">
                                    <li><a href="error-404.html">404 Error</a></li>
                                    <li><a href="error-500.html">500 Error</a></li>
                                </ul>
                            </li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="our-team.html">Our Team</a></li>
                            <li><a href="testimonial.html">Testimonials</a></li>
                            <li><a href="terms-condition.html">Terms & Conditions</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="maintenance.html">Maintenance</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li> --}}

                    <li class="has-submenu">
                        <a href="{{route('site.blog')}}">Ofertas de Viaturas</i></a>
                        <ul class="submenu">
                                    <li><a href="{{route('site.blog')}}">Venda De Viatura</a></li>
                                    <li><a href="{{route('site.blog-accessory')}}">Acessorios de Viatura</a></li>
                                </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="{{route('site.about-us')}}">Sobre Nós</a>
                    </li>

                    {{-- BLOGUE --}}

                    {{-- <li class="has-submenu">
								<a href="#">Blog <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
								    <li><a href="blog-list.html">Blog List</a></li>
									<li><a href="blog-grid.html">Blog Grid</a></li>
									<li><a href="blog-details.html">Blog Details</a></li>																		
								</ul>
							</li> --}}
                            
                    {{-- Dashboard --}}

                    {{-- <li class="has-submenu">
								<a href="#">Dashboard <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="has-submenu">
										<a href="javascript:void(0);">User Dashboard</a>
										<ul class="submenu">
											<li><a href="user-dashboard.html">Dashboard</a></li>
											<li><a href="user-bookings.html">My Bookings</a></li>
											<li><a href="user-reviews.html">Reviews</a></li>
											<li><a href="user-wishlist.html">Wishlist</a></li>
											<li><a href="user-messages.html">Messages</a></li>
											<li><a href="user-wallet.html">My Wallet</a></li>
											<li><a href="user-payment.html">Payments</a></li>
											<li><a href="user-settings.html">Settings</a></li>			
										</ul>
									</li>		
									<li class="has-submenu">
										<a href="javascript:void(0);">Admin Dashboard</a>
										<ul class="submenu">
											<li><a href="admin/index.html">Dashboard</a></li>
											<li><a href="admin/reservations.html">Bookings</a></li>
											<li><a href="admin/customers.html">Manage</a></li>
											<li><a href="admin/cars.html">Rentals</a></li>
											<li><a href="admin/invoices.html">Finance & Accounts</a></li>
											<li><a href="admin/coupons.html">Others</a></li>
											<li><a href="admin/pages.html">CMS</a></li>			
											<li><a href="admin/contact-messages.html">Support</a></li>			
											<li><a href="admin/users.html">User Management</a></li>			
											<li><a href="admin/earnings-report.html">Reports</a></li>			
											<li><a href="admin/profile-setting.html">Settings & Configuration</a></li>		
										</ul>
									</li>				
								</ul>
							</li> --}}
                    <li class="login-link">
                        <a href="register.html">Sign Up</a>
                    </li>
                    <li class="login-link">
                        <a href="login.html">Sign In</a>
                    </li>
                </ul>
            </div>
            <ul class="nav header-navbar-rht">
                <li class="nav-item">
                    <a class="nav-link header-login" href="{{route('site.client-create')}}"><span><i
                                class="fa-regular fa-user"></i></span>Cadastra-se</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link header-reg" href="{{route('site.client-login')}}"><span><i
                                class="fa-solid fa-lock"></i></span>Conecte-se</a>
                </li>

                 <li class="nav-item dropdown has-arrow logged-item">
							<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
								<span class="user-img">
									<img class="rounded-circle" src="{{ url('assets/user/img/profiles/avatar-14.jpg')}}" alt="Profile">
								</span>
								<span class="user-text">{{ $client->name ?? 'Visitante' }}</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								
								<a class="dropdown-item" href="user-settings.html">
									<i class="feather-settings"></i> Settings
								</a>
								<a class="dropdown-item" href="{{route('client_logout')}}">
									<i class="feather-power"></i> Logout
								</a>
							</div>
						</li>
            </ul>
           
        </nav>
    </div>
</header>
<!-- /Header -->
