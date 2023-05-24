<?php include "./header.php"; ?>
<?php
require_once "./../clases/Conexion.php";
  require_once "./../clases/crud.php";
  $crud = new Crud();
  $datos = $crud->mostrarDatos();
?>


<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">
                <h2>Validador</h2>
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
                        <th>Lote</th>
                        <th>Condominio</th>
                        <th>Cluster</th>
                        <th>Desarrollo</th>
                        <th>Cliente</th>
                        <th>Tipo de interes</th>
                        <th>M2</th>
                        <th>Total operacion</th>
                        <th>Enganche</th>
                        <th>Financiamiento</th>
                        <th>Firma contrato</th>
                        <th>Inicio corrida</th>
                        <th>Total mensualidades</th>                        
                        <th>1er mensualidad</th>
                        <th>No 1er mensualidad</th>
                        <th>2da mensualidad</th>
                        <th>No 2da mensualidad</th>
                        <th>3er mensualidad</th>
                        <th>No 3er mensualidad</th>
                        <th>Estatus</th>
                        <th>Mens entrega</th>
                        <th>Resultado</th>
                    </thead>
                    <tbody>

                        <?php
                          foreach($datos as $item) {
                        ?>
                        <tr>
                          <td class="text-center"> <?php echo $item->LLAVE; ?> </td>
                          <td class="text-center"> <?php echo $item->LOTE;?> </td>
                          <td class="text-center"> <?php echo $item->CONDOMINIO;?> </td>
                          <td class="text-center"> <?php echo $item->CLUSTER; ?> </td>
                          <td class="text-center"> <?php echo $item->DESARROLLO;?> </td>
                          <td class="text-center"> <?php echo $item->CLIENTE;?></td>
                          <td class="text-center"> <?php echo $item->TIPO_DE_INTERES;?></td>
                          <td class="text-center"> <?php echo $item->M2; ?> </td>
                          <td class="text-center"> <?php echo $item->TOTAL_OPERACION;?> </td>
                          <td class="text-center"> <?php echo $item->ENGANCHE;?> </td>
                          <td class="text-center"> <?php echo $item->FINANCIAMIENTO;?> </td>
                          <td class="text-center"> <?php echo $item->FIRMA_CONTRATO;?> </td>
                          <td class="text-center"> <?php echo $item->INICIO_CORRIDA;?> </td>
                          <td class="text-center"> <?php echo $item->TOTAL_MENSUALIDADES; ?> </td>
                          <td class="text-center"> <?php echo $item->ER_MENSUALIDA;?> </td>
                          <td class="text-center"> <?php echo $item->NO_1ER_MENS;?> </td>
                          <td class="text-center"> <?php echo $item->DA_MENSUALIDAD; ?> </td>
                          <td class="text-center"> <?php echo $item->NO_2DA_MENS;?> </td>
                          <td class="text-center"> <?php echo $item->ERA_MENSUALIDAD;?></td>
                          <td class="text-center"> <?php echo $item->NO_3ER_MENS;?></td>
                          <td class="text-center"> <?php echo $item->ESTATUS; ?> </td>
                          <td class="text-center"> <?php echo $item->MENS_ENTREGA;?> </td>
                          <td class="text-center"> <?php echo $item->RESULTADO;?> </td>
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