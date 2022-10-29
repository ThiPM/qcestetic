<?php
    session_start();

    if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
        require("../Source/Database/Connect.php");

        $ativo  = $_SESSION["usuario"][1];
        $nome = $_SESSION["usuario"][0];
        $email = $_SESSION["usuario"][2];

        $min = 1;
        $max = 100000;
        $codigo = rand($min, $max);
    }else{
        echo "<script>window.location = 'login.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>QC Estética - Bem-vindo(a) <?php echo $nome?>!</title>
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
<link rel="stylesheet" href="../assets/css/pag_usuario.css">
<script src="../assets/js/pag_usuario.js"></script>
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
<div id="pagUsuario_redirect"></div>

<div class="container" id="painel_usuario">
<div class="row" id="collapse_painel">
<div class="col-sm-12">
<button id="collapse_painel_button">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"><path fill-rule="evenodd" d="M5.22 8.72a.75.75 0 000 1.06l6.25 6.25a.75.75 0 001.06 0l6.25-6.25a.75.75 0 00-1.06-1.06L12 14.44 6.28 8.72a.75.75 0 00-1.06 0z"></path></svg>
<h5>Painel do Usuário</h5>
</button>
<button id="descollapse_painel_button">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"><path fill-rule="evenodd" d="M18.78 15.28a.75.75 0 000-1.06l-6.25-6.25a.75.75 0 00-1.06 0l-6.25 6.25a.75.75 0 101.06 1.06L12 9.56l5.72 5.72a.75.75 0 001.06 0z"></path></svg>
</button>
</div>
</div>

<div class="row" id="painel">
<div class="col-sm-12">
<h6 id="name_user"><?php echo $nome?></h6><br>

<!-- Troca de senha fixa -->
<button class="btn btn-primary" id="btnTrocaSenha" type="button">Trocar senha</button><br>
<div class="col-12" id="troca_senhaModal">
<p class="textos">Digite a sua nova senha de acesso.</p>
<form id="form_trocaSenha">
<label class="label_form"><b>Email:</b></label>
<input type="email" id="email" value="<?php echo $email ?>" disabled="" name="email" required><br>
<label class="label_form"><b>Nova senha:</b></label>
<input type="password" id="novaSenha" name="novaSenha" required><br>
<label class="label_form"><b>Confirmação da nova senha:</b></label>
<input type="password" id="novaSenha_confirm" name="novaSenha_confirm" required><br>
<button class="button_troca_senhaModal" id="btnTrocaSenhaModal" type="button">Confirmar</button><br><br>
</form>  
</div>
<!-- -->

<p class="button_more_config" id="btnMoreConfig" type="button"> Configurações Avançadas
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
  <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
</svg>
</p>

<!-- Deletar conta -->
<button class="button_deletarConta" id="btnDeletarConta" type="button">Excluir conta</button><br>
<form id="form_deletarConta">
<p class="textos">Se você realmente deseja excluir sua conta, digite novamente o código de confirmação gerado abaixo.</p>
<label class="label_form"><b>Código de confirmação:</b></label>
<input type="text" value="<?php echo $codigo ?>" id="codigoDeletar" name="codigoDeletar" disabled="" required><br>
<label class="label_form"><b>Digite abaixo o código de confirmação:</b></label>
<input type="text" id="codigoDeletar_confirm" name="codigoDeletar_confirm" maxlength="6" required><br><br>
<button class="button_deletarConta_confirm" id="btnDeletarConta_confirm" type="button">Confirmar</button><br>
<div id="response"></div><br>
</form>
<!-- -->

<button class="button_logoff" id="btnLogoff" type="button">Sair<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M2 2.75C2 1.784 2.784 1 3.75 1h2.5a.75.75 0 010 1.5h-2.5a.25.25 0 00-.25.25v10.5c0 .138.112.25.25.25h2.5a.75.75 0 010 1.5h-2.5A1.75 1.75 0 012 13.25V2.75zm6.56 4.5l1.97-1.97a.75.75 0 10-1.06-1.06L6.22 7.47a.75.75 0 000 1.06l3.25 3.25a.75.75 0 101.06-1.06L8.56 8.75h5.69a.75.75 0 000-1.5H8.56z"></path></svg></button><br>


</div>
</div>
</div><br><br>

<div class="container" id="controle_usuario">

<div class="row">
<div class="col-sm-12">
<h5 class="titulos">Bem-vindo(a) <?php echo "$nome!"?> </h5><br>

<div class="row" style="<?php if($ativo == 0){echo 'display: show';}else{echo 'display: none';} ?>" >
<div class="col-12" id="troca_senha">
<b><p class="textos">Este é o seu primeiro acesso. Agora, é possível trocar a senha provisória por uma senha que seja definida por você! Siga, Painel do Usuário > Trocar senha.</p></b>
</div>
</div>

<p class="textos">Aqui é sua área de usuário. Você poderá gerenciar seus agendamentos nesta tela. Caso tenha alguma dúvida entre em contato conosco e teremos prazer em ajudá-lo.</p>

<a href="agendamentoUsuario.php">
<button id="marcar_consulta_button">
<span>Marcar uma consulta...</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="24" height="24"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
</button>
</a>
</div>
</div>

</div>
</div>

<div id="container_none"></div>

</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Modal -->
<div class="modal fade" id="trocaSenhaModalConfirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Troca de senha</h5>
      </div>
      <div class="modal-body">
        <p>Sua senha foi alterada com sucesso! Faça o login novamente com a nova senha.</p>
      </div>
      <div class="modal-footer">
        <a href="login.php"><button class="btn btn-primary" id="btnLoginRedirect" type="button">Login</button></a><br><br>
      </div>
    </div>
  </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="deletarContaModalConfirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Até mais! :(</h5>
      </div>
      <div class="modal-body">
        <p>Sua conta foi excluída com sucesso.</p>
      </div>
      <div class="modal-footer">
        <a href="logout.php"><button class="btn btn-primary" id="btnLoginRedirect" type="button">Voltar</button></a><br><br>
      </div>
    </div>
  </div>
</div>

    </html>