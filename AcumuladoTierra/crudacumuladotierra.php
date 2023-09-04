<?php


require_once "./../clases/Conexion.php";
class crudacumuladotierra extends Conexion {


    public function insertarDatos($datos){
        try{
            $conexion = parent::conectar();
            $coleccion = $conexion->AcumuladoTierra;
            $respuesta = $coleccion->insertOne($datos);
            return $respuesta;
        }catch(\Throwable $th){
            return $th->getMessage();
        }
    }


      }
?>