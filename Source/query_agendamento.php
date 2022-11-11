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
 /* Modal */
 #btnAgendaRedirect {
        background-color: rgba(139,0,139,1);
        color: white;
        padding: 10px;
        border-radius: 5%;
        border: none;
        cursor: pointer;
        width: 100px;
        transition: 0.5s;
      }
      #btnLoginRedirect:hover {
        opacity: 0.7;
        transition: 0.5s;
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
                    <th>Email</th>
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
                     <td><input type="text" id="email" name="email" value="<?=$usuarios['email']?>" disabled=""></td>
                     <td><?=$usuarios['servico']?></td>
                     <td><?=date('d-m-Y', strtotime($usuarios['data']))?></td>
                     <td><input type="time" id="hora" name="hora" value="<?=$usuarios['horario']?>"></td>
                     <td><button type="button" style="background-color: #ffffff00; border: none;" class="btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="red" class="bi bi-file-x-fill" viewBox="0 0 16 16"><path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM6.854 6.146 8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 1 1 .708-.708z"/></svg></button><button style="background-color: #ffffff00; border: none;" type="button" class="btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16"><path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/></svg></button></td>
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
                                    $("#agendaDelete").modal("show");
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
                                $("#agendaUpdate").modal("show");                        
                            },
                            dataType: 'text'
                        });
                       
                    });
                });
            </script>
<!-- Modal 1 -->
<div class="modal fade" id="agendaDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agendamento - Remoção</h5>
      </div>
      <div class="modal-body">
        <p>O agendamento foi removido com sucesso.</p>
      </div>
      <div class="modal-footer">
        <a href="query_agendamento.php"><button class="btn btn-primary" id="btnAgendaRedirect" type="button">Voltar</button></a><br><br>
      </div>
    </div>
  </div>
</div>
<!-- Modal 2 -->
<div class="modal fade" id="agendaUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agendamento - Atualização</h5>
      </div>
      <div class="modal-body">
        <p>O agendamento foi atualizado com sucesso.</p>
      </div>
      <div class="modal-footer">
        <a href="query_agendamento.php"><button class="btn btn-primary" id="btnAgendaRedirect" type="button">Voltar</button></a><br><br>
      </div>
    </div>
  </div>
</div>