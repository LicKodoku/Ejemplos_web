<?php
    $host = 'localhost';
    $usuario = 'root';
    $password = '';
    $db = 'personas';


    $mysqli = new mysqli($host, $usuario, $password, $db);
    
    if($mysqli->connect_error){
        
        die('Error en la conexion' . $mysqli->connect_error);   
    }else
		echo('conexion exitosa');
?>
