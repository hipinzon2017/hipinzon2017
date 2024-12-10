<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "brcargo";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$recogida = $_POST['recogida'];
$entrega = $_POST['entrega'];
$tipo = $_POST['tipo'];





$sql = "INSERT INTO trabajo (ubicacionRecogida, ubicacionEntrega, tipoCarga) VALUES ('$recogida', '$entrega', '$tipo')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
