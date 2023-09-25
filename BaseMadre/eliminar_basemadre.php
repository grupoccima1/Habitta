<?php 
    include "../clases/conexion.php";
    include "./../BaseMadre/crud_BaseMadre.php";
    $crud = new crudbasemadre();
    $id = $_POST['id'];


   $respuesta = $crud->eliminarMadre($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../basemadre.php");
    }else{
        print_r($respuesta);
    }
?>