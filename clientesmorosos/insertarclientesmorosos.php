<?php 
    include "./../clases/Conexion.php";
    include "./../clientesmorosos/crudclientesmorosos.php";

    $crudclientesmorosos = new crudclientesmorosos();

    $datos = array(
      "CONTADOR" => $_POST['CONTADOR'], 
      "LLAVE" => $_POST['LLAVE'],
      "DESARROLLO" => $_POST['DESARROLLO'],
      "LOTE" => $_POST['LOTE'],
      "CONDOMINIO" => $_POST['CONDOMINIO'], 
      "CLÚSTER" => $_POST['CLÚSTER'],
      "FECHA" => $_POST['FECHA'],
      "CLIENTE" => $_POST['CLIENTE'],
      "PRECIO_DEL_LOTE" => $_POST['PRECIO_DEL_LOTE'], 
      "MONTO_MENS" => $_POST['MONTO_MENS'],
      "MENSUALIDAD" => $_POST['MENSUALIDAD'],
      "INTERES" => $_POST['INTERES'],
      "TIPO_DE_INTES" => $_POST['TIPO_DE_INTES'], 
      "I_NEGOCIADO" => $_POST['I_NEGOCIADO'],
      "REAL" => $_POST['REAL'],
      "MENS_PAGADA" => $_POST['MENS_PAGADA'],
      "MEN_ADEUDADA" => $_POST['MEN_ADEUDADA'],
      "FECHA_DE_ACUERDO" => $_POST['FECHA_DE_ACUERDO'],
      "MEDIO" => $_POST['MEDIO'],
      "PLAZOS" => $_POST['PLAZOS'],
      "MONTO_POR_MES" => $_POST['MONTO_POR_MES'],
      "INICIO" => $_POST['INICIO'],
      "FIN" => $_POST['FIN'],
      "ESTATUS_DE_INTERES" => $_POST['ESTATUS_DE_INTERES'],
      "COMENTARIO" => $_POST['COMENTARIO'],
      "NEGOCIADO" => $_POST['NEGOCIADO'],
      "DEPARTAMENTO" => $_POST['DEPARTAMENTO'],
      "AÑO" => $_POST['AÑO'],
      
    );

   $respuesta = $crudclientesmorosos->insertarDatos($datos);

    if ($respuesta->getInsertedId() > 0) {
       header("location:../clientesMorosos.php");
   } else {
       print_r($respuesta);
   }
    

?>