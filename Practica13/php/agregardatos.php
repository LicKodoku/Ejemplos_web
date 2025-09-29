<?php
require_once "conexion.php";

$conexion = conexion(); 

// Recibir las variables del formulario
$nombre = $_POST['nombre'];
$area = $_POST['area'];
$sexo = $_POST['sexo'];
$correo = $_POST['correo'];

// Consulta para insertar los datos
$sql = "INSERT INTO Registros(nombre, area, sexo, correo) 
        VALUES('$nombre', '$area', '$sexo', '$correo')";

// Ejecutar la consulta y retornar el resultado
$result = mysqli_query($conexion, $sql); 
echo $result;  // Devuelve 1 si la inserción fue exitosa, 0 si falló
?>
