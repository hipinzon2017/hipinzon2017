<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BR Cargo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Chela+One&family=Playwrite+CU:wght@100..400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#"><h1><b>BR Cargo</b></h1></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color: aliceblue;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active text-white" href="#"><b>Inicio</b></a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="pagos.html"><b>Gestion de pago</b></a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="mis_entregas.html"><b>Mis Entregas</b></a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="empresas.php"><b>Empresas</b></a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="reservas.html"><b>Reservas</b></a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="buscar_ofertas.html"><b>Buscar Ofertas</b></a></li>
                </ul>
            </div>
            <div class="d-flex align-items-center">
                <input type="text" class="form-control me-2 search-input" placeholder="Buscar en BR Cargo...">
                <button class="btn btn-outline-light"><i class="bi bi-search"></i></button>
                <a href="#"><img src="img/pngwing.com (34).png" id="user" class="ms-3"></a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container text-center text-white mt-5">
        <h1>Bienvenido a</h1>
        <h2>BR CARGO</h2>
    </div>

    <!-- Info Section -->
    <section id="info" class="container my-5" style="background-color: whitesmoke;">
        <div class="row text-center">
            <div class="col-lg-3 col-sm-6">
                <a href="publicar_trabajo.php" class="link-dark"><b>Publicar Trabajo</b></a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="notificaciones_alertas.html" class="link-dark"><b>Notificaciones y Alertas</b></a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="seguimiento_envios.html" class="link-dark"><b>Seguimiento de Envíos</b></a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="calificaciones_comentarios.html" class="link-dark"><b>Calificaciones y comentarios</b></a>
            </div>
        </div>

        <!-- Shipping Info -->
        <div class="row text-center align-items-center mt-4">
            <div class="col-lg-3 col-sm-6">
                <img src="img/Trazado 4.png" alt="Localizacion">
                <p class="text-muted">Localización</p>
                <p><b>Cartagena (Bolívar)</b></p>
            </div>
            <div class="col-lg-1 d-none d-lg-block">
                <div class="divider"></div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <img src="img/users.png" alt="Destino">
                <p class="text-muted">Destino</p>
                <p><b>Bogotá (Cundinamarca)</b></p>
            </div>
            <div class="col-lg-1 d-none d-lg-block">
                <div class="divider"></div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <p class="text-muted">Salida</p>
                <p><b>Mayo 18, 2024</b></p>
            </div>
            <div class="col-lg-2 col-sm-6">
                <p class="text-muted">Llegada</p>
                <p><b>Mayo 19, 2024</b></p>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-3">
            <a href="#" class="btn btn-warning">Preguntar</a>
        </div>

        <div class="text-center mt-5">
            <h3><b>MERCADO DE CARGA RECIENTE</b></h3>
        </div>
    </section>

    <!-- Image Section -->
    <section id="images" class="container my-5">
        <div class="row text-center">
            <div class="col-lg-3 col-sm-6">
                <a href="#"><img src="img/medellin.jpeg" class="img-fluid" class="img-fluid rounded" alt="Medellín"></a>
                <h4 style="color: white;">Medellín (Antioquia)</h4>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="#"><img src="img/buenaventura.png" class="img-fluid rounded" alt="Buenaventura"></a>
                <h4 style="color: white;">Buenaventura (Valle del Cauca)</h4>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="#"><img src="img/bucaramanga.jpg" class="img-fluid rounded" alt="Bucaramanga"></a>
                <h4 style="color: white;">Bucaramanga (Santander)</h4>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="#"><img src="img/mosquera.jpg" class="img-fluid rounded" alt="Mosquera"></a>
                <h4 style="color: white;">Mosquera (Cundinamarca)</h4>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

