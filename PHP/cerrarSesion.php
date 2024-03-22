<?php
session_start(); // Inicia la sesión (si aún no está iniciada)

// Unset: Elimina todas las variables de sesión
$_SESSION = array();

// Si deseas eliminar la cookie de sesión también (opcional):
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
}

// Finalmente, destruye la sesión
session_destroy();

header('location: ../index.php');
