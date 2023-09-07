<?php 
   
    include "../clases/Conexion.php";
    include "./../DevolucionesClientes/cruddevolucionesclientes.php";

    $cruddevolucionesclientes = new cruddevolucionesclientes();
    $id = $_POST['id'];

    $datos = $cruddevolucionesclientes -> obtenerDocumentoDevolucionesClientes($id);
?>

<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">

                <a href="../Devoluciones_clientes.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Eliminar  Registro</h2>
                
                <table class="table table-bordered">
                    <thead>
                    <th class="th__texto" style="text-align:center;">No</th>                        
                        <th class="th__texto" style="text-align:center;">FECHA</th>
                        <th class="th__texto" style="text-align:center;">CONDOMINIO</th>
                        <th class="th__texto" style="text-align:center;">LLAVE</th>
                        <th class="th__texto" style="text-align:center;">CLIENTE</th>
                        <th class="th__texto" style="text-align:center;">MONTO</th>
                        <th class="th__texto" style="text-align:center;">BANCO</th>
                        <th class="th__texto" style="text-align:center;">MOTIVO</th>
                        <th class="th__texto" style="text-align:center;">MONTO_DE_LA_OPERACIÓN</th>
                        <th class="th__texto" style="text-align:center;">DESARROLLO</th>
                        
                        
                    </thead>
                    <tbody>
                        <tr>
                          <td class="text-center"> <?php echo $datos->No;?> </td>
                          <td class="text-center"> <?php echo $datos->FECHA;?> </td>
                          <td class="text-center"> <?php echo $datos->CONDOMINIO;?> </td>
                          <td class="text-center"> <?php echo $datos->LLAVE;?> </td>
                          <td class="text-center"> <?php echo $datos->CLIENTE;?> </td>
                          <td class="text-center"> <?php echo $datos->MONTO; ?> </td>
                          <td class="text-center"> <?php echo $datos->BANCO;?> </td>
                          <td class="text-center"> <?php echo $datos->MOTIVO;?> </td>
                          <td class="text-center"> <?php echo $datos->MONTO_DE_LA_OPERACIÓN;?></td>
                          <td class="text-center"> <?php echo $datos->DESARROLLO;?> </td>
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
                <form action="./eliminar_devolucionesclientes.php" method="POST">
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
