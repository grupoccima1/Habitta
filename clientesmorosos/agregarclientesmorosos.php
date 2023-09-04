<?php include "../header.php"; ?>
<div class="container">
  <div class="card mt-4">
    <div class="card-body">
      <h2 class="mb-3 fs-4 text-center"> Agregar nuevo registro </h2>
      <form action="./insertarclientesmorosos.php" method="post">
        <div class="row">
          <div class="col-4 mb-2">
            <label for="CONTADOR">CONTADOR</label>
            <input type="text" class="form-control" id="CONTADOR" name="CONTADOR">
          </div>
          <div class="col-4 mb-2">
            <label for="LLAVE">LLAVE</label>
            <input type="text" class="form-control" id="LLAVE" name="LLAVE">
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
            <label for="CLÚSTER">CLÚSTER</label>
            <input type="text" class="form-control" id="CLÚSTER" name="CLÚSTER">
          </div>
          <div class="col-4 mb-2">
            <label for="FECHA">FECHA</label>
            <input type="text" class="form-control" id="FECHA" name="FECHA">
          </div>
          <div class="col-4 mb-2">
            <label for="CLIENTE">CLIENTE</label>
            <input type="text" class="form-control" id="CLIENTE" name="CLIENTE">
          </div>
          <div class="col-4 mb-2">
            <label for="PRECIO_DEL_LOTE">PRECIO DEL LOTE</label>
            <input type="text" class="form-control" id="PRECIO_DEL_LOTE" name="PRECIO_DEL_LOTE">
          </div>
          <div class="col-4 mb-2">
            <label for="MONTO_MENS">MONTO MENSUAL</label>
            <input type="text" class="form-control" id="MONTO_MENS" name="MONTO_MENS">
          </div>
          <div class="col-4 mb-2">
            <label for="MENSUALIDAD">MENSUALIDAD</label>
            <input type="text" class="form-control" id="MENSUALIDAD" name="MENSUALIDAD">
          </div>
          <div class="col-4 mb-2">
            <label for="INTERES">INTERES</label>
            <input type="text" class="form-control" id="INTERES" name="INTERES">
          </div>
          <div class="col-4 mb-2">
            <label for="TIPO_DE_INTES">TIPO DE INTERES</label>
            <input type="text" class="form-control" id="TIPO_DE_INTES" name="TIPO_DE_INTES">
          </div>
          <div class="col-4 mb-2">
            <label for="I_NEGOCIADO">INTERES NEGOCIADO</label>
            <input type="text" class="form-control" id="I_NEGOCIADO" name="I_NEGOCIADO">
          </div>
          <div class="col-4 mb-2">
            <label for="REAL">REAL</label>
            <input type="text" class="form-control" id="REAL" name="REAL">
          </div>
          <div class="col-4 mb-2">
            <label for="MENS_PAGADA">MENSUALIDAD PAGADA</label>
            <input type="text" class="form-control" id="MENS_PAGADA" name="MENS_PAGADA">
          </div>
          <div class="col-4 mb-2">
            <label for="MEN_ADEUDADA">MENSUALIDAD ADEUDADA</label>
            <input type="text" class="form-control" id="MEN_ADEUDADA" name="MEN_ADEUDADA">
          </div>
          <div class="col-4 mb-2">
            <label for="FECHA_DE_ACUERDO">FECHA DE ACUERDO</label>
            <input type="text" class="form-control" id="FECHA_DE_ACUERDO" name="FECHA_DE_ACUERDO">
          </div>
          <div class="col-4 mb-2">
            <label for="MEDIO">MEDIO</label>
            <input type="text" class="form-control" id="MEDIO" name="MEDIO">
          </div>
          <div class="col-4 mb-2">
            <label for="PLAZOS">PLAZOS</label>
            <input type="text" class="form-control" id="PLAZOS" name="PLAZOS">
          </div>
          <div class="col-4 mb-2">
            <label for="MONTO_POR_MES">MONTO POR MES</label>
            <input type="text" class="form-control" id="MONTO_POR_MES" name="MONTO_POR_MES">
          </div>
          <div class="col-4 mb-2">
            <label for="INICIO">INICIO</label>
            <input type="text" class="form-control" id="INICIO" name="INICIO">
          </div>
          <div class="col-4 mb-2">
            <label for="FIN">FIN</label>
            <input type="text" class="form-control" id="FIN" name="FIN">
          </div>
          <div class="col-4 mb-2">
            <label for="ESTATUS_DE_INTERES">ESTADOS DE INTERES</label>
            <input type="text" class="form-control" id="ESTATUS_DE_INTERES" name="ESTATUS_DE_INTERES">
          </div>
          <div class="col-4 mb-2">
            <label for="COMENTARIO">COMENTARIO</label>
            <input type="text" class="form-control" id="COMENTARIO" name="COMENTARIO">
          </div>
          <div class="col-4 mb-2">
            <label for="NEGOCIADO">NEGOCIADO</label>
            <input type="text" class="form-control" id="NEGOCIADO" name="NEGOCIADO">
          </div>
          <div class="col-4 mb-2">
            <label for="DEPARTAMENTO">DEPARTAMENTO</label>
            <input type="text" class="form-control" id="DEPARTAMENTO" name="DEPARTAMENTO">
          </div>
          <div class="col-4 mb-2">
            <label for="AÑO">AÑO</label>
            <input type="text" class="form-control" id="AÑO" name="AÑO">
          </div>
        </div>
        <div class="d-flex justify-content-end">
          <button class="btn btn-primary mt-3  px-5">
            Agregar
          </button>
        </div>

      </form>
    </div>
  </div>
</div>