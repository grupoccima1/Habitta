<?php
require_once "./php/conexion.php";

$datos2 = date('d-m-Y');

$les="SELECT * FROM financiamiento where 1";
$ser=mysqli_query($conexion,$les);
$som = mysqli_fetch_row($ser);




$des = "Selecciona tu desarrollo";
$datos1 = "Selecciona la fecha";

if (isset($_POST['enviar'])) {

    $datos1 = $_POST['date'];
    $lote = $_POST['lote'];
    $nombre = $_POST['name'];
    $tipo = $_POST['tipo']; 
    $condominio = $_POST['clusterid']; 
    $podescuento = $_POST['descuento']; 
    $metraje = $_POST['area']; 
    $pdenganche = $_POST['descuentoe']; 
    $emdies = $_POST['engancheextra']; 
    $tiempo = $_POST['tiempo'];  
    $des = $_POST['desarrolloid'];
    
    // echo $condominio;  

    $sel="SELECT * FROM desarrollo where cluster = '$condominio'";
$res=mysqli_query($conexion,$sel);
$mos1 = mysqli_fetch_row($res);




    
switch($tipo){
    case "estandar":
    switch($condominio){
            case "Arrecife 3":
            case "Estepa 1":
            case "Estepa 2":
            case "Estepa 3":
            case "Desierto 1":
            case "Desierto 2":
            case "Desierto 3":
            case "Desierto 4":
            case "Taiga 1":
            case "Taiga 2":
            case "Taiga 3":
            case "Paramo 1":
            case "Paramo 2":
            case "Paramo 3":
            case "Paramo A":
            case "Paramo B":
            case "Bosque 1":
            case "Bosque 2":
            case "Bosque 3":
            case "Bosque 4":
            case "Selva 1":
            case "Selva 2":
            case "Selva 3":
            case "Selva 4":
            case "Lago 1":
            case "Lago 2":
            case "Manglar 1":
            case "Manglar 2": 
            case "Manglar A":   
            case "Manglar B":      
        
                $pulista = 5770.3; 
            break;
            case "Amatista 1":
            case "Amatista 2":
            case "Lomas 1":
            case "Lomas 2":
            case "Zafiro 1":
            case "Zafiro 2":
                $pulista = 4500; 
            break;
            case "Lomas 3":
                $pulista = 4800; 
            break;
            case "Malaquita 1":
            case "Malaquita 2":
                $pulista = 4750; 
            break;
            case "Lomas 4":
                $pulista = 4500; 
            break;
    }

    break;
    case "premium":
        switch($condominio){
            case "Arrecife 3":
            case "Estepa 1":
            case "Estepa 2":
            case "Estepa 3":
            case "Desierto 1":
            case "Desierto 2":
            case "Desierto 3":
            case "Desierto 4":
            case "Taiga 1":
            case "Taiga 2":
            case "Taiga 3":
            case "Paramo 1":
            case "Paramo 2":
            case "Paramo 3":
            case "Paramo A":
            case "Paramo B":
            case "Bosque 1":
            case "Bosque 2":
            case "Bosque 3":
            case "Bosque 4":
            case "Selva 1":
            case "Selva 2":
            case "Selva 3":
            case "Selva 4":
            case "Lago 1":
            case "Lago 2":
            case "Manglar 1":
            case "Manglar 2": 
            case "Manglar A":   
            case "Manglar B":     
                $pulista = 6200; 
            break;
            case "Amatista 1":
            case "Amatista 2":
            case "Lomas 1":
            case "Lomas 2":
            case "Zafiro 1":
            case "Zafiro 2":
                $pulista = 4725; 
            break;
            case "Lomas 3":
                $pulista = 5040; 
            break;
            case "Malaquita 1":
            case "Malaquita 2":
                $pulista = 4990; 
            break;
            case "lomas 4":
                $pulista = 4725; 
            break;
    }
    break;
}

//operaciones para primer seccion de simulador
$descuento = $podescuento*$pulista/100;
$pudescuento = $pulista - $descuento;
$plista = $metraje * $pulista;
$descuentoc = $plista * $pudescuento;
$descuentoc = $podescuento*$plista/100;
$montoo = $plista - $descuentoc;
$enganche = $montoo * 10 / 100;
$denganche = $enganche * $pdenganche / 100;
if($emdies>$enganche){
    $eepagar = $emdies - ($enganche - $denganche) ;
}else{
    $eepagar = 0;
}
$poren1 = $eepagar / $montoo *100;
$poren2 = $poren1;
$eapagar = $enganche - $denganche + $eepagar;
$peapagara1 = $eapagar / $montoo *100;
$peapagara2 = $peapagara1;
$montoaf = $montoo - $enganche - $eepagar; 
$tapagar = $eapagar + $montoaf;
$porepagar = ($eapagar/$montoo)*100;

$plazo = $tiempo * 12;

$ms1 = $mos1[3]; //48
$ms2 = $mos1[4]; //72
$ms3 = $mos1[5];//60

if( ($plazo > 1) AND ($plazo  <=  $mos1[3])){
    $ms1 = $plazo;	
    $ms2 = 0;
    $ms3 = 0;
 }if(($plazo  >  $mos1[3]) AND  ($plazo <=  ($mos1[3] + $mos1[4])) ){
     $ms1 = $mos1[3];
     $ms2 = $plazo - $mos1[3];
     $ms3 = 0;
  }if($plazo >  $mos1[3] + $mos1[4]){
     $ms1 = $mos1[3];
     $ms2 = $mos1[4];
     $ms3 = $plazo - ($ms1+ $ms2);
   }






$ms22 = $ms1 + $ms2;



if($ms3 > 1){
    $ms33 = $plazo;
}else{
    $ms33 = 0;
}

$result = explode('-', $datos1);

$dia = $result[2];

if($dia < 6){
    $per =date("d-m-Y",strtotime($datos1."+ 1 month"));
}else{
    $per = date("d-m-Y",strtotime($datos1."+ 2 month"));
}

$res = explode('-', $per);
$mes = $res[1];
$año = $res[2];

$mos = $mes."-".$año;

$abonos = 0;

$les="SELECT * FROM financiamiento where 1";
$ser=mysqli_query($conexion,$les);
$som = mysqli_fetch_row($ser);
$som1 = $som[1]*0;
$som2 = $som[2]*0.01;
$som3 = $som[3]*0.01;
$cuota1 = 0;
$cuota2 = 0;
$cuota3 = 0;


                        for($i = 1; $i <= $plazo; $i ++){
                            $periodo = $i;
                            $r = $i-1;
                            if($periodo == 1){
                                $fech = $mos;
                                $enganche3 = $eepagar + $enganche;
                                $financiar = $montoo - $enganche3;
                                $si = $financiar;
                                $interes = $som1;
                                $mensualidades = $financiar / $plazo; 
                                
                                $pagado = $mensualidades + $abonos;
                                $intereses = $si*$som1;
                                $abonocapital = $mensualidades - $intereses;
                                $saldofinal = $si - $abonocapital;  
                                $cuota1 = $mensualidades;
                            }
                            
                            if($periodo > 1 AND $periodo <= $ms1){
                                $fech = date("m-Y",strtotime($per."+ $r month"));
                                $si= $saldofinal;
                                $mensualidades = $financiar / $plazo; 
                                
                                $pagado = $mensualidades + $abonos;
                                $intereses = $si*$som1;
                                $abonocapital = $mensualidades - $intereses;
                                $saldofinal = $si - $abonocapital;  
                            }
                            
                            if($periodo == $ms1+1){
                                $fech = date("m-Y",strtotime($per."+ $r month"));
                                $intereses = $si*$som2;
                                $spagado = $mensualidades * $ms1;
                                $porpagar = $financiar - $spagado;
                                $plasor = $plazo - $ms1;
                                $msci2 = $ms2;
                                $añosmsci2 = $msci2 / 12;

                                $cuota = $porpagar * (pow(1+$som[2]/100 , $plasor) * $som[2]/100)/ (pow(1+$som[2]/100, $plasor)-1);
                                $cuota2 = $cuota;
                            }

                            if($periodo > $ms1 AND $periodo <= $ms22){
                                $fech = date("m-Y",strtotime($per."+ $r month"));
                                $interes = $som2;
                                $si= $saldofinal;
                                $mensualidades = $cuota; 
                                
                                $pagado = $mensualidades + $abonos;
                                $intereses = $si*$som2;
                                $abonocapital = $mensualidades - $intereses;
                                $saldofinal = $si - $abonocapital;  
                            
                            }
                            
                            if($periodo == $ms22+1){
                                $fech = date("d-m-Y",strtotime($per."+ $r month"));
                                $intereses = $si*$som3;
                                $spagado2 = $mensualidades * $ms2;
                                $porpagar = $saldofinal;
                                $plasor = $ms3;
                                $msci2 = $ms3;
                                $añosmsci = $msci2 / 12;
                            
                                $cuota = $porpagar * (pow(1+$som[3]/100 , $plasor) * $som[3]/100)/ (pow(1+$som[3]/100, $plasor)-1);

                                $cuota3 = $cuota;
                              
                            }

                            if($periodo > $ms22 AND $periodo < $ms33+1){
                                $fech = date("m-Y",strtotime($per."+ $r month"));
                                $interes = $som3;
                                $si= $saldofinal;
                                $mensualidades = $cuota; 
                                
                                $pagado = $mensualidades + $abonos;
                                $intereses = $si*$som3;
                                $abonocapital = $mensualidades - $intereses;
                                $saldofinal = $si - $abonocapital;  
                            }
                        }

} else {
    $lote = "";
    $tipo = "";
    $condominio = "";
    $podescuento = "";
    $metraje = "";
    $pdenganche = "";
    $emdies = "";
    $nombre = "";
    $tiempo = "";                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
    $plazo = 0;
    $pulista = 0; 
    $pudescuento = 0;
    $podescuento = "";
    $plista = 0;
    $descuentoc= 0;
    $montoo = 0;
    $enganche = 0;
    $pdenganche = "";
    $denganche = 0;
    $poren2 = 0;                                                                                                                                                                                                                               
    $eepagar = 0;
    $porepagar = 0;
    $eapagar = 0;
    $tapagar = 0;
    $montoaf = 0;
    $periodo = 0;
    $fech = 0;
    $si =0;
    $mensualidades = 0;
    $abonos = 0;
    $pagado = 0;
    $intereses = 0;
    $abonocapital= 0;
    $saldofinal = 0;
    $ms1 = 0;
    $ms2 = 0;
    $ms22 = 0;
    $ms3 = 0;
    $ms33 = 0;
    $cuota1 = 0;
    $cuota2 = 0;
    $cuota3 = 0;
 

}

