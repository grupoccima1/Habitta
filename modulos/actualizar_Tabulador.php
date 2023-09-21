<?php 
    include "../header.php";
    include "../clases/Conexion.php";
    include "../clases/crud.php";
    $crud = new Crud();
    $id = $_POST['id'];
    $datos = $crud -> obtenerDocumentoTabulador($id);
    $idMongo = $datos -> _id;
?>
<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../tabulador.php" class="btn btn-outline-info">Regresar</a>
            </div>
            <div class="card-body">
                <h2 class="mb-3 fs-4 text-center">Actualizar Registro</h2>
                <form action="../procesos/actualizar_Tabulador.php" method="POST">
                    <div class="row">
                        <input type="text" name="id" id="id" hidden value="<?php echo $idMongo ?>">
                        <div class="col-4 mb-2">
                            <label for="periodo">Periodo </label>
                            <input type="text" name="periodo" id="periodo" class="form-control" value="<?php echo $datos->PERIODO ?>" >
                        </div>
                        <div class="col-4 mb-2">
                            <label for="fecha">Fecha</label>
                            <input type="text" name="fecha" id="fecha" class="form-control" value="<?php echo $datos->FECHA ?>" >
                        </div>
                        <div class="col-4 mb-2">
                            <label for="mensualidad">Mensualidad</label>
                            <input type="text" name="mensualidad" id="mensualidad" class="form-control" value="<?php echo $datos->MENSUALIDAD ?>" >
                        </div>
                        <div class="col-4 mb-2">
                            <label for="pagado">Pagado</label>
                            <input type="text" name="pagado" id="pagado" class="form-control" value="<?php echo $datos->PAGADO ?>" >
                        </div>
                        <div class="col-4 mb-2">
                            <label for="fecha_pago">Fecha Pago</label>
                            <input type="text" name="fecha_pago" id="fecha_pago" class="form-control" value="<?php echo $datos->FECHA_PAGO ?>" >
                        </div>
                        <div class="col-4 mb-2">
                            <label for="interes">Interes Financiamiento</label>
                            <input type="text" name="interes" id="interes" class="form-control" value="<?php echo $datos->INTERESFINANCIAMIENTO ?>" >
                        </div>
                        <div class="col-4 mb-2">
                            <label for="abono">Abono Capital</label>
                            <input type="text" name="abono" id="abono" class="form-control" value="<?php echo $datos->ABONO_CAPITAL ?>" >
                        </div>
                        <div class="col-4 mb-2">
                            <label for="saldo_final">Saldo Final</label>
                            <input type="text" name="saldo_final" id="saldo_final" class="form-control" value="<?php echo $datos->SALDO_FINAL ?>" >
                        </div>
                        <div class="col-4 mb-2">
                            <label for="int_gen">Interes Gen</label>
                            <input type="text" name="int_gen" id="int_gen" class="form-control" value="<?php echo $datos->INT_GEN ?>" >
                        </div>
                        <div class="col-4 mb-2">
                            <label for="int_int">Interes Int</label>
                            <input type="text" name="int_int" id="int_int" class="form-control" value="<?php echo $datos->INT_INT ?>" >
                        </div>
                        <div class="col-4 mb-2">
                            <label for="int_acum">Interes Acumulado</label>
                            <input type="text" name="int_acum" id="int_acum" class="form-control" value="<?php echo $datos->INT_ACUM_MORA ?>" >
                        </div>
                        <div class="col-4 mb-2">
                            <label for="int_neg">Interes Neg</label>
                            <input type="text" name="int_neg" id="int_neg" class="form-control" value="<?php echo $datos->INT_NEG ?>" >
                        </div>
                        <div class="col-4 mb-2">
                            <label for="int_pagado">Interes Pagado </label>
                            <input type="text" name="int_pagado" id="int_pagado" class="form-control" value="<?php echo $datos->INT_PAGADO ?>" >
                        </div>
                        <div class="col-4 mb-2">
                            <label for="estatus">Estatus</label>
                            <input type="text" name="estatus" id="estatus" class="form-control" value="<?php echo $datos->ESTATUS ?>" >
                        </div>
                        <div class="col-4 mb-2">
                            <label for="observacion">Observacion</label>
                            <input type="text" name="observacion" id="observacion" class="form-control" value="<?php echo $datos->OBSERVACION ?>" >
                        </div>
                        <div class="col-4 mb-2">
                            <label for="debe_interes">Debe Interes</label>
                            <input type="text" name="debe_interes" id="debe_interes" class="form-control" value="<?php echo $datos->DEBE_INTERES ?>" >
                        </div>
                        <div class="col-4 mb-2">
                            <label for="indicador_fecha">Indicador Fecha</label>
                            <input type="text" name="indicador_fecha" id="indicador_fecha" class="form-control" value="<?php echo $datos->INDICADOR_FECHA ?>" >
                        </div>
                        <div class="col-4 mb-2">
                            <label for="porcent">Porcentaje de Interes</label>
                            <input type="text" name="porcent" id="porcent" class="form-control" value="<?php echo $datos->PORCENT_INT ?>" >
                        </div>
                        <div class="col-4 mb-2">
                            <label for="llave2">Llave 2</label>
                            <input type="text" name="llave2" id="llave2" class="form-control" value="<?php echo $datos->LLAVE2 ?>" >
                        </div>
                        <div class="col-4 mb-2">
                            <label for="mens_adeudo">Mensualidad de Adeudo</label>
                            <input type="text" name="mens_adeudo" id="mens_adeudo" class="form-control" value="<?php echo $datos->MENS_ADEU ?>" >
                        </div>
                        <div class="col-4 mb-2">
                            <label for="calc_sobre">Calculo Sobre</label>
                            <input type="text" name="calc_sobre" id="calc_sobre" class="form-control" value="<?php echo $datos->CALC_SOBRE ?>" >
                        </div>
                        <div class="col-4 mb-2">
                            <label for="mont_int">Monto Interes Moratorio</label>
                            <input type="text" name="mont_int" id="mont_int" class="form-control" value="<?php echo $datos->MONTO_INT_MOR ?>" >
                        </div>
                        <div class="col-4 mb-2">
                            <label for="sum_deuda">Suma Deuda</label>
                            <input type="text" name="sum_deuda" id="sum_deuda" class="form-control" value="<?php echo $datos->SUMA_DEUDA ?>" >
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