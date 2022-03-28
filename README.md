# Sobre el repo
Actividad de Taller de Nuevas Tecnologías de la UNTDF. 

## Instrucciones
- Este repo requiere para su funcionamiento: php, composer, redis, postgreSQL, Laravel, Mailhog
- Si todo funciona correctamente verán una web con un texto similar al siguiente:
```
- Configuraste php y composer (PHP 8.0.3 (cli) (built: Mar 5 2021 07:54:13) ( NTS ))
- Configuraste laravel (estas viendo esta página)
- Configuraste redis (valor desde cache: 1617478924)
- Configuraste PostgreSQL (CONECTADO)
- Configuraste Mailhog (ver http://localhost:8025)
```

## Solución:
1. Duplicar el archivo `.env.example` a `.env`
2. Instalar las dependencias con:
```
docker run --rm -v MI_PATH:/var/www/html -w /var/www/html laravelsail/php81-composer:latest composer install --ignore-platform-reqs
```
3. `docker compose up`
4. Abrir `http://localhost`
5. Generar el key con el botón verde.
6. Refrescar la página.
