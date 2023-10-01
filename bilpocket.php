<?php
require_once "./clases/Conexion.php";
  require_once "./clases/crud.php";
  $crud = new Crud();
  $datos = $crud->mostrarDatobillpocket();
?>
<!DOCTYPE html>
<html lang="es">
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
      <?php include 'sidebar.php'; ?>
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
              <div class="card-header bg-blue__500">
                <div class="row">
                  <div class="col text-white">
                   <img class="icon-home me-2" src="images/home.svg">  Home/Bill Pocket
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <a href="./billpocket/agregarbillpocket.php" class="btn btn-primary">
                    Agregar Registro
                  </a>
                  <hr>
                  <table id="tabla" class="table table-striped data-table">
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
                        <td> <?php echo "$".number_format(floatval($item->DEPOSITO_DE_CLIENTE),2);?></td>
                        <td> <?php echo "$".number_format(floatval($item->COMISION),2);?> </td>
                        <td> <?php echo "$".number_format(floatval($item->DEPOSITO_EN_BANCO),2);?></td>
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