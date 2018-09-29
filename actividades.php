<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
  <meta name="viewport" content="width=device-width">
  <title>EmblemaViajes</title>
  <script src="./js/js/jquery.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="./css/css/bootstrap.min.css">
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
<h1 class="display-3 text-center">Emblema Viajes</h1>
<p class="lead text-center">Tu web de viajes, cruceros, hoteles, paquetes, parques y más. ¡Descubrelo!</p>
  
<!-- // Slider -->

<div id="carouselHoteles" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselHoteles" data-slide-to="0" class="active"></li>
    <li data-target="#carouselHoteles" data-slide-to="1"></li>
    <li data-target="#carouselHoteles" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./img/actividades/1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/actividades/2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/actividades/3.jpg" alt="Third slide">
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
<h1 class="display-3 text-center">Actividades</h1>
  <div class="container">
    <p>
    Encuentra las mejores actividades, tickets, tours, atracciones, excursiones, alquiler de yates y veleros, alquiler de carros o aviones privados, traslados y muchas cosas que hacer para que planifiques y aproveches tu viaje al máximo. Descubre grandes descuentos y promociones, actividades y precios increíbles para que ahorres tiempo y dinero y vivas la mejor experiencia en cada uno de tus viajes. ¡Consulta, Cotiza y Reserva ahora!
    Compara y cotiza gratis a través de nuestro servicio de agentes online y asesor en el chat reservando rápido, fácil y seguro. 
    </p>
  </div>
