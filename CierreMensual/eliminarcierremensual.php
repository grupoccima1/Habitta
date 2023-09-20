<?php 
   
    include "../clases/Conexion.php";
    include "./../CierreMensual/crudcierremensual.php";
    include "../header.php";
    $crudcierremensual = new crudcierremensual();
    $id = $_POST['id'];

    $datos = $crudcierremensual -> obtenerDocumentoCierreMensual($id);
?>

<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../cierreMensualHabitta.php" class="btn btn-outline-info">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                <h2 class=" mb-3 fs-4 text-center">Eliminar Registro</h2>
                <table class="table table-bordered">
                    <thead>
                        <th class="th__texto text-center">CIERRE_MES</th>
                        <th class="th__texto text-center">FECHA</th>
                        <th class="th__texto text-center">BENEFICIARIO</th>
                        <th class="th__texto text-center">INGRESO</th>
                        <th class="th__texto text-center">EGRESO</th>
                        <th class="th__texto text-center">SALDO</th>
                        <th class="th__texto text-center">FACTURA</th>
                        <th class="th__texto text-center">REAL</th>
                        <th class="th__texto text-center">MOTIVO</th>
                        <th class="th__texto text-center">MES</th>
                        <th class="th__texto text-center">DESARROLLO</th>
                        <th class="th__texto text-center">CONDOMINIO</th>
                        <th class="th__texto text-center">CLUSTER</th>
                        <th class="th__texto text-center">OBRA</th>
                        <th class="th__texto text-center">CATEGORIA</th>
                        <th class="th__texto text-center">SUBCATEGORIA</th>
                        <th class="th__texto text-center">ORIGEN</th>
                        <th class="th__texto text-center">SEMANA</th>
                        <th class="th__texto text-center">SOLICITÓ</th>
                        <th class="th__texto text-center">AUTORIZÓ</th>
                        <th class="th__texto text-center">PRESUPUESTO</th>
                        <th class="th__texto text-center">UNIDAD_DE_NEGOCIO</th>
                        <th class="th__texto text-center">FLUJO</th>
                        <th class="th__texto text-center">LLAVE</th>
                        <th class="th__texto text-center">FECHA_CORRECTA</th>
                        <th class="th__texto text-center">LLAVE_EDOS_DE_CUENTA</th>
                        <th class="th__texto text-center">METODO_DE_PAGO</th>
                        <th class="th__texto text-center">MODELO_DE_NEGOCIO</th>
                        <th class="th__texto text-center">SOLICITO</th>
                        <th class="th__texto text-center">AUTORIZO</th>
                        <th class="th__texto text-center">AÑO</th>
                        <th class="th__texto text-center">MONTO_PROYECTADO</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"> <?php echo $datos->CIERRE_MES; ?> </td>
                            <td class="text-center"> <?php echo $datos->FECHA;?> </td>
                            <td class="text-center"> <?php echo $datos->BENEFICIARIO;?> </td>
                            <td class="text-center"> <?php echo $datos->INGRESO;?> </td>
                            <td class="text-center"> <?php echo $datos->EGRESO;?> </td>
                            <td class="text-center"> <?php echo $datos->SALDO; ?> </td>
                            <td class="text-center"> <?php echo $datos->FACTURA;?> </td>
                            <td class="text-center"> <?php echo $datos->REAL;?> </td>
                            <td class="text-center"> <?php echo $datos->MOTIVO;?></td>
                            <td class="text-center"> <?php echo $datos->MES;?> </td>
                            <td class="text-center"> <?php echo $datos->DESARROLLO;?> </td>
                            <td class="text-center"> <?php echo $datos->CONDOMINIO;?> </td>
                            <td class="text-center"> <?php echo $datos->CLUSTER;?> </td>
                            <td class="text-center"> <?php echo $datos->OBRA;?> </td>
                            <td class="text-center"> <?php echo $datos->CATEGORIA;?> </td>
                            <td class="text-center"> <?php echo $datos->SUBCATEGORIA;?> </td>
                            <td class="text-center"> <?php echo $datos->ORIGEN;?> </td>
                            <td class="text-center"> <?php echo $datos->SEMANA;?> </td>
                            <td class="text-center"> <?php echo $datos->SOLICITÓ;?> </td>
                            <td class="text-center"> <?php echo $datos->AUTORIZÓ;?> </td>
                            <td class="text-center"> <?php echo $datos->PRESUPUESTO;?> </td>
                            <td class="text-center"> <?php echo $datos->UNIDAD_DE_NEGOCIO;?> </td>
                            <td class="text-center"> <?php echo $datos->FLUJO;?> </td>
                            <td class="text-center"> <?php echo $datos->LLAVE;?> </td>
                            <td class="text-center"> <?php echo $datos->FECHA_CORRECTA;?> </td>
                            <td class="text-center"> <?php echo $datos->LLAVE_EDOS_DE_CUENTA;?> </td>
                            <td class="text-center"> <?php echo $datos->METODO_DE_PAGO;?> </td>
                            <td class="text-center"> <?php echo $datos->MODELO_DE_NEGOCIO;?> </td>
                            <td class="text-center"> <?php echo $datos->SOLICITO;?> </td>
                            <td class="text-center"> <?php echo $datos->AUTORIZO;?> </td>
                            <td class="text-center"> <?php echo $datos->AÑO;?> </td>
                            <td class="text-center"> <?php echo $datos->MONTO_PROYECTADO;?> </td>
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
                        <form class="me-2" action="./eliminar_cierremensual.php" method="POST">
                            <input type="text" name="id" value="<?php echo $datos->_id;?>" hidden>
                            <button class="btn btn-danger">
                                Eliminar
                            </button>
                        </form>
                        <a href="../cierreMensualHabitta.php" class="btn btn-secondary">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php 