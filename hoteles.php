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
          include_once 'headerBlack.php';
          include_once 'headerWhite.php';
    ?>


<!-- // Slider -->
<div id="carouselHoteles" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselHoteles" data-slide-to="0" class="active"></li>
    <li data-target="#carouselHoteles" data-slide-to="1"></li>
    <li data-target="#carouselHoteles" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./img/hoteles/1caru.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/hoteles/2caru.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/hoteles/3caru.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselHoteles" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselHoteles" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- // FIn Slider -->
<div class="container">
<h1 class="display-3 text-center">Alojamientos</h1>
  <p>
    Proporcionamos una de las selecciones más amplias de hospedaje en línea con más de cientos de miles de establecimientos en todo el mundo. Podrás encontrar hoteles de cualquier categoría, cadenas hoteleras, hostales, casas y apartamentos en cualquier destino y lugar. Encuentra una amplia selección de ofertas exclusivas, descuentos de última hora, hoteles económicos, tarifas y precios increíbles para que ahorres tiempo y dinero. ¡Consulta, Compara y Reserva ahora!
    Compara y cotiza gratis a través de nuestro servicio de agentes online y asesor en el chat reservando rápido, fácil y seguro. 
  </p>
</div>
<!-- Inicio de fotos en fade in -->
<h1 class="text-center">Top Alojamientos</h1>
</div>
<div class="container-fluid mt-4">

  <div class="row">
    <div class="col-md-4 conta">
      <h4 class="text-white centrado">Hoteles en Barú</h4>
      <img src="./img/hoteles/1.jpg" class="rounded imag">
      <div class="overlay">
        <div class="text">
          <p>Hotel en Barú</p>
          <button type="button" class="btn btn-outline-warning">Ver más</button>
        </div>
      </div>
    </div>
    <div class="col-md-4 conta">
      <h4 class="text-white centrado">Hoteles en Bla bla bla</h4>
      <img src="./img/hoteles/2.jpg" class="rounded imag">
      <div class="overlay">
        <div class="text">
          <p>Hotel en bla bla</p>
          <button type="button" class="btn btn-outline-warning">Ver más</button>
        </div>
      </div>
    </div>

    <div class="col-md-4 conta">
      <h4 class="text-white centrado">Hoteles en ble ble ble</h4>
      <img src="./img/hoteles/3.jpg" class="rounded imag">
      <div class="overlay">
        <div class="text">
          <p>Hotel ble ble</p>
          <button type="button" class="btn btn-outline-warning">Ver más</button>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-md-4 conta">
      <h4 class="text-white centrado">Hoteles en Barú</h4>
      <img src="./img/hoteles/2.jpg" class="rounded imag">
      <div class="overlay">
        <div class="text">
          <p>Hotel en Barú</p>
          <button type="button" class="btn btn-outline-warning">Ver más</button>
        </div>

      </div>
    </div>
    <div class="col-md-4 conta">
      <h4 class="text-white centrado">Hoteles en bla bla blah</h4>
      <img src="./img/hoteles/3.jpg" class="rounded imag">
      <div class="overlay">
        <div class="text">
          <p>Hotel en bla bla</p>
          <button type="button" class="btn btn-outline-warning">Ver más</button>
        </div>
      </div>
    </div>

    <div class="col-md-4 conta">
      <h4 class="text-white centrado">Hoteles en ble ble ble</h4>
      <img src="./img/hoteles/1.jpg" class="rounded imag">
      <div class="overlay">
        <div class="text">
          <p>Hotel ble ble</p>
          <button type="button" class="btn btn-outline-warning">Ver más</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Fin de fotos en fade in -->
  <!-- Inicio de ofertas -->

  <div class="jumbotron mt-3" id="ofertas_hoteles">
    <div class="container">
      <h1 class="display-4 text-center">Oferta de hoteles</h1>
        <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action active text-center">
          Hoteles con ofertas especiales
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex justify-content-between">
            <span>Hotel 1 <small>Description</small> </span><span>$price</span>
          </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex justify-content-between">
            <span>Hotel 2 <small>Description</small> </span><span>$price</span>
          </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex justify-content-between">
            <span>Hotel 3 <small>Description</small> </span><span>$price</span>
          </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex justify-content-between">
            <span>Hotel 4 <small>Description</small> </span><span>$price</span>
          </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex justify-content-between">
            <span>Hotel 5 <small>Description</small> </span><span>$price</span>
          </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex justify-content-between">
            <span>Hotel 6 <small>Description</small> </span><span>$price</span>
          </div>
        </a>

      </div>
    </div>
  </div>
