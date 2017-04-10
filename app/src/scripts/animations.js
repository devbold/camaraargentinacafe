// -------------------------
// ANIMATIONS
// -------------------------

// Variables
// Calc Window Height
var winHeight = $(window).height();
var docHeight = $(document).height();
var mq = window.matchMedia("(max-width: 768px)").matches;

$(document).ready(function(){

  // Loader
  $(window).load(function() {
    $(".loader").fadeOut(600);
    $('#page-content-wrapper').fadeIn(600);
  })

  // Sidebar Wrapper TOGGLE
  $(".navbar-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("sidebar-toggle");
      $('.social-block').fadeToggle();
  });
  $("#sidebar-closebox").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("sidebar-toggle");
      $('.social-block').fadeToggle();
  });
  
  // Go to SIDEBAR
  function scrollToAnchor(aid){
     var aTag = $("#"+ aid);
     $('html,body').animate({scrollTop: aTag.offset().top-100},'slow');
  }

  $('.gotop').click(function(){
    scrollToAnchor('wrapper');
  });

  // Scroll transition
    $(function(){
      var hasBeenTrigged = false;
      $(window).scroll(function() {
        if(mq){
          if ($(this).scrollTop() >= 230 && !hasBeenTrigged) {
            $('#navbar').addClass('navbar-shrink');
            hasBeenTrigged = true;
          }else if(($(this).scrollTop() <= 230)){
            $('#navbar').removeClass('navbar-shrink');
            hasBeenTrigged = false;
          }
        }else{
          if ($(this).scrollTop() >= 530 && !hasBeenTrigged) {
            $('#navbar').addClass('navbar-shrink');
            hasBeenTrigged = true;
          }else if(($(this).scrollTop() <= 530)){
            $('#navbar').removeClass('navbar-shrink');
            hasBeenTrigged = false;
          }
        }
      });
    });
  
  // Calc Window Height
  $('.height-calc').css('height', winHeight);

  // CirclePointer
  $(".go-top--section").mouseenter(
    function() {
      console.log("hasBeenTrigged");
      $('.circle-pointer').toggleClass("slideDown");
    }
  );  

  // Slick Slider
  $('.slick-slider--01').slick({
    dots: true,
    lazyLoad: 'ondemand',
    fade: false,
    cssEase: 'ease-in-out',
    infinite: false,
    speed: 500,
    arrows: false,
    accessibility: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.slick-slider--02'
  });

  $('.slick-slider--02').slick({
    dots: false,
    lazyLoad: 'ondemand',
    fade: false,
    cssEase: 'ease-in-out',
    infinite: false,
    speed: 500,
    arrows: false,
    accessibility: false,
    slidesToShow: 1,
    slidesToScroll: 1
  });

  
});


