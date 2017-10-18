jQuery( document ).ready( function( $ ) {
  
// ########### Navigation ############
  
var $overlay = $('<div id="overlay"></div>')
$('body').append($overlay);

$('#collapse').removeClass('open');

$('.trigger').click(function(){
  $('#collapse').toggleClass('open');
  $overlay.toggleClass('show');
});

// Dropdown

var $subtrigger = $('<div class="sub-trigger"><span></span></div>')  
$('.menu-item-has-children').append($subtrigger);
  
$('.sub-trigger').click(function(){
  $(this).siblings(".sub-menu").toggleClass('open');
  $(this).toggleClass('open');
  $(this).siblings('a').toggleClass('active');
});

  
  

// ########### Wowshow ############

$('#wowshow .wow-prev').click(function(){

  //Capture current active classes
  var active = $("#wowshow .active");

  //Remove the slideshows active class
  $("#wowshow .active").removeClass("active");

  //Check if active has a following sibling
  if(active.prev().hasClass('wow-slide')) {

    var getLeft = parseInt($('#wowshow ol').css('left'));
    $('#wowshow ol').css({'left': getLeft + 480 + 'px'});

    active.prev().addClass('active');
  }
  //otherwise set the active class back onto the first slide
  else {
    $('#wowshow li:first').addClass('active');
  }

});

$('#wowshow .wow-next').click(function(){

    //Capture current active classes
    var active = $("#wowshow .active");

    //Remove the slideshows active class
    $("#wowshow .active").removeClass("active");

    //Check if active has a following sibling
    if(active.next().hasClass('wow-slide')) {

      var getLeft = parseInt($('#wowshow ol').css('left'));
      $('#wowshow ol').css({'left': getLeft - 480 + 'px'});

      active.next().addClass('active');
    }
    //otherwise set the active class back onto the last slide
    else {
      $('#wowshow li:last').addClass('active');
    }

});

// ########### Animation ############

$(window).scroll(function(){

  var wScroll = $(this).scrollTop();

  if( wScroll > $('#moving-line').offset().top - ($(window).height() / 1.5) ) {

    var height = wScroll - ( $('#moving-line').offset().top - ($(window).height() / 1.5) )

    $("#moving-line").css({'height': height +'px'});
  }

  // Animation Verständnis
  if( wScroll > $('#verstaendnis').offset().top - ($(window).height() / 1.5 ) ) {
    $('#verstaendnis').addClass('on');
  }

  if( wScroll < $('#verstaendnis').offset().top - ($(window).height() / 1.5) ) {
    $('#verstaendnis').removeClass('on');
    $("#moving-line").css({'height': '0px'});
  }

  // Animation Erkundung
  if( wScroll > $('#erkundung').offset().top - ($(window).height() / 1.5) ) {
    $('#erkundung').addClass('on');
  }

  if( wScroll < $('#erkundung').offset().top - ($(window).height() / 1.5) ) {
    $('#erkundung').removeClass('on');
  }

  // Animation Synthese
  if( wScroll > $('#synthese').offset().top - ($(window).height() / 1.5) ) {
    $('#synthese').addClass('on');
  }

  if( wScroll < $('#synthese').offset().top - ($(window).height() / 1.5) ) {
    $('#synthese').removeClass('on');
  }

  // Animation Ideen
  if( wScroll > $('#ideen').offset().top - ($(window).height() / 1.5) ) {
    $('#ideen').addClass('on');
  }

  if( wScroll < $('#ideen').offset().top - ($(window).height() / 1.5) ) {
    $('#ideen').removeClass('on');
  }

  // Animation Prototyp
  if( wScroll > $('#prototyp').offset().top - ($(window).height() / 1.5) ) {
    $('#prototyp').addClass('on');
  }

  if( wScroll < $('#prototyp').offset().top - ($(window).height() / 1.5) ) {
    $('#prototyp').removeClass('on');
  }

  // Animation Arrow
  if( wScroll > $('#arrow').offset().top - ($(window).height() / 1.5) ) {
    $('#arrow').addClass('on');
  }

  if( wScroll < $('#arrow').offset().top - ($(window).height() / 1.5) ) {
    $('#arrow').removeClass('on');
  }

  // Animation Test
  if( wScroll > $('#test').offset().top - ($(window).height() / 1.5) ) {
    $('#test').addClass('on');
  }

  if( wScroll < $('#test').offset().top - ($(window).height() / 1.5) ) {
    $('#test').removeClass('on');
  }

});

} );
