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

                                <!-- NIF -->
                                <div class="col-md-6 mb-3">
                                    <label for="nif" class="form-label">NIF</label>
                                    <input type="text" class="form-control @error('nif') is-invalid @enderror" id="nif" name="nif" value="{{ old('nif') }}">
                                    @error('nif')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- BI -->
                                <div class="col-md-6 mb-3">
                                    <label for="bi" class="form-label">BI</label>
                                    <input type="text" class="form-control @error('bi') is-invalid @enderror" id="bi" name="bi" value="{{ old('bi') }}">
                                    @error('bi')
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

                                <!-- Upload da Foto -->
                                <div class="col-md-6 mb-3">
                                    <label for="photo" class="form-label">Foto</label>
                                    <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo" accept=".jpg,.jpeg,.png">
                                    @error('photo')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Upload do BI -->
                                <div class="col-md-6 mb-3">
                                    <label for="bi_upload" class="form-label">Upload do BI</label>
                                    <input type="file" class="form-control @error('bi_upload') is-invalid @enderror" id="bi_upload" name="bi_upload" accept=".pdf,.jpg,.jpeg,.png">
                                    @error('bi_upload')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Upload do Documento do Veículo -->
                                <div class="col-md-6 mb-3">
                                    <label for="vehicle_logbook_upload" class="form-label">Upload do Documento do Veículo</label>
                                    <input type="file" class="form-control @error('vehicle_logbook_upload') is-invalid @enderror" id="vehicle_logbook_upload" name="vehicle_logbook_upload" accept=".pdf,.jpg,.jpeg,.png">
                                    @error('vehicle_logbook_upload')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Data de Cadastro -->
                                <div class="col-md-6 mb-3">
                                    <label for="registration_date" class="form-label">Data de Cadastro</label>
                                    <input type="date" class="form-control @error('registration_date') is-invalid @enderror" id="registration_date" name="registration_date" value="{{ old('registration_date', now()->format('Y-m-d')) }}" min="{{ now()->format('Y-m-d') }}">
                                    @error('registration_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Botões -->
                            <div class="d-flex justify-content-end gap-2 mt-4">
                                <a href="{{ route('suppliers.index') }}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-primary">Salvar Fornecedor</button>
                            </div>