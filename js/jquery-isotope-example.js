// jquery-isotope-example.js
// jQuery.fn.center = function () {
//     this.css("position","absolute");
//     this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) + 
//                                                 $(window).scrollTop()) + "px");
//     this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) + 
//                                                 $(window).scrollLeft()) + "px");
//     return this;
// }


$(document).ready(init);



function init() {

	var things = $('#things');
	var filters = {};
	
	things.isotope({
		itemSelector : '.thing'
		
	});

// 	$( ".thing a" ).hover(
// 	  function() {
// 	    $( this ).addClass( "things_overlay" );
// 	  }, 
// 	  function() {
// 	    $( this ).removeClass( "things_overlay" );
// 	  }
// );
}



