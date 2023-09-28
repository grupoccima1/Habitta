<?php 
    include "./../clases/Conexion.php";
    include "./../ComisionesInternas/crudcomisionesinternas.php";

    $crudcomisionesinternas = new crudcomisionesinternas();

    $datos = array(
        "LLAVE" => $_POST['LLAVE'], 
        "NOMBRE_DEL_CLIENTE" => $_POST['NOMBRE_DEL_CLIENTE'],
        "FECHA_DE_APARTADO" => $_POST['FECHA_DE_APARTADO'],
        "FECHA_ENTREGA_DE_CONTRATO" => $_POST['FECHA_ENTREGA_DE_CONTRATO'],
        "IMPORTE_A_COMISIONAR" => $_POST['IMPORTE_A_COMISIONAR'], 
        "PCOMISION" => $_POST['PCOMISION'],
        "IMPORTE" => $_POST['IMPORTE']    
    );

   $respuesta = $crudcomisionesinternas->insertarDatos($datos);

   if ($respuesta->getInsertedId() > 0) {
    header("location:../Hab_Formato_Comisiones_Internas.php");
   }else{
    print_r($respuesta);
   }
?>