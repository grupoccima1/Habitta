<?php 
    include "../clases/conexion.php";
    include "./../HSBCLOMAS/crudhsbclomas.php";
    $crudhsbclomas = new crudhsbclomas();
    $id = $_POST['id'];


   $respuesta = $crudhsbclomas->eliminarHSBCLOMAS($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../hsbcl.php");
    }else{
        print_r($respuesta);
    }
?>