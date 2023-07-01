<?php

class Crud extends Conexion {

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


    public function mostrarDatosliberado(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->liberado;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

        public function mostrarDatosbbva(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->bbva;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }    

        public function mostrarDatoshsbc_habitta(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->hsbc_habitta;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  

        public function mostrarDatoshsbc_lomas(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->hsbc_lomas;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  

    public function mostrarDatoscobranza(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->cobranza;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  

    public function mostrarDatoslistado(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->cobranza;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  

    public function mostrarDatosestados(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->estados;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  

    public function mostrarDatoscatalogo(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->catalogo;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  

        public function mostrarDatostabulador(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->tabulador;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  

            public function mostrarDatoslistados(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->listado;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  


    public function mostrarDatoscomisiones2023(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->comision2023;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  

    public function mostrarDatoscomisiones2021(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->comision2021;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  

    public function mostrarDatoscomisiones2022(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->comision2022;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  

    public function mostrarDatoscomisiones2020(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->comision2020;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  
    public function mostrarDatosAcumuladoSherpa(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->acumuladosherpa;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  


    public function mostrarDatoBaseMadreHabitta(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->basemadrehabitta;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  

    public function mostrarDatobillpocket(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->billpocket;
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
