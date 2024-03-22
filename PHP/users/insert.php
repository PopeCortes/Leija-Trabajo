<?php

require '../../db/connect.php';
session_start();

if (isset($_POST['btnInsert'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $fecha = date('Y-m-d');

    $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);


    if ($hashedPassword) {


        $sql = "INSERT INTO user2024rl(nombre, apellido, correo, password, fecha) VALUES(:nombre, :apellido, :email, :pass, :fecha)";
        $sql = $connect->prepare($sql);
        $sql->bindParam(':nombre', $nombre);
        $sql->bindParam(':apellido', $apellido);
        $sql->bindParam(':email', $email);
        $sql->bindParam(':pass', $hashedPassword);
        $sql->bindParam(':fecha', $fecha); 

        if ($sql->execute()) {


       $_SESSION['nombre'] = $nombre;
       $_SESSION['apellido'] = $apellido;
       $_SESSION['email'] = $email;



       header('location: ../../index.php');
    } else {
            header('location: ../../error');
        }
    }else{
        echo 'El password no se encuentra';
    }
} else {
    header('location: ../../error');

}



