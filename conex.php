<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "brcargo";

// Crear conexión segura
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si se han enviado los datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitizar y validar entradas
    $nom1 = htmlspecialchars(strip_tags(trim($_POST['nombre'])), ENT_QUOTES, 'UTF-8');
    $ape1 = htmlspecialchars(strip_tags(trim($_POST['apellido'])), ENT_QUOTES, 'UTF-8');
    $doc1 = filter_var($_POST['documento'], FILTER_SANITIZE_NUMBER_INT);
    $cor1 = filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL);
    $cla1 = $_POST['clave']; // La validación de la contraseña puede ser más avanzada si es necesario
    $fec1 = htmlspecialchars(strip_tags(trim($_POST['fecha'])), ENT_QUOTES, 'UTF-8');

    // Validar datos antes de proceder
    if (!$cor1) {
        echo "Correo inválido.";
        exit;
    }

    // Cifrar la contraseña
    $hashed_password = password_hash($cla1, PASSWORD_DEFAULT);

    // Usar consultas preparadas para prevenir inyección SQL
    $sql = $conn->prepare("INSERT INTO brcargoregistro (nombres, apellidos, documento, correo, clave, fechanacimiento) 
                            VALUES (?, ?, ?, ?, ?, ?)");
    $sql->bind_param("ssisss", $nom1, $ape1, $doc1, $cor1, $hashed_password, $fec1);

    // Ejecutar consulta
    if ($sql->execute()) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $sql->error;
    }

    // Cerrar la declaración preparada
    $sql->close();
}

// Cerrar conexión
$conn->close();
?>
