<?php
  require_once "./clases/Conexion.php";
  require_once "./ComisionesInternas/crudcomisionesinternas.php";
  $crud = new crudcomisionesinternas();
  $datos = $crud->mostrarDatosComisionesInternas();
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
              <h2>Comisiones Internas</h2>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header bg-blue__500">
                <div class="row">
                  <div class="col text-white" >
                   <img class="icon-home me-2" src="images/home.svg">  Home/Comisiones Internas
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <a href="./ComisionesInternas/agregarcomisionesinternas.php" class="btn btn-primary">
                    Agregar Registro
                  </a>
                  <hr>
                  <table id="tabla" class="table table-striped data-table">
                    <thead class="bg__td bg-blue__400 text-white ">
                      <tr class="text-center">
                          <th class="th__texto">LLAVE</th>                        
                          <th class="th__texto">NOMBRE_DEL_CLIENTE</th>
                          <th class="th__texto">FECHA_DE_APARTADO</th>
                          <th class="th__texto">FECHA_ENTREGA_DE_CONTRATO</th>
                          <th class="th__texto">IMPORTE_A_COMISIONAR</th>
                          <th class="th__texto">PCOMISION</th>
                          <th class="th__texto">IMPORTE</th>
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
                            <td> <?php echo $item->NOMBRE_DEL_CLIENTE;?> </td>
                            <td> <?php echo $item->FECHA_DE_APARTADO;?> </td>
                            <td> <?php echo $item->FECHA_ENTREGA_DE_CONTRATO;?> </td>
                            <td> <?php echo "$".number_format(floatval($item->IMPORTE_A_COMISIONAR),2);?> </td>
                            <td> <?php echo $item->PCOMISION; ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->IMPORTE),2);?> </td>
                            <td>
                              <form action="./ComisionesInternas/modificar_ComisionesInternas.php" method="POST">
                                <input type="text" name="id" id="id" hidden value="<?php echo $item->_id ?>">
                                <button class="btn btn-warning">
                                  <img class="edit__icon" src="images/iconos/pen-solid.svg" alt="">
                                </button>
                              </form>
                            </td>
                            <td>
                              <form action="./ComisionesInternas/eliminarcomisionesinternas.php" method="POST">
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
                          <th class="th__texto">NOMBRE_DEL_CLIENTE</th>
                          <th class="th__texto">FECHA_DE_APARTADO</th>
                          <th class="th__texto">FECHA_ENTREGA_DE_CONTRATO</th>
                          <th class="th__texto">IMPORTE_A_COMISIONAR</th>
                          <th class="th__texto">PCOMISION</th>
                          <th class="th__texto">IMPORTE</th>
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