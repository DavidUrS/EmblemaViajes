<?php

require('./conexion.php');
$con = new ConectorBD("localhost","emblemaviajes_david","11111111David1050");
$response['conexion'] = $con->initConexion("emblemaviajes_emblema");

if ($response['conexion']=='OK') {
	$data = json_decode($_POST['datos']);
	$nombre = $data[0]->nombre;
	$numero_fiscal = $data[0]->numero_fiscal;
  $direccion = $data[0]->direccion;
	$cp = $data[0]->cp;
  $poblacion = $data[0]->poblacion;
	$provincia = $data[0]->provincia;
	$pais = $data[0]->pais;
  $email = $data[0]->email;
	$telefono = $data[0]->telefono;
  $titulo_persona = $data[0]->titulo_persona;
  $nombres_persona = $data[0]->nombres_persona;
  $apellidos_persona = $data[0]->apellidos_persona;
  $email_persona = $data[0]->email_persona;
  $telefono_persona = $data[0]->telefono_persona;
  $posicion_persona = $data[0]->posicion_persona;
  $idioma_preferencia = $data[0]->idioma_preferencia;
  $sector_empresarial = $data[0]->sector_empresarial;
  $eventos = $data[0]->eventos;
	$observaciones = $data[0]->observaciones;

	$consulta = $con->ejecutarQuery(
		"insert into empresas
		(nombre, numero_fiscal, direccion, cp, poblacion, provincia, pais, email, telefono, titulo_persona, nombres_persona, apellidos_persona, email_persona, telefono_persona, posicion_persona, idioma_preferencia, sector_empresarial, eventos, observaciones)
		values('$nombre', '$numero_fiscal', '$direccion', '$cp', '$poblacion', '$provincia', '$pais', '$email', '$telefono', '$titulo_persona', '$nombres_persona', '$apellidos_persona', '$email_persona', '$telefono_persona', '$posicion_persona', '$idioma_preferencia', '$sector_empresarial', '$eventos', '$observaciones')");

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
