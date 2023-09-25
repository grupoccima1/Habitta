<?php 
    include "../clases/Conexion.php";
    include "./../Flujo/crud_Flujo.php";
    include "../header.php";
    $crudflujo = new crudflujo();
    $id = $_POST['id'];
    $datos = $crudflujo -> obtenerDocumentoFlujo($id);
?>
<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../flujo.php" class="btn btn-outline-info">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                <div class="col">
                    <h2 class="mb-3 fs-4 text-center">Eliminar Registro</h2>
                    <table class="table table-bordered">
                        <thead>
                            <th class="th__texto text-center">Crear recibo</th>
                            <th class="th__texto text-center">Notas</th>
                            <th class="th__texto text-center">Enviado</th>
                            <th class="th__texto text-center">Llave</th>
                            <th class="th__texto text-center">Beneficiario</th>
                            <th class="th__texto text-center">Factura</th>
                            <th class="th__texto text-center">Fecha</th>
                            <th class="th__texto text-center">Motivo</th>
                            <th class="th__texto text-center">Categoria</th>
                            <th class="th__texto text-center">Origen</th>
                            <th class="th__texto text-center">Subcategoria</th>
                            <th class="th__texto text-center">Mes</th>
                            <th class="th__texto text-center">Año</th>
                            <th class="th__texto text-center">Flujo2</th>
                            <th class="th__texto text-center">Lote</th>
                            <th class="th__texto text-center">Condominio</th>
                            <th class="th__texto text-center">Cluster</th>
                            <th class="th__texto text-center">Desarrollo</th>
                            <th class="th__texto text-center">Cliente</th>
                            <th class="th__texto text-center">Correo</th>
                            <th class="th__texto text-center">1er mensualidad</th>

                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"> <?php echo $datos->CREAR_RECIBO; ?> </td>
                                <td class="text-center"> <?php echo $datos->NOTAS;?> </td>
                                <td class="text-center"> <?php echo $datos->ENVIADO;?> </td>
                                <td class="text-center"> <?php echo $datos->LLAVE; ?> </td>
                                <td class="text-center"> <?php echo $datos->BENEFICIARIO;?> </td>
                                <td class="text-center"> <?php echo $datos->FACTURA;?> </td>
                                <td class="text-center"> <?php echo $datos->FECHA;?></td>
                                <td class="text-center"> <?php echo $datos->MOTIVO;?> </td>
                                <td class="text-center"> <?php echo $datos->CATEGORIA;?> </td>
                                <td class="text-center"> <?php echo $datos->ORIGEN;?> </td>
                                <td class="text-center"> <?php echo $datos->SUBCATEGORIA;?> </td>
                                <td class="text-center"> <?php echo $datos->MES;?> </td>
                                <td class="text-center"> <?php echo $datos->AÑO;?> </td>
                                <td class="text-center"> <?php echo $datos->FLUJO2;?> </td>
                                <td class="text-center"> <?php echo $datos->LOTE; ?> </td>
                                <td class="text-center"> <?php echo $datos->CONDOMINIO;?> </td>
                                <td class="text-center"> <?php echo $datos->CLUSTER;?> </td>
                                <td class="text-center"> <?php echo $datos->DESARROLLO;?> </td>
                                <td class="text-center"> <?php echo $datos->CLIENTE;?> </td>
                                <td class="text-center"> <?php echo $datos->CORREO;?> </td>
                                <td class="text-center"> <?php echo $datos->ER_MENSUALIDAD; ?> </td>
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
                            <form class="me-2" action="./eliminar_flujo.php" method="POST">
                                <input type="text" name="id" value="<?php echo $datos->_id;?>" hidden>
                                <button class="btn btn-danger">
                                    Eliminar
                                </button>
                            </form>
                            <a href="../flujo.php" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php 