<?php 
    include "../clases/Conexion.php";
    include "./../CobranzaAcumulado/crudcobranzaacumulado.php";
    include "../header.php";
    $crudcobranzaacumulado = new crudcobranzaacumulado();
    $id = $_POST ['id'];
    $datos = $crudcobranzaacumulado -> obtenerDocumentoCobranzaAcumulado($id);
    $idMongo = $datos -> _id;
?>

<div class="container">
  <div class="row">
    <div class="card-header">
      <a href="../Cobranza_Acumulado.php" class="btn btn-outline-info">
        Regresar
      </a>
    </div>
    <div class="card mt-4">
      <div class="card-body">
        <h2 class="mb-3 fs-4 text-center"> Agregar nuevo registro </h2>
        <form action="./actualizar_CobranzaAcumulado.php" method="post">
          <input type="text" name="id" id="id" hidden value="<?php echo $idMongo ?>">
          <div class="row">
            <div class="col-4 mb-2">
              <label for="LLAVE">LLAVE</label>
              <input type="text" class="form-control" id="LLAVE" name="LLAVE" value="<?php echo $datos->LLAVE ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="LOTE">LOTE</label>
              <input type="text" class="form-control" id="LOTE" name="LOTE" value="<?php echo $datos->LOTE ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="CONDOMINIO">CONDOMINIO</label>
              <input type="text" class="form-control" id="CONDOMINIO" name="CONDOMINIO"
                value="<?php echo $datos->CONDOMINIO ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="CLÚSTER">CLÚSTER</label>
              <input type="text" class="form-control" id="CLÚSTER" name="CLÚSTER" value="<?php echo $datos->CLÚSTER ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="DESARROLLO">DESARROLLO</label>
              <input type="text" class="form-control" id="DESARROLLO" name="DESARROLLO"
                value="<?php echo $datos->DESARROLLO ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="CLIENTE">CLIENTE</label>
              <input type="text" class="form-control" id="CLIENTE" name="CLIENTE" value="<?php echo $datos->CLIENTE ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="PRECIO_TOTAL">PRECIO_TOTAL</label>
              <input type="text" class="form-control" id="PRECIO_TOTAL" name="PRECIO_TOTAL"
                value="<?php echo $datos->PRECIO_TOTAL ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="ENGANCHE">ENGANCHE</label>
              <input type="text" class="form-control" id="ENGANCHE" name="ENGANCHE"
                value="<?php echo $datos->ENGANCHE ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="MESES_1">MESES_1</label>
              <input type="text" class="form-control" id="MESES_1" name="MESES_1" value="<?php echo $datos->MESES_1 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="MESES_2">MESES_2</label>
              <input type="text" class="form-control" id="MESES_2" name="MESES_2" value="<?php echo $datos->MESES_2 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="MESES_3">MESES_3</label>
              <input type="text" class="form-control" id="MESES_3" name="MESES_3" value="<?php echo $datos->MESES_3 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="MESES_TOTALES">MESES_TOTALES</label>
              <input type="text" class="form-control" id="MESES_TOTALES" name="MESES_TOTALES"
                value="<?php echo $datos->MESES_TOTALES ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="MEN_1">MEN_1</label>
              <input type="text" class="form-control" id="MEN_1" name="MEN_1" value="<?php echo $datos->MEN_1 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="MEN_2">MEN_2</label>
              <input type="text" class="form-control" id="MEN_2" name="MEN_2" value="<?php echo $datos->MEN_2 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="MEN_3">MEN_3</label>
              <input type="text" class="form-control" id="MEN_3" name="MEN_3" value="<?php echo $datos->MEN_3 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="INICIO_CORRIDA">INICIO_CORRIDA</label>
              <input type="text" class="form-control" id="INICIO_CORRIDA" name="INICIO_CORRIDA"
                value="<?php echo $datos->INICIO_CORRIDA ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="PRIMER_ABONO">PRIMER_ABONO</label>
              <input type="text" class="form-control" id="PRIMER_ABONO" name="PRIMER_ABONO"
                value="<?php echo $datos->PRIMER_ABONO ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="MES_Y_AÑO_FIRMA">MES_Y_AÑO_FIRMA</label>
              <input type="text" class="form-control" id="MES_Y_AÑO_FIRMA" name="MES_Y_AÑO_FIRMA"
                value="<?php echo $datos->MES_Y_AÑO_FIRMA ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="ESPECIAL">ESPECIAL</label>
              <input type="text" class="form-control" id="ESPECIAL" name="ESPECIAL"
                value="<?php echo $datos->ESPECIAL ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2020">enero_2020</label>
              <input type="text" class="form-control" id="enero_2020" name="enero_2020"
                value="<?php echo $datos->enero_2020 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2020">febrero_2020</label>
              <input type="text" class="form-control" id="febrero_2020" name="febrero_2020"
                value="<?php echo $datos->febrero_2020 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2020">marzo_2020</label>
              <input type="text" class="form-control" id="marzo_2020" name="marzo_2020"
                value="<?php echo $datos->marzo_2020 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2020">abril_2020</label>
              <input type="text" class="form-control" id="abril_2020" name="abril_2020"
                value="<?php echo $datos->abril_2020 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2020">mayo_2020</label>
              <input type="text" class="form-control" id="mayo_2020" name="mayo_2020"
                value="<?php echo $datos->mayo_2020 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2020">junio_2020</label>
              <input type="text" class="form-control" id="junio_2020" name="junio_2020"
                value="<?php echo $datos->junio_2020 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2020">julio_2020</label>
              <input type="text" class="form-control" id="julio_2020" name="julio_2020"
                value="<?php echo $datos->julio_2020 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2020">agosto_2020</label>
              <input type="text" class="form-control" id="agosto_2020" name="agosto_2020"
                value="<?php echo $datos->agosto_2020 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2020">septiembre_2020</label>
              <input type="text" class="form-control" id="septiembre_2020" name="septiembre_2020"
                value="<?php echo $datos->septiembre_2020 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2020">octubre_2020</label>
              <input type="text" class="form-control" id="octubre_2020" name="octubre_2020"
                value="<?php echo $datos->octubre_2020 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2020">noviembre_2020</label>
              <input type="text" class="form-control" id="noviembre_2020" name="noviembre_2020"
                value="<?php echo $datos->noviembre_2020 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2020">diciembre_2020</label>
              <input type="text" class="form-control" id="diciembre_2020" name="diciembre_2020"
                value="<?php echo $datos->diciembre_2020 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2021">enero_2021</label>
              <input type="text" class="form-control" id="enero_2021" name="enero_2021"
                value="<?php echo $datos->enero_2021 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2021">febrero_2021</label>
              <input type="text" class="form-control" id="febrero_2021" name="febrero_2021"
                value="<?php echo $datos->febrero_2021 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2021">marzo_2021</label>
              <input type="text" class="form-control" id="marzo_2021" name="marzo_2021"
                value="<?php echo $datos->marzo_2021 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2021">abril_2021</label>
              <input type="text" class="form-control" id="abril_2021" name="abril_2021"
                value="<?php echo $datos->abril_2021 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2021">mayo_2021</label>
              <input type="text" class="form-control" id="mayo_2021" name="mayo_2021"
                value="<?php echo $datos->mayo_2021 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2021">junio_2021</label>
              <input type="text" class="form-control" id="junio_2021" name="junio_2021"
                value="<?php echo $datos->junio_2021 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2021">julio_2021</label>
              <input type="text" class="form-control" id="julio_2021" name="julio_2021"
                value="<?php echo $datos->julio_2021 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2021">agosto_2021</label>
              <input type="text" class="form-control" id="agosto_2021" name="agosto_2021"
                value="<?php echo $datos->agosto_2021 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2021">septiembre_2021</label>
              <input type="text" class="form-control" id="septiembre_2021" name="septiembre_2021"
                value="<?php echo $datos->septiembre_2021 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2021">octubre_2021</label>
              <input type="text" class="form-control" id="octubre_2021" name="octubre_2021"
                value="<?php echo $datos->octubre_2021 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2021">noviembre_2021</label>
              <input type="text" class="form-control" id="noviembre_2021" name="noviembre_2021"
                value="<?php echo $datos->noviembre_2021 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2021">diciembre_2021</label>
              <input type="text" class="form-control" id="diciembre_2021" name="diciembre_2021"
                value="<?php echo $datos->diciembre_2021 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2022">enero_2022</label>
              <input type="text" class="form-control" id="enero_2022" name="enero_2022"
                value="<?php echo $datos->enero_2022 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2022">febrero_2022</label>
              <input type="text" class="form-control" id="febrero_2022" name="febrero_2022"
                value="<?php echo $datos->febrero_2022 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2022">marzo_2022</label>
              <input type="text" class="form-control" id="marzo_2022" name="marzo_2022"
                value="<?php echo $datos->marzo_2022 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2022">abril_2022</label>
              <input type="text" class="form-control" id="abril_2022" name="abril_2022"
                value="<?php echo $datos->abril_2022 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2022">mayo_2022</label>
              <input type="text" class="form-control" id="mayo_2022" name="mayo_2022"
                value="<?php echo $datos->mayo_2022 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2022">junio_2022</label>
              <input type="text" class="form-control" id="junio_2022" name="junio_2022"
                value="<?php echo $datos->junio_2022 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2022">julio_2022</label>
              <input type="text" class="form-control" id="julio_2022" name="julio_2022"
                value="<?php echo $datos->julio_2022 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2022">agosto_2022</label>
              <input type="text" class="form-control" id="agosto_2022" name="agosto_2022"
                value="<?php echo $datos->agosto_2022 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2022">septiembre_2022</label>
              <input type="text" class="form-control" id="septiembre_2022" name="septiembre_2022"
                value="<?php echo $datos->septiembre_2022 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2022">octubre_2022</label>
              <input type="text" class="form-control" id="octubre_2022" name="octubre_2022"
                value="<?php echo $datos->octubre_2022 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2022">noviembre_2022</label>
              <input type="text" class="form-control" id="noviembre_2022" name="noviembre_2022"
                value="<?php echo $datos->noviembre_2022 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2022">diciembre_2022</label>
              <input type="text" class="form-control" id="diciembre_2022" name="diciembre_2022"
                value="<?php echo $datos->diciembre_2022 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2023">enero_2023</label>
              <input type="text" class="form-control" id="enero_2023" name="enero_2023"
                value="<?php echo $datos->enero_2023 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2023">febrero_2023</label>
              <input type="text" class="form-control" id="febrero_2023" name="febrero_2023"
                value="<?php echo $datos->febrero_2023 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2023">marzo_2023</label>
              <input type="text" class="form-control" id="marzo_2023" name="marzo_2023"
                value="<?php echo $datos->marzo_2023 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2023">abril_2023</label>
              <input type="text" class="form-control" id="abril_2023" name="abril_2023"
                value="<?php echo $datos->abril_2023 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2023">mayo_2023</label>
              <input type="text" class="form-control" id="mayo_2023" name="mayo_2023"
                value="<?php echo $datos->mayo_2023 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2023">junio_2023</label>
              <input type="text" class="form-control" id="junio_2023" name="junio_2023"
                value="<?php echo $datos->junio_2023 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2023">julio_2023</label>
              <input type="text" class="form-control" id="julio_2023" name="julio_2023"
                value="<?php echo $datos->julio_2023 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2023">agosto_2023</label>
              <input type="text" class="form-control" id="agosto_2023" name="agosto_2023"
                value="<?php echo $datos->agosto_2023 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2023">septiembre_2023</label>
              <input type="text" class="form-control" id="septiembre_2023" name="septiembre_2023"
                value="<?php echo $datos->septiembre_2023 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2023">octubre_2023</label>
              <input type="text" class="form-control" id="octubre_2023" name="octubre_2023"
                value="<?php echo $datos->octubre_2023 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2023">noviembre_2023</label>
              <input type="text" class="form-control" id="noviembre_2023" name="noviembre_2023"
                value="<?php echo $datos->noviembre_2023 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2023">diciembre_2023</label>
              <input type="text" class="form-control" id="diciembre_2023" name="diciembre_2023"
                value="<?php echo $datos->diciembre_2023 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2024">enero_2024</label>
              <input type="text" class="form-control" id="enero_2024" name="enero_2024"
                value="<?php echo $datos->enero_2024 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2024">febrero_2024</label>
              <input type="text" class="form-control" id="febrero_2024" name="febrero_2024"
                value="<?php echo $datos->febrero_2024 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2024">marzo_2024</label>
              <input type="text" class="form-control" id="marzo_2024" name="marzo_2024"
                value="<?php echo $datos->marzo_2024 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2024">abril_2024</label>
              <input type="text" class="form-control" id="abril_2024" name="abril_2024"
                value="<?php echo $datos->abril_2024 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2024">mayo_2024</label>
              <input type="text" class="form-control" id="mayo_2024" name="mayo_2024"
                value="<?php echo $datos->mayo_2024 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2024">junio_2024</label>
              <input type="text" class="form-control" id="junio_2024" name="junio_2024"
                value="<?php echo $datos->junio_2024 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2024">julio_2024</label>
              <input type="text" class="form-control" id="julio_2024" name="julio_2024"
                value="<?php echo $datos->julio_2024 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2024">agosto_2024</label>
              <input type="text" class="form-control" id="agosto_2024" name="agosto_2024"
                value="<?php echo $datos->agosto_2024 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2024">septiembre_2024</label>
              <input type="text" class="form-control" id="septiembre_2024" name="septiembre_2024"
                value="<?php echo $datos->septiembre_2024 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2024">octubre_2024</label>
              <input type="text" class="form-control" id="octubre_2024" name="octubre_2024"
                value="<?php echo $datos->octubre_2024 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2024">noviembre_2024</label>
              <input type="text" class="form-control" id="noviembre_2024" name="noviembre_2024"
                value="<?php echo $datos->noviembre_2024 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2024">diciembre_2024</label>
              <input type="text" class="form-control" id="diciembre_2024" name="diciembre_2024"
                value="<?php echo $datos->diciembre_2024 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2025">enero_2025</label>
              <input type="text" class="form-control" id="enero_2025" name="enero_2025"
                value="<?php echo $datos->enero_2025 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2025">febrero_2025</label>
              <input type="text" class="form-control" id="febrero_2025" name="febrero_2025"
                value="<?php echo $datos->febrero_2025 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2025">marzo_2025</label>
              <input type="text" class="form-control" id="marzo_2025" name="marzo_2025"
                value="<?php echo $datos->marzo_2025 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2025">abril_2025</label>
              <input type="text" class="form-control" id="abril_2025" name="abril_2025"
                value="<?php echo $datos->abril_2025 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2025">mayo_2025</label>
              <input type="text" class="form-control" id="mayo_2025" name="mayo_2025"
                value="<?php echo $datos->mayo_2025 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2025">junio_2025</label>
              <input type="text" class="form-control" id="junio_2025" name="junio_2025"
                value="<?php echo $datos->junio_2025 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2025">julio_2025</label>
              <input type="text" class="form-control" id="julio_2025" name="julio_2025"
                value="<?php echo $datos->julio_2025 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2025">agosto_2025</label>
              <input type="text" class="form-control" id="agosto_2025" name="agosto_2025"
                value="<?php echo $datos->agosto_2025 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2025">septiembre_2025</label>
              <input type="text" class="form-control" id="septiembre_2025" name="septiembre_2025"
                value="<?php echo $datos->septiembre_2025 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2025">octubre_2025</label>
              <input type="text" class="form-control" id="octubre_2025" name="octubre_2025"
                value="<?php echo $datos->octubre_2025 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2025">noviembre_2025</label>
              <input type="text" class="form-control" id="noviembre_2025" name="noviembre_2025"
                value="<?php echo $datos->noviembre_2025 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2025">diciembre_2025</label>
              <input type="text" class="form-control" id="diciembre_2025" name="diciembre_2025"
                value="<?php echo $datos->diciembre_2025 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2026">enero_2026</label>
              <input type="text" class="form-control" id="enero_2026" name="enero_2026"
                value="<?php echo $datos->enero_2026 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2026">febrero_2026</label>
              <input type="text" class="form-control" id="febrero_2026" name="febrero_2026"
                value="<?php echo $datos->febrero_2026 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2026">marzo_2026</label>
              <input type="text" class="form-control" id="marzo_2026" name="marzo_2026"
                value="<?php echo $datos->marzo_2026 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2026">abril_2026</label>
              <input type="text" class="form-control" id="abril_2026" name="abril_2026"
                value="<?php echo $datos->abril_2026 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2026">mayo_2026</label>
              <input type="text" class="form-control" id="mayo_2026" name="mayo_2026"
                value="<?php echo $datos->mayo_2026 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2026">junio_2026</label>
              <input type="text" class="form-control" id="junio_2026" name="junio_2026"
                value="<?php echo $datos->junio_2026 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2026">julio_2026</label>
              <input type="text" class="form-control" id="julio_2026" name="julio_2026"
                value="<?php echo $datos->julio_2026 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2026">agosto_2026</label>
              <input type="text" class="form-control" id="agosto_2026" name="agosto_2026"
                value="<?php echo $datos->agosto_2026 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2026">septiembre_2026</label>
              <input type="text" class="form-control" id="septiembre_2026" name="septiembre_2026"
                value="<?php echo $datos->septiembre_2026 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2026">octubre_2026</label>
              <input type="text" class="form-control" id="octubre_2026" name="octubre_2026"
                value="<?php echo $datos->octubre_2026 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2026">noviembre_2026</label>
              <input type="text" class="form-control" id="noviembre_2026" name="noviembre_2026"
                value="<?php echo $datos->noviembre_2026 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2026">diciembre_2026</label>
              <input type="text" class="form-control" id="diciembre_2026" name="diciembre_2026"
                value="<?php echo $datos->diciembre_2026 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2027">enero_2027</label>
              <input type="text" class="form-control" id="enero_2027" name="enero_2027"
                value="<?php echo $datos->enero_2027 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2027">febrero_2027</label>
              <input type="text" class="form-control" id="febrero_2027" name="febrero_2027"
                value="<?php echo $datos->febrero_2027 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2027">marzo_2027</label>
              <input type="text" class="form-control" id="marzo_2027" name="marzo_2027"
                value="<?php echo $datos->marzo_2027 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2027">abril_2027</label>
              <input type="text" class="form-control" id="abril_2027" name="abril_2027"
                value="<?php echo $datos->abril_2027 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2027">mayo_2027</label>
              <input type="text" class="form-control" id="mayo_2027" name="mayo_2027"
                value="<?php echo $datos->mayo_2027 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2027">junio_2027</label>
              <input type="text" class="form-control" id="junio_2027" name="junio_2027"
                value="<?php echo $datos->junio_2027 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2027">julio_2027</label>
              <input type="text" class="form-control" id="julio_2027" name="julio_2027"
                value="<?php echo $datos->julio_2027 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2027">agosto_2027</label>
              <input type="text" class="form-control" id="agosto_2027" name="agosto_2027"
                value="<?php echo $datos->agosto_2027 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2027">septiembre_2027</label>
              <input type="text" class="form-control" id="septiembre_2027" name="septiembre_2027"
                value="<?php echo $datos->septiembre_2027 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2027">octubre_2027</label>
              <input type="text" class="form-control" id="octubre_2027" name="octubre_2027"
                value="<?php echo $datos->octubre_2027 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2027">noviembre_2027</label>
              <input type="text" class="form-control" id="noviembre_2027" name="noviembre_2027"
                value="<?php echo $datos->noviembre_2027 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2027">diciembre_2027</label>
              <input type="text" class="form-control" id="diciembre_2027" name="diciembre_2027"
                value="<?php echo $datos->diciembre_2027 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2028">enero_2028</label>
              <input type="text" class="form-control" id="enero_2028" name="enero_2028"
                value="<?php echo $datos->enero_2028 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2028">febrero_2028</label>
              <input type="text" class="form-control" id="febrero_2028" name="febrero_2028"
                value="<?php echo $datos->febrero_2028 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2028">marzo_2028</label>
              <input type="text" class="form-control" id="marzo_2028" name="marzo_2028"
                value="<?php echo $datos->marzo_2028 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2028">abril_2028</label>
              <input type="text" class="form-control" id="abril_2028" name="abril_2028"
                value="<?php echo $datos->abril_2028 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2028">mayo_2028</label>
              <input type="text" class="form-control" id="mayo_2028" name="mayo_2028"
                value="<?php echo $datos->mayo_2028 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2028">junio_2028</label>
              <input type="text" class="form-control" id="junio_2028" name="junio_2028"
                value="<?php echo $datos->junio_2028 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2028">julio_2028</label>
              <input type="text" class="form-control" id="julio_2028" name="julio_2028"
                value="<?php echo $datos->julio_2028 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2028">agosto_2028</label>
              <input type="text" class="form-control" id="agosto_2028" name="agosto_2028"
                value="<?php echo $datos->agosto_2028 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2028">septiembre_2028</label>
              <input type="text" class="form-control" id="septiembre_2028" name="septiembre_2028"
                value="<?php echo $datos->septiembre_2028 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2028">octubre_2028</label>
              <input type="text" class="form-control" id="octubre_2028" name="octubre_2028"
                value="<?php echo $datos->octubre_2028 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2028">noviembre_2028</label>
              <input type="text" class="form-control" id="noviembre_2028" name="noviembre_2028"
                value="<?php echo $datos->noviembre_2028 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2028">diciembre_2028</label>
              <input type="text" class="form-control" id="diciembre_2028" name="diciembre_2028"
                value="<?php echo $datos->diciembre_2028 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2029">enero_2029</label>
              <input type="text" class="form-control" id="enero_2029" name="enero_2029"
                value="<?php echo $datos->enero_2029 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2029">febrero_2029</label>
              <input type="text" class="form-control" id="febrero_2029" name="febrero_2029"
                value="<?php echo $datos->febrero_2029 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2029">marzo_2029</label>
              <input type="text" class="form-control" id="marzo_2029" name="marzo_2029"
                value="<?php echo $datos->marzo_2029 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2029">abril_2029</label>
              <input type="text" class="form-control" id="abril_2029" name="abril_2029"
                value="<?php echo $datos->abril_2029 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2029">mayo_2029</label>
              <input type="text" class="form-control" id="mayo_2029" name="mayo_2029"
                value="<?php echo $datos->mayo_2029 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2029">junio_2029</label>
              <input type="text" class="form-control" id="junio_2029" name="junio_2029"
                value="<?php echo $datos->junio_2029 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2029">julio_2029</label>
              <input type="text" class="form-control" id="julio_2029" name="julio_2029"
                value="<?php echo $datos->julio_2029 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2029">agosto_2029</label>
              <input type="text" class="form-control" id="agosto_2029" name="agosto_2029"
                value="<?php echo $datos->agosto_2029 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2029">septiembre_2029</label>
              <input type="text" class="form-control" id="septiembre_2029" name="septiembre_2029"
                value="<?php echo $datos->septiembre_2029 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2029">octubre_2029</label>
              <input type="text" class="form-control" id="octubre_2029" name="octubre_2029"
                value="<?php echo $datos->octubre_2029 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2029">noviembre_2029</label>
              <input type="text" class="form-control" id="noviembre_2029" name="noviembre_2029"
                value="<?php echo $datos->noviembre_2029 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2029">diciembre_2029</label>
              <input type="text" class="form-control" id="diciembre_2029" name="diciembre_2029"
                value="<?php echo $datos->diciembre_2029 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2030">Enero 2030</label>
              <input type="text" class="form-control" id="enero_2030" name="enero_2030"
                value="<?php echo $datos->enero_2030 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2030">Febrero 2030</label>
              <input type="text" class="form-control" id="febrero_2030" name="febrero_2030"
                value="<?php echo $datos->febrero_2030 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2030">Marzo 2030</label>
              <input type="text" class="form-control" id="marzo_2030" name="marzo_2030"
                value="<?php echo $datos->marzo_2030 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2030">Abril 2030</label>
              <input type="text" class="form-control" id="abril_2030" name="abril_2030"
                value="<?php echo $datos->abril_2030 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2030">Mayo 2030</label>
              <input type="text" class="form-control" id="mayo_2030" name="mayo_2030"
                value="<?php echo $datos->mayo_2030 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2030">Junio 2030</label>
              <input type="text" class="form-control" id="junio_2030" name="junio_2030"
                value="<?php echo $datos->junio_2030 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2030">Julio 2030</label>
              <input type="text" class="form-control" id="julio_2030" name="julio_2030"
                value="<?php echo $datos->julio_2030 ?>">
            </div>


            <div class="col-4 mb-2">
              <label for="agosto_2030">Agosto 2030</label>
              <input type="text" class="form-control" id="agosto_2030" name="agosto_2030"
                value="<?php echo $datos->agosto_2030 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2030">Septiembre 2030</label>
              <input type="text" class="form-control" id="septiembre_2030" name="septiembre_2030"
                value="<?php echo $datos->septiembre_2030 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2030">Octubre 2030</label>
              <input type="text" class="form-control" id="octubre_2030" name="octubre_2030"
                value="<?php echo $datos->octubre_2030 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2030">Noviembre 2030</label>
              <input type="text" class="form-control" id="noviembre_2030" name="noviembre_2030"
                value="<?php echo $datos->noviembre_2030 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2030">Diciembre 2030</label>
              <input type="text" class="form-control" id="diciembre_2030" name="diciembre_2030"
                value="<?php echo $datos->diciembre_2030 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2031">Enero 2031</label>
              <input type="text" class="form-control" id="enero_2031" name="enero_2031"
                value="<?php echo $datos->enero_2031 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2031">Febrero 2031</label>
              <input type="text" class="form-control" id="febrero_2031" name="febrero_2031"
                value="<?php echo $datos->febrero_2031 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2031">Marzo 2031</label>
              <input type="text" class="form-control" id="marzo_2031" name="marzo_2031"
                value="<?php echo $datos->marzo_2031 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2031">Abril 2031</label>
              <input type="text" class="form-control" id="abril_2031" name="abril_2031"
                value="<?php echo $datos->abril_2031 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2031">Mayo 2031</label>
              <input type="text" class="form-control" id="mayo_2031" name="mayo_2031"
                value="<?php echo $datos->mayo_2031 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2031">Junio 2031</label>
              <input type="text" class="form-control" id="junio_2031" name="junio_2031"
                value="<?php echo $datos->junio_2031 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2031">Julio 2031</label>
              <input type="text" class="form-control" id="julio_2031" name="julio_2031"
                value="<?php echo $datos->julio_2031 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2031">Agosto 2031</label>
              <input type="text" class="form-control" id="agosto_2031" name="agosto_2031"
                value="<?php echo $datos->agosto_2031 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2031">Septiembre 2031</label>
              <input type="text" class="form-control" id="septiembre_2031" name="septiembre_2031"
                value="<?php echo $datos->septiembre_2031 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2031">Octubre 2031</label>
              <input type="text" class="form-control" id="octubre_2031" name="octubre_2031"
                value="<?php echo $datos->octubre_2031 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2031">Noviembre 2031</label>
              <input type="text" class="form-control" id="noviembre_2031" name="noviembre_2031"
                value="<?php echo $datos->noviembre_2031 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2031">Diciembre 2031</label>
              <input type="text" class="form-control" id="diciembre_2031" name="diciembre_2031"
                value="<?php echo $datos->diciembre_2031 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2032">Enero 2032</label>
              <input type="text" class="form-control" id="enero_2032" name="enero_2032"
                value="<?php echo $datos->enero_2032 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2032">Febrero 2032</label>
              <input type="text" class="form-control" id="febrero_2032" name="febrero_2032"
                value="<?php echo $datos->febrero_2032 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2032">Marzo 2032</label>
              <input type="text" class="form-control" id="marzo_2032" name="marzo_2032"
                value="<?php echo $datos->marzo_2032 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2032">Abril 2032</label>
              <input type="text" class="form-control" id="abril_2032" name="abril_2032"
                value="<?php echo $datos->abril_2032 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2032">Mayo 2032</label>
              <input type="text" class="form-control" id="mayo_2032" name="mayo_2032"
                value="<?php echo $datos->mayo_2032 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2032">Junio 2032</label>
              <input type="text" class="form-control" id="junio_2032" name="junio_2032"
                value="<?php echo $datos->junio_2032 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2032">Julio 2032</label>
              <input type="text" class="form-control" id="julio_2032" name="julio_2032"
                value="<?php echo $datos->julio_2032 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2032">Agosto 2032</label>
              <input type="text" class="form-control" id="agosto_2032" name="agosto_2032"
                value="<?php echo $datos->agosto_2032 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2032">Septiembre 2032</label>
              <input type="text" class="form-control" id="septiembre_2032" name="septiembre_2032"
                value="<?php echo $datos->septiembre_2032 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2032">Octubre 2032</label>
              <input type="text" class="form-control" id="octubre_2032" name="octubre_2032"
                value="<?php echo $datos->octubre_2032 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2032">Noviembre 2032</label>
              <input type="text" class="form-control" id="noviembre_2032" name="noviembre_2032"
                value="<?php echo $datos->noviembre_2032 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2032">Diciembre 2032</label>
              <input type="text" class="form-control" id="diciembre_2032" name="diciembre_2032"
                value="<?php echo $datos->diciembre_2032 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2033">Enero 2033</label>
              <input type="text" class="form-control" id="enero_2033" name="enero_2033"
                value="<?php echo $datos->enero_2033 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2033">Febrero 2033</label>
              <input type="text" class="form-control" id="febrero_2033" name="febrero_2033"
                value="<?php echo $datos->febrero_2033 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2033">Marzo 2033</label>
              <input type="text" class="form-control" id="marzo_2033" name="marzo_2033"
                value="<?php echo $datos->marzo_2033 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2033">Abril 2033</label>
              <input type="text" class="form-control" id="abril_2033" name="abril_2033"
                value="<?php echo $datos->abril_2033 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2033">Mayo 2033</label>
              <input type="text" class="form-control" id="mayo_2033" name="mayo_2033"
                value="<?php echo $datos->mayo_2033 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2033">Junio 2033</label>
              <input type="text" class="form-control" id="junio_2033" name="junio_2033"
                value="<?php echo $datos->junio_2033 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2033">Julio 2033</label>
              <input type="text" class="form-control" id="julio_2033" name="julio_2033"
                value="<?php echo $datos->julio_2033 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2033">Agosto 2033</label>
              <input type="text" class="form-control" id="agosto_2033" name="agosto_2033"
                value="<?php echo $datos->agosto_2033 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2033">Septiembre 2033</label>
              <input type="text" class="form-control" id="septiembre_2033" name="septiembre_2033"
                value="<?php echo $datos->septiembre_2033 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2033">Octubre 2033</label>
              <input type="text" class="form-control" id="octubre_2033" name="octubre_2033"
                value="<?php echo $datos->octubre_2033 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2033">Noviembre 2033</label>
              <input type="text" class="form-control" id="noviembre_2033" name="noviembre_2033"
                value="<?php echo $datos->noviembre_2033 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2033">Diciembre 2033</label>
              <input type="text" class="form-control" id="diciembre_2033" name="diciembre_2033"
                value="<?php echo $datos->diciembre_2033 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2034">Enero 2034</label>
              <input type="text" class="form-control" id="enero_2034" name="enero_2034"
                value="<?php echo $datos->enero_2034 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2034">Febrero 2034</label>
              <input type="text" class="form-control" id="febrero_2034" name="febrero_2034"
                value="<?php echo $datos->febrero_2034 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2034">Marzo 2034</label>
              <input type="text" class="form-control" id="marzo_2034" name="marzo_2034"
                value="<?php echo $datos->marzo_2034 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2034">Abril 2034</label>
              <input type="text" class="form-control" id="abril_2034" name="abril_2034"
                value="<?php echo $datos->abril_2034 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2034">Mayo 2034</label>
              <input type="text" class="form-control" id="mayo_2034" name="mayo_2034"
                value="<?php echo $datos->mayo_2034 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2034">Junio 2034</label>
              <input type="text" class="form-control" id="junio_2034" name="junio_2034"
                value="<?php echo $datos->junio_2034 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2034">Julio 2034</label>
              <input type="text" class="form-control" id="julio_2034" name="julio_2034"
                value="<?php echo $datos->julio_2034 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2034">Agosto 2034</label>
              <input type="text" class="form-control" id="agosto_2034" name="agosto_2034"
                value="<?php echo $datos->agosto_2034 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2034">Septiembre 2034</label>
              <input type="text" class="form-control" id="septiembre_2034" name="septiembre_2034"
                value="<?php echo $datos->septiembre_2034 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2034">Octubre 2034</label>
              <input type="text" class="form-control" id="octubre_2034" name="octubre_2034"
                value="<?php echo $datos->octubre_2034 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2034">Noviembre 2034</label>
              <input type="text" class="form-control" id="noviembre_2034" name="noviembre_2034"
                value="<?php echo $datos->noviembre_2034 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2034">Diciembre 2034</label>
              <input type="text" class="form-control" id="diciembre_2034" name="diciembre_2034"
                value="<?php echo $datos->diciembre_2034 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2035">Enero 2035</label>
              <input type="text" class="form-control" id="enero_2035" name="enero_2035"
                value="<?php echo $datos->enero_2035 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2035">Febrero 2035</label>
              <input type="text" class="form-control" id="febrero_2035" name="febrero_2035"
                value="<?php echo $datos->febrero_2035 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2035">Marzo 2035</label>
              <input type="text" class="form-control" id="marzo_2035" name="marzo_2035"
                value="<?php echo $datos->marzo_2035 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2035">Abril 2035</label>
              <input type="text" class="form-control" id="abril_2035" name="abril_2035"
                value="<?php echo $datos->abril_2035 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2035">Mayo 2035</label>
              <input type="text" class="form-control" id="mayo_2035" name="mayo_2035"
                value="<?php echo $datos->mayo_2035 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2035">Junio 2035</label>
              <input type="text" class="form-control" id="junio_2035" name="junio_2035"
                value="<?php echo $datos->junio_2035 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2035">Julio 2035</label>
              <input type="text" class="form-control" id="julio_2035" name="julio_2035"
                value="<?php echo $datos->julio_2035 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2035">Agosto 2035</label>
              <input type="text" class="form-control" id="agosto_2035" name="agosto_2035"
                value="<?php echo $datos->agosto_2035 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2035">Septiembre 2035</label>
              <input type="text" class="form-control" id="septiembre_2035" name="septiembre_2035"
                value="<?php echo $datos->septiembre_2035 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2035">Octubre 2035</label>
              <input type="text" class="form-control" id="octubre_2035" name="octubre_2035"
                value="<?php echo $datos->octubre_2035 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2035">Noviembre 2035</label>
              <input type="text" class="form-control" id="noviembre_2035" name="noviembre_2035"
                value="<?php echo $datos->noviembre_2035 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2035">Diciembre 2035</label>
              <input type="text" class="form-control" id="diciembre_2035" name="diciembre_2035"
                value="<?php echo $datos->diciembre_2035 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2036">Enero 2036</label>
              <input type="text" class="form-control" id="enero_2036" name="enero_2036"
                value="<?php echo $datos->enero_2036 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2036">Febrero 2036</label>
              <input type="text" class="form-control" id="febrero_2036" name="febrero_2036"
                value="<?php echo $datos->febrero_2036 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2036">Marzo 2036</label>
              <input type="text" class="form-control" id="marzo_2036" name="marzo_2036"
                value="<?php echo $datos->marzo_2036 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2036">Abril 2036</label>
              <input type="text" class="form-control" id="abril_2036" name="abril_2036"
                value="<?php echo $datos->abril_2036 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2036">Mayo 2036</label>
              <input type="text" class="form-control" id="mayo_2036" name="mayo_2036"
                value="<?php echo $datos->mayo_2036 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2036">Junio 2036</label>
              <input type="text" class="form-control" id="junio_2036" name="junio_2036"
                value="<?php echo $datos->junio_2036 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2036">Julio 2036</label>
              <input type="text" class="form-control" id="julio_2036" name="julio_2036"
                value="<?php echo $datos->julio_2036 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2036">Agosto 2036</label>
              <input type="text" class="form-control" id="agosto_2036" name="agosto_2036"
                value="<?php echo $datos->agosto_2036 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2036">Septiembre 2036</label>
              <input type="text" class="form-control" id="septiembre_2036" name="septiembre_2036"
                value="<?php echo $datos->septiembre_2036 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2036">Octubre 2036</label>
              <input type="text" class="form-control" id="octubre_2036" name="octubre_2036"
                value="<?php echo $datos->octubre_2036 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2036">Noviembre 2036</label>
              <input type="text" class="form-control" id="noviembre_2036" name="noviembre_2036"
                value="<?php echo $datos->noviembre_2036 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2036">Diciembre 2036</label>
              <input type="text" class="form-control" id="diciembre_2036" name="diciembre_2036"
                value="<?php echo $datos->diciembre_2036 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2037">Enero 2037</label>
              <input type="text" class="form-control" id="enero_2037" name="enero_2037"
                value="<?php echo $datos->enero_2037 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2037">Febrero 2037</label>
              <input type="text" class="form-control" id="febrero_2037" name="febrero_2037"
                value="<?php echo $datos->febrero_2037 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2037">Marzo 2037</label>
              <input type="text" class="form-control" id="marzo_2037" name="marzo_2037"
                value="<?php echo $datos->marzo_2037 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2037">Abril 2037</label>
              <input type="text" class="form-control" id="abril_2037" name="abril_2037"
                value="<?php echo $datos->abril_2037 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2037">Mayo 2037</label>
              <input type="text" class="form-control" id="mayo_2037" name="mayo_2037"
                value="<?php echo $datos->mayo_2037 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2037">Junio 2037</label>
              <input type="text" class="form-control" id="junio_2037" name="junio_2037"
                value="<?php echo $datos->junio_2037 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2037">Julio 2037</label>
              <input type="text" class="form-control" id="julio_2037" name="julio_2037"
                value="<?php echo $datos->julio_2037 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2037">Agosto 2037</label>
              <input type="text" class="form-control" id="agosto_2037" name="agosto_2037"
                value="<?php echo $datos->agosto_2037 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2037">Septiembre 2037</label>
              <input type="text" class="form-control" id="septiembre_2037" name="septiembre_2037"
                value="<?php echo $datos->septiembre_2037 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2037">Octubre 2037</label>
              <input type="text" class="form-control" id="octubre_2037" name="octubre_2037"
                value="<?php echo $datos->octubre_2037 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2037">Noviembre 2037</label>
              <input type="text" class="form-control" id="noviembre_2037" name="noviembre_2037"
                value="<?php echo $datos->noviembre_2037 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2037">Diciembre 2037</label>
              <input type="text" class="form-control" id="diciembre_2037" name="diciembre_2037"
                value="<?php echo $datos->diciembre_2037 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2038">Enero 2038</label>
              <input type="text" class="form-control" id="enero_2038" name="enero_2038"
                value="<?php echo $datos->enero_2038 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2038">Febrero 2038</label>
              <input type="text" class="form-control" id="febrero_2038" name="febrero_2038"
                value="<?php echo $datos->febrero_2038 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2038">Marzo 2038</label>
              <input type="text" class="form-control" id="marzo_2038" name="marzo_2038"
                value="<?php echo $datos->marzo_2038 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2038">Abril 2038</label>
              <input type="text" class="form-control" id="abril_2038" name="abril_2038"
                value="<?php echo $datos->abril_2038 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2038">Mayo 2038</label>
              <input type="text" class="form-control" id="mayo_2038" name="mayo_2038"
                value="<?php echo $datos->mayo_2038 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2038">Junio 2038</label>
              <input type="text" class="form-control" id="junio_2038" name="junio_2038"
                value="<?php echo $datos->junio_2038 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2038">Julio 2038</label>
              <input type="text" class="form-control" id="julio_2038" name="julio_2038"
                value="<?php echo $datos->julio_2038 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2038">Agosto 2038</label>
              <input type="text" class="form-control" id="agosto_2038" name="agosto_2038"
                value="<?php echo $datos->agosto_2038 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2038">Septiembre 2038</label>
              <input type="text" class="form-control" id="septiembre_2038" name="septiembre_2038"
                value="<?php echo $datos->septiembre_2038 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2038">Octubre 2038</label>
              <input type="text" class="form-control" id="octubre_2038" name="octubre_2038"
                value="<?php echo $datos->octubre_2038 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2038">Noviembre 2038</label>
              <input type="text" class="form-control" id="noviembre_2038" name="noviembre_2038"
                value="<?php echo $datos->noviembre_2038 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2038">Diciembre 2038</label>
              <input type="text" class="form-control" id="diciembre_2038" name="diciembre_2038"
                value="<?php echo $datos->diciembre_2038 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2039">Enero 2039</label>
              <input type="text" class="form-control" id="enero_2039" name="enero_2039"
                value="<?php echo $datos->enero_2039 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2039">Febrero 2039</label>
              <input type="text" class="form-control" id="febrero_2039" name="febrero_2039"
                value="<?php echo $datos->febrero_2039 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2039">Marzo 2039</label>
              <input type="text" class="form-control" id="marzo_2039" name="marzo_2039"
                value="<?php echo $datos->marzo_2039 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2039">Abril 2039</label>
              <input type="text" class="form-control" id="abril_2039" name="abril_2039"
                value="<?php echo $datos->abril_2039 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2039">Mayo 2039</label>
              <input type="text" class="form-control" id="mayo_2039" name="mayo_2039"
                value="<?php echo $datos->mayo_2039 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2039">Junio 2039</label>
              <input type="text" class="form-control" id="junio_2039" name="junio_2039"
                value="<?php echo $datos->junio_2039 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2039">Julio 2039</label>
              <input type="text" class="form-control" id="julio_2039" name="julio_2039"
                value="<?php echo $datos->julio_2039 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2039">Agosto 2039</label>
              <input type="text" class="form-control" id="agosto_2039" name="agosto_2039"
                value="<?php echo $datos->agosto_2039 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2039">Septiembre 2039</label>
              <input type="text" class="form-control" id="septiembre_2039" name="septiembre_2039"
                value="<?php echo $datos->septiembre_2039 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2039">Octubre 2039</label>
              <input type="text" class="form-control" id="octubre_2039" name="octubre_2039"
                value="<?php echo $datos->octubre_2039 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2039">Noviembre 2039</label>
              <input type="text" class="form-control" id="noviembre_2039" name="noviembre_2039"
                value="<?php echo $datos->noviembre_2039 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2039">Diciembre 2039</label>
              <input type="text" class="form-control" id="diciembre_2039" name="diciembre_2039"
                value="<?php echo $datos->diciembre_2039 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2040">Enero 2040</label>
              <input type="text" class="form-control" id="enero_2040" name="enero_2040"
                value="<?php echo $datos->enero_2040 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2040">Febrero 2040</label>
              <input type="text" class="form-control" id="febrero_2040" name="febrero_2040"
                value="<?php echo $datos->febrero_2040 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2040">Marzo 2040</label>
              <input type="text" class="form-control" id="marzo_2040" name="marzo_2040"
                value="<?php echo $datos->marzo_2040 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2040">Abril 2040</label>
              <input type="text" class="form-control" id="abril_2040" name="abril_2040"
                value="<?php echo $datos->abril_2040 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2040">Mayo 2040</label>
              <input type="text" class="form-control" id="mayo_2040" name="mayo_2040"
                value="<?php echo $datos->mayo_2040 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2040">Junio 2040</label>
              <input type="text" class="form-control" id="junio_2040" name="junio_2040"
                value="<?php echo $datos->junio_2040 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2040">Julio 2040</label>
              <input type="text" class="form-control" id="julio_2040" name="julio_2040"
                value="<?php echo $datos->julio_2040 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2040">Agosto 2040</label>
              <input type="text" class="form-control" id="agosto_2040" name="agosto_2040"
                value="<?php echo $datos->agosto_2040 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2040">Septiembre 2040</label>
              <input type="text" class="form-control" id="septiembre_2040" name="septiembre_2040"
                value="<?php echo $datos->septiembre_2040 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2040">Octubre 2040</label>
              <input type="text" class="form-control" id="octubre_2040" name="octubre_2040"
                value="<?php echo $datos->octubre_2040 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2040">Noviembre 2040</label>
              <input type="text" class="form-control" id="noviembre_2040" name="noviembre_2040"
                value="<?php echo $datos->noviembre_2040 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2040">Diciembre 2040</label>
              <input type="text" class="form-control" id="diciembre_2040" name="diciembre_2040"
                value="<?php echo $datos->diciembre_2040 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2041">Enero 2041</label>
              <input type="text" class="form-control" id="enero_2041" name="enero_2041"
                value="<?php echo $datos->enero_2041 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2041">Febrero 2041</label>
              <input type="text" class="form-control" id="febrero_2041" name="febrero_2041"
                value="<?php echo $datos->febrero_2041 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2041">Marzo 2041</label>
              <input type="text" class="form-control" id="marzo_2041" name="marzo_2041"
                value="<?php echo $datos->marzo_2041 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2041">Abril 2041</label>
              <input type="text" class="form-control" id="abril_2041" name="abril_2041"
                value="<?php echo $datos->abril_2041 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2041">Mayo 2041</label>
              <input type="text" class="form-control" id="mayo_2041" name="mayo_2041"
                value="<?php echo $datos->mayo_2041 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2041">Junio 2041</label>
              <input type="text" class="form-control" id="junio_2041" name="junio_2041"
                value="<?php echo $datos->junio_2041 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2041">Julio 2041</label>
              <input type="text" class="form-control" id="julio_2041" name="julio_2041"
                value="<?php echo $datos->julio_2041 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2041">Agosto 2041</label>
              <input type="text" class="form-control" id="agosto_2041" name="agosto_2041"
                value="<?php echo $datos->agosto_2041 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2041">Septiembre 2041</label>
              <input type="text" class="form-control" id="septiembre_2041" name="septiembre_2041"
                value="<?php echo $datos->septiembre_2041 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2041">Octubre 2041</label>
              <input type="text" class="form-control" id="octubre_2041" name="octubre_2041"
                value="<?php echo $datos->octubre_2041 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2041">Noviembre 2041</label>
              <input type="text" class="form-control" id="noviembre_2041" name="noviembre_2041"
                value="<?php echo $datos->noviembre_2041 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2041">Diciembre 2041</label>
              <input type="text" class="form-control" id="diciembre_2041" name="diciembre_2041"
                value="<?php echo $datos->diciembre_2041 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2042">Enero 2042</label>
              <input type="text" class="form-control" id="enero_2042" name="enero_2042"
                value="<?php echo $datos->enero_2042 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2042">Febrero 2042</label>
              <input type="text" class="form-control" id="febrero_2042" name="febrero_2042"
                value="<?php echo $datos->febrero_2042 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2042">Marzo 2042</label>
              <input type="text" class="form-control" id="marzo_2042" name="marzo_2042"
                value="<?php echo $datos->marzo_2042 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2042">Abril 2042</label>
              <input type="text" class="form-control" id="abril_2042" name="abril_2042"
                value="<?php echo $datos->abril_2042 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2042">Mayo 2042</label>
              <input type="text" class="form-control" id="mayo_2042" name="mayo_2042"
                value="<?php echo $datos->mayo_2042 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2042">Junio 2042</label>
              <input type="text" class="form-control" id="junio_2042" name="junio_2042"
                value="<?php echo $datos->junio_2042 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2042">Julio 2042</label>
              <input type="text" class="form-control" id="julio_2042" name="julio_2042"
                value="<?php echo $datos->julio_2042 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2042">Agosto 2042</label>
              <input type="text" class="form-control" id="agosto_2042" name="agosto_2042"
                value="<?php echo $datos->agosto_2042 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2042">Septiembre 2042</label>
              <input type="text" class="form-control" id="septiembre_2042" name="septiembre_2042"
                value="<?php echo $datos->septiembre_2042 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2042">Octubre 2042</label>
              <input type="text" class="form-control" id="octubre_2042" name="octubre_2042"
                value="<?php echo $datos->octubre_2042 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2042">Noviembre 2042</label>
              <input type="text" class="form-control" id="noviembre_2042" name="noviembre_2042"
                value="<?php echo $datos->noviembre_2042 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2042">Diciembre 2042</label>
              <input type="text" class="form-control" id="diciembre_2042" name="diciembre_2042"
                value="<?php echo $datos->diciembre_2042 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2043">Enero 2043</label>
              <input type="text" class="form-control" id="enero_2043" name="enero_2043"
                value="<?php echo $datos->enero_2043 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2043">Febrero 2043</label>
              <input type="text" class="form-control" id="febrero_2043" name="febrero_2043"
                value="<?php echo $datos->febrero_2043 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2043">Marzo 2043</label>
              <input type="text" class="form-control" id="marzo_2043" name="marzo_2043"
                value="<?php echo $datos->marzo_2043 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2043">Abril 2043</label>
              <input type="text" class="form-control" id="abril_2043" name="abril_2043"
                value="<?php echo $datos->abril_2043 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2043">Mayo 2043</label>
              <input type="text" class="form-control" id="mayo_2043" name="mayo_2043"
                value="<?php echo $datos->mayo_2043 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2043">Junio 2043</label>
              <input type="text" class="form-control" id="junio_2043" name="junio_2043"
                value="<?php echo $datos->junio_2043 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2043">Julio 2043</label>
              <input type="text" class="form-control" id="julio_2043" name="julio_2043"
                value="<?php echo $datos->julio_2043 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2043">Agosto 2043</label>
              <input type="text" class="form-control" id="agosto_2043" name="agosto_2043"
                value="<?php echo $datos->agosto_2043 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2043">Septiembre 2043</label>
              <input type="text" class="form-control" id="septiembre_2043" name="septiembre_2043"
                value="<?php echo $datos->septiembre_2043 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2043">Octubre 2043</label>
              <input type="text" class="form-control" id="octubre_2043" name="octubre_2043"
                value="<?php echo $datos->octubre_2043 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2043">Noviembre 2043</label>
              <input type="text" class="form-control" id="noviembre_2043" name="noviembre_2043"
                value="<?php echo $datos->noviembre_2043 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2043">Diciembre 2043</label>
              <input type="text" class="form-control" id="diciembre_2043" name="diciembre_2043"
                value="<?php echo $datos->diciembre_2043 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2044">Enero 2044</label>
              <input type="text" class="form-control" id="enero_2044" name="enero_2044"
                value="<?php echo $datos->enero_2044 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2044">Febrero 2044</label>
              <input type="text" class="form-control" id="febrero_2044" name="febrero_2044"
                value="<?php echo $datos->febrero_2044 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2044">Marzo 2044</label>
              <input type="text" class="form-control" id="marzo_2044" name="marzo_2044"
                value="<?php echo $datos->marzo_2044 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2044">Abril 2044</label>
              <input type="text" class="form-control" id="abril_2044" name="abril_2044"
                value="<?php echo $datos->abril_2044 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2044">Mayo 2044</label>
              <input type="text" class="form-control" id="mayo_2044" name="mayo_2044"
                value="<?php echo $datos->mayo_2044 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2044">Junio 2044</label>
              <input type="text" class="form-control" id="junio_2044" name="junio_2044"
                value="<?php echo $datos->junio_2044 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2044">Julio 2044</label>
              <input type="text" class="form-control" id="julio_2044" name="julio_2044"
                value="<?php echo $datos->julio_2044 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2044">Agosto 2044</label>
              <input type="text" class="form-control" id="agosto_2044" name="agosto_2044"
                value="<?php echo $datos->agosto_2044 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2044">Septiembre 2044</label>
              <input type="text" class="form-control" id="septiembre_2044" name="septiembre_2044"
                value="<?php echo $datos->septiembre_2044 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2044">Octubre 2044</label>
              <input type="text" class="form-control" id="octubre_2044" name="octubre_2044"
                value="<?php echo $datos->octubre_2044 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2044">Noviembre 2044</label>
              <input type="text" class="form-control" id="noviembre_2044" name="noviembre_2044"
                value="<?php echo $datos->noviembre_2044 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2044">Diciembre 2044</label>
              <input type="text" class="form-control" id="diciembre_2044" name="diciembre_2044"
                value="<?php echo $datos->diciembre_2044 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2045">Enero 2045</label>
              <input type="text" class="form-control" id="enero_2045" name="enero_2045"
                value="<?php echo $datos->enero_2045 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2045">Febrero 2045</label>
              <input type="text" class="form-control" id="febrero_2045" name="febrero_2045"
                value="<?php echo $datos->febrero_2045 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2045">Marzo 2045</label>
              <input type="text" class="form-control" id="marzo_2045" name="marzo_2045"
                value="<?php echo $datos->marzo_2045 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2045">Abril 2045</label>
              <input type="text" class="form-control" id="abril_2045" name="abril_2045"
                value="<?php echo $datos->abril_2045 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2045">Mayo 2045</label>
              <input type="text" class="form-control" id="mayo_2045" name="mayo_2045"
                value="<?php echo $datos->mayo_2045 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2045">Junio 2045</label>
              <input type="text" class="form-control" id="junio_2045" name="junio_2045"
                value="<?php echo $datos->junio_2045 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2045">Julio 2045</label>
              <input type="text" class="form-control" id="julio_2045" name="julio_2045"
                value="<?php echo $datos->julio_2045 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2045">Agosto 2045</label>
              <input type="text" class="form-control" id="agosto_2045" name="agosto_2045"
                value="<?php echo $datos->agosto_2045 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2045">Septiembre 2045</label>
              <input type="text" class="form-control" id="septiembre_2045" name="septiembre_2045"
                value="<?php echo $datos->septiembre_2045 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2045">Octubre 2045</label>
              <input type="text" class="form-control" id="octubre_2045" name="octubre_2045"
                value="<?php echo $datos->octubre_2045 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2045">Noviembre 2045</label>
              <input type="text" class="form-control" id="noviembre_2045" name="noviembre_2045"
                value="<?php echo $datos->noviembre_2045 ?>">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2045">Diciembre 2045</label>
              <input type="text" class="form-control" id="diciembre_2045" name="diciembre_2045"
                value="<?php echo $datos->diciembre_2045 ?>">
            </div>
          </div>
          <button class="btn btn-primary mt-3">
            <i class="fa-solid fa-floppy-disk"></i>Actualizar
          </button>
        </form>
      </div>
    </div>
  </div>
</div>