<?php
require_once "./clases/Conexion.php";
  require_once "./clases/crud.php";
  $crud = new Crud();
  $datos = $crud->mostrarDatosProyeccionesHabitta();
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
          <li class="dropdown activo">
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
                <li class="dropdown">
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
                  <span><img src="images/home.svg" width="25px"></i></span> Home/Proyecciones de Flujo Habitta
                </div>

              </div>

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="tabla" class="table table-striped data-table" style="width: 100%">
                  <thead class="bg__td bg-blue__400 text-white">
                    <tr>

                        
                        <th class="th__texto" style="text-align:center;">MES</th>                        
                        <th class="th__texto" style="text-align:center;">fecha_2020</th>
                        <th class="th__texto" style="text-align:center;">fecha_2021</th>
                        <th class="th__texto" style="text-align:center;">fecha_2022</th>
                        <th class="th__texto" style="text-align:center;">fecha_2023</th>
                        <th class="th__texto" style="text-align:center;">fecha_2024</th>
                        <th class="th__texto" style="text-align:center;">fecha_2025</th>
                        <th class="th__texto" style="text-align:center;">fecha_2026</th>
                        <th class="th__texto" style="text-align:center;">fecha_2027</th>
                        <th class="th__texto" style="text-align:center;">fecha_2028</th>
                        <th class="th__texto" style="text-align:center;">fecha_2029</th>
                        <th class="th__texto" style="text-align:center;">fecha_2030</th>
                        <th class="th__texto" style="text-align:center;">fecha_2031</th>
                        <th class="th__texto" style="text-align:center;">fecha_2032</th>
                        <th class="th__texto" style="text-align:center;">fecha_2033</th>
                        <th class="th__texto" style="text-align:center;">fecha_2034</th>
                        <th class="th__texto" style="text-align:center;">fecha_2035</th>
                        <th class="th__texto" style="text-align:center;">fecha_2036</th>
                        <th class="th__texto" style="text-align:center;">fecha_2037</th>
                        <th class="th__texto" style="text-align:center;">fecha_general</th>
                        <th class="th__texto" style="text-align:center;">DESIERTO</th>
                        <th class="th__texto" style="text-align:center;">ESTEPA</th>
                        <th class="th__texto" style="text-align:center;">PARAMO</th>
                        <th class="th__texto" style="text-align:center;">TAIGA</th>
                        <th class="th__texto" style="text-align:center;">BOSQUE</th>
                        <th class="th__texto" style="text-align:center;">LOMAS</th>
                        <th class="th__texto" style="text-align:center;">Total_general</th>
                        <th class="th__texto" style="text-align:center;">SELVA</th>
                        <th class="th__texto" style="text-align:center;">LAGO</th>
                        <th class="th__texto" style="text-align:center;">MANGLAR</th>

                      


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
                          <td class="text-center"> <?php echo $item->MES;?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->fecha_2020,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->fecha_2021,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->fecha_2022,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->fecha_2023,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->fecha_2024,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->fecha_2025,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->fecha_2026,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->fecha_2027,2);?></td>
                          <td class="text-center"> <?php echo "$".number_format($item->fecha_2028,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->fecha_2029,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->fecha_2030,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->fecha_2031,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->fecha_2032,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->fecha_2033,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->fecha_2034,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->fecha_2035,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->fecha_2036,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->fecha_2037,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->fecha_general,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->DESIERTO,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->ESTEPA,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->PARAMO,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->TAIGA,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->BOSQUE,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->LOMAS,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->Total_general,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->SELVA,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->LAGO,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->MANGLAR,2);?> </td>
                        
                          
                         
                          </tr>
                          <?php } ?> 
                  </tbody>
                  <tfoot class="bg-blue">
                    <tr>


                        <th class="th__texto" style="text-align:center;">MES</th>                        
                        <th class="th__texto" style="text-align:center;">fecha_2020</th>
                        <th class="th__texto" style="text-align:center;">fecha_2021</th>
                        <th class="th__texto" style="text-align:center;">fecha_2022</th>
                        <th class="th__texto" style="text-align:center;">fecha_2023</th>
                        <th class="th__texto" style="text-align:center;">fecha_2024</th>
                        <th class="th__texto" style="text-align:center;">fecha_2025</th>
                        <th class="th__texto" style="text-align:center;">fecha_2026</th>
                        <th class="th__texto" style="text-align:center;">fecha_2027</th>
                        <th class="th__texto" style="text-align:center;">fecha_2028</th>
                        <th class="th__texto" style="text-align:center;">fecha_2029</th>
                        <th class="th__texto" style="text-align:center;">fecha_2030</th>
                        <th class="th__texto" style="text-align:center;">fecha_2031</th>
                        <th class="th__texto" style="text-align:center;">fecha_2032</th>
                        <th class="th__texto" style="text-align:center;">fecha_2033</th>
                        <th class="th__texto" style="text-align:center;">fecha_2034</th>
                        <th class="th__texto" style="text-align:center;">fecha_2035</th>
                        <th class="th__texto" style="text-align:center;">fecha_2036</th>
                        <th class="th__texto" style="text-align:center;">fecha_2037</th>
                        <th class="th__texto" style="text-align:center;">fecha_general</th>
                        <th class="th__texto" style="text-align:center;">DESIERTO</th>
                        <th class="th__texto" style="text-align:center;">ESTEPA</th>
                        <th class="th__texto" style="text-align:center;">PARAMO</th>
                        <th class="th__texto" style="text-align:center;">TAIGA</th>
                        <th class="th__texto" style="text-align:center;">BOSQUE</th>
                        <th class="th__texto" style="text-align:center;">LOMAS</th>
                        <th class="th__texto" style="text-align:center;">Total_general</th>
                        <th class="th__texto" style="text-align:center;">SELVA</th>
                        <th class="th__texto" style="text-align:center;">LAGO</th>
                        <th class="th__texto" style="text-align:center;">MANGLAR</th>

                       
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