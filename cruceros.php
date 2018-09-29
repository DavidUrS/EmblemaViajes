<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
  <meta name="viewport" content="width=device-width">
  <title>EmblemaViajes</title>
  <script src="./js/js/jquery.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="./css/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/fontawesome/web-fonts-with-css/css/fontawesome-all.css">
  <link rel="stylesheet" href="./css/css/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/internas.css">
  <link rel="stylesheet" type="text/css" href="css/fondos.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>

<body>
<?php
    include_once 'headerWhite.php';
    include_once 'headerBlack.php';
?>
<!-- // Slider -->
<h1 class="display-3 text-center">Cruceros Emblema Viajes</h1>
<p class="lead text-center">Tu web de viajes, cruceros, hoteles, paquetes, parques y más. ¡Descubrelo!</p>
<div id="carouselCruceros" class="carousel slide mt-1" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselCruceros" data-slide-to="0" class="active"></li>
    <li data-target="#carouselCruceros" data-slide-to="1"></li>
    <li data-target="#carouselCruceros" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./img/cruceros/1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/cruceros/2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/cruceros/3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselCruceros" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselCruceros" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- // FIn Slider -->

<h1 class="display-3 text-center">Cruceros</h1>
  <div class="container">
    <p>
    Encuentra los mejores Cruceros a todo el mundo y reserva fácil y seguro. Zarpa hacia los destinos más increíbles y aprovecha los descuentos y ofertas con las principales compañías navieras disfrutando de unas vacaciones inolvidables. ¡Consulta, Cotiza y Reserva ahora!
    Compara y cotiza gratis a través de nuestro servicio de agentes online y asesor en el chat reservando rápido, fácil y seguro.
    </p>
  </div>

<!-- // INICIO CAROUSEL DESTINOS -->

<h1 class="display-4 text-center font-weight-bold" style="font-size: 40px;">Top destinos</h1>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="caribe-tab" data-toggle="tab" href="#caribe" role="tab" aria-controls="caribe" aria-selected="true">CARIBE</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="medi-tab" data-toggle="tab" href="#medi" role="tab" aria-controls="medi" aria-selected="false">MEDITERRANEO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="griegas-tab" data-toggle="tab" href="#griegas" role="tab" aria-controls="griegas" aria-selected="false">ISLAS GRIEGAS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="europa_norte-tab" data-toggle="tab" href="#europa_norte" role="tab" aria-controls="europa_norte" aria-selected="false">EUROPA DEL NORTE</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="baltico-tab" data-toggle="tab" href="#baltico" role="tab" aria-controls="baltico" aria-selected="false">MAR BALTICO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="sudamerica-tab" data-toggle="tab" href="#sudamerica" role="tab" aria-controls="sudamerica" aria-selected="false">SUDAMERICA</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="caribe" role="tabpanel" aria-labelledby="caribe-tab">
    <!-- INICIO Carousel de caribe-->
    <h1  class="display-4 text-center mt-1">CARIBE</h1>
    <div id="fondo_top_cari" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/caribe/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/caribe/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/caribe/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/caribe/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/caribe/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/caribe/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de caribe -->
  </div>
  <div class="tab-pane fade" id="medi" role="tabpanel" aria-labelledby="medi-tab">
    <!-- INICIO Carousel de mediterraneo-->
    <h1  class="display-4 text-center mt-1">MEDITERRANEO</h1>
    <div id="fondo_top_medi" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/mediterraneo/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/mediterraneo/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/mediterraneo/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/mediterraneo/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/mediterraneo/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/mediterraneo/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de mediterraneo -->
  </div>
  <div class="tab-pane fade" id="griegas" role="tabpanel" aria-labelledby="griegas-tab">
    <!-- INICIO Carousel de islas griegas -->
    <h1  class="display-4 text-center mt-1">ISLAS GRIEGAS</h1>
    <div id="fondo_top_grie" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/griegas/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/griegas/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/griegas/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/griegas/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/griegas/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/griegas/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de islas griegas -->
  </div>
  <div class="tab-pane fade" id="europa_norte" role="tabpanel" aria-labelledby="europa_norte-tab">
    <!-- INICIO Carousel europa norte -->
    <h1  class="display-4 text-center mt-1">EUROPA DEL NORTE</h1>
    <div id="fondo_top_euro" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/europa/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/europa/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/europa/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/europa/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/europa/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/europa/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de europa norte -->
  </div>
  <div class="tab-pane fade" id="baltico" role="tabpanel" aria-labelledby="baltico-tab">
    <!-- INICIO Carousel mar baltico -->
    <h1  class="display-4 text-center mt-1">MAR BALTICO</h1>
    <div id="fondo_top_balti" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/baltico/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/baltico/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/baltico/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/baltico/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/baltico/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/baltico/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de mar baltico -->
  </div>
  <div class="tab-pane fade" id="sudamerica" role="tabpanel" aria-labelledby="sudamerica-tab">
    <!-- INICIO Carousel sudamerica-->
    <h1  class="display-4 text-center mt-1">SUDAMERICA</h1>
    <div id="fondo_top_suda" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/sudamerica/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/sudamerica/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/sudamerica/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/sudamerica/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/sudamerica/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/sudamerica/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de sudamerica -->
  </div>
</div>

