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

<h1 class="display-3 text-center">Ofertas Emblema Viajes</h1>
<p class="lead text-center">Tu web de viajes, cruceros, hoteles, paquetes, parques y más. ¡Descubrelo!</p>

<!-- // Slider -->

<div id="carouselOfertas" class="carousel slide mt-1" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselOfertas" data-slide-to="0" class="active"></li>
    <li data-target="#carouselOfertas" data-slide-to="1"></li>
    <li data-target="#carouselOfertas" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./img/ofertas/1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/ofertas/2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/ofertas/3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselOfertas" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselOfertas" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- // FIn Slider -->
<h1 class="display-3 text-center">Ofertas</h1>
  <div class="container">
    <p>
    Encuentra las mejores ofertas, promociones y viajes baratos a los destinos que prefieras. Aprovecha entre una amplia variedad en descuentos, ofertas de última hora, reservas anticipadas con los mejores precios en hoteles, actividades, cruceros y mucho más para que ahorres tiempo y dinero. ¡Consulta, Cotiza y Reserva ahora!
    Compara y cotiza gratis a través de nuestro servicio de agentes online y asesor en el chat reservando rápido, fácil y seguro. 
    </p>
  </div>

  <h1 class="text-center">Top Ofertas</h1>
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-destacados-tab" data-toggle="tab" href="#nav-destacados" role="tab" aria-controls="nav-destacados" aria-selected="true">Destacados</a>
    <a class="nav-item nav-link" id="nav-paquetes-tab" data-toggle="tab" href="#nav-paquetes" role="tab" aria-controls="nav-paquetes" aria-selected="false">Paquetes</a>
    <a class="nav-item nav-link" id="nav-circuitos-tab" data-toggle="tab" href="#nav-circuitos" role="tab" aria-controls="nav-circuitos" aria-selected="false">Circuitos</a>
    <a class="nav-item nav-link" id="nav-combinados-tab" data-toggle="tab" href="#nav-combinados" role="tab" aria-controls="nav-combinados" aria-selected="false">Combinados</a>
    <a class="nav-item nav-link" id="nav-todo-tab" data-toggle="tab" href="#nav-todo" role="tab" aria-controls="nav-todo" aria-selected="false">Todo incluido</a>
    <a class="nav-item nav-link" id="nav-ultima-tab" data-toggle="tab" href="#nav-ultima" role="tab" aria-controls="nav-ultima" aria-selected="false">Ultima hora</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-destacados" role="tabpanel" aria-labelledby="nav-destacados-tab">
    <!-- INICIO Carousel de destacados -->    
    <h1  class="display-4 text-center mt-1">Destacados</h1>
    <div id="fondo_off_destac" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/ofertas/destacados/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/ofertas/destacados/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/ofertas/destacados/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/ofertas/destacados/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/ofertas/destacados/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/ofertas/destacados/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de ofertas destacados -->    
  </div>
  <div class="tab-pane fade" id="nav-paquetes" role="tabpanel" aria-labelledby="nav-paquetes-tab">
    <!-- INICIO Carousel de paquetes -->    
    <h1  class="display-4 text-center mt-1">Paquetes</h1>
    <div id="fondo_off_paque" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/ofertas/paquetes/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/ofertas/paquetes/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/ofertas/paquetes/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/ofertas/paquetes/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/ofertas/paquetes/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/ofertas/paquetes/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de ofertas paquetes -->      
  </div>
  <div class="tab-pane fade" id="nav-circuitos" role="tabpanel" aria-labelledby="nav-circuitos-tab">
    <!-- INICIO Carousel de circuitos -->    
    <h1  class="display-4 text-center mt-1">Circuitos</h1>
    <div id="fondo_off_circui" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/ofertas/circuitos/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/ofertas/circuitos/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/ofertas/circuitos/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/ofertas/circuitos/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/ofertas/circuitos/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/ofertas/circuitos/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de ofertas circuitos -->   
  </div>
  <div class="tab-pane fade" id="nav-combinados" role="tabpanel" aria-labelledby="nav-combinados-tab">
    <!-- INICIO Carousel de combinados -->    
    <h1  class="display-4 text-center mt-1">Combinados</h1>
    <div id="fondo_off_combi" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/ofertas/combinados/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/ofertas/combinados/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/ofertas/combinados/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/ofertas/combinados/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/ofertas/combinados/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/ofertas/combinados/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de ofertas combinados -->    
  </div>
  <div class="tab-pane fade" id="nav-todo" role="tabpanel" aria-labelledby="nav-todo-tab">
    <!-- INICIO Carousel de todo incluido -->    
    <h1  class="display-4 text-center mt-1">Todo incluido</h1>
    <div id="fondo_off_todo" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/ofertas/todo/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/ofertas/todo/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/ofertas/todo/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/ofertas/todo/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/ofertas/todo/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/ofertas/todo/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de ofertas ultima hora -->     
  </div>
  <div class="tab-pane fade" id="nav-ultima" role="tabpanel" aria-labelledby="nav-ultima-tab">
    <!-- INICIO Carousel de todo incluido -->    
    <h1  class="display-4 text-center mt-1">Ultima hora</h1>
    <div id="fondo_off_ultim" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/ofertas/ultima/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/ofertas/ultima/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/ofertas/ultima/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/ofertas/ultima/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/ofertas/ultima/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/ofertas/ultima/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de ofertas ultima -->    
  </div>
