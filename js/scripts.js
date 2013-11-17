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

// function adjustStyle(width) {
//     width = parseInt(width);
//     if (width < 500) {
//         $("#size-stylesheet").attr("href", "css/narrow.css");
//     } else if ((width >= 500) && (width < 900)) {
//         $("#size-stylesheet").attr("href", "css/medium.css");
//     } else {
//        $("#size-stylesheet").attr("href", "css/wide.css"); 
//     }
// }

// $(function() {
//     adjustStyle($(this).width());
//     $(window).resize(function() {
//         adjustStyle($(this).width());
//     });
// });

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