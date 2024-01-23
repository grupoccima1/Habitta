<?php
  require_once "./clases/Conexion.php";
  require_once "./HSBCLOMAS/crudhsbclomas.php";
  $crud = new crudhsbclomas();
  $datos = $crud->mostrarDatoshsbc_lomas();
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
              <h2>Hsbc Lomas</h2>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header bg-blue__500">
                <div class="row">
                  <div class="col text-white">
                   <img class="icon-home me-2" src="images/home.svg">  Home/Hsbc Lomas
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <a href="./HSBCLOMAS/agregarhsbclomas.php" class="btn btn-primary">
                    Agregar Registro
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
                          <th class="d-none th__texto">Saldo</th>
                          <th class="d-none th__texto">Factura</th>
                          <th class="d-none th__texto">Motivo</th>
                          <th class="d-none th__texto">Mes</th>
                          <th class="d-none th__texto">Desarrollo</th>
                          <th class="d-none th__texto">Lote</th>
                          <th class="d-none th__texto">Condominio</th>
                          <th class="d-none th__texto">Cluster</th>
                          <th class="d-none th__texto">Obra</th>
                          <th class="d-none th__texto">Categoria</th>
                          <th class="d-none th__texto">Subcategoria</th>                        
                          <th class="d-none th__texto">Modelo de negocios</th>
                          <th class="d-none th__texto">Flujo</th>
                          <th class="d-none th__texto">Llave</th>
                          <th class="d-none th__texto">Fecha correcta</th>
                          <th class="d-none th__texto">Llave estado de cuenta</th>
                          <th class="d-none th__texto">Clave</th>
                          <th class="d-none th__texto">Metodo de pago</th>
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
                            <td class="d-none"> <?php echo "$".number_format(floatval($item->SALDO),2);?> </td>
                            <td class="d-none"> <?php echo $item->FACTURA;?></td>
                            <td class="d-none"> <?php echo $item->MOTIVO;?> </td>
                            <td class="d-none"> <?php echo $item->MES;?> </td>
                            <td class="d-none"> <?php echo $item->DESARROLLO;?> </td>
                            <td class="d-none"> <?php echo $item->LOTE;?> </td>
                            <td class="d-none"> <?php echo $item->CONDOMINIO;?> </td>
                            <td class="d-none"> <?php echo $item->CLUSTER;?> </td>
                            <td class="d-none"> <?php echo $item->OBRA;?> </td>
                            <td class="d-none"> <?php echo $item->CATEGORIA; ?> </td>
                            <td class="d-none"> <?php echo $item->SUBCATEGORIA;?> </td>
                            <td class="d-none"> <?php echo $item->UNIDADDENEGOCIO;?> </td>
                            <td class="d-none"> <?php echo $item->FLUJO;?> </td>
                            <td class="d-none"> <?php echo $item->LLAVE;?> </td>
                            <td class="d-none"> <?php echo $item->FECHACORRECTA;?> </td>
                            <td class="d-none"> <?php echo $item->LLAVEEDOSDECUENTA; ?> </td>
                            <td class="d-none"> <?php echo $item->CLAVE;?> </td>
                            <td class="d-none"> <?php echo $item->METODODEPAGO;?> </td>
                            <td>
                              <form action="./HSBCLOMAS/actualizarhsbclomas.php" method="POST">
                                <input type="text" name="id" id="id" hidden value="<?php echo $item->_id ?>">
                                  <button class="btn btn-warning">
                                    <img class="edit__icon" src="images/iconos/pen-solid.svg" alt="">
                                  </button>
                              </form>
                            </td>
                            <td>
                              <form action="./HSBCLOMAS/eliminarhsbclomas.php" method="POST">
                                <input type="text" name="id" id="id" hidden value="<?php echo $item->_id?>">
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
                          <th class="th__texto">Semana</th>                        
                          <th class="th__texto">Fecha</th>
                          <th class="th__texto">Beneficiario</th>
                          <th class="th__texto">Ingreso</th>
                          <th class="th__texto">Egreso</th>
                          <th class="d-none th__texto">Saldo</th>
                          <th class="d-none th__texto">Factura</th>
                          <th class="d-none th__texto">Motivo</th>
                          <th class="d-none th__texto">Mes</th>
                          <th class="d-none th__texto">Desarrollo</th>
                          <th class="d-none th__texto">Lote</th>
                          <th class="d-none th__texto">Condominio</th>
                          <th class="d-none th__texto">Cluster</th>
                          <th class="d-none th__texto">Obra</th>
                          <th class="d-none th__texto">Categoria</th>
                          <th class="d-none th__texto">Subcategoria</th>                        
                          <th class="d-none th__texto">Modelo de negocios</th>
                          <th class="d-none th__texto">Flujo</th>
                          <th class="d-none th__texto">Llave</th>
                          <th class="d-none th__texto">Fecha correcta</th>
                          <th class="d-none th__texto">Llave estado de cuenta</th>
                          <th class="d-none th__texto">Clave</th>
                          <th class="d-none th__texto">Metodo de pago</th>
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