<!-- // FIN CAROUSEL DESTINOS -->

    <!-- INICIO Slider top compañias -->
    <h1  class="display-4 text-center mt-5">Top compañías</h1>
    <div class="slidecontainer mt-3">
      <div class="icons">

        <div class="slide">
              <img class="card-img-top w-50" src="./img/cruceros/compa/msc.jpg" alt="Card image cap">
        </div>

        <div class="slide">
              <img class="card-img-top w-50" src="./img/cruceros/compa/pull.jpg" alt="Card image cap">
        </div>

        <div class="slide">
            <img class="card-img-top w-50" src="./img/cruceros/compa/royal.jpg" alt="Card image cap">
        </div>

        <div class="slide">
            <img class="card-img-top w-50" src="./img/cruceros/compa/costa.jpg" alt="Card image cap">
        </div>

        <div class="slide">
            <img class="card-img-top w-50" src="./img/cruceros/compa/nor.png" alt="Card image cap">
        </div>
      </div>
    </div>
    <!-- FIN Carousel de top compañias -->

    <!-- INICIO CAROUSEL OFERTAS TOP COMPAÑIAS -->
<h1 class="display-4 text-center font-weight-bold mt-5" style="font-size: 40px;">Ofertas por compañias</h1>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="msc-tab" data-toggle="tab" href="#msc" role="tab" aria-controls="msc" aria-selected="true">OFERTAS MSC</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pullmantur-tab" data-toggle="tab" href="#pullmantur" role="tab" aria-controls="pullmantur" aria-selected="false">OFERTAS PULLMANTUR</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="royal-tab" data-toggle="tab" href="#royal" role="tab" aria-controls="royal" aria-selected="false">OFERTAS ROYAL CARIBBEAN</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="costa_cru-tab" data-toggle="tab" href="#costa_cru" role="tab" aria-controls="costa_cru" aria-selected="false">OFERTAS COSTA CRUCEROS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="norweigan-tab" data-toggle="tab" href="#norweigan" role="tab" aria-controls="norweigan" aria-selected="false">OFERTAS NORWEIGAN</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="msc" role="tabpanel" aria-labelledby="msc-tab">
        <!-- INICIO Carousel OFERTAS MSC-->
        <h1  class="display-4 text-center mt-1">OFERTAS MSC</h1>
    <div id="fondo_ofe_msc" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/msc/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/msc/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/msc/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/msc/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/msc/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/msc/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de OFERTAS MSC -->
  </div>
  <div class="tab-pane fade" id="pullmantur" role="tabpanel" aria-labelledby="pullmantur-tab">
    <!-- INICIO Carousel OFERTAS PULLMANTUR-->
    <h1  class="display-4 text-center mt-1">OFERTAS PULLMANTUR</h1>
    <div id="fondo_ofe_pull" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/pullmantur/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/pullmantur/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/pullmantur/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/pullmantur/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/pullmantur/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/pullmantur/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de OFERTAS PULLMANTUR -->
  </div>
  <div class="tab-pane fade" id="royal" role="tabpanel" aria-labelledby="royal-tab">
    <!-- INICIO Carousel OFERTAS ROYAL CARIBBEAN-->
    <h1  class="display-4 text-center mt-1">OFERTAS ROYAL CARIBBEAN</h1>
    <div id="fondo_ofe_roya" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/royal/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/royal/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/royal/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/royal/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/royal/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/royal/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de OFERTAS ROYAL CARIBBEAN -->
  </div>
  <div class="tab-pane fade" id="costa_cru" role="tabpanel" aria-labelledby="costa_cru-tab">
    <!-- INICIO Carousel OFERTAS COSTA CRUCEROS-->
    <h1  class="display-4 text-center mt-1">OFERTAS COSTA CRUCEROS</h1>
    <div id="fondo_ofe_costa" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/costa_cru/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/costa_cru/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/costa_cru/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/costa_cru/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/costa_cru/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/costa_cru/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de OFERTAS COSTA CRUCEROS -->
  </div>
  <div class="tab-pane fade" id="norweigan" role="tabpanel" aria-labelledby="norweigan-tab">
    <!-- INICIO Carousel OFERTAS COSTA CRUCEROS-->
    <h1  class="display-4 text-center mt-5">OFERTAS NORWEIGAN</h1>
    <div id="fondo_ofe_norw" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/norweigan/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/norweigan/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/norweigan/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/norweigan/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/norweigan/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/norweigan/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de OFERTAS norweigan -->
  </div>
</div>

    <!-- FIN CAROUSEL OFERTAS TOP COMPAÑIAS -->

        <!-- INICIO Carousel transatlantico-->
        <h1  class="display-4 text-center mt-5">TRANSATLANTICO</h1>
    <div id="fondo_ofe_tran" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/trans_at/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/trans_at/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/trans_at/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/trans_at/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/trans_at/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/trans_at/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de transatlantico -->

            <!-- INICIO Carousel VUELTA AL MUNDO-->
            <h1  class="display-4 text-center mt-5">VUELTA AL MUNDO</h1>
    <div id="fondo_cru_vue" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/vuelta/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/vuelta/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/vuelta/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/vuelta/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/vuelta/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/vuelta/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de VUELTA AL MUNDO -->
     <!-- Inicio de imagen fade in -->
