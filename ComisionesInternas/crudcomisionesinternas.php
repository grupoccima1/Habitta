<?php


require_once "./../clases/Conexion.php";
class crudcomisionesinternas extends Conexion {


    public function insertarDatos($datos){
        try{
            $conexion = parent::conectar();
            $coleccion = $conexion->ComisionInternas;
            $respuesta = $coleccion->insertOne($datos);
            return $respuesta;
        }catch(\Throwable $th){
            return $th->getMessage();
        }
    }


      }
?>