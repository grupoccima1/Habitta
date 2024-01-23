<?php
  require_once "./clases/Conexion.php";
  require_once "./AcumuladoSherpa/crudacumuladosherpa.php";
  $crud = new crudacumuladosherpa();
  $datos = $crud->mostrarDatosAcumuladoSherpa();
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
    <!-- sidebar -->
    <?php include "./sidebar.php"; ?>
    <!-- fin sidebar -->
    <!-- contenido -->
    <div id="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h2>Acumulados Sherpa</h2>
          </div>
        </div>
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-header bg-blue__500">
              <div class="row">
                <div class="col text-white">
                  <img class="icon-home me-2" src="images/home.svg"> Home/Acumulados Sherpa
                </div>
              </div>
            </div>
            <div class="card-body">
              <a href="./AcumuladoSherpa/agregaracumuladosherpa.php" class="btn btn-primary">
                Agregar Registro
              </a>
              <div class="table-responsive">
                <hr>
                <table id="tabla" class="table table-striped data-table">
                  <thead class="bg__td bg-blue__400 text-white">
                    <tr class="text-center">
                      <th class="th__texto">Llave</th>
                      <th class="th__texto">FECHA_DE_INGRESO</th>
                      <th class="th__texto">LOTE</th>
                      <th class="th__texto">CONDOMINIO</th>
                      <th class="th__texto">CLUSTER</th>
                      <th class="th__texto">DESARROLLO</th>
                      <th class="th__texto">PUESTO</th>
                      <th class="th__texto">COMISIONISTA</th>
                      <th class="th__texto">TOTAL_DE_LA_VENTA</th>
                      <th class="th__texto">ENGANCHE</th>
                      <th class="th__texto">%_COMISION</th>
                      <th class="th__texto">TOTAL_COMISION</th>
                      <th class="th__texto">DESCUENTO</th>
                      <th class="th__texto">DESC</th>
                      <th class="th__texto">A_PAGAR_EXTERNOS</th>
                      <th class="th__texto">SUBTOTAL</th>
                      <th class="th__texto">IVA</th>
                      <th class="th__texto">RETENCIONES_DE_IVA</th>
                      <th class="th__texto">RETENCIONES_ISR</th>
                      <th class="th__texto">TOTAL</th>
                      <th class="th__texto">PAGO</th>
                      <th class="th__texto">NOTAS</th>
                      <th class="th__texto">PAGADO</th>
                      <th class="th__texto">METODO_DE_PAGO</th>
                      <th class="th__texto">FECHA_PAGADA</th>
                      <th class="th__texto">NOMBRE_CORRECTO</th>
                      <th class="th__texto">SEMANA_PAGADA</th>
                      <th class="th__texto">SEMANA</th>
                      <th class="th__texto">X_TIPO_DE_REGIMEN</th>
                      <th class="th__texto">CUENTA</th>
                      <th class="th__texto">MOTIVO_DE_DESCUENTO</th>
                      <th class="th__texto">ESTATUS</th>
                      <th class="th__texto">LOTE_ANTERIOR</th>
                      <th class="th__texto">MODIFICAR</th>
                      <th class="th__texto">ELIMINAR</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
