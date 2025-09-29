<HTML>
<TITLE>Manipulando una BD</TITLE>
<h1>
<CENTER>
Datos del Alumno
</h1>
</CENTER>
<BR>
<center>
    <!-- Se crea la tabla donde se ingresarán los datos-->
<table border="1">
  <tr bgcolor="#336699" style="color:#FF6";><td>No. Cuenta</td><td>Nombre</td><td>Edad</td><td>Materia</td><td>Turno</td><td>Comentarios</td></tr>
<?php
    //Se agrega el numero de cuenta a buscar en una variable
   $CLAVE = $_POST["CLAVE"];
  //Se añade el sript de la conexión con la BD
   include "conexion.php";
   //Se hace la consulta en la BD para encontrar el registro
   $myconsulta=$conectar->query("select * from alumnos where no_cuenta='$CLAVE' ");
   //Se saca el numero de registros que existen en la BD resultado de la consulta
   $filas=$myconsulta->num_rows;        
    //Si los registros son iguales o mayores a uno, se inicia el IF 
   if($filas >= 1)
   {
    //Mientras haya registros que recuperar, el bucle continua
      while($lafila=$myconsulta->fetch_assoc()) 
      {
?>
    <!--//Se agrega el resultado de los regustros en una tabla -->
<tr bgcolor="#CEF6F5" onmouseover="this.style.background='#FFD961';" onmouseout="this.style.background='#CEF6F5';">
     <td> <?php echo $lafila['no_cuenta']; ?> </td>
     <td> <?php echo $lafila["nombre"]." ".$lafila["ap_Pat"]." ".$lafila["ap_Mat"]; ?></td>
     <td> <?php echo $lafila['edad']; ?> </td>
     <td> <?php echo $lafila['materia']; ?> </td>
     <td> <?php echo $lafila['turno']; ?> </td>
     <td> <?php echo $lafila['comentarios']; ?> </td>
  </tr>

<?php
      }//fin del while
   } else 
   {
    //Si el registro no es encontrado se da aviso y se da la opción de volver a buscar
     echo "<BR><h1> Registro no encontrado </h1><BR>";
     echo "<a href=buscar.html>Volver a buscar\n";
   }//fin del else
?>
</table>
<br>
<!-- Se da la opción de ir a la pagina principal -->
<a href='index.html'>Pagina Principal</a> 
</center>
</HTML>