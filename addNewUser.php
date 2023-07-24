
<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $emailRe = $_POST["emailRe"];
    $passRe = $_POST["passRe"];

    require("connection.php");

    $query = "INSERT INTO users (email, contrasena) VALUES ('$emailRe', '$passRe')";
    
    if ($mysqli->query($query) === TRUE) {
        
        session_start();
        $_SESSION["usuario"] = array(
            "email" => $emailRe,
            
        );

        header("Location: newUser.php");
    } else {
        echo "Error al registrar: ";
    }
}
?>








