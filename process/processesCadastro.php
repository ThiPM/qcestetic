<?php
require("../Source/Database/Connect.php");
require("../Class/GeradorSenha.class.php");
require("../email/Email.class.php");

use source\Database\Connect;
use email\Email;


class Cadastro
{
    private $con = null;
    private $unic = 0;
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
                    $email = new Email();
                    $email->Host = 'smtp.gmail.com';
                    $email->CharSet = 'UTF-8';
                    $email->setFrom('thiago.martins3596@gmail.com', 'QCestetic');
                    $email->addTo($_POST['emailPHP'], $_POST['nomePHP']);
                    $email->setSubject("Sua senha QCestetic");
                    $email->setMsgTxt("<p>Boas vindas a QCestetic! <b>Sua senha é </b> -> $senha</p>");
                    $email->send_gmail();
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
            Usuario já existente.
            </div>";
        }
    }
};

$classe = new Cadastro();
$classe->unic();
$classe->cadastro($_POST['nomePHP'], $_POST['emailPHP'], $_POST['endPHP'], $_POST['cepPHP'], $_POST['cidadePHP'], $_POST['telefonePHP'], $_POST['bairroPHP']);
