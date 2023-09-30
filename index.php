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
        <?php include "./sidebar.php" ?> 
        <!--------page-content---------------->
        <div id="content">
          <div class="container-fluid">
            <div class="row mt-5">
              <div class="col-md-12">
                <h2>Bienvenido</h2>
              </div>
            </div>
            <div class="row justify-content-center py-5">
              <div class="col-md-3">
                <div class="logo_cimatario">
                  <img src="images/cimatario.svg" class="imagen-logos"/>
                </div>
              </div>
              <div class="col-md-3">
                <div class="logo_cimatario">
                  <img src="images/lomas.svg"class="imagen-logos"/>
                </div>
              </div>
              <div class="col-md-3">
                <div class="logo_cimatario">
                  <img src="images/bernal.svg" class="imagen-logos"/>
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
