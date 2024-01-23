<?php
  require_once "./clases/Conexion.php";
  require_once "./ProyeccionHabitta/crudproyeccionhabitta.php";
  $crud = new crudproyeccionhabitta();
  $datos = $crud->mostrarDatosProyeccionesHabitta();
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
    <?php include "./sidebar.php"; ?>
    <!--------page-content---------------->
    <div id="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h2>Proyecciones de Flujo Habitta</h2>
          </div>
        </div>
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-header bg-blue__500">
              <div class="row">
                <div class="col text-white">
                  <img class="icon-home me-2" src="images/home.svg"> Home/Proyecciones de Flujo Habitta
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <a href="./ProyeccionHabitta/agregarproyeccionhabitta.php" class="btn btn-primary">
                  Agregar Registro
                </a>
                <hr>
                <table id="tabla" class="table table-striped data-table">
                  <thead class="bg__td bg-blue__400 text-white">
                    <tr class="text-center">
                      <th class="th__texto">MES</th>
                      <th class="th__texto">fecha_2020</th>
                      <th class="th__texto">fecha_2021</th>
                      <th class="th__texto">fecha_2022</th>
                      <th class="th__texto">fecha_2023</th>
                      <th class="d-none th__texto">fecha_2024</th>
                      <th class="d-none th__texto">fecha_2025</th>
                      <th class="d-none th__texto">fecha_2026</th>
                      <th class="d-none th__texto">fecha_2027</th>
                      <th class="d-none th__texto">fecha_2028</th>
                      <th class="d-none th__texto">fecha_2029</th>
                      <th class="d-none th__texto">fecha_2030</th>
                      <th class="d-none th__texto">fecha_2031</th>
                      <th class="d-none th__texto">fecha_2032</th>
                      <th class="d-none th__texto">fecha_2033</th>
                      <th class="d-none th__texto">fecha_2034</th>
                      <th class="d-none th__texto">fecha_2035</th>
                      <th class="d-none th__texto">fecha_2036</th>
                      <th class="d-none th__texto">fecha_2037</th>
                      <th class="d-none th__texto">fecha_general</th>
                      <th class="d-none th__texto">DESIERTO</th>
                      <th class="d-none th__texto">ESTEPA</th>
                      <th class="d-none th__texto">PARAMO</th>
                      <th class="d-none th__texto">TAIGA</th>
                      <th class="d-none th__texto">BOSQUE</th>
                      <th class="d-none th__texto">LOMAS</th>
                      <th class="d-none th__texto">Total_general</th>
                      <th class="d-none th__texto">SELVA</th>
                      <th class="d-none th__texto">LAGO</th>
                      <th class="d-none th__texto">MANGLAR</th>
                      <th class="th__texto">MODIFICAR</th>
                      <th class="th__texto">ELIMINAR</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                          foreach($datos as $item) {
                        ?>
                    <tr class="text-center">
                      <td> <?php echo $item->MES;?> </td>
                      <td> <?php echo "$".number_format($item->fecha_2020,2);?> </td>
                      <td> <?php echo "$".number_format($item->fecha_2021,2);?> </td>
                      <td> <?php echo "$".number_format($item->fecha_2022,2);?> </td>
                      <td> <?php echo "$".number_format($item->fecha_2023,2);?> </td>
                      <td class="d-none"> <?php echo "$".number_format($item->fecha_2024,2);?> </td>
                      <td class="d-none"> <?php echo "$".number_format($item->fecha_2025,2);?> </td>
                      <td class="d-none"> <?php echo "$".number_format($item->fecha_2026,2);?> </td>
                      <td class="d-none"> <?php echo "$".number_format($item->fecha_2027,2);?></td>
                      <td class="d-none"> <?php echo "$".number_format($item->fecha_2028,2);?> </td>
                      <td class="d-none"> <?php echo "$".number_format($item->fecha_2029,2);?> </td>
                      <td class="d-none"> <?php echo "$".number_format($item->fecha_2030,2);?> </td>
                      <td class="d-none"> <?php echo "$".number_format($item->fecha_2031,2);?> </td>
                      <td class="d-none"> <?php echo "$".number_format($item->fecha_2032,2);?> </td>
                      <td class="d-none"> <?php echo "$".number_format($item->fecha_2033,2);?> </td>
                      <td class="d-none"> <?php echo "$".number_format($item->fecha_2034,2);?> </td>
                      <td class="d-none"> <?php echo "$".number_format($item->fecha_2035,2);?> </td>
                      <td class="d-none"> <?php echo "$".number_format($item->fecha_2036,2);?> </td>
                      <td class="d-none"> <?php echo "$".number_format($item->fecha_2037,2);?> </td>
                      <td class="d-none"> <?php echo "$".number_format($item->fecha_general,2);?> </td>
                      <td class="d-none"> <?php echo "$".number_format($item->DESIERTO,2);?> </td>
                      <td class="d-none"> <?php echo "$".number_format($item->ESTEPA,2);?> </td>
                      <td class="d-none"> <?php echo "$".number_format($item->PARAMO,2);?> </td>
                      <td class="d-none"> <?php echo "$".number_format($item->TAIGA,2);?> </td>
                      <td class="d-none"> <?php echo "$".number_format($item->BOSQUE,2);?> </td>
                      <td class="d-none"> <?php echo "$".number_format($item->LOMAS,2);?> </td>
                      <td class="d-none"> <?php echo "$".number_format($item->Total_general,2);?> </td>
                      <td class="d-none"> <?php echo "$".number_format($item->SELVA,2);?> </td>
                      <td class="d-none"> <?php echo "$".number_format($item->LAGO,2);?> </td>
                      <td class="d-none"> <?php echo "$".number_format($item->MANGLAR,2);?> </td>
                      <td>
                        <form action="./ProyeccionHabitta/modificar_ProyeccionesFlujo.php" method="POST">
                          <input type="text" name="id" id="id" hidden value="<?php echo $item->_id ?>">
                          <button class="btn btn-warning">
                            <img class="edit__icon" src="images/iconos/pen-solid.svg" alt="">
                          </button>
                        </form>
                      </td>
                      <td>
                        <form action="./ProyeccionHabitta/eliminarproyeccioneshabitta.php" method="POST">
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
                      <th class="th__texto">MES</th>
                      <th class="th__texto">fecha_2020</th>
                      <th class="th__texto">fecha_2021</th>
                      <th class="th__texto">fecha_2022</th>
                      <th class="th__texto">fecha_2023</th>
                      <th class="d-none th__texto">fecha_2024</th>
                      <th class="d-none th__texto">fecha_2025</th>
                      <th class="d-none th__texto">fecha_2026</th>
                      <th class="d-none th__texto">fecha_2027</th>
                      <th class="d-none th__texto">fecha_2028</th>
                      <th class="d-none th__texto">fecha_2029</th>
                      <th class="d-none th__texto">fecha_2030</th>
                      <th class="d-none th__texto">fecha_2031</th>
                      <th class="d-none th__texto">fecha_2032</th>
                      <th class="d-none th__texto">fecha_2033</th>
                      <th class="d-none th__texto">fecha_2034</th>
                      <th class="d-none th__texto">fecha_2035</th>
                      <th class="d-none th__texto">fecha_2036</th>
                      <th class="d-none th__texto">fecha_2037</th>
                      <th class="d-none th__texto">fecha_general</th>
                      <th class="d-none th__texto">DESIERTO</th>
                      <th class="d-none th__texto">ESTEPA</th>
                      <th class="d-none th__texto">PARAMO</th>
                      <th class="d-none th__texto">TAIGA</th>
                      <th class="d-none th__texto">BOSQUE</th>
                      <th class="d-none th__texto">LOMAS</th>
                      <th class="d-none th__texto">Total_general</th>
                      <th class="d-none th__texto">SELVA</th>
                      <th class="d-none th__texto">LAGO</th>
                      <th class="d-none th__texto">MANGLAR</th>
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