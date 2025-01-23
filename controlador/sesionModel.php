<?php
    include_once ('conexion.php');

    function registro($nombres, $apellidos, $gmail, $usuario, $password) {
        try {
            $conn = conectar(); // Conexión a la base de datos
            
            $sql = "INSERT INTO usuarios(nombres, apellidos, gmail, usuario, password)
                    VALUES (:nombres, :apellidos, :gmail, :usuario, :password)"; // Sentencia SQL

            $stmt = $conn->prepare($sql); // Preparar la sentencia
            $stmt->bindParam(':nombres', $nombres); 
            $stmt->bindParam(':apellidos', $apellidos); 
            $stmt->bindParam(':gmail', $gmail);
            $stmt->bindParam(':usuario', $usuario); // Asignamos un valor a cada parametro
            $stmt->bindParam(':password', password_hash($password, PASSWORD_BCRYPT));
            $stmt->execute(); // Ejecutar la sentencia

            return $conn->lastInsertId(); // Devuelve el ID del último registro insertado

        } catch (PDOException $e) {
            //echo "Error: " . $e->getMessage();
            return null;
        }
    }

    function datosRepetidos($gmail, $usuario){
        try {
            $conn = conectar(); // Conexión a la base de datos

            $sql = "SELECT * FROM usuarios WHERE gmail = :gmail OR usuario = :usuario"; // Sentencia SQL
            $stmt = $conn->prepare($sql); // Preparar la sentencia
            $stmt->bindParam(':gmail', $gmail); // Asignamos un valor a cada parametro
            $stmt->bindParam(':usuario', $usuario);
            $stmt->execute(); // Ejecutar la sentencia

            return $stmt->rowCount() > 0; // Devolver verdadero si el número de filas es mayor a 0 

        } catch (PDOException $e) {
            //echo "Error: " . $e->getMessage();
            return null;
        }
    }

    function verificar($usuario, $password){
        try {
            $conn = conectar(); // Conexión a la base de datos

            $sql = "SELECT * FROM usuarios WHERE usuario = :usuario"; // Sentencia SQL
            $stmt = $conn->prepare($sql); // Preparar la sentencia
            $stmt->bindParam(':usuario', $usuario); // Asignamos un valor a cada parametro
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