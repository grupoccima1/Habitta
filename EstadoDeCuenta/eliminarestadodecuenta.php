<?php 
   
    include "../clases/Conexion.php";
    include "./../EstadoDeCuenta/crudestadodecuenta.php";

    $crudestadodecuenta = new crudestadodecuenta();
    $id = $_POST['id'];

    $datos = $crudestadodecuenta -> obtenerDocumentoEstadoDeCuenta($id);
?>

<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">

                <a href="../estadodecuenta.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Eliminar  Registro</h2>
                
                <table class="table table-bordered">
                    <thead>
                    <th class="th__texto" style="text-align:center;">CONCEPTO</th>                        
                        <th class="th__texto" style="text-align:center;">PORTTO_BLANCO_CIM</th>
                        <th class="th__texto" style="text-align:center;">LOMAS_DE_PORTTO_BLANCO</th>
                        <th class="th__texto" style="text-align:center;">PORTTO_BLANCO_BERNAL</th>
                        <th class="th__texto" style="text-align:center;">VEREDAS_DE_LIRA</th>
                        <th class="th__texto" style="text-align:center;">PORTTO_BLANCO_SLP</th>
                        <th class="th__texto" style="text-align:center;">GENERAL</th>
                        
                        
                    </thead>
                    <tbody>
                        <tr>
                        <td class="text-center"> <?php echo $datos->CONCEPTO; ?> </td>
                        <td class="text-center"> <?php echo $datos->PORTTO_BLANCO_CIM;?> </td>
                        <td class="text-center"> <?php echo $datos->LOMAS_DE_PORTTO_BLANCO;?> </td>
                        <td class="text-center"> <?php echo $datos->PORTTO_BLANCO_BERNAL;?> </td>
                        <td class="text-center"> <?php echo $datos->VEREDAS_DE_LIRA;?> </td>
                        <td class="text-center"> <?php echo $datos->PORTTO_BLANCO_SLP; ?> </td>
                        <td class="text-center"> <?php echo $datos->GENERAL;?> </td>
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
                <form action="./eliminar_estadodecuenta.php" method="POST">
                    <input type="text" name="id" value="<?php echo $datos->_id;?>" hidden>
                    <button class="btn btn-danger">
                        Eliminar
                    </button>                
                </form>
            </div>
        </div>
    </div>
  </div>
</div>



<?php 