<h1  class="display-4 text-center mt-5" style="font-size: 40px;">Top ofertas</h1>
<div class="container-fluid mt-4">
  <div class="row paquetes">
    <div class="col-md-4 conta">
      <h4 class="text-white centrado">Yates de lujo</h4>
      <img src="./img/cruceros/otros/1.jpg" class="rounded imag">
      <div class="overlay">
        <div class="text">
          <p>Oferta</p>
          <button type="button" class="btn btn-outline-warning">Ver más</button>
        </div>
      </div>
    </div>
    <div class="col-md-4 conta">
      <h4 class="text-white centrado">Yates de lujo</h4>
      <img src="./img/cruceros/otros/2.jpg" class="rounded imag">
      <div class="overlay">
        <div class="text">
          <p>Oferta</p>
          <button type="button" class="btn btn-outline-warning">Ver más</button>
        </div>
      </div>
    </div>

    <div class="col-md-4 conta">
      <h4 class="text-white centrado">Yates de lujo</h4>
      <img src="./img/cruceros/otros/3.jpg" class="rounded imag">
      <div class="overlay">
        <div class="text">
          <p>Oferta</p>
          <button type="button" class="btn btn-outline-warning">Ver más</button>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-3 paquetes">
    <div class="col-md-4 conta">
      <h4 class="text-white centrado">Yates de lujo</h4>
      <img src="./img/cruceros/otros/4.jpg" class="rounded imag">
      <div class="overlay">
        <div class="text">
          <p>Oferta</p>
          <button type="button" class="btn btn-outline-warning">Ver más</button>
        </div>

      </div>
    </div>
    <div class="col-md-4 conta">
      <h4 class="text-white centrado">Yates de lujo</h4>
      <img src="./img/cruceros/otros/5.jpg" class="rounded imag">
      <div class="overlay">
        <div class="text">
          <p>Oferta</p>
          <button type="button" class="btn btn-outline-warning">Ver más</button>
        </div>
      </div>
    </div>

    <div class="col-md-4 conta">
      <h4 class="text-white centrado">Yates de lujo</h4>
      <img src="./img/cruceros/otros/6.jpg" class="rounded imag">
      <div class="overlay">
        <div class="text">
          <p>Oferta</p>
          <button type="button" class="btn btn-outline-warning">Ver más</button>
        </div>
      </div>
    </div>
  </div>

    <!-- Fin de imagen fade in -->

    <!-- INICIO Carousel yates y cruceros de lujo-->
    <h1  class="display-4 text-center mt-5">YATES & CRUCEROS DE LUJO</h1>
    <div id="fondo_cru_lujo" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/lujo/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/lujo/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/lujo/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/lujo/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/lujo/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/lujo/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de yates y cruceros de lujo -->

<!-- // INICIO CAROUSEL DESTINO CARIBE -->
<h1 class="display-4 text-center font-weight-bold mt-5" style="font-size: 40px;">DESTINOS CARIBE</h1>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="cuba-tab" data-toggle="tab" href="#cuba" role="tab" aria-controls="cuba" aria-selected="true">CUBA</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="bahamas-tab" data-toggle="tab" href="#bahamas" role="tab" aria-controls="bahamas" aria-selected="false">CARIBE - BAHAMAS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="mexico-tab" data-toggle="tab" href="#mexico" role="tab" aria-controls="mexico" aria-selected="false">CARIBE MEXICO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="antillas-tab" data-toggle="tab" href="#antillas" role="tab" aria-controls="antillas" aria-selected="false">CARIBE ANTILLAS</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="cuba" role="tabpanel" aria-labelledby="cuba-tab">
    <!-- INICIO Carousel cuba-->
    <h1  class="display-4 text-center mt-1">CUBA</h1>
    <div id="fondo_cru_cuba" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/cuba/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/cuba/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/cuba/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/cuba/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/cuba/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/cuba/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de cuba -->
  </div>
  <div class="tab-pane fade" id="bahamas" role="tabpanel" aria-labelledby="bahamas-tab">
    <!-- INICIO Carousel CARIBE - BAHAMAS -->
    <h1  class="display-4 text-center mt-1">CARIBE - BAHAMAS</h1>
    <div id="fondo_cru_caribe" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/bahamas/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/bahamas/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/bahamas/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/bahamas/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/bahamas/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/bahamas/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de bahamas -->
  </div>
  <div class="tab-pane fade" id="mexico" role="tabpanel" aria-labelledby="mexico-tab">
    <!-- INICIO Carousel CARIBE - mexico -->
    <h1  class="display-4 text-center mt-1">CARIBE - MEXICO</h1>
    <div id="fondo_cru_mexico" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/mexico/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/mexico/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/mexico/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/mexico/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/mexico/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/mexico/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de mexico -->
  </div>
  <div class="tab-pane fade" id="antillas" role="tabpanel" aria-labelledby="antillas-tab">
    <!-- INICIO Carousel CARIBE - ANTILLAS -->
    <h1  class="display-4 text-center mt-1">CARIBE - ANTILLAS</h1>
    <div id="fondo_cru_antil" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/antillas/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/antillas/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/antillas/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/antillas/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/antillas/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/antillas/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de antillas -->
  </div>
</div>
<!-- // FIN CAROUSEL DESTINO CARIBE -->


<!-- // INICIO CAROUSEL DESTINO EUROPA -->

