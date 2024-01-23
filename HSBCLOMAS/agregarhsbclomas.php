<?php include "../header.php";  
include "../clases/Conexion.php";
include "./../HSBCLOMAS/crudhsbclomas.php";
 $crudhsbclomas = new crudhsbclomas(); 
 
 ?>

<div class="container">
  <div class= "card mt-4">
    <div class= "card-body">
        <h2 class="mb-3 fs-4 text-center"> Agregar nuevo registro  </h2>
        <form action="./insertarhsbclomas.php" method="post"> 
          <div class="row">
            <div class="col-4 mb-2">
              <label for="SEMANA">SEMANA</label>
                <input type="text" class="form-control" id="SEMANA" name="SEMANA">
            </div>  
            <div class="col-4 mb-2">
            <label for="FECHA">FECHA</label>
           <input type="date" class="form-control" id="FECHA" name="FECHA">
            </div>

            <div class="col-4 mb-2">
              <label for="BENEFICIARIO">BENEFICIARIO</label>
              <input type="text" class="form-control" id="BENEFICIARIO" name="BENEFICIARIO">
            </div>
            <div class="col-4 mb-2">
    <label for="INGRESO">INGRESO</label>
    <input type="number" step="any" class="form-control" id="INGRESO" name="INGRESO">
</div>
<div class="col-4 mb-2">
    <label for="EGRESO">EGRESO</label>
    <input type="number" step="any" class="form-control" id="EGRESO" name="EGRESO">
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
              <label for="AÑO">AÑO</label>
              <input type="text" class="form-control" id="AÑO" name="AÑO">
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
            <a href="../hsbcl.php" class="btn btn-secondary mt-3 px-5">
              Cancelar
            </a>
          </div>
        </form>
    </div>
  </div>
