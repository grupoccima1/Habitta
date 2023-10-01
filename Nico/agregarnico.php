<?php include "../header.php"; ?>
<div class="container">
  <div class= "card mt-4">
    <div class= "card-body">
        <h2 class="mb-3 fs-4 text-center"> Agregar nuevo registro  </h2>
        <form action="./insertarnico.php" method="post">
          <div class="row">
            <div class="col-4 mb-2">
              <label for="OBSERVACION">OBSERVACION</label>
                <input type="text" class="form-control" id="OBSERVACION" name="OBSERVACION">
            </div>  
            <div class="col-4 mb-2">
              <label for="LLAVE">LLAVE</label>
              <input type="text" class="form-control" id="LLAVE" name="LLAVE">
            </div>
            <div class="col-4 mb-2">
              <label for="RAZONSOCIAL">RAZON SOCIAL</label>
              <input type="text" class="form-control" id="RAZONSOCIAL" name="RAZONSOCIAL">
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
              <label for="RFC">RFC</label>
              <input type="text" class="form-control" id="RFC" name="RFC">
            </div>
            <div class="col-4 mb-2">
              <label for="USOCFDI">USO CFDI</label>
              <input type="text" class="form-control" id="USOCFDI" name="USOCFDI">
            </div>
            <div class="col-4 mb-2">
              <label for="ABONO">ABONO</label>
              <input type="text" class="form-control" id="ABONO" name="ABONO">
            </div>
            <div class="col-4 mb-2">
              <label for="CARGO">CARGO</label>
              <input type="text" class="form-control" id="CARGO" name="CARGO">
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
              <label for="CATEGORIA">CATEGORIA</label>
              <input type="text" class="form-control" id="CATEGORIA" name="CATEGORIA">
            </div>
            <div class="col-4 mb-2">
              <label for="METODODEPAGO">MEOTODO DE PAGO</label>
              <input type="text" class="form-control" id="METODODEPAGO" name="METODODEPAGO">
            </div>
            <div class="col-4 mb-2">
              <label for="SUBCATEGORIA">SUBCATEGORIA</label>
              <input type="text" class="form-control" id="SUBCATEGORIA" name="SUBCATEGORIA">
            </div>
            <div class="col-4 mb-2">
              <label for="FLUJO">FLUJO</label>
              <input type="text" class="form-control" id="FLUJO" name="FLUJO">
            </div>
            <div class="col-4 mb-2">
              <label for="ORIGEN">ORIGEN</label>
              <input type="text" class="form-control" id="ORIGEN" name="ORIGEN">
            </div>
            <div class="col-4 mb-2">
              <label for="CLIENTE">CLIENTE</label>
              <input type="text" class="form-control" id="CLIENTE" name="CLIENTE">
            </div>
            <div class="col-4 mb-2">
              <label for="CORREO">CORREO</label>
              <input type="text" class="form-control" id="CORREO" name="CORREO">
            </div>
            <div class="col-4 mb-2">
              <label for="TELEFONO">TELEFONO</label>
              <input type="text" class="form-control" id="TELEFONO" name="TELEFONO">
            </div>
          </div>
          <div class="d-flex justify-content-end">
            <button class="me-2 btn btn-primary mt-3 px-5">Agregar</button>
            <a href="../nico.php" class="btn btn-secondary mt-3 px-5">
              Cancelar
            </a>
          </div>      
        </form>
    </div>
  </div>
</div>