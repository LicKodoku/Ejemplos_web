<?php
function conexion(){
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $bd = "datos2"; // Asegúrate de que el nombre de la base de datos sea correcto

    // Crear la conexión
    $conexion = mysqli_connect($servidor, $usuario, $password, $bd);

    // Verificar si la conexión fue exitosa
    if(!$conexion){
        die("Conexión fallida: " . mysqli_connect_error());
    }
    return $conexion;
}
?>
