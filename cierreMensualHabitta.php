<?php
require_once "./clases/Conexion.php";
  require_once "./CierreMensual/crudcierremensual.php";
  $crud = new crudcierremensual();
  $datos = $crud->mostrarDatosCierreMensualHabitta();
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
              <h2>Cierre Mensual Habitta</h2>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header bg-blue__500">
                <div class="row">
                  <div class="col text-white">
                   <img class="icon-home me-2" src="images/home.svg">  Home/Cierre Mensual Habitta
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <a href="./CierreMensual/agregarcierremensual.php" class="btn btn-primary">
                    Agregar Registro
                  </a>
                  <hr>
                  <table id="tabla" class="table table-striped data-table">
                    <thead class="bg__td bg-blue__500 text-white">
                      <tr class="text-center">
                          <th class="th__texto">CIERRE_MES</th>                     
                          <th class="th__texto">FECHA</th> 
                          <th class="th__texto">BENEFICIARIO</th> 
                          <th class="th__texto">INGRESO</th>
                          <th class="th__texto">EGRESO</th>
                          <th class="d-none th__texto">SALDO</th>
                          <th class="d-none th__texto">FACTURA</th>
                          <th class="d-none th__texto">REAL</th>
                          <th class="d-none th__texto">MOTIVO</th>
                          <th class="d-none th__texto">MES</th>
                          <th class="d-none th__texto">DESARROLLO</th>
                          <th class="d-none th__texto">CONDOMINIO</th>
                          <th class="d-none th__texto">CLUSTER</th>
                          <th class="d-none th__texto">OBRA</th>
                          <th class="d-none th__texto">CATEGORIA</th>
                          <th class="d-none th__texto">SUBCATEGORIA</th>
                          <th class="d-none th__texto">ORIGEN</th>
                          <th class="d-none th__texto">SEMANA</th>
                          <th class="d-none th__texto">SOLICITÓ</th>
                          <th class="d-none th__texto">AUTORIZÓ</th>
                          <th class="d-none th__texto">PRESUPUESTO</th>
                          <th class="d-none th__texto">UNIDAD_DE_NEGOCIO</th>
                          <th class="d-none th__texto">FLUJO</th>
                          <th class="d-none th__texto">LLAVE</th>
                          <th class="d-none th__texto">FECHA_CORRECTA</th>
                          <th class="d-none th__texto">LLAVE_EDOS_DE_CUENTA</th>
                          <th class="d-none th__texto">METODO_DE_PAGO</th>
                          <th class="d-none th__texto">MODELO_DE_NEGOCIO</th>
                          <th class="d-none th__texto">SOLICITO</th>
                          <th class="d-none th__texto">AUTORIZO</th>
                          <th class="d-none th__texto">AÑO</th>
                          <th class="d-none th__texto">MONTO_PROYECTADO</th>
                          <th class="th__texto">MODIFICAR</th>
                          <th class="th__texto">ELIMIAR</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                            foreach($datos as $item) {
                          ?>
                            <tr class="text-center">
                            <td> <?php echo $item->CIERRE_MES; ?> </td> 
                            <td> <?php echo $item->FECHA;?> </td> 
                            <td> <?php echo $item->BENEFICIARIO;?> </td>
                            <td> <?php echo "$".number_format(floatval($item->INGRESO),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->EGRESO),2);?> </td>
                            <td class="d-none"> <?php echo "$".number_format(floatval($item->SALDO),2); ?> </td>
                            <td class="d-none"> <?php echo $item->FACTURA;?> </td>
                            <td class="d-none"> <?php echo $item->REAL;?> </td>
                            <td class="d-none"> <?php echo $item->MOTIVO;?></td>
                            <td class="d-none"> <?php echo $item->MES;?> </td>
                            <td class="d-none"> <?php echo $item->DESARROLLO;?> </td>
                            <td class="d-none"> <?php echo $item->CONDOMINIO;?> </td>
                            <td class="d-none"> <?php echo $item->CLUSTER;?> </td>
                            <td class="d-none"> <?php echo $item->OBRA;?> </td>
                            <td class="d-none"> <?php echo $item->CATEGORIA;?> </td>
                            <td class="d-none"> <?php echo $item->SUBCATEGORIA;?> </td>
                            <td class="d-none"> <?php echo $item->ORIGEN;?> </td>
                            <td class="d-none"> <?php echo $item->SEMANA;?> </td>
                            <td class="d-none"> <?php echo $item->SOLICITÓ;?> </td>
                            <td class="d-none"> <?php echo $item->AUTORIZÓ;?> </td>
                            <td class="d-none"> <?php echo $item->PRESUPUESTO;?> </td>
                            <td class="d-none"> <?php echo $item->UNIDAD_DE_NEGOCIO;?> </td>
                            <td class="d-none"> <?php echo $item->FLUJO;?> </td>
                            <td class="d-none"> <?php echo $item->LLAVE;?> </td>
                            <td class="d-none"> <?php echo $item->FECHA_CORRECTA;?> </td>
                            <td class="d-none"> <?php echo $item->LLAVE_EDOS_DE_CUENTA;?> </td>
                            <td class="d-none"> <?php echo $item->METODO_DE_PAGO;?> </td>
                            <td class="d-none"> <?php echo $item->MODELO_DE_NEGOCIO;?> </td>
                            <td class="d-none"> <?php echo $item->SOLICITO;?> </td>
                            <td class="d-none"> <?php echo $item->AUTORIZO;?> </td>
                            <td class="d-none"> <?php echo $item->AÑO;?> </td>
                            <td class="d-none"> <?php echo $item->MONTO_PROYECTADO;?> </td>
                            <td>
                              <form action="./CierreMensual/modificar_CierreMensual.php" method="POST">
                                <input type="text" name="id" id="id" hidden value="<?php echo $item->_id ?>">
                                <button class="btn btn-warning">
                                  <img class="edit__icon" src="images/iconos/pen-solid.svg" alt="">
                                </button>
                              </form>
                            </td>
                            <td>
                              <form action="./CierreMensual/eliminarcierremensual.php" method="POST">
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
                          <th class="th__texto">CIERRE_MES</th>                        
                          <th class="th__texto">FECHA</th>
                          <th class="th__texto">BENEFICIARIO</th>
                          <th class="th__texto">INGRESO</th>
                          <th class="th__texto">EGRESO</th>
                          <th class="d-none th__texto">SALDO</th>
                          <th class="d-none th__texto">FACTURA</th>
                          <th class="d-none th__texto">REAL</th>
                          <th class="d-none th__texto">MOTIVO</th>
                          <th class="d-none th__texto">MES</th>
                          <th class="d-none th__texto">DESARROLLO</th>
                          <th class="d-none th__texto">CONDOMINIO</th>
                          <th class="d-none th__texto">CLUSTER</th>
                          <th class="d-none th__texto">OBRA</th>
                          <th class="d-none th__texto">CATEGORIA</th>
                          <th class="d-none th__texto">SUBCATEGORIA</th>
                          <th class="d-none th__texto">ORIGEN</th>
                          <th class="d-none th__texto">SEMANA</th>
                          <th class="d-none th__texto">SOLICITÓ</th>
                          <th class="d-none th__texto">AUTORIZÓ</th>
                          <th class="d-none th__texto">PRESUPUESTO</th>
                          <th class="d-none th__texto">UNIDAD_DE_NEGOCIO</th>
                          <th class="d-none th__texto">FLUJO</th>
                          <th class="d-none th__texto">LLAVE</th>
                          <th class="d-none th__texto">FECHA_CORRECTA</th>
                          <th class="d-none th__texto">LLAVE_EDOS_DE_CUENTA</th>
                          <th class="d-none th__texto">METODO_DE_PAGO</th>
                          <th class="d-none th__texto">MODELO_DE_NEGOCIO</th>
                          <th class="d-none th__texto">SOLICITO</th>
                          <th class="d-none th__texto">AUTORIZO</th>
                          <th class="d-none th__texto">AÑO</th>
                          <th class="d-none th__texto">MONTO_PROYECTADO</th>
                          <th class="th__texto">MODIFICAR</th>
                          <th class="th__texto">ELIMIAR</th>
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