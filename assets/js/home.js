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

$("#bttn_vermais_quezia").click(function() {
  $("#bttn_vermais_quezia").hide();
  $("#txt_vermais_quezia").slideDown();
  $("#img_vermais_quezia").slideDown();
  $("#bttn_vermenos_quezia").show();
});
$("#bttn_vermenos_quezia").click(function() {
  $("#bttn_vermenos_quezia").hide();
  $("#txt_vermais_quezia").hide();
  $("#img_vermais_quezia").hide();
  $("#bttn_vermais_quezia").show();
});

$('#slide1').mouseenter(function() {
  $("html").css("cursor","pointer");
});
$('#slide1').click(function() {
  $("#desc_slide1").slideDown();
});
$('#slide2').mouseenter(function() {
  $("html").css("cursor","pointer");
});
$('#slide2').click(function() {
  $("#desc_slide2").slideDown();
});
$('#slide3').mouseenter(function() {
  $("html").css("cursor","pointer");
});
$('#slide3').click(function() {
  $("#desc_slide3").slideDown();
});
$('#slide4').mouseenter(function() {
  $("html").css("cursor","pointer");
});
$('#slide4').click(function() {
  $("#desc_slide4").slideDown();
});
$('#slide5').mouseenter(function() {
  $("html").css("cursor","pointer");
});
$('#slide5').click(function() {
  $("#desc_slide5").slideDown();
});
$('#demo').mouseout(function() {
  $("#desc_slide1").slideUp(800);
  $("#desc_slide2").slideUp(800);
  $("#desc_slide3").slideUp(800);
  $("#desc_slide4").slideUp(800);
  $("#desc_slide5").slideUp(800);
  $("html").css("cursor","default");
});


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

$("#bttn_saibamais_produto10").mouseenter(function() {
  $("#produto10").css("transform", "scale(1.050)");
});
$("#bttn_saibamais_produto10").mouseout(function() {
  $("#produto10").css("transform", "scale(1.0)");
});
$("#bttn_saibamais_produto10").click(function() {
  $("#bttn_saibamais_produto10").hide();
  $("#txt_saibamais_produto10").fadeIn();
  $("#bttn_saibamenos_produto10").show();
});
$("#bttn_saibamenos_produto10").click(function() {
  $("#txt_saibamais_produto10").fadeOut();
  $("#bttn_saibamenos_produto10").hide();
  $("#bttn_saibamais_produto10").show();
})

$("#bttn_saibamais_produto11").mouseenter(function() {
  $("#produto11").css("transform", "scale(1.050)");
});
$("#bttn_saibamais_produto11").mouseout(function() {
  $("#produto11").css("transform", "scale(1.0)");
});
$("#bttn_saibamais_produto11").click(function() {
  $("#bttn_saibamais_produto11").hide();
  $("#txt_saibamais_produto11").fadeIn();
  $("#bttn_saibamenos_produto11").show();
});
$("#bttn_saibamenos_produto11").click(function() {
  $("#txt_saibamais_produto11").fadeOut();
  $("#bttn_saibamenos_produto11").hide();
  $("#bttn_saibamais_produto11").show();
})

$("#bttn_saibamais_produto12").mouseenter(function() {
  $("#produto12").css("transform", "scale(1.050)");
});
$("#bttn_saibamais_produto12").mouseout(function() {
  $("#produto12").css("transform", "scale(1.0)");
});
$("#bttn_saibamais_produto12").click(function() {
  $("#bttn_saibamais_produto12").hide();
  $("#txt_saibamais_produto12").fadeIn();
  $("#bttn_saibamenos_produto12").show();
});
$("#bttn_saibamenos_produto12").click(function() {
  $("#txt_saibamais_produto12").fadeOut();
  $("#bttn_saibamenos_produto12").hide();
  $("#bttn_saibamais_produto12").show();
})

$("#bttn_maisprodutos_esteticos").click(function() {
  $("#bttn_maisprodutos_esteticos").hide();
  $("#produto7").slideDown();
  $("#produto8").slideDown();
  $("#produto9").slideDown();
  $("#produto10").slideDown();
  $("#produto11").slideDown();
  $("#produto12").slideDown();
});
$("#bttn_maisprodutos_corporal").click(function() {
  $("#bttn_maisprodutos_corporal").hide();
  $("#produto16").slideDown();
  $("#produto17").slideDown();
  $("#produto18").slideDown();
  $("#produto19").slideDown();
  $("#produto20").slideDown();
});


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