<!-- // Inicio de carousel con sliders, de TOURES por destino -->
<h1 id="toures" class="display-4 text-center font-weight-bold" style="font-size: 40px;">Toures por destino</h1>
<div id="conta" class="container-fluid">
    <div id="full" class="container-fluid">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active"  data-toggle="tab" href="#armenia" role="tab" aria-controls="armenia" aria-selected="true">Armenia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#bogota" role="tab" aria-controls="bogota" aria-selected="false">Bogotá</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#bucaramanga" role="tab" aria-controls="bucaramanga" aria-selected="false">Bucaramanga</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#cali" role="tab" aria-controls="cali" aria-selected="false">Cali</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#cartagena" role="tab" aria-controls="cartagena" aria-selected="false">Cartagena</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#ibague" role="tab" aria-controls="ibague" aria-selected="false">Ibague</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#medellin" role="tab" aria-controls="medellin" aria-selected="false">Medellin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#pereira" role="tab" aria-controls="pereira" aria-selected="false">Pereira</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#salento" role="tab" aria-controls="salento" aria-selected="false">Salento</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#san_andres" role="tab" aria-controls="san_andres" aria-selected="false">San Andres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#santa_marta" role="tab" aria-controls="santa_marta" aria-selected="false">Santa Marta</a>
          </li>
        </ul>
    <div class="tab-content container-fluid" id="myTabContent">
      <div class="tab-pane fade show active container-fluid" id="armenia" role="tabpanel" aria-labelledby="armenia-tab">
          <!-- INICIO Carousel de actividades en armenia -->    
          <h1  class="display-4 text-center">Actividades en Armenia</h1>
          <div id="fondo_acti_arme" class="container-fluid p-5">
            <div class="icons">
              <div class="slide">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top w-100" src="./img/actividades/armenia/1.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Nombre del tour</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button type="button" class="btn btn-outline-dark">Ver mas</button>
                    </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top w-100" src="./img/actividades/armenia/2.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Nombre del tour</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button type="button" class="btn btn-outline-dark">Ver mas</button>
                    </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/armenia/3.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/armenia/4.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/armenia/5.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/armenia/6.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del toru</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN Carousel de actividades en armenia -->    
      </div>
      <div class="tab-pane fade" id="bogota" role="tabpanel" aria-labelledby="bogota-tab">
          <!-- INICIO Carousel de actividades en bogota -->    
          <h1  class="display-4 text-center mt-5" >Actividades en Bogotá</h1>
          <div id="fondo_acti_bog" class="container-fluid p-5">
            <div class="icons">
              <div class="slide">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top w-100" src="./img/actividades/bogota/1.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Nombre del tour</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button type="button" class="btn btn-outline-dark">Ver mas</button>
                    </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top w-100" src="./img/actividades/bogota/2.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Nombre del tour</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button type="button" class="btn btn-outline-dark">Ver mas</button>
                    </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/bogota/3.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/bogota/4.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/bogota/5.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/bogota/6.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del toru</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN Carousel de actividades en bogota -->        
      </div>
      <div class="tab-pane fade" id="bucaramanga" role="tabpanel" aria-labelledby="bucaramanga-tab">
          <!-- INICIO Carousel de actividades en bucaramanga -->    
          <h1  class="display-4 text-center mt-5">Actividades en Bucaramanga</h1>
          <div id="fondo_acti_buc" class="container-fluid p-5">
            <div class="icons">
              <div class="slide">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top w-100" src="./img/actividades/bucaramanga/1.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Nombre del tour</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button type="button" class="btn btn-outline-dark">Ver mas</button>
                    </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top w-100" src="./img/actividades/bucaramanga/2.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Nombre del tour</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button type="button" class="btn btn-outline-dark">Ver mas</button>
                    </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/bucaramanga/3.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/bucaramanga/4.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/bucaramanga/5.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/bucaramanga/6.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del toru</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN Carousel de actividades en bucaramanga -->         
      </div>
      <div class="tab-pane fade" id="cali" role="tabpanel" aria-labelledby="cali-tab">
          <!-- INICIO Carousel de actividades en cali -->    
          <h1  class="display-4 text-center mt-5">Actividades en Cali</h1>
          <div id="fondo_acti_cali" class="container-fluid p-5">
            <div class="icons">
              <div class="slide">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top w-100" src="./img/actividades/cali/1.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Nombre del tour</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button type="button" class="btn btn-outline-dark">Ver mas</button>
                    </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top w-100" src="./img/actividades/cali/2.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Nombre del tour</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button type="button" class="btn btn-outline-dark">Ver mas</button>
                    </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/cali/3.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/cali/4.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/cali/5.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/cali/6.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del toru</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN Carousel de actividades en cali -->          
      </div>
      <div class="tab-pane fade" id="cartagena" role="tabpanel" aria-labelledby="cartagena-tab">
          <!-- INICIO Carousel de actividades en cartagena -->    
          <h1  class="display-4 text-center mt-5">Actividades en Cartagena</h1>
          <div id="fondo_acti_cart" class="container-fluid p-5">
            <div class="icons">
              <div class="slide">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top w-100" src="./img/actividades/cartagena/1.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Nombre del tour</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button type="button" class="btn btn-outline-dark">Ver mas</button>
                    </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top w-100" src="./img/actividades/cartagena/2.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Nombre del tour</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button type="button" class="btn btn-outline-dark">Ver mas</button>
                    </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/cartagena/3.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/cartagena/4.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/cartagena/5.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/cartagena/6.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del toru</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN Carousel de actividades en cartagena -->         
      </div>
      <div class="tab-pane fade" id="ibague" role="tabpanel" aria-labelledby="ibague-tab">
          <!-- INICIO Carousel de actividades en ibague -->    
          <h1  class="display-4 text-center mt-5">Actividades en Ibague</h1>
          <div id="fondo_acti_ibag" class="container-fluid p-5">
            <div class="icons">
              <div class="slide">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top w-100" src="./img/actividades/ibague/1.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Nombre del tour</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button type="button" class="btn btn-outline-dark">Ver mas</button>
                    </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top w-100" src="./img/actividades/ibague/2.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Nombre del tour</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button type="button" class="btn btn-outline-dark">Ver mas</button>
                    </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/ibague/3.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/ibague/4.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/ibague/5.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/ibague/6.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del toru</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN Carousel de actividades en ibague -->       
      </div>
      <div class="tab-pane fade" id="medellin" role="tabpanel" aria-labelledby="medellin-tab">
          <!-- INICIO Carousel de actividades en medellin -->    
          <h1  class="display-4 text-center mt-5">Actividades en Medellin</h1>
          <div id="fondo_acti_med" class="container-fluid p-5">
            <div class="icons">
              <div class="slide">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top w-100" src="./img/actividades/medellin/1.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Nombre del tour</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button type="button" class="btn btn-outline-dark">Ver mas</button>
                    </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top w-100" src="./img/actividades/medellin/2.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Nombre del tour</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button type="button" class="btn btn-outline-dark">Ver mas</button>
                    </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/medellin/3.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/medellin/4.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/medellin/5.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/medellin/6.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del toru</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN Carousel de actividades en medellin -->         
      </div>
      <div class="tab-pane fade" id="pereira" role="tabpanel" aria-labelledby="pereira-tab">
          <!-- INICIO Carousel de actividades en pereira -->    
          <h1  class="display-4 text-center mt-5">Actividades en Pereira</h1>
          <div id="fondo_acti_pere" class="container-fluid p-5">
            <div class="icons">
              <div class="slide">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top w-100" src="./img/actividades/pereira/1.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Nombre del tour</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button type="button" class="btn btn-outline-dark">Ver mas</button>
                    </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top w-100" src="./img/actividades/pereira/2.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Nombre del tour</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button type="button" class="btn btn-outline-dark">Ver mas</button>
                    </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/pereira/3.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/pereira/4.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/pereira/5.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/pereira/6.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del toru</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN Carousel de actividades en pereira -->         
      </div>
      <div class="tab-pane fade" id="salento" role="tabpanel" aria-labelledby="salento-tab">
          <!-- INICIO Carousel de actividades en salento -->    
          <h1  class="display-4 text-center mt-5">Actividades en Salento</h1>
          <div id="fondo_acti_sale" class="container-fluid p-5">
            <div class="icons">
              <div class="slide">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top w-100" src="./img/actividades/salento/1.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Nombre del tour</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button type="button" class="btn btn-outline-dark">Ver mas</button>
                    </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top w-100" src="./img/actividades/salento/2.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Nombre del tour</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button type="button" class="btn btn-outline-dark">Ver mas</button>
                    </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/salento/3.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/salento/4.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/salento/5.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/salento/6.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del toru</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN Carousel de actividades en salento -->       
      </div>
      <div class="tab-pane fade" id="san_andres" role="tabpanel" aria-labelledby="san_andres-tab">
          <!-- INICIO Carousel de actividades en san andres -->    
          <h1  class="display-4 text-center mt-5">Actividades en San Andres</h1>
          <div id="fondo_acti_san" class="container-fluid p-5">
            <div class="icons">
              <div class="slide">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top w-100" src="./img/actividades/san_andres/1.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Nombre del tour</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button type="button" class="btn btn-outline-dark">Ver mas</button>
                    </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top w-100" src="./img/actividades/san_andres/2.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Nombre del tour</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button type="button" class="btn btn-outline-dark">Ver mas</button>
                    </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/san_andres/3.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/san_andres/4.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/san_andres/5.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/san_andres/6.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del toru</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN Carousel de actividades en san andres -->         
      </div>
      <div class="tab-pane fade" id="santa_marta" role="tabpanel" aria-labelledby="santa_marta-tab">
          <!-- INICIO Carousel de actividades en santa marta -->    
          <h1  class="display-4 text-center mt-5">Actividades en Santa Matra</h1>
          <div id="fondo_acti_santa" class="container-fluid p-5">
            <div class="icons">
              <div class="slide">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top w-100" src="./img/actividades/santa_marta/1.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Nombre del tour</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button type="button" class="btn btn-outline-dark">Ver mas</button>
                    </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top w-100" src="./img/actividades/santa_marta/2.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Nombre del tour</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button type="button" class="btn btn-outline-dark">Ver mas</button>
                    </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/santa_marta/3.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/santa_marta/4.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/santa_marta/5.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del tour</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
              
              <div class="slide">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top w-100" src="./img/actividades/santa_marta/6.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del toru</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-dark">Ver mas</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN Carousel de actividades en sannta marta -->           
      </div>
    </div>
  </div>