</div>
<!-- Agrega esto a la sección head de tu HTML o al final del body -->
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
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Obtén referencias a los campos relevantes
    const motivoInput = document.getElementById("MOTIVO");
    const fechaInput = document.getElementById("FECHA");
    const anoInput = document.getElementById("AÑO");

    // Agrega eventos "input" a los campos de MOTIVO y FECHA
    motivoInput.addEventListener("input", llenadoAutomaticoAno);
    fechaInput.addEventListener("input", llenadoAutomaticoAno);

    // Función para realizar el llenado automático condicional del campo AÑO
    function llenadoAutomaticoAno() {
        const motivo = motivoInput.value;
        const fecha = fechaInput.value;

        // Busca un año en el motivo
        const regexAnoMotivo = /\b\d{4}\b/;
        const matchAnoMotivo = motivo.match(regexAnoMotivo);

        // Llenado automático condicional para el campo AÑO
        if (matchAnoMotivo !== null) {
            // Si hay un año en el motivo, toma ese año
            anoInput.value = matchAnoMotivo[0];
        } else {
            // Si no hay un año en el motivo, toma el año de la FECHA
            const fechaObj = new Date(fecha);
            const anoFecha = fechaObj.getFullYear();
            anoInput.value = anoFecha || ""; // Usar un valor predeterminado si la fecha no es válida o está vacía
        }
    }
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Obtén referencias a los campos relevantes
    const motivoInput = document.getElementById("MOTIVO");
    const condominioInput = document.getElementById("CONDOMINIO");
    const desarrolloInput = document.getElementById("DESARROLLO");
    const loteInput = document.getElementById("LOTE");

    // Agrega eventos "input" a los campos de MOTIVO, CONDOMINIO y DESARROLLO
    motivoInput.addEventListener("input", identificarCondominioDesarrolloYObtenerLote);
    condominioInput.addEventListener("input", obtenerContenidoEntreCondominioYDesarrollo);
    desarrolloInput.addEventListener("input", obtenerContenidoEntreCondominioYDesarrollo);

    // Función para identificar condominio y desarrollo, y obtener el contenido entre ellos
    function identificarCondominioDesarrolloYObtenerLote() {
        const motivo = motivoInput.value.toUpperCase();

        // Identificar desarrollo
        const palabrasClaveDesarrollo = ["PBC", "PBB", "LPB", "VL"];
        const coincidenciaDesarrollo = palabrasClaveDesarrollo.find(palabra => motivo.includes(palabra));
        desarrolloInput.value = coincidenciaDesarrollo || "";

        // Identificar condominio
        const palabrasClaveCondominio = ["ESTEPA", "TAIGA", "PARAMO", "SELVA", "LAGO", "BOSQUE", "MANGLAR", "ARRECIFE", "LOMAS", "ZAFIRO", "AMATISTA", "MALAQUITA", "CEDRO", "SABINO", "OPALO", "TAMUL"];
        const coincidenciaCondominio = palabrasClaveCondominio.find(palabra => motivo.includes(palabra));
        condominioInput.value = coincidenciaCondominio || "";

        // Obtener contenido entre DESARROLLO y CONDOMINIO
        obtenerContenidoEntreCondominioYDesarrollo();
    }

    // Función para obtener el contenido entre DESARROLLO y CONDOMINIO
    function obtenerContenidoEntreCondominioYDesarrollo() {
        const motivo = motivoInput.value.toUpperCase();
        const condominio = condominioInput.value.toUpperCase();
        const desarrollo = desarrolloInput.value.toUpperCase();

        // Buscar el índice de DESARROLLO y CONDOMINIO en el motivo
        const indexDesarrollo = motivo.indexOf(desarrollo);
        const indexCondominio = motivo.indexOf(condominio);

        // Verificar si DESARROLLO y CONDOMINIO están presentes y en el orden correcto
        if (indexDesarrollo !== -1 && indexCondominio !== -1 && indexDesarrollo < indexCondominio) {
            // Extraer el contenido entre DESARROLLO y CONDOMINIO
            const contenidoLote = motivo.substring(indexDesarrollo + desarrollo.length, indexCondominio).trim();
            loteInput.value = contenidoLote;
        } else {
            // Si no se encuentra el patrón, asigna un mensaje al campo LOTE
            loteInput.value = "No se encontró el lote";
        }
    }
});
</script>
<script>
        document.addEventListener("DOMContentLoaded", function() {
            const motivoInput = document.getElementById("MOTIVO");
            const condominioInput = document.getElementById("CONDOMINIO");
            const desarrolloInput = document.getElementById("DESARROLLO");
            const loteInput = document.getElementById("LOTE");
            const clusterInput = document.getElementById("CLUSTER");
            const llaveInput = document.getElementById("LLAVE");
            const saldoInput = document.getElementById("SALDO");
         
            motivoInput.addEventListener("input", identificarCondominioDesarrolloYObtenerLote);
            condominioInput.addEventListener("input", obtenerContenidoEntreCondominioYDesarrollo);
            desarrolloInput.addEventListener("input", obtenerContenidoEntreCondominioYDesarrollo);

            motivoInput.addEventListener("input", llenadoAutomaticoCondominio);

            motivoInput.addEventListener("input", actualizarCluster);

            function identificarCondominioDesarrolloYObtenerLote() {
                const motivo = motivoInput.value.toUpperCase();

                const palabrasClaveDesarrollo = ["PBC", "PBB", "LPB", "VL"];
                const coincidenciaDesarrollo = palabrasClaveDesarrollo.find(palabra => motivo.includes(palabra));
                desarrolloInput.value = coincidenciaDesarrollo || "";

                const palabrasClaveCondominio = ["ESTEPA", "TAIGA", "PARAMO", "SELVA", "LAGO", "BOSQUE", "MANGLAR", "ARRECIFE", "LOMAS", "ZAFIRO", "AMATISTA", "MALAQUITA", "CEDRO", "SABINO", "OPALO", "TAMUL"];
                const coincidenciaCondominio = palabrasClaveCondominio.find(palabra => motivo.includes(palabra));
                condominioInput.value = coincidenciaCondominio || "";

                obtenerContenidoEntreCondominioYDesarrollo();
                actualizarCluster();
                construirLlave();
            }

            function obtenerContenidoEntreCondominioYDesarrollo() {
                const motivo = motivoInput.value.toUpperCase();
                const condominio = condominioInput.value.toUpperCase();
                const desarrollo = desarrolloInput.value.toUpperCase();

                const indexDesarrollo = motivo.indexOf(desarrollo);
                const indexCondominio = motivo.indexOf(condominio);

                if (indexDesarrollo !== -1 && indexCondominio !== -1 && indexDesarrollo < indexCondominio) {
                    const contenidoLote = motivo.substring(indexDesarrollo + desarrollo.length, indexCondominio).trim();
                    loteInput.value = contenidoLote;
                } else {
                    loteInput.value = "No se encontró el lote";
                }
            }

            function llenadoAutomaticoCondominio() {
                const motivo = motivoInput.value.toUpperCase();

                const palabrasClaveCondominio = ["ESTEPA", "TAIGA", "PARAMO", "SELVA", "LAGO", "BOSQUE", "MANGLAR", "ARRECIFE", "LOMAS", "ZAFIRO", "AMATISTA", "MALAQUITA", "CEDRO", "SABINO", "OPALO", "TAMUL"];
                const coincidenciaCondominio = palabrasClaveCondominio.find(palabra => motivo.includes(palabra));
                condominioInput.value = coincidenciaCondominio || "";
            }

            function actualizarCluster() {
                const condominio = condominioInput.value;

                if (condominio !== "") {
                    const motivo = motivoInput.value;
                    const ultimoCaracter = motivo.charAt(motivo.length - 1);
                    clusterInput.value = ultimoCaracter;
                } else {
                    clusterInput.value = "";
                }
            }

            function construirLlave() {
                const lote = loteInput.value.toUpperCase();
                const condominio = condominioInput.value.toUpperCase();
                const cluster = clusterInput.value.toUpperCase();
                const llave = `${lote} ${condominio} ${cluster}`;
                const ingreso = document.getElementById("INGRESO").value;
                 const egreso = document.getElementById("EGRESO").value;
                llaveInput.value = llave;
                enviarLlaveAlServidor(llave, ingreso, egreso);
                
            }
            function enviarLlaveAlServidor(llave, ingreso, egreso) {
    const xhr = new XMLHttpRequest();
    const url = "./obtenerSaldoPorLlave.php";
    const params = `llave=${llave}&INGRESO=${ingreso}&EGRESO=${egreso}`;

    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                // Manejar la respuesta del servidor
                // En este caso, el servidor debería devolver directamente el saldo calculado
                saldoInput.value = xhr.responseText;
            } else {
                console.error("Error en la solicitud AJAX al servidor");
            }
        }
    };

    xhr.send(params);
}
        });
    </script>
     <script src="https://cdn.jsdelivr.net/npm/date-fns@2.23.0"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const semanaInput = document.getElementById("SEMANA");
            const fechaInput = document.getElementById("FECHA");

            fechaInput.addEventListener("change", actualizarSemana);

            function actualizarSemana() {
                const fecha = new Date(fechaInput.value);
                const semana = getWeekNumber(fecha);
                semanaInput.value = semana;
            }

            function getWeekNumber(date) {
                const today = new Date(date);
                const firstDayOfYear = new Date(today.getFullYear(), 0, 1);
                const pastDaysOfYear = (today - firstDayOfYear) / 86400000;
                const weekNumber = Math.ceil((pastDaysOfYear + firstDayOfYear.getDay() + 1) / 7);

                return weekNumber;
            }
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const flujoInput = document.getElementById("FLUJO");
            const realInput = document.getElementById("REAL");
            const ingresoInput = document.getElementById("INGRESO");

            // Agregar evento para detectar cambios en REAL
            realInput.addEventListener("input", actualizarFlujo);

            // Agregar evento para detectar cambios en INGRESO
            ingresoInput.addEventListener("input", actualizarFlujo);

            function actualizarFlujo() {
                // Si REAL está vacío, toma el valor de INGRESO, de lo contrario, toma el valor de REAL
                flujoInput.value = realInput.value.trim() === "" ? ingresoInput.value : realInput.value;
            }
        });
    </script>
  <script>
