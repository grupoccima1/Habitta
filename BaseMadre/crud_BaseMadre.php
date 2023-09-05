<?php


require_once "./../clases/Conexion.php";
class crudbasemadre extends Conexion {


    public function insertarDatosMadre($datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->basemadre;
            $respuesta = $coleccion->insertOne($datos);
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }


      }
?>