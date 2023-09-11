<?php
    include "../clases/Conexion.php";
    include "../clases/crud.php";

    $Crud = new Crud();
    $id = $_POST['id'];

    $datos = array(
        "No" => $_POST['no'],
        "FECHA" => $_POST['fecha'],
        "CONDOMINIO" => $_POST['condominio'],
        "LLAVE" => $_POST['llave'],
        "CLIENTE" => $_POST['cliente'],
        "MONTO" => $_POST['monto'],
        "BANCO" => $_POST['banco'],
        "MOTIVO" => $_POST['motivo'],
        "MONTO_DE_LA_OPERACIÓN" => $_POST['monto_operacion'],
        "DESARROLLO" => $_POST['desarrollo']
    );

    $respuesta = $Crud -> actualizarDevolucionesClientes($id, $datos);

    if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        header("location:../Devoluciones_Clientes.php");
    }else{
        print_r($respuesta);
    }
?>