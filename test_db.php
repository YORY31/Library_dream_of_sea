<?php
require 'config/db.php';

try {
    $query = $conn->query("SELECT 1");
    echo " Conexion exitosa a la base de datos.";
} catch (PDOException $e) {
    echo " Error de conexión: " . $e->getMessage();
}
?>
