<?php
    include "../clases/Conexion.php";
    include "../TableroDeResultados/crudtableroderesultados.php";

    $Crud = new crudtableroderesultados();
    $id = $_POST['id'];

    $datos = array(
        "GIRO" => $_POST['giro'],
        "U_TOTALES" => $_POST['u_totales'],
        "U_APARTADAS" => $_POST['u_apartadas'],
        "U_PORVENDER" => $_POST['u_xvender'],
        "U_VENDIDAS" => $_POST['u_vendidas'],
        "U_POR_CERRAR" => $_POST['u_xcerrar'],
        "U_POR_RECUPERAR" => $_POST['u_xrecuperar'],
        "RECUPERADOS" => $_POST ['recuperados'],
        "DESARROLLO" => $_POST['desarrollo'],
        "U_POR_VENDER" => $_POST['u_x_vender'],
        "ESTATUS" => $_POST['estatus'],
        "TOTAL_VENCIDOS" => $_POST['total_vencidos']
    );


    $respuesta = $Crud -> actualizarTableroResultados($id,$datos);

    if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        header("location:../TableroDeResultados.php");
    }else {
        print_r($respuesta);
    }
?>