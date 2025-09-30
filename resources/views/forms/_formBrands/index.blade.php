
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
                                        <label class="form-label">Nome da Marca</label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ old('name') }}" placeholder="Ex: Kia, Toyota...">
                                    </div>

                                <!-- Campo de Foto mantido separado -->
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Logo da Marca</label>
                                    <input type="file" name="image" class="form-control" accept="image/*">
                                </div>

                                    {{-- Data de Registro --}}
                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label">Data de Registro</label>
                                        <input
                                            type="date"
                                            name="date"
                                            class="form-control"
                                            value="{{ old('date', $brand->date ?? now()->format('Y-m-d')) }}"
                                            min="{{ now()->format('Y-m-d') }}"
                                        >
                                    </div>

                                    {{-- Descrição --}}
                                    <div class="col-12 mb-4">
                                        <label class="form-label">Descrição</label>
                                        <textarea name="description" class="form-control" rows="4" placeholder="Escreve uma descrição...">{{ old('description', $brands->description ?? '') }}</textarea>
                                    </div>

                                    {{-- Botão de Enviar --}}
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary"> Salvar
                                        </button>
                                    </div>
                                </div>