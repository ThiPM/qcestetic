<?php
namespace Source\Database;

use \PDO;
use \PDOException;

const OPTIONS = [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_CASE => PDO::CASE_NATURAL
];

try {
  $conn = new PDO('mysql:host=localhost;dbname=bd_qcestetic','root', '', OPTIONS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
