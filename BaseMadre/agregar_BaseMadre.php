<?php include "../header.php"; ?>
<div class="container">
    <div class="card mt-4">
        <div class="card-body">
            <h2 class="mb-3 fs-4 text-center">Nuevo Registro</h2>
            <form action="./insertar_BaseMadre.php" method="post">
                <div class="row">
                <div class="col-4 mb-2">
                      <label for="llave">Llave </label>
                        <input type="text" name="llave" id="llave" class="form-control" disabled>
                        </div>
   
                    <div class="col-4 mb-2">
                        <label for="lote">Lote</label>
                        <input type="text" name="lote" id="lote" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
                        <label for="cliente">Cliente</label>
                        <input type="text" name="cliente" id="cliente" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
                        <label for="rfc">RFC</label>
                        <input type="text" name="rfc" id="rfc" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
                        <label for="uso_cfdi">Uso de CFDI</label>
                        <input type="text" name="uso_cfdi" id="uso_cfdi" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
                        <label for="razon_social">Razon Social</label>
                        <input type="text" name="razon_social" id="razon_social" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
                        <label for="dom_fiscal">Domicilio Fiscal</label>
                        <input type="text" name="dom_fiscal" id="dom_fiscal" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
                        <label for="telefono">Telefono</label>
                        <input type="text" name="telefono" id="telefono" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
                        <label for="correo">Correo</label>
                        <input type="text" name="correo" id="correo" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
                        <label for="m2">Metros Cuadrados</label>
                        <input type="text" name="m2" id="m2" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
                        <label for="total_operacion">Total Operacion</label>
                        <input type="text" name="total_operacion" id="total_operacion" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
                        <label for="enganche">Enganche</label>
                        <input type="text" name="enganche" id="enganche" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
                        <label for="financiamiento">Financiamiento </label>
                        <input type="text" name="financiamiento" id="financiamiento" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
              <label for="firma">Firma de Contrato</label>
                 <input type="date" name="firma" id="firma" class="form-control">
                </div>
                <div class="col-4 mb-2">
            <label for="fin_corrida">Fin de Corrida</label>
                <input type="date" name="fin_corrida" id="fin_corrida" class="form-control">
            </div>

            <div class="col-4 mb-2">
    <label for="total_mens">Total Mensualidades</label>
    <input type="number" name="total_mens" id="total_mens" class="form-control">
