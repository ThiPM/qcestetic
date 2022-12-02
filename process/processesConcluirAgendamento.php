<?php
require("../Source/Database/Connect.php");
require("../config/sanitizeRequest.php");
use source\Database\Connect;

class ConcluirAgenda{
    private $conn;
    private $usuario;
    private $hora;

    public function __construct()
    {
        $this->conn = Connect::getInstance();
        $this->usuario =  $_POST['clientePHP'];
        $this->hora = $_POST['horaPHP'];
    }

    public function concluir(){
        $query = $this->conn->prepare("DELETE FROM horarios_cadastrados WHERE email = ?;");
        $query->execute(array($this->usuario));
        $emailenviar = "queziadolci@gmail.com";
        $destino = $this->usuario;
        $assunto = utf8_decode("Conclusão de agendamento");
        $mandatario = utf8_decode("QC Estética");

        $arquivo = "
                      <img style='width: 270px; height: 270px; display: block; margin-left: auto; margin-right: auto;' src='https://hostdeprojetosdoifsp.gru.br/qcestetic/assets/img/logo_alternative.png'>
                      <p style='font-size: 18px'>Olá, $this->usuario! Sua consulta foi concluida com sucesso!</p>
                      <p style='font-size: 18px'>Agredecemos por escolher a QC Estética.</p><br>
                      <p style='font-size: 18px'>Em caso de dúvidas, entre em contato conosco pelos seguintes meios:<br> WhatsApp: (11) 96083-6877 <br>Email: queziadolci@gmail.com</p><br></p>
                      <p style='font-size: 18px'>Att, Suporte QC Estética.</p>
                      ";

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: ' . $mandatario . ' <' . $emailenviar . '>';

        $enviaremail = mail($destino, $assunto, $arquivo, $headers);
    }
}

$concluirAgendamento = new ConcluirAgenda;
$concluirAgendamento->concluir();
?>