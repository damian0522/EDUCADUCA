<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $nombre = strtolower($nombre);
    $email = $_POST["email"];

    $stmt = $conn->prepare("SELECT nombre, apellido FROM usuarios WHERE nombre = ? AND email = ?");
    $stmt->bind_param("ss", $nombre, $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        // Usuario encontrado
        $user = $result->fetch_assoc();
        echo json_encode([
            "success" => true,
            "message" => "Bienvenido, " . $user["nombre"] . " " . $user["apellido"]
        ]);
    } else {
        // Usuario no encontrado
        echo json_encode([
            "success" => false,
            "message" => "Nombre o correo incorrectos"
        ]);
    }

    $stmt->close();
    $conn->close();

    // Asegúrate de terminar el script para evitar enviar otros datos por accidente
    exit();
}
?>
