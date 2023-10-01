<?php include "../header.php"; ?>
<div class="container">
  <div class= "card mt-4">
    <div class= "card-body">
        <h2 class="mb-3 fs-4 text-center"> Agregar nuevo registro  </h2>
        <form action="./insertarcierremensual.php" method="post">
          <div class="row">
            <div class="col-4 mb-2">
              <label for="CIERRE_MES">CIERRE_MES</label>
              <input type="text" class="form-control" id="CIERRE_MES" name="CIERRE_MES">
            </div>  
            <div class="col-4 mb-2">
              <label for="FECHA">FECHA</label>
              <input type="text" class="form-control" id="FECHA" name="FECHA">
            </div>
            <div class="col-4 mb-2">
              <label for="BENEFICIARIO">BENEFICIARIO</label>
              <input type="text" class="form-control" id="BENEFICIARIO" name="BENEFICIARIO">
            </div>
            <div class="col-4 mb-2">
              <label for="INGRESO">INGRESO</label>
              <input type="text" class="form-control" id="INGRESO" name="INGRESO">
            </div>
            <div class="col-4 mb-2">
              <label for="EGRESO">EGRESO</label>
              <input type="text" class="form-control" id="EGRESO" name="EGRESO">
            </div>
            <div class="col-4 mb-2">
              <label for="SALDO">SALDO</label>
              <input type="text" class="form-control" id="SALDO" name="SALDO">
            </div>
            <div class="col-4 mb-2">
              <label for="FACTURA">FACTURA</label>
              <input type="text" class="form-control" id="FACTURA" name="FACTURA">
            </div>
            <div class="col-4 mb-2">
              <label for="REAL">REAL</label>
              <input type="text" class="form-control" id="REAL" name="REAL">
            </div>
            <div class="col-4 mb-2">
              <label for="MOTIVO">MOTIVO</label>
              <input type="text" class="form-control" id="MOTIVO" name="MOTIVO">
            </div>
            <div class="col-4 mb-2">
              <label for="MES">MES</label>
              <input type="text" class="form-control" id="MES" name="MES">
            </div>
            <div class="col-4 mb-2">
              <label for="DESARROLLO">DESARROLLO</label>
              <input type="text" class="form-control" id="DESARROLLO" name="DESARROLLO">
            </div>
            <div class="col-4 mb-2">
              <label for="LOTE">LOTE</label>
              <input type="text" class="form-control" id="LOTE" name="LOTE">
            </div>
            <div class="col-4 mb-2">
              <label for="CONDOMINIO">CONDOMINIO</label>
              <input type="text" class="form-control" id="CONDOMINIO" name="CONDOMINIO">
            </div>
            <div class="col-4 mb-2">
              <label for="CLUSTER">CLUSTER</label>
              <input type="text" class="form-control" id="CLUSTER" name="CLUSTER">
            </div>
            <div class="col-4 mb-2">
              <label for="OBRA">OBRA</label>
              <input type="text" class="form-control" id="OBRA" name="OBRA">
            </div>
            <div class="col-4 mb-2">
              <label for="CATEGORIA">CATEGORIA</label>
              <input type="text" class="form-control" id="CATEGORIA" name="CATEGORIA">
            </div>
            <div class="col-4 mb-2">
              <label for="SUBCATEGORIA">SUBCATEGORIA</label>
              <input type="text" class="form-control" id="SUBCATEGORIA" name="SUBCATEGORIA">
            </div>
            <div class="col-4 mb-2">
              <label for="ORIGEN">ORIGEN</label>
              <input type="text" class="form-control" id="ORIGEN" name="ORIGEN">
            </div>
            <div class="col-4 mb-2">
              <label for="SEMANA">SEMANA</label>
              <input type="text" class="form-control" id="SEMANA" name="SEMANA">
            </div>
            <div class="col-4 mb-2">
              <label for="SOLICITÓ">SOLICITÓ</label>
              <input type="text" class="form-control" id="SOLICITÓ" name="SOLICITÓ">
            </div>
            <div class="col-4 mb-2">
              <label for="AUTORIZÓ">AUTORIZÓ</label>
              <input type="text" class="form-control" id="AUTORIZÓ" name="AUTORIZÓ">
            </div>
            <div class="col-4 mb-2">
              <label for="PRESUPUESTO">PRESUPUESTO</label>
              <input type="text" class="form-control" id="PRESUPUESTO" name="PRESUPUESTO">
            </div>
            <div class="col-4 mb-2">
              <label for="UNIDAD_DE_NEGOCIO">UNIDAD_DE_NEGOCIO</label>
              <input type="text" class="form-control" id="UNIDAD_DE_NEGOCIO" name="UNIDAD_DE_NEGOCIO">
            </div>
            <div class="col-4 mb-2">
              <label for="FLUJO">FLUJO</label>
              <input type="text" class="form-control" id="FLUJO" name="FLUJO">
            </div>
            <div class="col-4 mb-2">
              <label for="LLAVE">LLAVE</label>
              <input type="text" class="form-control" id="LLAVE" name="LLAVE">
            </div>
            <div class="col-4 mb-2">
              <label for="FECHA_CORRECTA">FECHA_CORRECTAL</label>
              <input type="text" class="form-control" id="FECHA_CORRECTA" name="FECHA_CORRECTA">
            </div>
            <div class="col-4 mb-2">
              <label for="LLAVE_EDOS_DE_CUENTA">LLAVE_EDOS_DE_CUENTA</label>
              <input type="text" class="form-control" id="LLAVE_EDOS_DE_CUENTA" name="LLAVE_EDOS_DE_CUENTA">
            </div>
            <div class="col-4 mb-2">
              <label for="METODO_DE_PAGO">METODO_DE_PAGO</label>
              <input type="text" class="form-control" id="METODO_DE_PAGO" name="METODO_DE_PAGO">
            </div>
            <div class="col-4 mb-2">
              <label for="MODELO_DE_PAGO">MODELO_DE_PAGO</label>
              <input type="text" class="form-control" id="MODELO_DE_PAGO" name="MODELO_DE_PAGO">
            </div>
            <div class="col-4 mb-2">
              <label for="MODELO_DE_NEGOCIO">MODELO_DE_NEGOCIO</label>
              <input type="text" class="form-control" id="MODELO_DE_NEGOCIO" name="MODELO_DE_NEGOCIO">
            </div>
            <div class="col-4 mb-2">
              <label for="SOLICITO">SOLICITO</label>
              <input type="text" class="form-control" id="SOLICITO" name="SOLICITO">
            </div>
            <div class="col-4 mb-2">
              <label for="AUTORIZO">AUTORIZO</label>
              <input type="text" class="form-control" id="AUTORIZO" name="AUTORIZO">
            </div>
            <div class="col-4 mb-2">
              <label for="AÑO">AÑO</label>
              <input type="text" class="form-control" id="AÑO" name="AÑO">
            </div>
            <div class="col-4 mb-2">
              <label for="MONTO_PROYECTADO">MONTO_PROYECTADO</label>
              <input type="text" class="form-control" id="MONTO_PROYECTADO" name="MONTO_PROYECTADO">
            </div>
          </div>
          <div class="d-flex justify-content-end">
            <button class="me-2 btn btn-primary mt-3 px-5">
              Agregar
            </button>
            <a href="../cierreMensualHabitta.php" class="btn btn-secondary mt-3 px-5">
              Cancelar
            </a>
          </div>
        </form>
    </div>
  </div>
</div>