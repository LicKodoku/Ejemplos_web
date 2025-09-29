<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">ConsultoSeguro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="proyectos.html">Proyectos</a></li>
                    <li class="nav-item"><a class="nav-link" href="Tabla.php">ProyectosTabla</a></li>
                    <li class="nav-item"><a class="nav-link" href="servicios.html">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="conocemos.html">Conocemos </a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h1 class="text-center">ConsultoSeguro</h1>

        <!-- GRID  -->
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Comentarios</h5>
                        <p class="card-text">Tus criticas y recomendaciones, nos hacen crecer.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Anuncios</h5>
                        <p class="card-text">Cualquier información que requieras saber.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="imagenes/2.JPG" class="d-block w-100" alt="Imagen 1">
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/3.png" class="d-block w-100" alt="Imagen 2">
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/1.JPG" class="d-block w-100" alt="Imagen 3">
                    </div>
                </div>
             
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="bg-dark text-white text-center py-3 mt-4">
        &copy; Derechos reservados.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
