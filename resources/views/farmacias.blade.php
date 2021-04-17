@extends('layouts.master')
@section ('contenido')
@section('titulo')
Farmacias
@endsection
<link rel="stylesheet" type="text/css" href="css/farmacias.css">
<div>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="img/img-14.jpg" class="d-block w-100" alt="..." height="701px">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
          </div>
        </div>
    </div>
</div>

<!--Farmacias-->
<h1 class="farmacias__h1">Nuestras Farmacias</h1>
<div class="container__farmacias">
    {{-- @foreach ($sucursales1 as $sucursales) --}}
    @foreach ($sucursales as $Sucursale)
    <div class="tarjetas">
        <div class="col-md">
            <div class="card shadow" style="width: 18rem;">
                <div class="inner">
                    <img src="{{ asset($Sucursale->Url)}}" class="card-img-top" alt="..." width="200" height="192">
                </div>
                <div class="card-body text-center">
                    {{-- <h5 class="card-title">{{ $sucursales->Nombre }}</h5> --}}
                    <h5 class="card-title">"{{ $Sucursale->Nombre }}"</h5>
                    <p class="card-text">{{ $Sucursale->Descripcion }}.</p>
                    <p class="card-text">{{ $Sucursale->Telefono }}.</p>
                    <p class="card-text">{{ $Sucursale->Direccion }}.</p>
                    
                    <a href="{{ route('Sucursales.show',$Sucursale->id)}}" class="btn btn-success">Ver {{ $Sucursale->Nombre }}</a>
                </div>
            </div>
        </div>
        {{-- @endforeach --}}
    </div>
    @endforeach
    <br>
</div>
@endsection