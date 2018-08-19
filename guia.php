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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>

<style>
/* adds some margin below the link sets  */

</style>

<body>
<?php
        include_once 'headerBlack.php';
        include_once 'headerWhite.php';
?>
<div class="container">
<h1 class="display-3 text-center">Guias del viaje</h1>
  <p>
  Descubre aquí una amplia selección de guías turísticas donde encontrarás todo lo necesario para que disfrutes al máximo de tus viajes y aproveches tu tiempo y dinero en tus destinos elegidos. Nuestras guías te ayudarán a planificar tu viaje y a elegir adecuadamente qué visitar y hacer, dónde y qué comer, donde ir de compras, como transportarte, donde dormir y mucho más para que puedas vivir la mejor experiencia. 
  </p>
</div>

<!-- Modal -->
<div class="modal fade" id="modalGuia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="alert alert-dark" role="alert">
        Solo completa este formulario, para recibir en tu correo electronico la guia
      </div>
      <form id="form_guia">
        <div class="form-group">
          <input type="email" class="form-control" id="email" placeholder="Email" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="nombre" placeholder="Nombres" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="nombre" placeholder="Apellidos" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="nombre" placeholder="Numero de telefono" required>
        </div>
        <select class="form-control" id="guia">
          <option>Selecciona la guia</option>
        </select>
        <div class="form-check mb-2 mr-sm-2">
          <input class="form-check-input" type="checkbox" name="guia">
          <label class="form-check-label" for="">
          <p>
              Antes de enviar este formulario, debes leer la siguiente información básica sobre 
              <a target="_black" href="javascript:window.open('./pdfs/politica_privacidad.pdf');">
              POLITICAS DE PRIVACIDAD</a><br>
              Al pulsar el botón de RECIBIR GUIA manifiestas haber leído y aceptar esta información.
          </p>
          </label>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Recibir guia</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<div id="megaMenu">

