<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
  <meta name="viewport" content="width=device-width">
  <title>EmblemaViajes</title>
  <script src="./js/js/jquery.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="./css/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/fontawesome/web-fonts-with-css/css/fontawesome-all.css">
  <link rel="stylesheet" href="./css/css/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/internas.css">
</head>

<body>

<?php
    include_once 'headerBlack.php';
    include_once 'headerWhite.php';
?>
<div class="container">
    <div class="alert alert-secondary" role="alert">
        <h4 class="alert-heading">Estamos trabajando para ofrecerle la mejor experiencia, ofertas y contenidos.</h4>
        <p>
            Si desea que le ampliemos información, le coticemos o realizar una 
            reserva para cualquiera de los servicios ofrecidos le ofrecemos las 
            siguientes opciones:
        </p>
        <hr>
        <p class="mb-0 font-weight-bold">
            A) Cumplimentar el siguiente formulario y un asesor se pondrá en contacto con Usted en breve:
        </p>
    </div>
    <form id="form_alternativas">
    <div class="row">
        <div class="col">
            <input type="text" id="nombres_alt" class="form-control" placeholder="Digita tus nombres" required>
        </div>
        <div class="col">
            <input type="text" id="apellidos_alt" class="form-control" placeholder="Digita tus apellidos" required>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col">
            <input type="email" id="email_alt" class="form-control" placeholder="Digita tu email" required>
        </div>
        <div class="col">
            <input type="text" id="telefono_alt" class="form-control" placeholder="Digita tu Teléfono y/o Celular" required>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col">
        	<select class="form-control " name="pais_alt">
				<option value="0" selected="selected">País</option>
				<option value="2">Afganistan</option>
				<option value="3">Africa Central</option>
				<option value="4">Albania</option>
				<option value="5">Alemania</option>
				<option value="6">Andorra</option>
				<option value="7">Angola</option>
				<option value="8">Anguilla</option>
				<option value="9">Antartida</option>
				<option value="10">Antigua y Barbuda</option>
				<option value="11">Arabia Saudita</option>
				<option value="12">Argelia</option>
				<option value="13">Argentina</option>
				<option value="14">Armenia</option>
				<option value="15">Aruba</option>
				<option value="16">Australia</option>
				<option value="17">Austria</option>
				<option value="18">Azerbaiyan</option>
				<option value="19">Bahamas</option>
				<option value="20">Bahrein</option>
				<option value="21">Bangladesh</option>
				<option value="22">Barbados</option>
				<option value="23">Bielorrusia</option>
				<option value="24">Belgica</option>
				<option value="25">Belice</option>
				<option value="26">Benin</option>
				<option value="27">Bermuda</option>
				<option value="28">Butan</option>
				<option value="29">Bolivia</option>
				<option value="30">Bosnia y Herzegovina</option>
				<option value="31">Botswana</option>
				<option value="32">Brasil</option>
				<option value="33">Brunei</option>
				<option value="34">Bulgaria</option>
				<option value="35">Burkina Faso</option>
				<option value="36">Burundi</option>
				<option value="37">Camboya</option>
				<option value="38">Camerun</option>
				<option value="39">Canada</option>
				<option value="40">Cabo Verde</option>
				<option value="41">Ciudad del Vaticano</option>
				<option value="42">Chad</option>
				<option value="43">Chile</option>
				<option value="44">China</option>
				<option value="45">Colombia</option>
				<option value="46">Comoras</option>
				<option value="47">Congo</option>
				<option value="48">Corea del Norte</option>
				<option value="49">Corea del Sur</option>
				<option value="50">Costa Rica</option>
				<option value="51">Costa de Marfil</option>
				<option value="52">Croacia</option>
				<option value="53">Cuba</option>
				<option value="54">Chipre</option>
				<option value="55">Dinamarca</option>
				<option value="56">Dominica</option>
				<option value="57">Ecuador</option>
				<option value="58">Egipto</option>
				<option value="59">El Salvador</option>
				<option value="60">Emiratos Arabes</option>
				<option value="61">Eritrea</option>
				<option value="62">Eslovaquia</option>
				<option value="63">Eslovenia</option>
				<option value="64">España</option>
				<option value="65">Estados Unidos</option>
				<option value="66">Estonia</option>
				<option value="67">Etiopia</option>
				<option value="68">Fiji</option>
				<option value="69">Filipinas</option>
				<option value="70">Finlandia</option>
				<option value="71">Francia</option>
				<option value="72">Gabon</option>
				<option value="73">Gambia</option>
				<option value="74">Georgia</option>
				<option value="75">Ghana</option>
				<option value="76">Gibraltar</option>
				<option value="77">Grecia</option>
				<option value="78">Granada</option>
				<option value="79">Groenlandia</option>
				<option value="80">Guadalupe</option>
				<option value="81">Guam</option>
				<option value="82">Guatemala</option>
				<option value="83">Guinea</option>
				<option value="84">Guinea-bissau</option>
				<option value="85">Guinea Ecuatorial</option>
				<option value="86">Guyana</option>
				<option value="87">Guyana Francesa</option>
				<option value="88">Haiti</option>
				<option value="89">Holanda</option>
				<option value="90">Honduras</option>
				<option value="91">Hong Kong</option>
				<option value="92">Hungria</option>
				<option value="93">India</option>
				<option value="94">Indonesia</option>
				<option value="95">Iran</option>
				<option value="96">Irak</option>
				<option value="97">Irlanda</option>
				<option value="98">Isla Bouvet</option>
				<option value="99">Isla de Coco</option>
				<option value="100">Isla de Navidad</option>
				<option value="101">Isla de Pascua</option>
				<option value="102">Isla Norfolk</option>
				<option value="103">Islandia</option>
				<option value="104">Islas Cayman</option>
				<option value="105">Islas Cook</option>
				<option value="106">Islas Feroe</option>
				<option value="107">Islas Heard y McDonald</option>
				<option value="108">Islas Malvinas</option>
				<option value="109">Islas Marianas del Norte</option>
				<option value="110">Islas Marshall</option>
				<option value="111">Islas Pitcairn</option>
				<option value="112">Islas Salomon</option>
				<option value="113">Islas Turcas y Caicos</option>
				<option value="114">Islas Virgenes</option>
				<option value="115">Israel</option>
				<option value="116">Italia</option>
				<option value="117">Jamaica</option>
				<option value="118">Japon</option>
				<option value="119">Jordania</option>
				<option value="120">Kazakhstan</option>
				<option value="121">Kenia</option>
				<option value="122">Kiribati</option>
				<option value="123">Kosovo</option>
				<option value="124">Kuwait</option>
				<option value="125">Kirguistan</option>
				<option value="126">Laos</option>
				<option value="127">Letonia</option>
				<option value="128">Libano</option>
				<option value="129">Lesoto</option>
				<option value="130">Liberia</option>
				<option value="131">Libia</option>
				<option value="132">Liechtenstein</option>
				<option value="133">Lituania</option>
				<option value="134">Luxemburgo</option>
				<option value="135">Macao</option>
				<option value="136">Macedonia</option>
				<option value="137">Madagascar</option>
				<option value="138">Malawi</option>
				<option value="139">Malasia</option>
				<option value="140">Maldivas</option>
				<option value="141">Mali</option>
				<option value="142">Malta</option>
				<option value="143">Martinica</option>
				<option value="144">Mauritania</option>
				<option value="145">Mauricio</option>
				<option value="146">Mayotte</option>
				<option value="147">Mexico</option>
				<option value="148">Micronesia</option>
				<option value="149">Moldavia</option>
				<option value="150">Monaco</option>
				<option value="151">Mongolia</option>
				<option value="152">Montenegro</option>
				<option value="153">Montserrat</option>
				<option value="154">Marruecos</option>
				<option value="155">Mozambique</option>
				<option value="156">Myanmar</option>
				<option value="157">Namibia</option>
				<option value="158">Nauru</option>
				<option value="159">Nepal</option>
				<option value="160">Nicaragua</option>
				<option value="161">Niger</option>
				<option value="162">Nigeria</option>
				<option value="163">Niue</option>
				<option value="164">Noruega</option>
				<option value="165">Nueva Caledonia</option>
				<option value="166">Nueva Zelanda</option>
				<option value="167">Oman</option>
				<option value="168">Pakistan</option>
				<option value="169">Palau</option>
				<option value="170">Palestina</option>
				<option value="171">Panama</option>
				<option value="172">Papua Nueva Guinea</option>
				<option value="173">Paraguay</option>
				<option value="174">Peru</option>
				<option value="175">Polinesia Francesa</option>
				<option value="176">Polonia</option>
				<option value="177">Portugal</option>
				<option value="178">Puerto Rico</option>
				<option value="179">Qatar</option>
				<option value="180">Republica Checa</option>
				<option value="181">Republica Dominicana</option>
				<option value="182">Reino Unido</option>
				<option value="183">Reunion</option>
				<option value="184">Rumania</option>
				<option value="185">Rusia</option>
				<option value="186">Ruanda</option>
				<option value="187">Sahara Occidental</option>
				<option value="188">Samoa</option>
				<option value="189">Santa Helena</option>
				<option value="190">San Cristobal y Nieves</option>
				<option value="191">Santa Lucia</option>
				<option value="192">San Pedro y Miguelon</option>
				<option value="193">San Vicente y las Granadinas</option>
				<option value="194">Samoa</option>
				<option value="195">San Marino</option>
				<option value="196">Santo Tome y Principe</option>
				<option value="197">Senegal</option>
				<option value="198">Serbia y Montenegro</option>
				<option value="199">Seychelles</option>
				<option value="200">Sierra Leona</option>
				<option value="201">Singapur</option>
				<option value="202">Siria</option>
				<option value="203">Somalia</option>
				<option value="204">Sri Lanka</option>
				<option value="205">Sudafrica</option>
				<option value="206">Sudan</option>
				<option value="207">Surinam</option>
				<option value="208">Suazilandia</option>
				<option value="209">Suecia</option>
				<option value="210">Suiza</option>
				<option value="211">Taiwan</option>
				<option value="212">Tayikistan</option>
				<option value="213">Tanzania</option>
				<option value="214">Tailandia</option>
				<option value="215">Timor Oriental</option>
				<option value="216">Togo</option>
				<option value="217">Tokelau</option>
				<option value="218">Tonga</option>
				<option value="219">Trinidad y Tobago</option>
				<option value="220">Tunez</option>
				<option value="221">Turquia</option>
				<option value="222">Turkey</option>
				<option value="223">Turkmenistan</option>
				<option value="224">Tuvalu</option>
				<option value="225">Uganda</option>
				<option value="226">Ukrania</option>
				<option value="227">Uruguay</option>
				<option value="228">Uzbekistan</option>
				<option value="229">Vanuatu</option>
				<option value="230">Venezuela</option>
				<option value="231">Vietnam</option>
				<option value="232">Wallis y Futuna</option>
				<option value="233">Yemen</option>
				<option value="234">Yibuti</option>
				<option value="235">Zambia</option>
				<option value="236">Zimbaue</option>
				<option value="237">Otro</option>
            </select>
        </div>
        <div class="col">
            <input type="text" id="ciudad_alt" class="form-control" placeholder="Ciudad" required>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div>
            <input class="form-check-input" type="checkbox" name="acepto_ter">
        </div>
        <div>
            <label class="form-check-label">
                Acepta <a target="_blank" href="javascript:window.open('./pdfs/politica_privacidad.pdf');">POLITICAS DE PRIVACIDAD</a> y <a target="_blank" href="javascript:window.open('./pdfs/term_y_cond.pdf');">TERMINOS Y CONDICIONES</a> 
            </label>
        </div>
       
    </div>
    
    <input type="submit" class="btn btn-primary btn-block mt-2" value="Enviar datos">
    </form>

    <div class="alert alert-secondary mt-3" role="alert">
        <p class="font-weight-bold">
            B) Por favor contáctenos a través de cualquiera de estos canales y medios:
        </p>
    </div>

    <ul class="list-group">
        <li class="list-group-item">PBX: +571 344 1733 Extensión 1</li>
        <li class="list-group-item"><a href="mailto:info@emblemaviajes.com">Email: info@emblemaviajes.com</a></li>
        <li class="list-group-item">Chat: <a href="">Ir al chat</a></li>
        <li class="list-group-item">Celular y Whatsapp <img src="./img/icon_whatsapp.png" alt=""> : +57 317 661 6454</li>
    </ul>
</div>

<?php
    include_once 'footer.php';
?>

</body>
    <script src="./js/js/pooper.min.js" ></script>
    <script src="./js/js/bootstrap.min.js"></script>
    <script src="./js/js/jquery-ui.js"></script>
    <script src="./js/alternativa.js"></script>
</body>
</html>
