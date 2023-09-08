<?php 
    include "../clases/conexion.php";
    include "./../Comision2020/crud_Comisiones2020.php";
    $crudcomisiones2020 = new crudcomisiones2020();
    $id = $_POST['id'];


   $respuesta = $crudcomisiones2020->eliminarComision2020($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../comisiones2020.php");
    }else{
        print_r($respuesta);
    }
?>