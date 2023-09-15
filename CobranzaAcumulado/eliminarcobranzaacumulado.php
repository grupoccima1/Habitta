<?php 
   
    include "../clases/Conexion.php";
    include "./../CobranzaAcumulado/crudcobranzaacumulado.php";
    include "../header.php"; 
    $crudcobranzaacumulado = new crudcobranzaacumulado();
    $id = $_POST['id'];

    $datos = $crudcobranzaacumulado -> obtenerDocumentoCobranzaAcumulado($id);
?>

<div class="container">
<div class="row">
<div class="card mt-4">
    <div class="card-header">        
        <a href="../Cobranza_Acumulado.php" class="btn btn-outline-info">
            Regresar
        </a>
    </div>
  <div class="card-body">
            <div class="col">
                <h2 class="mb-3 fs-4 text-center">Eliminar  Registro</h2>
                <table class="table table-bordered">
                    <thead>
                    <th class="th__texto" style="text-align:center;">Llave</th>                        
                    <th class="th__texto" style="text-align:center;">LLAVE</th>                        
                        <th class="th__texto" style="text-align:center;">LOTE</th>
                        <th class="th__texto" style="text-align:center;">CONDOMINIO</th>
                        <th class="th__texto" style="text-align:center;">CLÚSTER</th>
                        <th class="th__texto" style="text-align:center;">DESARROLLO</th>
                        <th class="th__texto" style="text-align:center;">CLIENTE</th>
                        <th class="th__texto" style="text-align:center;">PRECIO_TOTAL</th>
                        <th class="th__texto" style="text-align:center;">ENGANCHE</th>
                        <th class="th__texto" style="text-align:center;">MESES_1</th>
                        <th class="th__texto" style="text-align:center;">MESES_2</th>
                        <th class="th__texto" style="text-align:center;">MESES_3</th>
                        <th class="th__texto" style="text-align:center;">MESES_TOTALES</th>
                        <th class="th__texto" style="text-align:center;">MEN_1</th>
                        <th class="th__texto" style="text-align:center;">MEN_2</th>
                        <th class="th__texto" style="text-align:center;">MEN_3</th>
                        <th class="th__texto" style="text-align:center;">INICIO_CORRIDA</th>
                        <th class="th__texto" style="text-align:center;">PRIMER_ABONO</th>
                        <th class="th__texto" style="text-align:center;">MES_Y_AÑO_FIRMA</th>
                        <th class="th__texto" style="text-align:center;">ESPECIAL</th>
                        <th class="th__texto" style="text-align:center;">enero_2020</th>
                        <th class="th__texto" style="text-align:center;">febrero_2020</th>
                        <th class="th__texto" style="text-align:center;">marzo_2020</th>
                        <th class="th__texto" style="text-align:center;">abril_2020</th>
                        <th class="th__texto" style="text-align:center;">mayo_2020</th>
                        <th class="th__texto" style="text-align:center;">junio_2020</th>
                        <th class="th__texto" style="text-align:center;">julio_2020</th>
                        <th class="th__texto" style="text-align:center;">agosto_2020</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2020</th>
                        <th class="th__texto" style="text-align:center;">octubre_2020</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2020</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2020</th>
                        <th class="th__texto" style="text-align:center;">enero_2021</th>
                        <th class="th__texto" style="text-align:center;">febrero_2021</th>
                        <th class="th__texto" style="text-align:center;">marzo_2021</th>
                        <th class="th__texto" style="text-align:center;">abril_2021</th>
                        <th class="th__texto" style="text-align:center;">mayo_2021</th>
                        <th class="th__texto" style="text-align:center;">junio_2021</th>
                        <th class="th__texto" style="text-align:center;">julio_2021</th>
                        <th class="th__texto" style="text-align:center;">agosto_2021</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2021</th>
                        <th class="th__texto" style="text-align:center;">octubre_2021</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2021</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2021</th>
                        <th class="th__texto" style="text-align:center;">enero_2022</th>
                        <th class="th__texto" style="text-align:center;">febrero_2022</th>
                        <th class="th__texto" style="text-align:center;">marzo_2022</th>
                        <th class="th__texto" style="text-align:center;">abril_2022</th>
                        <th class="th__texto" style="text-align:center;">mayo_2022</th>
                        <th class="th__texto" style="text-align:center;">junio_2022</th>
                        <th class="th__texto" style="text-align:center;">julio_2022</th>
                        <th class="th__texto" style="text-align:center;">agosto_2022</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2022</th>
                        <th class="th__texto" style="text-align:center;">octubre_2022</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2022</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2022</th>
                        <th class="th__texto" style="text-align:center;">enero_2023</th>
                        <th class="th__texto" style="text-align:center;">febrero_2023</th>
                        <th class="th__texto" style="text-align:center;">marzo_2023</th>
                        <th class="th__texto" style="text-align:center;">abril_2023</th>
                        <th class="th__texto" style="text-align:center;">mayo_2023</th>
                        <th class="th__texto" style="text-align:center;">junio_2023</th>
                        <th class="th__texto" style="text-align:center;">julio_2023</th>
                        <th class="th__texto" style="text-align:center;">agosto_2023</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2023</th>
                        <th class="th__texto" style="text-align:center;">octubre_2023</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2023</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2023</th>
                        <th class="th__texto" style="text-align:center;">enero_2024</th>
                        <th class="th__texto" style="text-align:center;">febrero_2024</th>
                        <th class="th__texto" style="text-align:center;">marzo_2024</th>
                        <th class="th__texto" style="text-align:center;">abril_2024</th>
                        <th class="th__texto" style="text-align:center;">mayo_2024</th>
                        <th class="th__texto" style="text-align:center;">junio_2024</th>
                        <th class="th__texto" style="text-align:center;">julio_2024</th>
                        <th class="th__texto" style="text-align:center;">agosto_2024</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2024</th>
                        <th class="th__texto" style="text-align:center;">octubre_2024</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2024</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2024</th>
                        <th class="th__texto" style="text-align:center;">enero_2025</th>
                        <th class="th__texto" style="text-align:center;">febrero_2025</th>
                        <th class="th__texto" style="text-align:center;">marzo_2025</th>
                        <th class="th__texto" style="text-align:center;">abril_2025</th>
                        <th class="th__texto" style="text-align:center;">mayo_2025</th>
                        <th class="th__texto" style="text-align:center;">junio_2025</th>
                        <th class="th__texto" style="text-align:center;">julio_2025</th>
                        <th class="th__texto" style="text-align:center;">agosto_2025</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2025</th>
                        <th class="th__texto" style="text-align:center;">octubre_2025</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2025</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2025</th>
                        <th class="th__texto" style="text-align:center;">enero_2026</th>
                        <th class="th__texto" style="text-align:center;">febrero_2026</th>
                        <th class="th__texto" style="text-align:center;">marzo_2026</th>
                        <th class="th__texto" style="text-align:center;">abril_2026</th>
                        <th class="th__texto" style="text-align:center;">mayo_2026</th>
                        <th class="th__texto" style="text-align:center;">junio_2026</th>
                        <th class="th__texto" style="text-align:center;">julio_2026</th>
                        <th class="th__texto" style="text-align:center;">agosto_2026</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2026</th>
                        <th class="th__texto" style="text-align:center;">octubre_2026</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2026</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2026</th>
                        <th class="th__texto" style="text-align:center;">enero_2027</th>
                        <th class="th__texto" style="text-align:center;">febrero_2027</th>
                        <th class="th__texto" style="text-align:center;">marzo_2027</th>
                        <th class="th__texto" style="text-align:center;">abril_2027</th>
                        <th class="th__texto" style="text-align:center;">mayo_2027</th>
                        <th class="th__texto" style="text-align:center;">junio_2027</th>
                        <th class="th__texto" style="text-align:center;">julio_2027</th>
                        <th class="th__texto" style="text-align:center;">agosto_2027</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2027</th>
                        <th class="th__texto" style="text-align:center;">octubre_2027</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2027</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2027</th>
                        <th class="th__texto" style="text-align:center;">enero_2028</th>
                        <th class="th__texto" style="text-align:center;">febrero_2028</th>
                        <th class="th__texto" style="text-align:center;">marzo_2028</th>
                        <th class="th__texto" style="text-align:center;">abril_2028</th>
                        <th class="th__texto" style="text-align:center;">mayo_2028</th>
                        <th class="th__texto" style="text-align:center;">junio_2028</th>
                        <th class="th__texto" style="text-align:center;">julio_2028</th>
                        <th class="th__texto" style="text-align:center;">agosto_2028</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2028</th>
                        <th class="th__texto" style="text-align:center;">octubre_2028</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2028</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2028</th>
                        <th class="th__texto" style="text-align:center;">enero_2029</th>
                        <th class="th__texto" style="text-align:center;">febrero_2029</th>
                        <th class="th__texto" style="text-align:center;">marzo_2029</th>
                        <th class="th__texto" style="text-align:center;">abril_2029</th>
                        <th class="th__texto" style="text-align:center;">mayo_2029</th>
                        <th class="th__texto" style="text-align:center;">junio_2029</th>
                        <th class="th__texto" style="text-align:center;">julio_2029</th>
                        <th class="th__texto" style="text-align:center;">agosto_2029</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2029</th>
                        <th class="th__texto" style="text-align:center;">octubre_2029</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2029</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2029</th>
                        <th class="th__texto" style="text-align:center;">enero_2030</th>
                        <th class="th__texto" style="text-align:center;">febrero_2030</th>
                        <th class="th__texto" style="text-align:center;">marzo_2030</th>
                        <th class="th__texto" style="text-align:center;">abril_2030</th>
                        <th class="th__texto" style="text-align:center;">mayo_2030</th>
                        <th class="th__texto" style="text-align:center;">junio_2030</th>
                        <th class="th__texto" style="text-align:center;">julio_2030</th>
                        <th class="th__texto" style="text-align:center;">agosto_2030</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2030</th>
                        <th class="th__texto" style="text-align:center;">octubre_2030</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2030</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2030</th>
                        <th class="th__texto" style="text-align:center;">enero_2031</th>
                        <th class="th__texto" style="text-align:center;">febrero_2031</th>
                        <th class="th__texto" style="text-align:center;">marzo_2031</th>
                        <th class="th__texto" style="text-align:center;">abril_2031</th>
                        <th class="th__texto" style="text-align:center;">mayo_2031</th>
                        <th class="th__texto" style="text-align:center;">junio_2031</th>
                        <th class="th__texto" style="text-align:center;">julio_2031</th>
                        <th class="th__texto" style="text-align:center;">agosto_2031</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2031</th>
                        <th class="th__texto" style="text-align:center;">octubre_2031</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2031</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2031</th>
                        <th class="th__texto" style="text-align:center;">enero_2032</th>
                        <th class="th__texto" style="text-align:center;">febrero_2032</th>
                        <th class="th__texto" style="text-align:center;">marzo_2032</th>
                        <th class="th__texto" style="text-align:center;">abril_2032</th>
                        <th class="th__texto" style="text-align:center;">mayo_2032</th>
                        <th class="th__texto" style="text-align:center;">junio_2032</th>
                        <th class="th__texto" style="text-align:center;">julio_2032</th>
                        <th class="th__texto" style="text-align:center;">agosto_2032</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2032</th>
                        <th class="th__texto" style="text-align:center;">octubre_2032</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2032</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2032</th>
                        <th class="th__texto" style="text-align:center;">enero_2033</th>
                        <th class="th__texto" style="text-align:center;">febrero_2033</th>
                        <th class="th__texto" style="text-align:center;">marzo_2033</th>
                        <th class="th__texto" style="text-align:center;">abril_2033</th>
                        <th class="th__texto" style="text-align:center;">mayo_2033</th>
                        <th class="th__texto" style="text-align:center;">junio_2033</th>
                        <th class="th__texto" style="text-align:center;">julio_2033</th>
                        <th class="th__texto" style="text-align:center;">agosto_2033</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2033</th>
                        <th class="th__texto" style="text-align:center;">octubre_2033</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2033</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2033</th>
                        <th class="th__texto" style="text-align:center;">enero_2034</th>                   
                        <th class="th__texto" style="text-align:center;">febrero_2034</th>
                        <th class="th__texto" style="text-align:center;">marzo_2034</th>
                        <th class="th__texto" style="text-align:center;">abril_2034</th>
                        <th class="th__texto" style="text-align:center;">mayo_2034</th>
                        <th class="th__texto" style="text-align:center;">junio_2034</th>
                        <th class="th__texto" style="text-align:center;">julio_2034</th>
                        <th class="th__texto" style="text-align:center;">agosto_2034</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2034</th>
                        <th class="th__texto" style="text-align:center;">octubre_2034</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2034</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2034</th> 
                        <th class="th__texto" style="text-align:center;">enero_2035</th>  
                        <th class="th__texto" style="text-align:center;">febrero_2035</th>                    
                        <th class="th__texto" style="text-align:center;">marzo_2035</th>
                        <th class="th__texto" style="text-align:center;">abril_2035</th>
                        <th class="th__texto" style="text-align:center;">mayo_2035</th>
                        <th class="th__texto" style="text-align:center;">junio_2035</th>
                        <th class="th__texto" style="text-align:center;">julio_2035</th>
                        <th class="th__texto" style="text-align:center;">agosto_2035</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2035</th>
                        <th class="th__texto" style="text-align:center;">octubre_2035</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2035</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2035</th> 
                        <th class="th__texto" style="text-align:center;">enero_2036</th>                   
                        <th class="th__texto" style="text-align:center;">febrero_2036</th>
                        <th class="th__texto" style="text-align:center;">marzo_2036</th>
                        <th class="th__texto" style="text-align:center;">abril_2036</th>
                        <th class="th__texto" style="text-align:center;">mayo_2036</th>
                        <th class="th__texto" style="text-align:center;">junio_2036</th>
                        <th class="th__texto" style="text-align:center;">julio_2036</th>
                        <th class="th__texto" style="text-align:center;">agosto_2036</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2036</th>
                        <th class="th__texto" style="text-align:center;">octubre_2036</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2036</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2036</th>
                        <th class="th__texto" style="text-align:center;">enero_2037</th>                    
                        <th class="th__texto" style="text-align:center;">febrero_2037</th> 
                        <th class="th__texto" style="text-align:center;">marzo_2037</th> 
                        <th class="th__texto" style="text-align:center;">abril_2037</th>
                        <th class="th__texto" style="text-align:center;">mayo_2037</th>
                        <th class="th__texto" style="text-align:center;">junio_2037</th>
                        <th class="th__texto" style="text-align:center;">julio_2037</th>
                        <th class="th__texto" style="text-align:center;">agosto_2037</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2037</th>
                        <th class="th__texto" style="text-align:center;">octubre_2037</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2037</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2037</th>     
                        <th class="th__texto" style="text-align:center;">enero_2038</th>
                        <th class="th__texto" style="text-align:center;">febrero_2038</th>             
                        <th class="th__texto" style="text-align:center;">marzo_2038</th>
                        <th class="th__texto" style="text-align:center;">abril_2038</th>
                        <th class="th__texto" style="text-align:center;">mayo_2038</th>
                        <th class="th__texto" style="text-align:center;">junio_2038</th>
                        <th class="th__texto" style="text-align:center;">julio_2038</th>
                        <th class="th__texto" style="text-align:center;">agosto_2038</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2038</th>
                        <th class="th__texto" style="text-align:center;">octubre_2038</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2038</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2038</th> 
                        <th class="th__texto" style="text-align:center;">enero_2039</th>
                        <th class="th__texto" style="text-align:center;">febrero_2039</th>                  
                        <th class="th__texto" style="text-align:center;">marzo_2039</th>
                        <th class="th__texto" style="text-align:center;">abril_2039</th>
                        <th class="th__texto" style="text-align:center;">mayo_2039</th>
                        <th class="th__texto" style="text-align:center;">junio_2039</th>
                        <th class="th__texto" style="text-align:center;">julio_2039</th>
                        <th class="th__texto" style="text-align:center;">agosto_2039</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2039</th>
                        <th class="th__texto" style="text-align:center;">octubre_2039</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2039</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2039</th>
                        <th class="th__texto" style="text-align:center;">enero_2040</th>
                        <th class="th__texto" style="text-align:center;">febrero_2040</th>                      
                        <th class="th__texto" style="text-align:center;">marzo_2040</th>
                        <th class="th__texto" style="text-align:center;">abril_2040</th>
                        <th class="th__texto" style="text-align:center;">mayo_2040</th>
                        <th class="th__texto" style="text-align:center;">junio_2040</th>
                        <th class="th__texto" style="text-align:center;">julio_2040</th>
                        <th class="th__texto" style="text-align:center;">agosto_2040</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2040</th>
                        <th class="th__texto" style="text-align:center;">octubre_2040</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2040</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2040</th>        
                        <th class="th__texto" style="text-align:center;">enero_2041</th>
                        <th class="th__texto" style="text-align:center;">febrero_2041</th>                      
                        <th class="th__texto" style="text-align:center;">marzo_2041</th>
                        <th class="th__texto" style="text-align:center;">abril_2041</th>
                        <th class="th__texto" style="text-align:center;">mayo_2041</th>
                        <th class="th__texto" style="text-align:center;">junio_2041</th>
                        <th class="th__texto" style="text-align:center;">julio_2041</th>
                        <th class="th__texto" style="text-align:center;">agosto_2041</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2041</th>
                        <th class="th__texto" style="text-align:center;">octubre_2041</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2041</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2041</th>    
                        <th class="th__texto" style="text-align:center;">enero_2042</th>
                        <th class="th__texto" style="text-align:center;">febrero_2042</th>                      
                        <th class="th__texto" style="text-align:center;">marzo_2042</th>
                        <th class="th__texto" style="text-align:center;">abril_2042</th>
                        <th class="th__texto" style="text-align:center;">mayo_2042</th>
                        <th class="th__texto" style="text-align:center;">junio_2042</th>
                        <th class="th__texto" style="text-align:center;">julio_2042</th>
                        <th class="th__texto" style="text-align:center;">agosto_2042</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2042</th>
                        <th class="th__texto" style="text-align:center;">octubre_2042</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2042</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2042</th>    
                        <th class="th__texto" style="text-align:center;">enero_2043</th>
                        <th class="th__texto" style="text-align:center;">febrero_2043</th>                      
                        <th class="th__texto" style="text-align:center;">marzo_2043</th>
                        <th class="th__texto" style="text-align:center;">abril_2043</th>
                        <th class="th__texto" style="text-align:center;">mayo_2043</th>
                        <th class="th__texto" style="text-align:center;">junio_2043</th>
                        <th class="th__texto" style="text-align:center;">julio_2043</th>
                        <th class="th__texto" style="text-align:center;">agosto_2043</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2043</th>
                        <th class="th__texto" style="text-align:center;">octubre_2043</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2043</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2043</th>              
                        <th class="th__texto" style="text-align:center;">enero_2044</th>
                        <th class="th__texto" style="text-align:center;">febrero_2044</th>                      
                        <th class="th__texto" style="text-align:center;">marzo_2044</th>
                        <th class="th__texto" style="text-align:center;">abril_2044</th>
                        <th class="th__texto" style="text-align:center;">mayo_2044</th>
                        <th class="th__texto" style="text-align:center;">junio_2044</th>
                        <th class="th__texto" style="text-align:center;">julio_2044</th>
                        <th class="th__texto" style="text-align:center;">agosto_2044</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2044</th>
                        <th class="th__texto" style="text-align:center;">octubre_2044</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2044</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2044</th>    
                        <th class="th__texto" style="text-align:center;">enero_2045</th>
                        <th class="th__texto" style="text-align:center;">febrero_2045</th>                      
                        <th class="th__texto" style="text-align:center;">marzo_2045</th>
                        <th class="th__texto" style="text-align:center;">abril_2045</th>
                        <th class="th__texto" style="text-align:center;">mayo_2045</th>
                        <th class="th__texto" style="text-align:center;">junio_2045</th>
                        <th class="th__texto" style="text-align:center;">julio_2045</th>
                        <th class="th__texto" style="text-align:center;">agosto_2045</th>
                        <th class="th__texto" style="text-align:center;">septiembre_2045</th>
                        <th class="th__texto" style="text-align:center;">octubre_2045</th>
                        <th class="th__texto" style="text-align:center;">noviembre_2045</th>
                        <th class="th__texto" style="text-align:center;">diciembre_2045</th>
                    </thead>
                    <tbody>
                        <tr>
                          <td class="text-center"> <?php echo $datos->LLAVE; ?> </td>
                          <td class="text-center"> <?php echo $datos->LOTE;?> </td>
                          <td class="text-center"> <?php echo $datos->CONDOMINIO;?> </td>
                          <td class="text-center"> <?php echo $datos->CLÚSTER;?> </td>
                          <td class="text-center"> <?php echo $datos->DESARROLLO; ?> </td>
                          <td class="text-center"> <?php echo $datos->CLIENTE;?> </td>
                          <td class="text-center"> <?php echo $datos->PRECIO_TOTAL;?> </td>
                          <td class="text-center"> <?php echo $datos->ENGANCHE;?></td>
                          <td class="text-center"> <?php echo $datos->MESES_1;?> </td>
                          <td class="text-center"> <?php echo $datos->MESES_2;?> </td>
                          <td class="text-center"> <?php echo $datos->MESES_3; ?> </td>
                          <td class="text-center"> <?php echo $datos->MESES_TOTALES;?> </td>
                          <td class="text-center"> <?php echo $datos->MEN_1;?> </td>
                          <td class="text-center"> <?php echo $datos->MEN_2;?> </td>
                          <td class="text-center"> <?php echo $datos->MEN_3;?> </td>
                          <td class="text-center"> <?php echo $datos->INICIO_CORRIDA; ?> </td>
                          <td class="text-center"> <?php echo $datos->PRIMER_ABONO;?> </td>
                          <td class="text-center"> <?php echo $datos->MES_Y_AÑO_FIRMA;?> </td>
                          <td class="text-center"> <?php echo  $datos->ESPECIAL;?></td>
                          <td class="text-center"> <?php echo $datos->enero_2020;?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2020;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2020;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2020; ?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2020;?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2020;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2020;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2020;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2020; ?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2020;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2020;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2020;?></td>
                          <td class="text-center"> <?php echo $datos->enero_2021;?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2021;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2021;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2021; ?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2021;?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2021;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2021;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2021;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2021; ?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2021;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2021;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2021;?></td>
                          <td class="text-center"> <?php echo $datos->enero_2022;?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2022;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2022;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2022; ?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2022;?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2022;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2022;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2022;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2022; ?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2022;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2022;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2022;?></td>
                          <td class="text-center"> <?php echo $datos->enero_2023;?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2023;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2023;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2023; ?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2023;?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2023;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2023;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2023;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2023; ?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2023;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2023;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2023;?></td>
                          <td class="text-center"> <?php echo $datos->enero_2024;?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2024;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2024;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2024; ?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2024;?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2024;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2024;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2024;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2024; ?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2024;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2024;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2024;?></td>
                          <td class="text-center"> <?php echo $datos->enero_2025;?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2025;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2025;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2025; ?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2025;?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2025;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2025;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2025;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2025; ?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2025;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2025;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2025;?></td>
                          <td class="text-center"> <?php echo $datos->enero_2026;?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2026;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2026;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2026; ?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2026;?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2026;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2026;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2026;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2026; ?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2026;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2026;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2026;?></td>
                          <td class="text-center"> <?php echo $datos->enero_2027;?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2027;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2027;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2027; ?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2027;?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2027;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2027;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2027;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2027; ?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2027;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2027;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2027;?></td>
                          <td class="text-center"> <?php echo $datos->enero_2028;?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2028;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2028;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2028; ?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2028;?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2028;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2028?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2028;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2028; ?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2028;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2028;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2028;?></td>
                          <td class="text-center"> <?php echo $datos->enero_2029;?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2029;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2029;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2029; ?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2029;?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2029;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2029;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2029;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2029; ?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2029;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2029;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2029;?></td>
                          <td class="text-center"> <?php echo $datos->enero_2030;?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2030;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2030;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2030; ?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2030;?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2030;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2030;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2030;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2030; ?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2030;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2030;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2030;?></td>
                          <td class="text-center"> <?php echo $datos->enero_2031;?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2031;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2031;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2031; ?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2031;?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2031;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2031;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2031;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2031; ?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2031;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2031;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2031;?></td>
                          <td class="text-center"> <?php echo $datos->enero_2032;?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2032;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2032;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2032; ?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2032;?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2032;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2032;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2032;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2032; ?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2032;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2032;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2032;?></td>
                          <td class="text-center"> <?php echo $datos->enero_2033;?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2033;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2033;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2033; ?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2033;?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2033;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2033;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2033;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2033; ?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2033;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2033;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2033;?></td>
                          <td class="text-center"> <?php echo $datos->enero_2034;?></td>
                          <td class="text-center"> <?php echo $datos->febrero_2034;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2034;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2034; ?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2034; ?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2034;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2034;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2034;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2034; ?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2034;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2034;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2034;?></td>
                          <td class="text-center"> <?php echo $datos->enero_2035;?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2035;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2035;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2035; ?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2035;?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2035;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2035;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2035;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2035; ?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2035;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2035;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2035;?></td>
                          <td class="text-center"> <?php echo $datos->enero_2036;?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2036;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2036;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2036; ?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2036; ?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2036;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2036;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2036;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2036; ?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2036;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2036;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2036;?></td>
                          <td class="text-center"> <?php echo $datos->enero_2037;?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2037;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2037;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2037; ?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2037;?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2037;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2037;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2037;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2037; ?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2037;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2037;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2037;?></td>
                          <td class="text-center"> <?php echo $datos->enero_2038;?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2038;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2038;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2038; ?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2038;?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2038;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2038;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2038;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2038; ?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2038;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2038;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2038;?></td>
                          <td class="text-center"> <?php echo $datos->enero_2039?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2039;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2039;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2039; ?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2039;?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2039;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2039;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2039;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2039; ?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2039;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2039;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2039;?></td>
                          <td class="text-center"> <?php echo $datos->enero_2040;?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2040;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2040;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2040; ?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2040;?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2040;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2040;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2040;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2040; ?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2040;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2040;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2040;?></td>
                          <td class="text-center"> <?php echo $datos->enero_2041?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2041;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2041;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2041; ?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2041;?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2041;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2041;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2041;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2041; ?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2041;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2041;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2041;?></td>
                          <td class="text-center"> <?php echo $datos->enero_2042;?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2042;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2042;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2042; ?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2042;?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2042;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2042;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2042;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2042; ?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2042;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2042;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2042;?></td>
                          <td class="text-center"> <?php echo $datos->enero_2043;?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2043;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2043;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2043; ?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2043;?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2043;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2043;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2043;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2043; ?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2043;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2043;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2043;?></td>
                          <td class="text-center"> <?php echo $datos->enero_2044;?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2044;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2044;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2044; ?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2044;?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2044;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2044;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2044;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2044; ?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2044;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2044;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2044;?></td>
                          <td class="text-center"> <?php echo $datos->enero_2045;?> </td>
                          <td class="text-center"> <?php echo $datos->febrero_2045;?> </td>
                          <td class="text-center"> <?php echo $datos->marzo_2045;?> </td>
                          <td class="text-center"> <?php echo $datos->abril_2045; ?> </td>
                          <td class="text-center"> <?php echo $datos->mayo_2045;?> </td>
                          <td class="text-center"> <?php echo $datos->junio_2045;?> </td>
                          <td class="text-center"> <?php echo $datos->julio_2045;?> </td>
                          <td class="text-center"> <?php echo $datos->agosto_2045;?> </td>
                          <td class="text-center"> <?php echo $datos->septiembre_2045; ?> </td>
                          <td class="text-center"> <?php echo $datos->octubre_2045;?> </td>
                          <td class="text-center"> <?php echo $datos->noviembre_2045;?> </td>
                          <td class="text-center"> <?php echo $datos->diciembre_2045;?></td>
                            </tr>
                    </tbody>
                </table>
                <hr>
                <div class="aler alert-danger" role="alert">
                    <h3 class="text-danger">¿Estas seguro de eliminar este registro?</h3>
                    <p>
                        Una vez eliminado no podras recuperarlo
                    </p>
                    <div class="d-flex justify-content-end">
                        <form class="me-2" action="./eliminar_cobranzaacumulado.php" method="POST">
                            <input type="text" name="id" value="<?php echo $datos->_id;?>" hidden>
                            <button class="btn btn-danger">
                                Eliminar
                            </button>                
                        </form>
                        <a href="../Cobranza_Acumulado.php" class="bnt btn-secondary">Cancelar</a>
                    </div>
                </div> 
            </div>
        </div>
    </div>
  </div>
</div>



<?php 