if (isset($_POST['new'])){
    $lote = "";
    $tipo = "";
    $condominio = "";
    $podescuento = "";
    $metraje = "";
    $pdenganche = "";
    $emdies = "";
    $nombre = "";
    $tiempo = "";                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
    $plazo = 0;
    $pulista = 0; 
    $pudescuento = 0;
    $podescuento = "";
    $plista = 0;
    $descuentoc= 0;
    $montoo = 0;
    $enganche = 0;
    $pdenganche = "";
    $denganche = 0;
    $poren2 = 0;                                                                                                                                                                                                                               
    $eepagar = 0;
    $porepagar = 0;
    $eapagar = 0;
    $tapagar = 0;
    $montoaf = 0;
    $periodo = 0;
    $fech = 0;
    $si =0;
    $mensualidades = 0;
    $abonos = 0;
    $pagado = 0;
    $intereses = 0;
    $abonocapital= 0;
    $saldofinal = 0;
    $ms1 = 0;
    $ms2 = 0;
    $ms22 = 0;
    $ms3 = 0;
    $ms33 = 0;
    $cuota1 = 0;
    $cuota2 = 0;
    $cuota3 = 0;
    $datos1 = 0;
    $dia = 0;
    $abonos = 0;

}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/icons/logo.ico">
    <title>Simulador de Pagos Habitta</title>
    <meta name="title" content="">
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta property="og:image" content="">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta name="author" content="Grupo CCIMA">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="html2pdf.bundle.min.js"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/main.css">    
    
