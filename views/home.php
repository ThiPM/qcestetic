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
            <a class="nav-link" id="pags_redirect" href="#servicos_redirect">Serviços & Produtos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pags_redirect" href="#contato_redirect">Contato</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="nav-item-login" href="#">Entrar ↪</a>
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
<img src="assets/img/logo.png" id="img_entrada"><br>
<h2><b>Bem-vindo(a)!</b></h2>
<p class="textos">Você está na <span class="spans_colorized">QC Estética Avançada</span>, uma <span class="spans_colorized">clínica de processos estéticos</span> situada em Guarulhos, São Paulo. Aqui você poderá encontrar diversos tipos de <span class="spans_colorized">procedimentos estéticos voltados para saúde e beleza</span>.</p>
<p class="textos">Veja um pouco mais sobre a <span class="spans_colorized">empresa</span> e explore os <span class="spans_colorized">serviços e produtos que podem te ajudar a brilhar no dia-a-dia!</span></p>
</center>
</div>

<div id="desc_sobre_redirect" style="height: 50px;"></div>
<div class="container" id="desc_quezia">
    <center>
  <div class="row">
    <div class="col-sm-6" id="img_desc_quezia">
        <br><br><img id="img_quezia" src="assets/img/img_desc_quezia.jpg">
    </div>
    <div class="col-sm-6" id="txt_desc_quezia">
      <br><br><h4 class="titulos">Sobre Nós</h4>
      <p class="textos">Olá! Eu sou a Quézia Costa, formada pela faculdade Ibeco, sou profissional enfermeira há 10 anos, com experiência em cardiologia, clínica geral e educação em saúde.</p>
      <p class="textos">Registrada como Enfermeira esteta no COREN-SP 372094, atualmente trabalho com estetica facial, corporal e capilar, tendo especialidade em rejuvenescimento facial e harmonização facial com diversos cursos de especialização na área.</p>
      <button id="bttn_vermais_quezia" class="btn btn-primary">Ver mais... 🡳</button>
    </div>
    <div class="col-sm-6" id="img_desc_quezia_parte2">
      <img src="assets/img/logo_alternative.png" id="img_vermais_quezia">
    </div>
    <div class="col-sm-6" id="txt_desc_quezia_parte2">
    <p id="txt_vermais_quezia" class="textos">A experiência na área da saúde foi fundamental para que eu pudesse fundar a QC estética em 2021, percebendo que os pacientes precisavam de um profissional que cuida não somente da estética, mas, da saúde do corpo e autoestima, proporcionando acolhimento, conhecimento e excelência nas técnicas oferecidas.<br><br>
      Essa experiência também contribui bastante para os pacientes dividirem, de maneira tranquila, com os profissionais os desejos de alcançar excelentes resultados nos tratamentos estéticos, o que gera uma relação de confiança e amizade.
    </p><br>
    <button id="bttn_vermenos_quezia" class="btn btn-primary">Ver menos... ⤴</button>
    </div>
  </div>
    </center>
</div><br><br>

<div class="container" id="missao_visao_valores">
    <center>
    <div class="row">
      <div class="col-sm-12"> <h4 class="titulos">Missão, Visão e Valores</h4>
      <p class="textos">A empresa Quézia Costa Estética Avançada, surgiu com o propósito de cuidar, proporcionando <span class="spans_colorized">resultados naturais</span> e que <span class="spans_colorized">elevam a autoestima</span> dos pacientes, com a missão de realçar sem mudar a <span class="spans_colorized">beleza única</span> de cada um, utilizando diversos procedimentos estéticos adequados para cada avaliação.</p>  
      <p class="textos">Portanto, nosso compromisso é promover o <span class="spans_colorized">bem-estar dos(as) nossos(as) pacientes</span> de maneira personalizada, oferecendo-lhes <span class="spans_colorized">atendimento e serviços de alta qualidade</span> com ampla determinação, buscando a total satisfação de nossos clientes por meio de <span class="spans_colorized">relacionamentos humanizados</span>. Além disso, é nosso dever possibilitar <span class="spans_colorized">uma nova visão e uma autoestima renovada</span> para que todos que utilizarem dos nossos serviços possam se sentir confiantes e satisfeitos com os resultados.</p>
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
        <p class="textos">Aqui estão alguns dos  <span class="spans_colorized">procedimentos já realizados</span>. Veja como nossos(as) clientes estão  <span class="spans_colorized">satisfeitos com os resultados</span>, não perca tempo e faça igual, <span class="spans_colorized">agende já a sua consulta!</span></p>
    
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
        <img src="assets/img/toxina-butolinica-final.png" id="slide2" class="d-block w-100">
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
  <figcaption id="fig_img_slides">Imagens de demonstração dos serviços (clique ou toque nas imagens caso queira ver a descrição de cada procedimento).</figcaption>
  <br>
  </div>
  <div id="desc_slide1" class="col-sm-12"><br>
          <h5>◈ Microagulhamento</h5>
          <p>Antes e depois de um microagulhamento na parte facial para remoção de rugas e manchas na pele.</p>
  </div>
  <div id="desc_slide2" class="col-sm-12"><br>
          <h5>◈ Toxina Butolínica</h5>
          <p>Antes e depois de um tratamento facial utilizando a toxina butolínica.</p>
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

  </div>
    </center>
