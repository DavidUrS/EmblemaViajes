<?php

require('./conexion.php');
$con = new ConectorBD('localhost','root','');
$response['conexion'] = $con->initConexion('emblema');

if ($response['conexion']=='OK') {
    $data_reversion = json_decode($_POST['datos_reversion']);
    $id = $data_reversion[0]->id;
    $nombre = $data_reversion[0]->nombre;
    $apellidos = $data_reversion[0]->apellidos;
    $tipo_reversion = $data_reversion[0]->tipo_reversion;
    $valor_total = $data_reversion[0]->valor_total;
    $valor_solicitado = $data_reversion[0]->valor_solicitado;
    $tipo_cuenta = $data_reversion[0]->tipo_cuenta;
    $banco = $data_reversion[0]->banco;
    $tipo_tarjeta = $data_reversion[0]->tipo_tarjeta;
    $numero_cuenta = $data_reversion[0]->numero_cuenta;
    $descripcion = $data_reversion[0]->descripcion;
    $numero_servicio = $data_reversion[0]->numero_servicio;
    $causa = $data_reversion[0]->causa;
    $correo = $data_reversion[0]->correo;
    $telefono = $data_reversion[0]->telefono;
    $direccion = $data_reversion[0]->direccion;
    
    $consulta = $con->ejecutarQuery("insert into reversion
	(id, nombre, apellidos, tipo_reversion, valor_total, valor_solicitado, tipo_cuenta, banco, tipo_tarjeta, numero_cuenta, descripcion, numero_servicio, causa, correo, telefono, direccion)  
	values ('$id', '$nombre', '$apellidos', '$tipo_reversion', '$valor_total', '$valor_solicitado', '$tipo_cuenta', '$banco', '$tipo_tarjeta', '$numero_cuenta', '$descripcion', '$numero_servicio','$causa','$correo','$telefono','$direccion')");
    
    if ($consulta) {
		$response['insertado']='Petición de reversión de pago enviada con exito, pronto nos contactaremos con usted';
		echo json_encode($response);
	}else{
		$response['insertado']='Error al enviar petición de reversión de pago';
		echo json_encode($response);
	}
}else{
	$response['conexion']='Fallida';
	echo json_encode($response);
}

?>