</div>

 <!-- COMENZANDO LOS DEMAS CAROUSELES DE TRANSPORTE -->
  <!-- INICIO Carousel de transporte terrestres -->    
<h1 id="terrestre" class="display-4 text-center mt-5">Transporte terrestre</h1>
<div id="fondo_tran_ter" class="container-fluid p-5">
  <div class="icons">
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/actividades/terrestre/1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre del tour</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/actividades/terrestre/2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre del tour</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/actividades/terrestre/3.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre del tour</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/actividades/terrestre/4.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre del tour</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/actividades/terrestre/5.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre del tour</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/actividades/terrestre/6.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre del toru</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- FIN Carousel de transporte terrestre -->  

  <!-- INICIO Carousel de transporte aereo -->    
  <h1 id="aereo"  class="display-4 text-center mt-5">Transporte aereo</h1>
<div id="fondo_tran_aer" class="container-fluid p-5">
  <div class="icons">
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/actividades/aereo/1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre del tour</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/actividades/aereo/2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre del tour</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/actividades/aereo/3.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre del tour</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/actividades/aereo/4.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre del tour</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/actividades/aereo/5.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre del tour</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/actividades/aereo/6.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre del toru</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- FIN Carousel de transporte aereo -->  
  <!-- INICIO Carousel de transporte nautico -->    
  <h1 id="nautico" class="display-4 text-center mt-5">Transporte nautico</h1>