</head>

<body>
    <header class="">
        <!-- Grey with black text -->
        <nav class="navbar navbar-expand-sm  navbar-light px-4 ">
            <div class="container">
            
            </div>
        </nav>
    </header>
    <div class="container ">
        <!-- menu bar -->
        <div class="">
            <div class="row align-items-end">
                <div class="col-6">
            
                </div>
                <div class="col-6">
                    <h3 class="gray-text text-end text-uppercase text-sm pt-3"> simulador actualizacion: 22-12-2022</h3>
                </div>
                
            </div>
            <div class="d-flex  align-items-center">
                <img id="logo" class="img-logo-desarrollo" src="img/logos/porttoblanco.svg" alt="">
                <h1 class="blue-text text-uppercase ml-1"> Simulador de Pagos</h1>
            </div>
            <div class="d-flex align-items-start justify-content-end">
                <img class="w-3 mr-1" src="img/icon/calendar-alt-solid.svg" alt="">
                <h3 class="text-uppercase blue-text text-end  text-bold"><?php echo $datos2; ?> </h3>
                
            </div>
            <hr class="pbhr">
        </div>
        <!-- vista de escritorio -->
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <section class="table-view mb-5">
            <div class="row mt-4">
                <div class="col-12  col-xl-6">
                    <!-- informacion de lote -->
                    <div class="card p-3">
                        
                            <div class="form-group">
                                <label class="blue-text" for="name">Nombre</label>
                                <input type="input" class="form-control" id="name" name="name" aria-describedby="name"
                                     value="<?php echo $nombre;?>"><br>
                                <label class="blue-text" for="name">Fecha de apartado</label>
                                <input type="date" class="form-control" name="date" id="date" aria-describedby="helpId" value="<?php echo $datos1 ?>"></option>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-4">
                                <h2 class="text-uppercase blue-text">lote</h2>
                                <h3 class="text-uppercase secondary-text">REFERENCES: <?php echo $tipo ?> | <?php echo $condominio ?> | L-<?php echo $lote ?> | <?php echo $metraje ?>m<sup> 2</sup> </h3>
                            <br>
                            </div>
                            <div class="row pt-3">
                                <div class="col-12 col-xl-6 mt-2 order-xl-first">
                                    <div class="form-group">
                                        <label class="blue-text" for="desarrolloid">Desarrollo</label>
                                        <select name='desarrolloid' id='desarrolloid' class='form-control' title='Selecciona tu Estado'>
                                        <option value="<?php echo $des ?>"><?php echo $des ?></option>
                                            <?php
                                            include( "php/conexion.php" );

                                            mysqli_query( $conexion, "SET NAMES 'utf8'" );
                                            $query = $conexion->query( "SELECT DISTINCT(desarrollo) FROM desarrollo order by  desarrollo asc");
                                            while ( $valores = mysqli_fetch_array( $query ) ) {
                                            echo '<option value="' . $valores[ 'desarrollo' ] . '">' . $valores[ 'desarrollo' ] . '</option>';
                                        }
                                        ?>
                                        </select>
                                       <!--  <select class="form-control" id="desarrollo" name="desarrollo" required>
                                            <option selected disabled>Desarrollos</option>
                                            <option>Porttoblanco Bernal</option>
                                            <option>Porttoblanco Cimatario</option>
                                            <option>Lomas de Porttoblanco Cimatario</option>
                                        </select> -->
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6 mt-2 order-xl-first">
                                    <div class="form-group">
                                        <label class="blue-text" for="clusterid">Condominium</label>
                                        <select class="form-control" title='Selecciona tu condominio' id="clusterid" name="clusterid" required>
                                            <option value="<?php echo $condominio ?>"><?php echo $condominio ?></option>
                                        </select>
                                    </div>
                                     
                                </div>
                                <div class="col-6 col-xl-4 mt-2 order-xl-first">
                                    <div class="form-group">
                                        <label class="blue-text" for="name">Lote</label>
                                        <input type="input" class="form-control" id="name" aria-describedby="name"
                                             name="lote" required value="<?php echo $lote ?>">
                                    </div>
                                </div>
                                <div class="col-6 col-xl-4 mt-2 order-xl-last">
                                    <div class="form-group">
                                        <label class="blue-text" for="name">Descuento</label>
                                        <input type="input" class="form-control" id="name" name="descuento" aria-describedby="name"
                                             required value="<?php echo $podescuento; ?>">
                                    </div>
                                </div>
                                <div class="col-6 col-xl-4 mt-2 ">
                                    <div class="form-group">
                                        <label class="blue-text" for="area">Metros cuadrados</label>
                                        <input type="input" class="form-control" id="area" aria-describedby="name"
                                         name="area" required value="<?php echo $metraje ?>">
                                    </div>
                                </div>
                                <div class="col-6 col-xl-4 mt-2 ">
                                    <div class="form-group">
                                        <label class="blue-text " for="name">Tipo</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="tipo" required>
                                                <option value="estandar">Estandar</option>
                                                <option value="premium">Premium</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="col-6 col-xl-4 mt-2 order-xl-last">
                                    <div class="form-group">
                                        <label class="blue-text " for="name">Precio Unitario Lista </label>
                                        <div class="d-flex">
                                            <img class="w-3 mr-1" src="img/icon/times-solid.svg"
                                                alt="">
                                        <p class="text-b"> <?php echo "$".number_format($pulista,2); ?> </p>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-6 col-xl-4 mt-2 order-xl-last">
                                    <div class="form-group">
                                        <label class="blue-text " for="name">Precio Unitario Descuento </label>
                                        <div class="d-flex">
                                            <img class="w-3 mr-1" src="img/icon/check-square-regular.svg" alt="">
                                        <p class="text-b green-text" class="text-uppercase"><?php echo "$".number_format($pudescuento,2); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        
                    </div>
                    <!-- financiamiento -->
                    <div class="card p-3 mt-4">
                        <h2 class="text-uppercase blue-text">financiamiento</h2>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="blue-text" for="name">Tiempo</label>
                                    <input type="input" class="form-control" id="name" aria-describedby="name"
                                         name="tiempo" required value="<?php echo $tiempo; ?>">
                                </div>
                            </div>
                            <div class="col-6 d-flex align-items-end">
                                <div class="d-flex align-items-start">
                                    <img class="w-3 mr-1" src="img/icon/calendar-alt-solid.svg"
                                        alt=""> 
                                    <h3 class="blue-text"><?php echo $plazo; ?> meses</h3>
                                </div>
                                
                            </div>
                        </div>
                        <table class="table table-striped table-hover mt-3 ">
                            <tbody>
                                <tr>
                                    <td>1 A <?php echo $ms1;?> Meses </td>
                                    <td><?php echo $ms1;?> Meses </td>
                                    <td><?php echo $som[1];?>%</td>
                                </tr>
                                <tr>
                                    <td><?php echo $ms1+1;?> A <?php echo $ms22;?> Meses </td>
                                    <td><?php echo $ms2 ?> Meses</td>
                                    <td><?php echo $som[2];?>%</td>
                                </tr>
                                <tr>
                                    <td><?php echo $ms22+1;?> A <?php echo $ms33;?> Meses </td>
                                    <td><?php echo $ms3;?> Meses</td>
                                    <td><?php echo $som[3];?>%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- documentacion requerida -->
                    <div class="card p-3 mt-4">
                        <h2 class="text-uppercase blue-text">documentacion requerida</h2>
                        <div class="row">
                            <div class="col-6">
                                <h3 class="text-uppercase pt-3">fisica</h3>
                                <ul class="documentos">
                                    <li>Identificación oficial vigente.</li>
                                    <li>Acta de nacimiento.</li>
                                    <li>Acta de matrimonio ( en caso de ser casado).</li>
                                    <li>Constancia de situación fiscal </li>
                                    <li>CURP</li>
                                    <li>Comprobante de domicilio</li>
                                </ul>
                                <p style="font-size: 12px;">**En caso de ser copropiedad o casado por bienes
                                    mancomunados anexar envíar toda la documnetación de ambas personas**</p>
                            </div>
                            <div class="col-6">
                                <h3 class="text-uppercase pt-3">Moral</h3>
                                <ul class="documentos">
                                    <li>Identificación oficial del representante legal vigente.</li>
                                    <li>Acta de nacimiento del representante legal.</li>
                                    <li>Acta constitutiva</li>
                                    <li>Constancia de situacón fiscal empresa y representante legal</li>
                                    <li>CURP del representante legal</li>
                                    <li>Comprobante de Domicilio (Empresa y Representante legal)</li>
                                    <li>Poder en el que ostenta las facultades otorgadas al representante legal</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <!-- resumen de financiamiento -->
                    <div class="card p-3 mt-4 mt-xl-0">
                        <h2 class="text-uppercase blue-text mt-3">resumen del importe</h2>
                        <table class="table mt-3 mb-2">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-bold" scope="col">importe</th>
                                    <th class="text-uppercase text-bold" scope="col">%</th>
                                    <th class="text-uppercase text-bold" scope="col">subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PRECIO DE LISTA </td>
                                    <td></td>
                                    <td><?php echo "$".number_format($plista,2); ?></td>
                                </tr>
                                <tr>
                                    <td>DESCUENTO</td>
                                    <td><?php echo $podescuento."%"; ?></td>
                                    <td><?php echo "$".number_format($descuentoc,2); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-bold">MONTO DE OPERACIONES</td>
                                    <td></td>
                                    <td class="text-bold green-text"><?php echo "$".number_format($montoo,2); ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row mt-3">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="blue-text text-uppercase" for="name">enganche extra</label>
                                    <input type="input" class="form-control" id="name" aria-describedby="name"
                                     name="engancheextra" value="<?php echo $emdies; ?>">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 d-flex align-items-end">
                                <div class="form-group">
                                    <label class="blue-text text-uppercase" for="name">Descuento en el Enganche</label>
                                    <input type="input" class="form-control" id="name" aria-describedby="name"
                                         name="descuentoe" required value="<?php echo $pdenganche ?>">
                                </div>
                            </div>
                        </div>
                        <table class="table mt-3 mb-2">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-bold" scope="col">importe</th>
                                    <th class="text-uppercase text-bold" scope="col">%</th>
                                    <th class="text-uppercase text-bold" scope="col">subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-uppercase">Enganche </td>
                                    <td>10%</td>
                                    <td><?php echo "$".number_format($enganche,2); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-uppercase">Descuento en el Enganche</td>
                                    <td><?php echo $pdenganche."%"; ?></td>
                                    <td><?php echo "$".number_format($denganche,2); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-uppercase">Enganche extra</td>
                                    <td><?php echo round($poren2)."%"; ?></td>
                                    <td><?php echo "$".number_format($eepagar,2); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-uppercase text-bold">Enganche a Pagar</td>
                                    <td><?php echo round($porepagar,1)."%"; ?></td>
                                    <td><?php echo "$".number_format($eapagar,2); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-uppercase text-bold">total a pagar</td>
                                    <td></td>
                                    <td><?php echo "$".number_format($tapagar,2); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-uppercase text-bold">importe a financiar </td>
                                    <td></td>
                                    <td class="text-bold green-text"><?php echo "$".number_format($montoaf,2); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- mensualidades -->
                    <div class="card p-3 mt-4">
                        <h2 class="text-uppercase blue-text">Mensualidades</h2>
                        <table class="table table-striped table-hover mt-3 ">
                            <tbody>
                                <tr>
                                    <td>Mensualidades 1 A <?php echo $ms1;?> Meses </td>
                                    <td><?php echo "$".number_format($cuota1,2) ?></td>
                                </tr>
                                <tr>
                                    <td>Mensualidades <?php echo $ms1+1;?> A <?php echo $ms22;?> Meses </td>
                                    <td><?php echo "$".number_format($cuota2,2) ?></td>
                                </tr>
                                <tr>
                                    <td>Mensualidades <?php echo $ms22+1;?> A <?php echo $ms33;?> Meses </td>
                                    <td><?php echo "$".number_format($cuota3,2) ?></td>
                                </tr>
                            </tbody>
                        </table>
                        
                         <button onclick="guardarStorage()"  id="calcular" type="submit" class="btn btn-simualador mt-3 mb-2 text-uppercase" name="enviar">Calcular</button>
                        <div class="row" id="premio">

                           <div class="row m-0">
                                <div class="col-6">
                                    <button onclick="LimpiarStorage()" id="btnSimulacion" type="submit" class="btn btn-simualador mt-3 mb-2 text-uppercase" name="new" style="width:100%;">Nueva Simulacion</button>
                                </div>

                                <div class="col-6">
                                    <button id="btnCrearPdf" type="button" class="btn btn-simualador mt-3 mb-2 text-uppercase"  style="width:100%;">Descargar</button>
                                </div> 
                                   
                            </div>

                    </div>


                        
                    </div>
                    <p class="blue-text text-rigth">*Los precios estan sujetos a cambios sin previo aviso</p>
                    
                </div>
            </div>
        </section>
        </form>
        <!-- spiner -->
        <div class="text-center d-none">
            <img src="img/spiner/Fusion6.gif" style="width: 9rem;" alt="">
        </div>
        <!-- financiamiento a meses sin intereses -->
        <section class="mb-5">
            <h2 class="text-uppercase blue-text mt-3">DESGLOSE DE FINANCIAMIENTO</h2>
            <div class="p-3 table-responsive-lg">
                <table class="table table-striped table-hover mb-2">
                    <thead class="thead-pagos">
                        <tr>
                            <th class="text-uppercase text-bold" scope="col">periodo</th>
                            <th class="text-uppercase text-bold" scope="col">fecha</th>
                            <th class="text-uppercase text-bold" scope="col">saldo inicial</th>
                            <th class="text-uppercase text-bold" scope="col">mensualidad</th>
                            <th class="text-uppercase text-bold" scope="col">Abonos</th>
                            <th class="text-uppercase text-bold" scope="col">pagado</th>
                            <th class="text-uppercase text-bold" scope="col">interes</th>
                            <th class="text-uppercase text-bold" scope="col">abono a capital</th>
                            <th class="text-uppercase text-bold" scope="col">Saldo Final</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //*************************************************

