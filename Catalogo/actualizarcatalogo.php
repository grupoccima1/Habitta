<?php 
    include "../clases/Conexion.php";
    include "./../Catalogo/crudcatalogo.php";
    include "../header.php";
    $crudcatalogo = new crudcatalogo();
    $id = $_POST ['id'];
    $datos = $crudcatalogo -> obtenerDocumentoCatalogo($id);
    $idMongo = $datos -> _id;
?>


<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../catalogo.php">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                    <h2 class="mb-3 fs-4 text-center"> Actualizar Registro</h2>
                    <form action="./actualizar_Catalogo.php" method="POST">
                        <div class="row">
                            <input type="text" name="id" id="id" hidden value="<?php echo $idMongo ?>">
                            <div class="col-4 mb-2">
                                <label for="LLAVE"> LLAVE </label>
                                <input type="text" name="LLAVE" id="LLAVE" class="form-control" value="<?php echo $datos->LLAVE ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="PORCENT1">PORCENT1</label>
                                <input type="text" name="PORCENT1" id="PORCENT1" class="form-control" value="<?php echo $datos->PORCENT1?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="PORCENT2">PORCENT2</label>
                                <input type="text" name="PORCENT2" id="PORCENT2" class="form-control" value="<?php echo $datos->PORCENT2 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="PORCENT3">PORCENT3</label>
                                <input type="text" name="PORCENT3" id="PORCENT3" class="form-control" value="<?php echo $datos->PORCENT3 ?>">
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