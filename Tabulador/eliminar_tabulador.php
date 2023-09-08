<?php 
    include "../clases/conexion.php";
    include "./../Tabulador/crud_Tabulador.php";
    $crudtabulador = new crudtabulador();
    $id = $_POST['id'];


   $respuesta = $crudtabulador->eliminarTabulador($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../tabulador.php");
    }else{
        print_r($respuesta);
    }
?>