//operaciones para la tabla de cotizacion 
// $periodo es el periodo de pago 
// $fech es la fecha proxima de pago 
// $si es el saldo inicial a pagar 
// $mensualidades es el pago de las mensualidades 
// $abonos es la cantidad que abona la persona 
// $pagado es la variable ocupada igual a la mensualidad menos el abono 
// $intereses es la cantidad de dinero a pagar aplicado el interes 
// $aboonocapital variable a ocupar en abono a capital 
// $saldofinal variable que se ocupa al realizar los calculos finales


// desglose de excel para meses sin intereses
// la ms significa meses sin intereses

$les="SELECT * FROM financiamiento where 1";
$ser=mysqli_query($conexion,$les);
$som = mysqli_fetch_row($ser);
$som1 = $som[1]*0;
$som2 = $som[2]*0.01;
$som3 = $som[3]*0.01;



                        for($i = 1; $i <= $plazo; $i ++){
                            $periodo = $i;
                            $r = $i-1;
                            if($periodo == 1){
                                $fech = $mos;
                                $enganche3 = $eepagar + $enganche;
                                $financiar = $montoo - $enganche3;
                                $si = $financiar;
                                $interes = $som1;
                                $mensualidades = $financiar / $plazo; 
                                
                                $pagado = $mensualidades + $abonos;
                                $intereses = $si*$som1;
                                $abonocapital = $mensualidades - $intereses;
                                $saldofinal = $si - $abonocapital;  
                            }
                            
                            if($periodo > 1 AND $periodo <= $ms1){
                                $fech = date("m-Y",strtotime($per."+ $r month"));
                                $si= $saldofinal;
                                $mensualidades = $financiar / $plazo; 
                                
                                $pagado = $mensualidades + $abonos;
                                $intereses = $si*$som1;
                                $abonocapital = $mensualidades - $intereses;
                                $saldofinal = $si - $abonocapital;  
                            }
                            
                            if($periodo == $ms1+1){
                                $fech = date("m-Y",strtotime($per."+ $r month"));
                                $intereses = $si*$som2;
                                $spagado = $mensualidades * $ms1;
                                $porpagar = $financiar - $spagado;
                                $plasor = $plazo - $ms1;
                                $msci2 = $ms2;
                                $añosmsci2 = $msci2 / 12;

                                $cuota = $porpagar * (pow(1+$som[2]/100 , $plasor) * $som[2]/100)/ (pow(1+$som[2]/100, $plasor)-1);

                            }

                            if($periodo > $ms1 AND $periodo <= $ms22){
                                $fech = date("m-Y",strtotime($per."+ $r month"));
                                $interes = $som2;
                                $si= $saldofinal;
                                $mensualidades = $cuota; 
                                
                                $pagado = $mensualidades + $abonos;
                                $intereses = $si*$som2;
                                $abonocapital = $mensualidades - $intereses;
                                $saldofinal = $si - $abonocapital;  
                            
                            }
                            
                            if($periodo == $ms22+1){
                                $fech = date("d-m-Y",strtotime($per."+ $r month"));
                                $intereses = $si*$som3;
                                $spagado2 = $mensualidades * $ms2;
                                $porpagar = $saldofinal;
                                $plasor = $ms3;
                                $msci2 = $ms3;
                                $añosmsci = $msci2 / 12;
                            
                                $cuota = $porpagar * (pow(1+$som[3]/100 , $plasor) * $som[3]/100)/ (pow(1+$som[3]/100, $plasor)-1);

                               
                            }

                            if($periodo > $ms22 AND $periodo < $ms33+1){
                                $fech = date("m-Y",strtotime($per."+ $r month"));
                                $interes = $som3;
                                $si= $saldofinal;
                                $mensualidades = $cuota; 
                                
                                $pagado = $mensualidades + $abonos;
                                $intereses = $si*$som3;
                                $abonocapital = $mensualidades - $intereses;
                                $saldofinal = $si - $abonocapital;  
                            }
                        
                            
                        ?>
                        <tr>
                            <td><?php echo $periodo; ?></td>
                            <td><?php echo "05-".$fech;    ?> </td>
                            <td><?php echo "$".number_format($si,2); ?></td>
                            <td><?php echo "$".number_format($mensualidades,2); ?></td>
                            <td>$0</td>
                            <td><?php echo "$".number_format($pagado,2); ?></td>
                            <td><?php echo "$".number_format($intereses,2) ?></td>
                            <td><?php echo "$".number_format($abonocapital,2); ?></td>
                            <td><?php echo "$".number_format($saldofinal,2); ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
        $('#datepicker').datepicker({
            weekStart: 1,
            daysOfWeekHighlighted: "6,0",
            autoclose: true,
            todayHighlight: true,
        });
        $('#datepicker').datepicker("setDate", new Date());
    </script>

    <script src="scripts.js"></script>
    <script src="js/jquery-3.6.3.min.js"></script>
    <!-- <script src="js/app.js"></script> -->
    <script src="js/change.js"></script>
  

</body>

</html>
