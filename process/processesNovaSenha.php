<?php
require_once("../Source/Database/Connect.php");
require_once("../Class/GeradorSenha.class.php");
require_once("../email/simpleEmail.php");

use source\Database\Connect;

function unic()
{
    $email = $_POST['emailPHP'];
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = Connect::getInstance()->query($sql);
    if ($result->rowCount()) {
        return $unic = 1;
    }
}

if (unic() == 1) {
    $conn = Connect::getInstance(); 
    $geradorSenha = new GeradorSenha();
    $novaSenha = $geradorSenha->senha();
    $query = $conn->prepare("UPDATE usuarios SET senha = ? WHERE email = ?;");
    $query->execute(array($novaSenha, $_POST['emailPHP']));

    $assunto = "Nova senha de login";
    utf8_encode($assunto);
    $setMsgTxt = ("
    <img style='width: 270px; height: 270px; display: block; margin-left: auto; margin-right: auto;' src='https://hostdeprojetosdoifsp.gru.br/qcestetic/assets/img/logo_alternative.png'>
    <p style='font-size: 18px'>Olá, se você recebeu essa mensagem, é porquê solicitou a recuperação de senha. Sua nova senha de acesso é:  <b>$novaSenha</b></p>
    <p style='font-size: 18px'>Em caso de dúvidas, entre em contato conosco.</p><br>
    <p style='font-size: 18px'>Att, Suporte QC Estética.</p>");

    enviarEmail($_POST['emailPHP'], 'thiago.martins3596@gmail.com', 'thiago.martins3596@gmail.com', utf8_decode($assunto),  $setMsgTxt);


    echo "<div style='text-align: center;' class='alert alert-success' role='alert'>
            Senha modificada!
            </div>";
}else{
    echo "<div style='text-align: center;' class='alert alert-danger' role='alert'>
    Usuário não existente!
    </div>";
}

