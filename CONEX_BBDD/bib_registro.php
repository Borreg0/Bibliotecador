<?php

include "../MODELOS/USUARIOS/UsuarioDAO.php";
//include "../MODELOS/USUARIOS/Usuario.php";
$usuarioDAO = new UsuarioDAO();

//Recibimos los datos de los formularios

$username = $_POST['username']; //lo que va entre comillas es lo que tenemos en el input de la etiqueta en el html como id, 
                                //en este caso "username"
$password = $_POST['password'];
$email = $_POST['email'];

//COMPROBAR QUE EMAIL NO EXISTEN YA

//Encriptamos la contraseña, usamos la funcion password_hash() de PHP

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// $sql = "INSERT INTO usuarios (nombre,email,contrasena) VALUES ('$username','$email','$hashed_password')";

$usuarioDAO->crearUsuario(new Usuario(null, $username, $email, $hashed_password, 0));


header('Location: '.'../web/login.php');
     $conn->close();
     die("Registro exitoso");

?>