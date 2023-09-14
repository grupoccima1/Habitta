<?php
    include "../clases/Conexion.php";
    include "../clases/crud.php";

    $Crud = new Crud();
    $id = $_POST['id'];

    $datos = array(
        "MES" => $_POST['mes'], 
        "fecha_2020" => $_POST['fecha2020'],
        "fecha_2021" => $_POST['fecha2021'],
        "fecha_2022" => $_POST['fecha2022'],
        "fecha_2023" => $_POST['fecha2023'], 
        "fecha_2024" => $_POST['fecha2024'],
        "fecha_2025" => $_POST['fecha2025'],
        "fecha_2026" => $_POST['fecha2026'],
        "fecha_2027" => $_POST['fecha2027'], 
        "fecha_2028" => $_POST['fecha2028'],
        "fecha_2029" => $_POST['fecha2029'],
        "fecha_2030" => $_POST['fecha2030'],
        "fecha_2031" => $_POST['fecha2031'], 
        "fecha_2032" => $_POST['fecha2032'],
        "fecha_2033" => $_POST['fecha2033'],
        "fecha_2034" => $_POST['fecha2034'],
        "fecha_2035" => $_POST['fecha2035'],
        "fecha_2036" => $_POST['fecha2036'],
        "fecha_2037" => $_POST['fecha2037'],
        "fecha_general" => $_POST['fecha_general'],
        "DESIERTO" => $_POST['desierto'],
        "ESTEPA" => $_POST['estepa'],
        "PARAMO" => $_POST['paramo'],
        "TAIGA" => $_POST['taiga'],
        "BOSQUE" => $_POST['bosque'],
        "LOMAS" => $_POST['lomas'],
        "Total_general" => $_POST['total_general'],
        "SELVA" => $_POST['selva'],
        "LAGO" => $_POST['lago'],
        "MANGLAR" => $_POST['manglar']
    );

    $respuesta = $Crud -> actualizarProyeccionesFlujo($id, $datos);

    if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        header("location:../ProyeccionesFlujoHabitta.php");
    }else {
        print_r($respuesta);
    }
?>