<?php
require_once "./clases/Conexion.php";
  require_once "./comision2022/crudcomision2022.php";
  $crud = new crudcomision2022();
  $datos = $crud->mostrarDatoscomisiones2022();
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
              <h2>Comisiones 2022</h2>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header bg-blue__500" >
                <div class="row">
                  <div class="col text-white">
                   <img class="icon-home me-2" src="images/home.svg">  Home/Comisiones 2022
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <a href="./Comision2022/agregarcomisiones2022.php" class="btn btn-primary">
                    Agregar Registro
                  </a>
                  <hr>
                  <table id="tabla" class="table table-striped data-table">
                    <thead class="bg__td">
                      <tr class="text-center">
                          <th class="th__texto">Llave</th>                        
                          <th class="th__texto">FECHA_DE_INGRESO</th>
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
                          <th class="th__texto">A_PAGAR_EXTERNOS</th>
                          <th class="th__texto">LOTE_ANTERIOR</th>
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
                            <td> <?php echo $item->FECHA_DE_INGRESO;?> </td>
                            <td> <?php echo $item->CONDOMINIO;?> </td>
                            <td> <?php echo $item->CLUSTER;?> </td>
                            <td> <?php echo $item->DESARROLLO; ?> </td>
                            <td> <?php echo $item->PUESTO;?> </td>
                            <td> <?php echo $item->COMISIONISTA;?> </td>
                            <td> <?php echo "$".number_format(floatval($item->TOTAL_DE_LA_VENTA),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->ENGANCHE),2);?> </td>
                            <td> <?php echo $item->PCOMISION;?> </td>
                            <td> <?php echo "$".number_format(floatval($item->TOTAL_COMISION),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->DESCUENTO),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->A_PAGAR_EXTERNOS),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->SUBTOTAL),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->IVA),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->RETENCIONES_DE_IVA),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->RETENCIONES_ISR),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->TOTAL),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->PAGO),2);?> </td>
                            <td> <?php echo $item->NOTAS; ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->PAGADO),2);?> </td>
                            <td> <?php echo $item->METODO_DE_PAGO; ?> </td>
                            <td> <?php echo $item->FECHA_PAGADA;?> </td>
                            <td> <?php echo $item->NOMBRE_CORRECTO;?> </td>
                            <td> <?php echo $item->SEMANA_PAGADA; ?> </td>
                            <td> <?php echo $item->SEMANA;?> </td>
                            <td> <?php echo $item->X_TIPO_DE_REGIMEN;?></td>
                            <td> <?php echo $item->CUENTA;?></td>
                            <td> <?php echo $item->MOTIVO_DE_DESCUENTO; ?> </td>
                            <td> <?php echo $item->ESTATUS;?> </td>
                            <td> <?php echo $item->LOTE_ANTERIOR;?> </td>
                            <td> <?php echo "$".number_format(floatval($item->A_PAGA_EXTERNOS),2);?> </td>
                            <td> <?php echo $item->LOTEANTERIOR;?> </td>
                            <td>
                              <form action="./Comision2022/modificar_Comisiones2022.php" method="POST">
                                <input type="text" name="id" id="id" hidden value="<?php echo $item->_id ?>">
                                <button class="btn btn-warning">
                                  <img class="edit__icon" src="images/iconos/pen-solid.svg" alt="">
                                </button>
                              </form>
                            </td>
                            <td>
                              <form action="./Comision2022/eliminarcomisiones2022.php" method="POST">
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
                          <th class="th__texto">A_PAGAR_EXTERNOS</th>
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
    </div> 
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap5.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>