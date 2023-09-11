<?php
    include "../header.php";
    include "../clases/Conexion.php";
    include "../clases/crud.php";

    $crud = new crud();
    $id = $_POST ['id'];
    $datos = $crud -> obtenerDocumentoComisionesInternas($id);
    $idMongo = $datos -> _id;
?>


<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../Hab_Formato_Comisiones_Internas.php">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                
                    <h2 class="mb-3 fs-4 text-center">Actualizar Registro</h2>
                    <form action="../procesos/actualizar_ComisionesInternas.php" method="POST">
                        <div class="row">
                            <input type="text" name="id" id="id" hidden value="<?php echo $idMongo ?>">
                            <div class="col-4 mb-2">
                                <label for="llave">Llave</label>
                                <input type="text" name="llave" id="llave" class="form-control" value="<?php echo $datos->LLAVE ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="nombre_cliente">Nombre del Cliente</label>
                                <input type="text" name="nombre_cliente" id="nombre_cliente" class="form-control" value="<?php echo $datos->NOMBRE_DEL_CLIENTE ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="fecha_apartado">Fecha Apartado</label>
                                <input type="text" name="fecha_apartado" id="fecha_apartado" class="form-control" value="<?php echo $datos->FECHA_DE_APARTADO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="fecha_entrega">Fecha Entrega de Contrato</label>
                                <input type="text" name="fecha_entrega" id="fecha_entrega" class="form-control" value="<?php echo $datos->FECHA_ENTREGA_DE_CONTRATO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="importe_comision">Importe a Comisionar</label>
                                <input type="text" name="importe_comision" id="importe_comision" class="form-control" value="<?php echo $datos->IMPORTE_A_COMISIONAR ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="pcomision">% Comision</label>
                                <input type="text" name="pcomision" id="pcomision" class="form-control" value="<?php echo $datos->PCOMISION ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="importe">Importe</label>
                                <input type="text" name="importe" id="importe" class="form-control" value="<?php echo $datos->IMPORTE ?>">
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