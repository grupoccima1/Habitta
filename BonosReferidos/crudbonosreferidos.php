<?php



class crudbonosreferidos extends Conexion {


    public function insertarDatos($datos){
        try{
            $conexion = parent::conectar();
            $coleccion = $conexion->BonosReferidos;
            $respuesta = $coleccion->insertOne($datos);
            return $respuesta;
        }catch(\Throwable $th){
            return $th->getMessage();
        }
    }
    
    public function obtenerDocumentoBonosReferidos($id) {
        try {
            if (!preg_match('/^[a-f0-9]{24}$/i', $id)) {
                throw new Exception('El ID no tiene el formato correcto');
            }
            $conexion = parent::conectar();
            $coleccion = $conexion->BonosReferidos;
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

    public function actualizarBonosReferidos($id, $datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion -> BonosReferidos;
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

    public function eliminarBonosReferidos($id){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->BonosReferidos;
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

    public function mostrarDatosBonosReferidos(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->BonosReferidos;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  

      }
?>