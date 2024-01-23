<?php 
    include "../clases/conexion.php";
    include "./../AcumuladoTierra/crudacumuladotierra.php";
    $crudacumuladotierra = new crudacumuladotierra();
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

   $respuesta = $crudacumuladotierra->eliminarAcumuladoTierra($id);

 
   if ($respuesta === true) {
        header("location:../AcumuladosBonosDeTierra.php");
        exit();
    } else {
        echo "Error al eliminar el registro: " . $respuesta;
    }
} else {
    echo "ID no proporcionado para la eliminación.";
}
?>