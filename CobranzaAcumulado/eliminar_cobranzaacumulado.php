<?php 
    include "../clases/conexion.php";
    include "./../CobranzaAcumulado/crudcobranzaacumulado.php";
    $crudcobranzaacumulado = new crudcobranzaacumulado();
    $id = $_POST['id'];


   $respuesta = $crudcobranzaacumulado->eliminarCobranzaAcumulado($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../Cobranza_Acumulado.php");
    }else{
        print_r($respuesta);
    }
?>