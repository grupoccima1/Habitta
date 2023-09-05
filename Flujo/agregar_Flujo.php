<?php include "../header.php"; ?>

<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">

                <a href="../flujo.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Nuevo Registro</h2>

                <form action="./insertar_Flujo.php" method="post">
                    <label for="crear">Crear Recibo </label>
                    <input type="text" name="crear" id="crear" class="form-control">
                    <label for="nota">Nota</label>
                    <input type="text" name="nota" id="nota" class="form-control">
                    <label for="enviado">Enviado</label>
                    <input type="text" name="enviado" id="enviado" class="form-control">
                    <label for="llave">Llave</label>
                    <input type="text" name="llave" id="llave" class="form-control">
                    <label for="beneficiario">Beneficiario</label>
                    <input type="text" name="beneficiario" id="beneficiario" class="form-control">
                    <label for="factura">Factura</label>
                    <input type="text" name="factura" id="factura" class="form-control">
                    <label for="fecha">Fecha</label>
                    <input type="text" name="fecha" id="fecha" class="form-control">
                    <label for="motivo">Motivo</label>
                    <input type="text" name="motivo" id="motivo" class="form-control">
                    <label for="categoria">Categoria</label>
                    <input type="text" name="categoria" id="categoria" class="form-control">
                    <label for="origen">Origen</label>
                    <input type="text" name="origen" id="origen" class="form-control">
                    <label for="subcategoria">Sub Categoria</label>
                    <input type="text" name="subcategoria" id="subcategoria" class="form-control">
                    <label for="mes">Mes</label>
                    <input type="text" name="mes" id="mes" class="form-control">
                    <label for="año">Año </label>
                    <input type="text" name="año" id="año" class="form-control">
                    <label for="flujo2">Flujo 2</label>
                    <input type="text" name="flujo2" id="flujo2" class="form-control">
                    <label for="lote">Lote</label>
                    <input type="text" name="lote" id="lote" class="form-control">
                    <label for="condominio">Condominio</label>
                    <input type="text" name="condominio" id="condominio" class="form-control">
                    <label for="cluster">Cluster</label>
                    <input type="text" name="cluster" id="cluster" class="form-control">
                    <label for="desarrollo">Desarrollo</label>
                    <input type="text" name="desarrollo" id="desarrollo" class="form-control">
                    <label for="cliente">Cliente</label>
                    <input type="text" name="cliente" id="cliente" class="form-control">
                    <label for="correo">Correo</label>
                    <input type="text" name="correo" id="correo" class="form-control">
                    <label for="er_mensualidad">1er Mensualidad</label>
                    <input type="text" name="er_mensualidad" id="er_mensualidad" class="form-control">
                    <button class="btn btn-primary mt-3">
                        <i class="fa-solid fa-floppy-disk"></i> Agregar
                    </button>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>

<?php include "../script.php"; ?>