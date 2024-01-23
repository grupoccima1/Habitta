<?php
  require_once "./clases/Conexion.php";
  require_once "./clientesmorosos/crudclientesmorosos.php";
  $crud = new crudclientesmorosos();
  $datos = $crud->mostrarDatoClientesMorosos();
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
      <?php include "./sidebar.php" ?>
      <!--------page-content---------------->
      <div id="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <h2>Clientes Morosos</h2>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header bg-blue__500">
                <div class="row">
                  <div class="col text-white">
                   <img class="icon-home me-2" src="images/home.svg">  Home/Clientes Morosos
                  </div> 
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <a href="./clientesmorosos/agregarclientesmorosos.php" class="btn btn-primary">
                    Agregar Registro
                  </a>
                  <hr>
                  <table id="tabla" class="table table-striped data-table">
                    <thead class="bg__td bg-blue__400 text-white">
                      <tr class="text-center">
                          <th class="th__texto">CONTADOR</th>                        
                          <th class="th__texto">LLAVE</th>
                          <th class="th__texto">DESARROLLO</th>
                          <th class="th__texto">LOTE</th>
                          <th class="th__texto">CONDOMINIO</th>
                          <th class="d-none th__texto">CLUSTER</th>
                          <th class="d-none th__texto">FECHA</th>
                          <th class="d-none th__texto">CLIENTES</th>
                          <th class="d-none th__texto">PRECIO_DEL_LOTE</th>
                          <th class="d-none th__texto">MONTO_MENS</th>
                          <th class="d-none th__texto">MENSUALIDAD</th>
                          <th class="d-none th__texto">INTERES</th>
                          <th class="d-none th__texto">TIPO_DE_INTES</th>
                          <th class="d-none th__texto">I_NEGOCIADO</th>
                          <th class="d-none th__texto">REAL</th>
                          <th class="d-none th__texto">MENS_PAGADA</th>
                          <th class="d-none th__texto">MEN_ADEUDADA</th>
                          <th class="d-none th__texto">FECHA_DE_ACUERDO</th>
                          <th class="d-none th__texto">MEDIO</th>
                          <th class="d-none th__texto">PLAZOS</th>
                          <th class="d-none th__texto">INICIO</th>
                          <th class="d-none th__texto">FIN</th>
                          <th class="d-none th__texto">ESTATUS_DE_INTERES</th>
                          <th class="d-none th__texto">COMENTARIO</th>
                          <th class="d-none th__texto">NEGOCIADO</th>
                          <th class="d-none th__texto">DEPARTAMENTO</th>
                          <th class="d-none th__texto">AÑO</th>
                          <th class="th__texto">MODIFICAR</th>
                          <th class="th__texto">ELIMINAR</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                            foreach($datos as $item) {
                          ?>
                            <tr class="text-center">
                            <td> <?php echo $item->CONTADOR; ?> </td>
                            <td> <?php echo $item->LLAVE;?> </td>
                            <td> <?php echo $item->DESARROLLO;?> </td>
                            <td> <?php echo $item->LOTE;?> </td>
                            <td> <?php echo $item->CONDOMINIO;?> </td>
                            <td class="d-none"> <?php echo $item->CLÚSTER; ?> </td>
                            <td class="d-none"> <?php echo $item->FECHA;?> </td>
                            <td class="d-none"> <?php echo $item->CLIENTE;?> </td>
                            <td class="d-none"> <?php echo "$".number_format(floatval($item->PRECIO_DEL_LOTE),2);?></td>
                            <td class="d-none"> <?php echo "$".number_format(floatval($item->MONTO_MENS),2);?> </td>
                            <td class="d-none"> <?php echo $item->MENSUALIDAD;?> </td>
                            <td class="d-none"> <?php echo "$".number_format(floatval($item->INTERES),2);?> </td>
                            <td class="d-none"> <?php echo $item->TIPO_DE_INTES;?> </td>
                            <td class="d-none"> <?php echo "$".number_format(floatval($item->I_NEGOCIADO),2);?> </td>
                            <td class="d-none"> <?php echo "$".number_format(floatval($item->REAL),2);?> </td>
                            <td class="d-none"> <?php echo $item->MENS_PAGADA;?> </td>
                            <td class="d-none"> <?php echo "$".number_format(floatval($item->MEN_ADEUDADA),2);?> </td>
                            <td class="d-none"> <?php echo $item->FECHA_DE_ACUERDO;?> </td>
                            <td class="d-none"> <?php echo $item->MEDIO;?> </td>
                            <td class="d-none"> <?php echo $item->PLAZOS;?> </td>
                            <td class="d-none"> <?php echo $item->INICIO;?> </td>
                            <td class="d-none"> <?php echo $item->FIN;?> </td>
                            <td class="d-none"> <?php echo $item->ESTATUS_DE_INTERES;?> </td>
                            <td class="d-none"> <?php echo $item->COMENTARIO;?> </td>
                            <td class="d-none"> <?php echo $item->NEGOCIADO?> </td>
                            <td class="d-none"> <?php echo $item->DEPARTAMENTO;?> </td>
                            <td class="d-none"> <?php echo $item->AÑO;?> </td>
                            <td>
                              <form action="./clientesmorosos/modificar_clientesMorosos.php" method="POST">
                                <input type="text" name="id" id="id" hidden value="<?php echo $item->_id ?>">
                                <button class="btn btn-warning">
                                  <img class="edit__icon" src="images/iconos/pen-solid.svg" alt="">
                                </button>
                              </form>
                            </td>
                            <td>
                              <form action="./clientesmorosos/eliminarclientesmorosos.php" method="POST">
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
                      <th class="th__texto">CONTADOR</th>                        
                          <th class="th__texto">LLAVE</th>
                          <th class="th__texto">DESARROLLO</th>
                          <th class="th__texto">LOTE</th>
                          <th class="th__texto">CONDOMINIO</th>
                          <th class="d-none th__texto">CLUSTER</th>
                          <th class="d-none th__texto">FECHA</th>
                          <th class="d-none th__texto">CLIENTES</th>
                          <th class="d-none th__texto">PRECIO_DEL_LOTE</th>
                          <th class="d-none th__texto">MONTO_MENS</th>
                          <th class="d-none th__texto">MENSUALIDAD</th>
                          <th class="d-none th__texto">INTERES</th>
                          <th class="d-none th__texto">TIPO_DE_INTES</th>
                          <th class="d-none th__texto">I_NEGOCIADO</th>
                          <th class="d-none th__texto">REAL</th>
                          <th class="d-none th__texto">MENS_PAGADA</th>
                          <th class="d-none th__texto">MEN_ADEUDADA</th>
                          <th class="d-none th__texto">FECHA_DE_ACUERDO</th>
                          <th class="d-none th__texto">MEDIO</th>
                          <th class="d-none th__texto">PLAZOS</th>
                          <th class="d-none th__texto">INICIO</th>
                          <th class="d-none th__texto">FIN</th>
                          <th class="d-none th__texto">ESTATUS_DE_INTERES</th>
                          <th class="d-none th__texto">COMENTARIO</th>
                          <th class="d-none th__texto">NEGOCIADO</th>
                          <th class="d-none th__texto">DEPARTAMENTO</th>
                          <th class="d-none th__texto">AÑO</th>
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