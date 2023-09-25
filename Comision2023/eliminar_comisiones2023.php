<?php 
    include "../clases/conexion.php";
    include "./../Comision2023/crudcomision2023.php";
    $crudcomision2023 = new crudcomision2023();
    $id = $_POST['id'];


   $respuesta = $crudcomision2023->eliminarComision2023($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../comisiones2023.php");
    }else{
        print_r($respuesta);
    }
?>