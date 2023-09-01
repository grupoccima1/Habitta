<?php 
    include "./../clases/Conexion.php";
    include "./../billpocket/crudbillpocket.php";

    $crudbillpocket = new crudbillpocket();

    $datos = array(
        "NOMBRE_DE_CLIENTE" => $_POST['NOMBRE_DE_CLIENTE'], 
        "DEPOSITO_DE_CLIENTE" => $_POST['DEPOSITO_DE_CLIENTE'],
        "COMISION" => $_POST['COMISION'],
        "DEPOSITO_EN_BANCO" => $_POST['DEPOSITO_EN_BANCO'],
        "TIPO_DE_PAGO" => $_POST['TIPO_DE_PAGO'], 
        "FOLIO" => $_POST['FOLIO'],
        "TIPO_DE_TARJETA" => $_POST['TIPO_DE_TARJETA'],
        "TPVAFILIADA" => $_POST['TPVAFILIADA'],
        "FECHADE_DEPOSITO" => $_POST['FECHADE_DEPOSITO'], 
        "AÑO" => $_POST['AÑO'],
        "BANCO" => $_POST['BANCO'],
       
        
    );

   $respuesta = $crudbillpocket->insertarDatos($datos);

    //if ($respuesta->getInsertedId() > 0) {
      //  header("location:../insertaracumuladosherpa.php");
   // } else {
     //   print_r($respuesta);
   //}
    

?>