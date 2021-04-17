@extends('layouts.master')
@section('contenido')
<link rel="stylesheet" type="text/css" href="../css/home.css">
<link rel="stylesheet" type="text/css" href="../css/farmacias.css">
@section('titulo')
{{ $Medicamento->Nombre }}
@endsection

<div class="farmacia__banner">
    <h1 class="farmacias__info__h1">{{ $Medicamento->Nombre }}</h1>
    <img src="{{ asset($Medicamento->Url)}}" class="rounded-circle" alt="..." width="200px" height="200px">
</div>
<div class="farmacias__informacion">
    <h1 class="farmacias__info__h1">Acerca De: {{ $Medicamento->Nombre }}</h1>
        
        <h2>Sucursal: {{ $Medicamento->Nombre}}</h2>
        <p>Descripción: {{ $Medicamento->Descripcion}}</p>
        <p>Caracteristicas: {{ $Medicamento->Caracteristicas}}</p>
        <p>Precio: {{ $Medicamento->Precio}}</p>
        <p>Sucursal: {{ $Medicamento->sucursales_id}}</p>
        {{-- <p>Logo: {{ $Sucursale->Url}}</p> --}}
        {{-- <img src="{{ asset($Sucursale->Url)}}" alt="imagen" width="200"> --}}
</div>
@endsection