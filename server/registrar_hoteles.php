<?php
// Iniciando session
session_start();
// Require de la conexion
require('./conexion.php');
// Instancia de la coneccion
$con = new ConectorBD('localhost','root','');
// Conectando a la base de datos
$response['conexion'] = $con->initConexion('emblema');

// Probando conección, respuesta OK
if ($response['conexion']=='OK') {

  // Insertando datos de contacto
  if(isset($_POST['datos_contacto'])){

    // Guardando los datos del post de datos del contacto en variables
    $datos_contacto = json_decode($_POST['datos_contacto']);
    $nombre_contacto = $datos_contacto[0]->nombre;
    $id_contacto = $datos_contacto[0]->id;
    $nombre_propiedad = $datos_contacto[0]->nombre_hotel;
    $cargo_contacto = $datos_contacto[0]->cargo;
    $telefono_contacto = $datos_contacto[0]->telefono;
    $telefono_alternativo_contacto = $datos_contacto[0]->telefono_alternativo;
    $email_contacto = $datos_contacto[0]->email;
    $cadena_hotelera = $datos_contacto[0]->cadena_hotelera;
    $nombre_cadena_hotelera = $datos_contacto[0]->nombre_cadena_hotelera;

    // Ejecutando el query de inserccion de datos de contacto
    $consulta = $con->ejecutarQuery("insert into hoteles
    (nombre_contacto, id, nombre_propiedad, cargo_contacto, telefono_contacto, telefono_alternativo_contacto, email_contacto, cadena_hotelera, nombre_cadena_hotelera)
    values ('$nombre_contacto','$id_contacto','$nombre_propiedad','$cargo_contacto','$telefono_contacto','$telefono_alternativo_contacto','$email_contacto','$cadena_hotelera','$nombre_cadena_hotelera')");
    // Probando que se hayan insertado los datos correctamente
    if ($consulta) {
      // Comprobando si existe una session anterior para borrarla y crear una nueva session
      if (isset($_SESSION["propiedad"])) {
      // Si anteriormente habian datos asociados de algun hotel, olvida el hotel, y accede a el nuevo hotel
        session_destroy();
        session_start();
      }
      // Se crea, la variable session
      $_SESSION["propiedad"]=$nombre_propiedad;
      $_SESSION["representante"] = $nombre_contacto;
      $_SESSION["nombre"] = $nombre_contacto;
      $_SESSION["id"] = $id_contacto;

  		$response['insertado']='Exitoso';
  		echo json_encode($response);
  	}else{
      // Si no se ejecuto el insertado de datos, enviara un mensaje de error
  		$response['insertado']='Error al insertar';
  		echo json_encode($response);
  	}
  }elseif (isset($_POST['datos_general'])) {

    // Insertando datos de generales
    // Comprobando que exista una session para proceder a insertar
    if (isset($_SESSION["propiedad"])) {
      // Si existe la session, se reciben los datos del post de datos generales
      // Se decodifican los datos recibidos
      $datos_general = json_decode($_POST['datos_general']);
      $tipo_alojamiento = $datos_general[0]->tipo_alojamiento;
      $numero_habitaciones = $datos_general[0]->numero_habitaciones;
      $categoria = $datos_general[0]->categoria;
      $direccion = $datos_general[0]->direccion;
      $ciudad = $datos_general[0]->ciudad;
      $barrio = $datos_general[0]->barrio;
      $pais = $datos_general[0]->pais;
      $codigo_postal = $datos_general[0]->codigo_postal;
      $session = $_SESSION["propiedad"];
      $_SESSION["pais"] = $pais;
      $_SESSION["ciudad"]= $ciudad;
      $_SESSION["barrio"]= $barrio;
      $_SESSION["direccion"]= $direccion;

      // Consultemos que existe la session, es decir, el hotel al que vamos a insertar
      $select = $con->ejecutarQuery("SELECT nombre_propiedad FROM hoteles WHERE nombre_propiedad='$session'");
      if ($select->num_rows>0) {
        // Ejecutando el query de inserccion de datos generales
        $consulta = $con->ejecutarQuery("UPDATE hoteles SET
          tipo_alojamiento='$tipo_alojamiento', numero_habitaciones=$numero_habitaciones,
          categoria='$categoria', direccion='$direccion', ciudad='$ciudad',
          barrio='$barrio', pais='$pais', codigo_postal='$codigo_postal'
          WHERE nombre_propiedad='$session'");
        if ($consulta) {
          // Comprobando que se insertaron los datos generales correctamente
          $response['insertado']='Exitoso';
      		echo json_encode($response);
        }else{
          // Si no se ejecuto el insertado de datos, enviara un mensaje de error
      		$response['insertado']='Error al insertar';
      		echo json_encode($response);
      	}
      }else{
        // Si no existe una session activa se manda el mensaje de session y no se procede a insertar los datos
        echo "No existe un hotel asociado en la base de datos, por favor, agrega un hotel para asociarlo y guardar sus datos.";
      }
    }else{
      // Si no existe una session asociada, mandara el mensaje de alerta, y NO guardara los datos
      echo "Imposible guardar datos, si no tiene una propiedad asociada, debes cargar datos o crear una nueva propiedad.
      Dirigete a el formulario anterior, PASO 1( Datos de contacto)";
    }
  }elseif (isset($_POST['datos_software'])) {

    // Insertando datos del software
    // Comprobando que exista una session activa
    if (isset($_SESSION["propiedad"])) {
      // Si existe la session, se reciben los datos del post de datos de software
      // Se decodifican los datos recibidos
      $datos_software = json_decode($_POST['datos_software']);
      $software_hotelero = $datos_software[0]->software_hotelero;
      $pms = $datos_software[0]->pms;
      $channel_manager = $datos_software[0]->channel_manager;
      $nombre_channel_manager = $datos_software[0]->nombre_channel_manager;
      $web = $datos_software[0]->web;
      $url = $datos_software[0]->url;
      $session = $_SESSION["propiedad"];

      // Consultemos que existe la session, es decir, el hotel al que vamos a insertar
      $select = $con->ejecutarQuery("SELECT nombre_propiedad FROM hoteles WHERE nombre_propiedad='$session'");
      if ($select->num_rows>0) {
        // Ejecutando el query de inserccion de datos de software
        $consulta = $con->ejecutarQuery("UPDATE hoteles SET
          software_hotelero='$software_hotelero', pms='$pms',
          channel_manager='$channel_manager', nombre_channel_manager='$nombre_channel_manager',
          web='$web', url='$url'
          WHERE nombre_propiedad='$session'");
        // Ejecutando el query de inserccion de datos se software
        if ($consulta) {
          $response['insertado']='Exitoso';
      		echo json_encode($response);
        }else{
          // Si no se ejecuto el insertado de datos, enviara un mensaje de error
      		$response['insertado']='Error al insertar';
      		echo json_encode($response);
      	}

      }else{
        // Si no existe una session activa se manda el mensaje de session y no se procede a insertar los datos
        echo "No existe un hotel asociado en la base de datos, por favor, agrega un hotel para asociarlo y guardar sus datos.";
      }
    }else{
      // Si no existe una session activa se manda el mensaje de session y no se procede a insertar los datos
      echo "No existe un hotel asociado, por favor, agrega un hotel para asociarlo y guardar sus datos.";
    }
  }elseif (isset($_POST['datos_fiscal'])) {
    // Insertando datos de software
    // Comprobando que exista una session para proceder a insertar
    if (isset($_SESSION["propiedad"])) {
      $datos_fiscal = json_decode($_POST['datos_fiscal']);
      $razon_social = $datos_fiscal[0]->razon_social;
      $rut = $datos_fiscal[0]->rut;
      $rnt = $datos_fiscal[0]->rnt;
      $categoria_iva = $datos_fiscal[0]->categoria_iva;
      $direccion = $datos_fiscal[0]->direccion;
      $ciudad = $datos_fiscal[0]->ciudad;
      $pais = $datos_fiscal[0]->pais;
      $session = $_SESSION["propiedad"];

      // Consultemos que existe la session, es decir, el hotel al que vamos a insertar
      $select = $con->ejecutarQuery("SELECT nombre_propiedad FROM hoteles WHERE nombre_propiedad='$session'");

      if ($select->num_rows>0) {
        // Ejecutando el query de inserccion de datos fiscales
        $consulta = $con->ejecutarQuery("UPDATE hoteles SET
          razon_social='$razon_social', rut='$rut',
          rnt='$rnt', categoria_iva='$categoria_iva',
          direccion_fiscal='$direccion', ciudad_fiscal='$ciudad', pais_fiscal='$pais'
          WHERE nombre_propiedad='$session'");
        // Ejecutando el query de inserccion de datos fiscales
        if ($consulta) {
          $response['insertado']='Exitoso';
      		echo json_encode($response);
        }else{
          // Si no se ejecuto el insertado de datos, enviara un mensaje de error
      		$response['insertado']='Error al insertar';
      		echo json_encode($response);
      	}

      }else{
        // Si no existe una session activa se manda el mensaje de session y no se procede a insertar los datos
        echo "No existe un hotel asociado en la base de datos, por favor, agrega un hotel para asociarlo y guardar sus datos.";
      }
    }else{
      // Si no existe una session activa se manda el mensaje de session y no se procede a insertar los datos
      echo "No existe un hotel asociado, por favor, agrega un hotel para asociarlo y guardar sus datos.";
    }
  }elseif (isset($_POST['datos_habitacion'])) {

    $datos_habitacion =json_decode($_POST['datos_habitacion']);
    // Revisemos que se haya añadido la habitación con el boton añadir habitación
    if(!empty($datos_habitacion)) {
      // Comprobando que exista una session para proceder a insertar
      if (isset($_SESSION["propiedad"])) {
        // Consultemos que existe la session, es decir, el hotel al que vamos a insertar
        $session = $_SESSION["propiedad"];
        $select = $con->ejecutarQuery("SELECT nombre_propiedad FROM hoteles WHERE nombre_propiedad='$session'");
        if ($select->num_rows>0) {
          // Ejecutando el query de inserccion de datos de habitacion
            // Validación realizada y se procedera a insertar los datos
              $servicios= '';
              for ($i=0; $i < sizeof($datos_habitacion); $i++) {
                $servicios .= json_encode($datos_habitacion[$i]);
              }
              $consulta = $con->ejecutarQuery("UPDATE hoteles SET
                habitaciones='$servicios'
                WHERE nombre_propiedad='$session'");
                if ($consulta) {
                  $response['insertado']='Exitoso';
                  echo json_encode($response);
                }else{
                  // Si no se ejecuto el insertado de datos, enviara un mensaje de error
                  $response['insertado']='Error al insertar';
                  echo json_encode($response);
                }
          }else{
          // Si no existe una session activa se manda el mensaje de session y no se procede a insertar los datos
            echo "No existe un hotel asociado en la base de datos, por favor, agrega un hotel para asociarlo y guardar sus datos.";
          }
        }else{
        // Si no existe una session activa se manda el mensaje de session y no se procede a insertar los datos
          echo "No existe un hotel asociado, por favor, agrega un hotel para asociarlo y guardar sus datos.";
        }

    }elseif(empty($datos_habitacion)){
      // Alerta de que no se añadio ninguna habitación
      echo "No no";

    }
  }elseif (isset($_POST['datos_propiedad'])) {
    $datos_propiedad =$_POST['datos_propiedad'];

    if (isset($_SESSION["propiedad"])) {
      $session = $_SESSION["propiedad"];
      $select = $con->ejecutarQuery("SELECT nombre_propiedad FROM hoteles WHERE nombre_propiedad='$session'");
      if ($select->num_rows>0) {
        // Ejecutando el query de inserccion de datos de servicios de propiedad
          // Validación realizada y se procedera a insertar los datos
            $consulta = $con->ejecutarQuery("UPDATE hoteles SET
              servicios_propiedad='$datos_propiedad'
              WHERE nombre_propiedad='$session'");
              if ($consulta) {
                $response['insertado']='Exitoso';
                echo json_encode($response);
              }else{
                // Si no se ejecuto el insertado de datos, enviara un mensaje de error
                $response['insertado']='Error al insertar';
                echo json_encode($response);
              }
      }else {
        // Si no existe una session activa se manda el mensaje de session y no se procede a insertar los datos
          echo "No existe un hotel asociado en la base de datos, por favor, agrega un hotel para asociarlo y guardar sus datos.";
      }
    }else{
      // Si no existe una session activa se manda el mensaje de session y no se procede a insertar los datos
      echo "No existe un hotel asociado, por favor, agrega un hotel para asociarlo y guardar sus datos.";
    }
  }elseif(isset($_POST['datos_condicion'])) {
    if (isset($_SESSION["propiedad"])) {
      $session = $_SESSION["propiedad"];
      $select = $con->ejecutarQuery("SELECT nombre_propiedad FROM hoteles WHERE nombre_propiedad='$session'");
      if ($select->num_rows>0) {
        $datos_condicion = json_decode($_POST['datos_condicion']);
        $cancelacion_grat = $datos_condicion[0]->cancelacion_grat;
        $penalidad = $datos_condicion[0]->penalidad;
        $hora_entrada = $datos_condicion[0]->hora_entrada;
        $hora_salida = $datos_condicion[0]->hora_salida;
        $fumar_propiedad = $datos_condicion[0]->fumar_propiedad;
        $aloj_ninos = $datos_condicion[0]->aloj_ninos;
        $mascotas = $datos_condicion[0]->mascotas;
        $estancia_minima = $datos_condicion[0]->estancia_minima;

        $consulta = $con->ejecutarQuery("UPDATE hoteles SET
          cancelacion_grat='$cancelacion_grat', penalidad='$penalidad',
          hora_entrada='$hora_entrada', hora_salida='$hora_salida',
          fumar_propiedad='$fumar_propiedad', aloj_ninos='$aloj_ninos',
          mascotas='$mascotas', estancia_minima='$estancia_minima'
          WHERE nombre_propiedad='$session'");
          if ($consulta) {
            $response['insertado']='Exitoso';
            echo json_encode($response);
          }else{
            // Si no se ejecuto el insertado de datos, enviara un mensaje de error
            $response['insertado']='Error al insertar';
            echo json_encode($response);
          }
      }else {
        // Si no existe una session activa se manda el mensaje de session y no se procede a insertar los datos
          echo "No existe un hotel asociado en la base de datos, por favor, agrega un hotel para asociarlo y guardar sus datos.";
      }
    }else{
      // Si no existe una session activa se manda el mensaje de session y no se procede a insertar los datos
      echo "No existe un hotel asociado, por favor, agrega un hotel para asociarlo y guardar sus datos.";
    }
  }elseif (isset($_POST['datos_pagos_clientes'])) {
    if (isset($_SESSION["propiedad"])) {
      $session = $_SESSION["propiedad"];
      $select = $con->ejecutarQuery("SELECT nombre_propiedad FROM hoteles WHERE nombre_propiedad='$session'");
      if ($select->num_rows>0) {
        $datos_pagos = json_decode($_POST['datos_pagos_clientes']);
        $tarjet_estable = $datos_pagos[0]->tarjet_estable;
        $listado_tarjetas = $datos_pagos[0]->listado_tarjetas;
        $iva_pagar = $datos_pagos[0]->iva_pagar;
        $iva_municipal = $datos_pagos[0]->iva_municipal;
        $importe = $datos_pagos[0]->importe;
        $iva_muni_incluido = $datos_pagos[0]->iva_muni_incluido;
        $pagar_suplemento = $datos_pagos[0]->pagar_suplemento;

        $consulta = $con->ejecutarQuery("UPDATE hoteles SET
          tarjet_estable='$tarjet_estable', listado_tarjetas='$listado_tarjetas',
          iva_pagar='$iva_pagar', iva_municipal='$iva_municipal',
          importe='$importe', iva_muni_incluido='$iva_muni_incluido',
          pagar_suplemento='$pagar_suplemento'
          WHERE nombre_propiedad='$session'");
          if ($consulta) {
            $response['insertado']='Exitoso';
            echo json_encode($response);
          }else{
            // Si no se ejecuto el insertado de datos, enviara un mensaje de error
            $response['insertado']='Error al insertar';
            echo json_encode($response);
          }
      }else {
        // Si no existe una session activa se manda el mensaje de session y no se procede a insertar los datos
          echo "No existe un hotel asociado en la base de datos, por favor, agrega un hotel para asociarlo y guardar sus datos.";
      }
    }else{
      // Si no existe una session activa se manda el mensaje de session y no se procede a insertar los datos
      echo "No existe un hotel asociado, por favor, agrega un hotel para asociarlo y guardar sus datos.";
    }
  }elseif (isset($_POST['datos_marcas'])) {
    if (isset($_SESSION["propiedad"])) {
      $session = $_SESSION["propiedad"];
      $select = $con->ejecutarQuery("SELECT nombre_propiedad FROM hoteles WHERE nombre_propiedad='$session'");
      if ($select->num_rows>0) {
        $datos_marcas = json_decode($_POST['datos_marcas']);
        $lista_marcas = $datos_marcas[0]->lista_marcas;

        $consulta = $con->ejecutarQuery("UPDATE hoteles SET
          listado_marcas='$lista_marcas'
          WHERE nombre_propiedad='$session'");
          if ($consulta) {
            $response['insertado']='Exitoso';
            echo json_encode($response);
          }else{
            // Si no se ejecuto el insertado de datos, enviara un mensaje de error
            $response['insertado']='Error al insertar';
            echo json_encode($response);
          }
      }
    }else{
      // Si no existe una session activa se manda el mensaje de session y no se procede a insertar los datos
      echo "No existe un hotel asociado, por favor, agrega un hotel para asociarlo y guardar sus datos.";
    }
  }
}else{
	$response['conexion']='Fallida';
	echo json_encode($response);
}



?>
