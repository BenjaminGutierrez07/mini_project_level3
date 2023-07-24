<?php
        if($_SERVER["REQUEST_METHOD"]=== "POST") {

                $emailLo = $_POST["emailLogin"];
                $passLo = $_POST["passLogin"];

                require("connection.php");

                $query = "SELECT * FROM users WHERE email = '$emailLo' AND contrasena = '$passLo'";

                $resultado = $mysqli->query($query);

                $numFilas = $resultado->num_rows;
                $data = $resultado->fetch_assoc();

                session_start();
                $_SESSION["usuario"] = $data;

                if ($numFilas === 1) {
                    header("Location: user.php");
                } else {
                    $message = "The account don't exist";
                    header("Location: login.php");
                }
        }
        