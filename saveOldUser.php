<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $newName = $_POST["newName"];
    $newBio = $_POST["newBio"];
    $newPhone = $_POST["newPhone"];
    $userId = $_SESSION["usuario"]["id"];

    require("connection.php");

    
    $updateQuery = "UPDATE users SET name = '$newName', bio = '$newBio', phone = '$newPhone' WHERE id = $userId";

    if ($mysqli->query($updateQuery) === TRUE) {
        $_SESSION["usuario"]["name"] = $newName; 
        $_SESSION["usuario"]["bio"] = $newBio; 
        $_SESSION["usuario"]["phone"] = $newPhone;

        header("Location: user.php");
        exit;
    } else {
        echo "Error al actualizar los datos: " . $mysqli->error;
    }

    $mysqli->close();
}
?>
