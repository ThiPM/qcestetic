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
<title>Administração - Feedbacks</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Satisfy&family=Shippori+Antique+B1&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
* {
    font-family: 'Poppins', sans-serif;
}
</style>

<?php
include_once "../Source/Database/Connect.php";
use Source\Database\Connect;

function listaFeedbacks() {
try {
    $viewList = 
"
    SELECT *FROM feedback ORDER BY id_user DESC;
";
    $query = Connect::getInstance()->query($viewList);
    $retDados = $query-> fetchAll(PDO::FETCH_ASSOC);
    return $retDados;
} catch (PDOException $exception) {
    die($exception);
}
}
$feedbacks = listaFeedbacks();
?>

<table class='table table-striped table-bordered table-hover'>
            <thead>
                <tr class='active'>
                    <th>Código do cliente</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Mensagem/Dúvida</th>
                </tr>
            </thead>
            <tbody>
               <?php foreach($feedbacks as $feedbacks) : ?>
                   <tr>
                     <td><?=$feedbacks['id_user']?></td>
                     <td><?=$feedbacks['name']?></td>
                     <td><?=$feedbacks['email']?></td>
                     <td><?=$feedbacks['message']?></td>
                    </tr>
               <?php endforeach; ?>
            </tbody>
            </table>
            <center><a href="../admin/hiddenPage.php"><button class="btn btn-primary" style="background-color: #b520b5;">Voltar</button></a><br><br></center>
