$(document).ready(function(){
	function getAbsolutePath() {
		var loc = window.location;
		var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
		return loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));
	}
	$('img').click(function (){
		var ruta= getAbsolutePath();
		window.location.href = ruta+'alternativa.php';
	});
	$('img').hover(function (){
		$(this).css("cursor","pointer")
	});
	

	$( "#datepickerLlegada" ).datepicker();
	$( "#datepickerSalida" ).datepicker();

	$( "#ServiviosHabitacion" ).click(function(){
		$("#serviHabita").dialog({
			modal:true,
			resizable:true,
			width: '80vw',
			dialogClass: "no-close success-dialog",
			dateFormat: "yyyy-MM-dd"
		});
	});

	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})

	$("#cerrarDialog").click(function(){
		$("#serviHabita").dialog('close');
	})

	$(".enlace").click(function(){
		
	})

	$("#rec_promo").click(function(e){
		e.preventDefault();
		var $acepto = $('input:checkbox[name=promociones]:checked').val();
		if ($acepto) {
			  recibirPromociones();
		}else{
			  alert('Debes aceptar las politicas de privacidad');
		}
		})

		function recibirPromociones(){
			var prom = [];
			var nuevaProm = {};
			var $nombre_prom = $("#nombre_prom").val();
			var $email_prom = $("#email_prom").val();
			if($nombre_prom== "" || $email_prom == ""){
				alert("Debes digitar tu nombre y email para poder guardar los datos");
			}else{
				nuevaProm = {
					'nombre':$nombre_prom,
					'email':$email_prom
				}
				prom.push(nuevaProm);	
				$.ajax({
					method: 'POST',
					url: './server/promociones_usuarios.php',
					data: {'datos_promocion':JSON.stringify(prom)},
					cache: false,
					success: function(response){
					  alert(response);
					},
					error: function(){
					  alert("error en la comunicación con el servidor");
					}
				  })

				  $("#nombre_prom").val("");
				  $("#email_prom").val("");
			}
		}

})
