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
</head>

<body>
  <?php
        include_once 'headerWhite.php';
        include_once 'headerBlack.php';
        ?>


<div class="container-fluid mt-1" >
  <p class="display-3 text-center">Registre su Empresa</p>

      <?php
        include_once './formularioRegistroEmpresas/empresa.php';
        include_once './formularioRegistroEmpresas/personales.php';
        include_once './formularioRegistroEmpresas/otrosDatos.php';
      ?>

</div>
<?php
    include_once 'footer.php';
?>
</body>


    <script src="./js/js/pooper.min.js" ></script>
    <script src="./js/js/bootstrap.min.js"></script>
    <script src="./js/js/jquery-ui.js"></script>
    <script src="./js/empresas.js"></script>
</body>
</html>
