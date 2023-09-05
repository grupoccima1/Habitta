<?php include "../header.php"; ?>
<div class="container">
<div class= "card mt-4">
    <div class= "card-body">
        <h2 class="mb-3 fs-4 text-center"> Agregar nuevo registro  </h2>
        <form action="./insertarhsbchabitta.php" method="post">
          <div class="row">
          <div class="col-4 mb-2">
            <label for="SEMANA">SEMANA</label>
              <input type="text" class="form-control" id="SEMANA" name="SEMANA">
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
              <label for="UNIDADDENEGOCIO">UNIDADDENEGOCIO</label>
              <input type="text" class="form-control" id="UNIDADDENEGOCIO" name="UNIDADDENEGOCIO">
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
              <label for="FECHACORRECTA">FECHACORRECTAL</label>
              <input type="text" class="form-control" id="FECHACORRECTA" name="FECHACORRECTA">
            </div>
            <div class="col-4 mb-2">
              <label for="LLAVEEDOSDECUENTA">LLAVEEDOSDECUENTA</label>
              <input type="text" class="form-control" id="LLAVEEDOSDECUENTA" name="LLAVEEDOSDECUENTA">
            </div>
            <div class="col-4 mb-2">
              <label for="CLAVE">CLAVE</label>
              <input type="text" class="form-control" id="CLAVE" name="CLAVE">
            </div>
            <div class="col-4 mb-2">
              <label for="METODODEPAGO">METODODEPAGO</label>
              <input type="text" class="form-control" id="METODODEPAGO" name="METODODEPAGO">
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