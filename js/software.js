$("#formuSoftware").submit(function(e){
  e.preventDefault();
  registrarSoftware();
})

function registrarSoftware(){
  var $datosSoftware = [];
  var $nuevoSoftware = {};
  var $software_hotelero = $('select[name="software_hotelero"] option:selected').text();
  var $pms = $("#pms").val();
  var $channel_manager = $('select[name="channel_manager"] option:selected').text();
  var $nombre_channel_manager = $("#nombreChannelManager").val();
  var $web = $('select[name="web"] option:selected').text();
  var $url = $("#url").val();

  $nuevoSoftware = {
    'software_hotelero':$software_hotelero,
    'pms':$pms,
    'channel_manager':$channel_manager,
    'nombre_channel_manager':$nombre_channel_manager,
    'web':$web,
    'url':$url
  }

  $datosSoftware.push($nuevoSoftware);

  $.ajax({
	      method: 'POST',
	      url: './server/registrar_hoteles.php',
	      data: {'datos_software':JSON.stringify($datosSoftware)},
	      cache: false,
	      success: function(response){
	        alert(response);
	      },
	      error: function(){
	        alert("error en la comunicación con el servidor");
	      }
	    })

  document.querySelectorAll('[name=software_hotelero]').forEach((x) => x.selected=false);
  $("#pms").val("");
  document.querySelectorAll('[name=channel_manager]').forEach((x) => x.selected=false);
  $("#nombreChannelManager").val("");
  document.querySelectorAll('[name=web]').forEach((x) => x.selected=false);
  $("#url").val("");
}
