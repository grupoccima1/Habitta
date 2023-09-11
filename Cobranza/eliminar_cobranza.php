<?php 
    include "../clases/conexion.php";
    include "./../Cobranza/crudcobranza.php";
    $crudcobranza = new crudcobranza();
    $id = $_POST['id'];


   $respuesta = $crudcobranza->eliminarCobranza($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../cobranza.php");
    }else{
        print_r($respuesta);
    }
?>