<h1 class="display-4 text-center font-weight-bold mt-5" style="font-size: 40px;">DESTINOS EUROPA</h1>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="medit-tab" data-toggle="tab" href="#medit" role="tab" aria-controls="medit" aria-selected="true">MEDITERRANEO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="grieg-tab" data-toggle="tab" href="#grieg" role="tab" aria-controls="grieg" aria-selected="false">ISLAS GRIEGAS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="nort-tab" data-toggle="tab" href="#nort" role="tab" aria-controls="nort" aria-selected="false">EUROPA NORTE</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="atlantico-tab" data-toggle="tab" href="#atlantico" role="tab" aria-controls="atlantico" aria-selected="false">ATLANTICO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="adriatico-tab" data-toggle="tab" href="#adriatico" role="tab" aria-controls="adriatico" aria-selected="false">ADRIATICO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="canarias-tab" data-toggle="tab" href="#canarias" role="tab" aria-controls="canarias" aria-selected="false">ISLAS CANARIAS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="mar_balti-tab" data-toggle="tab" href="#mar_balti" role="tab" aria-controls="mar_balti" aria-selected="false">MAR BALTICO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="fiordos-tab" data-toggle="tab" href="#fiordos" role="tab" aria-controls="fiordos" aria-selected="false">FIORDOS y ESCANDINAVIA</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="baleares-tab" data-toggle="tab" href="#baleares" role="tab" aria-controls="baleares" aria-selected="false">ISLAS BALEARES</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="medit" role="tabpanel" aria-labelledby="medit-tab">
    <!-- INICIO Carousel mediterraneo -  -->
    <h1  class="display-4 text-center mt-1">MEDITERRANEO</h1>
    <div id="fondo_cru_medi" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/medit/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/medit/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/medit/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/medit/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/medit/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/medit/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de mediterraneo -->
  </div>
  <div class="tab-pane fade" id="grieg" role="tabpanel" aria-labelledby="grieg-tab">
    <!-- INICIO Carousel istlas griegas -  -->
    <h1  class="display-4 text-center mt-1">ISLAS GRIEGAS</h1>
    <div id="fondo_cru_isl_grie" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/grieg/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/grieg/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/grieg/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/grieg/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/grieg/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/grieg/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de islas griegas -->
  </div>
  <div class="tab-pane fade" id="nort" role="tabpanel" aria-labelledby="nort-tab">
    <!-- INICIO Carousel EUROPA NORTE -  -->
    <h1  class="display-4 text-center mt-1">EUROPA NORTE</h1>
    <div id="fondo_cru_eur_nort" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/norte/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/norte/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/norte/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/norte/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/norte/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/norte/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de EUROPA NORTE -->
  </div>
  <div class="tab-pane fade" id="atlantico" role="tabpanel" aria-labelledby="atlantico-tab">
    <!-- INICIO Carousel ATLANTICO -  -->
    <h1  class="display-4 text-center mt-1">ATLANTICO</h1>
    <div id="fondo_cru_atlan" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/atlantico/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/atlantico/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/atlantico/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/atlantico/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/atlantico/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/atlantico/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de atlantico -->
  </div>
  <div class="tab-pane fade" id="adriatico" role="tabpanel" aria-labelledby="adriatico-tab">
    <!-- INICIO Carousel adriatico -  -->
    <h1  class="display-4 text-center mt-1">ADRIATICO</h1>
    <div id="fondo_cru_adriat" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/adriatico/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/adriatico/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/adriatico/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/adriatico/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/adriatico/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/adriatico/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de adriatico -->
  </div>
  <div class="tab-pane fade" id="canarias" role="tabpanel" aria-labelledby="canarias-tab">
    <!-- INICIO Carousel CANARIAS -  -->
    <h1  class="display-4 text-center mt-1">ISLAS CANARIAS</h1>
    <div id="fondo_cru_canari" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/canarias/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/canarias/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/canarias/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/canarias/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/canarias/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/canarias/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de canarias -->
  </div>
  <div class="tab-pane fade" id="mar_balti" role="tabpanel" aria-labelledby="mar_balti-tab">
    <!-- INICIO Carousel mar baltico -  -->
    <h1  class="display-4 text-center mt-1">MAR BALTICO</h1>
    <div id="fondo_cru_baltico" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/baltic/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/baltic/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/baltic/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/baltic/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/baltic/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/baltic/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de mar baltico -->
  </div>
  <div class="tab-pane fade" id="fiordos" role="tabpanel" aria-labelledby="fiordos-tab">
    <!-- INICIO Carousel FIORDOS y ESCANDINAVIA -  -->
    <h1  class="display-4 text-center mt-1">FIORDOS Y ESCANDINAVIA</h1>
    <div id="fondo_cru_fiordos" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/fiordos/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/fiordos/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/fiordos/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/fiordos/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/fiordos/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/fiordos/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de FIORDOS y ESCANDINAVIA -->
  </div>
  <div class="tab-pane fade" id="baleares" role="tabpanel" aria-labelledby="baleares-tab">
    <!-- INICIO Carousel ISLAS BALEARES -  -->
    <h1  class="display-4 text-center mt-1">ISLAS BALEARES</h1>
    <div id="fondo_cru_bale" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/baleares/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/baleares/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/baleares/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/baleares/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/baleares/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/baleares/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de ISLAS BALEARES -->
  </div>
</div>

<!-- // FIN CAROUSEL DESTINO EUROPA -->
<!-- // INICIO CAROUSEL DESTINOS AMERICA -->

