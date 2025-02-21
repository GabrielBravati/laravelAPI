@extends('layouts.app')
@section('title', 'Login - Lara API')

@section('content_login') <!-- Página de login-->
    <main class="login">
        <div class="login__container">
            <h1 class="login__title">Login</h1>
            <form class="login__form" method="POST" action="{{ route('login') }}">
                @csrf
                <input class="login__input" type="text" name="Usuário" placeholder="Usuario" required>
                <span class="login__input-border"></span>
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror

                <input class="login__input" type="password" name="password" placeholder="Senha" required>
                <span class="login__input-border"></span>
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror

                <button class="login__submit" type="submit">Entrar</button>

                <div class="login__help">
                    <span id="subscribe">Não tem uma conta? <a href="{{ route('register') }}">Inscreva-se</a></span>
                    <a href="{{ route('password.request') }}">Esqueci a senha</a>
                </div>
            </form>
        </div>
    </main>
@endsection