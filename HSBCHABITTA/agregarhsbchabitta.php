<?php include "../header.php"; ?>
<div class="container">
  <div class= "card mt-4">
    <div class= "card-body">
        <h2 class="mb-3 fs-4 text-center"> Agregar nuevo registro  </h2>
        <form action="./insertarhsbchabitta.php" method="post">
          <div class="row">
            <div class="col-4 mb-2">
              <label for="SEMANA">SEMANA</label>
                <input type="text" class="form-control" id="SEMANA" name="SEMANA">
            </div>  
            <div class="col-4 mb-2">
              <label for="FECHA">FECHA</label>
              <input type="text" class="form-control" id="FECHA" name="FECHA">
            </div>
            <div class="col-4 mb-2">
              <label for="BENEFICIARIO">BENEFICIARIO</label>
              <input type="text" class="form-control" id="BENEFICIARIO" name="BENEFICIARIO">
            </div>
            <div class="col-4 mb-2">
              <label for="INGRESO">INGRESO</label>
              <input type="text" class="form-control" id="INGRESO" name="INGRESO">
            </div>
            <div class="col-4 mb-2">
              <label for="EGRESO">EGRESO</label>
              <input type="text" class="form-control" id="EGRESO" name="EGRESO">
            </div>
            <div class="col-4 mb-2">
              <label for="SALDO">SALDO</label>
              <input type="text" class="form-control" id="SALDO" name="SALDO">
            </div>
            <div class="col-4 mb-2">
              <label for="FACTURA">FACTURA</label>
              <input type="text" class="form-control" id="FACTURA" name="FACTURA">
            </div>
            <div class="col-4 mb-2">
              <label for="REAL">REAL</label>
              <input type="text" class="form-control" id="REAL" name="REAL">
            </div>
            <div class="col-4 mb-2">
              <label for="MOTIVO">MOTIVO</label>
              <input type="text" class="form-control" id="MOTIVO" name="MOTIVO">
            </div>
            <div class="col-4 mb-2">
              <label for="MES">MES</label>
              <input type="text" class="form-control" id="MES" name="MES">
            </div>
            <div class="col-4 mb-2">
              <label for="DESARROLLO">DESARROLLO</label>
              <input type="text" class="form-control" id="DESARROLLO" name="DESARROLLO">
            </div>
            <div class="col-4 mb-2">
              <label for="LOTE">LOTE</label>
              <input type="text" class="form-control" id="LOTE" name="LOTE">
            </div>
            <div class="col-4 mb-2">
              <label for="CONDOMINIO">CONDOMINIO</label>
              <input type="text" class="form-control" id="CONDOMINIO" name="CONDOMINIO">
            </div>
            <div class="col-4 mb-2">
              <label for="CLUSTER">CLUSTER</label>
              <input type="text" class="form-control" id="CLUSTER" name="CLUSTER">
            </div>
            <div class="col-4 mb-2">
              <label for="OBRA">OBRA</label>
              <input type="text" class="form-control" id="OBRA" name="OBRA">
            </div>
            <div class="col-4 mb-2">
              <label for="CATEGORIA">CATEGORIA</label>
              <input type="text" class="form-control" id="CATEGORIA" name="CATEGORIA">
            </div>
            <div class="col-4 mb-2">
              <label for="SUBCATEGORIA">SUBCATEGORIA</label>
              <input type="text" class="form-control" id="SUBCATEGORIA" name="SUBCATEGORIA">
            </div>
            <div class="col-4 mb-2">
              <label for="UNIDADDENEGOCIO">UNIDADDENEGOCIO</label>
              <input type="text" class="form-control" id="UNIDADDENEGOCIO" name="UNIDADDENEGOCIO">
            </div>
            <div class="col-4 mb-2">
              <label for="FLUJO">FLUJO</label>
              <input type="text" class="form-control" id="FLUJO" name="FLUJO">
            </div>
            <div class="col-4 mb-2">
              <label for="LLAVE">LLAVE</label>
              <input type="text" class="form-control" id="LLAVE" name="LLAVE">
            </div>
            <div class="col-4 mb-2">
              <label for="FECHACORRECTA">FECHACORRECTAL</label>
              <input type="text" class="form-control" id="FECHACORRECTA" name="FECHACORRECTA">
            </div>
            <div class="col-4 mb-2">
              <label for="LLAVEEDOSDECUENTA">LLAVEEDOSDECUENTA</label>
              <input type="text" class="form-control" id="LLAVEEDOSDECUENTA" name="LLAVEEDOSDECUENTA">
            </div>
            <div class="col-4 mb-2">
              <label for="CLAVE">CLAVE</label>
              <input type="text" class="form-control" id="CLAVE" name="CLAVE">
            </div>
            <div class="col-4 mb-2">
              <label for="METODODEPAGO">METODODEPAGO</label>
              <input type="text" class="form-control" id="METODODEPAGO" name="METODODEPAGO">
            </div>
          </div>
          <div class="d-flex justify-content-end">
            <button class="me-2 btn btn-primary mt-3 px-5">
              Agregar
            </button>
            <a href="../hsbch.php" class="btn btn-secondary mt-3 px-5">
              Cancelar
            </a>
          </div>            
        </form>
    </div>
  </div>
