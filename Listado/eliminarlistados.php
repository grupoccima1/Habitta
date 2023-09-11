<?php 
   
    include "../clases/Conexion.php";
    include "./../Listado/crudlistado.php";

    $crudlistado = new crudlistado();
    $id = $_POST['id'];

    $datos = $crudlistado -> obtenerDocumentoListado($id);
?>

<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">

                <a href="../listado.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Eliminar  Registro</h2>
                
                <table class="table table-bordered">
                    <thead>
                    <th class="th__texto" style="text-align:center;">Llave</th>                        
                        <th class="th__texto" style="text-align:center;">Mes</th>
                        <th class="th__texto" style="text-align:center;">Año</th>
                        <th class="th__texto" style="text-align:center;">Monto</th>
                        <th class="th__texto" style="text-align:center;">Llave 2</th>
                        
                        
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
                    <p>¿Estas seguro de eliminar este registro?</p>
                    <p>
                        Una vez eliminado no podras recuperarlo
                    </p>
                </div>
                <form action="./eliminar_listados.php" method="POST">
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



<?php 