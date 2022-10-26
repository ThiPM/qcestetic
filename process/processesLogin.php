<!-- jQuery e CSS Bootstrap 5 -->
<script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery Google -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php
    require_once("../Source/Database/Connect.php");
    
    use source\Database\Connect;

    class Login{
        private $con = null;

        public function __construct(){
            $this->con = Connect::getInstance();
        }   

        public function login($email, $senha){
            $senhaCript = md5($senha);
            $conexao = $this->con;
            $query = $conexao->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
        $query->execute(array($email, $senhaCript));

        if($query->rowCount()){
            $user = $query->fetchAll(PDO::FETCH_ASSOC)[0];

            session_start();
            $_SESSION["usuario"] = array($user["nome"], $user["ativo"], $user["email"]);
            // Esconder retorno na interface.
            echo "<div style='display:none'>";
            exit("success");
            echo "</div>";
        }else{
            echo "
            <script>
            $(document).ready(function(){
                $('#email').css('border', '1px solid #b30000'),
                $('#passwd').css('border', '1px solid #b30000'),
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

    $classe = new Login();
    $classe->login($_POST['emailPHP'], $_POST['passwdPHP']);
?>