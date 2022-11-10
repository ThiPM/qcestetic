<?php
    session_start();
    require("../Source/Database/Connect.php");

    if(!isset($_SESSION['loggedIN_admin'])){
        header('Location: index.php');
        exit();
    }
    $nome = $_SESSION['usuario'][0];
    $adm = $_SESSION['usuario'][1];
?>
<!-- jQuery e CSS Bootstrap 5 -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery Google -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="icon" type="image/png" href="../assets/img/icon.jpg"/>
<title>Administração - Agendamentos</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Satisfy&family=Shippori+Antique+B1&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
* {
    font-family: 'Poppins', sans-serif;
}
#bttn_deleteUsuario {
    border: none;
}
</style>

<?php
include_once "../Source/Database/Connect.php";
use Source\Database\Connect;

function listaUsuarios() {
try {
    $viewList = 
"
    SELECT*FROM horarios_cadastrados;
";
    $query = Connect::getInstance()->query($viewList);
    $retDados = $query-> fetchAll(PDO::FETCH_ASSOC);
    return $retDados;
} catch (PDOException $exception) {
    die($exception);
}
}
$usuarios = listaUsuarios();
?>
<form>
<table class='table table-striped table-bordered table-hover'>
            <thead>
                <tr class='active'>
                    <th>Cliente</th>
                    <th>Serviço</th>
                    <th>Data</th>
                    <th>Horário</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
               <?php foreach($usuarios as $usuarios) : ?>
                   <tr>
                     <td><input type="text" id="cliente" name="cliente" value="<?=$usuarios['cliente']?>" disabled=""></td>
                     <td><?=$usuarios['servico']?></td>
                     <td><?=date('d-m-Y', strtotime($usuarios['data']))?></td>
                     <td><input type="time" id="hora" name="hora" value="<?=$usuarios['horario']?>"></td>
                     <td><button type="submit" class="btn-danger">Excluir</button><button type="submit" class="btn-warning">Editar</button></td>
                    </tr>
               <?php endforeach; ?>
            </tbody>
            </table>
            </form>
            <center><a href="../admin/hiddenPage.php"><button class="btn btn-primary" style="background-color: #b520b5;">Voltar</button></a><br><br></center>
            <div id="response"></div>
            <script>
                $(function(){
                    $(document).on('click', '.btn-danger', function(e) {
                        e.preventDefault;
                        var nome = $("#cliente").val();

                        $.ajax({
                            url: '../process/processesExcluirAgendamento.php',
                            method: 'POST',
                            data: {
                                login: 1,
                                type: "agendamento",
                                clientePHP: nome,
                            },
                            success: function(response) {
                                $("#response").html(response);

                                if (response.indexOf('success') >= 0)
                                {};
                            },
                            dataType: 'text'
                        });
                       
                    });
                    $(document).on('click', '.btn-warning', function(e) {
                        e.preventDefault;
                        var nome = $("#cliente").val();
                        var hora = $("#hora").val();

                        $.ajax({
                            url: '../process/processesUpdateHora.php',
                            method: 'POST',
                            data: {
                                login: 1,
                                type: "agendamento",
                                clientePHP: nome,
                                horaPHP: hora,
                            },
                            success: function(response) {
                                $("#response").html(response);

                                if (response.indexOf('success') >= 0)
                                {};
                            },
                            dataType: 'text'
                        });
                       
                    });
                });
            </script>