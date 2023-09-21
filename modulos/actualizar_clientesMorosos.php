<?php 
    include "../clases/Conexion.php";
    include "../clases/crud.php";
    $crud = new crud();
    $id = $_POST ['id'];
    $datos = $crud -> obtenerDocumentoClientesMorosos($id);
    $idMongo = $datos -> _id;
?>
<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../bilpocket.php">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                <h2 class="mb-3 fs-4 text-center">Actualizar Registro</h2>
                <form action="../procesos/actualizar_ClientesMorosos.php" method="POST">
                    <div class="row">
                        <input type="text" name="id" id="id" hidden value="<?php echo $idMongo ?>">
                        <div class="col-4 mb-2">
                            <label for="contador">Contador</label>
                            <input type="text" name="contador" id="contador" class="form-control"
                                value="<?php echo $datos->CONTADOR ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="llave">Llave</label>
                            <input type="text" name="llave" id="llave" class="form-control"
                                value="<?php echo $datos->LLAVE ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="desarrollo">Desarrollo</label>
                            <input type="text" name="desarrollo" id="desarrollo" class="form-control"
                                value="<?php echo $datos->DESARROLLO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="lote">Lote</label>
                            <input type="text" name="lote" id="lote" class="form-control"
                                value="<?php echo $datos->LOTE ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="condominio">Condominio</label>
                            <input type="text" name="condominio" id="condominio" class="form-control"
                                value="<?php echo $datos->CONDOMINIO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="cluster">Cluster</label>
                            <input type="text" name="cluster" id="cluster" class="form-control"
                                value="<?php echo $datos->CLÚSTER ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="fecha">Fecha</label>
                            <input type="text" name="fecha" id="fecha" class="form-control"
                                value="<?php echo $datos->FECHA ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="cliente">Cliente</label>
                            <input type="text" name="cliente" id="cliente" class="form-control"
                                value="<?php echo $datos->CLIENTE ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="precio_lote">Precio Lote</label>
                            <input type="text" name="precio_lote" id="precio_lote" class="form-control"
                                value="<?php echo $datos->PRECIO_DEL_LOTE ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="monto_mens">Monto Mensual</label>
                            <input type="text" name="monto_mens" id="monto_mens" class="form-control"
                                value="<?php echo $datos->MONTO_MENS ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="mensualidad">Mensualidad</label>
                            <input type="text" name="mensualidad" id="mensualidad" class="form-control"
                                value="<?php echo $datos->MENSUALIDAD ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="interes">Interes</label>
                            <input type="text" name="interes" id="interes" class="form-control"
                                value="<?php echo $datos->INTERES ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="tipo_interes">Tipo de Interes</label>
                            <input type="text" name="tipo_interes" id="tipo_interes" class="form-control"
                                value="<?php echo $datos->TIPO_DE_INTES ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="int_neg">Interes Negociado</label>
                            <input type="text" name="int_neg" id="int_neg" class="form-control"
                                value="<?php echo $datos->I_NEGOCIADO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="real">Real</label>
                            <input type="text" name="real" id="real" class="form-control"
                                value="<?php echo $datos->REAL ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="mens_pagada">Mensualidad Pagada</label>
                            <input type="text" name="mens_pagada" id="mens_pagada" class="form-control"
                                value="<?php echo $datos->MENS_PAGADA ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="mens_adeudada">Mensualidad Adeudada</label>
                            <input type="text" name="mens_adeudada" id="mens_adeudada" class="form-control"
                                value="<?php echo $datos->MEN_ADEUDADA ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="fecha_acuerdo">Fecha de Acuerdo</label>
                            <input type="text" name="fecha_acuerdo" id="fecha_acuerdo" class="form-control"
                                value="<?php echo $datos->FECHA_DE_ACUERDO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="medio">Medio</label>
                            <input type="text" name="medio" id="medio" class="form-control"
                                value="<?php echo $datos->MEDIO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="plazos">Plazos</label>
                            <input type="text" name="plazos" id="plazos" class="form-control"
                                value="<?php echo $datos->PLAZOS ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="monto_mes">Monto por Mes</label>
                            <input type="text" name="monto_mes" id="monto_mes" class="form-control"
                                value="<?php echo $datos->MONTO_POR_MES ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="inicio">Inicio</label>
                            <input type="text" name="inicio" id="inicio" class="form-control"
                                value="<?php echo $datos->INICIO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="fin">Fin</label>
                            <input type="text" name="fin" id="fin" class="form-control"
                                value="<?php echo $datos->FIN ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="estatus_interes">Estatus de Interes</label>
                            <input type="text" name="estatus_interes" id="estatus_interes" class="form-control"
                                value="<?php echo $datos->ESTATUS_DE_INTERES ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="comentario">Comentario</label>
                            <input type="text" name="comentario" id="comentario" class="form-control"
                                value="<?php echo $datos->COMENTARIO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="negociado">Negociado</label>
                            <input type="text" name="negociado" id="negociado" class="form-control"
                                value="<?php echo $datos->NEGOCIADO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="departamento">Departamento</label>
                            <input type="text" name="departamento" id="departamento" class="form-control"
                                value="<?php echo $datos->DEPARTAMENTO ?>">
                        </div>
                        <div class="col-4 mb-2">
                            <label for="año">Año</label>
                            <input type="text" name="año" id="año" class="form-control"
                                value="<?php echo $datos->AÑO ?>">
                        </div>
                        <!--<div class="col-4 mb-2">
                                <label for="ae">Empty_AE</label>
                                <input type="text" name="ae" id="ae" class="form-control" value="<?php echo $datos->empty_AE ?>">
                            </div> 
                            <div class="col-4 mb-2">
                                <label for="af">Empty_AF</label>
                                <input type="text" name="af" id="af" class="form-control" value="<?php echo $datos->empty_AF ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="ag">Empty_AG</label>
                                <input type="text" name="ag" id="ag" class="form-control" value="<?php echo $datos->empty_AG ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="ah">Empty_AH</label>
                                <input type="text" name="ah" id="ah" class="form-control" value="<?php echo $datos->empty_AH ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="ai">Empty_AI</label>
                                <input type="text" name="ai" id="ai" class="form-control" value="<?php echo $datos->empty_AI ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="aj">Empy_AJ</label>
                                <input type="text" name="aj" id="aj" class="form-control" value="<?php echo $datos->empty_AJ ?>"> 
                            </div>-->
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