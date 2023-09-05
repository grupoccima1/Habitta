<?php include "../header.php"; ?>
<div class="container">
  <div class="card mt-4">
    <div class="card-body">
      <h2 class="mb-3 fs-4 text-center"> Agregar nuevo registro </h2>
      <form action="./insertarcatalogo.php" method="post">
        <div class="row">
        <div class="col-4 mb-2">
          <label for="LLAVE">LLAVE</label>
            <input type="text" class="form-control" id="LLAVE" name="LLAVE">
        </div>  
          <div class="col-4 mb-2">
            <label for="PORCENT1">PORCENT1</label>
            <input type="text" class="form-control" id="PORCENT1" name="PORCENT1">
          </div>
          <div class="col-4 mb-2">
            <label for="PORCENT2">PORCENT2</label>
            <input type="text" class="form-control" id="PORCENT2" name="PORCENT2">
          </div>
          <div class="col-4 mb-2">
            <label for="PORCENT3">PORCENT3</label>
            <input type="text" class="form-control" id="PORCENT3" name="PORCENT3">
          </div>

        </div>
        <div class="d-flex justify-content-end">
          <button class="btn btn-primary mt-3 px">
            Agregar
          </button>
        </div>

      </form>
    </div>
  </div>
</div>