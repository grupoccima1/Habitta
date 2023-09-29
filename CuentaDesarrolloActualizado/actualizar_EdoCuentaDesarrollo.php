<?php
    include "../clases/Conexion.php";
    include "../CuentaDesarrolloActualizado/crudcuentapordesarrolloactualizado.php";

    $Crud = new crudcuentapordesarrolloactualizado();
    $id = $_POST['id'];

    $datos = array(
        "CONCEPTO" => $_POST['concepto'], 
        "PORTTO_BLANCO_CIM" => $_POST['pto_blanco_cim'],
        "LOMAS_DE_PORTTO_BLANCO" => $_POST['lomas_portto'],
        "PORTTO_BLANCO_BERNAL" => $_POST['pto_blanco_ber'],
        "VEREDAS_DE_LIRA" => $_POST['veredas'], 
        "PORTTO_BLANCO_SLP" => $_POST['pto_blanco_slp'],
        "GENERAL" => $_POST['general']
    );

    $respuesta = $Crud -> actualizarEdoCuentaDesarrollo($id, $datos);

    if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        header("location:../EDO_De_Cuenta_Por_Desarrollo_Actualizado.php");
    }else {
        print_r($respuesta);
    }
?>