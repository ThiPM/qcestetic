<?php
require_once("../Source/Database/Connect.php");
require("../config/sanitizeRequest.php");
require_once("../Class/GeradorSenha.class.php");

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
    $novaSenhaCript = md5($novaSenha);
    $query = $conn->prepare("UPDATE usuarios SET senha = ? WHERE email = ?;");
    $query->execute(array($novaSenhaCript, $_POST['emailPHP']));

      $emailenviar = "queziadolci@gmail.com";
      $destino = $_POST['emailPHP'];
      $assunto = utf8_decode("Recuperação de senha");
      $mandatario = utf8_decode("QC Estética");
    
      $arquivo = "
      <img style='width: 270px; height: 270px; display: block; margin-left: auto; margin-right: auto;' src='https://hostdeprojetosdoifsp.gru.br/qcestetic/assets/img/logo_alternative.png'>
      <p style='font-size: 18px'>Olá, se você recebeu essa mensagem, é porquê solicitou a recuperação de senha. Sua nova senha de acesso é:  <b>$novaSenha</b></p>
      <p style='font-size: 18px'>Em caso de dúvidas, entre em contato conosco.</p><br>
      <p style='font-size: 18px'>Att, Suporte QC Estética.</p>";
    
      // É necessário indicar que o formato do e-mail é html
      $headers  = 'MIME-Version: 1.0' . "\r\n";
          $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
          $headers .= 'From: ' .$mandatario. ' <'.$emailenviar.'>';
      //$headers .= "Bcc: $EmailPadrao\r\n";
    
      $enviaremail = mail($destino, $assunto, $arquivo, $headers);


    echo "<div style='text-align: center;' class='alert alert-success' role='alert'>
            Senha modificada!
            </div>";
}else{
    echo "<div style='text-align: center;' class='alert alert-danger' role='alert'>
    Usuário não existente!
    </div>";
}

