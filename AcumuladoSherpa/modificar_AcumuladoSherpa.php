<?php 
    include "../header.php";
    include "../clases/Conexion.php";
    include "../AcumuladoSherpa/crudacumuladosherpa.php";

    $crud = new crudacumuladosherpa();
    
    $id = $_POST['id'];
    $datos = $crud->obtenerDocumentoSherpa($id);
    $idMySQL = $datos['id']; 
?>
<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../acumuladosherpa.php" class="btn btn-outline-info">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                <h2 class="mb-3 fs-4 text-center">Actualizar Registro</h2>
                <form action="../AcumuladoSherpa/actualizar_AcumuladoSherpa.php" method="POST">
                    <div class="row">
                        <input type="text" name="id" id="id" hidden value="<?php echo $idMySQL ?>">
                        
                        <!-- Aquí he actualizado los nombres de los campos según tu base de datos -->
                        <div class="col-4 mb-2">
                            <label for="llave">Llave</label>
                            <input type="text" name="llave" id="llave" class="form-control" value="<?php echo $datos['llave'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="fecha_de_ingreso">Fecha de Ingreso</label>
                            <input type="text" name="fecha_de_ingreso" id="fecha_de_ingreso" class="form-control" value="<?php echo $datos['fecha_de_ingreso'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="lote">Lote</label>
                            <input type="text" name="lote" id="lote" class="form-control" value="<?php echo $datos['lote'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="condominio">Condominio</label>
                            <input type="text" name="condominio" id="condominio" class="form-control" value="<?php echo $datos['condominio'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="cluster">Cluster</label>
                            <input type="text" name="cluster" id="cluster" class="form-control" value="<?php echo $datos['cluster'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="desarrollo">Desarrollo</label>
                            <input type="text" name="desarrollo" id="desarrollo" class="form-control" value="<?php echo $datos['desarrollo'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="puesto">Puesto</label>
                            <input type="text" name="puesto" id="puesto" class="form-control" value="<?php echo $datos['puesto'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="comisionista">Comisionista</label>
                            <input type="text" name="comisionista" id="comisionista" class="form-control" value="<?php echo $datos['comisionista'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="total_de_la_venta">Total de la Venta</label>
                            <input type="text" name="total_de_la_venta" id="total_de_la_venta" class="form-control" value="<?php echo $datos['total_de_la_venta'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="enganche">Enganche</label>
                            <input type="text" name="enganche" id="enganche" class="form-control" value="<?php echo $datos['enganche'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="p_comision">% Comision</label>
                            <input type="text" name="p_comision" id="p_comision" class="form-control" value="<?php echo $datos['p_comision'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="total_comision">Total Comision</label>
                            <input type="text" name="total_comision" id="total_comision" class="form-control" value="<?php echo $datos['total_comision'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="descuento">Descuento</label>
                            <input type="text" name="descuento" id="descuento" class="form-control" value="<?php echo $datos['descuento'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="desc">Desc</label>
                            <input type="text" name="desc" id="desc" class="form-control" value="<?php echo $datos['desc'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="a_pagar_externos">Pagar a Externos</label>
                            <input type="text" name="a_pagar_externos" id="a_pagar_externos" class="form-control" value="<?php echo $datos['a_pagar_externos'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="subtotal">Sub Total</label>
                            <input type="text" name="subtotal" id="subtotal" class="form-control" value="<?php echo $datos['subtotal'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="iva">IVA</label>
                            <input type="text" name="iva" id="iva" class="form-control" value="<?php echo $datos['iva'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="retenciones_de_iva">Retenciones de IVA</label>
                            <input type="text" name="retenciones_de_iva" id="retenciones_de_iva" class="form-control" value="<?php echo $datos['retenciones_de_iva'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="retenciones_isr">Retenciones ISR</label>
                            <input type="text" name="retenciones_isr" id="retenciones_isr" class="form-control" value="<?php echo $datos['retenciones_isr'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="total">Total</label>
                            <input type="text" name="total" id="total" class="form-control" value="<?php echo $datos['total'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="pago">Pago</label>
                            <input type="text" name="pago" id="pago" class="form-control" value="<?php echo $datos['pago'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="notas">Notas</label>
                            <input type="text" name="notas" id="notas" class="form-control" value="<?php echo $datos['notas'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="pagado">Pagado</label>
                            <input type="text" name="pagado" id="pagado" class="form-control" value="<?php echo $datos['pagado'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="metodo_de_pago">Metodo de Pago</label>
                            <input type="text" name="metodo_de_pago" id="metodo_de_pago" class="form-control" value="<?php echo $datos['metodo_de_pago'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="fecha_pagada">Fecha Pagada</label>
                            <input type="text" name="fecha_pagada" id="fecha_pagada" class="form-control" value="<?php echo $datos['fecha_pagada'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="nombre_correcto">Nombre Correcto</label>
                            <input type="text" name="nombre_correcto" id="nombre_correcto" class="form-control" value="<?php echo $datos['nombre_correcto'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="semana_pagada">Semana Pagada</label>
                            <input type="text" name="semana_pagada" id="semana_pagada" class="form-control" value="<?php echo $datos['semana_pagada'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="semana">Semana</label>
                            <input type="text" name="semana" id="semana" class="form-control" value="<?php echo $datos['semana'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="x_tipo_de_regimen">X tipo de regimen</label>
                            <input type="text" name="x_tipo_de_regimen" id="x_tipo_de_regimen" class="form-control" value="<?php echo $datos['x_tipo_de_regimen'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="cuenta">Cuenta</label>
                            <input type="text" name="cuenta" id="cuenta" class="form-control" value="<?php echo $datos['cuenta'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="motivo_de_descuento">Motivo de Descuento</label>
                            <input type="text" name="motivo_de_descuento" id="motivo_de_descuento" class="form-control" value="<?php echo $datos['motivo_de_descuento'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="estatus">Estatus</label>
                            <input type="text" name="estatus" id="estatus" class="form-control" value="<?php echo $datos['estatus'] ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="lote_anterior">Lote Anterior</label>
                            <input type="text" name="lote_anterior" id="lote_anterior" class="form-control" value="<?php echo $datos['lote_anterior'] ?>">
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
