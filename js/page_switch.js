$(function(){
  $('#portfolio_hidden').fadeIn(700);
});

$(function()
{
	var souleader = $('#souleader_project');
	var trevransom = $('#trevransom_project');
	souleader.hide();
	trevransom.hide();

	var urls = [
		souleader,
		trevransom,
		souleader
	];

	var i = 1;
	$(urls[i]).fadeIn(300);
	console.log(i);
	$('#right_arrow_port').click(function()
	{
		$(urls[i]).fadeOut(200, function (){
			$(urls[i+1]).fadeIn(300);
			i++;
			window.scrollTo(0,0);
			if (i>urls.length-2){
				i = 0;
			}
		});
	});

	$('#left_arrow_port').click(function()
	{
		$(urls[i]).fadeOut(200, function (){
			if (i==0){ 
				i = urls.length-1;
			}
			$(urls[i-1]).fadeIn(300);
			window.scrollTo(0,0);
			i--;
		});
	});
});

$(function() {
	$(".bg").css('position', 'fixed');
});

$(document).ready(function(){
   $(window).on('scroll', function() {
    var navHeight = $( window ).height()-88;
        if ($(window).scrollTop() > navHeight) {
		 	$('.souleader_second_panel').addClass('fixed');
		 	$('.first_panel').fadeOut(500);
		}
		else {
		 	$('.souleader_second_panel').removeClass('fixed');
		 	$('.first_panel').fadeIn(800);
		}
    });
});

$(document).ready(function(){
   $(window).on('scroll', function() {
    var navHeight = $( window ).height()-88;
        if ($(window).scrollTop() > navHeight) {
		 	$('.trevransom_second_panel').addClass('fixed');
		 	$('.first_panel').fadeOut(500);
		}
		else {
		 	$('.trevransom_second_panel').removeClass('fixed');
		 	$('.first_panel').fadeIn(800);
		}
    });
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

$(function(){
	$("#switch_page_icon i").hover(function(){
		$(this).toggleClass('arrow_hover', 200);
	});
});