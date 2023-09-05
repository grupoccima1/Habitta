<?php


require_once "./../clases/Conexion.php";
class crudcomisiones2020 extends Conexion {


    public function insertarDatosComisiones2020($datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion -> comision2020;
            $respuesta = $coleccion -> insertOne($datos);

            return $respuesta;
        } catch (\Throwable $th) {
            return $th -> getMessage();
        }

      }
      }
?>