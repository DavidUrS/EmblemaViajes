$("#todos").change(function () {
    $("input:checkbox[name=marcas]").prop('checked', $(this).prop("checked"));
});

$("#formuMarcas").submit(function(e){
  e.preventDefault();
  var $certifico = $('input:checkbox[name=certifico]:checked').val();
  var $acepto = $('input:checkbox[name=acepto]:checked').val();
  if ($certifico && $acepto ) {
      registrarMarcas();
  }else{
    	alert('Debes seleccionar los campos de aceptar y certificar');
  }
})

function registrarMarcas(){
  var $nuevaMarca = {};
  var $datosMarca = [];
  var $lista_marcas = '';
  $(".lista_marcas:checked").each(
    function() {
      $lista_marcas +=$(this).val()+" ";
    }
  );

  $nuevaMarca={
    'lista_marcas':$lista_marcas
  }
  $datosMarca.push($nuevaMarca);

  $.ajax({
	      method: 'POST',
	      url: './server/registrar_hoteles.php',
	      data: {'datos_marcas':JSON.stringify($datosMarca)},
	      cache: false,
	      success: function(response){
	        alert(response);
	      },
	      error: function(){
	        alert("error en la comunicación con el servidor");
	      }
	    })

  document.querySelectorAll('.lista_marcas').forEach((x) => x.checked=false);
}
