$("#formuFiscal").submit(function(event){
  event.preventDefault();
  registrarFiscal();
});

function registrarFiscal(){
  $datosFiscal = [];
  $nuevoFiscal = {};
  var $razon_social = $("#razon_social").val();
  var $rut = $("#rut").val();
  var $rnt = $("#rnt").val();
  var $categoria_iva = $("#categoria_iva").val();
  var $direccion = $("#direccion_fiscal").val();
  var $ciudad = $("#ciudad_fiscal").val();
  var $pais = $('select[name="pais_fiscal"] option:selected').text();

  $nuevoFiscal={
    'razon_social':$razon_social,
    'rut':$rut,
    'rnt':$rnt,
    'categoria_iva':$categoria_iva,
    'direccion':$direccion,
    'ciudad':$ciudad,
    'pais':$pais
  }

  $datosFiscal.push($nuevoFiscal);

  $.ajax({
	      type: 'POST',
	      url: './server/registrar_hoteles.php',
	      data: {'datos_fiscal':JSON.stringify($datosFiscal)},
	      cache: false,
	      success: function(response){
	        alert(response);
	      },
	      error: function(){
	        alert("error en la comunicación con el servidor");
	      }
	    })

      $("#razon_social").val("");
      $("#rut").val("");
      $("#rnt").val("");
      $("#categoria_iva").val("");
      $("#direccion_fiscal").val("");
      $("#ciudad_fiscal").val("");
      document.querySelectorAll('[name=pais_fiscal]').forEach((x) => x.selected=false);
}
