<?php 
    include "./../clases/Conexion.php";
    include "./../Listado/crudlistado.php";

    $crudlistado = new crudlistado();

    $datos = array(
        "LLAVE" => $_POST['LLAVE'], 
        "MES" => $_POST['MES'],
        "AÑO" => $_POST['AÑO'],
        "MONTO" => $_POST['MONTO'],
        "LLAVE_2" => $_POST['LLAVE_2'], 
     
       
        
    );

   $respuesta = $crudlistado->insertarDatos($datos);

   
    

?>