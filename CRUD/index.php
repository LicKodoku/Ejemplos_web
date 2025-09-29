<?php
  require 'conexion.php';
  $where = '';
  if(!empty($_POST))
  {
    $valor =  $_POST["campo"];
    if(!empty($valor)){
      $where = "WHERE nombre LIKE '%$valor%'";
    }
  }
  $sql = "SELECT * FROM personal $where";
  $resultado = $mysqli->query($sql);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>Index</title>
  </head>
  <body>


  <div class="container">
      <div class="row">
        <h2 style="text-align:center">Curso de PHP y MySQL</h2>
      </div>
      
      <div class="row">
        <a href="nuevo.php" class="btn btn-primary">Nuevo Registro</a>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
          <b>Nombre: </b><input type="text" id="campo" name="campo" />
          <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
        </form>
      </div>
    
      <br>


      <div class="row table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Email</th>
              <th>Telefono</th>
			  <th>intereses</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          
          <tbody>
            <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['telefono']; ?></td>
				<td><?php echo $row['intereses']; ?></td>
                <td><a class="btn btn-warning" href="modificar.php?id=<?php echo $row['id']; ?>">MODIFICAR</a></td>
                <td><a class="btn btn-danger" href="#" onclick="eliminar(<?php echo $row['id']; ?>)">ELIMINAR</a></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
 <!-- Modal -->
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
          </div>
          
          <div class="modal-body">
            ¿Desea eliminar este registro?
          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <a class="btn btn-danger btn-ok">Delete</a>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function eliminar(id) {
          Swal.fire({
              title: 'Eliminar',
              text: "¿Desea eliminar el elemento? ID: "+id,
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Si'
            }).then((result) => {
              if (result.isConfirmed) {
  window.location.href = "./eliminar.php?id="+id;
              }
            })
        }
    </script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
  </body>
</html>
