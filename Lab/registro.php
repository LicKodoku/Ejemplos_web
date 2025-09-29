<?php
	//Declara las variables de los campos a ingresar
$no_cuenta = $_POST["no_cuenta"];
$nombre = $_POST["nombre"];
$apat = $_POST["apat"];
$amat = $_POST["amat"];
$edad = $_POST["edad"];
$materia = $_POST["materia"];
$turno = $_POST["turno"];
$comentarios = $_POST["comentarios"];
	//Revisa que no se envíen los campos en blanco para ingresar las variables en la consulta
	if(!empty($no_cuenta) && !empty($nombre) && !empty($apat) && !empty($amat) && !empty($edad) && !empty($materia) && !empty($turno) && !empty($comentarios))
	{
	//Ingresa el archivo de conexión SQL a este archivo
	   include "conexion.php";//se establece la conexion dentro de la variable $conectar
	//Ejecucion de la sentencia SQL
	//crea una variable compuesta por los campos guardados en las variables declaras al comienzo para realizr la consulta
           $consulta="insert into alumnos(no_cuenta, nombre, ap_Pat, ap_Mat, edad, materia, turno, comentarios) values ('$no_cuenta','$nombre','$apat','$amat','$edad','$materia','$turno','$comentarios')";
   //Ingresa la variable de la consulta a una variable existente en el archio de conexión SQL       
	   $conectar->query($consulta);
   //Si se guardó correctamente se mostrará estos mensajes
	   echo "El registro fue insertado correctamente <BR>";
	   echo "<a href=\"index.html\">Pagina Principal</a>";

	}else {
	//De no ingresar correctamente se mostrará estos mensajes
	   echo "ingresa todos los datos por favor";
	   echo "<a href=\"index.html\">Pagina Principal</a>";

	}
?>