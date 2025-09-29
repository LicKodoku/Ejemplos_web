<?php
require_once "conexion.php";
$conexion = conexion();

if (isset($_GET["id"])) {
    $id = intval($_GET["id"]);
    
    // Verificar si el registro existe
    $check_sql = "SELECT id FROM registros WHERE id = $id";
    $check_result = mysqli_query($conexion, $check_sql);
    
    if (mysqli_num_rows($check_result) == 1) {
        $sql = "DELETE FROM registros WHERE id = $id";
        
        if (mysqli_query($conexion, $sql)) {
            header("Location: Tabla.php?deleted=1");
        } else {
            header("Location: Tabla.php?error=delete");
        }
    } else {
        header("Location: Tabla.php?error=notfound");
    }
} else {
    header("Location: Tabla.php");
}

mysqli_close($conexion);
exit();
?>