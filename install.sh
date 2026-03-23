#!/bin/bash
# Script de instalación para Activity 9

echo "======================================"
echo "  Instalando Activity 9 - Laravel 12  "
echo "======================================"

# Verificar PHP
if ! command -v php &> /dev/null; then
    echo "ERROR: PHP no está instalado. Requiere PHP 8.2+"
    exit 1
fi

# Verificar Composer
if ! command -v composer &> /dev/null; then
    echo "ERROR: Composer no está instalado."
    exit 1
fi

echo ""
echo "1. Instalando dependencias de Composer..."
composer install --no-interaction --prefer-dist

echo ""
echo "2. Configurando archivo .env..."
if [ ! -f .env ]; then
    cp .env.example .env
fi

echo ""
echo "3. Generando clave de aplicación..."
php artisan key:generate

echo ""
echo "4. Creando base de datos SQLite..."
touch database/database.sqlite

echo ""
echo "5. Ejecutando migraciones..."
php artisan migrate --force

echo ""
echo "======================================"
echo "  ¡Instalación completada!"
echo "  Ejecuta: php artisan serve"
echo "  Accede:  http://localhost:8000"
echo "======================================"
