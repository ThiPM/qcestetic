<?php
require("../Source/Database/Connect.php");
use source\Database\Connect;

class ExcluirAgenda{
    private $conn;
    private $usuario;
    private $hora;

    public function __construct()
    {
        $this->conn = Connect::getInstance();
        $this->usuario =  $_POST['clientePHP'];
        $this->hora = $_POST['horaPHP'];
    }

    public function excluir(){
        $query = $this->conn->prepare("DELETE FROM horarios_cadastrados WHERE cliente = ?;");
        $query->execute(array($this->usuario));
    }
}

$apagarAgendamento = new ExcluirAgenda;
$apagarAgendamento->excluir();
?>