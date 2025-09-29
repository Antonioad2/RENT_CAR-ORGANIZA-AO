@extends('site.reservation.layouts.main')
@section('title', 'AngoCar - Sobre Nós')
@section('content')

    <div class="main-wrapper">
        
        <!-- Seção de Navegação -->
        <div class="breadcrumb-bar">
            <div class="container">
                <div class="row align-items-center text-center">
                    <div class="col-md-12 col-12">
                        <h2 class="breadcrumb-title">Sobre Nós</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Sobre Nós</li>
                            </ol>
                        </nav>                            
                    </div>
                </div>
            </div>
        </div>
        <!-- /Seção de Navegação -->    

        <!-- Sobre -->
        <section class="section about-sec">                
            <div class="container">                
                <div class="row align-items-center">                
                    <div class="col-lg-6" data-aos="fade-down">
                        <div class="about-img">
                            <div class="about-exp">
                                <span>Mais de 12 anos de experiência</span>
                            </div>
                            <div class="abt-img">
                                <img src="{{ url('assets/user/img/about-us.png')}}" class="img-fluid" alt="Sobre Nós">
                            </div>
                        </div>
                    </div>                    
                    <div class="col-lg-6" data-aos="fade-down">
                        <div class="about-content">
                            <h6>SOBRE NOSSA EMPRESA</h6>
                            <h2>Melhor Solução para Serviços de Limpeza</h2>
                            <p>Na AngoCar, oferecemos serviços de aluguel de carros com qualidade e confiança, garantindo a melhor experiência para nossos clientes. Com uma frota diversificada e atendimento personalizado, estamos comprometidos em tornar suas viagens mais práticas e confortáveis, seja para negócios ou lazer.</p>
                            <p>Nossa missão é proporcionar mobilidade com segurança e eficiência, utilizando veículos modernos e processos simplificados para atender às suas necessidades de transporte. Trabalhamos para superar expectativas, com foco na satisfação do cliente e na sustentabilidade.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li>Veículos revisados e higienizados regularmente</li>
                                        <li>Atendimento disponível 24 horas por dia</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>Reservas online rápidas e seguras</li>
                                        <li>Opções flexíveis para diferentes orçamentos</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </section>
        <!-- /Sobre -->

        <!-- Serviços -->
        <section class="section services bg-light-primary">
            <div class="service-right">
                <img src="{{ url('assets/user/img/bg/service-right.svg')}}" class="img-fluid" alt="Imagem de Serviços à Direita">
            </div>        
            <div class="container">    
                <!-- Título da Seção -->
                <div class="section-heading" data-aos="fade-down">
                    <h2>Como Funciona</h2>
                    <p>Nosso processo de aluguel de carros é simples, rápido e projetado para oferecer conveniência em cada etapa.</p>
                </div>
                <!-- /Título da Seção -->
                <div class="services-work">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down">
                            <div class="services-group">
                                <div class="services-icon border-secondary">
                                    <img class="icon-img bg-secondary" src="{{ url('assets/user/img/icons/services-icon-01.svg')}}" alt="Escolher Localizações">
                                </div>
                                <div class="services-content">
                                    <h3>1. Escolher Localizações</h3>
                                    <p>Selecione o local de retirada e devolução do veículo de forma prática através do nosso site ou aplicativo, com opções em diversas cidades e pontos estratégicos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down">
                            <div class="services-group">
                                <div class="services-icon border-warning">
                                    <img class="icon-img bg-warning" src="{{ url('assets/user/img/icons/services-icon-02.svg')}}" alt="Escolher Localizações">
                                </div>
                                <div class="services-content">
                                    <h3>2. Locais de Retirada</h3>
                                    <p>Escolha entre nossos pontos de retirada convenientes, incluindo aeroportos, rodoviárias e centros urbanos, para facilitar o início da sua viagem.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down">
                            <div class="services-group">
                                <div class="services-icon border-dark">
                                    <img class="icon-img bg-dark" src="{{ url('assets/user/img/icons/services-icon-03.svg')}}" alt="Escolher Localizações">
                                </div>
                                <div class="services-content">
                                    <h3>3. Reserve seu Carro</h3>
                                    <p>Finalize sua reserva em poucos cliques, escolhendo o veículo ideal para sua necessidade, com opções de pagamento seguras e suporte em tempo real.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Serviços -->

        <!-- Fatos em Números -->
        <section class="section facts-number">
            <div class="facts-left">
                <img src="{{ url('assets/user/img/bg/facts-left.png')}}" class="img-fluid" alt="Imagem à Esquerda dos Fatos">
            </div>
            <div class="facts-right">
                <img src="{{ url('assets/user/img/bg/facts-right.png')}}" class="img-fluid" alt="Imagem à Direita dos Fatos">
            </div>
            <div class="container">
                <!-- Título da Seção -->
                <div class="section-heading" data-aos="fade-down">
                    <h2 class="title text-white">Fatos em Números</h2>
                    <p class="description text-white">Nossos números refletem a confiança e a satisfação de nossos clientes ao longo dos anos.</p>
                </div>
                <!-- /Título da Seção -->
                <div class="counter-group">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                            <div class="count-group flex-fill">
                                <div class="customer-count d-flex align-items-center">
                                    <div class="count-img">
                                        <img src="{{ url('assets/user/img/icons/bx-heart.svg')}}" alt="Ícone">
                                    </div>
                                    <div class="count-content">
                                        <h4><span class="counterUp">16</span>Mil+</h4>
                                        <p>Clientes Satisfeitos</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                            <div class="count-group flex-fill">
                                <div class="customer-count d-flex align-items-center">
                                    <div class="count-img">
                                        <img src="{{ url('assets/user/img/icons/bx-car.svg')}}" alt="Ícone">
                                    </div>
                                    <div class="count-content">
                                        <h4><span class="counterUp">2547</span>+</h4>
                                        <p>Quantidade de Carros</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                            <div class="count-group flex-fill">
                                <div class="customer-count d-flex align-items-center">
                                    <div class="count-img">
                                        <img src="{{ url('assets/user/img/icons/bx-headphone.svg')}}" alt="Ícone">
                                    </div>
                                    <div class="count-content">
                                        <h4><span class="counterUp">625</span>Mil+</h4>
                                        <p>Soluções de Centros de Carros</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                            <div class="count-group flex-fill">
                                <div class="customer-count d-flex align-items-center">
                                    <div class="count-img">
                                        <img src="{{ url('assets/user/img/icons/bx-history.svg')}}" alt="Ícone">
                                    </div>
                                    <div class="count-content">
                                        <h4><span class="counterUp">200</span>Mil+</h4>
                                        <p>Total de Quilômetros</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Fatos em Números -->

        <!-- Por que nos Escolher -->
        <section class="section why-choose">
            <div class="choose-left">
                <img src="{{ url('assets/user/img/bg/choose-left.png')}}" class="img-fluid" alt="Por que nos Escolher">
            </div>        
            <div class="container">    
                <!-- Título da Seção -->
                <div class="section-heading" data-aos="fade-down">
                    <h2>Por que nos Escolher</h2>
                    <p>Oferecemos serviços diferenciados que garantem comodidade, segurança e qualidade em cada viagem.</p>
                </div>
                <!-- /Título da Seção -->
                <div class="why-choose-group">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                            <div class="card flex-fill">
                                <div class="card-body">
                                    <div class="choose-img choose-black">
                                        <img src="{{ url('assets/user/img/icons/bx-selection.svg')}}" alt="Ícone">
                                    </div>
                                    <div class="choose-content">
                                        <h4>Reserva Fácil e Rápida</h4>
                                        <p>Nosso sistema de reservas online é intuitivo e permite que você alugue um carro em minutos, com total segurança e transparência.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                            <div class="card flex-fill">
                                <div class="card-body">
                                    <div class="choose-img choose-secondary">
                                        <img src="{{ url('assets/user/img/icons/bx-crown.svg')}}" alt="Ícone">
                                    </div>
                                    <div class="choose-content">
                                        <h4>Muitos Locais de Retirada</h4>
                                        <p>Estamos presentes em diversas cidades, com pontos de retirada estratégicos para facilitar o acesso ao seu veículo onde quer que esteja.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                            <div class="card flex-fill">
                                <div class="card-body">
                                    <div class="choose-img choose-primary">
                                        <img src="{{ url('assets/user/img/icons/bx-user-check.svg')}}" alt="Ícone">
                                    </div>
                                    <div class="choose-content">
                                        <h4>Satisfação do Cliente</h4>
                                        <p>Priorizamos a sua experiência, com atendimento dedicado e veículos de alta qualidade para garantir sua satisfação em cada aluguel.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Por que nos Escolher -->

        <!-- FAQ -->
        <section class="section faq-section bg-light-primary">
            <div class="container">                
                <!-- Título da Seção -->
                <div class="section-heading" data-aos="fade-down">
                    <h2>Perguntas Frequentes</h2>
                    <p>Esclareça suas dúvidas sobre o aluguel de carros e nossos serviços com respostas claras e diretas.</p>
                </div>
                <!-- /Título da Seção -->
                <div class="faq-info">
                    <div class="faq-card bg-white" data-aos="fade-down">
                        <h4 class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqOne" aria-expanded="false">O que são promoções de aluguel de carros?</a>
                        </h4>
                        <div id="faqOne" class="card-collapse collapse">
                            <p>Nossas promoções oferecem descontos especiais em aluguéis de carros, incluindo tarifas reduzidas para reservas antecipadas, pacotes de fim de semana e benefícios exclusivos para membros do nosso programa de fidelidade.</p>
                        </div>
                    </div>    
                    <div class="faq-card bg-white" data-aos="fade-down">
                        <h4 class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqTwo" aria-expanded="false">Em quais áreas vocês operam?</a>
                        </h4>
                        <div id="faqTwo" class="card-collapse collapse">
                            <p>Operamos em diversas cidades do país, com pontos de retirada em aeroportos, rodoviárias e centros urbanos. Consulte nosso site para ver a lista completa de locais disponíveis.</p>
                        </div>
                    </div>
                    <div class="faq-card bg-white" data-aos="fade-down">
                        <h4 class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqThree" aria-expanded="false">Quais documentos são necessários para alugar um carro?</a>
                        </h4>
                        <div id="faqThree" class="card-collapse collapse">
                            <p>Para alugar um carro, você precisa apresentar uma carteira de motorista válida, um documento de identificação (RG ou passaporte) e um cartão de crédito para a caução. Verifique os requisitos específicos no momento da reserva.</p>
                        </div>
                    </div>    
                    <div class="faq-card bg-white" data-aos="fade-down">
                        <h4 class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqFour" aria-expanded="false">Posso alugar um carro sem cartão de crédito?</a>
                        </h4>
                        <div id="faqFour" class="card-collapse collapse">
                            <p>Em algumas localidades, aceitamos outras formas de pagamento ou caução, como débito ou dinheiro, mas isso depende da política do local de retirada. Entre em contato conosco para confirmar as opções disponíveis.</p>
                        </div>
                    </div>    
                    <div class="faq-card bg-white" data-aos="fade-down">
                        <h4 class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqFive" aria-expanded="false">Como funciona a política de cancelamento?</a>
                        </h4>
                        <div id="faqFive" class="card-collapse collapse">
                            <p>Oferecemos cancelamento gratuito até 48 horas antes da retirada do veículo. Após esse período, pode haver uma taxa de cancelamento, dependendo dos termos da reserva. Consulte os detalhes no momento da reserva.</p>
                        </div>
                    </div>    
                    <div class="faq-card bg-white" data-aos="fade-down">
                        <h4 class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqSix" aria-expanded="false">Vocês oferecem seguro para os veículos alugados?</a>
                        </h4>
                        <div id="faqSix" class="card-collapse collapse">
                            <p>Sim, todos os nossos veículos incluem seguro básico. Você também pode optar por coberturas adicionais, como proteção contra danos ou roubo, para maior tranquilidade durante sua viagem.</p>
                        </div>
                    </div>    
                    <div class="faq-card bg-white" data-aos="fade-down">
                        <h4 class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqSeven" aria-expanded="false">É possível alugar um carro para viagens internacionais?</a>
                        </h4>
                        <div id="faqSeven" class="card-collapse collapse">
                            <p>Sim, oferecemos opções para aluguel de carros em viagens internacionais, sujeito a condições específicas, como autorizações e taxas adicionais. Entre em contato com nossa equipe para mais informações.</p>
                        </div>
                    </div>                                                    
                </div>        
            </div>    
        </section>    
        <!-- /FAQ -->

    </div>
    
    <!-- Início do scrollToTop -->
    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
        </svg>
    </div>
    <!-- Fim do scrollToTop -->

@endsection