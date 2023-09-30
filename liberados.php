<?php
  require_once "./clases/Conexion.php";
  require_once "./Liberados/crud_liberados.php";
  $crud = new crudliberados();
  $datos = $crud->mostrarDatosliberado();
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
      <!-- Sidebar --> 
      <?php include "./sidebar.php"; ?>
      <!--------page-content---------------->
      <div id="content"> 
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <h2>Bienvenido</h2>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col">
                    <span><img src="images/home.svg" width="25px"></i></span> Home/Liberados
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <a href="./Liberados/agregar_Liberados.php" class="btn btn-primary">
                  Agregar registro 
                  </a>
                  <hr>
                  <table id="tabla" class="table table-striped data-table">
                    <thead class="bg__td">
                      <tr class="text-center">
                      
                          <th class="th__texto">Llave</th>                        
                          <th class="th__texto">Lote</th>
                          <th class="th__texto">Condominio</th>
                          <th class="th__texto">Cluster</th>
                          <th class="th__texto">Desarrollo</th>
                          <th class="th__texto">Apartado telegram</th>
                          <th class="th__texto">Cliente</th>
                          <th class="th__texto">Rfc</th>
                          <th class="th__texto">Idcif</th>
                          <th class="th__texto">Uso de cfdi</th>
                          <th class="th__texto">Razon social</th>
                          <th class="th__texto">Domicilio fiscal</th>
                          <th class="th__texto">Telefono</th>
                          <th class="th__texto">Correo</th>
                          <th class="th__texto">M2</th>
                          <th class="th__texto">Total operacion</th>                        
                          <th class="th__texto">Enganche</th>
                          <th class="th__texto">Financiamiento</th>
                          <th class="th__texto">Firma contrato</th>
                          <th class="th__texto">Fin corrida</th>
                          <th class="th__texto">Total mensualidades</th>
                          <th class="th__texto">No 1er mensualidad</th>
                          <th class="th__texto">1er mensualidad</th>
                          <th class="th__texto">No 2da mensualidad</th>
                          <th class="th__texto">2da mensualidad</th>
                          <th class="th__texto">No 3ra mensualidad</th>
                          <th class="th__texto">3er mensualidad</th>
                          <th class="th__texto">Tipo de interes</th>
                          <th class="th__texto">Mensualidad de entrega</th>
                          <th class="th__texto">Inicio corrida</th>
                          <th class="th__texto">Fecha primer abono</th>
                          <th class="th__texto">Pagado</th>
                          <th class="th__texto">Deuda</th>
                          <th class="th__texto">Fecha Entrega Lote</th>
                          <th class="th__texto">Estatus cm</th>
                          <th class="th__texto">Link sat</th>
                          <th class="th__texto">Notas de pagos</th>
                          <th class="th__texto">Abono referido</th>
                          <th class="th__texto">Estatus</th>
                          <th class="th__texto">Motivo estatus</th>
                          <th class="th__texto">Resultado</th>
                          <th class="th__texto">Fecha de liberacion</th>
                          <th class="th__texto">Modificar</th>
                          <th class="th__texto">Eliminar</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                            foreach($datos as $item) {
                          ?>
                            <tr class="text-center">
                              <td> <?php echo $item->LLAVE; ?> </td>
                            <td> <?php echo $item->LOTE;?> </td>
                            <td> <?php echo $item->CONDOMINIO;?> </td>
                            <td> <?php echo $item->CLUSTER; ?> </td>
                            <td> <?php echo $item->DESARROLLO;?> </td>
                            <td> <?php echo $item->APARTADOTELEGRAM;?> </td>
                            <td> <?php echo $item->CLIENTE;?></td>
                            <td> <?php echo $item->RFC;?> </td>
                            <td> <?php echo $item->IDCIF;?> </td>
                            <td> <?php echo $item->USO_CFDI;?> </td>
                            <td> <?php echo $item->RAZON_SOCIAL;?> </td>
                            <td> <?php echo $item->DOMICILIO_FISCAL;?> </td>
                            <td> <?php echo $item->TELEFONO;?> </td>
                            <td> <?php echo $item->CORREO;?> </td>
                            <td> <?php echo $item->M2; ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->TOTAL_OPERACION),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->ENGANCHE),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->FINANCIAMIENTO));?> </td>
                            <td> <?php echo $item->FIRMA_CONTRATO;?> </td>
                            <td> <?php echo $item->FIN_CORRIDA;?> </td>
                            <td> <?php echo $item->TOTAL_MENSUALIDADES; ?> </td>
                            <td> <?php echo number_format($item->NO_1ER_MENS);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->ER_MENSUALIDAD),2);?> </td>
                            <td> <?php echo number_format(floatval($item->NO_2DA_MENS));?> </td>
                            <td> <?php echo "$".number_format(floatval($item->DA_MENSUALIDAD),2); ?> </td>
                            <td> <?php echo number_format(floatval($item->NO_3ER_MENS));?></td>
                            <td> <?php echo "$".number_format(floatval($item->ER_MENSUALIDAD),2);?></td>
                            <td> <?php echo $item->TIPO_DE_INTERES; ?> </td>
                            <td> <?php echo $item->MENS_ENTREGA;?> </td>
                            <td> <?php echo $item->INICIO_CORRIDA;?> </td>
                            <td> <?php echo $item->FECHA_PRIMER_ABONO; ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->PAGADO),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->DEUDA),2);?> </td>
                            <td> <?php echo $item->FECHA_ENTREGA_LOTE; ?> </td>
                            <td> <?php echo $item->ESTATUS_CM;?> </td>
                            <td> <?php echo $item->LINK_SAT;?></td>
                            <td> <?php echo $item->NOTAS_DE_PAGOS;?></td>
                            <td> <?php echo $item->BONO_REFERIDO; ?> </td>
                            <td> <?php echo $item->ESTATUS;?> </td>
                            <td> <?php echo $item->MOTIVO_ESTATUS;?> </td>
                            <td> <?php echo $item->RESULTADO;?> </td>
                            <td> <?php echo $item->FECHADELIBERACION;?> </td>
                            <td>
                              <form action="./Liberados/modificar_Liberados.php" method="POST">
                                <input type="text" name="id" id="id" hidden value="<?php echo $item->_id ?>">
                                <button class="btn btn-warning">
                                    <img class="edit__icon" src="images/iconos/pen-solid.svg" alt="">
                                </button>
                              </form>
                            </td>
                            <td>
                              <form action="./Liberados/eliminarliberados.php" method="POST">
                                <input type="text" name="id" id="id" hidden value="<?php echo $item->_id ?>">
                                <button class="btn btn-danger">
                                  <img class="delete__icon" src="images/iconos/trash-solid.svg" alt="">
                                </button>
                              </form>
                            </td>
                              </td>
                            </tr>
                            <?php } ?> 
                    </tbody>
                    <tfoot class="bg-blue">
                      <tr class="text-center">
                          <th class="th__texto">Llave</th>                        
                          <th class="th__texto">Lote</th>
                          <th class="th__texto">Condominio</th>
                          <th class="th__texto">Cluster</th>
                          <th class="th__texto">Desarrollo</th>
                          <th class="th__texto">Apartado telegram</th>
                          <th class="th__texto">Cliente</th>
                          <th class="th__texto">Rfc</th>
                          <th class="th__texto">Idcif</th>
                          <th class="th__texto">Uso de cfdi</th>
                          <th class="th__texto">Razon social</th>
                          <th class="th__texto">Domicilio fiscal</th>
                          <th class="th__texto">Telefono</th>
                          <th class="th__texto">Correo</th>
                          <th class="th__texto">M2</th>
                          <th class="th__texto">Total operacion</th>                        
                          <th class="th__texto">Enganche</th>
                          <th class="th__texto">Financiamiento</th>
                          <th class="th__texto">Firma contrato</th>
                          <th class="th__texto">Fin corrida</th>
                          <th class="th__texto">Total mensualidades</th>
                          <th class="th__texto">No 1er mensualidad</th>
                          <th class="th__texto">1er mensualidad</th>
                          <th class="th__texto">No 2da mensualidad</th>
                          <th class="th__texto">2da mensualidad</th>
                          <th class="th__texto">No 3ra mensualidad</th>
                          <th class="th__texto">3er mensualidad</th>
                          <th class="th__texto">Tipo de interes</th>
                          <th class="th__texto">Mensualidad de entrega</th>
                          <th class="th__texto">Inicio corrida</th>
                          <th class="th__texto">Fecha primer abono</th>
                          <th class="th__texto">Pagado</th>
                          <th class="th__texto">Deuda</th>
                          <th class="th__texto">Fecha Entrega Lote</th>
                          <th class="th__texto">Estatus cm</th>
                          <th class="th__texto">Link sat</th>
                          <th class="th__texto">Notas de pagos</th>
                          <th class="th__texto">Abono referido</th>
                          <th class="th__texto">Estatus</th>
                          <th class="th__texto">Motivo estatus</th>
                          <th class="th__texto">Resultado</th>
                          <th class="th__texto">Fecha de liberacion</th>
                          <th class="th__texto">Modificar</th>
                          <th class="th__texto">Eliminar</th>
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
