
<?php
  require_once "./clases/Conexion.php";
  require_once "./BaseMadre/crud_BaseMadre.php";
  $crud = new crudbasemadre();
  $datos = $crud->mostrarDatosmadre();
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
      <!-- Sidebar  --> 
      <?php include "./sidebar.php"; ?>
      <!--------page-content----------->
      <div id="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <h2>Base Madre</h2>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header bg-blue__500">
                <div class="row">
                  <div class="col text-white">
                   <img class="icon-home me-2" src="images/home.svg">  Home/Base Madre
                  </div>
                </div>
                <div class="col text-end">
                    <a href="./BaseMadre/cargar_csv.php" class="btn btn-success mt-2">Cargar archivo</a>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <a href="./BaseMadre/agregar_BaseMadre.php" class="btn btn-primary">
                  Agregar registro 
                  </a>
                  
                  <hr>
                  <table id="tabla" class="table table-striped data-table">
                    <thead class="bg__td bg-blue__400 text-white">
                      <tr class="text-center">
                          <th class="th__texto">Llave</th>                        
                          <th class="th__texto">Lote</th>
                          <th class="th__texto">Cliente</th>
                          <th class="th__texto">Rfc</th>
                          <th class="th__texto">Uso de cfdi</th>
                          <th class="d-none th__texto">Razon social</th>
                          <th class="d-none th__texto">Domicilio fiscal</th>
                          <th class="d-none th__texto">Telefono</th>
                          <th class="d-none th__texto">Correo</th>
                          <!-- <th class="d-none th__texto">Idcif</th> -->
                          <th class="d-none th__texto">M2</th>
                          <th class="d-none th__texto">Total operacion</th>                        
                          <th class="d-none th__texto">Enganche</th>
                          <th class="d-none th__texto">Financiamiento</th>
                          <th class="d-none th__texto">Firma contrato</th>
                          <th class="d-none th__texto">Fin corrida</th>
                          <th class="d-none th__texto">Total mensualidades</th>
                          <th class="d-none th__texto">No 1er mensualidad</th>
                          <th class="d-none th__texto">1er mensualidad</th>
                          <th class="d-none th__texto">No 2da mensualidad</th>
                          <th class="d-none th__texto">2da mensualidad</th>
                          <th class="d-none th__texto">No 3ra mensualidad</th>
                          <th class="d-none th__texto">3er mensualidad</th>
                          <th class="d-none th__texto">Tipo de interes</th>
                          <th class="d-none th__texto">Mensualidad de entrega</th>
                          <th class="d-none th__texto">Inicio corrida</th>
                          <th class="d-none th__texto">Fecha primer abono</th>
                          <!-- <th class="d-none th__texto">Pagado</th> -->
                          <th class="d-none th__texto">Deuda</th>
                          <th class="d-none th__texto">Fecha Entrega Lote</th>
                          <th class="d-none th__texto">Estatus cm</th>
                          <th class="d-none th__texto">Link sat</th>
                          <th class="d-none th__texto">Notas de pagos</th>
                          <th class="d-none th__texto">Abono referido</th>
                          <th class="d-none th__texto">Estatus</th>
                          <th class="d-none th__texto">Motivo estatus</th>
                          <th class="d-none th__texto">Resultado</th>
                          <th class="d-none th__texto">Fecha de Liberacion</th>
                          <th class="d-none th__texto">Condominio</th>
                          <th class="d-none th__texto">Cluster</th>
                          <th class="d-none th__texto">Desarrollo</th>
                          <th class="d-none th__texto">Apartado telegram</th>
                          <th class="d-none th__texto">Primer Mensualidad</th>
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
                            <td> <?php echo $item->CLIENTE;?></td>
                            <td> <?php echo $item->RFC;?> </td>
                            <!-- <td> <?php echo $item->IDCIF;?> </td> -->
                            <td> <?php echo $item->USO_CFDI;?> </td>
                            <td class="d-none"> <?php echo $item->RAZON_SOCIAL;?> </td>
                            <td class="d-none"> <?php echo $item->DOMICILIO_FISCAL;?> </td>
                            <td class="d-none"> <?php echo $item->TELEFONO;?> </td>
                            <td class="d-none"> <?php echo $item->CORREO;?> </td>
                            <td class="d-none"> <?php echo $item->M2; ?> </td>
                            <td class="d-none"> <?php echo "$".number_format($item->TOTAL_OPERACION,2);?> </td>
                            <td class="d-none"> <?php echo "$".number_format($item->ENGANCHE,2);?> </td>
                            <td class="d-none"> <?php echo "$".number_format($item->FINANCIAMIENTO,2);?> </td>
                            <td class="d-none"> <?php echo $item->FIRMA_CONTRATO;?> </td>
                            <td class="d-none"> <?php echo $item->FIN_CORRIDA;?> </td>
                            <td class="d-none"> <?php echo $item->TOTAL_MENSUALIDADES; ?> </td>
                            <td class="d-none"> <?php echo $item->NO_1ER_MENS;?> </td>
                            <td class="d-none"> <?php echo "$".number_format($item->PRIMERA_MENSUALIDAD,2);?> </td>
                            <td class="d-none"> <?php echo $item->NO_2DA_MENS;?> </td>
                            <td class="d-none"> <?php echo "$".number_format($item->SEGUNDA_MENSUALIDAD,2); ?> </td>
                            <td class="d-none"> <?php echo $item->NO_3ER_MENS;?></td>
                            <td class="d-none"> <?php echo "$".number_format($item->TERCER_MENSUALIDAD,2);?></td>
                            <td class="d-none"> <?php echo $item->TIPO_DE_INTERES; ?> </td>
                            <td class="d-none"> <?php echo $item->MENS_ENTREGA;?> </td>
                            <td class="d-none"> <?php echo $item->INICIO_CORRIDA;?> </td>
                            <td class="d-none"> <?php echo $item->FECHA_PRIMER_ABONO; ?> </td>
                            <!-- <td class="d-none"> <?php echo $item->PAGADO;?> </td> -->
                            <td class="d-none"> <?php echo "$".number_format($item->DEUDA,2);?> </td>
                            <td class="d-none"> <?php echo $item->FECHA_ENTREGA_LOTE; ?> </td>
                            <td class="d-none"> <?php echo $item->ESTATUS_CM;?> </td>
                            <td class="d-none"> <?php echo $item->LINK_SAT;?></td>
                            <td class="d-none"> <?php echo $item->NOTAS_DE_PAGOS;?></td>
                            <td class="d-none"> <?php echo "$".number_format(floatval($item->BONO_REFERIDO),2); ?> </td>
                            <td class="d-none"> <?php echo $item->ESTATUS;?> </td>
                            <td class="d-none"> <?php echo $item->MOTIVO_ESTATUS;?> </td>
                            <td class="d-none"> <?php echo $item->RESULTADO;?> </td>
                            <td class="d-none"> <?php echo $item->FECHADELIBERACION;?> </td>
                            <td class="d-none"> <?php echo $item->CONDOMINIO;?> </td>
                            <td class="d-none"> <?php echo $item->CLUSTER; ?> </td>
                            <td class="d-none"> <?php echo $item->DESARROLLO;?> </td>
                            <td class="d-none"> <?php echo $item->APARTADO_TELEGRAM;?> </td>
                            <td class="d-none"> <?php echo "$".number_format(floatval($item->PRIMER_MENSUALIDAD),2);?> </td>
                            <td>
                            <form action="./BaseMadre/modificar_BaseMadre.php" method="POST">
                              <input type="text" name="id" id="id" hidden value="<?php echo $item->_id?>">
                                <button class="btn btn-warning">
                                  <img class="edit__icon" src="images/iconos/pen-solid.svg" alt="">
                                </button>
                              </form>
                            </td>
                            <td>
                            <form action="./BaseMadre/eliminarbasemadre.php" method="POST">
                              <input type="text" name="id" id="id" hidden value="<?php echo $item->_id?>">
                                <button class="btn btn-danger">
                                  <img  class="delete__icon"src="images/iconos/trash-solid.svg" alt="">
                                </button>
                              </form> 
                          </td>
                        </tr>
                        <?php } ?> 
                    </tbody>
                    <tfoot class="bg-blue">
                      <tr class="text-center">                      
                          <th class="th__texto">Llave</th>                        
                          <th class="th__texto">Lote</th>
                          <th class="th__texto">Cliente</th>
                          <th class="th__texto">Rfc</th>
                          <th class="th__texto">Uso de cfdi</th>
                          <th class="d-none th__texto">Razon social</th>
                          <th class="d-none th__texto">Domicilio fiscal</th>
                          <th class="d-none th__texto">Telefono</th>
                          <th class="d-none th__texto">Correo</th>
                          <!-- <th class="d-none th__texto">Idcif</th> -->
                          <th class="d-none th__texto">M2</th>
                          <th class="d-none th__texto">Total operacion</th>                        
                          <th class="d-none th__texto">Enganche</th>
                          <th class="d-none th__texto">Financiamiento</th>
                          <th class="d-none th__texto">Firma contrato</th>
                          <th class="d-none th__texto">Fin corrida</th>
                          <th class="d-none th__texto">Total mensualidades</th>
                          <th class="d-none th__texto">No 1er mensualidad</th>
                          <th class="d-none th__texto">1er mensualidad</th>
                          <th class="d-none th__texto">No 2da mensualidad</th>
                          <th class="d-none th__texto">2da mensualidad</th>
                          <th class="d-none th__texto">No 3ra mensualidad</th>
                          <th class="d-none th__texto">3er mensualidad</th>
                          <th class="d-none th__texto">Tipo de interes</th>
                          <th class="d-none th__texto">Mensualidad de entrega</th>
                          <th class="d-none th__texto">Inicio corrida</th>
                          <th class="d-none th__texto">Fecha primer abono</th>
                          <!-- <th class="d-none th__texto">Pagado</th> -->
                          <th class="d-none th__texto">Deuda</th>
                          <th class="d-none th__texto">Fecha Entrega Lote</th>
                          <th class="d-none th__texto">Estatus cm</th>
                          <th class="d-none th__texto">Link sat</th>
                          <th class="d-none th__texto">Notas de pagos</th>
                          <th class="d-none th__texto">Abono referido</th>
                          <th class="d-none th__texto">Estatus</th>
                          <th class="d-none th__texto">Motivo estatus</th>
                          <th class="d-none th__texto">Resultado</th>
                          <th class="d-none th__texto">Fecha de Liberacion</th>
                          <th class="d-none th__texto">Condominio</th>
                          <th class="d-none th__texto">Cluster</th>
                          <th class="d-none th__texto">Desarrollo</th>
                          <th class="d-none th__texto">Apartado telegram</th>
                          <th class="d-none th__texto">Primer Mensualidad</th>
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
