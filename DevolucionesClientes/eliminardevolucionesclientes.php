<?php 
   
    include "../clases/Conexion.php";
    include "./../DevolucionesClientes/cruddevolucionesclientes.php";
    include "../header.php";
    $cruddevolucionesclientes = new cruddevolucionesclientes();
    $id = $_POST['id'];
    $datos = $cruddevolucionesclientes -> obtenerDocumentoDevolucionesClientes($id);
?>

<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../Devoluciones_clientes.php" class="btn btn-outline-info">
                    Regresar
                </a>

            </div>
            <div class="card-body">
                <div class="col">
                    <h2 class="mb-3 fs-4 text-center">Eliminar Registro</h2>
                    <table class="table table-bordered">
                        <thead>
                            <th class="th__texto text-center">No</th>
                            <th class="th__texto text-center">FECHA</th>
                            <th class="th__texto text-center">CONDOMINIO</th>
                            <th class="th__texto text-center">LLAVE</th>
                            <th class="th__texto text-center">CLIENTE</th>
                            <th class="th__texto text-center">MONTO</th>
                            <th class="th__texto text-center">BANCO</th>
                            <th class="th__texto text-center">MOTIVO</th>
                            <th class="th__texto text-center">MONTO_DE_LA_OPERACIÓN</th>
                            <th class="th__texto text-center">DESARROLLO</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"> <?php echo $datos->No;?> </td>
                                <td class="text-center"> <?php echo $datos->FECHA;?> </td>
                                <td class="text-center"> <?php echo $datos->CONDOMINIO;?> </td>
                                <td class="text-center"> <?php echo $datos->LLAVE;?> </td>
                                <td class="text-center"> <?php echo $datos->CLIENTE;?> </td>
                                <td class="text-center"> <?php echo $datos->MONTO; ?> </td>
                                <td class="text-center"> <?php echo $datos->BANCO;?> </td>
                                <td class="text-center"> <?php echo $datos->MOTIVO;?> </td>
                                <td class="text-center"> <?php echo $datos->MONTO_DE_LA_OPERACIÓN;?></td>
                                <td class="text-center"> <?php echo $datos->DESARROLLO;?> </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <div class="aler alert-danger" role="alert">
                        <h3 class="text-danger fs-5 text-center">¿Estas seguro de eliminar este registro?</h3>
                        <p>
                            Una vez eliminado no podras recuperarlo
                        </p>
                        <div class="d-flex justify content-end">
                            <form class="me-2" action="./eliminar_devolucionesclientes.php" method="POST">
                                <input type="text" name="id" value="<?php echo $datos->_id;?>" hidden>
                                <button class="btn btn-danger">
                                    Eliminar
                                </button>
                            </form>
                            <a class="btn btn-secondary" href="../Devoluciones_clientes.php">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>