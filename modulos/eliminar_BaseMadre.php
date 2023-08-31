<?php 
    include "../header.php";
    include "../clases/Conexion.php";
    include "../clases/crud.php"; 

    $crud = new Crud();
    $id = $_POST['id'];

    $datos = $crud -> obtenerDocumentoMadre($id);
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
                        <th >Llave</th>                        
                        <th >Lote</th>
                        <th >Cliente</th>
                        <th >Rfc</th>
                        <th >Uso de cfdi</th>
                        <th >Razon social</th>
                        <th >Domicilio fiscal</th>
                        <th >Telefono</th>
                        <th >Correo</th>
                        <!-- <th >Idcif</th> -->
                        <th >M2</th>
                        <th >Total operacion</th>                        
                        <th >Enganche</th>
                        <th >Financiamiento</th>
                        <th >Firma contrato</th>
                        <th >Fin corrida</th>
                        <th >Total mensualidades</th>
                        <th >No 1er mensualidad</th>
                        <th >1er mensualidad</th>
                        <th >No 2da mensualidad</th>
                        <th >2da mensualidad</th>
                        <th >No 3ra mensualidad</th>
                        <th >3er mensualidad</th>
                        <th >Tipo de interes</th>
                        <th >Mensualidad de entrega</th>
                        <th >Inicio corrida</th>
                        <th >Fecha primer abono</th>
                        <!-- <th >Pagado</th> -->
                        <th >Deuda</th>
                        <th >Fecha Entrega Lote</th>
                        <th >Estatus cm</th>
                        <th >Link sat</th>
                        <th >Notas de pagos</th>
                        <th >Abono referido</th>
                        <th >Estatus</th>
                        <th >Motivo estatus</th>
                        <th >Resultado</th>
                        <th >Fecha de Liberacion</th>
                        <th >Condominio</th>
                        <th >Cluster</th>
                        <th >Desarrollo</th>
                        <th >Apartado telegram</th>
                        <th >Primer Mensualidad</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <?php echo $datos->LLAVE; ?> </td>
                            <td> <?php echo $datos->LOTE;?> </td>
                            <td> <?php echo $datos->CLIENTE;?></td>
                            <td> <?php echo $datos->RFC;?> </td>
                          <!--  <td> <?php echo $datos->IDCIF;?> </td> -->
                            <td> <?php echo $datos->USO_CFDI;?> </td>
                            <td> <?php echo $datos->RAZON_SOCIAL;?> </td>
                            <td> <?php echo $datos->DOMICILIO_FISCAL;?> </td>
                            <td> <?php echo $datos->TELEFONO;?> </td>
                            <td> <?php echo $datos->CORREO;?> </td>
                            <td> <?php echo $datos->M2; ?> </td>
                            <td> <?php echo $datos->TOTAL_OPERACION;?> </td>
                            <td> <?php echo $datos->ENGANCHE;?> </td>
                            <td> <?php echo $datos->FINANCIAMIENTO;?> </td>
                            <td> <?php echo $datos->FIRMA_CONTRATO;?> </td>
                            <td> <?php echo $datos->FIN_CORRIDA;?> </td>
                            <td> <?php echo $datos->TOTAL_MENSUALIDADES; ?> </td>
                            <td> <?php echo $datos->NO_1ER_MENS;?> </td>
                            <td> <?php echo $datos->PRIMERA_MENSUALIDAD;?> </td>
                            <td> <?php echo $datos->NO_2DA_MENS;?> </td>
                            <td> <?php echo $datos->SEGUNDA_MENSUALIDAD; ?> </td>
                            <td> <?php echo $datos->NO_3ER_MENS;?></td>
                            <td> <?php echo $datos->TERCER_MENSUALIDAD;?></td>
                            <td> <?php echo $datos->TIPO_DE_INTERES; ?> </td>
                            <td> <?php echo $datos->MENS_ENTREGA;?> </td>
                            <td> <?php echo $datos->INICIO_CORRIDA;?> </td>
                            <td> <?php echo $datos->FECHA_PRIMER_ABONO; ?> </td>
                          <!--  <td> <?php echo $datos->PAGADO;?> </td> -->
                            <td> <?php echo $datos->DEUDA;?> </td>
                            <td> <?php echo $datos->FECHA_ENTREGA_LOTE; ?> </td>
                            <td> <?php echo $datos->ESTATUS_CM;?> </td>
                            <td> <?php echo $datos->LINK_SAT;?></td>
                            <td> <?php echo $datos->NOTAS_DE_PAGOS;?></td>
                            <td> <?php echo $datos->BONO_REFERIDO; ?> </td>
                            <td> <?php echo $datos->ESTATUS;?> </td>
                            <td> <?php echo $datos->MOTIVO_ESTATUS;?> </td>
                            <td> <?php echo $datos->RESULTADO;?> </td>
                            <td> <?php echo $datos->FECHADELIBERACION;?> </td>
                            <td> <?php echo $datos->CONDOMINIO;?> </td>
                            <td> <?php echo $datos->CLUSTER; ?> </td>
                            <td> <?php echo $datos->DESARROLLO;?> </td>
                            <td> <?php echo $datos->APARTADO_TELEGRAM;?> </td>
                            <td> <?php echo $datos->PRIMER_MENSUALIDAD;?> </td>
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
                <form action="../procesos/eliminar_BaseMadre.php" method="POST">
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



<?php include "../script.php"; ?>
