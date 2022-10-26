<?php
require("../Source/Database/Connect.php");
require("../Class/GeradorSenha.class.php");
require("../email/Email.class.php");

use source\Database\Connect;
use email\Email;


class Cadastro
{
    private $con = null;
    public $unic = 0;
    private $senha = "";

    public function __construct()
    {
        $this->con = Connect::getInstance();
        $this->senha = new GeradorSenha();
    }

    public function unic()
    {
        $email = $_POST['emailPHP'];
        $nome = $_POST['nomePHP'];
        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND nome = '$nome'";
        $result = Connect::getInstance()->query($sql);
        if ($result->rowCount()) {
            $this->unic = 1;
        }
    }

    public function cadastro($nome, $email, $end, $bairro, $cidade, $cep, $telefone)
    {
        $conexao = $this->con;

        $senha = $this->senha->senha();

        if ($this->unic == 0) {
            
                $query = $conexao->prepare("INSERT INTO usuarios (ativo, adm, nome, email, senha, endereco, cep, cidade, telefone, bairro) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");

                if ($query->execute(array(0, 0, $nome, $email, $senha, $end, $cep, $cidade, $telefone, $bairro))) {
                    session_start();
                    $_SESSION["usuario"] = array($nome, 0);

                    $assunto = "Confirmação de cadastro";
                    $setMsgTxt = ("
                    <img style='width: 270px; height: 270px; display: block; margin-left: auto; margin-right: auto;' src='https://hostdeprojetosdoifsp.gru.br/qcestetic/assets/img/logo_alternative.png'>
                    <p style='font-size: 18px'>Bem-vindo(a) à <b>QC Estética</b>, $nome! Se você recebeu essa mensagem, é porquê o seu cadastro foi realizado com sucesso. Sua senha de acesso é:  <b>$senha</b></p>
                    <p style='font-size: 18px'>Faça o seu primeiro login em nosso site com essa senha. Em caso de dúvidas, entre em contato conosco.</p><br>
                    <p style='font-size: 18px'>Att, Suporte QC Estética.</p>"
                    );

                    enviarEmail($_POST['emailPHP'], 'thiago.martins3596@gmail.com', 'thiago.martins3596@gmail.com', utf8_decode($assunto),  $setMsgTxt);

                    echo "<div style='text-align: center;' class='alert alert-success' role='alert'>
            Usuario cadastrado com sucesso.
            </div>";
                    return ("success");
                } else {
                    echo "<div style='text-align: center;' class='alert alert-danger' role='alert'>
            Ocorreu um erro ao cadastrar o usuario.
            </div>";
                }
            
        } else {
            echo "<div style='text-align: center;' class='alert alert-danger' role='alert'>
            Usuario já existente, preencha novamente os campos.
            </div>";
        }
    }
};

$classe = new Cadastro();
$classe->unic();
$classe->cadastro($_POST['nomePHP'], $_POST['emailPHP'], $_POST['endPHP'], $_POST['cepPHP'], $_POST['cidadePHP'], $_POST['telefonePHP'], $_POST['bairroPHP']);