<nav class="navbar navbar-expand-lg navbar-light text-center">
  <button class="navbar-toggler text-center" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fas fa-chevron-circle-down text-center"></span>Guia del viajero
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent2">
    <ul class="navbar-nav w-100 d-flex justify-content-around">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Africa
        </a>
        <!-- Inicio de dropdown AFRICA -->
        <div id="africa" class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div  class="container-fluid">
            <div id="panel_africa"  class="row w-90">
              <div class="col">
                <ul class="nav flex-column">
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Angola</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Argelia</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Benín</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Benín</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Botsuana</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Burkina Faso</a>
                  </li>
                </ul>
              </div>
              <div class="col">
              <ul class="nav flex-column">
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Burundi</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Cabo Verde</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Camerún</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Chad</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Comoras y Mayotte</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Costa de Marfil</a>
                  </li>
                </ul>
              </div>
              <div class="col">
                <ul class="nav flex-column">
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Egipto</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Eritrea</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Etiopía</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Gabon</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Gambia</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Ghana</a>
                  </li>
                </ul>
              </div>
              <div class="col">
                <ul class="nav flex-column">
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Guinea Ecuatorial</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Guinea</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Guinea-Bissau</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Kenia</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Lesoto</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Liberia</a>
                  </li>
                </ul>
              </div>
              <div class="col">
                <ul class="nav flex-column">
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Libia</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Madagascar</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Malí</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Malaui</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Marruecos</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Mauricio</a>
                  </li>
                </ul>
              </div>
              <div class="col">
                <ul class="nav flex-column">
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Mauritania</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Mozambique</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Níger</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Namibia</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Nigeria</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">República Centroafricana</a>
                  </li>
                </ul>
              </div>
              <div class="col">
                <ul class="nav flex-column">
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">República democrática del Congo</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Repúbica del Congo</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Ruanda</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Santo Tomé y Principe</a>
                  </li>
                </ul>
              </div>
              <div class="col">
                <ul class="nav flex-column">
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Senegal</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Seychelles</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Somalia y Somalandia</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Suazilandia</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Sudáfrica</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Sudán del Sur</a>
                  </li>
                </ul>
              </div>
              <div class="col">
                <ul class="nav flex-column">
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Sudán</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Túnez</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Tanzania</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Togo</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Uganda</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Yibuti</a>
                  </li>
                </ul>
              </div>
              <div class="col">
                <ul class="nav flex-column">
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Zambia</a>
                  </li>
                  <li>
                    <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Zimbabue</a>
                  </li>
                </ul>
              </div>
              
              <!-- /.col-md-4  -->

              <!-- /.col-md-4  -->
            </div>
          </div>
          <!--  /.container  -->
        </div>
        <!-- Fin de dropdown AFRICA -->
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          America del norte y central
        </a>
        <!-- Inicio de dropdown America del norte y central -->
        <div id="america_norte" class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div id="panel_america_norte" class="container-fluid">
            <div class="row">
              <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Anguila</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Antigua y Barbuda</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Aruba, Bonaire y Curazao</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Bahamas</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Barbados</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Belice</a>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Bermudas</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Canada</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Costa rica</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Cuba</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Dominicana</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">El Salvador</a>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Estados Unidos</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Granada</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Guadalupe</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Guatemala</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Haití</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Honduras</a>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">islas Caiman</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Islas Virgenes de los EE UU y Británicas</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Jamaica</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Mexico</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Martinica</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Nicaragua</a>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Panama</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Puerto Rico</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Repúbica Dominicana</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">San Cristóbal y Nieves</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">San Vicente y las Granadinas</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Santa Lucia</a>
                    </li>
                  </ul>
                </div>
                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" href="#">Trinidad y Tobago</a>
                    </li>
                  </ul>
                </div>
              
              <!-- /.col-md-4  -->
            </div>
          </div>
          <!--  /.container  -->
        </div>
        <!-- Fin de dropdown America del norte y central -->
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          America del sur
        </a>
        <!-- Inicio de dropdown America del sur -->
        <div id="america_sur" class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div id="panel_america_sur" class="container">
            <div class="row">
                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Argentina</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Bolivia</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Brazil</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Chile</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Colombia</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Ecuador</a>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia"  href="#">Guayana Francesa</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia"  href="#">Guyana</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia"  href="#">Islas Malvinas</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia"  href="#">Paraguay</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia"  href="#">Perú</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia"  href="#">Surinam</a>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Uruguay</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Venezuela</a>
                    </li>
                  </ul>
                </div>
              
              <!-- /.col-md-4  -->
            </div>
          </div>
          <!--  /.container  -->
        </div>
        <!-- Inicio de dropdown America del sur -->
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Antártida
        </a>
        <!-- Inicio de dropdown Antártida -->
        <div id="antartida" class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div id="panel_antartida" class="container">
            <div class="row">
                <div class="col text-center">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Antártida</a>
                    </li>
                  </ul>
                </div>
              <!-- /.col-md-4  -->
            </div>
          </div>
          <!--  /.container  -->
        </div>
        <!-- Inicio de dropdown Antártida -->
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Asia
        </a>
        <!-- Inicio de dropdown Asia -->
        <div id="asia_p" class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div id="panel_asia" class="container-fluid">
            <div class="row">
                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Afganistán</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Arabia Saudí</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Armenia</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Azerbaiyán</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Bahréin</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Banglades</a>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Brunéi</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Bután</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Camboya</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">China</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Corea del Norte</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Corea del Sur</a>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Emiratos Árabes Unidos (Dubái)</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Filipinas</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Hong Kong</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">India</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Indonesia</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Iran</a>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Iraq</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Israel y los territorios Palestinos</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Japón</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Jordania</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Kazajistán</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Kirguistán</a>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Kuwait</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Líbanos</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Laos</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Macao</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Malasia</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Maldivas</a>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Mongolia</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Myanmar</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Nepal</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Omán</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Pakistán</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Qatar</a>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Singapur</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Siria</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Sri Lanka</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Tíbet</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Tailandia</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Taiwán</a>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Tayikistán</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Timor Oriental</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Turkmenistán</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Turquía</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Uzbekistán</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Vietnam</a>
                    </li>
                  </ul>
                </div>
                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Yemen</a>
                    </li>
                  </ul>
                </div>
              <!-- /.col-md-4  -->
            </div>
          </div>
          <!--  /.container  -->
        </div>
        <!-- Inicio de dropdown Asia -->
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Europa
        </a>
        <!-- Inicio de dropdown Europa -->
        <div id="europa" class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div id="panel_europa" class="container-fluid">
            <div class="row">
                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Albania</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Alemania</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Andorra</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Austria</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Bélgica</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Bielorrusia</a>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Bosnia y Herzegovina</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Bulgaria</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Chipre</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Ciudad del Vaticano</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Croacia</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Dinamarca</a>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Escocia</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Eslovaquia</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Eslovenia</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">España</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Estonia</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Finlandia</a>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Francia</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Gales</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Georgia</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Grecia</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Groenlandia</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Hungría</a>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Inglaterra</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Irlanda</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Islandia</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Italia</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Kosovo</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Letonia</a>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Liechtenstein</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Lituania</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Luxemburgo</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Macedonia</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Malta</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Moldavia</a>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Montenegro</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Noruega</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Paises Bajos</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Polonia</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Portugal</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">República Checha</a>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Rumanía</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Rusia</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">San Marino</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Serbia</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Suecia</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Suiza</a>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Ucrania</a>
                    </li>
                  </ul>
                </div>
              <!-- /.col-md-4  -->
            </div>
          </div>
          <!--  /.container  -->
        </div>
        <!-- Inicio de dropdown Europa -->
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Oceanía
        </a>
        <!-- Inicio de dropdown Oceanía -->
        <div id="oceania" class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div id="panel_oceania" class="container">
            <div class="row">
              <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Asutralia</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Fiyi</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Guam</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Isla Pitcairn</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Islas Cook</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Islas Marianas del Norte</a>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Islas Marshall</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Islas Salomón</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Kiribati</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Micronesia</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Nauru</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Nueva Caledonia</a>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Nueva Zelanda</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Palaos</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Papúa Nueva Guinea</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Samoa</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Tahití y la Polinesia Francesa</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Tonga</a>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="nav flex-column">
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Tuvalu</a>
                    </li>
                    <li>
                      <a class="nav-link active" data-toggle="modal" data-target="#modalGuia" href="#">Vanuatu</a>
                    </li>
                  </ul>
                </div>
              <!-- /.col-md-4  -->
            </div>
          </div>
          <!--  /.container  -->
        </div>
        <!-- Inicio de dropdown Oceanía -->
      </li>
    </ul>
  </div>


