
<?php
require_once "./clases/Conexion.php";
  require_once "./BBVA/crudbbva.php";
  $crud = new crudbbva();
  $datos = $crud->mostrarDatosbbva();
?>

<!DOCTYPE html>
<html lang="en">
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
              <h2 class="text-uppercase">Bbva</h2>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header bg-blue__500">
                <div class="row">
                  <div class="col text-white">  
                   <img class="icon-home me-2" src="images/home.svg">  Home/Bancos/Bbva
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <a href="./BBVA/agregarbbva.php" class="btn btn-primary">
                    AgregarRegistro
                  </a>
                  <hr>
                  <table id="tabla" class="table table-striped data-table">
                    <thead class="bg__td bg-blue__400 text-white">
                      <tr class="text-center">
                          <th class="th__texto">Semana</th>                        
                          <th class="th__texto">Fecha</th>
                          <th class="th__texto">Beneficiario</th>
                          <th class="th__texto">Ingreso</th>
                          <th class="th__texto">Egreso</th>
                          <th class="th__texto">Saldo</th>
                          <th class="th__texto">Factura</th>
                          <th class="th__texto">Motivo</th>
                          <th class="th__texto">Mes</th>
                          <th class="th__texto">Desarrollo</th>
                          <th class="th__texto">Lote</th>
                          <th class="th__texto">Condominio</th>
                          <th class="th__texto">Cluster</th>
                          <th class="th__texto">Obra</th>
                          <th class="th__texto">Categoria</th>
                          <th class="th__texto">Subcategoria</th>                        
                          <th class="th__texto">Modelo de negocios</th>
                          <th class="th__texto">Flujo</th>
                          <th class="th__texto">Llave</th>
                          <th class="th__texto">Fecha correcta</th>
                          <th class="th__texto">Llave estado de cuenta</th>
                          <th class="th__texto">Clave</th>
                          <th class="th__texto">Metodo de pago</th>
                          <th class="th__texto">Modificar</th>
                          <th class="th__texto">Eliminar</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                            foreach($datos as $item) {
                          ?>
                            <tr class="text-center">
                            <td> <?php echo $item->SEMANA; ?> </td>
                            <td> <?php echo $item->FECHA;?> </td>
                            <td> <?php echo $item->BENEFICIARIO;?> </td>
                            <td> <?php echo $item->INGRESO; ?> </td>
                            <td> <?php echo $item->EGRESO;?> </td>
                            <td> <?php echo "$".number_format(floatval($item->SALDO),2);?> </td>
                            <td> <?php echo $item->FACTURA;?></td>
                            <td> <?php echo $item->MOTIVO;?> </td>
                            <td> <?php echo $item->MES;?> </td>
                            <td> <?php echo $item->DESARROLLO;?> </td>
                            <td> <?php echo $item->LOTE;?> </td>
                            <td> <?php echo $item->CONDOMINIO;?> </td>
                            <td> <?php echo $item->CLUSTER;?> </td>
                            <td> <?php echo $item->OBRA;?> </td>
                            <td> <?php echo $item->CATEGORIA; ?> </td>
                            <td> <?php echo $item->SUBCATEGORIA;?> </td>
                            <td> <?php echo $item->MODELODENEGOCIO;?> </td>
                            <td> <?php echo $item->FLUJO;?> </td>
                            <td> <?php echo $item->LLAVE;?> </td>
                            <td> <?php echo $item->FECHACORRECTA;?> </td>
                            <td> <?php echo $item->LLAVEEDOSDECUENTA; ?> </td>
                            <td> <?php echo $item->CLAVE;?> </td>
                            <td> <?php echo $item->METODODEPAGO;?> </td>
                            <td>
                              <form action="./BBVA/actualizarbbva.php" method="POST">
                                <input type="text" name="id" id="id" hidden value="<?php echo $item->_id ?>">
                                <button class="btn btn-warning">
                                  <img class="edit__icon" src="images/iconos/pen-solid.svg" alt="">
                                </button>
                              </form>
                            </td>
                            <td>
                              <form action="./BBVA/eliminarbbva.php" method="POST">
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
