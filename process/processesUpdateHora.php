<?php
require("../Source/Database/Connect.php");
use source\Database\Connect;

class UpdateHora{
    private $conn;
    private $usuario;
    private $hora;

    public function __construct()
    {
        $this->conn = Connect::getInstance();
        $this->usuario =  $_POST['clientePHP'];
        $this->hora = $_POST['horaPHP'];
    }

    public function editar(){
        $query = $this->conn->prepare("UPDATE horarios_cadastrados SET horario = ? WHERE cliente = ?;");
        $query->execute(array($this->hora, $this->usuario));
    }
}

$updateHora = new  UpdateHora;
$updateHora->editar();
?>