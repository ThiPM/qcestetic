<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>QC Estética - Contato</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- jQuery e CSS Bootstrap 5 -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery Google API -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Arquivos Locais -->
<link rel="icon" type="image/png" href="../assets/img/icon.png"/>
<link rel="stylesheet" href="../assets/css/contato.css">
<script src="../assets/js/contato.js"></script>
</head>

<nav class="navbar navbar-expand-sm navbar-dar" id="menu-h">
    <div class="container-fluid" id="menu-content">
      <!-- Logo QC Estética
        <a class="navbar-brand" href="#"><img src="" style="height: 50px; width: 50px;"></a> 
      -->

      <button class="navbar-toggler" style="background-color: #6c016c8e;" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <img src="../assets/img/img_menu_split.png" style="height: 20px; width: 20px;">
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" id="qc_menu" href="../">QC Estética</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pags_redirect" href="../">Início</a>
        </li>
        </ul>
      </div>
    </div>
</nav>

<body>
<div class="container" id="contato">
<center><h4 class="titulos">Contato</h4></center><br>
<img src="../assets/img/contato.png" id="img_contato"><br><br>
<p class="textos">Envie sua dúvida e assim que possível ela será respondida.</p>

<form method="POST" id="form_ctt" action="../Source/Database/query.php" class="row g-3">
  <div class="col-md-6">
    <label class="form-label">Nome:</label>
    <input type="text" name="name" required="required" placeholder="Digite aqui o seu nome.." id="campo_nome" class="form-control">
  </div>
  <div class="col-md-6">
    <label class="form-label">Email:</label>
    <input type="email" name="email" required="required" placeholder="Digite aqui o seu email..." id="campo_email" class="form-control">
  </div><br><br><br><br>
  <div class="col-md-6">
    <label class="form-label">Mensagem:</label>
    <textarea type="text" maxlength="1000" required="required" minlength="1" name="message" style="height: 150px;" placeholder="Digite aqui a sua mensagem..." id="campo_msg" class="form-control"></textarea>
  </div>
  <div class="col-12">
  <br><center><button type="submit" id="bttn_enviar" class="btn btn-primary">Enviar</button></center><br><br>
  </div>
</form>
<?php 
if(isset($_SESSION['msg'])){
  echo $_SESSION['msg'];
  unset ($_SESSION['msg']);
}
?>
</div>
</body>

<footer id="myFooter">
    <div class="container">
    <div class="row">
        <div class="col-sm-1">
            <h5>Início</h5>
            <ul>
                <li><a href="#">Home</a></li>
            </ul>
        </div>
        <div class="col-sm-3">
                <div class="social-networks">
                <a href=""><img class='img_footer' src='../assets/img/logo_whatsapp.png'></i></a>
                <a href="" class="facebook"><img class='img_footer' src='../assets/img/logo_facebook.png'></i></a>
                <a href="" class="instagram"><img class='img_footer' src='../assets/img/logo_instagram.png'></a>
            </div>
        </div>
    </div>
    </div>
<div class="footer-copyright">
    <p>© 2022 Copyright - TRL Sites <img style="height: 25px; width: 25px;" src="../assets/img/brazil_footer.png"></p>
</div>
</footer>
</html>
