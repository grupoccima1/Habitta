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
              <h2>Flujo</h2>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header bg-blue__500">
                <div class="row">
                  <div class="col text-white">
                   <img class="icon-home me-2" src="images/home.svg">  Home/Flujo
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
                    <thead class="bg__td bg-blue__400 text-white">
                      <tr class="text-center">                   
                          <th class="th__texto">Crear recibo</th>                        
                          <th class="th__texto">Notas</th>
                          <th class="th__texto">Enviado</th>
                          <th class="th__texto">Llave</th>
                          <th class="th__texto">Beneficiario</th>
                          <th class="d-none th__texto">Factura</th>
                          <th class="d-none th__texto">Fecha</th>
                          <th class="d-none th__texto">Motivo</th>
                          <th class="d-none th__texto">Categoria</th>
                          <th class="d-none th__texto">Origen</th>
                          <th class="d-none th__texto">Subcategoria</th>
                          <th class="d-none th__texto">Mes</th>
                          <th class="d-none th__texto">Año</th>
                          <th class="d-none th__texto">Flujo2</th>
                          <th class="d-none th__texto">Lote</th>
                          <th class="d-none th__texto">Condominio</th>                        
                          <th class="d-none th__texto">Cluster</th>
                          <th class="d-none th__texto">Desarrollo</th>
                          <th class="d-none th__texto">Cliente</th>
                          <th class="d-none th__texto">Correo</th>
                          <th class="d-none th__texto">1er mensualidad</th>
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
                            <td class="d-none"> <?php echo $item->BENEFICIARIO;?> </td>
                            <td class="d-none"> <?php echo $item->FACTURA;?> </td>
                            <td class="d-none"> <?php echo $item->FECHA;?></td>
                            <td class="d-none"> <?php echo $item->MOTIVO;?> </td>
                            <td class="d-none"> <?php echo $item->CATEGORIA;?> </td>
                            <td class="d-none"> <?php echo $item->ORIGEN;?> </td>
                            <td class="d-none"> <?php echo $item->SUBCATEGORIA;?> </td>
                            <td class="d-none"> <?php echo $item->MES;?> </td>
                            <td class="d-none"> <?php echo $item->AÑO;?> </td>
                            <td class="d-none"> <?php echo "$".number_format(floatval($item->FLUJO2),2);?> </td>
                            <td class="d-none"> <?php echo number_format(floatval($item->LOTE)); ?> </td>
                            <td class="d-none"> <?php echo $item->CONDOMINIO;?> </td>
                            <td class="d-none"> <?php echo $item->CLUSTER;?> </td>
                            <td class="d-none"> <?php echo $item->DESARROLLO;?> </td>
                            <td class="d-none"> <?php echo $item->CLIENTE;?> </td>
                            <td class="d-none"> <?php echo $item->CORREO;?> </td>
                            <td class="d-none"> <?php echo "$".number_format(floatval($item->ER_MENSUALIDAD),2); ?> </td>
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
                          <th class="d-none th__texto">Factura</th>
                          <th class="d-none th__texto">Fecha</th>
                          <th class="d-none th__texto">Motivo</th>
                          <th class="d-none th__texto">Categoria</th>
                          <th class="d-none th__texto">Origen</th>
                          <th class="d-none th__texto">Subcategoria</th>
                          <th class="d-none th__texto">Mes</th>
                          <th class="d-none th__texto">Año</th>
                          <th class="d-none th__texto">Flujo2</th>
                          <th class="d-none th__texto">Lote</th>
                          <th class="d-none th__texto">Condominio</th>                        
                          <th class="d-none th__texto">Cluster</th>
                          <th class="d-none th__texto">Desarrollo</th>
                          <th class="d-none th__texto">Cliente</th>
                          <th class="d-none th__texto">Correo</th>
                          <th class="d-none th__texto">1er mensualidad</th>
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
