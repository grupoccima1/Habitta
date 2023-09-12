<?php 
   
    include "../clases/Conexion.php";
    include "./../clientesmorosos/crudclientesmorosos.php";
    include "../header.php";
    $crudclientesmorosos = new crudclientesmorosos();
    $id = $_POST['id'];

    $datos = $crudclientesmorosos -> obtenerDocumentoClientesMorosos($id);
?>

<div class="container">
<div class="row">
<div class="card mt-4">
    <div class="card-header">
        <a href="../clientesMorosos.php" class="btn btn-outline-info">
            Regresar
        </a>
    </div>
  <div class="card-body">
            <div class="col">
                <h2 class="mb-3 fs-4 text-center">Eliminar  Registro</h2>
                <table class="table table-bordered">
                    <thead>
                                         
                        <th class="th__texto" style="text-align:center;">CONTADOR</th>                        
                        <th class="th__texto" style="text-align:center;">LLAVE</th>
                        <th class="th__texto" style="text-align:center;">DESARROLLO</th>
                        <th class="th__texto" style="text-align:center;">LOTE</th>
                        <th class="th__texto" style="text-align:center;">CONDOMINIO</th>
                        <th class="th__texto" style="text-align:center;">CLUSTER</th>
                        <th class="th__texto" style="text-align:center;">FECHA</th>
                        <th class="th__texto" style="text-align:center;">CLIENTES</th>
                        <th class="th__texto" style="text-align:center;">PRECIO_DEL_LOTE</th>
                        <th class="th__texto" style="text-align:center;">MONTO_MENS</th>
                        <th class="th__texto" style="text-align:center;">MENSUALIDAD</th>
                        <th class="th__texto" style="text-align:center;">INTERES</th>
                        <th class="th__texto" style="text-align:center;">TIPO_DE_INTES</th>
                        <th class="th__texto" style="text-align:center;">I_NEGOCIADO</th>
                        <th class="th__texto" style="text-align:center;">REAL</th>
                        <th class="th__texto" style="text-align:center;">MENS_PAGADA</th>
                        <th class="th__texto" style="text-align:center;">MEN_ADEUDADA</th>
                        <th class="th__texto" style="text-align:center;">FECHA_DE_ACUERDO</th>
                        <th class="th__texto" style="text-align:center;">MEDIO</th>
                        <th class="th__texto" style="text-align:center;">PLAZOS</th>
                        <th class="th__texto" style="text-align:center;">INICIO</th>
                        <th class="th__texto" style="text-align:center;">FIN</th>
                        <th class="th__texto" style="text-align:center;">ESTATUS_DE_INTERES</th>
                        <th class="th__texto" style="text-align:center;">COMENTARIO</th>
                        <th class="th__texto" style="text-align:center;">NEGOCIADO</th>
                        <th class="th__texto" style="text-align:center;">DEPARTAMENTO</th>
                        <th class="th__texto" style="text-align:center;">AÑO</th>
                        
                    </thead>
                    <tbody>
                        <tr>
                          <td class="text-center"> <?php echo $datos->CONTADOR; ?> </td>
                          <td class="text-center"> <?php echo $datos->LLAVE;?> </td>
                          <td class="text-center"> <?php echo $datos->DESARROLLO;?> </td>
                          <td class="text-center"> <?php echo $datos->LOTE;?> </td>
                          <td class="text-center"> <?php echo $datos->CONDOMINIO;?> </td>
                          <td class="text-center"> <?php echo $datos->CLÚSTER; ?> </td>
                          <td class="text-center"> <?php echo $datos->FECHA;?> </td>
                          <td class="text-center"> <?php echo $datos->CLIENTE;?> </td>
                          <td class="text-center"> <?php echo $datos->PRECIO_DEL_LOTE;?></td>
                          <td class="text-center"> <?php echo $datos->MONTO_MENS;?> </td>
                          <td class="text-center"> <?php echo $datos->MENSUALIDAD;?> </td>
                          <td class="text-center"> <?php echo $datos->INTERES;?> </td>
                          <td class="text-center"> <?php echo $datos->TIPO_DE_INTES;?> </td>
                          <td class="text-center"> <?php echo $datos->I_NEGOCIADO;?> </td>
                          <td class="text-center"> <?php echo $datos->REAL;?> </td>
                          <td class="text-center"> <?php echo $datos->MENS_PAGADA;?> </td>
                          <td class="text-center"> <?php echo $datos->MEN_ADEUDADA;?> </td>
                          <td class="text-center"> <?php echo $datos->FECHA_DE_ACUERDO;?> </td>
                          <td class="text-center"> <?php echo $datos->MEDIO;?> </td>
                          <td class="text-center"> <?php echo $datos->PLAZOS;?> </td>
                          <td class="text-center"> <?php echo $datos->INICIO;?> </td>
                          <td class="text-center"> <?php echo $datos->FIN;?> </td>
                          <td class="text-center"> <?php echo $datos->ESTATUS_DE_INTERES;?> </td>
                          <td class="text-center"> <?php echo $datos->COMENTARIO;?> </td>
                          <td class="text-center"> <?php echo $datos->NEGOCIADO?> </td>
                          <td class="text-center"> <?php echo $datos->DEPARTAMENTO;?> </td>
                          <td class="text-center"> <?php echo $datos->AÑO;?> </td>
                          <td class="text-center"> <?php echo $datos->empty_AE;?> </td>
                          <td class="text-center"> <?php echo $datos->empty_AF;?> </td>
                          <td class="text-center"> <?php echo $datos->empty_AG;?> </td>
                          <td class="text-center"> <?php echo $datos->empty_AH;?> </td>
                          <td class="text-center"> <?php echo $datos->empty_AI;?> </td>
                          <td class="text-center"> <?php echo $datos->empty_AJ;?> </td>
                            </tr>
                    </tbody>
                </table>
                <hr>
                <div class="aler alert-danger" role="alert">
                    <h3 class="">¿Estas seguro de eliminar este registro?</h3>
                    <p>
                        Una vez eliminado no podras recuperarlo
                    </p>
                </div>
                <form action="./eliminar_clientesmorosos.php" method="POST">
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