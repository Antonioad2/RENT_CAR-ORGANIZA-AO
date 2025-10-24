@extends('site.reservation.layouts.main')
@section('title', 'AngoCar - Ofertas')
@section('content')

	<div class="main-wrapper">
		
		<!-- Seção de Navegação -->
		<div class="breadcrumb-bar">
			<div class="container">
				<div class="row align-items-center text-center">
		    		<div class="col-md-12 col-12">
			    	    <h2 class="breadcrumb-title">Ofertas</h2>
				    	<nav aria-label="breadcrumb" class="page-breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item active" aria-current="page">Ofertas</li>
							</ol>
						</nav>							
					</div>
				</div>
			</div>
		</div>
		<!-- /Seção de Navegação -->	

		<!-- Lista de Blogs -->
		<div class="blog-section">
		    <div class="container">
		        <div class="row">
			        <div class="col-lg-8">
			            <div class="row">
			               <div class="col-lg-12 col-md-12 d-lg-flex">
			                	@forelse ($offers  as $offer)
									<div class="blog grid-blog">
									<div class="blog-image-list" >
										<a href="blog-details.html"><img class="img-fluid" src="{{ url('uploads/offers/' . $offer->image)}}" alt="Imagem do Post"></a>
									</div>
									<div class="blog-content">
		         						<div class="blog-list-date">
											<ul class="meta-item-list">
												<li>
													<div class="post-author">
														<div class="post-author-img">
															<img src="{{ url('assets/user/img/profiles/avatar-13.jpg')}}" alt="autor">
														</div>
														<a href="javascript:void(0)"> <span> Alphonsa Daniel </span></a>
													</div>
												</li>
												<li class="date-icon ms-3"><i class="fa-solid fa-calendar-days"></i> <span>{{ $offer->updated_at->format('d,M,Y') }}</span></li>
											</ul>										 
											<p class="blog-category mb-0">
											</p>
										</div>
										<h3 class="blog-title"><a href="blog-details.html">{{ $offer->title }}</a></h3>
										<p class="blog-description">{{ $offer->description ?? 'Sem nenhuma descrição' }}</p>
										<a href="blog-details.html" class="viewlink btn btn-primary justify-content-center">Leia Mais <i class="feather-arrow-right ms-2"></i></a>
									</div>
							  	</div>
								@empty
									<p>Sem Notícias</p>
								@endforelse

							</div>
							{{-- <div class="col-lg-12 col-md-12 d-lg-flex">
			                	<div class="blog grid-blog">
									<div class="blog-image-list">
										<a href="blog-details.html"><img class="img-fluid" src="{{ url('assets/user/img/blog/blog-list-02.jpg')}}" alt="Imagem do Post"></a>
									</div>
									<div class="blog-content">
		         						<div class="blog-list-date">
											<ul class="meta-item-list">
												<li>
													<div class="post-author">
														<div class="post-author-img">
															<img src="{{ url('assets/user/img/profiles/avatar-03.jpg')}}" alt="autor">
														</div>
														<a href="javascript:void(0)"> <span> Helan </span></a>
													</div>
												</li>
												<li class="date-icon ms-3"><i class="fa-solid fa-calendar-days"></i> <span>15 de Fev, 2023</span></li>
											</ul>										 
											<p class="blog-category mb-0">
											</p>
										</div>
										<h3 class="blog-title"><a href="blog-details.html">Tesla Model S: Garagem Secreta de Colecionador de Carros</a></h3>
										<p class="blog-description">Todos têm o direito à liberdade de pensamento, consciência e religião; esse direito inclui a liberdade de mudar de religião ou crença, e a liberdade, seja sozinho...</p>
										<a href="blog-details.html" class="viewlink btn btn-primary justify-content-center">Leia Mais <i class="feather-arrow-right ms-2"></i></a>
									</div>
							  	</div>
							</div>
							<div class="col-lg-12 col-md-12 d-lg-flex">
			                	<div class="blog grid-blog">
									<div class="blog-image-list">
										<a href="blog-details.html"><img class="img-fluid" src="{{ url('assets/user/img/blog/blog-list-03.jpg')}}" alt="Imagem do Post"></a>
									</div>
									<div class="blog-content">
		         						<div class="blog-list-date">
											<ul class="meta-item-list">
												<li>
													<div class="post-author">
														<div class="post-author-img">
															<img src="{{ url('assets/user/img/profiles/avatar-05.jpg')}}" alt="autor">
														</div>
														<a href="javascript:void(0)"> <span> Rabien Ustoc </span></a>
													</div>
												</li>
												<li class="date-icon ms-3"><i class="fa-solid fa-calendar-days"></i> <span>17 de Fev, 2023</span></li>
											</ul>										 
											<p class="blog-category mb-0">
											</p>
										</div>
										<h3 class="blog-title"><a href="blog-details.html">Tesla Model S: Garagem Secreta de Colecionador de Carros</a></h3>
										<p class="blog-description">Todos têm o direito à liberdade de pensamento, consciência e religião; esse direito inclui a liberdade de mudar de religião ou crença, e a liberdade, seja sozinho...</p>
										<a href="blog-details.html" class="viewlink btn btn-primary justify-content-center">Leia Mais <i class="feather-arrow-right ms-2"></i></a>
									</div>
							  	</div>
							</div>
							<div class="col-lg-12 col-md-12 d-lg-flex">
			                	<div class="blog grid-blog">
									<div class="blog-image-list">
										<a href="blog-details.html"><img class="img-fluid" src="{{ url('assets/user/img/blog/blog-list-04.jpg')}}" alt="Imagem do Post"></a>
									</div>
									<div class="blog-content">
		         						<div class="blog-list-date">
											<ul class="meta-item-list">
												<li>
													<div class="post-author">
														<div class="post-author-img">
															<img src="{{ url('assets/user/img/profiles/avatar-06.jpg')}}" alt="autor">
														</div>
														<a href="javascript:void(0)"> <span> Valerie L. Ellis </span></a>
													</div>
												</li>
												<li class="date-icon ms-3"><i class="fa-solid fa-calendar-days"></i> <span>10 de Mar, 2023</span></li>
											</ul>										 
											<p class="blog-category mb-0">
											</p>
										</div>
										<h3 class="blog-title"><a href="blog-details.html">Tesla Model S: Garagem Secreta de Colecionador de Carros</a></h3>
										<p class="blog-description">Todos têm o direito à liberdade de pensamento, consciência e religião; esse direito inclui a liberdade de mudar de religião ou crença, e a liberdade, seja sozinho...</p>
										<a href="blog-details.html" class="viewlink btn btn-primary justify-content-center">Leia Mais <i class="feather-arrow-right ms-2"></i></a>
									</div>
							  	</div>
							</div> --}}
						</div>
						                   					   
				    </div>
				    <div class="col-lg-4 theiaStickySidebar">
				        <div class="rightsidebar">
						   
							<div class="card mb-0">
							    
								<div class="article">
									<div class="article-blog">
										<a href="blog-details.html">
											<img class="img-fluid" src="{{ url('assets/user/img/blog/blog-3.jpg')}}" alt="Blog">
										</a>
									</div>
									<div class="article-content">
										<h5><a href="blog-details.html">Ótimas Dicas de Negócios em 2023</a></h5>
										<div class="article-date">
											<i class="fa-solid fa-calendar-days"></i>
											<span>6 de Jan, 2023</span>
										</div>
									</div>
								</div>	
								<div class="article">
									<div class="article-blog">
										<a href="blog-details.html">
											<img class="img-fluid" src="{{ url('assets/user/img/blog/blog-4.jpg')}}" alt="Blog">
										</a>
									</div>
									<div class="article-content">
										<h5><a href="blog-details.html">Notícias Empolgantes Sobre Carros</a></h5>
										<div class="article-date">
											<i class="fa-solid fa-calendar-days"></i>
											<span>5 de Fev, 2023</span>
										</div>
									</div>
								</div>	
								<div class="article">
									<div class="article-blog">
										<a href="blog-details.html">
											<img class="img-fluid" src="{{ url('assets/user/img/blog/blog-5.jpg')}}" alt="Blog">
										</a>
									</div>
									<div class="article-content">
										<h5><a href="blog-details.html">8 Truques Incríveis Sobre Negócios</a></h5>
										<div class="article-date">
											<i class="fa-solid fa-calendar-days"></i>
											<span>10 de Mar, 2023</span>
										</div>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>				   
		</div>	
		<!-- /Grade de Blogs -->		
			
		<!-- Início do ScrollToTop -->
		<div class="progress-wrap active-progress">
			<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
				<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
			</svg>
		</div>
		<!-- Fim do ScrollToTop -->
	
	</div>

@endsection