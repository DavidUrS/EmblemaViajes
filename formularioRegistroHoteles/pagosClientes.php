<form id="formuPagosClientes">
	<div class="border border-secondary p-3">
    <p class="display-4 text-center">Pagos</p>
	  <h4 class="text-center">Opciones de pago para los clientes</h4>

	  <div class="form-group row">
          <div class="col-md-6 text-center">
          	<div class="row align-self-center">
          		<div class="col-md-6 align-self-center" >
          			¿Puede cobrar con tarjetas de crédito en el establecimiento?
          		</div>
          		<div class="col-md-6">
                Si<input type="radio" name="tarjet_estable" id="si" value="si">
                No<input type="radio" name="tarjet_estable" value="no">
          		</div>
          	</div>
          </div>

          <div class="col-md-6 text-center" id="listado_tarjetas">
            <input type="checkbox" class="tarjetas" value="American Express">American Express <br>
            <input type="checkbox" class="tarjetas" value="Visa">Visa <br>
            <input type="checkbox" class="tarjetas" value="Euro/Mastercard">Euro/Mastercard <br>
            <input type="checkbox" class="tarjetas" value="Diners Club">Diners Club<br>
            <input type="checkbox" class="tarjetas" value="JCB">JCB<br>
            <input type="checkbox" class="tarjetas" value="Maestro">Maestro<br>
            <input type="checkbox" class="tarjetas" value="Discover">Discover<br>
            <input type="checkbox" class="tarjetas" value="UnionPay credit card">UnionPay credit card<br>
          </div>
        </div>

        <div class="form-group text-center">
              <h5 class="text-center">Configuración de IVA/Impuestos</h5>

              <div class="form-group" >
                 IVA 19%, pago obligatorio para ciudadano Colombiano o Extranjero residente
              </div>
              <div class="form-group">

                No necesito pagar IVA<input type="radio" name="iva_pagar" value="no">
              </div>
              <div class="form-group">
                 Otro Especificar <input type="radio" name="iva_pagar" value="otro">
                <input type="text" class="form-control" id="otro" placeholder="Digite el nombre del otro impuesto">
              </div>
        </div>

        <div class="form-group text-center">
              <h5 class="text-center">Impuesto municipal</h5>

              <div class="form-group" >
                 No hay un impuesto municipal
                <input type="radio" name="iva_muni" value="no">
              </div>
              <div class="form-group">
                 Se aplica un impuesto municipal<input type="radio" name="iva_muni" value="si">
                <input type="number" class="form-control" id="valor_iva_muni" placeholder="$ Añadir el valor del impuesto $">
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    Importe expresado en
                  </div>
                  <div class="col-md-6">
                    <select class="form-control" id="importe_en" name="importe">
                      <option>$/por estancia</option>
                      <option>$/por persona noche</option>
                      <option>No aplicable</option>
                      <option>No se puede calcular</option>
                      <option>$/por persona por estancia</option>
                      <option>%</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    ¿El impuesto municipal está incluido o no?
                  </div>
                  <div class="col-md-6">
                    <select class="form-control"  name="iva_muni_incluido">
                      <option selected="selected">Incluido</option>
                      <option>No incluido</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    ¿Los clientes tendrán que pagar algún suplemento en tu establecimiento, por ejemplo, de limpieza?
                  </div>
                  <div class="col-md-6">
                     Si<input type="radio" name="pagar_suplemento" value="si">
                     No<input type="radio" name="pagar_suplemento" value="no">
                  </div>
                </div>
              </div>
        </div>

	    <div class="row justify-content-around">
	      <button class="btn btn-primary">Guardar y seguir</button>
	      <button class="btn btn-outline-primary">Guardar y seguir despues</button>
	    </div>

	</div>
</form>
