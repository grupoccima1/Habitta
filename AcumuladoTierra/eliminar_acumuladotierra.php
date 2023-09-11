<?php 
    include "../clases/conexion.php";
    include "./../AcumuladoTierra/crudacumuladotierra.php";
    $crudacumuladotierra = new crudacumuladotierra();
    $id = $_POST['id'];


   $respuesta = $crudacumuladotierra->eliminarAcumuladoTierra($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../AcumuladosBonosDeTierra.php");
    }else{
        print_r($respuesta);
    }
?>