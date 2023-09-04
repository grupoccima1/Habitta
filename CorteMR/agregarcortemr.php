<?php include "../header.php"; ?>
<div class="container">
<div class= "card mt-4">
    <div class= "card-body">
        <h2 class="mb-3 fs-4 text-center"> Agregar nuevo registro  </h2>
        <form action="./insertarcortemr.php" method="post">
          <div class="row">
          <div class="col-4 mb-2">
            <label for="RANGO_DE_MOROSIDAD">RANGO DE MOROSIDAD</label>
              <input type="text" class="form-control" id="RANGO_DE_MOROSIDAD" name="RANGO_DE_MOROSIDAD">
          </div>  
            <div class="col-4 mb-2">
              <label for="NUM_DE_CLIENTES">NUMERO DE CLIENTES</label>
              <input type="text" class="form-control" id="NUM_DE_CLIENTES" name="NUM_DE_CLIENTES">
            </div>
            <div class="col-4 mb-2">
              <label for="CLÚSTER">CLÚSTER</label>
              <input type="text" class="form-control" id="CLÚSTER" name="CLÚSTER">
            </div>
            <div class="col-4 mb-2">
              <label for="DESARROLLO">DESARROLLO</label>
              <input type="text" class="form-control" id="DESARROLLO" name="DESARROLLO">
            </div>
            <div class="col-4 mb-2">
              <label for="CLIENTES_EN_MORA">CLIENTES EN MORA</label>
              <input type="text" class="form-control" id="CLIENTES_EN_MORA" name="CLIENTES_EN_MORA">
            </div>
            <div class="col-4 mb-2">
              <label for="CONTRATOS_FIRMADOS">CONTRATOS FIRMADOS</label>
              <input type="text" class="form-control" id="CONTRATOS_FIRMADOS" name="CONTRATOS_FIRMADOS">
            </div>
            <div class="col-4 mb-2">
              <label for="PDE_MOROSIDAD">PDE MOROSIDAD</label>
              <input type="text" class="form-control" id="PDE_MOROSIDAD" name="PDE_MOROSIDAD">
            </div>
            <div class="col-4 mb-2">
              <label for="VENCIDO">VENCIDO</label>
              <input type="text" class="form-control" id="VENCIDO" name="VENCIDO">
            </div>
            <div class="col-4 mb-2">
              <label for="INTERES_MORATORIO">INTERES MORATORIO</label>
              <input type="text" class="form-control" id="INTERES_MORATORIO" name="INTERES_MORATORIO">
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
              <label for="CLIENTE">CLIENTE</label>
              <input type="text" class="form-control" id="CLIENTE" name="CLIENTE">
            </div>
            <div class="col-4 mb-2">
              <label for="ESTATUS">ESTATUS</label>
              <input type="text" class="form-control" id="ESTATUS" name="ESTATUS">
            </div>
            <div class="col-4 mb-2">
              <label for="TOTAL_VENCIDO">TOTAL VENCIDO</label>
              <input type="text" class="form-control" id="TOTAL_VENCIDO" name="TOTAL_VENCIDO">
            </div>
            <div class="col-4 mb-2">
              <label for="INT_MORATORIO">INT MORATORIO</label>
              <input type="text" class="form-control" id="INT_MORATORIO" name="INT_MORATORIO">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2020">ENERO 2020</label>
              <input type="text" class="form-control" id="enero_2020" name="enero_2020">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2020">FEBRERO 2020</label>
              <input type="text" class="form-control" id="febrero_2020" name="febrero_2020">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2020">MARZO 2020</label>
              <input type="text" class="form-control" id="marzo_2020" name="marzo_2020">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2020">ABRIL 2020</label>
              <input type="text" class="form-control" id="abril_2020" name="abril_2020">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2020">MAYO 2020</label>
              <input type="text" class="form-control" id="mayo_2020" name="mayo_2020">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2020">JUNIO 2020</label>
              <input type="text" class="form-control" id="junio_2020" name="junio_2020">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2020">JULIO 2020</label>
              <input type="text" class="form-control" id="julio_2020" name="julio_2020">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2020">AGOSTO 2020</label>
              <input type="text" class="form-control" id="agosto_2020" name="agosto_2020">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2020">SEPTIEMBRE 2020</label>
              <input type="text" class="form-control" id="septiembre_2020" name="septiembre_2020">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2020">OCTUBRE 2020</label>
              <input type="text" class="form-control" id="octubre_2020" name="octubre_2020">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2020">NOVIEMBRE 2020</label>
              <input type="text" class="form-control" id="noviembre_2020" name="noviembre_2020">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2020">DICIEMBRE 2020</label>
              <input type="text" class="form-control" id="diciembre_2020" name="diciembre_2020">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2021">ENERO 2021</label>
              <input type="text" class="form-control" id="enero_2021" name="enero_2021">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2021">FEBRERO 2021</label>
              <input type="text" class="form-control" id="febrero_2021" name="febrero_2021">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2021">MARZO 2021</label>
              <input type="text" class="form-control" id="marzo_2021" name="marzo_2021">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2021">ABRIL 2021</label>
              <input type="text" class="form-control" id="abril_2021" name="abril_2021">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2021">MAYO 2021</label>
              <input type="text" class="form-control" id="mayo_2021" name="mayo_2021">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2021">JUNIO 2021</label>
              <input type="text" class="form-control" id="junio_2021" name="junio_2021">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2021">JULIO 2021</label>
              <input type="text" class="form-control" id="julio_2021" name="julio_2021">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2021">AGOSTO 2021</label>
              <input type="text" class="form-control" id="agosto_2021" name="agosto_2021">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2021">SEPTIEMBRE 2021</label>
              <input type="text" class="form-control" id="septiembre_2021" name="septiembre_2021">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2021">OCTUBRE 2021</label>
              <input type="text" class="form-control" id="octubre_2021" name="octubre_2021">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2021">OCTUBRE 2021</label>
              <input type="text" class="form-control" id="noviembre_2021" name="noviembre_2021">
            </div>
            <div class="col-4 mb-2">
              <var><label for="diciembre_2021">DICIEMBRE 2021</label>
              <input type="text" class="form-control" id="diciembre_2021" name="diciembre_2021">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2022">ENERO 2022</label>
              <input type="text" class="form-control" id="enero_2022" name="enero_2022">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2022">FEBRERO 2022</label>
              <input type="text" class="form-control" id="febrero_2022" name="febrero_2022">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2022">MARZO 2022</label>
              <input type="text" class="form-control" id="marzo_2022" name="marzo_2022">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2022">ABRIL 2022</label>
              <input type="text" class="form-control" id="abril_2022" name="abril_2022">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2022">MAYO 2022</label>
              <input type="text" class="form-control" id="mayo_2022" name="mayo_2022">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2022">JUNIO 2002</label>
              <input type="text" class="form-control" id="junio_2022" name="junio_2022">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2022">JULIO 2002</label>
              <input type="text" class="form-control" id="julio_2022" name="julio_2022">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2022">AGOSTO 2002</label>
              <input type="text" class="form-control" id="agosto_2022" name="agosto_2022">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2022">SEPTIEMBRE 2022</label>
              <input type="text" class="form-control" id="septiembre_2022" name="septiembre_2022">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2022">OCTUBRE 2022</label>
              <input type="text" class="form-control" id="octubre_2022" name="octubre_2022">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2022">NOVIEMBRE 2022</label>
              <input type="text" class="form-control" id="noviembre_2022" name="noviembre_2022">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2022">DICIEMBRE 2022</label>
              <input type="text" class="form-control" id="diciembre_2022" name="diciembre_2022">
            </div>
            <div class="col-4 mb-2">
              <label for="enero_2023">ENERO 2023</label>
              <input type="text" class="form-control" id="enero_2023" name="enero_2023">
            </div>
            <div class="col-4 mb-2">
              <label for="febrero_2023">FEBRERO 2023</label>
              <input type="text" class="form-control" id="febrero_2023" name="febrero_2023">
            </div>
            <div class="col-4 mb-2">
              <label for="marzo_2023">MARZO 2023</label>
              <input type="text" class="form-control" id="marzo_2023" name="marzo_2023">
            </div>
            <div class="col-4 mb-2">
              <label for="abril_2023">ABRIL 2023</label>
              <input type="text" class="form-control" id="abril_2023" name="abril_2023">
            </div>
            <div class="col-4 mb-2">
              <label for="mayo_2023">MAYO 2023</label>
              <input type="text" class="form-control" id="mayo_2023" name="mayo_2023">
            </div>
            <div class="col-4 mb-2">
              <label for="junio_2023">JUNIO 2023</label>
              <input type="text" class="form-control" id="junio_2023" name="junio_2023">
            </div>
            <div class="col-4 mb-2">
              <label for="julio_2023">JULIO 2023</label>
              <input type="text" class="form-control" id="julio_2023" name="julio_2023">
            </div>
            <div class="col-4 mb-2">
              <label for="agosto_2023">AGOSTO 2023</label>
              <input type="text" class="form-control" id="agosto_2023" name="agosto_2023">
            </div>
            <div class="col-4 mb-2">
              <label for="septiembre_2023">SEPTIEMBRE 2023</label>
              <input type="text" class="form-control" id="septiembre_2023" name="septiembre_2023">
            </div>
            <div class="col-4 mb-2">
              <label for="octubre_2023">OCTUBRE 2023</label>
              <input type="text" class="form-control" id="octubre_2023" name="octubre_2023">
            </div>
            <div class="col-4 mb-2">
              <label for="noviembre_2023">NOVIEMBRE 2023</label>
              <input type="text" class="form-control" id="noviembre_2023" name="noviembre_2023">
            </div>
            <div class="col-4 mb-2">
              <label for="diciembre_2023">DICIEMBRE 2023</label>
              <input type="text" class="form-control" id="diciembre_2023" name="diciembre_2023">
            </div>
          </div>
            <div class="d-flex justify-content-end">
              <button class="btn btn-primary mt-3 px-5">
                         Agregar
              </button>

            </div>
                      
        </form>
      </div>
    </div>
</div>