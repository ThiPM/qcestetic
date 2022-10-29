$(document).ready(function(){
  $("#btnDeletarConta").css("display","none");

  $("#btnLogoff").on('click', function() {
    window.location.href = "logout.php";
   });

   $("#descollapse_painel_button").css("display", "none");

    $('#collapse_painel_button').mouseenter(function() {
      $("html").css("cursor","pointer");
    });
  
    $("#collapse_painel_button").mouseout(function() {
      $("html").css("cursor","default");
    });
  
    $("#collapse_painel_button").click(function() {
      $("#collapse_painel_button").hide();
      $("#descollapse_painel_button").show();
      $("#collapse_painel_button").slideUp();
      $("#painel").slideDown();
    });
  
    $("#descollapse_painel_button").click(function() {
      $("#btnDeletarConta").hide();
      $("#btnMoreConfig").show();
      $("#descollapse_painel_button").hide();
      $("#collapse_painel_button").show();
      $("#collapse_painel_button").slideDown();
      $("#painel").hide();
    });
  
    $("#btnTrocaSenha").on('click', function() {
      $("#troca_senhaModal").slideDown();
      $("#btnTrocaSenha").slideUp();
    });

    $("#btnMoreConfig").on('click', function() {
      $("#btnDeletarConta").show();
    });

    $("#btnTrocaSenhaModal").on('click', function() {
      var email = $("#email").val();
      var senha1 = $("#novaSenha").val();
      var senha2 = $("#novaSenha_confirm").val();
      if (email == "" || senha1 == "" || senha2 == "")
          alert("Preencha os campos obrigatórios!");
      else {
          $.ajax({
              url: '../process/processesAlterarSenha.php',
              method: 'POST',
              data: {
                  login: 1,
                  type: "text",
                  emailPHP: email,
                  senha1PHP: senha1,
                  senha2PHP: senha2
              },
              success: function(response) {
                  $("#response").html(response);

                  if (response.indexOf('success') >= 0)
                  $("#trocaSenhaModalConfirm").modal('show');
              },
              dataType: 'text'
          });
      }
      });

      $("#btnDeletarConta").on('click', function() {
            var email_delete = $("#email").val();
            
            $.ajax({
                url: '../process/processesDeletarConta.php',
                method: 'POST',
                data: {
                    login: 1,
                    type: "text",
                    emailPHP_delete: email_delete
                },
                success: function(response) {
                    $("#response").html(response);
  
                    if (response.indexOf('success') >= 0);
                    $("#deletarContaModalConfirm").modal('show');
                },
                dataType: 'text'
            });
      });
      
  });