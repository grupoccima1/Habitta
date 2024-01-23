<?php

class CrudAcumuladoDeComisiones extends Conexion {

    public function insertarDatos($datos) {
        try {
            $conexion = $this->conectar();
            $columnas = implode(", ", array_map(function ($key) {
                return "`$key`";
            }, array_keys($datos)));
            $marcadores = implode(", ", array_fill(0, count($datos), "?"));
            $query = "INSERT INTO acumuladocomisiones_habitta ($columnas) VALUES ($marcadores)";
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
        } catch (\Throwable $th) {
            $respuesta = new stdClass();
            $respuesta->success = false;
            $respuesta->message = $th->getMessage();
            return $respuesta;
        }
    }
    
    
    

    
    public function obtenerDocumentoAcumuladoComisiones($id) {
        try {
            $conexion = parent::conectar();
            $query = "SELECT * FROM acumuladocomisiones_habitta WHERE id = ?";
            $stmt = $conexion->prepare($query);
            $stmt->bind_param("s", $id);
            $stmt->execute();
            $resultado = $stmt->get_result();
            $datos = $resultado->fetch_assoc();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function actualizarAcumuladoComisiones($id, $datos) {
        try {
            $conexion = parent::conectar();
            $actualizaciones = implode(", ", array_map(function ($key, $value) {
                return "$key = '$value'";
            }, array_keys($datos), $datos));
            $query = "UPDATE acumuladocomisiones_habitta SET $actualizaciones WHERE id = ?";
            $stmt = $conexion->prepare($query);
            $stmt->bind_param("s", $id);
            $resultado = $stmt->execute();

            if ($resultado) {
                return true;
            } else {
                throw new Exception('Error al actualizar datos: ' . $stmt->error, $stmt->errno);
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function eliminarAcumuladoComisiones($id) {
        try {
            $conexion = parent::conectar();
            $query = "DELETE FROM acumuladocomisiones_habitta WHERE id = ?";
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

    public function mostrarAcumuladoComisiones() {
        try {
            $conexion = parent::conectar();
            $query = "SELECT * FROM acumuladocomisiones_habitta";
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
