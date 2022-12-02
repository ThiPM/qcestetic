<?php
    session_start();

    if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
        require("../Source/Database/Connect.php");

        $ativo  = $_SESSION["usuario"][1];
        $nome = $_SESSION["usuario"][0];
        $email = $_SESSION["usuario"][2];
        $arquivo = $_SESSION["usuario"][3];

        $min = 1;
        $max = 100000;
        $codigo = rand($min, $max);
    }else{
        echo "<script>window.location = 'login.php'</script>";
    }
 require_once("../Source/Database/Connect.php");
    
 use source\Database\Connect;

 $conexao = Connect::getInstance();

    if($_FILES):
        $file = $_FILES['fotografia'];
        $extenso = strtolower(substr($file['name'], -4));
        $novoName = md5(time()).$extenso;
        $diretorio = "upload/";
        $data = date('Y-m-d H:i:s');

        if($arquivo == "usuario.png"){
            move_uploaded_file($file['tmp_name'], $diretorio.$novoName);
            $query = $conexao->prepare("UPDATE usuarios SET arquivo = ?, data = ? WHERE email = ?;");
            $query->execute(array($novoName, $data, $email));
        }else{
            unlink("upload/$arquivo");
            move_uploaded_file($file['tmp_name'], $diretorio.$novoName);
            $query = $conexao->prepare("UPDATE usuarios SET arquivo = ?, data = ? WHERE email = ?;");
            $query->execute(array($novoName, $data, $email));
        }

    endif;
    