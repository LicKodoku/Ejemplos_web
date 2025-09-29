<?php
$host = "localhost";
$user = "root";
$db = "PersonajeAnime";
$psw = "";

$mysqli = new mysqli($host,$user,$psw,$db);

if($mysqli->connect_error){
    die('Error en la conexion'.$mysqli->connection_error); 
}
?>