<?php 
   
    include "../clases/Conexion.php";
    include "./../ComisionesInternas/crudcomisionesinternas.php";

    $crudcomisionesinternas = new crudcomisionesinternas();
    $id = $_POST['id'];

    $datos = $crudcomisionesinternas -> obtenerDocumentoComisionesInternas($id);
?>

<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">

                <a href="../Hab_Formato_Comisiones_Internas.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Eliminar  Registro</h2>
                
                <table class="table table-bordered">
                    <thead>
                    <th class="th__texto" style="text-align:center;">LLAVE</th>                        
                        <th class="th__texto" style="text-align:center;">NOMBRE_DEL_CLIENTE</th>
                        <th class="th__texto" style="text-align:center;">FECHA_DE_APARTADO</th>
                        <th class="th__texto" style="text-align:center;">FECHA_ENTREGA_DE_CONTRATO</th>
                        <th class="th__texto" style="text-align:center;">IMPORTE_A_COMISIONAR</th>
                        <th class="th__texto" style="text-align:center;">PCOMISION</th>
                        <th class="th__texto" style="text-align:center;">IMPORTE</th>
                        
                        
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
                    <p>¿Estas seguro de eliminar este registro?</p>
                    <p>
                        Una vez eliminado no podras recuperarlo
                    </p>
                </div>
                <form action="./eliminar_comisionesinternas.php" method="POST">
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