<?php include "../header.php"; ?>
<div class="container">
<div class= "card mt-4">
    <div class= "card-body">
        <h2> Agregar nuevo registro  </h2>
        <form action="./insertarlistado.php" method="post">
          <div class="row">
            <div class="col-4 mb-2">
              <label for="LLAVE">LLAVE</label>
              <input type="text" class="form-control" id="LLAVE" name="LLAVE">  
            </div>    
            <div class="col-4 mb-2">
              <label for="MES">MES</label>
              <input type="text" class="form-control" id="MES" name="MES">
            </div>
            <div class="col-4 mb-2">
              <label for="AÑO">AÑO</label>
              <input type="text" class="form-control" id="AÑO" name="AÑO">
            </div>
            <div class="col-4 mb-2">
              <label for="MONTO">MONTO</label>
              <input type="text" class="form-control" id="MONTO" name="MONTO">
            </div>
            <div class="col-4 mb-2">
              <label for="LLAVE_2">LLAVE_2</label>
              <input type="text" class="form-control" id="LLAVE_2" name="LLAVE_2">
            </div>
          </div>  
          <div class="d-flex justify-content-end">
            <button class="bt btn-primary mt-3 px-5">
              Agregar
            </button>
          </div>  
                      
        </form>
    </div>
    </div>
</div>