<div id="fondo_tran_nau" class="container-fluid p-5">
  <div class="icons">
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/actividades/nautico/1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre del tour</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/actividades/nautico/2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre del tour</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/actividades/nautico/3.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre del tour</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/actividades/nautico/4.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre del tour</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/actividades/nautico/5.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre del tour</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/actividades/nautico/6.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre del toru</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- FIN Carousel de transporte nautico -->  
  <!-- INICIO Carousel de empresas -->    
  <h1 id="empresas" class="display-4 text-center mt-5">Empresas</h1>
<div id="fondo_tran_emp" class="container-fluid p-5">
  <div class="icons">
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/actividades/empresas/1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre del tour</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/actividades/empresas/2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre del tour</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/actividades/empresas/3.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre del tour</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/actividades/empresas/4.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre del tour</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/actividades/empresas/5.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre del tour</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/actividades/empresas/6.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre del toru</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- FIN Carousel de empresas --> 

 <!-- INICIO Carousel de spa -->    
 <h1 id="relax" class="display-4 text-center mt-5">Spa & Relax</h1>
<div id="fondo_tran_spa" class="container-fluid p-5">
  <div class="icons">
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/actividades/spa/1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre del tour</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/actividades/spa/2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre del tour</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/actividades/spa/3.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre del tour</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/actividades/spa/4.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre del tour</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/actividades/spa/5.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre del tour</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/actividades/spa/6.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre del toru</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- FIN Carousel de spa --> 
 <!-- INICIO Carousel de gastronomia -->    
 <h1 id="gastronomia" class="display-4 text-center mt-5">Gastronomia & Gourmet</h1>
<div id="fondo_tran_gast" class="container-fluid p-5">
  <div class="icons">
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/actividades/gastronomia/1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre del tour</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top w-100" src="./img/actividades/gastronomia/2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre del tour</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-dark">Ver mas</button>
          </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/actividades/gastronomia/3.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre del tour</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/actividades/gastronomia/4.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre del tour</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/actividades/gastronomia/5.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre del tour</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
    
    <div class="slide">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top w-100" src="./img/actividades/gastronomia/6.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre del toru</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-dark">Ver mas</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- FIN Carousel de gastronomia --> 

 <!-- Iniciando CAROUSEL con slider de EVENTOS -->
