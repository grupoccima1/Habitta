<?php 
    include "../clases/conexion.php";
    include "./../AcumuladoSherpa/crudacumuladosherpa.php";
    $crudacumuladosherpa = new crudacumuladosherpa();
    $id = $_POST['id'];


   $respuesta = $crudacumuladosherpa->eliminarSherpa($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../acumuladosherpa.php");
    }else{
        print_r($respuesta);
    }
?>