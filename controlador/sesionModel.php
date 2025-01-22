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

    function verificar($usuario, $password){
        try {
            $conn = conectar(); // Conexión a la base de datos

            $sql = "SELECT * FROM usuarios WHERE usuario = :usuario"; // Sentencia SQL
            $stmt = $conn->prepare($sql); // Preparar la sentencia
            $stmt->bindParam(':usuario', $usuario); // Asignamos un valor a cada parametro
            $stmt->execute(); // Ejecutar la sentencia

            $result = $stmt->fetch(PDO::FETCH_ASSOC); // Obtener el resultado de la consulta

            if ($result != null) {
                if (password_verify($password, $result['password'])) {
                    return $result;
                } else {
                    return null;
                }
            } else {
                return null;
            }
        } catch (PDOException $e) {
            //echo "Error: " . $e->getMessage();
            return null;
        }
    }
?>
