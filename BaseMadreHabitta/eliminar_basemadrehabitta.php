<?php 
    include "../clases/conexion.php";
    include "./../BaseMadreHabitta/crudbasemadrehabitta.php";
    $crudbasemadrehabitta = new crudbasemadrehabitta();
    $id = $_POST['id'];


   $respuesta = $crudbasemadrehabitta->eliminarBaseMadreHabitta($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../basemadrehabitta.php");
    }else{
        print_r($respuesta);
    }
?>