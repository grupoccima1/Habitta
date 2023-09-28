<?php
    include "../clases/Conexion.php";
    include "../BonosReferidos/crudbonosreferidos.php";

    $Crud = new crudbonosreferidos();
    $id = $_POST['id'];

    $datos = array(
        "NÚMERO" => $_POST['numero'], 
        "CONDOMIO" => $_POST['condomio'],
        "CLUSTER" => $_POST['cluster'],
        "CLIENTE" => $_POST['cliente'],
        "PROMOCIÓN" => $_POST['promocion'], 
        "ESTATUS_DÍAS" => $_POST['estatus_dias'],
        "INICIO_DE_CORRIDA_CONTRATO_O_SIMULADOR" => $_POST['inicio_corrida'],
        "Columna1" => $_POST['columna1'],
        "APLICADO" => $_POST['aplicado'], 
        "APARTADO" => $_POST['apartado'],
        "FECHAS_DE_PAGO" => $_POST['fecha_pago'],
        "ENGANCHE" => $_POST['enganche'],
        "TOTAL_PAGADO" => $_POST['total_pagado'], 
        "Columna2" => $_POST['columna2'],
        "Columna3" => $_POST['columna3'],
        "Columna4" => $_POST['columna4'],
        "Columna5" => $_POST['columna5'],
        "Columna6" => $_POST['columna6'],
        "STATUS" => $_POST['estatus'],
        "SÍ_NO" => $_POST['si_no'],
        "CONDOMINIO" => $_POST['condominio'],
        "CLÚSTER" => $_POST['cluster1'],
        "BONO" => $_POST['bono'],
        "LOTE_numero1" => $_POST['lote_num1'],
        "CONDOMINIO_numero1" => $_POST['condo_num1'],
        "CLÚSTER_numero1" => $_POST['cluster_num1'],
        "CLIENTE_numero1" => $_POST['cliente_num1'],
        "NOTA" => $_POST['nota']
    );

   $respuesta = $Crud->actualizarBonosReferidos($id, $datos);

   if($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
    header("location:../BonosReferidos.php");
    }else {
    print_r($respuesta);
    }
    
?>