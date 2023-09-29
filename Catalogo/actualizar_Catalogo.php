<?php
    include "../clases/Conexion.php";
    include "./../Catalogo/crudcatalogo.php";

    $crudcatalogo = new crudcatalogo();
    $id = $_POST['id'];

    $datos = array(
        "LLAVE" => $_POST['LLAVE'], 
        "PORCENT1" => $_POST['PORCENT1'],
        "PORCENT2" => $_POST['PORCENT2'],
        "PORCENT3" => $_POST['PORCENT3']
    );

    $respuesta = $crudcatalogo -> actualizarcatalogo($id, $datos);

    if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        header("location:../catalogo.php");
    }else{
        print_r($respuesta);
    }
?>