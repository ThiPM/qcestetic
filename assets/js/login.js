$(document).ready(function() {
    $('#hidePass').hide();

    $("#btnFecharModal").on('click', function() {
        $("#modalCamposObrigatorios").modal("hide");
    });

    $("#btnLoginAdmin").on('click', function() {
        var email = $("#email").val();
        var passwd = $("#passwd").val();

        if (email == "" || passwd == "")
            $("#modalCamposObrigatorios").modal("show");
        else {
            $.ajax({
                url: '../process/processesLoginAdmin.php',
                method: 'POST',
                data: {
                    login_admin: 1,
                    emailPHP: email,
                    passwdPHP: passwd
                },
                success: function(response) {
                    $("#response").html(response);

                    if (response.indexOf('success') >= 0)
                        window.location = 'hiddenPage.php';
                },
                dataType: 'text'
            });
        }
    });

    $("#btnLogin").on('click', function() {
        var email = $("#email").val();
        var passwd = $("#passwd").val();

        if (email == "" || passwd == "")
            $("#modalCamposObrigatorios").modal("show");
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

  $('#showPass').on('click', function(){
     
    var passwordField = $('#passwd');

    var passwordFieldType = passwordField.attr('type');
 
    if(passwordFieldType == 'password')
    {
        passwordField.attr('type', 'text');
        $('#showPass').hide();
        $('#hidePass').show();
    };
  });

  $('#hidePass').on('click', function(){
     
    var passwordField = $('#passwd');

    var passwordFieldType = passwordField.attr('type');
 
    if(passwordFieldType == 'text')
    {
        passwordField.attr('type', 'password');
        $('#hidePass').hide();
        $('#showPass').show();
    };
  });
});