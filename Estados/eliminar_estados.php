<?php 
    include "../clases/conexion.php";
    include "./../Estados/crudestados.php";
    $crudestados = new crudestados();
    $id = $_POST['id'];


   $respuesta = $crudestados->eliminarEstados($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../estados.php");
    }else{
        print_r($respuesta);
    }
?>