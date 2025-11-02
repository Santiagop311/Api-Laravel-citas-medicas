#!/bin/sh
set -e

echo "Esperando a que PostgreSQL esté listo..."
until pg_isready -h "$DB_HOST" -p "$DB_PORT" -U "$DB_USERNAME"; do
  sleep 2
done

echo "Base de datos lista, ejecutando migraciones..."
php artisan migrate --force

echo "Iniciando el servidor Laravel..."
exec php artisan serve --host=0.0.0.0 --port=8000
