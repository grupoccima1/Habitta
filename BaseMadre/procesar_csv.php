<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/Habitta/vendor/autoload.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/Habitta/BaseMadre/crud_BaseMadre.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/Habitta/clases/Conexion.php";
use PhpOffice\PhpSpreadsheet\IOFactory;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["archivo_excel"]["name"]) && !empty($_FILES["archivo_excel"]["name"])) {
        $archivo_tmp = $_FILES["archivo_excel"]["tmp_name"];

        try {
            // Cargar archivo Excel
            $objPHPExcel = IOFactory::load($archivo_tmp);
            $hoja = $objPHPExcel->getActiveSheet();
            $datos_excel = $hoja->toArray();

            // Conectar a la base de datos MongoDB
            $crud = new crudbasemadre();

            // Iterar sobre los datos y almacenar en MongoDB desde la fila 2
            for ($i = 1; $i < count($datos_excel); $i++) {
                $fila = $datos_excel[$i];

                // Obtener datos de las columnas A, B, C, D, E
                $llave = $fila[0]; // Columna A
                $lote = $fila[1]; // Columna B
                $condominio = $fila[2]; // Columna C
                $cluster = $fila[3]; // Columna D
                $desarrollo = $fila[4]; // Columna E

                // Construir el arreglo de datos para MongoDB
                $datos = [
                    'LLAVE' => $llave,
                    'LOTE' => $lote,
                    'CONDOMINIO' => $condominio,
                    'CLUSTER' => $cluster,
                    'DESARROLLO' => $desarrollo,
                    'APARTADOTELEGRAM' => null,
                    'CLIENTE' => null,
                    'RFC' => null,
                    'IDCIF' => null,
                    'USOCFDI' => null,
                    'RAZONSOCIAL' => null,
                    'DOMICILIOFISCAL' => null,
                    'TELEFONO' => null,
                    'CORREO' => null,
                    'M2' => null,
                    'TOTALOPERACION' => null,
                    'ENGANCHE' => null,
                    'FINANCIAMIENTO' => null,
                    'FIRMACONTRATO' => null,
                    'FINCORRIDA' => null,
                    'TOTALMENSUALIDADES' => null,
                    'NO1ERMENS' => null,
                    'ERMENSUALIDAD' => null,
                    'NO2DAMENS' => null,
                    'DAMENSUALIDAD' => null,
                    'NO3ERMENS' => null,
                    'ERMENSUALIDAD2' => null,
                    'TIPODEINTERES' => null,
                    'MENSENTREGA' => null,
                    'INICIOCORRIDA' => null,
                    'FECHAPRIMERABONO' => null,
                    'PAGADO' => null,
                    'DEUDA' => null,
                    'FECHAENTREGALOTE' => null,
                    'ESTATUSCM' => null,
                    'LINKSAT' => null,
                    'NOTASDEPAGOS' => null,
                    'BONOREFERIDO' => null,
                    'ESTATUS' => null,
                    'MOTIVOESTATUS' => null,
                    'RESULTADO' => null,
                ];

                // Insertar datos en MongoDB
                $respuesta = $crud->insertarDatosMadre($datos);

                // Manejar la respuesta según tus necesidades
                if ($respuesta instanceof MongoDB\InsertOneResult) {
                    // Éxito
                    echo "Datos insertados correctamente para LLAVE: $llave<br>";
                } else {
                    // Error
                    echo "Error al insertar datos para LLAVE: $llave - " . $respuesta . "<br>";
                }
            }

            // Redirige de nuevo a la página principal
            header("Location: http://localhost/Habitta/basemadre.php");
            exit();
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "Error: No se seleccionó ningún archivo.";
    }
}
?>

