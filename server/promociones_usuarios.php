<?php

require('./conexion.php');
$con = new ConectorBD("localhost","emblemaviajes_david","11111111David1050");
$response['conexion'] = $con->initConexion("emblemaviajes_emblema");

if ($response['conexion']=='OK') {
	$data_prom = json_decode($_POST['datos_promocion']);
	$nombre = $data_prom[0]->nombre;
	$email = $data_prom[0]->email;

	$consulta = $con->ejecutarQuery("insert into promociones_usuarios
	(nombre, email) 
	values ('$nombre', '$email')");

	if ($consulta) {
		$response['insertado']='Recibira en su correro, las nuevas ofertas';
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
