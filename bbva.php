
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
              <div id="listaDesplegable"></div>  
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
                            <td class="d-none "> <?php echo "$".number_format(floatval($item->SALDO),2);?> </td>
                            <td class="d-none "> <?php echo $item->FACTURA;?></td>
                            <td class="d-none "> <?php echo $item->MOTIVO;?> </td>
                            <td class="d-none "> <?php echo $item->MES;?> </td>
                            <td class="d-none "> <?php echo $item->DESARROLLO;?> </td>
                            <td class="d-none "> <?php echo $item->LOTE;?> </td>
                            <td class="d-none "> <?php echo $item->CONDOMINIO;?> </td>
                            <td class="d-none "> <?php echo $item->CLUSTER;?> </td>
                            <td class="d-none "> <?php echo $item->OBRA;?> </td>
                            <td class="d-none "> <?php echo $item->CATEGORIA; ?> </td>
                            <td class="d-none "> <?php echo $item->SUBCATEGORIA;?> </td>
                            <td class="d-none "> <?php echo $item->MODELODENEGOCIO;?> </td>
                            <td class="d-none "> <?php echo $item->FLUJO;?> </td>
                            <td class="d-none "> <?php echo $item->LLAVE;?> </td>
                            <td class="d-none "> <?php echo $item->FECHACORRECTA;?> </td>
                            <td class="d-none "> <?php echo $item->LLAVEEDOSDECUENTA; ?> </td>
                            <td class="d-none "> <?php echo $item->CLAVE;?> </td>
                            <td class="d-none "> <?php echo $item->METODODEPAGO;?> </td>
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

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap5.min.js"></script>
    <script src="js/script.js"></script>
    
    <script>
        function generarListaDesplegable(idTabla) {
            const table = document.getElementById(idTabla);
            const dropdownContainer = document.getElementById("listaDesplegable");
            const columns = table.rows[0].cells;

            const dropdown = document.createElement("div");
            dropdown.className = "btn-group";
            const button = document.createElement("button");
            button.type = "button";
            button.className = "btn btn-secondary dropdown-toggle";
            button.setAttribute("data-bs-toggle", "dropdown");
            button.innerHTML = "Mostrar Columnas";
            dropdown.appendChild(button);

            const dropdownMenu = document.createElement("ul");
            dropdownMenu.className = "dropdown-menu";

            for (let i = 0; i < columns.length; i++) {
                const columnText = columns[i].textContent;
                const li = document.createElement("li");
                const checkbox = document.createElement("input");
                checkbox.type = "checkbox";
                checkbox.id = "check" + i;
                checkbox.className = "column-checkbox";
                checkbox.checked = (i <= 5 || i >= columns.length - 2);
                const label = document.createElement("label");
                label.htmlFor = "check" + i;
                label.textContent = columnText;
                li.appendChild(checkbox);
                li.appendChild(label);
                dropdownMenu.appendChild(li);
            }

            dropdown.appendChild(dropdownMenu);
            dropdownContainer.appendChild(dropdown);
        }

        $(document).ready(function() {
            generarListaDesplegable("tabla");

            $(".column-checkbox").change(function() {
                const column = $(this).attr("id").replace("check", "");
                const isChecked = $(this).is(":checked");
                const $th = $("#tabla th:eq(" + column + ")");
                const $td = $("#tabla td:nth-child(" + (parseInt(column) + 1) + ")");
                if (isChecked) {
                    $th.removeClass("d-none");
                    $td.removeClass("d-none");
                } else {
                    $th.addClass("d-none");
                    $td.addClass("d-none");
                }
            });
        });
    </script>
    
  </body>
</html>
