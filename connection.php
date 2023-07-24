<?php
try {
    $mysqli = new mysqli("localhost", "root", "", "mini_project");
    echo "conectado";
} catch (mysqli_sql_exception $e) {
    echo "error: " . $e->getMessage();
}
