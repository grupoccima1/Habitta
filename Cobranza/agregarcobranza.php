<?php include "../header.php"; ?>
<div class="container">
<div class= "card mt-4">
    <div class= "card-body">
        <h2 class="mb-3 fs-4 text-center"> Agregar nuevo registro  </h2>
        <form action="./insertarcobranza.php" method="post">
          <div class="row">
            <div class="col-4 mb-2">
              <label for="FECHA">FECHA</label>
              <input type="text" class="form-control" id="FECHA" name="FECHA">
            </div>  
            <div class="col-4 mb-2">
              <label for="MOTIVO">MOTIVO</label>
              <input type="text" class="form-control" id="MOTIVO" name="MOTIVO">
            </div>
            <div class="col-4 mb-2">
              <label for="FLUJO">FLUJO</label>
              <input type="text" class="form-control" id="FLUJO" name="FLUJO">
            </div>
            <div class="col-4 mb-2">
              <label for="FECHA_1">FECHA_1</label>
              <input type="text" class="form-control" id="FECHA_1" name="FECHA_1">
            </div>
            <div class="col-4 mb-2">
              <label for="DESCRIPCION">DESCRIPCION</label>
              <input type="text" class="form-control" id="DESCRIPCION" name="DESCRIPCION">
            </div>
            <div class="col-4 mb-2">
              <label for="APAGAR">APAGAR</label>
              <input type="text" class="form-control" id="APAGAR" name="APAGAR">
            </div>
            <div class="col-4 mb-2">
              <label for="PAGO">PAGO</label>
              <input type="text" class="form-control" id="PAGO" name="PAGO">
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