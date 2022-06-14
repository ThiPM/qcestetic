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
    header("Location: ../../");
    $_SESSION['msg'] = "<center><p style='padding: 10px; border: 1px solid gray; border-radius: 3px; margin: 10px;
    font-size: 18px; border-color: #87c940; color: #fff; background-color: #a0d468; width: 290px;'>Mensagem enviada com sucesso!</p></center><br>";
    header("Location: ../../views/contato.php");
    echo  "<script>alert('Dados enviado com Sucesso!');</script>";
} catch (PDOException $exception) {
    header("Location: ../../");
    $_SESSION['msg'] = "<center><p style='padding: 10px; border: 1px solid gray; border-radius: 3px; margin: 10px;
    font-size: 18px; border-color: #e8273b; color: #fff; background-color: #ed5565;'>Mensagem nПлкo enviada! . {$exception}</p></center><br>";
    header("Location: ../../views/contato.php");
    echo  "<script>alert('Erro no envio :/');</script>";
}
