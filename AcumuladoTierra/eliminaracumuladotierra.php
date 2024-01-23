<?php 
   
    include "../clases/Conexion.php";
    include "./../AcumuladoTierra/crudacumuladotierra.php";
    include "../header.php";
    $crudacumuladotierra = new crudacumuladotierra();
    $id = $_POST['id'];
    $datos = $crudacumuladotierra -> obtenerDocumentoAcumuladoTierra($id);
?>
<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../AcumuladosBonosDeTierra.php" class="btn btn-outline-info">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                <div class="col">
                    <h2 class="mb-3 fs-4 text-center">Eliminar Registro</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <th class="th__texto text-center">Llave</th>
                                <th class="th__texto text-center">FECHA_DE_INGRESO</th>
                                <th class="th__texto text-center">LOTE</th>
                                <th class="th__texto text-center">CONDOMINIO</th>
                                <th class="th__texto text-center">CLUSTER</th>
                                <th class="th__texto text-center">DESARROLLO</th>
                                <th class="th__texto text-center">PUESTO</th>
                                <th class="th__texto text-center">COMISIONISTA</th>
                                <th class="th__texto text-center">TOTAL_DE_LA_VENTA</th>
                                <th class="th__texto text-center">ENGANCHE</th>
                                <th class="th__texto text-center">%_COMISION</th>
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
                                <th class="th__texto text-center">NOMBRE_CORRECTO</th>
                                <th class="th__texto text-center">SEMANA_PAGADA</th>
                                <th class="th__texto text-center">SEMANA</th>
                                <th class="th__texto text-center">X_TIPO_DE_REGIMEN</th>
                                <th class="th__texto text-center">CUENTA</th>
                                <th class="th__texto text-center">MOTIVO_DE_DESCUENTO</th>
                                <th class="th__texto text-center">ESTATUS</th>
                                <th class="th__texto text-center">LOTE_ANTERIOR</th>
                            </thead>
                            <tbody>
                                <tr>
                                <td class="text-center"> <?php echo $datos['llave']; ?> </td>
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
                                    <td class="text-center"> <?php echo $datos['sub_total'];?> </td>
                                    <td class="text-center"> <?php echo $datos['iva'];?> </td>
                                    <td class="text-center"> <?php echo $datos['retenciones_de_iva'];?> </td>
                                    <td class="text-center"> <?php echo $datos['retenciones_isr'];?> </td>
                                    <td class="text-center"> <?php echo $datos['total'];?> </td>
                                    <td class="text-center"> <?php echo $datos['pago'];?> </td>
                                    <td class="text-center"> <?php echo $datos['notas'];?> </td>
                                    <td class="text-center"> <?php echo $datos['pagado'];?> </td>
                                    <td class="text-center"> <?php echo $datos['metodo_de_pago'];?> </td>
                                    <td class="text-center"> <?php echo $datos['fecha_pagada'];?> </td>
                                    <td class="text-center"> <?php echo $datos['nombre_correcto'];?> </td>
                                    <td class="text-center"> <?php echo $datos['semana_pagada'];?> </td>
                                    <td class="text-center"> <?php echo $datos['semana'];?> </td>
                                    <td class="text-center"> <?php echo $datos['x_tipo_de_regimen'];?> </td>
                                    <td class="text-center"> <?php echo $datos['cuenta'];?> </td>
                                    <td class="text-center"> <?php echo $datos['motivo_de_descuento'];?> </td>
                                    <td class="text-center"> <?php echo $datos['estatus'];?> </td>
                                    <td class="text-center"> <?php echo $datos['lote_anterior'];?> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="aler alert-danger" role="alert">
                        <h3 class="text-danger fs-5 text-center">¿Estas seguro de eliminar este registro?</h3>
                        <p>
                            Una vez eliminado no podras recuperarlo
                        </p>
                        <div class="d-flex justify-content-end">
                            <form class="me-2" action="./eliminar_acumuladotierra.php" method="POST">
                                <input type="text" name="id" value="<?php echo $datos['id'];?>" hidden>
                                <button class="btn btn-danger">
                                    Eliminar
                                </button>
                            </form>
                            <form action="" method="POST">
                                <input type="text" name="id" value="<?php echo $datos['id'];?>" hidden>
                                <button class="btn btn-secondary">
                                    Modificar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php 