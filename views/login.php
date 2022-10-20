<!-- página de Login -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>QC Estética - Login</title>
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
<link rel="stylesheet" href="../assets/css/login.css">
<script src="../assets/js/login.js"></script>
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

<div id="login_redirect"></div>
<div class="container" id="login">
<div class="row">
<div class="col-sm-6" id="logo"><br><br><br>
<img id="img_logo" src="../assets/img/logo_alternative.png">
</div>
<div class="col-sm-6" id="form_login">
  <form id="frmLogin">
		<div class="container">
			<h2 class="titulos">Login</h2><br>
			<img id="img_iconeuser" src="../assets/img/iconeuser.png"><br><br>
      <p class="textos">Se você já possui uma conta de usuário para agendar suas consultas, faça seu login abaixo.</p>
      <p class="textos">Não possui conta? <a class="link_redirect" href="cadastroUsuario.php">Cadastre-se agora!</a></p>
			<label for="email"><b>Email: </b></label> 
			<svg id="alert_error" xmlns="http://www.w3.org/2000/svg" style="float: right;" width="20" height="20" fill="red" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
      </svg>
      <input type="email" placeholder="Digite seu email de usuário..." id="email" name="email" required>	

			<label for="pass"><b>Senha:</b></label>
      <svg id="alert_error2" xmlns="http://www.w3.org/2000/svg" style="float: right;" width="20" height="20" fill="red" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
      </svg> 
			<input type="password" placeholder="Digite sua senha de usuário..." id="passwd" name="passwd" required>
      <p><a class="link_redirect" href="#">Esqueceu sua senha?</a></p>
      <button class="button_login" id="btnLogin" type="button">Entrar</button><br>
      <div id="response"></div>
		</div>
	</form>
</div>

</div>
</div>

<div id="container_none"></div>

</div>
</body>
</html>