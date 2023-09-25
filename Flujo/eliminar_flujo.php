<?php 
    include "../clases/conexion.php";
    include "./../Flujo/crud_Flujo.php";
    $crudflujo = new Crud();
    $id = $_POST['id'];


   $respuesta = $crudflujo->eliminarFlujo($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../flujo.php");
    }else{
        print_r($respuesta);
    }
?>