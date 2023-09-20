<?php 
   
    include "../clases/Conexion.php";
    include "./../ComisionesInternas/crudcomisionesinternas.php";
    include "../header.php";
    $crudcomisionesinternas = new crudcomisionesinternas();
    $id = $_POST['id'];
    $datos = $crudcomisionesinternas -> obtenerDocumentoComisionesInternas($id);
?>

<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../Hab_Formato_Comisiones_Internas.php" class="btn btn-outline-info">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                <div class="col">
                    <h2 class="mb-3 fs-4 text-center">Eliminar Registro</h2>
                    <table class="table table-bordered">
                        <thead>
                            <th class="th__texto text-center">LLAVE</th>
                            <th class="th__texto text-center">NOMBRE_DEL_CLIENTE</th>
                            <th class="th__texto text-center">FECHA_DE_APARTADO</th>
                            <th class="th__texto text-center">FECHA_ENTREGA_DE_CONTRATO</th>
                            <th class="th__texto text-center">IMPORTE_A_COMISIONAR</th>
                            <th class="th__texto text-center">PCOMISION</th>
                            <th class="th__texto text-center">IMPORTE</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"> <?php echo $datos->LLAVE; ?> </td>
                                <td class="text-center"> <?php echo $datos->NOMBRE_DEL_CLIENTE;?> </td>
                                <td class="text-center"> <?php echo $datos->FECHA_DE_APARTADO;?> </td>
                                <td class="text-center"> <?php echo $datos->FECHA_ENTREGA_DE_CONTRATO;?> </td>
                                <td class="text-center"> <?php echo $datos->IMPORTE_A_COMISIONAR;?> </td>
                                <td class="text-center"> <?php echo $datos->PCOMISION; ?> </td>
                                <td class="text-center"> <?php echo $datos->IMPORTE;?> </td>
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
                            <form class="me-2" action="./eliminar_comisionesinternas.php" method="POST">
                                <input type="text" name="id" value="<?php echo $datos->_id;?>" hidden>
                                <button class="btn btn-danger">
                                    Eliminar
                                </button>
                            </form>
                            <form action="" method="POST">
                                <input type="text" name="id" value="<?php echo $datos->_id;?>" hidden>
                                <button class="btn btn-warning">
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