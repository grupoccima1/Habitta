<?php



class crudhsbchabitta extends Conexion {


    public function insertarDatos($datos){
        try{
            $conexion = parent::conectar();
            $coleccion = $conexion->hsbc_habitta;
            $respuesta = $coleccion->insertOne($datos);
            return $respuesta;
        }catch(\Throwable $th){
            return $th->getMessage();
        }
    }
    public function obtenerDocumentoHSBCHABITTA($id) {
        try {
            if (!preg_match('/^[a-f0-9]{24}$/i', $id)) {
                throw new Exception('El ID no tiene el formato correcto');
            }
            $conexion = parent::conectar();
            $coleccion = $conexion->hsbc_habitta;
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
    public function eliminarHSBCHABITTA($id){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->hsbc_habitta;
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
    public function actualizarHSBCHABITTA($id,$datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion -> hsbc_habitta;
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

      }
?>