<?php


if ( session_status() == PHP_SESSION_NONE ) { //  PHP >= 5.4.0
    session_start();
}

$path   = array();
$confDB = array();
$smtp   = array();

// Definir caminhos padrões
$path["projectDIR"]     = __DIR__ ;
$path["projectURL"]     = $_SERVER["HTTP_HOST"] ;
$path["uploadPublic"]   = __DIR__ ."/upFilesPublic/";
$path["uploadPrivate"]  = __DIR__ ."/upFilesPrivate/";
$path["autoload"]       = __DIR__ ."/autoload.php";
$_SESSION['path']       = $path;

// Definir configurações de Banco de Dados
    $confDB['host']     = "localhost";
    $confDB['user']     = "root";
    $confDB['pass']     = "";
    $confDB['schema']   = "qcestetic";

$_SESSION["confDB"] = $confDB;

// Definir Configurações de SMTP
$smtp['host']       = 'smtp.gmail.com';
$smtp['auth']       =  true;
$smtp['secure']     = 'tls';
$smtp['username']   = 'thiago.martins3596@gmail.com';
$smtp['password']   = 'unzetjirirqzxrjg';
$smtp['port']       =  465;
$_SESSION["smtp"]   = $smtp;

?>