// Obtener referencias a los inputs
const ingresoInput = document.getElementById("INGRESO");
const egresoInput = document.getElementById("EGRESO");

// Agregar detectives de eventos
ingresoInput.addEventListener("input", leerValores); 
egresoInput.addEventListener("input", leerValores);

// Función manejadora 
function leerValores() {

  // Obtener los valores
  const ingreso = ingresoInput.value;
  const egreso = egresoInput.value;

  // Aquí puedes usar los valores para lo que necesites
  console.log(ingreso, egreso);

  // Ejemplo: construir parámetros para enviar solicitud AJAX
  const params = "&ingreso=" + ingreso + "&egreso=" + egreso;
  
  function enviarDatosAlServidor() {

// Obtener valores
const ingreso = ingresoInput.value;
const egreso = egresoInput.value;

const xhr = new XMLHttpRequest();

// URL del archivo que procesa los datos
const url = "./obtenerSaldoPorLlave.php";

// Parámetros
const params = "llave=" + llave + "&ingreso=" + ingreso + "&egreso=" + egreso; 

xhr.open("POST", url, true);

xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

xhr.onreadystatechange = function() {

  if(xhr.readyState == 4 && xhr.status == 200) {

      // Actualizar saldo
      saldoInput.value = xhr.responseText;

  } else {
     // Manejar error
  }

}

xhr.send(params);

}
}

     </script>







    