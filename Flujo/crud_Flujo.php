<?php


require_once "./../clases/Conexion.php";
class crudflujo extends Conexion {


    public function insertarDatosFlujo($datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion -> flujo;
            $respuesta = $coleccion->insertOne($datos);

            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

      }
?>