<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>QC Estética - Cadastro</title>
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
<link rel="stylesheet" href="../assets/css/cadastro.css">
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

<div id="cadastro_redirect"></div>
<div class="container" id="cadastro">
<div class="row">
<center>
<div class="col-sm-6" id="form_cadastro">
  <form id="frmCadastro">
		<div class="container">
			<center>
			<h2 class="titulos">Cadastro</h2><br>
      <p class="textos">Se você ainda não possui uma conta de usuário para agendar suas consultas, cadastre-se abaixo:</p>
      </center>
      <label class="label_form"><b>Nome Completo:</b></label> 
			<input type="text" placeholder="Digite seu nome completo..." name="nome" required> 

      <label class="label_form"><b>E-mail:</b></label> 
			<input type="email" placeholder="Digite seu e-mail..." name="email" required> 

      <label class="label_form"><b>Senha:</b></label> 
			<input type="password" placeholder="Digite sua senha..." name="senha" required>
      
      <label class="label_form"><b>Confirmação de senha:</b></label> 
			<input type="password" placeholder="Digite sua senha novamente..." name="senha_confirm" required> 

			<label class="label_form"><b>Endereço:</b></label> 
			<input type="text" placeholder="Digite seu endereço..." name="endereço" required> 
			
			<label class="label_form"><b>Bairro:</b></label> 
			<input type="text" placeholder="Digite seu bairro..." name="bairro" required>
     
      <label class="label_form"><b>Cidade:</b></label> 
			<input type="text" placeholder="Digite sua cidade..." name="cidade" required>

      <label class="label_form"><b>CEP:</b></label> 
			<input type="text" placeholder="Digite seu CEP..." maxlength="9" name="cep" required>

      <label class="label_form"><b>Telefone (Celular):</b></label> 
			<input type="text" placeholder="Digite seu telefone..." maxlength="15" name="telefone" required>

      <center><button class="button_cadastro" id="btnCadastro" type="submit">Cadastrar</button></center>
		</div>
	</form>
</div>
</center>
</div>
</div>

<div id="container_none"></div>

</div>
</body>
</html>