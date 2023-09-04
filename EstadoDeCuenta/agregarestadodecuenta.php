<?php include "../header.php"; ?>
<div class="container">
<div class= "card mt-4">
    <div class= "card-body">
        <h2 class="mb-3 fs-4 text-center"> Agregar nuevo registro  </h2>
        <form action="./insertarestadodecuenta.php" method="post">
          <div class="row">
            <div class="col-4 mb-2">
              <label for="CONCEPTO">CONCEPTO</label>
              <input type="text" class="form-control" id="CONCEPTO" name="CONCEPTO">
            </div> 
           <div class="col-4 mb-2">
             <label for="PORTTO_BLANCO_CIM">PORTO BLANCO CIM</label>
             <input type="text" class="form-control" id="PORTTO_BLANCO_CIM" name="PORTTO_BLANCO_CIM">
           </div>
           <div class="col-4 mb-2">
             <label for="LOMAS_DE_PORTTO_BLANCO">LOMAS DE PORTO BLANCO</label>
             <input type="text" class="form-control" id="LOMAS_DE_PORTTO_BLANCO" name="LOMAS_DE_PORTTO_BLANCO">
           </div>
           <div class="col-4 mb-2">
             <label for="PORTTO_BLANCO_BERNAL">PORTTO BLANCO BERNAL</label>
             <input type="text" class="form-control" id="PORTTO_BLANCO_BERNAL" name="PORTTO_BLANCO_BERNAL">
           </div>
           <div class="col-4 mb-2">
             <label for="VEREDAS_DE_LIRA">VEREDAS DE LIRA</label>
             <input type="text" class="form-control" id="VEREDAS_DE_LIRA" name="VEREDAS_DE_LIRA">
           </div>
           <div class="col-4 mb-2">
             <label for="PORTTO_BLANCO_SLP">PORTTO BLANCO SLP</label>
             <input type="text" class="form-control" id="PORTTO_BLANCO_SLP" name="PORTTO_BLANCO_SLP">
           </div>
           <div class="col-4 mb-2">
             <label for="GENERAL">GENERAL</label>
             <input type="text" class="form-control" id="GENERAL" name="GENERAL">
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