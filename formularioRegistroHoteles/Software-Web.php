<form id="formuSoftware">
        <div class="border border-secondary p-3">
          <p class="display-4 text-center">Software hotelero y soporte web</p>

          <div class="form-group row">
              <label class="col-md-4 col-form-label" for="softwareHoteles">
                PMS (Property management system) <br>
                ¿Trabaja con algún software hotelero?
              </label>
              <div class="col-md-8 text-center">
                <select class="form-control " name="software_hotelero" id="softwareHoteles">
                  <option class="text-center">Si</option>
                  <option class="text-center">No</option>>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="pms" class="col-md-4 col-form-label">Nombre del PMS</label>
              <div class="col-md-8">
                <input type="text" class="form-control" id="pms" placeholder="Ingrese PMS (si tiene)">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-4 col-form-label" for="channerManager">
                Channel Manager (Herramienta de gestión y distribución de agencias online)  <br>
                ¿Trabaja con algún Channel Manager?
              </label>
              <div class="col-md-8 text-center">
                <select class="form-control " id="softwareHoteles" name="channel_manager">
                  <option class="text-center">Si</option>
                  <option class="text-center">No</option>>
                </select>
              </div>
            </div>

             <div class="form-group row">
              <label for="pms" class="col-md-4 col-form-label">Nombre del Channel Manager</label>
              <div class="col-md-8">
                <input type="text" class="form-control" id="nombreChannelManager" placeholder="Ingrese Channel manager (si tiene)">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-4 col-form-label" for="web">
                WEB  <br>
                ¿Su propiedad dispone de página web
              </label>
              <div class="col-md-8 text-center">
                <select class="form-control" name="web" id="web">
                  <option class="text-center">Si</option>
                  <option class="text-center">No</option>>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="url" class="col-md-4 col-form-label">URL (link)</label>
              <div class="col-md-8">
                <input type="text" class="form-control" id="url" placeholder="Ingrese URL (si tiene)">
              </div>
            </div>

            <div class="row justify-content-around">
              <button class="btn btn-primary">Guardar y seguir</button>
              <button class="btn btn-outline-primary">Guardar y seguir despues</button>
            </div>

        </div>
      </form>
