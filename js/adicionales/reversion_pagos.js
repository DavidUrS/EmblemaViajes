$("#form_reversion_pagos").submit((e)=>{
    e.preventDefault();
	let $acepto = $('input:checkbox[name=acepto_reversion_pagos]:checked').val();
    if ($acepto) {
        registrarReversionpagos();
    }else{
            alert('Debes aceptar las politicas de privacidad');
    }
})

function registrarReversionpagos(){
    $datosReversion = [];
    $nuevaReversion = {};

    $id = $("#nombre_reversion").val();
    $nombre = $("#id_reversion").val();
    $apellidos = $("#apellidos_reversion").val();
    $tipo_reversion = $('select[name="tipo_reversion"] option:selected').text();
    $valor_total = $("#valor_total_reversion").val();
    $valor_solicitado = $("#valor_solicitado_reversion").val();
    $tipo_cuenta = $('select[name="tipo_cuenta_reversion"] option:selected').text();
    $banco = $("#banco").val();
    $tipo_tarjeta = $('select[name="tipo_tarjeta_reversion"] option:selected').text();
    $numero_cuenta = $("#numero_cuenta_reversion").val();
    $descripcion = $('select[name="descripcion_producto_reversion"] option:selected').text();
    $numero_servicio = $("#numero_reversion").val();
    $causa = $('select[name="causa_reversion"] option:selected').text();
    $correo = $("#correo_reversion").val();
    $telefono = $("#telefono_reversion").val();
    $direccion = $("#direccion_reversion").val();

    $nuevaReversion = {
        'id': $id,
        'nombre': $nombre,
        'apellidos': $apellidos,
        'tipo_reversion': $tipo_reversion,
        'valor_total': $valor_total,
        'valor_solicitado': $valor_solicitado,
        'tipo_cuenta': $tipo_cuenta,
        'banco': $banco,
        'tipo_tarjeta': $tipo_tarjeta,
        'numero_cuenta': $numero_cuenta,
        'descripcion': $descripcion,
        'numero_servicio': $numero_servicio,
        'causa': $causa,
        'correo': $correo,
        'telefono': $telefono,
        'direccion': $direccion
    }
    $datosReversion.push($nuevaReversion);
    $.ajax({
        method: 'POST',
        url: './server/registrar_reversion.php',
        data: {'datos_reversion':JSON.stringify($datosReversion)},
        cache: false,
        success: function(response){
          alert(response);
        },
        error: function(){
          alert("error en la comunicación con el servidor");
        }
      })

    $id = $("#nombre_reversion").val("");
    $nombre = $("#id_reversion").val("");
    $apellidos = $("#apellidos_reversion").val("");
    document.querySelectorAll('[name=tipo_reversion]').forEach((x) => x.selected=false);
    $valor_total = $("#valor_total_reversion").val("");
    $valor_solicitado = $("#valor_solicitado_reversion").val("");
    document.querySelectorAll('[name=tipo_cuenta_reversion]').forEach((x) => x.selected=false);
    $banco = $("#banco").val("");
    document.querySelectorAll('[name=tipo_tarjeta_reversion]').forEach((x) => x.selected=false);
    $numero_cuenta = $("#numero_cuenta_reversion").val("");
    document.querySelectorAll('[name=descripcion_producto_reversion]').forEach((x) => x.selected=false);
    $numero_servicio = $("#numero_reversion").val("");
    document.querySelectorAll('[name=causa_reversion]').forEach((x) => x.selected=false);
    $correo = $("#correo_reversion").val("");
    $telefono = $("#telefono_reversion").val("");
    $direccion = $("#direccion_reversion").val("");
}