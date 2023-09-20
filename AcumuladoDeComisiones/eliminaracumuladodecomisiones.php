<?php 
   
    include "../clases/Conexion.php";
    include "./../AcumuladoDeComisiones/crudacumuladodecomisiones.php";
    include "../header.php";
    $crudacumuladodecomisiones = new crudacumuladodecomisiones();
    $id = $_POST['id'];

    $datos = $crudacumuladodecomisiones -> obtenerDocumentoAcumuladoComisiones($id);
?>
<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../acumuladoComisiones.php" class="btn btn-outline-info">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                <h2 class="mb-3 fs-4 text-center"> Eliminar Registro</h2>
                <table class="table table-bordered">
                    <thead>
                        <th class="th__texto text-center">Llave</th>
                        <th class="th__texto text-center">FECHA_DE_INGRESO</th>
                        <th class="th__texto text-center">LOTE</th>
                        <th class="th__texto text-center">CONDOMINIO</th>
                        <th class="th__texto text-center">CLUSTER</th>
                        <th class="th__texto text-center">DESARROLLO</th>
                        <th class="th__texto text-center">PUESTO</th>
                        <th class="th__texto text-center">NOMBRE_CORRECTO</th>
                        <th class="th__texto text-center">TOTAL_DE_LA_VENTA</th>
                        <!-- <th class="th__texto text-center">COMISIONISTA</th> -->
                        <th class="th__texto text-center">ENGANCHE</th>
                        <th class="th__texto text-center">PCOMISION</th>
                        <th class="th__texto text-center">TOTAL_COMISION</th>
                        <th class="th__texto text-center">DESCUENTO</th>
                        <th class="th__texto text-center">DESC</th>
                        <th class="th__texto text-center">A_PAGAR_EXTERNOS</th>
                        <th class="th__texto text-center">SUBTOTAL</th>
                        <th class="th__texto text-center">IVA</th>
                        <th class="th__texto text-center">RETENCIONES_DE_IVA</th>
                        <th class="th__texto text-center">RETENCIONES_ISR</th>
                        <th class="th__texto text-center">TOTAL</th>
                        <th class="th__texto text-center">PAGO</th>
                        <th class="th__texto text-center">NOTAS</th>
                        <th class="th__texto text-center">PAGADO</th>
                        <th class="th__texto text-center">METODO_DE_PAGO</th>
                        <th class="th__texto text-center">FECHA_PAGADA</th>
                        <th class="th__texto text-center">SEMANA_PAGADA</th>
                        <th class="th__texto text-center">SEMANA</th>
                        <th class="th__texto text-center">X_TIPO_DE_REGIMEN</th>
                        <th class="th__texto text-center">CUENTA</th>
                        <th class="th__texto text-center">MOTIVO_DE_DESCUENTO</th>
                        <th class="th__texto text-center">ESTATUS</th>
                        <th class="th__texto text-center">LOTE_ANTERIOR</th>
                        <th class="th__texto text-center">TIPO</th>

                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"> <?php echo $datos->LLAVE; ?> </td>
                            <td class="text-center"> <?php echo $datos->FECHA_DE_INGRESO;?> </td>
                            <td class="text-center"> <?php echo $datos->LOTE;?> </td>
                            <td class="text-center"> <?php echo $datos->CONDOMINIO;?> </td>
                            <td class="text-center"> <?php echo $datos->CLUSTER;?> </td>
                            <td class="text-center"> <?php echo $datos->DESARROLLO; ?> </td>
                            <td class="text-center"> <?php echo $datos->PUESTO;?> </td>
                            <td class="text-center"> <?php echo $datos->NOMBRE_CORRECTO;?> </td>
                            <td class="text-center"> <?php echo $datos->lTOTA_DE_LAVENTA;?></td>
                            <td class="text-center"> <?php echo $datos->ENGANCHE;?> </td>
                            <td class="text-center"> <?php echo $datos->PCOMISION;?> </td>
                            <td class="text-center"> <?php echo $datos->TOTAL_COMISION;?> </td>
                            <td class="text-center"> <?php echo $datos->DESCUENTO;?> </td>
                            <td class="text-center"> <?php echo $datos->DESC;?> </td>
                            <td class="text-center"> <?php echo $datos->APAGAR_EXTERNOS;?> </td>
                            <td class="text-center"> <?php echo $datos->SUBTOTAL;?> </td>
                            <td class="text-center"> <?php echo $datos->IVA;?> </td>
                            <td class="text-center"> <?php echo $datos->RETENCIONES_DE_IVA; ?> </td>
                            <td class="text-center"> <?php echo $datos->RETENCIONES_ISR;?> </td>
                            <td class="text-center"> <?php echo $datos->TOTAL;?> </td>
                            <td class="text-center"> <?php echo $datos->PAGO;?> </td>
                            <td class="text-center"> <?php echo $datos->NOTAS;?> </td>
                            <td class="text-center"> <?php echo $datos->PAGADO;?> </td>
                            <td class="text-center"> <?php echo $datos->METODO_DE_PAGO; ?> </td>
                            <td class="text-center"> <?php echo $datos->FECHA_PAGADA;?> </td>
                            <td class="text-center"> <?php echo $datos->SEMANA_PAGADA; ?> </td>
                            <td class="text-center"> <?php echo $datos->SEMANA;?> </td>
                            <td class="text-center"> <?php echo $datos->X_TIPO_DE_REGIMEN;?></td>
                            <td class="text-center"> <?php echo $datos->CUENTA;?></td>
                            <td class="text-center"> <?php echo $datos->MOTIVO_DE_DESCUENTO; ?> </td>
                            <td class="text-center"> <?php echo $datos->ESTATUS;?> </td>
                            <td class="text-center"> <?php echo $datos->LOTE_ANTERIOR;?> </td>
                            <td class="text-center"> <?php echo $datos->TIPO;?> </td>
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
                        <form class="me-2" action="./eliminar_acumuladodecomisiones.php" method="POST">
                            <input type="text" name="id" value="<?php echo $datos->_id;?>" hidden>
                            <button class="btn btn-danger">
                                Eliminar
                            </button>
                        </form>
                        <a class="btn btn-secondary" href="../acumuladoComisiones.php">Cancelar</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



<?php 