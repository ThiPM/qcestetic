<?php
require_once("../Source/Database/Connect.php");

use source\Database\Connect;

$email = $_POST['emailPHP_delete'];
$codigo = $_POST['codigoPHP_delete'];
$codigo_confirm = $_POST['codigoPHP_delete_confirm'];

if ($codigo === $codigo_confirm) {
    $conn = Connect::getInstance(); 
    $query = $conn->prepare("DELETE FROM usuarios WHERE email = ?;");
    $query->execute(array($email));

    echo "<div style='text-align: center;' class='alert alert-warning' role='alert'>
            Conta deletada com sucesso.
          </div>";
    echo "<div style='display:none'>";
    exit("success");
    echo "</div>";
}
else {
    echo "
            <script>
            $(document).ready(function(){
                $('#codigoDeletar_confirm').css('border', '1px solid #b30000')
            });
            </script>
            ";
            echo "<div style='text-align: center;' class='alert alert-danger' role='alert'>
            O código está incorreto.
            </div>";
}

