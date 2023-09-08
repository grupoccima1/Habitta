<?php 
   
    include "../clases/Conexion.php";
    include "./../Estados/crudestados.php";

    $crudestados = new crudestados();
    $id = $_POST['id'];

    $datos = $crudestados -> obtenerDocumentoEstados($id);
?>

<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">

                <a href="../estados.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Eliminar  Registro</h2>
                
                <table class="table table-bordered">
                    <thead>
                    <th class="th__texto" style="text-align:center;">Source name</th>
                    <th class="th__texto" style="text-align:center;">Periodo</th>                        
                        <th class="th__texto" style="text-align:center;">Fecha</th>
                        <th class="th__texto" style="text-align:center;">Saldo inicial</th>
                        <th class="th__texto" style="text-align:center;">Mensualidad</th>
                        <th class="th__texto" style="text-align:center;">Pagado</th>
                        <th class="th__texto" style="text-align:center;">Interes de financiamiento</th>
                        <th class="th__texto" style="text-align:center;">Abono a capital</th>
                        <th class="th__texto" style="text-align:center;">Saldo final</th>
                        <th class="th__texto" style="text-align:center;">Interes gen</th>
                        <th class="th__texto" style="text-align:center;">Interes int</th>
                        <th class="th__texto" style="text-align:center;">Interes acumulado mora</th> 
                        <th class="th__texto" style="text-align:center;">Interes neg</th>
                        <th class="th__texto" style="text-align:center;">Estatus</th>
                        <th class="th__texto" style="text-align:center;">Observacion</th>
                        <th class="th__texto" style="text-align:center;">Debe interes</th>
                        <th class="th__texto" style="text-align:center;">Fecha pago</th>                            
                        <th class="th__texto" style="text-align:center;">Indicador fecha</th>
                        <th class="th__texto" style="text-align:center;">Porcentaje de interes</th>
                        <th class="th__texto" style="text-align:center;">Llave 2</th>
                        <th class="th__texto" style="text-align:center;">Mensualidad de adeudo</th>
                        <th class="th__texto" style="text-align:center;">Calculo sobre</th>
                        <th class="th__texto" style="text-align:center;">Monto de interes moratorio</th>
                   
                        
                    </thead>
                    <tbody>
                        <tr>
                        <td class="text-center"> <?php echo $datos->SourceName;?> </td>
                          <td class="text-center"> <?php echo $datos->PERIODO; ?> </td>
                          <td class="text-center"> <?php echo $datos->FECHA;?> </td> 
                          <td class="text-center"> <?php echo $datos->SALDOINICIAL;?> </td>
                          <td class="text-center"> <?php echo $datos->MENSUALIDAD;?> </td>
                          <td class="text-center"> <?php echo $datos->PAGADO; ?> </td>
                          <td class="text-center"> <?php echo $datos->INTERESFINANCIAMIENTO;?> </td>
                          <td class="text-center"> <?php echo $datos->ABONO_CAPITAL;?></td>
                          <td class="text-center"> <?php echo $datos->SALDO_FINAL;?> </td>
                          <td class="text-center"> <?php echo $datos->INT_GEN;?> </td>
                          <td class="text-center"> <?php echo $datos->INT_INT;?> </td>
                         <td class="text-center"> <?php echo $datos->INT_ACUM_MORA;?> </td> 
                          <td class="text-center"> <?php echo $datos->INT_NEG;?> </td>
                          <td class="text-center"> <?php echo $datos->ESTATUS;?> </td>
                          <td class="text-center"> <?php echo $datos->OBSERVACION; ?> </td>
                          <td class="text-center"> <?php echo $datos->DEBE_INTERES;?> </td>
                          <td class="text-center"> <?php echo $datos->FECHA_PAGO;?> </td>
                          <td class="text-center"> <?php echo $datos->INDICADOR_FECHA;?> </td>
                          <td class="text-center"> <?php echo $datos->PORCENT_INT;?> </td>
                          <td class="text-center"> <?php echo $datos->LLAVE2;?> </td>
                          <td class="text-center"> <?php echo $datos->MENS_ADEU;?> </td>
                          <td class="text-center"> <?php echo $datos->CALC_SOBRE; ?> </td>
                          <td class="text-center"> <?php echo $datos->MONTO_INT_MOR;?> </td>
                            </tr>
                    </tbody>
                </table>
                <hr>
                <div class="aler alert-danger" role="alert">
                    <p>¿Estas seguro de eliminar este registro?</p>
                    <p>
                        Una vez eliminado no podras recuperarlo
                    </p>
                </div>
                <form action="./eliminar_estados.php" method="POST">
                    <input type="text" name="id" value="<?php echo $datos->_id;?>" hidden>
                    <button class="btn btn-danger">
                        Eliminar
                    </button>                
                </form>
            </div>
        </div>
    </div>
  </div>
</div>



<?php 