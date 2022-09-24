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
<link rel="stylesheet" href="../assets/css/agendamento.css">
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

<div id="agendamento_redirect"></div>
<div class="container" id="agendamento">
<div class="row">
<div class="col-sm-10" id="form_agendamento">
  <form id="frmAgendamento">
		<div class="container">
	  <h2 class="titulos">Agendamento</h2><br>
      <p class="textos">Agende sua consulta abaixo:</p>
     
      <label class="label_form"><b>Procedimento:</b></label> 
      <select id="select_prod" class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option selected>Selecione o procedimento que deseja...</option>
        <option value="Microagulhamento">Microagulhamento</option>
        <option value="Tóxina Butolínica">Tóxina Butolínica</option>
        <option value="Preenchimento">Preenchimento</option>
        <option value="Peeling Químico">Peeling Químico</option>
        <option value="Peeling de Diamante">Peeling de Diamante</option>
        <option value="Fios de PDO">Fios de PDO</option>
        <option value="Procedimento Estético Injetável em Microvasos (PEIM)">Procedimento Estético Injetável em Microvasos (PEIM)</option>
        <option value="Bioestimulador de colágeno">Bioestimulador de colágeno</option>
        <option value="Skinbooster">Skinbooster</option>
        <option value="Limpeza de Pele">Limpeza de Pele</option>
        <option value="Mesoterapia Capilar">Mesoterapia Capilar</option>
        <option value="Mesoterapia Facial">Mesoterapia Facial</option>
        <option value="Criolipólise">Criolipólise</option>
        <option value="Intradermoterapia Corporal">Intradermoterapia Corporal</option>
        <option value="Carboxiterapia">Carboxiterapia</option>
        <option value="Ultracavitação ou Lipocavitação">Ultracavitação ou Lipocavitação</option>
        <option value="Radiofrequencia corporal"> Radiofrequencia corporal</option>
        <option value="Clareamento íntimo feminino">Clareamento íntimo feminino</option>
        <option value="Drenagem Linfática Manual">Drenagem Linfática Manual</option>
      </select><br><br>

      <label class="label_form"><b>Data da consulta:</b></label>
      <input type="date" id="data_consulta" name="data_consulta" required><br><br>

      <label class="label_form"><b>Horário da consulta:</b></label>
      <input type="time" id="horario_consulta" name="horario_consulta" required> 


      <button class="button_agendamento" id="btnAgendamento" type="button">Agendar</button>
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