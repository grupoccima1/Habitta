<?php
    include "../header.php";
    include "../clases/Conexion.php";
    include "../CorteMR/crudcortemr.php";
    $crud = new crudcortemr();
    $id = $_POST ['id'];
    $datos = $crud -> obtenerDocumentoCorteMR($id);
    $idMongo = $datos -> _id;
?>


<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../CorteMoraRango.php">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                    <h2 class="mb-3 fs-4 text-center">Actualizar Registro</h2>
                    <form action="../CorteMR/actualizar_CorteMR.php" method="POST">
                        <div class="row">
                            <input type="text" name="id" id="id" hidden value="<?php echo $idMongo ?>">
                            <div class="col-4 mb-2">
                                <label for="RANGO_DE_MOROSIDAD">RANGO DE MOROSIDAD</label>
                                <input type="text" name="RANGO_DE_MOROSIDAD" id="RANGO_DE_MOROSIDAD" class="form-control" value="<?php echo $datos->RANGO_DE_MOROSIDAD ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="NUM_DE_CLIENTES">NUMERO DE CLIENTES</label>
                                <input type="text" name="NUM_DE_CLIENTES" id="NUM_DE_CLIENTES" class="form-control" value="<?php echo $datos->NUM_DE_CLIENTES ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="CLÚSTER">CLUSTER</label>
                                <input type="text" name="CLÚSTER" id="CLÚSTER" class="form-control" value="<?php echo $datos->CLÚSTER ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="DESARROLLO">DESARROLLO</label>
                                <input type="text" name="DESARROLLO" id="DESARROLLO" class="form-control" value="<?php echo $datos->DESARROLLO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="CLIENTES_EN_MORA">CLIENTES EN MORATORIOS</label>
                                <input type="text" name="CLIENTES_EN_MORA" id="CLIENTES_EN_MORA" class="form-control" value="<?php echo $datos->CLIENTES_EN_MORA ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="CONTRATOS_FIRMADOS">CONTRATOS FIRMADOS</label>
                                <input type="text" name="CONTRATOS_FIRMADOS" id="CONTRATOS_FIRMADOS" class="form-control" value="<?php echo $datos->CONTRATOS_FIRMADOS ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="PDE_MOROSIDAD">PDE MOROSIDAD</label>
                                <input type="text" name="PDE_MOROSIDAD" id="PDE_MOROSIDAD" class="form-control" value="<?php echo $datos->PDE_MOROSIDAD ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="VENCIDO">VENCIDO</label>
                                <input type="text" name="VENCIDO" id="VENCIDO" class="form-control" value="<?php echo $datos->VENCIDO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="INTERES_MORATORIO">INTERES MORATORIO</label>
                                <input type="text" name="INTERES_MORATORIO" id="INTERES_MORATORIO" class="form-control" value="<?php echo $datos->INTERES_MORATORIO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="LOTE">LOTE</label>
                                <input type="text" name="LOTE" id="LOTE" class="form-control" value="<?php echo $datos->LOTE ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="CONDOMINIO">CONDOMINIO</label>
                                <input type="text" name="CONDOMINIO" id="CONDOMINIO" class="form-control" value="<?php echo $datos->CONDOMINIO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="CLIENTE">CLIENTE</label>
                                <input type="text" name="CLIENTE" id="CLIENTE" class="form-control" value="<?php echo $datos->CLIENTE ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="ESTATUS">ESTATUS</label>
                                <input type="text" name="ESTATUS" id="ESTATUS" class="form-control" value="<?php echo $datos->ESTATUS ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="TOTAL_VENCIDO">TOTAL VENCIDO</label>
                                <input type="text" name="TOTAL_VENCIDO" id="TOTAL_VENCIDO" class="form-control" value="<?php echo $datos->TOTAL_VENCIDO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="INT_MORATORIO">INTERE MORATORIO</label>
                                <input type="text" name="INT_MORATORIO" id="INT_MORATORIO" class="form-control" value="<?php echo $datos->INT_MORATORIO ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="enero_2020">ENERO 2020</label>
                                <input type="text" name="enero_2020" id="enero_2020" class="form-control" value="<?php echo $datos->enero_2020 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="febrero_2020">FEBRERO 2020</label>
                                <input type="text" name="febrero_2020" id="febrero_2020" class="form-control" value="<?php echo $datos->febrero_2020 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="marzo_2020">MARZO 2020</label>
                                <input type="text" name="marzo_2020" id="marzo_2020" class="form-control" value="<?php echo $datos->marzo_2020 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="abril_2020">ABRIL 2020</label>
                                <input type="text" name="abril_2020" id="abril_2020" class="form-control" value="<?php echo $datos->abril_2020 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="mayo_2020">MAYO 2020</label>
                                <input type="text" name="mayo_2020" id="mayo_2020" class="form-control" value="<?php echo $datos->mayo_2020 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="junio_2020">JUNIO 2020</label>
                                <input type="text" name="junio_2020" id="junio_2020" class="form-control" value="<?php echo $datos->junio_2020 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="julio_2020">JULIO 2020</label>
                                <input type="text" name="julio_2020" id="julio_2020" class="form-control" value="<?php echo $datos->julio_2020 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="agosto_2020">AGOSTO 2020</label>
                                <input type="text" name="agosto_2020" id="agosto_2020" class="form-control" value="<?php echo $datos->agosto_2020 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="septiembre_2020">SEPTIEMBRE 2020</label>
                                <input type="text" name="septiembre_2020" id="septiembre_2020" class="form-control" value="<?php echo $datos->septiembre_2020 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="octubre_2020">OCTUBRE 2020</label>
                                <input type="text" name="octubre_2020" id="octubre_2020" class="form-control" value="<?php echo $datos->octubre_2020 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="noviembre_2020">NOVIEMBRE 2020</label>
                                <input type="text" name="noviembre_2020" id="noviembre_2020" class="form-control" value="<?php echo $datos->noviembre_2020 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="diciembre_2020">DICIEMBRE 2020</label>
                                <input type="text" name="diciembre_2020" id="diciembre_2020" class="form-control" value="<?php echo $datos->diciembre_2020 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="enero_2021">ENERO 2021</label>
                                <input type="text" name="enero_2021" id="enero_2021" class="form-control" value="<?php echo $datos->enero_2021 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="febrero_2021">FEBRERO 2021</label>
                                <input type="text" name="febrero_2021" id="febrero_2021" class="form-control" value="<?php echo $datos->febrero_2021 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="marzo_2021">MARZO 2021</label>
                                <input type="text" name="marzo_2021" id="marzo_2021" class="form-control" value="<?php echo $datos->marzo_2021 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="abril_2021">ABRIL 2021</label>
                                <input type="text" name="abril_2021" id="abril_2021" class="form-control" value="<?php echo $datos->abril_2021 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="mayo_2021">MAYO 2021</label>
                                <input type="text" name="mayo_2021" id="mayo_2021" class="form-control" value="<?php echo $datos->mayo_2021 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="junio_2021">JUNIO 2021</label>
                                <input type="text" name="junio_2021" id="junio_2021" class="form-control" value="<?php echo $datos->junio_2021 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="julio_2021">JULIO 2021</label>
                                <input type="text" name="julio_2021" id="julio_2021" class="form-control" value="<?php echo $datos->julio_2021 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="agosto_2021">AGOSTO 2021</label>
                                <input type="text" name="agosto_2021" id="agosto_2021" class="form-control" value="<?php echo $datos->agosto_2021 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="septiembre_2021">SEPTIEMBRE 2021</label>
                                <input type="text" name="septiembre_2021" id="septiembre_2021" class="form-control" value="<?php echo $datos->septiembre_2021 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="octubre_2021">OCTUMBRE 2021</label>
                                <input type="text" name="octubre_2021" id="octubre_2021" class="form-control" value="<?php echo $datos->octubre_2021 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="noviembre_2021">NOVIEMBRE 2021</label>
                                <input type="text" name="noviembre_2021" id="noviembre_2021" class="form-control" value="<?php echo $datos->noviembre_2021 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="diciembre_2021">DICIEMBRE 2021</label>
                                <input type="text" name="diciembre_2021" id="diciembre_2021" class="form-control" value="<?php echo $datos->diciembre_2021 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="enero_2022">ENERO 2022</label>
                                <input type="text" name="enero_2022" id="enero_2022" class="form-control" value="<?php echo $datos->enero_2022 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="febrero_2022">FEBRERO 2021</label>
                                <input type="text" name="febrero_2022" id="febrero_2022" class="form-control" value="<?php echo $datos->febrero_2022 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="marzo_2022">MARZO 2022</label>
                                <input type="text" name="marzo_2022" id="marzo_2022" class="form-control" value="<?php echo $datos->marzo_2022 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="abril_2022">ABRIL 2022</label>
                                <input type="text" name="abril_2022" id="abril_2022" class="form-control" value="<?php echo $datos->abril_2022 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="mayo_2022">MAYO 2022</label>
                                <input type="text" name="mayo_2022" id="mayo_2022" class="form-control" value="<?php echo $datos->mayo_2022 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="junio_2022">JUNIO 2022</label>
                                <input type="text" name="junio_2022" id="junio_2022" class="form-control" value="<?php echo $datos->junio_2022 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="julio_2022">JULIO 2022</label>
                                <input type="text" name="julio_2022" id="julio_2022" class="form-control" value="<?php echo $datos->julio_2022 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="agosto_2022">AGOSTO 2022</label>
                                <input type="text" name="agosto_2022" id="agosto_2022" class="form-control" value="<?php echo $datos->agosto_2022 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="septiembre_2022">SEPTIEMBRE 2022</label>
                                <input type="text" name="septiembre_2022" id="septiembre_2022" class="form-control" value="<?php echo $datos->septiembre_2022 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="octubre_2022">OCTUBRE 2022</label>
                                <input type="text" name="octubre_2022" id="octubre_2022" class="form-control" value="<?php echo $datos->octubre_2022 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="noviembre_2022">NOVIEMBRE 2022</label>
                                <input type="text" name="noviembre_2022" id="noviembre_2022" class="form-control" value="<?php echo $datos->noviembre_2022 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="diciembre_2022">DICIEMBRE 2022</label>
                                <input type="text" name="diciembre_2022" id="diciembre_2022" class="form-control" value="<?php echo $datos->diciembre_2022 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="enero_2023">ENERO 2023</label>
                                <input type="text" name="enero_2023" id="enero_2023" class="form-control" value="<?php echo $datos->enero_2023 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="febrero_2023">FEBRERO 2023</label>
                                <input type="text" name="febrero_2023" id="febrero_2023" class="form-control" value="<?php echo $datos->febrero_2023 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="marzo_2023">MARZO 2023</label>
                                <input type="text" name="marzo_2023" id="marzo_2023" class="form-control" value="<?php echo $datos->marzo_2023 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="abril_2023">ABRIL 2023</label>
                                <input type="text" name="abril_2023" id="abril_2023" class="form-control" value="<?php echo $datos->abril_2023 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="mayo_2023">CONCEPTO</label>
                                <input type="text" name="mayo_2023" id="mayo_2023" class="form-control" value="<?php echo $datos->mayo_2023 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="junio_2023">JUNIO 2023</label>
                                <input type="text" name="junio_2023" id="junio_2023" class="form-control" value="<?php echo $datos->junio_2023 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="julio_2023">JULIO 2023</label>
                                <input type="text" name="julio_2023" id="julio_2023" class="form-control" value="<?php echo $datos->julio_2023 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="agosto_2023">AGOSTO 2023</label>
                                <input type="text" name="agosto_2023" id="agosto_2023" class="form-control" value="<?php echo $datos->agosto_2023 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="septiembre_2023">SEPTIEMBRE 2023</label>
                                <input type="text" name="septiembre_2023" id="septiembre_2023" class="form-control" value="<?php echo $datos->septiembre_2023 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="octubre_2023">OCTUBRE 2023</label>
                                <input type="text" name="octubre_2023" id="octubre_2023" class="form-control" value="<?php echo $datos->octubre_2023 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="noviembre_2023">NOVIEMBRE 2023 2023</label>
                                <input type="text" name="noviembre_2023" id="noviembre_2023" class="form-control" value="<?php echo $datos->noviembre_2023 ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="diciembre_2023">DICIEMBRE 2023</label>
                                <input type="text" name="diciembre_2023" id="diciembre_2023" class="form-control" value="<?php echo $datos->diciembre_2023 ?>">
                            </div>
                        </div>
                        <button class="btn btn-primary mt-3">
                            <i class="fa-solid fa-floppy-disk"></i>Actualizar
                        </button>
                    </form>
            </div>
        </div>
    </div>
</div>

<?php include "../script.php"; ?>