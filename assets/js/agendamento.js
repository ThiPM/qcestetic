$(document).ready(function() {
    $("#btnAgendament").on('click', function() {
        var servico = $("#select_prod").val();
        var hora = $("#horario_consulta").val();
        var data = $("#data_consulta").val();
        var cliente = $("#cliente").val();
        var email = $("#email").val();

        if (hora == "" || data == "" || servico == "")
            alert("Preencha os campos obrigatórios!");
        else {
            $.ajax({
                url: '../process/processesAgendamento.php',
                method: 'POST',
                data: {
                    login: 1,
                    type: "agendamento",
                    servicoPHP: servico,
                    horaPHP: hora,
                    dataPHP: data,
                    clientePHP: cliente,
                    emailPHP: email,
                },
                success: function(response) {
                    $("#response").html(response);

                    if (response.indexOf('success') >= 0) {
                        $("#agendamentoConfirm").modal("show");
                    };
                },
                dataType: 'text'
            });
        }
    });
});