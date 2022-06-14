<?php
namespace Source\Database;

require __DIR__."/../../config/config.php";

use \PDO;
use \PDOException;

const OPTIONS = [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_CASE => PDO::CASE_NATURAL
];

try {
  $conn = new PDO('mysql:host=localhost;dbname=hostdeprojetos_qcestetica','hostdeprojetos_trlsites', 'Cq)*wcLG=!6P', OPTIONS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "olá";
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
