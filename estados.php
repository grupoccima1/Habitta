<?php
  require_once "./clases/Conexion.php";
  require_once "./Estados/crudestados.php";
  $crud = new crudestados();
  $datos = $crud->mostrarDatosestados();
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
              <h2>Estados</h2>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header bg-blue__500">
                <div class="row">
                  <div class="col text-white">
                   <img class="icon-home me-2" src="images/home.svg">  Home/Estados
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <a href="./Estados/agregarestados.php" class="btn btn-primary">
                    Agregar Registro
                  </a>
                  <hr>
                  <table id="tabla" class="table table-striped data-table">
                    <thead class="bg__td bg-blue__400 text-white">
                      <tr class="text-center">
                          <th class="th__texto">Source name</th>
                          <th class="th__texto">Periodo</th>                        
                          <th class="th__texto">Fecha</th>
                          <th class="th__texto">Saldo inicial</th>
                          <th class="th__texto">Mensualidad</th>
                          <th class="th__texto">Pagado</th>
                          <th class="th__texto">Interes de financiamiento</th>
                          <th class="th__texto">Abono a capital</th>
                          <th class="th__texto">Saldo final</th>
                          <th class="th__texto">Interes gen</th>
                          <th class="th__texto">Interes int</th>
                          <!-- <th class="th__texto">Interes acumulado mora</th> -->
                          <th class="th__texto">Interes neg</th>
                          <th class="th__texto">Estatus</th>
                          <th class="th__texto">Observacion</th>
                          <th class="th__texto">Debe interes</th>
                          <th class="th__texto">Fecha pago</th>                            
                          <th class="th__texto">Indicador fecha</th>
                          <th class="th__texto">Porcentaje de interes</th>
                          <th class="th__texto">Llave 2</th>
                          <th class="th__texto">Mensualidad de adeudo</th>
                          <th class="th__texto">Calculo sobre</th>
                          <th class="th__texto">Monto de interes moratorio</th>
                          <th class="th__texto">Modificar</th>
                          <th class="th__texto">Eliminar</th>  
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                            foreach($datos as $item) {
                          ?>
                            <tr class="text-center">
                            <td> <?php echo $item->SourceName;?> </td>
                            <td> <?php echo $item->PERIODO; ?> </td>
                            <td> <?php echo $item->FECHA;?> </td> 
                            <td> <?php echo "$".number_format(floatval($item->SALDOINICIAL),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->MENSUALIDAD),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->PAGADO),2); ?> </td>
                            <td> <?php echo $item->INTERESFINANCIAMIENTO;?> </td>
                            <td> <?php echo "$".number_format(floatval($item->ABONO_CAPITAL),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->SALDO_FINAL),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->INT_GEN),2);?> </td>
                            <td> <?php echo $item->INT_INT;?> </td>
                            <!-- <td> <?php echo $item->INT_ACUMMORA;?> </td> -->
                            <td> <?php echo $item->INT_NEG;?> </td>
                            <td> <?php echo $item->ESTATUS;?> </td>
                            <td> <?php echo $item->OBSERVACION; ?> </td>
                            <td> <?php echo $item->DEBE_INTERES;?> </td>
                            <td> <?php echo $item->FECHA_PAGO;?> </td>
                            <td> <?php echo $item->INDICADOR_FECHA;?> </td>
                            <td> <?php echo $item->PORCENT_INT;?> </td>
                            <td> <?php echo $item->LLAVE2;?> </td>
                            <td> <?php echo "$".number_format(floatval($item->MENS_ADEU),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->CALC_SOBRE),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->MONTO_INT_MOR),2);?> </td>
                            <td>
                              <form action="./Estados/actualizarestados.php" method="POST">
                                <input type="text" name="id" id="id" hidden value="<?php echo $item->_id ?>">
                                <button class="btn btn-warning">
                                    <img class="edit__icon" src="images/iconos/pen-solid.svg" alt="">
                                </button>
                              </form>
                            </td>
                            <td>
                              <form action="./Estados/eliminarestados.php" method="POST">
                                <input type="text" name="id" id="id" hidden value="<?php echo $item->_id ?>">
                                <button class="btn btn-danger">
                                  <img class="delete__icon" src="images/iconos/trash-solid.svg" alt="">
                                </button>
                              </form>
                            </td>
                              </td>
                            </tr>
                            <?php } ?> 
                    </tbody>
                    <tfoot class="bg-blue">
                      <tr class="text-center">
                          <th class="th__texto">Source name</th>
                          <th class="th__texto">Periodo</th>                        
                          <th class="th__texto">Fecha</th>
                          <th class="th__texto">Saldo inicial</th>
                          <th class="th__texto">Mensualidad</th>
                          <th class="th__texto">Pagado</th>
                          <th class="th__texto">Interes de financiamiento</th>
                          <th class="th__texto">Abono a capital</th>
                          <th class="th__texto">Saldo final</th>
                          <th class="th__texto">Interes gen</th>
                          <th class="th__texto">Interes int</th>
                          <!-- <th class="th__texto">Interes acumulado mora</th> -->
                          <th class="th__texto">Interes neg</th>
                          <th class="th__texto">Estatus</th>
                          <th class="th__texto">Observacion</th>
                          <th class="th__texto">Debe interes</th>    
                          <th class="th__texto">Fecha pago</th>                     
                          <th class="th__texto">Indicador fecha</th>
                          <th class="th__texto">Porcentaje de interes</th>
                          <th class="th__texto">Llave 2</th>
                          <th class="th__texto">Mensualidad de adeudo</th>
                          <th class="th__texto">Calculo sobre</th>
                          <th class="th__texto">Monto de interes moratorio</th>
                          <th class="th__texto">Modificar</th>
                          <th class="th__texto">Eliminar</th>
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
