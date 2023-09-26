<?php


class crudcomisiones2020 extends Conexion {


    public function insertarDatosComisiones2020($datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion -> comision2020;
            $respuesta = $coleccion -> insertOne($datos);

            return $respuesta;
        } catch (\Throwable $th) {
            return $th -> getMessage();
        }

      }

      public function obtenerDocumentoComision2020($id) {
        try {
            if (!preg_match('/^[a-f0-9]{24}$/i', $id)) {
                throw new Exception('El ID no tiene el formato correcto');
            }
            $conexion = parent::conectar();
            $coleccion = $conexion->comision2020;
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

    public function actualizarComisiones2020($id, $datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion -> comision2020;
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
    
    public function eliminarComision2020($id){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->comision2020;
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

    public function mostrarDatosComisiones2020(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->comision2020;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  
}
?>