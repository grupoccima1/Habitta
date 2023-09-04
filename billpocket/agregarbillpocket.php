<?php include "../header.php"; ?>
<div class="container">
  <div class="card mt-4">
    <div class="card-body">
      <h2 class="mb-3 fs-4 text-center"> Agregar nuevo registro </h2>
      <form action="./insertarbillpocket.php" method="post">
        <div class="row">
          <div class="col-4 mb-2">
            <label for="NOMBRE_DE_CLIENTE">NOMBRE DE CLIENTE</label>
            <input type="text" class="form-control" id="NOMBRE_DE_CLIENTE" name="NOMBRE_DE_CLIENTE">
          </div>
          <div class="col-4 mb-2">
            <label for="DEPOSITO_DE_CLIENTE">DEPOSITO DE CLIENTE</label>
            <input type="text" class="form-control" id="DEPOSITO_DE_CLIENTE" name="DEPOSITO_DE_CLIENTE">
          </div>
          <div class="col-4 mb-2">
            <label for="COMISION">COMISION</label>
            <input type="text" class="form-control" id="COMISION" name="COMISION">
          </div>
          <div class="col-4 mb-2">
            <label for="DEPOSITO_EN_BANCO">DEPOSITO EN BANCO</label>
            <input type="text" class="form-control" id="DEPOSITO_EN_BANCO" name="DEPOSITO_EN_BANCO">
          </div>
          <div class="col-4 mb-2">
            <label for="TIPO_DE_PAGO">TIPO DE PAGO</label>
            <input type="text" class="form-control" id="TIPO_DE_PAGO" name="TIPO_DE_PAGO">
          </div>
          <div class="col-4 mb-2">
            <label for="FOLIO">FOLIO</label>
            <input type="text" class="form-control" id="FOLIO" name="FOLIO">
          </div>
          <div class="col-4 mb-2">
            <label for="TIPO_DE_TARJETA">TIPO DE TARJETA</label>
            <input type="text" class="form-control" id="TIPO_DE_TARJETA" name="TIPO_DE_TARJETA">
          </div>
          <div class="col-4 mb-2">
            <label for="TPVAFILIADA">TPVAFILIADA</label>
            <input type="text" class="form-control" id="TPVAFILIADA" name="TPVAFILIADA">
          </div>
          <div class="col-4 mb-2">
            <label for="FECHADE_DEPOSITO">FECHA DE DEPOSITO</label>
            <input type="text" class="form-control" id="FECHADE_DEPOSITO" name="FECHADE_DEPOSITO">
          </div>
          <div class="col-4 mb-2">
            <label for="AÑO">AÑO</label>
            <input type="text" class="form-control" id="AÑO" name="AÑO">
          </div>
          <div class="col-4 mb-2">
            <label for="BANCO">BANCO</label>
            <input type="text" class="form-control" id="BANCO" name="BANCO">
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