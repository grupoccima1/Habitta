<?php



class crudtableroderesultados extends Conexion {


    public function insertarDatos($datos){
        try{
            $conexion = parent::conectar();
            $coleccion = $conexion->TableroDeResultados;
            $respuesta = $coleccion->insertOne($datos);
            return $respuesta;
        }catch(\Throwable $th){
            return $th->getMessage();
        }
    }

    public function obtenerDocumentoTableroDeResultados($id) {
        try {
            if (!preg_match('/^[a-f0-9]{24}$/i', $id)) {
                throw new Exception('El ID no tiene el formato correcto');
            }
            $conexion = parent::conectar();
            $coleccion = $conexion->TableroDeResultados;
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

    public function actualizarTableroResultados ($id,$datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion -> TableroDeResultados;
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
    
    public function eliminarTableroDeResultados($id){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->TableroDeResultados;
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

    public function mostrarDatosTableroResultados(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->TableroDeResultados;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  
      }
?>