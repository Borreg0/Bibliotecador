<?php
$dir_html = '../../../';

include $dir_html . 'MODELOS/LIBROS/LibroDAO.php';

session_start(); // Iniciar la sesión

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['libro_id'])) {
    $libro_id = $_GET['libro_id'];
    $libroDAO = new LibroDAO();
    $libro = $libroDAO->obtenerLibroPorId($libro_id);

    if (!$libro) {
        // Si no se encuentra el libro, redirigir a la página principal
        header("Location: " . "../../../web/libros_principal.php");
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar el formulario de agregar libro

    $libro_id = $_POST['libro_id'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $estado = $_POST['estado'];

    $LibroDAO = new LibroDAO();

    // Creamos la sanitización de datos para prevenir ataques de inyección SQL
    $conexion = $LibroDAO->getConexion();
    $libro_id = mysqli_real_escape_string($conexion, $libro_id);
    $titulo = mysqli_real_escape_string($conexion, $titulo);
    $autor =  mysqli_real_escape_string($conexion, $autor);
    $estado = mysqli_real_escape_string($conexion, $estado);

    $libro = new Libro($libro_id, $titulo, $autor, $estado);
    $LibroDAO->actualizarLibro($libro);

    $_SESSION['mensaje'] = "El libro ha sido agregado correctamente.";

    header("Location: " . "../../../web/libros_principal.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="CRUD_JS/libro.js"></script>
    <link rel="shortcut icon" href="../logo/favicon-copia.png" type="image/x-icon">
    <title>Editar Libro</title>
</head>

<body>
    <h1>Editar Libro</h1>
    <form method="POST" id="formulario" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="hidden" name="libro_id" value="<?php echo $libro->libro_id; ?>">
        Titulo: <input type="text" id="titulo" name="titulo" value="<?php echo $libro->titulo; ?>"><br><br>
        Autor: <input type="text" id="autor" name="autor" value="<?php echo $libro->autor; ?>"><br><br>
        Estado:
        <select name="estado">
            <option value="Leído" <?php echo ($libro->estado == 'Leído') ? 'selected' : ''; ?>>Leído</option>
            <option value="Leyendo" <?php echo ($libro->estado == 'Leyendo') ? 'selected' : ''; ?>>Leyendo</option>
            <option value="Pendiente" <?php echo ($libro->estado == 'Pendiente') ? 'selected' : ''; ?>>Pendiente</option>
        </select><br><br>
        <input type="submit" value="Actualizar">
    </form>
    <div class="">
        <p class="mb-0 pt-3" style="background-color: rgba(87,59,42, .0);"><a href="../../../web/libros_principal.php" class="text-white-50 fw-bold">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0z" />
                    <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708z" />
                </svg>
                Volver
            </a>
        </p>
    </div>
</body>
</html>