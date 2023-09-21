<?php 
    include "../header.php";
    include "../clases/Conexion.php";
    include "../clases/crud.php";
    $crud = new Crud();
    $id = $_POST['id'];
    $datos = $crud -> obtenerDocumentoLiberados($id);
    $idMongo = $datos -> _id;
?>

<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../liberados.php" class="btn btn-outline-info">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                <h2 class="mb-3 fs-4 text-center">Actualizar Registro</h2>
                <form action="../procesos/actualizar_Liberados.php" method="POST">
                    <div class="row">
                        <input type="text" name="id" id="id" hidden value="<?php echo $idMongo ?>">
                        <div class="col-4 mb-2">
                            <label for="llave">Llave </label>
                            <input type="text" name="llave" id="llave" class="form-control" value="<?php echo $datos->LLAVE ?>" >
                        </div>
                        <div class="col-4 mb-2">
                            <label for="lote">Lote</label>
                            <input type="text" name="lote" id="lote" class="form-control" value="<?php echo $datos->LOTE ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="condominio">Condominio</label>
                            <input type="text" name="condominio" id="condominio" class="form-control" value="<?php echo $datos->CONDOMINIO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="cluster">Cluster</label>
                            <input type="text" name="cluster" id="cluster" class="form-control" value="<?php echo $datos->CLUSTER ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="desarrollo">Desarrollo</label>
                            <input type="text" name="desarrollo" id="desarrollo" class="form-control" value="<?php echo $datos->DESARROLLO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="apartado">Apartado Telegram</label>
                            <input type="text" name="apartado" id="apartado" class="form-control" value="<?php echo $datos->APARTADOTELEGRAM ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="cliente">Cliente</label>
                            <input type="text" name="cliente" id="cliente" class="form-control" value="<?php echo $datos->CLIENTE ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="rfc">RFC</label>
                            <input type="text" name="rfc" id="rfc" class="form-control" value="<?php echo $datos->RFC ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="idcif">ID CIF</label>
                            <input type="text" name="idcif" id="idcif" class="form-control" value="<?php echo $datos->IDCIF ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="uso_cfdi">Uso de CFDI</label>
                            <input type="text" name="uso_cfdi" id="uso_cfdi" class="form-control" value="<?php echo $datos->USO_CFDI ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="razon_social">Razon Social</label>
                            <input type="text" name="razon_social" id="razon_social" class="form-control" value="<?php echo $datos->RAZON_SOCIAL ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="dom_fiscal">Domicilio Fiscal</label>
                            <input type="text" name="dom_fiscal" id="dom_fiscal" class="form-control" value="<?php echo $datos->DOMICILIO_FISCAL ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="telefono">Telefono</label>
                            <input type="text" name="telefono" id="telefono" class="form-control" value="<?php echo $datos->TELEFONO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="correo">Correo</label>
                            <input type="text" name="correo" id="correo" class="form-control" value="<?php echo $datos->CORREO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="m2">Metros Cuadrados</label>
                            <input type="text" name="m2" id="m2" class="form-control" value="<?php echo $datos->M2 ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="total_operacion">Total Operacion</label>
                            <input type="text" name="total_operacion" id="total_operacion" class="form-control" value="<?php echo $datos->TOTAL_OPERACION ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="enganche">Enganche</label>
                            <input type="text" name="enganche" id="enganche" class="form-control" value="<?php echo $datos->ENGANCHE ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="financiamiento">Financiamiento </label>
                            <input type="text" name="financiamiento" id="financiamiento" class="form-control" value="<?php echo $datos->FINANCIAMIENTO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="firma">Firma de Contrato</label>
                            <input type="text" name="firma" id="firma" class="form-control" value="<?php echo $datos->FIRMA_CONTRATO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="fin_corrida">Fin de Corrida</label>
                            <input type="text" name="fin_corrida" id="fin_corrida" class="form-control" value="<?php echo $datos->FIN_CORRIDA ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="total_mens">Total Mensualidades</label>
                            <input type="text" name="total_mens" id="total_mens" class="form-control" value="<?php echo $datos->TOTAL_MENSUALIDADES ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="no_1er">No. 1er Mensualidad</label>
                            <input type="text" name="no_1er" id="no_1er" class="form-control" value="<?php echo $datos->NO_1ER_MENS ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="primer_mens">Primera Mensualidad</label>
                            <input type="text" name="primer_mens" id="primer_mens" class="form-control" value="<?php echo $datos->ER_MENSUALIDAD ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="no_2da">No. 2da Mensualidad</label>
                            <input type="text" name="no_2da" id="no_2da" class="form-control" value="<?php echo $datos->NO_2DA_MENS ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="segunda_mens">Segunda Mensualidad</label>
                            <input type="text" name="segunda_mens" id="segunda_mens" class="form-control" value="<?php echo $datos->DA_MENSUALIDAD ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="no_3er">No. 3er Mensualidad</label>
                            <input type="text" name="no_3er" id="no_3er" class="form-control" value="<?php echo $datos->NO_3ER_MENS ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="tercer_mens">Tercera Mensualidad</label>
                            <input type="text" name="tercer_mens" id="tercer_mens" class="form-control" value="<?php echo $datos->ER_MENSUALIDAD2 ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="tipo_interes">Tipo de Interes</label>
                            <input type="text" name="tipo_interes" id="tipo_interes" class="form-control" value="<?php echo $datos->TIPO_DE_INTERES ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="mens_entrega">Mens Entrega</label>
                            <input type="text" name="mens_entrega" id="mens_entrega" class="form-control" value="<?php echo $datos->MENS_ENTREGA ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="inicio_corrida">Inicio Corrida</label>
                            <input type="text" name="inicio_corrida" id="inicio_corrida" class="form-control" value="<?php echo $datos->INICIO_CORRIDA ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="primer_abono">Fecha de Primer Abono</label>
                            <input type="text" name="primer_abono" id="primer_abono" class="form-control" value="<?php echo $datos->FECHA_PRIMER_ABONO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="pagado">Pagado</label>
                            <input type="text" name="pagado" id="pagado" class="form-control" value="<?php echo $datos->PAGADO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="deuda">Deuda</label>
                            <input type="text" name="deuda" id="deuda" class="form-control" value="<?php echo $datos->DEUDA ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="entrega_lote">Fecha Entrega Lote</label>
                            <input type="text" name="entrega_lote" id="entrega_lote" class="form-control" value="<?php echo $datos->FECHA_ENTREGA_LOTE ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="estatus_cm">Estatus CM</label>
                            <input type="text" name="estatus_cm" id="estatus_cm" class="form-control" value="<?php echo $datos->ESTATUS_CM ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="link">Link SAT</label>
                            <input type="text" name="link" id="link" class="form-control" value="<?php echo $datos->LINK_SAT ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="notas">Notas de pago</label>
                            <input type="text" name="notas" id="notas" class="form-control" value="<?php echo $datos->NOTAS_DE_PAGOS ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="bono_ref">Abono Referido</label>
                            <input type="text" name="bono_ref" id="bono_ref" class="form-control" value="<?php echo $datos->BONO_REFERIDO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="estatus">Estatus</label>
                            <input type="text" name="estatus" id="estatus" class="form-control" value="<?php echo $datos->ESTATUS ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="motivo_estatus">Motivo Estatus</label>
                            <input type="text" name="motivo_estatus" id="motivo_estatus" class="form-control" value="<?php echo $datos->MOTIVO_ESTATUS ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="resultado">Resultado</label>
                            <input type="text" name="resultado" id="resultado" class="form-control" value="<?php echo $datos->RESULTADO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="liberacion">Fecha de Liberacion</label>
                            <input type="text" name="liberacion" id="liberacion" class="form-control" value="<?php echo $datos->FECHADELIBERACION ?>">
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3">
                        <i class="fa-solid fa-floppy-disk"></i> Actualizar
                    </button>
                </form>
                
            </div>
        </div>
    </div>
</div>



<?php include "../script.php"; ?>