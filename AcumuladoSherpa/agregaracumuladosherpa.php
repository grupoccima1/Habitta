<?php include "../header.php"; ?>
<div class="container">
  <div class="card mt-4">
    <div class="card-body">
      <h2 class="mb-3 fs-4 text-center">Agregar nuevo registro</h2>
      <form action="../AcumuladoSherpa/insertaracumuladosherpa.php" method="post">
        <div class="row mt-4">
          <div class="col-4 mb-2">
            <label for="llave">LLAVE</label>
            <input type="text" class="form-control" id="llave" name="llave">
          </div>
          <div class="col-4 mb-2">
            <label for="fecha_de_ingreso">FECHA DE INGRESO</label>
            <input type="text" class="form-control" id="fecha_de_ingreso" name="fecha_de_ingreso">
          </div>
          <div class="col-4 mb-2">
            <label for="lote">LOTE</label>
            <input type="text" class="form-control" id="lote" name="lote">
          </div>
          <div class="col-4 mb-2">
            <label for="condominio">CONDOMINIO</label>
            <input type="text" class="form-control" id="condominio" name="condominio">
          </div>
          <div class="col-4 mb-2">
            <label for="cluster">CLUSTER</label>
            <input type="text" class="form-control" id="cluster" name="cluster">
          </div>
          <div class="col-4 mb-2">
            <label for="desarrollo">DESARROLLO</label>
            <input type="text" class="form-control" id="desarrollo" name="desarrollo">
          </div>
          <div class="col-4 mb-2">
            <label for="puesto">PUESTO</label>
            <input type="text" class="form-control" id="puesto" name="puesto">
          </div>
          <div class="col-4 mb-2">
            <label for="comisionista">COMISIONISTA</label>
            <input type="text" class="form-control" id="comisionista" name="comisionista">
          </div>
          <div class="col-4 mb-2">
            <label for="total_de_la_venta">TOTAL DE LA VENTA</label>
            <input type="text" class="form-control" id="total_de_la_venta" name="total_de_la_venta">
          </div>
          <div class="col-4 mb-2">
            <label for="enganche">ENGANCHE</label>
            <input type="text" class="form-control" id="enganche" name="enganche">
          </div>
          <div class="col-4 mb-2">
            <label for="p_comision">PCOMISION</label>
            <input type="text" class="form-control" id="p_comision" name="p_comision">
          </div>
          <div class="col-4 mb-2">
            <label for="total_comision">TOTAL COMISION</label>
            <input type="text" class="form-control" id="total_comision" name="total_comision">
          </div>
          <div class="col-4 mb-2">
            <label for="descuento">DESCUENTO</label>
            <input type="text" class="form-control" id="descuento" name="descuento">
          </div>
          <div class="col-4 mb-2">
            <label for="desc">DESC</label>
            <input type="text" class="form-control" id="desc" name="desc">
          </div>
          <div class="col-4 mb-2">
            <label for="a_pagar_externos">A PAGAR EXTERNOS</label>
            <input type="text" class="form-control" id="a_pagar_externos" name="a_pagar_externos">
          </div>
          <div class="col-4 mb-2">
            <label for="subtotal">SUBTOTAL</label>
            <input type="text" class="form-control" id="subtotal" name="subtotal">
          </div>
          <div class="col-4 mb-2">
            <label for="iva">IVA</label>
            <input type="text" class="form-control" id="iva" name="iva">
          </div>
          <div class="col-4 mb-2">
            <label for="retenciones_de_iva">RETENCIONES DE IVA</label>
            <input type="text" class="form-control" id="retenciones_de_iva" name="retenciones_de_iva">
          </div>
          <div class="col-4 mb-2">
            <label for="retenciones_isr">RETENCIONES DE ISR</label>
            <input type="text" class="form-control" id="retenciones_isr" name="retenciones_isr">
          </div>
          <div class="col-4 mb-2">
            <label for="total">TOTAL</label>
            <input type="text" class="form-control" id="total" name="total">
          </div>
          <div class="col-4 mb-2">
            <label for="pago">PAGO</label>
            <input type="text" class="form-control" id="pago" name="pago">
          </div>
          <div class="col-4 mb-2">
            <label for="notas">NOTAS</label>
            <input type="text" class="form-control" id="notas" name="notas">
          </div>
          <div class="col-4 mb-2">
            <label for="pagado">PAGADO</label>
            <input type="text" class="form-control" id="pagado" name="pagado">
          </div>
          <div class="col-4 mb-2">
            <label for="metodo_de_pago">METODO DE PAGO</label>
            <input type="text" class="form-control" id="metodo_de_pago" name="metodo_de_pago">
          </div>
          <div class="col-4 mb-2">
            <label for="fecha_pagada">FECHA PAGADA</label>
            <input type="text" class="form-control" id="fecha_pagada" name="fecha_pagada">
          </div>
          <div class="col-4 mb-2">
            <label for="nombre_correcto">NOMBRE CORRECTO</label>
            <input type="text" class="form-control" id="nombre_correcto" name="nombre_correcto">
          </div>
          <div class="col-4 mb-2">
            <label for="semana_pagada">SEMANA PAGADA</label>
            <input type="text" class="form-control" id="semana_pagada" name="semana_pagada">
          </div>
          <div class="col-4 mb-2">
            <label for="semana">SEMANA</label>
            <input type="text" class="form-control" id="semana" name="semana">
          </div>
          <div class="col-4 mb-2">
            <label for="x_tipo_de_regimen">X TIPO DE REGIMEN</label>
            <input type="text" class="form-control" id="x_tipo_de_regimen" name="x_tipo_de_regimen">
          </div>
          <div class="col-4 mb-2">
            <label for="cuenta">CUENTA</label>
            <input type="text" class="form-control" id="cuenta" name="cuenta">
          </div>
          <div class="col-4 mb-2">
            <label for="motivo_de_descuento">MOTIVO DE DESCUENTO</label>
            <input type="text" class="form-control" id="motivo_de_descuento" name="motivo_de_descuento">
          </div>
          <div class="col-4 mb-2">
            <label for="estatus">ESTATUS</label>
            <input type="text" class="form-control" id="estatus" name="estatus">
          </div>
          <div class="col-4 mb-2">
            <label for="lote_anterior">LOTE ANTERIOR</label>
            <input type="text" class="form-control" id="lote_anterior" name="lote_anterior">
          </div>
        </div>
        <div class="d-flex justify-content-end">
          <button class="me-2 btn btn-primary mt-3 px-5">Agregar</button>
          <a href="../acumuladosherpa.php" class="btn btn-secondary mt-3 px-5">Cancelar</a>
        </div>
      </form>
    </div>
  </div>
</div>
