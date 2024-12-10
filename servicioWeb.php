<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";  
$username = "root";  
$password = "";  
$dbname = "brcargo";  

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificar que los datos se reciban correctamente
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Username']) && isset($_POST['Password'])) {
    $user = filter_var($_POST['Username'], FILTER_SANITIZE_EMAIL); // Validar correo
    $pass = $_POST['Password']; // Contraseña ingresada

    // Verificar si el correo es válido
    if (!filter_var($user, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Correo inválido.');</script>";
        echo "<script>window.location.href = 'iniciosesion.php';</script>";
        exit();
    }

    // Consulta preparada para evitar inyección SQL
    $stmt = $conn->prepare("SELECT id, clave FROM brcargoregistro WHERE correo = ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verificar si el usuario existe
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['clave']; // Obtener la contraseña cifrada

        // Verificar la contraseña ingresada con la almacenada
        if (password_verify($pass, $hashed_password)) {
            // Credenciales correctas
            $_SESSION['user'] = $user;  // Guardar información del usuario en la sesión
            header("Location: index.php"); // Redirigir a la página principal
            exit();
        } else {
            // Contraseña incorrecta
            echo "<script>alert('Nombre de usuario o contraseña incorrectos');</script>";
            echo "<script>window.location.href = 'iniciosesion.php';</script>";
        }
    } else {
        // Usuario no encontrado
        echo "<script>alert('Nombre de usuario o contraseña incorrectos');</script>";
        echo "<script>window.location.href = 'iniciosesion.php';</script>";
    }

    // Cerrar la declaración preparada
    $stmt->close();
} else {
    echo "Error: No se recibieron los datos.";
}

// Cerrar conexión
$conn->close();
?>
