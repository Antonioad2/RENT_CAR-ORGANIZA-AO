
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
                                    {{-- Nome --}}
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Nome do Combustível</label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ old('name') }}" placeholder="Ex: Gasóleo, Gasolina...">
                                    </div>

                                    {{-- Data de Cadastro --}}
                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label">Data de Cadastro</label>
                                        <input
                                            type="date"
                                            name="date"
                                            class="form-control"
                                            value="{{ old('date', $fuel->date ?? now()->format('Y-m-d')) }}"
                                            min="{{ now()->format('Y-m-d') }}"
                                        >
                                    </div>

                                    {{-- Descrição --}}
                                    <div class="col-12 mb-4">
                                        <label class="form-label">Descrição</label>
                                        <textarea name="description" class="form-control" rows="4" placeholder="Escreve uma descrição...">{{ old('description', $fuels->description ?? '') }}</textarea>
                                    </div>

                                    {{-- Botão de Enviar --}}
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary"> Salvar
                                        </button>
                                    </div>
                                </div>