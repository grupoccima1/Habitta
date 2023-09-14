<?php 
    include "../header.php";
    include "../clases/Conexion.php";
    include "../clases/crud.php";

    $crud = new Crud();
    $id = $_POST['id'];
    $datos = $crud->obtenerDocumentoAcumuladoTierra($id);
    $idMongo = $datos->_id;
?>
<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-body">
                <div class="col">
                    <a href="../AcumuladosBonosDeTierra.php" class="btn btn-outline-info">
                        Regresar
                    </a>
                    <h2>Actualizar Registro</h2>
                    <form action="../procesos/actualizar_AcumuladoBonosTierra.php" method="POST">
                        <input type="text" name="id" id="id" hidden value="<?php echo $idMongo ?>">
                        <label for="llave">Llave</label>
                        <input type="text" name="llave" id="llave" class="form-control"
                            value="<?php echo $datos->LLAVE ?>">
                        <label for="fecha_ingreso">Fecha de Ingreso</label>
                        <input type="text" name="fecha_ingreso" id="fecha_ingreso" class="form-control"
                            value="<?php echo $datos->FECHA_DE_INGRESO ?>">
                        <label for="lote">Lote</label>
                        <input type="text" name="lote" id="lote" class="form-control"
                            value="<?php echo $datos->LOTE ?>">
                        <label for="condominio">Condominio</label>
                        <input type="text" name="condominio" id="condominio" class="form-control"
                            value="<?php echo $datos->CONDOMINIO ?>">
                        <label for="cluster">Cluster</label>
                        <input type="text" name="cluster" id="cluster" class="form-control"
                            value="<?php echo $datos->CLUSTER ?>">
                        <label for="desarrollo">Desarrollo</label>
                        <input type="text" name="desarrollo" id="desarrollo" class="form-control"
                            value="<?php echo $datos->DESARROLLO ?>">
                        <label for="puesto">Puesto</label>
                        <input type="text" name="puesto" id="puesto" class="form-control"
                            value="<?php echo $datos->PUESTO ?>">
                        <label for="comisionista">Comision</label>
                        <input type="text" name="comisionista" id="comisionista" class="form-control"
                            value="<?php echo $datos->COMISIONISTA ?>">
                        <label for="total_venta">Total de la Venta</label>
                        <input type="text" name="total_venta" id="total_venta" class="form-control"
                            value="<?php echo $datos->TOTAL_DE_LA_VENTA ?>">
                        <label for="enganche">Enganche</label>
                        <input type="text" name="enganche" id="enganche" class="form-control"
                            value="<?php echo $datos->ENGANCHE ?>">
                        <label for="pcomision">% Comision</label>
                        <input type="text" name="pcomision" id="pcomision" class="form-control"
                            value="<?php echo $datos->PCOMISION ?>">
                        <label for="total_comision">Total Comision</label>
                        <input type="text" name="total_comision" id="total_comision" class="form-control"
                            value="<?php echo $datos->TOTAL_COMISION ?>">
                        <label for="descuento">Descuento</label>
                        <input type="text" name="descuento" id="descuento" class="form-control"
                            value="<?php echo $datos->DESCUENTO ?>">
                        <label for="desc">Desc</label>
                        <input type="text" name="desc" id="desc" class="form-control"
                            value="<?php echo $datos->DESC ?>">
                        <label for="pagar_externos">Pagar a Externos</label>
                        <input type="text" name="pagar_externos" id="pagar_externos" class="form-control"
                            value="<?php echo $datos->A_PAGAR_EXTERNOS ?>">
                        <label for="subtotal">Sub Total</label>
                        <input type="text" name="subtotal" id="subtotal" class="form-control"
                            value="<?php echo $datos->SUBTOTAL ?>">
                        <label for="iva">IVA</label>
                        <input type="text" name="iva" id="iva" class="form-control" 
                            value="<?php echo $datos->IVA ?>">
                        <label for="retenciones_iva">Retenciones de IVA</label>
                        <input type="text" name="retenciones_iva" id="retenciones_iva" class="form-control"
                            value="<?php echo $datos->RETENCIONES_DE_IVA ?>">
                        <label for="retenciones_isr">Retenciones ISR</label>
                        <input type="text" name="retenciones_isr" id="retenciones_isr" class="form-control"
                            value="<?php echo $datos->RETENCIONES_ISR ?>">
                        <label for="total">Total</label>
                        <input type="text" name="total" id="total" class="form-control"
                            value="<?php echo $datos->TOTAL ?>">
                        <label for="pago">Pago</label>
                        <input type="text" name="pago" id="pago" class="form-control"
                            value="<?php echo $datos->PAGO ?>">
                        <label for="notas">Notas</label>
                        <input type="text" name="notas" id="notas" class="form-control"
                            value="<?php echo $datos->NOTAS ?>">
                        <label for="pagado">Pagado</label>
                        <input type="text" name="pagado" id="pagado" class="form-control"
                            value="<?php echo $datos->PAGADO ?>">
                        <label for="metodo_pago">Metodo de Pago</label>
                        <input type="text" name="metodo_pago" id="metodo_pago" class="form-control"
                            value="<?php echo $datos->METODO_DE_PAGO ?>">
                        <label for="fecha_pagada">Fecha Pagada</label>
                        <input type="text" name="fecha_pagada" id="fecha_pagada" class="form-control"
                            value="<?php echo $datos->FECHA_PAGADA ?>">
                        <label for="nombre_correcto">Nombre Correcto</label>
                        <input type="text" name="nombre_correcto" id="nombre_correcto" class="form-control"
                            value="<?php echo $datos->NOMBRE_CORRECTO ?>">
                        <label for="semana_pagada">Semana Pagada</label>
                        <input type="text" name="semana_pagada" id="semana_pagada" class="form-control"
                            value="<?php echo $datos->SEMANA_PAGADA ?>">
                        <label for="semana">Semana</label>
                        <input type="text" name="semana" id="semana" class="form-control"
                            value="<?php echo $datos->SEMANA ?>">
                        <label for="tipo_regimen">X tipo de regimen</label>
                        <input type="text" name="tipo_regimen" id="tipo_regimen" class="form-control"
                            value="<?php echo $datos->X_TIPO_DE_REGIMEN ?>">
                        <label for="cuenta">Cuenta</label>
                        <input type="text" name="cuenta" id="cuenta" class="form-control"
                            value="<?php echo $datos->CUENTA ?>">
                        <label for="motivo_desc">Motivo de Descuento</label>
                        <input type="text" name="motivo_desc" id="motivo_desc" class="form-control"
                            value="<?php echo $datos->MOTIVO_DE_DESCUENTO ?>">
                        <label for="estatus">Estatus</label>
                        <input type="text" name="estatus" id="estatus" class="form-control"
                            value="<?php echo $datos->ESTATUS ?>">
                        <label for="lote_anterior">Lote Anterior</label>
                        <input type="text" name="lote_anterior" id="lote_anterior" class="form-control"
                            value="<?php echo $datos->LOTE_ANTERIOR ?>">
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