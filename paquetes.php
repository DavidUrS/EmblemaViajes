<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
  <meta name="viewport" content="width=device-width">
  <title>EmblemaViajes</title>
  <link rel="shortcut icon" href="./img/icono.png">
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
<h1 class="display-3 text-center">Paquetes Emblema Viajes</h1>
<p class="lead text-center">Tu web de viajes, cruceros, hoteles, paquetes, parques y más. ¡Descúbrelo!</p>
    <!-- Inicio de carousel -->
<div id="carouselPaquetes" class="carousel slide mt-1" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselPaquetes" data-slide-to="0" class="active"></li>
    <li data-target="#carouselPaquetes" data-slide-to="1"></li>
    <li data-target="#carouselPaquetes" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./img/paquetes/1caru.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/paquetes/2caru.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/paquetes/3caru.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselPaquetes" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselPaquetes" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  <!-- Fin slider -->
  <h1 class="display-3 text-center">Paquetes</h1>
  <div class="container">
    <p>
    Encuentra paquetes de viaje y planes turísticos al mejor precio. Una variada selección de ofertas exclusivas, descuentos de última hora, paquetes económicos, tarifas y precios increíbles para que ahorres tiempo y dinero y disfrutes de tus vacaciones, viaje en familia o grupo o viajes de negocio. ¡Consulta, Cotiza y Reserva ahora!
    Compara y cotiza gratis a través de nuestro servicio de agentes online y asesor en el chat reservando rápido, fácil y seguro. 
    </p>
  </div>
  <h1 class="text-center">Top destinos</h1>

  <!-- Inicio de imagen fade in -->

<div class="container-fluid mt-4">
  <div class="row paquetes">
    <div class="col-md-4 conta">
      <h4 class="text-white centrado">Paquetes en Barú</h4>
      <img src="./img/paquetes/1.jpg" class="rounded imag">
      <div class="overlay">
        <div class="text">
          <p>Paquete en Barú</p>
          <button type="button" class="btn btn-outline-warning">Ver más</button>
        </div>
      </div>
    </div>
    <div class="col-md-4 conta">
      <h4 class="text-white centrado">Paquetes en Bla bla bla</h4>
      <img src="./img/paquetes/2.jpg" class="rounded imag">
      <div class="overlay">
        <div class="text">
          <p>Paquete en bla bla</p>
          <button type="button" class="btn btn-outline-warning">Ver más</button>
        </div>
      </div>
    </div>

    <div class="col-md-4 conta">
      <h4 class="text-white centrado">Paquetes en ble ble ble</h4>
      <img src="./img/paquetes/3.jpg" class="rounded imag">
      <div class="overlay">
        <div class="text">
          <p>Paquete ble ble</p>
          <button type="button" class="btn btn-outline-warning">Ver más</button>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-3 paquetes">
    <div class="col-md-4 conta">
      <h4 class="text-white centrado">Paquetes en Barú</h4>
      <img src="./img/paquetes/4.jpg" class="rounded imag">
      <div class="overlay">
        <div class="text">
          <p>Paquete en Barú</p>
          <button type="button" class="btn btn-outline-warning">Ver más</button>
        </div>

      </div>
    </div>
    <div class="col-md-4 conta">
      <h4 class="text-white centrado">Paquete</h4>
      <img src="./img/paquetes/5.jpg" class="rounded imag">
      <div class="overlay">
        <div class="text">
          <p>Paquete en bla bla</p>
          <button type="button" class="btn btn-outline-warning">Ver más</button>
        </div>
      </div>
    </div>

    <div class="col-md-4 conta">
      <h4 class="text-white centrado">Paquete, vuelo mas hotel</h4>
      <img src="./img/paquetes/6.jpg" class="rounded imag">
      <div class="overlay">
        <div class="text">
          <p>Paquete ble ble</p>
          <button type="button" class="btn btn-outline-warning">Ver más</button>
        </div>
      </div>
    </div>
  </div>

    <!-- Fin de imagen fade in -->
    <!-- Lista de paquetes en oferta -->
  <div class="jumbotron mt-3" id="ofertas_paquetes">
    <div class="container">
      <h1 class="display-4 text-center">Oferta de paquetes</h1>
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action active text-center">
          Lista de paquetes
        </a>
        <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
        <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
        <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
        <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
        <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
        <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
      </div>
    </div>
  </div>
  <!-- Fin de paquetes en oferta -->
  <!-- Inicio carousel de paquetes destacdos -->

