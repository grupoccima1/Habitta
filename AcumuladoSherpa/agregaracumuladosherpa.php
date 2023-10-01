<?php include "../header.php"; ?>
<div class="container">
  <div class="card mt-4">
    <div class="card-body">
      <h2 class="mb-3 fs-4 text-center"> Agregar nuevo registro </h2>
      <form action="../AcumuladoSherpa/insertaracumuladosherpa.php" method="post">
        <div class="row mt-4">
          <div class="col-4 mb-2">
            <label for="LLAVE">LLAVE</label>
            <input type="text" class="form-control" id="LLAVE" name="LLAVE">
          </div>
          <div class="col-4 mb-2">
            <label for="FECHA_DE_INGRESO">FECHA DE INGRESO</label>
            <input type="text" class="form-control" id="FECHA_DE_INGRESO" name="FECHA_DE_INGRESO">
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
            <label for="DESARROLLO">DESARROLLO</label>
            <input type="text" class="form-control" id="DESARROLLO" name="DESARROLLO">
          </div>
          <div class="col-4 mb-2">
            <label for="PUESTO">PUESTO</label>
            <input type="text" class="form-control" id="PUESTO" name="PUESTO">
          </div>
          <div class="col-4 mb-2">
            <label for="COMISIONISTA">COMISIONISTA</label>
            <input type="text" class="form-control" id="COMISIONISTA" name="COMISIONISTA">
          </div>
          <div class="col-4 mb-2">
            <label for="TOTAL_DE_LA_VENTA">TOTAL DE LA VENTA</label>
            <input type="text" class="form-control" id="TOTAL_DE_LA_VENTA" name="TOTAL_DE_LA_VENTA">
          </div>
          <div class="col-4 mb-2">
            <label for="ENGANCHE">ENGANCHE</label>
            <input type="text" class="form-control" id="ENGANCHE" name="ENGANCHE">
          </div>
          <div class="col-4 mb-2">
            <label for="PCOMISION">PCOMISION</label>
            <input type="text" class="form-control" id="PCOMISION" name="PCOMISION">
          </div>
          <div class="col-4 mb-2">
            <label for="TOTAL_COMISION">TOTAL COMISION</label>
            <input type="text" class="form-control" id="TOTAL_COMISION" name="TOTAL_COMISION">
          </div>
          <div class="col-4 mb-2">
            <label for="DESCUENTO">DESCUENTO</label>
            <input type="text" class="form-control" id="DESCUENTO" name="DESCUENTO">
          </div>
          <div class="col-4 mb-2">
            <label for="DESC">DESC</label>
            <input type="text" class="form-control" id="DESC" name="DESC">
          </div>
          <div class="col-4 mb-2">
            <label for="A_PAGAR_EXTERNOS">A PAGAR EXTERNOS</label>
            <input type="text" class="form-control" id="A_PAGAR_EXTERNOS" name="A_PAGAR_EXTERNOS">
          </div>
          <div class="col-4 mb-2">
            <label for="SUBTOTAL">SUBTOTAL</label>
            <input type="text" class="form-control" id="SUBTOTAL" name="SUBTOTAL">
          </div>
          <div class="col-4 mb-2">
            <label for="IVA">IVA</label>
            <input type="text" class="form-control" id="IVA" name="IVA">
          </div>
          <div class="col-4 mb-2">
            <label for="RETENCIONES_DE_IVA">RETENCIONES DE IVA</label>
            <input type="text" class="form-control" id="RETENCIONES_DE_IVA" name="RETENCIONES_DE_IVA">
          </div>
          <div class="col-4 mb-2">
            <label for="RETENCIONES_DE_ISR">RETENCIONES DE ISR</label>
            <input type="text" class="form-control" id="RETENCIONES_DE_ISR" name="RETENCIONES_DE_ISR">
          </div>
          <div class="col-4 mb-2">
            <label for="TOTAL">TOTAL</label>
            <input type="text" class="form-control" id="TOTAL" name="TOTAL">
          </div>
          <div class="col-4 mb-2">
            <label for="PAGO">PAGO</label>
            <input type="text" class="form-control" id="PAGO" name="PAGO">
          </div>
          <div class="col-4 mb-2">
            <label for="NOTAS">NOTAS</label>
            <input type="text" class="form-control" id="NOTAS" name="NOTAS">
          </div>
          <div class="col-4 mb-2">
            <label for="PAGADO">PAGADO</label>
            <input type="text" class="form-control" id="PAGADO" name="PAGADO">
          </div>
          <div class="col-4 mb-2">
            <label for="METODO_DE_PAGO">METODO DE PAGO</label>
            <input type="text" class="form-control" id="METODO_DE_PAGO" name="METODO_DE_PAGO">
          </div>
          <div class="col-4 mb-2">
            <label for="FECHA_PAGADA">FECHA PAGADA</label>
            <input type="text" class="form-control" id="FECHA_PAGADA" name="FECHA_PAGADA">
          </div>
          <div class="col-4 mb-2">
            <label for="NOMBRE_CORRECTO">NOMBRE CORRECTO</label>
            <input type="text" class="form-control" id="NOMBRE_CORRECTO" name="NOMBRE_CORRECTO">
          </div>
          <div class="col-4 mb-2">
            <label for="SEMANA_PAGADA">SEMANA PAGADA</label>
            <input type="text" class="form-control" id="SEMANA_PAGADA" name="SEMANA_PAGADA">
          </div>
          <div class="col-4 mb-2">
            <label for="SEMANA">SEMANA</label>
            <input type="text" class="form-control" id="SEMANA" name="SEMANA">
          </div>
          <div class="col-4 mb-2">
            <label for="X_TIPO_DE_REGIMEN">X TIPO DE REGIMEN</label>
            <input type="text" class="form-control" id="X_TIPO_DE_REGIMEN" name="X_TIPO_DE_REGIMEN">
          </div>
          <div class="col-4 mb-2">
            <label for="CUENTA">CUENTA</label>
            <input type="text" class="form-control" id="CUENTA" name="CUENTA">
          </div>
          <div class="col-4 mb-2">
            <label for="MOTIVO_DE_DESCUENTO">MOTIVO DE DESCUENTO</label>
            <input type="text" class="form-control" id="MOTIVO_DE_DESCUENTO" name="MOTIVO_DE_DESCUENTO">
          </div>
          <div class="col-4 mb-2">
            <label for="ESTATUS">ESTATUS</label>
            <input type="text" class="form-control" id="ESTATUS" name="ESTATUS">
          </div>
          <div class="col-4 mb-2">
            <label for="LOTE_ANTERIOR">LOTE ANTERIOR</label>
            <input type="text" class="form-control" id="LOTE_ANTERIOR" name="LOTE_ANTERIOR">
          </div>
        </div>
        <div class="d-flex justify-content-end">
          <button class="me-2 btn btn-primary mt-3 px-5">
            Agregar
          </button>
          <a href="../acumuladosherpa.php" class="btn btn-secondary mt-3 px-5">
            Cancelar
          </a>
        </div>

      </form>
    </div>
  </div>
</div>



    