<?php
require_once "./clases/Conexion.php";
  require_once "./BonosReferidos/crudbonosreferidos.php";
  $crud = new crudbonosreferidos();
  $datos = $crud->mostrarDatosBonosReferidos();
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
              <h2>Bienvenido</h2>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header bg-blue__500">
                <div class="row">
                  <div class="col text-white">
                    <span><img src="images/home.svg" width="25px"></i></span> Home/Bonos Referidos
                  </div>

                </div>

              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <a href="./BonosReferidos/agregarbonosreferidos.php" class="btn btn-primary">
                    Agregar Registro
                  </a>
                  <hr>
                  <table id="tabla" class="table table-striped data-table">
                    <thead class="bg__td bg-blue__400 text-white">
                      <tr class="text-center">
                          <th class="th__texto">NÚMERO</th>                        
                          <th class="th__texto">CONDOMIO</th>
                          <th class="th__texto">CLUSTER</th>
                          <th class="th__texto">CLIENTE</th>
                          <th class="th__texto">PROMOCIÓN</th>
                          <th class="th__texto">ESTATUS_DÍAS</th>
                          <th class="th__texto">INICIO_DE_CORRIDA_CONTRATO_O_SIMULADOR</th>
                          <th class="th__texto">Columna1</th>
                          <th class="th__texto">APLICADO</th>
                          <th class="th__texto">APARTADO</th>
                          <th class="th__texto">FECHAS_DE_PAGO</th>
                          <th class="th__texto">ENGANCHE</th>                        
                          <th class="th__texto">TOTAL_PAGADO</th>
                          <th class="th__texto">Columna2</th>
                          <th class="th__texto">Columna3</th>
                          <th class="th__texto">Columna4</th>
                          <th class="th__texto">Columna5</th>
                          <th class="th__texto">Columna6</th>
                          <th class="th__texto">STATUS</th>
                          <th class="th__texto">SÍ_NO</th>
                          <th class="th__texto">CONDOMINIO</th>
                          <th class="th__texto">CLÚSTER</th>
                          <th class="th__texto">BONO</th>                        
                          <th class="th__texto">LOTE_numero1</th>
                          <th class="th__texto">CONDOMINIO_numero1</th>
                          <th class="th__texto">CLÚSTER_numero1</th>
                          <th class="th__texto">CLIENTE_numero1</th>
                          <th class="th__texto">NOTA</th>
                          <th class="th__texto">MODIFICAR</th>
                          <th class="th__texto">ELIMINAR</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                            foreach($datos as $item) {
                          ?>
                            <tr class="text-center">
                            <td> <?php echo $item->NÚMERO; ?> </td>
                            <td> <?php echo $item->CONDOMIO;?> </td>
                            <td> <?php echo $item->CLUSTER;?> </td>
                            <td> <?php echo $item->CLIENTE;?> </td>
                            <td> <?php echo $item->PROMOCIÓN;?> </td>
                            <td> <?php echo $item->ESTATUS_DÍAS; ?> </td>
                            <td> <?php echo $item->INICIO_DE_CORRIDA_CONTRATO_O_SIMULADOR;?> </td>
                            <td> <?php echo $item->Columna1;?> </td>
                            <td> <?php echo $item->APLICADO;?> </td>
                            <td> <?php echo $item->APARTADO;?></td>
                            <td> <?php echo $item->FECHAS_DE_PAGO;?> </td>
                            <td> <?php echo $item->ENGANCHE;?> </td>
                            <td> <?php echo "$".number_format(floatval($item->TOTAL_PAGADO),2); ?> </td>
                            <td> <?php echo $item->Columna2;?> </td>
                            <td> <?php echo $item->Columna3;?> </td>
                            <td> <?php echo $item->Columna4;?> </td>
                            <td> <?php echo $item->Columna5;?> </td>
                            <td> <?php echo $item->Columna6;?> </td>
                            <td> <?php echo $item->STATUS;?> </td>
                            <td> <?php echo $item->SÍ_NO;?></td>
                            <td> <?php echo $item->CONDOMINIO; ?> </td>
                            <td> <?php echo $item->CLÚSTER;?> </td>
                            <td> <?php echo $item->BONO;?> </td>
                            <td> <?php echo $item->LOTE_numero1;?> </td>
                            <td> <?php echo $item->CONDOMINIO_numero1;?> </td>
                            <td> <?php echo $item->CLÚSTER_numero1; ?> </td>
                            <td> <?php echo $item->CLIENTE_numero1;?> </td>
                            <td> <?php echo $item->NOTA;?> </td>
                            <td>
                              <form action="./BonosReferidos/modificar_BonosReferidos.php" method="POST">
                                <input type="text" name="id" id="id" hidden value="<?php echo $item->_id ?>">
                                <button class="btn btn-warning">
                                  <img class="edit__icon" src="images/iconos/pen-solid.svg" alt="">
                                </button>
                              </form>
                            </td>
                            <td>
                              <form action="./BonosReferidos/eliminarbonosreferidos.php" method="POST">
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
                          <th class="th__texto">NÚMERO</th>                        
                          <th class="th__texto">CONDOMIO</th>
                          <th class="th__texto">CLUSTER</th>
                          <th class="th__texto">CLIENTE</th>
                          <th class="th__texto">PROMOCIÓN</th>
                          <th class="th__texto">ESTATUS_DÍAS</th>
                          <th class="th__texto">INICIO_DE_CORRIDA_CONTRATO_O_SIMULADOR</th>
                          <th class="th__texto">Columna1</th>
                          <th class="th__texto">APLICADO</th>
                          <th class="th__texto">APARTADO</th>
                          <th class="th__texto">FECHAS_DE_PAGO</th>
                          <th class="th__texto">ENGANCHE</th>                        
                          <th class="th__texto">TOTAL_PAGADO</th>
                          <th class="th__texto">Columna2</th>
                          <th class="th__texto">Columna3</th>
                          <th class="th__texto">Columna4</th>
                          <th class="th__texto">Columna5</th>
                          <th class="th__texto">Columna6</th>
                          <th class="th__texto">STATUS</th>
                          <th class="th__texto">SÍ_NO</th>
                          <th class="th__texto">CONDOMINIO</th>
                          <th class="th__texto">CLÚSTER</th>
                          <th class="th__texto">BONO</th>                        
                          <th class="th__texto">LOTE_numero1</th>
                          <th class="th__texto">CONDOMINIO_numero1</th>
                          <th class="th__texto">CLÚSTER_numero1</th>
                          <th class="th__texto">CLIENTE_numero1</th>
                          <th class="th__texto">NOTA</th>
                          <th class="th__texto">MODIFICAR</th>
                          <th class="th__texto">ELIMINAR</th>
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