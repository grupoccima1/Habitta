<?php 
   
    include "../clases/Conexion.php";
    include "./../HSBCLOMAS/crudhsbclomas.php";
    include "../header.php";
    $crudhsbclomas = new crudhsbclomas();
    $id = $_POST['id'];
    $datos = $crudhsbclomas -> obtenerDocumentoHSBCLOMAS($id);
?>

<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../hsbcl.php" class="btn btn-outline-info">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                <div class="col">
                    <h2 class="mb-3 fs-4 text-center">Eliminar Registro</h2>
                    <table class="table table-bordered">
                        <thead>
                            <th class="th__texto text-center">Semana</th>
                            <th class="th__texto text-center">Fecha</th>
                            <th class="th__texto text-center">Beneficiario</th>
                            <th class="th__texto text-center">Ingreso</th>
                            <th class="th__texto text-center">Egreso</th>
                            <th class="th__texto text-center">Saldo</th>
                            <th class="th__texto text-center">Factura</th>
                            <th class="th__texto text-center">Motivo</th>
                            <th class="th__texto text-center">Mes</th>
                            <th class="th__texto text-center">Desarrollo</th>
                            <th class="th__texto text-center">Lote</th>
                            <th class="th__texto text-center">Condominio</th>
                            <th class="th__texto text-center">Cluster</th>
                            <th class="th__texto text-center">Obra</th>
                            <th class="th__texto text-center">Categoria</th>
                            <th class="th__texto text-center">Subcategoria</th>
                            <th class="th__texto text-center">Modelo de negocios</th>
                            <th class="th__texto text-center">Flujo</th>
                            <th class="th__texto text-center">Llave</th>
                            <th class="th__texto text-center">Fecha correcta</th>
                            <th class="th__texto text-center">Llave estado de cuenta</th>
                            <th class="th__texto text-center">Clave</th>
                            <th class="th__texto text-center">Metodo de pago</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"> <?php echo $datos->SEMANA; ?> </td>
                                <td class="text-center"> <?php echo $datos->FECHA;?> </td>
                                <td class="text-center"> <?php echo $datos->BENEFICIARIO;?> </td>
                                <td class="text-center"> <?php echo $datos->INGRESO; ?> </td>
                                <td class="text-center"> <?php echo $datos->EGRESO;?> </td>
                                <td class="text-center"> <?php echo$datos->SALDO;?> </td>
                                <td class="text-center"> <?php echo $datos->FACTURA;?></td>
                                <td class="text-center"> <?php echo $datos->MOTIVO;?> </td>
                                <td class="text-center"> <?php echo $datos->MES;?> </td>
                                <td class="text-center"> <?php echo $datos->DESARROLLO;?> </td>
                                <td class="text-center"> <?php echo $datos->LOTE;?> </td>
                                <td class="text-center"> <?php echo $datos->CONDOMINIO;?> </td>
                                <td class="text-center"> <?php echo $datos->CLUSTER;?> </td>
                                <td class="text-center"> <?php echo $datos->OBRA;?> </td>
                                <td class="text-center"> <?php echo $datos->CATEGORIA; ?> </td>
                                <td class="text-center"> <?php echo $datos->SUBCATEGORIA;?> </td>
                                <td class="text-center"> <?php echo $datos->UNIDADDENEGOCIO;?> </td>
                                <td class="text-center"> <?php echo $datos->FLUJO;?> </td>
                                <td class="text-center"> <?php echo $datos->LLAVE;?> </td>
                                <td class="text-center"> <?php echo $datos->FECHACORRECTA;?> </td>
                                <td class="text-center"> <?php echo $datos->LLAVEEDOSDECUENTA; ?> </td>
                                <td class="text-center"> <?php echo $datos->CLAVE;?> </td>
                                <td class="text-center"> <?php echo $datos->METODODEPAGO;?> </td>
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
                            <form class="me-2" action="./eliminar_hsbclomas.php" method="POST">
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