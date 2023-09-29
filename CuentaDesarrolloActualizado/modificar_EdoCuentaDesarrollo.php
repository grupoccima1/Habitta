<?php 
    include "../header.php";
    include "../clases/Conexion.php";
    include "../CuentaDesarrolloActualizado/crudcuentapordesarrolloactualizado.php";

    $crud = new crudcuentapordesarrolloactualizado();
    $id = $_POST['id'];
    $datos = $crud -> obtenerDocumentoCuentaDesarrolloActualizado($id);
    $idMongo = $datos -> _id;
?>

<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-body">
                <div class="col">

                <a href="../EDO_De_Cuenta_Por_Desarrollo_Actualizado.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Actualizar Registro</h2>
                <form action="../CuentaDesarrolloActualizado/actualizar_EdoCuentaDesarrollo.php" method="POST">
                    <input type="text" name="id" id="id" hidden value="<?php echo $idMongo ?>">
                    <label for="concepto">Concepto</label>
                    <input type="text" name="concepto" id="concepto" class="form-control" value="<?php echo $datos->CONCEPTO ?>">
                    <label for="pto_blanco_cim">Portto Blanco Cimatario</label>
                    <input type="text" name="pto_blanco_cim" id="pto_blanco_cim" class="form-control" value="<?php echo $datos->PORTTO_BLANCO_CIM ?>">
                    <label for="lomas_portto">Lomas De Portto Blanco</label>
                    <input type="text" name="lomas_portto" id="lomas_portto" class="form-control" value="<?php echo $datos->LOMAS_DE_PORTTO_BLANCO ?>">
                    <label for="pto_blanco_ber">Portto Blanco Bernal</label>
                    <input type="text" name="pto_blanco_ber" id="pto_blanco_ber" class="form-control" value="<?php echo $datos->PORTTO_BLANCO_BERNAL ?>">
                    <label for="veredas">Veredas de Lira</label>
                    <input type="text" name="veredas" id="veredas" class="form-control" value="<?php echo $datos->VEREDAS_DE_LIRA ?>">
                    <label for="pto_blanco_slp">Portto Blanco SLP</label>
                    <input type="text" name="pto_blanco_slp" id="pto_blanco_slp" class="form-control" value="<?php echo $datos->PORTTO_BLANCO_SLP ?>">
                    <label for="general">General</label>
                    <input type="text" name="general" id="general" class="form-control" value="<?php echo $datos->GENERAL ?>">
                    <button class="btn btn-primary mt-3">
                        <i class="fa-solid fa-floppy-disk"></i> Actualizar
                    </button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>


    
<?php include "../script.php"; ?>