</div>
                    <div class="col-4 mb-2">
                        <label for="no_1er">No. 1er Mensualidad</label>
                        <input type="text" name="no_1er" id="no_1er" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
                        <label for="primer_mens">Primera Mensualidad</label>
                        <input type="text" name="primer_mens" id="primer_mens" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
                        <label for="no_2da">No. 2da Mensualidad</label>
                        <input type="text" name="no_2da" id="no_2da" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
                        <label for="segunda_mens">Segunda Mensualidad</label>
                        <input type="text" name="segunda_mens" id="segunda_mens" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
                        <label for="no_3er">No. 3er Mensualidad</label>
                        <input type="text" name="no_3er" id="no_3er" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
                        <label for="tercer_mens">Tercera Mensualidad</label>
                        <input type="text" name="tercer_mens" id="tercer_mens" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
                        <label for="tipo_interes">Tipo de Interes</label>
                        <input type="text" name="tipo_interes" id="tipo_interes" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
                        <label for="mens_entrega">Mens Entrega</label>
                        <input type="number" name="mens_entrega" id="mens_entrega" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
                      <label for="inicio_corrida">Inicio Corrida</label>
                   <input type="date" name="inicio_corrida" id="inicio_corrida" class="form-control">    
                    </div>

                    <div class="col-4 mb-2">
                        <label for="primer_abono">Fecha de Primer Abono</label>
                        <input type="text" name="primer_abono" id="primer_abono" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
                        <label for="pagado">Pagado</label>
                        <input type="text" name="pagado" id="pagado" class="form-control">    
                    </div>

                    <div class="col-4 mb-2">
                     <label for="deuda">Deuda</label>
                     <input type="text" name="deuda" id="deuda" class="form-control" disabled>
                    </div>
                    <div class="col-4 mb-2">
                    <label for="entrega_lote">Fecha Entrega Lote</label>
                    <input type="date" name="entrega_lote" id="entrega_lote" class="form-control" disabled>
                    </div>

                    <div class="col-4 mb-2">
                        <label for="estatus_cm">Estatus CM</label>
                        <input type="text" name="estatus_cm" id="estatus_cm" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
                        <label for="link">Link SAT</label>
                        <input type="text" name="link" id="link" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
                        <label for="notas">Notas de pago</label>
                        <input type="text" name="notas" id="notas" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
                        <label for="bono_ref">Bono Referido</label>
                        <input type="text" name="bono_ref" id="bono_ref" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
                        <label for="estatus">Estatus</label>
                        <input type="text" name="estatus" id="estatus" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
                        <label for="motivo_estatus">Motivo Estatus</label>
                        <input type="text" name="motivo_estatus" id="motivo_estatus" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
                        <label for="resultado">Resultado</label>
                        <input type="text" name="resultado" id="resultado" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
                        <label for="liberacion">Fecha de Liberacion</label>
                        <input type="text" name="liberacion" id="liberacion" class="form-control">    
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
                        <label for="apartado">Apartado Telegram</label>
                        <input type="text" name="apartado" id="apartado" class="form-control">    
                    </div>
                    <div class="col-4 mb-2">
                        <label for="primera_mens">Primer Mensualidad</label>
                        <input type="text" name="primera_mens" id="primera_mens" class="form-control">    
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button class="me-2 btn btn-primary mt-3">
                        Agregar
                    </button> 
                    <a href="../basemadre.php" class="btn btn-secondary mt-3 px-5">
                        Cancelar
                    </a>  
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Obtén referencias a los campos relevantes
    const loteInput = document.getElementById("lote");
    const condominioInput = document.getElementById("condominio");
    const clusterInput = document.getElementById("cluster");
    const llaveInput = document.getElementById("llave"); // Campo de llave

    // Agrega un evento "input" a los campos relevantes
    loteInput.addEventListener("input", actualizarLLAVE);
    condominioInput.addEventListener("input", actualizarLLAVE);
    clusterInput.addEventListener("input", actualizarLLAVE);

    // Función para actualizar la LLAVE
    function actualizarLLAVE() {
        // Genera la LLAVE concatenando los valores de los campos
        const llave = `${loteInput.value} ${condominioInput.value} ${clusterInput.value}`;
        
        // Asigna la LLAVE generada al campo de entrada LLAVE
        llaveInput.value = llave;
    }
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Obtén referencias a los campos relevantes
    const estatusInput = document.getElementById("estatus");
    const notasDePagoInput = document.getElementById("notas");
    const primerMensualidadInput = document.getElementById("primer_mens");
    const no1erMensualidadInput = document.getElementById("no_1er");
    const segundaMensualidadInput = document.getElementById("segunda_mens");
    const no2daMensualidadInput = document.getElementById("no_2da");
    const tercerMensualidadInput = document.getElementById("tercer_mens");
    const no3erMensualidadInput = document.getElementById("no_3er");
    const pagadoInput = document.getElementById("pagado");
    const deudaInput = document.getElementById("deuda");

    // Agrega un evento "input" a los campos relevantes
    estatusInput.addEventListener("input", calcularDeuda);
    notasDePagoInput.addEventListener("input", calcularDeuda);
    primerMensualidadInput.addEventListener("input", calcularDeuda);
    no1erMensualidadInput.addEventListener("input", calcularDeuda);
    segundaMensualidadInput.addEventListener("input", calcularDeuda);
    no2daMensualidadInput.addEventListener("input", calcularDeuda);
    tercerMensualidadInput.addEventListener("input", calcularDeuda);
    no3erMensualidadInput.addEventListener("input", calcularDeuda);
    pagadoInput.addEventListener("input", calcularDeuda);

    // Función para calcular la deuda
    function calcularDeuda() {
    const estatus = estatusInput.value;
    const notasDePago = notasDePagoInput.value;
    const primerMensualidad = parseFloat(primerMensualidadInput.value) || 0;
    const no1erMensualidad = parseFloat(no1erMensualidadInput.value) || 0;
    const segundaMensualidad = parseFloat(segundaMensualidadInput.value) || 0;
    const no2daMensualidad = parseFloat(no2daMensualidadInput.value) || 0;
    const tercerMensualidad = parseFloat(tercerMensualidadInput.value) || 0;
    const no3erMensualidad = parseFloat(no3erMensualidadInput.value) || 0;
    const pagado = parseFloat(pagadoInput.value) || 0;

    if (estatus === "" || notasDePago === "PAGADO") {
        deudaInput.value = 0;
    } else {
        const deuda = (primerMensualidad * no1erMensualidad) + (segundaMensualidad * no2daMensualidad) + (tercerMensualidad * no3erMensualidad) - pagado;
        deudaInput.value = deuda;
    }
}

});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Obtén referencias a los campos de entrada
    const firmaInput = document.getElementById("firma");
    const totalMensInput = document.getElementById("total_mens");
    const finCorridaInput = document.getElementById("fin_corrida");

    // Agrega un evento "input" a los campos relevantes
    firmaInput.addEventListener("input", calcularFinCorrida);
    totalMensInput.addEventListener("input", calcularFinCorrida);

    // Función para calcular el "Fin de Corrida"
    function calcularFinCorrida() {
        const firma = new Date(firmaInput.value);
        const totalMensualidades = parseInt(totalMensInput.value);

        if (!isNaN(firma.getTime()) && !isNaN(totalMensualidades)) {
            // Calcula la fecha de "Fin de Corrida" sumando los meses a la fecha de "Firma de Contrato"
            const finCorrida = new Date(firma);
            finCorrida.setMonth(finCorrida.getMonth() + totalMensualidades);

            // Formatea la fecha en el formato "YYYY-MM-DD"
            const finCorridaFormatted = finCorrida.toISOString().split("T")[0];

            // Asigna la fecha calculada al campo "Fin de Corrida"
            finCorridaInput.value = finCorridaFormatted;
        } else {
            // Si los valores no son válidos, muestra un mensaje de error o realiza alguna otra acción apropiada.
            finCorridaInput.value = "Valores inválidos";
        }
    }
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Obtén referencias a los campos de entrada
    const inicioCorridaInput = document.getElementById("inicio_corrida");
    const mensEntregaInput = document.getElementById("mens_entrega");
    const entregaLoteInput = document.getElementById("entrega_lote");

    // Agrega un evento "input" a los campos relevantes
    inicioCorridaInput.addEventListener("input", calcularFechaEntrega);

    // Función para calcular la "Fecha de Entrega de Lote"
    function calcularFechaEntrega() {
        const inicioCorrida = new Date(inicioCorridaInput.value);
        const mensEntrega = parseInt(mensEntregaInput.value);

        if (!isNaN(inicioCorrida.getTime()) && !isNaN(mensEntrega)) {
            // Calcula la fecha de "Fecha de Entrega de Lote" sumando los meses a la fecha de "Inicio Corrida"
            const entregaLote = new Date(inicioCorrida);
            entregaLote.setMonth(entregaLote.getMonth() + mensEntrega);

            // Formatea la fecha en el formato "YYYY-MM-DD"
            const entregaLoteFormatted = entregaLote.toISOString().split("T")[0];

            // Asigna la fecha calculada al campo "Fecha Entrega Lote"
            entregaLoteInput.value = entregaLoteFormatted;
        } else {
            // Si los valores no son válidos, muestra un mensaje de error o realiza alguna otra acción apropiada.
            entregaLoteInput.value = "Valores inválidos";
        }
    }
});
</script>

<? include "../script.js"; 