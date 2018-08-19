$("#btn_guardar_proveedor").click(function(){
    var $certifico = $('input:checkbox[name=certifico]:checked').val();
      var $acepto = $('input:checkbox[name=acepto]:checked').val();
      if ($certifico && $acepto ) {
          registrarProveedor();
    }else{
          alert('Debes seleccionar los campos de aceptar y certificar');
      }
  });

  function registrarProveedor(){
      $datosProveedor = [];
      $nuevoProveedor = {};
      $nombre_prove = $("#nombre_prove").val();
      $numero_fiscal = $("#numero_fiscal").val();
      $servicios = $('select[name="servicios"] option:selected').text();
      $direccion_prove = $("#direccion_prove").val();
      $ciudad_prove = $("#ciudad_prove").val();
      $pais = $('select[name="pais"] option:selected').text();
      $cp = $("#cp").val();
      $nombre = $("#nombre").val();
      $apellidos = $("#apellidos").val();
      $telefono = $("#telefono").val();
      $email = $("#email").val();
      $idioma_pref = $('select[name="idioma_pref"] option:selected').text();
      $observaciones = $("#observaciones").val();

      $nuevoProveedor = {
          'nombre_prove': $nombre_prove,
          'numero_fiscal': $numero_fiscal,
          'servicios': $servicios,
          'direccion_prove': $direccion_prove,
          'ciudad_prove': $ciudad_prove,
          'pais': $pais,
          'cp': $cp,
          'nombre': $nombre,
          'apellidos': $apellidos,
          'telefono': $telefono,
          'email': $email,
          'idioma_pref': $idioma_pref,
          'observaciones': $observaciones
      }
      $datosProveedor.push($nuevoProveedor);
      $.ajax({
        method: 'POST',
        url: './server/registrar_proveedor.php',
        data: {'datos_proveedor':JSON.stringify($datosProveedor)},
        cache: false,
        success: function(response){
          alert(response);
        },
        error: function(){
          alert("error en la comunicación con el servidor");
        }
      })

      $("#nombre_prove").val("");
      $("#numero_fiscal").val("");
      document.querySelectorAll('[name=servicios]').forEach((x) => x.selected=false);
      $("#direccion_prove").val("");
      $("#ciudad_prove").val("");
      document.querySelectorAll('[name=pais]').forEach((x) => x.selected=false);
      $("#cp").val("");
      $("#nombre").val("");
      $("#apellidos").val("");
      $("#telefono").val("");
      $("#email").val("");
      document.querySelectorAll('[name=idioma_pref]').forEach((x) => x.selected=false);
      $observaciones = $("#observaciones").val("");

  }