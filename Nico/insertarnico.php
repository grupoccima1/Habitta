<?php 
    include "./../clases/Conexion.php";
    include "./../Nico/crudnico.php";

    $crudnico = new crudnico();

    $datos = array(
        "OBSERVACION" => $_POST['OBSERVACION'], 
        "LLAVE" => $_POST['LLAVE'],
        "RAZONSOCIAL" => $_POST['RAZONSOCIAL'],
        "FECHA" => $_POST['FECHA'],
        "BENEFICIARIO" => $_POST['BENEFICIARIO'], 
        "RFC" => $_POST['RFC'],
        "USOCFDI" => $_POST['USOCFDI'],
        "ABONO" => $_POST['ABONO'],
        "CARGO" => $_POST['CARGO'], 
        "CARGO" => $_POST['CARGO'],
        "FACTURA" => $_POST['FACTURA'],
        "REAL" => $_POST['REAL'],
        "MOTIVO" => $_POST['MOTIVO'], 
        "CATEGORIA" => $_POST['CATEGORIA'],
        "METODODEPAGO" => $_POST['METODODEPAGO'],
        "SUBCATEGORIA" => $_POST['SUBCATEGORIA'],
        "FLUJO" => $_POST['FLUJO'],
        "ORIGEN" => $_POST['ORIGEN'],
        "CLIENTE" => $_POST['CLIENTE'],
        "CORREO" => $_POST['CORREO'],
        "TELEFONO" => $_POST['TELEFONO'],
        
        
    );

   $respuesta = $crudnico->insertarDatos($datos);