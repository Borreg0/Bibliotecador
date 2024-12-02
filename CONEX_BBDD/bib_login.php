<?php session_start();  


include "../MODELOS/USUARIOS/UsuarioDAO.php";
$usuarioDAO = new UsuarioDAO();

//RECIBIMOS DATOS DEL FORMULARIO
$email = $_POST['email']; //lo que va entre comillas es lo que tenemos en el input de la etiqueta en el html como id, en este caso "username"
$password = $_POST['password'];



$usuario = $usuarioDAO -> obtenerUsuarioPorEmail($email);

    
    //comprobamos si la contraseña coincide con la que tenemos almacenada
    if(password_verify($password,$usuario->contrasena)){
        $_SESSION['user'] = (array) $usuario;
        if($_SESSION['user']['admin'] == 1){
            header("Location: ../web/principal.php");
            $conn->close();
            exit();
        }else{header("Location: ../web/libros_principal.php");
        $conn->close();
        exit();}
        
    }else{
        
        header("Location: ../web/login.php");
        $conn->close();
        die("Contraseña incorrecta");
        
    }



?>