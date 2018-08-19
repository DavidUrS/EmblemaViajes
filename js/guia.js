$("#form_guia").submit(function(e){

        var $acepto = $('input:checkbox[name=guia]:checked').val();
        if ($acepto) {
                registrarAlternativa();
        }else{
            e.preventDefault();
            alert('Debes aceptar las politicas de privacidad');
        }
})
$("#megaMenu .nav-link").click(function(){
    $(".modal-title").text("Obten la guia de "+$(this).text()+" En tu correro electrónico");
    $("#guia").html('<option>'+$(this).text()+'</option>');
    if($(this).text()=="Estados Unidos"){
    $("#guia").html('<option>Boston</option><option>California</option><option>Chicago</option><option>Costa este</option><option>Hawái</option><option>Las Vegas</option><option>Los Angeles</option><option>Miami</option><option>Nueva York</option><option>San Francisco</option>');
    }
    if($(this).text()=="Colombia"){
    $("#guia").html('<option>Bogotá</option><option>Cali</option><option>Cartagena de Indias</option><option>Antioquia</option><option>Santa Marta</option><option>Barranquilla</option><option>San Andres</option><option>La Guajira</option><option>Meta</option><option>Huila</option><option>Amazonas</option><option>Nariño</option><option>Choco</option><option>Norte de Santander</option><option>Magdalena</option><option>Quindio</option><option>Caldas</option><option>Risaralda</option><option>Isla Gorgona</option>');
    }
})
