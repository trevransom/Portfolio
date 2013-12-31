$(window).load(function() {
  $("#stream").show();
});

$(window).load(function() {
  // When the page has loaded
  $("#loading").fadeOut(1000);
  $(".album_desc_container").fadeIn(2000);
});

function adjustStyle(width) {
    width = parseInt(width);
    if (width < 600) {
        $("#size-stylesheet").attr("href", "/Portfolio/css/narrow.css");
    } else if ((width >= 600) && (width < 900)) {
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
  
$(document).ready(function(){
  $('a[href^="#"]').on('click',function (e) {
      e.preventDefault();

      var target = this.hash,
      $target = $(target);

      $('html, body').stop().animate({
          'scrollTop': $target.offset().top
      }, 900, 'swing', function () {
          window.location.hash = target;
      });
  });
});

$(document).ready(function(){
 $(window).scroll(function(){
  // get the height of #wrap
  var h = $(window).height();
  var y = $(window).scrollTop();
  if( y > (h*0.05) && y < (h*0.75) ){
   // if we are show keyboardTips
   // $("#tips").fadeIn("slow");
   $(".scrolling_option li:first-child").css("text-decoration", "underline");
  } else {
   $(".scrolling_option li:first-child").css("text-decoration", "underline");
  }
 });
});

// $(document).ready(function(){
//   $( ".scrolling_option" ).on( "mouseover", function() {
//     $( "li a" ).css( "text-decoration", "underline" );
//   });
// });

var topRange      = 200,  // measure from the top of the viewport to X pixels down
    edgeMargin    = 20,   // margin above the top or margin from the end of the page
    animationTime = 1200, // time in milliseconds
    contentTop = [];

$(document).ready(function(){
   // Stop animated scroll if the user does something
   $('html,body').bind('scroll mousedown DOMMouseScroll mousewheel keyup', function(e){
    if ( e.which > 0 || e.type == 'mousedown' || e.type == 'mousewheel' ){
     $('html,body').stop();
    }
   });

   // Set up content an array of locations
   $('.scrolling_options').find('a').each(function(){
    contentTop.push( $( $(this).attr('href') ).offset().top );
   });

   // Animate menu scroll to content
    $('.scrolling_options').find('a').click(function(){
     var sel = this,
         newTop = Math.min( contentTop[ $('.scrolling_options a').index( $(this) ) ], $(document).height() - $(window).height() ); // get content top or top position if at the document bottom
     $('html,body').stop().animate({ 'scrollTop' : newTop }, animationTime, function(){
      window.location.hash = $(sel).attr('href');
     });
     return false;
   });

   // adjust side menu
   $(window).scroll(function(){
    var winTop = $(window).scrollTop(),
        bodyHt = $(document).height(),
        vpHt = $(window).height() + edgeMargin;  // viewport height + margin
    $.each( contentTop, function(i,loc){
     if ( ( loc > winTop - edgeMargin && ( loc < winTop + topRange || ( winTop + vpHt ) >= bodyHt ) ) ){
      $('.scrolling_options li a')
       .removeClass('selected')
       .eq(i).addClass('selected');
     }
    });
   });

});


