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
            $coleccion = $conexion->ComisionesInternas;
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

    public function mostrarDatosTableroResultados(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->TableroResultados;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    } 


    // public function insertarDatos($datos){
    //     try {
    //         $conexion = parent::conectar();
    //         $coleccion = $conexion->new1;
    //         $respuesta = $coleccion->isertOne($datos);
    //         return $respuesta;
    //     } catch (\Throwable $th) {
    //         return $th->getMessage();
    //     }
    // }
}

?>
