<?php
    include_once ('../php/conexion.php');

    function registro($nombre_apellido, $gmail, $password){
        try {
            $conn = conectar(); // Conexión a la base de datos
            $sql = "INSERT INTO usuarios (nombre_apellido, gmail, password) 
            VALUES (:nombre_apellido, :gmail, :password)"; // Sentencia SQL

            $stmt = $conn->prepare($sql); // Preparar la sentencia
            $stmt->bindParam(':nombre_apellido', $nombre_apellido); 
            $stmt->bindParam(':gmail', $gmail);
            $stmt->bindParam(':password', password_hash($password, PASSWORD_BCRYPT));
            $stmt->execute(); // Ejecutar la sentencia

            return $conn->lastInsertId(); // Devuelve el ID del último registro insertado

        } catch (PDOException $e) {
            //echo "Error: " . $e->getMessage();
            return null;
        }
    }

    function datosRepetidos($nombre_apellido, $gmail){
        try {
            $conn = conectar(); // Conexión a la base de datos

            $sql = "SELECT * FROM usuarios WHERE nombre_apellido = :nombre_apellido OR gmail = :gmail"; // Sentencia SQL
            $stmt = $conn->prepare($sql); // Preparar la sentencia
            $stmt->bindParam(':nombre_apellido', $nombre_apellido);
            $stmt->bindParam(':gmail', $gmail); // Asignamos un valor a cada parametro
            $stmt->execute(); // Ejecutar la sentencia

            return $stmt->rowCount() > 0; // Devolver verdadero si el número de filas es mayor a 0 

        } catch (PDOException $e) {
            //echo "Error: " . $e->getMessage();
            return null;
        }
    }

    function verificar($nombre_apellido, $password){
        try {
            $conn = conectar(); // Conexión a la base de datos

            $sql = "SELECT * FROM usuarios WHERE nombre_apellido = :nombre_apellido"; // Sentencia SQL
            $stmt = $conn->prepare($sql); // Preparar la sentencia
            $stmt->bindParam(':nombre_apellido', $nombre_apellido); // Asignamos un valor a cada parametro
            $stmt->execute(); // Ejecutar la sentencia

            $result = $stmt->fetch(PDO::FETCH_ASSOC); // Obtener el resultado de la consulta

            if ($result != null) { // Si el resultado es diferente de nulo
                if (password_verify($password, $result['password'])) { // Verificar la contraseña
                    return $result; // Devolver el resultado
                } else {
                    return null; // Devolver nulo
                }
            } else {
                return null; // Devolver nulo
            }
        } catch (PDOException $e) { // Capturar excepciones
            //echo "Error: " . $e->getMessage(); // Mostrar mensaje de error
            return null; // Devolver nulo
        }
    }
?>