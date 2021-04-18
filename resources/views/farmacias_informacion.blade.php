@extends('layouts.master')
@section('contenido')
<link rel="stylesheet" type="text/css" href="../css/home.css">
<link rel="stylesheet" type="text/css" href="../css/farmacias.css">
<link rel="stylesheet" type="text/css" href="../css/medicamentos.css">
@section('titulo')
{{ $Sucursale->Nombre }}
@endsection

<div class="farmacia__banner">
    <h1 class="farmacias__info__h1">{{ $Sucursale->Nombre }}</h1>
    <img src="{{ asset($Sucursale->Url)}}" class="rounded-circle" alt="..." width="200px" height="200px">
</div>
<div class="farmacias__informacion">
    <button class="btn btn-warning "><a href="javascript: history.go(-1)" ><i class="fas fa-arrow-left"></i></a></button>
    <h1 class="farmacias__info__h1">Acerca De: </h1>
    <h1 class="farmacias__info__h1">{{ $Sucursale->Nombre }}</h1>
        
        <h2>Sucursal: {{ $Sucursale->Nombre}}</h2>
        <p>Descripción: {{ $Sucursale->Descripcion}}</p>
        <p>Teléfono: {{ $Sucursale->Telefono}}</p>
        <p>Dirección: {{ $Sucursale->Direccion}}</p>
        {{-- <p>Logo: {{ $Sucursale->Url}}</p> --}}
        {{-- <img src="{{ asset($Sucursale->Url)}}" alt="imagen" width="200"> --}}
</div>

<h1 class="medicamentos__h1">Nuestros Medicamentos</h1>

<div class="container__medicamentos">
    
    @foreach ($medicamentos as $Medicamento)
    <div class="tarjetas">
        <div class="col-md">
            <div class="card shadow" style="width: 18rem; height: 20rem;">
                <div class="inner">
                    <img src="{{ asset($Medicamento->Url)}}" class="card-img-top" alt="{{ $Medicamento->Nombre}}" width="200" height="192">
                </div>
                <div class="card-body text-center">
                    {{-- <h5 class="card-title">{{ $sucursales->Nombre }}</h5> --}}
                    <h5 class="card-title">"{{ $Medicamento->Nombre }}"</h5>
                    <br>
                    <a href="{{ route('Medicamentos.show',$Medicamento->id)}}" class="btn btn-success">Ver {{ $Medicamento->Nombre }}</a>
                </div>
            </div>
        </div>
        {{-- @endforeach --}}
    </div>
 
    
    @endforeach
    
    
    
</div>
@endsection