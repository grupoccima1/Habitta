<?php 
    include "../clases/conexion.php";
    include "./../DevolucionesClientes/cruddevolucionesclientes.php";
    $cruddevolucionesclientes = new cruddevolucionesclientes();
    $id = $_POST['id'];


   $respuesta = $cruddevolucionesclientes->eliminarDevolucionesClientes($id);

 
    if($respuesta->getDeletedCount()> 0){
        header("location:../Devoluciones_clientes.php");
    }else{
        print_r($respuesta);
    }
?>