<h1 id="entradas" class="display-4 text-center mt-3 font-weight-bold" style="font-size: 40px;">Entradas</h1>
 <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="deportes-tab" data-toggle="tab" href="#deportes" role="tab" aria-controls="deportes" aria-selected="true">Deportes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="espectaculos-tab" data-toggle="tab" href="#espectaculos" role="tab" aria-controls="espectaculos" aria-selected="false">Espectaculos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="teatros-tab" data-toggle="tab" href="#teatros" role="tab" aria-controls="teatros" aria-selected="false">Teatros/Musicales</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="atracciones-tab" data-toggle="tab" href="#atracciones" role="tab" aria-controls="atracciones" aria-selected="false">Atracciones</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="museos-tab" data-toggle="tab" href="#museos" role="tab" aria-controls="museos" aria-selected="false">Museos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="conciertos-tab" data-toggle="tab" href="#conciertos" role="tab" aria-controls="conciertos" aria-selected="false">Conciertos/Festivales</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="discos-tab" data-toggle="tab" href="#discos" role="tab" aria-controls="discos" aria-selected="false">Discos/Clubs</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="familiares-tab" data-toggle="tab" href="#familiares" role="tab" aria-controls="familiares" aria-selected="false">Familiares</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="deportes" role="tabpanel" aria-labelledby="deportes-tab">
    <!-- INICIO Carousel de deportes -->    
    <h1  class="display-4 text-center mt-5">Deportes</h1>
    <div id="fondo_entra_depor" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/actividades/deportes/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/actividades/deportes/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/deportes/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/deportes/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/deportes/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/deportes/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de deportes -->  
  </div>
  <div class="tab-pane fade" id="espectaculos" role="tabpanel" aria-labelledby="espectaculos-tab">
    <!-- INICIO Carousel de espectaculos -->    
    <h1  class="display-4 text-center mt-5">Espectaculos</h1>
    <div id="fondo_entra_espec" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/actividades/espectaculos/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/actividades/espectaculos/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/espectaculos/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/espectaculos/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/espectaculos/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/espectaculos/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de espectaculos -->   
  </div>
  <div class="tab-pane fade" id="teatros" role="tabpanel" aria-labelledby="teatros-tab">
    <!-- INICIO Carousel de teatros -->    
    <h1  class="display-4 text-center mt-5">Teatros</h1>
    <div id="fondo_entra_teat" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/actividades/teatros/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/actividades/teatros/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/teatros/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/teatros/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/teatros/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/teatros/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de teatros -->  
  </div>
  <div class="tab-pane fade" id="atracciones" role="tabpanel" aria-labelledby="atracciones-tab">
    <!-- INICIO Carousel de atracciones -->    
    <h1  class="display-4 text-center mt-5">Atracciones</h1>
    <div id="fondo_entra_atrac" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/actividades/atracciones/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/actividades/atracciones/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/atracciones/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/atracciones/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/atracciones/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/atracciones/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de atracciones --> 
  </div>
  <div class="tab-pane fade" id="museos" role="tabpanel" aria-labelledby="museos-tab">
    <!-- INICIO Carousel de museos -->    
    <h1  class="display-4 text-center mt-5">Museos</h1>
    <div id="fondo_entra_muse" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/actividades/museos/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/actividades/museos/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/museos/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/museos/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/museos/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/museos/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de museos --> 
  </div>
  <div class="tab-pane fade" id="conciertos" role="tabpanel" aria-labelledby="conciertos-tab">
    <!-- INICIO Carousel de festival -->    
    <h1  class="display-4 text-center mt-5">Festivales</h1>
    <div id="fondo_entra_conci" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/actividades/festival/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/actividades/festival/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/festival/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/festival/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/festival/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/festival/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de festival -->   
  </div>
  <div class="tab-pane fade" id="discos" role="tabpanel" aria-labelledby="discos-tab">
    <!-- INICIO Carousel de discos -->    
    <h1  class="display-4 text-center mt-5">Discos/Club</h1>
    <div id="fondo_entra_disco" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/actividades/discos/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/actividades/discos/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/discos/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/discos/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/discos/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/discos/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de discos -->    
  </div>
  <div class="tab-pane fade" id="familiares" role="tabpanel" aria-labelledby="familiares-tab">
    <!-- INICIO Carousel de familia -->    
    <h1  class="display-4 text-center mt-5">Familia</h1>
    <div id="fondo_entra_fami" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/actividades/familia/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/actividades/familia/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/familia/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/familia/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/familia/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/familia/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de familia -->   
  </div>
