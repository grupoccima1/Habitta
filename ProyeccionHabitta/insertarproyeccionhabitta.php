<?php 
    include "./../clases/Conexion.php";
    include "./../ProyeccionHabitta/crudproyeccionhabitta.php";

    $crudporyeccionhabitta = new crudproyeccionhabitta();

    $datos = array(
        "MES" => $_POST['MES'], 
        "fecha_2020" => $_POST['fecha_2020'],
        "fecha_2021" => $_POST['fecha_2021'],
        "fecha_2022" => $_POST['fecha_2022'],
        "fecha_2023" => $_POST['fecha_2023'], 
        "fecha_2024" => $_POST['fecha_2024'],
        "fecha_2025" => $_POST['fecha_2025'],
        "fecha_2026" => $_POST['fecha_2026'],
        "fecha_2027" => $_POST['fecha_2027'], 
        "fecha_2028" => $_POST['fecha_2028'],
        "fecha_2029" => $_POST['fecha_2029'],
        "fecha_2030" => $_POST['fecha_2030'],
        "fecha_2031" => $_POST['fecha_2031'], 
        "fecha_2032" => $_POST['fecha_2032'],
        "fecha_2033" => $_POST['fecha_2033'],
        "fecha_2024" => $_POST['fecha_2024'],
        "fecha_2025" => $_POST['fecha_2025'],
        "fecha_2026" => $_POST['fecha_2026'],
        "fecha_2027" => $_POST['fecha_2027'],
        "fecha_2028" => $_POST['fecha_2028'],
        "fecha_2029" => $_POST['fecha_2029'],
        "fecha_2030" => $_POST['fecha_2030'],
        "fecha_2031" => $_POST['fecha_2031'],
        "fecha_2032" => $_POST['fecha_2032'],
        "fecha_2033" => $_POST['fecha_2033'],
        "fecha_2034" => $_POST['fecha_2034'],
        "fecha_2035" => $_POST['fecha_2035'],
        "fecha_2036" => $_POST['fecha_2036'],
        "fecha_2037" => $_POST['fecha_2037'],
        "fecha_general" => $_POST['fecha_general'],
        "DESIERTO" => $_POST['DESIERTO'],
        "ESTEPA" => $_POST['ESTEPA'],
        "PARAMO" => $_POST['PARAMO'],
        "TAIGA" => $_POST['TAIGA'],
        "BOSQUE" => $_POST['BOSQUE'],
        "LOMAS" => $_POST['LOMAS'],
        "Total_general" => $_POST['Total_general'],
        "SELVA" => $_POST['SELVA'],
        "LAGO" => $_POST['LAGO'],
        "MANGLAR" => $_POST['MANGLAR'],
        "Fecha_2020" => $_POST['Fecha_2020'],
        "Fecha_2021" => $_POST['Fecha_2021'],
        "Fecha_2022" => $_POST['Fecha_2022'],
        "Fecha_2023" => $_POST['Fecha_2023'],
        "Fecha_2024" => $_POST['Fecha_2024'],
        "Fecha_2025" => $_POST['Fecha_2025'],
        "Fecha_2026" => $_POST['Fecha_2026'],
        "Fecha_2027" => $_POST['Fecha_2027'],
        "Fecha_2028" => $_POST['Fecha_2028'],
        "Fecha_2029" => $_POST['Fecha_2029'],
        "Fecha_2030" => $_POST['Fecha_2030'],
        "Feha_2021" => $_POST['Feha_2021']  
    );

   $respuesta = $crudporyeccionhabitta->insertarDatos($datos);

   if ($respuesta->getInsertedId() > 0) {
    header("location:../ProyeccionesFlujoHabitta.php");
   }else {
    print_r($respuesta);
   }

   ?>