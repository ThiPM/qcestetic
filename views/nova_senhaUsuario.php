<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>QC Estética - Recuperar senha</title>
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
<link rel="stylesheet" href="../assets/css/nova_senhaUsuario.css">
<script src="../assets/js/nova_senhaUsuario.js"></script>
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

<div id="NovaSenha_redirect"></div>
<div class="container" id="NovaSenha">
<div class="row">
<div class="col-sm-12" id="form_NovaSenha">
  <form id="frmNovaSenha">
		<div class="container">
			<h2 class="titulos">Recuperação de senha</h2><br>
      <p class="textos">Digite o seu email de usuário abaixo para recuperar a sua senha:</p>
      <label for="email"><b>Email: </b></label>
      <input type="email" placeholder="Digite seu email de usuário..." id="email" name="email" required>	
      <button class="button_NovaSenha" id="btnNovaSenha" type="button">Enviar</button><br>
      <div id="response"></div>
		</div>
	</form>
</div>

</div>
</div>
<div id="container_none"></div>

</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Modal -->
<div class="modal fade" id="novaSenhaModalConfirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Troca de senha</h5>
      </div>
      <div class="modal-body">
        <p>Uma nova senha de acesso foi enviada no e-mail cadastrado. Use-a para fazer o login.</p>
      </div>
      <div class="modal-footer">
        <a href="login.php"><button class="btn btn-primary" id="btnLoginRedirect" type="button">Entendi</button></a><br><br>
      </div>
    </div>
  </div>
</div>
</html>