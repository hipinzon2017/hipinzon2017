<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de Sesión</title>
  <link rel="stylesheet" href="css/iniciosesion.css">
</head>
<body>
  <div class="login-container">
    <div class="login-header">
      <img src="logo.png" alt="Logo de la Empresa">
      <h2>Iniciar sesión en BR Cargo</h2>
    </div>
    <form id="loginForm" action="servicioWeb.php" method="post">
      <div class="form-group">
        <label for="username">Nombre de Usuario</label>
        <input type="text" id="username" name="Username" required>
      </div>
      <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="Password" required>
      </div>
      <button type="submit" style="background-color: #ff9900;">Iniciar sesión</button>
      <div class="form-footer">
        <a href="#" style="color: #ff9900;">¿Olvidaste tu contraseña?</a>
      </div>
    </form>
  </div>
</body>
</html>
