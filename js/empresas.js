$("#btn_guardar_empresa").click(function(){
  var $certifico = $('input:checkbox[name=certifico]:checked').val();
	var $acepto = $('input:checkbox[name=acepto]:checked').val();
	if ($certifico && $acepto ) {
    	registrarEmpresa();
  }else{
    	alert('Debes seleccionar los campos de aceptar y certificar');
	}
});

function registrarEmpresa(){
  var datosEmpresa = [];
  var nuevaEmpresa = {};
  var $nombre = $("#nombre_agencia").val();
  var $numero_fiscal = $("#numero_fiscal").val();
  var $direccion = $("#direccion_agencia").val();
  var $cp = $("#cp_empresa").val();
  var $poblacion = $("#poblacion_empresa").val();
  var $provincia = $("#provincia_empresa").val();
  var $pais = $('select[name="pais"] option:selected').text();
  var $email = $("#email_empresa").val();
  var $telefono = $("#telefono_empresa").val();
  var $titulo_persona = $('select[name="titulo_empresa"] option:selected').text();
  var $nombres_persona = $("#nombre").val();
  var $apellidos_persona = $("#apellidos").val();
  var $email_persona = $("#email").val();
  var $telefono_persona = $("#telefono").val();
  var $posicion_persona = $('select[name="posicion"] option:selected').text();
  var $idioma_preferencia = $('select[name="idioma_pref"] option:selected').text();
  var $sector_empresarial = $('select[name="sector_empresarial"] option:selected').text();
  var $eventos = $('input:radio[name=conveci_eventos]:checked').val();
  if (typeof $eventos == "undefined") {
      $eventos = "No especifica"
  };
  var $observaciones = $("#observaciones").val();

  nuevaEmpresa={
    'nombre':$nombre,
    'numero_fiscal':$numero_fiscal,
    'direccion':$direccion,
    'cp':$cp,
    'poblacion':$poblacion,
    'provincia':$provincia,
    'pais':$pais,
    'email':$email,
    'telefono':$telefono,
    'titulo_persona':$titulo_persona,
    'nombres_persona':$nombres_persona,
    'apellidos_persona':$apellidos_persona,
    'email_persona':$email_persona,
    'telefono_persona':$telefono_persona,
    'posicion_persona':$posicion_persona,
    'idioma_preferencia':$idioma_preferencia,
    'sector_empresarial':$sector_empresarial,
    'eventos':$eventos,
    'observaciones':$observaciones
  }

  datosEmpresa.push(nuevaEmpresa);

  $.ajax({
      method: 'POST',
      url: './server/registrar_empresa.php',
      data: {'datos':JSON.stringify(datosEmpresa)},
      cache: false,
      success: function(response){
        alert(response);
      },
      error: function(){
        alert("error en la comunicación con el servidor");
      }
    })

    $("#nombre_agencia").val("");
    $("#numero_fiscal").val("");
    $("#direccion_agencia").val("");
    $("#cp_empresa").val("");
    $("#poblacion_empresa").val("");
    $("#provincia_empresa").val("");
    document.querySelectorAll('[name=pais]').forEach((x) => x.selected=false);
    $("#email_empresa").val("");
    $("#telefono_empresa").val("");
    document.querySelectorAll('[name=titulo_empresa]').forEach((x) => x.selected=false);
    $("#nombre").val("");
    $("#apellidos").val("");
    $("#email").val("");
    $("#telefono").val("");
    document.querySelectorAll('[name=posicion]').forEach((x) => x.selected=false);
    document.querySelectorAll('[name=idioma_pref]').forEach((x) => x.selected=false);
    document.querySelectorAll('[name=sector_empresarial]').forEach((x) => x.selected=false);
    document.querySelectorAll('[name=conveci_eventos]').forEach((x) => x.checked=false);
    $("#observaciones").val("");
}
