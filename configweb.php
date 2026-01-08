<?php
$dbhost = "sql105.infinityfree.com"; // Host del MySQL
$dbuser = "if0_36978132"; // Usuario del MySQL
$dbpass = "T3MPL3666"; // Password del MySQL
$db = "if0_36978132_urbe"; // Base de datos donde se creará la tabla users

// Conectamos y seleccionamos la base de datos usando mysqli
$connection = new mysqli($dbhost, $dbuser, $dbpass, $db);

// Verificamos si la conexión fue exitosa
if ($connection->connect_error) {
    die("Error de conexión: " . $connection->connect_error);
}

// Comenzamos la sesión, esto se explica después en el sistema de login
session_start();
?>