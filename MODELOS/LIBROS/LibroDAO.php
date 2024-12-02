<?php
include $_SERVER['DOCUMENT_ROOT'] . '/biblioteca/CONEX_BBDD/CRUD/base_datos.php';
include 'Libro.php';
//include '../USUARIOS/UsuarioDAO.php';

class LibroDAO
{
    private $conn;

    public function __construct()
    {
        $db = Database::getInstance();
        $this->conn = $db->getConnection();
    }

    public function getConexion()
    {
        return $this->conn;
    }

    public function crearLibro($libro)
    {

        $usuario_id = $_SESSION['user']['id'];

        $libro_id = $libro->libro_id;
        $titulo = $libro->titulo;
        $autor = $libro->autor;
        $estado = $libro->estado;

        $sql = "INSERT INTO " . Database::$table_prefix . "libros (libro_id, titulo, autor, estado, usuario_id) VALUES ('$libro_id', '$titulo', '$autor', '$estado', '$usuario_id')";
        $this->conn->query($sql);
    }

    public function obtenerLibros()
    {
        $libros = [];

        $sql = "SELECT * FROM " . Database::$table_prefix . "libros";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $libro = new Libro($row["libro_id"], $row["titulo"], $row["autor"], $row["estado"]);
                $libros[] = $libro;
            }
        }

        return $libros;
    }

    public function obtenerLibroPorId($libro_id)
    {
        $sql = "SELECT * FROM " . Database::$table_prefix . "libros WHERE libro_id=$libro_id";
        $result = $this->conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $libro = new Libro($row["libro_id"], $row["titulo"], $row["autor"], $row["estado"]);
            return $libro;
        }

        return null;
    }

    public function obtenerLibroPorEstado($estado)
    {

        $usuario_id = $_SESSION['user']['id'];

        $libros = [];

        $sql = "SELECT * FROM libros WHERE estado='$estado' AND usuario_id='$usuario_id'";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $libro = new Libro($row["libro_id"], $row["titulo"], $row["autor"], $row["estado"]);
                $libros[] = $libro;
            }
        }

        return $libros;
    }

    public function actualizarLibro($libro)
    {
        $libro_id = $libro->libro_id;
        $titulo = $libro->titulo;
        $autor = $libro->autor;
        $estado = $libro->estado;

        $sql = "UPDATE libros SET libro_id='$libro_id', titulo='$titulo', autor='$autor', estado='$estado' WHERE libro_id=$libro_id";
        $this->conn->query($sql);
    }

    public function eliminarLibro($libro_id)
    {

        $sql = "DELETE FROM libros WHERE libro_id=$libro_id";
        $this->conn->query($sql);
    }
}
