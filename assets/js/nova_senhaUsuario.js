$(document).ready(function() {
    $("#btnFecharModal").on('click', function() {
        $("#modalCamposObrigatorios").modal("hide");
    });
    
    $("#btnNovaSenha").on('click', function() {
        var email = $("#email").val();
        if (email == "")
        $("#modalCamposObrigatorios").modal("show");
        else {
            $.ajax({
                url: '../process/processesNovaSenha.php',
                method: 'POST',
                data: {
                    login: 1,
                    type: "text",
                    emailPHP: email,
                },
                success: function(response) {
                    $("#response").html(response);

                    if (response.indexOf('success') >= 0)
                      $("#novaSenhaModalConfirm").modal("show");
                },
                dataType: 'text'
            });
        }
    });
});