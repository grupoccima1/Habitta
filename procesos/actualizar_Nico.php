<?php 
    include "../clases/Conexion.php";
    include "../clases/crud.php";

    $crud = new crud();
    $id = $_POST['id'];

    $datos = array(
        "OBSERVACION" => $_POST['observacion'],
        "LLAVE" => $_POST['llave'],
        "RAZON_SOCIAL" => $_POST['razon_social'],
        "FECHA" => $_POST['fecha'],
        "BENEFICIARIO" => $_POST['beneficiario'],
        "RFC" => $_POST['rfc'],
        "USO_CFDI" => $_POST['cfdi'],
        "ABONO" => $_POST['abono'],
        "CARGO" => $_POST['cargo'],
        "FACTURA" => $_POST['factura'],
        "REAL" => $_POST['real'],
        "MOTIVO" => $_POST['motivo'],
        "CATEGORIA" => $_POST['categoria'],
        "METODO_DE_PAGO" => $_POST['metodo_pago'],
        "SUBCATEGORIA" => $_POST['subcategoria'],
        "FLUJO" => $_POST['flujo'],
        "ORIGEN" => $_POST['origen'],
        "CLIENTE" => $_POST['cliente'],
        "CORREO" => $_POST['correo'],
        "TELEFONO" => $_POST['telefono']
    );

    $respuesta = $crud -> actualizarNico($id,$datos);

    if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        header("location:../Nico.php");
    }else {
        print_r($respuesta);
    }
?>