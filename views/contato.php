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
<!-- jQuery Google -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="icon" type="image/png" href="../assets/img/icon.png"/>
<link rel="stylesheet" href="../assets/css/contato.css">
</head>

<nav id="menu-h">
<div id="menu-content">
        <ul>
            <li>
                <a href="../" id="qc_menu">
                    QC Estética
                </a>
            </li>
            <li>
                <a href="contato.php" class="pags_redirect">
                    Contato
                </a>
            </li>
        </ul>
        </div>
    </nav>

<body>

<div class="container" id="contato">
<center><h4 class="titulos">Contato</h4></center><br>
<p class="textos">Envie sua dúvida e assim que possível ela será respondida.</p>

<form method="POST" id="form_ctt" action="../Source/Database/query.php" class="row g-3">
  <div class="col-md-6">
    <label class="form-label">Nome:</label>
    <input type="text" name="name" required="required" placeholder="Digite aqui o seu nome.." id="campo_nome" onfocus="clicou_campo_nome()" onblur="nao_clicou_campo_nome()" class="form-control">
  </div>
  <div class="col-md-6">
    <label class="form-label">Email:</label>
    <input type="email" name="email" required="required" placeholder="Digite aqui o seu email..." id="campo_email" onfocus="clicou_campo_email()" onblur="nao_clicou_campo_email()" class="form-control">
  </div><br><br><br><br>
  <div class="col-md-6">
    <label class="form-label">Mensagem:</label>
    <textarea type="text" maxlength="1000" required="required" minlength="1" name="message" style="height: 150px;" placeholder="Digite aqui a sua mensagem..." id="campo_msg" onfocus="clicou_campo_msg()" onblur="nao_clicou_campo_msg()" class="form-control"></textarea>
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

<script>
  function clicou_campo_nome() {
    document.getElementById("campo_nome").style.border = "rgba(139,0,139,1) solid 2px";
  }
  function nao_clicou_campo_nome() {
    document.getElementById("campo_nome").style.border = "#5c5c5c solid 1px";
  }
  function clicou_campo_email() {
    document.getElementById("campo_email").style.border = "rgba(139,0,139,1) solid 2px";
  }
  function nao_clicou_campo_email() {
    document.getElementById("campo_email").style.border = "#5c5c5c solid 1px";
  }
  function clicou_campo_msg() {
    document.getElementById("campo_msg").style.border = "rgba(139,0,139,1) solid 2px";
  }
  function nao_clicou_campo_msg() {
    document.getElementById("campo_msg").style.border = "#5c5c5c solid 1px";
  }
</script>
