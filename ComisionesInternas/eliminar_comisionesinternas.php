<?php 
    include "../clases/conexion.php";
    include "./../ComisionesInternas/crudcomisionesinternas.php";
    $crudcomisionesinternas = new crudcomisionesinternas();
    $id = $_POST['id'];


   $respuesta = $crudcomisionesinternas->eliminarComisionesInternas($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../Hab_Formato_Comisiones_Internas.php");
    }else{
        print_r($respuesta);
    }
?>