<?php
    require("../Source/Database/Connect.php");
    
    use source\Database\Connect;

    class LoginAndCadastro{
        private $con = null;

        public function __construct($conexao){
            $this->con = $conexao;
        }   

        public function send(){
            if (empty($_POST) || $this->con == null) {
                return "<div style='text-align: center;' class='alert alert-danger' role='alert'>
                Ocorreu um erro interno no servidor.
            </div>";
            return;
            }

            switch(true){
                case (isset($_POST['type']) && $_POST['type'] == 'login' && isset($_POST['emailPHP']) && isset($_POST['passwdPHP']));
                echo $this->login($_POST['emailPHP'], $_POST['passwdPHP']);
                break;

                case (isset($_POST['type']) && $_POST['type'] == 'cadastro');
                echo "<script type='javascript'>alert('Email enviado com Sucesso!');";

            };
        }

        public function login($email, $senha){
            $conexao = $this->con;
            $query = $conexao->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
        $query->execute(array($email, $senha));

        if($query->rowCount()){
            $user = $query->fetchAll(PDO::FETCH_ASSOC)[0];

            session_start();
            $_SESSION["usuario"] = array($user["nome"], $user["adm"]);
            exit("success");

        }else{
            return "<div style='text-align: center;' class='alert alert-danger' role='alert'>
            Email ou senha incorretos, tente novamente.
            </div>";
        }
        }
        
        public function cadastro($nome, $email, $senha, $senha2, $end, $bairro, $cidade, $cep, $telefone){
            $conexao = $this->con;

            

            $query = $conexao->prepare("INSERT INTO usuarios ('ativo', 'adm', 'nome', 'email', 'senha', 'endereco', 'cep', 'cidade', 'telefone', 'bairro') VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");

            if($query->execute(array(1, 0, $nome, $email, $senha, $end, $cep, $cidade, $telefone, $bairro))){
                session_start();
            $_SESSION["usuario"] = array($nome, 0);
            return("success");
            }else{
                return "<div style='text-align: center;' class='alert alert-danger' role='alert'>
            Ocorreu um erro ao cadastrar o usuario.
            </div>";
            }
        }
    };

    $conexao = Connect::getInstance();
    $classe = new LoginAndCadastro($conexao);
    $classe->send();
?>