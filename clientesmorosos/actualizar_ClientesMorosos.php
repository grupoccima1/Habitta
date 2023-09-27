<?php
    include "../clases/Conexion.php";
    include "../clientesmorosos/crudclientesmorosos.php";

    $Crud = new crudclientesmorosos();
    $id = $_POST['id'];

    $datos = array(
        "CONTADOR" => $_POST['contador'],
        "LLAVE" => $_POST['llave'],
        "DESARROLLO" => $_POST['desarrollo'],
        "LOTE" => $_POST['lote'],
        "CONDOMINIO" => $_POST['condominio'],
        "CLÚSTER" => $_POST['cluster'],
        "FECHA" => $_POST['fecha'],
        "CLIENTE" => $_POST['cliente'],
        "PRECIO_DEL_LOTE" => $_POST['precio_lote'],
        "MONTO_MENS" => $_POST['monto_mens'],
        "MENSUALIDAD" => $_POST['mensualidad'],
        "INTERES" => $_POST['interes'],
        "TIPO_DE_INTES" => $_POST['tipo_interes'],
        "I_NEGOCIADO" => $_POST['int_neg'],
        "REAL" => $_POST['real'],
        "MENS_PAGADA" => $_POST['mens_pagada'],
        "MEN_ADEUDADA" => $_POST['mens_adeudada'],
        "FECHA_DE_ACUERDO" => $_POST['fecha_acuerdo'],
        "MEDIO" => $_POST['medio'],
        "PLAZOS" => $_POST['plazos'],
        "MONTO_POR_MES" => $_POST['monto_mes'],
        "INICIO" => $_POST['inicio'],
        "FIN" => $_POST['fin'],
        "ESTATUS_DE_INTERES" => $_POST['estatus_interes'],
        "COMENTARIO" => $_POST['comentario'],
        "NEGOCIADO" => $_POST['negociado'],
        "DEPARTAMENTO" => $_POST['departamento'],
        "AÑO" => $_POST['año']
    );

    $respuesta = $Crud -> actualizarClientesMorosos($id, $datos);

    if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        header("location:../clientesMorosos.php");
    }else {
        print_r($respuesta);
    }
?>