<?php 
   
    include "../clases/Conexion.php";
    include "./../BBVA/crudbbva.php";

    $crudbbva = new crudbbva();
    $id = $_POST['id'];

    $datos = $crudbbva -> obtenerDocumentoBBVA($id);
?>

<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">

                <a href="../bbva.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Eliminar  Registro</h2>
                
                <table class="table table-bordered">
                    <thead>
                    <th class="th__texto" style="text-align:center;">Semana</th>                        
                        <th class="th__texto" style="text-align:center;">Fecha</th>
                        <th class="th__texto" style="text-align:center;">Beneficiario</th>
                        <th class="th__texto" style="text-align:center;">Ingreso</th>
                        <th class="th__texto" style="text-align:center;">Egreso</th>
                        <th class="th__texto" style="text-align:center;">Saldo</th>
                        <th class="th__texto" style="text-align:center;">Factura</th>
                        <th class="th__texto" style="text-align:center;">Motivo</th>
                        <th class="th__texto" style="text-align:center;">Mes</th>
                        <th class="th__texto" style="text-align:center;">Desarrollo</th>
                        <th class="th__texto" style="text-align:center;">Lote</th>
                        <th class="th__texto" style="text-align:center;">Condominio</th>
                        <th class="th__texto" style="text-align:center;">Cluster</th>
                        <th class="th__texto" style="text-align:center;">Obra</th>
                        <th class="th__texto" style="text-align:center;">Categoria</th>
                        <th class="th__texto" style="text-align:center;">Subcategoria</th>                        
                        <th class="th__texto" style="text-align:center;">Modelo de negocios</th>
                        <th class="th__texto" style="text-align:center;">Flujo</th>
                        <th class="th__texto" style="text-align:center;">Llave</th>
                        <th class="th__texto" style="text-align:center;">Fecha correcta</th>
                        <th class="th__texto" style="text-align:center;">Llave estado de cuenta</th>
                        <th class="th__texto" style="text-align:center;">Clave</th>
                        <th class="th__texto" style="text-align:center;">Metodo de pago</th>
                        
                        
                    </thead>
                    <tbody>
                        <tr>
                          <td class="text-center"> <?php echo $datos->SEMANA;?> </td>
                          <td class="text-center"> <?php echo $datos->FECHA;?> </td>
                          <td class="text-center"> <?php echo $datos->BENEFICIARIO;?> </td>
                          <td class="text-center"> <?php echo $datos->INGRESO; ?> </td>
                          <td class="text-center"> <?php echo $datos->EGRESO;?> </td>
                          <td class="text-center"> <?php echo $datos->SALDO;?> </td>
                          <td class="text-center"> <?php echo $datos->FACTURA;?></td>
                          <td class="text-center"> <?php echo $datos->MOTIVO;?> </td>
                          <td class="text-center"> <?php echo $datos->MES;?> </td>
                          <td class="text-center"> <?php echo $datos->DESARROLLO;?> </td>
                          <td class="text-center"> <?php echo $datos->LOTE;?> </td>
                          <td class="text-center"> <?php echo $datos->CONDOMINIO;?> </td>
                          <td class="text-center"> <?php echo $datos->CLUSTER;?> </td>
                          <td class="text-center"> <?php echo $datos->OBRA;?> </td>
                          <td class="text-center"> <?php echo $datos->CATEGORIA; ?> </td>
                          <td class="text-center"> <?php echo $datos->SUBCATEGORIA;?> </td>
                          <td class="text-center"> <?php echo $datos->MODELODENEGOCIO;?> </td>
                          <td class="text-center"> <?php echo $datos->FLUJO;?> </td>
                          <td class="text-center"> <?php echo $datos->LLAVE;?> </td>
                          <td class="text-center"> <?php echo $datos->FECHACORRECTA;?> </td>
                          <td class="text-center"> <?php echo $datos->LLAVEEDOSDECUENTA; ?> </td>
                          <td class="text-center"> <?php echo $datos->CLAVE;?> </td>
                          <td class="text-center"> <?php echo $datos->METODODEPAGO;?> </td>
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
                <form action="./eliminar_bbva.php" method="POST">
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