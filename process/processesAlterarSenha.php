<?php
require_once("../Source/Database/Connect.php");

use source\Database\Connect;

$email = $_POST['emailPHP'];
$senha1 = $_POST['senha1PHP'];
$senha2 = $_POST['senha2PHP'];

if ($senha1 === $senha2) {
    $senhaCript = md5($senha1);
    $conn = Connect::getInstance(); 
    $query = $conn->prepare("UPDATE usuarios SET ativo = ? WHERE email = ?;");
    $query->execute(array(1, $email));
    $query = $conn->prepare("UPDATE usuarios SET senha = ? WHERE email = ?;");
    $query->execute(array($senhaCript, $email));

    echo "<div style='text-align: center;' class='alert alert-success' role='alert'>
            Senha modificada com sucesso!
            </div>";
}else{
    echo "<div style='text-align: center;' class='alert alert-danger' role='alert'>
    Senhas n達o conferem.
    </div>";
}

