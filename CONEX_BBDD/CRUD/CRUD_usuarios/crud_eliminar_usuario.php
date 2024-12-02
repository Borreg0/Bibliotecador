<?php
session_start(); // Iniciar la sesión

include 'C:\xampp\htdocs\biblioteca\MODELOS\USUARIOS\UsuarioDAO.php';


if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $usuarioDAO = new UsuarioDAO();
    $usuarioDAO->eliminarUsuario($id);

    $_SESSION['mensaje'] = "El usuario ha sido eliminado correctamente.";

    header("Location: "."../../../web/principal.php");
    exit();
} else {
    // Si no se proporciona un ID, redirigir a la página principal
    header("Location: "."../../../web/principal.php");
    exit();
}
?>