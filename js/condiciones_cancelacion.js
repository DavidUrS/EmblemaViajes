$("#formuCondicionesCancelacion").submit(function(e){
  e.preventDefault();
  registrarCondicionesCancelacion();
});

function registrarCondicionesCancelacion(){
  var $nuevaCondicion = {};
  var $datosCondicion = [];
  var $cancelacion_grat = $('select[name="cancelacion_grat"] option:selected').text();
  var $penalidad = $('select[name="penalidad"] option:selected').text();
  var $hora_entrada = $("#hora_entrada").val();
  var $hora_salida = $("#hora_salida").val();
  var $fumar_propiedad = $('select[name="fumar_propiedad"] option:selected').text();
  var $aloj_ninos = $('select[name="aloj_ninos"] option:selected').text();
  var $mascotas = $('select[name="mascotas"] option:selected').text();
  var $estancia_minima = $('select[name="estancia_minima"] option:selected').text();

  $nuevaCondicion={
    'cancelacion_grat':$cancelacion_grat,
    'penalidad':$penalidad,
    'hora_entrada':$hora_entrada,
    'hora_salida':$hora_salida,
    'fumar_propiedad':$fumar_propiedad,
    'aloj_ninos':$aloj_ninos,
    'mascotas':$mascotas,
    'estancia_minima':$estancia_minima
  }

  $datosCondicion.push($nuevaCondicion);

  $.ajax({
	      method: 'POST',
	      url: './server/registrar_hoteles.php',
	      data: {'datos_condicion':JSON.stringify($datosCondicion)},
	      cache: false,
	      success: function(response){
	        alert(response);
	      },
	      error: function(){
	        alert("error en la comunicación con el servidor");
	      }
	    })

  document.querySelectorAll('[name=cancelacion_grat]').forEach((x) => x.selected=false);
  document.querySelectorAll('[name=penalidad]').forEach((x) => x.selected=false);
  $("#hora_entrada").val("");
  $("#hora_salida").val("");
  document.querySelectorAll('[name=fumar_propiedad]').forEach((x) => x.selected=false);
  document.querySelectorAll('[name=aloj_ninos]').forEach((x) => x.selected=false);
  document.querySelectorAll('[name=mascotas]').forEach((x) => x.selected=false);
  document.querySelectorAll('[name=estancia_minima]').forEach((x) => x.selected=false);
}
