<?php
require_once "conexion.php";
$conexion = conexion();

$id = $nombre_cliente = $proyecto = $descripcion = $costo = "";
$error = "";

// Obtener datos del registro a editar
if (isset($_GET["id"])) {
    $id = intval($_GET["id"]);
    $sql = "SELECT * FROM registros WHERE id = $id";
    $result = mysqli_query($conexion, $sql);
    
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $nombre_cliente = $row["nombre_cliente"];
        $proyecto = $row["proyecto"];
        $descripcion = $row["descripcion"];
        $costo = $row["costo"];
    } else {
        header("Location: Tabla.php?error=notfound");
        exit();
    }
}

// Procesar actualización
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $id = intval($_POST["id"]);
    $nombre_cliente = mysqli_real_escape_string($conexion, $_POST["nombre_cliente"]);
    $proyecto = mysqli_real_escape_string($conexion, $_POST["proyecto"]);
    $descripcion = mysqli_real_escape_string($conexion, $_POST["descripcion"]);
    $costo = floatval($_POST["costo"]);

    $sql = "UPDATE registros SET 
            nombre_cliente = '$nombre_cliente', 
            proyecto = '$proyecto', 
            descripcion = '$descripcion', 
            costo = $costo 
            WHERE id = $id";

    if (mysqli_query($conexion, $sql)) {
        header("Location: Tabla.php?updated=1");
        exit();
    } else {
        $error = "Error al actualizar: " . mysqli_error($conexion);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Registro</title>
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
        .btn-primary { background-color: #2196F3; color: white; }
        .btn-danger { background-color: #f44336; color: white; }
        .error { color: red; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Editar Registro</h2>
        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            
            <div class="form-group">
                <label>Nombre del Cliente:</label>
                <input type="text" name="nombre_cliente" value="<?php echo htmlspecialchars($nombre_cliente); ?>" required>
            </div>
            
            <div class="form-group">
                <label>Proyecto:</label>
                <input type="text" name="proyecto" value="<?php echo htmlspecialchars($proyecto); ?>" required>
            </div>
            
            <div class="form-group">
                <label>Descripción:</label>
                <textarea name="descripcion" required><?php echo htmlspecialchars($descripcion); ?></textarea>
            </div>
            
            <div class="form-group">
                <label>Costo:</label>
                <input type="number" name="costo" step="0.01" min="0" value="<?php echo htmlspecialchars($costo); ?>" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="Tabla.php" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
</body>
</html>
<?php
mysqli_close($conexion);
?>