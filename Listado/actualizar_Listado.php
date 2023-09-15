<?php
    include "../clases/Conexion.php";
    include "./../Listado/crudlistado.php";

    $crudlistado = new crudlistado();
    $id = $_POST['id'];

    $datos = array(
        "LLAVE" => $_POST['LLAVE'], 
        "MES" => $_POST['MES'],
        "AÑO" => $_POST['AÑO'],
        "MONTO" => $_POST['MONTO'],
        "LLAVE_2" => $_POST['LLAVE_2'], 
    );

    $respuesta = $crudlistado -> actualizarListado($id, $datos);

    if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        header("location:../listado.php");
    }else{
        print_r($respuesta);
    }
?>