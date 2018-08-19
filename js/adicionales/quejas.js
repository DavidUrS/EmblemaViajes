$("#form_queja").submit(function(e){
    e.preventDefault();
		var $acepto = $('input:checkbox[name=acepto_queja]:checked').val();
		if ($acepto) {
			  registrarQuejas();
		}else{
			  alert('Debes aceptar las politicas de privacidad');
		}
})

function registrarQuejas(){
    $datosQueja = [];
    $nuevaQueja = {};

    $nombres = $("#nombres").val();
    $apellidos = $("#apellidos").val();
    $numero = $("#area").val() + " + " + $("#numero-tele").val();    
    $email = $("#email").val();
    $queja = $("#queja").val();
    $tema = $('select[name="tema"] option:selected').text();

    $nuevaQueja = {
        'nombres': $nombres,
        'apellidos': $apellidos,
        'numero': $numero,
        'email': $email,
        'queja': $queja,
        'tema': $tema
    }
    $datosQueja.push($nuevaQueja);
    $.ajax({
        method: 'POST',
        url: './server/registrar_queja.php',
        data: {'datos_queja':JSON.stringify($datosQueja)},
        cache: false,
        success: function(response){
          alert(response);
        },
        error: function(){
          alert("error en la comunicación con el servidor");
        }
      })
      $("#nombres").val("");
      $("#apellidos").val("");
      $("#area").val("");
      $("#numero-tele").val("")
      $("#email").val("");
      $("#queja").val("");
      document.querySelectorAll('[name=tema]').forEach((x) => x.selected=false);
      document.querySelectorAll('[name=acepto_queja]').forEach((x) => x.checked=false);
}