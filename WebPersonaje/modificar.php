<?php
    require 'conexion.php';
    
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM personaje WHERE id = '$id'";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>Hello, world!</title>
  </head>
  <body>


  <div class="container">
            <div class="row">
                <h3 style="text-align:center">MODIFICAR REGISTRO</h3>
            </div>
            
            <form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nom_pj" name="nom_pj" placeholder="Nombre" value="<?php echo $row['nom_pj']; ?>" required>
                    </div>
                </div>
                
                <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
                
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Apellido</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ap_pj" name="ap_pj" placeholder="Apellido" value="<?php echo $row['ap_pj']; ?>"  required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Autor</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor" value="<?php echo $row['autor']; ?>"  required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Serie de Origen</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="serie_origem" name="serie_origen" placeholder="Serie de origen" value="<?php echo $row['serie_origen']; ?>"  required>
                    </div>
                </div>              
                <br>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="index.php" class="btn btn-default">Regresar</a>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </body>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>
