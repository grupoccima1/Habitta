<?php include "../header.php"; ?>
<div class="container">
<div class= "card mt-4">
    <div class= "card-body">
        <h2 class="mb-3 fs-4 text-center"> Agregar nuevo registro  </h2>
        <form action="./insertartableroderesultados.php" method="post">
          <div class="row">
            <div class="col-4 mb-2">
              <label for="GIRO">GIRO</label>
              <input type="text" class="form-control" id="GIRO" name="GIRO">
            </div>  
            <div class="col-4 mb-2">
              <label for="U_TOTALES">U TOTALES</label>
              <input type="text" class="form-control" id="U_TOTALES" name="U_TOTALES">
            </div>
            <div class="col-4 mb-2">
              <label for="U_APARTADAS">U APARTADAS</label>
              <input type="text" class="form-control" id="U_APARTADAS" name="U_APARTADAS">
            </div>
            <div class="col-4 mb-2">
              <label for="U_PORVENDER">U PROVENDER</label>
              <input type="text" class="form-control" id="U_PORVENDER" name="U_PORVENDER">
            </div>
            <div class="col-4 mb-2">
              <label for="U_VENDIDAS">U VENDIDAS</label>
              <input type="text" class="form-control" id="U_VENDIDAS" name="U_VENDIDAS">
            </div>
            <div class="col-4 mb-2">
              <label for="FOLIO">FOLIO</label>
              <input type="text" class="form-control" id="FOLIO" name="FOLIO">
            </div>
            <div class="col-4 mb-2">
              <label for="U_POR_CERRAR">U POR CERRAR</label>
              <input type="text" class="form-control" id="U_POR_CERRAR" name="U_POR_CERRAR">
            </div>
            <div class="col-4 mb-2">
              <label for="U_POR_RECUPERAR">U POR RECUPERAR</label>
              <input type="text" class="form-control" id="U_POR_RECUPERAR" name="U_POR_RECUPERAR">
            </div>
            <div class="col-4 mb-2">
              <label for="RECUPERADOS">RECUPERADOS</label>
              <input type="text" class="form-control" id="RECUPERADOS" name="RECUPERADOS">
            </div>
            <div class="col-4 mb-2">
              <label for="DESARROLLO">DESARROLLO</label>
              <input type="text" class="form-control" id="DESARROLLO" name="DESARROLLO">
            </div>
            <div class="col-4 mb-2">
              <label for="U_POR_VENDER">U POR VENDER</label>
              <input type="text" class="form-control" id="U_POR_VENDER" name="U_POR_VENDER">
            </div>
            <div class="col-4 mb-2">
              <label for="ESTATUS">ESTATUS</label>
              <input type="text" class="form-control" id="ESTATUS" name="ESTATUS">
            </div>
            <div class="col-4 mb-2">
              <label for="TOTAL_VENCIDOS">TOTAL VENCIDOS</label>
              <input type="text" class="form-control" id="TOTAL_VENCIDOS" name="TOTAL_VENCIDOS">
            </div>
          </div>
            <div class="d-flex justify-content-end">
              <button class="btn btn-primary mt-3 px-5">Agregar</button>
            </div>     
        </form>
    </div>
    </div>
</div>
