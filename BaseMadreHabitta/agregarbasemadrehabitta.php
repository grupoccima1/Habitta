<?php include "../header.php"; ?>
<div class="container">
<div class= "card mt-4">
    <div class= "card-body">
        <h2 class="mb-3 fs-4 text-center"> Agregar nuevo registro  </h2>
        <form action="./insertarbasemadrehabitta.php" method="post">
          <div class="row">
          <div class="col-4 mb-2">
            <label for="LLAVE">LLAVE</label>
              <input type="text" class="form-control" id="LLAVE" name="LLAVE">
          </div>  
            <div class="col-4 mb-2">
              <label for="LOTE">LOTE</label>
              <input type="text" class="form-control" id="LOTE" name="LOTE">
            </div>
            <div class="col-4 mb-2">
              <label for="CLIENTE">CLIENTE</label>
              <input type="text" class="form-control" id="CLIENTE" name="CLIENTE">
            </div>
            <div class="col-4 mb-2">
              <label for="RFC">RFC</label>
              <input type="text" class="form-control" id="RFC" name="RFC">
            </div>
            <div class="col-4 mb-2">
              <label for="USO_CFDI">USO CFDI</label>
              <input type="text" class="form-control" id="USO_CFDI" name="USO_CFDI">
            </div>
            <div class="col-4 mb-2">
              <label for="RAZON_SOCIAL">RAZON SOCIAL</label>
              <input type="text" class="form-control" id="RAZON_SOCIAL" name="RAZON_SOCIAL">
            </div>
            <div class="col-4 mb-2">
              <label for="DOMICILIO_FISCAL">DOMICILIO FISCAL</label>
              <input type="text" class="form-control" id="DOMICILIO_FISCAL" name="DOMICILIO_FISCAL">
            </div>
            <div class="col-4 mb-2">
              <label for="TELEFONO">TELEFONO</label>
              <input type="text" class="form-control" id="TELEFONO" name="TELEFONO">
            </div>
            <div class="col-4 mb-2">
              <label for="CORREO">CORREO</label>
              <input type="text" class="form-control" id="CORREO" name="CORREO">
            </div>
            <div class="col-4 mb-2">
              <label for="M2">M2</label>
              <input type="text" class="form-control" id="M2" name="M2">
            </div>
            <div class="col-4 mb-2">
              <label for="TOTAL_OPERACION">TOTAL OPERACION</label>
              <input type="text" class="form-control" id="TOTAL_OPERACION" name="TOTAL_OPERACION">
            </div>
            <div class="col-4 mb-2">
              <label for="ENGANCHE">ENGANCHE</label>
              <input type="text" class="form-control" id="ENGANCHE" name="ENGANCHE">
            </div>
            <div class="col-4 mb-2">
              <label for="FINANCIAMIENTO">FINANCIAMIENTO</label>
              <input type="text" class="form-control" id="FINANCIAMIENTO" name="FINANCIAMIENTO">
            </div>
            <div class="col-4 mb-2">
              <label for="FIRMA_CONTRATO">FIRMA CONTRATO</label>
              <input type="text" class="form-control" id="FIRMA_CONTRATO" name="FIRMA_CONTRATO">
            </div>
            <div class="col-4 mb-2">
              <label for="FIN_CORRIDA">FIN CORRIDA</label>
              <input type="text" class="form-control" id="FIN_CORRIDA" name="FIN_CORRIDA">
            </div>
            <div class="col-4 mb-2">
              <label for="TOTAL_MENSUALIDADES">TOTAL MENSUALIDADES</label>
              <input type="text" class="form-control" id="TOTAL_MENSUALIDADES" name="TOTAL_MENSUALIDADES">
            </div>
            <div class="col-4 mb-2">
              <label for="No_1ER_MENS">No 1ER MENS</label>
              <input type="text" class="form-control" id="No_1ER_MENS" name="No_1ER_MENS">
            </div>
            <div class="col-4 mb-2">
              <label for="PRIMERA_MENSUALIDAD">PRIMERA MENSUALIDAD</label>
              <input type="text" class="form-control" id="PRIMERA_MENSUALIDAD" name="PRIMERA_MENSUALIDAD">
            </div>
            <div class="col-4 mb-2">
              <label for="No_2DA_MENS">No 2DA MENS</label>
              <input type="text" class="form-control" id="No_2DA_MENS" name="No_2DA_MENS">
            </div>
            <div class="col-4 mb-2">
              <label for="SEGUNDA_MENSUALIDAD">SEGUNDA MENSUALIDAD</label>
              <input type="text" class="form-control" id="SEGUNDA_MENSUALIDAD" name="SEGUNDA_MENSUALIDAD">
            </div>
            <div class="col-4 mb-2">
              <label for="No_3ER_MENS">No 3ER MENS</label>
              <input type="text" class="form-control" id="No_3ER_MENS" name="No_3ER_MENS">
            </div>
            <div class="col-4 mb-2">
              <label for="TERCER_MENSUALIDAD">TERCER MENSUALIDAD</label>
              <input type="text" class="form-control" id="TERCER_MENSUALIDAD" name="TERCER_MENSUALIDAD">
            </div>
            <div class="col-4 mb-2">
              <label for="TIPO_DE_INTERES">TIPO DE INTERES</label>
              <input type="text" class="form-control" id="TIPO_DE_INTERES" name="TIPO_DE_INTERES">
            </div>
            <div class="col-4 mb-2">
              <label for="MENS ENTREGA">MENS ENTREGA</label>
              <input type="text" class="form-control" id="MENS ENTREGA" name="MENS ENTREGA">
            </div>
            <div class="col-4 mb-2">
              <label for="INICIO_CORRIDA">INICIO CORRIDA</label>
              <input type="text" class="form-control" id="INICIO_CORRIDA" name="INICIO_CORRIDA">
            </div>
            <div class="col-4 mb-2">
              <label for="FECHA_PRIMER_ABONO">FECHA PRIMER ABONO</label>
              <input type="text" class="form-control" id="FECHA_PRIMER_ABONO" name="FECHA_PRIMER_ABONO">
            </div>
            <div class="col-4 mb-2">
              <label for="DEUDA">DEUDA</label>
              <input type="text" class="form-control" id="DEUDA" name="DEUDA">
            </div>
            <div class="col-4 mb-2">
              <label for="FECHA_ENTREGA_LOTE">FECHA ENTREGA LOTE</label>
              <input type="text" class="form-control" id="FECHA_ENTREGA_LOTE" name="FECHA_ENTREGA_LOTE">
            </div>
            <div class="col-4 mb-2">
              <label for="ESTATUS_CM">ESTATUS CM</label>
              <input type="text" class="form-control" id="ESTATUS_CM" name="ESTATUS_CM">
            </div>
            <div class="col-4 mb-2">
              <label for="LINK_SAT">LINK SAT</label>
              <input type="text" class="form-control" id="LINK_SAT" name="LINK_SAT">
            </div>
            <div class="col-4 mb-2">
              <label for="NOTAS_DE_PAGOS">NOTAS DE PAGOS</label>
              <input type="text" class="form-control" id="NOTAS_DE_PAGOS" name="NOTAS_DE_PAGOS">
            </div>
            <div class="col-4 mb-2">
              <label for="BONO_REFERIDO">BONO REFERIDO</label>
              <input type="text" class="form-control" id="BONO_REFERIDO" name="BONO_REFERIDO">
            </div>
            <div class="col-4 mb-2">
              <label for="ESTATUS">ESTATUS</label>
              <input type="text" class="form-control" id="ESTATUS" name="ESTATUS">
            </div>
            <div class="col-4 mb-2">
              <label for="MOTIVO_ESTATUS">MOTIVO DE ESTATUS</label>
              <input type="text" class="form-control" id="MOTIVO_ESTATUS" name="MOTIVO_ESTATUS">
            </div>
            <div class="col-4 mb-2">
              <label for="RESULTADO">RESULTADO</label>
              <input type="text" class="form-control" id="RESULTADO" name="RESULTADO">
            </div>
            <div class="col-4 mb-2">
              <label for="FECHADELIBERACION">FECHA DE LIBERACION</label>
              <input type="text" class="form-control" id="FECHADELIBERACION" name="FECHADELIBERACION">
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
              <label for="APARTADO_TELEGRAM">APARTADO TELEGRAM</label>
              <input type="text" class="form-control" id="APARTADO_TELEGRAM" name="APARTADO_TELEGRAM">
            </div>
            <div class="col-4 mb-2">
              <label for="PRIMER_MENSUALIDAD">PRIMER MENSUALIDAD</label>
              <input type="text" class="form-control" id="PRIMER_MENSUALIDAD" name="PRIMER_MENSUALIDAD">
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