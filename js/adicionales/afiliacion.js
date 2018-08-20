$("#form_afiliacion").submit(function(e){
    e.preventDefault();
		var $acepto = $('input:checkbox[name=acept_afiliacion]:checked').val();
		if ($acepto) {
			  registrarAfiliacion();
		}else{
			  alert('Debes aceptar las politicas de privacidad');
		}
})

function registrarAfiliacion(){
    $datosAfiliacion = [];
    $nuevoAfiliado = {};
    $nombres = $("#nombres-afi").val();
    $apellidos = $("#apellidos-afi").val();
    $ciudad = $("#ciudad-afi").val();
    $pais = $('select[name="pais-afi"] option:selected').text(); 
    $telefono = $("#telefono-afi").val();
    $celular = $("#celular-afi").val();
    $email = $("#email-afi").val();
    $web = $("#web-afi").val();
    $observaciones = $("#observaciones-afi").val(); 
    
    $nuevoAfiliado = {
        'nombres': $nombres,
        'apellidos': $apellidos,
        'ciudad': $ciudad,
        'pais': $pais,
        'telefono': $telefono,
        'celular': $celular,
        'email': $email,
        'web': $web,
        'observaciones': $observaciones
    }
    $datosAfiliacion.push($nuevoAfiliado);
    $.ajax({
        method: 'POST',
        url: './server/registrar_afiliacion.php',
        data: {'datos_afiliacion':JSON.stringify($datosAfiliacion)},
        cache: false,
        success: function(response){
          alert(response);
        },
        error: function(){
          alert("error en la comunicación con el servidor");
        }
      })
      $("#nombres-afi").val("");
      $("#apellidos-afi").val("");
      $("#ciudad-afi").val("");
      $("#telefono-afi").val("");
      $("#celular-afi").val("");
      $("#email-afi").val("");
      $("#web-afi").val("");
      $("#observaciones-afi").val(""); 
      document.querySelectorAll('[name=acept_afiliacion]').forEach((x) => x.checked=false);

}
