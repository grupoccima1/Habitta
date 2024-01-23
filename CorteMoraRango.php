<?php
  require_once "./clases/Conexion.php";
  require_once "./CorteMR/crudcortemr.php";
  $crud = new crudcortemr();
  $datos = $crud->mostrarCorteMR();
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
            <h2> Corte de Mora y Rango</h2>
          </div>
        </div>
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-header bg-blue__500">
              <div class="row">
                <div class="col text-white">
                  <img class="icon-home me-2" src="images/home.svg"> Home / Corte de Mora y Rango
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <a href="./CorteMR/agregarcortemr.php" class="btn btn-primary">
                  Agregar Registro
                </a>
                <hr>
                <table id="tabla" class="table table-striped data-table">
                  <thead class="bg__td bg-blue__500 text-white">
                    <tr class="text-center">
                      <th class="th__texto">RANGO_DE_MOROSIDAD</th>
                      <th class="th__texto">NUM_DE_CLIENTES</th>
                      <th class="th__texto">CLÚSTER</th>
                      <th class="th__texto">DESARROLLO</th>
                      <th class="th__texto">CLIENTES_EN_MORA</th>
                      <th class="d-none th__texto">CONTRATOS_FIRMADOS</th>
                      <th class="d-none th__texto">PDE_MOROSIDAD</th>
                      <th class="d-none th__texto">CONTRATOS_FIRMADOS</th>
                      <th class="d-none th__texto">VENCIDO</th>
                      <th class="d-none th__texto">INTERES_MORATORIO</th>
                      <th class="d-none th__texto">LOTE</th>
                      <th class="d-none th__texto">CONDOMINIO</th>
                      <th class="d-none th__texto">ESTATUS</th>
                      <th class="d-none th__texto">TOTAL_VENCIDO</th>
                      <th class="d-none th__texto">INT_MORATORIO</th>
                      <th class="d-none th__texto">enero_2020</th>
                      <th class="d-none th__texto">febrero_2020</th>
                      <th class="d-none th__texto">marzo_2020</th>
                      <th class="d-none th__texto">abril_2020</th>
                      <th class="d-none th__texto">mayo_2020</th>
                      <th class="d-none th__texto">junio_2020</th>
                      <th class="d-none th__texto">julio_2020</th>
                      <th class="d-none th__texto">agosto_2020</th>
                      <th class="d-none th__texto">septiembre_2020</th>
                      <th class="d-none th__texto">octubre_2020</th>
                      <th class="d-none th__texto">noviembre_2020</th>
                      <th class="d-none th__texto">diciembre_2020</th>
                      <th class="d-none th__texto">enero_2021</th>
                      <th class="d-none th__texto">febrero_2021</th>
                      <th class="d-none th__texto">marzo_2021</th>
                      <th class="d-none th__texto">abril_2021</th>
                      <th class="d-none th__texto">mayo_2021</th>
                      <th class="d-none th__texto">junio_2021</th>
                      <th class="d-none th__texto">julio_2021</th>
                      <th class="d-none th__texto">agosto_2021</th>
                      <th class="d-none th__texto">septiembre_2021</th>
                      <th class="d-none th__texto">otubre_2021</th>
                      <th class="d-none th__texto">noviembre_2021</th>
                      <th class="d-none th__texto">diciembre_2021</th>
                      <th class="d-none th__texto">enero_2022</th>
                      <th class="d-none th__texto">febrero_2022</th>
                      <th class="d-none th__texto">marzo_2022</th>
                      <th class="d-none th__texto">abril_2022</th>
                      <th class="d-none th__texto">mayo_2022</th>
                      <th class="d-none th__texto">junio_2022</th>
                      <th class="d-none th__texto">julio_2022</th>
                      <th class="d-none th__texto">agosto_2022</th>
                      <th class="d-none th__texto">septiembre_2022</th>
                      <th class="d-none th__texto">octubre_2022</th>
                      <th class="d-none th__texto">noviembre_2022</th>
                      <th class="d-none th__texto">diciembre_2022</th>
                      <th class="d-none th__texto">enero_2023</th>
                      <th class="d-none th__texto">febrero_2023</th>
                      <th class="d-none th__texto">marzo_2023</th>
                      <th class="d-none th__texto">abril_2023</th>
                      <th class="d-none th__texto">mayo_2023</th>
                      <th class="d-none th__texto">junio_2023</th>
                      <th class="d-none th__texto">julio_2023</th>
                      <th class="d-none th__texto">agosto_2023</th>
                      <th class="d-none th__texto">septiembre_2023</th>
                      <th class="d-none th__texto">octubre_2023</th>
                      <th class="d-none th__texto">noviembre_2023</th>
                      <th class="d-none th__texto">diciembre_2023</th>
                      <th class="th__texto">MOFICIAR</th>
                      <th class="th__texto">ELIMINAR</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                            foreach($datos as $item) {
                          ?>
                    <tr class="text-center">
                      <td> <?php echo $item->RANGO_DE_MOROSIDAD; ?> </td>
                      <td> <?php echo $item->NUM_DE_CLIENTES;?> </td>
                      <td> <?php echo $item->CLÚSTER;?> </td>
                      <td> <?php echo $item->DESARROLLO;?> </td>
                      <td class="d-none"> <?php echo $item->CLIENTES_EN_MORA;?> </td>
                      <td class="d-none"> <?php echo $item->CONTRATOS_FIRMADOS; ?> </td>
                      <td class="d-none"> <?php echo $item->PDE_MOROSIDAD;?> </td>
                      <td class="d-none"> <?php echo $item->VENCIDO;?> </td>
                      <td class="d-none"> <?php echo $item->INTERES_MORATORIO;?></td>
                      <td class="d-none"> <?php echo $item->LOTE;?> </td>
                      <td class="d-none"> <?php echo $item->CONDOMINIO;?> </td>
                      <td class="d-none"> <?php echo $item->CLIENTE;?> </td>
                      <td class="d-none"> <?php echo $item->ESTATUS;?> </td>
                      <td class="d-none"> <?php echo $item->TOTAL_VENCIDO;?> </td>
                      <td class="d-none"> <?php echo $item->INT_MORATORIO;?> </td>
                      <td class="d-none"> <?php echo $item->enero_2020;?> </td>
                      <td class="d-none"> <?php echo $item->febrero_2020;?> </td>
                      <td class="d-none"> <?php echo $item->marzo_2020;?> </td>
                      <td class="d-none"> <?php echo $item->abril_2020;?> </td>
                      <td class="d-none"> <?php echo $item->mayo_2020;?> </td>
                      <td class="d-none"> <?php echo $item->junio_2020;?> </td>
                      <td class="d-none"> <?php echo $item->julio_2020;?> </td>
                      <td class="d-none"> <?php echo $item->agosto_2020;?> </td>
                      <td class="d-none"> <?php echo $item->septiembre_2020;?> </td>
                      <td class="d-none"> <?php echo $item->octubre_2020;?> </td>
                      <td class="d-none"> <?php echo $item->noviembre_2020;?> </td>
                      <td class="d-none"> <?php echo $item->diciembre_2020;?> </td>
                      <td class="d-none"> <?php echo $item->enero_2021;?> </td>
                      <td class="d-none"> <?php echo $item->febrero_2021;?> </td>
                      <td class="d-none"> <?php echo $item->marzo_2021;?> </td>
                      <td class="d-none"> <?php echo $item->abril_2021;?> </td>
                      <td class="d-none"> <?php echo $item->mayo_2021;?> </td>
                      <td class="d-none"> <?php echo $item->junio_2021;?> </td>
                      <td class="d-none"> <?php echo $item->julio_2021;?> </td>
                      <td class="d-none"> <?php echo $item->agosto_2021;?> </td>
                      <td class="d-none"> <?php echo $item->septiembre_2021;?> </td>
                      <td class="d-none"> <?php echo $item->octubre_2021;?> </td>
                      <td class="d-none"> <?php echo $item->noviembre_2021;?> </td>
                      <td class="d-none"> <?php echo $item->diciembre_2021;?> </td>
                      <td class="d-none"> <?php echo $item->enero_2022;?> </td>
                      <td class="d-none"> <?php echo $item->febrero_2022;?> </td>
                      <td class="d-none"> <?php echo $item->marzo_2022;?> </td>
                      <td class="d-none"> <?php echo $item->abril_2022;?> </td>
                      <td class="d-none"> <?php echo $item->mayo_2022;?> </td>
                      <td class="d-none"> <?php echo $item->junio_2022;?> </td>
                      <td class="d-none"> <?php echo $item->julio_2022;?> </td>
                      <td class="d-none"> <?php echo $item->agosto_2022;?> </td>
                      <td class="d-none"> <?php echo $item->septiembre_2022;?> </td>
                      <td class="d-none"> <?php echo $item->octubre_2022;?> </td>
                      <td class="d-none"> <?php echo $item->noviembre_2022;?> </td>
                      <td class="d-none"> <?php echo $item->diciembre_2022;?> </td>
                      <td class="d-none"> <?php echo $item->enero_2023;?> </td>
                      <td class="d-none"> <?php echo $item->febrero_2023;?> </td>
                      <td class="d-none"> <?php echo $item->marzo_2023;?> </td>
                      <td class="d-none"> <?php echo $item->abril_2023;?> </td>
                      <td class="d-none"> <?php echo $item->mayo_2023;?> </td>
                      <td class="d-none"> <?php echo $item->junio_2023;?> </td>
                      <td class="d-none"> <?php echo $item->julio_2023;?> </td>
                      <td class="d-none"> <?php echo $item->agosto_2023;?> </td>
                      <td class="d-none"> <?php echo $item->septiembre_2023;?> </td>
                      <td class="d-none"> <?php echo $item->octubre_2023;?> </td>
                      <td class="d-none"> <?php echo $item->noviembre_2023;?> </td>
                      <td class="d-none"> <?php echo $item->diciembre_2023;?> </td>
                      <td>
                        <form action="./CorteMR/modificar_CorteMR.php" method="POST">
                          <input type="text" name="id" id="id" hidden value="<?php echo $item->_id ?>">
                          <button class="btn btn-warning">
                            <img class="edit__icon" src="images/iconos/pen-solid.svg" alt="">
                          </button>
                        </form>
                      </td>
                      <td>
                        <form action="./CorteMR/eliminarcortemr.php" method="POST">
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
                      <th class="th__texto">RANGO_DE_MOROSIDAD</th>
                      <th class="th__texto">NUM_DE_CLIENTES</th>
                      <th class="th__texto">CLÚSTER</th>
                      <th class="th__texto">DESARROLLO</th>
                      <th class="th__texto">CLIENTES_EN_MORA</th>
                      <th class="d-none th__texto">CONTRATOS_FIRMADOS</th>
                      <th class="d-none th__texto">PDE_MOROSIDAD</th>
                      <th class="d-none th__texto">CONTRATOS_FIRMADOS</th>
                      <th class="d-none th__texto">VENCIDO</th>
                      <th class="d-none th__texto">INTERES_MORATORIO</th>
                      <th class="d-none th__texto">LOTE</th>
                      <th class="d-none th__texto">CONDOMINIO</th>
                      <th class="d-none th__texto">ESTATUS</th>
                      <th class="d-none th__texto">TOTAL_VENCIDO</th>
                      <th class="d-none th__texto">INT_MORATORIO</th>
                      <th class="d-none th__texto">enero_2020</th>
                      <th class="d-none th__texto">febrero_2020</th>
                      <th class="d-none th__texto">marzo_2020</th>
                      <th class="d-none th__texto">abril_2020</th>
                      <th class="d-none th__texto">mayo_2020</th>
                      <th class="d-none th__texto">junio_2020</th>
                      <th class="d-none th__texto">julio_2020</th>
                      <th class="d-none th__texto">agosto_2020</th>
                      <th class="d-none th__texto">septiembre_2020</th>
                      <th class="d-none th__texto">octubre_2020</th>
                      <th class="d-none th__texto">noviembre_2020</th>
                      <th class="d-none th__texto">diciembre_2020</th>
                      <th class="d-none th__texto">enero_2021</th>
                      <th class="d-none th__texto">febrero_2021</th>
                      <th class="d-none th__texto">marzo_2021</th>
                      <th class="d-none th__texto">abril_2021</th>
                      <th class="d-none th__texto">mayo_2021</th>
                      <th class="d-none th__texto">junio_2021</th>
                      <th class="d-none th__texto">julio_2021</th>
                      <th class="d-none th__texto">agosto_2021</th>
                      <th class="d-none th__texto">septiembre_2021</th>
                      <th class="d-none th__texto">otubre_2021</th>
                      <th class="d-none th__texto">noviembre_2021</th>
                      <th class="d-none th__texto">diciembre_2021</th>
                      <th class="d-none th__texto">enero_2022</th>
                      <th class="d-none th__texto">febrero_2022</th>
                      <th class="d-none th__texto">marzo_2022</th>
                      <th class="d-none th__texto">abril_2022</th>
                      <th class="d-none th__texto">mayo_2022</th>
                      <th class="d-none th__texto">junio_2022</th>
                      <th class="d-none th__texto">julio_2022</th>
                      <th class="d-none th__texto">agosto_2022</th>
                      <th class="d-none th__texto">septiembre_2022</th>
                      <th class="d-none th__texto">octubre_2022</th>
                      <th class="d-none th__texto">noviembre_2022</th>
                      <th class="d-none th__texto">diciembre_2022</th>
                      <th class="d-none th__texto">enero_2023</th>
                      <th class="d-none th__texto">febrero_2023</th>
                      <th class="d-none th__texto">marzo_2023</th>
                      <th class="d-none th__texto">abril_2023</th>
                      <th class="d-none th__texto">mayo_2023</th>
                      <th class="d-none th__texto">junio_2023</th>
                      <th class="d-none th__texto">julio_2023</th>
                      <th class="d-none th__texto">agosto_2023</th>
                      <th class="d-none th__texto">septiembre_2023</th>
                      <th class="d-none th__texto">octubre_2023</th>
                      <th class="d-none th__texto">noviembre_2023</th>
                      <th class="d-none th__texto">diciembre_2023</th>
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