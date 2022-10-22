$(document).ready(function(){

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
      $("#descollapse_painel_button").hide();
      $("#collapse_painel_button").show();
      $("#collapse_painel_button").slideDown();
      $("#painel").hide();
    });
  
    $("#btnTrocaSenha_painel").on('click', function() {
      $("#troca_senhaModal_painel").slideDown();
      $("#troca_senha_painel").slideUp();
    });

    $("#btnTrocaSenha").on('click', function() {
      $("#troca_senhaModal").slideDown();
      $("#troca_senha").slideUp();
    });
  });