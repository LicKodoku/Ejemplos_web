<?php
require_once "conexion.php"; // Asegúrate de que este archivo conecta a la BD

// Recibir las variables del formulario
$nombre_cliente = $_POST['nombre_cliente'];
$proyecto = $_POST['proyecto'];
$descripcion = $_POST['descripcion'];
$costo = $_POST['costo'];

// Consulta SQL con placeholders
$sql = "INSERT INTO Registros (nombre_cliente, proyecto, descripcion, costo) 
        VALUES (?, ?, ?, ?)";

// Preparar la consulta
$stmt = mysqli_prepare($conexion, $sql);

// Vincular los parámetros
mysqli_stmt_bind_param($stmt, "sssd", $nombre_cliente, $proyecto, $descripcion, $costo);

// Ejecutar la consulta
$result = mysqli_stmt_execute($stmt);

// Retornar el resultado (1 si es exitoso, 0 si falla)
echo $result ? 1 : 0;

// Cerrar la consulta preparada
mysqli_stmt_close($stmt);
mysqli_close($conexion); // Cerrar la conexión
?>