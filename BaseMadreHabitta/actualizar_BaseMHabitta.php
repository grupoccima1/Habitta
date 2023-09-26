<?php
    include "../clases/Conexion.php";
    include "../BaseMadreHabitta/crudbasemadrehabitta.php";

    $Crud = new crudbasemadrehabitta();
    $id = $_POST['id'];

    $datos = array(
        "LLAVE" => $_POST['llave'], 
        "LOTE" => $_POST['lote'],
        "CLIENTE" => $_POST['cliente'],
        "RFC" => $_POST['rfc'],
        "USO_CFDI" => $_POST['uso_cfdi'], 
        "RAZON_SOCIAL" => $_POST['razon_social'],
        "DOMICILIO_FISCAL" => $_POST['dom_fiscal'],
        "TELEFONO" => $_POST['telefono'],
        "CORREO" => $_POST['correo'], 
        "M2" => $_POST['m2'],
        "TOTAL_OPERACION" => $_POST['total_operacion'],
        "ENGANCHE" => $_POST['enganche'],
        "FINANCIAMIENTO" => $_POST['financiamiento'], 
        "FIRMA_CONTRATO" => $_POST['firma'],
        "FIN_CORRIDA" => $_POST['fin_corrida'],
        "TOTAL_MENSUALIDADES" => $_POST['total_mens'],
        "NO_1ER_MENS" => $_POST['no_1er'],
        "PRIMERA_MENSUALIDAD" => $_POST['primer_mens'],
        "NO_2DA_MENS" => $_POST['no_2da'],
        "SEGUNDA_MENSUALIDAD" => $_POST['segunda_mens'],
        "NO_3ER_MENS" => $_POST['no_3er'],
        "TERCER_MENSUALIDAD" => $_POST['tercer_mens'],
        "TIPO_DE_INTERES" => $_POST['tipo_interes'],
        "MENS_ENTREGA" => $_POST['mens_entrega'],
        "INICIO_CORRIDA" => $_POST['inicio_corrida'],
        "FECHA_PRIMER_ABONO" => $_POST['primer_abono'],
        "DEUDA" => $_POST['deuda'],
        "FECHA_ENTREGA_LOTE" => $_POST['entrega_lote'],
        "ESTATUS_CM" => $_POST['estatus_cm'],
        "LINK_SAT" => $_POST['link'],
        "NOTAS_DE_PAGOS" => $_POST['notas'],
        "BONO_REFERIDO" => $_POST['bono_ref'],
        "ESTATUS" => $_POST['estatus'],
        "MOTIVO_ESTATUS" => $_POST['motivo_estatus'],
        "RESULTADO" => $_POST['resultado'],
        "FECHADELIBERACION" => $_POST['liberacion'],
        "CONDOMINIO" => $_POST['condominio'],
        "CLUSTER" => $_POST['cluster'],
        "DESARROLLO" => $_POST['desarrollo'],
        "APARTADO_TELEGRAM" => $_POST['apartado'],
        "PRIMER_MENSUALIDAD" => $_POST['primera_mens']
    );

   $respuesta = $Crud->actualizarMadreHabitta($id, $datos);

   if($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
    header("location:../basemadrehabitta.php");
    }else {
    print_r($respuesta);
    }
    
?>