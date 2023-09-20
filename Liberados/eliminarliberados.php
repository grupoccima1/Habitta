<?php 
   
    include "../clases/Conexion.php";
    include "./../Liberados/crud_liberados.php";
    include "../header.php";
    $crudliberados = new crudliberados();
    $id = $_POST['id'];
    $datos = $crudliberados -> obtenerDocumentoLiberados($id);
?>

<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../liberados.php" class="btn btn-outline-info">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                <div class="col">
                    <h2 class="mb-3 fs-4 text-center">Eliminar Registro</h2>
                    <table class="table table-bordered">
                        <thead>
                            <th class="th__texto text-center">Llave</th>
                            <th class="th__texto text-center">Lote</th>
                            <th class="th__texto text-center">Condominio</th>
                            <th class="th__texto text-center">Cluster</th>
                            <th class="th__texto text-center">Desarrollo</th>
                            <th class="th__texto text-center">Apartado telegram</th>
                            <th class="th__texto text-center">Cliente</th>
                            <th class="th__texto text-center">Rfc</th>
                            <th class="th__texto text-center">Idcif</th>
                            <th class="th__texto text-center">Uso de cfdi</th>
                            <th class="th__texto text-center">Razon social</th>
                            <th class="th__texto text-center">Domicilio fiscal</th>
                            <th class="th__texto text-center">Telefono</th>
                            <th class="th__texto text-center">Correo</th>
                            <th class="th__texto text-center">M2</th>
                            <th class="th__texto text-center">Total operacion</th>
                            <th class="th__texto text-center">Enganche</th>
                            <th class="th__texto text-center">Financiamiento</th>
                            <th class="th__texto text-center">Firma contrato</th>
                            <th class="th__texto text-center">Fin corrida</th>
                            <th class="th__texto text-center">Total mensualidades</th>
                            <th class="th__texto text-center">No 1er mensualidad</th>
                            <th class="th__texto text-center">1er mensualidad</th>
                            <th class="th__texto text-center">No 2da mensualidad</th>
                            <th class="th__texto text-center">2da mensualidad</th>
                            <th class="th__texto text-center">No 3ra mensualidad</th>
                            <th class="th__texto text-center">3er mensualidad</th>
                            <th class="th__texto text-center">Tipo de interes</th>
                            <th class="th__texto text-center">Mensualidad de entrega</th>
                            <th class="th__texto text-center">Inicio corrida</th>
                            <th class="th__texto text-center">Fecha primer abono</th>
                            <th class="th__texto text-center">Pagado</th>
                            <th class="th__texto text-center">Deuda</th>
                            <th class="th__texto text-center">Fecha Entrega Lote</th>
                            <th class="th__texto text-center">Estatus cm</th>
                            <th class="th__texto text-center">Link sat</th>
                            <th class="th__texto text-center">Notas de pagos</th>
                            <th class="th__texto text-center">Abono referido</th>
                            <th class="th__texto text-center">Estatus</th>
                            <th class="th__texto text-center">Motivo estatus</th>
                            <th class="th__texto text-center">Resultado</th>
                            <th class="th__texto text-center">Fecha de liberacion</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"> <?php echo $datos->LLAVE; ?> </td>
                                <td class="text-center"> <?php echo $datos->LOTE;?> </td>
                                <td class="text-center"> <?php echo $datos->CONDOMINIO;?> </td>
                                <td class="text-center"> <?php echo $datos->CLUSTER; ?> </td>
                                <td class="text-center"> <?php echo $datos->DESARROLLO;?> </td>
                                <td class="text-center"> <?php echo $datos->APARTADOTELEGRAM;?> </td>
                                <td class="text-center"> <?php echo $datos->CLIENTE;?></td>
                                <td class="text-center"> <?php echo $datos->RFC;?> </td>
                                <td class="text-center"> <?php echo $datos->IDCIF;?> </td>
                                <td class="text-center"> <?php echo $datos->USO_CFDI;?> </td>
                                <td class="text-center"> <?php echo $datos->RAZON_SOCIAL;?> </td>
                                <td class="text-center"> <?php echo $datos->DOMICILIO_FISCAL;?> </td>
                                <td class="text-center"> <?php echo $datos->TELEFONO;?> </td>
                                <td class="text-center"> <?php echo $datos->CORREO;?> </td>
                                <td class="text-center"> <?php echo $datos->M2; ?> </td>
                                <td class="text-center"> <?php echo $datos->TOTAL_OPERACION;?> </td>
                                <td class="text-center"> <?php echo $datos->ENGANCHE;?> </td>
                                <td class="text-center"> <?php echo $datos->FINANCIAMIENTO;?> </td>
                                <td class="text-center"> <?php echo $datos->FIRMA_CONTRATO;?> </td>
                                <td class="text-center"> <?php echo $datos->FIN_CORRIDA;?> </td>
                                <td class="text-center"> <?php echo $datos->TOTAL_MENSUALIDADES; ?> </td>
                                <td class="text-center"> <?php echo $datos->NO_1ER_MENS;?> </td>
                                <td class="text-center"> <?php echo $datos->ER_MENSUALIDAD;?> </td>
                                <td class="text-center"> <?php echo $datos->NO_2DA_MENS;?> </td>
                                <td class="text-center"> <?php echo $datos->DA_MENSUALIDAD; ?> </td>
                                <td class="text-center"> <?php echo $datos->NO_3ER_MENS;?></td>
                                <td class="text-center"> <?php echo $datos->ER_MENSUALIDAD;?></td>
                                <td class="text-center"> <?php echo $datos->TIPO_DE_INTERES; ?> </td>
                                <td class="text-center"> <?php echo $datos->MENS_ENTREGA;?> </td>
                                <td class="text-center"> <?php echo $datos->INICIO_CORRIDA;?> </td>
                                <td class="text-center"> <?php echo $datos->FECHA_PRIMER_ABONO; ?> </td>
                                <td class="text-center"> <?php echo $datos->PAGADO;?> </td>
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
                            <form action="./eliminar_liberados.php" method="POST">
                                <input type="text" name="id" value="<?php echo $datos->_id;?>" hidden>
                                <button class="btn btn-danger">
                                    Eliminar
                                </button>
                            </form>
                            <a href="../liberados.php" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php 