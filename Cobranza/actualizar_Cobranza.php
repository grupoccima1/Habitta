<?php
    include "../clases/Conexion.php";
    include "./../Cobranza/crudcobranza.php";

    $crudcobranza = new crudcobranza();
    $id = $_POST['id'];

    $datos = array(
        "FECHA" => $_POST['FECHA'], 
        "MOTIVO" => $_POST['MOTIVO'],
        "FLUJO" => $_POST['FLUJO'],
        "FECHA_1" => $_POST['FECHA_1'],
        "DESCRIPCION" => $_POST['DESCRIPCION'], 
        "APAGAR" => $_POST['APAGAR'],
        "PAGO" => $_POST['PAGO']
    );

    $respuesta = $crudcobranza -> actualizarCobranza($id, $datos);

    if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        header("location:../cobranza.php");
    }else{
        print_r($respuesta);
    }
?>