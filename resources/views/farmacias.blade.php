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
<div class="container">
  <h1 class="farmacias__h1">Nuestras Farmacias</h1>
  {{-- @foreach ($sucursales1 as $sucursales) --}}
  <div class="row justify-content-center">
      <div class="col-md-4 py-3">
          <div class="card shadow" style="width: 18rem;">
              <div class="inner">
                  <img src="img/img-14.jpg" class="card-img-top" alt="...">
              </div>
              <div class="card-body text-center">
                  {{-- <h5 class="card-title">{{ $sucursales->Nombre }}</h5> --}}
                  <h5 class="card-title">Card Title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-success">Go somewhere</a>
              </div>
          </div>
      </div>
      {{-- @endforeach --}}
      <div class="col-md-4 py-3">
          <div class="card shadow" style="width: 18rem;">
              <div class="inner">
                  <img src="img/img-14.jpg" class="card-img-top" alt="...">
              </div>
              <div class="card-body text-center">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-success">Go somewhere</a>
              </div>
          </div>
      </div>
      <div class="col-md-4 py-3">
          <div class="card shadow" style="width: 18rem;">
              <div class="inner">
                  <img src="img/img-14.jpg" class="card-img-top" alt="...">
              </div>
              <div class="card-body text-center">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-success">Go somewhere</a>
              </div>
          </div>
      </div>
  </div>
  <br>
</div>
@endsection