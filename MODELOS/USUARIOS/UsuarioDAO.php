<?php
include $_SERVER['DOCUMENT_ROOT'].'/biblioteca/CONEX_BBDD/CRUD/base_datos.php';
include 'Usuario.php';

class UsuarioDAO {
    private $conn;

    public function __construct() {
    $db = Database::getInstance();
    $this->conn = $db->getConnection();
    }

    public function getConexion(){
    return $this->conn;
    }

    public function crearUsuario($usuario) {
        $nombre = $usuario->nombre;
        $email = $usuario->email;
        $contrasena = $usuario->contrasena;
        $admin = $usuario->admin;

        $sql = "INSERT INTO " . Database::$table_prefix . "usuarios (nombre, email, contrasena, admin) VALUES ('$nombre', '$email', '$contrasena', '$admin')";
        $this->conn->query($sql);
    }

    public function obtenerUsuarios() {
        $usuarios = [];

        $sql = "SELECT * FROM " . Database::$table_prefix . "usuarios";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $usuario = new Usuario($row["id"], $row["nombre"], $row["email"], $row["contrasena"], $row["admin"]);
                $usuarios[] = $usuario;
            }
        }

        return $usuarios;
    }

    public function obtenerUsuarioPorId($id) {
        $sql = "SELECT * FROM " . Database::$table_prefix . "usuarios WHERE id=$id";
        $result = $this->conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $usuario = new Usuario($row["id"], $row["nombre"], $row["email"], $row["contrasena"], $row["admin"]);
            return $usuario;
        }

        return null;
    }

    public function obtenerUsuarioPorEmail($email) {
        $sql = "SELECT * FROM " . Database::$table_prefix . "usuarios WHERE email='$email'";
        $result = $this->conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $usuario = new Usuario($row["id"], $row["nombre"], $row["email"], $row["contrasena"], $row["admin"]);
            return $usuario;
        }

        return null;
    }

    public function actualizarUsuario($usuario) {
        $id = $usuario->id;
        $nombre = $usuario->nombre;
        $email = $usuario->email;
        $contrasena = $usuario->contrasena;
        $admin = $usuario->admin;

        $sql = "UPDATE " . Database::$table_prefix . "usuarios SET nombre='$nombre', email='$email', contrasena='$contrasena', admin='$admin' WHERE id=$id";
        $this->conn->query($sql);
    }

    public function eliminarUsuario($id) {
        $sql = "DELETE FROM " . Database::$table_prefix . "usuarios WHERE id=$id";
        $this->conn->query($sql);
    }
}
?>
