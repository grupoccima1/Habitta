<?php 
    include "./../clases/Conexion.php";
    include "./../DevolucionesClientes/cruddevolucionesclientes.php";

    $cruddevolucionesclientes = new cruddevolucionesclientes();

    $datos = array(
        "No" => $_POST['No'], 
        "FECHA" => $_POST['FECHA'],
        "CONDOMINIO" => $_POST['CONDOMINIO'],
        "LLAVE" => $_POST['LLAVE'],
        "CLIENTE" => $_POST['CLIENTE'], 
        "MONTO" => $_POST['MONTO'],
        "BANCO" => $_POST['BANCO'],
        "MOTIVO" => $_POST['MOTIVO'],
        "MONTO_DE_LA_OPERACION" => $_POST['MONTO_DE_LA_OPERACION'],
        "DESARROLLO" => $_POST['DESARROLLO'], 
        
       
        
    );

   $respuesta = $cruddevolucionesclientes->insertarDatos($datos);
?> 