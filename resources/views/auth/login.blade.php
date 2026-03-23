@extends('layouts.app')

@section('title', 'Iniciar Sesión')

@section('styles')
<style>
    .container {
        max-width: 400px;
        margin: 80px auto;
        padding: 0 20px;
    }
    h2 { color: #fff; margin-bottom: 20px; font-size: 1.4rem; }
    .form-group { margin-bottom: 16px; }
    label { display: block; color: #aaa; margin-bottom: 6px; font-size: 0.9rem; }
    input[type=email], input[type=password] {
        width: 100%;
        padding: 9px 12px;
        background: #16213e;
        border: 1px solid #333;
        border-radius: 4px;
        color: #fff;
        font-size: 0.95rem;
        font-family: Arial, sans-serif;
    }
    input:focus { outline: none; border-color: #3b5bdb; }
    .error { color: #f87171; font-size: 0.82rem; margin-top: 4px; }
    .btn {
        width: 100%;
        background-color: #3b5bdb;
        color: #fff;
        border: none;
        padding: 10px;
        border-radius: 4px;
        font-size: 0.95rem;
        cursor: pointer;
        font-family: Arial, sans-serif;
        margin-top: 4px;
    }
    .btn:hover { background-color: #2f4ac0; }
    .footer-link { text-align: center; margin-top: 16px; font-size: 0.88rem; color: #888; }
    .footer-link a { color: #7ba7f7; text-decoration: none; }
</style>
@endsection

@section('content')
<div class="container">
    <h2>Iniciar sesión</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>
            @error('password') <div class="error">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn">Iniciar sesión</button>
    </form>

    <div class="footer-link">
        ¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate</a>
    </div>
</div>
@endsection
