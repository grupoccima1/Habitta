<?php 
    include "./../clases/Conexion.php";
    include "./../CuentaDesarrolloActualizado/crudcuentapordesarrolloactualizado.php";

    $crudcuentapordesarrolloactualizado = new crudcuentapordesarrolloactualizado();

    $datos = array(
        "CONCEPTO" => $_POST['CONCEPTO'], 
        "PORTTO_BLANCO_CIM" => $_POST['PORTTO_BLANCO_CIM'],
        "LOMAS_DE_PORTTO_BLANCO" => $_POST['LOMAS_DE_PORTTO_BLANCO'],
        "PORTTO_BLANCO_BERNAL" => $_POST['PORTTO_BLANCO_BERNAL'],
        "VEREDAS_DE_LIRA" => $_POST['VEREDAS_DE_LIRA'], 
        "PORTTO_BLANCO_SLP" => $_POST['PORTTO_BLANCO_SLP'],
        "GENERAL" => $_POST['GENERAL'],
       
       
        
    );

   $respuesta = $crudcuentapordesarrolloactualizado->insertarDatos($datos);

   

?>