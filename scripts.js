document.addEventListener("DOMContentLoaded", () => {
    // Escuchamos el click del botón
    const $boton = document.querySelector("#btnCrearPdf");
    $boton.addEventListener("click", () => {
        const $elementoParaConvertir = document.body; // <-- Aquí puedes elegir cualquier elemento del DOM
        html2pdf()
            .set({
                margin: 1,
                filename: 'documento.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 3, // A mayor escala, mejores gráficos, pero más peso
                    letterRendering: true,
                },
                jsPDF: {
                    unit: "in",
                    format: "a3",
                    orientation: 'landscape' // landscape o portrait
                }
            })
            .from($elementoParaConvertir)
            .save()
            .catch(err => console.log(err))
            .finally()
            .then(() => {
                console.log("guardado!");

    })
})
});



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




