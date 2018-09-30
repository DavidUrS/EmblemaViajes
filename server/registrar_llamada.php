<?php

require('./conexion.php');
$con = new ConectorBD("localhost","emblemaviajes_david","11111111David1050");
$response['conexion'] = $con->initConexion("emblemaviajes_emblema");

if ($response['conexion']=='OK') {
	$data_llamada = json_decode($_POST['datos_llamada']);
    $numero = $data_llamada[0]->numero;
    $nombre = $data_llamada[0]->nombre;

	$consulta = $con->ejecutarQuery("insert into llamadas
	(numero, nombres)  
	values ('$numero', '$nombre')");

	if ($consulta) {
		$response['insertado']='Llamada solicitada, pronto nos contactaremos con usted';
		echo json_encode($response);
	}else{
		$response['insertado']='Error al insertar';
		echo json_encode($response);
	}
}else{
	$response['conexion']='Fallida';
	echo json_encode($response);
}


?>