</div>
<!-- Fin de ofertas -->



<!-- Slider de destinos destacados -->

<h1 class="display-4 text-center mt-5">Hoteles destacados</h1>
<div id="fondo_hot_destacados" class="container-fluid mt-3 p-5">
  <div class="icons">
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/hoteles/1h.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre Hotel</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/hoteles/2h.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre Hotel</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/hoteles/3h.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/hoteles/4h.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/hoteles/5h.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/hoteles/6h.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- Fin slider destacados -->


<!-- // INICIO CAROUSEL ALOJAMIENTOS -->

<h1 class="display-4 text-center mt-5">Casas, Apartamentos y mucho mas</h1>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="apartamentos-tab" data-toggle="tab" href="#apartamentos" role="tab" aria-controls="apartamentos" aria-selected="true">Apartamentos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="casas-tab" data-toggle="tab" href="#casas" role="tab" aria-controls="casas" aria-selected="false">Casas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="villas-tab" data-toggle="tab" href="#villas" role="tab" aria-controls="villas" aria-selected="false">Villas y Mansiones</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="cabanas-tab" data-toggle="tab" href="#cabanas" role="tab" aria-controls="cabanas" aria-selected="false">Cabañas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="glamping-tab" data-toggle="tab" href="#glamping" role="tab" aria-controls="glamping" aria-selected="false">Glamping</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="otros-tab" data-toggle="tab" href="#otros" role="tab" aria-controls="otros" aria-selected="false">Otros alojamientos</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="apartamentos" role="tabpanel" aria-labelledby="apartamentos-tab">
  <!-- Slider de apartamentos -->

<h1 class="display-4 text-center mt-5">Apartamentos</h1>
<div class="container-fluid p-5 fondo_hot_caru_aloj">
  <div class="icons">
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/hoteles/apartamentos/1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre Hotel</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/hoteles/apartamentos/2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre Hotel</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/hoteles/apartamentos/3.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/hoteles/apartamentos/4.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/hoteles/apartamentos/5.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/hoteles/apartamentos/6.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- Fin slider apartamentos -->
  </div>
  <div class="tab-pane fade" id="casas" role="tabpanel" aria-labelledby="casas-tab">
  <!-- Slider de apartamentos -->

<h1 class="display-4 text-center mt-5">Casas</h1>
<div class="container-fluid p-5 fondo_hot_caru_aloj">
  <div class="icons">
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/hoteles/casas/1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre Hotel</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/hoteles/casas/2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre Hotel</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/hoteles/casas/3.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/hoteles/casas/4.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/hoteles/casas/5.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/hoteles/casas/6.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- Fin slider casas -->
  </div>
  <div class="tab-pane fade" id="villas" role="tabpanel" aria-labelledby="villas-tab">
   <!-- Slider de apartamentos -->

<h1 class="display-4 text-center mt-5">Villas y Mansiones</h1>
<div class="container-fluid p-5 fondo_hot_caru_aloj">
  <div class="icons">
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/hoteles/villas/1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre Hotel</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/hoteles/villas/2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre Hotel</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/hoteles/villas/3.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/hoteles/villas/4.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/hoteles/villas/5.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/hoteles/villas/6.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- Fin slider villas --> 
  </div>
  <div class="tab-pane fade" id="cabanas" role="tabpanel" aria-labelledby="cabanas-tab">
      <!-- Slider de cabanas -->

