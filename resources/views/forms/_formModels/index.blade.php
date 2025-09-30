
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="row">
                                {{-- Nome --}}
                                <div class="col-lg-4 mb-4">
                                    <label class="form-label">Nome do Modelo</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Ex: Starlet, Corolla..." required>
                                    @error('name')
                                        <span class="text-danger fs-12">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- Marca --}}
                                <div class="col-lg-4 mb-4">
                                    <label class="form-label">Marca</label>
                                    <select name="brand_id" class="form-select" required>
                                        <option value="">Selecione uma marca</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>
                                                {{ $brand->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('brand_id')
                                        <span class="text-danger fs-12">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Data de Cadastro --}}
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Data de Cadastro</label>
                                    <input 
                                        type="date" 
                                        name="date" 
                                        class="form-control"
                                        value="{{ old('date', $model->date ?? now()->format('Y-m-d')) }}"
                                        min="{{ now()->format('Y-m-d') }}"
                                    >
                                    @error('date')
                                        <span class="text-danger fs-12">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Descrição --}}
                                <div class="col-12 mb-4">
                                    <label class="form-label">Descrição</label>
                                    <textarea name="description" class="form-control" rows="4" placeholder="Escreva uma descrição...">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="text-danger fs-12">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- Botão de Enviar --}}
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Salvar Modelo</button>
                                </div>
                            </div>