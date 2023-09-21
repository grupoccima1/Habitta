<?php
    include "../header.php";
    include "../clases/Conexion.php";
    include "../clases/crud.php";
    $crud = new crud();
    $id = $_POST['id'];
    $datos = $crud -> obtenerDocumentoNico($id);
    $idMongo = $datos -> _id;
?>
<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header">
                <a href="../Nico.php" class="btn btn-outline-info">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                    <h2 class="mb-3 fs-4 text-center">Actualizar Registro</h2>
                    <form action="../procesos/actualizar_Nico.php" method="POST">
                        <div class="row">
                            <input type="text" name="id" id="id" hidden value="<?php echo $idMongo ?>">
                            <div class="col-4 mb-2">
                                <label for="observacion">Observacion</label>
                                <input type="text" name="observacion" id="observacion" class="form-control" value="<?php echo $datos->OBSERVACION ?>">
                            </div>
                            <div class="col-4 mb-2">
                                <label for="llave">Llave</label>
                                <input type="text" name="llave" id="llave" class="form-control" value="<?php echo $datos->LLAVE ?>" >
                            </div>
                            <div class="col-4 mb-2">
                                <label for="razon_social">Razon Social</label>
                                <input type="text" name="razon_social" id="razon_social" class="form-control" value="<?php echo $datos->RAZON_SOCIAL ?>" >
                            </div>
                            <div class="col-4 mb-2">
                                <label for="fecha">Fecha</label>
                                <input type="text" name="fecha" id="fecha" class="form-control" value="<?php echo $datos->FECHA ?>" >
                            </div>
                            <div class="col-4 mb-2">
                                <label for="beneficiario">Beneficiario</label>
                                <input type="text" name="beneficiario" id="beneficiario" class="form-control" value="<?php echo $datos->BENEFICIARIO ?>" >
                            </div>
                            <div class="col-4 mb-2">
                                <label for="rfc">RFC</label>
                                <input type="text" name="rfc" id="rfc" class="form-control" value="<?php echo $datos->RFC ?>" >
                            </div>
                            <div class="col-4 mb-2">
                                <label for="cfdi">Uso CFDI</label>
                                <input type="text" name="cfdi" id="cfdi" class="form-control" value="<?php echo $datos->USO_CFDI ?>" >
                            </div>
                            <div class="col-4 mb-2">
                                <label for="abono">Abono</label>
                                <input type="text" name="abono" id="abono" class="form-control" value="<?php echo $datos->ABONO ?>" >
                            </div>
                            <div class="col-4 mb-2">
                                <label for="cargo">Cargo</label>
                                <input type="text" name="cargo" id="cargo" class="form-control" value="<?php echo $datos->CARGO ?>" >
                            </div>
                            <div class="col-4 mb-2">
                                <label for="factura">Factura</label>
                                <input type="text" name="factura" id="factura" class="form-control" value="<?php echo $datos->FACTURA ?>" >
                            </div>
                            <div class="col-4 mb-2">
                                <label for="real">Real</label>
                                <input type="text" name="real" id="real" class="form-control" value="<?php echo $datos->REAL ?>" >
                            </div>
                            <div class="col-4 mb-2">
                                <label for="motivo">Motivo</label>
                                <input type="text" name="motivo" id="motivo" class="form-control" value="<?php echo $datos->MOTIVO ?>" >
                            </div>
                            <div class="col-4 mb-2">
                                <label for="categoria">Categoria</label>
                                <input type="text" name="categoria" id="categoria" class="form-control" value="<?php echo $datos->CATEGORIA ?>" >
                            </div>
                            <div class="col-4 mb-2">
                                <label for="metodo_pago">Periodo</label>
                                <input type="text" name="metodo_pago" id="metodo_pago" class="form-control" value="<?php echo $datos->METODO_DE_PAGO ?>" >
                            </div>
                            <div class="col-4 mb-2">
                                <label for="subcategoria">Sub Categoria</label>
                                <input type="text" name="subcategoria" id="subcategoria" class="form-control" value="<?php echo $datos->SUBCATEGORIA ?>" >
                            </div>
                            <div class="col-4 mb-2">
                                <label for="flujo">Flujo</label>
                                <input type="text" name="flujo" id="flujo" class="form-control" value="<?php echo $datos->FLUJO ?>" >
                            </div>
                            <div class="col-4 mb-2">
                                <label for="origen">Origen</label>
                                <input type="text" name="origen" id="origen" class="form-control" value="<?php echo $datos->ORIGEN ?>" >
                            </div>
                            <div class="col-4 mb-2">
                                <label for="cliente">Cliente</label>
                                <input type="text" name="cliente" id="cliente" class="form-control" value="<?php echo $datos->CLIENTE ?>" >
                            </div>
                            <div class="col-4 mb-2">
                                <label for="correo">Correo</label>
                                <input type="text" name="correo" id="correo" class="form-control" value="<?php echo $datos->CORREO ?>" >
                            </div>
                            <div class="col-4 mb-2">
                                <label for="telefono">Telefono</label>
                                <input type="text" name="telefono" id="telefono" class="form-control" value="<?php echo $datos->TELEFONO ?>" >
                            </div>
                        </div>
                        <button class="btn btn-primary mt-3">
                            <i class="fa-solid fa-floppy-disk"></i> Actualizar
                        </button>
                    </form>
            </div>
        </div>
    </div>
</div>

<?php include "../script.php"; ?>