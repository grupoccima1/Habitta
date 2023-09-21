<?php 
    include "../clases/Conexion.php";
    include "./../Cobranza/crudcobranza.php";
    include "../header.php";
    $crudcobranza = new crudcobranza();
    $id = $_POST ['id'];
    $datos = $crudcobranza -> obtenerDocumentoCobranza($id);
    $idMongo = $datos -> _id;
?>
<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../cobranza.php">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                    <h2 class="mb-3 fs-4 text-center"> Actualizar Registro</h2>
                    <form action="./actualizar_Cobranza.php" method="POST">
                        <div class="row">
                            <input type="text" name="id" id="id" hidden value="<?php echo $idMongo ?>">
                            <div class="col-4 mb-2">
                                <label for="FECHA"> FECHA </label>
                                <input type="text" name="FECHA" id="FECHA" class="form-control" value="<?php echo $datos->FECHA ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="MOTIVO">MOTIVO</label>
                                <input type="text" name="MOTIVO" id="MOTIVO" class="form-control" value="<?php echo $datos->MOTIVO?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="FLUJO">FLUJO</label>
                                <input type="text" name="FLUJO" id="FLUJO" class="form-control" value="<?php echo $datos->FLUJO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="FECHA_1">FECHA_1</label>
                                <input type="text" name="FECHA_1" id="FECHA_1" class="form-control" value="<?php echo $datos->FECHA_1 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="DESCRIPCION">DESCRIPCION</label>
                                <input type="text" name="DESCRIPCION" id="DESCRIPCION" class="form-control" value="<?php echo $datos->DESCRIPCION ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="APAGAR">APAGAR</label>
                                <input type="text" name="APAGAR" id="id" class="form-control" value="<?php echo $datos->APAGAR ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="PAGO">PAGO</label>
                                <input type="text" name="PAGO" id="PAGO" class="form-control" value="<?php echo $datos->PAGO ?>">
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