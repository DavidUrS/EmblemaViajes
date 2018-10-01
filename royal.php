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
</head>

<body>

<?php
    include_once 'headerWhite.php';
    include_once 'headerBlack.php';
?>
<div class="container">
    <h1 class="display-4 text-center mt-1">Descubre Royal Concierge</h1>
    <img width="15%" class="mx-auto d-block" src="./images/19.jpg" alt="">
    <hr>
    <p class="lead text-center">¿Qué es Royal Concierge?</p>
    <div class="row">
      <div class="col-md-9">
        <p>
        Royal Concierge es el concierge virtual que ofrece el servicio personalizado que prestaba antaño la figura emblemática del Conserje Hotelero que poco a poco se fue eliminando y desapareciendo y que ha sobrevivido únicamente en hoteles de gran lujo y marcas prestigiosas.
        <br>
        Royal Concierge atiende a sus afiliados y socios de la misma manera que un “Concierge llaves de oro”, trato personalizado, especializado, experto y eficiente ante cualquier consulta, gestión o averiguación. 
        <br>
        Sus afiliados y socios participan además del programa RC LOYALTY PROGRAM y de todos los beneficios que obtienen al usar el servicio de Royal Concierge.
        <br>
        <a href="#">PDF – Brochure descargable</a>
        </p>
      </div>
      <div class="col-md-3">
        <img class="rounded mx-auto d-block" width="40%" src="./img/royal/royal.jpeg" alt="">
      </div>
    </div>
    
    <p></p>
    <hr>
    <p class="lead text-center">¿Quién puede inscribirse?</p>
    <img class="float-left w-25" src="./img/royal/butler.jpeg" alt="">
    <h5>Royal Concierge BUTLER</h5>
    <em>Quien puede inscribirse:</em>
    <p>
    Toda persona particular en Colombia que desee disfrutar de un servicio de consulta, soporte y gestión en materia de actividades, viajes, alojamientos, restaurantes, compras, eventos, servicios del día a día, ocio y muchos otros servicios.
    </p>
    <form id="form_contactanos">
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Nombres y Apellidos" id="nombres">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Email" id="apellidos">
            </div>
          </div>
          <div class="row mt-2">
            <div class="col">
              <input type="text" class="form-control" placeholder="Telefono" id="area">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Web" id="numero">
            </div>
          </div>
          <div class="row mt-2">
            <div class="col">
              <input type="text" class="form-control" placeholder="Nombre Hotel/Empresa/Negocio" id="numero">
            </div>
            <div class="col">
                <select class="custom-select" name="tema">
                    <option selected>Quiero</option>
                    <option value="quejas">Ampliar información</option>
                    <option value="cotiza">Afiliación</option>
                </select>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <div class="form-check mx-auto">
                <input class="form-check-input" type="checkbox" name="acep_contactanos">
                <label class="form-check-label" for="">
                <p>
                    Acepto los <a target="_black" href="javascript:window.open('./pdfs/term_y_cond.pdf');">Terminos y Condiciones</a>  y <a target="_black" href="javascript:window.open('./pdfs/politica_privacidad.pdf');">Políticas de Privacidad</a> 
                </p>
                </label>
            </div>
          </div>
          <div class="d-flex">
            <input type="submit" style="margin-right:1vw;" class="btn btn-primary ml-auto" value="Enviar">
          </div>

        </form>
        <br><br>
        <img class="float-right w-25" src="./img/royal/hotel.jpeg" alt="">
        <h5>Royal Concierge HOTEL</h5>
        <em>Quien puede inscribirse:</em>
        <p>
        Hoteles y otros tipos de alojamientos tipo casas o apartamentos de cualquier categoría en Colombia que deseen ampliar, mejorar y personalizar los servicios ofrecidos a sus huéspedes.
        </p>

<form id="form_contactanos">
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Nombres y Apellidos" id="nombres">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Email" id="apellidos">
            </div>
          </div>
          <div class="row mt-2">
            <div class="col">
              <input type="text" class="form-control" placeholder="Telefono" id="area">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Web" id="numero">
            </div>
          </div>
          <div class="row mt-2">
            <div class="col">
              <input type="text" class="form-control" placeholder="Nombre Hotel/Empresa/Negocio" id="numero">
            </div>
            <div class="col">
                <select class="custom-select" name="tema">
                    <option selected>Quiero</option>
                    <option value="quejas">Ampliar información</option>
                    <option value="cotiza">Afiliación</option>
                </select>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <div class="form-check mx-auto">
                <input class="form-check-input" type="checkbox" name="acep_contactanos">
                <label class="form-check-label" for="">
                <p>
                    Acepto los <a target="_black" href="javascript:window.open('./pdfs/term_y_cond.pdf');">Terminos y Condiciones</a>  y <a target="_black" href="javascript:window.open('./pdfs/politica_privacidad.pdf');">Políticas de Privacidad</a> 
                </p>
                </label>
            </div>
          </div>
          <div class="d-flex">
            <input type="submit" style="margin-left:1vw;" class="btn btn-primary mr-auto" value="Enviar">
          </div>

        </form>
</div>

<?php
    include_once 'footer.php';
?>

</body>
    <script src="./js/js/pooper.min.js" ></script>
    <script src="./js/js/bootstrap.min.js"></script>
    <script src="./js/js/jquery-ui.js"></script>
</body>
</html>
