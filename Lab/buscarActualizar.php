<HTML>
<TITLE>Manipulando una BD</TITLE>
<h1>
<CENTER>
Datos de Alumno
</h1>
</CENTER>
<BR>
<center>
    <!-- Se genera ta tabla donde se añadirá todo -->
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
    //Si el registro no se encuentra, dar aviso y dar opción de ir a otro formulario
     echo "<BR><h1> Registro no encontrado </h1><BR>";
     echo "<a href=registroactualizar.html>Volver a buscar\n";
   }//fin del else
?>
</table>
<br>
<br>
<!--Se hace el llamado al script actualizar.php donde se realiza todo el proceso de actualización-->
<FORM ACTION = actualizar.php METHOD=POST>
No. de Cta:<INPUT TYPE= text NAME=nocta><BR>
Nombre: <INPUT TYPE=text NAME=nombre><BR>
Apellido Paterno: <INPUT TYPE=text NAME=apat><BR>
Apellido Materno: <INPUT TYPE=text NAME=amat><BR>
<INPUT TYPE=submit NAME=OK VALUE="Actualizar"><BR>
</FORM>
<br>
<a href='index.html'>Pagina Principal</a> 
</center>
</HTML>