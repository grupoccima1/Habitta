<?php 
    include "../clases/Conexion.php";
    include "../clases/crud.php";

    $crud = new crud();
    $id = $_POST ['id'];
    $datos = $crud -> obtenerDocumentoBillpocket($id);
    $idMongo = $datos -> _id;
?>


<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-body">
                <div class="col">
                    <a href="../bilpocket.php">
                        Regresar
                    </a>
                    <h2>Actualizar Registro</h2>
                    <form action="../procesos/actualizar_Billpocket.php" method="POST">
                        <input type="text" name="id" id="id" hidden value="<?php echo $idMongo ?>">
                        <label for="nombre_cliente">Nombre del cliente</label>
                        <input type="text" name="nombre_cliente" id="nombre_cliente" class="form-control" value="<?php echo $datos->NOMBRE_DE_CLIENTE ?>">
                        <label for="deposito_cliente">Deposito del cliente</label>
                        <input type="text" name="deposito_cliente" id="deposito_cliente" class="form-control" value="<?php echo $datos->DEPOSITO_DE_CLIENTE?>">
                        <label for="comision">Comision</label>
                        <input type="text" name="comision" id="comision" class="form-control" value="<?php echo $datos->COMISION ?>">
                        <label for="deposito_banco">Deposito del Banco</label>
                        <input type="text" name="deposito_banco" id="deposito_banco" class="form-control" value="<?php echo $datos->DEPOSITO_EN_BANCO ?>">
                        <label for="tipo_pago">Tipo de Pago</label>
                        <input type="text" name="tipo_pago" id="tipo_pago" class="form-control" value="<?php echo $datos->TIPO_DE_PAGO ?>">
                        <label for="folio">Folio</label>
                        <input type="text" name="folio" id="id" class="form-control" value="<?php echo $datos->FOLIO ?>">
                        <label for="tipo_tarjeta">Tipo de Tarjeta</label>
                        <input type="text" name="tipo_tarjeta" id="tipo_tarjeta" class="form-control" value="<?php echo $datos->TIPO_DE_TARJETA ?>">
                        <label for="tpva">TPVAFILIADA</label>
                        <input type="text" name="tpva" id="tpva" class="form-control" value="<?php echo $datos->TPVAFILIADA?>">
                        <label for="fecha_deposito">Fecha de Deposito</label>
                        <input type="text" name="fecha_deposito" id="fecha_deposito" class="form-control" value="<?php echo $datos->FECHADE_DEPOSITO ?>">
                        <label for="año">Año</label>
                        <input type="text" name="año" id="año" class="form-control" value="<?php echo $datos->AÑO ?>">
                        <label for="banco">Banco</label>
                        <input type="text" name="banco" id="banco" class="form-control" value="<?php echo $datos->BANCO ?>">
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