<h1 class="display-4 text-center font-weight-bold mt-5" style="font-size: 40px;">DESTINOS AMERICA</h1>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="suda-tab" data-toggle="tab" href="#suda" role="tab" aria-controls="suda" aria-selected="true">SUDAMERICA</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="canal-tab" data-toggle="tab" href="#canal" role="tab" aria-controls="canal" aria-selected="false">CANAL DE PANAMA</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="brasil-tab" data-toggle="tab" href="#brasil" role="tab" aria-controls="brasil" aria-selected="false">BRASIL</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="america-tab" data-toggle="tab" href="#america" role="tab" aria-controls="america" aria-selected="false">AMERICA NORTE</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="bermudas-tab" data-toggle="tab" href="#bermudas" role="tab" aria-controls="bermudas" aria-selected="false">CANADA - BERMUDAS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="alaska-tab" data-toggle="tab" href="#alaska" role="tab" aria-controls="alaska" aria-selected="false">ALASKA</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="suda" role="tabpanel" aria-labelledby="suda-tab">
    <!-- INICIO Carousel SUDAMERICA -  -->
    <h1  class="display-4 text-center mt-1">SUDAMERICA</h1>
    <div id="fondo_cru_sudame" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/suda/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/suda/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/suda/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/suda/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/suda/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/suda/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de SUDAMERICA -->
  </div>
  <div class="tab-pane fade" id="canal" role="tabpanel" aria-labelledby="canal-tab">
    <!-- INICIO Carousel CANAL DE PANAMA -  -->
    <h1  class="display-4 text-center mt-1">CANAL DE PANAMA</h1>
    <div id="fondo_cru_canal_pana" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/canal/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/canal/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/canal/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/canal/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/canal/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/canal/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de CANAL DE PANAMA -->
  </div>
  <div class="tab-pane fade" id="brasil" role="tabpanel" aria-labelledby="brasil-tab">
    <!-- INICIO Carousel BRASIL -  -->
    <h1  class="display-4 text-center mt-1">BRASIL</h1>
    <div id="fondo_cru_brasil" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/brasil/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/brasil/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/brasil/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/brasil/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/brasil/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/brasil/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de BRASIL -->
  </div>
  <div class="tab-pane fade" id="america" role="tabpanel" aria-labelledby="america-tab">
    <!-- INICIO Carousel AMERICA NORTE -  -->
    <h1  class="display-4 text-center mt-1">AMERICA NORTE</h1>
    <div id="fondo_cru_ame_nort" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/america/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/america/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/america/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/america/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/america/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/america/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de AMERICA NORTE -->
  </div>
  <div class="tab-pane fade" id="bermudas" role="tabpanel" aria-labelledby="bermudas-tab">
    <!-- INICIO Carousel CANADA - BERMUDAS -  -->
    <h1  class="display-4 text-center mt-1">CANADA - BERMUDAS</h1>
    <div id="fondo_cru_cana_berm" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/bermudas/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/bermudas/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/bermudas/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/bermudas/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/bermudas/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/bermudas/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de CANADA - BERMUDAS -->
  </div>
  <div class="tab-pane fade" id="alaska" role="tabpanel" aria-labelledby="alaska-tab">
    <!-- INICIO Carousel ALASKA -  -->
    <h1  class="display-4 text-center mt-1">ALASKA</h1>
    <div id="fondo_cru_alaska" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/alaska/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/alaska/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/alaska/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/alaska/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/alaska/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/alaska/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de ALASKA -->
  </div>
</div>

<!-- // FIN CAROUSEL DESTINOS AMERICA -->
<!-- // INICIO CAROUSEL DESTINOS ORIENTALES -->

<h1 class="display-4 text-center font-weight-bold mt-5" style="font-size: 40px;">DESTINOS ORIENTALES</h1>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="rojo-tab" data-toggle="tab" href="#rojo" role="tab" aria-controls="rojo" aria-selected="true">MAR ROJO/OCEANO INDICO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="asia-tab" data-toggle="tab" href="#asia" role="tab" aria-controls="asia" aria-selected="false">ASIA</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="dubai-tab" data-toggle="tab" href="#dubai" role="tab" aria-controls="dubai" aria-selected="false">ORIENTE MEDIO - DUBAI</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="seychelles-tab" data-toggle="tab" href="#seychelles" role="tab" aria-controls="seychelles" aria-selected="false">SEYCHELLES</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="rojo" role="tabpanel" aria-labelledby="rojo-tab">
    <!-- INICIO Carousel rojo -  -->
    <h1  class="display-4 text-center mt-1">MAR ROJO/OCEANO INDICO</h1>
    <div id="fondo_cru_mar_rojo" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/rojo/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/rojo/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/rojo/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/rojo/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/rojo/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/rojo/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de rojo -->
  </div>
  <div class="tab-pane fade" id="asia" role="tabpanel" aria-labelledby="asia-tab">
    <!-- INICIO Carousel ASIA -  -->
    <h1  class="display-4 text-center mt-1">ASIA</h1>
    <div id="fondo_cru_asia" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/asia/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/asia/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/asia/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/asia/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/asia/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/asia/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de ASIA -->
  </div>
  <div class="tab-pane fade" id="dubai" role="tabpanel" aria-labelledby="dubai-tab">
    <!-- INICIO Carousel ORIENTE MEDIO - DUBAI -  -->
    <h1  class="display-4 text-center mt-1">ORIENTE MEDIO - DUBAI</h1>
    <div id="fondo_cru_dubai" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/dubai/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/dubai/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/dubai/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/dubai/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/dubai/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/dubai/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de ORIENTE MEDIO - DUBAI -->
  </div>
  <div class="tab-pane fade" id="seychelles" role="tabpanel" aria-labelledby="seychelles-tab">
    <!-- INICIO Carousel SEYCHELLES -  -->
    <h1  class="display-4 text-center mt-1">SEYCHELLES</h1>
    <div id="fondo_cru_sey" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/seychelles/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/seychelles/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/seychelles/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/seychelles/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/seychelles/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/seychelles/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de SEYCHELLES -->
  </div>
