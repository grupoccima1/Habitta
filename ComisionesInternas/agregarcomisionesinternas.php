<?php include "../header.php"; ?>
<div class="container">
  <div class= "card mt-4">
    <div class= "card-body">
        <h2 class="mb-3 fs-4 text-center"> Agregar nuevo registro  </h2>
        <form action="./insertarcomisionesinternas.php" method="post">
          <div class="row">
            <div class="col-4 mb-2">
              <label for="LLAVE">LLAVE</label>
              <input type="text" class="form-control" id="LLAVE" name="LLAVE">
            </div>  
            <div class="col-4 mb-2">
              <label for="NOMBRE_DEL_CLIENTE">NOMBRE DEL CLIENTE</label>
              <input type="text" class="form-control" id="NOMBRE_DEL_CLIENTE" name="NOMBRE_DEL_CLIENTE">
            </div>
            <div class="col-4 mb-2">
              <label for="FECHA_DE_APARTADO">FECHA DE APARTADO</label>
              <input type="text" class="form-control" id="FECHA_DE_APARTADO" name="FECHA_DE_APARTADO">
            </div>
            <div class="col-4 mb-2">
              <label for="FECHA_ENTREGA_DE_CONTRATO">FECHA ENTREGA DE CONTRATO</label>
              <input type="text" class="form-control" id="FECHA_ENTREGA_DE_CONTRATO" name="FECHA_ENTREGA_DE_CONTRATO">
            </div>
            <div class="col-4 mb-2">
              <label for="IMPORTE_A_COMISIONAR">IMPORTE A COMISIONAR</label>
              <input type="text" class="form-control" id="IMPORTE_A_COMISIONAR" name="IMPORTE_A_COMISIONAR">
            </div>
            <div class="col-4 mb-2">
              <label for="PCOMISION">PCOMISION</label>
              <input type="text" class="form-control" id="PCOMISION" name="PCOMISION">
            </div>
            <div class="col-4 mb-2">
              <label for="IMPORTE">IMPORTE</label>
              <input type="text" class="form-control" id="IMPORTE" name="IMPORTE">
            </div>
          </div>
          <div class="d-flex justify-content-end">
            <button class="me-2 btn btn-primary mt-3 px-5"> Agregar </button>                      
            <a href="../Hab_Formato_Comisiones_Internas.php" class="btn btn-secondary mt-3 px-5">
              Cancelar
            </a>
          </div>
        </form>
    </div>
  </div>
</div>