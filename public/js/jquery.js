$(document).ready(function(){
  $("#levanta-chats").click(function(){
    $(".list-chats").slideToggle();
    $("#abaixa-chats").show();
    $("#levanta-chats").hide();
  });

  $("#abaixa-chats").click(function(){
    $(".list-chats").slideToggle();
    $("#levanta-chats").show();
    $("#abaixa-chats").hide();
  });

  $("#show").click(function(){
    $("p").show();
  });
});