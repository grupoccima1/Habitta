<?php include "../header.php"; ?>
<div class="container">
  <div class= "card mt-4">
    <div class= "card-body">
        <h2 class="mb-3 fs-4 text-center"> Agregar nuevo registro  </h2>
        <form action="./insertardevolucionesclientes.php" method="post">
          <div class="row">
            <div class="col-4 mb-2">
              <label for="No">NO</label>
                <input type="text" class="form-control" id="No" name="No">
            </div>  
            <div class="col-4 mb-2">
              <label for="FECHA">FECHA</label>
              <input type="text" class="form-control" id="FECHA" name="FECHA">
            </div>
            <div class="col-4 mb-2">
              <label for="CONDOMINIO">CONDOMINIO</label>
              <input type="text" class="form-control" id="CONDOMINIO" name="CONDOMINIO">
            </div>
            <div class="col-4 mb-2">
              <label for="LLAVE">LLAVE</label>
              <input type="text" class="form-control" id="LLAVE" name="LLAVE">
            </div>
            <div class="col-4 mb-2">
              <label for="CLIENTE">CLIENTE</label>
              <input type="text" class="form-control" id="CLIENTE" name="CLIENTE">
            </div>
            <div class="col-4 mb-2">
              <label for="MONTO">MONTO</label>
              <input type="text" class="form-control" id="MONTO" name="MONTO">
            </div>
            <div class="col-4 mb-2">
              <label for="BANCO">BANCO</label>
              <input type="text" class="form-control" id="BANCO" name="BANCO">
            </div>
            <div class="col-4 mb-2">
              <label for="MOTIVO">MOTIVO</label>
              <input type="text" class="form-control" id="MOTIVO" name="MOTIVO">
            </div>
            <div class="col-4 mb-2">
              <label for="MONTO_DE_LA_OPERACION">MONTO DE LA OPERACION</label>
              <input type="text" class="form-control" id="MONTO_DE_LA_OPERACION" name="MONTO_DE_LA_OPERACION">
            </div>
            <div class="col-4 mb-2">
              <label for="DESARROLLO">DESARROLLO</label>
              <input type="text" class="form-control" id="DESARROLLO" name="DESARROLLO">
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
