<?php
    session_start();

    require("../Source/Database/Connect.php");
    use source\Database\Connect;

    $conn = Connect::getInstance();

    if (isset($_SESSION['loggedIN'])){
        header('Location: pagUsuario.php');
        exit();
    }

    if(isset($_POST['login'])){
        $email = $_POST['emailPHP'];
        $passwd = $_POST['passwdPHP'];

        $sql = $conn->prepare("SELECT * FROM usuarios WHERE email=? AND senha=?");
        $sql->execute(array($email, $passwd));

        if($sql->rowCount()){
            $user = $sql->fetchAll(PDO::FETCH_ASSOC)[0];
            $_SESSION['loggedIN'] = '1'; 
            $_SESSION['email'] = '$email';
            $_SESSION['usuario'] = array($user['nome'], $user['adm']);
            exit('success');
        } else{
            echo  "<div style='text-align: center;' class='alert alert-danger' role='alert'>
            Email ou senha incorretos, tente novamente.
            </div>";
        };
    }
?>