<?php 
    include "../clases/conexion.php";
    include "../clases/crud.php";
    $crud = new Crud();
    $id = $_POST['id'];


    $respuesta = $crud->eliminarMadre($id);

    if($respuesta->getDeletedCount()> 0){
        header("location:../basemadre.php");
    }else{
        print_r($respuesta);
    }
?>