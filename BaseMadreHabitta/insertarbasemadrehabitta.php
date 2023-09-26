<?php 
    include "./../clases/Conexion.php";
    include "./../BaseMadreHabitta/crudbasemadrehabitta.php";

    $crudbasemadrehabitta = new crudbasemadrehabitta();

    $datos = array(
        "LLAVE" => $_POST['LLAVE'], 
        "LOTE" => $_POST['LOTE'],
        "CLIENTE" => $_POST['CLIENTE'],
        "RFC" => $_POST['RFC'],
        "USO_CFDI" => $_POST['USO_CFDI'], 
        "RAZON_SOCIAL" => $_POST['RAZON_SOCIAL'],
        "DOMICILIO_FISCAL" => $_POST['DOMICILIO_FISCAL'],
        "TELEFONO" => $_POST['TELEFONO'],
        "CORREO" => $_POST['CORREO'], 
        "M2" => $_POST['M2'],
        "TOTAL_OPERACION" => $_POST['TOTAL_OPERACION'],
        "ENGANCHE" => $_POST['ENGANCHE'],
        "FINANCIAMIENTO" => $_POST['FINANCIAMIENTO'], 
        "FIRMA_CONTRATO" => $_POST['FIRMA_CONTRATO'],
        "FIN_CORRIDA" => $_POST['FIN_CORRIDA'],
        "TOTAL_MENSUALIDADES" => $_POST['TOTAL_MENSUALIDADES'],
        "NO_1ER_MENS" => $_POST['No_1ER_MENS'],
        "PRIMERA_MENSUALIDAD" => $_POST['PRIMERA_MENSUALIDAD'],
        "NO_2DA_MENS" => $_POST['No_2DA_MENS'],
        "SEGUNDA_MENSUALIDAD" => $_POST['SEGUNDA_MENSUALIDAD'],
        "NO_3ER_MENS" => $_POST['No_3ER_MENS'],
        "TERCER_MENSUALIDAD" => $_POST['TERCER_MENSUALIDAD'],
        "TIPO_DE_INTERES" => $_POST['TIPO_DE_INTERES'],
        "MENS_ENTREGA" => $_POST['MENS_ENTREGA'],
        "INICIO_CORRIDA" => $_POST['INICIO_CORRIDA'],
        "FECHA_PRIMER_ABONO" => $_POST['FECHA_PRIMER_ABONO'],
        "DEUDA" => $_POST['DEUDA'],
        "FECHA_ENTREGA_LOTE" => $_POST['FECHA_ENTREGA_LOTE'],
        "ESTATUS_CM" => $_POST['ESTATUS_CM'],
        "LINK_SAT" => $_POST['LINK_SAT'],
        "NOTAS_DE_PAGOS" => $_POST['NOTAS_DE_PAGOS'],
        "BONO_REFERIDO" => $_POST['BONO_REFERIDO'],
        "ESTATUS" => $_POST['ESTATUS'],
        "MOTIVO_ESTATUS" => $_POST['MOTIVO_ESTATUS'],
        "RESULTADO" => $_POST['RESULTADO'],
        "FECHADELIBERACION" => $_POST['FECHADELIBERACION'],
        "CONDOMINIO" => $_POST['CONDOMINIO'],
        "CLUSTER" => $_POST['CLUSTER'],
        "DESARROLLO" => $_POST['DESARROLLO'],
        "APARTADO_TELEGRAM" => $_POST['APARTADO_TELEGRAM'],
        "PRIMER_MENSUALIDAD" => $_POST['PRIMER_MENSUALIDAD'],
        
        
    );

   $respuesta = $crudbasemadrehabitta->insertarDatos($datos);

   if ($respuesta->getInsertedId() > 0) {
    header("location:../basemadrehabitta.php");
   }else {
    print_r($respuesta);
   }