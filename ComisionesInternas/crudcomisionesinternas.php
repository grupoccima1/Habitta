<?php


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

    public function obtenerDocumentoComisionesInternas($id) {
        try {
            if (!preg_match('/^[a-f0-9]{24}$/i', $id)) {
                throw new Exception('El ID no tiene el formato correcto');
            }
            $conexion = parent::conectar();
            $coleccion = $conexion->ComisionInternas;
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

    public function actualizarComisionesInternas ($id,$datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion -> ComisionInternas;
            $respuesta = $coleccion -> updateOne(
                                                ['_id' => new MongoDB\BSON\ObjectId($id)],
                                                [
                                                    '$set' => $datos
                                                ]
                                                );
            return $respuesta;
        } catch (\Throwable $th) {
            return $th -> getMessage();
        }   
    }
    
    public function eliminarComisionesInternas($id){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->ComisionInternas;
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

    public function mostrarDatosComisionesInternas(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->ComisionInternas;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  
      }
?>