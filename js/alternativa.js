$("#form_alternativas").submit(function(e){
    e.preventDefault();
		var $acepto = $('input:checkbox[name=acepto_ter]:checked').val();
		if ($acepto) {
			  registrarAlternativa();
		}else{
			  alert('Debes aceptar las politicas de privacidad');
		}
})

function registrarAlternativa(){
    var $nuevaAlternativa = {};
    var $datosAlternativa = [];
    var $nombres_alt = $("#nombres_alt").val();
    var $apellidos_alt = $("#apellidos_alt").val();
    var $email_alt = $("#email_alt").val();
    var $telefono_alt = $("#telefono_alt").val();
    var $pais_alt = $('select[name="pais_alt"] option:selected').text();
    var $ciudad_alt = $("#ciudad_alt").val(); 
    
    $nuevaAlternativa = {
        'nombre': $nombres_alt,
        'apellidos': $apellidos_alt,
        'email': $email_alt,
        'telefono': $telefono_alt,
        'pais': $pais_alt,
        'ciudad':$ciudad_alt
    }

    $datosAlternativa.push($nuevaAlternativa);

    $.ajax({
        method: 'POST',
        url: './server/registrar_alternativa.php',
        data: {'datos_alternativa':JSON.stringify($datosAlternativa)},
        cache: false,
        success: function(response){
          alert(response);
        },
        error: function(){
          alert("error en la comunicación con el servidor");
        }
      })

    var $nombres_alt = $("#nombres_alt").val("");
    var $apellidos_alt = $("#apellidos_alt").val("");
    var $email_alt = $("#email_alt").val("");
    var $telefono_alt = $("#telefono_alt").val("");
	document.querySelectorAll('[name=pais_alt]').forEach((x) => x.selected=false);
    var $ciudad_alt = $("#ciudad_alt").val(""); 

}