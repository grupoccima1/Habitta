<?php
    include "../clases/Conexion.php";
    include "../clases/crud.php";

    $crud = new crud();
    $id = $_POST ['id'];

    $datos = array(
        "GIRO" => $_POST ['giro'],
        "U_TOTALES" => $_POST ['u_totales'],
        "U_APARTADAS" => $_POST ['u_apartadas'],
        "U_PORVENDER" => $_POST [''],
        "U_VENDIDAS" => $_POST [''],
        "U_POR_CERRAR" => $_POST [''],
        "U_POR_RECUPERAR" => $_POST [''],
        "RECUPERADOS" => $_POST [''],
        "DESARROLLO" => $_POST [''],
        "U_POR_VENDER" => $_POST [''],
        "ESTATUS" => $_POST [''],
        "TOTAL_VENCIDOS" => $_POST ['']
    );

?>