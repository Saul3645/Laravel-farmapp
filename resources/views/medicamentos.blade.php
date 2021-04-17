@extends('layouts.master')
@section('titulo')
    Medicamentos
@endsection
<link rel="stylesheet" type="text/css" href="css/medicamentos.css">
@section('contenido')
    <div>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/farmacia.jpg" class="d-block w-100" alt="..." height="701px">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Productos-->
    <h1 class="medicamentos__h1">Medicamentos Disponibles</h1>
    <div class="container__medicamentos">

        @foreach ($medicamentos as $Medicamento)
        <div class="tarjetas">
            <div class="col-md">
                <div class="card shadow" style="width: 18rem; height: 30rem;">
                    <div class="inner">
                        <img src="{{ asset($Medicamento->Url)}}" class="card-img-top" alt="{{ $Medicamento->Nombre}}" width="200" height="192">
                    </div>
                    <div class="card-body text-center">
                        {{-- <h5 class="card-title">{{ $sucursales->Nombre }}</h5> --}}
                        <h5 class="card-title">"{{ $Medicamento->Nombre }}"</h5>
                        <p class="card-text">{{ $Medicamento->Descripcion }}.</p>
                        <p class="card-text">{{ $Medicamento->Caracteristicas }}.</p>
                        <p class="card-text">{{ $Medicamento->Precio }}.</p>
                        <p class="card-text">{{ $Medicamento->sucursales_id}}.</p>
                        <br>
                        <a href="{{ route('Medicamentos.show',$Medicamento->id)}}" class="btn btn-success">Ver {{ $Medicamento->Nombre }}</a>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
        </div>
        @endforeach
    </div>
    <br>
@endsection
