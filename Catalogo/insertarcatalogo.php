<?php 
    include "./../clases/Conexion.php";
    include "./../Catalogo/crudcatalogo.php";

    $crudcatalogo = new crudcatalogo();

    $datos = array(
        "LLAVE" => $_POST['LLAVE'], 
        "PORCENT1" => $_POST['PORCENT1'],
        "PORCENT2" => $_POST['PORCENT2'],
        "PORCENT3" => $_POST['PORCENT3']
    );

   $respuesta = $crudcatalogo->insertarDatos($datos);

   if ($respuesta->getInsertedId() > 0) {
    header("location:../catalogo.php");
   }else{
    print_r($respuesta);
   }
   
   ?>