<h1 class="display-4 text-center mt-5">Paquetes destacados</h1>
<div id="fondo_paq_dest" class="container-fluid p-5">
<div class="icons">
	<div class="slide">
  <div class="card" style="width: 18rem;">
      <img class="card-img-top w-100" src="./img/carouseles/1t.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Vuelo + hotel</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button type="button" class="btn btn-outline-dark">Ver mas</button>
      </div>
    </div>
	</div>
	
	<div class="slide">
  <div class="card" style="width: 18rem;">
      <img class="card-img-top w-100" src="./img/carouseles/2t.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Vuelo + hotel todo incluido</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button type="button" class="btn btn-outline-dark">Ver mas</button>
      </div>
    </div>
	</div>
	
	<div class="slide">
  <div class="card" style="width: 18rem;">
      <img class="card-img-top w-100" src="./img/carouseles/3t.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Hotel + crucero</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button type="button" class="btn btn-outline-dark">Ver mas</button>
      </div>
    </div>
	</div>
	
	<div class="slide">
  <div class="card" style="width: 18rem;">
      <img class="card-img-top w-100" src="./img/carouseles/4t.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Crucero + hotel todo incluido</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button type="button" class="btn btn-outline-dark">Ver mas</button>
      </div>
    </div>
	</div>
	
	<div class="slide">
  <div class="card" style="width: 18rem;">
      <img class="card-img-top w-100" src="./img/carouseles/5t.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Nombre del paquete</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button type="button" class="btn btn-outline-dark">Ver mas</button>
      </div>
    </div>
	</div>
	
	<div class="slide">
  <div class="card" style="width: 18rem;">
      <img class="card-img-top w-100" src="./img/carouseles/6t.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Nombre del paquete</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button type="button" class="btn btn-outline-dark">Ver mas</button>
      </div>
    </div>
	</div>
	
</div>
</div>
  <!-- Fin de paquetes destacados -->

  <!-- Inicio de mega paquetes -->
<h1 class="display-4 text-center mt-5">Paquetes con actividades</h1>
<div id="fondo_paq_act" class="container-fluid p-5">
<div class="icons">
	<div class="slide">
  <div class="card" style="width: 18rem;">
      <img class="card-img-top w-100" src="./img/carouseles/1t.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Nombre Hotel</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button type="button" class="btn btn-outline-dark">Ver mas</button>
      </div>
    </div>
	</div>
	
	<div class="slide">
  <div class="card" style="width: 18rem;">
      <img class="card-img-top w-100" src="./img/carouseles/2t.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Nombre Hotel</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button type="button" class="btn btn-outline-dark">Ver mas</button>
      </div>
    </div>
	</div>
	
	<div class="slide">
  <div class="card" style="width: 18rem;">
      <img class="card-img-top w-100" src="./img/carouseles/3t.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Nombre Hotel</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button type="button" class="btn btn-outline-dark">Ver mas</button>
      </div>
    </div>
	</div>
	
	<div class="slide">
  <div class="card" style="width: 18rem;">
      <img class="card-img-top w-100" src="./img/carouseles/4t.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Nombre Hotel</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button type="button" class="btn btn-outline-dark">Ver mas</button>
      </div>
    </div>
	</div>
	
	<div class="slide">
  <div class="card" style="width: 18rem;">
      <img class="card-img-top w-100" src="./img/carouseles/5t.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Nombre Hotel</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button type="button" class="btn btn-outline-dark">Ver mas</button>
      </div>
    </div>
	</div>
	
	<div class="slide">
  <div class="card" style="width: 18rem;">
      <img class="card-img-top w-100" src="./img/carouseles/6t.jpg" alt="Card image cap">
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
