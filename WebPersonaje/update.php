<?php
    
    require 'conexion.php';
    
    $id = $_POST['id'];
    $nom_pj = $_POST['nom_pj'];
    $ap_pj = $_POST['ap_pj'];
    $autor = $_POST['autor'];
    $serie = $_POST['serie_origen'];
    
    $sql = "UPDATE personaje SET nom_pj='$nom_pj', ap_pj='$ap_pj', autor='$autor', serie_origen='$serie' WHERE id = '$id'";
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


    <title>Hello, world!</title>
  </head>
  <body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <div class="container">
        <div class="row">
            <div class="row" style="text-align:center">
                <?php if($resultado) { ?>
   <h3>REGISTRO MODIFICADO</h3>
                     <script>    
    				Swal.fire(
    				'Buen trabajo',
    				'Actualización realizada correctamente',
				    'success'
    				)
					</script>
                    <?php
                } else { ?>
                    <h3>ERROR AL MODIFICAR</h3>
                <?php } ?>
                
                <a href="index.php" class="btn btn-primary">Regresar</a>
                
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>