<?php 


require __DIR__.'./../vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;

session_start();
if (isset($_SESSION["propiedad"]) && isset($_SESSION["representante"]) 
    && isset($_SESSION["pais"]) && isset($_SESSION["ciudad"]) && isset($_SESSION["barrio"])
    && isset($_SESSION["direccion"]) && isset($_SESSION["nombre"]) && isset($_SESSION["id"]) ) {
    ob_start();
    require_once './archivo_colaboracion.php';
    $html = ob_get_clean();
    $html2pf = new Html2Pdf();
    $html2pf->writeHTML($html);
    $html2pf->output("acuerdo_colaboracion.pdf");
}else{
    $html2pf_error = new Html2Pdf();
    $html2pf_error->writeHTML('<h1>No has ingresado los datos necesarios de tu propiedad
    en la base de datos</h1><br>
    <h2>Debes registrar tu propiedad para poder generar un acuerdo de colaboración</h2>
    ');
    $html2pf_error->output("acuerdo_invalido.pdf");
}


?>