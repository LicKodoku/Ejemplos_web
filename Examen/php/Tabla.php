<?php
require_once "conexion.php";
$conexion = conexion();

// Mostrar mensajes
$message = "";
if (isset($_GET['deleted']) && $_GET['deleted'] == 1) {
    $message = "<div class='alert success'>Registro eliminado correctamente.</div>";
} elseif (isset($_GET['updated']) && $_GET['updated'] == 1) {
    $message = "<div class='alert success'>Registro actualizado correctamente.</div>";
} elseif (isset($_GET['error'])) {
    $error_msg = [
        'delete' => 'Error al eliminar el registro',
        'notfound' => 'Registro no encontrado'
    ];
    $message = "<div class='alert error'>".$error_msg[$_GET['error']]."</div>";
}

$sql = "SELECT * FROM registros ORDER BY id DESC";
$result = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registros de Proyectos</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #333; text-align: center; }
        .alert {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
            text-align: center;
        }
        .success { background-color: #dff0d8; color: #3c763d; }
        .error { background-color: #f2dede; color: #a94442; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #4CAF50; color: white; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        tr:hover { background-color: #f1f1f1; }
        .btn { 
            padding: 6px 12px; 
            text-decoration: none; 
            border-radius: 4px; 
            font-size: 14px;
        }
        .btn-add { background-color: #4CAF50; color: white; margin-bottom: 15px; }
        .btn-edit { background-color: #2196F3; color: white; }
        .btn-delete { background-color: #f44336; color: white; }
        .actions { text-align: center; }
        .add-row { background-color: #e7f3e7; font-weight: bold; }
        .add-row a { color: #4CAF50; text-decoration: none; font-size: 16px; display: block; padding: 10px; }
        .add-row a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h1>Registros de Proyectos</h1>
    <?php echo $message; ?>
    
    <table>
        <thead>
            <tr>
                <th>Nombre del Cliente</th>
                <th>Proyecto</th>
                <th>Descripción</th>
                <th>Costo</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr class="add-row">
                <td colspan="6"><a href="guardardatos.php">Agregar nuevo registro</a></td>
            </tr>
            
            <?php
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                        <td>{$row['nombre_cliente']}</td>
                        <td>{$row['proyecto']}</td>
                        <td>{$row['descripcion']}</td>
                        <td>$".number_format($row['costo'], 2)."</td>
                        <td class='actions'><a href='actualizar.php?id={$row['id']}' class='btn btn-edit'>Editar</a></td>
                        <td class='actions'><a href='eliminar.php?id={$row['id']}' class='btn btn-delete' onclick='return confirm(\"¿Estás seguro?\");'>Eliminar</a></td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='6' style='text-align: center;'>No hay registros</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
<?php
mysqli_close($conexion);
?>