<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "bibliotecador";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión errónea: " . $conn->connect_error);
}


$sql = "SELECT * FROM libros WHERE usuario_id=".$_SESSION['user']['id'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $datos = array();
    while ($row = $result->fetch_assoc()) {
        $datos[] = $row;
    }
}else{
    echo "No se encontraron resultados: ";
}
$conn->close();
?>