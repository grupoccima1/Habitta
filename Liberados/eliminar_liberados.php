<?php 
    include "../clases/conexion.php";
    include "./../Liberados/crud_liberados.php";
    $crudliberados = new crudliberados();
    $id = $_POST['id'];


   $respuesta = $crudliberados->eliminarLiberados($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../liberados.php");
    }else{
        print_r($respuesta);
    }
?>