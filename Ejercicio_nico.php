<?php
require_once "./clases/Conexion.php";
  require_once "./clases/crud.php";
  $crud = new Crud();
  $datos = $crud->mostrarNico();
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
    <!------- Sidebar  ------------------->
    <?php include "./sidebar.php"; ?>
    <!--------page-content---------------->
    <div id="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h2>Nico Nico ni </h2>
          </div>
        </div>
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-header bg-blue__500">
              <div class="row">
                <div class="col text-white">
                  <img class="icon-home me-2" src="images/home.svg"> Home /Nico Nico Ni
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <a href="./Nico/agregarnico.php" class="btn btn-primary">
                  Agregar Registro
                </a>
                <hr>
                <table id="tabla" class="table table-striped data-table" style="width: 100%">
                  <thead class="bg__td bg-blue__500 text-white">
                    <tr class="text-center">
                      <th class="th__texto">OBSERVACION</th>
                      <th class="th__texto">LLAVE</th>
                      <th class="th__texto">RAZON_SOCIAL</th>
                      <th class="th__texto">FECHA</th>
                      <th class="th__texto">BENEFICIARIO</th>
                      <th class="d-none th__texto">RFC</th>
                      <th class="d-none th__texto">USO_CFDI</th>
                      <th class="d-none th__texto">ABONO</th>
                      <th class="d-none th__texto">CARGO</th>
                      <th class="d-none th__texto">FACTURA</th>
                      <th class="d-none th__texto">REAL</th>
                      <th class="d-none th__texto">MOTIVO</th>
                      <th class="d-none th__texto">CATEGORIA</th>
                      <th class="d-none th__texto">METODO_DE_PAGO</th>
                      <th class="d-none th__texto">SUBCATEGORIA</th>
                      <th class="d-none th__texto">FLUJO</th>
                      <th class="d-none th__texto">ORIGEN</th>
                      <th class="d-none th__texto">CLIENTE</th>
                      <th class="d-none th__texto">CORREO</th>
                      <th class="d-none th__texto">TELEFONO</th>
                      <th class="th__texto">MODIFICAR</th>
                      <th class="th__texto">ELIMINAR</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                          foreach($datos as $item) {
                        ?>
                    <tr>
                      <td> <?php echo $item->OBSERVACION; ?> </td>
                      <td> <?php echo $item->LLAVE;?> </td>
                      <td> <?php echo $item->RAZON_SOCIAL;?> </td>
                      <td> <?php echo $item->FECHA;?> </td>
                      <td> <?php echo $item->BENEFICIARIO;?> </td>
                      <td class="d-none"> <?php echo $item->RFC; ?> </td>
                      <td class="d-none"> <?php echo $item->USO_CFDI;?> </td>
                      <td class="d-none"> <?php echo $item->ABONO;?> </td>
                      <td class="d-none"> <?php echo $item->CARGO;?></td>
                      <td class="d-none"> <?php echo $item->FACTURA;?> </td>
                      <td class="d-none"> <?php echo $item->REAL;?> </td>
                      <td class="d-none"> <?php echo $item->MOTIVO;?> </td>
                      <td class="d-none"> <?php echo $item->CATEGORIA;?> </td>
                      <td class="d-none"> <?php echo $item->METODO_DE_PAGO;?> </td>
                      <td class="d-none"> <?php echo $item->SUBCATEGORIA;?> </td>
                      <td class="d-none"> <?php echo $item->FLUJO;?> </td>
                      <td class="d-none"> <?php echo $item->ORIGEN;?> </td>
                      <td class="d-none"> <?php echo $item->CLIENTE;?> </td>
                      <td class="d-none"> <?php echo $item->CORREO;?> </td>
                      <td class="d-none"> <?php echo $item->TELEFONO;?> </td>
                      <td>
                        <form action="./Nico/modificar_Nico.php" method="POST">
                          <input type="text" name="id" id="id" hidden value="<?php echo $item -> _id ?>">
                          <button class="btn btn-warning">
                            <img class="edit__icon" src="images/iconos/pen-solid.svg" alt="">
                          </button>
                        </form>
                      </td>
                      <td class="text-center">
                        <form action="./Nico/eliminarnico.php" method="POST">
                          <input type="text" name="id" id="id" hidden value="<?php echo $item -> _id ?>">
                          <button class="btn btn-danger">
                            <img class="delete__icon" src="images/iconos/trash-solid.svg" alt="">
                          </button>
                        </form>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th class="th__texto">OBSERVACION</th>
                      <th class="th__texto">LLAVE</th>
                      <th class="th__texto">RAZON_SOCIAL</th>
                      <th class="th__texto">FECHA</th>
                      <th class="th__texto">BENEFICIARIO</th>
                      <th class="d-none th__texto">RFC</th>
                      <th class="d-none th__texto">USO_CFDI</th>
                      <th class="d-none th__texto">ABONO</th>
                      <th class="d-none th__texto">CARGO</th>
                      <th class="d-none th__texto">FACTURA</th>
                      <th class="d-none th__texto">REAL</th>
                      <th class="d-none th__texto">MOTIVO</th>
                      <th class="d-none th__texto">CATEGORIA</th>
                      <th class="d-none th__texto">METODO_DE_PAGO</th>
                      <th class="d-none th__texto">SUBCATEGORIA</th>
                      <th class="d-none th__texto">FLUJO</th>
                      <th class="d-none th__texto">ORIGEN</th>
                      <th class="d-none th__texto">CLIENTE</th>
                      <th class="d-none th__texto">CORREO</th>
                      <th class="d-none th__texto">TELEFONO</th>
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