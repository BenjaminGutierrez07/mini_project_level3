<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $newName = $_POST["newName"];
    $newBio = $_POST["newBio"];
    $newPhone = $_POST["newPhone"];
    $userId = $_SESSION["usuario"]["id"];

    require("connection.php");

    $updateQuery = "UPDATE users SET name = ?, bio = ?, phone = ? WHERE id = ?";

    $stmt = $mysqli->prepare($updateQuery);

    
    $stmt->bind_param("sssi", $newName, $newBio, $newPhone, $userId);

    if ($stmt->execute()) {
        $_SESSION["usuario"]["name"] = $newName;
        $_SESSION["usuario"]["bio"] = $newBio;
        $_SESSION["usuario"]["phone"] = $newPhone;

        header("Location: newData.php");
        exit;
    } else {
        echo "Error al ejecutar la consulta: " . $mysqli->error;
    }

    $mysqli->close();
}
?>