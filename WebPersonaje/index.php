<?php
  require 'conexion.php';
  $where = '';
  if(!empty($_POST))
  {
    $valor =  $_POST["campo"];
    if(!empty($valor)){
      $where = "WHERE nom_pj LIKE '%$valor%'";
    }
  }
  $sql = "SELECT * FROM personaje $where";
  $resultado = $mysqli->query($sql);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>

      <div class="container">
        <div class="row">
          <h3 style="text-align:center">Busca tu personaje favorito</h3>
        </div>     
        <div class="row">
          <a href="agregar.php" class="btn btn-primary" style="color:black; background-color: #80cebbff;">Agregar Personaje</a>
          <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <br>
            <b>Nombre: </b><input type="text" id="campo" name="campo">
            <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" style="background-color: #33658A; color:white" />
          </form>
        </div>
        <br>
        <div class="row table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
              <th style="background-color: #F6BD60;">ID</th>
              <th style="background-color: #F6BD60;">Nombre</th>
              <th style="background-color: #F6BD60;">Apellido</th>
              <th style="background-color: #F6BD60;">Autor</th>
			        <th style="background-color: #F6BD60;">Serie de origen</th>
              <th style="background-color: #F6BD60;"></th>
              <th style="background-color: #F6BD60;"></th>
            </tr>
          </thead>
          <tbody>
            <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
              <tr >
                <td style="background-color: #F28482;"><?php echo $row['id']; ?></td>
                <td style="background-color: #F5CAC3;"><?php echo $row['nom_pj']; ?></td>
                <td style="background-color: #F5CAC3;"><?php echo $row['ap_pj']; ?></td>
                <td style="background-color: #F5CAC3;"><?php echo $row['autor']; ?></td>
				        <td style="background-color: #F5CAC3;"><?php echo $row['serie_origen']; ?></td>
                <td style="background-color: #F5CAC3;"><a class="btn btn-warning" href="modificar.php?id=<?php echo $row['id']; ?>">MODIFICAR</a></td>
                <td style="background-color: #F5CAC3;"><a class="btn btn-danger" href="#" onclick="eliminar(<?php echo $row['id']; ?>)">ELIMINAR</a></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>

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
        function eliminar(id,nom,ap) {
          Swal.fire({
              title: 'Eliminar',
              text: "¿Desea eliminar al personaje Id:"+id,
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>