<?php include "../header.php"; ?>
<div class="container">
  <div class= "card mt-4">
    <div class= "card-body">
        <h2 class="mb-3 fs-4 text-center"> Agregar nuevo registro  </h2>
        <form action="./insertarestados.php" method="post">
          <div class="row">
            <div class="col-4 mb-2">
              <label for="SourceName">SourceName</label>
                <input type="text" class="form-control" id="SourceName" name="SourceName">
            </div>  
            <div class="col-4 mb-2">
              <label for="PERIODO">PERIODO</label>
              <input type="text" class="form-control" id="PERIODO" name="PERIODO">
            </div>
            <div class="col-4 mb-2">
              <label for="FECHA">FECHA</label>
              <input type="text" class="form-control" id="FECHA" name="FECHA">
            </div>
            <div class="col-4 mb-2">
              <label for="SALDOINICIAL">SALDOINICIAL</label>
              <input type="text" class="form-control" id="SALDOINICIAL" name="SALDOINICIAL">
            </div>
            <div class="col-4 mb-2">
              <label for="MENSUALIDAD">MENSUALIDAD</label>
              <input type="text" class="form-control" id="MENSUALIDAD" name="MENSUALIDAD">
            </div>
            <div class="col-4 mb-2">
              <label for="PAGADO">PAGADO</label>
              <input type="text" class="form-control" id="PAGADO" name="PAGADO">
            </div>
            <div class="col-4 mb-2">
              <label for="INTERESFINANCIAMIENTO">INTERESFINANCIAMIENTO</label>
              <input type="text" class="form-control" id="INTERESFINANCIAMIENTO" name="INTERESFINANCIAMIENTO">
            </div>
            <div class="col-4 mb-2">
              <label for="ABONO_CAPITAL">ABONO_CAPITAL</label>
              <input type="text" class="form-control" id="ABONO_CAPITAL" name="ABONO_CAPITAL">
            </div>
            <div class="col-4 mb-2">
              <label for="SALDO_FINAL">SALDO_FINAL</label>
              <input type="text" class="form-control" id="SALDO_FINAL" name="SALDO_FINAL">
            </div>
            <div class="col-4 mb-2">
              <label for="INT_GEN">INT_GEN</label>
              <input type="text" class="form-control" id="INT_GEN" name="INT_GEN">
            </div>
            <div class="col-4 mb-2">
              <label for="INT_INT">INT_INT</label>
              <input type="text" class="form-control" id="INT_INT" name="INT_INT">
            </div>
            <div class="col-4 mb-2">
              <label for="INT_ACUM_MORA">INT_ACUM_MORA</label>
              <input type="text" class="form-control" id="INT_ACUM_MORA" name="INT_ACUM_MORA">
            </div>
            <div class="col-4 mb-2">
              <label for="INT_NEG">INT NEG</label>
              <input type="text" class="form-control" id="INT_NEG" name="INT_NEG">
            </div>
            <div class="col-4 mb-2">
              <label for="ESTATUS">ESTATUS</label>
              <input type="text" class="form-control" id="ESTATUS" name="ESTATUS">
            </div>
            <div class="col-4 mb-2">
              <label for="OBSERVACION">OBSERVACION</label>
              <input type="text" class="form-control" id="OBSERVACION" name="OBSERVACION">
            </div>
            <div class="col-4 mb-2">
              <label for="DEBE_INTERES">DEBE_INTERES</label>
              <input type="text" class="form-control" id="DEBE_INTERES" name="DEBE_INTERES">
            </div>
            <div class="col-4 mb-2">
              <label for="FECHA_PAGO">FECHA_PAGO</label>
              <input type="text" class="form-control" id="FECHA_PAGO" name="FECHA_PAGO">
            </div>
            <div class="col-4 mb-2">
              <label for="INDICADOR_FECHA">INDICADOR_FECHA</label>
              <input type="text" class="form-control" id="INDICADOR_FECHA" name="INDICADOR_FECHA">
            </div>
            <div class="col-4 mb-2">
              <label for="PORCENT_INT">PORCENT_INT</label>
              <input type="text" class="form-control" id="PORCENT_INT" name="PORCENT_INT">
            </div>
            <div class="col-4 mb-2">
              <label for="LLAVE2">ELLAVE2</label>
              <input type="text" class="form-control" id="LLAVE2" name="LLAVE2">
            </div>
            <div class="col-4 mb-2">
              <label for="MENS_ADEU">SÍ NO</label>
              <input type="text" class="form-control" id="MENS_ADEU" name="MENS_ADEU">
            </div>
            <div class="col-4 mb-2">
              <label for="CALC_SOBRE">CALC_SOBRE</label>
              <input type="text" class="form-control" id="CALC_SOBRE" name="CALC_SOBRE">
            </div>
            <div class="col-4 mb-2">
              <label for="MONTO_INT_MOR">MONTO_INT_MOR</label>
              <input type="text" class="form-control" id="MONTO_INT_MOR" name="MONTO_INT_MOR">
            </div>
          </div>
          <div class="d-flex justify-content-end">
            <button class="me-2 btn btn-primary mt-3 px-5">
              Agregar
            </button>
            <a href="../estados.php" class="btn btn-secondary mt-3 px-5">
              Cancelar
            </a>        
          </div> 
        </form>
    </div>
  </div>
</div>