<?php
require_once "./clases/Conexion.php";
  require_once "./clases/crud.php";
  $crud = new Crud();
  $datos = $crud->mostrarAcumuladoComisiones();
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
            <a  class="dashboard"><span>Principales</span></a>
          </li>
          <li class="dropdown"><!--Esta clase generalmente se utiliza para indicar que el elemento de menú tiene un submenú o desplegable. -->
            <a href="./basemadre.php" data-toggle="collapse" aria-expanded="false"><!--se utilizan comúnmente en el marco Bootstrap para habilitar el comportamiento de colapso/desplegado en los submenús o contenido relacionado. -->
              <i class="material-icons"></i><span>Base Madre</span></a><!-- define un iccono, un maetrial de iccono -->

          </li>
          <li class="dropdown">
            <a href="./flujo.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Flujo</span></a>

          </li>
          <li class="dropdown">
            <a href="./liberados.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Liberado</span></a>

          </li>
          
       <!--    <li class="">
            <a href="#" class="dashboard"><span>Bancos</span></a>
          </li>

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
 -->
         <!--  <li class="">
            <a href="#" class="dashboard"><span>Estados de cuenta</span></a>
          </li>
          <li class="dropdown">
            <a href="./cobranza.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Cobranza</span></a>

          </li>
          </li>
          <li class="dropdown">
            <a href="./cobranza.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Listado</span></a>

          </li>
          <li class="dropdown">
            <a href="./cobranza.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Estados de cuenta</span></a>

          </li>
          <li class="dropdown">
            <a href="./cobranza.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Catalogo</span></a>
 -->
          </li>
          <li class="dropdown">
            <a href="./tabulador.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Tabulador</span></a>

          </li>

          <li class="dropdown">
            <a href="./comisiones2020.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Comisiones 2020</span></a>
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
            <a href="./acumuladosherpa.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Acumulados Sherpa</span></a>
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
            <a href="./clientesMorosos.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Clientes Morosos</span></a>
          </li>    

          <li class="dropdown">
            <a href="./estadodecuenta.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Estado de cuenta</span></a>
          </li>  

          <li class="dropdown">
            <a href="./Nico.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Nico</span></a>
          </li>   

          <li class="dropdown">
            <a href="./cierreMensualHabitta.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Cierre Mensual</span></a>
          </li>  
          
          <li class="dropdown">
            <a href="./acumuladoComisiones.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Acumulado De Comisiones</span></a>
          </li>   

          <li class="dropdown">
            <a href="./CorteMoraRango.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Corte de Mora y Rango</span></a>
          </li>   

          <li class="dropdown">
            <a href="./Cobranza_Acumulado.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Cobranza Y Acumulado</span></a>
          </li>   

           
        
          
          <li class="dropdown">
            <a href="./Devoluciones_clientes.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Devoluciones a Clientes</span></a>
          </li>   

               
          <li class="dropdown">
            <a href="./Hab_Formato_Comisiones_Internas.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Comisiones Internas</span></a>
          </li>   
          
      

          <li class="dropdown">
            <a href="./TableroDeResultados.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Tablero de Resultados</span></a>
          </li> 

          <li class="dropdown">
            <a href="./AcumuladosBonosDeTierra.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Acumulados Bonos de Tierra</span></a>
          </li> 

          <li class="dropdown">
            <a href="./BonosReferidos.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Bonos Referidos</span></a>
          </li> 

          <li class="dropdown">
            <a href="./ProyeccionesFlujoHabitta.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Proyecciones de flujo de habitta</span></a>
          </li> 

          <li class="dropdown">
            <a href="./EDO_De_Cuenta_Por_Desarrollo_Actualizado.php" data-toggle="collapse" aria-expanded="false" >
              <i class="material-icons"></i><span>Estado De Cuenta por Desarrollo Actualizado</span></a>
          </li> 

          <li class="">
            <a href="#" class="dashboard"><span>Bancos</span></a>
          </li>

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
          <li class="">
            <a href="#" class="dashboard"><span>Estados de cuenta</span></a>
          </li>
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
      </nav>




      <!--------page-content---------------->

      <div id="content">
        <div class="top-navbar">
          <div class="xp-topbar"></div>
          <div class="xp-breadcrumbbar text-center">
            <h4 class="page-title">Dashboard</h4>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>
        </div>

      <div class="container">
        <div class="row justify-content-center py-5">
          <div class="col-md-3">
            <div class="logo_cimatario">
              <img src="images/cimatario.svg" class="imagen-logos"/>
            </div>
          </div>

          <div class="col-md-3">
            <div class="logo_cimatario">
              <img src="images/lomas.svg"     class="imagen-logos"/>
            </div>
          </div>

          <div class="col-md-3">
            <div class="logo_cimatario">
              <img src="images/cimatario.svg" class="imagen-logos"/>
            </div>
          </div>



        </div>
      </div>
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
                  <span><img src="images/home.svg" width="25px"></i></span> Home/Acumulado de Comisiones
                </div>

              </div>

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="tabla" class="table table-striped data-table" style="width: 100%">
                  <thead class="bg__td">
                    <tr>

                        <th class="th__texto" style="text-align:center;">Llave</th>                        
                        <th class="th__texto" style="text-align:center;">FECHA_DE_INGRESO</th>
                        <th class="th__texto" style="text-align:center;">LOTE</th>
                        <th class="th__texto" style="text-align:center;">CONDOMINIO</th>
                        <th class="th__texto" style="text-align:center;">CLUSTER</th>
                        <th class="th__texto" style="text-align:center;">DESARROLLO</th>
                        <th class="th__texto" style="text-align:center;">PUESTO</th>
                        <th class="th__texto" style="text-align:center;">NOMBRE_CORRECTO</th>
                        <th class="th__texto" style="text-align:center;">TOTAL_DE_LA_VENTA</th>
                        <!-- <th class="th__texto" style="text-align:center;">COMISIONISTA</th> -->
                        <th class="th__texto" style="text-align:center;">ENGANCHE</th>
                        <th class="th__texto" style="text-align:center;">PCOMISION</th>
                        <th class="th__texto" style="text-align:center;">TOTAL_COMISION</th>
                        <th class="th__texto" style="text-align:center;">DESCUENTO</th>
                        <th class="th__texto" style="text-align:center;">DESC</th>
                        <th class="th__texto" style="text-align:center;">A_PAGAR_EXTERNOS</th>
                        <th class="th__texto" style="text-align:center;">SUBTOTAL</th>
                        <th class="th__texto" style="text-align:center;">IVA</th>
                        <th class="th__texto" style="text-align:center;">RETENCIONES_DE_IVA</th>
                        <th class="th__texto" style="text-align:center;">RETENCIONES_ISR</th>                        
                        <th class="th__texto" style="text-align:center;">TOTAL</th>
                        <th class="th__texto" style="text-align:center;">PAGO</th>
                        <th class="th__texto" style="text-align:center;">NOTAS</th>
                        <th class="th__texto" style="text-align:center;">PAGADO</th>
                        <th class="th__texto" style="text-align:center;">METODO_DE_PAGO</th>
                        <th class="th__texto" style="text-align:center;">FECHA_PAGADA</th>
                        <th class="th__texto" style="text-align:center;">SEMANA_PAGADA</th>
                        <th class="th__texto" style="text-align:center;">SEMANA</th>
                        <th class="th__texto" style="text-align:center;">X_TIPO_DE_REGIMEN</th>
                        <th class="th__texto" style="text-align:center;">CUENTA</th>
                        <th class="th__texto" style="text-align:center;">MOTIVO_DE_DESCUENTO</th>
                        <th class="th__texto" style="text-align:center;">ESTATUS</th>
                        <th class="th__texto" style="text-align:center;">LOTE_ANTERIOR</th>
                        <th class="th__texto" style="text-align:center;">TIPO</th>

                        
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
                          <td class="text-center"> <?php echo $item->LLAVE; ?> </td>
                          <td class="text-center"> <?php echo $item->FECHA_DE_INGRESO;?> </td>
                          <td class="text-center"> <?php echo $item->LOTE;?> </td>
                          <td class="text-center"> <?php echo $item->CONDOMINIO;?> </td>
                          <td class="text-center"> <?php echo $item->CLUSTER;?> </td>
                          <td class="text-center"> <?php echo $item->DESARROLLO; ?> </td>
                          <td class="text-center"> <?php echo $item->PUESTO;?> </td>
                          <td class="text-center"> <?php echo $item->NOMBRE_CORRECTO;?> </td>
                          <td class="text-center"> <?php echo "$".number_format(floatval($item->lTOTA_DE_LAVENTA),2);?></td>
                          <td class="text-center"> <?php echo "$".number_format(floatval($item->ENGANCHE),2);?> </td>
                          <td class="text-center"> <?php echo number_format(floatval($item->PCOMISION));?> </td>
                          <td class="text-center"> <?php echo "$".number_format(floatval($item->TOTAL_COMISION),2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format(floatval($item->DESCUENTO),2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format(floatval($item->DESC),2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format(floatval($item->APAGAR_EXTERNOS),2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format(floatval($item->SUBTOTAL),2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format(floatval($item->IVA),2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format(floatval($item->RETENCIONES_DE_IVA),2); ?> </td>
                          <td class="text-center"> <?php echo "$".number_format(floatval($item->RETENCIONES_ISR),2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format(floatval($item->TOTAL),2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format(floatval($item->PAGO),2);?> </td>
                          <td class="text-center"> <?php echo $item->NOTAS;?> </td>
                          <td class="text-center"> <?php echo "$".number_format(floatval($item->PAGADO),2);?> </td>
                          <td class="text-center"> <?php echo $item->METODO_DE_PAGO; ?> </td>
                          <td class="text-center"> <?php echo $item->FECHA_PAGADA;?> </td>
                          <td class="text-center"> <?php echo $item->SEMANA_PAGADA; ?> </td>
                          <td class="text-center"> <?php echo $item->SEMANA;?> </td>
                          <td class="text-center"> <?php echo $item->X_TIPO_DE_REGIMEN;?></td>
                          <td class="text-center"> <?php echo $item->CUENTA;?></td>
                          <td class="text-center"> <?php echo $item->MOTIVO_DE_DESCUENTO; ?> </td>
                          <td class="text-center"> <?php echo $item->ESTATUS;?> </td>
                          <td class="text-center"> <?php echo $item->LOTE_ANTERIOR;?> </td>
                          <td class="text-center"> <?php echo $item->TIPO;?> </td>
                         
                          </tr>
                          <?php } ?> 
                  </tbody>
                  <tfoot class="bg-blue">
                    <tr>

                    <th class="th__texto" style="text-align:center;">Llave</th>                        
                        <th class="th__texto" style="text-align:center;">FECHA_DE_INGRESO</th>
                        <th class="th__texto" style="text-align:center;">LOTE</th>
                        <th class="th__texto" style="text-align:center;">CONDOMINIO</th>
                        <th class="th__texto" style="text-align:center;">CLUSTER</th>
                        <th class="th__texto" style="text-align:center;">DESARROLLO</th>
                        <th class="th__texto" style="text-align:center;">PUESTO</th>
                        <th class="th__texto" style="text-align:center;">NOMBRE_CORRECTO</th>
                        <th class="th__texto" style="text-align:center;">TOTAL_DE_LA_VENTA</th>
                        <!-- <th class="th__texto" style="text-align:center;">COMISIONISTA</th> -->
                        <th class="th__texto" style="text-align:center;">ENGANCHE</th>
                        <th class="th__texto" style="text-align:center;">PCOMISION</th>
                        <th class="th__texto" style="text-align:center;">TOTAL_COMISION</th>
                        <th class="th__texto" style="text-align:center;">DESCUENTO</th>
                        <th class="th__texto" style="text-align:center;">DESC</th>
                        <th class="th__texto" style="text-align:center;">A_PAGAR_EXTERNOS</th>
                        <th class="th__texto" style="text-align:center;">SUBTOTAL</th>
                        <th class="th__texto" style="text-align:center;">IVA</th>
                        <th class="th__texto" style="text-align:center;">RETENCIONES_DE_IVA</th>
                        <th class="th__texto" style="text-align:center;">RETENCIONES_ISR</th>                        
                        <th class="th__texto" style="text-align:center;">TOTAL</th>
                        <th class="th__texto" style="text-align:center;">PAGO</th>
                        <th class="th__texto" style="text-align:center;">NOTAS</th>
                        <th class="th__texto" style="text-align:center;">PAGADO</th>
                        <th class="th__texto" style="text-align:center;">METODO_DE_PAGO</th>
                        <th class="th__texto" style="text-align:center;">FECHA_PAGADA</th>
                        <th class="th__texto" style="text-align:center;">SEMANA_PAGADA</th>
                        <th class="th__texto" style="text-align:center;">SEMANA</th>
                        <th class="th__texto" style="text-align:center;">X_TIPO_DE_REGIMEN</th>
                        <th class="th__texto" style="text-align:center;">CUENTA</th>
                        <th class="th__texto" style="text-align:center;">MOTIVO_DE_DESCUENTO</th>
                        <th class="th__texto" style="text-align:center;">ESTATUS</th>
                        <th class="th__texto" style="text-align:center;">LOTE_ANTERIOR</th>
                        <th class="th__texto" style="text-align:center;">TIPO</th>
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

      <footer class="footer">
        <div class="container-fluid">
          <div class="footer-in">
            <p class="mb-0">&copy 2020 Vishweb design - All Rights Reserved.</p>
          </div>
        </div>
      </footer>
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