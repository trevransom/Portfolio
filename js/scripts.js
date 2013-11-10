$(window).scroll(function(e){
  parallax();
});

function parallax(){
  var scrolled = $(window).scrollTop();
  $('#bg').css('top', -(scrolled*0.4)+'px');
}

$(window).load(function() {
  // When the page has loaded
  $("#soundcloud_player").show();
});


function slider() {
       $('#slider').fadeOut('slow', function(){
          $('#slider').fadeIn('slow');
      });
}