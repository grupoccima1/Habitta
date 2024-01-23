<?php 
    include "../clases/Conexion.php";
    include "./../AcumuladoSherpa/crudacumuladosherpa.php";
    include "../header.php";
    $crudacumuladosherpa = new crudacumuladosherpa();
    $id = $_POST['id'];
    $datos = $crudacumuladosherpa->obtenerDocumentoSherpa($id);
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
                <h2 class="mb-3 fs-4 text-center">Eliminar Registro</h2>
                <table class="table table-bordered">
                    <thead>
                        <th class="th__texto text-center">Llave</th>
                        <th class="th__texto text-center">Fecha de Ingreso</th>
                        <th class="th__texto text-center">Lote</th>
                        <th class="th__texto text-center">Condominio</th>
                        <th class="th__texto text-center">Cluster</th>
                        <th class="th__texto text-center">Desarrollo</th>
                        <th class="th__texto text-center">Puesto</th>
                        <th class="th__texto text-center">Comisionista</th>
                        <th class="th__texto text-center">Total de la Venta</th>
                        <th class="th__texto text-center">Enganche</th>
                        <th class="th__texto text-center">% Comisión</th>
                        <th class="th__texto text-center">Total Comisión</th>
                        <th class="th__texto text-center">Descuento</th>
                        <th class="th__texto text-center">Desc</th>
                        <th class="th__texto text-center">A Pagar Externos</th>
                        <th class="th__texto text-center">Subtotal</th>
                        <th class="th__texto text-center">IVA</th>
                        <th class="th__texto text-center">Retenciones de IVA</th>
                        <th class="th__texto text-center">Retenciones ISR</th>
                        <th class="th__texto text-center">Total</th>
                        <th class="th__texto text-center">Pago</th>
                        <th class="th__texto text-center">Notas</th>
                        <th class="th__texto text-center">Pagado</th>
                        <th class="th__texto text-center">Método de Pago</th>
                        <th class="th__texto text-center">Fecha Pagada</th>
                        <th class="th__texto text-center">Nombre Correcto</th>
                        <th class="th__texto text-center">Semana Pagada</th>
                        <th class="th__texto text-center">Semana</th>
                        <th class="th__texto text-center">X Tipo de Régimen</th>
                        <th class="th__texto text-center">Cuenta</th>
                        <th class="th__texto text-center">Motivo de Descuento</th>
                        <th class="th__texto text-center">Estatus</th>
                        <th class="th__texto text-center">Lote Anterior</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"> <?php echo $datos['llave']; ?></td>
                            <td class="text-center"> <?php echo $datos['fecha_de_ingreso'];?> </td>
                            <td class="text-center"> <?php echo $datos['lote'];?> </td>
                            <td class="text-center"> <?php echo $datos['condominio'];?> </td>
                            <td class="text-center"> <?php echo $datos['cluster'];?> </td>
                            <td class="text-center"> <?php echo $datos['desarrollo']; ?> </td>
                            <td class="text-center"> <?php echo $datos['puesto'];?> </td>
                            <td class="text-center"> <?php echo $datos['comisionista'];?> </td>
                            <td class="text-center"> <?php echo $datos['total_de_la_venta'];?></td>
                            <td class="text-center"> <?php echo $datos['enganche'];?> </td>
                            <td class="text-center"> <?php echo $datos['p_comision'];?> </td>
                            <td class="text-center"> <?php echo $datos['total_comision'];?> </td>
                            <td class="text-center"> <?php echo $datos['descuento'];?> </td>
                            <td class="text-center"> <?php echo $datos['desc'];?> </td>
                            <td class="text-center"> <?php echo $datos['a_pagar_externos'];?> </td>
                            <td class="text-center"> <?php echo $datos['subtotal'];?> </td>
                            <td class="text-center"> <?php echo $datos['iva'];?> </td>
                            <td class="text-center"> <?php echo $datos['retenciones_de_iva']; ?> </td>
                            <td class="text-center"> <?php echo $datos['retenciones_isr'];?> </td>
                            <td class="text-center"> <?php echo $datos['total'];?> </td>
                            <td class="text-center"> <?php echo $datos['pago'];?> </td>
                            <td class="text-center"> <?php echo $datos['notas'];?> </td>
                            <td class="text-center"> <?php echo $datos['pagado'];?> </td>
                            <td class="text-center"> <?php echo $datos['metodo_de_pago']; ?> </td>
                            <td class="text-center"> <?php echo $datos['fecha_pagada'];?> </td>
                            <td class="text-center"> <?php echo $datos['nombre_correcto'];?> </td>
                            <td class="text-center"> <?php echo $datos['semana_pagada']; ?> </td>
                            <td class="text-center"> <?php echo $datos['semana'];?> </td>
                            <td class="text-center"> <?php echo $datos['x_tipo_de_regimen'];?></td>
                            <td class="text-center"> <?php echo $datos['cuenta'];?></td>
                            <td class="text-center"> <?php echo $datos['motivo_de_descuento']; ?> </td>
                            <td class="text-center"> <?php echo $datos['estatus'];?> </td>
                            <td class="text-center"> <?php echo $datos['lote_anterior'];?> </td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <div class="alert alert-danger" role="alert">
                    <h3 class="text-danger fs-5 text-center">¿Estás seguro de eliminar este registro?</h3>
                    <p>
                        Una vez eliminado no podrás recuperarlo.
                    </p>
                    <div class="d-flex justify-content-center">
                        <form class="me-2" action="./eliminar_acumuladosherpa.php" method="POST">
                            <input type="text" name="id" value="<?php echo $datos['id'];?>" hidden>
                            <button class="btn btn-danger">
                                Eliminar
                            </button>
                        </form>
                        <a href="../acumuladosherpa.php" class="btn btn-secondary">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "../script.php"; ?>
