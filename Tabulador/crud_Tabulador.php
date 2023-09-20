<?php



class crudtabulador extends Conexion {


    public function insertarDatosTabulador($datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion -> tabulador;
            $respuesta = $coleccion -> insertOne($datos);

            return $respuesta;
        } catch (\Throwable $th) {
            return $th -> getMessage();
        }
    }
    public function obtenerDocumentoTabulador($id) {
        try {
            if (!preg_match('/^[a-f0-9]{24}$/i', $id)) {
                throw new Exception('El ID no tiene el formato correcto');
            }
            $conexion = parent::conectar();
            $coleccion = $conexion->tabulador;
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
    public function eliminarTabulador($id){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->tabulador;
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
    public function actualizarTabulador($id,$datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion ->tabulador;
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