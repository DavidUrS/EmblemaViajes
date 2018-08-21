$("#form_royal").submit(function(e){
    e.preventDefault();
		var $acepto = $('input:checkbox[name=acept_royal]:checked').val();
		if ($acepto) {
			  registrarRoyal();
		}else{
			  alert('Debes aceptar las politicas de privacidad');
		}
})

function registrarRoyal(){
    $datosRoyal = [];
    $nuevoRoyal = {};
    $nombres = $("#nombres-royal").val();
    $apellidos = $("#apellidos-royal").val();
    $ciudad = $("#ciudad-royal").val();
    $pais = $('select[name="pais-royal"] option:selected').text();
    $telefono = $("#telefono-royal").val();
    $celular = $("#celular-royal").val();
    $email = $("#email-royal").val();
    $observaciones = $("#observaciones-royal").val();
    $nuevoRoyal = {
        'nombres': $nombres,
        'apellidos': $apellidos,
        'ciudad': $ciudad,
        'pais': $pais,
        'telefono': $telefono,
        'celular': $celular,
        'email': $email,
        'observaciones': $observaciones
    }   
    $datosRoyal.push($nuevoRoyal);
    $.ajax({
        method: 'POST',
        url: './server/registrar_royal.php',
        data: {'datos_royal':JSON.stringify($datosRoyal)},
        cache: false,
        success: function(response){
          alert(response);
        },
        error: function(){
          alert("error en la comunicación con el servidor");
        }
      })
      $("#nombres-royal").val('');
      $("#apellidos-royal").val('');
      $("#ciudad-royal").val('');
      document.querySelectorAll('[name=pais-royal]').forEach((x) => x.selected=false);
      $("#telefono-royal").val('');
      $("#celular-royal").val('');
      $("#email-royal").val('');
      $("#observaciones-royal").val('');
      document.querySelectorAll('[name=acept_royal]').forEach((x) => x.checked=false);
}