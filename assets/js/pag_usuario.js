$(document).ready(function(){
  $("#btnTrocaSenha").css("display","none");
  $("#btnDeletarConta").css("display","none");
  $("#descollapse_painel_button").css("display", "none");

  $("#btnFecharModal").on('click', function() {
    $("#modalCamposObrigatorios").modal("hide");
  });

  $("#btnLogoff").on('click', function() {
    window.location.href = "logout.php";
   });

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
      $("#troca_senhaModal").hide();
      $("#btnTrocaSenha").show();
      $("#form_deletarConta").hide();
      $("#btnDeletarConta").hide();
      $("#btnTrocaSenha").hide();
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
      $("#btnTrocaSenha").toggle();
      $("#btnDeletarConta").toggle();
    });

    $("#btnTrocaSenhaModal").on('click', function() {
      var email = $("#email").val();
      var senha1 = $("#novaSenha").val();
      var senha2 = $("#novaSenha_confirm").val();
      if (email == "" || senha1 == "" || senha2 == "")
              $("#modalCamposObrigatorios").modal("show");
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
                  $("#response1").html(response);

                  if (response.indexOf('success') >= 0)
                  $("#trocaSenhaModalConfirm").modal('show');
              },
              dataType: 'text'
          });
      }
      });

      $("#btnDeletarConta").on('click', function() {
        $("#btnMoreConfig").hide();
        $("#form_deletarConta").slideDown();
        $("#btnDeletarConta").slideUp();
      });

      $("#btnDeletarConta_confirm").on('click', function() {
      var email_delete = $("#email").val();
      var codigo_delete = $("#codigoDeletar").val();
      var codigo_delete_confirm = $("#codigoDeletar_confirm").val();

            $.ajax({
                url: '../process/processesDeletarConta.php',
                method: 'POST',
                data: {
                    login: 1,
                    type: "text",
                    emailPHP_delete: email_delete,
                    codigoPHP_delete: codigo_delete,
                    codigoPHP_delete_confirm: codigo_delete_confirm
                },
                success: function(response) {
                    $("#response2").html(response);

                    if (response.indexOf('success') >= 0)
                    window.location.href = "logout.php";
                },
                dataType: 'text'
            });
          });

          $("#fotografia").change(function( event ){
            var file = event.target.files[0];
            var fd = new FormData();
            fd.append("fotografia", file);
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
              if(xmlhttp.readyState === 4 & xmlhttp.status === 200)
                $("#trocaFotoModal").modal("show");
            };
              xmlhttp.open("POST", "upload.php", true);
              xmlhttp.send(fd);
          });
        
          $("#btnFecharFotoModal").click(function() {
            $("#trocaFotoModal").modal("hide");
          });
         
  });