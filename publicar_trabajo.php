<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicar Trabajo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css pagos/pagos.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="index.php"><h1><b style="color: #212529;">BR Cargo</b></h1></a>
            <!-- Añadir barra de navegación -->
        </div>
    </nav>

    <div class="container my-5">
        <h2>Publicar un Trabajo</h2>
        <form action="publictrabajos.php" method="post">
            <div class="mb-3">
                <label for="ubicacionRecogida" class="form-label">Ubicación de Recogida</label>
                <input type="text" class="form-control" id="ubicacionRecogida" name="recogida" placeholder="Especifica la ubicación de recogida">
            </div>
            <div class="mb-3">
                <label for="ubicacionEntrega" class="form-label">Ubicación de Entrega</label>
                <input type="text" class="form-control" id="ubicacionEntrega" name="entrega" placeholder="Especifica la ubicación de entrega">
            </div>
            <div class="mb-3">
                <label for="tipoCarga" class="form-label">Tipo de Carga</label>
                <input type="text" class="form-control" id="tipoCarga" name="tipo" placeholder="Especifica el tipo de carga">
            </div>
            <div class="mb-3">
                <label for="fechaInicio" class="form-label">Fecha de Inicio</label>
                <input type="date" class="form-control" id="fechaInicio">
            </div>
            <div class="mb-3">
                <label for="fechaFin" class="form-label">Fecha de Fin</label>
                <input type="date" class="form-control" id="fechaFin">
            </div>
            <div class="mb-3">
                <label for="estadoCarga" class="form-label">Estado de la Carga</label>
                <input type="text" class="form-control" id="estadoCarga" placeholder="Describe el estado de la carga">
            </div>
            <div class="mb-3">
                <label for="requisitosCamion" class="form-label">Requisitos del Camión</label>
                <textarea class="form-control" id="requisitosCamion" rows="3" placeholder="Especifica los requisitos del camión"></textarea>
            </div> 
            <button type="submit" class="btn btn-primary">Publicar</button>
        </form>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
