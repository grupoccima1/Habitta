<?php 
   
    include "../clases/Conexion.php";
    include "./../CuentaDesarrolloActualizado/crudcuentapordesarrolloactualizado.php";
    include "../header.php";
    $crudcuentapordesarrolloactualizado = new crudcuentapordesarrolloactualizado();
    $id = $_POST['id'];

    $datos = $crudcuentapordesarrolloactualizado -> obtenerDocumentoCuentaDesarrolloActualizado($id);
?>

<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../EDO_DE_Cuenta_Por_Desarrollo_Actualizado.php" class="btn btn-outline-info">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                <div class="col">
                    <h2 class="mb-3 fs-4 text-center">Eliminar Registro</h2>
                    <table class="table table-bordered">
                        <thead>
                            <th class="th__texto text-center">CONCEPTO</th>
                            <th class="th__texto text-center">PORTTO_BLANCO_CIM</th>
                            <th class="th__texto text-center">LOMAS_DE_PORTTO_BLANCO</th>
                            <th class="th__texto text-center">PORTTO_BLANCO_BERNAL</th>
                            <th class="th__texto text-center">VEREDAS_DE_LIRA</th>
                            <th class="th__texto text-center">PORTTO_BLANCO_SLP</th>
                            <th class="th__texto text-center">GENERAL</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"> <?php echo $datos->CONCEPTO;?> </td>
                                <td class="text-center"> <?php echo $datos->PORTTO_BLANCO_CIM;?> </td>
                                <td class="text-center"> <?php echo $datos->LOMAS_DE_PORTTO_BLANCO;?> </td>
                                <td class="text-center"> <?php echo $datos->PORTTO_BLANCO_BERNAL;?> </td>
                                <td class="text-center"> <?php echo $datos->VEREDAS_DE_LIRA;?> </td>
                                <td class="text-center"> <?php echo $datos->PORTTO_BLANCO_SLP;?> </td>
                                <td class="text-center"> <?php echo $datos->GENERAL;?> </td>
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
                            <form action="./eliminar_cuentadesarrolloactualizado.php" method="POST">
                                <input type="text" name="id" value="<?php echo $datos->_id;?>" hidden>
                                <button class="btn btn-danger">
                                    Eliminar
                                </button>
                            </form>
                            <form action="" method="POST">
                                <input type="text" name="id" value="<?php echo $datos->_id;?>" hidden>
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