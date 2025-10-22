<div class="row">

    {{-- Título da Oferta --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Título da Oferta</label>
        <input type="text" name="title" class="form-control"
            value="{{ old('title', $offer->title ?? '') }}"
            placeholder="Ex: Desconto especial para novos clientes">
    </div>

    {{-- Subtítulo da Oferta --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Subtítulo</label>
        <input type="text" name="subtitle" class="form-control"
            value="{{ old('subtitle', $offer->subtitle ?? '') }}"
            placeholder="Ex: Economize até 30% em todos os serviços">
    </div>

    

    {{-- Imagem da Oferta --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Imagem da Oferta</label>
        <input type="file" name="image" class="form-control" accept="image/*">
        <small class="text-muted">Formatos suportados: jpg, jpeg, png — máx. 2MB</small>

        @if (isset($offer) && $offer->image)
            <div class="mt-2">
                <img src="{{ asset('uploads/offers/' . $offer->image) }}" alt="Imagem atual"
                    class="img-thumbnail" style="max-width: 200px;">
            </div>
        @endif
    </div>

    {{-- Data da Oferta --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Data da Oferta</label>
        <input type="date" name="offer_date" class="form-control"
            value="{{ old('offer_date', $offer->offer_date ?? date('Y-m-d')) }}">
    </div>

    {{-- Descrição --}}
    <div class="col-12 mb-4">
        <label class="form-label">Descrição da Oferta</label>
        <textarea name="description" class="form-control" rows="4" placeholder="Escreve uma descrição detalhada da oferta...">{{ old('description', $offer->description ?? '') }}</textarea>
    </div>

    {{-- Botão de Enviar --}}
    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Salvar Oferta</button>
                                    </div>

</div>
