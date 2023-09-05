<?php


require_once "./../clases/Conexion.php";
class crudliberados extends Conexion {


    public function insertarDatosLiberados($datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion -> liberado;
            $respuesta = $coleccion -> insertOne($datos);

            return $respuesta;
        } catch (\Throwable $th) {
            return $th -> getMesagge();
        }

      }
      }
?>