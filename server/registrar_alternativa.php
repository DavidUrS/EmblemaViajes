<?php

require('./conexion.php');
$con = new ConectorBD('localhost','root','');
$response['conexion'] = $con->initConexion('emblema');

if ($response['conexion']=='OK') {
	$data_alt = json_decode($_POST['datos_alternativa']);
	$nombre = $data_alt[0]->nombre;
	$apellidos = $data_alt[0]->apellidos;
	$email = $data_alt[0]->email;
	$telefono = $data_alt[0]->telefono;
	$pais = $data_alt[0]->pais;
	$ciudad = $data_alt[0]->ciudad;

	$consulta = $con->ejecutarQuery("insert into alternativa
	(nombre, apellidos, email, telefono, pais, ciudad) 
	values ('$nombre', '$apellidos', '$email', '$telefono', '$pais', '$ciudad')");

	if ($consulta) {
		$response['insertado']='Exitoso';
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