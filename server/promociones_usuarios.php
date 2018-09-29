<?php

require('./conexion.php');
$con = new ConectorBD('localhost','root','');
$response['conexion'] = $con->initConexion('emblema');

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
