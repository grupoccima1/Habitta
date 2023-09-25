<?php 
    include "../clases/conexion.php";
    include "./../clientesmorosos/crudclientesmorosos.php";
    $crudclientesmorosos = new crudclientesmorosos();
    $id = $_POST['id'];


   $respuesta = $crudclientesmorosos->eliminarClientesMorosos($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../clientesMorosos.php");
    }else{
        print_r($respuesta);
    }
?>