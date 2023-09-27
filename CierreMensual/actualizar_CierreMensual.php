<?php
    include "../clases/Conexion.php";
    include "../CierreMensual/crudcierremensual.php";

    $crud = new crudcierremensual();
    $id = $_POST['id'];

    $datos = array(
        "CIERRE_MES" => $_POST ['cierre_mes'],
        "FECHA" => $_POST ['fecha'],
        "BENEFICIARIO" => $_POST ['beneficiario'],
        "INGRESO" => $_POST ['ingreso'],
        "EGRESO" => $_POST ['egreso'],
        "SALDO" => $_POST ['saldo'],
        "FACTURA" => $_POST ['factura'],
        "REAL" => $_POST ['real'],
        "MOTIVO" => $_POST ['motivo'],
        "MES" => $_POST ['mes'],
        "DESARROLLO" => $_POST ['desarrollo'],
        "CONDOMINIO" => $_POST ['condominio'],
        "CLUSTER" => $_POST ['cluster'],
        "OBRA" => $_POST ['obra'],
        "CATEGORIA" => $_POST ['categoria'],
        "SUBCATEGORIA" => $_POST ['subcategoria'],
        "ORIGEN" => $_POST ['origen'],
        "SEMANA" => $_POST ['semana'],
        "SOLICITÓ" => $_POST ['solicito'],
        "AUTORIZÓ" => $_POST ['autorizo'],
        "PRESUPUESTO" => $_POST ['presupuesto'],
        "UNIDAD_DE_NEGOCIO" => $_POST ['unidad_negocio'],
        "FLUJO" => $_POST ['flujo'],
        "LLAVE" => $_POST ['llave'],
        "FECHA_CORRECTA" => $_POST ['fecha_correcta'],
        "LLAVE_EDOS_DE_CUENTA" => $_POST ['llave_cuenta'],
        "METODO_DE_PAGO" => $_POST ['metodo_pago'],
        "MODELO_DE_NEGOCIO" => $_POST ['modelo_negocio'],
        "SOLICITO" => $_POST ['solicito1'],
        "AUTORIZO" => $_POST ['autorizo1'],
        "AÑO" => $_POST ['año'],
        "MONTO_PROYECTADO" => $_POST ['monto_proyectado']
    );

    $respuesta = $crud -> actualizarCierreMensual($id, $datos);

    if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        header("location:../cierreMensualHabitta.php");
    }else{
        print_r($respuesta);
    }
?>