<?php 
    include "../clases/conexion.php";
    include "./../TableroDeResultados/crudtableroderesultados.php";
    $crudtableroderesultados = new crudtableroderesultados();
    $id = $_POST['id'];


   $respuesta = $crudtableroderesultados->eliminarTableroDeResultados($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../TableroDeResultados.php");
    }else{
        print_r($respuesta);
    }
?>