</div>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Obtén referencias a los campos de entrada
    const motivoInput = document.getElementById("MOTIVO");
    const mesInput = document.getElementById("MES");

    // Agrega un evento "input" al campo de motivo
    motivoInput.addEventListener("input", actualizarMes);

    // Función para actualizar el campo de mes
    function actualizarMes() {
      // Obtiene el valor del campo de motivo
      const motivo = motivoInput.value.toUpperCase();

      // Lista de meses del año
      const meses = [
        "ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO",
        "JULIO", "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE"
      ];

      // Busca el mes en el motivo
      const mesEncontrado = meses.find(mes => motivo.includes(mes));

      // Actualiza el campo de mes
      mesInput.value = mesEncontrado || "";
    }
  });
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Obtén referencias a los campos relevantes
    const motivoInput = document.getElementById("MOTIVO");
    const desarrolloInput = document.getElementById("DESARROLLO");

    // Agrega un evento "input" al campo de MOTIVO
    motivoInput.addEventListener("input", actualizarDesarrollo);

    // Función para actualizar el campo de DESARROLLO
    function actualizarDesarrollo() {
        const motivo = motivoInput.value.toUpperCase();

        // Palabras clave para DESARROLLO
        const palabrasClave = ["PBC", "PBB", "LPB", "VL"];

        // Busca la primera coincidencia en el motivo
        const coincidencia = palabrasClave.find(palabra => motivo.includes(palabra));

        // Asigna la coincidencia al campo de DESARROLLO
        desarrolloInput.value = coincidencia || "";
    }
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Obtén referencias a los campos relevantes
    const motivoInput = document.getElementById("MOTIVO");
    const condominioInput = document.getElementById("CONDOMINIO");

    // Agrega un evento "input" al campo de MOTIVO
    motivoInput.addEventListener("input", llenadoAutomaticoCondominio);

    // Función para el llenado automático del campo CONDOMINIO
    function llenadoAutomaticoCondominio() {
        const motivo = motivoInput.value.toUpperCase();

        // Palabras clave para CONDOMINIO
        const palabrasClaveCondominio = ["ESTEPA", "TAIGA", "PARAMO", "SELVA", "LAGO", "BOSQUE", "MANGLAR", "ARRECIFE", "LOMAS", "ZAFIRO", "AMATISTA", "MALAQUITA", "CEDRO", "SABINO", "OPALO", "TAMUL"];

        // Busca la primera coincidencia en el motivo
        const coincidenciaCondominio = palabrasClaveCondominio.find(palabra => motivo.includes(palabra));

        // Asigna la coincidencia al campo de CONDOMINIO
        condominioInput.value = coincidenciaCondominio || "";
    }
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Obtén referencias a los campos relevantes
    const motivoInput = document.getElementById("MOTIVO");
    const condominioInput = document.getElementById("CONDOMINIO");
    const clusterInput = document.getElementById("CLUSTER");

    // Agrega eventos "input" a los campos de MOTIVO y CONDOMINIO
    motivoInput.addEventListener("input", actualizarCluster);

    // Función para actualizar el campo CLUSTER
    function actualizarCluster() {
        const condominio = condominioInput.value;

        // Llenado automático condicional para el campo CLUSTER
        if (condominio !== "") {
            const motivo = motivoInput.value;
            // Extrae el último carácter del motivo
            const ultimoCaracter = motivo.charAt(motivo.length - 1);

            // Asigna el último carácter al campo CLUSTER
            clusterInput.value = ultimoCaracter;
        } else {
            // Si no hay CONDOMINIO, limpia el campo CLUSTER
            clusterInput.value = "";
        }
    }
});
</script>