</div>

  <!-- Inicio de imagen fade in -->
<h1  class="display-4 text-center mt-5" style="font-size: 40px;">Ofertas del día</h1>
<div class="container-fluid mt-4">
  <div class="row paquetes">
    <div class="col-md-4 conta">
      <h4 class="text-white centrado">Ofertas de vuelo</h4>
      <img src="./img/paquetes/1.jpg" class="rounded imag">
      <div class="overlay">
        <div class="text">
          <p>Ofertas</p>
          <button type="button" class="btn btn-outline-warning">Ver más</button>
        </div>
      </div>
    </div>
    <div class="col-md-4 conta">
      <h4 class="text-white centrado">Ofertas</h4>
      <img src="./img/paquetes/2.jpg" class="rounded imag">
      <div class="overlay">
        <div class="text">
          <p>Ofertas</p>
          <button type="button" class="btn btn-outline-warning">Ver más</button>
        </div>
      </div>
    </div>

    <div class="col-md-4 conta">
      <h4 class="text-white centrado">Ofertas</h4>
      <img src="./img/paquetes/3.jpg" class="rounded imag">
      <div class="overlay">
        <div class="text">
          <p>Ofertas</p>
          <button type="button" class="btn btn-outline-warning">Ver más</button>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-3 paquetes">
    <div class="col-md-4 conta">
      <h4 class="text-white centrado">Ofertas</h4>
      <img src="./img/paquetes/4.jpg" class="rounded imag">
      <div class="overlay">
        <div class="text">
          <p>Ofertas</p>
          <button type="button" class="btn btn-outline-warning">Ver más</button>
        </div>

      </div>
    </div>
    <div class="col-md-4 conta">
      <h4 class="text-white centrado">Ofertas</h4>
      <img src="./img/paquetes/5.jpg" class="rounded imag">
      <div class="overlay">
        <div class="text">
          <p>Ofertas</p>
          <button type="button" class="btn btn-outline-warning">Ver más</button>
        </div>
      </div>
    </div>

    <div class="col-md-4 conta">
      <h4 class="text-white centrado">Ofertas</h4>
      <img src="./img/paquetes/6.jpg" class="rounded imag">
      <div class="overlay">
        <div class="text">
          <p>Ofertas</p>
          <button type="button" class="btn btn-outline-warning">Ver más</button>
        </div>
      </div>
    </div>
  </div>

    <!-- Fin de imagen fade in -->

      <!-- Inicio de ofertas -->

  <div class="jumbotron mt-3" id="ofertas_hoteles">
    <div class="container">
      <h1 class="display-4 text-center">Más ofertas especiales</h1>
        <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action active text-center">
          Listado de ofertas
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex justify-content-between">
            <span>Oferta 1 <small>Description</small> </span><span>$price</span>
          </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex justify-content-between">
            <span>Oferta 2 <small>Description</small> </span><span>$price</span>
          </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex justify-content-between">
            <span>Oferta 3 <small>Description</small> </span><span>$price</span>
          </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex justify-content-between">
            <span>Oferta 4 <small>Description</small> </span><span>$price</span>
          </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex justify-content-between">
            <span>Oferta 5 <small>Description</small> </span><span>$price</span>
          </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex justify-content-between">
            <span>Oferta 6 <small>Description</small> </span><span>$price</span>
          </div>
        </a>

      </div>
    </div>
  </div>
</div>
<!-- Fin de ofertas -->


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
