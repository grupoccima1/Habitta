<?php
    include "../clases/Conexion.php";
    include "../clases/crud.php";

    $Crud = new Crud();

    $datos = array(
        "LLAVE" => $_POST['llave'], 
        "LOTE" => $_POST['lote'],
        "CONDOMINIO" => $_POST['condominio'],
        "CLUSTER" => $_POST['cluster'],
        "DESARROLLO" => $_POST['desarrollo'],
        "APARTADOTELEGRAM" => $_POST['apartado'],
        "CLIENTE" => $_POST['cliente'],
        "RFC" => $_POST['rfc'],
        "IDCIF" => $_POST['idcif'],
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
        "ER_MENSUALIDAD" => $_POST['primer_mens'],
        "NO_2DA_MENS" => $_POST['no_2da'],
        "DA_MENSUALIDAD" => $_POST['segunda_mens'],
        "NO_3ER_MENS" => $_POST['no_3er'],
        "ER_MENSUALIDAD2" => $_POST['tercer_mens'],
        "TIPO_DE_INTERES" => $_POST['tipo_interes'],
        "MENS_ENTREGA" => $_POST['mens_entrega'],
        "INICIO_CORRIDA" => $_POST['inicio_corrida'],
        "FECHA_PRIMER_ABONO" => $_POST['primer_abono'],
        "PAGADO" => $_POST['pagado'],
        "DEUDA" => $_POST['deuda'],
        "FECHA_ENTREGA_LOTE" => $_POST['entrega_lote'],
        "ESTATUS_CM" => $_POST['estatus_cm'],
        "LINK_SAT" => $_POST['link'],
        "NOTAS_DE_PAGOS" => $_POST['notas'],
        "BONO_REFERIDO" => $_POST['bono_ref'],
        "ESTATUS" => $_POST['estatus'],
        "MOTIVO_ESTATUS" => $_POST['motivo_estatus'],
        "RESULTADO" => $_POST['resultado'],
        "FECHADELIBERACION" => $_POST['liberacion']
    );

   $respuesta = $Crud->insertarDatosLiberados($datos);

    if ($respuesta->getInsertedId() > 0) {
        header("location:../liberados.php");
    } else {
        print_r($respuesta);
   }
    
?>