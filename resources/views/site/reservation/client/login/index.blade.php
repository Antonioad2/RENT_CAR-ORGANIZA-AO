@extends('site.reservation.layouts.main')
@section('title', 'AngoCar - Login')
@section('content')

<div class="main-wrapper login-body">
    <!-- Header -->
    <header class="log-header">
        <a href="{{ route('home') }}">
            <img class="img-fluid logo-dark" src="{{ url('assets/user/img/logo.svg')}}" alt="Logo">
        </a>
    </header>
    <!-- /Header -->

    <div class="login-wrapper">
        <div class="loginbox">                        
            <div class="login-auth">
                <div class="login-auth-wrap">
                    <div class="sign-group">
                        <a href="{{ route('home') }}" class="btn sign-up">
                            <span><i class="fe feather-corner-down-left"></i></span> Voltar para a Página Inicial
                        </a>
                    </div>
                    <h1>Entrar</h1>

                    <form action="{{ route('client_login') }}" method="POST">
                        @csrf
                        <div class="input-block">
                            <label class="form-label">E-mail <span class="text-danger">*</span></label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                   name="email" value="{{ old('email') }}" placeholder="Digite seu e-mail" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="input-block">
                            <label class="form-label">Senha <span class="text-danger">*</span></label>
                            <div class="pass-group">
                                <input type="password" class="form-control pass-input @error('password') is-invalid @enderror" 
                                       name="password" placeholder="Digite sua senha" required>
                                <span class="fas fa-eye-slash toggle-password"></span>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="input-block">
                            <a class="forgot-link" href="#">Esqueceu a Senha?</a>
                        </div>

                        <div class="input-block m-0">
                            <label class="custom_check d-inline-flex">
                                <span>Lembrar-me</span>
                                <input type="checkbox" name="remember">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 btn-size mt-1">Entrar</button>

                        <div class="login-or">
                            <span class="or-line"></span>
                            <span class="span-or-log">Ou, entre com seu e-mail</span>
                        </div>

                        <!-- Social Login -->
                        <div class="social-login">
                            <a href="#" class="d-flex align-items-center justify-content-center input-block btn google-login w-100">
                                <span><img src="{{ url('assets/user/img/icons/google.svg')}}" class="img-fluid" alt="Google"></span>
                                Entrar com Google
                            </a>
                        </div>
                        <div class="social-login">
                            <a href="#" class="d-flex align-items-center justify-content-center input-block btn google-login w-100">
                                <span><img src="{{ url('assets/user/img/icons/facebook.svg')}}" class="img-fluid" alt="Facebook"></span>
                                Entrar com Facebook
                            </a>
                        </div>
                        <!-- /Social Login -->

                        <div class="text-center dont-have">
                            Ainda não tem uma conta? <a href="{{ route('site.client-create') }}">Criar Conta</a>
                        </div>
                    </form>                          
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
