<!DOCTYPE html>
<html lang="pt-br">
<?php
session_start();
?>
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
<link rel="icon" type="image/png" href="assets/img/icon.jpg"/>
<link rel="stylesheet" href="assets/css/home.css">
<script src="assets/js/home.js"></script>
</head>

<nav class="navbar navbar-expand-sm navbar-dar" id="menu-h">
    <div class="container-fluid" id="menu-content">
  
        <a class="navbar-brand" href="#"><img src="assets/img/logo_menu1.png" style="height: 60px; width: 60px; border-radius: 20%;"></a> 
      
      <button class="navbar-toggler" style="background-color: #6c016c8e;" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <img src="assets/img/img_menu_split.png" style="height: 20px; width: 20px;">
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" id="qc_menu" href="#">QC Estética</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pags_redirect" href="#desc_sobre_redirect">Sobre Nós</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pags_redirect" href="views/produtos.php">Serviços & Produtos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pags_redirect" href="#contato_redirect">Contato</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="nav-item-login" href="views/pagUsuario.php">Entrar <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/><path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/></svg></a>
        </li>
        
      </ul>
      </div>
    </div>
</nav>
  
<body id="top_redirect">
<div class="container" id="principal">

<div class="container" id="entrada">
<img src="assets/img/logo.png" id="img_entrada"><br>
<h2><b>Bem-vindo(a)!</b></h2>
<p class="textos">Você está na <span class="spans_colorized">QC Estética Avançada</span>, situada em Guarulhos, São Paulo. Aqui você poderá encontrar diversos tipos de <span class="spans_colorized">procedimentos estéticos voltados para saúde e beleza</span>.</p>
<p class="textos">Veja um pouco mais sobre a <span class="spans_colorized">empresa</span> e explore os <span class="spans_colorized">serviços e produtos que podem te ajudar a brilhar no dia-a-dia!</span></p>
</div>

<div id="desc_sobre_redirect" style="height: 50px;"></div>
<div class="container" id="desc_quezia">
  <div class="row">
    <div class="col-sm-6" id="img_desc_quezia">
        <br><br><img id="img_quezia" src="assets/img/img_desc_quezia.jpg">
    </div>
    <div class="col-sm-6" id="txt_desc_quezia">
      <br><br><h4 class="titulos">Sobre Nós</h4>
      <p class="textos">Olá! Eu sou a Quézia Costa, formada pela faculdade Ibeco, sou profissional enfermeira há 10 anos, com experiência em cardiologia, clínica geral e educação em saúde.</p>
      <p class="textos">Registrada como Enfermeira esteta no COREN-SP 372094, atualmente trabalho com estética facial, corporal e capilar, tendo especialidade em rejuvenescimento facial e harmonização facial com diversos cursos de especialização na área.</p>
      <button id="bttn_vermais_quezia" class="btn btn-primary">Ver mais... <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/></svg></button>
    </div>
    <div class="col-sm-6" id="img_desc_quezia_parte2">
      <img src="assets/img/logo_alternative.png" id="img_vermais_quezia">
    </div>
    <div class="col-sm-6" id="txt_desc_quezia_parte2">
    <p id="txt_vermais_quezia" class="textos">A experiência na área da saúde foi fundamental para que eu pudesse fundar a QC estética em 2021, percebendo que os pacientes precisavam de um profissional que cuida não somente da proporção, mas, da saúde do corpo e autoestima, proporcionando acolhimento, conhecimento e excelência nas técnicas oferecidas.<br><br>
      Essa experiência também contribui bastante para os pacientes dividirem, de maneira tranquila com os profissionais, os desejos de alcançar excelentes resultados nos tratamentos estéticos, o que gera uma relação de confiança e amizade.
    </p><br>
    <button id="bttn_vermenos_quezia" class="btn btn-primary">Ver menos... ⤴</button>
    </div>
  </div>
</div><br><br>

