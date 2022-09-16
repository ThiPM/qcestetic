<?php
require("../Source/Database/Connect.php");

use source\Database\Connect;

class Cadastro
{
    private $con = null;
    private $unic = 0;

    public function __construct()
    {
        $this->con = Connect::getInstance();
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

    public function cadastro($nome, $email, $senha, $senha2, $end, $bairro, $cidade, $cep, $telefone)
    {
        $conexao = $this->con;
        $senha2 = $_POST['passwd2PHP'];
        $senha = $_POST['passwdPHP'];

        if ($this->unic == 0) {
            if ($senha2 === $senha) {
                $query = $conexao->prepare("INSERT INTO usuarios (ativo, adm, nome, email, senha, endereco, cep, cidade, telefone, bairro) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");

                if ($query->execute(array(1, 0, $nome, $email, $senha, $end, $cep, $cidade, $telefone, $bairro))) {
                    session_start();
                    $_SESSION["usuario"] = array($nome, 0);
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
            Senhas não conferem.
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
$classe->cadastro($_POST['nomePHP'], $_POST['emailPHP'], $_POST['passwdPHP'], $_POST['passwd2PHP'], $_POST['endPHP'], $_POST['cepPHP'], $_POST['cidadePHP'], $_POST['telefonePHP'], $_POST['bairroPHP']);
