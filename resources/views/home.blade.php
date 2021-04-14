<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
  <!--Nav-->
    <nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #16eadc;">
        <a class="navbar-brand" href="/">FARMAPP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/farmacias">Farmacias</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/medicamentos">Medicamentos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown link
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="/login">Perfil</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
    </nav>

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
                <img src="img/img15.jpg" class="d-block w-100" alt="..." height="701px">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/farmaciagirl.jpg" class="d-block w-100" alt="..." height="701px">
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
      <p class="datos__parrafo">* Farmapp Es Un Motor De Búsqueda De Productos Y Cubre La Mayoría De Las Farmacias Online Del Mercado.</p>
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
            <input type="text" class="form-control" placeholder="Escriba Su Correo Electronico" aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-success" type="button" id="button-addon2">Suscribete</button>
          </div>
        </div> 
      </div>
        <br>
    </div>
    <br>
    <!--Footer-->
    <div class="padre__footer">
      <br>
      <h3 class="footer__h3">Sobre Nosotros</h3>
      <div class="footer">
        <div class="footer__second">
          <h6 class="footer__h6">¿Cómo funciona?</h6>
          <h6 class="footer__h6">Farmacias</h6>
          <h6 class="footer__h6">Medicamentos</h6>
          <h6 class="footer__h6">Inicia Sesión</h6>
          <h6 class="footer__h6">Admin</h6>
        <div>
      </div>
      <br>
      <h2 class="footer__nombre">FARMAPP</h2>
      <h6 class="footer__copy">FARMAPP © 2020</h6>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>