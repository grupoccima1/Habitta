<?php



class crudcobranzaacumulado extends Conexion {


    public function insertarDatos($datos){
        try{
            $conexion = parent::conectar();
            $coleccion = $conexion->cobranzaAcumulado;
            $respuesta = $coleccion->insertOne($datos);
            return $respuesta;
        }catch(\Throwable $th){
            return $th->getMessage();
        }
    }

    public function obtenerDocumentoCobranzaAcumulado($id) {
        try {
            if (!preg_match('/^[a-f0-9]{24}$/i', $id)) {
                throw new Exception('El ID no tiene el formato correcto');
            }
            $conexion = parent::conectar();
            $coleccion = $conexion->cobranzaAcumulado;
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
    public function eliminarCobranzaAcumulado($id){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->cobranzaAcumulado;
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

    public function mostrarCobranzaAcumulado(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->cobranzaAcumulado;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  
    public function actualizarcobranzaacumulado($id,$datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion -> cobranzaAcumulado;
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