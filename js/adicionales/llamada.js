$("#form_llamada").submit(function(e){
    e.preventDefault();
	registrarLlamada();
})

function registrarLlamada(){
    $datosLlamada = [];
    $nuevaLlamada = {};
    $numero = $("#indicativo").val() + " + " + $("#numero").val();
    $nombre = $("#nombre").val();

    $nuevaLlamada = {
        'numero': $numero,
        'nombre': $nombre
    }
    $datosLlamada.push($nuevaLlamada);
    
    $.ajax({
        method: 'POST',
        url: './server/registrar_llamada.php',
        data: {'datos_llamada':JSON.stringify($datosLlamada)},
        cache: false,
        success: function(response){
          alert(response);
        },
        error: function(){
          alert("error en la comunicación con el servidor");
        }
      })

      $("#indicativo").val("");
      $("#numero").val("");
      $("#nombre").val("");
}