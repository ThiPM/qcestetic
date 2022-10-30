<!-- jQuery e CSS Bootstrap 5 -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery Google -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                     <td>
                    <!-- Botão de edit -->
                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                    <!-- -->

                    <!-- Botão de delete -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-file-x" viewBox="0 0 16 16">
                    <path d="M6.146 6.146a.5.5 0 0 1 .708 0L8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 0 1 0-.708z"/>
                    <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                    </svg>
                    <!-- -->
                    </td>
                    </tr>
               <?php endforeach; ?>
            </tbody>
            </table>
            <center><a href="../"><button class="btn btn-primary" style="background-color: #b520b5;">Voltar</button></a><br><br></center>
