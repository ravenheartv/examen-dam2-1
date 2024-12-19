<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    // Obtener datos del usuario
    parse_str(file_get_contents("php://input"), $data);
    $id = $data['id'];

    // Eliminar usuario
    $sql = "DELETE FROM users WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario eliminado exitosamente";
    } else {
        echo "Error al eliminar usuario: " . $conn->error;
    }
}

$conn->close();
?>
