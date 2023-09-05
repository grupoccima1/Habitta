<?php


require_once "./../clases/Conexion.php";
class crudtabulador extends Conexion {


    public function insertarDatosTabulador($datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion -> tabulador;
            $respuesta = $coleccion -> insertOne($datos);

            return $respuesta;
        } catch (\Throwable $th) {
            return $th -> getMessage();
        }
    }
      }
?>