<?php

require('./conexion.php');
$con = new ConectorBD('localhost','root','');
$response['conexion'] = $con->initConexion('emblema');

if ($response['conexion']=='OK') {
	$data_royal = json_decode($_POST['datos_royal']);
    $nombres = $data_royal[0]->nombres;
    $apellidos = $data_royal[0]->apellidos;
    $ciudad = $data_royal[0]->ciudad;
    $pais = $data_royal[0]->pais;
    $telefono = $data_royal[0]->telefono;
    $celular = $data_royal[0]->celular;
    $email = $data_royal[0]->email;
    $observaciones = $data_royal[0]->observaciones;


	$consulta = $con->ejecutarQuery("insert into royal_concierge
	(nombres, apellidos, ciudad, pais, telefono, celular, email, observaciones)  
	values ('$nombres', '$apellidos', '$ciudad', '$pais', '$telefono', '$celular', '$email', '$observaciones')");

	if ($consulta) {
		$response['insertado']='Solicitud a Royal Concierge realizada con exito, pronto nos contactaremos con usted';
		echo json_encode($response);
	}else{
		$response['insertado']='Error al enviar la solicitud';
		echo json_encode($response);
	}
}else{
	$response['conexion']='Fallida';
	echo json_encode($response);
}


?>