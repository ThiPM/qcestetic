<?php
    session_start();
    require("../Source/Database/Connect.php");

    if(!isset($_SESSION['loggedIN'])){
        header('Location: login.php');
        exit();
    }

    $nome = $_SESSION['usuario'][0];
    $adm = $_SESSION['usuario'][1];
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashborad</title>
</head>
    <body>
        

        <a href="logout.php">Logout</a><br>
    </body>
</html>
