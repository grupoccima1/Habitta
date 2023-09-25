<?php



class crudflujo extends Conexion {


    public function insertarDatosFlujo($datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion -> flujo;
            $respuesta = $coleccion->insertOne($datos);

            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function obtenerDocumentoFlujo($id) {
        try {
            if (!preg_match('/^[a-f0-9]{24}$/i', $id)) {
                throw new Exception('El ID no tiene el formato correcto');
            }
            $conexion = parent::conectar();
            $coleccion = $conexion->flujo;
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
<<<<<<< HEAD

    public function actualizarFlujo($id, $datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion -> flujo;
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
    
    public function eliminarFlujo($id){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->flujo;
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

=======
    public function eliminarFlujo($id){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->flujo;
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

>>>>>>> 5ccd7b2a901cb555888b0325e6467b8998284a00
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
      }
?>