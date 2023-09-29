<?php
require_once "./clases/Conexion.php";
  require_once "./clases/crud.php";
  $crud = new Crud();
  $datos = $crud->mostrarDatobillpocket();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href="style.css" />
  <title>Habitta</title>
</head>

<body>

  <div class="wrapper">
    <div class="body-overlay"></div>


    <!-- Sidebar  -->
    <nav id="sidebar">
      <!-- Es un elemento de navegación con el atributo de identificación "sidebar". -->
      <div class="sidebar-header">
        <!-- esta es  una sección dentro del menú lateral para el encabezado. Aquí es donde podría ir el logotipo u otro contenido relacionado con el encabezado. -->
        <h3><img src="images/habitta.svg" class="img-fluid" /></h3>
        <!-- Define un encabezado de nivel 3 y dentro de él se encuentra una etiqueta de imagen -->
      </div>
      <ul class="list-unstyled components">
        <!--Crea una lista desordenada (<ul>) con la clase "list-unstyled components". Esta lista probablemente contendrá los elementos del menú. -->
        <li class="active">
          <a href="index.php" class="dashboard"><img src="images/home.svg" width="20px"><span>Inicio</span></a>
        </li>

        <li class="">
          <a class="dashboard"><span>Principales</span></a>
        </li>
        <li class="dropdown">
          <!--Esta clase generalmente se utiliza para indicar que el elemento de menú tiene un submenú o desplegable. -->
          <a href="./basemadre.php" data-toggle="collapse" aria-expanded="false">
            <!--se utilizan comúnmente en el marco Bootstrap para habilitar el comportamiento de colapso/desplegado en los submenús o contenido relacionado. -->
            <i class="material-icons"></i><span>Base Madre</span></a><!-- define un iccono, un maetrial de iccono -->

        </li>
        <li class="dropdown">
          <a href="./flujo.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Flujo</span></a>

        </li>
        <li class="dropdown">
          <a href="./liberados.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Liberado</span></a>

        </li>

        <!--    <li class="">
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
 -->
        <!--  <li class="">
            <a href="#" class="dashboard"><span>Estados de cuenta</span></a>
          </li>
          <li class="dropdown">
            <a href="./cobranza.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Cobranza</span></a>

          </li>
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
 -->
        </li>
        <li class="dropdown">
          <a href="./tabulador.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Tabulador</span></a>

        </li>

        <li class="dropdown">
          <a href="./comisiones2020.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Comisiones 2020</span></a>
        </li>

        <li class="dropdown">
          <a href="./comisiones2021.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Comisiones 2021</span></a>
        </li>

        <li class="dropdown">
          <a href="./comisiones2022.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Comisiones 2022</span></a>
        </li>

        <li class="dropdown">
          <a href="./comisiones2023.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Comisiones 2023</span></a>
        </li>


        <li class="dropdown">
          <a href="./acumuladosherpa.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Acumulados Sherpa</span></a>
        </li>

        <li class="dropdown">
          <a href="./basemadrehabitta.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Base Madre</span></a>
        </li>

        <li class="dropdown">
          <a href="./bilpocket.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Billpocket</span></a>
        </li>

        <li class="dropdown">
          <a href="./clientesMorosos.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Clientes Morosos</span></a>
        </li>

        <li class="dropdown">
          <a href="./estadodecuenta.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Estado de cuenta</span></a>
        </li>

        <li class="dropdown">
          <a href="./Nico.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Nico</span></a>
        </li>

        <li class="dropdown">
          <a href="./cierreMensualHabitta.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Cierre Mensual</span></a>
        </li>

        <li class="dropdown">
          <a href="./acumuladoComisiones.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Acumulado De Comisiones</span></a>
        </li>

        <li class="dropdown">
          <a href="./CorteMoraRango.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Corte de Mora y Rango</span></a>
        </li>

        <li class="dropdown">
          <a href="./Cobranza_Acumulado.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Cobranza Y Acumulado</span></a>
        </li>




        <li class="dropdown">
          <a href="./Devoluciones_clientes.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Devoluciones a Clientes</span></a>
        </li>


        <li class="dropdown">
          <a href="./Hab_Formato_Comisiones_Internas.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Comisiones Internas</span></a>
        </li>



        <li class="dropdown">
          <a href="./TableroDeResultados.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Tablero de Resultados</span></a>
        </li>

        <li class="dropdown">
          <a href="./AcumuladosBonosDeTierra.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Acumulados Bonos de Tierra</span></a>
        </li>

        <li class="dropdown">
          <a href="./BonosReferidos.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Bonos Referidos</span></a>
        </li>

        <li class="dropdown">
          <a href="./ProyeccionesFlujoHabitta.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Proyecciones de flujo de habitta</span></a>
        </li>

        <li class="dropdown">
          <a href="./EDO_De_Cuenta_Por_Desarrollo_Actualizado.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Estado De Cuenta por Desarrollo Actualizado</span></a>
        </li>

        <li class="">
          <a href="#" class="dashboard"><span>Bancos</span></a>
        </li>

        <li class="dropdown">
          <a href="./bbva.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>BBVA</span></a>


        </li>
        <li class="dropdown">
          <a href="./hsbcl.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>HSBC Lomas</span></a>

        </li>
        <li class="dropdown">
          <a href="./hsbch.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>HSBC Habitta</span></a>

        </li>
        <li class="">
          <a href="#" class="dashboard"><span>Estados de cuenta</span></a>
        </li>
        <li class="dropdown">
          <a href="./cobranza.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Cobranza</span></a>

        </li>
        <li class="dropdown">
          <a href="./listado.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Listado</span></a>

        </li>
        <li class="dropdown">
          <a href="./estados.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Estados de cuenta</span></a>

        </li>
        <li class="dropdown">
          <a href="./catalogo.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Catalogo</span></a>

        </li>
        <li class="dropdown">
          <a href="./tabulador.php" data-toggle="collapse" aria-expanded="false">
            <i class="material-icons"></i><span>Tabulador</span></a>

        </li>



      </ul>
    </nav>
    <!--------page-content---------------->
    <div id="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h2>Bill Pocket</h2>
          </div>
        </div>
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col">
                  <span><img src="images/home.svg" width="25px"></i></span> Home/Bill Pocket
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <a href="./billpocket/agregarbillpocket.php" class="btn btn-primary">
                  Agregar Registro
                </a>
                <hr>
                <table id="tabla" class="table table-striped data-table" style="width: 100%">
                  <thead class="bg__td">
                    <tr class="text-center">
                      <th>NOMBRE_DE_CLIENTE</th>
                      <th>DEPOSITO_DE_CLIENTE</th>
                      <th>COMISION</th>
                      <th>DEPOSITO_EN_BANCO</th>
                      <th>TIPO_DE_PAGO</th>
                      <th>FOLIO</th>
                      <th>TIPO_DE_TARJETA</th>
                      <th>TPVAFILIADA</th>
                      <th>FECHADE_DEPOSITO</th>
                      <th>AÑO</th>
                      <th>BANCO</th>
                      <th>MODIFICAR</th>
                      <th>ELIMINAR</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                          foreach($datos as $item) {
                        ?>
                    <tr class="text-center">
                      <td> <?php echo $item->NOMBRE_DE_CLIENTE; ?> </td>
                      <td> <?php echo "$".number_format(floatval($item->DEPOSITO_DE_CLIENTE),2);?>
                      </td>
                      <td> <?php echo "$".number_format(floatval($item->COMISION),2);?> </td>
                      <td> <?php echo "$".number_format(floatval($item->DEPOSITO_EN_BANCO),2);?>
                      </td>
                      <td> <?php echo $item->TIPO_DE_PAGO;?> </td>
                      <td> <?php echo $item->FOLIO; ?> </td>
                      <td> <?php echo $item->TIPO_DE_TARJETA;?> </td>
                      <td> <?php echo $item->TPVAFILIADA;?> </td>
                      <td> <?php echo $item->FECHADE_DEPOSITO;?></td>
                      <td> <?php echo $item->AÑO;?> </td>
                      <td> <?php echo $item->BANCO;?> </td>
                      <td>
                        <form action="./billpocket/modificar_Billpocket.php" method="POST">
                          <input type="text" name="id" id="id" hidden value="<?php echo $item->_id ?>">
                          <button class="btn btn-warning">
                            <img class="edit__icon" src="images/iconos/pen-solid.svg" alt="">
                          </button>
                        </form>
                      </td>
                      <td>
                        <form action="./billpocket/eliminarbillpocket.php" method="POST">
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
                      <th class="th__texto">NOMBRE_DE_CLIENTE</th>
                      <th class="th__texto">DEPOSITO_DE_CLIENTE</th>
                      <th class="th__texto">COMISION</th>
                      <th class="th__texto">DEPOSITO_EN_BANCO</th>
                      <th class="th__texto">TIPO_DE_PAGO</th>
                      <th class="th__texto">FOLIO</th>
                      <th class="th__texto">TIPO_DE_TARJETA</th>
                      <th class="th__texto">TPVAFILIADA</th>
                      <th class="th__texto">FECHADE_DEPOSITO</th>
                      <th class="th__texto">AÑO</th>
                      <th class="th__texto">BANCO</th>
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