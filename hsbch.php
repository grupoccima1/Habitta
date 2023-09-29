
<?php
require_once "./clases/Conexion.php";
  require_once "./HSBCHABITTA/crudhsbchabitta.php";
  $crud = new crudhsbchabitta();
  $datos = $crud->mostrarDatoshsbc_habitta();
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
      <nav id="sidebar"> <!-- Es un elemento de navegación con el atributo de identificación "sidebar". -->
        <div class="sidebar-header">  <!-- esta es  una sección dentro del menú lateral para el encabezado. Aquí es donde podría ir el logotipo u otro contenido relacionado con el encabezado. -->
          <h3><img src="images/habitta.svg" class="img-fluid"/></h3><!-- Define un encabezado de nivel 3 y dentro de él se encuentra una etiqueta de imagen -->    
        </div>
        <ul class="list-unstyled components"> <!--Crea una lista desordenada (<ul>) con la clase "list-unstyled components". Esta lista probablemente contendrá los elementos del menú. -->  
          <li class="active"> 
            <a href="index.php" class="dashboard"><img src="images/home.svg" width="20px"><span>Inicio</span></a>
          </li>
          <li class="">
            <a href="#submenu1" data-bs-toggle="collapse"  class="dashboard"><span>Principales</span></a>
            <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
              <li class="dropdown">
                <a href="./acumuladosherpa.php" data-toggle="collapse" aria-expanded="false" >
                  <i class="material-icons"></i><span>Acumulados Sherpa</span></a>
              </li>
              <li class="dropdown"><!--Esta clase generalmente se utiliza para indicar que el elemento de menú tiene un submenú o desplegable. -->
                <a href="./basemadre.php" data-toggle="collapse" aria-expanded="false"><!--se utilizan comúnmente en el marco Bootstrap para habilitar el comportamiento de colapso/desplegado en los submenús o contenido relacionado. -->
                  <i class="material-icons"></i><span>Base Madre</span></a><!-- define un iccono, un maetrial de iccono -->
              </li>
              <li class="dropdown">
                <a href="./basemadrehabitta.php" data-toggle="collapse" aria-expanded="false" >
                  <i class="material-icons"></i><span>Base Madre</span></a>
              </li>
              <li class="dropdown">
                <a href="./bilpocket.php" data-toggle="collapse" aria-expanded="false" >
                  <i class="material-icons"></i><span>Billpocket</span></a>
              </li>
              <li class="dropdown">
                <a href="./cierreMensualHabitta.php" data-toggle="collapse" aria-expanded="false" >
                  <i class="material-icons"></i><span>Cierre Mensual</span></a>
              </li>   
              <li class="dropdown">
                <a href="./clientesMorosos.php" data-toggle="collapse" aria-expanded="false" >
                  <i class="material-icons"></i><span>Clientes Morosos</span></a>
              </li> 
              <li class="dropdown">
                <a href="./Cobranza_Acumulado.php" data-toggle="collapse" aria-expanded="false" >
                  <i class="material-icons"></i><span>Cobranza Y Acumulado</span></a>
              </li>  
              <li class="dropdown">
                <a href="./CorteMoraRango.php" data-toggle="collapse" aria-expanded="false" >
                  <i class="material-icons"></i><span>Corte de Mora y Rango</span></a>
              </li>
              <li class="dropdown">
                <a href="./Devoluciones_clientes.php" data-toggle="collapse" aria-expanded="false" >
                  <i class="material-icons"></i><span>Devoluciones a Clientes</span></a>
              </li> 
              <li class="dropdown">
                <a href="./estadodecuenta.php" data-toggle="collapse" aria-expanded="false" >
                  <i class="material-icons"></i><span>Estado de cuenta</span></a>
              </li>  
              <li class="dropdown">
                <a href="./flujo.php" data-toggle="collapse" aria-expanded="false" >
                  <i class="material-icons"></i><span>Flujo</span></a>
              </li>
              <li class="dropdown">
                <a href="./liberados.php" data-toggle="collapse" aria-expanded="false" >
                  <i class="material-icons"></i><span>Liberado</span></a>
              </li>
              <li class="dropdown">
                <a href="./Nico.php" data-toggle="collapse" aria-expanded="false" >
                  <i class="material-icons"></i><span>Nico</span></a>
              </li>  
              <li class="dropdown">
                <a href="./TableroDeResultados.php" data-toggle="collapse" aria-expanded="false" >
                  <i class="material-icons"></i><span>Tablero de Resultados</span></a>
              </li> 
              <li class="dropdown">
                <a href="./tabulador.php" data-toggle="collapse" aria-expanded="false" >
                  <i class="material-icons"></i><span>Tabulador</span></a>
              </li>
              
              
            </ul>
          </li>
          <li>
            <a href="#submenu2" data-bs-toggle="collapse"  class="dashboard"><span>Comisiones</span></a>
              <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                <li class="dropdown">
                  <a href="./acumuladoComisiones.php" data-toggle="collapse" aria-expanded="false" >
                    <i class="material-icons"></i><span>Acumulado de Comisiones</span></a>
                </li> 
                <li class="dropdown">
                  <a href="./comisiones2020.php" data-toggle="collapse" aria-expanded="false" >
                    <i class="material-icons"></i><span>Comisiones 2020</span>
                  </a>
                </li>
                <li class="dropdown">
                  <a href="./comisiones2021.php" data-toggle="collapse" aria-expanded="false" >
                    <i class="material-icons"></i><span>Comisiones 2021</span></a>
                </li>
                <li class="dropdown">
                  <a href="./comisiones2022.php" data-toggle="collapse" aria-expanded="false" >
                    <i class="material-icons"></i><span>Comisiones 2022</span></a>
                </li>
                <li class="dropdown">
                  <a href="./comisiones2023.php" data-toggle="collapse" aria-expanded="false" >
                    <i class="material-icons"></i><span>Comisiones 2023</span></a>
                </li>
                <li class="dropdown">
                  <a href="./Hab_Formato_Comisiones_Internas.php" data-toggle="collapse" aria-expanded="false" >
                    <i class="material-icons"></i><span>Comisiones Internas</span></a>
                </li>
              
              </ul>
            </a>
          </li>
          <li>
            <a href="#submenu3" data-bs-toggle="collapse"  class="dashboard"><span>Bonos</span></a>
                <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                  <li class="dropdown">
                    <a href="./AcumuladosBonosDeTierra.php" data-toggle="collapse" aria-expanded="false" >
                      <i class="material-icons"></i><span>Acumulados Bonos de Tierra</span></a>
                  </li> 
                  <li class="dropdown">
                    <a href="./BonosReferidos.php" data-toggle="collapse" aria-expanded="false" >
                      <i class="material-icons"></i><span>Bonos Referidos</span></a>
                  </li> 
                </ul>
            </a>
          </li>
          <li class="dropdown">
            <a href="./ProyeccionesFlujoHabitta.php" data-toggle="collapse" aria-expanded="false" >
              <span>Proyecciones de flujo</span></a>
          </li> 
          <li class="dropdown">
            <a href="./EDO_De_Cuenta_Por_Desarrollo_Actualizado.php" data-toggle="collapse" aria-expanded="false" >
              <span>Estado De Cuenta por Desarrollo Actualizado</span></a>
          </li> 
          <li>
            <a href="#submenu4" data-bs-toggle="collapse"  class="dashboard"><span>Bancos</span></a>
              <ul class="collapse nav flex-column ms-1" id="submenu4" data-bs-parent="#menu">
                <li class="dropdown">
                  <a href="./bbva.php" data-toggle="collapse" aria-expanded="false" >
                    <i class="material-icons"></i><span>BBVA</span></a>
                </li>
                <li class="dropdown activo">
                  <a href="./hsbcl.php" data-toggle="collapse" aria-expanded="false" >
                    <i class="material-icons"></i><span>HSBC Lomas</span></a>

                </li>
                <li class="dropdown">
                  <a href="./hsbch.php" data-toggle="collapse" aria-expanded="false" >
                    <i class="material-icons"></i><span>HSBC Habitta</span></a>
                </li>
              </ul>
            </a>  
          </li>
          <li>
            <a href="#submenu5" data-bs-toggle="collapse"  class="dashboard"><span>Estados de cuenta</span></a>
                <ul class="collapse nav flex-column ms-1" id="submenu5" data-bs-parent="#menu">
                  <li class="dropdown">
                    <a href="./cobranza.php" data-toggle="collapse" aria-expanded="false" >
                      <i class="material-icons"></i><span>Cobranza</span></a>

                  </li>
                  <li class="dropdown">
                    <a href="./listado.php" data-toggle="collapse" aria-expanded="false" >
                      <i class="material-icons"></i><span>Listado</span></a>

                  </li>
                  <li class="dropdown">
                    <a href="./estados.php" data-toggle="collapse" aria-expanded="false" >
                      <i class="material-icons"></i><span>Estados de cuenta</span></a>

                  </li>
                  <li class="dropdown">
                    <a href="./catalogo.php" data-toggle="collapse" aria-expanded="false" >
                      <i class="material-icons"></i><span>Catalogo</span></a>

                  </li>
                  <li class="dropdown">
                    <a href="./tabulador.php" data-toggle="collapse" aria-expanded="false" >
                      <i class="material-icons"></i><span>Tabulador</span></a>

                  </li>
                </ul>
            </a>
          </li>
        </ul>
      </nav>
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
                  <span><img src="images/home.svg" width="25px"></i></span> Home/Hscb Habitta
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <a href="./HSBCHABITTA/agregarhsbchabitta.php" class="btn btn-primary">
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
                          <td> <?php echo $item->UNIDADDENEGOCIO;?> </td>
                          <td> <?php echo $item->FLUJO;?> </td>
                          <td> <?php echo $item->LLAVE;?> </td>
                          <td> <?php echo $item->FECHACORRECTA;?> </td>
                          <td> <?php echo $item->LLAVEEDOSDECUENTA; ?> </td>
                          <td> <?php echo $item->CLAVE;?> </td>
                          <td> <?php echo $item->METODODEPAGO;?> </td>
                          <td> 
                            <form action="./HSBCHABITTA/actualizarhsbchabitta.php" method="POST">
                              <input type="text" name="id" id="id" hidden value="<?php echo $item->_id ?>">
                              <button class="btn btn-warning">
                                <img class="edit__icon" src="images/iconos/pen-solid.svg" alt="">
                              </button>
                            </form>
                          </td>
                          <td>
                            <form action="./HSBCHABITTA/eliminarhsbchabitta.php" method="POST">
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
                  </tfoot>
                </table>
                <!-- <div class="row">
                  <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="example_info" role="status" aria-live="polite"></div>
                  </div>
                  <div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                      <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="example_previous"><a href="#"
                            aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Siguiente</a></li>
                        <li class="paginate_button page-item active"><a href="#" aria-controls="example" data-dt-idx="1"
                            tabindex="0" class="page-link">1</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="2"
                            tabindex="0" class="page-link">2</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="3"
                            tabindex="0" class="page-link">3</a></li>
                        <li class="paginate_button page-item next" id="example_next"><a href="#" aria-controls="example"
                            data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->



        <div id="addEmployeeModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <form>
                <div class="modal-header">
                  <h4 class="modal-title">Add Employee</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" required></textarea>
                  </div>
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" required>
                  </div>
                </div>
                <div class="modal-footer">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                  <input type="submit" class="btn btn-success" value="Add">
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Edit Modal HTML -->
        <div id="editEmployeeModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <form>
                <div class="modal-header">
                  <h4 class="modal-title">Edit Employee</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" required></textarea>
                  </div>
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" required>
                  </div>
                </div>
                <div class="modal-footer">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                  <input type="submit" class="btn btn-info" value="Save">
                </div>
              </form>
            </div>
          </div>
        </div>



        <!-- Delete Modal HTML -->
        <div id="deleteEmployeeModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <form>
                <div class="modal-header">
                  <h4 class="modal-title">Delete Employee</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to delete these Records?</p>
                  <p class="text-warning"><small>This action cannot be undone.</small></p>
                </div>
                <div class="modal-footer">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                  <input type="submit" class="btn btn-danger" value="Delete">
                </div>
              </form>
            </div>
          </div>
        </div>


      </div>


      <!---footer---->


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
