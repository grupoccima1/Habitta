<?php 
    include "../header.php";
    include "../clases/Conexion.php";
    include "../clases/crud.php"; 

    $crud = new Crud();
    $id = $_POST['id'];
    $datos = $crud->obtenerDocumentoBonosReferidos($id);
    $idMongo = $datos->_id;
?>

<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">

                <a href="../BonosReferidos.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Actualizar Registro</h2>

                <form action="../procesos/actualizar_BonosReferidos.php" method="POST">
                    <input type="text" name="id" id="id" hidden value="<?php echo $idMongo ?>">
                    <label for="numero">Número </label>
                    <input type="text" name="numero" id="numero" class="form-control"  value="<?php echo $datos->NÚMERO ?>">
                    <label for="condomio">Condomio</label>
                    <input type="text" name="condomio" id="condomio" class="form-control"  value="<?php echo $datos->CONDOMIO ?>">
                    <label for="cluster">Cluster</label>
                    <input type="text" name="cluster" id="cluster" class="form-control"  value="<?php echo $datos->CLUSTER ?>">
                    <label for="cliente">Cliente</label>
                    <input type="text" name="cliente" id="cliente" class="form-control"  value="<?php echo $datos->CLIENTE ?>">
                    <label for="promocion">Promocion</label>
                    <input type="text" name="promocion" id="promocion" class="form-control"  value="<?php echo $datos->PROMOCIÓN ?>">
                    <label for="estatus_dias">Estatus Días</label>
                    <input type="text" name="estatus_dias" id="estatus_dias" class="form-control"  value="<?php echo $datos->ESTATUS_DÍAS ?>">
                    <label for="inicio_corrida">Incio de Corrida Contrato o Simulador</label>
                    <input type="text" name="inicio_corrida" id="inicio_corrida" class="form-control"  value="<?php echo $datos->INICIO_DE_CORRIDA_CONTRATO_O_SIMULADOR ?>">
                    <label for="columna1">Columna 1</label>
                    <input type="text" name="columna1" id="columna1" class="form-control"  value="<?php echo $datos->Columna1 ?>">
                    <label for="aplicado">Aplicado</label>
                    <input type="text" name="aplicado" id="aplicado" class="form-control"  value="<?php echo $datos->APLICADO ?>">
                    <label for="apartado">Apartado</label>
                    <input type="text" name="apartado" id="apartado" class="form-control"  value="<?php echo $datos->APARTADO ?>">
                    <label for="fecha_pago">Fecha de Pago</label>
                    <input type="text" name="fecha_pago" id="fecha_pago" class="form-control"  value="<?php echo $datos->FECHAS_DE_PAGO ?>">
                    <label for="enganche">Enganche</label>
                    <input type="text" name="enganche" id="enganche" class="form-control"  value="<?php echo $datos->ENGANCHE ?>">
                    <label for="total_pagado">Total Pagado</label>
                    <input type="text" name="total_pagado" id="total_pagado" class="form-control"  value="<?php echo $datos->TOTAL_PAGADO ?>">
                    <label for="columna2">Columna 2</label>
                    <input type="text" name="columna2" id="columna2" class="form-control"  value="<?php echo $datos->Columna2 ?>">
                    <label for="columna3">Columna 3</label>
                    <input type="text" name="columna3" id="columna3" class="form-control"  value="<?php echo $datos->Columna3 ?>">
                    <label for="columna4">Columna 4</label>
                    <input type="text" name="columna4" id="columna4" class="form-control"  value="<?php echo $datos->Columna4 ?>">
                    <label for="columna5">Columna 5</label>
                    <input type="text" name="columna5" id="columna5" class="form-control"  value="<?php echo $datos->Columna5 ?>">
                    <label for="columna6">Columna 6</label>
                    <input type="text" name="columna6" id="columna6" class="form-control"  value="<?php echo $datos->Columna6 ?>">
                    <label for="estatus">Estatus</label>
                    <input type="text" name="estatus" id="estatus" class="form-control"  value="<?php echo $datos->STATUS ?>">
                    <label for="si_no">Sí no</label>
                    <input type="text" name="si_no" id="si_no" class="form-control"  value="<?php echo $datos->SÍ_NO ?>">
                    <label for="condominio">Condominio</label>
                    <input type="text" name="condominio" id="condominio" class="form-control"  value="<?php echo $datos->CONDOMINIO ?>">
                    <label for="cluster1">Cluster</label>
                    <input type="text" name="cluster1" id="cluster1" class="form-control"  value="<?php echo $datos->CLÚSTER ?>">
                    <label for="bono">Bono</label>
                    <input type="text" name="bono" id="bono" class="form-control"  value="<?php echo $datos->BONO ?>">
                    <label for="lote_num1">Lote Numero 1</label>
                    <input type="text" name="lote_num1" id="lote_num1" class="form-control"  value="<?php echo $datos->LOTE_numero1 ?>">
                    <label for="condo_num1">Condominio Número 1</label>
                    <input type="text" name="condo_num1" id="condo_num1" class="form-control"  value="<?php echo $datos->CONDOMINIO_numero1 ?>">
                    <label for="cluster_num1">Cluster Número 1</label>
                    <input type="text" name="cluster_num1" id="cluster_num1" class="form-control"  value="<?php echo $datos->CLÚSTER_numero1 ?>">
                    <label for="cliente_num1">Cliente Numero 1</label>
                    <input type="text" name="cliente_num1" id="cliente_num1" class="form-control"  value="<?php echo $datos->CLIENTE_numero1 ?>">
                    <label for="nota">Nota</label>
                    <input type="text" name="nota" id="nota" class="form-control"  value="<?php echo $datos->NOTA ?>">
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