function agregardatos(nombre, area, sexo, correo) {
    alert("El botón ha sido presionado");

    // Corrige la forma en que se construye la cadena de datos
    let cadena = "nombre=" + nombre + "&area=" + area + "&sexo=" + sexo + "&correo=" + correo;

    // Envío de la solicitud AJAX
    $.ajax({
        type: "POST",
        url: "php/agregardatos.php",
        data: cadena,
        success: function(r) {
            if (r == 1) {
                $('#tabla').load('componentes/tabla.php');
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
