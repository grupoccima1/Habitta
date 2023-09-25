<?php 
    include "../clases/Conexion.php";
    include "../clases/crud.php";
    $crud = new crud();
    $id = $_POST ['id'];
    $datos = $crud -> obtenerDocumentoEdosCuenta($id);
    $idMongo = $datos -> _id;
?>
<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../estadodecuenta.php">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                <h2 class="mb-3 fs-4 text-center">Actualizar Registro</h2>
                <form action="../procesos/actualizar_EdosCuenta.php" method="POST">
                    <div class="row">
                        <input type="text" name="id" id="id" hidden value="<?php echo $idMongo ?>">
                        <div class="col-4 mb-2">
                            <label for="concepto">CONCEPTO</label>
                            <input type="text" name="concepto" id="concepto" class="form-control"
                                value="<?php echo $datos->CONCEPTO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="pto_blanco_cim">PORTO BLANCO CIMATARIO</label>
                            <input type="text" name="pto_blanco_cim" id="pto_blanco_cim" class="form-control"
                                value="<?php echo $datos->PORTTO_BLANCO_CIM ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="lomas_pto_blanco">LOMAS DE PORTO BLANCO</label>
                            <input type="text" name="lomas_pto_blanco" id="lomas_pto_blanco" class="form-control"
                                value="<?php echo $datos->LOMAS_DE_PORTTO_BLANCO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="pto_blanco_bernal">PORTO BLANCO BERNAL</label>
                            <input type="text" name="pto_blanco_bernal" id="pto_blanco_bernal" class="form-control"
                                value="<?php echo $datos->PORTTO_BLANCO_BERNAL ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="veredas_lira">VEREDAS DE LIRA</label>
                            <input type="text" name="veredas_lira" id="veredas_lira" class="form-control"
                                value="<?php echo $datos->VEREDAS_DE_LIRA ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="pto_blanco_slp">PORTO BLANCO SLP</label>
                            <input type="text" name="pto_blanco_slp" id="pto_blanco_slp" class="form-control"
                                value="<?php echo $datos->PORTTO_BLANCO_SLP ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="general">Año</label>
                            <input type="text" name="general" id="general" class="form-control"
                                value="<?php echo $datos->GENERAL ?>">
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3">
                        <i class="fa-solid fa-floppy-disk"></i>Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "../script.php"; ?>