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
  <link rel="stylesheet" type="text/css" href="css/fondos.css">
  <link rel="stylesheet" type="text/css" href="css/internas.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>

<body>

<?php
    include_once 'headerBlack.php';
    include_once 'headerWhite.php';
?>

<!-- // Slider -->

<div id="carouselParques" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselParques" data-slide-to="0" class="active"></li>
    <li data-target="#carouselParques" data-slide-to="1"></li>
    <li data-target="#carouselParques" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./img/parques/principal/1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/parques/principal/2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/parques/principal/3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselParques" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselParques" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- // FIn Slider -->
<h1 class="display-3 text-center">Parques</h1>
  <div class="container">
    <p>
    Encuentra y descubre una variada selección de parques temáticos en todo el mundo. Aprovecha los mejores descuentos y ofertas en los parques de tu preferencia y disfruta de una experiencia inolvidable solo o en compañía de tus amigos o familia. Elige entre la mejor oferta de parques temáticos, acuáticos, naturales o Disney. ¡Consulta, Cotiza y Reserva ahora! 
    Compara y cotiza gratis a través de nuestro servicio de agentes online y asesor en el chat reservando rápido, fácil y seguro. 
    </p>
  </div>
    <!-- INICIO Carousel de parques naturales -->    
    <h1  class="display-4 text-center mt-1">Parques Naturales</h1>
    <div id="fondo_par_natu" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de parques naturales --> 

    <!-- INICIO Carousel de parques tematicos -->    
    <h1  class="display-4 text-center mt-5">Parques Tematicos</h1>
    <div id="fondo_par_tema" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/1t.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/2t.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/3t.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/4t.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/5t.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/6t.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de parques tematicos --> 

    <!-- INICIO Carousel de acuarios -->    
    <h1  class="display-4 text-center mt-5">Acuarios</h1>
    <div id="fondo_par_acu" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/1a.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/2a.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/3a.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/4a.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/5a.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/6a.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de acuarios --> 

    <!-- INICIO Carousel de parques acuaticos -->    
    <h1  class="display-4 text-center mt-5">Parques acuaticos</h1>
    <div id="fondo_par_acuatic" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/1c.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/2c.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/3c.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/4c.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/5c.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/6c.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de parques acuaticos --> 

    <h1  class="display-3 text-center mt-5 font-weight-bold">Parques Disney</h1>

    <!-- INICIO CAROUSEL DE DISNEY NORTEAMERICA-->
    <h1  class="display-4 text-center mt-5 font-weight-bold" style="font-size: 50px;">Disney Norteamerica</h1>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="world-tab" data-toggle="tab" href="#world" role="tab" aria-controls="world" aria-selected="true">WALT DISNEY WORLD RESORT FLORIDA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="land-tab" data-toggle="tab" href="#land" role="tab" aria-controls="land" aria-selected="false">DISNEY LAND RESORT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="cruise-tab" data-toggle="tab" href="#cruise" role="tab" aria-controls="cruise" aria-selected="false">DISNEY CRUISE LINE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="resort-tab" data-toggle="tab" href="#resort" role="tab" aria-controls="resort" aria-selected="false">AULANI RESORT HAWAI</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="vacation-tab" data-toggle="tab" href="#vacation" role="tab" aria-controls="vacation" aria-selected="false">DISNEY VACATION CLUB</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="adventures-tab" data-toggle="tab" href="#adventures" role="tab" aria-controls="adventures" aria-selected="false">ADVENTURES BY DISNEY</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="world" role="tabpanel" aria-labelledby="world-tab">
          <!-- INICIO Carousel WALT DISNEY WORLD RESORT FLORIDA -->    
    <h1  class="display-4 text-center mt-1">WALT DISNEY WORLD RESORT FLORIDA</h1>
    <div id="fondo_par_florida" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/disney/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/disney/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN WALT DISNEY WORLD RESORT FLORIDA --> 
      </div>
      <div class="tab-pane fade" id="land" role="tabpanel" aria-labelledby="land-tab">
          <!-- INICIO Carousel DISNEY LAND RESORT -->    
          <h1  class="display-4 text-center mt-1">DISNEY LAND RESORT</h1>
    <div id="fondo_par_land" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/disney/1land.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/disney/2land.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney/3land.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney/4land.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney/5land.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney/6land.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN DISNEY LAND RESORT --> 
      </div>
      <div class="tab-pane fade" id="cruise" role="tabpanel" aria-labelledby="cruise-tab">
          <!-- INICIO Carousel CRUISE -->    
          <h1  class="display-4 text-center mt-1">DISNEY CRUISE LINE</h1>
    <div id="fondo_par_line" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/disney/1cruise.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/disney/2cruise.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney/3cruise.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney/4cruise.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney/5cruise.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney/6cruise.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN DISNEY CRUISE -->       
      </div>
      <div class="tab-pane fade" id="resort" role="tabpanel" aria-labelledby="resort-tab">
          <!-- INICIO Carousel AULANI RESORT HAWAI -->    
          <h1  class="display-4 text-center mt-1">AULANI RESORT HAWAI</h1>
    <div id="fondo_par_hawai" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/disney/1r.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/disney/2r.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney/3r.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney/4r.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney/5r.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney/6r.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN AULANI RESORT HAWAI -->         
      </div>
      <div class="tab-pane fade" id="vacation" role="tabpanel" aria-labelledby="vacation-tab">
          <!-- INICIO Carousel DISNEY VACATION CLUB -->    
          <h1  class="display-4 text-center mt-1">DISNEY VACATION CLUB</h1>
    <div id="fondo_par_club" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/disney/1d.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/disney/2d.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney/3d.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney/4d.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney/5d.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney/6d.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN DISNEY VACATION CLUB -->       
      </div>
      <div class="tab-pane fade" id="adventures" role="tabpanel" aria-labelledby="adventures-tab">
          <!-- INICIO Carousel ADVENTURES BY DISNEY -->    
          <h1  class="display-4 text-center mt-1">ADVENTURES BY DISNEY</h1>
    <div id="fondo_par_adventures" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/disney/1a.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/disney/2a.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney/3a.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney/4a.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney/5a.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney/6a.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN ADVENTURES BY DISNEY -->        
      </div>
    </div>
    <!-- FIN CAROUSEL DE DISNEY NORTEAMERICA-->
    <!-- INICIO CAROUSEL DE DISNEY INTERNACIONAL-->
    <h1  class="display-4 text-center mt-5 font-weight-bold" style="font-size: 50px;">Disney Internacional</h1>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="resort_int-tab" data-toggle="tab" href="#resort_int" role="tab" aria-controls="resort_int" aria-selected="true">DISNEYLAND RESORT PARIS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="tokyo-tab" data-toggle="tab" href="#tokyo" role="tab" aria-controls="tokyo" aria-selected="false">TOKYO DISNEY RESORT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="hong-tab" data-toggle="tab" href="#hong" role="tab" aria-controls="hong" aria-selected="false">HONG KONG DISNEYLAND RESORT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="shangai-tab" data-toggle="tab" href="#shangai" role="tab" aria-controls="shangai" aria-selected="false">SHANGAI DISNEY RESORT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="cruise_int-tab" data-toggle="tab" href="#cruise_int" role="tab" aria-controls="cruise_int" aria-selected="false">DISNEY CRUISE LINE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="adventures_int-tab" data-toggle="tab" href="#adventures_int" role="tab" aria-controls="adventures_int" aria-selected="false">ADVENTURES BY DISNEY</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="resort_int" role="tabpanel" aria-labelledby="resort_int-tab">
          <!-- INICIO Carousel DISNEYLAND RESORT PARIS-->    
          <h1  class="display-4 text-center mt-1">DISNEYLAND RESORT PARIS</h1>
    <div id="fondo_par_paris" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/disney_int/resort/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/disney_int/resort/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney_int/resort/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney_int/resort/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney_int/resort/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney_int/resort/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN DISNEYLAND RESORT PARIS -->         
      </div>
      <div class="tab-pane fade" id="tokyo" role="tabpanel" aria-labelledby="tokyo-tab">
          <!-- INICIO Carousel TOKYO DISNEY RESORT-->    
          <h1  class="display-4 text-center mt-1">TOKYO DISNEY RESORT</h1>
    <div id="fondo_par_resort" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/disney_int/tokyo/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/disney_int/tokyo/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney_int/tokyo/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney_int/tokyo/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney_int/tokyo/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney_int/tokyo/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN TOKYO DISNEY RESORT -->        
      </div>
      <div class="tab-pane fade" id="hong" role="tabpanel" aria-labelledby="hong-tab">
          <!-- INICIO Carousel HONG KONG DISNEYLAND RESORT-->    
          <h1  class="display-4 text-center mt-1">HONG KONG DISNEYLAND RESORT</h1>
    <div id="fondo_par_hong" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/disney_int/hong/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/disney_int/hong/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney_int/hong/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney_int/hong/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney_int/hong/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney_int/hong/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN HONG KONG DISNEYLAND RESORT -->        
      </div>
      <div class="tab-pane fade" id="shangai" role="tabpanel" aria-labelledby="shangai-tab">
          <!-- INICIO Carousel SHANGAI DISNEY RESORT-->    
          <h1  class="display-4 text-center mt-1">SHANGAI DISNEY RESORT</h1>
    <div id="fondo_par_shangai" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/disney_int/shangai/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/disney_int/shangai/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney_int/shangai/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney_int/shangai/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney_int/shangai/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney_int/shangai/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN SHANGAI DISNEY RESORT -->        
      </div>
      <div class="tab-pane fade" id="cruise_int" role="tabpanel" aria-labelledby="cruise_int-tab">
          <!-- INICIO Carousel DISNEY CRUISE LINE-->    
          <h1  class="display-4 text-center mt-1">DISNEY CRUISE LINE</h1>
    <div id="fondo_par_cruise" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/disney_int/cruise/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/disney_int/cruise/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney_int/cruise/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney_int/cruise/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney_int/cruise/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney_int/cruise/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN DISNEY CRUISE LINE -->        
      </div>
      <div class="tab-pane fade" id="adventures_int" role="tabpanel" aria-labelledby="adventures_int-tab">
          <!-- INICIO Carousel ADVENTURES BY DISNEY-->    
          <h1  class="display-4 text-center mt-1">ADVENTURES BY DISNEY</h1>
    <div id="fondo_par_advent" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/disney_int/adventures/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/parques/disney_int/adventures/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney_int/adventures/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney_int/adventures/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney_int/adventures/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/parques/disney_int/adventures/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN ADVENTURES BY DISNEY -->          
      </div>
    </div>
    <!-- FIN CAROUSEL DE DISNEY INTERNACIONAL-->



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

<?php
  include_once 'footer.php';
?>

</body>
    <script src="./js/js/pooper.min.js" ></script>
    <script src="./js/js/bootstrap.min.js"></script>
    <script src="./js/js/jquery-ui.js"></script>
    <script src="./js/images.js"></script>
</body>
</html>
