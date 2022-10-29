<?php
require_once("../Source/Database/Connect.php");

use source\Database\Connect;

$email = $_POST['emailPHP_delete'];

$conn = Connect::getInstance(); 
$query = $conn->prepare("DELETE FROM usuarios WHERE email = ?;");
$query->execute(array($email));