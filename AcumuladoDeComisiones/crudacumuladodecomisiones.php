<?php


require_once "./../clases/Conexion.php";
class crudacumuladodecomisiones extends Conexion {


    public function insertarDatos($datos){
        try{
            $conexion = parent::conectar();
            $coleccion = $conexion->AcumuladoComisiones;
            $respuesta = $coleccion->insertOne($datos);
            return $respuesta;
        }catch(\Throwable $th){
            return $th->getMessage();
        }
    }


      }
?>