<?php 
   
    include "../clases/Conexion.php";
    include "./../AcumuladoSherpa/crudacumuladosherpa.php";

    $crudacumuladosherpa = new crudacumuladosherpa();
    $id = $_POST['id'];

    $datos = $crudacumuladosherpa -> obtenerDocumentoSherpa($id);
?>

<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">

                <a href="../acumuladosherpa.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Eliminar  Registro</h2>
                
                <table class="table table-bordered">
                    <thead>
                    <th class="th__texto" style="text-align:center;">Llave</th>                        
                        <th class="th__texto" style="text-align:center;">FECHA_DE_INGRESO</th>
                        <th class="th__texto" style="text-align:center;">LOTE</th>
                        <th class="th__texto" style="text-align:center;">CONDOMINIO</th>
                        <th class="th__texto" style="text-align:center;">CLUSTER</th>
                        <th class="th__texto" style="text-align:center;">DESARROLLO</th>
                        <th class="th__texto" style="text-align:center;">PUESTO</th>
                        <th class="th__texto" style="text-align:center;">COMISIONISTA</th>
                        <th class="th__texto" style="text-align:center;">TOTAL_DE_LA_VENTA</th>
                        <th class="th__texto" style="text-align:center;">ENGANCHE</th>
                        <th class="th__texto" style="text-align:center;">%_COMISION</th>
                        <th class="th__texto" style="text-align:center;">TOTAL_COMISION</th>
                        <th class="th__texto" style="text-align:center;">DESCUENTO</th>
                        <th class="th__texto" style="text-align:center;">DESC</th>
                        <th class="th__texto" style="text-align:center;">A_PAGAR_EXTERNOS</th>
                        <th class="th__texto" style="text-align:center;">SUBTOTAL</th>
                        <th class="th__texto" style="text-align:center;">IVA</th>
                        <th class="th__texto" style="text-align:center;">RETENCIONES_DE_IVA</th>
                        <th class="th__texto" style="text-align:center;">RETENCIONES_ISR</th>                        
                        <th class="th__texto" style="text-align:center;">TOTAL</th>
                        <th class="th__texto" style="text-align:center;">PAGO</th>
                        <th class="th__texto" style="text-align:center;">NOTAS</th>
                        <th class="th__texto" style="text-align:center;">PAGADO</th>
                        <th class="th__texto" style="text-align:center;">METODO_DE_PAGO</th>
                        <th class="th__texto" style="text-align:center;">FECHA_PAGADA</th>
                        <th class="th__texto" style="text-align:center;">NOMBRE_CORRECTO</th>
                        <th class="th__texto" style="text-align:center;">SEMANA_PAGADA</th>
                        <th class="th__texto" style="text-align:center;">SEMANA</th>
                        <th class="th__texto" style="text-align:center;">X_TIPO_DE_REGIMEN</th>
                        <th class="th__texto" style="text-align:center;">CUENTA</th>
                        <th class="th__texto" style="text-align:center;">MOTIVO_DE_DESCUENTO</th>
                        <th class="th__texto" style="text-align:center;">ESTATUS</th>
                        <th class="th__texto" style="text-align:center;">LOTE_ANTERIOR</th>
                        
                        
                    </thead>
                    <tbody>
                        <tr>
                          <td class="text-center"> <?php echo $datos->LLAVE; ?></td>
                          <td class="text-center"> <?php echo $datos->FECHA_DE_INGRESO;?> </td>
                          <td class="text-center"> <?php echo $datos->LOTE;?> </td>
                          <td class="text-center"> <?php echo $datos->CONDOMINIO;?> </td>
                          <td class="text-center"> <?php echo $datos->CLUSTER;?> </td>
                          <td class="text-center"> <?php echo $datos->DESARROLLO; ?> </td>
                          <td class="text-center"> <?php echo $datos->PUESTO;?> </td>
                          <td class="text-center"> <?php echo $datos->COMISIONISTA;?> </td>
                          <td class="text-center"> <?php echo $datos->TOTAL_DE_LA_VENTA;?></td>
                          <td class="text-center"> <?php echo $datos->ENGANCHE;?> </td>
                          <td class="text-center"> <?php echo $datos->PCOMISION;?> </td>
                          <td class="text-center"> <?php echo $datos->TOTAL_COMISION;?> </td>
                          <td class="text-center"> <?php echo $datos->DESCUENTO;?> </td>
                          <td class="text-center"> <?php echo $datos->DESC;?> </td>
                          <td class="text-center"> <?php echo $datos->A_PAGAR_EXTERNOS;?> </td>
                          <td class="text-center"> <?php echo $datos->SUBTOTAL;?> </td>
                          <td class="text-center"> <?php echo $datos->IVA;?> </td>
                          <td class="text-center"> <?php echo $datos->RETENCIONES_DE_IVA; ?> </td>
                          <td class="text-center"> <?php echo $datos->RETENCIONES_ISR;?> </td>
                          <td class="text-center"> <?php echo $datos->TOTAL;?> </td>
                          <td class="text-center"> <?php echo $datos->PAGO;?> </td>
                          <td class="text-center"> <?php echo $datos->NOTAS;?> </td>
                          <td class="text-center"> <?php echo $datos->PAGADO;?> </td>
                          <td class="text-center"> <?php echo $datos->METODO_DE_PAGO; ?> </td>
                          <td class="text-center"> <?php echo $datos->FECHA_PAGADA;?> </td>
                          <td class="text-center"> <?php echo $datos->NOMBRE_CORRECTO;?> </td>
                          <td class="text-center"> <?php echo $datos->SEMANA_PAGADA; ?> </td>
                          <td class="text-center"> <?php echo $datos->SEMANA;?> </td>
                          <td class="text-center"> <?php echo $datos->X_TIPO_DE_REGIMEN;?></td>
                          <td class="text-center"> <?php echo $datos->CUENTA;?></td>
                          <td class="text-center"> <?php echo $datos->MOTIVO_DE_DESCUENTO; ?> </td>
                          <td class="text-center"> <?php echo $datos->ESTATUS;?> </td>
                          <td class="text-center"> <?php echo $datos->LOTE_ANTERIOR;?> </td>
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
                <form action="./eliminar_acumuladosherpa.php" method="POST">
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