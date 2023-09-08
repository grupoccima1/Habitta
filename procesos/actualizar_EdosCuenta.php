<?php
    include "../clases/Conexion.php";
    include "../clases/crud.php";

    $crud = new crud();
    $id = $_POST['id'];

    $datos = array(
        "CONCEPTO" => $_POST['concepto'],
        "PORTTO_BLANCO_CIM" => $_POST['pto_blanco_cim'],
        "LOMAS_DE_PORTTO_BLANCO" => $_POST['lomas_pto_blanco'],
        "PORTTO_BLANCO_BERNAL" => $_POST['pto_blanco_bernal'],
        "VEREDAS_DE_LIRA" => $_POST['veredas_lira'],
        "PORTTO_BLANCO_SLP" => $_POST['pto_blanco_slp'],
        "GENERAL" => $_POST['general']
    );

    $respuesta = $crud -> actualizarEdosCuenta($id,$datos);

    if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        header("location:../estadodecuenta.php");
    }else {
        print_r($respuesta);
    }
?>