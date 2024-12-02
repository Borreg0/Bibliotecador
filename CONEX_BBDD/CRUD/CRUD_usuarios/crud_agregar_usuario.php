<?php
$dir_html = '../../../';
//include $dir_html . 'MODELOS/USUARIOS/Usuario.php';
include $dir_html . 'MODELOS/USUARIOS/UsuarioDAO.php';

session_start(); // Iniciar la sesión



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar el formulario de agregar usuario

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

    $usuario = new Usuario(null, $nombre, $email, $contrasena, $rol);
    $usuarioDAO->crearUsuario($usuario);

    $_SESSION['mensaje'] = "El usuario ha sido agregado correctamente.";

    header("Location: "."../../../web/principal.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Usuario</title>
</head>
<body>
    <h1>Agregar Usuario</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nombre: <input type="text" name="nombre" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Contraseña: <input type="password" name="contrasena" required><br><br>
        Rol:
        <select name="rol">
            <option value="0">Usuario</option>
            <option value="1">Administrador</option>
        </select><br><br>
        <input type="submit" value="Agregar">
    </form>
</body>
</html>
