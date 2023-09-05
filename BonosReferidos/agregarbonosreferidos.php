<?php include "../header.php"; ?>
<div class="container">
<div class= "card mt-4">
    <div class= "card-body">
        <h2 class="mb-3 fs-4 text-center"> Agregar nuevo registro  </h2>
        <form action="./insertarbonosreferidos.php" method="post">
          <div class="row">
          <div class="col-4 mb-2">
            <label for="NÚMERO">NÚMERO</label>
              <input type="text" class="form-control" id="NÚMERO" name="NÚMERO">
          </div>  
            <div class="col-4 mb-2">
              <label for="CONDOMIO">CONDOMIO</label>
              <input type="text" class="form-control" id="CONDOMIO" name="CONDOMIO">
            </div>
            <div class="col-4 mb-2">
              <label for="CLUSTER">CLUSTER</label>
              <input type="text" class="form-control" id="CLUSTER" name="CLUSTER">
            </div>
            <div class="col-4 mb-2">
              <label for="CLIENTE">CLIENTE</label>
              <input type="text" class="form-control" id="CLIENTE" name="CLIENTE">
            </div>
            <div class="col-4 mb-2">
              <label for="PROMOCIÓN">PROMOCIÓN</label>
              <input type="text" class="form-control" id="PROMOCIÓN" name="PROMOCIÓN">
            </div>
            <div class="col-4 mb-2">
              <label for="ESTATUS DÍAS">ESTATUS DÍAS</label>
              <input type="text" class="form-control" id="ESTATUS DÍAS" name="ESTATUS DÍAS">
            </div>
            <div class="col-4 mb-2">
              <label for="INICIO_DE_CORRIDA_CONTRATO_O_SIMULADOR">INICIO DE CORRIDA CONTRATO O SIMULADOR</label>
              <input type="text" class="form-control" id="INICIO_DE_CORRIDA_CONTRATO_O_SIMULADOR" name="INICIO_DE_CORRIDA_CONTRATO_O_SIMULADOR">
            </div>
            <div class="col-4 mb-2">
              <label for="Columna1">Columna1</label>
              <input type="text" class="form-control" id="Columna1" name="Columna1">
            </div>
            <div class="col-4 mb-2">
              <label for="APLICADO">APLICADO</label>
              <input type="text" class="form-control" id="APLICADO" name="APLICADO">
            </div>
            <div class="col-4 mb-2">
              <label for="APARTADO">APARTADO</label>
              <input type="text" class="form-control" id="APARTADO" name="APARTADO">
            </div>
            <div class="col-4 mb-2">
              <label for="FECHAS_DE_PAGO">FECHA DE PAGO</label>
              <input type="text" class="form-control" id="FECHAS_DE_PAGO" name="FECHAS_DE_PAGO">
            </div>
            <div class="col-4 mb-2">
              <label for="ENGANCHE">ENGANCHE</label>
              <input type="text" class="form-control" id="ENGANCHE" name="ENGANCHE">
            </div>
            <div class="col-4 mb-2">
              <label for="TOTAL_PAGADO">TOTAL PAGADO</label>
              <input type="text" class="form-control" id="TOTAL_PAGADO" name="TOTAL_PAGADO">
            </div>
            <div class="col-4 mb-2">
              <label for="Columna2">Columna2</label>
              <input type="text" class="form-control" id="Columna2" name="Columna2">
            </div>
            <div class="col-4 mb-2">
              <label for="Columna3">Columna3</label>
              <input type="text" class="form-control" id="Columna3" name="Columna3">
            </div>
            <div class="col-4 mb-2">
              <label for="Columna4">Columna4</label>
              <input type="text" class="form-control" id="Columna4" name="Columna4">
            </div>
            <div class="col-4 mb-2">
              <label for="Columna5">Columna5</label>
              <input type="text" class="form-control" id="Columna5" name="Columna5">
            </div>
            <div class="col-4 mb-2">
              <label for="Columna6">Columna6</label>
              <input type="text" class="form-control" id="Columna6" name="Columna6">
            </div>
            <div class="col-4 mb-2">
              <label for="No">No</label>
              <input type="text" class="form-control" id="No" name="No">
            </div>
            <div class="col-4 mb-2">
              <label for="STATUS">ESTATUS</label>
              <input type="text" class="form-control" id="STATUS" name="STATUS">
            </div>
            <div class="col-4 mb-2">
              <label for="SÍ_NO">SÍ NO</label>
              <input type="text" class="form-control" id="SÍ_NO" name="SÍ_NO">
            </div>
            <div class="col-4 mb-2">
              <label for="empty_L">Empty_L</label>
              <input type="text" class="form-control" id="empty_L" name="empty_L">
            </div>
            <div class="col-4 mb-2">
              <label for="empty_A">Empty_A</label>
              <input type="text" class="form-control" id="empty_A" name="empty_A">
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
              <label for="BONO">BONO</label>
              <input type="text" class="form-control" id="BONO" name="BONO">
            </div>
            <div class="col-4 mb-2">
              <label for="LOTE_numero1">LOTE_numero1</label>
              <input type="text" class="form-control" id="LOTE_numero1" name="LOTE_numero1">
            </div>
            <div class="col-4 mb-2">
              <label for="CONDOMINIO_numero1">CONDOMINIO_numero1</label>
              <input type="text" class="form-control" id="CONDOMINIO_numero1" name="CONDOMINIO_numero1">
            </div>
            <div class="col-4 mb-2">
              <label for="CLÚSTER_numero1">CLÚSTER_numero1</label>
              <input type="text" class="form-control" id="CLÚSTER_numero1" name="CLÚSTER_numero1">
            </div>
            <div class="col-4 mb-2">
              <label for="CLIENTE_numero1">CLIENTE_numero1</label>
              <input type="text" class="form-control" id="CLIENTE_numero1" name="CLIENTE_numero1">
            </div>
            <div class="col-4 mb-2">
              <label for="NOTA">NOTA</label>
              <input type="text" class="form-control" id="NOTA" name="NOTA">
            </div>
          </div>
           <div class="d-flex justify-content-end">
             <button class="btn btn-primary mt-3 px-5">
                        Agregar
             </button>

           </div>
                      
        </form>
    </div>
    </div>
</div>
