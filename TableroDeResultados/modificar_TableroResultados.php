<?php 
    include "../header.php";
    include "../clases/Conexion.php";
    include "../TableroDeResultados/crudtableroderesultados.php";
    $crud = new crudtableroderesultados();
    $id = $_POST['id'];
    $datos = $crud -> obtenerDocumentoTableroDeResultados($id);
    $idMongo = $datos -> _id;
?>

<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <div class="card-body">
                    <div class="col">
                    <a href="../TableroDeResultados.php">Regresar</a>
                    <h2>Actualizar Registro</h2>
                    <form action="./../TableroDeResultados/actualizar_TableroResultados.php" method="POST">
                        <input type="text" name="id" id="id" hidden value="<?php echo $idMongo ?>">
                        <div class="col-4 mb-2">
                            <label for="giro">Giro</label>
                            <input type="text" name="giro" id="giro" class="form-control"
                                value="<?php echo $datos->GIRO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="u_totales">Unidades Totales</label>
                            <input type="text" name="u_totales" id="u_totales" class="form-control"
                                value="<?php echo $datos->U_TOTALES ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="u_apartadas">Unidades Apartadas</label>
                            <input type="text" name="u_apartadas" id="u_apartadas" class="form-control"
                                value="<?php echo $datos->U_APARTADAS ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="u_xvender">Unidades por Vender</label>
                            <input type="text" name="u_xvender" id="u_xvender" class="form-control"
                                value="<?php echo $datos->U_PORVENDER ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="u_vendidas">Unidades Vendidas</label>
                            <input type="text" name="u_vendidas" id="u_vendidas" class="form-control"
                                value="<?php echo $datos->U_VENDIDAS ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="u_xcerrar">Unidades por Cerrar</label>
                            <input type="text" name="u_xcerrar" id="u_xcerrar" class="form-control"
                                value="<?php echo $datos->U_POR_CERRAR ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="u_xrecuperar">Unidades por Recuperar</label>
                            <input type="text" name="u_xrecuperar" id="u_xrecuperar" class="form-control"
                                value="<?php echo $datos->U_POR_RECUPERAR ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="recuperados">Recuperados</label>
                            <input type="text" name="recuperados" id="recuperados" class="form-control"
                                value="<?php echo $datos->RECUPERADOS ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="desarrollo">Desarrollo</label>
                            <input type="text" name="desarrollo" id="desarrollo" class="form-control"
                                value="<?php echo $datos->DESARROLLO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="u_x_vender">Unidades por Vender</label>
                            <input type="text" name="u_x_vender" id="u_x_vender" class="form-control"
                                value="<?php echo $datos->U_POR_VENDER ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="estatus">Estatus</label>
                            <input type="text" name="estatus" id="estatus" class="form-control"
                                value="<?php echo $datos->ESTATUS ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="total_vencidos">Total Vencidos</label>
                            <input type="text" name="total_vencidos" id="total_vencidos" class="form-control"
                                value="<?php echo $datos->TOTAL_VENCIDOS ?>">
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3">
                        <i class="fa-solid fa-floppy-disk"></i>Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "../script.php"; ?>