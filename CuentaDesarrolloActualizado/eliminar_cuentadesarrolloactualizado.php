<?php 
    include "../clases/conexion.php";
    include "./../CuentaDesarrolloActualizado/crudcuentapordesarrolloactualizado.php";
    $crudcuentapordesarrolloactualizado = new crudcuentapordesarrolloactualizado();
    $id = $_POST['id'];


   $respuesta = $crudcuentapordesarrolloactualizado->eliminarcuentadesarrolloactualizado($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../EDO_DE_Cuenta_Por_Desarrollo_Actualizado.php");
    }else{
        print_r($respuesta);
    }
?>