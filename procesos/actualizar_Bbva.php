<?php
    include "../clases/Conexion.php";
    include "../clases/crud.php";

    $Crud = new Crud();
    $id = $_POST['id'];

    $datos = array(
        "SEMANA" => $_POST['semana'], 
        "FECHA" => $_POST['fecha'],
        "BENEFICIARIO" => $_POST['beneficiario'],
        "INGRESO" => $_POST['ingreso'],
        "EGRESO" => $_POST['egreso'], 
        "SALDO" => $_POST['saldo'],
        "FACTURA" => $_POST['factura'],
        "MOTIVO" => $_POST['motivo'],
        "MES" => $_POST['mes'], 
        "DESARROLLO" => $_POST['desarrollo'],
        "LOTE" => $_POST['lote'],
        "CONDOMINIO" => $_POST['condominio'],
        "CLUSTER" => $_POST['cluster'], 
        "OBRA" => $_POST['obra'],
        "CATEGORIA" => $_POST['categoria'],
        "SUBCATEGORIA" => $_POST['subcategoria'],
        "MODELODENEGOCIO" => $_POST['modelo_negocio'],
        "FLUJO" => $_POST['flujo'],
        "LLAVE" => $_POST['llave'],
        "FECHACORRECTA" => $_POST['fecha_correcta'],
        "LLAVEEDOSDECUENTA" => $_POST['llave_edos'],
        "CLAVE" => $_POST['clave'],
        "METODODEPAGO" => $_POST['metodo_pago']
    );

   $respuesta = $Crud->actualizarBbva($id, $datos);

   if($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
    header("location:../bbva.php");
    }else {
    print_r($respuesta);
    }
    
?>