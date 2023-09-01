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
            <div class="card-body">
                <div class="col">

                <a href="../tabulador.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Actualizar Registro</h2>
                <form action="../procesos/actualizar_Tabulador.php" method="POST">
                    <input type="text" name="id" id="id" hidden value="<?php echo $idMongo ?>">
                    <label for="periodo">Periodo </label>
                    <input type="text" name="periodo" id="periodo" class="form-control" value="<?php echo $datos->PERIODO ?>" >
                    <label for="fecha">Fecha</label>
                    <input type="text" name="fecha" id="fecha" class="form-control" value="<?php echo $datos->FECHA ?>" >
                    <label for="mensualidad">Mensualidad</label>
                    <input type="text" name="mensualidad" id="mensualidad" class="form-control" value="<?php echo $datos->MENSUALIDAD ?>" >
                    <label for="pagado">Pagado</label>
                    <input type="text" name="pagado" id="pagado" class="form-control" value="<?php echo $datos->PAGADO ?>" >
                    <label for="fecha_pago">Fecha Pago</label>
                    <input type="text" name="fecha_pago" id="fecha_pago" class="form-control" value="<?php echo $datos->FECHA_PAGO ?>" >
                    <label for="interes">Interes Financiamiento</label>
                    <input type="text" name="interes" id="interes" class="form-control" value="<?php echo $datos->INTERESFINANCIAMIENTO ?>" >
                    <label for="abono">Abono Capital</label>
                    <input type="text" name="abono" id="abono" class="form-control" value="<?php echo $datos->ABONO_CAPITAL ?>" >
                    <label for="saldo_final">Saldo Final</label>
                    <input type="text" name="saldo_final" id="saldo_final" class="form-control" value="<?php echo $datos->SALDO_FINAL ?>" >
                    <label for="int_gen">Interes Gen</label>
                    <input type="text" name="int_gen" id="int_gen" class="form-control" value="<?php echo $datos->INT_GEN ?>" >
                    <label for="int_int">Interes Int</label>
                    <input type="text" name="int_int" id="int_int" class="form-control" value="<?php echo $datos->INT_INT ?>" >
                    <label for="int_acum">Interes Acumulado</label>
                    <input type="text" name="int_acum" id="int_acum" class="form-control" value="<?php echo $datos->INT_ACUM_MORA ?>" >
                    <label for="int_neg">Interes Neg</label>
                    <input type="text" name="int_neg" id="int_neg" class="form-control" value="<?php echo $datos->INT_NEG ?>" >
                    <label for="int_pagado">Interes Pagado </label>
                    <input type="text" name="int_pagado" id="int_pagado" class="form-control" value="<?php echo $datos->INT_PAGADO ?>" >
                    <label for="estatus">Estatus</label>
                    <input type="text" name="estatus" id="estatus" class="form-control" value="<?php echo $datos->ESTATUS ?>" >
                    <label for="observacion">Observacion</label>
                    <input type="text" name="observacion" id="observacion" class="form-control" value="<?php echo $datos->OBSERVACION ?>" >
                    <label for="debe_interes">Debe Interes</label>
                    <input type="text" name="debe_interes" id="debe_interes" class="form-control" value="<?php echo $datos->DEBE_INTERES ?>" >
                    <label for="indicador_fecha">Indicador Fecha</label>
                    <input type="text" name="indicador_fecha" id="indicador_fecha" class="form-control" value="<?php echo $datos->INDICADOR_FECHA ?>" >
                    <label for="porcent">Porcentaje de Interes</label>
                    <input type="text" name="porcent" id="porcent" class="form-control" value="<?php echo $datos->PORCENT_INT ?>" >
                    <label for="llave2">Llave 2</label>
                    <input type="text" name="llave2" id="llave2" class="form-control" value="<?php echo $datos->LLAVE2 ?>" >
                    <label for="mens_adeudo">Mensualidad de Adeudo</label>
                    <input type="text" name="mens_adeudo" id="mens_adeudo" class="form-control" value="<?php echo $datos->MENS_ADEU ?>" >
                    <label for="calc_sobre">Calculo Sobre</label>
                    <input type="text" name="calc_sobre" id="calc_sobre" class="form-control" value="<?php echo $datos->CALC_SOBRE ?>" >
                    <label for="mont_int">Monto Interes Moratorio</label>
                    <input type="text" name="mont_int" id="mont_int" class="form-control" value="<?php echo $datos->MONTO_INT_MOR ?>" >
                    <label for="sum_deuda">Suma Deuda</label>
                    <input type="text" name="sum_deuda" id="sum_deuda" class="form-control" value="<?php echo $datos->SUMA_DEUDA ?>" >
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