<?php 
    include "../clases/conexion.php";
    include "./../BBVA/crudbbva.php";
    $crudbbva = new crudbbva();
    $id = $_POST['id'];


   $respuesta = $crudbbva->eliminarBBVA($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../bbva.php");
    }else{
        print_r($respuesta);
    }
?>