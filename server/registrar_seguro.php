<?php

require('./conexion.php');
$con = new ConectorBD("localhost","emblemaviajes_david","11111111David1050");
$response['conexion'] = $con->initConexion("emblemaviajes_emblema");

if ($response['conexion']=='OK') {
	$data_seguro = json_decode($_POST['datos_seguro']);
    $nombres = $data_seguro[0]->nombres;
    $apellidos = $data_seguro[0]->apellidos;
    $ciudad = $data_seguro[0]->ciudad;
    $pais = $data_seguro[0]->pais;
    $telefono = $data_seguro[0]->telefono;
    $celular = $data_seguro[0]->celular;
    $email = $data_seguro[0]->email;
    $observaciones = $data_seguro[0]->observaciones;


	$consulta = $con->ejecutarQuery("insert into seguros
	(nombres, apellidos, ciudad, pais, telefono, celular, email, observaciones)  
	values ('$nombres', '$apellidos', '$ciudad', '$pais', '$telefono', '$celular', '$email', '$observaciones')");

	if ($consulta) {
		$response['insertado']='Su solicitud de seguro fue exitosa, pronto nos contactaremos con usted';
		echo json_encode($response);
	}else{
		$response['insertado']='Error al enviar datos para la solicitud del seguro';
		echo json_encode($response);
	}
}else{
	$response['conexion']='Fallida';
	echo json_encode($response);
}

?>