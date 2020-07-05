$(document).ready(function() {

  $('.menu-toggle').click(function(){
    $('.menu-toggle').toggleClass('active');
    $('nav').toggleClass('active');
    $('.header-right').toggleClass('slide-down');
    $('.main-nav').toggleClass('slide-down');
  });

  $('#appetizer').click(function() {
    if ($('#appetizer-content').is(':visible')){
      $('#appetizer-content').slideUp("slow");
    }
    else{
      $('#appetizer-content').slideDown("slow");
      $('#appetizer-content').attr("color", "red");
    }
  });

  $('#nigiri').click(function() {
    if ($('#nigiri-content').is(':visible')){
      $('#nigiri-content').slideUp("slow");
    }
    else{
      $('#nigiri-content').slideDown("slow");
    }
  });

  $('#street-food').click(function() {
    if ($('#street-food-content').is(':visible')){
      $('#street-food-content').slideUp("slow");
    }
    else{
      $('#street-food-content').slideDown("slow");
    }
  });

  $('#entree').click(function() {
    if ($('#entree-content').is(':visible')){
      $('#entree-content').slideUp("slow");
    }
    else{
      $('#entree-content').slideDown("slow");
    }
  });

  $('#kids').click(function() {
    if ($('#kids-content').is(':visible')){
      $('#kids-content').slideUp("slow");
    }
    else{
      $('#kids-content').slideDown("slow");
    }
  });

  $('#rolls').click(function() {
    if ($('#rolls-content').is(':visible')){
      $('#rolls-content').slideUp("slow");
    }
    else{
      $('#rolls-content').slideDown("slow");
    }
  });

  $('#ksr').click(function() {
    if ($('#ksr-content').is(':visible')){
      $('#ksr-content').slideUp("slow");
    }
    else{
      $('#ksr-content').slideDown("slow");
    }
  });

  $('#sides').click(function() {
    if ($('#sides-content').is(':visible')){
      $('#sides-content').slideUp("slow");
    }
    else{
      $('#sides-content').slideDown("slow");
    }
  });

  $('#alcohol').click(function() {
    if ($('#alcohol-content').is(':visible')){
      $('#alcohol-content').slideUp("slow");
    }
    else{
      $('#alcohol-content').slideDown("slow");
    }
  });

  $('#bnd').click(function() {
    if ($('#bnd-content').is(':visible')){
      $('#bnd-content').slideUp("slow");
    }
    else{
      $('#bnd-content').slideDown("slow");
    }
  });
});
