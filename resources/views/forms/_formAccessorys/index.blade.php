<div class="row">

    {{-- Nome do Acessório --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Nome do Acessório</label>
        <input type="text" name="name" class="form-control"
            value="{{ old('name', $accessory->name ?? '') }}"
            placeholder="Ex: Farol LED, Tapete de Borracha...">
    </div>

    {{-- Preço do Acessório --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Preço (Kz)</label>
        <input type="number" step="0.01" name="price" class="form-control"
            value="{{ old('price', $accessory->price ?? '') }}"
            placeholder="Ex: 2500.00">
    </div>

    {{-- Numero do vendor --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Número de Contato</label>
        <input type="text" name="number" class="form-control"
            value="{{ old('number', $accessory->number ?? '') }}"
            placeholder="Ex: +244 923 456 789">
    </div>

    {{-- WhatsApp do vendor --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">WhatsApp</label>
        <input type="text" name="whatsapp" class="form-control"
            value="{{ old('whatsapp', $accessory->whatsapp ?? '') }}"
            placeholder="Ex: +244 923 456 789">
    </div>

    {{-- Imagem do Acessório --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Imagem do Acessório</label>
        <input type="file" name="image" class="form-control" accept="image/*">
        <small class="text-muted">Formatos suportados: jpg, jpeg, png — máx. 2MB</small>

        @if (isset($accessory) && $accessory->image)
            <div class="mt-2">
                <img src="{{ asset('uploads/accessories/' . $accessory->image) }}" alt="Imagem atual"
                    class="img-thumbnail" style="max-width: 200px;">
            </div>
        @endif
    </div>

    {{-- Descrição --}}
    <div class="col-12 mb-4">
        <label class="form-label">Descrição</label>
        <textarea name="description" class="form-control" rows="4"
            placeholder="Descreve o acessório, suas características e vantagens...">{{ old('description', $accessory->description ?? '') }}</textarea>
    </div>

    {{-- Botão de Enviar --}}
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Salvar Acessório</button>
    </div>

</div>
