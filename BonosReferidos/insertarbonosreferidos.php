<?php 
    include "./../clases/Conexion.php";
    include "./../BonosReferidos/crudbonosreferidos.php";

    $crudbonosreferidos = new crudbonosreferidos();

    $datos = array(
        "NÚMERO" => $_POST['NÚMERO'], 
        "CONDOMIO" => $_POST['CONDOMIO'],
        "CLUSTER" => $_POST['CLUSTER'],
        "CLIENTE" => $_POST['CLIENTE'],
        "PROMOCIÓN" => $_POST['PROMOCIÓN'], 
        "ESTATUS_DÍAS" => $_POST['ESTATUS_DÍAS'],
        "INICIO_DE_CORRIDA_CONTRATO_O_SIMULADOR" => $_POST['INICIO_DE_CORRIDA_CONTRATO_O_SIMULADOR'],
        "Columna1" => $_POST['Columna1'],
        "APLICADO" => $_POST['APLICADO'], 
        "APARTADO" => $_POST['APARTADO'],
        "FECHAS_DE_PAGO" => $_POST['FECHAS_DE_PAGO'],
        "ENGANCHE" => $_POST['ENGANCHE'],
        "TOTAL_PAGADO" => $_POST['TOTAL_PAGADO'], 
        "Columna2" => $_POST['Columna2'],
        "Columna3" => $_POST['Columna3'],
        "Columna4" => $_POST['Columna4'],
        "Columna5" => $_POST['Columna5'],
        "Columna6" => $_POST['Columna6'],
        "No" => $_POST['No'],
        "STATUS" => $_POST['STATUS'],
        "SÍ_NO" => $_POST['SÍ_NO'],
        "empty_L" => $_POST['empty_L'],
        "empty_A" => $_POST['empty_A'],
        "CONDOMINIO" => $_POST['CONDOMINIO'],
        "CLÚSTER" => $_POST['CLÚSTER'],
        "BONO" => $_POST['BONO'],
        "LOTE_numero1" => $_POST['LOTE_numero1'],
        "CONDOMINIO_numero1" => $_POST['CONDOMINIO_numero1'],
        "CLÚSTER_numero1" => $_POST['CLÚSTER_numero1'],
        "CLIENTE_numero1" => $_POST['CLIENTE_numero1'],
        "NOTA" => $_POST['NOTA'] 
    );

   $respuesta = $crudbonosreferidos->insertarDatos($datos);

   if ($respuesta->getInsertedId() > 0) {
    header("location:../BonosReferidos.php");
   }else {
    print_r($respuesta);
   }
   ?>