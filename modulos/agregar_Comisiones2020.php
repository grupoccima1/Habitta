<?php include "../header.php"; ?>

<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-body">
                <div class="col">
                    <a href="../comisiones2020.php" class="btn btn-outline-info">
                        Regresar
                    </a>
                    <h2>Nuevo Registro</h2>

                    <form action="../procesos/insertar_Comisiones2020.php" method="post">
                        <label for="llave">Llave</label>
                        <input type="text" name="llave" id="llave" class="form-control">
                        <label for="fecha_ingreso">Fecha de Ingreso</label>
                        <input type="text" name="fecha_ingreso" id="fecha_ingreso" class="form-control">
                        <label for="lote">Lote</label>
                        <input type="text" name="lote" id="lote" class="form-control">
                        <label for="condominio">Condominio</label>
                        <input type="text" name="condominio" id="condominio" class="form-control">
                        <label for="cluster">Cluster</label>
                        <input type="text" name="cluster" id="cluster" class="form-control">
                        <label for="desarrollo">Desarrollo</label>
                        <input type="text" name="desarrollo" id="desarrollo" class="form-control">
                        <label for="puesto">Puesto</label>
                        <input type="text" name="puesto" id="puesto" class="form-control">
                        <label for="comisionista">Comisionista</label>
                        <input type="text" name="comisionista" id="comisionista" class="form-control">
                        <label for="total_venta">Total de la venta</label>
                        <input type="text" name="total_venta" id="total_venta" class="form-control">
                        <label for="enganche">Enganche</label>
                        <input type="text" name="enganche" id="enganche" class="form-control">
                        <label for="pcomision">% Comision</label>
                        <input type="text" name="pcomision" id="pcomision" class="form-control">
                        <label for="total_comision">Total Comision</label>
                        <input type="text" name="total_comision" id="total_comision" class="form-control">
                        <label for="descuento">Descuento</label>
                        <input type="text" name="descuento" id="descuento" class="form-control">
                        <label for="pagar_externos">A Pagar Externos</label>
                        <input type="text" name="pagar_externos" id="pagar_externos" class="form-control">
                        <label for="subtotal">Sub Total</label>
                        <input type="text" name="subtotal" id="subtotal" class="form-control">
                        <label for="iva">IVA</label>
                        <input type="text" name="iva" id="iva" class="form-control">
                        <label for="retenciones_iva">Retenciones de Iva</label>
                        <input type="text" name="retenciones_iva" id="retenciones_iva" class="form-control">
                        <label for="retenciones_isr">Retenciones ISR</label>
                        <input type="text" name="retenciones_isr" id="retenciones_isr" class="form-control">
                        <label for="total">Total</label>
                        <input type="text" name="total" id="total" class="form-control">
                        <label for="pago">Pago</label>
                        <input type="text" name="pago" id="pago" class="form-control">
                        <label for="pagado">Pagado</label>
                        <input type="text" name="pagado" id="pagado" class="form-control">
                        <label for="metodo_pago">Metodo de Pago</label>
                        <input type="text" name="metodo_pago" id="metodo_pago" class="form-control">
                        <label for="fecha_pagada">Fecha Pagada</label>
                        <input type="text" name="fecha_pagada" id="fecha_pagada" class="form-control">
                        <label for="nombre_correcto">Nombre Correcto</label>
                        <input type="text" name="nombre_correcto" id="nombre_correcto" class="form-control">
                        <label for="sem_pagada">Semana Pagada</label>
                        <input type="text" name="sem_pagada" id="sem_pagada" class="form-control">
                        <label for="semana">Semana</label>
                        <input type="text" name="semana" id="semana" class="form-control">
                        <label for="regimen">X Por Tipo de Regimen</label>
                        <input type="text" name="regimen" id="regimen" class="form-control">
                        <label for="cuenta">Cuenta</label>
                        <input type="text" name="cuenta" id="cuenta" class="form-control">
                        <label for="mot_descuento">Motivo de Descuento</label>
                        <input type="text" name="mot_descuento" id="mot_descuento" class="form-control">
                        <label for="estatus">Estatus</label>
                        <input type="text" name="estatus" id="estatus" class="form-control">
                        <label for="lote_anterior">Lote Anterior</label>
                        <input type="text" name="lote_anterior" id="lote_anterior" class="form-control">
                        <label for="total_venta">Total de la Venta</label>
                        <input type="text" name="total_venta" id="total_venta" class="form-control">
                        <label for="xtipo">X Tipo de Regimen</label>
                        <input type="text" name="xtipo" id="xtipo" class="form-control">
                        <button class="btn btn-primary mt-3">
                            <i class="fa-solid fa-floppy-disk">Agregar</i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "../script.php"; ?>