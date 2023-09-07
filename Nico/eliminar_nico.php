<?php 
    include "../clases/conexion.php";
    include "./../Nico/crudnico.php";
    $crudnico = new crudnico();
    $id = $_POST['id'];


   $respuesta = $crudnico->eliminarNico($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../nico.php");
    }else{
        print_r($respuesta);
    }
?>