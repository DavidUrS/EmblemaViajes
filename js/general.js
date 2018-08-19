$("#fomuGeneral").submit(function(event){
  event.preventDefault();
  registrarGeneral();
})

function registrarGeneral(){
  var $datosGenerales=[];
  var $nuevoGenerales={};
  var $tipo_alojamiento = $('select[name="tipo_alojamiento"] option:selected').text();
  var $numero_habitaciones = $("#numero_habitaciones").val();
  var $categoria = $('select[name="categoria"] option:selected').text();
  var $direccion = $("#direccion").val();
  var $ciudad = $("#ciudad").val();
  var $barrio = $("#barrio").val();
  var $pais = $('select[name="pais"] option:selected').text();
  var $codigo_postal = $("#codigo_postal").val();

  $nuevoGenerales = {
    'tipo_alojamiento':$tipo_alojamiento,
    'numero_habitaciones':$numero_habitaciones,
    'categoria':$categoria,
    'direccion':$direccion,
    'ciudad':$ciudad,
    'barrio':$barrio,
    'pais':$pais,
    'codigo_postal':$codigo_postal
  }
  $datosGenerales.push($nuevoGenerales);

  $.ajax({
	      method: 'POST',
	      url: './server/registrar_hoteles.php',
	      data: {'datos_general':JSON.stringify($datosGenerales)},
	      cache: false,
	      success: function(response){
	        alert(response);
	      },
	      error: function(){
	        alert("error en la comunicación con el servidor");
	      }
	    })

  document.querySelectorAll('[name=tipo_alojamiento]').forEach((x) => x.selected=false);
  $("#numero_habitaciones").val("");
  document.querySelectorAll('[name=categoria]').forEach((x) => x.selected=false);
  $("#direccion").val("");
  $("#ciudad").val("");
  $("#barrio").val("");
  document.querySelectorAll('[name=pais]').forEach((x) => x.selected=false);
  $("#codigo_postal").val("");
}
