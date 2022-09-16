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
			<label for="email"><b>Email:</b></label> 
			<input type="email" placeholder="Digite seu email de usuário..." id="email" name="email" required> 
			
			<label for="pass"><b>Senha:</b></label> 
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("#btnLogin").on('click', function() {
        var email = $("#email").val();
        var passwd = $("#passwd").val();

        if (email == "" || passwd == "")
            alert("Preencha os campos obrigatórios!");
        else {
            $.ajax({
                url: '../process/processesLogin.php',
                method: 'POST',
                data: {
                    login: 1,
                    type: "login",
                    emailPHP: email,
                    passwdPHP: passwd
                },
                success: function(response) {
                    $("#response").html(response);

                    if (response.indexOf('success') >= 0)
                        window.location = 'pagUsuario.php';
                },
                dataType: 'text'
            });
        }
    });
});
</script>
</body>
</html>