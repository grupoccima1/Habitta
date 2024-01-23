<?php
include "./../clases/Conexion.php";
include "./../AcumuladoSherpa/crudacumuladosherpa.php";

$crudacumuladosherpa = new crudacumuladosherpa();

$datos = array(
    "llave" => $_POST['llave'],
    "fecha_de_ingreso" => $_POST['fecha_de_ingreso'],
    "lote" => $_POST['lote'],
    "condominio" => $_POST['condominio'],
    "cluster" => $_POST['cluster'],
    "desarrollo" => $_POST['desarrollo'],
    "puesto" => $_POST['puesto'],
    "comisionista" => $_POST['comisionista'],
    "total_de_la_venta" => $_POST['total_de_la_venta'],
    "enganche" => $_POST['enganche'],
    "p_comision" => $_POST['p_comision'],
    "total_comision" => $_POST['total_comision'],
    "descuento" => $_POST['descuento'],
    "desc" => $_POST['desc'],
    "a_pagar_externos" => $_POST['a_pagar_externos'],
    "subtotal" => $_POST['subtotal'],
    "iva" => $_POST['iva'],
    "retenciones_de_iva" => $_POST['retenciones_de_iva'],
    "retenciones_isr" => $_POST['retenciones_isr'],
    "total" => $_POST['total'],
    "pago" => $_POST['pago'],
    "notas" => $_POST['notas'],
    "pagado" => $_POST['pagado'],
    "metodo_de_pago" => $_POST['metodo_de_pago'],
    "fecha_pagada" => $_POST['fecha_pagada'],
    "nombre_correcto" => $_POST['nombre_correcto'],
    "semana_pagada" => $_POST['semana_pagada'],
    "semana" => $_POST['semana'],
    "x_tipo_de_regimen" => $_POST['x_tipo_de_regimen'],
    "cuenta" => $_POST['cuenta'],
    "motivo_de_descuento" => $_POST['motivo_de_descuento'],
    "estatus" => $_POST['estatus'],
    "lote_anterior" => $_POST['lote_anterior'],
);

try {
    $respuesta = $crudacumuladosherpa->insertarDatos($datos);

    if ($respuesta->success && $respuesta->insertedId > 0) {
        header("location:../acumuladosherpa.php");
        exit; // Terminar el script después de redireccionar
    } else {
        throw new Exception('Error al insertar datos');
    }
} catch (Exception $e) {
    // Puedes loggear la excepción o mostrar un mensaje más amigable al usuario
    error_log("Hubo un error: " . $e->getMessage(), 0);
    echo "Hubo un error al procesar la solicitud. Por favor, inténtalo de nuevo más tarde.";
}
?>
