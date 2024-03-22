<?php
$host = 'localhost'; 
// $dbname = 'proyect_leija'; 
$dbname = 'leija_web'; 
$username = 'root'; 
$password = ''; 

try {
    $connect = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Conexión exitosa";
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
