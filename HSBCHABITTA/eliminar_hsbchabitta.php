<?php 
    include "../clases/conexion.php";
    include "./../HSBCHABITTA/crudhsbchabitta.php";
    $crudhsbchabitta = new crudhsbchabitta();
    $id = $_POST['id'];


   $respuesta = $crudhsbchabitta->eliminarHSBCHABITTA($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../hsbch.php");
    }else{
        print_r($respuesta);
    }
?>