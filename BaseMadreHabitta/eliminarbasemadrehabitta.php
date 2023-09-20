<?php 
   
    include "../clases/Conexion.php";
    include "./../BaseMadreHabitta/crudbasemadrehabitta.php";
    include "../header.php";
    $crudbasemadrehabitta = new crudbasemadrehabitta();
    $id = $_POST['id'];
    $datos = $crudbasemadrehabitta -> obtenerDocumentoBaseMadreHabitta($id);
?>

<div class="container">
<div class="row">
<div class="card mt-4">
    <div class="card-header">
        <a href="../acumuladosherpa.php" class="btn btn-outline-info">
            Regresar
        </a>
    </div>
  <div class="card-body">
                <h2 class="mb-3 fs-4 text-center">Eliminar  Registro</h2>
                <table class="table table-bordered">
                    <thead>
                        <th class="th__texto text-center">Llave</th>                        
                        <th class="th__texto text-center">LOTE</th>
                        <th class="th__texto text-center">CLIENTE</th>
                        <th class="th__texto text-center">RFC</th>
                        <th class="th__texto text-center">USO_CFDI</th>
                        <th class="th__texto text-center">RAZON_SOCIAL</th>
                        <th class="th__texto text-center">DOMICILIO_FISCAL</th>
                        <th class="th__texto text-center">TELEFONO</th>
                        <th class="th__texto text-center">CORREO</th>
                        <th class="th__texto text-center">M2</th>
                        <th class="th__texto text-center">TOTAL_OPERACION</th>
                        <th class="th__texto text-center">ENGANCHE</th>
                        <th class="th__texto text-center">FINANCIAMIENTO</th>
                        <th class="th__texto text-center">FIRMA_CONTRATO</th>
                        <th class="th__texto text-center">FIN_CORRIDA</th>
                        <th class="th__texto text-center">TOTAL_MENSUALIDADES</th>
                        <th class="th__texto text-center">NO_1ER_MENS</th>
                        <th class="th__texto text-center">PRIMERA_MENSUALIDAD</th>                        
                        <th class="th__texto text-center">NO_2DA_MENS</th>
                        <th class="th__texto text-center">SEGUNDA_MENSUALIDAD</th>
                        <th class="th__texto text-center">NO_3ER_MENS</th>
                        <th class="th__texto text-center">TERCER_MENSUALIDAD</th>
                        <th class="th__texto text-center">TIPO_DE_INTERES</th>
                        <th class="th__texto text-center">MENS_ENTREGA</th>
                        <th class="th__texto text-center">INICIO_CORRIDA</th>
                        <th class="th__texto text-center">FECHA_PRIMER_ABONO</th>
                        <th class="th__texto text-center">DEUDA</th>
                        <th class="th__texto text-center">FECHA_ENTREGA_LOTE</th>
                        <th class="th__texto text-center">ESTATUS_CM</th>
                        <th class="th__texto text-center">LINK_SAT</th>
                        <th class="th__texto text-center">NOTAS_DE_PAGOS</th>
                        <th class="th__texto text-center">BONO_REFERIDO</th>
                        <th class="th__texto text-center">ESTATUS</th>
                        <th class="th__texto text-center">MOTIVO_ESTATUS</th>
                        <th class="th__texto text-center">RESULTADO</th>
                        <th class="th__texto text-center">FECHADELIBERACION</th>
                        <th class="th__texto text-center">CONDOMINIO</th>
                        <th class="th__texto text-center">CLUSTER</th>
                        <th class="th__texto text-center">DESARROLLO</th>
                        <th class="th__texto text-center">APARTADO_TELEGRAM</th>
                        <th class="th__texto text-center">PRIMER_MENSUALIDAD</th>
                    </thead>
                    <tbody>
                        <tr>
                         <td class="text-center"> <?php echo $datos->LLAVE; ?> </td>  
                          <td class="text-center"> <?php echo $datos->LOTE;?> </td>
                          <td class="text-center"> <?php echo $datos->CLIENTE;?> </td>
                          <td class="text-center"> <?php echo $datos->RFC;?> </td>
                          <td class="text-center"> <?php echo $datos->USO_CFDI; ?> </td>
                          <td class="text-center"> <?php echo $datos->RAZON_SOCIAL;?> </td>
                          <td class="text-center"> <?php echo $datos->DOMICILIO_FISCAL;?> </td>
                          <td class="text-center"> <?php echo $datos->TELEFONO;?></td>
                          <td class="text-center"> <?php echo $datos->CORREO;?> </td>
                          <td class="text-center"> <?php echo $datos->M2;?> </td>
                          <td class="text-center"> <?php echo $datos->TOTAL_OPERACION;?> </td>
                          <td class="text-center"> <?php echo $datos->ENGANCHE;?> </td>
                          <td class="text-center"> <?php echo $datos->FINANCIAMIENTO;?> </td>
                          <td class="text-center"> <?php echo $datos->FIRMA_CONTRATO;?> </td>
                          <td class="text-center"> <?php echo $datos->FIN_CORRIDA;?> </td>
                          <td class="text-center"> <?php echo $datos->TOTAL_MENSUALIDADES;?> </td>
                          <td class="text-center"> <?php echo $datos->NO_1ER_MENS; ?> </td>
                          <td class="text-center"> <?php echo $datos->PRIMERA_MENSUALIDAD;?> </td>
                          <td class="text-center"> <?php echo $datos->NO_2DA_MENS; ?> </td>
                          <td class="text-center"> <?php echo $datos->SEGUNDA_MENSUALIDAD;?> </td>
                          <td class="text-center"> <?php echo $datos->NO_3ER_MENS; ?> </td>
                          <td class="text-center"> <?php echo $datos->TERCER_MENSUALIDAD;?> </td>
                          <td class="text-center"> <?php echo $datos->TIPO_DE_INTERES;?> </td>
                          <td class="text-center"> <?php echo $datos->MENS_ENTREGA;?> </td>
                          <td class="text-center"> <?php echo $datos->INICIO_CORRIDA;?> </td>
                          <td class="text-center"> <?php echo $datos->FECHA_PRIMER_ABONO; ?> </td>
                          <td class="text-center"> <?php echo $datos->DEUDA;?> </td>
                          <td class="text-center"> <?php echo $datos->FECHA_ENTREGA_LOTE;?> </td>
                          <td class="text-center"> <?php echo $datos->ESTATUS_CM;?> </td>
                          <td class="text-center"> <?php echo $datos->LINK_SAT;?></td>
                          <td class="text-center"> <?php echo $datos->NOTAS_DE_PAGOS;?></td>
                          <td class="text-center"> <?php echo $datos->BONO_REFERIDO; ?> </td>
                          <td class="text-center"> <?php echo $datos->ESTATUS;?> </td>
                          <td class="text-center"> <?php echo $datos->MOTIVO_ESTATUS;?> </td>
                          <td class="text-center"> <?php echo $datos->RESULTADO;?> </td>
                          <td class="text-center"> <?php echo $datos->FECHADELIBERACION;?> </td>
                          <td class="text-center"> <?php echo $datos->CONDOMINIO;?> </td>
                          <td class="text-center"> <?php echo $datos->CLUSTER;?> </td>
                          <td class="text-center"> <?php echo $datos->DESARROLLO;?> </td>
                          <td class="text-center"> <?php echo $datos->APARTADO_TELEGRAM;?> </td>
                          <td class="text-center"> <?php echo $datos->PRIMER_MENSUALIDAD;?> </td>
                            </tr>
                    </tbody>
                </table>
                <hr>
                <div class="aler alert-danger" role="alert">
                    <h3 class="text-danger fs-5 text-center">¿Estas seguro de eliminar este registro?</h3>
                    <p>
                        Una vez eliminado no podras recuperarlo
                    </p>
                    <div class="d-flex justify-content-end">
                        <form class="me-2" action="./eliminar_basemadrehabitta.php" method="POST">
                            <input type="text" name="id" value="<?php echo $datos->_id;?>" hidden>
                            <button class="btn btn-danger">
                                Eliminar
                            </button>                
                        </form>
                        <a href="../basemadrehabitta.php" class="btn btn-secondary">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>



<?php 