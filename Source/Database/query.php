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
    $_SESSION['msg'] = "<center><p style='padding: 10px; border: 1px solid gray; border-radius: 3px; margin: 10px;
    font-size: 18px; border-color: #87c940; color: rgb(48, 48, 48); background-color: #a0d468; width: 290px;'>Mensagem enviada com sucesso!</p></center><br>";
    header("Location: ../../#form_ctt");
} catch (PDOException $exception) {
    $_SESSION['msg'] = "<center><p style='padding: 10px; border: 1px solid gray; border-radius: 3px; margin: 10px;
    font-size: 18px; border-color: #e8273b; color: rgb(48, 48, 48); background-color: #ed5565;'>Mensagem não enviada! . {$exception}</p></center><br>";
    header("Location: ../../#form_ctt");
}
