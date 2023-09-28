<?php
    include "../clases/Conexion.php";
    include "../ComisionesInternas/crudcomisionesinternas.php";

    $Crud = new crudcomisionesinternas();
    $id = $_POST['id'];

    $datos = array(
        "LLAVE" => $_POST['llave'],
        "NOMBRE_DEL_CLIENTE" => $_POST['nombre_cliente'],
        "FECHA_DE_APARTADO" => $_POST['fecha_apartado'],
        "FECHA_ENTREGA_DE_CONTRATO" => $_POST['fecha_entrega'],
        "IMPORTE_A_COMISIONAR" => $_POST['importe_comision'],
        "PCOMISION" => $_POST['pcomision'],
        "IMPORTE" => $_POST['importe']
    );

    $respuesta = $Crud -> actualizarComisionesInternas($id, $datos);

    if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        header("location:../Hab_Formato_Comisiones_Internas.php");
    }else{
        print_r($respuesta);
    }
?>