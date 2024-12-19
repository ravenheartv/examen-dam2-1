<?php
$conn = new mysqli('db', 'root', 'root', 'examen');
$result = $conn->query("SELECT * FROM users");
while ($row = $result->fetch_assoc()) {
    echo "<p>ID: {$row['id']} - Name: {$row['name']}</p>";
}
?>