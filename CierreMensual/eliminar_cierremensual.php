<?php 
    include "../clases/conexion.php";
    include "./../CierreMensual/crudcierremensual.php";
    $crudcierremensual = new crudcierremensual();
    $id = $_POST['id'];


   $respuesta = $crudcierremensual->eliminarCierreMensual($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../cierreMensualHabitta.php");
    }else{
        print_r($respuesta);
    }
?>