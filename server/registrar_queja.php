<?php

require('./conexion.php');
$con = new ConectorBD('localhost','root','');
$response['conexion'] = $con->initConexion('emblema');

if ($response['conexion']=='OK') {
	$data_queja = json_decode($_POST['datos_queja']);
    $nombres = $data_queja[0]->nombres;
    $apellidos = $data_queja[0]->apellidos;
    $numero = $data_queja[0]->numero;
    $email = $data_queja[0]->email;
    $queja = $data_queja[0]->queja;
    $tema = $data_queja[0]->tema;

	$consulta = $con->ejecutarQuery("insert into quejas
	(nombres, apellidos, numero, email, queja, tema)  
	values ('$nombres', '$apellidos', '$numero', '$email', '$queja', '$tema')");

	if ($consulta) {
		$response['insertado']='Queja enviada con exito, pronto nos contactaremos con usted';
		echo json_encode($response);
	}else{
		$response['insertado']='Error al enviar queja';
		echo json_encode($response);
	}
}else{
	$response['conexion']='Fallida';
	echo json_encode($response);
}


?>