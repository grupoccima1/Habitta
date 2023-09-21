<?php 
    include "../clases/Conexion.php";
    include "./../Listado/crudlistado.php";
    include "../header.php";
    $crudlistado = new crudlistado();
    $id = $_POST ['id'];
    $datos = $crudlistado -> obtenerDocumentoListado($id);
    $idMongo = $datos -> _id;
?>


<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../listado.php">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                    <h2 class="mb-3 fs-4 text-center"> Actualizar Registro</h2>
                    <form action="./actualizar_Listado.php" method="POST">
                        <div class="row">
                            <input type="text" name="id" id="id" hidden value="<?php echo $idMongo ?>">
                            <div class="col-4 mb-2">
                                <label for="LLAVE"> LLAVE </label>
                                <input type="text" name="LLAVE" id="LLAVE" class="form-control" value="<?php echo $datos->LLAVE ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="MES">MES</label>
                                <input type="text" name="MES" id="MES" class="form-control" value="<?php echo $datos->MES?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="AÑO">AÑO</label>
                                <input type="text" name="AÑO" id="AÑO" class="form-control" value="<?php echo $datos->AÑO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="MONTO">MONTO</label>
                                <input type="text" name="MONTO" id="MONTO" class="form-control" value="<?php echo $datos->MONTO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="LLAVE_2">LLAVE_2</label>
                                <input type="text" name="LLAVE_2" id="LLAVE_2" class="form-control" value="<?php echo $datos->LLAVE_2 ?>">
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