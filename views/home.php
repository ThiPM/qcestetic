<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>QC Estética - Bem-vindo(a)!</title>
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
<link rel="icon" type="image/png" href="assets/img/icon.png"/>
<link rel="stylesheet" href="assets/css/home.css">
<script src="assets/js/home.js"></script>
</head>

<nav class="navbar navbar-expand-sm navbar-dar" id="menu-h">
    <div class="container-fluid" id="menu-content">
      <!-- Logo QC Estética
        <a class="navbar-brand" href="#"><img src="" style="height: 50px; width: 50px;"></a> 
      -->

      <button class="navbar-toggler" style="background-color: #6c016c8e;" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <img src="assets/img/img_menu_split.png" style="height: 20px; width: 20px;">
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" id="qc_menu" href="#">QC Estética</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pags_redirect" href="#desc_quezia_redirect">Sobre Nós</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pags_redirect" href="#servicos_redirect">Serviços & Produtos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pags_redirect" href="#contato_redirect">Contato</a>
        </li>
        </ul>
      </div>
    </div>
</nav>
  
<body id="top_redirect">
<!-- Div principal (Conteúdo) -->
<div class="container" id="principal">

<div class="container" id="entrada">
<center>
<!-- Imagem de entrada, pode ser a logo da empresa ou uma imagem temática. -->
<img src="assets/img/construcao.png" id="img_entrada"><br><br><br>
<h2><b>Bem-vindo(a)!</b></h2>
<p class="textos">Você está na QC Estética, uma clínica de processos estéticos situada em Guarulhos, São Paulo. Aqui você poderá encontrar diversos tipos de procedimentos estéticos voltados para saúde e beleza.</p>
<p class="textos">Veja um pouco mais sobre a empresa e explore os serviços e produtos que podem te ajudar a brilhar no dia-a-dia!</p>
</center>
</div>

<div id="desc_quezia_redirect" style="height: 50px;"></div>
<div class="container" id="desc_quezia">
    <center>
  <div class="row">
    <div class="col-sm-6" id="img_desc_quezia">
        <br><br><img id="img_quezia" src="assets/img/img_desc_quezia.jpg">
    </div>
    <div class="col-sm-6" id="txt_desc_quezia">
      <br><br><h4 class="titulos">Sobre Nós</h4>
      <p class="textos">Aqui será a descrição da Quézia.</p>
  </div>
  </div>
    </center>
</div><br><br>

<div class="container" id="missao_visao_valores">
    <center>
    <div class="row">
      <div class="col-sm-12"> <h4 class="titulos">Missão, Visão e Valores</h4>
      <p class="textos">Nosso compromisso é promover o bem-estar dos(as) nossos(as) pacientes de maneira personalizada, oferecendo-lhes atendimento e serviços de alta qualidade com ampla determinação soluções de estética e saúde, buscando total satisfação de nossos clientes por meio de relacionamentos humanizados. Além disso, é nosso dever possibilitar uma nova visão e uma autoestima renovada para que todos que utilizarem dos nossos serviços possam se sentir confiantes e satisfeitos com os resultados.</p>
      </div>
      <div class="col-sm-12">
      <img id="img_missao_visao_valores" src="assets/img/missao_visao_valores.png">
      </div>
    </div>
    </center>
</div>

<div id="servicos_redirect" style="height: 60px;"></div>
<div class="container" id="servicos">
    <center>
  <div class="row">
    <div class="col-sm-12" id="txt_desc_quezia">
        <h4 class="titulos">Serviços</h4>
        <p class="textos">Aqui estão alguns dos procedimentos já realizados. Veja como nossos(as) clientes estão satisfeitos com os resultados, não perca tempo e faça igual, agende já a sua consulta!</p>
    
    <!-- CAROUSEL DE IMAGENS (Serviços)-->
    <div onmouseover="entrou_carrossel()" onmouseout="saiu_carrossel()" id="demo" class="carousel carousel-dark slide" data-bs-ride="carousel" style="border-top: solid 3px rgba(139,0,139,1); border-bottom: solid 3px rgba(139,0,139,1); border-left: solid 3px rgba(139,0,139,1); border-right: solid 3px rgba(139,0,139,1); width: 95%;">

    <!-- Indicadores de Slide -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
    </div>
  
    <!-- Carousel de Imagens -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/microagulhamento-final.png" id="slide1" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5>Slide 1</h5>
          <p>Primeiro slide mostrando o trabalho da empresa (aqui é a descrição).</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/img/toxina-butolinica-final.png" id="slide2" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5>Slide 2</h5>
          <p>Segundo slide mostrando o trabalho da empresa (aqui é a descrição).</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/img/preenchimento-final.png" id="slide3" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5>Peeling Químico</h5>
          <p>Terceiro slide mostrando o trabalho da empresa (aqui é a descrição).</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/img/peeling-1-final.png" id="slide4" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5>Slide 4</h5>
          <p>Quarto slide mostrando o trabalho da empresa (aqui é a descrição).</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/img/construcao.png" id="slide5" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5>Slide 5</h5>
          <p>Quinto slide mostrando o trabalho da empresa (aqui é a descrição).</p>
        </div>
      </div>
    </div>

    <!-- Botões de imagem anterior e próxima -->
    <button class="carousel-control-prev" id="botao_anterior" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" id="botao_proxima" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  <!-- -->
  </div>
  <br><br><br>
  </div>
  </div>
    </center>
