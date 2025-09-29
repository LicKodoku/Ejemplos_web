function agregardatos(nombre_cliente, proyecto, descripcion, costo) {
    alert("El botón ha sido presionado");

    // Construye la cadena de datos con los nuevos parámetros
    let cadena = "nombre_cliente=" + nombre_cliente + 
                 "&proyecto=" + proyecto + 
                 "&descripcion=" + descripcion + 
                 "&costo=" + costo;

    // Envío de la solicitud AJAX
    $.ajax({
        type: "POST",
        url: "php/agregardatos.php", // Archivo PHP que procesará la inserción
        data: cadena,
        success: function(r) {
            if (r == 1) {
                $('#tabla').load('componentes/tabla.php'); // Recarga la tabla
                alertify.success("Se agregó con éxito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        },
        error: function() {
            alertify.error("Error en la solicitud AJAX");
        }
    });
}