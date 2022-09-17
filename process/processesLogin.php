<?php
    require("../Source/Database/Connect.php");
    
    use source\Database\Connect;

    class Login{
        private $con = null;

        public function __construct(){
            $this->con = Connect::getInstance();
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
            echo "<div style='text-align: center;' class='alert alert-danger' role='alert'>
            Email ou senha incorretos, tente novamente.
            </div>";
        }
        }
    };

    $classe = new Login();
    $classe->login($_POST['emailPHP'], $_POST['passwdPHP']);
?>