<?php 
    include "../clases/conexion.php";
    include "./../ProyeccionHabitta/crudproyeccionhabitta.php";
    $crudproyeccionhabitta = new crudproyeccionhabitta();
    $id = $_POST['id'];


   $respuesta = $crudproyeccionhabitta->eliminarProyeccionHabitta($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../ProyeccionesFlujoHabitta.php");
    }else{
        print_r($respuesta);
    }
?>