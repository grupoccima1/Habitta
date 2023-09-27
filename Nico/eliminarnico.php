<?php 
   
    include "../clases/Conexion.php";
    include "./../Nico/crudnico.php";
    include "../header.php";
    $crudnico = new crudnico();
    $id = $_POST['id'];
    $datos = $crudnico -> obtenerDocumentoNico($id);
?>

<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">

                <a href="../nico.php" class="btn btn-outline-info">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                <div class="col">
                    <h2 class="mb-3 fs-4 text-center">Eliminar Registro</h2>
                    <table class="table table-bordered">
                        <thead>
                            <th class="th__texto text-center">OBSERVACION</th>
                            <th class="th__texto text-center">LLAVE</th>
                            <th class="th__texto text-center">RAZON_SOCIAL</th>
                            <th class="th__texto text-center">FECHA</th>
                            <th class="th__texto text-center">BENEFICIARIO</th>
                            <th class="th__texto text-center">RFC</th>
                            <th class="th__texto text-center">USO_CFDI</th>
                            <th class="th__texto text-center">ABONO</th>
                            <th class="th__texto text-center">CARGO</th>
                            <th class="th__texto text-center">FACTURA</th>
                            <th class="th__texto text-center">REAL</th>
                            <th class="th__texto text-center">MOTIVO</th>
                            <th class="th__texto text-center">CATEGORIA</th>
                            <th class="th__texto text-center">METODO_DE_PAGO</th>
                            <th class="th__texto text-center">SUBCATEGORIA</th>
                            <th class="th__texto text-center">FLUJO</th>
                            <th class="th__texto text-center">ORIGEN</th>
                            <th class="th__texto text-center">CLIENTE</th>
                            <th class="th__texto text-center">CORREO</th>
                            <th class="th__texto text-center">TELEFONO</th>


                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"> <?php echo $datos->OBSERVACION; ?> </td>
                                <td class="text-center"> <?php echo $datos->LLAVE;?> </td>
                                <td class="text-center"> <?php echo $datos->RAZON_SOCIAL;?> </td>
                                <td class="text-center"> <?php echo $datos->FECHA;?> </td>
                                <td class="text-center"> <?php echo $datos->BENEFICIARIO;?> </td>
                                <td class="text-center"> <?php echo $datos->RFC; ?> </td>
                                <td class="text-center"> <?php echo $datos->USO_CFDI;?> </td>
                                <td class="text-center"> <?php echo $datos->ABONO;?> </td>
                                <td class="text-center"> <?php echo $datos->CARGO;?></td>
                                <td class="text-center"> <?php echo $datos->FACTURA;?> </td>
                                <td class="text-center"> <?php echo $datos->REAL;?> </td>
                                <td class="text-center"> <?php echo $datos->MOTIVO;?> </td>
                                <td class="text-center"> <?php echo $datos->CATEGORIA;?> </td>
                                <td class="text-center"> <?php echo $datos->METODO_DE_PAGO;?> </td>
                                <td class="text-center"> <?php echo $datos->SUBCATEGORIA;?> </td>
                                <td class="text-center"> <?php echo $datos->FLUJO;?> </td>
                                <td class="text-center"> <?php echo $datos->ORIGEN;?> </td>
                                <td class="text-center"> <?php echo $datos->CLIENTE;?> </td>
                                <td class="text-center"> <?php echo $datos->CORREO;?> </td>
                                <td class="text-center"> <?php echo $datos->TELEFONO;?> </td>
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
                            <form class="me-2" action="./eliminar_nico.php" method="POST">
                                <input type="text" name="id" value="<?php echo $datos->_id;?>" hidden>
                                <button class="btn btn-danger">
                                    Eliminar
                                </button>
                            </form>
                            <a href="../nico.php" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php 