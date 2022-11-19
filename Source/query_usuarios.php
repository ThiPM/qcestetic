<?php
    session_start();
    require("../Source/Database/Connect.php");

    if(!isset($_SESSION['loggedIN_admin'])){
        header('Location: index.php');
        exit();
    }

    $nome = $_SESSION['usuario'][0];
    $adm = $_SESSION['usuario'][1];
?>
<!-- jQuery e CSS Bootstrap 5 -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery Google -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="icon" type="image/png" href="../assets/img/icon.jpg"/>
<title>Administração - Usuários</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Satisfy&family=Shippori+Antique+B1&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
* {
    font-family: 'Poppins', sans-serif;
}
.titulos {
    border-bottom: 4px double rgba(181,32,181,1);
    padding-bottom: 15px;
    width: 15%;
    font-weight: bold;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
}
.textos {
    text-align: center;
}
#bttn_deleteUsuario {
    border: none;
}
</style>

<?php
include_once "../Source/Database/Connect.php";
use Source\Database\Connect;

function listaUsuarios() {
try {
    $viewList = 
"
    SELECT*FROM usuarios;
";
    $query = Connect::getInstance()->query($viewList);
    $retDados = $query-> fetchAll(PDO::FETCH_ASSOC);
    return $retDados;
} catch (PDOException $exception) {
    die($exception);
}
}
$usuarios = listaUsuarios();
?>

<br>
<h4 class="titulos">Usuários</h4>
<p class="textos">Aqui é a área de usuários. Abaixo, você pode ver quais são os usuários cadastrados no seu website.</p>
<table class='table table-striped table-bordered table-hover'>
            <thead>
                <tr class='active'>
                    <th>Código do cliente</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Endereço</th>
                    <th>CEP</th>
                    <th>Cidade</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
               <?php foreach($usuarios as $usuarios) : ?>
                   <tr>
                     <td><?=$usuarios['id']?></td>
                     <td><?=$usuarios['nome']?></td>
                     <td><?=$usuarios['email']?></td>
                     <td><?=$usuarios['endereco']?></td>
                     <td><?=$usuarios['cep']?></td>
                     <td><?=$usuarios['cidade']?></td>
                     <td><?=$usuarios['telefone']?></td>
                    </tr>
               <?php endforeach; ?>
            </tbody>
            </table>
            <center><a href="../admin/hiddenPage.php"><button class="btn btn-primary" style="background-color: #b520b5;">Voltar</button></a><br><br></center>
