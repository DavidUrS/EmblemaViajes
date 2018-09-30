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
</head>

<body>
  <?php
      include_once 'headerWhite.php';
      include_once 'headerBlack.php';
  ?>


  <div class="container-fluid mt-1" >
  <p class="display-3 text-center">Registre su propiedad</p>

      <?php
        include_once './formularioRegistroHoteles/contacto.php';
        include_once './formularioRegistroHoteles/infoGeneral.php';
        include_once './formularioRegistroHoteles/Software-Web.php';
        include_once './formularioRegistroHoteles/infoFiscal.php';
        include_once './formularioRegistroHoteles/infoHabitacion.php';
        include_once './formularioRegistroHoteles/serviciosPropiedad.php';
        include_once './formularioRegistroHoteles/mediosPago.php';
        include_once './formularioRegistroHoteles/pagosClientes.php';
        include_once './formularioRegistroHoteles/marcas.php';
      ?>



</div>
<?php
    include_once 'footer.php';
?>
</body>


    <script src="./js/js/pooper.min.js" ></script>
    <script src="./js/js/bootstrap.min.js"></script>
    <script src="./js/js/jquery-ui.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/contacto.js"></script>
    <script src="./js/fiscal.js"></script>
    <script src="./js/general.js"></script>
    <script src="./js/habitacion.js"></script>
    <script src="./js/propiedad.js"></script>
    <script src="./js/software.js"></script>
    <script src="./js/mediosPago.js"></script>
    <script src="./js/PagosClientes.js"></script>
    <script src="./js/marcas.js"></script>
    <script src="./js/condiciones_cancelacion.js"></script>
</body>
</html>
