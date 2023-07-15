<?php
require_once "./clases/Conexion.php";
  require_once "./clases/crud.php";
  $crud = new Crud();
  $datos = $crud->mostrarCobranzaAcumulado();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css"/>
    <link rel="stylesheet" href="style.css"/>
    <title>Habitta</title>
  </head>
  <body>

    <div class="wrapper">
      <div class="body-overlay"></div>


       <!-- Sidebar  -->
       <nav id="sidebar">
        <div class="sidebar-header">
          <h3><img src="images/habitta.svg" class="img-fluid"/></h3>
        </div>
        <ul class="list-unstyled components">
          <li class="active">
            <a href="index.php" class="dashboard"><img src="images/home.svg" width="20px"><span>Inicio</span></a>
          </li>

          <li class="">
            <a  class="dashboard"><span>Principales</span></a>
          </li>
          <li class="dropdown">
            <a href="./basemadre.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Base Madre</span></a>

          </li>
          <li class="dropdown">
            <a href="./flujo.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Flujo</span></a>

          </li>
          <li class="dropdown">
            <a href="./liberados.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Liberado</span></a>

          </li>

          <li class="">
            <a href="#" class="dashboard"><span>Bancos</span></a>
          </li>

          <li class="dropdown">
            <a href="./bbva.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>BBVA</span></a>


              </li>
          <li class="dropdown">
            <a href="./hsbcl.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>HSBC Lomas</span></a>

          </li>
          <li class="dropdown">
            <a href="./hsbch.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>HSBC Habitta</span></a>

          </li>
          <li class="">
            <a href="#" class="dashboard"><span>Estados de cuenta</span></a>
          </li>
          <li class="dropdown">
            <a href="./cobranza.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Cobranza</span></a>

          </li>
          <li class="dropdown">
            <a href="./cobranza.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Listado</span></a>

          </li>
          <li class="dropdown">
            <a href="./cobranza.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Estados de cuenta</span></a>

          </li>
          <li class="dropdown">
            <a href="./cobranza.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Catalogo</span></a>

          </li>
          <li class="dropdown">
            <a href="./cobranza.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Tabulador</span></a>

          </li>
          <li class="dropdown">
            <a href="./comisiones2023.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Comisiones 2023</span></a>

          </li>
        </ul>
      </nav>




      <!--------page-content---------------->

      <div id="content">
        <div class="top-navbar">
          <div class="xp-topbar"></div>
          <div class="xp-breadcrumbbar text-center">
            <h4 class="page-title">Dashboard</h4>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>
        </div>

      <div class="container">
        <div class="row justify-content-center py-5">
          <div class="col-md-3">
            <div class="logo_cimatario">
              <img src="images/cimatario.svg" class="imagen-logos"/>
            </div>
          </div>

          <div class="col-md-3">
            <div class="logo_cimatario">
              <img src="images/lomas.svg"     class="imagen-logos"/>
            </div>
          </div>

          <div class="col-md-3">
            <div class="logo_cimatario">
              <img src="images/cimatario.svg" class="imagen-logos"/>
            </div>
          </div>



        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h2>Bienvenido</h2>
          </div>
        </div>
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col">
                  <span><img src="images/home.svg" width="25px"></i></span> Home/Comisioes 2023
                </div>

              </div>

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="tabla" class="table table-striped data-table" style="width: 100%">
                  <thead class="bg__td">
                    <tr>

                        
                        <th class="th__texto" style="text-align:center;">LLAVE</th>                        
                        <th class="th__texto" style="text-align:center;">LOTE</th>
                        <th class="th__texto" style="text-align:center;">CONDOMINIO</th>
                        <th class="th__texto" style="text-align:center;">CLÚSTER</th>
                        <th class="th__texto" style="text-align:center;">DESARROLLO</th>
                        <th class="th__texto" style="text-align:center;">CLIENTE</th>
                        <th class="th__texto" style="text-align:center;">PRECIO_TOTAL</th>
                        <th class="th__texto" style="text-align:center;">ENGANCHE</th>
                        <th class="th__texto" style="text-align:center;">MESES_1</th>
                        <th class="th__texto" style="text-align:center;">MESES_2</th>
                        <th class="th__texto" style="text-align:center;">MESES_3</th>
                        <th class="th__texto" style="text-align:center;">MESES_TOTALES</th>
                        <th class="th__texto" style="text-align:center;">MEN_1</th>
                        <th class="th__texto" style="text-align:center;">MEN_2</th>
                        <th class="th__texto" style="text-align:center;">MEN_3</th>
                        <th class="th__texto" style="text-align:center;">INICIO_CORRIDA</th>
                        <th class="th__texto" style="text-align:center;">PRIMER_ABONO</th>
                        <th class="th__texto" style="text-align:center;">MES_Y_AÑO_FIRMA</th>
                        <th class="th__texto" style="text-align:center;">ESPECIAL</th>
                        <th class="th__texto" style="text-align:center;">enero_2020</th>
                        <th class="th__texto" style="text-align:center;">febrero_2020</th>
                        <th class="th__texto" style="text-align:center;">marzo_2020</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2020</th>
                        <th class="th__texto" style="text-align:center;">mayo_2020</th>
                        <th class="th__texto" style="text-align:center;">junio_2020</th>
                        <th class="th__texto" style="text-align:center;">julio_2020</th>
                        <th class="th__texto" style="text-align:center;">agosto_2020</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2020</th>
                        <th class="th__texto" style="text-align:center;">octubre_2020</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2020</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2020</th>
                        <th class="th__texto" style="text-align:center;">enero_2021</th>
                        <th class="th__texto" style="text-align:center;">febrero_2021</th>
                        <th class="th__texto" style="text-align:center;">marzo_2021</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2021</th>
                        <th class="th__texto" style="text-align:center;">mayo_2021</th>
                        <th class="th__texto" style="text-align:center;">junio_2021</th>
                        <th class="th__texto" style="text-align:center;">julio_2021</th>
                        <th class="th__texto" style="text-align:center;">agosto_2021</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2021</th>
                        <th class="th__texto" style="text-align:center;">octubre_2021</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2021</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2021</th>
                        <th class="th__texto" style="text-align:center;">enero_2022</th>
                        <th class="th__texto" style="text-align:center;">febrero_2022</th>
                        <th class="th__texto" style="text-align:center;">marzo_2022</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2022</th>
                        <th class="th__texto" style="text-align:center;">mayo_2022</th>
                        <th class="th__texto" style="text-align:center;">junio_2022</th>
                        <th class="th__texto" style="text-align:center;">julio_2022</th>
                        <th class="th__texto" style="text-align:center;">agosto_2022</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2022</th>
                        <th class="th__texto" style="text-align:center;">octubre_2022</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2022</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2022</th>
                        <th class="th__texto" style="text-align:center;">enero_2023</th>
                        <th class="th__texto" style="text-align:center;">febrero_2023</th>
                        <th class="th__texto" style="text-align:center;">marzo_2023</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2023</th>
                        <th class="th__texto" style="text-align:center;">mayo_2023</th>
                        <th class="th__texto" style="text-align:center;">junio_2023</th>
                        <th class="th__texto" style="text-align:center;">julio_2023</th>
                        <th class="th__texto" style="text-align:center;">agosto_2023</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2023</th>
                        <th class="th__texto" style="text-align:center;">octubre_2023</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2023</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2023</th>
                        <th class="th__texto" style="text-align:center;">enero_2024</th>
                        <th class="th__texto" style="text-align:center;">febrero_2024</th>
                        <th class="th__texto" style="text-align:center;">marzo_2024</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2024</th>
                        <th class="th__texto" style="text-align:center;">mayo_2024</th>
                        <th class="th__texto" style="text-align:center;">junio_2024</th>
                        <th class="th__texto" style="text-align:center;">julio_2024</th>
                        <th class="th__texto" style="text-align:center;">agosto_2024</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2024</th>
                        <th class="th__texto" style="text-align:center;">octubre_2024</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2024</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2024</th>
                        <th class="th__texto" style="text-align:center;">enero_2025</th>
                        <th class="th__texto" style="text-align:center;">febrero_2025</th>
                        <th class="th__texto" style="text-align:center;">marzo_2025</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2025</th>
                        <th class="th__texto" style="text-align:center;">mayo_2025</th>
                        <th class="th__texto" style="text-align:center;">junio_2025</th>
                        <th class="th__texto" style="text-align:center;">julio_2025</th>
                        <th class="th__texto" style="text-align:center;">agosto_2025</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2025</th>
                        <th class="th__texto" style="text-align:center;">octubre_2025</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2025</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2025</th>
                        <th class="th__texto" style="text-align:center;">enero_2026</th>
                        <th class="th__texto" style="text-align:center;">febrero_2026</th>
                        <th class="th__texto" style="text-align:center;">marzo_2026</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2026</th>
                        <th class="th__texto" style="text-align:center;">mayo_2026</th>
                        <th class="th__texto" style="text-align:center;">junio_2026</th>
                        <th class="th__texto" style="text-align:center;">julio_2026</th>
                        <th class="th__texto" style="text-align:center;">agosto_2026</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2026</th>
                        <th class="th__texto" style="text-align:center;">octubre_2026</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2026</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2026</th>
                        <th class="th__texto" style="text-align:center;">enero_2027</th>
                        <th class="th__texto" style="text-align:center;">febrero_2027</th>
                        <th class="th__texto" style="text-align:center;">marzo_2027</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2027</th>
                        <th class="th__texto" style="text-align:center;">mayo_2027</th>
                        <th class="th__texto" style="text-align:center;">junio_2027</th>
                        <th class="th__texto" style="text-align:center;">julio_2027</th>
                        <th class="th__texto" style="text-align:center;">agosto_2027</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2027</th>
                        <th class="th__texto" style="text-align:center;">octubre_2027</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2027</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2027</th>
                        <th class="th__texto" style="text-align:center;">enero_2028</th>
                        <th class="th__texto" style="text-align:center;">febrero_2028</th>
                        <th class="th__texto" style="text-align:center;">marzo_2028</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2028</th>
                        <th class="th__texto" style="text-align:center;">mayo_2028</th>
                        <th class="th__texto" style="text-align:center;">junio_2028</th>
                        <th class="th__texto" style="text-align:center;">julio_2028</th>
                        <th class="th__texto" style="text-align:center;">agosto_2028</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2028</th>
                        <th class="th__texto" style="text-align:center;">octubre_2028</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2028</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2028</th>
                        <th class="th__texto" style="text-align:center;">enero_2029</th>
                        <th class="th__texto" style="text-align:center;">febrero_2029</th>
                        <th class="th__texto" style="text-align:center;">marzo_2029</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2029</th>
                        <th class="th__texto" style="text-align:center;">mayo_2029</th>
                        <th class="th__texto" style="text-align:center;">junio_2029</th>
                        <th class="th__texto" style="text-align:center;">julio_2029</th>
                        <th class="th__texto" style="text-align:center;">agosto_2029</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2029</th>
                        <th class="th__texto" style="text-align:center;">octubre_2029</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2029</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2029</th>
                        <th class="th__texto" style="text-align:center;">enero_2030</th>
                        <th class="th__texto" style="text-align:center;">febrero_2030</th>
                        <th class="th__texto" style="text-align:center;">marzo_2030</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2030</th>
                        <th class="th__texto" style="text-align:center;">mayo_2030</th>
                        <th class="th__texto" style="text-align:center;">junio_2030</th>
                        <th class="th__texto" style="text-align:center;">julio_2030</th>
                        <th class="th__texto" style="text-align:center;">agosto_2030</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2030</th>
                        <th class="th__texto" style="text-align:center;">octubre_2030</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2030</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2030</th>
                        <th class="th__texto" style="text-align:center;">enero_2031</th>
                        <th class="th__texto" style="text-align:center;">febrero_2031</th>
                        <th class="th__texto" style="text-align:center;">marzo_2031</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2031</th>
                        <th class="th__texto" style="text-align:center;">mayo_2031</th>
                        <th class="th__texto" style="text-align:center;">junio_2031</th>
                        <th class="th__texto" style="text-align:center;">julio_2031</th>
                        <th class="th__texto" style="text-align:center;">agosto_2031</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2031</th>
                        <th class="th__texto" style="text-align:center;">octubre_2031</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2031</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2031</th>
                        <th class="th__texto" style="text-align:center;">enero_2032</th>
                        <th class="th__texto" style="text-align:center;">febrero_2032</th>
                        <th class="th__texto" style="text-align:center;">marzo_2032</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2032</th>
                        <th class="th__texto" style="text-align:center;">mayo_2032</th>
                        <th class="th__texto" style="text-align:center;">junio_2032</th>
                        <th class="th__texto" style="text-align:center;">julio_2032</th>
                        <th class="th__texto" style="text-align:center;">agosto_2032</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2032</th>
                        <th class="th__texto" style="text-align:center;">octubre_2032</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2032</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2032</th>
                        <th class="th__texto" style="text-align:center;">enero_2033</th>
                        <th class="th__texto" style="text-align:center;">febrero_2033</th>
                        <th class="th__texto" style="text-align:center;">marzo_2033</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2033</th>
                        <th class="th__texto" style="text-align:center;">mayo_2033</th>
                        <th class="th__texto" style="text-align:center;">junio_2033</th>
                        <th class="th__texto" style="text-align:center;">julio_2033</th>
                        <th class="th__texto" style="text-align:center;">agosto_2033</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2033</th>
                        <th class="th__texto" style="text-align:center;">octubre_2033</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2033</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2033</th>
                        <th class="th__texto" style="text-align:center;">enero_2034</th>                   
                        <th class="th__texto" style="text-align:center;">febrero_2034</th>
                        <th class="th__texto" style="text-align:center;">marzo_2034</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2034</th>
                        <th class="th__texto" style="text-align:center;">mayo_2034</th>
                        <th class="th__texto" style="text-align:center;">junio_2034</th>
                        <th class="th__texto" style="text-align:center;">julio_2034</th>
                        <th class="th__texto" style="text-align:center;">agosto_2034</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2034</th>
                        <th class="th__texto" style="text-align:center;">octubre_2034</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2034</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2034</th> 
                        <th class="th__texto" style="text-align:center;">enero_2035</th>  
                        <th class="th__texto" style="text-align:center;">febrero_2035</th>                    
                        <th class="th__texto" style="text-align:center;">marzo_2035</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2035</th>
                        <th class="th__texto" style="text-align:center;">mayo_2035</th>
                        <th class="th__texto" style="text-align:center;">junio_2035</th>
                        <th class="th__texto" style="text-align:center;">julio_2035</th>
                        <th class="th__texto" style="text-align:center;">agosto_2035</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2035</th>
                        <th class="th__texto" style="text-align:center;">octubre_2035</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2035</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2035</th> 
                        <th class="th__texto" style="text-align:center;">enero_2036</th>                   
                        <th class="th__texto" style="text-align:center;">febrero_2036</th>
                        <th class="th__texto" style="text-align:center;">marzo_2036</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2036</th>
                        <th class="th__texto" style="text-align:center;">mayo_2036</th>
                        <th class="th__texto" style="text-align:center;">junio_2036</th>
                        <th class="th__texto" style="text-align:center;">julio_2036</th>
                        <th class="th__texto" style="text-align:center;">agosto_2036</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2036</th>
                        <th class="th__texto" style="text-align:center;">octubre_2036</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2036</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2036</th>
                        <th class="th__texto" style="text-align:center;">enero_2037</th>                    
                        <th class="th__texto" style="text-align:center;">febrero_2037</th> 
                        <th class="th__texto" style="text-align:center;">marzo_2037</th> 
                        <th class="th__texto" style="text-align:center;">abrirl_2037</th>
                        <th class="th__texto" style="text-align:center;">mayo_2037</th>
                        <th class="th__texto" style="text-align:center;">junio_2037</th>
                        <th class="th__texto" style="text-align:center;">julio_2037</th>
                        <th class="th__texto" style="text-align:center;">agosto_2037</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2037</th>
                        <th class="th__texto" style="text-align:center;">octubre_2037</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2037</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2037</th>     
                        <th class="th__texto" style="text-align:center;">enero_2038</th>
                        <th class="th__texto" style="text-align:center;">febrero_2038</th>             
                        <th class="th__texto" style="text-align:center;">marzo_2038</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2038</th>
                        <th class="th__texto" style="text-align:center;">mayo_2038</th>
                        <th class="th__texto" style="text-align:center;">junio_2038</th>
                        <th class="th__texto" style="text-align:center;">julio_2038</th>
                        <th class="th__texto" style="text-align:center;">agosto_2038</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2038</th>
                        <th class="th__texto" style="text-align:center;">octubre_2038</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2038</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2038</th> 
                        <th class="th__texto" style="text-align:center;">enero_2039</th>
                        <th class="th__texto" style="text-align:center;">febrero_2039</th>                  
                        <th class="th__texto" style="text-align:center;">marzo_2039</th>
                        <th class="th__texto" style="text-align:center;">abril_2039</th>
                        <th class="th__texto" style="text-align:center;">mayo_2039</th>
                        <th class="th__texto" style="text-align:center;">junio_2039</th>
                        <th class="th__texto" style="text-align:center;">julio_2039</th>
                        <th class="th__texto" style="text-align:center;">agosto_2039</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2039</th>
                        <th class="th__texto" style="text-align:center;">octubre_2039</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2039</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2039</th>
                        <th class="th__texto" style="text-align:center;">enero_2040</th>
                        <th class="th__texto" style="text-align:center;">febrero_2040</th>                      
                        <th class="th__texto" style="text-align:center;">marzo_2040</th>
                        <th class="th__texto" style="text-align:center;">abril_2040</th>
                        <th class="th__texto" style="text-align:center;">mayo_2040</th>
                        <th class="th__texto" style="text-align:center;">junio_2040</th>
                        <th class="th__texto" style="text-align:center;">julio_2040</th>
                        <th class="th__texto" style="text-align:center;">agosto_2040</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2040</th>
                        <th class="th__texto" style="text-align:center;">octubre_2040</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2040</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2040</th>        
                        <th class="th__texto" style="text-align:center;">enero_2041</th>
                        <th class="th__texto" style="text-align:center;">febrero_2041</th>                      
                        <th class="th__texto" style="text-align:center;">marzo_2041</th>
                        <th class="th__texto" style="text-align:center;">abril_2041</th>
                        <th class="th__texto" style="text-align:center;">mayo_2041</th>
                        <th class="th__texto" style="text-align:center;">junio_2041</th>
                        <th class="th__texto" style="text-align:center;">julio_2041</th>
                        <th class="th__texto" style="text-align:center;">agosto_2041</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2041</th>
                        <th class="th__texto" style="text-align:center;">octubre_2041</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2041</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2041</th>    
                        <th class="th__texto" style="text-align:center;">enero_2042</th>
                        <th class="th__texto" style="text-align:center;">febrero_2042</th>                      
                        <th class="th__texto" style="text-align:center;">marzo_2042</th>
                        <th class="th__texto" style="text-align:center;">abril_2042</th>
                        <th class="th__texto" style="text-align:center;">mayo_2042</th>
                        <th class="th__texto" style="text-align:center;">junio_2042</th>
                        <th class="th__texto" style="text-align:center;">julio_2042</th>
                        <th class="th__texto" style="text-align:center;">agosto_2042</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2042</th>
                        <th class="th__texto" style="text-align:center;">octubre_2042</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2042</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2042</th>    
                        <th class="th__texto" style="text-align:center;">enero_2043</th>
                        <th class="th__texto" style="text-align:center;">febrero_2043</th>                      
                        <th class="th__texto" style="text-align:center;">marzo_2043</th>
                        <th class="th__texto" style="text-align:center;">abril_2043</th>
                        <th class="th__texto" style="text-align:center;">mayo_2043</th>
                        <th class="th__texto" style="text-align:center;">junio_2043</th>
                        <th class="th__texto" style="text-align:center;">julio_2043</th>
                        <th class="th__texto" style="text-align:center;">agosto_2043</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2043</th>
                        <th class="th__texto" style="text-align:center;">octubre_2043</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2043</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2043</th>              
                        <th class="th__texto" style="text-align:center;">enero_2044</th>
                        <th class="th__texto" style="text-align:center;">febrero_2044</th>                      
                        <th class="th__texto" style="text-align:center;">marzo_2044</th>
                        <th class="th__texto" style="text-align:center;">abril_2044</th>
                        <th class="th__texto" style="text-align:center;">mayo_2044</th>
                        <th class="th__texto" style="text-align:center;">junio_2044</th>
                        <th class="th__texto" style="text-align:center;">julio_2044</th>
                        <th class="th__texto" style="text-align:center;">agosto_2044</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2044</th>
                        <th class="th__texto" style="text-align:center;">octubre_2044</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2044</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2044</th>    
                        <th class="th__texto" style="text-align:center;">enero_2045</th>
                        <th class="th__texto" style="text-align:center;">febrero_2045</th>                      
                        <th class="th__texto" style="text-align:center;">marzo_2045</th>
                        <th class="th__texto" style="text-align:center;">abril_2045</th>
                        <th class="th__texto" style="text-align:center;">mayo_2045</th>
                        <th class="th__texto" style="text-align:center;">junio_2045</th>
                        <th class="th__texto" style="text-align:center;">julio_2045</th>
                        <th class="th__texto" style="text-align:center;">agosto_2045</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2045</th>
                        <th class="th__texto" style="text-align:center;">octubre_2045</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2045</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2045</th>    


                    </tr>
                  </thead>
                  <tbody>
                  <?php
                          foreach($datos as $item) {
                        ?>
                          <tr>
                            <!-- <td class="text-center">
                            <form action="../BaseDetalle/formulario.php" method="POST">
                                 Ocultar Boton -->
                                <!-- <input type="text" hidden value="" name="id">
                                <button class="border__none">
                                  <input type="text" hidden value="" name="id">
                                </button>
  
                                 
                            </form>
                          
                            </td> --> 
                          <td class="text-center"> <?php echo $item->LLAVE; ?> </td>
                          <td class="text-center"> <?php echo $item->LOTE;?> </td>
                          <td class="text-center"> <?php echo $item->CONDOMINIO;?> </td>
                          <td class="text-center"> <?php echo $item->CLÚSTER;?> </td>
                          <td class="text-center"> <?php echo $item->DESARROLLO; ?> </td>
                          <td class="text-center"> <?php echo $item->CLIENTE;?> </td>
                          <td class="text-center"> <?php echo $item->PRECIO_TOTAL;?> </td>
                          <td class="text-center"> <?php echo $item->ENGANCHE;?></td>
                          <td class="text-center"> <?php echo $item->MESES_1;?> </td>
                          <td class="text-center"> <?php echo $item->MESES_2;?> </td>
                          <td class="text-center"> <?php echo $item->MESES_3; ?> </td>
                          <td class="text-center"> <?php echo $item->MESES_TOTALES;?> </td>
                          <td class="text-center"> <?php echo $item->MEN_1;?> </td>
                          <td class="text-center"> <?php echo $item->MEN_2;?> </td>
                          <td class="text-center"> <?php echo $item->MEN_3;?> </td>
                          <td class="text-center"> <?php echo $item->INICIO_CORRIDA; ?> </td>
                          <td class="text-center"> <?php echo $item->PRIMER_ABONO;?> </td>
                          <td class="text-center"> <?php echo $item->MES_Y_AÑO_FIRMA;?> </td>
                          <td class="text-center"> <?php echo $item->ESPECIAL;?></td>
                          <td class="text-center"> <?php echo $item->enero_2020;?> </td>
                          <td class="text-center"> <?php echo $item->febrero_2020;?> </td>
                          <td class="text-center"> <?php echo $item->marzo_2020;?> </td>
                          <td class="text-center"> <?php echo $item->abril_2020; ?> </td>
                          <td class="text-center"> <?php echo $item->mayo_2020;?> </td>
                          <td class="text-center"> <?php echo $item->junio_2020;?> </td>
                          <td class="text-center"> <?php echo $item->julio_2020;?> </td>
                          <td class="text-center"> <?php echo $item->agosto_2020;?> </td>
                          <td class="text-center"> <?php echo $item->septiembre_2020; ?> </td>
                          <td class="text-center"> <?php echo $item->octubre_2020;?> </td>
                          <td class="text-center"> <?php echo $item->noviembre_2020;?> </td>
                          <td class="text-center"> <?php echo $item->diciembre_2020;?></td>
                          <td class="text-center"> <?php echo $item->enero_2021;?> </td>
                          <td class="text-center"> <?php echo $item->febrero_2021;?> </td>
                          <td class="text-center"> <?php echo $item->marzo_2021;?> </td>
                          <td class="text-center"> <?php echo $item->abril_2021; ?> </td>
                          <td class="text-center"> <?php echo $item->mayo_2021;?> </td>
                          <td class="text-center"> <?php echo $item->junio_2021;?> </td>
                          <td class="text-center"> <?php echo $item->julio_2021;?> </td>
                          <td class="text-center"> <?php echo $item->agosto_2021;?> </td>
                          <td class="text-center"> <?php echo $item->septiembre_2021; ?> </td>
                          <td class="text-center"> <?php echo $item->octubre_2021;?> </td>
                          <td class="text-center"> <?php echo $item->noviembre_2020;?> </td>
                          <td class="text-center"> <?php echo $item->diciembre_2021;?></td>
                          <td class="text-center"> <?php echo $item->enero_2022;?> </td>
                          <td class="text-center"> <?php echo $item->febrero_2022;?> </td>
                          <td class="text-center"> <?php echo $item->marzo_2022;?> </td>
                          <td class="text-center"> <?php echo $item->abril_2022; ?> </td>
                          <td class="text-center"> <?php echo $item->mayo_2022;?> </td>
                          <td class="text-center"> <?php echo $item->junio_2022;?> </td>
                          <td class="text-center"> <?php echo $item->julio_2022;?> </td>
                          <td class="text-center"> <?php echo $item->agosto_2022;?> </td>
                          <td class="text-center"> <?php echo $item->septiembre_2022; ?> </td>
                          <td class="text-center"> <?php echo $item->octubre_2022;?> </td>
                          <td class="text-center"> <?php echo $item->noviembre_2022;?> </td>
                          <td class="text-center"> <?php echo $item->diciembre_2022;?></td>
                          <td class="text-center"> <?php echo $item->enero_2023;?> </td>
                          <td class="text-center"> <?php echo $item->febrero_2023;?> </td>
                          <td class="text-center"> <?php echo $item->marzo_2023;?> </td>
                          <td class="text-center"> <?php echo $item->abril_2023; ?> </td>
                          <td class="text-center"> <?php echo $item->mayo_2023;?> </td>
                          <td class="text-center"> <?php echo $item->junio_2023;?> </td>
                          <td class="text-center"> <?php echo $item->julio_2023;?> </td>
                          <td class="text-center"> <?php echo $item->agosto_2023;?> </td>
                          <td class="text-center"> <?php echo $item->septiembre_2023; ?> </td>
                          <td class="text-center"> <?php echo $item->octubre_2023;?> </td>
                          <td class="text-center"> <?php echo $item->noviembre_2023;?> </td>
                          <td class="text-center"> <?php echo $item->diciembre_2023;?></td>
                          <td class="text-center"> <?php echo $item->enero_2024;?> </td>
                          <td class="text-center"> <?php echo $item->febrero_2024;?> </td>
                          <td class="text-center"> <?php echo $item->marzo_2024;?> </td>
                          <td class="text-center"> <?php echo $item->abril_2024; ?> </td>
                          <td class="text-center"> <?php echo $item->mayo_2024;?> </td>
                          <td class="text-center"> <?php echo $item->junio_2024;?> </td>
                          <td class="text-center"> <?php echo $item->julio_2024;?> </td>
                          <td class="text-center"> <?php echo $item->agosto_2024;?> </td>
                          <td class="text-center"> <?php echo $item->septiembre_2024; ?> </td>
                          <td class="text-center"> <?php echo $item->octubre_2024;?> </td>
                          <td class="text-center"> <?php echo $item->noviembre_2024;?> </td>
                          <td class="text-center"> <?php echo $item->diciembre_2024;?></td>
                          <td class="text-center"> <?php echo $item->enero_2025;?> </td>
                          <td class="text-center"> <?php echo $item->febrero_2025;?> </td>
                          <td class="text-center"> <?php echo $item->marzo_2025;?> </td>
                          <td class="text-center"> <?php echo $item->abril_2025; ?> </td>
                          <td class="text-center"> <?php echo $item->mayo_2025;?> </td>
                          <td class="text-center"> <?php echo $item->junio_2025;?> </td>
                          <td class="text-center"> <?php echo $item->julio_2025;?> </td>
                          <td class="text-center"> <?php echo $item->agosto_2025;?> </td>
                          <td class="text-center"> <?php echo $item->septiembre_2025; ?> </td>
                          <td class="text-center"> <?php echo $item->octubre_2025;?> </td>
                          <td class="text-center"> <?php echo $item->noviembre_2025;?> </td>
                          <td class="text-center"> <?php echo $item->diciembre_2025;?></td>
                          <td class="text-center"> <?php echo $item->enero_2025;?> </td>
                          <td class="text-center"> <?php echo $item->febrero_2025;?> </td>
                          <td class="text-center"> <?php echo $item->marzo_2025;?> </td>
                          <td class="text-center"> <?php echo $item->abril_2025; ?> </td>
                          <td class="text-center"> <?php echo $item->mayo_2025;?> </td>
                          <td class="text-center"> <?php echo $item->junio_2025;?> </td>
                          <td class="text-center"> <?php echo $item->julio_2025;?> </td>
                          <td class="text-center"> <?php echo $item->agosto_2025;?> </td>
                          <td class="text-center"> <?php echo $item->septiembre_2025; ?> </td>
                          <td class="text-center"> <?php echo $item->octubre_2025;?> </td>
                          <td class="text-center"> <?php echo $item->noviembre_2025;?> </td>
                          <td class="text-center"> <?php echo $item->diciembre_2025;?></td>
                          <td class="text-center"> <?php echo $item->enero_2026;?> </td>
                          <td class="text-center"> <?php echo $item->febrero_2026;?> </td>
                          <td class="text-center"> <?php echo $item->marzo_2026;?> </td>
                          <td class="text-center"> <?php echo $item->abril_2026; ?> </td>
                          <td class="text-center"> <?php echo $item->mayo_2026;?> </td>
                          <td class="text-center"> <?php echo $item->junio_2026;?> </td>
                          <td class="text-center"> <?php echo $item->julio_2026;?> </td>
                          <td class="text-center"> <?php echo $item->agosto_2026;?> </td>
                          <td class="text-center"> <?php echo $item->septiembre_2026; ?> </td>
                          <td class="text-center"> <?php echo $item->octubre_2026;?> </td>
                          <td class="text-center"> <?php echo $item->noviembre_2026;?> </td>
                          <td class="text-center"> <?php echo $item->diciembre_2026;?></td>
                          <td class="text-center"> <?php echo $item->enero_2027;?> </td>
                          <td class="text-center"> <?php echo $item->febrero_2027;?> </td>
                          <td class="text-center"> <?php echo $item->marzo_2027;?> </td>
                          <td class="text-center"> <?php echo $item->abril_2027; ?> </td>
                          <td class="text-center"> <?php echo $item->mayo_2027;?> </td>
                          <td class="text-center"> <?php echo $item->junio_2027;?> </td>
                          <td class="text-center"> <?php echo $item->julio_2027;?> </td>
                          <td class="text-center"> <?php echo $item->agosto_2027;?> </td>
                          <td class="text-center"> <?php echo $item->septiembre_2027; ?> </td>
                          <td class="text-center"> <?php echo $item->octubre_2027;?> </td>
                          <td class="text-center"> <?php echo $item->noviembre_2027;?> </td>
                          <td class="text-center"> <?php echo $item->diciembre_2027;?></td>
                          <td class="text-center"> <?php echo $item->enero_2028;?> </td>
                          <td class="text-center"> <?php echo $item->febrero_2028;?> </td>
                          <td class="text-center"> <?php echo $item->marzo_2028;?> </td>
                          <td class="text-center"> <?php echo $item->abril_2028; ?> </td>
                          <td class="text-center"> <?php echo $item->mayo_2028;?> </td>
                          <td class="text-center"> <?php echo $item->junio_2028;?> </td>
                          <td class="text-center"> <?php echo $item->julio_2028;?> </td>
                          <td class="text-center"> <?php echo $item->agosto_2028;?> </td>
                          <td class="text-center"> <?php echo $item->septiembre_2028; ?> </td>
                          <td class="text-center"> <?php echo $item->octubre_2028;?> </td>
                          <td class="text-center"> <?php echo $item->noviembre_2028;?> </td>
                          <td class="text-center"> <?php echo $item->diciembre_2028;?></td>
                          <td class="text-center"> <?php echo $item->enero_2029;?> </td>
                          <td class="text-center"> <?php echo $item->febrero_2029;?> </td>
                          <td class="text-center"> <?php echo $item->marzo_2029;?> </td>
                          <td class="text-center"> <?php echo $item->abril_2029; ?> </td>
                          <td class="text-center"> <?php echo $item->mayo_2029;?> </td>
                          <td class="text-center"> <?php echo $item->junio_2029;?> </td>
                          <td class="text-center"> <?php echo $item->julio_2029;?> </td>
                          <td class="text-center"> <?php echo $item->agosto_2029;?> </td>
                          <td class="text-center"> <?php echo $item->septiembre_2029; ?> </td>
                          <td class="text-center"> <?php echo $item->octubre_2029;?> </td>
                          <td class="text-center"> <?php echo $item->noviembre_2029;?> </td>
                          <td class="text-center"> <?php echo $item->diciembre_2029;?></td>
                          <td class="text-center"> <?php echo $item->enero_2030;?> </td>
                          <td class="text-center"> <?php echo $item->febrero_2030;?> </td>
                          <td class="text-center"> <?php echo $item->marzo_2030;?> </td>
                          <td class="text-center"> <?php echo $item->abril_2030; ?> </td>
                          <td class="text-center"> <?php echo $item->mayo_2030;?> </td>
                          <td class="text-center"> <?php echo $item->junio_2030;?> </td>
                          <td class="text-center"> <?php echo $item->julio_2030;?> </td>
                          <td class="text-center"> <?php echo $item->agosto_2030;?> </td>
                          <td class="text-center"> <?php echo $item->septiembre_2030; ?> </td>
                          <td class="text-center"> <?php echo $item->octubre_2030;?> </td>
                          <td class="text-center"> <?php echo $item->noviembre_2030;?> </td>
                          <td class="text-center"> <?php echo $item->diciembre_2030;?></td>
                          <td class="text-center"> <?php echo $item->enero_2031;?> </td>
                          <td class="text-center"> <?php echo $item->febrero_2031;?> </td>
                          <td class="text-center"> <?php echo $item->marzo_2031;?> </td>
                          <td class="text-center"> <?php echo $item->abril_2031; ?> </td>
                          <td class="text-center"> <?php echo $item->mayo_2031;?> </td>
                          <td class="text-center"> <?php echo $item->junio_2031;?> </td>
                          <td class="text-center"> <?php echo $item->julio_2031;?> </td>
                          <td class="text-center"> <?php echo $item->agosto_2031;?> </td>
                          <td class="text-center"> <?php echo $item->septiembre_2031; ?> </td>
                          <td class="text-center"> <?php echo $item->octubre_2031;?> </td>
                          <td class="text-center"> <?php echo $item->noviembre_2031;?> </td>
                          <td class="text-center"> <?php echo $item->diciembre_2031;?></td>
                          <td class="text-center"> <?php echo $item->enero_2032;?> </td>
                          <td class="text-center"> <?php echo $item->febrero_2032;?> </td>
                          <td class="text-center"> <?php echo $item->marzo_2032;?> </td>
                          <td class="text-center"> <?php echo $item->abril_2032; ?> </td>
                          <td class="text-center"> <?php echo $item->mayo_2032;?> </td>
                          <td class="text-center"> <?php echo $item->junio_2032;?> </td>
                          <td class="text-center"> <?php echo $item->julio_2032;?> </td>
                          <td class="text-center"> <?php echo $item->agosto_2032;?> </td>
                          <td class="text-center"> <?php echo $item->septiembre_2032; ?> </td>
                          <td class="text-center"> <?php echo $item->octubre_2032;?> </td>
                          <td class="text-center"> <?php echo $item->noviembre_2032;?> </td>
                          <td class="text-center"> <?php echo $item->diciembre_2032;?></td>
                          <td class="text-center"> <?php echo $item->enero_2033;?> </td>
                          <td class="text-center"> <?php echo $item->febrero_2033;?> </td>
                          <td class="text-center"> <?php echo $item->marzo_2033;?> </td>
                          <td class="text-center"> <?php echo $item->abril_2033; ?> </td>
                          <td class="text-center"> <?php echo $item->mayo_2033;?> </td>
                          <td class="text-center"> <?php echo $item->junio_2033;?> </td>
                          <td class="text-center"> <?php echo $item->julio_2033;?> </td>
                          <td class="text-center"> <?php echo $item->agosto_2033;?> </td>
                          <td class="text-center"> <?php echo $item->septiembre_2033; ?> </td>
                          <td class="text-center"> <?php echo $item->octubre_2033;?> </td>
                          <td class="text-center"> <?php echo $item->noviembre_2033;?> </td>
                          <td class="text-center"> <?php echo $item->diciembre_2033;?></td>
                          <td class="text-center"> <?php echo $item->enero_2034;?></td>
                          <td class="text-center"> <?php echo $item->febrero_2034;?> </td>
                          <td class="text-center"> <?php echo $item->marzo_2034;?> </td>
                          <td class="text-center"> <?php echo $item->abril_2034; ?> </td>
                          <td class="text-center"> <?php echo $item->mayo_2034;?> </td>
                          <td class="text-center"> <?php echo $item->junio_2034;?> </td>
                          <td class="text-center"> <?php echo $item->julio_2034;?> </td>
                          <td class="text-center"> <?php echo $item->agosto_2034;?> </td>
                          <td class="text-center"> <?php echo $item->septiembre_2034; ?> </td>
                          <td class="text-center"> <?php echo $item->octubre_2034;?> </td>
                          <td class="text-center"> <?php echo $item->noviembre_2034;?> </td>
                          <td class="text-center"> <?php echo $item->diciembre_2034;?></td>
                          <td class="text-center"> <?php echo $item->enero_2035;?> </td>
                          <td class="text-center"> <?php echo $item->febrero_2035;?> </td>
                          <td class="text-center"> <?php echo $item->marzo_2035;?> </td>
                          <td class="text-center"> <?php echo $item->abril_2035; ?> </td>
                          <td class="text-center"> <?php echo $item->mayo_2035;?> </td>
                          <td class="text-center"> <?php echo $item->junio_2035;?> </td>
                          <td class="text-center"> <?php echo $item->julio_2035;?> </td>
                          <td class="text-center"> <?php echo $item->agosto_2035;?> </td>
                          <td class="text-center"> <?php echo $item->septiembre_2035; ?> </td>
                          <td class="text-center"> <?php echo $item->octubre_2035;?> </td>
                          <td class="text-center"> <?php echo $item->noviembre_2035;?> </td>
                          <td class="text-center"> <?php echo $item->diciembre_2035;?></td>
                          <td class="text-center"> <?php echo $item->enero_2036;?> </td>
                          <td class="text-center"> <?php echo $item->febrero_2036;?> </td>
                          <td class="text-center"> <?php echo $item->marzo_2036;?> </td>
                          <td class="text-center"> <?php echo $item->abril_2036; ?> </td>
                          <td class="text-center"> <?php echo $item->mayo_2036;?> </td>
                          <td class="text-center"> <?php echo $item->junio_2036;?> </td>
                          <td class="text-center"> <?php echo $item->julio_2036;?> </td>
                          <td class="text-center"> <?php echo $item->agosto_2036;?> </td>
                          <td class="text-center"> <?php echo $item->septiembre_2036; ?> </td>
                          <td class="text-center"> <?php echo $item->octubre_2036;?> </td>
                          <td class="text-center"> <?php echo $item->noviembre_2036;?> </td>
                          <td class="text-center"> <?php echo $item->diciembre_2036;?></td>
                          <td class="text-center"> <?php echo $item->enero_2037;?> </td>
                          <td class="text-center"> <?php echo $item->febrero_2037;?> </td>
                          <td class="text-center"> <?php echo $item->marzo_2037;?> </td>
                          <td class="text-center"> <?php echo $item->abril_2037; ?> </td>
                          <td class="text-center"> <?php echo $item->mayo_2037;?> </td>
                          <td class="text-center"> <?php echo $item->junio_2037;?> </td>
                          <td class="text-center"> <?php echo $item->julio_2037;?> </td>
                          <td class="text-center"> <?php echo $item->agosto_2037;?> </td>
                          <td class="text-center"> <?php echo $item->septiembre_2037; ?> </td>
                          <td class="text-center"> <?php echo $item->octubre_2037;?> </td>
                          <td class="text-center"> <?php echo $item->noviembre_2037;?> </td>
                          <td class="text-center"> <?php echo $item->diciembre_2037;?></td>
                          <td class="text-center"> <?php echo $item->enero_2038;?> </td>
                          <td class="text-center"> <?php echo $item->febrero_2038;?> </td>
                          <td class="text-center"> <?php echo $item->marzo_2038;?> </td>
                          <td class="text-center"> <?php echo $item->abril_2038; ?> </td>
                          <td class="text-center"> <?php echo $item->mayo_2038;?> </td>
                          <td class="text-center"> <?php echo $item->junio_2038;?> </td>
                          <td class="text-center"> <?php echo $item->julio_2038;?> </td>
                          <td class="text-center"> <?php echo $item->agosto_2038;?> </td>
                          <td class="text-center"> <?php echo $item->septiembre_2038; ?> </td>
                          <td class="text-center"> <?php echo $item->octubre_2038;?> </td>
                          <td class="text-center"> <?php echo $item->noviembre_2038;?> </td>
                          <td class="text-center"> <?php echo $item->diciembre_2038;?></td>
                          <td class="text-center"> <?php echo $item->enero_2039;?> </td>
                          <td class="text-center"> <?php echo $item->febrero_2039;?> </td>
                          <td class="text-center"> <?php echo $item->marzo_2039;?> </td>
                          <td class="text-center"> <?php echo $item->abril_2039; ?> </td>
                          <td class="text-center"> <?php echo $item->mayo_2039;?> </td>
                          <td class="text-center"> <?php echo $item->junio_2039;?> </td>
                          <td class="text-center"> <?php echo $item->julio_2039;?> </td>
                          <td class="text-center"> <?php echo $item->agosto_2039;?> </td>
                          <td class="text-center"> <?php echo $item->septiembre_2039; ?> </td>
                          <td class="text-center"> <?php echo $item->octubre_2039;?> </td>
                          <td class="text-center"> <?php echo $item->noviembre_2039;?> </td>
                          <td class="text-center"> <?php echo $item->diciembre_2039;?></td>
                          <td class="text-center"> <?php echo $item->enero_2040;?> </td>
                          <td class="text-center"> <?php echo $item->febrero_2040;?> </td>
                          <td class="text-center"> <?php echo $item->marzo_2040;?> </td>
                          <td class="text-center"> <?php echo $item->abril_2040; ?> </td>
                          <td class="text-center"> <?php echo $item->mayo_2040;?> </td>
                          <td class="text-center"> <?php echo $item->junio_2040;?> </td>
                          <td class="text-center"> <?php echo $item->julio_2040;?> </td>
                          <td class="text-center"> <?php echo $item->agosto_2040;?> </td>
                          <td class="text-center"> <?php echo $item->septiembre_2040; ?> </td>
                          <td class="text-center"> <?php echo $item->octubre_2040;?> </td>
                          <td class="text-center"> <?php echo $item->noviembre_2040;?> </td>
                          <td class="text-center"> <?php echo $item->diciembre_2040;?></td>
                          <td class="text-center"> <?php echo $item->enero_2041;?> </td>
                          <td class="text-center"> <?php echo $item->febrero_2041;?> </td>
                          <td class="text-center"> <?php echo $item->marzo_2041;?> </td>
                          <td class="text-center"> <?php echo $item->abril_2041; ?> </td>
                          <td class="text-center"> <?php echo $item->mayo_2041;?> </td>
                          <td class="text-center"> <?php echo $item->junio_2041;?> </td>
                          <td class="text-center"> <?php echo $item->julio_2041;?> </td>
                          <td class="text-center"> <?php echo $item->agosto_2041;?> </td>
                          <td class="text-center"> <?php echo $item->septiembre_2041; ?> </td>
                          <td class="text-center"> <?php echo $item->octubre_2041;?> </td>
                          <td class="text-center"> <?php echo $item->noviembre_2041;?> </td>
                          <td class="text-center"> <?php echo $item->diciembre_2041;?></td>
                          <td class="text-center"> <?php echo $item->enero_2042;?> </td>
                          <td class="text-center"> <?php echo $item->febrero_2042;?> </td>
                          <td class="text-center"> <?php echo $item->marzo_2042;?> </td>
                          <td class="text-center"> <?php echo $item->abril_2042; ?> </td>
                          <td class="text-center"> <?php echo $item->mayo_2042;?> </td>
                          <td class="text-center"> <?php echo $item->junio_2042;?> </td>
                          <td class="text-center"> <?php echo $item->julio_2042;?> </td>
                          <td class="text-center"> <?php echo $item->agosto_2042;?> </td>
                          <td class="text-center"> <?php echo $item->septiembre_2042; ?> </td>
                          <td class="text-center"> <?php echo $item->octubre_2042;?> </td>
                          <td class="text-center"> <?php echo $item->noviembre_2042;?> </td>
                          <td class="text-center"> <?php echo $item->diciembre_2042;?></td>
                          <td class="text-center"> <?php echo $item->enero_2043;?> </td>
                          <td class="text-center"> <?php echo $item->febrero_2043;?> </td>
                          <td class="text-center"> <?php echo $item->marzo_2043;?> </td>
                          <td class="text-center"> <?php echo $item->abril_2043; ?> </td>
                          <td class="text-center"> <?php echo $item->mayo_2043;?> </td>
                          <td class="text-center"> <?php echo $item->junio_2043;?> </td>
                          <td class="text-center"> <?php echo $item->julio_2043;?> </td>
                          <td class="text-center"> <?php echo $item->agosto_2043;?> </td>
                          <td class="text-center"> <?php echo $item->septiembre_2043; ?> </td>
                          <td class="text-center"> <?php echo $item->octubre_2043;?> </td>
                          <td class="text-center"> <?php echo $item->noviembre_2043;?> </td>
                          <td class="text-center"> <?php echo $item->diciembre_2043;?></td>
                          <td class="text-center"> <?php echo $item->enero_2044;?> </td>
                          <td class="text-center"> <?php echo $item->febrero_2044;?> </td>
                          <td class="text-center"> <?php echo $item->marzo_2044;?> </td>
                          <td class="text-center"> <?php echo $item->abril_2044; ?> </td>
                          <td class="text-center"> <?php echo $item->mayo_2044;?> </td>
                          <td class="text-center"> <?php echo $item->junio_2044;?> </td>
                          <td class="text-center"> <?php echo $item->julio_2044;?> </td>
                          <td class="text-center"> <?php echo $item->agosto_2044;?> </td>
                          <td class="text-center"> <?php echo $item->septiembre_2044; ?> </td>
                          <td class="text-center"> <?php echo $item->octubre_2044;?> </td>
                          <td class="text-center"> <?php echo $item->noviembre_2044;?> </td>
                          <td class="text-center"> <?php echo $item->diciembre_2044;?></td>
                          <td class="text-center"> <?php echo $item->enero_2045;?> </td>
                          <td class="text-center"> <?php echo $item->febrero_2045;?> </td>
                          <td class="text-center"> <?php echo $item->marzo_2045;?> </td>
                          <td class="text-center"> <?php echo $item->abril_2045; ?> </td>
                          <td class="text-center"> <?php echo $item->mayo_2045;?> </td>
                          <td class="text-center"> <?php echo $item->junio_2045;?> </td>
                          <td class="text-center"> <?php echo $item->julio_2045;?> </td>
                          <td class="text-center"> <?php echo $item->agosto_2045;?> </td>
                          <td class="text-center"> <?php echo $item->septiembre_2045; ?> </td>
                          <td class="text-center"> <?php echo $item->octubre_2045;?> </td>
                          <td class="text-center"> <?php echo $item->noviembre_2045;?> </td>
                          <td class="text-center"> <?php echo $item->diciembre_2045;?></td>

                           
                         
                          </tr>
                          <?php } ?> 
                  </tbody>
                  <tfoot class="bg-blue">
                    <tr>


                    <th class="th__texto" style="text-align:center;">LLAVE</th>                        
                        <th class="th__texto" style="text-align:center;">LOTE</th>
                        <th class="th__texto" style="text-align:center;">CONDOMINIO</th>
                        <th class="th__texto" style="text-align:center;">CLÚSTER</th>
                        <th class="th__texto" style="text-align:center;">DESARROLLO</th>
                        <th class="th__texto" style="text-align:center;">CLIENTE</th>
                        <th class="th__texto" style="text-align:center;">PRECIO_TOTAL</th>
                        <th class="th__texto" style="text-align:center;">ENGANCHE</th>
                        <th class="th__texto" style="text-align:center;">MESES_1</th>
                        <th class="th__texto" style="text-align:center;">MESES_2</th>
                        <th class="th__texto" style="text-align:center;">MESES_3</th>
                        <th class="th__texto" style="text-align:center;">MESES_TOTALES</th>
                        <th class="th__texto" style="text-align:center;">MEN_1</th>
                        <th class="th__texto" style="text-align:center;">MEN_2</th>
                        <th class="th__texto" style="text-align:center;">MEN_3</th>
                        <th class="th__texto" style="text-align:center;">INICIO_CORRIDA</th>
                        <th class="th__texto" style="text-align:center;">PRIMER_ABONO</th>
                        <th class="th__texto" style="text-align:center;">MES_Y_AÑO_FIRMA</th>
                        <th class="th__texto" style="text-align:center;">ESPECIAL</th>
                        <th class="th__texto" style="text-align:center;">enero_2020</th>
                        <th class="th__texto" style="text-align:center;">febrero_2020</th>
                        <th class="th__texto" style="text-align:center;">marzo_2020</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2020</th>
                        <th class="th__texto" style="text-align:center;">mayo_2020</th>
                        <th class="th__texto" style="text-align:center;">junio_2020</th>
                        <th class="th__texto" style="text-align:center;">julio_2020</th>
                        <th class="th__texto" style="text-align:center;">agosto_2020</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2020</th>
                        <th class="th__texto" style="text-align:center;">octubre_2020</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2020</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2020</th>
                        <th class="th__texto" style="text-align:center;">enero_2021</th>
                        <th class="th__texto" style="text-align:center;">febrero_2021</th>
                        <th class="th__texto" style="text-align:center;">marzo_2021</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2021</th>
                        <th class="th__texto" style="text-align:center;">mayo_2021</th>
                        <th class="th__texto" style="text-align:center;">junio_2021</th>
                        <th class="th__texto" style="text-align:center;">julio_2021</th>
                        <th class="th__texto" style="text-align:center;">agosto_2021</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2021</th>
                        <th class="th__texto" style="text-align:center;">octubre_2021</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2021</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2021</th>
                        <th class="th__texto" style="text-align:center;">enero_2022</th>
                        <th class="th__texto" style="text-align:center;">febrero_2022</th>
                        <th class="th__texto" style="text-align:center;">marzo_2022</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2022</th>
                        <th class="th__texto" style="text-align:center;">mayo_2022</th>
                        <th class="th__texto" style="text-align:center;">junio_2022</th>
                        <th class="th__texto" style="text-align:center;">julio_2022</th>
                        <th class="th__texto" style="text-align:center;">agosto_2022</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2022</th>
                        <th class="th__texto" style="text-align:center;">octubre_2022</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2022</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2022</th>
                        <th class="th__texto" style="text-align:center;">enero_2023</th>
                        <th class="th__texto" style="text-align:center;">febrero_2023</th>
                        <th class="th__texto" style="text-align:center;">marzo_2023</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2023</th>
                        <th class="th__texto" style="text-align:center;">mayo_2023</th>
                        <th class="th__texto" style="text-align:center;">junio_2023</th>
                        <th class="th__texto" style="text-align:center;">julio_2023</th>
                        <th class="th__texto" style="text-align:center;">agosto_2023</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2023</th>
                        <th class="th__texto" style="text-align:center;">octubre_2023</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2023</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2023</th>
                        <th class="th__texto" style="text-align:center;">enero_2024</th>
                        <th class="th__texto" style="text-align:center;">febrero_2024</th>
                        <th class="th__texto" style="text-align:center;">marzo_2024</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2024</th>
                        <th class="th__texto" style="text-align:center;">mayo_2024</th>
                        <th class="th__texto" style="text-align:center;">junio_2024</th>
                        <th class="th__texto" style="text-align:center;">julio_2024</th>
                        <th class="th__texto" style="text-align:center;">agosto_2024</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2024</th>
                        <th class="th__texto" style="text-align:center;">octubre_2024</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2024</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2024</th>
                        <th class="th__texto" style="text-align:center;">enero_2025</th>
                        <th class="th__texto" style="text-align:center;">febrero_2025</th>
                        <th class="th__texto" style="text-align:center;">marzo_2025</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2025</th>
                        <th class="th__texto" style="text-align:center;">mayo_2025</th>
                        <th class="th__texto" style="text-align:center;">junio_2025</th>
                        <th class="th__texto" style="text-align:center;">julio_2025</th>
                        <th class="th__texto" style="text-align:center;">agosto_2025</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2025</th>
                        <th class="th__texto" style="text-align:center;">octubre_2025</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2025</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2025</th>
                        <th class="th__texto" style="text-align:center;">enero_2026</th>
                        <th class="th__texto" style="text-align:center;">febrero_2026</th>
                        <th class="th__texto" style="text-align:center;">marzo_2026</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2026</th>
                        <th class="th__texto" style="text-align:center;">mayo_2026</th>
                        <th class="th__texto" style="text-align:center;">junio_2026</th>
                        <th class="th__texto" style="text-align:center;">julio_2026</th>
                        <th class="th__texto" style="text-align:center;">agosto_2026</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2026</th>
                        <th class="th__texto" style="text-align:center;">octubre_2026</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2026</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2026</th>
                        <th class="th__texto" style="text-align:center;">enero_2027</th>
                        <th class="th__texto" style="text-align:center;">febrero_2027</th>
                        <th class="th__texto" style="text-align:center;">marzo_2027</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2027</th>
                        <th class="th__texto" style="text-align:center;">mayo_2027</th>
                        <th class="th__texto" style="text-align:center;">junio_2027</th>
                        <th class="th__texto" style="text-align:center;">julio_2027</th>
                        <th class="th__texto" style="text-align:center;">agosto_2027</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2027</th>
                        <th class="th__texto" style="text-align:center;">octubre_2027</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2027</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2027</th>
                        <th class="th__texto" style="text-align:center;">enero_2028</th>
                        <th class="th__texto" style="text-align:center;">febrero_2028</th>
                        <th class="th__texto" style="text-align:center;">marzo_2028</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2028</th>
                        <th class="th__texto" style="text-align:center;">mayo_2028</th>
                        <th class="th__texto" style="text-align:center;">junio_2028</th>
                        <th class="th__texto" style="text-align:center;">julio_2028</th>
                        <th class="th__texto" style="text-align:center;">agosto_2028</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2028</th>
                        <th class="th__texto" style="text-align:center;">octubre_2028</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2028</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2028</th>
                        <th class="th__texto" style="text-align:center;">enero_2029</th>
                        <th class="th__texto" style="text-align:center;">febrero_2029</th>
                        <th class="th__texto" style="text-align:center;">marzo_2029</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2029</th>
                        <th class="th__texto" style="text-align:center;">mayo_2029</th>
                        <th class="th__texto" style="text-align:center;">junio_2029</th>
                        <th class="th__texto" style="text-align:center;">julio_2029</th>
                        <th class="th__texto" style="text-align:center;">agosto_2029</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2029</th>
                        <th class="th__texto" style="text-align:center;">octubre_2029</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2029</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2029</th>
                        <th class="th__texto" style="text-align:center;">enero_2030</th>
                        <th class="th__texto" style="text-align:center;">febrero_2030</th>
                        <th class="th__texto" style="text-align:center;">marzo_2030</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2030</th>
                        <th class="th__texto" style="text-align:center;">mayo_2030</th>
                        <th class="th__texto" style="text-align:center;">junio_2030</th>
                        <th class="th__texto" style="text-align:center;">julio_2030</th>
                        <th class="th__texto" style="text-align:center;">agosto_2030</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2030</th>
                        <th class="th__texto" style="text-align:center;">octubre_2030</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2030</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2030</th>
                        <th class="th__texto" style="text-align:center;">enero_2031</th>
                        <th class="th__texto" style="text-align:center;">febrero_2031</th>
                        <th class="th__texto" style="text-align:center;">marzo_2031</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2031</th>
                        <th class="th__texto" style="text-align:center;">mayo_2031</th>
                        <th class="th__texto" style="text-align:center;">junio_2031</th>
                        <th class="th__texto" style="text-align:center;">julio_2031</th>
                        <th class="th__texto" style="text-align:center;">agosto_2031</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2031</th>
                        <th class="th__texto" style="text-align:center;">octubre_2031</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2031</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2031</th>
                        <th class="th__texto" style="text-align:center;">enero_2032</th>
                        <th class="th__texto" style="text-align:center;">febrero_2032</th>
                        <th class="th__texto" style="text-align:center;">marzo_2032</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2032</th>
                        <th class="th__texto" style="text-align:center;">mayo_2032</th>
                        <th class="th__texto" style="text-align:center;">junio_2032</th>
                        <th class="th__texto" style="text-align:center;">julio_2032</th>
                        <th class="th__texto" style="text-align:center;">agosto_2032</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2032</th>
                        <th class="th__texto" style="text-align:center;">octubre_2032</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2032</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2032</th>
                        <th class="th__texto" style="text-align:center;">enero_2033</th>
                        <th class="th__texto" style="text-align:center;">febrero_2033</th>
                        <th class="th__texto" style="text-align:center;">marzo_2033</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2033</th>
                        <th class="th__texto" style="text-align:center;">mayo_2033</th>
                        <th class="th__texto" style="text-align:center;">junio_2033</th>
                        <th class="th__texto" style="text-align:center;">julio_2033</th>
                        <th class="th__texto" style="text-align:center;">agosto_2033</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2033</th>
                        <th class="th__texto" style="text-align:center;">octubre_2033</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2033</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2033</th>
                        <th class="th__texto" style="text-align:center;">enero_2034</th>                   
                        <th class="th__texto" style="text-align:center;">febrero_2034</th>
                        <th class="th__texto" style="text-align:center;">marzo_2034</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2034</th>
                        <th class="th__texto" style="text-align:center;">mayo_2034</th>
                        <th class="th__texto" style="text-align:center;">junio_2034</th>
                        <th class="th__texto" style="text-align:center;">julio_2034</th>
                        <th class="th__texto" style="text-align:center;">agosto_2034</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2034</th>
                        <th class="th__texto" style="text-align:center;">octubre_2034</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2034</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2034</th> 
                        <th class="th__texto" style="text-align:center;">enero_2035</th>  
                        <th class="th__texto" style="text-align:center;">febrero_2035</th>                    
                        <th class="th__texto" style="text-align:center;">marzo_2035</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2035</th>
                        <th class="th__texto" style="text-align:center;">mayo_2035</th>
                        <th class="th__texto" style="text-align:center;">junio_2035</th>
                        <th class="th__texto" style="text-align:center;">julio_2035</th>
                        <th class="th__texto" style="text-align:center;">agosto_2035</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2035</th>
                        <th class="th__texto" style="text-align:center;">octubre_2035</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2035</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2035</th> 
                        <th class="th__texto" style="text-align:center;">enero_2036</th>                   
                        <th class="th__texto" style="text-align:center;">febrero_2036</th>
                        <th class="th__texto" style="text-align:center;">marzo_2036</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2036</th>
                        <th class="th__texto" style="text-align:center;">mayo_2036</th>
                        <th class="th__texto" style="text-align:center;">junio_2036</th>
                        <th class="th__texto" style="text-align:center;">julio_2036</th>
                        <th class="th__texto" style="text-align:center;">agosto_2036</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2036</th>
                        <th class="th__texto" style="text-align:center;">octubre_2036</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2036</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2036</th>
                        <th class="th__texto" style="text-align:center;">enero_2037</th>                    
                        <th class="th__texto" style="text-align:center;">febrero_2037</th> 
                        <th class="th__texto" style="text-align:center;">marzo_2037</th> 
                        <th class="th__texto" style="text-align:center;">abrirl_2037</th>
                        <th class="th__texto" style="text-align:center;">mayo_2037</th>
                        <th class="th__texto" style="text-align:center;">junio_2037</th>
                        <th class="th__texto" style="text-align:center;">julio_2037</th>
                        <th class="th__texto" style="text-align:center;">agosto_2037</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2037</th>
                        <th class="th__texto" style="text-align:center;">octubre_2037</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2037</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2037</th>     
                        <th class="th__texto" style="text-align:center;">enero_2038</th>
                        <th class="th__texto" style="text-align:center;">febrero_2038</th>             
                        <th class="th__texto" style="text-align:center;">marzo_2038</th>
                        <th class="th__texto" style="text-align:center;">abrirl_2038</th>
                        <th class="th__texto" style="text-align:center;">mayo_2038</th>
                        <th class="th__texto" style="text-align:center;">junio_2038</th>
                        <th class="th__texto" style="text-align:center;">julio_2038</th>
                        <th class="th__texto" style="text-align:center;">agosto_2038</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2038</th>
                        <th class="th__texto" style="text-align:center;">octubre_2038</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2038</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2038</th> 
                        <th class="th__texto" style="text-align:center;">enero_2039</th>
                        <th class="th__texto" style="text-align:center;">febrero_2039</th>                  
                        <th class="th__texto" style="text-align:center;">marzo_2039</th>
                        <th class="th__texto" style="text-align:center;">abril_2039</th>
                        <th class="th__texto" style="text-align:center;">mayo_2039</th>
                        <th class="th__texto" style="text-align:center;">junio_2039</th>
                        <th class="th__texto" style="text-align:center;">julio_2039</th>
                        <th class="th__texto" style="text-align:center;">agosto_2039</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2039</th>
                        <th class="th__texto" style="text-align:center;">octubre_2039</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2039</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2039</th>
                        <th class="th__texto" style="text-align:center;">enero_2040</th>
                        <th class="th__texto" style="text-align:center;">febrero_2040</th>                      
                        <th class="th__texto" style="text-align:center;">marzo_2040</th>
                        <th class="th__texto" style="text-align:center;">abril_2040</th>
                        <th class="th__texto" style="text-align:center;">mayo_2040</th>
                        <th class="th__texto" style="text-align:center;">junio_2040</th>
                        <th class="th__texto" style="text-align:center;">julio_2040</th>
                        <th class="th__texto" style="text-align:center;">agosto_2040</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2040</th>
                        <th class="th__texto" style="text-align:center;">octubre_2040</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2040</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2040</th>        
                        <th class="th__texto" style="text-align:center;">enero_2041</th>
                        <th class="th__texto" style="text-align:center;">febrero_2041</th>                      
                        <th class="th__texto" style="text-align:center;">marzo_2041</th>
                        <th class="th__texto" style="text-align:center;">abril_2041</th>
                        <th class="th__texto" style="text-align:center;">mayo_2041</th>
                        <th class="th__texto" style="text-align:center;">junio_2041</th>
                        <th class="th__texto" style="text-align:center;">julio_2041</th>
                        <th class="th__texto" style="text-align:center;">agosto_2041</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2041</th>
                        <th class="th__texto" style="text-align:center;">octubre_2041</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2041</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2041</th>    
                        <th class="th__texto" style="text-align:center;">enero_2042</th>
                        <th class="th__texto" style="text-align:center;">febrero_2042</th>                      
                        <th class="th__texto" style="text-align:center;">marzo_2042</th>
                        <th class="th__texto" style="text-align:center;">abril_2042</th>
                        <th class="th__texto" style="text-align:center;">mayo_2042</th>
                        <th class="th__texto" style="text-align:center;">junio_2042</th>
                        <th class="th__texto" style="text-align:center;">julio_2042</th>
                        <th class="th__texto" style="text-align:center;">agosto_2042</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2042</th>
                        <th class="th__texto" style="text-align:center;">octubre_2042</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2042</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2042</th>    
                        <th class="th__texto" style="text-align:center;">enero_2043</th>
                        <th class="th__texto" style="text-align:center;">febrero_2043</th>                      
                        <th class="th__texto" style="text-align:center;">marzo_2043</th>
                        <th class="th__texto" style="text-align:center;">abril_2043</th>
                        <th class="th__texto" style="text-align:center;">mayo_2043</th>
                        <th class="th__texto" style="text-align:center;">junio_2043</th>
                        <th class="th__texto" style="text-align:center;">julio_2043</th>
                        <th class="th__texto" style="text-align:center;">agosto_2043</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2043</th>
                        <th class="th__texto" style="text-align:center;">octubre_2043</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2043</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2043</th>              
                        <th class="th__texto" style="text-align:center;">enero_2044</th>
                        <th class="th__texto" style="text-align:center;">febrero_2044</th>                      
                        <th class="th__texto" style="text-align:center;">marzo_2044</th>
                        <th class="th__texto" style="text-align:center;">abril_2044</th>
                        <th class="th__texto" style="text-align:center;">mayo_2044</th>
                        <th class="th__texto" style="text-align:center;">junio_2044</th>
                        <th class="th__texto" style="text-align:center;">julio_2044</th>
                        <th class="th__texto" style="text-align:center;">agosto_2044</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2044</th>
                        <th class="th__texto" style="text-align:center;">octubre_2044</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2044</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2044</th>    
                        <th class="th__texto" style="text-align:center;">enero_2045</th>
                        <th class="th__texto" style="text-align:center;">febrero_2045</th>                      
                        <th class="th__texto" style="text-align:center;">marzo_2045</th>
                        <th class="th__texto" style="text-align:center;">abril_2045</th>
                        <th class="th__texto" style="text-align:center;">mayo_2045</th>
                        <th class="th__texto" style="text-align:center;">junio_2045</th>
                        <th class="th__texto" style="text-align:center;">julio_2045</th>
                        <th class="th__texto" style="text-align:center;">agosto_2045</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2045</th>
                        <th class="th__texto" style="text-align:center;">octubre_2045</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2045</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2045</th>    
                    </tr>
                  </tfoot>
                </table>
                <div class="row">
                  <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="example_info" role="status" aria-live="polite"></div>
                  </div>
                  <div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                      <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="example_previous"><a href="#"
                            aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Siguiente</a></li>
                        <li class="paginate_button page-item active"><a href="#" aria-controls="example" data-dt-idx="1"
                            tabindex="0" class="page-link">1</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="2"
                            tabindex="0" class="page-link">2</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="3"
                            tabindex="0" class="page-link">3</a></li>
                        <li class="paginate_button page-item next" id="example_next"><a href="#" aria-controls="example"
                            data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



        <div id="addEmployeeModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <form>
                <div class="modal-header">
                  <h4 class="modal-title">Add Employee</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" required></textarea>
                  </div>
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" required>
                  </div>
                </div>
                <div class="modal-footer">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                  <input type="submit" class="btn btn-success" value="Add">
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Edit Modal HTML -->
        <div id="editEmployeeModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <form>
                <div class="modal-header">
                  <h4 class="modal-title">Edit Employee</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" required></textarea>
                  </div>
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" required>
                  </div>
                </div>
                <div class="modal-footer">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                  <input type="submit" class="btn btn-info" value="Save">
                </div>
              </form>
            </div>
          </div>
        </div>



        <!-- Delete Modal HTML -->
        <div id="deleteEmployeeModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <form>
                <div class="modal-header">
                  <h4 class="modal-title">Delete Employee</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to delete these Records?</p>
                  <p class="text-warning"><small>This action cannot be undone.</small></p>
                </div>
                <div class="modal-footer">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                  <input type="submit" class="btn btn-danger" value="Delete">
                </div>
              </form>
            </div>
          </div>
        </div>


      </div>


      <!---footer---->


      </div> 

      <footer class="footer">
        <div class="container-fluid">
          <div class="footer-in">
            <p class="mb-0">&copy 2020 Vishweb design - All Rights Reserved.</p>
          </div>
        </div>
      </footer>
      </div>
      </div>


      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
      <script src="js/jquery-3.5.1.js"></script>
      <script src="js/jquery.dataTables.min.js"></script>
      <script src="js/dataTables.bootstrap5.min.js"></script>
      <script src="js/script.js"></script>
      </body>

      </html>
