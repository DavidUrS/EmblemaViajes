<form id="formuContacto">
      <div class="border border-secondary p-3">

          <p class="display-4 text-center">Datos de contacto</p>
          <div class="alert alert-primary text-center" role="alert">
            <h4>PASO 1 (Este paso es OBLIGATORIO)</h4>
          </div>
            <div class="form-group row">
              <label for="nombre contacto" class="col-md-4 col-form-label">Nombre de la persona de contacto</label>
              <div class="col-md-8">
                <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="nombre contacto" class="col-md-4 col-form-label">Número de identificación de la persona de contacto</label>
              <div class="col-md-8">
                <input type="text" class="form-control" id="id" placeholder="Ingrese número de identificación" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="nombre propiedad" class="col-md-4 col-form-label">Nombre de la propiedad a registrar</label>
              <div class="col-md-8">
                <input type="text" class="form-control" id="nombre_hotel" placeholder="Ingrese nombre de la propiedad" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-4 col-form-label" for="cargo">¿Cual es su cargo en el hotel?</label>
              <div class="col-md-8 text-center">
                <select class="form-control " name="cargo" id="cargo" required>
                  <option>Propietario</option>
                  <option>Director / Administrador / Gerente</option>
                  <option>Reservas / Revenue</option>
                  <option>Recepción</option>
                  <option>Contratación / E-commerce</option>
                  <option>Otro</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-4 col-form-label" for="telefono">Telefono de contacto</label>
              <div class="col-md-8">
                <input type="text" class="form-control" id="telefonoC" placeholder="Ingrese telefono" required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-4 col-form-label" for="telefono">Telefono alternativo</label>
              <div class="col-md-8">
                <input type="text" class="form-control" id="telefonoA" placeholder="Ingrese telefono alternativo (opcional)">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-4" for="email">Correro electrónico</label>
              <div class="col-md-8">
                <input type="email" class="form-control" id="email" placeholder="Ingresa email" required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-4 col-form-label" for="grupoHoteles">¿Pertenece a una cadena hotelera o grupo de gestion de hoteles?</label>
              <div class="col-md-8 text-center">
                <select class="form-control" name="cadena_hotelera" id="grupoHoteles">
                  <option class="text-center">Si</option>
                  <option class="text-center">No</option>>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="nombre cadena hotelera" class="col-md-4 col-form-label">Nombre de cadena hotelera o grupo de gestión</label>
              <div class="col-md-8">
                <input type="text" class="form-control" id="nombreCadenaHotelera" placeholder="Ingrese cadena hotelera (si tiene)">
              </div>
            </div>
            <div class="row justify-content-center">
              <button class="btn btn-primary" id="btn_guardar_contacto">Guardar y seguir al PASO 2</button>
            </div>

        </div>
      </form>
