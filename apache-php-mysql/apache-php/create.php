<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Insertar usuario
    $sql = "INSERT INTO users (name, password) VALUES ('$name', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo usuario creado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
