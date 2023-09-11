<?php 
   
    include "../clases/Conexion.php";
    include "./../Cobranza/crudcobranza.php";

    $crudcobranza = new crudcobranza();
    $id = $_POST['id'];

    $datos = $crudcobranza -> obtenerDocumentoCobranza($id);
?>

<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">

                <a href="../cobranza.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Eliminar  Registro</h2>
                
                <table class="table table-bordered">
                    <thead>
                    <th class="th__texto" style="text-align:center;">Fecha</th>                        
                        <th class="th__texto" style="text-align:center;">Motivo</th>
                        <th class="th__texto" style="text-align:center;">Flujo</th>
                        <th class="th__texto" style="text-align:center;">Fecha_1</th> 
                        <th class="th__texto" style="text-align:center;">Descripcion</th>
                        <th class="th__texto" style="text-align:center;">A pagar</th>
                        <th class="th__texto" style="text-align:center;">Pago</th>
                        
                        
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
                    <p>¿Estas seguro de eliminar este registro?</p>
                    <p>
                        Una vez eliminado no podras recuperarlo
                    </p>
                </div>
                <form action="./eliminar_cobranza.php" method="POST">
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