<?php 
   
    include "../clases/Conexion.php";
    include "./../TableroDeResultados/crudtableroderesultados.php";
    include "../header.php";
    $crudtableroderesultados = new crudtableroderesultados();
    $id = $_POST['id'];
    $datos = $crudtableroderesultados -> obtenerDocumentoTableroDeResultados($id);
?>

<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../TableroDeResultados.php" class="btn btn-outline-info">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                <div class="col">
                    <h2 class="mb-3 fs-4 text-center">Eliminar Registro</h2>
                    <table class="table table-bordered">
                        <thead>
                            <th class="th__texto text-center">GIRO</th>
                            <th class="th__texto text-center">U_TOTALES</th>
                            <th class="th__texto text-center">U_APARTADAS</th>
                            <th class="th__texto text-center">U_PORVENDER</th>
                            <th class="th__texto text-center">U_VENDIDAS</th>
                            <th class="th__texto text-center">U_POR_CERRAR</th>
                            <th class="th__texto text-center">U_POR_RECUPERAR</th>
                            <th class="th__texto text-center">RECUPERADOS</th>
                            <th class="th__texto text-center">DESARROLLO</th>
                            <th class="th__texto text-center">U_POR_VENDER</th>
                            <th class="th__texto text-center">ESTATUS</th>
                            <th class="th__texto text-center">TOTAL_VENCIDOS</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"> <?php echo $datos->GIRO;?> </td>
                                <td class="text-center"> <?php echo $datos->U_TOTALES;?> </td>
                                <td class="text-center"> <?php echo $datos->U_APARTADAS;?> </td>
                                <td class="text-center"> <?php echo $datos->U_PORVENDER;?> </td>
                                <td class="text-center"> <?php echo $datos->U_VENDIDAS;?> </td>
                                <td class="text-center"> <?php echo $datos->U_POR_CERRAR; ?> </td>
                                <td class="text-center"> <?php echo $datos->U_POR_RECUPERAR;?> </td>
                                <td class="text-center"> <?php echo $datos->RECUPERADOS;?> </td>
                                <td class="text-center"> <?php echo $datos->DESARROLLO;?></td>
                                <td class="text-center"> <?php echo $datos->U_POR_VENDER;?> </td>
                                <td class="text-center"> <?php echo $datos->ESTATUS;?> </td>
                                <td class="text-center"> <?php echo $datos->TOTAL_VENCIDOS;?> </td>
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
                            <form class="me-2" action="./eliminar_tableroderesultados.php" method="POST">
                                <input type="text" name="id" value="<?php echo $datos->_id;?>" hidden>
                                <button class="btn btn-danger">
                                    Eliminar
                                </button>
                            </form>
                            <a href="../TableroDeResultados.php" class="bnt btn-secondary">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php 