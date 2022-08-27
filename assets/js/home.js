function entrou_carrossel() {
  document.getElementById("botao_anterior").style.display = "block";
  document.getElementById("botao_proxima").style.display = "block";
}
function saiu_carrossel() {
  document.getElementById("botao_anterior").style.display = "none";
  document.getElementById("botao_proxima").style.display = "none";
}

$(document).ready(function(){
$("#img_entrada").hide();  
$("#img_entrada").fadeIn(2000);


$("#bttn_saibamais_produto1").mouseenter(function() {
  $("#produto1").css("transform", "scale(1.050)");
});
$("#bttn_saibamais_produto1").mouseout(function() {
  $("#produto1").css("transform", "scale(1.0)");
});
$("#bttn_saibamais_produto1").click(function() {
  $("#bttn_saibamais_produto1").hide();
  $("#txt_saibamais_produto1").fadeIn();
  $("#bttn_saibamenos_produto1").show();
});
$("#bttn_saibamenos_produto1").click(function() {
  $("#txt_saibamais_produto1").fadeOut();
  $("#bttn_saibamenos_produto1").hide();
  $("#bttn_saibamais_produto1").show();
});

$("#bttn_saibamais_produto2").mouseenter(function() {
  $("#produto2").css("transform", "scale(1.050)");
});
$("#bttn_saibamais_produto2").mouseout(function() {
  $("#produto2").css("transform", "scale(1.0)");
});
$("#bttn_saibamais_produto2").click(function() {
  $("#bttn_saibamais_produto2").hide();
  $("#txt_saibamais_produto2").fadeIn();
  $("#bttn_saibamenos_produto2").show();
});
$("#bttn_saibamenos_produto2").click(function() {
  $("#txt_saibamais_produto2").fadeOut();
  $("#bttn_saibamenos_produto2").hide();
  $("#bttn_saibamais_produto2").show();
});

$("#bttn_saibamais_produto3").mouseenter(function() {
  $("#produto3").css("transform", "scale(1.050)");
});
$("#bttn_saibamais_produto3").mouseout(function() {
  $("#produto3").css("transform", "scale(1.0)");
});
$("#bttn_saibamais_produto3").click(function() {
  $("#bttn_saibamais_produto3").hide();
  $("#txt_saibamais_produto3").fadeIn();
  $("#bttn_saibamenos_produto3").show();
});
$("#bttn_saibamenos_produto3").click(function() {
  $("#txt_saibamais_produto3").fadeOut();
  $("#bttn_saibamenos_produto3").hide();
  $("#bttn_saibamais_produto3").show();
});

$("#bttn_saibamais_produto4").mouseenter(function() {
  $("#produto4").css("transform", "scale(1.050)");
});
$("#bttn_saibamais_produto4").mouseout(function() {
  $("#produto4").css("transform", "scale(1.0)");
});
$("#bttn_saibamais_produto4").click(function() {
  $("#bttn_saibamais_produto4").hide();
  $("#txt_saibamais_produto4").fadeIn();
  $("#bttn_saibamenos_produto4").show();
});
$("#bttn_saibamenos_produto4").click(function() {
  $("#txt_saibamais_produto4").fadeOut();
  $("#bttn_saibamenos_produto4").hide();
  $("#bttn_saibamais_produto4").show();
});

$("#bttn_saibamais_produto5").mouseenter(function() {
  $("#produto5").css("transform", "scale(1.050)");
});
$("#bttn_saibamais_produto5").mouseout(function() {
  $("#produto5").css("transform", "scale(1.0)");
});
$("#bttn_saibamais_produto5").click(function() {
  $("#bttn_saibamais_produto5").hide();
  $("#txt_saibamais_produto5").fadeIn();
  $("#bttn_saibamenos_produto5").show();
});
$("#bttn_saibamenos_produto5").click(function() {
  $("#txt_saibamais_produto5").fadeOut();
  $("#bttn_saibamenos_produto5").hide();
  $("#bttn_saibamais_produto5").show();
});

$("#bttn_saibamais_produto6").mouseenter(function() {
  $("#produto6").css("transform", "scale(1.050)");
});
$("#bttn_saibamais_produto6").mouseout(function() {
  $("#produto6").css("transform", "scale(1.0)");
});
$("#bttn_saibamais_produto6").click(function() {
  $("#bttn_saibamais_produto6").hide();
  $("#txt_saibamais_produto6").fadeIn();
  $("#bttn_saibamenos_produto6").show();
});
$("#bttn_saibamenos_produto6").click(function() {
  $("#txt_saibamais_produto6").fadeOut();
  $("#bttn_saibamenos_produto6").hide();
  $("#bttn_saibamais_produto6").show();
});

$("#bttn_saibamais_produto7").mouseenter(function() {
  $("#produto7").css("transform", "scale(1.050)");
});
$("#bttn_saibamais_produto7").mouseout(function() {
  $("#produto7").css("transform", "scale(1.0)");
});
$("#bttn_saibamais_produto7").click(function() {
  $("#bttn_saibamais_produto7").hide();
  $("#txt_saibamais_produto7").fadeIn();
  $("#bttn_saibamenos_produto7").show();
});
$("#bttn_saibamenos_produto7").click(function() {
  $("#txt_saibamais_produto7").fadeOut();
  $("#bttn_saibamenos_produto7").hide();
  $("#bttn_saibamais_produto7").show();
});


$("#bttn_saibamais_produto8").mouseenter(function() {
  $("#produto8").css("transform", "scale(1.050)");
});
$("#bttn_saibamais_produto8").mouseout(function() {
  $("#produto8").css("transform", "scale(1.0)");
});
$("#bttn_saibamais_produto8").click(function() {
  $("#bttn_saibamais_produto8").hide();
  $("#txt_saibamais_produto8").fadeIn();
  $("#bttn_saibamenos_produto8").show();
});
$("#bttn_saibamenos_produto8").click(function() {
  $("#txt_saibamais_produto8").fadeOut();
  $("#bttn_saibamenos_produto8").hide();
  $("#bttn_saibamais_produto8").show();
});

$("#bttn_saibamais_produto9").mouseenter(function() {
  $("#produto9").css("transform", "scale(1.050)");
});
$("#bttn_saibamais_produto9").mouseout(function() {
  $("#produto9").css("transform", "scale(1.0)");
});
$("#bttn_saibamais_produto9").click(function() {
  $("#bttn_saibamais_produto9").hide();
  $("#txt_saibamais_produto9").fadeIn();
  $("#bttn_saibamenos_produto9").show();
});
$("#bttn_saibamenos_produto9").click(function() {
  $("#txt_saibamais_produto9").fadeOut();
  $("#bttn_saibamenos_produto9").hide();
  $("#bttn_saibamais_produto9").show();
})

$("#campo_nome").focus(function(){
  document.getElementById("campo_nome").style.border = "rgba(139,0,139,1) solid 2px";
});
$("#campo_nome").blur(function(){
  document.getElementById("campo_nome").style.border = "#5c5c5c solid 1px";
});
$("#campo_email").focus(function(){
  document.getElementById("campo_email").style.border = "rgba(139,0,139,1) solid 2px";
});
$("#campo_email").blur(function(){
  document.getElementById("campo_email").style.border = "#5c5c5c solid 1px";
});
$("#campo_msg").focus(function(){
  document.getElementById("campo_msg").style.border = "rgba(139,0,139,1) solid 2px";
});
$("#campo_msg").blur(function(){
  document.getElementById("campo_msg").style.border = "#5c5c5c solid 1px";
});
});