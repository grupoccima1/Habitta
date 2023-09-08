<?php 
    include "../clases/conexion.php";
    include "./../Comision2022/crudcomision2022.php";
    $crudcomision2022 = new crudcomision2022();
    $id = $_POST['id'];


   $respuesta = $crudcomision2022->eliminarComision2022($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../comisiones2022.php");
    }else{
        print_r($respuesta);
    }
?>