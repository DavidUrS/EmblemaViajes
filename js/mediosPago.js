$("#formuPagosClientes").submit(function(event){
	event.preventDefault();
	registrarPagosClientes();
});

function registrarPagosClientes(){
	var $nuevoMedio={};
	var $datosMedio=[];
	var $tarjet_estable = $('input:radio[name="tarjet_estable"]:checked').val();
	var $listaTarjetas = '';
	$('.tarjetas:checked').each(
    function() {
			$listaTarjetas+=$(this).val()+" ";
    }
	)
	var $iva_pagar = '';
	if($('input:radio[name="iva_pagar"]:checked').val()=="no"){
		$iva_pagar="No necesito pagar iva";
	}else if ($('input:radio[name="iva_pagar"]:checked').val()=="otro") {
		$iva_pagar = "Otro impuesto "+"$"+$("#otro").val();
	}else if($('input:radio[name="iva_pagar"]:checked').val()=="si"){
		$iva_pagar = "Iva 19%";
	}
	var $iva_municipal = '';
	if($('input:radio[name="iva_muni"]:checked').val()=="no"){
		$iva_municipal="No hay impuesto municipal";
	}else if($('input:radio[name="iva_muni"]:checked').val()=="si" || typeof $('input:radio[name="iva_muni"]:checked').val()=="undefined") {
		$iva_municipal = "Si aplica impuesto municipal de ";
		$iva_municipal += "$"+$("#valor_iva_muni").val();
	}
	var $importe = $('select[name="importe"] option:selected').text();
	var $iva_muni_incluido = $('select[name="iva_muni_incluido"] option:selected').text();
	var $pagar_suplemento = $('input:radio[name="pagar_suplemento"]:checked').val();

	$nuevoMedio={
		'tarjet_estable':$tarjet_estable,
		'listado_tarjetas':$listaTarjetas,
		'iva_pagar':$iva_pagar,
		'iva_municipal':$iva_municipal,
		'importe':$importe,
		'iva_muni_incluido':$iva_muni_incluido,
		'pagar_suplemento':$pagar_suplemento
	}

	$datosMedio.push($nuevoMedio);
	console.log($datosMedio);

	$.ajax({
	      method: 'POST',
	      url: './server/registrar_hoteles.php',
	      data: {'datos_pagos_clientes':JSON.stringify($datosMedio)},
	      cache: false,
	      success: function(response){
	        alert(response);
	      },
	      error: function(){
	        alert("error en la comunicación con el servidor");
	      }
	    })

	document.querySelectorAll('.tarjetas').forEach((x) => x.checked=false);
	document.querySelectorAll('[name=tarjet_estable]').forEach((x) => x.checked=false);
	document.querySelectorAll('[name=iva_pagar]').forEach((x) => x.checked=false);
	$("#otro").val("");
	document.querySelectorAll('[name=iva_muni]').forEach((x) => x.checked=false);
	$("#valor_iva_muni").val("");
	document.querySelectorAll('[name=importe]').forEach((x) => x.selected=false);
	document.querySelectorAll('[name=iva_muni_incluido]').forEach((x) => x.selected=false);
	document.querySelectorAll('[name=pagar_suplemento]').forEach((x) => x.checked=false);
}
