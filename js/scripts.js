$(window).load(function() {
  $("#stream").show();
});

$(window).load(function() {
  // When the page has loaded
  $("#loading").fadeOut(1000);
  $(".album_desc_container").fadeIn(2000);
});

$(function(){
  $('#navbar li a').hover(function(){
    $(this).toggleClass('navbar_hover', 100);
  });
});

$('#hover_area')
  .on('mouseover', function(){
      $('#small_nav').show("slide", 300);
  })
  .on('mouseleave', function(){
      $('#small_nav').hide("slide", 300);
  });

$('#hover_area').click(function(){
    $('#small_nav').toggle("slide", 300);
});

function adjustStyle(width) {
    var nav = $('#navbar li').slice(2, 11);
    width = parseInt(width);
    if (width < 500) {
        $("#size-stylesheet").attr("href", "/Portfolio/css/narrow.css");
        nav.hide();
    } 
    else if ((width >= 500) && (width < 900)) {
        $("#size-stylesheet").attr("href", "/Portfolio/css/medium.css");
        nav.hide();
    } 
    else {
       $("#size-stylesheet").attr("href", "/Portfolio/css/wide.css"); 
       nav.show();
    }
}

$(function() {
    adjustStyle($(this).width());
    $(window).resize(function() {
        adjustStyle($(this).width());
    });
});

$( "#plus" ).click(function() {
  $( ".settings" ).fadeToggle( "medium" );
  $("#minus").slideToggle("medium");
  $("#plus").slideToggle("medium");
});

$( "#minus" ).click(function() {
  $( ".settings" ).fadeToggle( "medium" );
  $("#minus").slideToggle("medium");
  $("#plus").slideToggle("medium");
});

$(document).ready(function(){

  var title = $('.scroll_options_title');
  title.addClass('hide');

  $('.scrolling_options li').hover(function() {
      $(this).find(title).toggle('slide', { direction: 'right' }, 200);
  });

  $('.scrolling_options').hover(function(){
      $('.scroll_background').fadeToggle(200);
      $('.scroll_background_projects').fadeToggle(200);
  });
});

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top-20
        }, 1000);
        return false;
      }
    }
  });
});

$(document).ready(function(){
  $('.contact_position').fadeIn(700);
});

$(function() {
  var icon = $('#icons');
  icon.hover(function(){
    $("#icons a").toggle('fade', { direction: 'right' }, 100);
  });
});