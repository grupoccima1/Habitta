<?php
require_once "./clases/Conexion.php";
  require_once "./BaseMadreHabitta/crudbasemadrehabitta.php";
  $crud = new crudbasemadrehabitta();
  $datos = $crud->mostrarDatoBaseMadreHabitta();
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
              <h2>Bienvenido</h2>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col">
                    <span><img src="images/home.svg" width="25px"></span> Home/Base Madre Habiita
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <a href="./BaseMadreHabitta/agregarbasemadrehabitta.php" class="btn btn-primary">
                  Agregar registro 
                </a>
                  <hr>
                  <table id="tabla" class="table table-striped data-table" style="width: 100%">
                    <thead class="bg__td">
                      <tr class="text-center">
                          <th class="th__texto">Llave</th>                        
                          <th class="th__texto">LOTE</th>
                          <th class="th__texto">CLIENTE</th>
                          <th class="th__texto">RFC</th>
                          <th class="th__texto">USO_CFDI</th>
                          <th class="th__texto">RAZON_SOCIAL</th>
                          <th class="th__texto">DOMICILIO_FISCAL</th>
                          <th class="th__texto">TELEFONO</th>
                          <th class="th__texto">CORREO</th>
                          <th class="th__texto">M2</th>
                          <th class="th__texto">TOTAL_OPERACION</th>
                          <th class="th__texto">ENGANCHE</th>
                          <th class="th__texto">FINANCIAMIENTO</th>
                          <th class="th__texto">FIRMA_CONTRATO</th>
                          <th class="th__texto">FIN_CORRIDA</th>
                          <th class="th__texto">TOTAL_MENSUALIDADES</th>
                          <th class="th__texto">NO_1ER_MENS</th>
                          <th class="th__texto">PRIMERA_MENSUALIDAD</th>                        
                          <th class="th__texto">NO_2DA_MENS</th>
                          <th class="th__texto">SEGUNDA_MENSUALIDAD</th>
                          <th class="th__texto">NO_3ER_MENS</th>
                          <th class="th__texto">TERCER_MENSUALIDAD</th>
                          <th class="th__texto">TIPO_DE_INTERES</th>
                          <th class="th__texto">MENS_ENTREGA</th>
                          <th class="th__texto">INICIO_CORRIDA</th>
                          <th class="th__texto">FECHA_PRIMER_ABONO</th>
                          <th class="th__texto">DEUDA</th>
                          <th class="th__texto">FECHA_ENTREGA_LOTE</th>
                          <th class="th__texto">ESTATUS_CM</th>
                          <th class="th__texto">LINK_SAT</th>
                          <th class="th__texto">NOTAS_DE_PAGOS</th>
                          <th class="th__texto">BONO_REFERIDO</th>
                          <th class="th__texto">ESTATUS</th>
                          <th class="th__texto">MOTIVO_ESTATUS</th>
                          <th class="th__texto">RESULTADO</th>
                          <th class="th__texto">FECHADELIBERACION</th>
                          <th class="th__texto">CONDOMINIO</th>
                          <th class="th__texto">CLUSTER</th>
                          <th class="th__texto">DESARROLLO</th>
                          <th class="th__texto">APARTADO_TELEGRAM</th>
                          <th class="th__texto">PRIMER_MENSUALIDAD</th>
                          <th class="th__texto">MODIFICAR</th>
                          <th class="th__texto">ELIMINAR</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                            foreach($datos as $item) { //Foreach es un arreglo o una coleccion de datos uno por uno. 
                                                      //$Datos es una variable sobre la cual se hara la iteracion y $as asigna elementos  
                          ?>                          
                            <tr class="text-enter">
                            <td> <?php echo $item->LLAVE; ?> </td>  
                            <td> <?php echo $item->LOTE;?> </td>
                            <td> <?php echo $item->CLIENTE;?> </td>
                            <td> <?php echo $item->RFC;?> </td>
                            <td> <?php echo $item->USO_CFDI; ?> </td>
                            <td> <?php echo $item->RAZON_SOCIAL;?> </td>
                            <td> <?php echo $item->DOMICILIO_FISCAL;?> </td>
                            <td> <?php echo $item->TELEFONO;?></td>
                            <td> <?php echo $item->CORREO;?> </td>
                            <td> <?php echo $item->M2;?> </td>
                            <td> <?php echo "$".number_format(floatval($item->TOTAL_OPERACION),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->ENGANCHE),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->FINANCIAMIENTO),2);?> </td>
                            <td> <?php echo $item->FIRMA_CONTRATO;?> </td>
                            <td> <?php echo $item->FIN_CORRIDA;?> </td>
                            <td> <?php echo $item->TOTAL_MENSUALIDADES;?> </td>
                            <td> <?php echo $item->NO_1ER_MENS; ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->PRIMERA_MENSUALIDAD),2);?> </td>
                            <td> <?php echo $item->NO_2DA_MENS; ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->SEGUNDA_MENSUALIDAD),2);?> </td>
                            <td> <?php echo $item->NO_3ER_MENS; ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->TERCER_MENSUALIDAD),2);?> </td>
                            <td> <?php echo $item->TIPO_DE_INTERES;?> </td>
                            <td> <?php echo $item->MENS_ENTREGA;?> </td>
                            <td> <?php echo $item->INICIO_CORRIDA;?> </td>
                            <td> <?php echo $item->FECHA_PRIMER_ABONO; ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->DEUDA),2);?> </td>
                            <td> <?php echo $item->FECHA_ENTREGA_LOTE;?> </td>
                            <td> <?php echo $item->ESTATUS_CM;?> </td>
                            <td> <?php echo $item->LINK_SAT;?></td>
                            <td> <?php echo $item->NOTAS_DE_PAGOS;?></td>
                            <td> <?php echo $item->BONO_REFERIDO; ?> </td>
                            <td> <?php echo $item->ESTATUS;?> </td>
                            <td> <?php echo $item->MOTIVO_ESTATUS;?> </td>
                            <td> <?php echo $item->RESULTADO;?> </td>
                            <td> <?php echo $item->FECHADELIBERACION;?> </td>
                            <td> <?php echo $item->CONDOMINIO;?> </td>
                            <td> <?php echo $item->CLUSTER;?> </td>
                            <td> <?php echo $item->DESARROLLO;?> </td>
                            <td> <?php echo $item->APARTADO_TELEGRAM;?> </td>
                            <td> <?php echo "$".number_format(floatval($item->PRIMER_MENSUALIDAD),2);?> </td>
                            <td>
                              <form action="./BaseMadreHabitta/modificar_BaseMHabitta.php" method="POST">
                                <input type="text" name="id" id="id" hidden value="<?php echo $item->_id ?>">
                                <button class="btn btn-warning">
                                  <img class="edit__icon" src="images/iconos/pen-solid.svg" alt="">
                                </button>
                              </form>
                            </td>
                            <td>
                              <form action="./BaseMadreHabitta/eliminarbasemadrehabitta.php" method="POST">
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
                          <th class="th__texto">LOTE</th>
                          <th class="th__texto">CLIENTE</th>
                          <th class="th__texto">RFC</th>
                          <th class="th__texto">USO_CFDI</th>
                          <th class="th__texto">RAZON_SOCIAL</th>
                          <th class="th__texto">DOMICILIO_FISCAL</th>
                          <th class="th__texto">TELEFONO</th>
                          <th class="th__texto">CORREO</th>
                          <th class="th__texto">M2</th>
                          <th class="th__texto">TOTAL_OPERACION</th>
                          <th class="th__texto">ENGANCHE</th>
                          <th class="th__texto">FINANCIAMIENTO</th>
                          <th class="th__texto">FIRMA_CONTRATO</th>
                          <th class="th__texto">FIN_CORRIDA</th>
                          <th class="th__texto">TOTAL_MENSUALIDADES</th>
                          <th class="th__texto">NO_1ER_MENS</th>
                          <th class="th__texto">PRIMERA_MENSUALIDAD</th>                        
                          <th class="th__texto">NO_2DA_MENS</th>
                          <th class="th__texto">SEGUNDA_MENSUALIDAD</th>
                          <th class="th__texto">NO_3ER_MENS</th>
                          <th class="th__texto">TERCER_MENSUALIDAD</th>
                          <th class="th__texto">TIPO_DE_INTERES</th>
                          <th class="th__texto">MENS_ENTREGA</th>
                          <th class="th__texto">INICIO_CORRIDA</th>
                          <th class="th__texto">FECHA_PRIMER_ABONO</th>
                          <th class="th__texto">DEUDA</th>
                          <th class="th__texto">FECHA_ENTREGA_LOTE</th>
                          <th class="th__texto">ESTATUS_CM</th>
                          <th class="th__texto">LINK_SAT</th>
                          <th class="th__texto">NOTAS_DE_PAGOS</th>
                          <th class="th__texto">BONO_REFERIDO</th>
                          <th class="th__texto">ESTATUS</th>
                          <th class="th__texto">MOTIVO_ESTATUS</th>
                          <th class="th__texto">RESULTADO</th>
                          <th class="th__texto">FECHADELIBERACION</th>
                          <th class="th__texto">CONDOMINIO</th>
                          <th class="th__texto">CLUSTER</th>
                          <th class="th__texto">DESARROLLO</th>
                          <th class="th__texto">APARTADO_TELEGRAM</th>
                          <th class="th__texto">PRIMER_MENSUALIDAD</th>
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