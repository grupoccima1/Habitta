<?php 
   
    include "../clases/Conexion.php";
    include "./../Catalogo/crudcatalogo.php";
    include "../header.php";
    $crudcatalogo = new crudcatalogo();
    $id = $_POST['id'];

    $datos = $crudcatalogo -> obtenerDocumentoCatalogo($id);
?>

<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../catalogo.php" class="btn btn-outline-info">
                    Regresar
                </a>    
            </div>
            <div class="card-body">
                <h2 class="mb-3 fs-4 text-center">Eliminar Registro</h2>
                <table class="table table-bordered">
                    <thead>
                        <th class="th__texto text-center">Llave</th>
                        <th class="th__texto text-center">Porcentaje 1</th>
                        <th class="th__texto text-center">Porcentaje 2</th>
                        <th class="th__texto text-center">Porcentaje 3</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"> <?php echo $datos->LLAVE; ?> </td>
                            <td class="text-center"> <?php echo $datos->PORCENT1;?> </td>
                            <td class="text-center"> <?php echo $datos->PORCENT2;?> </td>
                            <td class="text-center"> <?php echo $datos->PORCENT3; ?> </td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <div class="aler alert-danger" role="alert">
                    <h3 class="text-danger fs-5 text-center">¿Estas seguro de eliminar este registro?</h3>
                    <p>Una vez eliminado no podras recuperarlo </p>
                    <div class="d-flex justify-content-end">
                        <form class="me-2" action="./eliminar_catalogo.php" method="POST">
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



<?php 