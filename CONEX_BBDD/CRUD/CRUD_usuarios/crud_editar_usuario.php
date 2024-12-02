<?php
$dir_html = '../../../';
//include $dir_html . 'MODELOS/USUARIOS/Usuario.php';
include $dir_html . 'MODELOS/USUARIOS/UsuarioDAO.php';

session_start(); // Iniciar la sesión

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    $usuarioDAO = new UsuarioDAO();
    $usuario = $usuarioDAO->obtenerUsuarioPorId($id);    

    if (!$usuario) {
        // Si no se encuentra el usuario, redirigir a la página principal
        header("Location: "."../../../web/principal.php");
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar el formulario de edición de usuario

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $rol = $_POST['rol'];

    $usuarioDAO = new UsuarioDAO();

    // Creamos la sanitización de datos para prevenir ataques de inyección SQL
    $conexion = $usuarioDAO->getConexion();
    $nombre = mysqli_real_escape_string($conexion, $nombre);
    $email = mysqli_real_escape_string($conexion, $email);
    $contrasena =  mysqli_real_escape_string($conexion, $contrasena);
    $rol = mysqli_real_escape_string($conexion, $rol);

    $contrasena = password_hash($contrasena, PASSWORD_DEFAULT);
    
    $usuario = new Usuario($id, $nombre, $email, $contrasena, $rol);
    $usuarioDAO->actualizarUsuario($usuario);

    $_SESSION['mensaje'] = "El usuario ha sido actualizado correctamente.";

    header("Location: "."../../../web/principal.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="hidden" name="id" value="<?php echo $usuario->id; ?>">
        Nombre: <input type="text" name="nombre" value="<?php echo $usuario->nombre; ?>" required><br><br>
        Email: <input type="email" name="email" value="<?php echo $usuario->email; ?>" required><br><br>
        Contraseña: <input type="password" name="contrasena" value="<?php echo $usuario->contrasena; ?>" required><br><br>
        Rol:
        <select name="rol">
            <option value="0" <?php echo ($usuario->admin == 'usuario') ? 'selected' : ''; ?>>Usuario</option>
            <option value="1" <?php echo ($usuario->admin == 'administrador') ? 'selected' : ''; ?>>Administrador</option>
        </select><br><br>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>

