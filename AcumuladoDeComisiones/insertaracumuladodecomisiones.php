<?php 
    include "./../clases/Conexion.php";
    include "./../AcumuladoDeComisiones/crudacumuladodecomisiones.php";

    $crudacumuladodecomisiones = new crudacumuladodecomisiones();

    $datos = array(
        "LLAVE" => $_POST['LLAVE'], 
        "FECHA_DE_INGRESO" => $_POST['FECHA_DE_INGRESO'],
        "LOTE" => $_POST['LOTE'],
        "CONDOMINIO" => $_POST['CONDOMINIO'],
        "CLUSTER" => $_POST['CLUSTER'], 
        "DESARROLLO" => $_POST['DESARROLLO'],
        "PUESTO" => $_POST['PUESTO'],
        "NOMBRE_CORRECTO" => $_POST['NOMBRE_CORRECTO'],
        "lTOTA_DE_LAVENTA" => $_POST['lTOTA_DE_LAVENTA'], 
        "ENGANCHE" => $_POST['ENGANCHE'],
        "PCOMISION" => $_POST['PCOMISION'],
        "TOTAL_COMISION" => $_POST['TOTAL_COMISION'],
        "DESCUENTO" => $_POST['DESCUENTO'], 
        "A_PAGAR_EXTERNOS" => $_POST['A_PAGAR_EXTERNOS'],
        "SUBTOTAL" => $_POST['SUBTOTAL'],
        "IVA" => $_POST['IVA'],
        "RETENCIONES_DE_IVA" => $_POST['RETENCIONES_DE_IVA'],
        "RETENCIONES_DE_ISR" => $_POST['RETENCIONES_DE_ISR'],
        "TOTAL" => $_POST['TOTAL'],
        "PAGO" => $_POST['PAGO'],
        "NOTAS" => $_POST['NOTAS'],
        "PAGADO" => $_POST['PAGADO'],
        "METODO_DE_PAGO" => $_POST['METODO_DE_PAGO'],
        "FECHA_PAGADA" => $_POST['FECHA_PAGADA'],
        "NOMBRE_CORRECTO" => $_POST['NOMBRE_CORRECTO'],
        "SEMANA_PAGADA" => $_POST['SEMANA_PAGADA'],
        "SEMANA" => $_POST['SEMANA'],
        "X_TIPO_DE_REGIMEN" => $_POST['X_TIPO_DE_REGIMEN'],
        "CUENTA" => $_POST['CUENTA'],
        "MOTIVO_DE_DESCUENTO" => $_POST['MOTIVO_DE_DESCUENTO'],
        "ESTATUS" => $_POST['ESTATUS'],
        "LOTE_ANTERIOR" => $_POST['LOTE_ANTERIOR'],
        "TIPO" => $_POST['TIPO'],
    );

   $respuesta = $crudacumuladodecomisiones->insertarDatos($datos);

   if ($respuesta->getInsertedId() > 0) {
    header("location:../acumuladoComisiones.php");
   }else {
    print_r($respuesta);
   }
   ?>