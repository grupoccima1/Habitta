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
            <div class="card-header">
              <div class="row">
                <div class="col">
                  <span><img src="images/home.svg" width="25px"></i></span> Home/Acumulados Sherpa
                </div>
              </div>
            </div>
            <div class="card-body">
              <a href="./AcumuladoSherpa/agregaracumuladosherpa.php" class="btn btn-primary">
                Agregar Registro
              </a>
              <div class="table-responsive">
                <hr>
                <table id="tabla" class="table table-striped data-table" style="width: 100%">
                  <thead class="bg__td">
                    <tr>
                      <th class="th__texto" style="text-align:center;">Llave</th>
                      <th class="th__texto" style="text-align:center;">FECHA_DE_INGRESO</th>
                      <th class="th__texto" style="text-align:center;">LOTE</th>
                      <th class="th__texto" style="text-align:center;">CONDOMINIO</th>
                      <th class="th__texto" style="text-align:center;">CLUSTER</th>
                      <th class="th__texto" style="text-align:center;">DESARROLLO</th>
                      <th class="th__texto" style="text-align:center;">PUESTO</th>
                      <th class="th__texto" style="text-align:center;">COMISIONISTA</th>
                      <th class="th__texto" style="text-align:center;">TOTAL_DE_LA_VENTA</th>
                      <th class="th__texto" style="text-align:center;">ENGANCHE</th>
                      <th class="th__texto" style="text-align:center;">%_COMISION</th>
                      <th class="th__texto" style="text-align:center;">TOTAL_COMISION</th>
                      <th class="th__texto" style="text-align:center;">DESCUENTO</th>
                      <th class="th__texto" style="text-align:center;">DESC</th>
                      <th class="th__texto" style="text-align:center;">A_PAGAR_EXTERNOS</th>
                      <th class="th__texto" style="text-align:center;">SUBTOTAL</th>
                      <th class="th__texto" style="text-align:center;">IVA</th>
                      <th class="th__texto" style="text-align:center;">RETENCIONES_DE_IVA</th>
                      <th class="th__texto" style="text-align:center;">RETENCIONES_ISR</th>
                      <th class="th__texto" style="text-align:center;">TOTAL</th>
                      <th class="th__texto" style="text-align:center;">PAGO</th>
                      <th class="th__texto" style="text-align:center;">NOTAS</th>
                      <th class="th__texto" style="text-align:center;">PAGADO</th>
                      <th class="th__texto" style="text-align:center;">METODO_DE_PAGO</th>
                      <th class="th__texto" style="text-align:center;">FECHA_PAGADA</th>
                      <th class="th__texto" style="text-align:center;">NOMBRE_CORRECTO</th>
                      <th class="th__texto" style="text-align:center;">SEMANA_PAGADA</th>
                      <th class="th__texto" style="text-align:center;">SEMANA</th>
                      <th class="th__texto" style="text-align:center;">X_TIPO_DE_REGIMEN</th>
                      <th class="th__texto" style="text-align:center;">CUENTA</th>
                      <th class="th__texto" style="text-align:center;">MOTIVO_DE_DESCUENTO</th>
                      <th class="th__texto" style="text-align:center;">ESTATUS</th>
                      <th class="th__texto" style="text-align:center;">LOTE_ANTERIOR</th>
                      <th class="th__texto" style="text-align:center;">MODIFICAR</th>
                      <th class="th__texto" style="text-align:center;">ELIMINAR</th>



                    </tr>
                  </thead>
                  <tbody>
                    <?php
                          foreach($datos as $item) {
                        ?>
                    <tr>
                      <td class="text-center"> <?php echo $item->LLAVE; ?> </td>
                      <td class="text-center"> <?php echo $item->FECHA_DE_INGRESO;?> </td>
                      <td class="text-center"> <?php echo $item->LOTE;?> </td>
                      <td class="text-center"> <?php echo $item->CONDOMINIO;?> </td>
                      <td class="text-center"> <?php echo $item->CLUSTER;?> </td>
                      <td class="text-center"> <?php echo $item->DESARROLLO; ?> </td>
                      <td class="text-center"> <?php echo $item->PUESTO;?> </td>
                      <td class="text-center"> <?php echo $item->COMISIONISTA;?> </td>
                      <td class="text-center"> <?php echo "$".number_format(floatval($item->TOTAL_DE_LA_VENTA),2);?>
                      </td>
                      <td class="text-center"> <?php echo "$".number_format(floatval($item->ENGANCHE),2);?> </td>
                      <td class="text-center"> <?php echo number_format($item->PCOMISION,2);?> </td>
                      <td class="text-center"> <?php echo "$".number_format(floatval($item->TOTAL_COMISION),2);?> </td>
                      <td class="text-center"> <?php echo "$".number_format(floatval($item->DESCUENTO),2);?> </td>
                      <td class="text-center"> <?php echo "$".number_format(floatval($item->DESC),2);?> </td>
                      <td class="text-center"> <?php echo "$".number_format(floatval($item->A_PAGAR_EXTERNOS),2);?></td>
                      <td class="text-center"> <?php echo "$".number_format(floatval($item->SUBTOTAL),2);?> </td>
                      <td class="text-center"> <?php echo "$".number_format(floatval($item->IVA),2);?> </td>
                      <td class="text-center"> <?php echo "$".number_format(floatval($item->RETENCIONES_DE_IVA),2); ?>
                      </td>
                      <td class="text-center"> <?php echo "$".number_format(floatval($item->RETENCIONES_ISR),2);?> </td>
                      <td class="text-center"> <?php echo "$".number_format(floatval($item->TOTAL),2);?> </td>
                      <td class="text-center"> <?php echo "$".number_format(floatval($item->PAGO),2);?> </td>
                      <td class="text-center"> <?php echo $item->NOTAS;?> </td>
                      <td class="text-center"> <?php echo "$".number_format(floatval($item->PAGADO),2);?> </td>
                      <td class="text-center"> <?php echo $item->METODO_DE_PAGO; ?> </td>
                      <td class="text-center"> <?php echo $item->FECHA_PAGADA;?> </td>
                      <td class="text-center"> <?php echo $item->NOMBRE_CORRECTO;?> </td>
                      <td class="text-center"> <?php echo $item->SEMANA_PAGADA; ?> </td>
                      <td class="text-center"> <?php echo $item->SEMANA;?> </td>
                      <td class="text-center"> <?php echo $item->X_TIPO_DE_REGIMEN;?></td>
                      <td class="text-center"> <?php echo $item->CUENTA;?></td>
                      <td class="text-center"> <?php echo $item->MOTIVO_DE_DESCUENTO; ?> </td>
                      <td class="text-center"> <?php echo $item->ESTATUS;?> </td>
                      <td class="text-center"> <?php echo $item->LOTE_ANTERIOR;?> </td>
                      <td class="text-center">
                        <form action="./AcumuladoSherpa/modificar_AcumuladoSherpa.php" method="POST">
                          <input type="text" name="id" id="id" hidden value="<?php echo $item->_id ?>">
                          <button class="btn btn-warning">
                            <img class="edit__icon" src="images/iconos/pen-solid.svg" alt="">
                          </button>
                        </form>
                      </td>
                      <td class="text-center">
                        <form action="./AcumuladoSherpa/eliminaracumuladosherpa.php" method="POST">
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
                <div class="row">
                  <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="example_info" role="status" aria-live="polite"></div>
                  </div>
                </div>
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