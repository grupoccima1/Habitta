<?php 
    include "./../clases/Conexion.php";
    include "./../TableroDeResultados/crudtableroderesultados.php";

    $crudtableroderesultados = new crudtableroderesultados();

    $datos = array(
        "GIRO" => $_POST['GIRO'], 
        "U_TOTALES" => $_POST['U_TOTALES'],
        "U_APARTADAS" => $_POST['U_APARTADAS'],
        "U_PORVENDER" => $_POST['U_PORVENDER'],
        "U_VENDIDAS" => $_POST['U_VENDIDAS'], 
        "U_POR_CERRAR" => $_POST['U_POR_CERRAR'],
        "U_POR_RECUPERAR" => $_POST['U_POR_RECUPERAR'],
        "RECUPERADOS" => $_POST['RECUPERADOS'],
        "DESARROLLO" => $_POST['DESARROLLO'],
        "U_POR_VENDER" => $_POST['U_POR_VENDER'], 
        "ESTATUS" => $_POST['ESTATUS'], 
        "TOTAL_VENCIDOS" => $_POST['TOTAL_VENCIDOS']
    );

   $respuesta = $crudtableroderesultados->insertarDatos($datos);

   if ($respuesta->getInsertedId() > 0) {
    header("location:../TableroDeResultados.php");
   }else {
    print_r($respuesta);
   }
   
   ?>