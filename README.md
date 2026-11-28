# Horizonte Azul Viajes

Web de una agencia de viajes hecha con Laravel y Docker (PHP, Nginx y MySQL).

## Requisitos
- Docker Desktop
- WSL 2 (en Windows)

## Puesta en marcha
```bash
docker compose up --build -d
docker compose exec php bash -c "composer install"
docker compose exec php bash -c "cp .env.example .env && php artisan key:generate"
docker compose exec php bash -c "touch database/database.sqlite && php artisan migrate"
docker compose exec php bash -c "chmod -R a+rwX storage bootstrap/cache database"
```

Después abre http://localhost:8080

## Páginas
Inicio, Sobre nosotros, Servicios y Contacto.

## Autor
Pol Fernández
