<?php
    include_once 'headerBlack.php';
    include_once 'headerWhite.php';
?>

<div class="container-fluid mt-5 " id="promociones">
    <div class="row">
        <div class="col-md-6 d-flex align-items-center">
            <h2 class="display-4">Quiero recibir ofertas y promociones</h2>
        </div>
        <div class="col-md-6">
            <form class="form-inline">
                <label class="sr-only" for="inlineFormInputName2">Nombre</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="nombre_prom" placeholder="Digita tu nombre" required>

                <label class="sr-only" for="inlineFormInputGroupUsername2">Email</label>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text">@</div>
                    </div>
                    <input type="text" class="form-control" id="email_prom" placeholder="Digita tu email" required>
                </div>

                <div class="form-check mb-2 mr-sm-2">
                    <input class="form-check-input" type="checkbox" name="promociones">
                    <label class="form-check-label" for="">
                    <p>
                        Antes de enviar este formulario, debes leer la siguiente información básica sobre 
                        <a target="_black" class="text-white" href="javascript:window.open('./pdfs/politica_privacidad.pdf')">
                        POLITICAS DE PRIVACIDAD</a><br>
                        Al pulsar el botón de RECIBIR OFERTAS manifiestas haber leído y aceptar esta información.
                    </p>
                    </label>
                </div>

                <button type="submit" class="btn btn-light mb-2" id="rec_promo">Recibir ofertas</button>
            </form>
        </div>
    </div>
</div>

<?php
  include_once 'footer.php';
?>
