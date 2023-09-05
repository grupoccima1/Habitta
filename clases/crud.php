<?php

class Crud extends Conexion { //la palabra clave "extends" indica que la clase "Crud" hereda todas las propiedades y métodos de la clase "Conexion".

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


    public function mostrarDatosliberado(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->liberado;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

        public function mostrarDatosbbva(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->bbva;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }    

        public function mostrarDatoshsbc_habitta(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->hsbc_habitta;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  

        public function mostrarDatoshsbc_lomas(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->hsbc_lomas;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  

    public function mostrarDatoscobranza(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->cobranza;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  

    public function mostrarDatoslistado(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->cobranza;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  

    public function mostrarDatosestados(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->estados;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  

    public function mostrarDatoscatalogo(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->catalogo;
            $datos = $coleccion->find();
            return $datos;
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

            public function mostrarDatoslistados(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->listado;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  


    public function mostrarDatoscomisiones2023(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->comision2023;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  

    public function mostrarDatoscomisiones2021(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->comision2021;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  

    public function mostrarDatoscomisiones2022(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->comision2022;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  

    public function mostrarDatoscomisiones2020(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->comision2020;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  
    public function mostrarDatosAcumuladoSherpa(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->acumuladosherpa;
            $datos = $coleccion->find();
            return $datos;
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

    public function mostrarDatobillpocket(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->billpocket;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  

    public function mostrarDatoClientesMorosos(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->clientesmorosos;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }  

    public function mostrarEstadoDeCuentaDesarrollo(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->estadodecuenta;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    } 

    public function mostrarNico(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->nico;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    } 

    public function mostrarCierreMensualHabitta(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->cierreMensual;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    } 



    public function mostrarAcumuladoComisiones(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->AcumuladoComisiones;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }



    public function mostrarCorteMR(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->CorteMR;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    } 

    
    public function mostrarCobranzaAcumulado(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->CobranzaAcumulado;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    } 

    public function mostrarDatosbonosFebrero(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->ComBonosFebrero;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    } 

    
    public function mostrarComHabSemana(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->ComSemana20;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    } 


    public function mostrarDatosDevolucionesClientes(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->DevolucionesClientes;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    } 

    public function mostrarDatosComisionesInternas(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->ComisionInternas;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    } 

    public function mostrarDatosCreacionRecibos(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->CreacionRecibos;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    } 

    public function mostrarDatosEstadoCuenta(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->EstadosDecuenta;
            $datos = $coleccion->find();
            return $datos;
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

    public function mostrarDatosRevision(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->Revision;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    } 

    public function mostrarDatosAcumuladoDeTierra(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->AcumuladoTierra;
            $datos = $coleccion->find();
            return $datos;
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

    public function mostrarDatosCuentaDesarrolloActualizado(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->CuentaDesarrolloActualizado;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
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

    public function insertarDatosLiberados($datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion -> liberado;
            $respuesta = $coleccion -> insertOne($datos);

            return $respuesta;
        } catch (\Throwable $th) {
            return $th -> getMesagge();
        }
    }

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

    public function obtenerDocumentoFlujo($id){
        try {
            if(!preg_match('/^[a-f0-9]{24}$/i', $id)){
                throw new Exception('El ID no tiene formato correcto');
            }
            $conexion = parent::conectar();
            $coleccion = $conexion -> flujo;
            $datos = $coleccion -> findOne(
                                        array(
                                            '_id' => new MongoDB\BSON\ObjectId($id)
                                        )
                                        );

            return $datos;
        } catch (\Throwable $th) {
            return $th -> getMessage();
        }
    }


    public function obtenerDocumentoLiberados($id){
        try {
            if(!preg_match('/^[a-f0-9]{24}$/i', $id)){
                throw new Exception('El ID no tiene formato correcto');
            }
            $conexion = parent::conectar();
            $coleccion = $conexion -> liberado;
            $datos = $coleccion -> findOne(
                                        array(
                                            '_id' => new MongoDB\BSON\ObjectId($id)
                                        )
                                        );

            return $datos;
        } catch (\Throwable $th) {
            return $th -> getMessage();
        }
    }

    public function obtenerDocumentoTabulador($id){
        try {
            if(!preg_match('/^[a-f0-9]{24}$/i', $id)){
                throw new Exception('El ID no tiene formato correcto');
            }
            $conexion = parent::conectar();
            $coleccion = $conexion -> tabulador;
            $datos = $coleccion -> findOne(
                                        array(
                                            '_id' => new MongoDB\BSON\ObjectId($id)
                                        )
                                        );

            return $datos;
        } catch (\Throwable $th) {
            return $th -> getMessage();
        }
    }

    public function obtenerDocumentoComisiones2020($id){
        try {
            if(!preg_match('/^[a-f0-9]{24}$/i', $id)){
                throw new Exception('El ID no tiene formato correcto');
            }
            $conexion = parent::conectar();
            $coleccion = $conexion -> comision2020;
            $datos = $coleccion -> findOne(
                                        array(
                                            '_id' => new MongoDB\BSON\ObjectId($id)
                                        )
                                        );

            return $datos;
        } catch (\Throwable $th) {
            return $th -> getMessage();
        }
    }

    public function obtenerDocumentoComisiones2021($id){
        try {
            if(!preg_match('/^[a-f0-9]{24}$/i', $id)){
                throw new Exception('El ID no tiene formato correcto');
            }
            $conexion = parent::conectar();
            $coleccion = $conexion -> comision2021;
            $datos = $coleccion -> findOne(
                                        array(
                                            '_id' => new MongoDB\BSON\ObjectId($id)
                                        )
                                        );

            return $datos;
        } catch (\Throwable $th) {
            return $th -> getMessage();
        }
    }

    public function obtenerDocumentoComisiones2022($id){
        try {
            if(!preg_match('/^[a-f0-9]{24}$/i', $id)){
                throw new Exception('El ID no tiene formato correcto');
            }
            $conexion = parent::conectar();
            $coleccion = $conexion -> comision2022;
            $datos = $coleccion -> findOne(
                                        array(
                                            '_id' => new MongoDB\BSON\ObjectId($id)
                                        )
                                        );

            return $datos;
        } catch (\Throwable $th) {
            return $th -> getMessage();
        }
    }

    public function obtenerDocumentoComisiones2023($id){
        try {
            if(!preg_match('/^[a-f0-9]{24}$/i', $id)){
                throw new Exception('El ID no tiene formato correcto');
            }
            $conexion = parent::conectar();
            $coleccion = $conexion->comision2023;
            $datos = $coleccion -> findOne(
                                        array(
                                            '_id' => new MongoDB\BSON\ObjectId($id)
                                        )
                                        );

            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function obtenerDocumentoAcumuladosSherpa($id){
        try {
            if(!preg_match('/^[a-f0-9]{24}$/i', $id)){
                throw new Exception('El ID no tiene formato correcto');
            }
            $conexion = parent::conectar();
            $coleccion = $conexion -> acumuladosherpa;
            $datos = $coleccion -> findOne(
                                        array(
                                            '_id' => new MongoDB\BSON\ObjectId($id)
                                        )
                                        );

            return $datos;
        } catch (\Throwable $th) {
            return $th -> getMessage();
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

    public function actualizarLiberados($id, $datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion -> liberado;
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

    public function actualizarTabulador($id, $datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion -> tabulador;
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

    public function actualizarComisiones2021($id, $datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion -> comision2021;
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

    public function actualizarComisiones2022($id, $datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion -> comision2022;
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

    public function actualizarComisiones2023($id, $datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion -> comision2023;
            $respuesta = $coleccion -> updateOne(
                                                ['id' => new MongoDB\BSON\ObjectId($id)],
                                                [
                                                    '$set' => $datos
                                                ]
                                            );

            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }               
    }

    public function actualizarAcumuladosSherpa($id, $datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion -> acumuladosherpa;
            $respuesta = $coleccion -> updateOne(
                                                ['id' => new MongoDB\BSON\ObjectId($id)],
                                                [
                                                    '$set' => $datos
                                                ]
                                            );
            return $respuesta;
        } catch (\Throwable $th) {
            return $th -> getMessage();
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
}

?>