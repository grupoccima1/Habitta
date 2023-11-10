<?php 
   
    include "../clases/Conexion.php";
    include "./../Cobranza/crudcobranza.php";
    include "../header.php";
    $crudcobranza = new crudcobranza();
    $id = $_POST['id'];

    $datos = $crudcobranza -> obtenerDocumentoCobranza($id);
?>

<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../cobranza.php" class="btn btn-outline-info">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                <h2 class="mb-3 fs-4 text-center">Eliminar Registro</h2>

                <table class="table table-bordered">
                    <thead>
                        <th class="th__texto text-center">Fecha</th>
                        <th class="th__texto text-center">Motivo</th>
                        <th class="th__texto text-center">Flujo</th>
                        <th class="th__texto text-center">Fecha_1</th>
                        <th class="th__texto text-center">Descripcion</th>
                        <th class="th__texto text-center">A pagar</th>
                        <th class="th__texto text-center">Pago</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"> <?php echo $datos->FECHA; ?> </td>
                            <td class="text-center"> <?php echo $datos->MOTIVO;?> </td>
                            <td class="text-center"> <?php echo $datos->FLUJO;?> </td>
                            <td class="text-center"> <?php echo $datos->FECHA_1 ?> </td>
                            <td class="text-center"> <?php echo $datos->DESCRIPCION;?> </td>
                            <td class="text-center"> <?php echo$datos->APAGAR;?> </td>
                            <td class="text-center"> <?php echo $datos->PAGO;?></td>
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
                        <form class="me-2" action="./eliminar_cobranza.php" method="POST">
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



<?