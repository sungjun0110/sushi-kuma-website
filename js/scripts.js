$(document).ready(function() {
  $('.menu-toggle').click(function(){
    $('.menu-toggle').toggleClass('active');
    $('nav').toggleClass('active');
    $('.header-right').toggleClass('slide-down');
    $('.main-nav').toggleClass('slide-down');
  })
})
