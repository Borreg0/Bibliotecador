<?php
session_start(); // Iniciar la sesión

$dir_html = '../../../';

include $dir_html . 'MODELOS/LIBROS/LibroDAO.php';


if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['libro_id'])) {
    $libro_id = $_GET['libro_id'];
    
    $libroDAO = new LibroDAO();
    $libroDAO->eliminarLibro($libro_id);

    $_SESSION['mensaje'] = "El libro ha sido eliminado correctamente.";

    header("Location: "."../../../web/libros_principal.php");
    exit();
} else {
    // Si no se proporciona un ID, redirigir a la página principal
    header("Location: "."../../../web/libros_principal.php");
    exit();
}
?>