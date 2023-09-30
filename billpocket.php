<?php
require_once "./clases/Conexion.php";
  require_once "./clases/crud.php";
  $crud = new Crud();
  $datos = $crud->mostrarDatobillpocket();
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
              <div class="card-header bg-blue__500">
                <div class="row">
                  <div class="col text-white">
                    <span><img src="images/home.svg" width="25px"></i></span> Home/Comisioes 2023
                  </div>

                </div>

              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="tabla" class="table table-striped data-table" style="width: 100%">
                    <thead class="bg__td bg-blue__400 text-white">
                      <tr>

                          
                          <th class="th__texto" style="text-align:center;">NOMBRE_DE_CLIENTE</th>                        
                          <th class="th__texto" style="text-align:center;">DEPOSITO_DE_CLIENTE</th>
                          <th class="th__texto" style="text-align:center;">COMISION</th>
                          <th class="th__texto" style="text-align:center;">DEPOSITO_EN_BANCO</th>
                          <th class="th__texto" style="text-align:center;">TIPO_DE_PAGO</th>
                          <th class="th__texto" style="text-align:center;">FOLIO</th>
                          <th class="th__texto" style="text-align:center;">TIPO_DE_TARJETA</th>
                          <th class="th__texto" style="text-align:center;">TPVAFILIADA</th>
                          <th class="th__texto" style="text-align:center;">FECHADE_DEPOSITO</th>
                          <th class="th__texto" style="text-align:center;">AÑO</th>
                          <th class="th__texto" style="text-align:center;">BANCO</th>
                        


                      </tr>
                    </thead>
                    <tbody>
                    <?php
                            foreach($datos as $item) {
                          ?>
                            <tr>
                              <!-- <td class="text-center">
                              <form action="../BaseDetalle/formulario.php" method="POST">
                                  Ocultar Boton -->
                                  <!-- <input type="text" hidden value="" name="id">
                                  <button class="border__none">
                                    <input type="text" hidden value="" name="id">
                                  </button>
    
                                  
                              </form>
                            
                              </td> --> 
                            <td class="text-center"> <?php echo $item->NOMBRE_DE_CLIENTE; ?> </td>
                            <td class="text-center"> <?php echo $item->DEPOSITO_DE_CLIENTE;?> </td>
                            <td class="text-center"> <?php echo $item->COMISION;?> </td>
                            <td class="text-center"> <?php echo $item->DEPOSITO_EN_BANCO;?> </td>
                            <td class="text-center"> <?php echo $item->TIPO_DE_PAGO;?> </td>
                            <td class="text-center"> <?php echo $item->FOLIO; ?> </td>
                            <td class="text-center"> <?php echo $item->TIPO_DE_TARJETA;?> </td>
                            <td class="text-center"> <?php echo $item->TPVAFILIADA;?> </td>
                            <td class="text-center"> <?php echo $item->FECHADE_DEPOSITO;?></td>
                            <td class="text-center"> <?php echo $item->AÑO;?> </td>
                            <td class="text-center"> <?php echo $item->BANCO;?> </td>
                          
                            </tr>
                            <?php } ?> 
                    </tbody>
                    <tfoot class="bg-blue">
                      <tr>


                          <th class="th__texto" style="text-align:center;">NOMBRE_DE_CLIENTE</th>                        
                          <th class="th__texto" style="text-align:center;">DEPOSITO_DE_CLIENTE</th>
                          <th class="th__texto" style="text-align:center;">COMISION</th>
                          <th class="th__texto" style="text-align:center;">DEPOSITO_EN_BANCO</th>
                          <th class="th__texto" style="text-align:center;">TIPO_DE_PAGO</th>
                          <th class="th__texto" style="text-align:center;">FOLIO</th>
                          <th class="th__texto" style="text-align:center;">TIPO_DE_TARJETA</th>
                          <th class="th__texto" style="text-align:center;">TPVAFILIADA</th>
                          <th class="th__texto" style="text-align:center;">FECHADE_DEPOSITO</th>
                          <th class="th__texto" style="text-align:center;">AÑO</th>
                          <th class="th__texto" style="text-align:center;">BANCO</th>
                        
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