</div>

<!-- INICIO // CAROUSEL DE EVENTOS -->
<h1 id="eventos" class="display-4 text-center mt-5 font-weight-bold" style="font-size: 40px;">Eventos</h1>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="despedidas-tab" data-toggle="tab" href="#despedidas" role="tab" aria-controls="despedidas" aria-selected="true">Despedidas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="cumples-tab" data-toggle="tab" href="#cumples" role="tab" aria-controls="cumples" aria-selected="false">Cumpleaños</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="bodas-tab" data-toggle="tab" href="#bodas" role="tab" aria-controls="bodas" aria-selected="false">Bodas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="grupos-tab" data-toggle="tab" href="#grupos" role="tab" aria-controls="grupos" aria-selected="false">Grupos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="quince-tab" data-toggle="tab" href="#quince" role="tab" aria-controls="quince" aria-selected="false">Quinceañeras</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="empresass-tab" data-toggle="tab" href="#empresass" role="tab" aria-controls="empresass" aria-selected="false">Empresas</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="despedidas" role="tabpanel" aria-labelledby="despedidas-tab">
    <!-- INICIO Carousel de despedidas -->    
    <h1  class="display-4 text-center mt-5">Despedidas</h1>
    <div id="fondo_even_despe" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/actividades/despedidas/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/actividades/despedidas/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/despedidas/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/despedidas/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/despedidas/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/despedidas/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de despedidas -->
  </div>
  <div class="tab-pane fade" id="cumples" role="tabpanel" aria-labelledby="cumples-tab">
    <!-- INICIO Carousel de cumples -->    
    <h1  class="display-4 text-center mt-5">Cumpleaños</h1>
    <div id="fondo_even_cump" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/actividades/cumples/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/actividades/cumples/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/cumples/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/cumples/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/cumples/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/cumples/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de cumples -->
  </div>
  <div class="tab-pane fade" id="bodas" role="tabpanel" aria-labelledby="bodas-tab">
    <!-- INICIO Carousel de bodas -->    
    <h1  class="display-4 text-center mt-5">Bodas</h1>
    <div id="fondo_even_boda" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/actividades/bodas/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/actividades/bodas/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/bodas/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/bodas/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/bodas/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/bodas/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de bodas -->
  </div>
  <div class="tab-pane fade" id="grupos" role="tabpanel" aria-labelledby="grupos-tab">
    <!-- INICIO Carousel de grupos -->    
    <h1  class="display-4 text-center mt-5">Grupos</h1>
    <div id="fondo_even_grupo" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/actividades/grupos/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/actividades/grupos/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/grupos/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/grupos/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/grupos/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/grupos/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de bodas -->    
  </div>
  <div class="tab-pane fade" id="quince" role="tabpanel" aria-labelledby="quince-tab">
    <!-- INICIO Carousel de quince -->    
    <h1  class="display-4 text-center mt-5">Quinceañeras</h1>
    <div id="fondo_even_quince" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/actividades/quince/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/actividades/quince/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/quince/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/quince/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/quince/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/quince/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de quince -->       
  </div>
  <div class="tab-pane fade" id="empresass" role="tabpanel" aria-labelledby="empresass-tab">
    <!-- INICIO Carousel de empresa -->    
    <h1  class="display-4 text-center mt-5">Empresas</h1>
    <div id="fondo_even_empre" class="container-fluid p-5">
      <div class="icons">
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/actividades/empresa/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top w-100" src="./img/actividades/empresa/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nombre del tour</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-dark">Ver mas</button>
              </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/empresa/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/empresa/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/empresa/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del tour</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="./img/actividades/empresa/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Nombre del toru</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-dark">Ver mas</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN Carousel de empresa -->     
  </div>
</div>
<!-- FIN // CAROUSEL DE EVENTOS -->


<?php
  include_once 'footer.php';
?>
<script src="./js/change.js"></script>
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
