<?php 
    include "../clases/conexion.php";
    include "./../CorteMR/crudcortemr.php";
    $crudcortemr = new crudcortemr();
    $id = $_POST['id'];


   $respuesta = $crudcortemr->eliminarCorteMR($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../CorteMoraRango.php");
    }else{
        print_r($respuesta);
    }
?>