@extends('layouts.app')

@section('title', 'Bienvenido')

@section('styles')
<style>
    .container {
        max-width: 600px;
        margin: 100px auto;
        text-align: center;
        padding: 0 20px;
    }
    h1 {
        color: #fff;
        font-size: 2rem;
        margin-bottom: 12px;
    }
    p {
        color: #aaa;
        margin-bottom: 8px;
        font-size: 1rem;
        line-height: 1.6;
    }
    hr {
        border: none;
        border-top: 1px solid #444;
        margin: 24px 0;
    }
    .btn {
        display: inline-block;
        background-color: #3b5bdb;
        color: #fff;
        padding: 10px 24px;
        border-radius: 4px;
        text-decoration: none;
        font-size: 0.95rem;
        margin-top: 12px;
    }
    .btn:hover { background-color: #2f4ac0; }
    .badge {
        display: inline-block;
        background-color: #333;
        color: #aaa;
        font-size: 0.75rem;
        padding: 3px 10px;
        border-radius: 4px;
        margin-bottom: 16px;
    }
</style>
@endsection

@section('content')
<div class="container">
    <span class="badge">Landing Page — Vista pública</span>
    <h1>Bienvenido a Activity 9</h1>
    <hr>
    <p>Esta es la <strong style="color:#fff;">Landing Page</strong> (Vista pública).</p>
    <p>Los usuarios no registrados ven esta pantalla.<br>Regístrate o inicia sesión para acceder al Dashboard.</p>
    <a href="{{ route('login') }}" class="btn">Ir al Login</a>
    <a href="{{ route('register') }}" class="btn" style="margin-left:8px; background:#444;">Registrarse</a>
</div>
@endsection
