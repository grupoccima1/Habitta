<?php 
   
    include "../clases/Conexion.php";
    include "./../BaseMadre/crud_BaseMadre.php";

    $crudbasemadre = new crudbasemadre();
    $id = $_POST['id'];

    $datos = $crudbasemadre -> obtenerDocumentoMadre($id);
?>

<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">

                <a href="../basemadre.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Eliminar  Registro</h2>
                
                <table class="table table-bordered">
                    <thead>
                    <th class="th__texto" style="text-align:center;">Llave</th>                        
                    <th class="th__texto" style="text-align:center;">Lote</th>
                        <th class="th__texto" style="text-align:center;">Condominio</th>
                        <th class="th__texto" style="text-align:center;">Cluster</th>
                        <th class="th__texto" style="text-align:center;">Desarrollo</th>
                        <th class="th__texto" style="text-align:center;">Apartado telegram</th>
                        <th class="th__texto" style="text-align:center;">Cliente</th>
                        <th class="th__texto" style="text-align:center;">Rfc</th>
                        <!-- <th class="th__texto" style="text-align:center;">Idcif</th> -->
                        <th class="th__texto" style="text-align:center;">Uso de cfdi</th>
                        <th class="th__texto" style="text-align:center;">Razon social</th>
                        <th class="th__texto" style="text-align:center;">Domicilio fiscal</th>
                        <th class="th__texto" style="text-align:center;">Telefono</th>
                        <th class="th__texto" style="text-align:center;">Correo</th>
                        <th class="th__texto" style="text-align:center;">M2</th>
                        <th class="th__texto" style="text-align:center;">Total operacion</th>                        
                        <th class="th__texto" style="text-align:center;">Enganche</th>
                        <th class="th__texto" style="text-align:center;">Financiamiento</th>
                        <th class="th__texto" style="text-align:center;">Firma contrato</th>
                        <th class="th__texto" style="text-align:center;">Fin corrida</th>
                        <th class="th__texto" style="text-align:center;">Total mensualidades</th>
                        <th class="th__texto" style="text-align:center;">No 1er mensualidad</th>
                        <th class="th__texto" style="text-align:center;">1er mensualidad</th>
                        <th class="th__texto" style="text-align:center;">No 2da mensualidad</th>
                        <th class="th__texto" style="text-align:center;">2da mensualidad</th>
                        <th class="th__texto" style="text-align:center;">No 3ra mensualidad</th>
                        <th class="th__texto" style="text-align:center;">3er mensualidad</th>
                        <th class="th__texto" style="text-align:center;">Tipo de interes</th>
                        <th class="th__texto" style="text-align:center;">Mensualidad de entrega</th>
                        <th class="th__texto" style="text-align:center;">Inicio corrida</th>
                        <th class="th__texto" style="text-align:center;">Fecha primer abono</th>
                        <!-- <th class="th__texto" style="text-align:center;">Pagado</th> -->
                        <th class="th__texto" style="text-align:center;">Deuda</th>
                        <th class="th__texto" style="text-align:center;">Fecha Entrega Lote</th>
                        <th class="th__texto" style="text-align:center;">Estatus cm</th>
                        <th class="th__texto" style="text-align:center;">Link sat</th>
                        <th class="th__texto" style="text-align:center;">Notas de pagos</th>
                        <th class="th__texto" style="text-align:center;">Abono referido</th>
                        <th class="th__texto" style="text-align:center;">Estatus</th>
                        <th class="th__texto" style="text-align:center;">Motivo estatus</th>
                        <th class="th__texto" style="text-align:center;">Resultado</th>
                    </thead>
                    <tbody>
                        <tr>
                        <td class="text-center"> <?php echo $datos->LOTE;?> </td>
                          <td class="text-center"> <?php echo $datos->CONDOMINIO;?> </td>
                          <td class="text-center"> <?php echo $datos->CLUSTER; ?> </td>
                          <td class="text-center"> <?php echo $datos->DESARROLLO;?> </td>
                          <td class="text-center"> <?php echo $datos->APARTADOTELEGRAM;?> </td>
                          <td class="text-center"> <?php echo $datos->CLIENTE;?></td>
                          <td class="text-center"> <?php echo $datos->RFC;?> </td>
                          <td class="text-center"> <?php echo $datos->IDCIF;?> </td> 
                          <td class="text-center"> <?php echo $datos->USOCFDI;?> </td>
                          <td class="text-center"> <?php echo $datos->RAZONSOCIAL;?> </td>
                          <td class="text-center"> <?php echo $datos->DOMICILIOFISCAL;?> </td>
                          <td class="text-center"> <?php echo $datos->TELEFONO;?> </td>
                          <td class="text-center"> <?php echo $datos->CORREO;?> </td>
                          <td class="text-center"> <?php echo $datos->M2; ?> </td>
                          <td class="text-center"> <?php echo $datos->TOTALOPERACION; ?> </td>
                          <td class="text-center"> <?php echo $datos->ENGANCHE;?> </td>
                          <td class="text-center"> <?php echo $datos->FINANCIAMIENTO;?> </td>
                          <td class="text-center"> <?php echo $datos->FIRMACONTRATO;?> </td>
                          <td class="text-center"> <?php echo $datos->FINCORRIDA;?> </td>
                          <td class="text-center"> <?php echo $datos->TOTALMENSUALIDADES; ?> </td>
                          <td class="text-center"> <?php echo $datos->NO1ERMENS;?> </td>
                          <td class="text-center"> <?php echo $datos->ERMENSUALIDAD;?> </td>
                          <td class="text-center"> <?php echo $datos->NO2DAMENS;?> </td>
                          <td class="text-center"> <?php echo $datos->DAMENSUALIDAD; ?> </td>
                          <td class="text-center"> <?php echo $datos->NO3ERMENS;?></td>
                          <td class="text-center"> <?php echo $datos->ERMENSUALIDAD;?></td>
                          <td class="text-center"> <?php echo $datos->TIPODEINTERES; ?> </td>
                          <td class="text-center"> <?php echo $datos->MENSENTREGA;?> </td>
                          <td class="text-center"> <?php echo $datos->INICIOCORRIDA;?> </td>
                          <td class="text-center"> <?php echo $datos->FECHAPRIMERABONO; ?> </td>
                         <td class="text-center"> <?php echo $datos->PAGADO;?> </td> 
                          <td class="text-center"> <?php echo $datos->DEUDA;?> </td>
                          <td class="text-center"> <?php echo $datos->FECHAENTREGALOTE; ?> </td>
                          <td class="text-center"> <?php echo $datos->ESTATUSCM;?> </td>
                          <td class="text-center"> <?php echo $datos->LINKSAT;?></td>
                          <td class="text-center"> <?php echo $datos->NOTASDEPAGOS;?></td>
                          <td class="text-center"> <?php echo $datos->BONOREFERIDO; ?> </td>
                          <td class="text-center"> <?php echo $datos->ESTATUS;?> </td>
                          <td class="text-center"> <?php echo $datos->MOTIVOESTATUS;?> </td>
                          <td class="text-center"> <?php echo $datos->RESULTADO;?> </td>
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
                <form action="./eliminar_basemadre.php" method="POST">
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