<h1 class="display-4 text-center mt-5">Cabañas</h1>
<div class="container-fluid p-5 fondo_hot_caru_aloj">
  <div class="icons">
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/hoteles/cabanas/1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre Hotel</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/hoteles/cabanas/2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre Hotel</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/hoteles/cabanas/3.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/hoteles/cabanas/4.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/hoteles/cabanas/5.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/hoteles/cabanas/6.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- Fin slider cabanas --> 
  </div>
  <div class="tab-pane fade" id="glamping" role="tabpanel" aria-labelledby="glamping-tab">
  <!-- Slider de glamping -->

<h1 class="display-4 text-center mt-5">Glamping</h1>
<div class="container-fluid p-5 fondo_hot_caru_aloj">
  <div class="icons">
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/hoteles/glamping/1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre Hotel</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/hoteles/glamping/2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre Hotel</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/hoteles/glamping/3.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/hoteles/glamping/4.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/hoteles/glamping/5.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/hoteles/glamping/6.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- Fin slider glamping --> 
  </div>
  <div class="tab-pane fade" id="otros" role="tabpanel" aria-labelledby="otros-tab">
    <!-- Slider de otros -->

<h1 class="display-4 text-center mt-5">Otros alojamientos</h1>
<div class="container-fluid p-5 fondo_hot_caru_aloj">
  <div class="icons">
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/hoteles/otros/1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre Hotel</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/hoteles/otros/2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre Hotel</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/hoteles/otros/3.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/hoteles/otros/4.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/hoteles/otros/5.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/hoteles/otros/6.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- Fin slider otros --> 
  </div>
</div>


<!-- // FIN CAROUSEL ALOJAMIENTOS -->



<!-- Slider de playas -->

<h1  class="display-4 text-center mt-5">Hoteles cerca de la playa</h1>
<div id="fondo_hot_playa" class="container-fluid mt-3 p-5">
  <div class="icons">
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/carouseles/1p.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre Hotel</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/carouseles/2p.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre Hotel</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/carouseles/3p.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/carouseles/4p.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/carouseles/5p.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/carouseles/6p.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Carousel Boutique -->

<h1  class="display-4 text-center mt-5">Hoteles boutique</h1>
<div id="fondo_hot_bout" class="container-fluid mt-3 p-5">
  <div class="icons">
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/carouseles/1b.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre Hotel</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/carouseles/2b.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre Hotel</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/carouseles/3b.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/carouseles/4b.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/carouseles/5b.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/carouseles/6b.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Carousel todo incluido -->

<h1  class="display-4 text-center mt-5">Hoteles todo incluido</h1>
<div id="fondo_hot_todo" class="container-fluid mt-3 p-5">
  <div class="icons">
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/carouseles/1td.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre Hotel</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/carouseles/2td.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre Hotel</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/carouseles/3td.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/carouseles/4td.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/carouseles/5td.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/carouseles/6td.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Carousel economico -->

<h1  class="display-4 text-center mt-5">Hoteles economicos</h1>
<div id="fondo_hot_eco" class="container-fluid mt-3 p-5">
  <div class="icons">
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/carouseles/1e.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre Hotel</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/carouseles/2e.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre Hotel</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/carouseles/3e.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/carouseles/4e.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/carouseles/5e.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/carouseles/6e.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Carousel corporativos -->
<h1  class="display-4 text-center mt-5" style="font-size: 40px;">Hoteles corporativos</h1>
<div id="fondo_hot_corp" class="container-fluid mt-3 p-5">
  <div class="icons">
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/carouseles/1c.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre Hotel</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/carouseles/2c.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre Hotel</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/carouseles/3c.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/carouseles/4c.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/carouseles/5c.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/carouseles/6c.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre Hotel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
  </div>
</div>


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
$('.owl-carousel').owlCarousel({
  center:true,
  autoplay:false,
  autoplayTimeout:2500,
  loop:true,
  nav:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:3
      },
      1200:{
          items:4
      }
  }
})
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
