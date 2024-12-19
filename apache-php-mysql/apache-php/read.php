<?php
include 'db.php';

$sql = "SELECT id, name, password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los usuarios
    $users = [];
    while($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
    echo json_encode($users);
} else {
    echo "0 resultados";
}

$conn->close();
?>