</div>

<!-- // FIN CAROUSEL DESTINOS ORIENTALES -->

<!-- // INICIO CAROUSEL CRUCEROS FLUVIALES  -->

<h1 class="display-4 text-center font-weight-bold mt-5" style="font-size: 40px;">CRUCEROS FLUVIALES</h1>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="danu-tab" data-toggle="tab" href="#danu" role="tab" aria-controls="danu" aria-selected="true">DANUBIO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="elba-tab" data-toggle="tab" href="#elba" role="tab" aria-controls="elba" aria-selected="false">ELBA</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="guadiana-tab" data-toggle="tab" href="#guadiana" role="tab" aria-controls="guadiana" aria-selected="false">GUADALQUIVIR - GUADIANA</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="rin-tab" data-toggle="tab" href="#rin" role="tab" aria-controls="rin" aria-selected="false">RIN</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="rodano-tab" data-toggle="tab" href="#rodano" role="tab" aria-controls="rodano" aria-selected="false">RODANO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="sena-tab" data-toggle="tab" href="#sena" role="tab" aria-controls="sena" aria-selected="false">SENA</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="po-tab" data-toggle="tab" href="#po" role="tab" aria-controls="po" aria-selected="false">PO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="loira-tab" data-toggle="tab" href="#loira" role="tab" aria-controls="loira" aria-selected="false">LOIRA</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="duero-tab" data-toggle="tab" href="#duero" role="tab" aria-controls="duero" aria-selected="false">DUERO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="nilo-tab" data-toggle="tab" href="#nilo" role="tab" aria-controls="nilo" aria-selected="false">NILO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="chobe-tab" data-toggle="tab" href="#chobe" role="tab" aria-controls="chobe" aria-selected="false">CHOBE</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="volga-tab" data-toggle="tab" href="#volga" role="tab" aria-controls="volga" aria-selected="false">VOLGA</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="san_lorenzo-tab" data-toggle="tab" href="#san_lorenzo" role="tab" aria-controls="san_lorenzo" aria-selected="false">SAN LORENZO</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="danu" role="tabpanel" aria-labelledby="danu-tab">
    <!-- INICIO Carousel DANUBIO -  -->
    <h1  class="display-4 text-center mt-1">DANUBIO</h1>
    <div id="fondo_cru_danu" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/danubio/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/danubio/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/danubio/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/danubio/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/danubio/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/danubio/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de DANUBIO -->
  </div>
  <div class="tab-pane fade" id="elba" role="tabpanel" aria-labelledby="elba-tab">
    <!-- INICIO Carousel ELBA -  -->
    <h1  class="display-4 text-center mt-1">ELBA</h1>
    <div id="fondo_cru_elba" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/elba/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/elba/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/elba/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/elba/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/elba/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/elba/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de ELBA -->
  </div>
  <div class="tab-pane fade" id="guadiana" role="tabpanel" aria-labelledby="guadiana-tab">
    <!-- INICIO Carousel GUADALQUIVIR - GUADIANA -  -->
    <h1  class="display-4 text-center mt-1">GUADALQUIVIR - GUADIANA</h1>
    <div id="fondo_cru_guadal" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/guadiana/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/guadiana/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/guadiana/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/guadiana/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/guadiana/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/guadiana/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de GUADALQUIVIR - GUADIANA -->
  </div>
  <div class="tab-pane fade" id="rin" role="tabpanel" aria-labelledby="rin-tab">
    <!-- INICIO Carousel RIN -  -->
    <h1  class="display-4 text-center mt-1">RIN</h1>
    <div id="fondo_cru_rin" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/rin/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/rin/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/rin/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/rin/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/rin/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/rin/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de RIN -->
  </div>
  <div class="tab-pane fade" id="rodano" role="tabpanel" aria-labelledby="rodano-tab">
    <!-- INICIO Carousel RODANO -  -->
    <h1  class="display-4 text-center mt-1">RODANO</h1>
    <div id="fondo_cru_roda" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/rodano/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/rodano/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/rodano/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/rodano/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/rodano/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/rodano/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de RODANO -->
  </div>
  <div class="tab-pane fade" id="sena" role="tabpanel" aria-labelledby="sena-tab">
    <!-- INICIO Carousel SENA -  -->
    <h1  class="display-4 text-center mt-1">SENA</h1>
    <div id="fondo_cru_sena" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/sena/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/sena/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/sena/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/sena/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/sena/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/sena/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de SENA -->
  </div>
  <div class="tab-pane fade" id="po" role="tabpanel" aria-labelledby="po-tab">
    <!-- INICIO Carousel PO -  -->
    <h1  class="display-4 text-center mt-1">PO</h1>
    <div id="fondo_cru_po" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/po/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/po/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/po/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/po/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/po/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/po/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de PO -->
  </div>
  <div class="tab-pane fade" id="loira" role="tabpanel" aria-labelledby="loira-tab">
    <!-- INICIO Carousel LOIRA -  -->
    <h1  class="display-4 text-center mt-1">LOIRA</h1>
    <div id="fondo_cru_loira" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/loira/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/loira/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/loira/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/loira/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/loira/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/loira/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de LOIRA -->
  </div>
  <div class="tab-pane fade" id="duero" role="tabpanel" aria-labelledby="duero-tab">
    <!-- INICIO Carousel DUERO -  -->
    <h1  class="display-4 text-center mt-1">DUERO</h1>
    <div id="fondo_cru_duero" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/duero/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/duero/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/duero/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/duero/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/duero/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/duero/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de DUERO -->
  </div>
  <div class="tab-pane fade" id="nilo" role="tabpanel" aria-labelledby="nilo-tab">
    <!-- INICIO Carousel NILO -  -->
    <h1  class="display-4 text-center mt-1">NILO</h1>
    <div id="fondo_cru_nilo" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/nilo/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/nilo/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/nilo/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/nilo/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/nilo/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/nilo/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de NILO -->
  </div>
  <div class="tab-pane fade" id="chobe" role="tabpanel" aria-labelledby="chobe-tab">
    <!-- INICIO Carousel CHOBE -  -->
    <h1  class="display-4 text-center mt-1">CHOBE</h1>
    <div id="fondo_cru_chobe" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/chobe/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/chobe/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/chobe/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/chobe/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/chobe/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/chobe/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de CHOBE -->
  </div>
  <div class="tab-pane fade" id="volga" role="tabpanel" aria-labelledby="volga-tab">
    <!-- INICIO Carousel VOLGA -  -->
    <h1  class="display-4 text-center mt-1">VOLGA</h1>
    <div id="fondo_cru_volga" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/volga/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/volga/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/volga/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/volga/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/volga/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/volga/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de VOLGA -->
  </div>
  <div class="tab-pane fade" id="san_lorenzo" role="tabpanel" aria-labelledby="san_lorenzo-tab">
    <!-- INICIO Carousel SAN LORENZO -  -->
    <h1  class="display-4 text-center mt-1">SAN LORENZO</h1>
    <div id="fondo_cru_san_lore" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/san_loren/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/san_loren/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/san_loren/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/san_loren/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/san_loren/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/san_loren/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de SAN LORENZO -->
  </div>
