<?php



class crudproyeccionhabitta extends Conexion {


    public function insertarDatos($datos){
        try{
            $conexion = parent::conectar();
            $coleccion = $conexion->ProyeccionHabitta;
            $respuesta = $coleccion->insertOne($datos);
            return $respuesta;
        }catch(\Throwable $th){
            return $th->getMessage();
        }
    }

    public function obtenerDocumentoProyeccionHabitta($id) {
        try {
            if (!preg_match('/^[a-f0-9]{24}$/i', $id)) {
                throw new Exception('El ID no tiene el formato correcto');
            }
            $conexion = parent::conectar();
            $coleccion = $conexion->ProyeccionHabitta;
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

    public function actualizarProyeccionesFlujo($id, $datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion -> ProyeccionHabitta;
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
    
    public function eliminarProyeccionHabitta($id){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->ProyeccionHabitta;
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

    public function mostrarDatosProyeccionesHabitta(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->ProyeccionHabitta;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  
      }
?>