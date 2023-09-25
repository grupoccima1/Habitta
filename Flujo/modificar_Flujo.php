<?php 
    include "../header.php";
    include "../clases/Conexion.php";
    include "../Flujo/crud_Flujo.php";

    $crud = new crudflujo();
    $id = $_POST['id'];
    $datos = $crud -> obtenerDocumentoFlujo($id);
    $idMongo = $datos -> _id;
?>

<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-body">
                <div class="col">

                <a href="../flujo.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Actualizar Registro</h2>
                <form action="../Flujo/actualizar_Flujo.php" method="POST">
                    <input type="text" name="id" id="id" hidden value="<?php echo $idMongo ?>">
                    <label for="crear">Crear Recibo </label>
                    <input type="text" name="crear" id="crear" class="form-control" value="<?php echo $datos->CREAR_RECIBO ?>">
                    <label for="nota">Nota</label>
                    <input type="text" name="nota" id="nota" class="form-control" value="<?php echo $datos->NOTAS ?>">
                    <label for="enviado">Enviado</label>
                    <input type="text" name="enviado" id="enviado" class="form-control" value="<?php echo $datos->ENVIADO ?>">
                    <label for="llave">Llave</label>
                    <input type="text" name="llave" id="llave" class="form-control" value="<?php echo $datos->LLAVE ?>">
                    <label for="beneficiario">Beneficiario</label>
                    <input type="text" name="beneficiario" id="beneficiario" class="form-control" value="<?php echo $datos->BENEFICIARIO ?>">
                    <label for="factura">Factura</label>
                    <input type="text" name="factura" id="factura" class="form-control" value="<?php echo $datos->FACTURA ?>">
                    <label for="fecha">Fecha</label>
                    <input type="text" name="fecha" id="fecha" class="form-control" value="<?php echo $datos->FECHA ?>">
                    <label for="motivo">Motivo</label>
                    <input type="text" name="motivo" id="motivo" class="form-control" value="<?php echo $datos->MOTIVO ?>">
                    <label for="categoria">Categoria</label>
                    <input type="text" name="categoria" id="categoria" class="form-control" value="<?php echo $datos->CATEGORIA ?>">
                    <label for="origen">Origen</label>
                    <input type="text" name="origen" id="origen" class="form-control" value="<?php echo $datos->ORIGEN ?>">
                    <label for="subcategoria">Sub Categoria</label>
                    <input type="text" name="subcategoria" id="subcategoria" class="form-control" value="<?php echo $datos->SUBCATEGORIA ?>">
                    <label for="mes">Mes</label>
                    <input type="text" name="mes" id="mes" class="form-control" value="<?php echo $datos->MES ?>">
                    <label for="año">Año </label>
                    <input type="text" name="año" id="año" class="form-control" value="<?php echo $datos->AÑO ?>">
                    <label for="flujo2">Flujo 2</label>
                    <input type="text" name="flujo2" id="flujo2" class="form-control" value="<?php echo $datos->FLUJO2 ?>">
                    <label for="lote">Lote</label>
                    <input type="text" name="lote" id="lote" class="form-control" value="<?php echo $datos->LOTE ?>">
                    <label for="condominio">Condominio</label>
                    <input type="text" name="condominio" id="condominio" class="form-control" value="<?php echo $datos->CONDOMINIO ?>">
                    <label for="cluster">Cluster</label>
                    <input type="text" name="cluster" id="cluster" class="form-control" value="<?php echo $datos->CLUSTER ?>">
                    <label for="desarrollo">Desarrollo</label>
                    <input type="text" name="desarrollo" id="desarrollo" class="form-control" value="<?php echo $datos->DESARROLLO ?>">
                    <label for="cliente">Cliente</label>
                    <input type="text" name="cliente" id="cliente" class="form-control" value="<?php echo $datos->CLIENTE ?>">
                    <label for="correo">Correo</label>
                    <input type="text" name="correo" id="correo" class="form-control" value="<?php echo $datos->CORREO ?>">
                    <label for="er_mensualidad">1er Mensualidad</label>
                    <input type="text" name="er_mensualidad" id="er_mensualidad" class="form-control" value="<?php echo $datos->ER_MENSUALIDAD ?>">
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