</div>
<!-- // FIN CAROUSEL CRUCEROS FLUVIALES -->


<!-- // INICIO CAROUSEL REGIONES POLARES -->

<h1 class="display-4 text-center font-weight-bold mt-5" style="font-size: 40px;">REGIONES POLARES</h1>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="antar-tab" data-toggle="tab" href="#antar" role="tab" aria-controls="antar" aria-selected="true">ANTARTICO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="cabo-tab" data-toggle="tab" href="#cabo" role="tab" aria-controls="cabo" aria-selected="false">CABO NORTE</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="groenlandia-tab" data-toggle="tab" href="#groenlandia" role="tab" aria-controls="groenlandia" aria-selected="false">GROENLANDIA</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="artico-tab" data-toggle="tab" href="#artico" role="tab" aria-controls="artico" aria-selected="false">ARTICO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="spitzberg-tab" data-toggle="tab" href="#spitzberg" role="tab" aria-controls="spitzberg" aria-selected="false">SPITZBERG</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="antar" role="tabpanel" aria-labelledby="antar-tab">
    <!-- INICIO Carousel ANTARTICO -  -->
    <h1  class="display-4 text-center mt-1">ANTARTICO</h1>
    <div id="fondo_cru_antarico" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/antar/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/antar/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/antar/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/antar/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/antar/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/antar/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de ANTARTICO -->
  </div>
  <div class="tab-pane fade" id="cabo" role="tabpanel" aria-labelledby="cabo-tab">
    <!-- INICIO Carousel CABO NORTE -  -->
    <h1  class="display-4 text-center mt-1">CABO NORTE</h1>
    <div id="fondo_cru_cab_nort" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/cabo/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/cabo/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/cabo/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/cabo/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/cabo/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/cabo/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de CABO NORTE -->
  </div>
  <div class="tab-pane fade" id="groenlandia" role="tabpanel" aria-labelledby="groenlandia-tab">
    <!-- INICIO Carousel GROENLANDIA -  -->
    <h1  class="display-4 text-center mt-1">GROENLANDIA</h1>
    <div id="fondo_cru_groe" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/groenlandia/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/groenlandia/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/groenlandia/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/groenlandia/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/groenlandia/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/groenlandia/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de GROENLANDIA -->
  </div>
  <div class="tab-pane fade" id="artico" role="tabpanel" aria-labelledby="artico-tab">
    <!-- INICIO Carousel ARTICO -  -->
    <h1  class="display-4 text-center mt-1">ARTICO</h1>
    <div id="fondo_cru_artico" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/artico/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/artico/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/artico/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/artico/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/artico/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/artico/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de ARTICO -->
  </div>
  <div class="tab-pane fade" id="spitzberg" role="tabpanel" aria-labelledby="spitzberg-tab">
    <!-- INICIO Carousel SPITZBERG -  -->
    <h1  class="display-4 text-center mt-1">SPITZBERG</h1>
    <div id="fondo_cru_spit" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/spitzberg/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/spitzberg/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/spitzberg/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/spitzberg/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/spitzberg/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/spitzberg/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de SPITZBERG -->
  </div>
</div>

<!-- // FIN CAROUSEL REGIONES POLARES -->

