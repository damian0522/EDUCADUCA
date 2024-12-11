<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];

    $sql = "INSERT INTO USUARIOS (nombre, apellido, email) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nombre, $apellido, $email);

    if ($stmt->execute()) {
        // Enviar respuesta JSON indicando éxito
        echo json_encode(["success" => true, "message" => "Registro exitoso."]);
    } else {
        // Enviar respuesta JSON indicando error
        echo json_encode(["success" => false, "message" => "Error: " . $stmt->error]);
    }

    $stmt->close();
    $conn->close();
}
?>
