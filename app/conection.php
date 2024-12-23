<?php
// Configuración de la base de datos
$host = 'localhost';  // Cambia por el host de tu base de datos
$usuario = 'root';    // Cambia por tu usuario de MySQL
$password = '';       // Cambia por tu contraseña de MySQL
$baseDeDatos = 'MiPrincesa'; // Cambia por el nombre de tu base de datos

// Crear conexión
$conexion = new mysqli($host, $usuario, $password, $baseDeDatos);

// Verificar la conexión
if ($conexion->connect_error) {
    die('Error en la conexión: ' . $conexion->connect_error);
}

// Cerrar la conexión (opcional, se cerrará automáticamente al finalizar el script)
$conexion->close();
?>