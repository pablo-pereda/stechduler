<?php

// Datos de conexión a la base de datos
$servername = "localhost"; // La dirección del servidor MySQL (puede variar)
$username = "c0510310_techd"; // Tu nombre de usuario de MySQL
$password = "pxsgjqeaa1Uwfvg"; // Tu contraseña de MySQL
$database = "c0510310_techd"; // El nombre de tu base de datos MySQL

// Intenta establecer la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
} else {
    echo "¡Conexión exitosa a la base de datos!";
}

// Cierra la conexión
$conn->close();
?>
