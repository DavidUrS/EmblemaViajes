cambiar();
cambiarServicios();

function cambiarServicios(){

    $('html,body').animate({scrollTop: 0});

    var pathname = window.location.hash;
    switch(pathname) {
        case '#v-pills-hoteles-tab':
        $('#v-pills-tab a[href="#v-pills-hoteles"]').tab('show')
        break;
        case '#v-pills-empresas-tab':
        $('#v-pills-tab a[href="#v-pills-empresas"]').tab('show')
        break;
        case '#v-pills-agencias-tab':
        $('#v-pills-tab a[href="#v-pills-agencias"]').tab('show')
        break;
        case '#v-pills-prove-tab':
        $('#v-pills-tab a[href="#v-pills-prove"]').tab('show')
        break;
        case '#v-pills-cot-tab':
        $('#v-pills-tab a[href="#v-pills-cot"]').tab('show')
        break;
        case '#v-pills-quejas-tab':
        $('#v-pills-tab a[href="#v-pills-quejas"]').tab('show')
        break;
        case '#v-pills-royal-tab':
        $('#v-pills-tab a[href="#v-pills-royal"]').tab('show')
        break;
        case '#v-pills-afiliados-tab':
        $('#v-pills-tab a[href="#v-pills-afiliados"]').tab('show')
        break;
        case '#v-pills-seguros-tab':
        $('#v-pills-tab a[href="#v-pills-seguros"]').tab('show')
        break;
    }
  }

  function cambiarClickServicios(urlServicios){
    $('html,body').animate({scrollTop: 0});
    location.reload(true);
    switch(urlServicios) {
        case '#v-pills-hoteles-tab':
        $('#v-pills-tab a[href="#v-pills-hoteles"]').tab('show')
        break;
        case '#v-pills-empresas-tab':
        $('#v-pills-tab a[href="#v-pills-empresas"]').tab('show')
        break;
        case '#v-pills-agencias-tab':
        $('#v-pills-tab a[href="#v-pills-agencias"]').tab('show')
        break;
        case '#v-pills-prove-tab':
        $('#v-pills-tab a[href="#v-pills-prove"]').tab('show')
        break;
        case '#v-pills-cot-tab':
        $('#v-pills-tab a[href="#v-pills-cot"]').tab('show')
        break;
        case '#v-pills-quejas-tab':
        $('#v-pills-tab a[href="#v-pills-quejas"]').tab('show')
        break;
        case '#v-pills-royal-tab':
        $('#v-pills-tab a[href="#v-pills-royal"]').tab('show')
        break;
        case '#v-pills-afiliados-tab':
        $('#v-pills-tab a[href="#v-pills-afiliados"]').tab('show')
        break;
        case '#v-pills-seguros-tab':
        $('#v-pills-tab a[href="#v-pills-seguros"]').tab('show')
        break;
    }
  }

function cambiar(){
    var pathname = window.location.hash;
    switch(pathname) {
        case '#pills-emb_viaj-tab':
        $('#pills-tab a[href="#pills-emb_viaj"]').tab('show')
        break;
        case '#pills-travel-tab':
        $('#pills-tab a[href="#pills-travel"]').tab('show')
        break;
        case '#pills-marcas-tab':
        $('#pills-tab a[href="#pills-marcas"]').tab('show')
        break;
        case '#pills-trabaja-tab':
        $('#pills-tab a[href="#pills-trabaja"]').tab('show')
        break;
        case '#pills-turismo-tab':
        $('#pills-tab a[href="#pills-turismo"]').tab('show')
        break;
        case '#pills-contact-tab':
        $('#pills-tab a[href="#pills-contact"]').tab('show')
        break;
    }
  }

  function cambiarClick(url){
      location.reload(true);
    switch(url) {
        case '#pills-emb_viaj-tab':
        $('#pills-tab a[href="#pills-emb_viaj"]').tab('show')
        break;
        case '#pills-travel-tab':
        $('#pills-tab a[href="#pills-travel"]').tab('show')
        break;
        case '#pills-marcas-tab':
        $('#pills-tab a[href="#pills-marcas"]').tab('show')
        break;
        case '#pills-trabaja-tab':
        $('#pills-tab a[href="#pills-trabaja"]').tab('show')
        break;
        case '#pills-turismo-tab':
        $('#pills-tab a[href="#pills-turismo"]').tab('show')
        break;
        case '#pills-contact-tab':
        $('#pills-tab a[href="#pills-contact"]').tab('show')
        break;
    }
  }

