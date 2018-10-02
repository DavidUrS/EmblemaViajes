<?php
  $pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'concepto';
?>
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
<div id="royal" class="container">
    <h1 class="display-4 text-center mt-1">Descubre Royal Concierge</h1>
    <img width="15%" class="mx-auto d-block" src="./images/19.jpg" alt="">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="?p=concepto">¿Qué es Royal Concierge?</a></li>
        <li class="breadcrumb-item"><a href="?p=inscripcion">¿Quién puede inscribirse?</a></li>
        <li class="breadcrumb-item"><a href="?p=rc">¿Qué es el RC LOYALTY PROGRAM?</a></li>
        <li class="breadcrumb-item"><a href="?p=como_funciona">¿Cómo funciona Royal Concierge?</a></li>
      </ol>
    </nav>
    <hr>
    
    <?php
      require_once ("royal/".$pagina.'.php');
    ?>
    <p></p>
    <hr>
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
