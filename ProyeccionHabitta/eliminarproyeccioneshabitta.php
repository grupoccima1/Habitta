<?php 
   
    include "../clases/Conexion.php";
    include "./../ProyeccionHabitta/crudproyeccionhabitta.php";

    $crudproyeccionhabitta = new crudproyeccionhabitta();
    $id = $_POST['id'];

    $datos = $crudproyeccionhabitta -> obtenerDocumentoProyeccionHabitta($id);
?>

<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">

                <a href="../ProyeccionesFlujoHabitta.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Eliminar  Registro</h2>
                
                <table class="table table-bordered">
                    <thead>
                        <th class="th__texto" style="text-align:center;">MES</th>                        
                        <th class="th__texto" style="text-align:center;">fecha_2020</th>
                        <th class="th__texto" style="text-align:center;">fecha_2021</th>
                        <th class="th__texto" style="text-align:center;">fecha_2022</th>
                        <th class="th__texto" style="text-align:center;">fecha_2023</th>
                        <th class="th__texto" style="text-align:center;">fecha_2024</th>
                        <th class="th__texto" style="text-align:center;">fecha_2025</th>
                        <th class="th__texto" style="text-align:center;">fecha_2026</th>
                        <th class="th__texto" style="text-align:center;">fecha_2027</th>
                        <th class="th__texto" style="text-align:center;">fecha_2028</th>
                        <th class="th__texto" style="text-align:center;">fecha_2029</th>
                        <th class="th__texto" style="text-align:center;">fecha_2030</th>
                        <th class="th__texto" style="text-align:center;">fecha_2031</th>
                        <th class="th__texto" style="text-align:center;">fecha_2032</th>
                        <th class="th__texto" style="text-align:center;">fecha_2033</th>
                        <th class="th__texto" style="text-align:center;">fecha_2034</th>
                        <th class="th__texto" style="text-align:center;">fecha_2035</th>
                        <th class="th__texto" style="text-align:center;">fecha_2036</th>
                        <th class="th__texto" style="text-align:center;">fecha_2037</th>
                        <th class="th__texto" style="text-align:center;">fecha_general</th>
                        <th class="th__texto" style="text-align:center;">DESIERTO</th>
                        <th class="th__texto" style="text-align:center;">ESTEPA</th>
                        <th class="th__texto" style="text-align:center;">PARAMO</th>
                        <th class="th__texto" style="text-align:center;">TAIGA</th>
                        <th class="th__texto" style="text-align:center;">BOSQUE</th>
                        <th class="th__texto" style="text-align:center;">LOMAS</th>
                        <th class="th__texto" style="text-align:center;">Total_general</th>
                        <th class="th__texto" style="text-align:center;">SELVA</th>
                        <th class="th__texto" style="text-align:center;">LAGO</th>
                        <th class="th__texto" style="text-align:center;">MANGLAR</th>
                        
                        
                    </thead>
                    <tbody>
                        <tr>
                          <td class="text-center"> <?php echo $datos->MES;?> </td>
                          <td class="text-center"> <?php echo $datos->fecha_2020;?> </td>
                          <td class="text-center"> <?php echo $datos->fecha_2021;?> </td>
                          <td class="text-center"> <?php echo $datos->fecha_2022;?> </td>
                          <td class="text-center"> <?php echo $datos->fecha_2023;?> </td>
                          <td class="text-center"> <?php echo $datos->fecha_2024;?> </td>
                          <td class="text-center"> <?php echo $datos->fecha_2025;?> </td>
                          <td class="text-center"> <?php echo $datos->fecha_2026;?> </td>
                          <td class="text-center"> <?php echo $datos->fecha_2027;?></td>
                          <td class="text-center"> <?php echo $datos->fecha_2028;?> </td>
                          <td class="text-center"> <?php echo $datos->fecha_2029;?> </td>
                          <td class="text-center"> <?php echo $datos->fecha_2030;?> </td>
                          <td class="text-center"> <?php echo $datos->fecha_2031;?> </td>
                          <td class="text-center"> <?php echo $datos->fecha_2032;?> </td>
                          <td class="text-center"> <?php echo $datos->fecha_2033;?> </td>
                          <td class="text-center"> <?php echo $datos->fecha_2034;?> </td>
                          <td class="text-center"> <?php echo $datos->fecha_2035;?> </td>
                          <td class="text-center"> <?php echo $datos->fecha_2036;?> </td>
                          <td class="text-center"> <?php echo $datos->fecha_2037;?> </td>
                          <td class="text-center"> <?php echo $datos->fecha_general;?> </td>
                          <td class="text-center"> <?php echo $datos->DESIERTO;?> </td>
                          <td class="text-center"> <?php echo $datos->ESTEPA;?> </td>
                          <td class="text-center"> <?php echo $datos->PARAMO;?> </td>
                          <td class="text-center"> <?php echo $datos->TAIGA;?> </td>
                          <td class="text-center"> <?php echo $datos->BOSQUE;?> </td>
                          <td class="text-center"> <?php echo $datos->LOMAS;?> </td>
                          <td class="text-center"> <?php echo $datos->Total_general;?> </td>
                          <td class="text-center"> <?php echo $datos->SELVA;?> </td>
                          <td class="text-center"> <?php echo $datos->LAGO;?> </td>
                          <td class="text-center"> <?php echo $datos->MANGLAR;?> </td>
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
                <form action="./eliminar_proyeccionhabitta.php" method="POST">
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