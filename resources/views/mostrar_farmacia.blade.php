<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Detalle Aspirante</h1>
    <p>Nombre: {{ $sucursales->id}}</p>
    <p>Nombre: {{ $sucursales->Nombre}}</p>
    <p>Edad: {{ $sucursales->Descripcion}}</p>
    <p>Edad: {{ $sucursales->sucursale}}</p>
    <p>Email: {{ $sucursales->Direcion}}</p>
    <p>Email: {{ $sucursales->estudios}}</p>
    <p>Archivo: {{ $sucursales->file}}</p>
    <img src="{{ asset($sucursales->Url)}}" alt="imagen" width="200">
</body>
</html>