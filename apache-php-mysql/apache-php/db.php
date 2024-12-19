<?php
$servername = "db";
$username = "root";
$password = "rootpassword";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
