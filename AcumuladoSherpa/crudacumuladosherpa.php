<?php

class crudacumuladosherpa extends Conexion {

    public function insertarDatos($datos){
        try{
            $conexion = $this->conectar();
            $columnas = implode(", ", array_map(function ($key) {
                return "`$key`";
            }, array_keys($datos)));
            $marcadores = implode(", ", array_fill(0, count($datos), "?"));
            $query = "INSERT INTO acumuladosherpa_habitta ($columnas) VALUES ($marcadores)";
            $stmt = $conexion->prepare($query);
            
            // Enlaza los parámetros
            $tipos = str_repeat("s", count($datos)); // Supongo que todos los datos son cadenas (strings)
            $valores = array_values($datos);
            $stmt->bind_param($tipos, ...$valores);

            $stmt->execute();

            // Verifica las filas afectadas
            $filasAfectadas = $stmt->affected_rows;

            if ($filasAfectadas > 0) {
                $respuesta = new stdClass();
                $respuesta->success = true;
                $respuesta->insertedId = $conexion->insert_id;
                return $respuesta;
            } else {
                throw new Exception('Error al insertar datos: ' . $stmt->error, $stmt->errno);
            }
        }catch(\Throwable $th){
            return $th->getMessage();
        }
    }

    public function obtenerDocumentoSherpa($id) {
        try {
            $conexion = $this->conectar();
            $query = "SELECT * FROM acumuladosherpa_habitta WHERE id = ?";
            $stmt = $conexion->prepare($query);
            $stmt->bind_param("s", $id);
            $stmt->execute();
            $resultado = $stmt->get_result();

            if ($resultado->num_rows > 0) {
                $datos = $resultado->fetch_assoc();
                return $datos;
            } else {
                return null; // Indicar que el documento no fue encontrado
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }


    public function actualizarAcumuladoSherpa($id, $datos) {
        try {
            $conexion = $this->conectar();
            
            // Construir la parte SET de la consulta
            $columnas_actualizar = implode(", ", array_map(function ($key) {
                return "`$key` = ?";
            }, array_keys($datos)));
            
            $query = "UPDATE acumuladosherpa_habitta SET $columnas_actualizar WHERE id = ?";
            $stmt = $conexion->prepare($query);
    
            if (!$stmt) {
                throw new Exception("Error en la preparación de la consulta: " . $conexion->error);
            }
        
            // Prepara los tipos de datos para bind_param
            $tipos = str_repeat("s", count($datos)) . "s"; // Asumiendo que $id también es una cadena
            $valores = array_values($datos);
            $valores[] = $id;
    
            if (!$stmt->bind_param($tipos, ...$valores)) {
                throw new Exception("Error al vincular los parámetros: " . $stmt->error);
            }
    
            if (!$stmt->execute()) {
                throw new Exception("Error al ejecutar la consulta: " . $stmt->error);
            }
    
            return true; // Éxito
        } catch (\Throwable $th) {
            // Loguea la excepción en lugar de devolver el mensaje directamente
            error_log($th->getMessage());
            return "Error en la aplicación. Por favor, contacta al administrador.";
        }
    }
    
    

    public function eliminarSherpa($id){
        try {
            $conexion = $this->conectar();
            $query = "DELETE FROM acumuladosherpa_habitta WHERE id = ?";
            $stmt = $conexion->prepare($query);
            $stmt->bind_param("s", $id);
            $resultado = $stmt->execute();

            if ($resultado) {
                return true;
            } else {
                throw new Exception('Error al eliminar datos: ' . $stmt->error, $stmt->errno);
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function mostrarDatosAcumuladoSherpa(){
        try {
            $conexion = $this->conectar();
            $query = "SELECT * FROM acumuladosherpa_habitta";
            $resultado = $conexion->query($query);

            if ($resultado) {
                $datos = $resultado->fetch_all(MYSQLI_ASSOC);
                return $datos;
            } else {
                throw new Exception('Error al obtener datos: ' . $conexion->error, $conexion->errno);
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
?>
