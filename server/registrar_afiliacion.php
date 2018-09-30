<?php

require('./conexion.php');
$con = new ConectorBD("localhost","emblemaviajes_david","11111111David1050");
$response['conexion'] = $con->initConexion("emblemaviajes_emblema");

if ($response['conexion']=='OK') {
	$data_afiliacion = json_decode($_POST['datos_afiliacion']);
    $nombres = $data_afiliacion[0]->nombres;
    $apellidos = $data_afiliacion[0]->apellidos;
    $ciudad = $data_afiliacion[0]->ciudad;
    $pais = $data_afiliacion[0]->pais;
    $telefono = $data_afiliacion[0]->telefono;
    $celular = $data_afiliacion[0]->celular;
    $email = $data_afiliacion[0]->email;
    $web = $data_afiliacion[0]->web;
    $observaciones = $data_afiliacion[0]->observaciones;



	$consulta = $con->ejecutarQuery("insert into afiliacion
	(nombres, apellidos, ciudad, pais, telefono, celular, email, web, observaciones)  
	values ('$nombres', '$apellidos', '$ciudad', '$pais', '$telefono', '$celular', '$email', '$web', '$observaciones')");

	if ($consulta) {
		$response['insertado']='Su solicitud de afiliación fue exitosa, pronto nos contactaremos con usted';
		echo json_encode($response);
	}else{
		$response['insertado']='Error al enviar datos para la solicitud de afiliación';
		echo json_encode($response);
	}
}else{
	$response['conexion']='Fallida';
	echo json_encode($response);
}

?>