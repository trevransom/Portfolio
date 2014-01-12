$(window).load(function() {
  $("#stream").show();
});

$(window).load(function() {
  // When the page has loaded
  $("#loading").fadeOut(1000);
  $(".album_desc_container").fadeIn(2000);
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
    var nav = $('#navbar li').slice(2, 7);
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
  });
});

// $(document).ready(function(){

//   var topRange      = 200,  // measure from the top of the viewport to X pixels down
//     edgeMargin    = 20,   // margin above the top or margin from the end of the page
//     animationTime = 1000, // time in milliseconds
//     contentTop = [];

//   // Stop animated scroll if the user does something
//   $('html,body').bind('scroll mousedown DOMMouseScroll mousewheel keyup', function(e){
//     if ( e.which > 0 || e.type == 'mousedown' || e.type == 'mousewheel' ){
//      $('html,body').stop();
//     }
//   });

//   // Set up content an array of locations
//   $('.scrolling_options').find('a').each(function(){
//     contentTop.push( $( $(this).attr('href') ).offset().top );
//   });

//   // Animate menu scroll to content
//   $('.scrolling_options').find('a').click(function(){
//    var sel = this,
//        newTop = Math.min( contentTop[ $('.scrolling_options a').index( $(this) ) ], $(document).height() - $(window).height() ); // get content top or top position if at the document bottom
//    $('html,body').stop().animate({ 'scrollTop' : newTop }, animationTime, function(){
//     window.location.hash = $(sel).attr('href');
//    });
//    return false;
//   });

//   // // adjust side menu
//   // $(window).scroll(function(){
//   // var winTop = $(window).scrollTop(),
//   //     bodyHt = $(document).height(),
//   //     vpHt = $(window).height() + edgeMargin;  // viewport height + margin
//   // $.each( contentTop, function(i,loc){
//   //  if ( ( loc > winTop - edgeMargin && ( loc < winTop + topRange || ( winTop + vpHt ) >= bodyHt ) ) ){
//   //   $('.scrolling_options li a')
//   //    .removeClass('selected')
//   //    .eq(i).addClass('selected');
//   //  }
//   // });
//   // });

// });


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







