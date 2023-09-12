<?php 
   
    include "../clases/Conexion.php";
    include "./../BonosReferidos/crudbonosreferidos.php";
    include "../header.php";
    $crudbonosreferidos = new crudbonosreferidos();
    $id = $_POST['id'];

    $datos = $crudbonosreferidos -> obtenerDocumentoBonosReferidos($id);
?>

<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-headr">
                <a href="../acumuladosherpa.php" class="btn btn-outline-info">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                <h2 class="mb-3 fs-4 text-center">Eliminar Registro</h2>

                <table class="table table-bordered">
                    <thead>
                        <th class="th__texto" style="text-align:center;">NÚMERO</th>
                        <th class="th__texto" style="text-align:center;">CONDOMIO</th>
                        <th class="th__texto" style="text-align:center;">CLUSTER</th>
                        <th class="th__texto" style="text-align:center;">CLIENTE</th>
                        <th class="th__texto" style="text-align:center;">PROMOCIÓN</th>
                        <th class="th__texto" style="text-align:center;">ESTATUS_DÍAS</th>
                        <th class="th__texto" style="text-align:center;">INICIO_DE_CORRIDA_CONTRATO_O_SIMULADOR</th>
                        <th class="th__texto" style="text-align:center;">Columna1</th>
                        <th class="th__texto" style="text-align:center;">APLICADO</th>
                        <th class="th__texto" style="text-align:center;">APARTADO</th>
                        <th class="th__texto" style="text-align:center;">FECHAS_DE_PAGO</th>
                        <th class="th__texto" style="text-align:center;">ENGANCHE</th>
                        <th class="th__texto" style="text-align:center;">TOTAL_PAGADO</th>
                        <th class="th__texto" style="text-align:center;">Columna2</th>
                        <th class="th__texto" style="text-align:center;">Columna3</th>
                        <th class="th__texto" style="text-align:center;">Columna4</th>
                        <th class="th__texto" style="text-align:center;">Columna5</th>
                        <th class="th__texto" style="text-align:center;">Columna6</th>
                        <th class="th__texto" style="text-align:center;">STATUS</th>
                        <th class="th__texto" style="text-align:center;">SÍ_NO</th>
                        <th class="th__texto" style="text-align:center;">empty_L</th>
                        <th class="th__texto" style="text-align:center;">empty_A</th>
                        <th class="th__texto" style="text-align:center;">CONDOMINIO</th>
                        <th class="th__texto" style="text-align:center;">CLÚSTER</th>
                        <th class="th__texto" style="text-align:center;">BONO</th>
                        <th class="th__texto" style="text-align:center;">LOTE_numero1</th>
                        <th class="th__texto" style="text-align:center;">CONDOMINIO_numero1</th>
                        <th class="th__texto" style="text-align:center;">CLÚSTER_numero1</th>
                        <th class="th__texto" style="text-align:center;">CLIENTE_numero1</th>
                        <th class="th__texto" style="text-align:center;">NOTA</th>


                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"> <?php echo $datos->NÚMERO; ?> </td>
                            <td class="text-center"> <?php echo $datos->CONDOMIO;?> </td>
                            <td class="text-center"> <?php echo $datos->CLUSTER;?> </td>
                            <td class="text-center"> <?php echo $datos->CLIENTE;?> </td>
                            <td class="text-center"> <?php echo $datos->PROMOCIÓN;?> </td>
                            <td class="text-center"> <?php echo $datos->ESTATUS_DÍAS; ?> </td>
                            <td class="text-center"> <?php echo $datos->INICIO_DE_CORRIDA_CONTRATO_O_SIMULADOR;?> </td>
                            <td class="text-center"> <?php echo $datos->Columna1;?> </td>
                            <td class="text-center"> <?php echo $datos->APLICADO;?> </td>
                            <td class="text-center"> <?php echo $datos->APARTADO;?></td>
                            <td class="text-center"> <?php echo $datos->FECHAS_DE_PAGO;?> </td>
                            <td class="text-center"> <?php echo $datos->ENGANCHE;?> </td>
                            <td class="text-center"> <?php echo $datos->TOTAL_PAGADO; ?> </td>
                            <td class="text-center"> <?php echo $datos->Columna2;?> </td>
                            <td class="text-center"> <?php echo $datos->Columna3;?> </td>
                            <td class="text-center"> <?php echo $datos->Columna4;?> </td>
                            <td class="text-center"> <?php echo $datos->Columna5;?> </td>
                            <td class="text-center"> <?php echo $datos->Columna6;?> </td>
                            <td class="text-center"> <?php echo $datos->STATUS;?> </td>
                            <td class="text-center"> <?php echo $datos->SÍ_NO;?></td>
                            <td class="text-center"> <?php echo $datos->empty_L;?></td>
                            <td class="text-center"> <?php echo $datos->empty_A;?></td>
                            <td class="text-center"> <?php echo $datos->CONDOMINIO; ?> </td>
                            <td class="text-center"> <?php echo $datos->CLÚSTER;?> </td>
                            <td class="text-center"> <?php echo $datos->BONO;?> </td>
                            <td class="text-center"> <?php echo $datos->LOTE_numero1;?> </td>
                            <td class="text-center"> <?php echo $datos->CONDOMINIO_numero1;?> </td>
                            <td class="text-center"> <?php echo $datos->CLÚSTER_numero1; ?> </td>
                            <td class="text-center"> <?php echo $datos->CLIENTE_numero1;?> </td>
                            <td class="text-center"> <?php echo $datos->NOTA;?> </td>
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
                        <form class="me-2" action="./eliminar_bonosreferidos.php" method="POST">
                            <input type="text" name="id" value="<?php echo $datos->_id;?>" hidden>
                            <button class="btn btn-danger">
                                Eliminar
                            </button>
                        </form>
                        <form action="" method="POST">
                            <input type="text" name="id" value="<?php echo $datos->_id;?>" hidden>
                            <button class="btn btn-Secondary">
                                Modificar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 