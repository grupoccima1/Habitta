<?php 
    include "../clases/Conexion.php";
    include "./../HSBCHABITTA/crudhsbchabitta.php";
    include "../header.php";
    $crudhsbchabitta = new crudhsbchabitta();
    $id = $_POST ['id'];
    $datos = $crudhsbchabitta -> obtenerDocumentoHSBCHABITTA($id);
    $idMongo = $datos -> _id;
?>
<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../hsbch.php">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                <h2 class="mb-3 fs-4 text-center"> Actualizar Registro</h2>
                <form action="./actualizar_HSBCHABITTA.php" method="POST">
                    <div class="row">
                        <input type="text" name="id" id="id" hidden value="<?php echo $idMongo ?>">
                        <div class="col-4 mb-2">
                            <label for="SEMANA"> SEMANA </label>
                            <input type="text" name="SEMANA" id="SEMANA" class="form-control"
                                value="<?php echo $datos->SEMANA ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="FECHA">FECHA</label>
                            <input type="text" name="FECHA" id="FECHA" class="form-control"
                                value="<?php echo $datos->FECHA?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="BENEFICIARIO">BENEFICIARIO</label>
                            <input type="text" name="BENEFICIARIO" id="BENEFICIARIO" class="form-control"
                                value="<?php echo $datos->BENEFICIARIO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="INGRESO">INGRESO</label>
                            <input type="text" name="INGRESO" id="INGRESO" class="form-control"
                                value="<?php echo $datos->INGRESO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="EGRESO">EGRESO</label>
                            <input type="text" name="EGRESO" id="EGRESO" class="form-control"
                                value="<?php echo $datos->EGRESO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="SALDO">SALDO</label>
                            <input type="text" name="SALDO" id="id" class="form-control"
                                value="<?php echo $datos->SALDO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="FACTURA">FACTURA</label>
                            <input type="text" name="FACTURA" id="FACTURA" class="form-control"
                                value="<?php echo $datos->FACTURA ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="MOTIVO">MOTIVO</label>
                            <input type="text" name="MOTIVO" id="MOTIVO" class="form-control"
                                value="<?php echo $datos->MOTIVO?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="MES">MES</label>
                            <input type="text" name="MES" id="MES" class="form-control"
                                value="<?php echo $datos->MES ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="DESARROLLO">DESARROLLO</label>
                            <input type="text" name="DESARROLLO" id="DESARROLLO" class="form-control"
                                value="<?php echo $datos->DESARROLLO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="LOTE">LOTE</label>
                            <input type="text" name="LOTE" id="LOTE" class="form-control"
                                value="<?php echo $datos->LOTE ?>">
                        </div>

                        <div class="col-4 mb-2">
                            <label for="CONDOMINIO">CONDOMINIO</label>
                            <input type="text" name="CONDOMINIO" id="CONDOMINIO" class="form-control"
                                value="<?php echo $datos->CONDOMINIO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="CLUSTER">CLUSTER</label>
                            <input type="text" name="CLUSTER" id="CLUSTER" class="form-control"
                                value="<?php echo $datos->CLUSTER ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="OBRA">OBRA</label>
                            <input type="text" name="OBRA" id="OBRA" class="form-control"
                                value="<?php echo $datos->OBRA ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="CATEGORIA">CATEGORIA</label>
                            <input type="text" name="CATEGORIA" id="CATEGORIA" class="form-control"
                                value="<?php echo $datos->CATEGORIA ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="SUBCATEGORIA">SUBCATEGORIA</label>
                            <input type="text" name="SUBCATEGORIA" id="SUBCATEGORIA" class="form-control"
                                value="<?php echo $datos->SUBCATEGORIA ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="UNIDADDENEGOCIO">UNIDADDENEGOCIO</label>
                            <input type="text" name="UNIDADDENEGOCIO" id="UNIDADDENEGOCIO" class="form-control"
                                value="<?php echo $datos->UNIDADDENEGOCIO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="FLUJO">FLUJO</label>
                            <input type="text" name="FLUJO" id="FLUJO" class="form-control"
                                value="<?php echo $datos->FLUJO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="LLAVE">LLAVE</label>
                            <input type="text" name="LLAVE" id="LLAVE" class="form-control"
                                value="<?php echo $datos->LLAVE ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="FECHACORRECTA">FECHACORRECTA</label>
                            <input type="text" name="FECHACORRECTA" id="FECHACORRECTA" class="form-control"
                                value="<?php echo $datos->FECHACORRECTA ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="LLAVEEDOSDECUENTA">LLAVEEDOSDECUENTA</label>
                            <input type="text" name="LLAVEEDOSDECUENTA" id="LLAVEEDOSDECUENTA" class="form-control"
                                value="<?php echo $datos->LLAVEEDOSDECUENTA ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="CLAVE">CLAVE</label>
                            <input type="text" name="CLAVE" id="CLAVE" class="form-control"
                                value="<?php echo $datos->CLAVE ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="METODODEPAGO">METODODEPAGO</label>
                            <input type="text" name="METODODEPAGO" id="METODODEPAGO" class="form-control"
                                value="<?php echo $datos->METODODEPAGO ?>">
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