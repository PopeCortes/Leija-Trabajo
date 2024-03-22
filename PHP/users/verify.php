<?php
include '../../db/connect.php';
session_start(); // Iniciar la sesión

if (isset($_POST['email']) && isset($_POST['pass'])) {
    $correo = $_POST['email'];
    $password = $_POST['pass'];

    // Realiza una consulta para obtener el registro con el correo proporcionado
    $consulta = $connect->prepare("SELECT id, nombre, privilegio, correo, password FROM user2024rl WHERE correo = :correo");
    $consulta->bindParam(':correo', $correo);

    if ($consulta->execute()) {
        $usuario = $consulta->fetch(PDO::FETCH_ASSOC);

        if ($usuario) {
            // Se encontró un usuario con el correo proporcionado
            $hashAlmacenado = $usuario['password'];

            // Verificar la contraseña
            if (password_verify($password, $hashAlmacenado)) {
                // La contraseña es válida

                // Configurar la sesión con los datos del usuario
                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nombre'] = $usuario['nombre'];
                $_SESSION['privilegio'] = $usuario['privilegio'];


                if ($_SESSION['privilegio'] === 'admin') {
                    header("location: http://localhost/Trabajo/Admin-Leija-web/productos.php");
                } else if ($_SESSION['privilegio'] === 'usuario') {
                    header("location: ../../index.php");
                } else {
                    header("../../error");
                }
                
            } else {
                header("../../error");
            }
            
        } else {
            // No se encontró ningún usuario con el correo proporcionado
            echo 'Usuario no encontrado';
        }
    } else {
        // Error en la ejecución de la consulta
        echo 'Error en la consulta';
    }
} else {
    echo "Error en la consulta";
}
