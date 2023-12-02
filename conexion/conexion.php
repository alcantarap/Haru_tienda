-- Active: 1701484213106@@127.0.0.1@3305@haru_tienda
<?php
$servername = "localhost";  // Cambia a la dirección de tu servidor MySQL
$username = "root";
$password = "admin";
$database = "haru_store";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa";
?>
