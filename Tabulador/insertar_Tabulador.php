<?php
    include "../clases/Conexion.php";
    include "./../Tabulador/crud_Tabulador.php";

    $crudtabulador = new crudtabulador();

    $datos = array(
        "PERIODO" => $_POST['periodo'], 
        "FECHA" => $_POST['fecha'],
        "MENSUALIDAD" => $_POST['mensualidad'],
        "PAGADO" => $_POST['pagado'],
        "FECHA_PAGO" => $_POST['fecha_pago'], 
        "INTERESFINANCIAMIENTO" => $_POST['interes'],
        "ABONO_CAPITAL" => $_POST['abono'],
        "SALDO_FINAL" => $_POST['saldo_final'],
        "INT_GEN" => $_POST['int_gen'], 
        "INT_INT" => $_POST['int_int'],
        "INT_ACUM_MORA" => $_POST['int_acum'],
        "INT_NEG" => $_POST['int_neg'],
        "INT_PAGADO" => $_POST['int_pagado'], 
        "ESTATUS" => $_POST['estatus'],
        "OBSERVACION" => $_POST['observacion'],
        "DEBE_INTERES" => $_POST['debe_interes'],
        "INDICADOR_FECHA" => $_POST['indicador_fecha'],
        "PORCENT_INT" => $_POST['porcent'],
        "LLAVE2" => $_POST['llave2'],
        "MENS_ADEU" => $_POST['mens_adeudo'],
        "CALC_SOBRE" => $_POST['calc_sobre'],
        "MONTO_INT_MOR" => $_POST['mont_int'],
        "SUMA_DEUDA" => $_POST['sum_deuda']
    );

    $respuesta = $crudtabulador->insertarDatosTabulador($datos);

    if ($respuesta->getInsertedId() > 0) {
        header("location:../tabulador.php");
    } else {
        print_r($respuesta);
   }
    

?>