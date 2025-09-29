<?php
require_once "conexion.php"; // Asegúrate de que este archivo conecta a la BD

$nombre = $_POST['nombre'];
$area = $_POST['area'];
$sexo = $_POST['sexo'];
$correo = $_POST['correo'];

$sql = "INSERT INTO tu_tabla (nombre, area, sexo, correo) VALUES ('$nombre', '$area', '$sexo', '$correo')";
echo mysqli_query($conexion, $sql) ? 1 : 0;
?>
