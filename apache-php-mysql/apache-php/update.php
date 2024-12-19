<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "PUT") {
    // Obtener los datos del cuerpo de la solicitud (POSTMAN, fetch, etc.)
    parse_str(file_get_contents("php://input"), $data);

    $id = $data['id'];
    $name = $data['name'];
    $password = $data['password'];

    // Actualizar usuario
    $sql = "UPDATE users SET name='$name', password='$password' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario actualizado exitosamente";
    } else {
        echo "Error al actualizar usuario: " . $conn->error;
    }
}

$conn->close();
?>