foreach ($datos as $item) {
?>
    <tr class="text-center">
        <td> <?php echo $item['llave'] ?? ''; ?> </td>
        <td> <?php echo $item['fecha_de_ingreso'] ?? ''; ?> </td>
        <td> <?php echo $item['lote'] ?? ''; ?> </td>
        <td> <?php echo $item['condominio'] ?? ''; ?> </td>
        <td> <?php echo $item['cluster'] ?? ''; ?> </td>
        <td> <?php echo $item['desarrollo'] ?? ''; ?> </td>
        <td> <?php echo $item['puesto'] ?? ''; ?> </td>
        <td> <?php echo $item['comisionista'] ?? ''; ?> </td>
        <td> <?php echo isset($item['total_de_la_venta']) ? "$" . number_format(floatval($item['total_de_la_venta']), 2) : ''; ?> </td>
        <td> <?php echo isset($item['enganche']) ? "$" . number_format(floatval($item['enganche']), 2) : ''; ?> </td>
        <td> <?php echo isset($item['p_comision']) ? number_format($item['p_comision'], 2) : ''; ?> </td>
        <td> <?php echo isset($item['total_comision']) ? "$" . number_format(floatval($item['total_comision']), 2) : ''; ?> </td>
        <td> <?php echo isset($item['descuento']) ? "$" . number_format(floatval($item['descuento']), 2) : ''; ?> </td>
        <td> <?php echo isset($item['desc']) ? "$" . number_format(floatval($item['desc']), 2) : ''; ?> </td>
        <td> <?php echo isset($item['a_pagar_externos']) ? "$" . number_format(floatval($item['a_pagar_externos']), 2) : ''; ?> </td>
        <td> <?php echo isset($item['subtotal']) ? "$" . number_format(floatval($item['subtotal']), 2) : ''; ?> </td>
        <td> <?php echo isset($item['iva']) ? "$" . number_format(floatval($item['iva']), 2) : ''; ?> </td>
        <td> <?php echo isset($item['retenciones_de_iva']) ? "$" . number_format(floatval($item['retenciones_de_iva']), 2) : ''; ?> </td>
        <td> <?php echo isset($item['retenciones_isr']) ? "$" . number_format(floatval($item['retenciones_isr']), 2) : ''; ?> </td>
        <td> <?php echo isset($item['total']) ? "$" . number_format(floatval($item['total']), 2) : ''; ?> </td>
        <td> <?php echo isset($item['pago']) ? "$" . number_format(floatval($item['pago']), 2) : ''; ?> </td>
        <td> <?php echo $item['notas'] ?? ''; ?> </td>
        <td> <?php echo isset($item['pagado']) ? "$" . number_format(floatval($item['pagado']), 2) : ''; ?> </td>
        <td> <?php echo $item['metodo_de_pago'] ?? ''; ?> </td>
        <td> <?php echo $item['fecha_pagada'] ?? ''; ?> </td>
        <td> <?php echo $item['nombre_correcto'] ?? ''; ?> </td>
        <td> <?php echo $item['semana_pagada'] ?? ''; ?> </td>
        <td> <?php echo $item['semana'] ?? ''; ?> </td>
        <td> <?php echo $item['x_tipo_de_regimen'] ?? ''; ?> </td>
        <td> <?php echo $item['cuenta'] ?? ''; ?> </td>
        <td> <?php echo $item['motivo_de_descuento'] ?? ''; ?> </td>
        <td> <?php echo $item['estatus'] ?? ''; ?> </td>
        <td> <?php echo $item['lote_anterior'] ?? ''; ?> </td>
        <td>
            <form action="./AcumuladoSherpa/modificar_AcumuladoSherpa.php" method="POST">
                <input type="text" name="id" id="id" hidden value="<?php echo $item['id'] ?? ''; ?>">
                <button class="btn btn-warning">
                    <img class="edit__icon" src="images/iconos/pen-solid.svg" alt="">
                </button>
            </form>
        </td>
        <td>
            <form action="./AcumuladoSherpa/eliminaracumuladosherpa.php" method="POST">
                <input type="text" name="id" id="id" hidden value="<?php echo $item['id'] ?? ''; ?>">
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
                      <th class="th__texto">Llave</th>
                      <th class="th__texto">FECHA_DE_INGRESO</th>
                      <th class="th__texto">LOTE</th>
                      <th class="th__texto">CONDOMINIO</th>
                      <th class="th__texto">CLUSTER</th>
                      <th class="th__texto">DESARROLLO</th>
                      <th class="th__texto">PUESTO</th>
                      <th class="th__texto">COMISIONISTA</th>
                      <th class="th__texto">TOTAL_DE_LA_VENTA</th>
                      <th class="th__texto">ENGANCHE</th>
                      <th class="th__texto">%_COMISION</th>
                      <th class="th__texto">TOTAL_COMISION</th>
                      <th class="th__texto">DESCUENTO</th>
                      <th class="th__texto">DESC</th>
                      <th class="th__texto">A_PAGAR_EXTERNOS</th>
                      <th class="th__texto">SUBTOTAL</th>
                      <th class="th__texto">IVA</th>
                      <th class="th__texto">RETENCIONES_DE_IVA</th>
                      <th class="th__texto">RETENCIONES_ISR</th>
                      <th class="th__texto">TOTAL</th>
                      <th class="th__texto">PAGO</th>
                      <th class="th__texto">NOTAS</th>
                      <th class="th__texto">PAGADO</th>
                      <th class="th__texto">METODO_DE_PAGO</th>
                      <th class="th__texto">FECHA_PAGADA</th>
                      <th class="th__texto">NOMBRE_CORRECTO</th>
                      <th class="th__texto">SEMANA_PAGADA</th>
                      <th class="th__texto">SEMANA</th>
                      <th class="th__texto">X_TIPO_DE_REGIMEN</th>
                      <th class="th__texto">CUENTA</th>
                      <th class="th__texto">MOTIVO_DE_DESCUENTO</th>
                      <th class="th__texto">ESTATUS</th>
                      <th class="th__texto">LOTE_ANTERIOR</th>
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
    <!-- Fin Contenido -->
  </div>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
  <script src="js/jquery-3.5.1.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.bootstrap5.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>