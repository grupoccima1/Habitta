<?php include "./header.php"; ?>
<?php
require_once "./../clases/Conexion.php";
  require_once "./../clases/crud.php";
  $crud = new Crud();
  $datos = $crud->mostrarDatosflujo();
?>


<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">
                <h2>Registro</h2>
                <!-- <a href="./agregar.php" class="btn btn-primary">
                Agregar registro 
                </a> -->
                <a href="./../index.php" class="btn btn-outline-info">
                    Regresar
                </a>
                <hr>
                <table class="table table-sm table-hover table-bordered" id="tabla">
                    <thead>
                        <th class="th__texto" style="text-align:center;">Llave</th>                        
                        <th class="th__texto" style="text-align:center;">Fecha</th>
                    </thead>
                    <tbody>

                        <?php
                          foreach($datos as $item) {
                        ?>
                        <tr>
                          <td class="text-center"> <?php echo $item->LLAVE; ?> </td>
                          <td class="text-center"> <?php echo $item->FECHA;?> </td>
                        </tr>
                          <?php } ?> 

                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
</div>

<script>
  var table = document.querySelector("#tabla");

  var dataTale = new DataTable(table);

</script>

<?php include "./script.php"; ?>