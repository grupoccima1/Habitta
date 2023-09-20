<?php

class Crud extends Conexion {

    public function mostrarDatosflujo(){
        try {
            $conexion = parent::conectar();//si la conexion es exitosa, la variable se establece con el objeto de conexion
            $coleccion = $conexion->flujo;//Luego, se accede a la colección llamada "basemadre" en la base de datos utilizando la variable de conexión "$conexion" y se guarda el resultado en la variable "$datos".
            $datos = $coleccion->find();// Finalmente, se retorna la variable "$datos", que contiene los datos recuperados de la colección.
            return $datos;
        } catch (\Throwable $th) { // //En caso de que ocurra alguna excepción durante la ejecución del código dentro del bloque "try", se captura la excepción y se devuelve el mensaje de error correspondiente utilizando el método "getMessage()" del objeto de la excepción.
            return $th->getMessage();
        }
    }


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

      }
?>