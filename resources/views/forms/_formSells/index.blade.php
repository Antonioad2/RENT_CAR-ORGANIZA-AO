<div class="row">

    {{-- Nome do Produto / Viatura --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Nome da Viatura</label>
        <input type="text" name="name" class="form-control"
            value="{{ old('name', $sell->name ?? '') }}"
            placeholder="Ex: Toyota Corolla 2020">
    </div>

    {{-- Preço --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Preço (Kz)</label>
        <input type="number" step="0.01" name="price" class="form-control"
            value="{{ old('price', $sell->price ?? '') }}"
            placeholder="Ex: 7500000">
    </div>

    {{-- Número de telefone --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Número de Telefone</label>
        <input type="text" name="number" class="form-control"
            value="{{ old('number', $sell->number ?? '') }}"
            placeholder="Ex: 923456789">
    </div>

    {{-- Número de WhatsApp --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Número de WhatsApp</label>
        <input type="text" name="whatsapp" class="form-control"
            value="{{ old('whatsapp', $sell->whatsapp ?? '') }}"
            placeholder="Ex: 923456789">
        <small class="text-muted">Se for o mesmo número de telefone, pode repetir.</small>
    </div>

    {{-- Imagem da Viatura --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Imagem da Viatura</label>
        <input type="file" name="image" class="form-control" accept="image/*">
        <small class="text-muted">Formatos suportados: jpg, jpeg, png — máx. 2MB</small>

        @if (isset($sell) && $sell->image)
            <div class="mt-2">
                <img src="{{ asset('uploads/sells/' . $sell->image) }}" alt="Imagem atual"
                    class="img-thumbnail" style="max-width: 200px;">
            </div>
        @endif
    </div>

    {{-- Descrição da Venda --}}
    <div class="col-12 mb-4">
        <label class="form-label">Descrição</label>
        <textarea name="description" class="form-control" rows="4"
            placeholder="Descreva a viatura, quilometragem, estado, extras, etc.">{{ old('description', $sell->description ?? '') }}</textarea>
    </div>

    {{-- Botão de Enviar --}}
    <div class="col-12 text-end">
        <button type="submit" class="btn btn-primary">
            {{ isset($sell) ? 'Atualizar Venda' : 'Salvar Venda' }}
        </button>
    </div>

</div>
