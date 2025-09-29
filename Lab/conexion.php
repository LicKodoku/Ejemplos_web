<?php
//Ingresa los datos necesarios para realizar una conexión a base de datos
$host="localhost"; //en todos los casos debe ser localhost
$usuario="root";//usuario de la base de datos
$password="";//password si lo tiene y si no es vacio
$basedatos="datos";//base de datos a utilizar
/***********************************
establece la conexion 
***********************************/
//Se busca la conexión por medio de las variables declaradas al comienzo
$conectar= new mysqli($host,$usuario,$password,$basedatos);
//evalua si se estabeció la conexion
if($conectar->connect_error)
{
  //Se muestra este mensaje si no realiza la conexión a la base de datos
  echo "Error en la conexion";
}

else {
  //Muestra este mensaje si no realiza la coneión correctamente a la base de datos
echo "conexion exitosa!!!";
}
/*$conectar->close(); 
la conexion debe permanecer abierta para las opciones de index.html*/
?>n