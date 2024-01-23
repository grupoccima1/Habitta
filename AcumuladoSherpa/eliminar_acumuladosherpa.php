<?php 
    include "../clases/conexion.php";
    include "./../AcumuladoSherpa/crudacumuladosherpa.php";

    $crudacumuladosherpa = new crudacumuladosherpa();
    
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        $respuesta = $crudacumuladosherpa->eliminarSherpa($id);

        if ($respuesta === true) {
            header("location:../acumuladosherpa.php");
            exit();
        } else {
            echo "Error al eliminar el registro: " . $respuesta;
        }
    } else {
        echo "ID no proporcionado para la eliminación.";
    }
?>
