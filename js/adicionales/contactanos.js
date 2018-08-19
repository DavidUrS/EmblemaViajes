$("#form_contactanos").submit(function(e){
    e.preventDefault();
		var $acepto = $('input:checkbox[name=acep_contactanos]:checked').val();
		if ($acepto) {
			  registrarContactanos();
		}else{
			  alert('Debes aceptar las politicas de privacidad');
		}
})

function registrarContactanos(){

    $datosContactanos = [];
    $nuevoContactanos = {};
    $nombres = $("#nombres").val();
    $apellidos = $("#apellidos").val();
    $numero = $("#area").val() + " + " + $("#numero").val();
    $email = $("#email").val();
    $inquietudes = $("#inquietudes").val();
    $tema = $('select[name="tema"] option:selected').text();

    $nuevoContactanos = {
        'nombres': $nombres,
        'apellidos': $apellidos,
        'numero': $numero,
        'email': $email,
        'inquietudes': $inquietudes,
        'tema': $tema
    }
    $datosContactanos.push($nuevoContactanos);

    $.ajax({
        method: 'POST',
        url: './server/registrar_contactanos.php',
        data: {'datos_contactanos':JSON.stringify($datosContactanos)},
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
    $("#numero").val("");
    $("#email").val("");
    $("#inquietudes").val("");
    document.querySelectorAll('[name=tema]').forEach((x) => x.selected=false);
    document.querySelectorAll('[name=acep_contactanos]').forEach((x) => x.checked=false);
    
    
}