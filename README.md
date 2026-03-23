# Activity 9 — Laravel 12 Authentication

## Descripción del Proyecto

**Activity 9** es una aplicación web desarrollada con **Laravel 12** que implementa un sistema de autenticación completo. El proyecto diferencia la experiencia entre usuarios invitados y usuarios registrados mediante dos vistas distintas: una **Landing Page** pública y un **Dashboard** privado.

## Características

- Sistema de autenticación completo (registro, login, logout)
- Landing Page exclusiva para visitantes no autenticados
- Dashboard privado accesible solo para usuarios registrados
- Navbar dinámico que cambia según el estado de autenticación
- Protección de rutas mediante middleware `auth` y `guest`
- Base de datos SQLite lista para usar
- Diseño moderno y responsivo con CSS puro

## Requisitos

- PHP 8.2 o superior
- Composer
- Extensión PDO SQLite

## Instalación

```bash
# 1. Instalar dependencias
composer install

# 2. Copiar el archivo de entorno
cp .env.example .env

# 3. Generar la clave de aplicación
php artisan key:generate

# 4. Ejecutar migraciones
php artisan migrate

# 5. Iniciar el servidor de desarrollo
php artisan serve
```

Accede en: `http://localhost:8000`

## Estructura de Vistas

| Vista | Ruta | Acceso |
|-------|------|--------|
| Landing Page | `/` | Visitantes (no autenticados) |
| Dashboard | `/dashboard` | Solo usuarios registrados |
| Login | `/login` | Visitantes |
| Registro | `/register` | Visitantes |

## Rutas

| Método | URI | Controlador | Middleware |
|--------|-----|-------------|------------|
| GET | `/` | Closure | — |
| GET | `/login` | LoginController@showLoginForm | guest |
| POST | `/login` | LoginController@login | guest |
| GET | `/register` | RegisterController@showRegistrationForm | guest |
| POST | `/register` | RegisterController@register | guest |
| GET | `/dashboard` | DashboardController@index | auth |
| POST | `/logout` | LoginController@logout | auth |

## Tecnologías

- **Backend:** Laravel 12, PHP 8.2+
- **Base de datos:** SQLite
- **Frontend:** Blade Templates, CSS3 puro
- **Autenticación:** Laravel Session Auth

## Autor

Desarrollado como parte de la Actividad 9 — Desarrollo Web con Laravel.
