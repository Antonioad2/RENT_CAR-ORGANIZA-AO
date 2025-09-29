@extends('site.reservation.layouts.main')
@section('title', 'AngoCar - Criar Conta')
@section('content')

    <!-- Main Wrapper -->
    <div class="main-wrapper login-body">
        <!-- Header -->
        <header class="log-header">
            <a href="index.html"><img class="img-fluid logo-dark" src="{{ url('assets/user/img/logo.svg')}}" alt="Logo"></a>
        </header>
        <!-- /Header -->

        <div class="login-wrapper">
            <div class="loginbox">                        
                <div class="login-auth">
                    <div class="login-auth-wrap">
                        <div class="sign-group">
                            <a href="{{route('home')}}" class="btn sign-up"><span><i class="fe feather-corner-down-left" aria-hidden="true"></i></span> Voltar para a Página Inicial</a>
                        </div>
                        <h1>Criar Conta</h1>
                        <!-- <p class="account-subtitle">Enviaremos um código de confirmação para o seu e-mail.</p>    -->                             
     <form action="{{ route('client_create') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="input-block">
        <label class="form-label">Nome <span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Digite seu nome" required>
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="input-block">
        <label class="form-label">E-mail <span class="text-danger">*</span></label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Digite seu e-mail" required>
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="input-block">
        <label class="form-label">Senha <span class="text-danger">*</span></label>
        <div class="pass-group">
            <input type="password" class="form-control pass-input @error('password') is-invalid @enderror" id="password" name="password" placeholder="Digite sua senha" required>
            <span class="fas fa-eye-slash toggle-password"></span>
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="input-block">
        <label class="form-label">Telefone</label>
        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Digite seu telefone">
        @error('phone')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="input-block">
        <label class="form-label">Endereço</label>
        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') }}" placeholder="Digite seu endereço">
        @error('address')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="input-block">
        <label class="form-label">BI</label>
        <div class="input-group">
            <input type="text" class="form-control @error('bi') is-invalid @enderror" name="bi" value="{{ old('bi') }}" placeholder="Número do BI">
            <input type="file" class="form-control" name="bi_upload" accept="application/pdf" style="border-left: 1px solid #ced4da;">
            @error('bi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="input-block">
        <label class="form-label">Carta de Condução</label>
        <div class="input-group">
            <input type="text" class="form-control @error('driver_license') is-invalid @enderror" name="driver_license" value="{{ old('driver_license') }}" placeholder="Número da carta de condução">
            <input type="file" class="form-control" name="driver_license_upload" accept="application/pdf" style="border-left: 1px solid #ced4da;">
            @error('driver_license')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary w-100 btn-size mt-1">Criar Conta</button>
    <div class="login-or">
        <span class="or-line"></span>
        <span class="span-or">Ou, crie uma conta com seu e-mail</span>
    </div>
    <!-- Social Login -->
    <div class="social-login">
        <a href="#" class="d-flex align-items-center justify-content-center input-block btn google-login w-100">
            <span><img src="{{ url('assets/user/img/icons/google.svg')}}" class="img-fluid" alt="Google"></span>Entrar com Google
        </a>
    </div>
    <div class="social-login">
        <a href="#" class="d-flex align-items-center justify-content-center input-block btn google-login w-100">
            <span><img src="{{ url('assets/user/img/icons/facebook.svg')}}" class="img-fluid" alt="Facebook"></span>Entrar com Facebook
        </a>
    </div>
    <!-- /Social Login -->
    <div class="text-center dont-have">Já possui uma conta? <a href="{{ route('site.client-login') }}">Entrar</a></div>
</form>                          
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection