@extends('layouts.master')
@section('contenido')
<link rel="stylesheet" type="text/css" href="../css/home.css">
<link rel="stylesheet" type="text/css" href="../css/farmacias.css">
@section('titulo')
{{ $Sucursale->Nombre }}
@endsection

<div class="farmacia__banner">
    <h1 class="farmacias__info__h1">{{ $Sucursale->Nombre }}</h1>
    <img src="{{ asset($Sucursale->Url)}}" class="rounded-circle" alt="..." width="200px" height="200px">
</div>
<div class="farmacias__informacion">
    <h1 class="farmacias__info__h1">Acerca De: {{ $Sucursale->Nombre }}</h1>
        
        <h2>Sucursal: {{ $Sucursale->Nombre}}</h2>
        <p>Descripción: {{ $Sucursale->Descripcion}}</p>
        <p>Teléfono: {{ $Sucursale->Telefono}}</p>
        <p>Dirección: {{ $Sucursale->Direccion}}</p>
        <p>Logo: {{ $Sucursale->Url}}</p>
        {{-- <img src="{{ asset($Sucursale->Url)}}" alt="imagen" width="200"> --}}
</div>
@endsection