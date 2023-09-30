<?php
  require_once "./clases/Conexion.php";
  require_once "./CobranzaAcumulado/crudcobranzaacumulado.php";
  $crud = new crudcobranzaacumulado();
  $datos = $crud->mostrarCobranzaAcumulado();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css"/>
    <link rel="stylesheet" href="style.css"/>
    <title>Habitta</title>
  </head>
  <body>
    <div class="wrapper">
      <div class="body-overlay"></div>
      <!-- Sidebar  --> 
      <?php include "./sidebar.php"; ?>
      <!--------page-content---------------->
      <div id="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <h2>Bienvenido</h2>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header bg-blue__500">
                <div class="row">
                  <div class="col text-white">
                    <span><img src="images/home.svg" width="25px"></i></span> Home/Cobranza y Acumulado
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <a href="./CobranzaAcumulado/agregarcobranzaacumulado.php" class="btn btn-primary">
                    Agregar Registro
                  </a>
                  <hr>
                  <table id="tabla" class="table table-striped data-table" style="width: 100%">
                    <thead class="bg__td bg-blue__400 text-white">
                      <tr class="text-center"> 
                          <th class="th__texto">LLAVE</th>                        
                          <th class="th__texto">LOTE</th>
                          <th class="th__texto">CONDOMINIO</th>
                          <th class="th__texto">CLÚSTER</th>
                          <th class="th__texto">DESARROLLO</th>
                          <th class="th__texto">CLIENTE</th>
                          <th class="th__texto">PRECIO_TOTAL</th>
                          <th class="th__texto">ENGANCHE</th>
                          <th class="th__texto">MESES_1</th>
                          <th class="th__texto">MESES_2</th>
                          <th class="th__texto">MESES_3</th>
                          <th class="th__texto">MESES_TOTALES</th>
                          <th class="th__texto">MEN_1</th>
                          <th class="th__texto">MEN_2</th>
                          <th class="th__texto">MEN_3</th>
                          <th class="th__texto">INICIO_CORRIDA</th>
                          <th class="th__texto">PRIMER_ABONO</th>
                          <th class="th__texto">MES_Y_AÑO_FIRMA</th>
                          <th class="th__texto">ESPECIAL</th>
                          <th class="th__texto">enero_2020</th>
                          <th class="th__texto">febrero_2020</th>
                          <th class="th__texto">marzo_2020</th>
                          <th class="th__texto">abril_2020</th>
                          <th class="th__texto">mayo_2020</th>
                          <th class="th__texto">junio_2020</th>
                          <th class="th__texto">julio_2020</th>
                          <th class="th__texto">agosto_2020</th>
                          <th class="th__texto">septiembre_2020</th>
                          <th class="th__texto">octubre_2020</th>
                          <th class="th__texto">noviembre_2020</th>
                          <th class="th__texto">diciembre_2020</th>
                          <th class="th__texto">enero_2021</th>
                          <th class="th__texto">febrero_2021</th>
                          <th class="th__texto">marzo_2021</th>
                          <th class="th__texto">abril_2021</th>
                          <th class="th__texto">mayo_2021</th>
                          <th class="th__texto">junio_2021</th>
                          <th class="th__texto">julio_2021</th>
                          <th class="th__texto">agosto_2021</th>
                          <th class="th__texto">septiembre_2021</th>
                          <th class="th__texto">octubre_2021</th>
                          <th class="th__texto">noviembre_2021</th>
                          <th class="th__texto">diciembre_2021</th>
                          <th class="th__texto">enero_2022</th>
                          <th class="th__texto">febrero_2022</th>
                          <th class="th__texto">marzo_2022</th>
                          <th class="th__texto">abril_2022</th>
                          <th class="th__texto">mayo_2022</th>
                          <th class="th__texto">junio_2022</th>
                          <th class="th__texto">julio_2022</th>
                          <th class="th__texto">agosto_2022</th>
                          <th class="th__texto">septiembre_2022</th>
                          <th class="th__texto">octubre_2022</th>
                          <th class="th__texto">noviembre_2022</th>
                          <th class="th__texto">diciembre_2022</th>
                          <th class="th__texto">enero_2023</th>
                          <th class="th__texto">febrero_2023</th>
                          <th class="th__texto">marzo_2023</th>
                          <th class="th__texto">abril_2023</th>
                          <th class="th__texto">mayo_2023</th>
                          <th class="th__texto">junio_2023</th>
                          <th class="th__texto">julio_2023</th>
                          <th class="th__texto">agosto_2023</th>
                          <th class="th__texto">septiembre_2023</th>
                          <th class="th__texto">octubre_2023</th>
                          <th class="th__texto">noviembre_2023</th>
                          <th class="th__texto">diciembre_2023</th>
                          <th class="th__texto">enero_2024</th>
                          <th class="th__texto">febrero_2024</th>
                          <th class="th__texto">marzo_2024</th>
                          <th class="th__texto">abril_2024</th>
                          <th class="th__texto">mayo_2024</th>
                          <th class="th__texto">junio_2024</th>
                          <th class="th__texto">julio_2024</th>
                          <th class="th__texto">agosto_2024</th>
                          <th class="th__texto">septiembre_2024</th>
                          <th class="th__texto">octubre_2024</th>
                          <th class="th__texto">noviembre_2024</th>
                          <th class="th__texto">diciembre_2024</th>
                          <th class="th__texto">enero_2025</th>
                          <th class="th__texto">febrero_2025</th>
                          <th class="th__texto">marzo_2025</th>
                          <th class="th__texto">abril_2025</th>
                          <th class="th__texto">mayo_2025</th>
                          <th class="th__texto">junio_2025</th>
                          <th class="th__texto">julio_2025</th>
                          <th class="th__texto">agosto_2025</th>
                          <th class="th__texto">septiembre_2025</th>
                          <th class="th__texto">octubre_2025</th>
                          <th class="th__texto">noviembre_2025</th>
                          <th class="th__texto">diciembre_2025</th>
                          <th class="th__texto">enero_2026</th>
                          <th class="th__texto">febrero_2026</th>
                          <th class="th__texto">marzo_2026</th>
                          <th class="th__texto">abril_2026</th>
                          <th class="th__texto">mayo_2026</th>
                          <th class="th__texto">junio_2026</th>
                          <th class="th__texto">julio_2026</th>
                          <th class="th__texto">agosto_2026</th>
                          <th class="th__texto">septiembre_2026</th>
                          <th class="th__texto">octubre_2026</th>
                          <th class="th__texto">noviembre_2026</th>
                          <th class="th__texto">diciembre_2026</th>
                          <th class="th__texto">enero_2027</th>
                          <th class="th__texto">febrero_2027</th>
                          <th class="th__texto">marzo_2027</th>
                          <th class="th__texto">abril_2027</th>
                          <th class="th__texto">mayo_2027</th>
                          <th class="th__texto">junio_2027</th>
                          <th class="th__texto">julio_2027</th>
                          <th class="th__texto">agosto_2027</th>
                          <th class="th__texto">septiembre_2027</th>
                          <th class="th__texto">octubre_2027</th>
                          <th class="th__texto">noviembre_2027</th>
                          <th class="th__texto">diciembre_2027</th>
                          <th class="th__texto">enero_2028</th>
                          <th class="th__texto">febrero_2028</th>
                          <th class="th__texto">marzo_2028</th>
                          <th class="th__texto">abril_2028</th>
                          <th class="th__texto">mayo_2028</th>
                          <th class="th__texto">junio_2028</th>
                          <th class="th__texto">julio_2028</th>
                          <th class="th__texto">agosto_2028</th>
                          <th class="th__texto">septiembre_2028</th>
                          <th class="th__texto">octubre_2028</th>
                          <th class="th__texto">noviembre_2028</th>
                          <th class="th__texto">diciembre_2028</th>
                          <th class="th__texto">enero_2029</th>
                          <th class="th__texto">febrero_2029</th>
                          <th class="th__texto">marzo_2029</th>
                          <th class="th__texto">abril_2029</th>
                          <th class="th__texto">mayo_2029</th>
                          <th class="th__texto">junio_2029</th>
                          <th class="th__texto">julio_2029</th>
                          <th class="th__texto">agosto_2029</th>
                          <th class="th__texto">septiembre_2029</th>
                          <th class="th__texto">octubre_2029</th>
                          <th class="th__texto">noviembre_2029</th>
                          <th class="th__texto">diciembre_2029</th>
                          <th class="th__texto">enero_2030</th>
                          <th class="th__texto">febrero_2030</th>
                          <th class="th__texto">marzo_2030</th>
                          <th class="th__texto">abril_2030</th>
                          <th class="th__texto">mayo_2030</th>
                          <th class="th__texto">junio_2030</th>
                          <th class="th__texto">julio_2030</th>
                          <th class="th__texto">agosto_2030</th>
                          <th class="th__texto">septiembre_2030</th>
                          <th class="th__texto">octubre_2030</th>
                          <th class="th__texto">noviembre_2030</th>
                          <th class="th__texto">diciembre_2030</th>
                          <th class="th__texto">enero_2031</th>
                          <th class="th__texto">febrero_2031</th>
                          <th class="th__texto">marzo_2031</th>
                          <th class="th__texto">abril_2031</th>
                          <th class="th__texto">mayo_2031</th>
                          <th class="th__texto">junio_2031</th>
                          <th class="th__texto">julio_2031</th>
                          <th class="th__texto">agosto_2031</th>
                          <th class="th__texto">septiembre_2031</th>
                          <th class="th__texto">octubre_2031</th>
                          <th class="th__texto">noviembre_2031</th>
                          <th class="th__texto">diciembre_2031</th>
                          <th class="th__texto">enero_2032</th>
                          <th class="th__texto">febrero_2032</th>
                          <th class="th__texto">marzo_2032</th>
                          <th class="th__texto">abril_2032</th>
                          <th class="th__texto">mayo_2032</th>
                          <th class="th__texto">junio_2032</th>
                          <th class="th__texto">julio_2032</th>
                          <th class="th__texto">agosto_2032</th>
                          <th class="th__texto">septiembre_2032</th>
                          <th class="th__texto">octubre_2032</th>
                          <th class="th__texto">noviembre_2032</th>
                          <th class="th__texto">diciembre_2032</th>
                          <th class="th__texto">enero_2033</th>
                          <th class="th__texto">febrero_2033</th>
                          <th class="th__texto">marzo_2033</th>
                          <th class="th__texto">abril_2033</th>
                          <th class="th__texto">mayo_2033</th>
                          <th class="th__texto">junio_2033</th>
                          <th class="th__texto">julio_2033</th>
                          <th class="th__texto">agosto_2033</th>
                          <th class="th__texto">septiembre_2033</th>
                          <th class="th__texto">octubre_2033</th>
                          <th class="th__texto">noviembre_2033</th>
                          <th class="th__texto">diciembre_2033</th>
                          <th class="th__texto">enero_2034</th>                   
                          <th class="th__texto">febrero_2034</th>
                          <th class="th__texto">marzo_2034</th>
                          <th class="th__texto">abril_2034</th>
                          <th class="th__texto">mayo_2034</th>
                          <th class="th__texto">junio_2034</th>
                          <th class="th__texto">julio_2034</th>
                          <th class="th__texto">agosto_2034</th>
                          <th class="th__texto">septiembre_2034</th>
                          <th class="th__texto">octubre_2034</th>
                          <th class="th__texto">noviembre_2034</th>
                          <th class="th__texto">diciembre_2034</th> 
                          <th class="th__texto">enero_2035</th>  
                          <th class="th__texto">febrero_2035</th>                    
                          <th class="th__texto">marzo_2035</th>
                          <th class="th__texto">abril_2035</th>
                          <th class="th__texto">mayo_2035</th>
                          <th class="th__texto">junio_2035</th>
                          <th class="th__texto">julio_2035</th>
                          <th class="th__texto">agosto_2035</th>
                          <th class="th__texto">septiembre_2035</th>
                          <th class="th__texto">octubre_2035</th>
                          <th class="th__texto">noviembre_2035</th>
                          <th class="th__texto">diciembre_2035</th> 
                          <th class="th__texto">enero_2036</th>                   
                          <th class="th__texto">febrero_2036</th>
                          <th class="th__texto">marzo_2036</th>
                          <th class="th__texto">abril_2036</th>
                          <th class="th__texto">mayo_2036</th>
                          <th class="th__texto">junio_2036</th>
                          <th class="th__texto">julio_2036</th>
                          <th class="th__texto">agosto_2036</th>
                          <th class="th__texto">septiembre_2036</th>
                          <th class="th__texto">octubre_2036</th>
                          <th class="th__texto">noviembre_2036</th>
                          <th class="th__texto">diciembre_2036</th>
                          <th class="th__texto">enero_2037</th>                    
                          <th class="th__texto">febrero_2037</th> 
                          <th class="th__texto">marzo_2037</th> 
                          <th class="th__texto">abril_2037</th>
                          <th class="th__texto">mayo_2037</th>
                          <th class="th__texto">junio_2037</th>
                          <th class="th__texto">julio_2037</th>
                          <th class="th__texto">agosto_2037</th>
                          <th class="th__texto">septiembre_2037</th>
                          <th class="th__texto">octubre_2037</th>
                          <th class="th__texto">noviembre_2037</th>
                          <th class="th__texto">diciembre_2037</th>     
                          <th class="th__texto">enero_2038</th>
                          <th class="th__texto">febrero_2038</th>             
                          <th class="th__texto">marzo_2038</th>
                          <th class="th__texto">abril_2038</th>
                          <th class="th__texto">mayo_2038</th>
                          <th class="th__texto">junio_2038</th>
                          <th class="th__texto">julio_2038</th>
                          <th class="th__texto">agosto_2038</th>
                          <th class="th__texto">septiembre_2038</th>
                          <th class="th__texto">octubre_2038</th>
                          <th class="th__texto">noviembre_2038</th>
                          <th class="th__texto">diciembre_2038</th> 
                          <th class="th__texto">enero_2039</th>
                          <th class="th__texto">febrero_2039</th>                  
                          <th class="th__texto">marzo_2039</th>
                          <th class="th__texto">abril_2039</th>
                          <th class="th__texto">mayo_2039</th>
                          <th class="th__texto">junio_2039</th>
                          <th class="th__texto">julio_2039</th>
                          <th class="th__texto">agosto_2039</th>
                          <th class="th__texto">septiembre_2039</th>
                          <th class="th__texto">octubre_2039</th>
                          <th class="th__texto">noviembre_2039</th>
                          <th class="th__texto">diciembre_2039</th>
                          <th class="th__texto">enero_2040</th>
                          <th class="th__texto">febrero_2040</th>                      
                          <th class="th__texto">marzo_2040</th>
                          <th class="th__texto">abril_2040</th>
                          <th class="th__texto">mayo_2040</th>
                          <th class="th__texto">junio_2040</th>
                          <th class="th__texto">julio_2040</th>
                          <th class="th__texto">agosto_2040</th>
                          <th class="th__texto">septiembre_2040</th>
                          <th class="th__texto">octubre_2040</th>
                          <th class="th__texto">noviembre_2040</th>
                          <th class="th__texto">diciembre_2040</th>        
                          <th class="th__texto">enero_2041</th>
                          <th class="th__texto">febrero_2041</th>                      
                          <th class="th__texto">marzo_2041</th>
                          <th class="th__texto">abril_2041</th>
                          <th class="th__texto">mayo_2041</th>
                          <th class="th__texto">junio_2041</th>
                          <th class="th__texto">julio_2041</th>
                          <th class="th__texto">agosto_2041</th>
                          <th class="th__texto">septiembre_2041</th>
                          <th class="th__texto">octubre_2041</th>
                          <th class="th__texto">noviembre_2041</th>
                          <th class="th__texto">diciembre_2041</th>    
                          <th class="th__texto">enero_2042</th>
                          <th class="th__texto">febrero_2042</th>                      
                          <th class="th__texto">marzo_2042</th>
                          <th class="th__texto">abril_2042</th>
                          <th class="th__texto">mayo_2042</th>
                          <th class="th__texto">junio_2042</th>
                          <th class="th__texto">julio_2042</th>
                          <th class="th__texto">agosto_2042</th>
                          <th class="th__texto">septiembre_2042</th>
                          <th class="th__texto">octubre_2042</th>
                          <th class="th__texto">noviembre_2042</th>
                          <th class="th__texto">diciembre_2042</th>    
                          <th class="th__texto">enero_2043</th>
                          <th class="th__texto">febrero_2043</th>                      
                          <th class="th__texto">marzo_2043</th>
                          <th class="th__texto">abril_2043</th>
                          <th class="th__texto">mayo_2043</th>
                          <th class="th__texto">junio_2043</th>
                          <th class="th__texto">julio_2043</th>
                          <th class="th__texto">agosto_2043</th>
                          <th class="th__texto">septiembre_2043</th>
                          <th class="th__texto">octubre_2043</th>
                          <th class="th__texto">noviembre_2043</th>
                          <th class="th__texto">diciembre_2043</th>              
                          <th class="th__texto">enero_2044</th>
                          <th class="th__texto">febrero_2044</th>                      
                          <th class="th__texto">marzo_2044</th>
                          <th class="th__texto">abril_2044</th>
                          <th class="th__texto">mayo_2044</th>
                          <th class="th__texto">junio_2044</th>
                          <th class="th__texto">julio_2044</th>
                          <th class="th__texto">agosto_2044</th>
                          <th class="th__texto">septiembre_2044</th>
                          <th class="th__texto">octubre_2044</th>
                          <th class="th__texto">noviembre_2044</th>
                          <th class="th__texto">diciembre_2044</th>    
                          <th class="th__texto">enero_2045</th>
                          <th class="th__texto">febrero_2045</th>                      
                          <th class="th__texto">marzo_2045</th>
                          <th class="th__texto">abril_2045</th>
                          <th class="th__texto">mayo_2045</th>
                          <th class="th__texto">junio_2045</th>
                          <th class="th__texto">julio_2045</th>
                          <th class="th__texto">agosto_2045</th>
                          <th class="th__texto">septiembre_2045</th>
                          <th class="th__texto">octubre_2045</th>
                          <th class="th__texto">noviembre_2045</th>
                          <th class="th__texto">diciembre_2045</th>
                          <th class="th__texto">MODIFICAR</th>
                          <th class="th__texto">ELIMINAR</th>   
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                            foreach($datos as $item) {
                          ?>
                            <tr class="text-center">
                            <td> <?php echo $item->LLAVE; ?> </td>
                            <td> <?php echo $item->LOTE;?> </td>
                            <td> <?php echo $item->CONDOMINIO;?> </td>
                            <td> <?php echo $item->CLÚSTER;?> </td>
                            <td> <?php echo $item->DESARROLLO; ?> </td>
                            <td> <?php echo $item->CLIENTE;?> </td>
                            <td> <?php echo "$".number_format(floatval($item->PRECIO_TOTAL),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->ENGANCHE),2);?></td>
                            <td> <?php echo $item->MESES_1;?> </td>
                            <td> <?php echo $item->MESES_2;?> </td>
                            <td> <?php echo $item->MESES_3; ?> </td>
                            <td> <?php echo $item->MESES_TOTALES;?> </td>
                            <td> <?php echo "$".number_format(floatval($item->MEN_1),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->MEN_2),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->MEN_3),2);?> </td>
                            <td> <?php echo $item->INICIO_CORRIDA; ?> </td>
                            <td> <?php echo $item->PRIMER_ABONO;?> </td>
                            <td> <?php echo $item->MES_Y_AÑO_FIRMA;?> </td>
                            <td> <?php echo  $item->ESPECIAL;?></td>
                            <td> <?php echo "$".number_format(floatval($item->enero_2020),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->febrero_2020),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->marzo_2020),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->abril_2020),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->mayo_2020),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->junio_2020),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->julio_2020),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->agosto_2020),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->septiembre_2020),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->octubre_2020),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->noviembre_2020),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->diciembre_2020),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->enero_2021),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->febrero_2021),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->marzo_2021),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->abril_2021),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->mayo_2021),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->junio_2021),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->julio_2021),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->agosto_2021),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->septiembre_2021),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->octubre_2021),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->noviembre_2021),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->diciembre_2021),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->enero_2022),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->febrero_2022),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->marzo_2022),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->abril_2022),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->mayo_2022),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->junio_2022),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->julio_2022),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->agosto_2022),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->septiembre_2022),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->octubre_2022),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->noviembre_2022),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->diciembre_2022),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->enero_2023),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->febrero_2023),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->marzo_2023),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->abril_2023),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->mayo_2023),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->junio_2023),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->julio_2023),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->agosto_2023),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->septiembre_2023),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->octubre_2023),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->noviembre_2023),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->diciembre_2023),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->enero_2024),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->febrero_2024),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->marzo_2024),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->abril_2024),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->mayo_2024),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->junio_2024),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->julio_2024),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->agosto_2024),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->septiembre_2024),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->octubre_2024),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->noviembre_2024),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->diciembre_2024),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->enero_2025),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->febrero_2025),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->marzo_2025),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->abril_2025),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->mayo_2025),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->junio_2025),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->julio_2025),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->agosto_2025),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->septiembre_2025),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->octubre_2025),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->noviembre_2025),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->diciembre_2025),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->enero_2026),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->febrero_2026),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->marzo_2026),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->abril_2026),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->mayo_2026),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->junio_2026),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->julio_2026),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->agosto_2026),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->septiembre_2026),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->octubre_2026),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->noviembre_2026),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->diciembre_2026),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->enero_2027),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->febrero_2027),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->marzo_2027),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->abril_2027),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->mayo_2027),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->junio_2027),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->julio_2027),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->agosto_2027),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->septiembre_2027),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->octubre_2027),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->noviembre_2027),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->diciembre_2027),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->enero_2028),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->febrero_2028),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->marzo_2028),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->abril_2028),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->mayo_2028),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->junio_2028),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->julio_2028),2)?> </td>
                            <td> <?php echo "$".number_format(floatval($item->agosto_2028),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->septiembre_2028),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->octubre_2028),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->noviembre_2028),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->diciembre_2028),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->enero_2029),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->febrero_2029),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->marzo_2029),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->abril_2029),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->mayo_2029),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->junio_2029),2);?> </td>
                            <td> <?php echo" $".number_format(floatval($item->julio_2029),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->agosto_2029),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->septiembre_2029),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->octubre_2029),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->noviembre_2029),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->diciembre_2029),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->enero_2030),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->febrero_2030),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->marzo_2030),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->abril_2030),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->mayo_2030),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->junio_2030),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->julio_2030),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->agosto_2030),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->septiembre_2030),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->octubre_2030),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->noviembre_2030),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->diciembre_2030),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->enero_2031),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->febrero_2031),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->marzo_2031),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->abril_2031),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->mayo_2031),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->junio_2031),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->julio_2031),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->agosto_2031),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->septiembre_2031),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->octubre_2031),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->noviembre_2031),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->diciembre_2031),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->enero_2032),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->febrero_2032),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->marzo_2032),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->abril_2032),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->mayo_2032),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->junio_2032),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->julio_2032),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->agosto_2032),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->septiembre_2032),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->octubre_2032),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->noviembre_2032),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->diciembre_2032),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->enero_2033),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->febrero_2033),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->marzo_2033),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->abril_2033),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->mayo_2033),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->junio_2033),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->julio_2033),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->agosto_2033),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->septiembre_2033),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->octubre_2033),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->noviembre_2033),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->diciembre_2033),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->enero_2034),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->febrero_2034),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->marzo_2034),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->abril_2034),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->mayo_2034),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->junio_2034),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->julio_2034),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->agosto_2034),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->septiembre_2034),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->octubre_2034),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->noviembre_2034),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->diciembre_2034),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->enero_2035),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->febrero_2035),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->marzo_2035),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->abril_2035),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->mayo_2035),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->junio_2035),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->julio_2035),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->agosto_2035),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->septiembre_2035),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->octubre_2035),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->noviembre_2035),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->diciembre_2035),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->enero_2036),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->febrero_2036),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->marzo_2036),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->abril_2036),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->mayo_2036),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->junio_2036),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->julio_2036),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->agosto_2036),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->septiembre_2036),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->octubre_2036),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->noviembre_2036),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->diciembre_2036),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->enero_2037),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->febrero_2037),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->marzo_2037),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->abril_2037),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->mayo_2037),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->junio_2037),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->julio_2037),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->agosto_2037),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->septiembre_2037),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->octubre_2037),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->noviembre_2037),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->diciembre_2037),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->enero_2038),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->febrero_2038),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->marzo_2038),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->abril_2038),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->mayo_2038),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->junio_2038),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->julio_2038),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->agosto_2038),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->septiembre_2038),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->octubre_2038),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->noviembre_2038),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->diciembre_2038),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->enero_2039),2)?> </td>
                            <td> <?php echo "$".number_format(floatval($item->febrero_2039),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->marzo_2039),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->abril_2039),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->mayo_2039),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->junio_2039),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->julio_2039),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->agosto_2039),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->septiembre_2039),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->octubre_2039),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->noviembre_2039),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->diciembre_2039),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->enero_2040),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->febrero_2040),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->marzo_2040),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->abril_2040),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->mayo_2040),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->junio_2040),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->julio_2040),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->agosto_2040),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->septiembre_2040),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->octubre_2040),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->noviembre_2040),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->diciembre_2040),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->enero_2041),2)?> </td>
                            <td> <?php echo "$".number_format(floatval($item->febrero_2041),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->marzo_2041),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->abril_2041),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->mayo_2041),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->junio_2041),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->julio_2041),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->agosto_2041),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->septiembre_2041),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->octubre_2041),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->noviembre_2041),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->diciembre_2041),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->enero_2042),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->febrero_2042),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->marzo_2042),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->abril_2042),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->mayo_2042),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->junio_2042),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->julio_2042),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->agosto_2042),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->septiembre_2042),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->octubre_2042),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->noviembre_2042),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->diciembre_2042),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->enero_2043),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->febrero_2043),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->marzo_2043),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->abril_2043),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->mayo_2043),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->junio_2043),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->julio_2043),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->agosto_2043),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->septiembre_2043),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->octubre_2043),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->noviembre_2043),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->diciembre_2043),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->enero_2044),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->febrero_2044),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->marzo_2044),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->abril_2044),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->mayo_2044),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->junio_2044),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->julio_2044),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->agosto_2044),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->septiembre_2044),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->octubre_2044),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->noviembre_2044),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->diciembre_2044),2);?></td>
                            <td> <?php echo "$".number_format(floatval($item->enero_2045),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->febrero_2045),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->marzo_2045),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->abril_2045),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->mayo_2045),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->junio_2045),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->julio_2045),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->agosto_2045),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->septiembre_2045),2); ?> </td>
                            <td> <?php echo "$".number_format(floatval($item->octubre_2045),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->noviembre_2045),2);?> </td>
                            <td> <?php echo "$".number_format(floatval($item->diciembre_2045),2);?></td>
                            <td>
                              <form action="./CobranzaAcumulado/actualizarcobranzaacumulado.php" method="POST">
                                <input type="text" name="id" id="id" hidden value="<?php echo $item->_id ?>">
                                <button class="btn btn-warning">
                                  <img class="edit__icon" src="images/iconos/pen-solid.svg" alt="">
                                </button>
                              </form>
                            </td>
                            <td>
                              <form action="./CobranzaAcumulado/eliminarcobranzaacumulado.php" method="POST">
                                <input type="text" name="id" id="id" hidden value="<?php echo $item->_id ?>">
                                <button class="btn btn-danger">
                                  <img class="delete__icon" src="images/iconos/trash-solid.svg" alt="">
                                </button>
                              </form>
                            </td>

                            
                          
                            </tr>
                            <?php } ?> 
                    </tbody>
                    <tfoot class="bg-blue">
                      <tr class="text-center">
                          <th class="th__texto">LLAVE</th>                        
                          <th class="th__texto">LOTE</th>
                          <th class="th__texto">CONDOMINIO</th>
                          <th class="th__texto">CLÚSTER</th>
                          <th class="th__texto">DESARROLLO</th>
                          <th class="th__texto">CLIENTE</th>
                          <th class="th__texto">PRECIO_TOTAL</th>
                          <th class="th__texto">ENGANCHE</th>
                          <th class="th__texto">MESES_1</th>
                          <th class="th__texto">MESES_2</th>
                          <th class="th__texto">MESES_3</th>
                          <th class="th__texto">MESES_TOTALES</th>
                          <th class="th__texto">MEN_1</th>
                          <th class="th__texto">MEN_2</th>
                          <th class="th__texto">MEN_3</th>
                          <th class="th__texto">INICIO_CORRIDA</th>
                          <th class="th__texto">PRIMER_ABONO</th>
                          <th class="th__texto">MES_Y_AÑO_FIRMA</th>
                          <th class="th__texto">ESPECIAL</th>
                          <th class="th__texto">enero_2020</th>
                          <th class="th__texto">febrero_2020</th>
                          <th class="th__texto">marzo_2020</th>
                          <th class="th__texto">abrirl_2020</th>
                          <th class="th__texto">mayo_2020</th>
                          <th class="th__texto">junio_2020</th>
                          <th class="th__texto">julio_2020</th>
                          <th class="th__texto">agosto_2020</th>
                          <th class="th__texto">septiembre_2020</th>
                          <th class="th__texto">octubre_2020</th>
                          <th class="th__texto">noviembre_2020</th>
                          <th class="th__texto">diciembre_2020</th>
                          <th class="th__texto">enero_2021</th>
                          <th class="th__texto">febrero_2021</th>
                          <th class="th__texto">marzo_2021</th>
                          <th class="th__texto">abrirl_2021</th>
                          <th class="th__texto">mayo_2021</th>
                          <th class="th__texto">junio_2021</th>
                          <th class="th__texto">julio_2021</th>
                          <th class="th__texto">agosto_2021</th>
                          <th class="th__texto">septiembre_2021</th>
                          <th class="th__texto">octubre_2021</th>
                          <th class="th__texto">noviembre_2021</th>
                          <th class="th__texto">diciembre_2021</th>
                          <th class="th__texto">enero_2022</th>
                          <th class="th__texto">febrero_2022</th>
                          <th class="th__texto">marzo_2022</th>
                          <th class="th__texto">abrirl_2022</th>
                          <th class="th__texto">mayo_2022</th>
                          <th class="th__texto">junio_2022</th>
                          <th class="th__texto">julio_2022</th>
                          <th class="th__texto">agosto_2022</th>
                          <th class="th__texto">septiembre_2022</th>
                          <th class="th__texto">octubre_2022</th>
                          <th class="th__texto">noviembre_2022</th>
                          <th class="th__texto">diciembre_2022</th>
                          <th class="th__texto">enero_2023</th>
                          <th class="th__texto">febrero_2023</th>
                          <th class="th__texto">marzo_2023</th>
                          <th class="th__texto">abrirl_2023</th>
                          <th class="th__texto">mayo_2023</th>
                          <th class="th__texto">junio_2023</th>
                          <th class="th__texto">julio_2023</th>
                          <th class="th__texto">agosto_2023</th>
                          <th class="th__texto">septiembre_2023</th>
                          <th class="th__texto">octubre_2023</th>
                          <th class="th__texto">noviembre_2023</th>
                          <th class="th__texto">diciembre_2023</th>
                          <th class="th__texto">enero_2024</th>
                          <th class="th__texto">febrero_2024</th>
                          <th class="th__texto">marzo_2024</th>
                          <th class="th__texto">abrirl_2024</th>
                          <th class="th__texto">mayo_2024</th>
                          <th class="th__texto">junio_2024</th>
                          <th class="th__texto">julio_2024</th>
                          <th class="th__texto">agosto_2024</th>
                          <th class="th__texto">septiembre_2024</th>
                          <th class="th__texto">octubre_2024</th>
                          <th class="th__texto">noviembre_2024</th>
                          <th class="th__texto">diciembre_2024</th>
                          <th class="th__texto">enero_2025</th>
                          <th class="th__texto">febrero_2025</th>
                          <th class="th__texto">marzo_2025</th>
                          <th class="th__texto">abrirl_2025</th>
                          <th class="th__texto">mayo_2025</th>
                          <th class="th__texto">junio_2025</th>
                          <th class="th__texto">julio_2025</th>
                          <th class="th__texto">agosto_2025</th>
                          <th class="th__texto">septiembre_2025</th>
                          <th class="th__texto">octubre_2025</th>
                          <th class="th__texto">noviembre_2025</th>
                          <th class="th__texto">diciembre_2025</th>
                          <th class="th__texto">enero_2026</th>
                          <th class="th__texto">febrero_2026</th>
                          <th class="th__texto">marzo_2026</th>
                          <th class="th__texto">abrirl_2026</th>
                          <th class="th__texto">mayo_2026</th>
                          <th class="th__texto">junio_2026</th>
                          <th class="th__texto">julio_2026</th>
                          <th class="th__texto">agosto_2026</th>
                          <th class="th__texto">septiembre_2026</th>
                          <th class="th__texto">octubre_2026</th>
                          <th class="th__texto">noviembre_2026</th>
                          <th class="th__texto">diciembre_2026</th>
                          <th class="th__texto">enero_2027</th>
                          <th class="th__texto">febrero_2027</th>
                          <th class="th__texto">marzo_2027</th>
                          <th class="th__texto">abrirl_2027</th>
                          <th class="th__texto">mayo_2027</th>
                          <th class="th__texto">junio_2027</th>
                          <th class="th__texto">julio_2027</th>
                          <th class="th__texto">agosto_2027</th>
                          <th class="th__texto">septiembre_2027</th>
                          <th class="th__texto">octubre_2027</th>
                          <th class="th__texto">noviembre_2027</th>
                          <th class="th__texto">diciembre_2027</th>
                          <th class="th__texto">enero_2028</th>
                          <th class="th__texto">febrero_2028</th>
                          <th class="th__texto">marzo_2028</th>
                          <th class="th__texto">abrirl_2028</th>
                          <th class="th__texto">mayo_2028</th>
                          <th class="th__texto">junio_2028</th>
                          <th class="th__texto">julio_2028</th>
                          <th class="th__texto">agosto_2028</th>
                          <th class="th__texto">septiembre_2028</th>
                          <th class="th__texto">octubre_2028</th>
                          <th class="th__texto">noviembre_2028</th>
                          <th class="th__texto">diciembre_2028</th>
                          <th class="th__texto">enero_2029</th>
                          <th class="th__texto">febrero_2029</th>
                          <th class="th__texto">marzo_2029</th>
                          <th class="th__texto">abrirl_2029</th>
                          <th class="th__texto">mayo_2029</th>
                          <th class="th__texto">junio_2029</th>
                          <th class="th__texto">julio_2029</th>
                          <th class="th__texto">agosto_2029</th>
                          <th class="th__texto">septiembre_2029</th>
                          <th class="th__texto">octubre_2029</th>
                          <th class="th__texto">noviembre_2029</th>
                          <th class="th__texto">diciembre_2029</th>
                          <th class="th__texto">enero_2030</th>
                          <th class="th__texto">febrero_2030</th>
                          <th class="th__texto">marzo_2030</th>
                          <th class="th__texto">abrirl_2030</th>
                          <th class="th__texto">mayo_2030</th>
                          <th class="th__texto">junio_2030</th>
                          <th class="th__texto">julio_2030</th>
                          <th class="th__texto">agosto_2030</th>
                          <th class="th__texto">septiembre_2030</th>
                          <th class="th__texto">octubre_2030</th>
                          <th class="th__texto">noviembre_2030</th>
                          <th class="th__texto">diciembre_2030</th>
                          <th class="th__texto">enero_2031</th>
                          <th class="th__texto">febrero_2031</th>
                          <th class="th__texto">marzo_2031</th>
                          <th class="th__texto">abrirl_2031</th>
                          <th class="th__texto">mayo_2031</th>
                          <th class="th__texto">junio_2031</th>
                          <th class="th__texto">julio_2031</th>
                          <th class="th__texto">agosto_2031</th>
                          <th class="th__texto">septiembre_2031</th>
                          <th class="th__texto">octubre_2031</th>
                          <th class="th__texto">noviembre_2031</th>
                          <th class="th__texto">diciembre_2031</th>
                          <th class="th__texto">enero_2032</th>
                          <th class="th__texto">febrero_2032</th>
                          <th class="th__texto">marzo_2032</th>
                          <th class="th__texto">abrirl_2032</th>
                          <th class="th__texto">mayo_2032</th>
                          <th class="th__texto">junio_2032</th>
                          <th class="th__texto">julio_2032</th>
                          <th class="th__texto">agosto_2032</th>
                          <th class="th__texto">septiembre_2032</th>
                          <th class="th__texto">octubre_2032</th>
                          <th class="th__texto">noviembre_2032</th>
                          <th class="th__texto">diciembre_2032</th>
                          <th class="th__texto">enero_2033</th>
                          <th class="th__texto">febrero_2033</th>
                          <th class="th__texto">marzo_2033</th>
                          <th class="th__texto">abrirl_2033</th>
                          <th class="th__texto">mayo_2033</th>
                          <th class="th__texto">junio_2033</th>
                          <th class="th__texto">julio_2033</th>
                          <th class="th__texto">agosto_2033</th>
                          <th class="th__texto">septiembre_2033</th>
                          <th class="th__texto">octubre_2033</th>
                          <th class="th__texto">noviembre_2033</th>
                          <th class="th__texto">diciembre_2033</th>
                          <th class="th__texto">enero_2034</th>                   
                          <th class="th__texto">febrero_2034</th>
                          <th class="th__texto">marzo_2034</th>
                          <th class="th__texto">abrirl_2034</th>
                          <th class="th__texto">mayo_2034</th>
                          <th class="th__texto">junio_2034</th>
                          <th class="th__texto">julio_2034</th>
                          <th class="th__texto">agosto_2034</th>
                          <th class="th__texto">septiembre_2034</th>
                          <th class="th__texto">octubre_2034</th>
                          <th class="th__texto">noviembre_2034</th>
                          <th class="th__texto">diciembre_2034</th> 
                          <th class="th__texto">enero_2035</th>  
                          <th class="th__texto">febrero_2035</th>                    
                          <th class="th__texto">marzo_2035</th>
                          <th class="th__texto">abrirl_2035</th>
                          <th class="th__texto">mayo_2035</th>
                          <th class="th__texto">junio_2035</th>
                          <th class="th__texto">julio_2035</th>
                          <th class="th__texto">agosto_2035</th>
                          <th class="th__texto">septiembre_2035</th>
                          <th class="th__texto">octubre_2035</th>
                          <th class="th__texto">noviembre_2035</th>
                          <th class="th__texto">diciembre_2035</th> 
                          <th class="th__texto">enero_2036</th>                   
                          <th class="th__texto">febrero_2036</th>
                          <th class="th__texto">marzo_2036</th>
                          <th class="th__texto">abrirl_2036</th>
                          <th class="th__texto">mayo_2036</th>
                          <th class="th__texto">junio_2036</th>
                          <th class="th__texto">julio_2036</th>
                          <th class="th__texto">agosto_2036</th>
                          <th class="th__texto">septiembre_2036</th>
                          <th class="th__texto">octubre_2036</th>
                          <th class="th__texto">noviembre_2036</th>
                          <th class="th__texto">diciembre_2036</th>
                          <th class="th__texto">enero_2037</th>                    
                          <th class="th__texto">febrero_2037</th> 
                          <th class="th__texto">marzo_2037</th> 
                          <th class="th__texto">abrirl_2037</th>
                          <th class="th__texto">mayo_2037</th>
                          <th class="th__texto">junio_2037</th>
                          <th class="th__texto">julio_2037</th>
                          <th class="th__texto">agosto_2037</th>
                          <th class="th__texto">septiembre_2037</th>
                          <th class="th__texto">octubre_2037</th>
                          <th class="th__texto">noviembre_2037</th>
                          <th class="th__texto">diciembre_2037</th>     
                          <th class="th__texto">enero_2038</th>
                          <th class="th__texto">febrero_2038</th>             
                          <th class="th__texto">marzo_2038</th>
                          <th class="th__texto">abrirl_2038</th>
                          <th class="th__texto">mayo_2038</th>
                          <th class="th__texto">junio_2038</th>
                          <th class="th__texto">julio_2038</th>
                          <th class="th__texto">agosto_2038</th>
                          <th class="th__texto">septiembre_2038</th>
                          <th class="th__texto">octubre_2038</th>
                          <th class="th__texto">noviembre_2038</th>
                          <th class="th__texto">diciembre_2038</th> 
                          <th class="th__texto">enero_2039</th>
                          <th class="th__texto">febrero_2039</th>                  
                          <th class="th__texto">marzo_2039</th>
                          <th class="th__texto">abril_2039</th>
                          <th class="th__texto">mayo_2039</th>
                          <th class="th__texto">junio_2039</th>
                          <th class="th__texto">julio_2039</th>
                          <th class="th__texto">agosto_2039</th>
                          <th class="th__texto">septiembre_2039</th>
                          <th class="th__texto">octubre_2039</th>
                          <th class="th__texto">noviembre_2039</th>
                          <th class="th__texto">diciembre_2039</th>
                          <th class="th__texto">enero_2040</th>
                          <th class="th__texto">febrero_2040</th>                      
                          <th class="th__texto">marzo_2040</th>
                          <th class="th__texto">abril_2040</th>
                          <th class="th__texto">mayo_2040</th>
                          <th class="th__texto">junio_2040</th>
                          <th class="th__texto">julio_2040</th>
                          <th class="th__texto">agosto_2040</th>
                          <th class="th__texto">septiembre_2040</th>
                          <th class="th__texto">octubre_2040</th>
                          <th class="th__texto">noviembre_2040</th>
                          <th class="th__texto">diciembre_2040</th>        
                          <th class="th__texto">enero_2041</th>
                          <th class="th__texto">febrero_2041</th>                      
                          <th class="th__texto">marzo_2041</th>
                          <th class="th__texto">abril_2041</th>
                          <th class="th__texto">mayo_2041</th>
                          <th class="th__texto">junio_2041</th>
                          <th class="th__texto">julio_2041</th>
                          <th class="th__texto">agosto_2041</th>
                          <th class="th__texto">septiembre_2041</th>
                          <th class="th__texto">octubre_2041</th>
                          <th class="th__texto">noviembre_2041</th>
                          <th class="th__texto">diciembre_2041</th>    
                          <th class="th__texto">enero_2042</th>
                          <th class="th__texto">febrero_2042</th>                      
                          <th class="th__texto">marzo_2042</th>
                          <th class="th__texto">abril_2042</th>
                          <th class="th__texto">mayo_2042</th>
                          <th class="th__texto">junio_2042</th>
                          <th class="th__texto">julio_2042</th>
                          <th class="th__texto">agosto_2042</th>
                          <th class="th__texto">septiembre_2042</th>
                          <th class="th__texto">octubre_2042</th>
                          <th class="th__texto">noviembre_2042</th>
                          <th class="th__texto">diciembre_2042</th>    
                          <th class="th__texto">enero_2043</th>
                          <th class="th__texto">febrero_2043</th>                      
                          <th class="th__texto">marzo_2043</th>
                          <th class="th__texto">abril_2043</th>
                          <th class="th__texto">mayo_2043</th>
                          <th class="th__texto">junio_2043</th>
                          <th class="th__texto">julio_2043</th>
                          <th class="th__texto">agosto_2043</th>
                          <th class="th__texto">septiembre_2043</th>
                          <th class="th__texto">octubre_2043</th>
                          <th class="th__texto">noviembre_2043</th>
                          <th class="th__texto">diciembre_2043</th>              
                          <th class="th__texto">enero_2044</th>
                          <th class="th__texto">febrero_2044</th>                      
                          <th class="th__texto">marzo_2044</th>
                          <th class="th__texto">abril_2044</th>
                          <th class="th__texto">mayo_2044</th>
                          <th class="th__texto">junio_2044</th>
                          <th class="th__texto">julio_2044</th>
                          <th class="th__texto">agosto_2044</th>
                          <th class="th__texto">septiembre_2044</th>
                          <th class="th__texto">octubre_2044</th>
                          <th class="th__texto">noviembre_2044</th>
                          <th class="th__texto">diciembre_2044</th>    
                          <th class="th__texto">enero_2045</th>
                          <th class="th__texto">febrero_2045</th>                      
                          <th class="th__texto">marzo_2045</th>
                          <th class="th__texto">abril_2045</th>
                          <th class="th__texto">mayo_2045</th>
                          <th class="th__texto">junio_2045</th>
                          <th class="th__texto">julio_2045</th>
                          <th class="th__texto">agosto_2045</th>
                          <th class="th__texto">septiembre_2045</th>
                          <th class="th__texto">octubre_2045</th>
                          <th class="th__texto">noviembre_2045</th>
                          <th class="th__texto">diciembre_2045</th>
                          <th class="th__texto">MODIFICAR</th>
                          <th class="th__texto">ELIMINAR</th>  
                      </tr>
                    </tfoot>
                  </table>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap5.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>