</div>

<div class="container" id="produtos">
    <center>
        <h4 class="titulos">Processos Estéticos</h4>
        <p class="textos">Estes são os procedimentos estéticos oferecidos, que buscam renovar a sua pele e transformar a sua autoestima, deixando você livre para poder aproveitar o máximo da vida, de uma forma leve e se sentindo bem!</p>
        <p class="textos">Dê uma olhada e, em caso de dúvidas, entre em contato conosco via WhatsApp ou até mesmo por aqui, na aba de contato. Será um prazer ajudá-lo(a)!</p><br>
      <div class="row" id="produtos_desc1">
        <div class="col-sm-4">
            <b><h5 class="titulos_produtos">➤ Microagulhamento</h5></b>
            <img src="" alt="Imagem..."><br><br>
            <span class="spans_produtos">Manchas</span><br><br>
            <span class="spans_produtos">Estrias</span><br><br>
            <span class="spans_produtos">Cicatrizes</span><br><br>
            <p></p>
        </div>
            <div class="col-sm-4">
            <b><h5 class="titulos_produtos">➤ Toxina Butolínica</h5></b>
            <img src="" alt="Imagem..."><br><br>
            <span class="spans_produtos">Rejuvenescimento</span><br><br>
            <span class="spans_produtos">Marcas na pele</span><br><br>
            <span class="spans_produtos">Linhas de expressão</span><br><br>
            <p></p>
        </div>
        <div class="col-sm-4">
          <b><h5 class="titulos_produtos">➤ Preenchimento</h5></b>
          <img src="" alt="Imagem..."><br><br>
            <span class="spans_produtos">Estética facial e corporal</span><br><br>
            <span class="spans_produtos">Lábios</span><br><br>
            <span class="spans_produtos">Rugas</span><br><br>
        </div> 
      </div>

      <div class="row" id="produtos_desc2">
        <div class="col-sm-4">
          <b><h5 class="titulos_produtos">➤ Peeling Químico</h5></b>
          <img src="" alt="Imagem..."><br><br>
          <span class="spans_produtos">Elasticidade da pele</span><br><br>
          <span class="spans_produtos">Marcas de acne</span><br><br>
          <span class="spans_produtos">Rugas finas</span><br><br>
        </div>
        <div class="col-sm-4">
            <b><h5 class="titulos_produtos">➤ Peeling de Diamante</h5></b>
            <img src="" alt="Imagem..."><br><br>
            <span class="spans_produtos">Marcas de acne</span><br><br>
            <span class="spans_produtos">Manchas e Rugas</span><br><br>
            <span class="spans_produtos">Rejuvenescimento Facial</span><br><br>
        </div>
        <div class="col-sm-4">
            <b><h5 class="titulos_produtos">➤ Produto 6</h5></b>
            <img src="" alt="Imagem..."><br><br>
            <span class="spans_produtos">Span 1</span><br><br>
            <span class="spans_produtos">Span 2</span><br><br>
            <span class="spans_produtos">Span 3</span><br><br>
        </div>
      </div>

      <div class="row" id="produtos_desc3">
        <div class="col-sm-12">
          <b><h5 class="titulos_produtos">➤ Produto 7</h5></b>
          <img src="" alt="Imagem..."><br><br>
          <span class="spans_produtos">Span 1</span><br><br>
          <span class="spans_produtos">Span 2</span><br><br>
          <span class="spans_produtos">Span 3</span><br><br>
        </div>
      </div>
    </center>
</div>


<div id="contato_redirect" style="height: 80px;"></div>
<div class="container" id="contato">
  <center><h4 class="titulos">Contato</h4></center><br>
  <img src="assets/img/contato.png" id="img_contato"><br><br>
  <p>Envie sua dúvida e assim que possível ela será respondida.</p>
  
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

</div>
</body>

<footer id="myFooter">
    <div class="container">
    <div class="row">
        <div class="col-sm-2">
            <h5>Início</h5>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#contato_redirect">Contato</a></li>
            </ul>
        </div>
        <div class="col-sm-5"><br><br>
          <ul>
              <li>
                  <p><b>Telefone:</b> Quézia Nunes da Costa Dolci - (11) 9...</p>
              </li><br>
              <li>
                  <p><b>Endereço:</b> Endereço da Quézia (onde ela atende).</p>
              </li>
          </ul>
      </div>
        <div class="col-sm-3">
                <div class="social-networks">
                <a href=""><img class='img_footer' src='assets/img/logo_whatsapp.png'></i></a>
                <a href="" class="facebook"><img class='img_footer' src='assets/img/logo_facebook.png'></i></a>
                <a href="" class="instagram"><img class='img_footer' src='assets/img/logo_instagram.png'></a>
            </div>
        </div>
    </div>
    </div>
<div class="footer-copyright">
    <p>©2022 Copyright - <a href="https://projetos.talentosdoifsp.gru.br/trlsites/" target="_blank">TRL Sites</a> <img style="height: 25px; width: 25px;" src="assets/img/brazil_footer.png"></p>
</div>
</footer>
</html>