</div><br><br>

<div class="container" id="produtos">
    <center>
        <h4 class="titulos">Processos Estéticos</h4>
        <p class="textos">Estes são os <span class="spans_colorized">procedimentos estéticos</span> oferecidos, que buscam renovar a sua pele e transformar a sua autoestima, deixando você livre para poder aproveitar o máximo da vida, de uma forma leve e se sentindo bem!</p>
      <div class="row" id="produtos_desc1">
          <div id="produto1" class="col-sm-4">
            <b><h5 class="titulos_produtos">➤ Microagulhamento</h5></b>
            <img src="assets/img/microagulhamento-icon.png" class="imgs_desc_produtos"><br><br>
            <span class="spans_produtos">Redução de manchas na pele</span><br><br>
            <span class="spans_produtos">Estrias</span><br><br>
            <span class="spans_produtos">Cicatrizes</span><br><br>
            <p class="textos">O <span class="spans_colorized">Microagulhamento</span> ou <span class="spans_colorized">Dermaroller</span> é um tratamento estético que utiliza um pequeno rolo acoplado com microagulhas, que deslizam sobre a pele em determinados sentidos e com repetições sequenciais com objetivo de estimular a produção de colágeno na região.</p>
            <p id="txt_saibamais_produto1" class="textos">É indicado para homens e mulheres que desejam rejuvenescer a pele, promovendo a melhora das rugas, das cicatrizes de acne e a das estrias. Além disso, o procedimento também é indicado para alguns casos de queda capilar e calvície, cicatrizes hipertróficas e queimadura.</p>
            <button id="bttn_saibamais_produto1" class="btn btn-primary">Quero saber mais...</button>
            <button id="bttn_saibamenos_produto1" class="btn btn-primary">Entendi...</button>
          </div>

            <div id="produto2" class="col-sm-4">
            <b><h5 class="titulos_produtos">➤ Toxina Butolínica</h5></b>
            <img src="assets/img/toxina-icon.png" class="imgs_desc_produtos"><br><br>
            <span class="spans_produtos">Rejuvenescimento</span><br><br>
            <span class="spans_produtos">Diminuição de marcas na pele</span><br><br>
            <span class="spans_produtos">Linhas de expressão</span><br><br>
            <p class="textos">A <span class="spans_colorized">Toxina Botulínica</span> é o melhor e mais seguro método de rejuvenescimento, possui substâncias que quando administradas em algumas regiões, bloqueiam os sinais de movimento do músculo, prevenindo o aparecimento de novas linhas de expressão e controla as marcas já existentes.</p>
            <p id="txt_saibamais_produto2" class="textos">Sendo indicada para aqueles que estão incomodados com as linhas de expressão ou até mesmo as rugas geradas pelos movimentos repetitivos, nas regiões da glabela (entre as sobrancelhas), rugas da testa, pés de galinha (área dos olhos). Além dessas regiões, o procedimento é indicado para quem deseja levantar assobrancelhas, abrir os olhos (ocidentalização das orientais), levantar a ponta do nariz, corrigir o sorriso gengival e para o tratamento de hiperidrose (excesso de suor) nas axilas, mãos e pés.</p>
            <button id="bttn_saibamais_produto2" class="btn btn-primary">Quero saber mais...</button>
            <button id="bttn_saibamenos_produto2" class="btn btn-primary">Entendi...</button>
        </div>
        <div id="produto3" class="col-sm-4">
          <b><h5 class="titulos_produtos">➤ Preenchimento</h5></b>
          <img src="assets/img/preenchimento-icon.png" class="imgs_desc_produtos"><br><br>
            <span class="spans_produtos">Estética facial e corporal</span><br><br>
            <span class="spans_produtos">Lábios</span><br><br>
            <span class="spans_produtos">Rugas</span><br><br>
          <p class="textos">O <span class="spans_colorized">preenchimento</span> com ácido hialurônico é um procedimento que ajuda a amenizar os sinais do envelhecimento e a harmonizar a região do rosto. Consiste na injeção de substâncias dentro da pele ou logo abaixo dela, elevando-a, diminuindo a sua profundidade e dando volume na região.</p>
          <p id="txt_saibamais_produto3" class="textos">É  indicado para homens e mulheres que desejam corrigir os sulcos faciais ou harmonizar o rosto, as regiões de aplicação são: bigode chinês, olheiras, lábios, rugas profundas, linhas de marionete no canto dos lábios, contorno, mandíbula, maçãs do rosto, mento (queixo) e nariz. Além de tratar e diminuir rugas profundas, o preenchimento com ácido hialurônico contribui para melhorar a qualidade da pele. Outro benefício do preenchimento, é que ele não deixa mudanças drásticas na fisionomia, portanto não tira a identidade da pessoa, apenas atenua as marcas do tempo.</p>
          <button id="bttn_saibamais_produto3" class="btn btn-primary">Quero saber mais...</button>
          <button id="bttn_saibamenos_produto3" class="btn btn-primary">Entendi...</button>
        </div> 
      </div>

      <div class="row" id="produtos_desc2">
          <div id="produto4" class="col-sm-4">
          <b><h5 class="titulos_produtos">➤ Peeling Químico</h5></b>
          <img src="assets/img/peeling_quimico-icon.png" class="imgs_desc_produtos"><br><br>
          <span class="spans_produtos">Elasticidade da pele</span><br><br>
          <span class="spans_produtos">Marcas de acne</span><br><br>
          <span class="spans_produtos">Remoção de rugas finas</span><br><br>
          <p class="textos">
          O <span class="spans_colorized">Peeling Químico</span> é um tratamento estético eficiente indicado para tratar manchas, marcas de acnes e rugas finas. Utiliza o ácido retinóico sobre a pele na região a ser tratada, causando a descamação e acelerando o processo de renovação celular.</p>
          <p id="txt_saibamais_produto4" class="textos"> indicado para homens e mulheres que desejam melhorar o aspecto da pele, removendo manchas, marcas de acne e rugas finas, pois aumenta a elasticidade da pele. Também é indicado para o tratamento de Melasma, pintas nas costas e das mãos.
          Existem três tipos de peeling Químico, sendo eles:<br>
          ◉ Peeling Químico Superficial: Atua na camada mais superficial da pele, com uma descamação mais fina. Ele é indicado para pessoas que tem a pele ressecada, acne ou rugas superficiais como linhas de expressão e também em pequenas manchas.<br>
          ◉ Peeling Químico Médio: Remove as células da parte da derme e epiderme da pele. Indicada nos casos de tonalidade desigual da pele, rugas e cicatrizes mais profundas.<br>
          ◉ Peeling Químico Profundo: Remove as camadas da pele mais profundas, sendo indicada para regiões mais danificadas pelo sol e outras cicatrizes.<br></p>
          <button id="bttn_saibamais_produto4" class="btn btn-primary">Quero saber mais...</button>
          <button id="bttn_saibamenos_produto4" class="btn btn-primary">Entendi...</button>
        </div>
        <div id="produto5" class="col-sm-4">
            <b><h5 class="titulos_produtos">➤ Peeling de Diamante</h5></b>
            <img src="assets/img/peeling_diamante-icon.png" class="imgs_desc_produtos"><br><br>
            <span class="spans_produtos">Remoção de marcas de acne</span><br><br>
            <span class="spans_produtos">Combate à manchas e rugas</span><br><br>
            <span class="spans_produtos">Rejuvenescimento Facial</span><br><br>
          <p class="textos">
          O <span class="spans_colorized">Peeling de Diamante</span> é um tratamento que proporciona uma leve esfoliação para a remoção da camada superior de pele morta, contribuindo para uma melhor circulação sanguínea e uma pele mais elástica, suave e fresca.</p>
          <p id="txt_saibamais_produto5" class="textos">O tratamento é indicado para o tratamento de pele oleosa, acne, cicatriz de acne, manchas, sardas, pequenas rugas, poros dilatados e estrias, além de ser muito procurado por homens e mulheres que desejam um rejuvenescimento facial, pois incita a renovação da pele e restaura a estrutura da derme. As sessões de Peeling de Diamante são rápidas, indolores, estimulam a formação de colágeno, a regeneração celular e promovem a esfoliação da pele, deixando a pele mais bonita, macia e saudável.</p>
          <button id="bttn_saibamais_produto5" class="btn btn-primary">Quero saber mais...</button>
          <button id="bttn_saibamenos_produto5" class="btn btn-primary">Entendi...</button>
        </div>
        <div id="produto6" class="col-sm-4">
            <b><h5 class="titulos_produtos">➤ Fios de PDO</h5></b>
            <img src="assets/img/fios_pdo-icon.png" class="imgs_desc_produtos"><br><br>
            <span class="spans_produtos">Firmeza da pele</span><br><br>
            <span class="spans_produtos">Estímulo de colágeno</span><br><br>
            <span class="spans_produtos">Combate às rugas</span><br><br>
            <p class="textos">
            Os <span class="spans_colorized">fios de PDO</span> são compostos de polidioxanona, substância sintética que cumpre a mesma função que o bioestimulador Sculptra (ácido poli-L-lático).  O material é totalmente absorvível pelo organismo e aplicado com auxílio de uma agulha especial ou cânula (agulha que não tem ponta cortante).</p>
            <p id="txt_saibamais_produto6" class="textos">A aplicação é indolor ou pouco incômoda, realizada com anestesia de creme tópico. O tratamento com fios de PDO é recomendado para pacientes que necessitam de recuperação da qualidade e firmeza da pele.
            Assim como no caso dos bioestimuladores, os resultados são sentidos em algumas semanas quando a produção de colágeno se torna mais intensa e palpável. Um teste demonstra o resultado: tracionando-se o local tratado, sente-se a pele mais firme ou mais rija.
            Os três tipos de fios de PDO, são:<br>
            ◉ Fios lisos: podem ser aplicados em todas as regiões da face, inclusive nas mais delicadas como as pálpebras. Usados para melhora da flacidez e da qualidade da pele, combate as indesejadas rugas finas que denotam envelhecimento. Não provocam volumização e são de aplicação muito segura. Dependendo da área, podem ser utilizados até 15 fios numa mesma região, em disposição como palitos paralelos, cruzados, em leque ou em hashtags para um maior efeito colagênico.<br>
            ◉ Fios espiculados: possuem pequenas garras em sua extensão que proporcionam efeito lifting (elevação dos tecidos pendentes) logo após a sua inserção, com efeito imediato, e cujo efeito mais lento é novamente o estímulo do colágeno da pele, o que favorece prolongamento do resultado além do período de absorção dos fios.<br>
            ◉ Fios parafuso: seu formato promove efeito preenchedor sutil, indicado para sulcos mais marcados do que os indicados para os fios lisos. Em determinados sulcos podem ser usados dois ou mais fios no mesmo local (técnica em sanduíche).<br>
          </p>
          <button id="bttn_saibamais_produto6" class="btn btn-primary">Quero saber mais...</button>
          <button id="bttn_saibamenos_produto6" class="btn btn-primary">Entendi...</button>
        </div>
      </div>

      <div class="row" id="produtos_desc3">
        <div id="produto7" class="col-sm-4">
          <b><h5 class="titulos_produtos">➤ PEIM</h5></b>
          <img src="assets/img/peim-final.png" class="imgs_desc_produtos"><br><br>
          <span class="spans_produtos">Combate às varizes</span><br><br>
          <p class="textos"></p>
          <p id="txt_saibamais_produto7" class="textos"></p>
          <button id="bttn_saibamais_produto7" class="btn btn-primary">Quero saber mais...</button>
          <button id="bttn_saibamenos_produto7" class="btn btn-primary">Entendi...</button>
        </div>

        <div id="produto8" class="col-sm-4">
          <b><h5 class="titulos_produtos">➤ Bioestimulador de colágeno</h5></b>
          <img src="" alt="Imagem..."><br><br>
          <span class="spans_produtos">Diminuição de rugas</span><br><br>
          <span class="spans_produtos">Pele firme e viçosa</span><br><br>
          <span class="spans_produtos">Correção de cicatrizes</span><br><br>
          <p class="textos"></p>
          <p id="txt_saibamais_produto8" class="textos"></p>
          <button id="bttn_saibamais_produto8" class="btn btn-primary">Quero saber mais...</button>
          <button id="bttn_saibamenos_produto8" class="btn btn-primary">Entendi...</button>
        </div>

        <div id="produto9" class="col-sm-4">
          <b><h5 class="titulos_produtos">➤ Skinbooster</h5></b>
          <img src="" alt="Imagem..."><br><br>
          <span class="spans_produtos">Span 1</span><br><br>
          <span class="spans_produtos">Span 2</span><br><br>
          <span class="spans_produtos">Span 3</span><br><br>
          <p class="textos"></p>
          <p id="txt_saibamais_produto9" class="textos"></p>
          <button id="bttn_saibamais_produto9" class="btn btn-primary">Quero saber mais...</button>
          <button id="bttn_saibamenos_produto9" class="btn btn-primary">Entendi...</button>
        </div>
      </div>

      <div class="row" id="produtos_desc_4">
      <div id="produto10" class="col-sm-4">
          <b><h5 class="titulos_produtos">➤ Produto 10</h5></b>
          <img src="" alt="Imagem..."><br><br>
          <span class="spans_produtos">Span 1</span><br><br>
          <span class="spans_produtos">Span 2</span><br><br>
          <span class="spans_produtos">Span 3</span><br><br>
          <p class="textos"></p>
          <p id="txt_saibamais_produto10" class="textos"></p>
          <button id="bttn_saibamais_produto10" class="btn btn-primary">Quero saber mais...</button>
          <button id="bttn_saibamenos_produto10" class="btn btn-primary">Entendi...</button>
        </div>

        <div id="produto11" class="col-sm-4">
          <b><h5 class="titulos_produtos">➤ Produto 11</h5></b>
          <img src="" alt="Imagem..."><br><br>
          <span class="spans_produtos">Span 1</span><br><br>
          <span class="spans_produtos">Span 2</span><br><br>
          <span class="spans_produtos">Span 3</span><br><br>
          <p class="textos"></p>
          <p id="txt_saibamais_produto11" class="textos"></p>
          <button id="bttn_saibamais_produto11" class="btn btn-primary">Quero saber mais...</button>
          <button id="bttn_saibamenos_produto11" class="btn btn-primary">Entendi...</button>
        </div>

        <div id="produto12" class="col-sm-4">
          <b><h5 class="titulos_produtos">➤ Produto 12</h5></b>
          <img src="" alt="Imagem..."><br><br>
          <span class="spans_produtos">Span 1</span><br><br>
          <span class="spans_produtos">Span 2</span><br><br>
          <span class="spans_produtos">Span 3</span><br><br>
          <p class="textos"></p>
          <p id="txt_saibamais_produto12" class="textos"></p>
          <button id="bttn_saibamais_produto12" class="btn btn-primary">Quero saber mais...</button>
          <button id="bttn_saibamenos_produto12" class="btn btn-primary">Entendi...</button>
        </div>
      </div>

      <br><br><br><h4 class="titulos">Tratamentos corporais</h4>
      <p style="text-align: center;">Estes são os <span class="spans_colorized">tratamentos corporais</span> oferecidos:</p>
      <div class="row" id="produtos_desc5">
          <div id="produto13" class="col-sm-4">
            <b><h5 class="titulos_produtos">➤ Criolipólise</h5></b>
            <img src="assets/img/" class="imgs_desc_produtos"><br><br>
            <span class="spans_produtos">Redução de gordura localizada</span><br><br>
            <p class="textos"> A <span class="spans_colorized">Criolipólise</span> é uma técnica que consiste na cristalização e congelamento das células de gordura por resfriamento localizado do tecido adiposo subcutâneo com temperatura em torno de -5 a -15 °C, causando morte  celular.
            Tem a capacidade de eliminar as gorduras localizadas, reduzindo as medidas corporais em até 6 cm na primeira aplicação.</p>
          </div>

            <div id="produto14" class="col-sm-4">
            <b><h5 class="titulos_produtos">➤ Mesoterapia Corporal</h5></b>
            <img src="assets/img/" class="imgs_desc_produtos"><br><br>
            <span class="spans_produtos">Redução de gordura localizada</span><br><br>
            <span class="spans_produtos">Celulites</span><br><br>
            <span class="spans_produtos">Flacidez da pele</span><br><br>
            <p class="textos">A <span class="spans_colorized">Mesoterapia Corporal</span> é um procedimento indicado para redução de gorduras localizadas, celulites, flacidez e estrias. Este procedimento consiste na aplicação subcutânea de substâncias específicas (lipolíticas, eutróficas, etc) nas áreas em tratamento.</p>
            </div>

        <div id="produto15" class="col-sm-4">
          <b><h5 class="titulos_produtos">➤ Carboxiterapia</h5></b>
          <img src="assets/img/" class="imgs_desc_produtos"><br><br>
            <span class="spans_produtos">Estética facial e corporal</span><br><br>
            <span class="spans_produtos">Lábios</span><br><br>
            <span class="spans_produtos">Rugas</span><br><br>
          <p class="textos">Promove a eliminação de gordura localizada, flacidez e estrias, com aplicação intradérmica e subcutânea de gás medicinal, causando a ruptura das células gordurosas e substituição das fibras colágenas e elásticas.
          O procedimento é feito com o uso de um aparelho acoplado a um cilindro de gás carbônico medicinal. Este equipamento regula a vazão do gás, para uma seringa com agulha de calibre mínimo. A profundidade da aplicação da agulha varia em cada caso.</p>
          <p></p>
        </div> 
      </div>

      <div class="row" id="produtos_desc6">
          <div id="produto16" class="col-sm-4">
            <b><h5 class="titulos_produtos">➤ Ultracavitação ou Lipocavitação</h5></b>
            <img src="assets/img/" class="imgs_desc_produtos"><br><br>
            <span class="spans_produtos">Redução de manchas na pele</span><br><br>
            <span class="spans_produtos">Estrias</span><br><br>
            <span class="spans_produtos">Cicatrizes</span><br><br>
            <p class="textos">O <span class="spans_colorized">Microagulhamento</span> ou <span class="spans_colorized">Dermaroller</span> é um tratamento estético que utiliza um pequeno rolo acoplado com microagulhas, que deslizam sobre a pele em determinados sentidos e com repetições sequenciais com objetivo de estimular a produção de colágeno na região.</p>
            <p id="txt_saibamais_produto16" class="textos">É indicado para homens e mulheres que desejam rejuvenescer a pele, promovendo a melhora das rugas, das cicatrizes de acne e a das estrias. Além disso, o procedimento também é indicado para alguns casos de queda capilar e calvície, cicatrizes hipertróficas e queimadura.</p>
            <button id="bttn_saibamais_produto16" class="btn btn-primary">Quero saber mais...</button>
            <button id="bttn_saibamenos_produto16" class="btn btn-primary">Entendi...</button>
          </div>

            <div id="produto17" class="col-sm-4">
            <b><h5 class="titulos_produtos">➤ Radiofrequencia corporal</h5></b>
            <img src="assets/img/" class="imgs_desc_produtos"><br><br>
            <span class="spans_produtos">Rejuvenescimento</span><br><br>
            <span class="spans_produtos">Diminuição de marcas na pele</span><br><br>
            <span class="spans_produtos">Linhas de expressão</span><br><br>
            <p class="textos">A <span class="spans_colorized">Toxina Botulínica</span> é o melhor e mais seguro método de rejuvenescimento, possui substâncias que quando administradas em algumas regiões, bloqueiam os sinais de movimento do músculo, prevenindo o aparecimento de novas linhas de expressão e controla as marcas já existentes.</p>
            <p id="txt_saibamais_produto17" class="textos">Sendo indicada para aqueles que estão incomodados com as linhas de expressão ou até mesmo as rugas geradas pelos movimentos repetitivos, nas regiões da glabela (entre as sobrancelhas), rugas da testa, pés de galinha (área dos olhos). Além dessas regiões, o procedimento é indicado para quem deseja levantar assobrancelhas, abrir os olhos (ocidentalização das orientais), levantar a ponta do nariz, corrigir o sorriso gengival e para o tratamento de hiperidrose (excesso de suor) nas axilas, mãos e pés.</p>
            <button id="bttn_saibamais_produto17" class="btn btn-primary">Quero saber mais...</button>
            <button id="bttn_saibamenos_produto17" class="btn btn-primary">Entendi...</button>
        </div>
        <div id="produto18" class="col-sm-4">
          <b><h5 class="titulos_produtos">➤ Microdermoabrasão corporal</h5></b>
          <img src="assets/img/" class="imgs_desc_produtos"><br><br>
            <span class="spans_produtos">Estética facial e corporal</span><br><br>
            <span class="spans_produtos">Lábios</span><br><br>
            <span class="spans_produtos">Rugas</span><br><br>
          <p class="textos">O <span class="spans_colorized">preenchimento</span> com ácido hialurônico é um procedimento que ajuda a amenizar os sinais do envelhecimento e a harmonizar a região do rosto. Consiste na injeção de substâncias dentro da pele ou logo abaixo dela, elevando-a, diminuindo a sua profundidade e dando volume na região.</p>
          <p id="txt_saibamais_produto18" class="textos">É  indicado para homens e mulheres que desejam corrigir os sulcos faciais ou harmonizar o rosto, as regiões de aplicação são: bigode chinês, olheiras, lábios, rugas profundas, linhas de marionete no canto dos lábios, contorno, mandíbula, maçãs do rosto, mento (queixo) e nariz. Além de tratar e diminuir rugas profundas, o preenchimento com ácido hialurônico contribui para melhorar a qualidade da pele. Outro benefício do preenchimento, é que ele não deixa mudanças drásticas na fisionomia, portanto não tira a identidade da pessoa, apenas atenua as marcas do tempo.</p>
          <button id="bttn_saibamais_produto18" class="btn btn-primary">Quero saber mais...</button>
          <button id="bttn_saibamenos_produto18" class="btn btn-primary">Entendi...</button>
        </div> 
      </div>

      <div class="row" id="produtos_desc7">
        <div id="produto19" class="col-sm-4">
          <b><h5 class="titulos_produtos">➤ Rejuvenescimento e clareamento íntimo feminino</h5></b>
          <img src="assets/img/" class="imgs_desc_produtos"><br><br>
          <span class="spans_produtos">Combate às varizes</span><br><br>
          <p class="textos"></p>
          <p id="txt_saibamais_produto19" class="textos"></p>
          <button id="bttn_saibamais_produto19" class="btn btn-primary">Quero saber mais...</button>
          <button id="bttn_saibamenos_produto19" class="btn btn-primary">Entendi...</button>
        </div>

        <div id="produto20" class="col-sm-4">
          <b><h5 class="titulos_produtos">➤ Drenagem Linfática Manual</h5></b>
          <img src="" alt="Imagem..."><br><br>
          <span class="spans_produtos">Diminuição de rugas</span><br><br>
          <span class="spans_produtos">Pele firme e viçosa</span><br><br>
          <span class="spans_produtos">Correção de cicatrizes</span><br><br>
          <p class="textos"></p>
          <p id="txt_saibamais_produto20" class="textos"></p>
          <button id="bttn_saibamais_produto20" class="btn btn-primary">Quero saber mais...</button>
          <button id="bttn_saibamenos_produto20" class="btn btn-primary">Entendi...</button>
        </div>
      </div>
    </center>
