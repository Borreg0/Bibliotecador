<?php
class Database {
    private static $instance = null;
    private $conn;

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "bibliotecador";

    public static $table_prefix = ""; // Prefijo 
    

    private function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password);

        // Verificar la conexión
        if ($this->conn->connect_error) {
            die("Conexión fallida: " . $this->conn->connect_error);
        }

        $this->conn->select_db($this->dbname);


    }

    // public function aplicarMigraciones() {
    //     // Crear la tabla de migraciones si no existe
    //     $sql = "CREATE TABLE IF NOT EXISTS " . self::$table_prefix . "migraciones (
    //         id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //         nombre VARCHAR(200) NOT NULL
    //     )";
    //     $this->conn->query($sql);
    //     // Consultar la tabla de control de versiones para obtener los scripts aplicados
    //     $query = "SELECT nombre FROM " . self::$table_prefix . "migraciones";
    //     $result = $this->conn->query($query);
        
    //     $scriptsAplicados = [];
    //     while ($row = $result->fetch_assoc()) {
    //         $scriptsAplicados[] = $row['nombre'];
    //     }

    //     // Obtener la lista de scripts de migración disponibles
    //     $scriptsDisponibles = array_diff(scandir($this->migracionesDirectorio), ['.', '..']);

    //     $mensaje = "";
    //     // Aplicar los scripts de migración que aún no se han ejecutado
    //     foreach ($scriptsDisponibles as $script) {
    //         if (!in_array($script, $scriptsAplicados)) {
    //             $sql = file_get_contents("$this->migracionesDirectorio/$script");
    //             $sql = str_replace('<prefijo>', self::$table_prefix, $sql);
    //             $this->conn->multi_query($sql);
    //             while ($this->conn->next_result()); // <--- solves the problem
    //             // Registrar el script en la tabla de control de versiones como aplicado
    //             $query = "INSERT INTO " . self::$table_prefix . "migraciones (nombre) VALUES ('$script')";
    //             $this->conn->query($query);
    //             $mensaje = $mensaje . "Se aplicó la migración: $script\n";
    //         }
    //     }
    //     $_SESSION['mensaje'] = $mensaje;
    // }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->conn;
    }
}
?>
