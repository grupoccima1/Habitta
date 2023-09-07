<?php 
   
    include "../clases/Conexion.php";
    include "./../CorteMR/crudcortemr.php";

    $crudcortemr = new crudcortemr();
    $id = $_POST['id'];

    $datos = $crudcortemr -> obtenerDocumentoCorteMR($id);
?>

<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">

                <a href="../CorteMoraRango.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Eliminar  Registro</h2>
                
                <table class="table table-bordered">
                    <thead>
                    <th class="th__texto" style="text-align:center;">RANGO_DE_MOROSIDAD</th>                        
                        <th class="th__texto" style="text-align:center;">NUM_DE_CLIENTES</th>
                        <th class="th__texto" style="text-align:center;">CLÚSTER</th>
                        <th class="th__texto" style="text-align:center;">DESARROLLO</th>
                        <th class="th__texto" style="text-align:center;">CLIENTES_EN_MORA</th>
                        <th class="th__texto" style="text-align:center;">CONTRATOS_FIRMADOS</th>
                        <th class="th__texto" style="text-align:center;">PDE_MOROSIDAD</th>
                        <th class="th__texto" style="text-align:center;">CONTRATOS_FIRMADOS</th>
                        <th class="th__texto" style="text-align:center;">VENCIDO</th>
                        <th class="th__texto" style="text-align:center;">INTERES_MORATORIO</th>
                        <th class="th__texto" style="text-align:center;">LOTE</th>
                        <th class="th__texto" style="text-align:center;">CONDOMINIO</th>
                        <th class="th__texto" style="text-align:center;">ESTATUS</th>
                        <th class="th__texto" style="text-align:center;">TOTAL_VENCIDO</th>
                        <th class="th__texto" style="text-align:center;">INT_MORATORIO</th>
                        <th class="th__texto" style="text-align:center;">enero_2020</th>
                        <th class="th__texto" style="text-align:center;">febrero_2020</th>
                        <th class="th__texto" style="text-align:center;">marzo_2020</th>
                        <th class="th__texto" style="text-align:center;">abril_2020</th>
                        <th class="th__texto" style="text-align:center;">mayo_2020</th>
                        <th class="th__texto" style="text-align:center;">junio_2020</th>
                        <th class="th__texto" style="text-align:center;">julio_2020</th>
                        <th class="th__texto" style="text-align:center;">agosto_2020</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2020</th>
                        <th class="th__texto" style="text-align:center;">octubre_2020</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2020</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2020</th>
                        <th class="th__texto" style="text-align:center;">enero_2021</th>
                        <th class="th__texto" style="text-align:center;">febrero_2021</th>
                        <th class="th__texto" style="text-align:center;">marzo_2021</th>
                        <th class="th__texto" style="text-align:center;">abril_2021</th>
                        <th class="th__texto" style="text-align:center;">mayo_2021</th>
                        <th class="th__texto" style="text-align:center;">junio_2021</th>
                        <th class="th__texto" style="text-align:center;">julio_2021</th>
                        <th class="th__texto" style="text-align:center;">agosto_2021</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2021</th>
                        <th class="th__texto" style="text-align:center;">otubre_2021</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2021</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2021</th>
                        <th class="th__texto" style="text-align:center;">enero_2022</th>
                        <th class="th__texto" style="text-align:center;">febrero_2022</th>
                        <th class="th__texto" style="text-align:center;">marzo_2022</th>
                        <th class="th__texto" style="text-align:center;">abril_2022</th>
                        <th class="th__texto" style="text-align:center;">mayo_2022</th>
                        <th class="th__texto" style="text-align:center;">junio_2022</th>
                        <th class="th__texto" style="text-align:center;">julio_2022</th>
                        <th class="th__texto" style="text-align:center;">agosto_2022</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2022</th>
                        <th class="th__texto" style="text-align:center;">octubre_2022</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2022</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2022</th>
                        <th class="th__texto" style="text-align:center;">enero_2023</th>
                        <th class="th__texto" style="text-align:center;">febrero_2023</th>
                        <th class="th__texto" style="text-align:center;">marzo_2023</th>
                        <th class="th__texto" style="text-align:center;">abril_2023</th>
                        <th class="th__texto" style="text-align:center;">mayo_2023</th>
                        <th class="th__texto" style="text-align:center;">junio_2023</th>
                        <th class="th__texto" style="text-align:center;">julio_2023</th>
                        <th class="th__texto" style="text-align:center;">agosto_2023</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2023</th>
                        <th class="th__texto" style="text-align:center;">octubre_2023</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2023</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2023</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2023</th>
                        
                        
                    </thead>
                    <tbody>
                        <tr>
                          <td class="text-center"> <?php echo $datos->RANGO_DE_MOROSIDAD; ?> </td>
                          <td class="text-center"> <?php echo $datos->NUM_DE_CLIENTES;?> </td>
                          <td class="text-center"> <?php echo $datos->CLÚSTER;?> </td>
                          <td class="text-center"> <?php echo $datos->DESARROLLO;?> </td>
                          <td class="text-center"> <?php echo $datos->CLIENTES_EN_MORA;?> </td>
                          <td class="text-center"> <?php echo $datos->CONTRATOS_FIRMADOS; ?> </td>
                          <td class="text-center"> <?php echo $datos->PDE_MOROSIDAD;?> </td>
                          <td class="text-center"> <?php echo $datos->VENCIDO;?> </td>
                          <td class="text-center"> <?php echo $datos->INTERES_MORATORIO;?></td>
                          <td class="text-center"> <?php echo $datos->LOTE;?> </td>
                          <td class="text-center"> <?php echo $datos->CONDOMINIO;?> </td>
                          <td class="text-center"> <?php echo $datos->CLIENTE;?> </td>
                          <td class="text-center"> <?php echo $datos->ESTATUS;?> </td>
                          <td class="text-center"> <?php echo $datos->TOTAL_VENCIDO;?> </td>
                          <td class="text-center"> <?php echo $datos->INT_MORATORIO;?> </td>
                          <td class="text-center"> <?php echo $datos->enero_2020;?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2020;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2020;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2020;?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2020;?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2020;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2020;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2020;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2020;?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2020;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2020;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2020;?> </td>
                          <td class="text-center"> <?php echo $datos->enero_2021;?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2021;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2021;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2021;?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2021;?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2021;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2021;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2021;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2021;?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2021;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2021;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2021;?> </td>
                          <td class="text-center"> <?php echo $datos->enero_2022;?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2022;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2022;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2022;?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2022;?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2022;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2022;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2022;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2022;?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2022;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2022;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2022;?> </td>
                          <td class="text-center"> <?php echo $datos->enero_2023;?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2023;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2023;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2023;?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2023;?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2023;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2023;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2023;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2023;?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2023;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2023;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2023;?> </td>
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
                <form action="./eliminar_cortemr.php" method="POST">
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