<div class="container" id="missao_visao_valores">
    <div class="row">
      <div class="col-sm-12"><h4 class="titulos">Missão, Visão e Valores</h4>
      <p class="textos">A empresa Quézia Costa Estética Avançada, surgiu com o propósito de cuidar, proporcionando <span class="spans_colorized">resultados naturais</span> e que <span class="spans_colorized">elevam a autoestima</span> dos pacientes, com a missão de realçar sem mudar a <span class="spans_colorized">beleza única</span> de cada um, utilizando diversos procedimentos estéticos adequados para cada avaliação.</p>  
      <p class="textos">Portanto, nosso compromisso é promover o <span class="spans_colorized">bem-estar dos(as) nossos(as) pacientes</span> de maneira personalizada, oferecendo-lhes <span class="spans_colorized">atendimento e serviços de alta qualidade</span> com ampla determinação, buscando a total satisfação de nossos clientes por meio de <span class="spans_colorized">relacionamentos humanizados</span>. Além disso, é nosso dever possibilitar <span class="spans_colorized">uma nova visão e uma autoestima renovada</span> para que todos que utilizarem dos nossos serviços possam se sentir confiantes e satisfeitos com os resultados.</p>
    </div>
      <div class="col-sm-12">
      <img id="img_missao_visao_valores" src="assets/img/missao_visao_valores.png">
      </div>
    </div>
</div>

<div id="servicos_redirect" style="height: 60px;"></div>
<div class="container" id="servicos">
    <center>
  <div class="row">
    <div class="col-sm-12" id="txt_desc_quezia">
        <h4 class="titulos">Serviços</h4>
        <p class="textos">Aqui estão alguns dos nossos  <span class="spans_colorized">trabalhos já realizados</span>. Veja como nossos(as) clientes estão  <span class="spans_colorized">satisfeitos com os resultados</span>, não perca tempo e faça igual, <span class="spans_colorized">agende já a sua consulta!</span></p>
    
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
      <div id="slide1_div" class="carousel-item active">
        <img src="assets/img/microagulhamento-final.png" id="slide1" class="d-block w-100">
      </div>
      <div id="slide2_div" class="carousel-item">
        <img src="assets/img/toxina-botulinica-final.png" id="slide2" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="assets/img/preenchimento-final.png" id="slide3" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="assets/img/peeling-1-final.png" id="slide4" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="assets/img/preenchimento-final2.png" id="slide5" class="d-block w-100">
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
  <br>
  <div id="desc_slide1" class="col-sm-12"><br>
          <h5>◈ Microagulhamento</h5>
          <p>Antes e depois de um microagulhamento na parte facial para remoção de rugas e manchas na pele.</p>
  </div>
  <div id="desc_slide2" class="col-sm-12"><br>
          <h5>◈ Toxina Botulínica</h5>
          <p>Antes e depois de um tratamento facial utilizando a toxina botulínica.</p>
  </div>
  <div id="desc_slide3" class="col-sm-12"><br>
          <h5>◈ Preenchimento Facial</h5>
          <p>Antes e depois de um preenchimento facial para diminuição de olheiras.</p>
  </div>
  <div id="desc_slide4" class="col-sm-12"><br>
          <h5>◈ Peeling Químico</h5>
          <p>Antes e depois de um procedimento facial de peeling do tipo químico para remoção de marcas na pele.</p>
  </div>
  <div id="desc_slide5" class="col-sm-12"><br>
          <h5>◈ Preenchimento labial</h5>
          <p>Antes e depois de um preenchimento labial.</p>
  </div>
  <figcaption id="fig_img_slides">Imagens de demonstração dos serviços (clique ou toque nas imagens caso queira ver a descrição de cada procedimento).</figcaption>
  <img id="icon_touch" src="assets/img/icon_touch.gif">
  </div>
  </div>
    </center>
</div>

<div id="contato_redirect" style="height: 80px;"></div>
<div class="container" id="contato_horario">
<div class="row">

