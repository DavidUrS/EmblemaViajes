$("#formuPropiedad").submit(function(e){
  e.preventDefault();
  registrarPropiedad();
});

function registrarPropiedad(){
  var $nuevaPropiedad={};
  var $datosPropiedad=[];
  var alim_pensi_complet = $('input:radio[name=alim_pensi_complet]:checked').val();
  var desayuno_buffet = $('input:radio[name=desayuno_buffet]:checked').val();
  var desayuno_servido = $('input:radio[name=desayuno_servido]:checked').val();
  var desayuno_continen = $('input:radio[name=desayuno_continen]:checked').val();
  var desayuno_americano = $('input:radio[name=desayuno_americano]:checked').val();
  var alimen_todo_inclu = $('input:radio[name=alimen_todo_inclu]:checked').val();
  var almuer_menu_eleg = $('input:radio[name=almuer_menu_eleg]:checked').val();
  var almu_menu_carta = $('input:radio[name=almu_menu_carta]:checked').val();
  var cena_menu_eleg = $('input:radio[name=cena_menu_eleg]:checked').val();
  var cena_menu_carta = $('input:radio[name=cena_menu_carta]:checked').val();
  var cena_tipo_buffet = $('input:radio[name=cena_tipo_buffet]:checked').val();
  var comida_diete = $('input:radio[name=comida_diete]:checked').val();
  var maqui_recre = $('input:radio[name=maqui_recre]:checked').val();
  var ninera = $('input:radio[name=ninera]:checked').val();
  var parque_infant = $('input:radio[name=parque_infant]:checked').val();
  var recepcion = $('input:radio[name=recepcion]:checked').val();
  var tv_satelit = $('input:radio[name=tv_satelit]:checked').val();
  var pisci_aire_libre = $('input:radio[name=pisci_aire_libre]:checked').val();
  var pisci_climati = $('input:radio[name=pisci_climati]:checked').val();
  var pisci_agua_dulce = $('input:radio[name=pisci_agua_dulce]:checked').val();
  var pisci_agua_salada = $('input:radio[name=pisci_agua_salada]:checked').val();
  var pisci_infantil = $('input:radio[name=pisci_infantil]:checked').val();
  var bar_piscina = $('input:radio[name=bar_piscina]:checked').val();
  var biblioteca = $('input:radio[name=biblioteca]:checked').val();
  var salon_belleza = $('input:radio[name=salon_belleza]:checked').val();
  var cunas_seg_disp = $('input:radio[name=cunas_seg_disp]:checked').val();
  var servi_despert = $('input:radio[name=servi_despert]:checked').val();
  var prensa_prop = $('input:radio[name=prensa_prop]:checked').val();
  var alquiler_bici = $('input:radio[name=alquiler_bici]:checked').val();
  var aparcamiento = $('input:radio[name=aparcamiento]:checked').val();
  var aparcamiento_auto = $('input:radio[name=aparcamiento_auto]:checked').val();
  var area_juegos = $('input:radio[name=area_juegos]:checked').val();
  var bar_caf_servic = $('input:radio[name=bar_caf_servic]:checked').val();
  var bar_24 = $('input:radio[name=bar_24]:checked').val();
  var bingo = $('input:radio[name=bingo]:checked').val();
  var bussines_center = $('input:radio[name=bussines_center]:checked').val();
  var capilla = $('input:radio[name=capilla]:checked').val();
  var anim_pisi_playa = $('input:radio[name=anim_pisi_playa]:checked').val();
  var comedor = $('input:radio[name=comedor]:checked').val();
  var cobert_moviles = $('input:radio[name=cobert_moviles]:checked').val();
  var guardaropa = $('input:radio[name=guardaropa]:checked').val();
  var masaje = $('input:radio[name=masaje]:checked').val();
  var padel = $('input:radio[name=padel]:checked').val();
  var planta_ejec = $('input:radio[name=planta_ejec]:checked').val();
  var playa_arena = $('input:radio[name=playa_arena]:checked').val();
  var playa_piedr = $('input:radio[name=playa_piedr]:checked').val();
  var playa_roca = $('input:radio[name=playa_roca]:checked').val();
  var pub = $('input:radio[name=alim_pensi_complet]:checked').val();
  var quiosco = $('input:radio[name=quiosco]:checked').val();
  var smi = $('input:radio[name=smi]:checked').val();
  var sala_confer = $('input:radio[name=sala_confer]:checked').val();
  var salon_tv = $('input:radio[name=salon_tv]:checked').val();
  var servi_fact_24 = $('input:radio[name=servi_fact_24]:checked').val();
  var servi_lavand = $('input:radio[name=servi_lavand]:checked').val();
  var sombrillas = $('input:radio[name=sombrillas]:checked').val();
  var supermercado = $('input:radio[name=supermercado]:checked').val();
  var teatro_audit = $('input:radio[name=teatro_audit]:checked').val();
  var terraza = $('input:radio[name=terraza]:checked').val();
  var terraza_solar = $('input:radio[name=terraza_solar]:checked').val();
  var tiendas = $('input:radio[name=tiendas]:checked').val();
  var transp_aereopu = $('input:radio[name=transp_aereopu]:checked').val();
  var trastero_bici = $('input:radio[name=trastero_bici]:checked').val();
  var tronas = $('input:radio[name=tronas]:checked').val();
  var tumbonas = $('input:radio[name=tumbonas]:checked').val();
  var zona_fuma_restau = $('input:radio[name=zona_fuma_restau]:checked').val();
  var ascensores = $('input:radio[name=ascensores]:checked').val();
  var aire_acond_public = $('input:radio[name=aire_acond_public]:checked').val();
  var calefac = $('input:radio[name=calefac]:checked').val();
  var _24_recepcion = $('input:radio[name=_24_recepcion]:checked').val();
  var check_in_out_exp = $('input:radio[name=check_in_out_exp]:checked').val();
  var habit_equip = $('input:radio[name=habit_equip]:checked').val();
  var concierge = $('input:radio[name=concierge]:checked').val();
  var cambio_mone = $('input:radio[name=cambio_mone]:checked').val();
  var caja_fuer = $('input:radio[name=caja_fuer]:checked').val();
  var seguridad_24 = $('input:radio[name=seguridad_24]:checked').val();
  var parking = $('input:radio[name=parking]:checked').val();
  var alquiler_coche = $('input:radio[name=alquiler_coche]:checked').val();
  var limousine = $('input:radio[name=limousine]:checked').val();
  var snack_bar = $('input:radio[name=snack_bar]:checked').val();
  var restaurant_certific = $('input:radio[name=restaurant_certific]:checked').val();
  var playa_privada = $('input:radio[name=playa_privada]:checked').val();
  var area_jardines = $('input:radio[name=area_jardines]:checked').val();
  var sala_juegos = $('input:radio[name=sala_juegos]:checked').val();
  var casino = $('input:radio[name=casino]:checked').val();
  var barbacoas = $('input:radio[name=barbacoas]:checked').val();
  var gimnasio = $('input:radio[name=gimnasio]:checked').val();
  var spa = $('input:radio[name=spa]:checked').val();
  var sauna = $('input:radio[name=sauna]:checked').val();
  var hidromasaje = $('input:radio[name=hidromasaje]:checked').val();
  var bano_vapor = $('input:radio[name=bano_vapor]:checked').val();
  var rayos_uva = $('input:radio[name=rayos_uva]:checked').val();
  var lavanderia_monedas = $('input:radio[name=lavanderia_monedas]:checked').val();
  var guarderia = $('input:radio[name=guarderia]:checked').val();
  var peluqueria = $('input:radio[name=peluqueria]:checked').val();
  var floristeria = $('input:radio[name=floristeria]:checked').val();
  var tienda_regalos = $('input:radio[name=tienda_regalos]:checked').val();
  var tienda_comestibles = $('input:radio[name=tienda_comestibles]:checked').val();
  var lustrazapatos = $('input:radio[name=lustrazapatos]:checked').val();
  var discoteca = $('input:radio[name=discoteca]:checked').val();
  var piano_bar = $('input:radio[name=piano_bar]:checked').val();
  var chimenea_lobby = $('input:radio[name=chimenea_lobby]:checked').val();
  var tiro_arco = $('input:radio[name=tiro_arco]:checked').val();
  var vela = $('input:radio[name=vela]:checked').val();
  var volley_playa = $('input:radio[name=volley_playa]:checked').val();
  var volleyball = $('input:radio[name=volleyball]:checked').val();
  var windsurf = $('input:radio[name=windsurf]:checked').val();
  var motos_acuaticas = $('input:radio[name=motos_acuaticas]:checked').val();
  var deprtes_aventura = $('input:radio[name=deprtes_aventura]:checked').val();
  var kayaks = $('input:radio[name=kayaks]:checked').val();
  var aerobic = $('input:radio[name=aerobic]:checked').val();
  var animacion = $('input:radio[name=animacion]:checked').val();
  var badminton = $('input:radio[name=badminton]:checked').val();
  var baloncesto = $('input:radio[name=baloncesto]:checked').val();
  var balonmano = $('input:radio[name=balonmano]:checked').val();
  var barco_motor = $('input:radio[name=barco_motor]:checked').val();
  var bici = $('input:radio[name=bici]:checked').val();
  var bolera = $('input:radio[name=bolera]:checked').val();
  var bote_pedales = $('input:radio[name=bote_pedales]:checked').val();
  var buceo = $('input:radio[name=buceo]:checked').val();
  var canoas = $('input:radio[name=canoas]:checked').val();
  var catamaran = $('input:radio[name=catamaran]:checked').val();
  var dardos = $('input:radio[name=dardos]:checked').val();
  var equitacion = $('input:radio[name=equitacion]:checked').val();
  var esqui_acua = $('input:radio[name=esqui_acua]:checked').val();
  var gimnasia = $('input:radio[name=gimnasia]:checked').val();
  var gimnasia_acu = $('input:radio[name=gimnasia_acu]:checked').val();
  var golf = $('input:radio[name=golf]:checked').val();
  var mini_golf = $('input:radio[name=mini_golf]:checked').val();
  var paddle = $('input:radio[name=paddle]:checked').val();
  var petanca = $('input:radio[name=petanca]:checked').val();
  var squash = $('input:radio[name=squash]:checked').val();
  var suf = $('input:radio[name=suf]:checked').val();
  var tenis = $('input:radio[name=tenis]:checked').val();
  var billar = $('input:radio[name=billar]:checked').val();
  var acc_discapa = $('input:radio[name=acc_discapa]:checked').val();

  $nuevaPropiedad={
    'alim_pensi_complet':alim_pensi_complet,
    'desayuno_buffet':desayuno_buffet,
    'desayuno_servido':desayuno_servido,
    'desayuno_continen':desayuno_continen,
    'desayuno_americano':desayuno_americano,
    'alimen_todo_inclu':alimen_todo_inclu,
    'almuer_menu_eleg':almuer_menu_eleg,
    'almu_menu_carta':almu_menu_carta,
    'cena_menu_eleg':cena_menu_eleg,
    'cena_menu_carta':cena_menu_carta,
    'cena_tipo_buffet':cena_tipo_buffet,
    'comida_diete':comida_diete,
    'maqui_recre':maqui_recre,
    'ninera':ninera,
    'parque_infant':parque_infant,
    'recepcion':recepcion,
    'tv_satelit':tv_satelit,
    'pisci_aire_libre':pisci_aire_libre,
    'pisci_climati':pisci_climati,
    'pisci_agua_dulce':pisci_agua_dulce,
    'pisci_agua_salada':pisci_agua_salada,
    'pisci_infantil':pisci_infantil,
    'bar_piscina':bar_piscina,
    'biblioteca':biblioteca,
    'salon_belleza':salon_belleza,
    'cunas_seg_disp':cunas_seg_disp,
    'servi_despert':servi_despert,
    'prensa_prop':prensa_prop,
    'alquiler_bici':alquiler_bici,
    'aparcamiento':aparcamiento,
    'aparcamiento_auto':aparcamiento_auto,
    'area_juegos':area_juegos,
    'bar_caf_servic':bar_caf_servic,
    'bar_24':bar_24,
    'bingo':bingo,
    'bussines_center':bussines_center,
    'capilla':capilla,
    'anim_pisi_playa':anim_pisi_playa,
    'comedor':comedor,
    'cobert_moviles':cobert_moviles,
    'guardaropa':guardaropa,
    'masaje':masaje,
    'padel':padel,
    'planta_ejec':planta_ejec,
    'playa_arena':playa_arena,
    'playa_piedr':playa_piedr,
    'playa_roca':playa_roca,
    'pub':pub,
    'quiosco':quiosco,
    'smi':smi,
    'sala_confer':sala_confer,
    'salon_tv':salon_tv,
    'servi_fact_24':servi_fact_24,
    'servi_lavand':servi_lavand,
    'sombrillas':sombrillas,
    'supermercado':supermercado,
    'teatro_audit':teatro_audit,
    'terraza':terraza,
    'terraza_solar':terraza_solar,
    'tiendas':tiendas,
    'transp_aereopu':transp_aereopu,
    'trastero_bici':trastero_bici,
    'tronas':tronas,
    'tumbonas':tumbonas,
    'zona_fuma_restau':zona_fuma_restau,
    'ascensores':ascensores,
    'aire_acond_public':aire_acond_public,
    'calefac':calefac,
    '_24_recepcion':_24_recepcion,
    'check_in_out_exp':check_in_out_exp,
    'habit_equip':habit_equip,
    'concierge':concierge,
    'cambio_mone':cambio_mone,
    'caja_fuer':caja_fuer,
    'seguridad_24':seguridad_24,
    'parking':parking,
    'alquiler_coche':alquiler_coche,
    'limousine':limousine,
    'snack_bar':snack_bar,
    'restaurant_certific':restaurant_certific,
    'playa_privada':playa_privada,
    'area_jardines':area_jardines,
    'sala_juegos':sala_juegos,
    'casino':casino,
    'barbacoas':barbacoas,
    'gimnasio':gimnasio,
    'spa':spa,
    'sauna':sauna,
    'hidromasaje':hidromasaje,
    'bano_vapor':bano_vapor,
    'rayos_uva':rayos_uva,
    'lavanderia_monedas':lavanderia_monedas,
    'guarderia':guarderia,
    'peluqueria':peluqueria,
    'floristeria':floristeria,
    'tienda_regalos':tienda_regalos,
    'tienda_comestibles':tienda_comestibles,
    'lustrazapatos':lustrazapatos,
    'discoteca':discoteca,
    'piano_bar':piano_bar,
    'chimenea_lobby':chimenea_lobby,
    'tiro_arco':tiro_arco,
    'vela':vela,
    'volley_playa':volley_playa,
    'volleyball':volleyball,
    'windsurf':windsurf,
    'motos_acuaticas':motos_acuaticas,
    'deprtes_aventura':deprtes_aventura,
    'kayaks':kayaks,
    'aerobic':aerobic,
    'animacion':animacion,
    'badminton':badminton,
    'baloncesto':baloncesto,
    'balonmano':balonmano,
    'barco_motor':barco_motor,
    'bici':bici,
    'bolera':bolera,
    'bote_pedales':bote_pedales,
    'buceo':buceo,
    'canoas':canoas,
    'catamaran':catamaran,
    'dardos':dardos,
    'equitacion':equitacion,
    'esqui_acua':esqui_acua,
    'gimnasia':gimnasia,
    'gimnasia_acu':gimnasia_acu,
    'golf':golf,
    'mini_golf':mini_golf,
    'paddle':paddle,
    'petanca':petanca,
    'squash':squash,
    'suf':suf,
    'tenis':tenis,
    'billar':billar,
    'acc_discapa':acc_discapa
  }

  $datosPropiedad.push($nuevaPropiedad);

  document.querySelectorAll('[name=alim_pensi_complet]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=desayuno_buffet]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=desayuno_servido]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=desayuno_continen]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=desayuno_americano]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=alimen_todo_inclu]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=almuer_menu_eleg]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=almu_menu_carta]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=cena_menu_eleg]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=cena_menu_carta]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=cena_tipo_buffet]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=comida_diete]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=maqui_recre]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=ninera]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=parque_infant]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=recepcion]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=tv_satelit]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=pisci_aire_libre]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=pisci_climati]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=pisci_agua_dulce]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=pisci_agua_salada]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=pisci_infantil]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=bar_piscina]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=biblioteca]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=salon_belleza]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=cunas_seg_disp]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=servi_despert]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=prensa_prop]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=alquiler_bici]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=aparcamiento]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=aparcamiento_auto]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=area_juegos]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=bar_caf_servic]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=bar_24]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=bingo]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=bussines_center]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=capilla]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=anim_pisi_playa]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=comedor]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=cobert_moviles]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=guardaropa]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=masaje]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=padel]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=planta_ejec]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=playa_arena]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=playa_piedr]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=playa_roca]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=alim_pensi_complet]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=quiosco]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=smi]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=sala_confer]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=salon_tv]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=servi_fact_24]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=servi_lavand]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=sombrillas]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=supermercado]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=teatro_audit]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=terraza]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=terraza_solar]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=tiendas]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=transp_aereopu]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=trastero_bici]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=tronas]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=tumbonas]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=zona_fuma_restau]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=ascensores]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=aire_acond_public]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=calefac]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=_24_recepcion]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=check_in_out_exp]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=habit_equip]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=concierge]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=cambio_mone]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=caja_fuer]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=seguridad_24]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=parking]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=alquiler_coche]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=limousine]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=snack_bar]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=restaurant_certific]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=playa_privada]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=area_jardines]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=sala_juegos]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=casino]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=barbacoas]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=gimnasio]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=spa]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=sauna]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=hidromasaje]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=bano_vapor]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=rayos_uva]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=lavanderia_monedas]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=guarderia]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=peluqueria]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=floristeria]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=tienda_regalos]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=tienda_comestibles]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=lustrazapatos]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=discoteca]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=piano_bar]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=chimenea_lobby]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=tiro_arco]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=vela]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=volley_playa]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=volleyball]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=windsurf]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=motos_acuaticas]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=deprtes_aventura]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=kayaks]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=aerobic]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=animacion]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=badminton]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=baloncesto]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=balonmano]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=barco_motor]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=bici]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=bolera]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=bote_pedales]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=buceo]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=canoas]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=catamaran]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=dardos]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=equitacion]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=esqui_acua]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=gimnasia]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=gimnasia_acu]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=golf]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=mini_golf]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=paddle]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=petanca]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=squash]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=suf]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=tenis]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=billar]').forEach((x) => x.checked=false);
  document.querySelectorAll('[name=acc_discapa]').forEach((x) => x.checked=false);

  $.ajax({
	      method: 'POST',
	      url: './server/registrar_hoteles.php',
	      data: {'datos_propiedad':JSON.stringify($datosPropiedad)},
	      cache: false,
	      success: function(response){
	        alert(response);
	      },
	      error: function(){
	        alert("error en la comunicación con el servidor");
	      }
	    })

}
