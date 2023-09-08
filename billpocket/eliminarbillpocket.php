<?php 
   
    include "../clases/Conexion.php";
    include "./../billpocket/crudbillpocket.php";

    $crudbillpocket = new crudbillpocket();
    $id = $_POST['id'];

    $datos = $crudbillpocket -> obtenerDocumentobillpocket($id);
?>

<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">

                <a href="../bilpocket.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Eliminar  Registro</h2>
                
                <table class="table table-bordered">
                    <thead>
                    <th class="th__texto" style="text-align:center;">Llave</th>                        
                    <th class="th__texto" style="text-align:center;">NOMBRE_DE_CLIENTE</th>                        
                        <th class="th__texto" style="text-align:center;">DEPOSITO_DE_CLIENTE</th>
                        <th class="th__texto" style="text-align:center;">COMISION</th>
                        <th class="th__texto" style="text-align:center;">DEPOSITO_EN_BANCO</th>
                        <th class="th__texto" style="text-align:center;">TIPO_DE_PAGO</th>
                        <th class="th__texto" style="text-align:center;">FOLIO</th>
                        <th class="th__texto" style="text-align:center;">TIPO_DE_TARJETA</th>
                        <th class="th__texto" style="text-align:center;">TPVAFILIADA</th>
                        <th class="th__texto" style="text-align:center;">FECHADE_DEPOSITO</th>
                        <th class="th__texto" style="text-align:center;">AÑO</th>
                        <th class="th__texto" style="text-align:center;">BANCO</th>
                        
                    </thead>
                    <tbody>
                        <tr>
                          <td class="text-center"> <?php echo $datos->NOMBRE_DE_CLIENTE; ?> </td>
                          <td class="text-center"> <?php echo $datos->DEPOSITO_DE_CLIENTE;?> </td>
                          <td class="text-center"> <?php echo $datos->COMISION;?> </td>
                          <td class="text-center"> <?php echo $datos->DEPOSITO_EN_BANCO;?> </td>
                          <td class="text-center"> <?php echo $datos->TIPO_DE_PAGO;?> </td>
                          <td class="text-center"> <?php echo $datos->FOLIO; ?> </td>
                          <td class="text-center"> <?php echo $datos->TIPO_DE_TARJETA;?> </td>
                          <td class="text-center"> <?php echo $datos->TPVAFILIADA;?> </td>
                          <td class="text-center"> <?php echo $datos->FECHADE_DEPOSITO;?> </td>
                          <td class="text-center"> <?php echo $datos->AÑO;?> </td>
                          <td class="text-center"> <?php echo $datos->BANCO;?> </td>
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
                <form action="./eliminar_billpocket.php" method="POST">
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