 <div class="row">
                                <!-- Nome -->
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Nome <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Telefone -->
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Telefone</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}">
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Endereço -->
                                <div class="col-md-6 mb-3">
                                    <label for="address" class="form-label">Endereço</label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') }}">
                                    @error('address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Campo combinado para BI -->
                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">BI</label>
                                    <div class="input-group">
                                        <input type="text" name="bi" class="form-control" value="{{ old('bi') }}">
                                        <input type="file" name="bi_upload" class="form-control" accept="application/pdf" style="border-left: 1px solid #ced4da;">
                                    </div>
                                </div>

                                <!-- Campo combinado para Carta de Condução -->
                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">Carta de Condução</label>
                                    <div class="input-group">
                                        <input type="text" name="driver_license" class="form-control" value="{{ old('driver_license') }}">
                                        <input type="file" name="driver_license_upload" class="form-control" accept="application/pdf" style="border-left: 1px solid #ced4da;">
                                    </div>
                                </div>

                            </div>

                            <!-- Botões -->
                            <div class="d-flex justify-content-end gap-2 mt-4">
                                <a href="{{ route('clients.index') }}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-primary">Salvar Cliente</button>
                            </div>