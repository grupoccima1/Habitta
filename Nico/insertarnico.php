<?php 
    include "./../clases/Conexion.php";
    include "./../Nico/crudnico.php";

    $crudnico = new crudnico();

    $datos = array(
        "OBSERVACION" => $_POST['OBSERVACION'], 
        "LLAVE" => $_POST['LLAVE'],
        "RAZON_SOCIAL" => $_POST['RAZONSOCIAL'],
        "FECHA" => $_POST['FECHA'],
        "BENEFICIARIO" => $_POST['BENEFICIARIO'], 
        "RFC" => $_POST['RFC'],
        "USO_CFDI" => $_POST['USOCFDI'],
        "ABONO" => $_POST['ABONO'],
        "CARGO" => $_POST['CARGO'], 
        "CARGO" => $_POST['CARGO'],
        "FACTURA" => $_POST['FACTURA'],
        "REAL" => $_POST['REAL'],
        "MOTIVO" => $_POST['MOTIVO'], 
        "CATEGORIA" => $_POST['CATEGORIA'],
        "METODO_DE_PAGO" => $_POST['METODODEPAGO'],
        "SUBCATEGORIA" => $_POST['SUBCATEGORIA'],
        "FLUJO" => $_POST['FLUJO'],
        "ORIGEN" => $_POST['ORIGEN'],
        "CLIENTE" => $_POST['CLIENTE'],
        "CORREO" => $_POST['CORREO'],
        "TELEFONO" => $_POST['TELEFONO'],
        
        
    );

   $respuesta = $crudnico->insertarDatos($datos);

   if ($respuesta -> getInsertedId() > 0) {
    header("location:../Nico.php");
   }else {
    print_r($respuesta);
   }

   ?>