<HTML>
<TITLE>Manipulando una BD</TITLE>
<h1>
<CENTER>
Listado de Alumnos
</h1>
</CENTER>
<BR>
<center>
<table border="1">
  <tr bgcolor="#336699" style="color:#FF6";><td>No. Cuenta</td><td>Nombre</td><td>Edad</td><td>Materia</td><td>Turno</td><td>Comentarios</td></tr>
<?php
   include "conexion.php";
   $myconsulta=$conectar->query("select * from alumnos");
   $filas=$myconsulta->num_rows;        
   if($filas >= 1)
  {
     while($lafila=$myconsulta->fetch_assoc()) 
     {
?> 
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
 }
?>
</table>
<br>
<a href='index.html'>Pagina Principal</a> 
</center>
</HTML>