<?php
  require_once "./clases/Conexion.php";
  require_once "./clases/crud.php";
  $crud = new Crud();
  $datos = $crud->mostrarDatosflujo();
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
                    <span><img src="images/home.svg" width="25px"></i></span> Home/Flujo
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <a href="./Flujo/agregar_Flujo.php" class="btn btn-primary">
                  Agregar registro 
                  </a>
                  <hr>
                  <table id="tabla" class="table table-striped data-table">
                    <thead class="bg__td">
                      <tr class="text-center">                   
                          <th class="th__texto">Crear recibo</th>                        
                          <th class="th__texto">Notas</th>
                          <th class="th__texto">Enviado</th>
                          <th class="th__texto">Llave</th>
                          <th class="th__texto">Beneficiario</th>
                          <th class="th__texto">Factura</th>
                          <th class="th__texto">Fecha</th>
                          <th class="th__texto">Motivo</th>
                          <th class="th__texto">Categoria</th>
                          <th class="th__texto">Origen</th>
                          <th class="th__texto">Subcategoria</th>
                          <th class="th__texto">Mes</th>
                          <th class="th__texto">Año</th>
                          <th class="th__texto">Flujo2</th>
                          <th class="th__texto">Lote</th>
                          <th class="th__texto">Condominio</th>                        
                          <th class="th__texto">Cluster</th>
                          <th class="th__texto">Desarrollo</th>
                          <th class="th__texto">Cliente</th>
                          <th class="th__texto">Correo</th>
                          <th class="th__texto">1er mensualidad</th>
                          <th class="th__texto">Modificar</th>
                          <th class="th__texto">Eliminar</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                            foreach($datos as $item) {
                          ?>
                          <tr class="text-center">
                            <td> <?php echo $item->CREAR_RECIBO; ?> </td>
                            <td> <?php echo $item->NOTAS;?> </td>
                            <td> <?php echo $item->ENVIADO;?> </td>
                            <td> <?php echo $item->LLAVE; ?> </td>
                            <td> <?php echo $item->BENEFICIARIO;?> </td>
                            <td> <?php echo $item->FACTURA;?> </td>
                            <td> <?php echo $item->FECHA;?></td>
                            <td> <?php echo $item->MOTIVO;?> </td>
                            <td> <?php echo $item->CATEGORIA;?> </td>
                            <td> <?php echo $item->ORIGEN;?> </td>
                            <td> <?php echo $item->SUBCATEGORIA;?> </td>
                            <td> <?php echo $item->MES;?> </td>
                            <td> <?php echo $item->AÑO;?> </td>
                            <td> <?php echo "$".number_format(floatval($item->FLUJO2),2);?> </td>
                            <td> <?php echo number_format(floatval($item->LOTE)); ?> </td>
                            <td> <?php echo $item->CONDOMINIO;?> </td>
                            <td> <?php echo $item->CLUSTER;?> </td>
                            <td> <?php echo $item->DESARROLLO;?> </td>
                            <td> <?php echo $item->CLIENTE;?> </td>
                            <td> <?php echo $item->CORREO;?> </td>
                            <td> <?php echo "$".number_format(floatval($item->ER_MENSUALIDAD),2); ?> </td>
                            <td>
                              <form action="./flujo/modificar_Flujo.php" method="POST">
                                <input type="text" name="id" id="id" hidden value="<?php echo $item->_id ?>">
                                <button class="btn btn-warning">
                                  <img class="edit__icon" src="images/iconos/pen-solid.svg" alt="">
                                </button>
                              </form>
                            </td>
                            <td>
                              <form action="./Flujo/eliminarflujo.php" method="POST">
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
                      <th class="th__texto">Crear recibo</th>                        
                          <th class="th__texto">Notas</th>
                          <th class="th__texto">Enviado</th>
                          <th class="th__texto">Llave</th>
                          <th class="th__texto">Beneficiario</th>
                          <th class="th__texto">Factura</th>
                          <th class="th__texto">Fecha</th>
                          <th class="th__texto">Motivo</th>
                          <th class="th__texto">Categoria</th>
                          <th class="th__texto">Origen</th>
                          <th class="th__texto">Subcategoria</th>
                          <th class="th__texto">Mes</th>
                          <th class="th__texto">Año</th>
                          <th class="th__texto">Flujo2</th>
                          <th class="th__texto">Lote</th>
                          <th class="th__texto">Condominio</th>                        
                          <th class="th__texto">Cluster</th>
                          <th class="th__texto">Desarrollo</th>
                          <th class="th__texto">Cliente</th>
                          <th class="th__texto">Correo</th>
                          <th class="th__texto">1er mensualidad</th>
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
