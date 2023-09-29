<?php
require_once "./clases/Conexion.php";
  require_once "./CobranzaAcumulado/crudcobranzaacumulado.php";
  $crud = new crudcobranzaacumulado();
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
      <nav id="sidebar"> <!-- Es un elemento de navegación con el atributo de identificación "sidebar". -->
        <div class="sidebar-header">  <!-- esta es  una sección dentro del menú lateral para el encabezado. Aquí es donde podría ir el logotipo u otro contenido relacionado con el encabezado. -->
          <h3><img src="images/habitta.svg" class="img-fluid"/></h3><!-- Define un encabezado de nivel 3 y dentro de él se encuentra una etiqueta de imagen -->    
        </div>
        <ul class="list-unstyled components"> <!--Crea una lista desordenada (<ul>) con la clase "list-unstyled components". Esta lista probablemente contendrá los elementos del menú. -->  
          <li class="active"> 
            <a href="index.php" class="dashboard"><img src="images/home.svg" width="20px"><span>Inicio</span></a>
          </li>
          <li class="">
            <a href="#submenu1" data-bs-toggle="collapse"  class="dashboard"><span>Principales</span></a>
            <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
              <li class="dropdown">
                <a href="./acumuladosherpa.php" data-toggle="collapse" aria-expanded="false" >
                  <i class="material-icons"></i><span>Acumulados Sherpa</span></a>
              </li>
              <li class="dropdown"><!--Esta clase generalmente se utiliza para indicar que el elemento de menú tiene un submenú o desplegable. -->
                <a href="./basemadre.php" data-toggle="collapse" aria-expanded="false"><!--se utilizan comúnmente en el marco Bootstrap para habilitar el comportamiento de colapso/desplegado en los submenús o contenido relacionado. -->
                  <i class="material-icons"></i><span>Base Madre</span></a><!-- define un iccono, un maetrial de iccono -->
              </li>
              <li class="dropdown">
                <a href="./basemadrehabitta.php" data-toggle="collapse" aria-expanded="false" >
                  <i class="material-icons"></i><span>Base Madre</span></a>
              </li>
              <li class="dropdown">
                <a href="./bilpocket.php" data-toggle="collapse" aria-expanded="false" >
                  <i class="material-icons"></i><span>Billpocket</span></a>
              </li>
              <li class="dropdown">
                <a href="./cierreMensualHabitta.php" data-toggle="collapse" aria-expanded="false" >
                  <i class="material-icons"></i><span>Cierre Mensual</span></a>
              </li>   
              <li class="dropdown">
                <a href="./clientesMorosos.php" data-toggle="collapse" aria-expanded="false" >
                  <i class="material-icons"></i><span>Clientes Morosos</span></a>
              </li> 
              <li class="dropdown activo">
                <a href="./Cobranza_Acumulado.php" data-toggle="collapse" aria-expanded="false" >
                  <i class="material-icons"></i><span>Cobranza Y Acumulado</span></a>
              </li>  
              <li class="dropdown">
                <a href="./CorteMoraRango.php" data-toggle="collapse" aria-expanded="false" >
                  <i class="material-icons"></i><span>Corte de Mora y Rango</span></a>
              </li>
              <li class="dropdown">
                <a href="./Devoluciones_clientes.php" data-toggle="collapse" aria-expanded="false" >
                  <i class="material-icons"></i><span>Devoluciones a Clientes</span></a>
              </li> 
              <li class="dropdown">
                <a href="./estadodecuenta.php" data-toggle="collapse" aria-expanded="false" >
                  <i class="material-icons"></i><span>Estado de cuenta</span></a>
              </li>  
              <li class="dropdown">
                <a href="./flujo.php" data-toggle="collapse" aria-expanded="false" >
                  <i class="material-icons"></i><span>Flujo</span></a>
              </li>
              <li class="dropdown">
                <a href="./liberados.php" data-toggle="collapse" aria-expanded="false" >
                  <i class="material-icons"></i><span>Liberado</span></a>
              </li>
              <li class="dropdown">
                <a href="./Nico.php" data-toggle="collapse" aria-expanded="false" >
                  <i class="material-icons"></i><span>Nico</span></a>
              </li>  
              <li class="dropdown">
                <a href="./TableroDeResultados.php" data-toggle="collapse" aria-expanded="false" >
                  <i class="material-icons"></i><span>Tablero de Resultados</span></a>
              </li> 
              <li class="dropdown">
                <a href="./tabulador.php" data-toggle="collapse" aria-expanded="false" >
                  <i class="material-icons"></i><span>Tabulador</span></a>
              </li>
              
              
            </ul>
          </li>
          <li>
            <a href="#submenu2" data-bs-toggle="collapse"  class="dashboard"><span>Comisiones</span></a>
              <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                <li class="dropdown">
                  <a href="./acumuladoComisiones.php" data-toggle="collapse" aria-expanded="false" >
                    <i class="material-icons"></i><span>Acumulado de Comisiones</span></a>
                </li> 
                <li class="dropdown">
                  <a href="./comisiones2020.php" data-toggle="collapse" aria-expanded="false" >
                    <i class="material-icons"></i><span>Comisiones 2020</span>
                  </a>
                </li>
                <li class="dropdown">
                  <a href="./comisiones2021.php" data-toggle="collapse" aria-expanded="false" >
                    <i class="material-icons"></i><span>Comisiones 2021</span></a>
                </li>
                <li class="dropdown">
                  <a href="./comisiones2022.php" data-toggle="collapse" aria-expanded="false" >
                    <i class="material-icons"></i><span>Comisiones 2022</span></a>
                </li>
                <li class="dropdown">
                  <a href="./comisiones2023.php" data-toggle="collapse" aria-expanded="false" >
                    <i class="material-icons"></i><span>Comisiones 2023</span></a>
                </li>
                <li class="dropdown">
                  <a href="./Hab_Formato_Comisiones_Internas.php" data-toggle="collapse" aria-expanded="false" >
                    <i class="material-icons"></i><span>Comisiones Internas</span></a>
                </li>
              
              </ul>
            </a>
          </li>
          <li>
            <a href="#submenu3" data-bs-toggle="collapse"  class="dashboard"><span>Bonos</span></a>
                <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                  <li class="dropdown">
                    <a href="./AcumuladosBonosDeTierra.php" data-toggle="collapse" aria-expanded="false" >
                      <i class="material-icons"></i><span>Acumulados Bonos de Tierra</span></a>
                  </li> 
                  <li class="dropdown">
                    <a href="./BonosReferidos.php" data-toggle="collapse" aria-expanded="false" >
                      <i class="material-icons"></i><span>Bonos Referidos</span></a>
                  </li> 
                </ul>
            </a>
          </li>
          <li class="dropdown">
            <a href="./ProyeccionesFlujoHabitta.php" data-toggle="collapse" aria-expanded="false" >
             </i><span>Proyecciones de flujo</span></a>
          </li> 
          <li class="dropdown">
            <a href="./EDO_De_Cuenta_Por_Desarrollo_Actualizado.php" data-toggle="collapse" aria-expanded="false" >
             </i><span>Estado De Cuenta por Desarrollo Actualizado</span></a>
          </li> 
          <li>
            <a href="#submenu4" data-bs-toggle="collapse"  class="dashboard"><span>Bancos</span></a>
              <ul class="collapse nav flex-column ms-1" id="submenu4" data-bs-parent="#menu">
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
              </ul>
            </a>  
          </li>
          <li>
            <a href="#submenu5" data-bs-toggle="collapse"  class="dashboard"><span>Estados de cuenta</span></a>
                <ul class="collapse nav flex-column ms-1" id="submenu5" data-bs-parent="#menu">
                  <li class="dropdown">
                    <a href="./cobranza.php" data-toggle="collapse" aria-expanded="false" >
                      <i class="material-icons"></i><span>Cobranza</span></a>

                  </li>
                  <li class="dropdown">
                    <a href="./listado.php" data-toggle="collapse" aria-expanded="false" >
                      <i class="material-icons"></i><span>Listado</span></a>

                  </li>
                  <li class="dropdown">
                    <a href="./estados.php" data-toggle="collapse" aria-expanded="false" >
                      <i class="material-icons"></i><span>Estados de cuenta</span></a>

                  </li>
                  <li class="dropdown">
                    <a href="./catalogo.php" data-toggle="collapse" aria-expanded="false" >
                      <i class="material-icons"></i><span>Catalogo</span></a>

                  </li>
                  <li class="dropdown">
                    <a href="./tabulador.php" data-toggle="collapse" aria-expanded="false" >
                      <i class="material-icons"></i><span>Tabulador</span></a>

                  </li>
                </ul>
            </a>
          </li>
        </ul>
      </nav>
      <!--------page-content---------------->
      <div id="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h2>Bienvenido</h2>
          </div>
        </div>
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-header bg-blue__500">
              <div class="row">
                <div class="col text-white">
                  <span><img src="images/home.svg" width="25px"></i></span> Home/Cobranza y Acumulado
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <a href="./CobranzaAcumulado/agregarcobranzaacumulado.php" class="btn btn-primary">
                  Agregar Registro
                </a>
                <hr>
                <table id="tabla" class="table table-striped data-table" style="width: 100%">
                  <thead class="bg__td bg-blue__400 text-white">
                    <tr class="text-center"> 
                        <th class="th__texto">LLAVE</th>                        
                        <th class="th__texto">LOTE</th>
                        <th class="th__texto">CONDOMINIO</th>
                        <th class="th__texto">CLÚSTER</th>
                        <th class="th__texto">DESARROLLO</th>
                        <th class="th__texto">CLIENTE</th>
                        <th class="th__texto">PRECIO_TOTAL</th>
                        <th class="th__texto">ENGANCHE</th>
                        <th class="th__texto">MESES_1</th>
                        <th class="th__texto">MESES_2</th>
                        <th class="th__texto">MESES_3</th>
                        <th class="th__texto">MESES_TOTALES</th>
                        <th class="th__texto">MEN_1</th>
                        <th class="th__texto">MEN_2</th>
                        <th class="th__texto">MEN_3</th>
                        <th class="th__texto">INICIO_CORRIDA</th>
                        <th class="th__texto">PRIMER_ABONO</th>
                        <th class="th__texto">MES_Y_AÑO_FIRMA</th>
                        <th class="th__texto">ESPECIAL</th>
                        <th class="th__texto">enero_2020</th>
                        <th class="th__texto">febrero_2020</th>
                        <th class="th__texto">marzo_2020</th>
                        <th class="th__texto">abril_2020</th>
                        <th class="th__texto">mayo_2020</th>
                        <th class="th__texto">junio_2020</th>
                        <th class="th__texto">julio_2020</th>
                        <th class="th__texto">agosto_2020</th>
                        <th class="th__texto">septiembre_2020</th>
                        <th class="th__texto">octubre_2020</th>
                        <th class="th__texto">noviembre_2020</th>
                        <th class="th__texto">diciembre_2020</th>
                        <th class="th__texto">enero_2021</th>
                        <th class="th__texto">febrero_2021</th>
                        <th class="th__texto">marzo_2021</th>
                        <th class="th__texto">abril_2021</th>
                        <th class="th__texto">mayo_2021</th>
                        <th class="th__texto">junio_2021</th>
                        <th class="th__texto">julio_2021</th>
                        <th class="th__texto">agosto_2021</th>
                        <th class="th__texto">septiembre_2021</th>
                        <th class="th__texto">octubre_2021</th>
                        <th class="th__texto">noviembre_2021</th>
                        <th class="th__texto">diciembre_2021</th>
                        <th class="th__texto">enero_2022</th>
                        <th class="th__texto">febrero_2022</th>
                        <th class="th__texto">marzo_2022</th>
                        <th class="th__texto">abril_2022</th>
                        <th class="th__texto">mayo_2022</th>
                        <th class="th__texto">junio_2022</th>
                        <th class="th__texto">julio_2022</th>
                        <th class="th__texto">agosto_2022</th>
                        <th class="th__texto">septiembre_2022</th>
                        <th class="th__texto">octubre_2022</th>
                        <th class="th__texto">noviembre_2022</th>
                        <th class="th__texto">diciembre_2022</th>
                        <th class="th__texto">enero_2023</th>
                        <th class="th__texto">febrero_2023</th>
                        <th class="th__texto">marzo_2023</th>
                        <th class="th__texto">abril_2023</th>
                        <th class="th__texto">mayo_2023</th>
                        <th class="th__texto">junio_2023</th>
                        <th class="th__texto">julio_2023</th>
                        <th class="th__texto">agosto_2023</th>
                        <th class="th__texto">septiembre_2023</th>
                        <th class="th__texto">octubre_2023</th>
                        <th class="th__texto">noviembre_2023</th>
                        <th class="th__texto">diciembre_2023</th>
                        <th class="th__texto">enero_2024</th>
                        <th class="th__texto">febrero_2024</th>
                        <th class="th__texto">marzo_2024</th>
                        <th class="th__texto">abril_2024</th>
                        <th class="th__texto">mayo_2024</th>
                        <th class="th__texto">junio_2024</th>
                        <th class="th__texto">julio_2024</th>
                        <th class="th__texto">agosto_2024</th>
                        <th class="th__texto">septiembre_2024</th>
                        <th class="th__texto">octubre_2024</th>
                        <th class="th__texto">noviembre_2024</th>
                        <th class="th__texto">diciembre_2024</th>
                        <th class="th__texto">enero_2025</th>
                        <th class="th__texto">febrero_2025</th>
                        <th class="th__texto">marzo_2025</th>
                        <th class="th__texto">abril_2025</th>
                        <th class="th__texto">mayo_2025</th>
                        <th class="th__texto">junio_2025</th>
                        <th class="th__texto">julio_2025</th>
                        <th class="th__texto">agosto_2025</th>
                        <th class="th__texto">septiembre_2025</th>
                        <th class="th__texto">octubre_2025</th>
                        <th class="th__texto">noviembre_2025</th>
                        <th class="th__texto">diciembre_2025</th>
                        <th class="th__texto">enero_2026</th>
                        <th class="th__texto">febrero_2026</th>
                        <th class="th__texto">marzo_2026</th>
                        <th class="th__texto">abril_2026</th>
                        <th class="th__texto">mayo_2026</th>
                        <th class="th__texto">junio_2026</th>
                        <th class="th__texto">julio_2026</th>
                        <th class="th__texto">agosto_2026</th>
                        <th class="th__texto">septiembre_2026</th>
                        <th class="th__texto">octubre_2026</th>
                        <th class="th__texto">noviembre_2026</th>
                        <th class="th__texto">diciembre_2026</th>
                        <th class="th__texto">enero_2027</th>
                        <th class="th__texto">febrero_2027</th>
                        <th class="th__texto">marzo_2027</th>
                        <th class="th__texto">abril_2027</th>
                        <th class="th__texto">mayo_2027</th>
                        <th class="th__texto">junio_2027</th>
                        <th class="th__texto">julio_2027</th>
                        <th class="th__texto">agosto_2027</th>
                        <th class="th__texto">septiembre_2027</th>
                        <th class="th__texto">octubre_2027</th>
                        <th class="th__texto">noviembre_2027</th>
                        <th class="th__texto">diciembre_2027</th>
                        <th class="th__texto">enero_2028</th>
                        <th class="th__texto">febrero_2028</th>
                        <th class="th__texto">marzo_2028</th>
                        <th class="th__texto">abril_2028</th>
                        <th class="th__texto">mayo_2028</th>
                        <th class="th__texto">junio_2028</th>
                        <th class="th__texto">julio_2028</th>
                        <th class="th__texto">agosto_2028</th>
                        <th class="th__texto">septiembre_2028</th>
                        <th class="th__texto">octubre_2028</th>
                        <th class="th__texto">noviembre_2028</th>
                        <th class="th__texto">diciembre_2028</th>
                        <th class="th__texto">enero_2029</th>
                        <th class="th__texto">febrero_2029</th>
                        <th class="th__texto">marzo_2029</th>
                        <th class="th__texto">abril_2029</th>
                        <th class="th__texto">mayo_2029</th>
                        <th class="th__texto">junio_2029</th>
                        <th class="th__texto">julio_2029</th>
                        <th class="th__texto">agosto_2029</th>
                        <th class="th__texto">septiembre_2029</th>
                        <th class="th__texto">octubre_2029</th>
                        <th class="th__texto">noviembre_2029</th>
                        <th class="th__texto">diciembre_2029</th>
                        <th class="th__texto">enero_2030</th>
                        <th class="th__texto">febrero_2030</th>
                        <th class="th__texto">marzo_2030</th>
                        <th class="th__texto">abril_2030</th>
                        <th class="th__texto">mayo_2030</th>
                        <th class="th__texto">junio_2030</th>
                        <th class="th__texto">julio_2030</th>
                        <th class="th__texto">agosto_2030</th>
                        <th class="th__texto">septiembre_2030</th>
                        <th class="th__texto">octubre_2030</th>
                        <th class="th__texto">noviembre_2030</th>
                        <th class="th__texto">diciembre_2030</th>
                        <th class="th__texto">enero_2031</th>
                        <th class="th__texto">febrero_2031</th>
                        <th class="th__texto">marzo_2031</th>
                        <th class="th__texto">abril_2031</th>
                        <th class="th__texto">mayo_2031</th>
                        <th class="th__texto">junio_2031</th>
                        <th class="th__texto">julio_2031</th>
                        <th class="th__texto">agosto_2031</th>
                        <th class="th__texto">septiembre_2031</th>
                        <th class="th__texto">octubre_2031</th>
                        <th class="th__texto">noviembre_2031</th>
                        <th class="th__texto">diciembre_2031</th>
                        <th class="th__texto">enero_2032</th>
                        <th class="th__texto">febrero_2032</th>
                        <th class="th__texto">marzo_2032</th>
                        <th class="th__texto">abril_2032</th>
                        <th class="th__texto">mayo_2032</th>
                        <th class="th__texto">junio_2032</th>
                        <th class="th__texto">julio_2032</th>
                        <th class="th__texto">agosto_2032</th>
                        <th class="th__texto">septiembre_2032</th>
                        <th class="th__texto">octubre_2032</th>
                        <th class="th__texto">noviembre_2032</th>
                        <th class="th__texto">diciembre_2032</th>
                        <th class="th__texto">enero_2033</th>
                        <th class="th__texto">febrero_2033</th>
                        <th class="th__texto">marzo_2033</th>
                        <th class="th__texto">abril_2033</th>
                        <th class="th__texto">mayo_2033</th>
                        <th class="th__texto">junio_2033</th>
                        <th class="th__texto">julio_2033</th>
                        <th class="th__texto">agosto_2033</th>
                        <th class="th__texto">septiembre_2033</th>
                        <th class="th__texto">octubre_2033</th>
                        <th class="th__texto">noviembre_2033</th>
                        <th class="th__texto">diciembre_2033</th>
                        <th class="th__texto">enero_2034</th>                   
                        <th class="th__texto">febrero_2034</th>
                        <th class="th__texto">marzo_2034</th>
                        <th class="th__texto">abril_2034</th>
                        <th class="th__texto">mayo_2034</th>
                        <th class="th__texto">junio_2034</th>
                        <th class="th__texto">julio_2034</th>
                        <th class="th__texto">agosto_2034</th>
                        <th class="th__texto">septiembre_2034</th>
                        <th class="th__texto">octubre_2034</th>
                        <th class="th__texto">noviembre_2034</th>
                        <th class="th__texto">diciembre_2034</th> 
                        <th class="th__texto">enero_2035</th>  
                        <th class="th__texto">febrero_2035</th>                    
                        <th class="th__texto">marzo_2035</th>
                        <th class="th__texto">abril_2035</th>
                        <th class="th__texto">mayo_2035</th>
                        <th class="th__texto">junio_2035</th>
                        <th class="th__texto">julio_2035</th>
                        <th class="th__texto">agosto_2035</th>
                        <th class="th__texto">septiembre_2035</th>
                        <th class="th__texto">octubre_2035</th>
                        <th class="th__texto">noviembre_2035</th>
                        <th class="th__texto">diciembre_2035</th> 
                        <th class="th__texto">enero_2036</th>                   
                        <th class="th__texto">febrero_2036</th>
                        <th class="th__texto">marzo_2036</th>
                        <th class="th__texto">abril_2036</th>
                        <th class="th__texto">mayo_2036</th>
                        <th class="th__texto">junio_2036</th>
                        <th class="th__texto">julio_2036</th>
                        <th class="th__texto">agosto_2036</th>
                        <th class="th__texto">septiembre_2036</th>
                        <th class="th__texto">octubre_2036</th>
                        <th class="th__texto">noviembre_2036</th>
                        <th class="th__texto">diciembre_2036</th>
                        <th class="th__texto">enero_2037</th>                    
                        <th class="th__texto">febrero_2037</th> 
                        <th class="th__texto">marzo_2037</th> 
                        <th class="th__texto">abril_2037</th>
                        <th class="th__texto">mayo_2037</th>
                        <th class="th__texto">junio_2037</th>
                        <th class="th__texto">julio_2037</th>
                        <th class="th__texto">agosto_2037</th>
                        <th class="th__texto">septiembre_2037</th>
                        <th class="th__texto">octubre_2037</th>
                        <th class="th__texto">noviembre_2037</th>
                        <th class="th__texto">diciembre_2037</th>     
                        <th class="th__texto">enero_2038</th>
                        <th class="th__texto">febrero_2038</th>             
                        <th class="th__texto">marzo_2038</th>
                        <th class="th__texto">abril_2038</th>
                        <th class="th__texto">mayo_2038</th>
                        <th class="th__texto">junio_2038</th>
                        <th class="th__texto">julio_2038</th>
                        <th class="th__texto">agosto_2038</th>
                        <th class="th__texto">septiembre_2038</th>
                        <th class="th__texto">octubre_2038</th>
                        <th class="th__texto">noviembre_2038</th>
                        <th class="th__texto">diciembre_2038</th> 
                        <th class="th__texto">enero_2039</th>
                        <th class="th__texto">febrero_2039</th>                  
                        <th class="th__texto">marzo_2039</th>
                        <th class="th__texto">abril_2039</th>
                        <th class="th__texto">mayo_2039</th>
                        <th class="th__texto">junio_2039</th>
                        <th class="th__texto">julio_2039</th>
                        <th class="th__texto">agosto_2039</th>
                        <th class="th__texto">septiembre_2039</th>
                        <th class="th__texto">octubre_2039</th>
                        <th class="th__texto">noviembre_2039</th>
                        <th class="th__texto">diciembre_2039</th>
                        <th class="th__texto">enero_2040</th>
                        <th class="th__texto">febrero_2040</th>                      
                        <th class="th__texto">marzo_2040</th>
                        <th class="th__texto">abril_2040</th>
                        <th class="th__texto">mayo_2040</th>
                        <th class="th__texto">junio_2040</th>
                        <th class="th__texto">julio_2040</th>
                        <th class="th__texto">agosto_2040</th>
                        <th class="th__texto">septiembre_2040</th>
                        <th class="th__texto">octubre_2040</th>
                        <th class="th__texto">noviembre_2040</th>
                        <th class="th__texto">diciembre_2040</th>        
                        <th class="th__texto">enero_2041</th>
                        <th class="th__texto">febrero_2041</th>                      
                        <th class="th__texto">marzo_2041</th>
                        <th class="th__texto">abril_2041</th>
                        <th class="th__texto">mayo_2041</th>
                        <th class="th__texto">junio_2041</th>
                        <th class="th__texto">julio_2041</th>
                        <th class="th__texto">agosto_2041</th>
                        <th class="th__texto">septiembre_2041</th>
                        <th class="th__texto">octubre_2041</th>
                        <th class="th__texto">noviembre_2041</th>
                        <th class="th__texto">diciembre_2041</th>    
                        <th class="th__texto">enero_2042</th>
                        <th class="th__texto">febrero_2042</th>                      
                        <th class="th__texto">marzo_2042</th>
                        <th class="th__texto">abril_2042</th>
                        <th class="th__texto">mayo_2042</th>
                        <th class="th__texto">junio_2042</th>
                        <th class="th__texto">julio_2042</th>
                        <th class="th__texto">agosto_2042</th>
                        <th class="th__texto">septiembre_2042</th>
                        <th class="th__texto">octubre_2042</th>
                        <th class="th__texto">noviembre_2042</th>
                        <th class="th__texto">diciembre_2042</th>    
                        <th class="th__texto">enero_2043</th>
                        <th class="th__texto">febrero_2043</th>                      
                        <th class="th__texto">marzo_2043</th>
                        <th class="th__texto">abril_2043</th>
                        <th class="th__texto">mayo_2043</th>
                        <th class="th__texto">junio_2043</th>
                        <th class="th__texto">julio_2043</th>
                        <th class="th__texto">agosto_2043</th>
                        <th class="th__texto">septiembre_2043</th>
                        <th class="th__texto">octubre_2043</th>
                        <th class="th__texto">noviembre_2043</th>
                        <th class="th__texto">diciembre_2043</th>              
                        <th class="th__texto">enero_2044</th>
                        <th class="th__texto">febrero_2044</th>                      
                        <th class="th__texto">marzo_2044</th>
                        <th class="th__texto">abril_2044</th>
                        <th class="th__texto">mayo_2044</th>
                        <th class="th__texto">junio_2044</th>
                        <th class="th__texto">julio_2044</th>
                        <th class="th__texto">agosto_2044</th>
                        <th class="th__texto">septiembre_2044</th>
                        <th class="th__texto">octubre_2044</th>
                        <th class="th__texto">noviembre_2044</th>
                        <th class="th__texto">diciembre_2044</th>    
                        <th class="th__texto">enero_2045</th>
                        <th class="th__texto">febrero_2045</th>                      
                        <th class="th__texto">marzo_2045</th>
                        <th class="th__texto">abril_2045</th>
                        <th class="th__texto">mayo_2045</th>
                        <th class="th__texto">junio_2045</th>
                        <th class="th__texto">julio_2045</th>
                        <th class="th__texto">agosto_2045</th>
                        <th class="th__texto">septiembre_2045</th>
                        <th class="th__texto">octubre_2045</th>
                        <th class="th__texto">noviembre_2045</th>
                        <th class="th__texto">diciembre_2045</th>
                        <th class="th__texto">MODIFICAR</th>
                        <th class="th__texto">ELIMINAR</th>   
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                          foreach($datos as $item) {
                        ?>
                          <tr class="text-center">
                          <td> <?php echo $item->LLAVE; ?> </td>
                          <td> <?php echo $item->LOTE;?> </td>
                          <td> <?php echo $item->CONDOMINIO;?> </td>
                          <td> <?php echo $item->CLÚSTER;?> </td>
                          <td> <?php echo $item->DESARROLLO; ?> </td>
                          <td> <?php echo $item->CLIENTE;?> </td>
                          <td> <?php echo "$".number_format(floatval($item->PRECIO_TOTAL),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->ENGANCHE),2);?></td>
                          <td> <?php echo $item->MESES_1;?> </td>
                          <td> <?php echo $item->MESES_2;?> </td>
                          <td> <?php echo $item->MESES_3; ?> </td>
                          <td> <?php echo $item->MESES_TOTALES;?> </td>
                          <td> <?php echo "$".number_format(floatval($item->MEN_1),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->MEN_2),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->MEN_3),2);?> </td>
                          <td> <?php echo $item->INICIO_CORRIDA; ?> </td>
                          <td> <?php echo $item->PRIMER_ABONO;?> </td>
                          <td> <?php echo $item->MES_Y_AÑO_FIRMA;?> </td>
                          <td> <?php echo  $item->ESPECIAL;?></td>
                          <td> <?php echo "$".number_format(floatval($item->enero_2020),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->febrero_2020),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->marzo_2020),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->abril_2020),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->mayo_2020),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->junio_2020),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->julio_2020),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->agosto_2020),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->septiembre_2020),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->octubre_2020),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->noviembre_2020),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->diciembre_2020),2);?></td>
                          <td> <?php echo "$".number_format(floatval($item->enero_2021),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->febrero_2021),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->marzo_2021),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->abril_2021),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->mayo_2021),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->junio_2021),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->julio_2021),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->agosto_2021),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->septiembre_2021),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->octubre_2021),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->noviembre_2021),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->diciembre_2021),2);?></td>
                          <td> <?php echo "$".number_format(floatval($item->enero_2022),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->febrero_2022),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->marzo_2022),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->abril_2022),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->mayo_2022),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->junio_2022),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->julio_2022),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->agosto_2022),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->septiembre_2022),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->octubre_2022),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->noviembre_2022),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->diciembre_2022),2);?></td>
                          <td> <?php echo "$".number_format(floatval($item->enero_2023),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->febrero_2023),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->marzo_2023),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->abril_2023),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->mayo_2023),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->junio_2023),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->julio_2023),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->agosto_2023),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->septiembre_2023),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->octubre_2023),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->noviembre_2023),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->diciembre_2023),2);?></td>
                          <td> <?php echo "$".number_format(floatval($item->enero_2024),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->febrero_2024),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->marzo_2024),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->abril_2024),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->mayo_2024),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->junio_2024),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->julio_2024),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->agosto_2024),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->septiembre_2024),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->octubre_2024),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->noviembre_2024),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->diciembre_2024),2);?></td>
                          <td> <?php echo "$".number_format(floatval($item->enero_2025),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->febrero_2025),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->marzo_2025),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->abril_2025),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->mayo_2025),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->junio_2025),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->julio_2025),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->agosto_2025),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->septiembre_2025),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->octubre_2025),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->noviembre_2025),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->diciembre_2025),2);?></td>
                          <td> <?php echo "$".number_format(floatval($item->enero_2026),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->febrero_2026),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->marzo_2026),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->abril_2026),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->mayo_2026),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->junio_2026),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->julio_2026),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->agosto_2026),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->septiembre_2026),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->octubre_2026),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->noviembre_2026),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->diciembre_2026),2);?></td>
                          <td> <?php echo "$".number_format(floatval($item->enero_2027),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->febrero_2027),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->marzo_2027),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->abril_2027),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->mayo_2027),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->junio_2027),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->julio_2027),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->agosto_2027),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->septiembre_2027),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->octubre_2027),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->noviembre_2027),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->diciembre_2027),2);?></td>
                          <td> <?php echo "$".number_format(floatval($item->enero_2028),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->febrero_2028),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->marzo_2028),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->abril_2028),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->mayo_2028),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->junio_2028),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->julio_2028),2)?> </td>
                          <td> <?php echo "$".number_format(floatval($item->agosto_2028),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->septiembre_2028),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->octubre_2028),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->noviembre_2028),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->diciembre_2028),2);?></td>
                          <td> <?php echo "$".number_format(floatval($item->enero_2029),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->febrero_2029),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->marzo_2029),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->abril_2029),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->mayo_2029),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->junio_2029),2);?> </td>
                          <td> <?php echo" $".number_format(floatval($item->julio_2029),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->agosto_2029),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->septiembre_2029),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->octubre_2029),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->noviembre_2029),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->diciembre_2029),2);?></td>
                          <td> <?php echo "$".number_format(floatval($item->enero_2030),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->febrero_2030),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->marzo_2030),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->abril_2030),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->mayo_2030),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->junio_2030),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->julio_2030),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->agosto_2030),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->septiembre_2030),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->octubre_2030),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->noviembre_2030),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->diciembre_2030),2);?></td>
                          <td> <?php echo "$".number_format(floatval($item->enero_2031),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->febrero_2031),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->marzo_2031),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->abril_2031),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->mayo_2031),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->junio_2031),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->julio_2031),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->agosto_2031),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->septiembre_2031),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->octubre_2031),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->noviembre_2031),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->diciembre_2031),2);?></td>
                          <td> <?php echo "$".number_format(floatval($item->enero_2032),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->febrero_2032),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->marzo_2032),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->abril_2032),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->mayo_2032),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->junio_2032),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->julio_2032),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->agosto_2032),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->septiembre_2032),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->octubre_2032),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->noviembre_2032),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->diciembre_2032),2);?></td>
                          <td> <?php echo "$".number_format(floatval($item->enero_2033),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->febrero_2033),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->marzo_2033),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->abril_2033),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->mayo_2033),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->junio_2033),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->julio_2033),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->agosto_2033),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->septiembre_2033),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->octubre_2033),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->noviembre_2033),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->diciembre_2033),2);?></td>
                          <td> <?php echo "$".number_format(floatval($item->enero_2034),2);?></td>
                          <td> <?php echo "$".number_format(floatval($item->febrero_2034),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->marzo_2034),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->abril_2034),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->mayo_2034),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->junio_2034),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->julio_2034),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->agosto_2034),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->septiembre_2034),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->octubre_2034),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->noviembre_2034),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->diciembre_2034),2);?></td>
                          <td> <?php echo "$".number_format(floatval($item->enero_2035),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->febrero_2035),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->marzo_2035),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->abril_2035),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->mayo_2035),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->junio_2035),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->julio_2035),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->agosto_2035),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->septiembre_2035),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->octubre_2035),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->noviembre_2035),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->diciembre_2035),2);?></td>
                          <td> <?php echo "$".number_format(floatval($item->enero_2036),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->febrero_2036),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->marzo_2036),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->abril_2036),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->mayo_2036),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->junio_2036),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->julio_2036),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->agosto_2036),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->septiembre_2036),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->octubre_2036),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->noviembre_2036),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->diciembre_2036),2);?></td>
                          <td> <?php echo "$".number_format(floatval($item->enero_2037),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->febrero_2037),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->marzo_2037),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->abril_2037),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->mayo_2037),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->junio_2037),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->julio_2037),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->agosto_2037),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->septiembre_2037),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->octubre_2037),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->noviembre_2037),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->diciembre_2037),2);?></td>
                          <td> <?php echo "$".number_format(floatval($item->enero_2038),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->febrero_2038),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->marzo_2038),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->abril_2038),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->mayo_2038),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->junio_2038),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->julio_2038),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->agosto_2038),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->septiembre_2038),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->octubre_2038),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->noviembre_2038),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->diciembre_2038),2);?></td>
                          <td> <?php echo "$".number_format(floatval($item->enero_2039),2)?> </td>
                          <td> <?php echo "$".number_format(floatval($item->febrero_2039),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->marzo_2039),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->abril_2039),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->mayo_2039),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->junio_2039),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->julio_2039),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->agosto_2039),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->septiembre_2039),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->octubre_2039),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->noviembre_2039),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->diciembre_2039),2);?></td>
                          <td> <?php echo "$".number_format(floatval($item->enero_2040),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->febrero_2040),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->marzo_2040),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->abril_2040),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->mayo_2040),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->junio_2040),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->julio_2040),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->agosto_2040),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->septiembre_2040),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->octubre_2040),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->noviembre_2040),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->diciembre_2040),2);?></td>
                          <td> <?php echo "$".number_format(floatval($item->enero_2041),2)?> </td>
                          <td> <?php echo "$".number_format(floatval($item->febrero_2041),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->marzo_2041),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->abril_2041),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->mayo_2041),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->junio_2041),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->julio_2041),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->agosto_2041),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->septiembre_2041),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->octubre_2041),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->noviembre_2041),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->diciembre_2041),2);?></td>
                          <td> <?php echo "$".number_format(floatval($item->enero_2042),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->febrero_2042),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->marzo_2042),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->abril_2042),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->mayo_2042),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->junio_2042),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->julio_2042),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->agosto_2042),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->septiembre_2042),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->octubre_2042),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->noviembre_2042),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->diciembre_2042),2);?></td>
                          <td> <?php echo "$".number_format(floatval($item->enero_2043),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->febrero_2043),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->marzo_2043),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->abril_2043),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->mayo_2043),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->junio_2043),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->julio_2043),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->agosto_2043),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->septiembre_2043),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->octubre_2043),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->noviembre_2043),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->diciembre_2043),2);?></td>
                          <td> <?php echo "$".number_format(floatval($item->enero_2044),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->febrero_2044),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->marzo_2044),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->abril_2044),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->mayo_2044),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->junio_2044),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->julio_2044),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->agosto_2044),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->septiembre_2044),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->octubre_2044),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->noviembre_2044),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->diciembre_2044),2);?></td>
                          <td> <?php echo "$".number_format(floatval($item->enero_2045),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->febrero_2045),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->marzo_2045),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->abril_2045),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->mayo_2045),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->junio_2045),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->julio_2045),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->agosto_2045),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->septiembre_2045),2); ?> </td>
                          <td> <?php echo "$".number_format(floatval($item->octubre_2045),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->noviembre_2045),2);?> </td>
                          <td> <?php echo "$".number_format(floatval($item->diciembre_2045),2);?></td>
                          <td>
                            <form action="./CobranzaAcumulado/actualizarcobranzaacumulado.php" method="POST">
                              <input type="text" name="id" id="id" hidden value="<?php echo $item->_id ?>">
                              <button class="btn btn-warning">
                                 <img class="edit__icon" src="images/iconos/pen-solid.svg" alt="">
                              </button>
                            </form>
                          </td>
                          <td>
                            <form action="./CobranzaAcumulado/eliminarcobranzaacumulado.php" method="POST">
                              <input type="text" name="id" id="id" hidden value="<?php echo $item->_id ?>">
                              <button class="btn btn-danger">
                                <img class="delete__icon" src="images/iconos/trash-solid.svg" alt="">
                              </button>
                            </form>
                          </td>

                           
                         
                          </tr>
                          <?php } ?> 
                  </tbody>
                  <tfoot class="bg-blue">
                    <tr class="text-center">
                        <th class="th__texto">LLAVE</th>                        
                        <th class="th__texto">LOTE</th>
                        <th class="th__texto">CONDOMINIO</th>
                        <th class="th__texto">CLÚSTER</th>
                        <th class="th__texto">DESARROLLO</th>
                        <th class="th__texto">CLIENTE</th>
                        <th class="th__texto">PRECIO_TOTAL</th>
                        <th class="th__texto">ENGANCHE</th>
                        <th class="th__texto">MESES_1</th>
                        <th class="th__texto">MESES_2</th>
                        <th class="th__texto">MESES_3</th>
                        <th class="th__texto">MESES_TOTALES</th>
                        <th class="th__texto">MEN_1</th>
                        <th class="th__texto">MEN_2</th>
                        <th class="th__texto">MEN_3</th>
                        <th class="th__texto">INICIO_CORRIDA</th>
                        <th class="th__texto">PRIMER_ABONO</th>
                        <th class="th__texto">MES_Y_AÑO_FIRMA</th>
                        <th class="th__texto">ESPECIAL</th>
                        <th class="th__texto">enero_2020</th>
                        <th class="th__texto">febrero_2020</th>
                        <th class="th__texto">marzo_2020</th>
                        <th class="th__texto">abrirl_2020</th>
                        <th class="th__texto">mayo_2020</th>
                        <th class="th__texto">junio_2020</th>
                        <th class="th__texto">julio_2020</th>
                        <th class="th__texto">agosto_2020</th>
                        <th class="th__texto">septiembre_2020</th>
                        <th class="th__texto">octubre_2020</th>
                        <th class="th__texto">noviembre_2020</th>
                        <th class="th__texto">diciembre_2020</th>
                        <th class="th__texto">enero_2021</th>
                        <th class="th__texto">febrero_2021</th>
                        <th class="th__texto">marzo_2021</th>
                        <th class="th__texto">abrirl_2021</th>
                        <th class="th__texto">mayo_2021</th>
                        <th class="th__texto">junio_2021</th>
                        <th class="th__texto">julio_2021</th>
                        <th class="th__texto">agosto_2021</th>
                        <th class="th__texto">septiembre_2021</th>
                        <th class="th__texto">octubre_2021</th>
                        <th class="th__texto">noviembre_2021</th>
                        <th class="th__texto">diciembre_2021</th>
                        <th class="th__texto">enero_2022</th>
                        <th class="th__texto">febrero_2022</th>
                        <th class="th__texto">marzo_2022</th>
                        <th class="th__texto">abrirl_2022</th>
                        <th class="th__texto">mayo_2022</th>
                        <th class="th__texto">junio_2022</th>
                        <th class="th__texto">julio_2022</th>
                        <th class="th__texto">agosto_2022</th>
                        <th class="th__texto">septiembre_2022</th>
                        <th class="th__texto">octubre_2022</th>
                        <th class="th__texto">noviembre_2022</th>
                        <th class="th__texto">diciembre_2022</th>
                        <th class="th__texto">enero_2023</th>
                        <th class="th__texto">febrero_2023</th>
                        <th class="th__texto">marzo_2023</th>
                        <th class="th__texto">abrirl_2023</th>
                        <th class="th__texto">mayo_2023</th>
                        <th class="th__texto">junio_2023</th>
                        <th class="th__texto">julio_2023</th>
                        <th class="th__texto">agosto_2023</th>
                        <th class="th__texto">septiembre_2023</th>
                        <th class="th__texto">octubre_2023</th>
                        <th class="th__texto">noviembre_2023</th>
                        <th class="th__texto">diciembre_2023</th>
                        <th class="th__texto">enero_2024</th>
                        <th class="th__texto">febrero_2024</th>
                        <th class="th__texto">marzo_2024</th>
                        <th class="th__texto">abrirl_2024</th>
                        <th class="th__texto">mayo_2024</th>
                        <th class="th__texto">junio_2024</th>
                        <th class="th__texto">julio_2024</th>
                        <th class="th__texto">agosto_2024</th>
                        <th class="th__texto">septiembre_2024</th>
                        <th class="th__texto">octubre_2024</th>
                        <th class="th__texto">noviembre_2024</th>
                        <th class="th__texto">diciembre_2024</th>
                        <th class="th__texto">enero_2025</th>
                        <th class="th__texto">febrero_2025</th>
                        <th class="th__texto">marzo_2025</th>
                        <th class="th__texto">abrirl_2025</th>
                        <th class="th__texto">mayo_2025</th>
                        <th class="th__texto">junio_2025</th>
                        <th class="th__texto">julio_2025</th>
                        <th class="th__texto">agosto_2025</th>
                        <th class="th__texto">septiembre_2025</th>
                        <th class="th__texto">octubre_2025</th>
                        <th class="th__texto">noviembre_2025</th>
                        <th class="th__texto">diciembre_2025</th>
                        <th class="th__texto">enero_2026</th>
                        <th class="th__texto">febrero_2026</th>
                        <th class="th__texto">marzo_2026</th>
                        <th class="th__texto">abrirl_2026</th>
                        <th class="th__texto">mayo_2026</th>
                        <th class="th__texto">junio_2026</th>
                        <th class="th__texto">julio_2026</th>
                        <th class="th__texto">agosto_2026</th>
                        <th class="th__texto">septiembre_2026</th>
                        <th class="th__texto">octubre_2026</th>
                        <th class="th__texto">noviembre_2026</th>
                        <th class="th__texto">diciembre_2026</th>
                        <th class="th__texto">enero_2027</th>
                        <th class="th__texto">febrero_2027</th>
                        <th class="th__texto">marzo_2027</th>
                        <th class="th__texto">abrirl_2027</th>
                        <th class="th__texto">mayo_2027</th>
                        <th class="th__texto">junio_2027</th>
                        <th class="th__texto">julio_2027</th>
                        <th class="th__texto">agosto_2027</th>
                        <th class="th__texto">septiembre_2027</th>
                        <th class="th__texto">octubre_2027</th>
                        <th class="th__texto">noviembre_2027</th>
                        <th class="th__texto">diciembre_2027</th>
                        <th class="th__texto">enero_2028</th>
                        <th class="th__texto">febrero_2028</th>
                        <th class="th__texto">marzo_2028</th>
                        <th class="th__texto">abrirl_2028</th>
                        <th class="th__texto">mayo_2028</th>
                        <th class="th__texto">junio_2028</th>
                        <th class="th__texto">julio_2028</th>
                        <th class="th__texto">agosto_2028</th>
                        <th class="th__texto">septiembre_2028</th>
                        <th class="th__texto">octubre_2028</th>
                        <th class="th__texto">noviembre_2028</th>
                        <th class="th__texto">diciembre_2028</th>
                        <th class="th__texto">enero_2029</th>
                        <th class="th__texto">febrero_2029</th>
                        <th class="th__texto">marzo_2029</th>
                        <th class="th__texto">abrirl_2029</th>
                        <th class="th__texto">mayo_2029</th>
                        <th class="th__texto">junio_2029</th>
                        <th class="th__texto">julio_2029</th>
                        <th class="th__texto">agosto_2029</th>
                        <th class="th__texto">septiembre_2029</th>
                        <th class="th__texto">octubre_2029</th>
                        <th class="th__texto">noviembre_2029</th>
                        <th class="th__texto">diciembre_2029</th>
                        <th class="th__texto">enero_2030</th>
                        <th class="th__texto">febrero_2030</th>
                        <th class="th__texto">marzo_2030</th>
                        <th class="th__texto">abrirl_2030</th>
                        <th class="th__texto">mayo_2030</th>
                        <th class="th__texto">junio_2030</th>
                        <th class="th__texto">julio_2030</th>
                        <th class="th__texto">agosto_2030</th>
                        <th class="th__texto">septiembre_2030</th>
                        <th class="th__texto">octubre_2030</th>
                        <th class="th__texto">noviembre_2030</th>
                        <th class="th__texto">diciembre_2030</th>
                        <th class="th__texto">enero_2031</th>
                        <th class="th__texto">febrero_2031</th>
                        <th class="th__texto">marzo_2031</th>
                        <th class="th__texto">abrirl_2031</th>
                        <th class="th__texto">mayo_2031</th>
                        <th class="th__texto">junio_2031</th>
                        <th class="th__texto">julio_2031</th>
                        <th class="th__texto">agosto_2031</th>
                        <th class="th__texto">septiembre_2031</th>
                        <th class="th__texto">octubre_2031</th>
                        <th class="th__texto">noviembre_2031</th>
                        <th class="th__texto">diciembre_2031</th>
                        <th class="th__texto">enero_2032</th>
                        <th class="th__texto">febrero_2032</th>
                        <th class="th__texto">marzo_2032</th>
                        <th class="th__texto">abrirl_2032</th>
                        <th class="th__texto">mayo_2032</th>
                        <th class="th__texto">junio_2032</th>
                        <th class="th__texto">julio_2032</th>
                        <th class="th__texto">agosto_2032</th>
                        <th class="th__texto">septiembre_2032</th>
                        <th class="th__texto">octubre_2032</th>
                        <th class="th__texto">noviembre_2032</th>
                        <th class="th__texto">diciembre_2032</th>
                        <th class="th__texto">enero_2033</th>
                        <th class="th__texto">febrero_2033</th>
                        <th class="th__texto">marzo_2033</th>
                        <th class="th__texto">abrirl_2033</th>
                        <th class="th__texto">mayo_2033</th>
                        <th class="th__texto">junio_2033</th>
                        <th class="th__texto">julio_2033</th>
                        <th class="th__texto">agosto_2033</th>
                        <th class="th__texto">septiembre_2033</th>
                        <th class="th__texto">octubre_2033</th>
                        <th class="th__texto">noviembre_2033</th>
                        <th class="th__texto">diciembre_2033</th>
                        <th class="th__texto">enero_2034</th>                   
                        <th class="th__texto">febrero_2034</th>
                        <th class="th__texto">marzo_2034</th>
                        <th class="th__texto">abrirl_2034</th>
                        <th class="th__texto">mayo_2034</th>
                        <th class="th__texto">junio_2034</th>
                        <th class="th__texto">julio_2034</th>
                        <th class="th__texto">agosto_2034</th>
                        <th class="th__texto">septiembre_2034</th>
                        <th class="th__texto">octubre_2034</th>
                        <th class="th__texto">noviembre_2034</th>
                        <th class="th__texto">diciembre_2034</th> 
                        <th class="th__texto">enero_2035</th>  
                        <th class="th__texto">febrero_2035</th>                    
                        <th class="th__texto">marzo_2035</th>
                        <th class="th__texto">abrirl_2035</th>
                        <th class="th__texto">mayo_2035</th>
                        <th class="th__texto">junio_2035</th>
                        <th class="th__texto">julio_2035</th>
                        <th class="th__texto">agosto_2035</th>
                        <th class="th__texto">septiembre_2035</th>
                        <th class="th__texto">octubre_2035</th>
                        <th class="th__texto">noviembre_2035</th>
                        <th class="th__texto">diciembre_2035</th> 
                        <th class="th__texto">enero_2036</th>                   
                        <th class="th__texto">febrero_2036</th>
                        <th class="th__texto">marzo_2036</th>
                        <th class="th__texto">abrirl_2036</th>
                        <th class="th__texto">mayo_2036</th>
                        <th class="th__texto">junio_2036</th>
                        <th class="th__texto">julio_2036</th>
                        <th class="th__texto">agosto_2036</th>
                        <th class="th__texto">septiembre_2036</th>
                        <th class="th__texto">octubre_2036</th>
                        <th class="th__texto">noviembre_2036</th>
                        <th class="th__texto">diciembre_2036</th>
                        <th class="th__texto">enero_2037</th>                    
                        <th class="th__texto">febrero_2037</th> 
                        <th class="th__texto">marzo_2037</th> 
                        <th class="th__texto">abrirl_2037</th>
                        <th class="th__texto">mayo_2037</th>
                        <th class="th__texto">junio_2037</th>
                        <th class="th__texto">julio_2037</th>
                        <th class="th__texto">agosto_2037</th>
                        <th class="th__texto">septiembre_2037</th>
                        <th class="th__texto">octubre_2037</th>
                        <th class="th__texto">noviembre_2037</th>
                        <th class="th__texto">diciembre_2037</th>     
                        <th class="th__texto">enero_2038</th>
                        <th class="th__texto">febrero_2038</th>             
                        <th class="th__texto">marzo_2038</th>
                        <th class="th__texto">abrirl_2038</th>
                        <th class="th__texto">mayo_2038</th>
                        <th class="th__texto">junio_2038</th>
                        <th class="th__texto">julio_2038</th>
                        <th class="th__texto">agosto_2038</th>
                        <th class="th__texto">septiembre_2038</th>
                        <th class="th__texto">octubre_2038</th>
                        <th class="th__texto">noviembre_2038</th>
                        <th class="th__texto">diciembre_2038</th> 
                        <th class="th__texto">enero_2039</th>
                        <th class="th__texto">febrero_2039</th>                  
                        <th class="th__texto">marzo_2039</th>
                        <th class="th__texto">abril_2039</th>
                        <th class="th__texto">mayo_2039</th>
                        <th class="th__texto">junio_2039</th>
                        <th class="th__texto">julio_2039</th>
                        <th class="th__texto">agosto_2039</th>
                        <th class="th__texto">septiembre_2039</th>
                        <th class="th__texto">octubre_2039</th>
                        <th class="th__texto">noviembre_2039</th>
                        <th class="th__texto">diciembre_2039</th>
                        <th class="th__texto">enero_2040</th>
                        <th class="th__texto">febrero_2040</th>                      
                        <th class="th__texto">marzo_2040</th>
                        <th class="th__texto">abril_2040</th>
                        <th class="th__texto">mayo_2040</th>
                        <th class="th__texto">junio_2040</th>
                        <th class="th__texto">julio_2040</th>
                        <th class="th__texto">agosto_2040</th>
                        <th class="th__texto">septiembre_2040</th>
                        <th class="th__texto">octubre_2040</th>
                        <th class="th__texto">noviembre_2040</th>
                        <th class="th__texto">diciembre_2040</th>        
                        <th class="th__texto">enero_2041</th>
                        <th class="th__texto">febrero_2041</th>                      
                        <th class="th__texto">marzo_2041</th>
                        <th class="th__texto">abril_2041</th>
                        <th class="th__texto">mayo_2041</th>
                        <th class="th__texto">junio_2041</th>
                        <th class="th__texto">julio_2041</th>
                        <th class="th__texto">agosto_2041</th>
                        <th class="th__texto">septiembre_2041</th>
                        <th class="th__texto">octubre_2041</th>
                        <th class="th__texto">noviembre_2041</th>
                        <th class="th__texto">diciembre_2041</th>    
                        <th class="th__texto">enero_2042</th>
                        <th class="th__texto">febrero_2042</th>                      
                        <th class="th__texto">marzo_2042</th>
                        <th class="th__texto">abril_2042</th>
                        <th class="th__texto">mayo_2042</th>
                        <th class="th__texto">junio_2042</th>
                        <th class="th__texto">julio_2042</th>
                        <th class="th__texto">agosto_2042</th>
                        <th class="th__texto">septiembre_2042</th>
                        <th class="th__texto">octubre_2042</th>
                        <th class="th__texto">noviembre_2042</th>
                        <th class="th__texto">diciembre_2042</th>    
                        <th class="th__texto">enero_2043</th>
                        <th class="th__texto">febrero_2043</th>                      
                        <th class="th__texto">marzo_2043</th>
                        <th class="th__texto">abril_2043</th>
                        <th class="th__texto">mayo_2043</th>
                        <th class="th__texto">junio_2043</th>
                        <th class="th__texto">julio_2043</th>
                        <th class="th__texto">agosto_2043</th>
                        <th class="th__texto">septiembre_2043</th>
                        <th class="th__texto">octubre_2043</th>
                        <th class="th__texto">noviembre_2043</th>
                        <th class="th__texto">diciembre_2043</th>              
                        <th class="th__texto">enero_2044</th>
                        <th class="th__texto">febrero_2044</th>                      
                        <th class="th__texto">marzo_2044</th>
                        <th class="th__texto">abril_2044</th>
                        <th class="th__texto">mayo_2044</th>
                        <th class="th__texto">junio_2044</th>
                        <th class="th__texto">julio_2044</th>
                        <th class="th__texto">agosto_2044</th>
                        <th class="th__texto">septiembre_2044</th>
                        <th class="th__texto">octubre_2044</th>
                        <th class="th__texto">noviembre_2044</th>
                        <th class="th__texto">diciembre_2044</th>    
                        <th class="th__texto">enero_2045</th>
                        <th class="th__texto">febrero_2045</th>                      
                        <th class="th__texto">marzo_2045</th>
                        <th class="th__texto">abril_2045</th>
                        <th class="th__texto">mayo_2045</th>
                        <th class="th__texto">junio_2045</th>
                        <th class="th__texto">julio_2045</th>
                        <th class="th__texto">agosto_2045</th>
                        <th class="th__texto">septiembre_2045</th>
                        <th class="th__texto">octubre_2045</th>
                        <th class="th__texto">noviembre_2045</th>
                        <th class="th__texto">diciembre_2045</th>
                        <th class="th__texto">MODIFICAR</th>
                        <th class="th__texto">ELIMINAR</th>  
                    </tr>
                  </tfoot>
                </table>
                <!-- <div class="row">
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
      </div> -->



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
      </div> 
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