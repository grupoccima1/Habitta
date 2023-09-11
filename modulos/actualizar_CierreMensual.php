<?php 
    include "../header.php";
    include "../clases/Conexion.php";
    include "../clases/crud.php";

    $crud = new crud();
    $id = $_POST ['id'];
    $datos = $crud -> obtenerDocumentoCierreMensual($id);
    $idMongo = $datos -> _id;
?>

<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-body">
                <div class="col">
                <a href="../cierreMensualHabitta.php">
                        Regresar
                    </a>
                    <h2>Actualizar Registro</h2>
                    <form action="../procesos/actualizar_CierreMensual.php" method="POST">
                        <input type="text" name="id" id="id" hidden value="<?php echo $idMongo ?>">
                        <label for="cierre_mes">Cierre Mes</label>
                        <input type="text" name="cierre_mes" id="cierre_mes" class="form-control" value="<?php echo $datos->CIERRE_MES ?>">
                        <label for="fecha">Fecha</label>
                        <input type="text" name="fecha" id="fecha" class="form-control" value="<?php echo $datos->FECHA ?>">
                        <label for="beneficiario">Beneficiario</label>
                        <input type="text" name="beneficiario" id="beneficiario" class="form-control" value="<?php echo $datos->BENEFICIARIO ?>">
                        <label for="ingreso">Ingreso</label>
                        <input type="text" name="ingreso" id="ingreso" class="form-control" value="<?php echo $datos->INGRESO ?>">
                        <label for="egreso">Egreso</label>
                        <input type="text" name="egreso" id="egreso" class="form-control" value="<?php echo $datos->EGRESO ?>">
                        <label for="saldo">Saldo</label>
                        <input type="text" name="saldo" id="saldo" class="form-control" value="<?php echo $datos->SALDO ?>">
                        <label for="factura">Factura</label>
                        <input type="text" name="factura" id="factura" class="form-control" value="<?php echo $datos->FACTURA ?>">
                        <label for="real">Real</label>
                        <input type="text" name="real" id="real" class="form-control" value="<?php echo $datos->REAL ?>">
                        <label for="motivo">Motivo</label>
                        <input type="text" name="motivo" id="motivo" class="form-control" value="<?php echo $datos->MOTIVO ?>">
                        <label for="mes">Mes</label>
                        <input type="text" name="mes" id="mes" class="form-control" value="<?php echo $datos->MES ?>">
                        <label for="desarrollo">Desarrollo</label>
                        <input type="text" name="desarrollo" id="desarrollo" class="form-control" value="<?php echo $datos->DESARROLLO ?>">
                        <label for="condominio">Condominio</label>
                        <input type="text" name="condominio" id="condominio" class="form-control" value="<?php echo $datos->CONDOMINIO ?>">
                        <label for="cluster">Cluster</label>
                        <input type="text" name="cluster" id="cluster" class="form-control" value="<?php echo $datos->CLUSTER ?>">
                        <label for="obra">Obra</label>
                        <input type="text" name="obra" id="obra" class="form-control" value="<?php echo $datos->OBRA ?>">
                        <label for="categoria">Categoria</label>
                        <input type="text" name="categoria" id="categoria" class="form-control" value="<?php echo $datos->CATEGORIA ?>">
                        <label for="subcategoria">Sub Categoria</label>
                        <input type="text" name="subcategoria" id="subcategoria" class="form-control" value="<?php echo $datos->SUBCATEGORIA ?>">
                        <label for="origen">Origen</label>
                        <input type="text" name="origen" id="origen" class="form-control" value="<?php echo $datos->ORIGEN ?>">
                        <label for="semana">Semana</label>
                        <input type="text" name="semana" id="semana" class="form-control" value="<?php echo $datos->SEMANA ?>">
                        <label for="solicito">Solicitó</label>
                        <input type="text" name="solicito" id="solicito" class="form-control" value="<?php echo $datos->SOLICITÓ ?>">
                        <label for="autorizo">Autorizó</label>
                        <input type="text" name="autorizo" id="autorizo" class="form-control" value="<?php echo $datos->AUTORIZÓ ?>">
                        <label for="presupuesto">Presupuesto</label>
                        <input type="text" name="presupuesto" id="presupuesto" class="form-control" value="<?php echo $datos->PRESUPUESTO ?>">
                        <label for="unidad_negocio">Unidad De Negocio</label>
                        <input type="text" name="unidad_negocio" id="unidad_negocio" class="form-control" value="<?php echo $datos->UNIDAD_DE_NEGOCIO ?>">
                        <label for="flujo">Flujp</label>
                        <input type="text" name="flujo" id="flujo" class="form-control" value="<?php echo $datos->FLUJO ?>">
                        <label for="llave">Llave</label>
                        <input type="text" name="llave" id="llave" class="form-control" value="<?php echo $datos->LLAVE ?>">
                        <label for="fecha_correcta">Fecha Correcta</label>
                        <input type="text" name="fecha_correcta" id="fecha_correcta" class="form-control" value="<?php echo $datos->FECHA_CORRECTA ?>">
                        <label for="llave_cuenta">Año</label>
                        <input type="text" name="llave_cuenta" id="llave_cuenta" class="form-control" value="<?php echo $datos->LLAVE_EDOS_DE_CUENTA ?>">
                        <label for="metodo_pago">Metodo de Pago</label>
                        <input type="text" name="metodo_pago" id="metodo_pago" class="form-control" value="<?php echo $datos->METODO_DE_PAGO ?>">
                        <label for="modelo_negocio">Modelo de Negocio</label>
                        <input type="text" name="modelo_negocio" id="modelo_negocio" class="form-control" value="<?php echo $datos->MODELO_DE_NEGOCIO ?>">
                        <label for="solicito1">Solicito</label>
                        <input type="text" name="solicito" id="solicito" class="form-control" value="<?php echo $datos->SOLICITO ?>">
                        <label for="autorizo1">Autorizo</label>
                        <input type="text" name="autorizo" id="autorizo" class="form-control" value="<?php echo $datos->AUTORIZO ?>">
                        <label for="año">Año</label>
                        <input type="text" name="año" id="año" class="form-control" value="<?php echo $datos->AÑO ?>">
                        <label for="monto_proyectado">Monto Proyectado</label>
                        <input type="text" name="monto_proyectado" id="monto_proyectado" class="form-control" value="<?php echo $datos->MONTO_PROYECTADO ?>">
                        <button class="btn btn-primary mt-3">
                            <i class="fa-solid fa-floppy-disk"></i>Actualizar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>