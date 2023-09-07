<?php 
   
    include "../clases/Conexion.php";
    include "./../Flujo/crud_Flujo.php";

    $crudflujo = new crudflujo();
    $id = $_POST['id'];

    $datos = $crudflujo -> obtenerDocumentoFlujo($id);
?>

<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">

                <a href="../flujo.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Eliminar  Registro</h2>
                
                <table class="table table-bordered">
                    <thead>
                    <th class="th__texto" style="text-align:center;">Crear recibo</th>                        
                        <th class="th__texto" style="text-align:center;">Notas</th>
                        <th class="th__texto" style="text-align:center;">Enviado</th>
                        <th class="th__texto" style="text-align:center;">Llave</th>
                        <th class="th__texto" style="text-align:center;">Beneficiario</th>
                        <th class="th__texto" style="text-align:center;">Factura</th>
                        <th class="th__texto" style="text-align:center;">Fecha</th>
                        <th class="th__texto" style="text-align:center;">Motivo</th>
                        <th class="th__texto" style="text-align:center;">Categoria</th>
                        <th class="th__texto" style="text-align:center;">Origen</th>
                        <th class="th__texto" style="text-align:center;">Subcategoria</th>
                        <th class="th__texto" style="text-align:center;">Mes</th>
                        <th class="th__texto" style="text-align:center;">Año</th>
                        <th class="th__texto" style="text-align:center;">Flujo2</th>
                        <th class="th__texto" style="text-align:center;">Lote</th>
                        <th class="th__texto" style="text-align:center;">Condominio</th>                        
                        <th class="th__texto" style="text-align:center;">Cluster</th>
                        <th class="th__texto" style="text-align:center;">Desarrollo</th>
                        <th class="th__texto" style="text-align:center;">Cliente</th>
                        <th class="th__texto" style="text-align:center;">Correo</th>
                        <th class="th__texto" style="text-align:center;">1er mensualidad</th>
                        
                    </thead>
                    <tbody>
                        <tr>
                        <td class="text-center"> <?php echo $datos->CREAR_RECIBO; ?> </td>
                          <td class="text-center"> <?php echo $datos->NOTAS;?> </td>
                          <td class="text-center"> <?php echo $datos->ENVIADO;?> </td>
                          <td class="text-center"> <?php echo $datos->LLAVE; ?> </td>
                          <td class="text-center"> <?php echo $datos->BENEFICIARIO;?> </td>
                          <td class="text-center"> <?php echo $datos->FACTURA;?> </td>
                          <td class="text-center"> <?php echo $datos->FECHA;?></td>
                          <td class="text-center"> <?php echo $datos->MOTIVO;?> </td>
                          <td class="text-center"> <?php echo $datos->CATEGORIA;?> </td>
                          <td class="text-center"> <?php echo $datos->ORIGEN;?> </td>
                          <td class="text-center"> <?php echo $datos->SUBCATEGORIA;?> </td>
                          <td class="text-center"> <?php echo $datos->MES;?> </td>
                          <td class="text-center"> <?php echo $datos->AÑO;?> </td>
                          <td class="text-center"> <?php echo $datos->FLUJO2;?> </td>
                          <td class="text-center"> <?php echo $datos->LOTE; ?> </td>
                          <td class="text-center"> <?php echo $datos->CONDOMINIO;?> </td>
                          <td class="text-center"> <?php echo $datos->CLUSTER;?> </td>
                          <td class="text-center"> <?php echo $datos->DESARROLLO;?> </td>
                          <td class="text-center"> <?php echo $datos->CLIENTE;?> </td>
                          <td class="text-center"> <?php echo $datos->CORREO;?> </td>
                          <td class="text-center"> <?php echo $datos->ER_MENSUALIDAD; ?> </td>
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
                <form action="./eliminar_flujo.php" method="POST">
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