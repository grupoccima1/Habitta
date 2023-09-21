<?php 
    include "../clases/Conexion.php";
    include "./../Estados/crudestados.php";
    include "../header.php";
    $crudestados = new crudestados();
    $id = $_POST ['id'];
    $datos = $crudestados -> obtenerDocumentoEstados($id);
    $idMongo = $datos -> _id;
?>
<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../estados.php">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                    <h2 class="mb-3 fs-4 text-center"> Actualizar Registro</h2>
                    <form action="./actualizar_Estados.php" method="POST">
                        <div class="row">
                            <input type="text" name="id" id="id" hidden value="<?php echo $idMongo ?>">
                            <div class="col-4 mb-2">
                                <label for="SourceName"> SourceName </label>
                                <input type="text" name="SourceName" id="SourceName" class="form-control" value="<?php echo $datos->SourceName ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="PERIODO">PERIODO</label>
                                <input type="text" name="PERIODO" id="PERIODO" class="form-control" value="<?php echo $datos->PERIODO?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="FECHA">FECHA</label>
                                <input type="text" name="FECHA" id="FECHA" class="form-control" value="<?php echo $datos->FECHA ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="SALDOINICIAL">SALDOINICIAL</label>
                                <input type="text" name="SALDOINICIAL" id="SALDOINICIAL" class="form-control" value="<?php echo $datos->SALDOINICIAL ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="MENSUALIDAD">MENSUALIDAD</label>
                                <input type="text" name="MENSUALIDAD" id="MENSUALIDAD" class="form-control" value="<?php echo $datos->MENSUALIDAD ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="PAGADO">PAGADO</label>
                                <input type="text" name="PAGADO" id="id" class="form-control" value="<?php echo $datos->PAGADO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="INTERESFINANCIAMIENTO">INTERESFINANCIAMIENTO</label>
                                <input type="text" name="INTERESFINANCIAMIENTO" id="INTERESFINANCIAMIENTO" class="form-control" value="<?php echo $datos->INTERESFINANCIAMIENTO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="ABONO_CAPITAL">ABONO_CAPITAL</label>
                                <input type="text" name="ABONO_CAPITAL" id="ABONO_CAPITAL" class="form-control" value="<?php echo $datos->ABONO_CAPITAL?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="SALDO_FINAL">SALDO_FINAL</label>
                                <input type="text" name="SALDO_FINAL" id="SALDO_FINAL" class="form-control" value="<?php echo $datos->SALDO_FINAL ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="INT_GEN">INT_GEN</label>
                                <input type="text" name="INT_GEN" id="INT_GEN" class="form-control" value="<?php echo $datos->INT_GEN ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="INT_INT">INT_INT</label>
                                <input type="text" name="INT_INT" id="INT_INT" class="form-control" value="<?php echo $datos->INT_INT ?>">
                            </div>

                            <div class="col-4 mb-2">
                                <label for="INT_ACUM_MORA">INT_ACUM_MORA</label>
                                <input type="text" name="INT_ACUM_MORA" id="INT_ACUM_MORA" class="form-control" value="<?php echo $datos->INT_ACUM_MORA ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="INT_NEG">INT_NEG</label>
                                <input type="text" name="INT_NEG" id="INT_NEG" class="form-control" value="<?php echo $datos->INT_NEG ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="ESTATUS">ESTATUS</label>
                                <input type="text" name="ESTATUS" id="ESTATUS" class="form-control" value="<?php echo $datos->ESTATUS ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="OBSERVACION">OBSERVACION</label>
                                <input type="text" name="OBSERVACION" id="OBSERVACION" class="form-control" value="<?php echo $datos->OBSERVACION ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="DEBE_INTERES">DEBE_INTERES</label>
                                <input type="text" name="DEBE_INTERES" id="DEBE_INTERES" class="form-control" value="<?php echo $datos->DEBE_INTERES ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="FECHA_PAGO">FECHA_PAGO</label>
                                <input type="text" name="FECHA_PAGO" id="FECHA_PAGO" class="form-control" value="<?php echo $datos->FECHA_PAGO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="INDICADOR_FECHA">INDICADOR_FECHA</label>
                                <input type="text" name="INDICADOR_FECHA" id="INDICADOR_FECHA" class="form-control" value="<?php echo $datos->INDICADOR_FECHA ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="PORCENT_INT">PORCENT_INT</label>
                                <input type="text" name="PORCENT_INT" id="PORCENT_INT" class="form-control" value="<?php echo $datos->PORCENT_INT ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="LLAVE2">LLAVE2</label>
                                <input type="text" name="LLAVE2" id="LLAVE2" class="form-control" value="<?php echo $datos->LLAVE2 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="MENS_ADEU">MENS_ADEU</label>
                                <input type="text" name="MENS_ADEU" id="MENS_ADEU" class="form-control" value="<?php echo $datos->MENS_ADEU ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="CALC_SOBRE">CALC_SOBRE</label>
                                <input type="text" name="CALC_SOBRE" id="CALC_SOBRE" class="form-control" value="<?php echo $datos->CALC_SOBRE ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="MONTO_INT_MOR">MONTO_INT_MOR</label>
                                <input type="text" name="MONTO_INT_MOR" id="MONTO_INT_MOR" class="form-control" value="<?php echo $datos->MONTO_INT_MOR ?>">
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