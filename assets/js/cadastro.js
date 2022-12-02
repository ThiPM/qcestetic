$(document).ready(function() {
  $("#btnFecharModal").on('click', function() {
    $("#modalCamposObrigatorios").modal("hide");
});

    var $progress         = $('#progress'), // Barra de Progresso.
      $progressElements = $('.campos'), // Elementos que devem ser checados
                                          // para modificar o valor da barra.
      TOTAL             = $progressElements.length; // Total de elementos.

  
  $progressElements.on('blur, change', function() {
    
    // Faz um filtro com o total elementos válidos.
    // Nesse caso, campos que não estejam "em branco" e que não estejam marcados
    // como ':invalid'.
    var valid = $progressElements.filter(function() {
      return ($(this).val() || $(this).prop('checked')) && !$(this).is(':invalid');
    }).length;
    
    // Calcula a porcentagem e altera o valor da barra.
    var percent = (valid * 100) / TOTAL,
        current = $progress.val();
    
    var increase = percent > current;
        
    var transition = setInterval(function(){
      if((increase && current >= percent) ||
        (!increase && current <= percent))
          clearInterval(transition);
      
      var value = $progress.val();
      value = increase ? value+1 : value-1;
      current = value;
      
      $progress.val(current);
    }, 10);    
  });

    $("#btnCadastro").on('click', function() {
        var nome = $("#nome").val();
        var email = $("#email").val();
        var end = $("#end").val();
        var cep = $("#cep").val();
        var cidade = $("#cidade").val();
        var telefone = $("#telefone").val();
        var bairro = $("#bairro").val();

        if (nome == "" || email == "" || end == "" || cep == "" || cidade == "" || telefone == "" || bairro == "")
        $("#modalCamposObrigatorios").modal("show");
        else {
            $.ajax({
                url: '../process/processesCadastro.php',
                method: 'POST',
                data: {
                    login: 1,
                    type: "cadastro",
                    nomePHP: nome,
                    emailPHP: email,
                    endPHP: end,
                    cepPHP: cep,
                    cidadePHP: cidade,
                    telefonePHP: telefone,
                    bairroPHP: bairro
                },
                success: function(response) {
                    $("#response").html(response);

                    if (response.indexOf('success') >= 0)
                     $("#cadastroModal").modal('show');
                },
                dataType: 'text'
            });
        }
    });
});