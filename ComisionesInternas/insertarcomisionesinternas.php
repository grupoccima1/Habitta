<?php 
    include "./../clases/Conexion.php";
    include "./../ComisionesInternas/crudcomisionesinternas.php";

    $crudcomisionesinternas = new crudcomisionesinternas();

    $datos = array(
        "LLAVE" => $_POST['LLAVE'], 
        "NOMBRE_DEL_CLIENTE" => $_POST['NOMBRE_DEL_CLIENTE'],
        "FECHA_DE_APARATADO" => $_POST['FECHA_DE_APARATADO'],
        "FECHA_ENTREGA_DE_CONTRATO" => $_POST['FECHA_ENTREGA_DE_CONTRATO'],
        "IMPORTE_A_COMISIONAR" => $_POST['IMPORTE_A_COMISIONAR'], 
        "PCOMISION" => $_POST['PCOMISION'],
        "IMPORTE" => $_POST['IMPORTE'],
        
       
        
    );

   $respuesta = $crudcomisionesinternas->insertarDatos($datos);

   
    

?>