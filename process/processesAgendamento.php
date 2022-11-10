<?php
require_once("../Source/Database/Connect.php");

use source\Database\Connect;

 
 class Agendamento{
    private $servico;
    private $hora;
    private $data;
    private $usuario;
    private $dataAtual;
    private $dataDisponiveis;
    private $conn;
    private $unic = "0";

    public function __construct($servico, $hora, $data)
    {
        $this->usuario = $_POST['clientePHP'];
        $this->servico = $servico;
        $this->hora = $hora;
        $this->data = $data;
        $this->conn = Connect::getInstance();
        $this->dataAtual = date('Y-m-d');
        $this->dataDisponiveis = array('08:00:00', '08:30:00', '09:00:00', '09:30:00', '10:00:00', 
        '10:30:00', '11:00:00', '11:30:00', '12:00:00', '12:30:00', '13:00:00', '13:30:00', 
        '14:00:00', '14:30:00', '15:00:00', '15:30:00', '16:00:00', '16:30:00', '17:00:00', 
        '17:30:00');
    }

    public function agendar(){
        $conxexao = $this->conn;
        $hora = $_POST['horaPHP'].":00";
        $data = $_POST['dataPHP'];
        $servico = $_POST['servicoPHP'];
        $cliente = $_POST['clientePHP'];
        $date = date('Y-m-d', strtotime($data));
        $query = $this->conn->prepare("SELECT * FROM horarios_cadastrados WHERE cliente = ?");
        $query->execute(array($this->usuario));
        if ($query->rowCount()) {
            echo "<div style='text-align: center;' class='alert alert-danger' role='alert'>
            $this->usuario, já existe data marcada.
            </div>";
        }else{
            if ($date >= $this->dataAtual && $data < '2024-01-01') {
                if (in_array($hora, $this->dataDisponiveis)) {
                    $sql = "SELECT * FROM horarios_cadastrados WHERE data = '$date' and horario = '$hora';";
                    $result = Connect::getInstance()->query($sql);
                    if ($result->rowCount()) {
                        echo "<div style='text-align: center;' class='alert alert-danger' role='alert'>
                        Data não disponivel, tente novamente.
                        </div>";
                    }else{
                        $sql2 = $conxexao->prepare("insert into horarios_cadastrados (cliente, servico, data, horario) values (?, ?, ?, ?);");
                        $sql2->execute(array($cliente, $servico, $date, $hora));
                        echo "<div style='text-align: center;' class='alert alert-success' role='alert'>
                        Agendamento realizado!
                      </div>";
                    }
                }else{
                    echo "<div style='text-align: center;' class='alert alert-danger' role='alert'>
                    Horário indisponivel, tente novamente. </br> 
                    OBS: (08:00 - 17:30, utilize xx:00 ou xx:30)
                    </div>";
                }
            }else{
                echo "<div style='text-align: center;' class='alert alert-danger' role='alert'>
                Data não disponivel, tente novamente.
                </div>";
            }
        }
    }
 }

 

 $agendamento = new Agendamento($_POST['servicoPHP'], $_POST['horaPHP'],$_POST['dataPHP']);
 $agendamento->agendar();

 