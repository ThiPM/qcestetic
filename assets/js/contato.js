$(document).ready(function(){
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