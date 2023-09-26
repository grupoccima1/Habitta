<?php 
    include "../header.php";
    include "../clases/Conexion.php";
    include "../billpocket/crudbillpocket.php";
    $crud = new crudbillpocket();
    $id = $_POST ['id'];
    $datos = $crud -> obtenerDocumentobillpocket($id);
    $idMongo = $datos -> _id;
?>
<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../bilpocket.php">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                    <h2 class="mb-3 fs-4 text-center"> Actualizar Registro</h2>
                    <form action="../billpocket/actualizar_Billpocket.php" method="POST">
                        <div class="row">
                            <input type="text" name="id" id="id" hidden value="<?php echo $idMongo ?>">
                            <div class="col-4 mb-2">
                                <label for="nombre_cliente">Nombre del cliente</label>
                                <input type="text" name="nombre_cliente" id="nombre_cliente" class="form-control" value="<?php echo $datos->NOMBRE_DE_CLIENTE ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="deposito_cliente">Deposito del cliente</label>
                                <input type="text" name="deposito_cliente" id="deposito_cliente" class="form-control" value="<?php echo $datos->DEPOSITO_DE_CLIENTE?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="comision">Comision</label>
                                <input type="text" name="comision" id="comision" class="form-control" value="<?php echo $datos->COMISION ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="deposito_banco">Deposito del Banco</label>
                                <input type="text" name="deposito_banco" id="deposito_banco" class="form-control" value="<?php echo $datos->DEPOSITO_EN_BANCO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="tipo_pago">Tipo de Pago</label>
                                <input type="text" name="tipo_pago" id="tipo_pago" class="form-control" value="<?php echo $datos->TIPO_DE_PAGO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="folio">Folio</label>
                                <input type="text" name="folio" id="id" class="form-control" value="<?php echo $datos->FOLIO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="tipo_tarjeta">Tipo de Tarjeta</label>
                                <input type="text" name="tipo_tarjeta" id="tipo_tarjeta" class="form-control" value="<?php echo $datos->TIPO_DE_TARJETA ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="tpva">TPVAFILIADA</label>
                                <input type="text" name="tpva" id="tpva" class="form-control" value="<?php echo $datos->TPVAFILIADA?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="fecha_deposito">Fecha de Deposito</label>
                                <input type="text" name="fecha_deposito" id="fecha_deposito" class="form-control" value="<?php echo $datos->FECHADE_DEPOSITO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="año">Año</label>
                                <input type="text" name="año" id="año" class="form-control" value="<?php echo $datos->AÑO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="banco">Banco</label>
                                <input type="text" name="banco" id="banco" class="form-control" value="<?php echo $datos->BANCO ?>">
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