<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<title>Agrega un personaje</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<h3 style="text-align: center;">
				Agrega un nuevo personaje
			</h3>
		</div>
		<form class="form-horizontal" method="POST" action="insert.php" autocomplete="off">
			<div class="form-group">
				<label for="nombre" class="col-sm-2 control-label">
					Nombre de personaje
				</label>
				<div class="col-wm-10">
					<input type="text" class="form-control" id="nom_pj" name="nom_pj" placeholder="Nombre de pila" required>
				</div>
			 </div>      
            <div class="form-group">
                <label for="ap_pj" class="col-sm-2 control-label">Apellido del personaje</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ap_pj" name="ap_pj" placeholder="Apellido" required>
                </div>
            </div> 
            <div class="form-group">
                <label for="autor" class="col-sm-2 control-label">Autor</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor de la obra" require>
                </div>
            </div>       
            <div class="form-group">
                <label for="serie_origen" class="col-sm-2 control-label">Obra de origen</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="serie_origen" name="serie_origen" placeholder="Serie donde sale" require>
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
</html>