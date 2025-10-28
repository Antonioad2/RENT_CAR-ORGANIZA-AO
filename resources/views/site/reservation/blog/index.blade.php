@extends('site.reservation.layouts.main')
@section('title', 'AngoCar - Vendas')
@section('content')

<!-- Modal de Detalhes da Venda -->
<div class="modal fade" id="sellModal" tabindex="-1" aria-labelledby="sellModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sellModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5">
                        <img id="modalImage" class="img-fluid rounded" style="object-fit: cover; height: 100%; width: 100%;" alt="Venda">
                    </div>
                    <div class="col-md-7">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <h4 id="modalName" class="mb-0"></h4>
                            <span id="modalPrice" class="text-primary fw-bold fs-4"></span>
                        </div>
                        <strong><p id="modalDescription" style="color: #020202;"></p></strong>
                        <hr>

                        <!-- Contato -->
                        <div class="mt-4">
                            <h6>Contato</h6>
                            <div class="hstack gap-3">
                                <a id="modalWhatsapp" href="#" target="_blank" class="text-success">
                                    <i class="fab fa-whatsapp fa-lg"></i> <span id="modalWhatsappText">WhatsApp</span>
                                </a>
                                <a id="modalPhone" href="#" class="text-dark">
                                    <i class="fa fa-phone fa-lg"></i> <span id="modalNumber"></span>
                                </a>
                            </div>
                        </div>
                        <!-- /Contato -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <a href="#" id="whatsappBtn" target="_blank" class="btn btn-success">
                    <i class="fab fa-whatsapp"></i> Falar no WhatsApp
                </a>
            </div>
        </div>
    </div>
</div>

<div class="breadcrumb-bar">
            <div class="container">
                <div class="row align-items-center text-center">
                    <div class="col-md-12 col-12">
                        <h2 class="breadcrumb-title">Venda</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">De<br>Viatura</li>
                            </ol>
                        </nav>                            
                    </div>
                </div>
            </div>
        </div>
<!-- Lista de Vendas -->
<div class="main-wrapper">
    <div class="blog-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-9">

                    @forelse ($sells->chunk(3) as $chunk)
                        <div class="row g-4 mb-4">
                            @foreach ($chunk as $sell)
                                <div class="col-md-4">
                                    <div class="blog grid-blog h-100 d-flex flex-column shadow-sm">
                                        <div class="blog-image-list overflow-hidden" style="height: 220px;">
                                            <img 
                                                class="img-fluid w-100 h-100" 
                                                style="object-fit: cover; transition: transform 0.4s ease;" 
                                                src="{{ $sell->image ? url('uploads/sells/' . $sell->image) : asset('images/default-sell.jpg') }}" 
                                                alt="{{ $sell->name }}"
                                                onerror="this.src='{{ asset('images/default-sell.jpg') }}'"
                                            >
                                        </div>
                                        <div class="blog-content p-3 flex-grow-1 d-flex flex-column">
                                            <h3 class="blog-title h5 mb-2">
                                                <a href="#" class="text-decoration-none text-dark">{{ $sell->name }}</a>
                                            </h3>
                                            <span class="text-primary fw-bold fs-5">{{ number_format($sell->price, 2) }} Kz</span>

                                            <button 
                                                type="button" 
                                                class="btn btn-primary btn-sm mt-auto w-100" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#sellModal"
                                                data-name="{{ $sell->name }}"
                                                data-price="{{ number_format($sell->price, 2) }} Kz"
                                                data-image="{{ $sell->image ? asset('uploads/sells/' . $sell->image) : asset('images/default-sell.jpg') }}"
                                                data-description="{{ nl2br(e($sell->description ?? 'Sem descrição disponível.')) }}"
                                                data-number="{{ $sell->number ?? '' }}"
                                                data-whatsapp="{{ preg_replace('/\D/', '', $sell->whatsapp ?? '') }}"
                                                onclick="openSellModal(this)">
                                                Entrar em contacto <i class="feather-arrow-right ms-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @empty
                        <div class="text-center py-5">
                            <p class="text-muted">Nenhum produto disponível no momento.</p>
                        </div>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script -->
<script>
function openSellModal(button) {
    const name = button.getAttribute('data-name');
    const price = button.getAttribute('data-price');
    const image = button.getAttribute('data-image');
    const description = button.getAttribute('data-description');
    const number = button.getAttribute('data-number') || '+244 920 000 000';
    const whatsapp = button.getAttribute('data-whatsapp') || '';

    document.getElementById('sellModalLabel').textContent = name;
    document.getElementById('modalName').textContent = name;
    document.getElementById('modalPrice').textContent = price;
    document.getElementById('modalImage').src = image;
    document.getElementById('modalDescription').innerHTML = description || 'Sem descrição disponível.';

    document.getElementById('modalNumber').textContent = number;
    document.getElementById('modalPhone').href = `tel:${number.replace(/\s+/g, '')}`;

    const message = encodeURIComponent(`Olá! Gostaria de saber mais sobre o produto:\n\n*${name}*\nPreço: ${price}`);
    const whatsappLink = `https://wa.me/244${whatsapp}?text=${message}`;

    document.getElementById('modalWhatsapp').href = whatsappLink;
    document.getElementById('whatsappBtn').href = whatsappLink;
}
</script>

@endsection