<!-- // INICIO CAROUSEL PACIFICO  -->
<h1 class="display-4 text-center font-weight-bold mt-5" style="font-size: 40px;">PACIFICO</h1>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="hawai-tab" data-toggle="tab" href="#hawai" role="tab" aria-controls="hawai" aria-selected="true">HAWAI</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="tahiti-tab" data-toggle="tab" href="#tahiti" role="tab" aria-controls="tahiti" aria-selected="false">TAHITI</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="zelanda-tab" data-toggle="tab" href="#zelanda" role="tab" aria-controls="zelanda" aria-selected="false">AUSTRALIA - NUEVA ZELANDA</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="riviera-tab" data-toggle="tab" href="#riviera" role="tab" aria-controls="riviera" aria-selected="false">RIVIERA MEXICANA</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="galapagos-tab" data-toggle="tab" href="#galapagos" role="tab" aria-controls="galapagos" aria-selected="false">GALAPAGOS</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="hawai" role="tabpanel" aria-labelledby="hawai-tab">
    <!-- INICIO Carousel HAWAI -  -->
    <h1  class="display-4 text-center mt-5">HAWAI</h1>
    <div id="fondo_cru_hawai" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/hawai/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/hawai/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/hawai/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/hawai/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/hawai/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/hawai/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de HAWAI -->
  </div>
  <div class="tab-pane fade" id="tahiti" role="tabpanel" aria-labelledby="tahiti-tab">
    <!-- INICIO Carousel TAHITI -  -->
    <h1  class="display-4 text-center mt-1">TAHITI</h1>
    <div id="fondo_cru_tahi" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/tahiti/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/tahiti/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/tahiti/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/tahiti/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/tahiti/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/tahiti/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de TAHITI -->
  </div>
  <div class="tab-pane fade" id="zelanda" role="tabpanel" aria-labelledby="zelanda-tab">
    <!-- INICIO Carousel AUSTRALIA - NUEVA ZELANDA -  -->
    <h1  class="display-4 text-center mt-1">AUSTRALIA - NUEVA ZELANDA</h1>
    <div id="fondo_cru_nuev_zeland" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/zelanda/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/zelanda/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/zelanda/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/zelanda/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/zelanda/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/zelanda/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de AUSTRALIA - NUEVA ZELANDA -->
  </div>
  <div class="tab-pane fade" id="riviera" role="tabpanel" aria-labelledby="riviera-tab">
    <!-- INICIO Carousel RIVIERA MEXICANA -  -->
    <h1  class="display-4 text-center mt-1">RIVIERA MEXICANA</h1>
    <div id="fondo_cru_riv_mexic" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/riviera/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/riviera/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/riviera/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/riviera/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/riviera/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/riviera/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de RIVIERA MEXICANA -->
  </div>
  <div class="tab-pane fade" id="galapagos" role="tabpanel" aria-labelledby="galapagos-tab">
    <!-- INICIO Carousel GALAPAGOS -  -->
    <h1  class="display-4 text-center mt-1">GALAPAGOS</h1>
    <div id="fondo_cru_galapag" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/galapagos/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/galapagos/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/galapagos/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/galapagos/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/galapagos/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/galapagos/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de GALAPAGOS -->
  </div>
</div>

<!-- // FIN CAROUSEL PACIFICO  -->


<!-- // INICIO CAROUSEL AFRICA  -->

<h1 class="display-4 text-center font-weight-bold mt-5" style="font-size: 40px;">AFRICA</h1>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="sudafrica-tab" data-toggle="tab" href="#sudafrica" role="tab" aria-controls="sudafrica" aria-selected="true">SUDAFRICA</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="africa_cen-tab" data-toggle="tab" href="#africa_cen" role="tab" aria-controls="africa_cen" aria-selected="false">AFRICA CENTRAL</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="sudafrica" role="tabpanel" aria-labelledby="sudafrica-tab">
    <!-- INICIO Carousel SUDAFRICA -  -->
    <h1  class="display-4 text-center mt-1">SUDAFRICA</h1>
    <div id="fondo_cru_sudaf" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/sudafrica/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/sudafrica/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/sudafrica/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/sudafrica/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/sudafrica/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/sudafrica/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de SUDAFRICA -->
  </div>
  <div class="tab-pane fade" id="africa_cen" role="tabpanel" aria-labelledby="africa_cen-tab">
    <!-- INICIO Carousel AFRICA CENTRAL -  -->
    <h1  class="display-4 text-center mt-1">AFRICA CENTRAL</h1>
    <div id="fondo_cru_afr_cent" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/africa_cent/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/cruceros/africa_cent/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/africa_cent/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/africa_cent/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/africa_cent/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/cruceros/africa_cent/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de AFRICA CENTRAL -->
  </div>
</div>

<!-- // FIN CAROUSEL AFRICA  -->
<?php
    include_once 'footer.php';
?>
<script type="text/javascript">
$(document).ready(function(){
	$('.icons').slick({
		//Basic settings
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		arrows: true,
		swipeToSlide: true,
		touchMove: true,
		ltr: true,
		touchThreshold: 2,
		variableWidth: true,
		dots: false,
			pauseOnHover: false,
			responsive: [{
			breakpoint: 768,
			settings: {
				slidesToShow: 3
			}
		}, {
			breakpoint: 520,
			settings: {
				slidesToShow: 2
			}
		}]
	});
});
</script>

</body>
    <script src="./js/js/pooper.min.js" ></script>
    <script src="./js/js/bootstrap.min.js"></script>
    <script src="./js/js/jquery-ui.js"></script>
    <script src="./js/images.js"></script>

</body>
</html>
