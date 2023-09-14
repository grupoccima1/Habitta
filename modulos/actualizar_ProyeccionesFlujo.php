<?php 
    include "../header.php";
    include "../clases/Conexion.php";
    include "../clases/crud.php";

    $crud = new Crud();
    $id = $_POST['id'];
    $datos = $crud -> obtenerDocumentoProyeccionesFlujo($id);
    $idMongo = $datos -> _id;
?>

<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-body">
                <div class="col">

                <a href="../ProyeccionesFlujoHabitta.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Actualizar Registro</h2>
                <form action="../procesos/actualizar_ProyeccionesFlujo.php" method="POST">
                    <input type="text" name="id" id="id" hidden value="<?php echo $idMongo ?>">
                    <label for="mes">Mes</label>
                    <input type="text" name="mes" id="mes" class="form-control" value="<?php echo $datos->MES ?>">
                    <label for="fecha2020">Fecha 2020</label>
                    <input type="text" name="fecha2020" id="fecha2020" class="form-control" value="<?php echo $datos->fecha_2020 ?>">
                    <label for="fecha2021">Fecha 2021</label>
                    <input type="text" name="fecha2021" id="fecha2021" class="form-control" value="<?php echo $datos->fecha_2021 ?>">
                    <label for="fecha2022">Fecha 2022</label>
                    <input type="text" name="fecha2022" id="fecha2022" class="form-control" value="<?php echo $datos->fecha_2022 ?>">
                    <label for="fecha2023">Fecha 2023</label>
                    <input type="text" name="fecha2023" id="fecha2023" class="form-control" value="<?php echo $datos->fecha_2023 ?>">
                    <label for="fecha2024">Fecha 2024</label>
                    <input type="text" name="fecha2024" id="fecha2024" class="form-control" value="<?php echo $datos->fecha_2024 ?>">
                    <label for="fecha2025">Fecha 2025</label>
                    <input type="text" name="fecha2025" id="fecha2025" class="form-control" value="<?php echo $datos->fecha_2025 ?>">
                    <label for="fecha2026">Fecha 2026</label>
                    <input type="text" name="fecha2026" id="fecha2026" class="form-control" value="<?php echo $datos->fecha_2026 ?>">
                    <label for="fecha2027">Fecha 2027</label>
                    <input type="text" name="fecha2027" id="fecha2027" class="form-control" value="<?php echo $datos->fecha_2027 ?>">
                    <label for="fecha2028">Fecha 2028</label>
                    <input type="text" name="fecha2028" id="fecha2028" class="form-control" value="<?php echo $datos->fecha_2028 ?>">
                    <label for="fecha2029">Fecha 2029</label>
                    <input type="text" name="fecha2029" id="fecha2029" class="form-control" value="<?php echo $datos->fecha_2029 ?>">
                    <label for="fecha2030">Fecha 2030</label>
                    <input type="text" name="fecha2030" id="fecha2030" class="form-control" value="<?php echo $datos->fecha_2030 ?>">
                    <label for="fecha2031">Fecha 2031</label>
                    <input type="text" name="fecha2031" id="fecha2031" class="form-control" value="<?php echo $datos->fecha_2031 ?>">
                    <label for="fecha2032">Fecha 2032</label>
                    <input type="text" name="fecha2032" id="fecha2032" class="form-control" value="<?php echo $datos->fecha_2032 ?>">
                    <label for="fecha2033">Fecha 2033</label>
                    <input type="text" name="fecha2033" id="fecha2033" class="form-control" value="<?php echo $datos->fecha_2033 ?>">
                    <label for="fecha2034">Fecha 2034</label>
                    <input type="text" name="fecha2034" id="fecha2034" class="form-control" value="<?php echo $datos->fecha_2034 ?>">
                    <label for="fecha2035">Fecha 2035</label>
                    <input type="text" name="fecha2035" id="fecha2035" class="form-control" value="<?php echo $datos->fecha_2035 ?>">
                    <label for="fecha2036">Fecha 2036</label>
                    <input type="text" name="fecha2036" id="fecha2036" class="form-control" value="<?php echo $datos->fecha_2036 ?>">
                    <label for="fecha2037">Fecha 2037</label>
                    <input type="text" name="fecha2037" id="fecha2037" class="form-control" value="<?php echo $datos->fecha_2037 ?>">
                    <label for="fecha_general">Correo</label>
                    <input type="text" name="fecha_general" id="fecha_general" class="form-control" value="<?php echo $datos->fecha_general ?>">
                    <label for="desierto">Desierto</label>
                    <input type="text" name="desierto" id="desierto" class="form-control" value="<?php echo $datos->DESIERTO ?>">
                    <label for="estepa">Estepa</label>
                    <input type="text" name="estepa" id="estepa" class="form-control" value="<?php echo $datos->ESTEPA ?>">
                    <label for="paramo">Paramo</label>
                    <input type="text" name="paramo" id="paramo" class="form-control" value="<?php echo $datos->PARAMO ?>">
                    <label for="taiga">Taiga</label>
                    <input type="text" name="taiga" id="taiga" class="form-control" value="<?php echo $datos->TAIGA ?>">
                    <label for="bosque">Bosque</label>
                    <input type="text" name="bosque" id="bosque" class="form-control" value="<?php echo $datos->BOSQUE ?>">
                    <label for="lomas">Lomas</label>
                    <input type="text" name="lomas" id="lomas" class="form-control" value="<?php echo $datos->LOMAS ?>">
                    <label for="total_general">Total General</label>
                    <input type="text" name="total_general" id="total_general" class="form-control" value="<?php echo $datos->Total_general ?>">
                    <label for="selva">Selva</label>
                    <input type="text" name="selva" id="selva" class="form-control" value="<?php echo $datos->SELVA ?>">
                    <label for="lago">Lago</label>
                    <input type="text" name="lago" id="lago" class="form-control" value="<?php echo $datos->LAGO ?>">
                    <label for="manglar">Manglar</label>
                    <input type="text" name="manglar" id="manglar" class="form-control" value="<?php echo $datos->MANGLAR ?>">
                    <button class="btn btn-primary mt-3">
                        <i class="fa-solid fa-floppy-disk"></i> Actualizar
                    </button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>


    
<?php include "../script.php"; ?>