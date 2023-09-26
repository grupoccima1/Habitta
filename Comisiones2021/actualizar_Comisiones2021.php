<?php
    include "../clases/Conexion.php";
    include "../Comisiones2021/crudcomisiones2021.php";

    $Crud = new crudcomisiones2021();
    $id = $_POST['id'];

    $datos = array(
        "LLAVE" => $_POST['llave'],
        "FECHA_DE_INGRESO" => $_POST['fecha_ingreso'],
        "LOTE" => $_POST['lote'],
        "CONDOMINIO" => $_POST['condominio'],
        "CLUSTER" => $_POST['cluster'],
        "DESARROLLO" => $_POST['desarrollo'],
        "PUESTO" => $_POST['puesto'],
        "COMISIONISTA" => $_POST['comisionista'],
        "TOTAL_DE_LA_VENTA" => $_POST['total_venta'],
        "ENGANCHE" => $_POST['enganche'],
        "PCOMISION" => $_POST['pcomision'],
        "TOTAL_COMISION" => $_POST['total_comision'],
        "DESCUENTO" => $_POST['descuento'],
        "A_PAGAR_EXTERNOS" => $_POST['pagar_externos'],
        "SUBTOTAL" => $_POST['subtotal'],
        "IVA" => $_POST['iva'],
        "RETENCIONES_DE_IVA" => $_POST['retenciones_iva'],
        "RETENCIONES_ISR" => $_POST['retenciones_isr'],
        "TOTAL" => $_POST['total'],
        "PAGO" => $_POST['pago'],
        "PAGADO" => $_POST['pagado'],
        "METODO_DE_PAGO" => $_POST['metodo_pago'],
        "FECHA_PAGADA" => $_POST['fecha_pagada'],
        "NOMBRE_CORRECTO" => $_POST['nombre_correcto'],
        "SEMANA_PAGADA" => $_POST['sem_pagada'],
        "SEMANA" => $_POST['semana'],
        "X_TIPO_DE_REGIMEN" => $_POST['regimen'],
        "CUENTA" => $_POST['cuenta'],
        "MOTIVO_DE_DESCUENTO" => $_POST['mot_descuento'],
        "ESTATUS" => $_POST['estatus'],
        "LOTE_ANTERIOR" => $_POST['lote_anterior']
    );

    $respuesta = $Crud -> actualizarComisiones2021($id, $datos);

    if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        header("location:../comisiones2021.php");
    }else {
        print_r($respuesta);
    }
?>