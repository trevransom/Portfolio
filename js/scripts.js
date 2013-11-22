$(window).scroll(function(e){
  parallax();
});

function parallax(){
  var scrolled = $(window).scrollTop();
  $('.bg').css('top', -(scrolled*0.4)+'px');
  // $('.album_cover_image').css('top', -(scrolled*0.4)+'px');
}

$(window).load(function() {
  // When the page has loaded
  $("#soundcloud_player").show();
});

function adjustStyle(width) {
    width = parseInt(width);
    if (width < 500) {
        $("#size-stylesheet").attr("href", "/Portfolio/css/narrow.css");
    } else if ((width >= 500) && (width < 900)) {
        $("#size-stylesheet").attr("href", "/Portfolio/css/medium.css");
    } else {
       $("#size-stylesheet").attr("href", "/Portfolio/css/wide.css"); 
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