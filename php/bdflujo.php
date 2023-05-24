<?php include "./header.php"; ?>
<?php
require_once "./../clases/Conexion.php";
  require_once "./../clases/crud.php";
  $crud = new Crud();
  $datos = $crud->mostrarDatosbdflujo();
?>


<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">
                <h2>BD flujo</h2>
                <!-- <a href="./agregar.php" class="btn btn-primary">
                Agregar registro 
                </a> -->
                <a href="./../index.php" class="btn btn-outline-info">
                    Regresar
                </a>
                <hr>
                <table class="table table-sm table-hover table-bordered" id="tabla">
                    <thead>
                        <th>Llave</th>                        
                        <th>Fecha</th>
                        <th>Beneficiario</th>
                        <th>Ingreso</th>
                        <th>Egreso</th>
                        <th>Real</th>
                        <th>Motivo</th>
                        <th>Origen</th>
                        <th>Categoria</th>
                        <th>Subcategoria</th>
                        <th>Flujo</th>
                    </thead>
                    <tbody>

                        <?php
                          foreach($datos as $item) {
                        ?>
                        <tr>
                          <td class="text-center"> <?php echo $item->LLAVE; ?> </td>
                          <td class="text-center"> <?php echo $item->FECHA;?> </td>
                          <td class="text-center"> <?php echo $item->BENEFICIARIO;?> </td>
                          <td class="text-center"> <?php echo $item->INGRESO; ?> </td>
                          <td class="text-center"> <?php echo $item->EGRESO;?> </td>
                          <td class="text-center"> <?php echo $item->REAL;?></td>
                          <td class="text-center"> <?php echo $item->MOTIVO;?></td>
                          <td class="text-center"> <?php echo $item->ORIGEN; ?> </td>
                          <td class="text-center"> <?php echo $item->CATEGORIA;?> </td>
                          <td class="text-center"> <?php echo $item->SUBCATEGORIA;?> </td>
                          <td class="text-center"> <?php echo $item->FLUJO;?> </td>
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