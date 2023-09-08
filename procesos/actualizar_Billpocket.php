<?php
    include "../clases/Conexion.php";
    include "../clases/crud.php";

    $Crud = new Crud();
    $id = $_POST['id'];

    $datos = array(
        "NOMBRE_DE_CLIENTE" => $_POST['nombre_cliente'],
        "DEPOSITO_DE_CLIENTE" => $_POST['deposito_cliente'],
        "COMISION" => $_POST['comision'],
        "DEPOSITO_EN_BANCO" => $_POST['deposito_banco'],
        "TIPO_DE_PAGO" => $_POST['tipo_pago'],
        "FOLIO" => $_POST['folio'],
        "TIPO_DE_TARJETA" => $_POST['tipo_tarjeta'],
        "TPVAFILIADA" => $_POST['tpva'],
        "FECHADE_DEPOSITO" => $_POST['fecha_deposito'],
        "AÑO" => $_POST['año'],
        "BANCO" => $_POST['banco']
    );

    $respuesta = $Crud -> actualizarBillpocket($id, $datos);

    if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        header("location:../bilpocket.php");
    }else{
        print_r($respuesta);
    }
?>