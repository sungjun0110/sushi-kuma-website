$(document).ready(function() {

  setTimeout(showSlides, 5000);

  $('.menu-toggle').click(function(){
    $('.menu-toggle').toggleClass('active');
    $('nav').toggleClass('active');
    $('.header-right').toggleClass('slide-down');
    $('.main-nav').toggleClass('slide-down');
  });

  $('#slide1').click(function(){
    window.location.href = 'http://localhost/wordpress/find-us/';
  });

  $('#slide2').click(function(){
    window.location.href = 'http://localhost/wordpress/menu/';
  });

  var slideIndex = 0;
  function showSlides() {
    if (slideIndex == 0) {
      slideIndex ++;
      $('#r1').prop('checked', false);
      $('#r2').prop('checked', true);
      $('.circle').toggleClass('checked');
    }
    else {
      slideIndex --;
      $('#r1').prop('checked', true);
      $('#r2').prop('checked', false);
      $('.circle').toggleClass('checked');
    }
    setTimeout(showSlides, 5000);
  };

  $('.circle').click(function(){
    $('.circle').removeClass('checked');
    $(this).toggleClass('checked');
    if (slideIndex == 0) {
      slideIndex ++;
    }
    else{
      slideIndex --;
    }
  });

  var menuCats = document.getElementsByClassName('menu-category');
  var i;

  $('.menu-category').click(function() {
    var name = this.id;
    name = "#".concat(name, "-content");
    if ($(name).is(":visible")){
      $(name).slideUp("slow");
    }
    else {
      $(name).slideDown("slow");
    }

    $(this).toggleClass("active");
  });
});
