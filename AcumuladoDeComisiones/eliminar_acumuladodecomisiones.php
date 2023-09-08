<?php 
    include "../clases/conexion.php";
    include "./../AcumuladoDeComisiones/crudacumuladodecomisiones.php";
    $crudacumuladodecomisiones = new crudacumuladodecomisiones();
    $id = $_POST['id'];


   $respuesta = $crudacumuladodecomisiones->eliminaracumuladodecomisiones($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../acumuladoComisiones.php");
    }else{
        print_r($respuesta);
    }
?>