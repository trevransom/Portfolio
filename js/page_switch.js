$(function()
{
	var urls = [
		"/Portfolio/work/trevransom",
		"/Portfolio/work/souleader",
		"/Portfolio/work/trevransom"
	];

	// $('.projects').load(urls[1]).fadeIn(300);

	var i = 1;
	$('#right_arrow_port').click(function()
	{

		$('.projects').fadeOut(300, function (){
			$('.projects').load(urls[i+1]).fadeIn(300);
			i++;
			window.scrollTo(0,0);
			if (i>urls.length-2){
				i = 0;
			}
		});
	});

	$('#left_arrow_port').click(function()
	{
		$('.projects').fadeOut(300, function (){
			if (i==0){ 
				i = urls.length-1;
			}
			$('.projects').load(urls[i-1]).fadeIn(300);
			window.scrollTo(0,0);
			i--;
			
		});
	});
});

$(function() {
	$(".bg").css('position', 'fixed');
});

$(document).ready(function(){
   $(window).bind('scroll', function() {
    var navHeight = $( window ).height()-88;
        if ($(window).scrollTop() > navHeight) {
		 	$('.souleader_second_panel').addClass('fixed');
		 	$('.souleader_descrip').fadeOut(500);
		}
		else {
		 	$('.souleader_second_panel').removeClass('fixed');
		 	$('.souleader_descrip').fadeIn(800);
		}
    });
});

$(function(){
  $('#portfolio_hidden').fadeIn(700);
});

$(function(){
  $('.visit').hover(function(){
  	$(this).toggleClass('visit_hover', 500, 'easeOutCirc');
  });
});

$(function(){
  $('#souleader_link').hover(function(){
  	$(this).toggleClass('souleader_link_hover', 800, 'easeOutCirc');
  });
});


// $(function(){
// 	var change = $("#switch_page_icon i");
// 	change.hover(function(){
// 		$(this).toggleClass('arrow_hover', 200);
// 	});
// });