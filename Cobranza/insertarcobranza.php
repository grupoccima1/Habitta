<?php 
    include "./../clases/Conexion.php";
    include "./../Cobranza/crudcobranza.php";

    $crudcobranza = new crudcobranza();

    $datos = array(
        "FECHA" => $_POST['FECHA'], 
        "MOTIVO" => $_POST['MOTIVO'],
        "FLUJO" => $_POST['FLUJO'],
        "FECHA_1" => $_POST['FECHA_1'],
        "DESCRIPCION" => $_POST['DESCRIPCION'], 
        "APAGAR" => $_POST['APAGAR'],
        "PAGO" => $_POST['PAGO'] 
    );

   $respuesta = $crudcobranza->insertarDatos($datos);

   if ($respuesta->getInsertedId() > 0) {
    header("location:../cobranza.php");
   }else{
    print_r($respuesta);
   }
    

?>