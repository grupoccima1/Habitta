<?php 
   
    include "../clases/Conexion.php";
    include "./../Estados/crudestados.php";
    include "../header.php";
    $crudestados = new crudestados();
    $id = $_POST['id'];
    $datos = $crudestados -> obtenerDocumentoEstados($id);
?>

<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../estados.php" class="btn btn-outline-info">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                <div class="col">
                    <h2 class="mb-3 fs-3 text-center">Eliminar Registro</h2>
                    <table class="table table-bordered">
                        <thead>
                            <th class="th__texto text-center">Source name</th>
                            <th class="th__texto text-center">Periodo</th>
                            <th class="th__texto text-center">Fecha</th>
                            <th class="th__texto text-center">Saldo inicial</th>
                            <th class="th__texto text-center">Mensualidad</th>
                            <th class="th__texto text-center">Pagado</th>
                            <th class="th__texto text-center">Interes de financiamiento</th>
                            <th class="th__texto text-center">Abono a capital</th>
                            <th class="th__texto text-center">Saldo final</th>
                            <th class="th__texto text-center">Interes gen</th>
                            <th class="th__texto text-center">Interes int</th>
                            <th class="th__texto text-center">Interes acumulado mora</th>
                            <th class="th__texto text-center">Interes neg</th>
                            <th class="th__texto text-center">Estatus</th>
                            <th class="th__texto text-center">Observacion</th>
                            <th class="th__texto text-center">Debe interes</th>
                            <th class="th__texto text-center">Fecha pago</th>
                            <th class="th__texto text-center">Indicador fecha</th>
                            <th class="th__texto text-center">Porcentaje de interes</th>
                            <th class="th__texto text-center">Llave 2</th>
                            <th class="th__texto text-center">Mensualidad de adeudo</th>
                            <th class="th__texto text-center">Calculo sobre</th>
                            <th class="th__texto text-center">Monto de interes moratorio</th>
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
                        <h3 class="text-danger fs-5 text-center">¿Estas seguro de eliminar este registro?</h3>
                        <p>
                            Una vez eliminado no podras recuperarlo
                        </p>
                        <div class="d-flex justify-content-end">
                            <form action="./eliminar_estados.php" method="POST">
                                <input type="text" name="id" value="<?php echo $datos->_id;?>" hidden>
                                <button class="btn btn-danger">
                                    Eliminar
                                </button>
                            </form>
                            <a href="../estados.php" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php 