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
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>QC Estética - Administração</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- jQuery e CSS Bootstrap 5 -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery Google -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="icon" type="image/png" href="../assets/img/icon.jpg"/>
<link rel="stylesheet" href="../assets/css/pag_admin.css">
<script src="../assets/js/pag_admin.js"></script>
</head>
<nav class="navbar navbar-expand-sm navbar-dar" id="menu-h">
    <div class="container-fluid" id="menu-content">
  
        <a class="navbar-brand" href="../"><img src="../assets/img/logo_menu1.png" style="height: 60px; width: 60px; border-radius: 20%;"></a> 
      
        <button class="navbar-toggler" style="background-color: #6c016c8e;" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <img src="../assets/img/img_menu_split.png" style="height: 20px; width: 20px;">
        </button>

      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" id="qc_menu" href="../">QC Estética</a>
          </li>
      </ul>
      </div>
    </div>
</nav>
<body>
<div class="container" id="principal">
<div id="pagAdmin_redirect"></div>

<div class="container" id="painel_admin">
<div class="row" id="collapse_painel">
<div class="col-sm-12">
<button id="collapse_painel_button">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"><path fill-rule="evenodd" d="M5.22 8.72a.75.75 0 000 1.06l6.25 6.25a.75.75 0 001.06 0l6.25-6.25a.75.75 0 00-1.06-1.06L12 14.44 6.28 8.72a.75.75 0 00-1.06 0z"></path></svg>
<h5>Painel do Administrador</h5>
</button>
<button id="descollapse_painel_button">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"><path fill-rule="evenodd" d="M18.78 15.28a.75.75 0 000-1.06l-6.25-6.25a.75.75 0 00-1.06 0l-6.25 6.25a.75.75 0 101.06 1.06L12 9.56l5.72 5.72a.75.75 0 001.06 0z"></path></svg>
</button>
</div>
</div>

<div class="row" id="painel">
<div class="col-sm-12">
<h6 id="name_user">Administrador</h6>
<button class="button_logoff" id="btnLogoff" type="button">Sair<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M2 2.75C2 1.784 2.784 1 3.75 1h2.5a.75.75 0 010 1.5h-2.5a.25.25 0 00-.25.25v10.5c0 .138.112.25.25.25h2.5a.75.75 0 010 1.5h-2.5A1.75 1.75 0 012 13.25V2.75zm6.56 4.5l1.97-1.97a.75.75 0 10-1.06-1.06L6.22 7.47a.75.75 0 000 1.06l3.25 3.25a.75.75 0 101.06-1.06L8.56 8.75h5.69a.75.75 0 000-1.5H8.56z"></path></svg></button><br>
</div>
</div>
</div><br><br>

<div class="container" id="controle_usuario">
<div class="row">

<div class="col-sm-12">
<h5 class="titulos">Bem-vindo Administrador!</h5><br>
<p class="textos">Aqui é sua <span class="spans_colorized">área de administração</span>. Você poderá ver os clientes registrados no seu site, os contatos feitos por eles e outros usuários, e principalmente, os agendamentos diários. Os botões abaixo levarão você até essas ações dentro do sistema:</p>

</div>
</div><br>

<div class="row">
<div class="col-sm-4" id="col-button-cliente">
<a href="../Source/query_usuarios.php">
<button class="acoes_bttns" id="clientes_bttn">Clientes</button>
</a>
</div>

<div class="col-sm-4" id="col-button-contato">
<a href="../Source/query_feedbacks.php">
<button class="acoes_bttns" id="contatos_bttn">Feedbacks</button>
</a>
</div>

<div class="col-sm-4" id="col-button-agendamento">
<a href="../Source/query_agendamento.php">
<button class="acoes_bttns" id="agendamentos_bttn">Agendamentos</button>
</a>
</div>
</div>
</div>

<div class="col-sm-12" id="support">
<h5 id="titulo_support">Suporte</h5><br>
<p class="textos">O site apresenta algum erro ou problema? Quer alterar algo? Entre em contato conosco via <a style="color: green; text-decoration: none;" href="https://wa.me/5511960351235?text=Digite%20aqui%20sua%20mensagem%20para%20TRL%20Sites..." target="_blank">WhatsApp</a> ou pelo nosso site: <a style="color: blue; text-decoration: none;" href="https://projetos.talentosdoifsp.gru.br/trlsites/" target="_blank">TRL Sites</a></p>
<img id="logo_support" src="https://projetos.talentosdoifsp.gru.br/trlsites/assets/img/logo.png">
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("#btnLogoff").on('click', function() {
     window.location.href = "logout.php";
    });
});
</script>
</body>
</html>