</nav>

</div>

<script type="text/javascript">  
  // breakpoint and up  
$(window).resize(function(){
	if ($(window).width() >= 980){	

      // when you hover a toggle show its dropdown menu
      $("#megaMenu .navbar #megaMenu .dropdown-toggle").hover(function () {
         $(this).parent().toggleClass("show");
         $(this).parent().find("#megaMenu .dropdown-menu").toggleClass("show"); 
       });

        // hide the menu when the mouse leaves the dropdown
      $( "#megaMenu .navbar #megaMenu .dropdown-menu" ).mouseleave(function() {
        $(this).removeClass("show");  
      });
  
		// do something here
	}	
});  
  


</script>

<?php
  include_once 'footer.php';
?>

    <script src="./js/js/pooper.min.js" ></script>
    <script src="./js/js/bootstrap.min.js"></script>
    <script src="./js/js/jquery-ui.js"></script>
    <script src="./js/images.js"></script>
    <script src="./js/guia.js"></script>

  <!-- <script type="text/javascript"> 
     var oct8ne = document.createElement("script"); 
     oct8ne.server = "backoffice.oct8ne.com/"; 
     oct8ne.type = "text/javascript"; 
     oct8ne.async = true; 
     oct8ne.license ="A42CDF318B6CBD9CA2082DF61F2C0A27"; 
     oct8ne.src = (document.location.protocol == "https:" ? "https://" : "http://") + "static.oct8ne.com/api/v2/oct8ne-api-2.3.js?" + (Math.round(new Date().getTime() / 86400000)); 
     oct8ne.locale = "es-ES"; 
     oct8ne.baseUrl ="//www.emblemaviajes.com"; 
     oct8ne.allowedDepartmentsId = "5305"; 
     var s = document.getElementsByTagName("script")[0]; 
     s.parentNode.insertBefore(oct8ne, s); 
  </script>  -->

</body>
</html>
