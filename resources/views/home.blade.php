@extends('layouts.master')
@section('titulo')
    Inicio
@endsection
@section('contenido')
    <!--Carrousel imagenes-->
    <div>
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/img-14.jpg" class="d-block w-100" alt="..." height="701px">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/medicine-.jpg" class="d-block w-100" alt="..." height="701px">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/img15.jpg" class="d-block w-100" alt="..." height="701px">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!--Datos-->
    <div class="datos">
        <br>
        <h1 class="datos__titulo">¿Quienes somos?</h1>
        <br>
        <p class="datos__parrafo">* Farmapp Es Un Motor De Búsqueda De Productos Y Cubre La Mayoría De Las Farmacias
            Online Del Mercado.</p>
        <p class="datos__parrafo">* ¿Qué Supermercados Y Farmacias Se Comparan En Farmapp?</p>
        <p class="datos__parrafo">* Farmacias Walmart</p>
        <p class="datos__parrafo">* Farmacias En Rappi</p>
        <p class="datos__parrafo">* Farmacias En Cornershop</p>
        <p class="datos__parrafo">* Farmacias Guadalajara</p>
        <p class="datos__parrafo">* Farmacias Benavides</p>
        <p class="datos__parrafo">* Farmatodo</p>
    </div>
    <!--Novedades-->
    <div class="padre__novedades">
        <div class="novedades">
            <br>
            <img class="novedades__icon" src="https://image.flaticon.com/icons/svg/143/143361.svg" alt="">
            <br>
            <h1 class="novedades__h1">Suscribete Para Obtener Más Promociones</h1>
            <h2 class="novedades__h2">Introduce Tu E-mail</h2>
            <!--Input-->
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Escriba Su Correo Electronico"
                    aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-success" type="button" id="button-addon2">Suscribete</button>
                </div>
            </div>
        </div>
        <br>
    </div>
    <br>
@endsection
