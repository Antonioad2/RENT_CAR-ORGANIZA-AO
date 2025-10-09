@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row">
    {{-- Nome do titular --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Nome do Titular</label>
        <input type="text" name="card_name" class="form-control" value="{{ old('card_name') }}"
            placeholder="Ex: João Pedro...">
    </div>

    {{-- Número do Cartão --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Número do Cartão</label>
        <input type="text" name="card_number" class="form-control" value="{{ old('card_number') }}"
            placeholder="Ex: 1234567890123456">
    </div>

    {{-- Banco --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Banco</label>
        <input type="text" name="bank" class="form-control" value="{{ old('bank', 'BAI') }}"
            placeholder="Ex: BAI, BFA...">
    </div>

    {{-- Cliente associado --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Cliente</label>
        <select name="client_id" class="form-control">
            <option value="">-- Selecione o Cliente --</option>
            @foreach ($clients as $client)
                <option value="{{ $client->id }}" {{ old('client_id') == $client->id ? 'selected' : '' }}>
                    {{ $client->name }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- Saldo Inicial --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Saldo Inicial (KZ)</label>
        <input type="number" name="balance" class="form-control" value="{{ old('balance', 200000) }}" min="0"
            step="0.01">
    </div>

    {{-- Botão de Enviar --}}
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Salvar Cartão</button>
    </div>
</div>
