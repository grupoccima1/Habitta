<?php 
   
    include "../clases/Conexion.php";
    include "./../Listado/crudlistado.php";
    include "../header.php";
    $crudlistado = new crudlistado();
    $id = $_POST['id'];

    $datos = $crudlistado -> obtenerDocumentoListado($id);
?>

<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../listado.php" class="btn btn-outline-info">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                <div class="col">
                    <h2 class="mb-3 fs-4 text-center">Eliminar Registro</h2>
                    <table class="table table-bordered">
                        <thead>
                            <th class="th__texto text-center">Llave</th>
                            <th class="th__texto text-center">Mes</th>
                            <th class="th__texto text-center">Año</th>
                            <th class="th__texto text-center">Monto</th>
                            <th class="th__texto text-center">Llave 2</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"> <?php echo $datos->LLAVE; ?> </td>
                                <td class="text-center"> <?php echo $datos->MES;?> </td>
                                <td class="text-center"> <?php echo $datos->AÑO;?> </td>
                                <td class="text-center"> <?php echo $datos->MONTO; ?> </td>
                                <td class="text-center"> <?php echo $datos->LLAVE_2;?> </td>
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
                            <form class="me-2" action="./eliminar_listados.php" method="POST">
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