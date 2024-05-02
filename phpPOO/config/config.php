<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bancotaurus";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "Falha ao conectar: " . $conn->connect_error;
} else {
    echo "Conexão bem-sucedida ao banco de dados!";
    $conn->close();
}
?>
