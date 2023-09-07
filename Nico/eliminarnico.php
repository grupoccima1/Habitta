<?php 
   
    include "../clases/Conexion.php";
    include "./../Nico/crudnico.php";

    $crudnico = new crudnico();
    $id = $_POST['id'];

    $datos = $crudnico -> obtenerDocumentoNico($id);
?>

<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">

                <a href="../nico.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Eliminar  Registro</h2>
                
                <table class="table table-bordered">
                    <thead>
                    <th class="th__texto" style="text-align:center;">OBSERVACION</th>                        
                        <th class="th__texto" style="text-align:center;">LLAVE</th>
                        <th class="th__texto" style="text-align:center;">RAZON_SOCIAL</th>
                        <th class="th__texto" style="text-align:center;">FECHA</th>
                        <th class="th__texto" style="text-align:center;">BENEFICIARIO</th>
                        <th class="th__texto" style="text-align:center;">RFC</th>
                        <th class="th__texto" style="text-align:center;">USO_CFDI</th>
                        <th class="th__texto" style="text-align:center;">ABONO</th>
                        <th class="th__texto" style="text-align:center;">CARGO</th>
                        <th class="th__texto" style="text-align:center;">FACTURA</th>
                        <th class="th__texto" style="text-align:center;">REAL</th>
                        <th class="th__texto" style="text-align:center;">MOTIVO</th>
                        <th class="th__texto" style="text-align:center;">CATEGORIA</th>
                        <th class="th__texto" style="text-align:center;">METODO_DE_PAGO</th>
                        <th class="th__texto" style="text-align:center;">SUBCATEGORIA</th>
                        <th class="th__texto" style="text-align:center;">FLUJO</th>
                        <th class="th__texto" style="text-align:center;">ORIGEN</th>
                        <th class="th__texto" style="text-align:center;">CLIENTE</th>
                        <th class="th__texto" style="text-align:center;">CORREO</th>
                        <th class="th__texto" style="text-align:center;">TELEFONO</th>
                        
                        
                    </thead>
                    <tbody>
                        <tr>
                        <td class="text-center"> <?php echo $datos->OBSERVACION; ?> </td>
                          <td class="text-center"> <?php echo $datos->LLAVE;?> </td>
                          <td class="text-center"> <?php echo $datos->RAZONSOCIAL;?> </td>
                          <td class="text-center"> <?php echo $datos->FECHA;?> </td>
                          <td class="text-center"> <?php echo $datos->BENEFICIARIO;?> </td>
                          <td class="text-center"> <?php echo $datos->RFC; ?> </td>
                          <td class="text-center"> <?php echo $datos->USOCFDI;?> </td>
                          <td class="text-center"> <?php echo $datos->ABONO;?> </td>
                          <td class="text-center"> <?php echo $datos->CARGO;?></td>
                          <td class="text-center"> <?php echo $datos->FACTURA;?> </td>
                          <td class="text-center"> <?php echo $datos->REAL;?> </td>
                          <td class="text-center"> <?php echo $datos->MOTIVO;?> </td>
                          <td class="text-center"> <?php echo $datos->CATEGORIA;?> </td>
                          <td class="text-center"> <?php echo $datos->METODODEPAGO;?> </td>
                          <td class="text-center"> <?php echo $datos->SUBCATEGORIA;?> </td>
                          <td class="text-center"> <?php echo $datos->FLUJO;?> </td>
                          <td class="text-center"> <?php echo $datos->ORIGEN;?> </td>
                          <td class="text-center"> <?php echo $datos->CLIENTE;?> </td>
                          <td class="text-center"> <?php echo $datos->CORREO;?> </td>
                          <td class="text-center"> <?php echo $datos->TELEFONO;?> </td>
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
                <form action="./eliminar_nico.php" method="POST">
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