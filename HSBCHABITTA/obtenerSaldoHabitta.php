<?php
include "../clases/Conexion.php";




$llave = isset($_POST['llave']) ? $_POST['llave'] : '';
$ingreso = isset($_POST['INGRESO']) ? floatval($_POST['INGRESO']) : 0;
$egreso = isset($_POST['EGRESO']) ? floatval($_POST['EGRESO']) : 0;

if ($llave !== '') {
    $conexion = new Conexion();
    $coleccion = $conexion->conectar()->hsbc_habitta;

    // Realizar la consulta para obtener el saldo
    $resultado = $coleccion->findOne(
        ['LLAVE' => $llave],
        ['sort' => ['FECHA' => -1]]
    );

    if ($resultado) {
        $saldo = floatval($resultado['SALDO']);
        $nuevoSaldo = $saldo + $ingreso - $egreso;
        echo $nuevoSaldo;
    } else {
        // Manejar el caso en el que no se encuentre la llave
        echo "Llave no encontrada";
    }
} else {
    // Manejar el caso en el que no se reciba la llave
    echo "No se proporcionó la llave";
}
?>