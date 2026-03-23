<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Activity 9 - @yield('title')</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: Arial, sans-serif;
            background-color: #1a1a2e;
            color: #ccc;
        }
        nav {
            background-color: #16213e;
            padding: 12px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #333;
        }
        nav .brand {
            color: #fff;
            font-size: 1.1rem;
            font-weight: bold;
            text-decoration: none;
        }
        nav .nav-links a, nav .nav-links button {
            color: #ccc;
            text-decoration: none;
            margin-left: 16px;
            font-size: 0.95rem;
            background: none;
            border: none;
            cursor: pointer;
            font-family: Arial, sans-serif;
        }
        nav .nav-links a:hover, nav .nav-links button:hover {
            color: #fff;
        }
        nav .nav-links .btn-nav {
            background-color: #3b5bdb;
            color: #fff;
            padding: 6px 14px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 0.9rem;
        }
        nav .nav-links .btn-nav:hover {
            background-color: #2f4ac0;
        }
    </style>
    @yield('styles')
</head>
<body>

<nav>
    <a href="/" class="brand">Activity 9</a>
    <div class="nav-links">
        @auth
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <span style="color:#888; margin-left:16px;">{{ auth()->user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                @csrf
                <button type="submit">Cerrar sesión</button>
            </form>
        @else
            <a href="{{ route('login') }}">Iniciar sesión</a>
            <a href="{{ route('register') }}" class="btn-nav">Registrarse</a>
        @endauth
    </div>
</nav>

@yield('content')

</body>
</html>
