<?php
$conn = new mysqli('db', 'root', 'root', 'examen');
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa a la base de datos.";
?>