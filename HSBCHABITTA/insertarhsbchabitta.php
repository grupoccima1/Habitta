<?php 
    include "./../clases/Conexion.php";
    include "./../HSBCHABITTA/crudhsbchabitta.php";

    $crudhsbchabitta = new crudhsbchabitta();

    $datos = array(
        "SEMANA" => $_POST['SEMANA'], 
        "FECHA" => $_POST['FECHA'],
        "BENEFICIARIO" => $_POST['BENEFICIARIO'],
        "INGRESO" => $_POST['INGRESO'],
        "EGRESO" => $_POST['EGRESO'], 
        "SALDO" => $_POST['SALDO'],
        "FACTURA" => $_POST['FACTURA'],
        "REAL" => $_POST['REAL'], 
        "MOTIVO" => $_POST['MOTIVO'],
        "MES" => $_POST['MES'], 
        "DESARROLLO" => $_POST['DESARROLLO'],
        "LOTE" => $_POST['LOTE'],
        "CONDOMINIO" => $_POST['CONDOMINIO'],
        "CLUSTER" => $_POST['CLUSTER'], 
        "OBRA" => $_POST['OBRA'],
        "CATEGORIA" => $_POST['CATEGORIA'],
        "SUBCATEGORIA" => $_POST['SUBCATEGORIA'],
        "UNIDADDENEGOCIO" => $_POST['UNIDADDENEGOCIO'],
        "FLUJO" => $_POST['FLUJO'],
        "LLAVE" => $_POST['LLAVE'],
        "FECHACORRECTA" => $_POST['FECHACORRECTA'],
        "LLAVEEDOSDECUENTA" => $_POST['LLAVEEDOSDECUENTA'],
        "CLAVE" => $_POST['CLAVE'],
        "METODODEPAGO" => $_POST['METODODEPAGO']
    );

   $respuesta = $crudhsbchabitta->insertarDatos($datos);

   if ($respuesta->getInsertedId() > 0) {
    header("location:../hsbch.php");
   }else{
    print_r($respuesta);
   }
   ?>