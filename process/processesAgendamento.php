<?php
require_once("../Source/Database/Connect.php");

use source\Database\Connect;


class Agendamento
{
    private $servico;
    private $hora;
    private $data;
    private $usuario;
    private $email;
    private $feriados;
    private $dataAtual;
    private $dataAgendamento;
    private $dataDisponiveis;
    private $conn;
    private $unic = "0";
    private $anoLimite;

    public function __construct($servico, $hora, $data)
    {
        $this->usuario = $_POST['clientePHP'];
        $this->servico = $servico;
        $this->hora = $hora;
        $this->email = $_POST['emailPHP'];
        $this->dataAgendamento = date('d-m-Y', strtotime($_POST['dataPHP']));
        $this->anoLimite = date('Y');
        $this->data = $data;
        $this->conn = Connect::getInstance();
        $this->dataAtual = date('Y-m-d');
        $this->dataDisponiveis = array(
            '08:00:00', '08:30:00', '09:00:00', '09:30:00', '10:00:00',
            '10:30:00', '11:00:00', '11:30:00', '12:00:00', '12:30:00', '13:00:00', '13:30:00',
            '14:00:00', '14:30:00', '15:00:00', '15:30:00', '16:00:00', '16:30:00', '17:00:00',
            '17:30:00', '18:00:00', '18:30:00', '19:00:00', '19:30:00', '20:00:00', '20:30:00', '21:00:00'
        );
        $this->feriados = array(
            date('Y') . '-01-01',
            date('Y') . '-02-28',
            date('Y') . '-03-01',
            date('Y') . '-03-02',
            date('Y') . '-04-15',
            date('Y') . '-04-17',
            date('Y') . '-04-21',
            date('Y') . '-05-01',
            date('Y') . '-06-16',
            date('Y') . '-09-07',
            date('Y') . '-10-12',
            date('Y') . '-11-02',
            date('Y') . '-11-15',
            date('Y') . '-12-24',
            date('Y') . '-12-25',
            date('Y') . '-12-31',
        );
    }

    public function agendar()
    {
        $conxexao = $this->conn;
        $hora = $_POST['horaPHP'] . ":00";
        $data = $_POST['dataPHP'];
        $servico = $_POST['servicoPHP'];
        $cliente = $_POST['clientePHP'];
        $email = $_POST['emailPHP'];
        $date = date('Y-m-d', strtotime($data));
        $diasemana_numero = date('w', strtotime($date));

        $query = $this->conn->prepare("SELECT * FROM horarios_cadastrados WHERE cliente = ?");
        $query->execute(array($this->usuario));
        if ($query->rowCount()) {
            echo "<div style='text-align: center;' class='alert alert-danger' role='alert'>
            $this->usuario, já existe data marcada.
            </div>";
        } else {
            if ($diasemana_numero == 0 || $diasemana_numero == 1) {
                echo "<div style='text-align: center;' class='alert alert-danger' role='alert'>
                Horários de atendimento </br>
                Terça a Sábado - das 8h às 21h
                </div>";
            } else {
                if ($date >= $this->dataAtual && $data < $this->anoLimite . '-12-31') {
                    if (in_array($date, $this->feriados)) {
                        echo "<div style='text-align: center;' class='alert alert-danger' role='alert'>
                        Data não disponivel, tente novamente.
                        </div>";
                    } else {
                        if (in_array($hora, $this->dataDisponiveis)) {
                            $sql = "SELECT * FROM horarios_cadastrados WHERE data = '$date' and horario = '$hora';";
                            $result = Connect::getInstance()->query($sql);
                            if ($result->rowCount()) {
                                echo "<div style='text-align: center;' class='alert alert-danger' role='alert'>
                                                Data não disponivel, tente novamente.
                                                </div>";
                            } else {
                                $sql2 = $conxexao->prepare("insert into horarios_cadastrados (cliente, email, servico, data, horario) values (?, ?, ?, ?, ?);");
                                $sql2->execute(array($cliente, $email, $servico, $date, $hora));
                                echo "<div style='text-align: center;' class='alert alert-success' role='alert'>
                                                Agendamento realizado!
                                            </div>";
                                $emailenviar = "queziadolci@gmail.com";
                                $destino = $this->email;
                                $assunto = utf8_decode("Agendamento");
                                $mandatario = utf8_decode("QC Estética");

                                $arquivo = "
                                            <img style='width: 270px; height: 270px; display: block; margin-left: auto; margin-right: auto;' src='https://hostdeprojetosdoifsp.gru.br/qcestetic/assets/img/logo_alternative.png'>
                                            <p style='font-size: 18px'>Olá, $this->usuario! Se você recebeu essa mensagem, é porquê o seu agendamento foi realizado com sucesso para a data $this->dataAgendamento e hora $this->hora. Recomendamos que chegue a clínica com 20 minutos de antecedência</p></br>
                                            <p style='font-size: 18px'>Se você quiser mudar o horário do agendamento ou desmarcá-lo, entre em contato conosco pelos seguintes meios:</br> WhatsApp: (11) 96083-6877 </br>Email: queziadolci@gmail.com</p><br>
                                            <p style='font-size: 18px'>Att, Suporte QC Estética.</p>
                                            ";

                                $headers  = 'MIME-Version: 1.0' . "\r\n";
                                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                                $headers .= 'From: ' . $mandatario . ' <' . $emailenviar . '>';

                                $enviaremail = mail($destino, $assunto, $arquivo, $headers);
                                return ("success");
                            }
                        } else {
                            echo "<div style='text-align: center;' class='alert alert-danger' role='alert'>
                                            Horário indisponivel, tente novamente. </br> 
                                            OBS: (08:00 - 17:30, utilize xx:00 ou xx:30)
                                            </div>";
                        }
                    }
                } else {
                    echo "<div style='text-align: center;' class='alert alert-danger' role='alert'>
                Data não disponivel, tente novamente.
                </div>";
                }
            }
        }
    }
}



$agendamento = new Agendamento($_POST['servicoPHP'], $_POST['horaPHP'], $_POST['dataPHP']);
$agendamento->agendar();
