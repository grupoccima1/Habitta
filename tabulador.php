<?php
  require_once "./clases/Conexion.php";
  require_once "./Tabulador/crud_Tabulador.php";
  $crud = new crudtabulador();
  $datos = $crud->mostrarDatostabulador();
?>
<!DOCTYPE html>
<html lang="es">
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
      <?php include "./sidebar.php"; ?> 
      <!--------page-content---------------->
      <div id="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <h2>Tabulador</h2>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header bg-blue__500">
                <div class="row">
                  <div class="col text-white">
                   <img class="icon-home me-2" src="images/home.svg">  Home/Tabulador
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <a href="./Tabulador/agregar_Tabulador.php" class="btn btn-primary">
                  Agregar registro 
                  </a>
                  <hr>
                  <table id="tabla" class="table table-striped data-table">
                    <thead class="bg__td">
                      <tr class="text-center">
                          <th class="th__texto">Periodo</th>                        
                          <th class="th__texto">Fecha</th>
                          <th class="th__texto">Mensualidad</th>
                          <th class="th__texto">Pagado</th>
                          <th class="th__texto">Fecha de pago</th>
                          <th class="th__texto">Interes de financiamiento</th>
                          <th class="th__texto">Abono a capital</th>
                          <th class="th__texto">Saldo final</th>
                          <th class="th__texto">Interes gen</th>
                          <th class="th__texto">Interes int</th>
                          <th class="th__texto">Interes acumulado mora</th>
                          <th class="th__texto">Interes neg</th>
                          <th class="th__texto">Interes pagado</th>
                          <th class="th__texto">Estatus</th>
                          <th class="th__texto">Observacion</th>
                          <th class="th__texto">Debe interes</th>                        
                          <th class="th__texto">Indicador fecha</th>
                          <th class="th__texto">Porcentaje de interes</th>
                          <th class="th__texto">Llave 2</th>
                          <th class="th__texto">Mensualidad de adeudo</th>
                          <th class="th__texto">Calculo sobre</th>
                          <th class="th__texto">Monto de interes moratorio</th>
                          <th class="th__texto">Suma deuda</th>
                          <th class="th__texto">Modificar</th>
                          <th class="th__texto">Eliminar</th>
                      </tr>
                    </thead>
                    <tbody>
                          <?php
                            foreach($datos as $item) {
                          ?>
                            <tr class="text-center">
                            <td> <?php echo $item->PERIODO; ?> </td>
                            <td> <?php echo $item->FECHA;?> </td>
                            <td> <?php echo "$".number_format(floatval($item->MENSUALIDAD),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->PAGADO),2); ?> </td>
                            <td> <?php echo $item->FECHA_PAGO;?> </td>
                            <td> <?php echo "$".number_format(floatval($item->INTERESFINANCIAMIENTO),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->ABONO_CAPITAL),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->SALDO_FINAL),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->INT_GEN),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->INT_INT),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->INT_ACUM_MORA),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->INT_NEG),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->INT_PAGADO),2);?> </td>
                            <td> <?php echo $item->ESTATUS;?> </td>
                            <td> <?php echo $item->OBSERVACION; ?> </td>
                            <td> <?php echo $item->DEBE_INTERES;?> </td>
                            <td> <?php echo $item->INDICADOR_FECHA;?> </td>
                            <td> <?php echo $item->PORCENT_INT;?> </td>
                            <td> <?php echo $item->LLAVE2;?> </td>
                            <td> <?php echo $item->MENS_ADEU;?> </td>
                            <td> <?php echo $item->CALC_SOBRE; ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->MONTO_INT_MOR),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->SUMA_DEUDA),2);?> </td>
                            <td>
                              <form action="./Tabulador/actualizartabulador.php" method="POST">
                                <input type="text" name="id" id="id" hidden value="<?php echo $item->_id ?>">
                                <button class="btn btn-warning">
                                  <img class="edit__icon" src="images/iconos/pen-solid.svg" alt="">
                                </button>
                              </form>
                            </td>
                            <td>
                              <form action="./Tabulador/eliminartabulador.php" method="POST">
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
                      <tr>
                          <th class="th__texto text-center">Periodo</th>                        
                          <th class="th__texto text-center">Fecha</th>
                          <th class="th__texto text-center">Mensualidad</th>
                          <th class="th__texto text-center">Pagado</th>
                          <th class="th__texto text-center">Fecha de pago</th>
                          <th class="th__texto text-center">Interes de financiamiento</th>
                          <th class="th__texto text-center">Abono a capital</th>
                          <th class="th__texto text-center">Saldo final</th>
                          <th class="th__texto text-center">Interes gen</th>
                          <th class="th__texto text-center">Interes int</th>
                          <th class="th__texto text-center">Interes acumulado mora</th>
                          <th class="th__texto text-center">Interes neg</th>
                          <th class="th__texto text-center">Interes pagado</th>
                          <th class="th__texto text-center">Estatus</th>
                          <th class="th__texto text-center">Observacion</th>
                          <th class="th__texto text-center">Debe interes</th>                        
                          <th class="th__texto text-center">Indicador fecha</th>
                          <th class="th__texto text-center">Porcentaje de interes</th>
                          <th class="th__texto text-center">Llave 2</th>
                          <th class="th__texto text-center">Mensualidad de adeudo</th>
                          <th class="th__texto text-center">Calculo sobre</th>
                          <th class="th__texto text-center">Monto de interes moratorio</th>
                          <th class="th__texto text-center">Suma deuda</th>
                          <th class="th__texto text-center">Modificar</th>
                          <th class="th__texto text-center">Eliminar</th>
                      </tr>
                    </tfoot>
                  </table>
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
