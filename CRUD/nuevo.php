<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<title>Creacion de Nuevo Registro</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<h3 style="text-align: center;">
				Nuevo Registro
			</h3>
		</div>
		<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
			<div class="form-group">
				<label for="nombre" class="col-sm-2 control-label">
					Nombre
				</label>
				<div class="col-wm-10">
					<input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" required>
				</div>
			 </div>
     
        
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
        </div> 
        <div class="form-group">
            <label for="telefono" class="col-sm-2 control-label">Telefono</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
            </div>
        </div>
        
        <div class="form-group">
            <label for="estado_civil" class="col-sm-2 control-label">Estado Civil</label>
            <div class="col-sm-10">
                <select class="form-control" id="estado_civil" name="estado_civil">
                    <option value="SOLTERO">SOLTERO</option>
                    <option value="CASADO">CASADO</option>
                    <option value="OTRO">OTRO</option>
                </select>
            </div>
        </div>
        
        <div class="form-group">
            <label for="hijos" class="col-sm-2 control-label">¿Tiene Hijos?</label>
	 		<div class="col-sm-10">
                <label class="radio-inline">
                    <input type="radio" id="hijos" name="hijos" value="1" checked> SI
                </label>
                
                <label class="radio-inline">
                    <input type="radio" id="hijos" name="hijos" value="0"> NO
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="intereses" class="col-sm-2 control-label">INTERESES</label>
            
            <div class="col-sm-10">
                <label class="checkbox-inline">
                    <input type="checkbox" id="intereses[]" name="intereses[]" value="Libros"> Libros
                </label>
                
                <label class="checkbox-inline">
                    <input type="checkbox" id="intereses[]" name="intereses[]" value="Musica"> Musica
                </label>
                
                <label class="checkbox-inline">
                    <input type="checkbox" id="intereses[]" name="intereses[]" value="Deportes"> Deportes
                </label>
                
                <label class="checkbox-inline">
                    <input type="checkbox" id="intereses[]" name="intereses[]" value="Otros"> Otros
                </label>
            </div>
        </div>
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