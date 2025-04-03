<?php
$host = "localhost";
$dbname = "libreria";
$username = "root";
$password = ""; // En XAMPP, por defecto la contraseña está vacía

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
