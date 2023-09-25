<?php
class crudbasemadre extends Conexion {
    
    public function mostrarDatosmadre(){ //Esta haciendo una conexion con la base de datos 
        try {
            $conexion = parent::conectar(); //si la conexion es exitosa, la variable se establece con el objeto de conexion
            $coleccion = $conexion->basemadre; //Luego, se accede a la colección llamada "basemadre" en la base de datos utilizando la variable de conexión "$conexion" y se guarda el resultado en la variable "$datos".
            $datos = $coleccion->find(); // Finalmente, se retorna la variable "$datos", que contiene los datos recuperados de la colección.
            return $datos;
        } catch (\Throwable $th) {  //En caso de que ocurra alguna excepción durante la ejecución del código dentro del bloque "try", se captura la excepción y se devuelve el mensaje de error correspondiente utilizando el método "getMessage()" del objeto de la excepción.
            return $th->getMessage();
        }
    }
    
    public function insertarDatosMadre($datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->basemadre;
            $respuesta = $coleccion->insertOne($datos);
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function obtenerDocumentoMadre($id) {
        try {
            if (!preg_match('/^[a-f0-9]{24}$/i', $id)) {
                throw new Exception('El ID no tiene el formato correcto');
            }
            $conexion = parent::conectar();
            $coleccion = $conexion->basemadre;
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

    public function eliminarMadre($id){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->basemadre;
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


    public function actualizarMadre($id, $datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->basemadre;
            $respuesta = $coleccion->updateOne(
                                            ['_id' => new MongoDB\BSON\ObjectId($id)],
                                            [
                                                '$set' => $datos
                                            ]
                                        );
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }


}
?>