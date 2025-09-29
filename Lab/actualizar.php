<HTML>
<HEAD>
<TITLE>ACTUALIZAR REGISTRO</TITLE>
</HEAD>
<BODY>
<?php
include "conexion.php";
$cta = $_POST["nocta"];
$nombre = $_POST["nombre"];
$paterno = $_POST["apat"];
$materno = $_POST["amat"];
//creamos la sentencia y la ejecutamos
$consulta="update alumnos set nombre = '$nombre', apat = '$paterno', amat = '$materno' where nocta= '$cta'";
$conectar->query($consulta);
?>

<h1><div align="center">Registro Actualizado</div></h1>
<div align="center"><a href="index.html">Pagina Principal</a></div>

</BODY>
</HTML>