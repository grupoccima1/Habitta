<?php 
   
    include "../clases/Conexion.php";
    include "./../BaseMadre/crud_BaseMadre.php";

    $crud = new crudbasemadre();
    $id = $_POST['id'];

    $datos = $crud -> obtenerDocumentoMadre($id);
?>

<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../basemadre.php" class="btn btn-outline-info">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                <h2 class=" mb-3 fs-4 text-center">Eliminar Registro</h2>
                <table class="table table-bordered">
                    <thead>
                        <th class="th__texto" style="text-align:center;">Llave</th>                        
                        <th class="th__texto" style="text-align:center;">Lote</th>
                        <th class="th__texto" style="text-align:center;">Cliente</th>
                        <th class="th__texto" style="text-align:center;">Rfc</th>
                        <th class="th__texto" style="text-align:center;">Uso de cfdi</th>
                        <th class="th__texto" style="text-align:center;">Razon social</th>
                        <th class="th__texto" style="text-align:center;">Domicilio fiscal</th>
                        <th class="th__texto" style="text-align:center;">Telefono</th>
                        <th class="th__texto" style="text-align:center;">Correo</th>
                        <th class="th__texto" style="text-align:center;">M2</th>
                        <th class="th__texto" style="text-align:center;">Total operacion</th>                        
                        <th class="th__texto" style="text-align:center;">Enganche</th>
                        <th class="th__texto" style="text-align:center;">Financiamiento</th>
                        <th class="th__texto" style="text-align:center;">Firma contrato</th>
                        <th class="th__texto" style="text-align:center;">Fin corrida</th>
                        <th class="th__texto" style="text-align:center;">Total mensualidades</th>
                        <th class="th__texto" style="text-align:center;">No 1er mensualidad</th>
                        <th class="th__texto" style="text-align:center;">1er mensualidad</th>
                        <th class="th__texto" style="text-align:center;">No 2da mensualidad</th>
                        <th class="th__texto" style="text-align:center;">2da mensualidad</th>
                        <th class="th__texto" style="text-align:center;">No 3ra mensualidad</th>
                        <th class="th__texto" style="text-align:center;">3er mensualidad</th>
                        <th class="th__texto" style="text-align:center;">Tipo de interes</th>
                        <th class="th__texto" style="text-align:center;">Mensualidad de entrega</th>
                        <th class="th__texto" style="text-align:center;">Inicio corrida</th>
                        <th class="th__texto" style="text-align:center;">Fecha primer abono</th>
                        <!-- <th class="th__texto" style="text-align:center;">Pagado</th> -->
                        <th class="th__texto" style="text-align:center;">Deuda</th>
                        <th class="th__texto" style="text-align:center;">Fecha Entrega Lote</th>
                        <th class="th__texto" style="text-align:center;">Estatus cm</th>
                        <th class="th__texto" style="text-align:center;">Link sat</th>
                        <th class="th__texto" style="text-align:center;">Notas de pagos</th>
                        <th class="th__texto" style="text-align:center;">Abono referido</th>
                        <th class="th__texto" style="text-align:center;">Estatus</th>
                        <th class="th__texto" style="text-align:center;">Motivo estatus</th>
                        <th class="th__texto" style="text-align:center;">Resultado</th>
                        <th class="th__texto" style="text-align:center;">Fecha de Liberación</th>
                        <th class="th__texto" style="text-align:center;">Condominio</th>
                        <th class="th__texto" style="text-align:center;">Cluster</th>
                        <th class="th__texto" style="text-align:center;">Desarrollo</th>
                        <th class="th__texto" style="text-align:center;">Apartado telegram</th>
                        <th class="th__texto" style="text-align:center;">Primer Mensualidad</th>
                        <!-- <th class="th__texto" style="text-align:center;">Idcif</th> -->
                    </thead>
                    <tbody>
                        <tr>
                          <td class="text-center"> <?php echo $datos->LLAVE;?> </td>
                          <td class="text-center"> <?php echo $datos->LOTE;?> </td>
                          <td class="text-center"> <?php echo $datos->CLIENTE;?></td>
                          <td class="text-center"> <?php echo $datos->RFC;?> </td>
                          <!-- <td class="text-center"> <?php echo $datos->IDCIF;?> </td>  -->
                          <td class="text-center"> <?php echo $datos->USO_CFDI;?> </td>
                          <td class="text-center"> <?php echo $datos->RAZON_SOCIAL;?> </td>
                          <td class="text-center"> <?php echo $datos->DOMICILIO_FISCAL;?> </td>
                          <td class="text-center"> <?php echo $datos->TELEFONO;?> </td>
                          <td class="text-center"> <?php echo $datos->CORREO;?> </td>
                          <td class="text-center"> <?php echo $datos->M2; ?> </td>
                          <td class="text-center"> <?php echo $datos->TOTAL_OPERACION; ?> </td>
                          <td class="text-center"> <?php echo $datos->ENGANCHE;?> </td>
                          <td class="text-center"> <?php echo $datos->FINANCIAMIENTO;?> </td>
                          <td class="text-center"> <?php echo $datos->FIRMA_CONTRATO;?> </td>
                          <td class="text-center"> <?php echo $datos->FIN_CORRIDA;?> </td>
                          <td class="text-center"> <?php echo $datos->TOTAL_MENSUALIDADES; ?> </td>
                          <td class="text-center"> <?php echo $datos->NO_1ER_MENS;?> </td>
                          <td class="text-center"> <?php echo $datos->PRIMERA_MENSUALIDAD;?> </td>
                          <td class="text-center"> <?php echo $datos->NO_2DA_MENS;?> </td>
                          <td class="text-center"> <?php echo $datos->SEGUNDA_MENSUALIDAD; ?> </td>
                          <td class="text-center"> <?php echo $datos->NO_3ER_MENS;?></td>
                          <td class="text-center"> <?php echo $datos->TERCER_MENSUALIDAD;?></td>
                          <td class="text-center"> <?php echo $datos->TIPO_DE_INTERES; ?> </td>
                          <td class="text-center"> <?php echo $datos->MENS_ENTREGA;?> </td>
                          <td class="text-center"> <?php echo $datos->INICIO_CORRIDA;?> </td>
                          <td class="text-center"> <?php echo $datos->FECHA_PRIMER_ABONO; ?> </td>
                          <!-- <td class="text-center"> <?php echo $datos->PAGADO;?> </td>  -->
                          <td class="text-center"> <?php echo $datos->DEUDA;?> </td>
                          <td class="text-center"> <?php echo $datos->FECHA_ENTREGA_LOTE; ?> </td>
                          <td class="text-center"> <?php echo $datos->ESTATUS_CM;?> </td>
                          <td class="text-center"> <?php echo $datos->LINK_SAT;?></td>
                          <td class="text-center"> <?php echo $datos->NOTAS_DE_PAGOS;?></td>
                          <td class="text-center"> <?php echo $datos->BONO_REFERIDO; ?> </td>
                          <td class="text-center"> <?php echo $datos->ESTATUS;?> </td>
                          <td class="text-center"> <?php echo $datos->MOTIVO_ESTATUS;?> </td>
                          <td class="text-center"> <?php echo $datos->RESULTADO;?> </td>
                          <td class="text-center"> <?php echo $datos->FECHADELIBERACION;?> </td>
                          <td class="text-center"> <?php echo $datos->CONDOMINIO;?> </td>
                          <td class="text-center"> <?php echo $datos->CLUSTER; ?> </td>
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
                        <form class="me-2" action="./eliminar_basemadre.php" method="POST">
                            <input type="text" name="id" value="<?php echo $datos->_id;?>" hidden>
                            <button class="btn btn-danger">
                                Eliminar
                            </button>
                        </form>
                        <a href="../basemadre.php" class="btn btn-secondary">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php