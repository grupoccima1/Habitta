<?php
  require_once "./clases/Conexion.php";
  require_once "./TableroDeResultados/crudtableroderesultados.php";
  $crud = new crudtableroderesultados();
  $datos = $crud->mostrarDatosTableroResultados();
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
              <h2>Tablero de Resultados</h2>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header bg-blue__500">
                <div class="row">
                  <div class="col text-white">
                   <img class="icon-home me-2" src="images/home.svg">  Home/Tablero de Resultados
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <a href="./TableroDeResultados/agregartableroderesultados.php" class="btn btn-primary">
                    Agregar Registro
                  </a>
                  <hr>
                  <table id="tabla" class="table table-striped data-table">
                    <thead class="bg__td bg-blue__400 text-white">
                      <tr class="text-center">
                          <th class="th__texto">GIRO</th>                        
                          <th class="th__texto">U_TOTALES</th>
                          <th class="th__texto">U_APARTADAS</th>
                          <th class="th__texto">U_PORVENDER</th>
                          <th class="th__texto">U_VENDIDAS</th>
                          <th class="d-none th__texto">U_POR_CERRAR</th>
                          <th class="d-none th__texto">U_POR_RECUPERAR</th>
                          <th class="d-none th__texto">RECUPERADOS</th>
                          <th class="d-none th__texto">DESARROLLO</th>
                          <th class="d-none th__texto">U_POR_VENDER</th>
                          <th class="d-none th__texto">ESTATUS</th>
                          <th class="d-none th__texto">TOTAL_VENCIDOS</th>
                          <th class="th__texto">MODIFICAR</th>
                          <th class="th__texto">ELIMINAR</th>
                      </tr>
                    </thead>
                    <tbody>
                           <?php
                            foreach($datos as $item) {
                          ?>
                            <tr class="text-center">
                            <td> <?php echo $item->GIRO;?> </td>
                            <td> <?php echo number_format($item->U_TOTALES,2);?> </td>
                            <td> <?php echo number_format($item->U_APARTADAS,2);?> </td>
                            <td> <?php echo number_format($item->U_PORVENDER,2);?> </td>
                            <td> <?php echo number_format($item->U_VENDIDAS,2);?> </td>
                            <td class="d-none"> <?php echo number_format($item->U_POR_CERRAR,2); ?> </td>
                            <td class="d-none"> <?php echo number_format($item->U_POR_RECUPERAR,2);?> </td>
                            <td class="d-none"> <?php echo number_format($item->RECUPERADOS,2);?> </td>
                            <td class="d-none"> <?php echo $item->DESARROLLO;?></td>
                            <td class="d-none"> <?php echo number_format($item->U_POR_VENDER,2);?> </td>
                            <td class="d-none"> <?php echo $item->ESTATUS;?> </td>
                            <td class="d-none"> <?php echo number_format($item->TOTAL_VENCIDOS,2);?> </td>
                            <td>
                              <form action="./TableroDeResultados/modificar_TableroResultados.php" method="POST">
                                <input type="text" name="id" id="id" hidden value="<?php echo $item->_id ?>">
                                <button class="btn btn-warning">
                                  <img class="edit__icon" src="images/iconos/pen-solid.svg" alt="">
                                </button>
                              </form>
                            </td>
                            <td>
                              <form action="./TableroDeResultados/eliminartableroderesultados.php" method="POST">
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
                          <th class="th__texto">GIRO</th>                        
                          <th class="th__texto">U_TOTALES</th>
                          <th class="th__texto">U_APARTADAS</th>
                          <th class="th__texto">U_PORVENDER</th>
                          <th class="th__texto">U_VENDIDAS</th>
                          <th class="d-none th__texto">U_POR_CERRAR</th>
                          <th class="d-none th__texto">U_POR_RECUPERAR</th>
                          <th class="d-none th__texto">RECUPERADOS</th>
                          <th class="d-none th__texto">DESARROLLO</th>
                          <th class="d-none th__texto">U_POR_VENDER</th>
                          <th class="d-none th__texto">ESTATUS</th>
                          <th class="d-none th__texto">TOTAL_VENCIDOS</th>
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