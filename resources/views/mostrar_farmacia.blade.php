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
    <p>Nombre: {{ $Sucursale->id}}</p>
    <p>Nombre: {{ $Sucursale->Nombre}}</p>
    <p>Edad: {{ $Sucursale->Descripcion}}</p>
    <p>Telefono: {{ $Sucursale->Telefono}}</p>
    <p>Dirección: {{ $Sucursale->Direccion}}</p>
    <p>Archivo: {{ $Sucursale->Url}}</p>
    <img src="{{ asset($Sucursale->Url)}}" alt="imagen" width="200">
</body>
</html>