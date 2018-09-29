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
</head>

<body>

<?php
    include_once 'headerBlack.php';
    include_once 'headerWhite.php';
?>
<div class="container">
    <h1 class="display-4 text-center">Formulario de reversión de pagos</h1>
    <form id="form_reversion_pagos">
        <div class="form-group">
            <input type="text" class="form-control" id="id_reversion" placeholder="Número de identificación" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="nombre_reversion" placeholder="Nombre del titular de la tarjeta de crédito con la que se efectuó la compra" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="apellidos_reversion" placeholder="Apellidos" required>
        </div>
        <div class="form-group">
            <small class="form-text">Por medio de la presente y de acuerdo con el Decreto 587 de 2016 expedido por el Ministerio de Industria y Turismo, en consonancia con el Art. 51 de la Ley 1480 del 2011, solicito la reversión de</small>
            <p class="text-center">Tipo de reversión</p>
            <select class="form-control" name="tipo_reversion">
                <option>Pago total</option>
                <option>Pago parcial</option>
            </select>
        </div>
        <div class="form-group">
            <small class="form-text">del producto o servicio que adquirí a través de mecanismos de comercio electrónico, y el cual describo a continuación</small>
            <input type="text" class="form-control" id="valor_total_reversion" placeholder="Valor del producto o servicio" required>            
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="valor_solicitado_reversion" placeholder="Valor solicitado por medio de la reversión de pagos" required>            
        </div>
        <div class="form-group">
            <small class="form-text">Medio de pago</small>
            <p class="text-center">Tipo de cuenta</p>
            <select class="form-control" name="tipo_cuenta_reversion">
                <option>Tarjeta Crédito</option>
                <option>Tarjeta Debito</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="banco" placeholder="Banco" required>
        </div>
        <div class="form-group">
            <p class="text-center">Tipo de tarjeta</p>
            <select class="form-control" name="tipo_tarjeta_reversion">
                <option>Visa</option>
                <option>MasterCard</option>
                <option>Dinners</option>
                <option>American Express</option>
                <option>Otro</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="numero_cuenta_reversion" placeholder="Numero de cuenta (Últimos 4 números)" required>
        </div>
        <div class="form-group">
            <p class="text-center">Descripción del producto</p>
            <select class="form-control" name="descripcion_producto_reversion">
                <option>Hotel</option>
                <option>Hotel + Vuelo</option>
                <option>Paquete</option>
                <option>Carro</option>
                <option>Traslado</option>
                <option>Cruceros</option>
                <option>Seguro</option>
                <option>Otros Servicios</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="numero_reversion" placeholder="Número de compra o reserva" required>
        </div>
        <div class="form-group">
            <p class="text-center">Causal(es) de la solicitud la reversión de pago</p>
            <select class="form-control" name="causa_reversion">
                <option>Fraude</option>
                <option>El producto adquirido no fue recibido</option>
                <option>El producto entregado no corresponde al bien solicitado</option>
                <option>La operación no fue la solicitada</option>
                <option>El producto entregado es defectuoso</option>
            </select>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="correo_reversion" placeholder="Correo electrónico del solicitante" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="telefono_reversion" placeholder="Número telefónico del solicitante de la reversión" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="direccion_reversion" placeholder="Dirección de notificación" required>
        </div>
        <div class="form-check mb-2 mr-sm-2">
            <input class="form-check-input" type="checkbox" name="acepto_reversion_pagos">
            <label class="form-check-label" for="">
            <p>
                Antes de enviar este formulario, debes leer la siguiente información básica sobre 
                <a target="_black" href="javascript:window.open('./pdfs/politica_privacidad.pdf');">
                POLITICAS DE PRIVACIDAD</a><br>
                Al pulsar el botón de ENVIAR SOLICITUD manifiestas haber leído y aceptar esta información.
            </p>
            </label>
        </div>
        <input type="submit" class="btn btn-primary mt-2" value="Enviar solicitud"/>
    </form>
</div>
<?php
    include_once 'footer.php';
?>

</body>
    <script src="./js/js/pooper.min.js" ></script>
    <script src="./js/js/bootstrap.min.js"></script>
    <script src="./js/js/jquery-ui.js"></script>
    <script src="./js/alternativa.js"></script>
    <script src="./js/adicionales/reversion_pagos.js"></script>
</body>
</html>