<!-- Contato -->
<div class="col-sm-6">
<div class="container" id="contato">
  <h4 class="titulos">Contato</h4><br>
  <p>Quer marcar uma consulta ou saber mais ainda sobre algum produto? Entre em contato conosco via <a style="color: green; text-decoration: none;" href="https://wa.me/5511960836877?text=Digite%20aqui%20sua%20mensagem%20para%20QC%20Estética..." target="_blank">WhatsApp</a>!</p>

  <img src="assets/img/contato.png" id="img_contato"></a><br><br>
  <p>Caso tenha alguma dúvida mais específica, preencha o formulário abaixo e assim que possível entraremos em contato.</p>
  
  <form method="POST" id="form_ctt" autocomplete="off" action="Source/Database/query.php" class="row g-3">
    <div class="col-md-6">
      <label class="form-label">Nome:</label>
      <input type="text" name="name" required="required" placeholder="Digite aqui o seu nome.." id="campo_nome" class="form-control">
    </div>
    <div class="col-md-6">
      <label class="form-label">Email:</label>
      <input type="email" name="email" required="required" placeholder="Digite aqui o seu email..." id="campo_email" class="form-control">
    </div><br><br><br><br>
    <div class="col-md-12">
      <label class="form-label">Mensagem:</label>
      <textarea type="text" maxlength="1000" required="required" minlength="1" name="message" style="height: 150px;" placeholder="Digite aqui a sua mensagem..." id="campo_msg" class="form-control"></textarea>
    </div>
    <div class="col-12">
    <button type="submit" id="bttn_enviar" class="btn btn-primary">Enviar</button>
    </div>
  </form>
  <div id="msg">
  <?php
 if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset ($_SESSION['msg']);
}
  ?>
  </div><br>
  </div>
</div>
<!-- -->

<!-- Horários de atendimento -->
<div class="col-sm-6">
<h4 class="titulos">Horários de atendimento</h4><br>
<p class="horarios">Estes são os horários de atendimento durante a semana:</p>
<p class="horarios" id="horarioAtendimento"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16"><path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/><path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/></svg> <b>Terça a Sábado</b> - das 8h às 21h</p><br>

<h4 class="titulos">Localização</h4><br>
<iframe id="mapa_loc" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.709959908873!2d-46.5371554853863!3d-23.470924364143002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef55dfd0c39db%3A0x1da2b0f36b1bb4f1!2sR.%20Joseph%20Zarzour%2C%2093%20-%20Jardim%20Guarulhos%2C%20Guarulhos%20-%20SP%2C%2007020-081!5e0!3m2!1spt-BR!2sbr!4v1668952685681!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- -->
</div>
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
                  <p><b>Telefone:</b> Quézia Nunes da Costa Dolci - (11) 96083-6877</p>
              </li><br>
              <li>
                  <p><b>Endereço:</b> Rua Joseph Zarzour, 93 - Vila Moreira, Guarulhos - SP</p>
              </li>
          </ul>
      </div>
        <div class="col-sm-3">
                <div class="social-networks">
                <a href="https://wa.me/5511960836877?text=Digite%20aqui%20sua%20mensagem%20para%20QC%20Estética..." target="_blank"><img class='img_footer' src='assets/img/logo_whatsapp.png'></a>
                <a href="https://www.facebook.com/queziajhs" target="_blank"><img class='img_footer' src='assets/img/logo_facebook.png'></a>
                <a href="https://www.instagram.com/queziancosta/" target="_blank"><img class='img_footer' src='assets/img/logo_instagram.png'></a>
            </div>
        </div>
    </div>
    </div>
<div class="footer-copyright">
    <p>©2022 Copyright - <a href="https://projetos.talentosdoifsp.gru.br/trlsites/" target="_blank">TRL Sites</a> <img style="height: 25px; width: 25px;" src="assets/img/brazil_footer.png"> - Icons by <a href="https://br.freepik.com/" target="_blank">Freepik</a> & <a href="https://icons.getbootstrap.com/" target="_blank">Bootstrap</a></p>
</div>
</footer>
<a href="https://wa.me/5511960836877?text=Digite%20aqui%20sua%20mensagem%20para%20QC%20Estética..." target="_blank">
<img id="whatsapp_button" src="assets/img/logo_whatsapp.png">
</a>
</html>
