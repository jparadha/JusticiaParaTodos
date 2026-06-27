<?php
/*===================================================================
Justicia para Todos
Taller de Integración de Software

Autor: JParadha
Fecha: 26/06/2026
Archivo: conexion.php
Descripcion: Script de conexión orientado a objetos para enlazar
             el formulario web con la base de datos MySQL.
===================================================================*/
// Datos del servidor MySQL
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "justicia_todos";


// Crear la conexión
$conn = mysqli_connect(
    $servidor,
    $usuario,
    $contrasena,
    $base_datos
);


// Verificar si la conexión fue exitosa
if (!$conn) {

    die("Error de conexión: " . mysqli_connect_error());

}

echo "¡Conexión exitosa a la base de datos!";
?>