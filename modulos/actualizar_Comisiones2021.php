<?php 
    include "../header.php";
    include "../clases/Conexion.php";
    include "../clases/crud.php";

    $crud = new Crud();
    $id = $_POST['id'];
    $datos = $crud -> obtenerDocumentoComisiones2021($id);
    $idMongo = $datos -> _id;
?>

<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../Comisiones2021.php" class="btn btn-outline-info">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                <div class="col">
                    <h2 class="mb-3 fs-4 text-center">Actualizar Registro</h2>
                    <form action="../procesos/actualizar_Comisiones2021.php" method="POST">
                        <input type="text" name="id" id="id" hidden value="<?php echo $idMongo ?>">
                        <div class="row">
                            <div class="col-4 mb-2">
                                <label for="llave">Llave</label>
                                <input type="text" name="llave" id="llave" class="form-control"
                                    value="<?php echo $datos->LLAVE ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="fecha_ingreso">Fecha de Ingreso</label>
                                <input type="text" name="fecha_ingreso" id="fecha_ingreso" class="form-control"
                                    value="<?php echo $datos->FECHA_DE_INGRESO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="lote">Lote</label>
                                <input type="text" name="lote" id="lote" class="form-control"
                                    value="<?php echo $datos->LOTE ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="condominio">Condominio</label>
                                <input type="text" name="condominio" id="condominio" class="form-control"
                                    value="<?php echo $datos->CONDOMINIO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="cluster">Cluster</label>
                                <input type="text" name="cluster" id="cluster" class="form-control"
                                    value="<?php echo $datos->CLUSTER ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="desarrollo">Desarrollo</label>
                                <input type="text" name="desarrollo" id="desarrollo" class="form-control"
                                    value="<?php echo $datos->DESARROLLO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="puesto">Puesto</label>
                                <input type="text" name="puesto" id="puesto" class="form-control"
                                    value="<?php echo $datos->PUESTO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="comisionista">Comisionista</label>
                                <input type="text" name="comisionista" id="comisionista" class="form-control"
                                    value="<?php echo $datos->COMISIONISTA ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="total_venta">Total de la venta</label>
                                <input type="text" name="total_venta" id="total_venta" class="form-control"
                                    value="<?php echo $datos->TOTAL_DE_LA_VENTA ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="enganche">Enganche</label>
                                <input type="text" name="enganche" id="enganche" class="form-control"
                                    value="<?php echo $datos->ENGANCHE ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="pcomision">% Comision</label>
                                <input type="text" name="pcomision" id="pcomision" class="form-control"
                                    value="<?php echo $datos->PCOMISION ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="total_comision">Total Comision</label>
                                <input type="text" name="total_comision" id="total_comision" class="form-control"
                                    value="<?php echo $datos->TOTAL_COMISION ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="descuento">Descuento</label>
                                <input type="text" name="descuento" id="descuento" class="form-control"
                                    value="<?php echo $datos->DESCUENTO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="pagar_externos">A Pagar Externos</label>
                                <input type="text" name="pagar_externos" id="pagar_externos" class="form-control"
                                    value="<?php echo $datos->A_PAGAR_EXTERNOS ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="subtotal">Sub Total</label>
                                <input type="text" name="subtotal" id="subtotal" class="form-control"
                                    value="<?php echo $datos->SUBTOTAL ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="iva">IVA</label>
                                <input type="text" name="iva" id="iva" class="form-control"
                                    value="<?php echo $datos->IVA ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="retenciones_iva">Retenciones de Iva</label>
                                <input type="text" name="retenciones_iva" id="retenciones_iva" class="form-control"
                                    value="<?php echo $datos->RETENCIONES_DE_IVA ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="retenciones_isr">Retenciones ISR</label>
                                <input type="text" name="retenciones_isr" id="retenciones_isr" class="form-control"
                                    value="<?php echo $datos->RETENCIONES_ISR ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="total">Total</label>
                                <input type="text" name="total" id="total" class="form-control"
                                    value="<?php echo $datos->TOTAL ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="pago">Pago</label>
                                <input type="text" name="pago" id="pago" class="form-control"
                                    value="<?php echo $datos->PAGO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="pagado">Pagado</label>
                                <input type="text" name="pagado" id="pagado" class="form-control"
                                    value="<?php echo $datos->PAGADO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="metodo_pago">Metodo de Pago</label>
                                <input type="text" name="metodo_pago" id="metodo_pago" class="form-control"
                                    value="<?php echo $datos->METODO_DE_PAGO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="fecha_pagada">Fecha Pagada</label>
                                <input type="text" name="fecha_pagada" id="fecha_pagada" class="form-control"
                                    value="<?php echo $datos->FECHA_PAGADA ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="nombre_correcto">Nombre Correcto</label>
                                <input type="text" name="nombre_correcto" id="nombre_correcto" class="form-control"
                                    value="<?php echo $datos->NOMBRE_CORRECTO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="sem_pagada">Semana Pagada</label>
                                <input type="text" name="sem_pagada" id="sem_pagada" class="form-control"
                                    value="<?php echo $datos->SEMANA_PAGADA ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="semana">Semana</label>
                                <input type="text" name="semana" id="semana" class="form-control"
                                    value="<?php echo $datos->SEMANA ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="regimen">X Por Tipo de Regimen</label>
                                <input type="text" name="regimen" id="regimen" class="form-control"
                                    value="<?php echo $datos->X_TIPO_DE_REGIMEN ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="cuenta">Cuenta</label>
                                <input type="text" name="cuenta" id="cuenta" class="form-control"
                                    value="<?php echo $datos->CUENTA ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="mot_descuento">Motivo de Descuento</label>
                                <input type="text" name="mot_descuento" id="mot_descuento" class="form-control"
                                    value="<?php echo $datos->MOTIVO_DE_DESCUENTO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="estatus">Estatus</label>
                                <input type="text" name="estatus" id="estatus" class="form-control"
                                    value="<?php echo $datos->ESTATUS ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="lote_anterior">Lote Anterior</label>
                                <input type="text" name="lote_anterior" id="lote_anterior" class="form-control"
                                    value="<?php echo $datos->LOTE_ANTERIOR ?>">
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
</div>

<?php include "../script.php"; ?>