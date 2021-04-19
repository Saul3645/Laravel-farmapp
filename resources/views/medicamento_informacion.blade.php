@extends('layouts.master')
@section('contenido')
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <link rel="stylesheet" type="text/css" href="../css/farmacias.css">
@section('titulo')
    {{ $Medicamento->Nombre }}
@endsection

<div class="farmacia__banner">
    <h1 class="farmacias__info__h1">{{ $Medicamento->Nombre }}</h1>
    <img src="{{ asset($Medicamento->Url) }}" class="rounded-circle" alt="..." width="200px" height="200px">
</div>
<div class="farmacias__informacion">
    <input type="button" class="btn btn-warning " value="Volver" onClick="history.go(-1);">
    <h1 class="farmacias__info__h1">Acerca De:</h1>
    <h1 class="farmacias__info__h1">{{ $Medicamento->Nombre }}</h1>
    <br>
    <div class="container">
        <h4>Descripción: </h4>
        <p>{{ $Medicamento->Descripcion }}</p>
        <br>
        <h4>Caracteristicas: </h4>
        <p>{{ $Medicamento->Caracteristicas }}</p>
        <br>
        <h4>Precio: </h4>
        <p>{{ $Medicamento->Precio }}</p>
        <br>
        <h4>Sucursal: </h4>
        @foreach ($farmacias as $farmacia)
            @if($Medicamento->sucursales_id == $farmacia->id)
                <p> {{ $farmacia->Nombre }}</p>
            @endif
        @endforeach
       
    </div>

    {{-- <p>Logo: {{ $Sucursale->Url}}</p> --}}
    {{-- <img src="{{ asset($Sucursale->Url)}}" alt="imagen" width="200"> --}}
</div>
@endsection
