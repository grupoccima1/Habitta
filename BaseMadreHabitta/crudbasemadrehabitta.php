<?php



class crudbasemadrehabitta extends Conexion {


    public function insertarDatos($datos){
        try{
            $conexion = parent::conectar();
            $coleccion = $conexion->basemadrehabitta;
            $respuesta = $coleccion->insertOne($datos);
            return $respuesta;
        }catch(\Throwable $th){
            return $th->getMessage();
        }
    }

    public function obtenerDocumentoBaseMadreHabitta($id) {
        try {
            if (!preg_match('/^[a-f0-9]{24}$/i', $id)) {
                throw new Exception('El ID no tiene el formato correcto');
            }
            $conexion = parent::conectar();
            $coleccion = $conexion->basemadrehabitta;
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

    public function actualizarMadreHabitta($id, $datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion -> basemadrehabitta;
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
    
    public function eliminarBaseMadreHabitta($id){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->basemadrehabitta;
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
      }
?>