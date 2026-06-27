<?php
/*===================================================================
Justicia para Todos - Taller de Integración de Software
Autor: JParadha
Fecha: 27/06/2026
Archivo: procesar.php
Descripcion: Controlador encargado de Insertar, Modificar y Eliminar
             validando los datos del lado del servidor.
===================================================================*/


// CONEXION A LA BASE DE DATOS

require_once 'conexion.php';

//Capturar los datos del formulario
$rut = $_POST['rut'];
$dv = $_POST['dv'];

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

$email = $_POST['email'];
$telefono = $_POST['telefono'];

$pais = $_POST['pais'];
$calle = $_POST['calle'];
$numero = $_POST['numero'];
$depto = $_POST['depto-casa'];
$codigo_postal = $_POST['codigo_postal'];

$num_caso = $_POST['num_caso'];
$desc_caso = $_POST['desc_caso'];
$fecha_inicio = $_POST['fecha_inicio'];
$estado_caso = $_POST['estado_caso'];
$desc_sentencia = $_POST['desc_sentencia'];
$fecha_cierre = $_POST['fecha_cierre'];

// Validar campos opcionales
if ($desc_sentencia == "") {
    $desc_sentencia = NULL;
}

if ($fecha_cierre == "") {
    $fecha_cierre = NULL;
}

// Insertar Cliente
$sqlCliente ="INSERT INTO clientes"
(rut, dv, nombre, apellido, email, telefono, pais, calle, numero, depto_casa, codigo_postal)

VALUES
($rut, $dv, $nombre, $apellido, $email, $telefono, $pais, $calle, $numero, $depto, $codigo_postal)";

// Ejecutar la consulta
if(mysqli_query($conn,$sqlCliente)){

    //==================================================
    // Insertar Caso Judicial
    //==================================================

    $sqlCaso = "INSERT INTO casos

    (num_caso,
    rut_cliente,
    desc_caso,
    fecha_inicio,
    estado_caso,
    desc_sentencia,
    fecha_cierre)

    VALUES

    ('$num_caso',
    '$rut',
    '$desc_caso',
    '$fecha_inicio',
    '$estado_caso',
    '$desc_sentencia',
    '$fecha_cierre')";


    if(mysqli_query($conn,$sqlCaso)){

        echo "<h2>Registro realizado correctamente.</h2>";
        echo "<p>El cliente y su caso judicial fueron almacenados en la base de datos.</p>";

    }else{

        echo "<h2>Error al registrar el caso.</h2>";
        echo mysqli_error($conn);

    }

}else{

    echo "<h2>Error al registrar el cliente.</h2>";
    echo mysqli_error($conn);

}        

// Cerrar conexion
mysqli_close($conn);
?>