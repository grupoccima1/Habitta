<?php 
    include "./../clases/Conexion.php";
    include "./../Estados/crudestados.php";

    $crudestados = new crudestados();

    $datos = array(
        "SourceName" => $_POST['SourceName'], 
        "PERIODO" => $_POST['PERIODO'],
        "FECHA" => $_POST['FECHA'],
        "SALDOINICIAL" => $_POST['SALDOINICIAL'],
        "MENSUALIDAD" => $_POST['MENSUALIDAD'], 
        "PAGADO" => $_POST['PAGADO'],
        "INTERESFINANCIAMIENTO" => $_POST['INTERESFINANCIAMIENTO'],
        "ABONO_CAPITAL" => $_POST['ABONO_CAPITAL'],
        "SALDO_FINAL" => $_POST['SALDO_FINAL'], 
        "INT_GEN" => $_POST['INT_GEN'],
        "INT_INT" => $_POST['INT_INT'],
        "INT_ACUM_MORA" => $_POST['INT_ACUM_MORA'],
        "INT_NEG" => $_POST['INT_NEG'], 
        "ESTATUS" => $_POST['ESTATUS'],
        "OBSERVACION" => $_POST['OBSERVACION'],
        "DEBE_INTERES" => $_POST['DEBE_INTERES'],
        "FECHA_PAGO" => $_POST['FECHA_PAGO'],
        "INDICADOR_FECHA" => $_POST['INDICADOR_FECHA'],
        "PORCENT_INT" => $_POST['PORCENT_INT'],
        "LLAVE2" => $_POST['LLAVE2'],
        "MENS_ADEU" => $_POST['MENS_ADEU'],
        "CALC_SOBRE" => $_POST['CALC_SOBRE'],
        "MONTO_INT_MOR" => $_POST['MONTO_INT_MOR'],
     
       
        
    );

   $respuesta = $crudestados->insertarDatos($datos);