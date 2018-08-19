<?php

require('./conexion.php');
$con = new ConectorBD('localhost','root','');
$response['conexion'] = $con->initConexion('emblema');

if ($response['conexion']=='OK') {
	$datos_proveedor = json_decode($_POST['datos_proveedor']);
	$nombre_prove = $datos_proveedor[0]->nombre_prove;
	$numero_fiscal = $datos_proveedor[0]->numero_fiscal;
	$servicios = $datos_proveedor[0]->servicios;
	$direccion_prove = $datos_proveedor[0]->direccion_prove;
	$ciudad_prove = $datos_proveedor[0]->ciudad_prove;
	$pais = $datos_proveedor[0]->pais;
	$cp = $datos_proveedor[0]->cp;
	$nombre = $datos_proveedor[0]->nombre;
	$apellidos = $datos_proveedor[0]->apellidos;
	$telefono = $datos_proveedor[0]->telefono;
	$email = $datos_proveedor[0]->email;
	$idioma_pref = $datos_proveedor[0]->idioma_pref;
	$observaciones = $datos_proveedor[0]->observaciones;

	$consulta = $con->ejecutarQuery(
		"insert into proveedores
		(nombre_prove, numero_fiscal, servicios, direccion_prove, ciudad_prove, pais, cp, nombre, apellidos, telefono, email, idioma_pref, observaciones)
		values('$nombre_prove', '$numero_fiscal', '$servicios', '$direccion_prove', '$ciudad_prove', '$pais', '$cp', '$nombre', '$apellidos', '$telefono', '$email', '$idioma_pref', '$observaciones')");

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
