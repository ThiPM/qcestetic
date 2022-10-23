<?php
require_once("../Source/Database/Connect.php");
require_once("../Class/GeradorSenha.class.php");
require_once("../email/Email.class.php");

use source\Database\Connect;
use email\Email;

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

    $email = new Email();
    $email->Host = 'smtp.gmail.com';
    $remetente = "QC Estética";
    utf8_encode($remetente);
    $assunto = "Nova senha de login";
    utf8_encode($assunto);
    $email->setFrom('thiago.martins3596@gmail.com', utf8_decode($remetente));
    $email->addTo($_POST['emailPHP'], 'Clinte');
    $email->setSubject(utf8_decode($assunto));
    $email->setMsgTxt("
    <img style='width: 270px; height: 270px; display: block; margin-left: auto; margin-right: auto;' src='https://hostdeprojetosdoifsp.gru.br/qcestetic/assets/img/logo_alternative.png'>
    <p style='font-size: 18px'>Olá, se você recebeu essa mensagem, é porquê solicitou a recuperação de senha. Sua nova senha de acesso é:  <b>$novaSenha</b></p>
    <p style='font-size: 18px'>Em caso de dúvidas, entre em contato conosco.</p><br>
    <p style='font-size: 18px'>Att, Suporte QC Estética.</p>");
    $email->send_gmail();
    echo "<div style='text-align: center;' class='alert alert-success' role='alert'>
            Senha modificada!
            </div>";
}else{
    echo "<div style='text-align: center;' class='alert alert-danger' role='alert'>
    Usuário não existente!.
    </div>";
}

