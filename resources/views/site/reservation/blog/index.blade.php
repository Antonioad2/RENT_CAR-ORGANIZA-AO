@extends('site.reservation.layouts.main')
@section('title', 'AngoCar - Ofertas')
@section('content')

<!-- Modal de Detalhes da Viatura -->
<div class="modal fade" id="offerModal" tabindex="-1" aria-labelledby="offerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="offerModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5">
                        <img id="modalOfferImage" class="img-fluid rounded" style="object-fit: cover; height: 100%; width: 100%;" alt="Viatura">
                    </div>
                    <div class="col-md-7">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <h4 id="modalOfferName" class="mb-0"></h4>
                            <span id="modalOfferPrice" class="text-primary fw-bold fs-4"></span>
                        </div>
                        <p id="modalOfferDescription" style="color: #FFA633; white-space: pre-line;"></p>

                        <hr>

                        <div class="mt-4">
                            <h6>Contato & Redes Sociais</h6>
                            <div class="hstack gap-3">
                                <a href="https://wa.me/2449XXXXXXXX" target="_blank" class="text-success">
                                    <i class="fab fa-whatsapp fa-lg"></i> WhatsApp
                                </a>
                                <a href="tel:+244924175734" class="text-dark">
                                    <i class="fas fa-phone fa-lg"></i> +244 924 175 734
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <a href="#" id="whatsappOfferBtn" target="_blank" class="btn btn-success">
                    <i class="fab fa-whatsapp"></i> Falar no WhatsApp
                </a>
            </div>
        </div>
    </div>
</div>

<div class="main-wrapper">
    <!-- Seção de Navegação -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">Venda</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">De <br> Viatura</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Seção de Navegação -->

    <!-- Lista de Ofertas -->
    <div class="blog-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-9">

                    @forelse ($offers->chunk(3) as $chunk)
                        <div class="row g-4 mb-4">
                            @foreach ($chunk as $offer)
                                <div class="col-md-4">
                                    <div class="blog grid-blog h-100 d-flex flex-column shadow-sm">
                                        <div class="blog-image-list overflow-hidden" style="height: 220px;">
                                            <a href="#">
                                                <img 
                                                    class="img-fluid w-100 h-100" 
                                                    style="object-fit: cover; transition: transform 0.4s ease;" 
                                                    src="{{ $offer->image ? url('uploads/offers/' . $offer->image) : asset('images/default-offer.jpg') }}" 
                                                    alt="{{ $offer->title }}"
                                                    onerror="this.src='{{ asset('images/default-offer.jpg') }}'"
                                                >
                                            </a>
                                        </div>
                                        <div class="blog-content p-3 flex-grow-1 d-flex flex-column">
                                            <div class="blog-list-date mb-2">
                                                <ul class="meta-item-list list-inline mb-0">
                                                    <li class="date-icon list-inline-item">
                                                        <i class="fa-solid fa-calendar-days"></i> 
                                                        <span>{{ $offer->updated_at->format('d M, Y') }}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="blog-title h5 mb-2">
                                                <a href="#" class="text-decoration-none text-dark">{{ $offer->title }}</a>
                                            </h3>
                                            <div class="hstack gap-2 mb-3">
                                                <span class="text-primary fw-bold fs-5">{{ $offer->subtitle }} Kz</span>
                                            </div>
                                            

                                            <button 
                                                type="button" 
                                                class="btn btn-primary btn-sm mt-auto w-100" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#offerModal"
                                                data-title="{{ $offer->title }}"
                                                data-price="{{ $offer->subtitle }} Kz"
                                                data-image="{{ $offer->image ? asset('uploads/offers/' . $offer->image) : asset('images/default-offer.jpg') }}"
                                                data-description="{{ $offer->description ?? 'Sem descrição disponível.' }}"
                                                onclick="openOfferModal(this)">
                                                Entra em Contacto <i class="feather-arrow-right ms-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @empty
                        <div class="text-center py-5">
                            <p class="text-muted">Nenhuma oferta disponível no momento.</p>
                        </div>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
    <!-- /Lista de Ofertas -->

    <!-- ScrollToTop -->
    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
        </svg>
    </div>
</div>

<script>
function openOfferModal(button) {
    const title = button.getAttribute('data-title');
    const price = button.getAttribute('data-price');
    const image = button.getAttribute('data-image');
    const description = button.getAttribute('data-description');

    // Preenche os campos do modal
    document.getElementById('offerModalLabel').textContent = title;
    document.getElementById('modalOfferName').textContent = title;
    document.getElementById('modalOfferPrice').textContent = price;
    document.getElementById('modalOfferImage').src = image;
    document.getElementById('modalOfferDescription').textContent = description;

    // Atualiza link do WhatsApp
    const whatsappBtn = document.getElementById('whatsappOfferBtn');
    const message = encodeURIComponent(`Olá! Estou interessado na viatura:\n\n*${title}*\nPreço: ${price}\n\n${description.substring(0, 200)}${description.length > 200 ? '...' : ''}`);
    whatsappBtn.href = `https://wa.me/2449XXXXXXXX?text=${message}`;
}
</script>

@endsection