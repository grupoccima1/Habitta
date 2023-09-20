<?php


//require_once "../clases/Conexion.php";
class crudacumuladosherpa extends Conexion {


    public function insertarDatos($datos){
        try{
            $conexion = parent::conectar();
            $coleccion = $conexion->acumuladosherpa;
            $respuesta = $coleccion->insertOne($datos);
            return $respuesta;
        }catch(\Throwable $th){
            return $th->getMessage();
        }
    }


    public function obtenerDocumentoSherpa($id) {
        try {
            if (!preg_match('/^[a-f0-9]{24}$/i', $id)) {
                throw new Exception('El ID no tiene el formato correcto');
            }
            $conexion = parent::conectar();
            $coleccion = $conexion->acumuladosherpa;
            $datos = $coleccion->findOne(
                                    array(
                                        '_id' => new MongoDB\BSON\ObjectId($id)
                                    )
                                );
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function eliminarSherpa($id){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->acumuladosherpa;
            $respuesta = $coleccion->deleteOne(
                                            array(
                                                "_id" => new MongoDB\BSON\ObjectId($id)
                                            )   
                                        );
            return $respuesta;
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
      }
?>