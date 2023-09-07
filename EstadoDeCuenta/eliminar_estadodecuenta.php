<?php 
    include "../clases/conexion.php";
    include "./../EstadoDeCuenta/crudestadodecuenta.php";
    $crudestadodecuenta = new crudestadodecuenta();
    $id = $_POST['id'];


   $respuesta = $crudestadodecuenta->eliminarEstadoDeCuenta($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../estadodecuenta.php");
    }else{
        print_r($respuesta);
    }
?>