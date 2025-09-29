<?php
require_once "conexion.php";
$conexion = conexion();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_cliente = mysqli_real_escape_string($conexion, $_POST["nombre_cliente"]);
    $proyecto = mysqli_real_escape_string($conexion, $_POST["proyecto"]);
    $descripcion = mysqli_real_escape_string($conexion, $_POST["descripcion"]);
    $costo = floatval($_POST["costo"]);

    $sql = "INSERT INTO registros (nombre_cliente, proyecto, descripcion, costo) 
            VALUES ('$nombre_cliente', '$proyecto', '$descripcion', $costo)";
    
    if (mysqli_query($conexion, $sql)) {
        header("Location: Tabla.php");
        exit();
    } else {
        $error = "Error: " . mysqli_error($conexion);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Nuevo Registro</title>
    <style>
        .container { max-width: 600px; margin: 20px auto; padding: 20px; }
        h2 { color: #333; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input, textarea { 
            width: 100%; 
            padding: 8px; 
            border: 1px solid #ddd; 
            border-radius: 4px; 
        }
        textarea { height: 100px; }
        .btn { 
            padding: 10px 15px; 
            border: none; 
            border-radius: 4px; 
            cursor: pointer; 
            margin-right: 10px;
        }
        .btn-primary { background-color: #4CAF50; color: white; }
        .btn-danger { background-color: #f44336; color: white; }
        .error { color: red; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Agregar Nuevo Registro</h2>
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label>Nombre del Cliente:</label>
                <input type="text" name="nombre_cliente" required>
            </div>
            
            <div class="form-group">
                <label>Proyecto:</label>
                <input type="text" name="proyecto" required>
            </div>
            
            <div class="form-group">
                <label>Descripción:</label>
                <textarea name="descripcion" required></textarea>
            </div>
            
            <div class="form-group">
                <label>Costo:</label>
                <input type="number" name="costo" step="0.01" min="0" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="Tabla.php" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
</body>
</html>
<?php
mysqli_close($conexion);
?>