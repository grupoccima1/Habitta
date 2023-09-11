<?php 
    include "../clases/conexion.php";
    include "./../BonosReferidos/crudbonosreferidos.php";
    $crudbonosreferidos = new crudbonosreferidos();
    $id = $_POST['id'];


   $respuesta = $crudbonosreferidos->eliminarBonosReferidos($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../BonosReferidos.php");
    }else{
        print_r($respuesta);
    }
?>