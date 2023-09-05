<?php
    include "../clases/Conexion.php";
    include "./../Flujo/crud_Flujo.php";


    $crudflujo = new crudflujo();

    $datos = array(
        "CREAR_RECIBO" => $_POST['crear'], 
        "NOTAS" => $_POST['nota'],
        "ENVIADO" => $_POST['enviado'],
        "LLAVE" => $_POST['llave'],
        "BENEFICIARIO" => $_POST['beneficiario'], 
        "FACTURA" => $_POST['factura'],
        "FECHA" => $_POST['fecha'],
        "MOTIVO" => $_POST['motivo'],
        "CATEGORIA" => $_POST['categoria'], 
        "ORIGEN" => $_POST['origen'],
        "SUBCATEGORIA" => $_POST['subcategoria'],
        "MES" => $_POST['mes'],
        "AÑO" => $_POST['año'], 
        "FLUJO2" => $_POST['flujo2'],
        "LOTE" => $_POST['lote'],
        "CONDOMINIO" => $_POST['condominio'],
        "CLUSTER" => $_POST['cluster'],
        "DESARROLLO" => $_POST['desarrollo'],
        "CLIENTE" => $_POST['cliente'],
        "CORREO" => $_POST['correo'],
        "ER_MENSUALIDAD" => $_POST['er_mensualidad']
    );

    $respuesta = $crudflujo->insertarDatosFlujo($datos);

    if ($respuesta->getInsertedId() > 0) {
        header("location:../flujo.php");
    } else {
        print_r($respuesta);
   }
    

?>