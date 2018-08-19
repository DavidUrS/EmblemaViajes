<?php

require('./conexion.php');
$con = new ConectorBD('localhost','root','');
$response['conexion'] = $con->initConexion('emblema');

if ($response['conexion']=='OK') {
	$data_contact = json_decode($_POST['datos_contactanos']);
    $nombres = $data_contact[0]->nombres;
    $apellidos = $data_contact[0]->apellidos;
    $numero = $data_contact[0]->numero;
    $email = $data_contact[0]->email;
    $inquietudes = $data_contact[0]->inquietudes;
    $tema = $data_contact[0]->tema;

	$consulta = $con->ejecutarQuery("insert into contacto
	(nombres, apellidos, telefono, email, inquietudes, tema)  
	values ('$nombres', '$apellidos', '$numero', '$email', '$inquietudes', '$tema')");

	if ($consulta) {
		$response['insertado']='Su inquietud se registro exitosamente, pronto nos contactaremos con usted';
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