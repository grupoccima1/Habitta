<?php

class Crud extends Conexion {
    public function mostrarDatos(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->validador;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function mostrarDatosmadre(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->basemadre;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function mostrarDatosbdflujo(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->bdflujo;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function mostrarDatosflujo(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->flujo;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function mostrarDatosgeneral(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->general;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function mostrarDatosliberados(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->liberados;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    // public function insertarDatos($datos){
    //     try {
    //         $conexion = parent::conectar();
    //         $coleccion = $conexion->new1;
    //         $respuesta = $coleccion->isertOne($datos);
    //         return $respuesta;
    //     } catch (\Throwable $th) {
    //         return $th->getMessage();
    //     }
    // }
}

?>