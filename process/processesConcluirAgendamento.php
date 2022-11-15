<?php
require("../Source/Database/Connect.php");
use source\Database\Connect;

class ConcluirAgenda{
    private $conn;
    private $usuario;
    private $hora;

    public function __construct()
    {
        $this->conn = Connect::getInstance();
        $this->usuario =  $_POST['clientePHP'];
        $this->hora = $_POST['horaPHP'];
    }

    public function concluir(){
        $query = $this->conn->prepare("DELETE FROM horarios_cadastrados WHERE email = ?;");
        $query->execute(array($this->usuario));
    }
}

$concluirAgendamento = new ConcluirAgenda;
$concluirAgendamento->concluir();
?>