<?php
    require("../Source/Database/Connect.php");
    require("../config/sanitizeRequest.php");
    
    use source\Database\Connect;

    class LoginAdmin{
        private $con = null;

        public function __construct(){
            $this->con = Connect::getInstance();
        }   

        public function loginAdmin($email, $senha){
            $conexao = $this->con;
            $query = $conexao->prepare("SELECT * FROM colaboradores WHERE email = ? AND senha = ?");
        $query->execute(array($email, md5($senha)));

        if($query->rowCount()){
            $user = $query->fetchAll(PDO::FETCH_ASSOC)[0];

            session_start();
            $_SESSION['loggedIN_admin'] = '1'; 
            $_SESSION['email'] = '$email';
            $_SESSION["usuario"] = array($user["nome"], $user["adm"]);
             // Esconder retorno na interface.
             echo "<div style='display:none'>";
             exit("success");
             echo "</div>";
        }else{
            echo "
            <script>
            $(document).ready(function(){
                $('#email').css('border', '1px solid #b30000'),
                $('#passwd').css('border', '1px solid #b30000')
                $('#alert_error').css('display', 'block'),
                $('#alert_error2').css('display', 'block')
            });
            </script>
            ";
            echo "<div style='text-align: center;' class='alert alert-danger' role='alert'>
            Email ou senha incorretos, tente novamente.
            </div>";
        }
        }
    };

    $classe = new LoginAdmin();
    $classe->loginAdmin($_POST['emailPHP'], $_POST['passwdPHP']);
?>