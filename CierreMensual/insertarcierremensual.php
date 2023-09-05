<?php 
    include "./../clases/Conexion.php";
    include "./../CierreMensual/crudcierremensual.php";

    $crudcierremensual = new crudcierremensual();

    $datos = array(
        "CIERRE_MES" => $_POST['CIERRE_MES'], 
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
        "CONDOMINIO" => $_POST['CONDOMINIO'],
        "CLUSTER" => $_POST['CLUSTER'], 
        "OBRA" => $_POST['OBRA'],
        "CATEGORIA" => $_POST['CATEGORIA'],
        "SUBCATEGORIA" => $_POST['SUBCATEGORIA'],
        "ORIGEN" => $_POST['ORIGEN'], 
        "SEMANA" => $_POST['SEMANA'],
        "SOLICITÓ" => $_POST['SOLICITÓ'], 
        "AUTORIZÓ" => $_POST['AUTORIZÓ'],
        "PRESUPUESTO" => $_POST['PRESUPUESTO'], 
        "UNIDAD_DE_NEGOCIO" => $_POST['UNIDAD_DE_NEGOCIO'],
        "FLUJO" => $_POST['FLUJO'],
        "LLAVE" => $_POST['LLAVE'],
        "FECHA_CORRECTA" => $_POST['FECHA_CORRECTA'],
        "LLAVE_EDOS_DE_CUENTA" => $_POST['LLAVE_EDOS_DE_CUENTA'],
        "METODO_DE_PAGO" => $_POST['METODO_DE_PAGO'],
        "MODELO_DE_NEGOCIO" => $_POST['MODELO_DE_NEGOCIO'],
        "SOLICITO" => $_POST['SOLICITO'],
        "AUTORIZO" => $_POST['AUTORIZO'],
        "AÑO" => $_POST['AÑO'],
        "MONTO_PROYECTADO" => $_POST['MONTO_PROYECTADO'],
        
    );

   $respuesta = $crudcierremensual->insertarDatos($datos);
   ?>