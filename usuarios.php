<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "brcargo";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die(json_encode(["error" => "Conexión fallida: " . $conn->connect_error]));
}

$method = $_SERVER['REQUEST_METHOD'];

// Solo decodificar JSON si el método es POST, PUT o DELETE
$data = null;
if (in_array($method, ['POST', 'PUT', 'DELETE'])) {
    $data = json_decode(file_get_contents("php://input"), true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        header('Content-Type: application/json');
        echo json_encode(["error" => "JSON mal formado"]);
        exit;
    }
}

// Definir el manejo de las solicitudes por método HTTP
switch ($method) {
    case 'GET':
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            // Consulta preparada para evitar inyección SQL
            $sql = $conn->prepare("SELECT * FROM brcargoregistro WHERE id = ?");
            $sql->bind_param("i", $id);
        } else {
            // Consulta general sin ID
            $sql = $conn->prepare("SELECT * FROM brcargoregistro");
        }
        $sql->execute();
        $result = $sql->get_result();

        $usuarios = array();
        while ($row = $result->fetch_assoc()) {
            $usuarios[] = $row;
        }

        header('Content-Type: application/json');
        echo json_encode($usuarios);
        break;

    case 'POST':
        // Verificar que todas las claves requeridas están presentes
        if (!isset($data['nombre'], $data['apellido'], $data['documento'], $data['correo'], $data['clave'], $data['fecha'])) {
            echo json_encode(["error" => "Faltan campos obligatorios"]);
            exit;
        }

        // Sanitizar y validar entradas
        $nom1 = htmlspecialchars(strip_tags($data['nombre']), ENT_QUOTES, 'UTF-8');
        $ape1 = htmlspecialchars(strip_tags($data['apellido']), ENT_QUOTES, 'UTF-8');
        $doc1 = filter_var($data['documento'], FILTER_SANITIZE_NUMBER_INT);
        $cor1 = filter_var($data['correo'], FILTER_VALIDATE_EMAIL);
        $cla1 = password_hash($data['clave'], PASSWORD_DEFAULT);
        $fec1 = htmlspecialchars(strip_tags($data['fecha']), ENT_QUOTES, 'UTF-8'); // Verificar el formato de la fecha más adelante

        if (!$cor1) {
            echo json_encode(["error" => "Correo inválido"]);
            exit;
        }

        // Consulta preparada para insertar datos
        $sql = $conn->prepare("INSERT INTO brcargoregistro (nombres, apellidos, documento, correo, clave, fechanacimiento) 
                                VALUES (?, ?, ?, ?, ?, ?)");
        $sql->bind_param("ssisss", $nom1, $ape1, $doc1, $cor1, $cla1, $fec1);

        if ($sql->execute()) {
            echo json_encode(["mensaje" => "Usuario añadido correctamente"]);
        } else {
            echo json_encode(["error" => "Error al añadir el usuario: " . $conn->error]);
        }
        break;

    case 'PUT':
        // Verificar que todas las claves requeridas están presentes
        if (!isset($data['id'], $data['nombre'], $data['apellido'], $data['documento'], $data['correo'], $data['clave'], $data['fecha'])) {
            echo json_encode(["error" => "Faltan campos obligatorios"]);
            exit;
        }

        // Validar y sanitizar entradas
        $id = intval($data['id']);
        $nom1 = htmlspecialchars(strip_tags($data['nombre']), ENT_QUOTES, 'UTF-8');
        $ape1 = htmlspecialchars(strip_tags($data['apellido']), ENT_QUOTES, 'UTF-8');
        $doc1 = filter_var($data['documento'], FILTER_SANITIZE_NUMBER_INT);
        $cor1 = filter_var($data['correo'], FILTER_VALIDATE_EMAIL);
        $cla1 = password_hash($data['clave'], PASSWORD_DEFAULT);
        $fec1 = htmlspecialchars(strip_tags($data['fecha']), ENT_QUOTES, 'UTF-8'); // Verificar el formato de la fecha más adelante

        if (!$cor1) {
            echo json_encode(["error" => "Correo inválido"]);
            exit;
        }

        // Consulta preparada para actualizar datos
        $sql = $conn->prepare("UPDATE brcargoregistro SET nombres = ?, apellidos = ?, documento = ?, correo = ?, clave = ?, fechanacimiento = ? 
                                WHERE id = ?");
        $sql->bind_param("ssisssi", $nom1, $ape1, $doc1, $cor1, $cla1, $fec1, $id);

        if ($sql->execute()) {
            echo json_encode(["mensaje" => "Usuario actualizado correctamente"]);
        } else {
            echo json_encode(["error" => "Error al actualizar el usuario: " . $conn->error]);
        }
        break;

    case 'DELETE':
        // Validar y sanitizar ID
        if (!isset($data['id'])) {
            echo json_encode(["error" => "Falta el ID del usuario para eliminar"]);
            exit;
        }

        $id = intval($data['id']);

        // Consulta preparada para eliminar datos
        $sql = $conn->prepare("DELETE FROM brcargoregistro WHERE id = ?");
        $sql->bind_param("i", $id);

        if ($sql->execute()) {
            echo json_encode(["mensaje" => "Usuario eliminado correctamente"]);
        } else {
            echo json_encode(["error" => "Error al eliminar el usuario: " . $conn->error]);
        }
        break;

    default:
        header('Content-Type: application/json');
        echo json_encode(["error" => "Método no soportado"]);
        break;
}

// Cerrar conexión
$conn->close();
