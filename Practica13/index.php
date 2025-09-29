<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" type="text/css" href="Librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="Librerias/alertifyjs/css/themes/default.css">

    <script src="Librerias/jquery-3.7.1.min.js"> </script>
    <script src="Librerias/bootstrap/js/bootstrap.js"> </script>
    <script src="Librerias/alertifyjs/alertify.js"> </script>
</head>
<body>
    <div class="container">
        <div id="tabla"></div>
    </div>

<!-- Modal -->
<div class="modal fade" id="modalNuevo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar nuevo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">  
        <label>Nombre</label>
        <input type="text" name="" id="nombre" class="form-control input-sm">
        <label> Área</label>
        <input type="text" name="" id="area" class="form-control input-sm">
        <label>Sexo</label>
        <input type="text" name="" id="sexo" class="form-control input-sm">
        <label>Correo</label>
        <input type="text" name="" id="correo" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary" id="guardarnuevo">Agregar</button>
      </div>
    </div>
  </div>
</div>
<!--Editar datos-->
<div class="modal fade" id="ModalCambio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">  
        <label>Nombre</label>
        <input type="text" name="" id="nombre1" class="form-control input-sm">
        <label> Área</label>
        <input type="text" name="" id="area1" class="form-control input-sm">
        <label>Sexo</label>
        <input type="text" name="" id="sexo1" class="form-control input-sm">
        <label>Correo</label>
        <input type="text" name="" id="correo1" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal" id="guardarnuevo">Agregar </button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
    $('#tabla').load('componentes/tabla.php')
});
</script>

<script type="text/javascript"> 
$(document).ready(function(){ 
  $('#guardarnuevo').click(function(){ 
    let nombre=$('#nombre').val(); 
    let area=$('#area').val(); 
    let sexo=$('#sexo').val(); 
    let correo=$('#correo').val(); 
    //Se agrego el let 
    agregardatos(nombre, area, sexo, correo);

  });
}); 

</script> 
