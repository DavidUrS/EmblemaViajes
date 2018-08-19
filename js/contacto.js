$("#formuContacto").submit(function(e){
  e.preventDefault();
  registrarContacto();
})

function registrarContacto(){
  var $datosContacto = [];
  var $nuevoContacto = {};
  var $nombre_contacto = $("#nombre").val();
  var $id_contacto = $("#id").val();
  var $nombre_propiedad = $("#nombre_hotel").val();
  var $cargo_contacto = $('select[name="cargo"] option:selected').text();
  var $telefono_contacto = $("#telefonoC").val();
  var $telefono_alternativo_contacto = $("#telefonoA").val();
  var $email_contacto = $("#email").val();
  var $cadena_hotelera = $('select[name="cadena_hotelera"] option:selected').text();
  var $nombre_cadena_hotelera = $("#nombreCadenaHotelera").val();

  $nuevoContacto = {
    'nombre':$nombre_contacto,
    'id':$id_contacto,
    'nombre_hotel':$nombre_propiedad,
    'cargo':$cargo_contacto,
    'telefono':$telefono_contacto,
    'telefono_alternativo':$telefono_alternativo_contacto,
    'email':$email_contacto,
    'cadena_hotelera':$cadena_hotelera,
    'nombre_cadena_hotelera':$nombre_cadena_hotelera
  }

  $datosContacto.push($nuevoContacto);

  $.ajax({
	      type: 'POST',
	      url: './server/registrar_hoteles.php',
	      data: {'datos_contacto':JSON.stringify($datosContacto)},
	      cache: false,
	      success: function(response){
	        alert(response);
	      },
	      error: function(){
	        alert("error en la comunicación con el servidor");
	      }
	    })

  $("#nombre").val("");
  $("#id").val("");
  $("#nombre_hotel").val("");
  document.querySelectorAll('[name=cargo]').forEach((x) => x.selected=false);
  $("#telefonoC").val("");
  $("#telefonoA").val("");
  $("#email").val("");
  document.querySelectorAll('[name=cadena_hotelera]').forEach((x) => x.selected=false);
  $("#nombreCadenaHotelera").val("");
}
