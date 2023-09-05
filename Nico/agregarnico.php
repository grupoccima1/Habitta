<?php include "../header.php"; ?>
<div class="container">
<div class= "card mt-4">
    <div class= "card-body">
        <h2 class="mb-3 fs-4 text-center"> Agregar nuevo registro  </h2>
        <form action="./insertarnico.php" method="post">
            <label for="OBSERVACION">OBSERVACION</label>
            <input type="text" class="form-control" id="OBSERVACION" name="OBSERVACION">
            <label for="LLAVE">LLAVE</label>
            <input type="text" class="form-control" id="LLAVE" name="LLAVE">
            <label for="RAZONSOCIAL">RAZON SOCIAL</label>
            <input type="text" class="form-control" id="RAZONSOCIAL" name="RAZONSOCIAL">
            <label for="FECHA">FECHA</label>
            <input type="text" class="form-control" id="FECHA" name="FECHA">
            <label for="BENEFICIARIO">BENEFICIARIO</label>
            <input type="text" class="form-control" id="BENEFICIARIO" name="BENEFICIARIO">
            <label for="RFC">RFC</label>
            <input type="text" class="form-control" id="RFC" name="RFC">
            <label for="USOCFDI">USO CFDI</label>
            <input type="text" class="form-control" id="USOCFDI" name="USOCFDI">
            <label for="ABONO">ABONO</label>
            <input type="text" class="form-control" id="ABONO" name="ABONO">
            <label for="CARGO">CARGO</label>
            <input type="text" class="form-control" id="CARGO" name="CARGO">
            <label for="FACTURA">FACTURA</label>
            <input type="text" class="form-control" id="FACTURA" name="FACTURA">
            <label for="REAL">REAL</label>
            <input type="text" class="form-control" id="REAL" name="REAL">
            <label for="MOTIVO">MOTIVO</label>
            <input type="text" class="form-control" id="MOTIVO" name="MOTIVO">
            <label for="CATEGORIA">CATEGORIA</label>
            <input type="text" class="form-control" id="CATEGORIA" name="CATEGORIA">
            <label for="METODODEPAGO">MEOTODO DE PAGO</label>
            <input type="text" class="form-control" id="METODODEPAGO" name="METODODEPAGO">
            <label for="SUBCATEGORIA">SUBCATEGORIA</label>
            <input type="text" class="form-control" id="SUBCATEGORIA" name="SUBCATEGORIA">
            <label for="FLUJO">FLUJO</label>
            <input type="text" class="form-control" id="FLUJO" name="FLUJO">
            <label for="ORIGEN">ORIGEN</label>
            <input type="text" class="form-control" id="ORIGEN" name="ORIGEN">
            <label for="CLIENTE">CLIENTE</label>
            <input type="text" class="form-control" id="CLIENTE" name="CLIENTE">
            <label for="CORREO">CORREO</label>
            <input type="text" class="form-control" id="CORREO" name="CORREO">
            <label for="TELEFONO">TELEFONO</label>
            <input type="text" class="form-control" id="TELEFONO" name="TELEFONO">
            <div class="d-flex justify-content-end">
              <button class="btn btn-primary mt-3 px-5">Agregar</button>
            </div>
                      
        </form>
    </div>
  </div>
</div>