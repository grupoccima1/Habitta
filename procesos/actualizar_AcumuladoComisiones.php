<?php 
    include "../clases/Conexion.php";
    include "../clases/crud.php";

    $Crud = new Crud();
    $id = $_POST['id']; 

    $datos=Array(
        "LLAVE" => $_POST['llave'],
        "FECHA_DE_INGRESO" => $_POST['fecha_ingreso'],
        "LOTE" => $_POST['lote'],
        "CONDOMINIO" => $_POST['condominio'],
        "CLUSTER" => $_POST['cluster'],
        "DESARROLLO" => $_POST['desarrollo'],
        "PUESTO" => $_POST['puesto'],
        "NOMBRE_CORRECTO" => $_POST['nombre_correcto'],
        "lTOTA_DE_LAVENTA" => $_POST['total_venta'],
        "ENGANCHE" => $_POST['enganche'],
        "PCOMISION" => $_POST['pcomision'],
        "TOTAL_COMISION" => $_POST['total_comision'],
        "DESCUENTO" => $_POST['descuento'],
        "DESC" => $_POST['desc'],
        "APAGAR_EXTERNOS" => $_POST['pagar_externos'],
        "SUBTOTAL" => $_POST['subtotal'],
        "IVA" => $_POST['iva'],
        "RETENCIONES_DE_IVA" => $_POST['retenciones_iva'],
        "RETENCIONES_ISR" => $_POST['retenciones_isr'],
        "TOTAL" => $_POST['total'],
        "PAGO" => $_POST['pago'],
        "NOTAS" => $_POST['notas'],
        "PAGADO" => $_POST['pagado'],
        "METODO_DE_PAGO" => $_POST['metodo_pago'],
        "FECHA_PAGADA" => $_POST['fecha_pagada'],
        "SEMANA_PAGADA" => $_POST['semana_pagada'],
        "SEMANA" => $_POST['semana'],
        "X_TIPO_DE_REGIMEN" => $_POST['tipo_regimen'],
        "CUENTA" => $_POST['cuenta'],
        "MOTIVO_DE_DESCUENTO" => $_POST['motivo_desc'],
        "ESTATUS" => $_POST['estatus'],
        "LOTE_ANTERIOR" => $_POST['lote_anterior'],
        "TIPO" => $_POST['tipo']
    );

    $respuesta = $Crud ->actualizarAcumuladoComisiones($id, $datos);

    if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        header("location:../acumuladoComisiones.php");
    }else {
        print_r($respuesta);
    }
?>