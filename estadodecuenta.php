<?php
  require_once "./clases/Conexion.php";
  require_once "./EstadoDeCuenta/crudestadodecuenta.php";
  $crud = new crudestadodecuenta();
  $datos = $crud->mostrarEstadoDeCuentaDesarrollo();
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
              <h2>Estados de cuenta</h2>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header bg-blue__500">
                <div class="row">
                  <div class="col text-white">
                   <img class="icon-home me-2" src="images/home.svg">  Home/Estados de cuenta
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <a href="./EstadoDeCuenta/agregarestadodecuenta.php" class="btn btn-primary">
                    Agregar Registro
                  </a>
                  <hr>
                  <table id="tabla" class="table table-striped data-table">
                    <thead class="bg__td">
                      <tr class="text-center">
                          <th class="th__texto">CONCEPTO</th>                        
                          <th class="th__texto">PORTTO_BLANCO_CIM</th>
                          <th class="th__texto">LOMAS_DE_PORTTO_BLANCO</th>
                          <th class="th__texto">PORTTO_BLANCO_BERNAL</th>
                          <th class="th__texto">VEREDAS_DE_LIRA</th>
                          <th class="th__texto">PORTTO_BLANCO_SLP</th>
                          <th class="th__texto">GENERAL</th>
                          <th class="th__texto">MODIFICAR</th>
                          <th class="th__texto">ELIMINAR</th>                         
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                            foreach($datos as $item) {
                          ?>
                            <tr class="text-center">
                            <td> <?php echo $item->CONCEPTO; ?> </td>
                            <td> <?php echo number_format(floatval($item->PORTTO_BLANCO_CIM),2);?> </td>
                            <td> <?php echo number_format(floatval($item->LOMAS_DE_PORTTO_BLANCO),2);?> </td>
                            <td> <?php echo number_format(floatval($item->PORTTO_BLANCO_BERNAL),2);?> </td>
                            <td> <?php echo number_format(floatval($item->VEREDAS_DE_LIRA),2);?> </td>
                            <td> <?php echo number_format(floatval($item->PORTTO_BLANCO_SLP),2); ?> </td>
                            <td> <?php echo number_format(floatval($item->GENERAL),2);?> </td>
                            <td>
                              <form action="./EstadoDeCuenta/modificar_EdosCuenta.php" method="POST">
                                <input type="text" name="id" id="id" hidden value="<?php echo $item->_id ?>">
                                <button class="btn btn-warning">
                                  <img class="edit__icon" src="images/iconos/pen-solid.svg" alt="">
                                </button>
                              </form>
                            </td>
                            <td>
                              <form action="./EstadoDeCuenta/eliminarestadodecuenta.php" method="POST">
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
                          <th class="th__texto">CONCEPTO</th>                        
                          <th class="th__texto">PORTTO_BLANCO_CIM</th>
                          <th class="th__texto">LOMAS_DE_PORTTO_BLANCO</th>
                          <th class="th__texto">PORTTO_BLANCO_BERNAL</th>
                          <th class="th__texto">VEREDAS_DE_LIRA</th>
                          <th class="th__texto">PORTTO_BLANCO_SLP</th>
                          <th class="th__texto">GENERAL</th>
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