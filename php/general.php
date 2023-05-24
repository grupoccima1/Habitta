<?php include "./header.php"; ?>
<?php
require_once "./../clases/Conexion.php";
  require_once "./../clases/crud.php";
  $crud = new Crud();
  $datos = $crud->mostrarDatosgeneral();
?>


<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">
                <h2>General</h2>
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
                        <th>Cliente</th>
                        <th>Rfc</th>
                        <th>Idcif</th>
                        <th>Uso de cfdi</th>
                        <th>Razon social</th>
                        <th>Domicilio fiscal</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>M2</th>
                        <th>Total operacion</th>                        
                        <th>Enganche</th>
                        <th>Financiamiento</th>
                        <th>Firma contrato</th>
                        <th>Fin corrida</th>
                        <th>Total mensualidades</th>
                        <th>No 1er mensualidad</th>
                        <th>1er mensualidad</th>
                        <th>No 2da mensualidad</th>
                        <th>2da mensualidad</th>
                        <th>No 3ra mensualidad</th>
                        <th>3er mensualidad</th>
                        <th>Tipo de interes</th>
                        <th>Mensualidad de entrega</th>
                        <th>Inicio corrida</th>
                        <th>Fecha primer abono</th>
                        <th>Pagado</th>
                        <th>Deuda</th>
                        <th>Fecha Entrega Lote</th>
                        <th>Estatus cm</th>
                        <th>Link sat</th>
                        <th>Notas de pagos</th>
                        <th>Abono referido</th>
                        <th>Estatus</th>
                        <th>Motivo estatus</th>
                        <th>Resultado</th>
                        <th>Fecha de liberacion</th>
                    </thead>
                    <tbody>

                        <?php
                          foreach($datos as $item) {
                        ?>
                        <tr>
                          <td class="text-center"> <?php echo $item->LLAVE; ?> </td>
                          <td class="text-center"> <?php echo $item->LOTE;?> </td>
                          <td class="text-center"> <?php echo $item->CLIENTE;?></td>
                          <td class="text-center"> <?php echo $item->RFC;?> </td>
                          <td class="text-center"> <?php echo $item->IDCIF;?> </td>
                          <td class="text-center"> <?php echo $item->USO_CFDI;?> </td>
                          <td class="text-center"> <?php echo $item->RAZON_SOCIAL;?> </td>
                          <td class="text-center"> <?php echo $item->DOMICILIO_FISCAL;?> </td>
                          <td class="text-center"> <?php echo $item->TELEFONO;?> </td>
                          <td class="text-center"> <?php echo $item->CORREO;?> </td>
                          <td class="text-center"> <?php echo $item->M2; ?> </td>
                          <td class="text-center"> <?php echo $item->TOTAL_OPERACION;?> </td>
                          <td class="text-center"> <?php echo $item->ENGANCHE;?> </td>
                          <td class="text-center"> <?php echo $item->FINANCIAMIENTO;?> </td>
                          <td class="text-center"> <?php echo $item->FIRMA_CONTRATO;?> </td>
                          <td class="text-center"> <?php echo $item->FIN_CORRIDA;?> </td>
                          <td class="text-center"> <?php echo $item->TOTAL_MENSUALIDADES; ?> </td>
                          <td class="text-center"> <?php echo $item->ER_MENSUALIDA;?> </td>
                          <td class="text-center"> <?php echo $item->NO_1ER_MENS;?> </td>
                          <td class="text-center"> <?php echo $item->DA_MENSUALIDAD; ?> </td>
                          <td class="text-center"> <?php echo $item->NO_2DA_MENS;?> </td>
                          <td class="text-center"> <?php echo $item->ER_MENSUALIDAD;?></td>
                          <td class="text-center"> <?php echo $item->NO_3ER_MENS;?></td>
                          <td class="text-center"> <?php echo $item->TIPO_DE_INTERES; ?> </td>
                          <td class="text-center"> <?php echo $item->MENS_ENTREGA;?> </td>
                          <td class="text-center"> <?php echo $item->INICIO_CORRIDA;?> </td>
                          <td class="text-center"> <?php echo $item->FECHA_PRIMER_ABONO; ?> </td>
                          <td class="text-center"> <?php echo $item->PAGADO;?> </td>
                          <td class="text-center"> <?php echo $item->DEUDA;?> </td>
                          <td class="text-center"> <?php echo $item->FECHA_ENTREGA_LOTE; ?> </td>
                          <td class="text-center"> <?php echo $item->ESTATUS_CM;?> </td>
                          <td class="text-center"> <?php echo $item->LINK_SAT;?></td>
                          <td class="text-center"> <?php echo $item->NOTAS_DE_PAGOS;?></td>
                          <td class="text-center"> <?php echo $item->BONO_REFERIDO; ?> </td>
                          <td class="text-center"> <?php echo $item->ESTATUS;?> </td>
                          <td class="text-center"> <?php echo $item->MOTIVO_ESTATUS;?> </td>
                          <td class="text-center"> <?php echo $item->RESULTADO;?> </td>
                          <td class="text-center"> <?php echo $item->FECHADELIBERACION;?> </td>
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