<?php 
    include "../clases/conexion.php";
    include "./../Comisiones2021/crudcomisiones2021.php";
    $crudcomisiones2021 = new crudcomisiones2021();
    $id = $_POST['id'];


   $respuesta = $crudcomisiones2021->eliminarComisiones2021($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../comisiones2021.php");
    }else{
        print_r($respuesta);
    }
?>