$("#form_seguros").submit(function(e){
    e.preventDefault();
		var $acepto = $('input:checkbox[name=acep_seguros]:checked').val();
		if ($acepto) {
			  registrarSeguro();
		}else{
			  alert('Debes aceptar las politicas de privacidad');
		}
})


function registrarSeguro(){
    $datosSeguro = [];
    $nuevoSeguro = {};
    $nombres = $("#nombres-seguro").val();
    $apellidos = $("#apellidos-seguro").val();
    $ciudad = $("#ciudad").val();
    $pais = $('select[name="pais-seguro"] option:selected').text();
    $telefono = $("#telefono").val();
    $celular = $("#celular").val();
    $email = $("#email-seguro").val();
    $observaciones = $("#observaciones-seguro").val();

    $nuevoSeguro = {
        'nombres': $nombres,
        'apellidos': $apellidos,
        'ciudad': $ciudad,
        'pais': $pais,
        'telefono': $telefono,
        'celular': $celular,
        'email': $email,
        'observaciones': $observaciones
    }
    $datosSeguro.push($nuevoSeguro);
    
    $.ajax({
        method: 'POST',
        url: './server/registrar_seguro.php',
        data: {'datos_seguro':JSON.stringify($datosSeguro)},
        cache: false,
        success: function(response){
          alert(response);
        },
        error: function(){
          alert("error en la comunicación con el servidor");
        }
      })

      $("#nombres-seguro").val("");
      $("#apellidos-seguro").val("");
      $("#ciudad").val("");
      document.querySelectorAll('[name=pais-seguro]').forEach((x) => x.selected=false);
      $("#telefono").val("");
      $("#celular").val("");
      $("#email-seguro").val("");
      $("#observaciones-seguro").val("");
}