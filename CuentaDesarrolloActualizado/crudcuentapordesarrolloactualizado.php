<?php


require_once "./../clases/Conexion.php";
class crudcuentapordesarrolloactualizado extends Conexion {


    public function insertarDatos($datos){
        try{
            $conexion = parent::conectar();
            $coleccion = $conexion->CuentaDesarrolloActualizado;
            $respuesta = $coleccion->insertOne($datos);
            return $respuesta;
        }catch(\Throwable $th){
            return $th->getMessage();
        }
    }


      }
?>