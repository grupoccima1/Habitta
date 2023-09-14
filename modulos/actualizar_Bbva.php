<?php 
    include "../header.php";
    include "../clases/Conexion.php";
    include "../clases/crud.php";

    $crud = new Crud();
    $id = $_POST['id'];
    $datos = $crud -> obtenerDocumentoBbva($id);
    $idMongo = $datos -> _id;
?>

<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-body">
                <div class="col">

                <a href="../bbva.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Actualizar Registro</h2>
                <form action="../procesos/actualizar_Bbva.php" method="POST">
                    <input type="text" name="id" id="id" hidden value="<?php echo $idMongo ?>">
                    <label for="semana">Semana</label>
                    <input type="text" name="semana" id="semana" class="form-control" value="<?php echo $datos->SEMANA ?>">
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
                    <label for="motivo">Motivo</label>
                    <input type="text" name="motivo" id="motivo" class="form-control" value="<?php echo $datos->MOTIVO ?>">
                    <label for="mes">Mes</label>
                    <input type="text" name="mes" id="mes" class="form-control" value="<?php echo $datos->MES ?>">
                    <label for="desarrollo">Desarrollo</label>
                    <input type="text" name="desarrollo" id="desarrollo" class="form-control" value="<?php echo $datos->DESARROLLO ?>">
                    <label for="lote">Lote</label>
                    <input type="text" name="lote" id="lote" class="form-control" value="<?php echo $datos->LOTE ?>">
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
                    <label for="modelo_negocio">Modelo de Negocio</label>
                    <input type="text" name="modelo_negocio" id="modelo_negocio" class="form-control" value="<?php echo $datos->MODELODENEGOCIO ?>">
                    <label for="flujo">Flujo</label>
                    <input type="text" name="flujo" id="flujo" class="form-control" value="<?php echo $datos->FLUJO ?>">
                    <label for="llave">Llave</label>
                    <input type="text" name="llave" id="llave" class="form-control" value="<?php echo $datos->LLAVE ?>">
                    <label for="fecha_correcta">Fecha Correcta</label>
                    <input type="text" name="fecha_correcta" id="fecha_correcta" class="form-control" value="<?php echo $datos->FECHACORRECTA ?>">
                    <label for="llave_edos">Llave Edos de Cuenta</label>
                    <input type="text" name="llave_edos" id="llave_edos" class="form-control" value="<?php echo $datos->LLAVEEDOSDECUENTA ?>">
                    <label for="clave">Clave</label>
                    <input type="text" name="clave" id="clave" class="form-control" value="<?php echo $datos->CLAVE ?>">
                    <label for="metodo_pago">Metodo de Pago</label>
                    <input type="text" name="metodo_pago" id="metodo_pago" class="form-control" value="<?php echo $datos->METODODEPAGO ?>">
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