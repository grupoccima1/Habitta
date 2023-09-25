<?php 
    include "../clases/conexion.php";
    include "./../Listado/crudlistado.php";
    $crudlistado = new crudlistado();
    $id = $_POST['id'];


   $respuesta = $crudlistado->eliminarListado($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../listado.php");
    }else{
        print_r($respuesta);
    }
?>