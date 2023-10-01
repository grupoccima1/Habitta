<?php include "../header.php"; ?>

<div class="container">
    <div class="card mt-4">
        <div class="card-body">
            <h2 class="mb-3 fs-4 text-center">Nuevo Registro</h2>
            <form action="./insertar_Flujo.php" method="post">
                <div class="row">
                    <div class="col-4 mb-2">
                        <label for="crear">Crear Recibo </label>
                        <input type="text" name="crear" id="crear" class="form-control">
                    </div>    
                    <div class="col-4 mb-2">
                        <label for="nota">Nota</label>
                        <input type="text" name="nota" id="nota" class="form-control">
                    </div>
                    <div class="col-4 mb-2">
                        <label for="enviado">Enviado</label>
                        <input type="text" name="enviado" id="enviado" class="form-control">
                    </div>
                    <div class="col-4 mb-2">
                        <label for="llave">Llave</label>
                        <input type="text" name="llave" id="llave" class="form-control">
                    </div>
                    <div class="col-4 mb-2">
                        <label for="beneficiario">Beneficiario</label>
                        <input type="text" name="beneficiario" id="beneficiario" class="form-control">
                    </div>
                    <div class="col-4 mb-2">
                        <label for="factura">Factura</label>
                        <input type="text" name="factura" id="factura" class="form-control">
                    </div>
                    <div class="col-4 mb-2">
                        <label for="fecha">Fecha</label>
                        <input type="text" name="fecha" id="fecha" class="form-control">
                    </div>
                    <div class="col-4 mb-2">
                        <label for="motivo">Motivo</label>
                        <input type="text" name="motivo" id="motivo" class="form-control">
                    </div>
                    <div class="col-4 mb-2">
                        <label for="categoria">Categoria</label>
                        <input type="text" name="categoria" id="categoria" class="form-control">
                    </div>
                    <div class="col-4 mb-2">
                        <label for="origen">Origen</label>
                        <input type="text" name="origen" id="origen" class="form-control">
                    </div>
                    <div class="col-4 mb-2">
                        <label for="subcategoria">Sub Categoria</label>
                        <input type="text" name="subcategoria" id="subcategoria" class="form-control">
                    </div>
                    <div class="col-4 mb-2">
                        <label for="mes">Mes</label>
                        <input type="text" name="mes" id="mes" class="form-control">
                    </div>
                    <div class="col-4 mb-2">
                        <label for="año">Año </label>
                        <input type="text" name="año" id="año" class="form-control">
                    </div>
                    <div class="col-4 mb-2">
                        <label for="flujo2">Flujo 2</label>
                        <input type="text" name="flujo2" id="flujo2" class="form-control">
                    </div>
                    <div class="col-4 mb-2">
                        <label for="lote">Lote</label>
                        <input type="text" name="lote" id="lote" class="form-control">
                    </div>
                    <div class="col-4 mb-2">
                        <label for="condominio">Condominio</label>
                        <input type="text" name="condominio" id="condominio" class="form-control">
                    </div>
                    <div class="col-4 mb-2">
                        <label for="cluster">Cluster</label>
                        <input type="text" name="cluster" id="cluster" class="form-control">
                    </div>
                    <div class="col-4 mb-2">
                        <label for="desarrollo">Desarrollo</label>
                        <input type="text" name="desarrollo" id="desarrollo" class="form-control">
                    </div>
                    <div class="col-4 mb-2">
                        <label for="cliente">Cliente</label>
                        <input type="text" name="cliente" id="cliente" class="form-control">
                    </div>
                    <div class="col-4 mb-2">
                        <label for="correo">Correo</label>
                        <input type="text" name="correo" id="correo" class="form-control">
                    </div>
                    <div class="col-4 mb-2">
                        <label for="er_mensualidad">1er Mensualidad</label>
                        <input type="text" name="er_mensualidad" id="er_mensualidad" class="form-control">
                    </div>

                </div>
                <div class="d-flex justify-content-end">
                    <button class="me-2 btn btn-primary mt-3 px-5">
                        Agregar
                    </button>
                    <a href="../flujo.php" class="btn btn-secondary mt-3 px-5">
                        Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "../script.php"; ?>