</div>


<div id="contato_redirect" style="height: 80px;"></div>
<div class="container" id="contato">
  <center><h4 class="titulos">Contato</h4></center><br>
  <p>Quer marcar uma consulta ou saber mais ainda sobre algum produto? Entre em contato conosco via WhatsApp!</p>

  <a href="https://wa.me/5511960836877?text=Digite%20aqui%20sua%20mensagem%20para%20QC%20Estética..." target="_blank"><img src="assets/img/contato.png" id="img_contato"></a><br><br>
  <p>Caso tenha alguma dúvida mais específica, preencha o formulário abaixo e assim que possível entraremos em contato.</p>
  
  <form method="POST" id="form_ctt" action="Source/Database/query.php" class="row g-3">
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
  <div id="msg">
  <?php
 if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset ($_SESSION['msg']);
}
  ?>
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
                  <p><b>Endereço:</b>...</p>
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
    <p>©2022 Copyright - <a href="https://projetos.talentosdoifsp.gru.br/trlsites/" target="_blank">TRL Sites</a> <img style="height: 25px; width: 25px;" src="assets/img/brazil_footer.png"> - Images by <a href="https://br.freepik.com/" target="_blank">Freepik</a></p>
</div>
</footer>
<a href="https://wa.me/5511960836877?text=Digite%20aqui%20sua%20mensagem%20para%20QC%20Estética..." target="_blank">
<img id="whatsapp_button" src="assets/img/logo_whatsapp.png">
</a>
</html>
