$(document).ready(function() {
    $("#btnLogin").on('click', function() {
        var email = $("#email").val();
        var passwd = $("#passwd").val();

        if (email == "" || passwd == "")
            alert("Preencha os campos obrigatórios!");
        else {
            $.ajax({
                url: '../process/processesLogin.php',
                method: 'POST',
                data: {
                    login: 1,
                    type: "login",
                    emailPHP: email,
                    passwdPHP: passwd
                },
                success: function(response) {
                    $("#response").html(response);

                    if (response.indexOf('success') >= 0)
                        window.location = 'pagUsuario.php';
                },
                dataType: 'text'
            });
        }
    });
});