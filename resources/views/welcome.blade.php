<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Configuraste php y composer ({{ $phpVersion[0] }})</li>
        <li>Configuraste laravel (estas viendo esta página)</li>
        <li>Configuraste redis (valor desde cache: {{ $cacheValue }})</li>
        <li>Configuraste PostgreSQL ({{ $dbVersion ? 'CONECTADO' : 'NO CONECTADO'  }})</li>
        <li>Configuraste Mailhog (ver <a href="http://localhost:8025">http://localhost:8025</a>)</li>
    </ul>
</body>
</html>
