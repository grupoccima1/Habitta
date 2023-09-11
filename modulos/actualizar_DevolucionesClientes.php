<?php
    include "../header.php";
    include "../clases/Conexion.php";
    include "../clases/crud.php";

    $crud = new crud();
    $id = $_POST ['id'];
    $datos = $crud -> obtenerDocumentoDevolucionesClientes($id);
    $idMongo = $datos -> _id;
?>


<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-body">
                <div class="col">
                    <a href="../Devoluciones_clientes.php">
                        Regresar
                    </a>
                    <h2>Actualizar Registro</h2>
                    <form action="../procesos/actualizar_DevolucionesClientes.php" method="POST">
                        <input type="text" name="id" id="id" hidden value="<?php echo $idMongo ?>">
                        <label for="no">No.</label>
                        <input type="text" name="no" id="no" class="form-control" value="<?php echo $datos->No ?>">
                        <label for="fecha">Fecha</label>
                        <input type="text" name="fecha" id="fecha" class="form-control" value="<?php echo $datos->FECHA ?>">
                        <label for="condominio">Condominio</label>
                        <input type="text" name="condominio" id="condominio" class="form-control" value="<?php echo $datos->CONDOMINIO ?>">
                        <label for="llave">Llave</label>
                        <input type="text" name="llave" id="llave" class="form-control" value="<?php echo $datos->LLAVE ?>">
                        <label for="cliente">Cliente</label>
                        <input type="text" name="cliente" id="cliente" class="form-control" value="<?php echo $datos->CLIENTE ?>">
                        <label for="monto">Monto</label>
                        <input type="text" name="monto" id="monto" class="form-control" value="<?php echo $datos->MONTO ?>">
                        <label for="banco">Banco</label>
                        <input type="text" name="banco" id="banco" class="form-control" value="<?php echo $datos->BANCO ?>">
                        <label for="motivo">Motivo</label>
                        <input type="text" name="motivo" id="motivo" class="form-control" value="<?php echo $datos->MOTIVO?>">
                        <label for="monto_operacion">Monto Operación</label>
                        <input type="text" name="monto_operacion" id="monto_operacion" class="form-control" value="<?php echo $datos->MONTO_DE_LA_OPERACIÓN ?>">
                        <label for="desarrollo">Desarrollo</label>
                        <input type="text" name="desarrollo" id="desarrollo" class="form-control" value="<?php echo $datos->DESARROLLO ?>">
                        <button class="btn btn-primary mt-3">
                            <i class="fa-solid fa-floppy-disk"></i>Actualizar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "../script.php"; ?>