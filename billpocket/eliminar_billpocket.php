<?php 
    include "../clases/conexion.php";
    include "./../billpocket/crudbillpocket.php";
    $crudbillpocket = new crudbillpocket();
    $id = $_POST['id'];


   $respuesta = $crudbillpocket->eliminarbillpocket($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../bilpocket.php");
    }else{
        print_r($respuesta);
    }
?>