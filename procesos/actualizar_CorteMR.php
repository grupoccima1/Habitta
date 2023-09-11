<?php
    include "../clases/Conexion.php";
    include "../clases/crud.php";

    $crud = new crud();
    $id = $_POST['id'];

    $datos = array(
        "RANGO_DE_MOROSIDAD" => $_POST['RANGO_DE_MOROSIDAD'],
        "NUM_DE_CLIENTES" => $_POST['NUM_DE_CLIENTES'],
        "CLÚSTER" => $_POST['CLÚSTER'],
        "DESARROLLO" => $_POST['DESARROLLO'],
        "CLIENTES_EN_MORA" => $_POST['CLIENTES_EN_MORA'],
        "CONTRATOS_FIRMADOS" => $_POST['CONTRATOS_FIRMADOS'],
        "PDE_MOROSIDAD" => $_POST['PDE_MOROSIDAD'],
        "VENCIDO" => $_POST['VENCIDO'],
        "INTERES_MORATORIO" => $_POST['INTERES_MORATORIO'],
        "LOTE" => $_POST['LOTE'],
        "CONDOMINIO" => $_POST['CONDOMINIO'],
        "CLIENTE" => $_POST['CLIENTE'],
        "ESTATUS" => $_POST['ESTATUS'],
        "TOTAL_VENCIDO" => $_POST['TOTAL_VENCIDO'],
        "INT_MORATORIO" => $_POST['INT_MORATORIO'],
        "enero_2020" => $_POST['enero_2020'],
        "febrero_2020" => $_POST['febrero_2020'],
        "marzo_2020" => $_POST['marzo_2020'],
        "abril_2020" => $_POST['abril_2020'],
        "mayo_2020" => $_POST['mayo_2020'],
        "junio_2020" => $_POST['junio_2020'],
        "julio_2020" => $_POST['julio_2020'],
        "agosto_2020" => $_POST['agosto_2020'],
        "septiembre_2020" => $_POST['septiembre_2020'],
        "octubre_2020" => $_POST['octubre_2020'],
        "noviembre_2020" => $_POST['noviembre_2020'],
        "diciembre_2020" => $_POST['diciembre_2020'],
        "enero_2021" => $_POST['enero_2021'],
        "febrero_2021" => $_POST['febrero_2021'],
        "marzo_2021" => $_POST['marzo_2021'],
        "abril_2021" => $_POST['abril_2021'],
        "mayo_2021" => $_POST['mayo_2021'],
        "junio_2021" => $_POST['junio_2021'],
        "julio_2021" => $_POST['julio_2021'],
        "agosto_2021" => $_POST['agosto_2021'],
        "septiembre_2021" => $_POST['septiembre_2021'],
        "octubre_2021" => $_POST['octubre_2021'],
        "noviembre_2021" => $_POST['noviembre_2021'],
        "diciembre_2021" => $_POST['diciembre_2021'],
        "enero_2022" => $_POST['enero_2022'],
        "febrero_2022" => $_POST['febrero_2022'],
        "marzo_2022" => $_POST['marzo_2022'],
        "abril_2022" => $_POST['abril_2022'],
        "mayo_2022" => $_POST['mayo_2022'],
        "junio_2022" => $_POST['junio_2022'],
        "julio_2022" => $_POST['julio_2022'],
        "agosto_2022" => $_POST['agosto_2022'],
        "septiembre_2022" => $_POST['septiembre_2022'],
        "octubre_2022" => $_POST['octubre_2022'],
        "noviembre_2022" => $_POST['noviembre_2022'],
        "diciembre_2022" => $_POST['diciembre_2022'],
        "enero_2023" => $_POST['enero_2023'],
        "febrero_2023" => $_POST['febrero_2023'],
        "marzo_2023" => $_POST['marzo_2023'],
        "abril_2023" => $_POST['abril_2023'],
        "mayo_2023" => $_POST['mayo_2023'],
        "junio_2023" => $_POST['junio_2023'],
        "julio_2023" => $_POST['julio_2023'],
        "agosto_2023" => $_POST['agosto_2023'],
        "septiembre_2023" => $_POST['septiembre_2023'],
        "octubre_2023" => $_POST['octubre_2023'],
        "noviembre_2023" => $_POST['noviembre_2023'],
        "diciembre_2023" => $_POST['diciembre_2023']
    );


    $respuesta = $crud -> actualizarCorteMR($id,$datos);

    if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        header("location:../CorteMoraRango.php");
    }else {
        print_r($respuesta);
    }
?>