<?php
session_start();
require __DIR__."/Connect.php";

$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING);

$insert = "
INSERT INTO users (name, email, message) VALUES ('$name', '$email', '$message');
";

try {
    $query = $conn->query(($insert));
    <script>alert("Dados enviado com sucesso!");</script>
} catch (PDOException $exception) {
   <script>alert("Não foi possivel enviar os dados!");</script>
}

