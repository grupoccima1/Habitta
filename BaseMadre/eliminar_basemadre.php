<?php 
    include "../clases/conexion.php";
    include "./../BaseMadre/crud_BaseMadre.php";
    $crudbasemadre = new crudbasemadre();
    $id = $_POST['id'];


   $respuesta = $crudbasemadre->eliminarMadre($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../basemadre.php");
    }else{
        print_r($respuesta);
    }
?>