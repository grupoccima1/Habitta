<?php
include "./../clases/Conexion.php";
include "./../AcumuladoDeComisiones/crudacumuladodecomisiones.php";

$crudacumuladodecomisiones = new crudacumuladodecomisiones();

$datos = array(
    "llave" => $_POST['LLAVE'],
    "fecha_de_ingreso" => $_POST['FECHA_DE_INGRESO'],
    "lote" => $_POST['LOTE'],
    "condominio" => $_POST['CONDOMINIO'],
    "cluster" => $_POST['CLUSTER'],
    "desarrollo" => $_POST['DESARROLLO'],
    "puesto" => $_POST['PUESTO'],
    "nombre_correcto" => $_POST['NOMBRE_CORRECTO'],
    "total_de_la_venta" => $_POST['lTOTA_DE_LAVENTA'],
    "enganche" => $_POST['ENGANCHE'],
    "p_comision" => $_POST['PCOMISION'],
    "total_comision" => $_POST['TOTAL_COMISION'],
    "descuento" => $_POST['DESCUENTO'],
    "desc" => $_POST['DESC'],
    "a_apagar_externos" => $_POST['A_PAGAR_EXTERNOS'],
    "sub_total" => $_POST['SUBTOTAL'],
    "iva" => $_POST['IVA'],
    "retenciones_de_iva" => $_POST['RETENCIONES_DE_IVA'],
    "retenciones_isr" => $_POST['RETENCIONES_DE_ISR'],
    "total" => $_POST['TOTAL'],
    "pago" => $_POST['PAGO'],
    "notas" => $_POST['NOTAS'],
    "pagado" => $_POST['PAGADO'],
    "metodo_de_pago" => $_POST['METODO_DE_PAGO'],
    "fecha_pagada" => $_POST['FECHA_PAGADA'],
    "semana_pagada" => $_POST['SEMANA_PAGADA'],
    "semana" => $_POST['SEMANA'],
    "x_tipo_de_regimen" => $_POST['X_TIPO_DE_REGIMEN'],
    "cuenta" => $_POST['CUENTA'],
    "motivo_descuento" => $_POST['MOTIVO_DE_DESCUENTO'],
    "estatus" => $_POST['ESTATUS'],
    "lote_anterior" => $_POST['LOTE_ANTERIOR'],
    "tipo" => $_POST['TIPO'],
);

try {
    $respuesta = $crudacumuladodecomisiones->insertarDatos($datos);

    if ($respuesta->success && $respuesta->insertedId > 0) {
        header("location:../acumuladoComisiones.php");
        exit; // Terminar el script después de redireccionar
    } else {
        throw new Exception('Error al insertar datos');
    }
} catch (Exception $e) {
    // Manejar la excepción (puedes loggearla, mostrar un mensaje al usuario, etc.)
    echo "Hubo un error: " . $e->getMessage();
}
?>
