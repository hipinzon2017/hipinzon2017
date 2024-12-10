<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro BR CARGO</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="registration-container">
        <h2>Crear cuenta BR Cargo</h2>
        <form  action="conex.php" method="POST">
            <div class="form-group">
                <label for="firstName">Nombres</label>
                <input type="text" id="firstName" name="nombre"  required>
            </div>
            <div class="form-group">
                <label for="lastName">Apellidos</label>
                <input type="text" id="lastName" name="apellido" required>
            </div>
            <div class="form-group">
                <label for="idNumber">Documento de Identidad</label>
                <input type="text" id="idNumber" name="documento" required>
            </div>

            <div class="form-group">
                <label for="idCorreo">Correo o Nombre de Usuario</label>
                <input type="email" id="idNumber" name="correo" required>
            </div>

            <div class="form-group">
                <label for="idContrasena">Contraseña</label>
                <input type="password" id="idNumber" name="clave" required>
            </div>
            
            <div class="form-group">
                <label for="birthDate">Fecha de Nacimiento</label>
                <input type="date" id="birthDate" name="fecha" required>
            </div>
            <button type="submit" style="background-color: #ff9900;">Registrarse</button>
        </form>
    </div>
  <!-- <script src="js/comandos.js"></script> -->
</body>
</html>
