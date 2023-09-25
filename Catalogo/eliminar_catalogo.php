<?php 
    include "../clases/conexion.php";
    include "./../Catalogo/crudcatalogo.php";
    $crudcatalogo = new crudcatalogo();
    $id = $_POST['id'];


   $respuesta = $crudcatalogo->eliminarCatalogo($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../catalogo.php");
    }else{
        print_r($respuesta);
    }
?>